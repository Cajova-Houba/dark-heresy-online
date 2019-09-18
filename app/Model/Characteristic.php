<?php
/**
 * Created by PhpStorm.
 * User: zdenda
 * Date: 18.9.2019
 * Time: 19:30
 */

namespace App\Model;

/**
 * One particular characteristic.
 *
 * @property int world_modifier
 * @property int base
 * @property string name
 * @package App\Model
 */
class Characteristic
{
    public function __construct($name)
    {
        $this->name = $name;
        $this->base = 0;
        $this->world_modifier = 0;
    }

    /**
     * @return int Total value of this characteristic.
     */
    function get_value() {
        return $this->base + $this->world_modifier;
    }

    /**
     * Returns significance (string description) of this characteristic
     * based on its value.
     */
    function get_significance() {
        $value = $this->get_value();
        foreach (LoreConstants::CHARACTERISTIC_SIGNIFICANCES as $max_val => $sig) {
            if ($value < $max_val) {
                return $sig;
            }
        }
    }
}