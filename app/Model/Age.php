<?php
/**
 * Created by PhpStorm.
 * User: zdenda
 * Date: 11.9.2019
 * Time: 17:27
 */

namespace App\Model;


/**
 * Characters age.
 * @property string  description Description of the age.
 * @property int age Actual age.
 * @package App\Model
 */
class Age
{
    public function __construct($description, $age) {
        $this->description = $description;
        $this->age = $age;
    }
}