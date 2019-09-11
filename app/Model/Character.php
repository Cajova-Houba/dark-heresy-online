<?php
/**
 * Created by PhpStorm.
 * User: zdenda
 * Date: 10.9.2019
 * Time: 16:10
 */

namespace App\Model;

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Log;

/**
 * Playable character.
 *
 * @property string $character_name
 * @property string home_world
 * @property string divination
 * @property array $skill_set
 * @property int $fate_points
 * @property Wounds wounds
 * @property Characteristics characteristics
 * @property Age age
 * @property string $eye_colour
 * @property string $skin_colour
 * @property string $hair_colour
 * @property float weight
 * @property float height
 * @property string build
 * @property string gender
 * @property string quirk
 * @property Career career
 * @package App\Model
 */
class Character
{
    public function __construct()
    {
        $this->character_name = '';
        $this->home_world = '';
//        $this->career = new Career();
        $this->divination = '';
        $this->quirk = '';
        $this->gender = '';
        $this->build = '';
        $this->height = 0.0;
        $this->weight = 0.0;
        $this->skin_colour = '';
        $this->hair_colour = '';
        $this->eye_colour = '';
        $this->age = new Age('',0);
//        $this->characteristics = new Characteristics();
//        $this->wounds = new Wounds();
        $this->fate_points = 0;
        $this->skill_set = [];
    }

    /**
     * Randomly generates data for this character.
     */
    public function generate_character() {
        Log::debug('Generating new character.');

        $this->generate_home_world();

        $this->generate_basic_info();

        Log::debug('Done');
    }

    /**
     * Generates home world for this character.
     * 1-20 Feral World
     * 21-45 Hive World
     * 46-90 Imperial World
     * 91-100 Void Born
     */
    private function generate_home_world() {
        $roll = rand(1,100);
        Log::debug("Home world roll: $roll");
        foreach (LoreConstants::WORLD_ROLLS as $minRoll => $world) {
            if ($roll < $minRoll) {
                $this->home_world = $world;
                break;
            }
        }
    }

    /**
     * Generates basic info for this character.
     */
    private function generate_basic_info() {
        $this->generate_gender();
        $this->generate_name();
        $this->generate_age();
        $this->generate_appearance();
        // todo
    }

    private function generate_gender() {
        $roll = rand(1,100);
        Log::debug("Gender roll: ${roll}");
        if ($roll < 51) {
            $this->gender = LoreConstants::MALE_GENDER;
        } else {
            $this->gender = LoreConstants::FEMALE_GENDER;
        }
    }

    private function generate_name() {
        $roll1 = rand(1,100);
        $roll2 = rand(1,5);

        Log::debug("Name roll 1: ${roll1}");
        Log::debug("Name roll 2: ${roll2}");

        // get index of the name to be used (determined by the first roll)
        $name_num = 0;
        while ($roll1 >= LoreConstants::NAME_ROLL_BOUNDARIES[$name_num]) {
            $name_num++;
        }

        // get the name, second roll determines the name type (ancient, informal, ...)
        $this->character_name = LoreConstants::NAMES_BY_GENDER[$this->gender][$roll2 - 1][$name_num];
    }

    private function generate_age() {
        $roll1 = rand(1,100);
        $roll2 = rand(1,10);
        $age = 0;
        $ageDesc = '';
        Log::debug("Appearance - age roll 1: ${roll1}");
        Log::debug("Appearance - age roll 2: ${roll2}");


        // get base age and age description for given world/roll combination
        $ages = LoreConstants::AGE_BY_WORLDS[$this->home_world];
        foreach ($ages as $minRoll => $ageDetail) {
            // if the 100 dice roll is lower minimal roll needed for current age, use that age
            if ($roll1 < $minRoll) {
                $age = $ageDetail[0];
                $ageDesc = $ageDetail[1];
                break;
            }
        }

        // add second roll to get full age
        $age += $roll2;

        $this->age->description = $ageDesc;
        $this->age->age = $age;
    }

    private function generate_appearance() {
        $roll = rand(1,100);
        Log::debug("Appearance - build roll: ${roll}");

        // convert 1-100 to 0-4 for better access to build array
        $build_num = floor(($roll - 1) / 20);
        $this->build = LoreConstants::BUILD_BY_WORLDS[$this->home_world][$build_num]['description'];
        $this->height = LoreConstants::BUILD_BY_WORLDS[$this->home_world][$build_num][$this->gender]['height'];
        $this->weight = LoreConstants::BUILD_BY_WORLDS[$this->home_world][$build_num][$this->gender]['weight'];

        // generate rest of appearance
        $this->generate_colours();
        $this->generate_quirk();
        $this->generate_divination();
    }

    private function generate_colours() {
        $roll = rand(1, 100);
        Log::debug("Appearance - colour roll: ${roll}");

        // from 1-100 to 0-5
        $roll_num = floor(($roll + 1) / 20);
        $this->skin_colour = LoreConstants::COLOURS_BY_WORLD[$this->home_world][$roll_num]['skin'];
        $this->hair_colour = LoreConstants::COLOURS_BY_WORLD[$this->home_world][$roll_num]['hair'];
        $this->eye_colour =  LoreConstants::COLOURS_BY_WORLD[$this->home_world][$roll_num]['eyes'];
    }

    private function generate_quirk() {
        $roll = rand(1,100);
        Log::debug("Appearance - quirk roll: ${roll}");
        $quirk_num = 0;
        while ($roll >= LoreConstants::QUIRK_ROLL_BOUNDARIES[$quirk_num]) {
            $quirk_num++;
        }
        $this->quirk = LoreConstants::QUIRKS_BY_WORLD[$this->home_world][$quirk_num];
    }

    private function generate_divination() {
        $roll = rand(1, 100);
        Log::debug("Divination roll: ${roll}");

        $divination_num = 0;
        while ($roll >= LoreConstants::DIVINATION_BOUNDARIES[$divination_num]) {
            $divination_num++;
        }
        $this->divination = LoreConstants::DIVINATIONS[$divination_num];
    }
}