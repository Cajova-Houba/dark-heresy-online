<?php
/**
 * Created by PhpStorm.
 * User: zdenda
 * Date: 10.9.2019
 * Time: 16:03
 */

namespace App\Http\Controllers;


use App\Model\Character;

class CharacterGeneratorController extends Controller
{
    /**
     * Returns view with pre-generated character.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View view to be displayed.
     */
    public function show() {
        $char = new Character();
        $char->generate_character();

        return view('newchar', ['character' => $char]);
    }
}