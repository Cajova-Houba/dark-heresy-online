<?php
/**
 * Created by PhpStorm.
 * User: zdenda
 * Date: 10.9.2019
 * Time: 16:10
 */

namespace App\Model;

use Illuminate\Support\Facades\Log;


class World {
    const Feral = 'Feral World';
    const Hive = 'Hive World';
    const Imperial = 'Imperial World';
    const VoidBorn = 'Void Born';
}


/**
 * Age of the character, together with description.
 *
 * @property  int age Character age in years.
 * @property string description Description of character's age, depends on its homeworld.
 * @package App\Model
 */
class CharacterAge
{
   public function __construct()
   {
       $this->age = 0;
       $this->description = 'description';
   }

   /**
    * Generates age and description accordingly to provided homeworld.
    * @param string $home_world
    */
   public function generate_for_home_world($home_world) {
       $roll1 = rand(1,100);
       $roll2 = rand(1,10);
       Log::debug("Appearance - age roll 1: $roll1");
       Log::debug("Appearance - age roll 2: $roll2");

       $baseAge = 0;
        switch ($home_world) {
            case (World::Feral):
                if ($roll1 < 71) {
                    $this->description = 'Warrior';
                    $this->age = 15;
                } else {
                    $this->description = 'Old One';
                    $baseAge = 25;
                }
                break;

            case (World::Hive):
                if ($roll1 < 31) {
                    $this->description = 'Nipper';
                    $baseAge = 15;
                } else if ($roll1 < 91) {
                    $this->description = 'Adult';
                    $baseAge = 25;
                } else {
                    $this->description = 'Old Timer';
                    $baseAge = 35;
                }
                break;

            case (World::Imperial):
                if ($roll1 < 51) {
                    $this->description = 'Stripling';
                    $baseAge = 20;
                } else if ($roll1 < 81) {
                    $this->description = 'Mature';
                    $baseAge = 30;
                } else {
                    $this->description = 'Veteran';
                    $baseAge = 40;
                }
                break;

            case (World::VoidBorn):
                if ($roll1 < 41) {
                    $this->description = 'Youth';
                    $baseAge = 15;
                } else if ($roll1 < 71) {
                    $this->description = 'Mature';
                    $baseAge = 20;
                } else {
                    $this->description = 'Methuselah';
                    $baseAge = 50;
                }
                break;
        }

        $this->age = $baseAge + $roll2;
   }
}

/**
 * Playable character.
 *
 * @property string characterName
 * @property string home_world
 * @property string divination
 * @property array skillSet
 * @property int fatePoints
 * @property Wounds wounds
 * @property Characteristics characteristics
 * @property CharacterAge age
 * @property string eyeColour
 * @property string hairColour
 * @property string skinColour
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
        $this->characterName = '';
        $this->home_world = '';
//        $this->career = new Career();
        $this->divination = '';
        $this->quirk = '';
        $this->gender = '';
        $this->build = '';
        $this->height = 0.0;
        $this->weight = 0.0;
        $this->skinColour = '';
        $this->hairColour = '';
        $this->eyeColour = '';
        $this->age = new CharacterAge();
//        $this->characteristics = new Characteristics();
//        $this->wounds = new Wounds();
        $this->fatePoints = 0;
        $this->skillSet = [];
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
        if ($roll < 21) {
            $this->home_world = World::Feral;
        } else if ($roll < 46) {
            $this->home_world = World::Hive;
        } else if ($roll < 91) {
            $this->home_world = World::Imperial;
        } else {
            $this->home_world = World::VoidBorn;
        }
    }

    /**
     * Generates basic info for this character.
     */
    private function generate_basic_info() {
        $this->age->generate_for_home_world($this->home_world);
        // todo
    }
}