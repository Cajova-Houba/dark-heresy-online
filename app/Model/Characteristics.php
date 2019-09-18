<?php
/**
 * Created by PhpStorm.
 * User: zdenda
 * Date: 18.9.2019
 * Time: 19:24
 */

namespace App\Model;


use Illuminate\Support\Facades\Log;

/**
 * Character's characteristics (strength, willpower, ...).
 *
 *
 * @property Characteristic fellowship
 * @property Characteristic willpower
 * @property Characteristic perception
 * @property Characteristic intelligence
 * @property Characteristic agility
 * @property Characteristic toughness
 * @property Characteristic strength
 * @property Characteristic ballistic_skill
 * @property Characteristic weapon_skill
 * @package App\Model
 */
class Characteristics
{
    function __construct()
    {
        $this->weapon_skill = new Characteristic('Weapon Skill');
        $this->ballistic_skill = new Characteristic('Ballistic Skill');
        $this->strength = new Characteristic('Strength');
        $this->toughness = new Characteristic('Toughness');
        $this->agility = new Characteristic('Agility');
        $this->intelligence = new Characteristic('Intelligence');
        $this->perception = new Characteristic('Perception');
        $this->willpower = new Characteristic('Willpower');
        $this->fellowship = new Characteristic('Fellowship');
    }

    /**
     * Sets modifiers for all characteristics, order is:
     * Weapon Skill, Ballistic Skill, Strength, Toughness,
     * Agility, Intelligence, Perception, Willpower, Fellowship.
     *
     * @param array $modifiers Array with modifiers (int values).
     */
    function set_modifiers($modifiers) {
        $this->weapon_skill->world_modifier = $modifiers[0];
        $this->ballistic_skill->world_modifier = $modifiers[1];
        $this->strength->world_modifier = $modifiers[2];
        $this->toughness->world_modifier = $modifiers[3];
        $this->agility->world_modifier = $modifiers[4];
        $this->intelligence->world_modifier = $modifiers[5];
        $this->perception->world_modifier = $modifiers[6];
        $this->willpower->world_modifier = $modifiers[7];
        $this->fellowship->world_modifier = $modifiers[8];
    }

    /**
     * Generates values for all characteristics based on given world.
     *
     * @param string $world Character's home world.
     */
    function generate_for_world($world) {
        foreach ($this as $char_name => $char) {
            $char->base = rand(1,10) + rand(1,10);
            Log::debug("$char_name roll: $char->base");
        }

        $this->set_modifiers(LoreConstants::CHARACTERISTIC_MODIFIERS_BY_WORLD[$world]);
    }
}