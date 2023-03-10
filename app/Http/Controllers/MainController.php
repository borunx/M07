<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function howtoplay(){
        return view('rules');
    }

    public function team(){

        $names_upc = ["Laura Fernandez", "Marina Iniesta", "Carla Abascal", "Alejandro"];

        $names_proven = ["Jonatan Feliz", "Pau Martinez","Sonia Morales", "Anthony Reyes", "Ruyou Hu Ye"];

        $img_upc = ["img/laura.png","img/marina.jpg","img/carla.jpg","img/avatarvacio.png"];

        $img_proven = ["img/avatarvacio.png"];

        return view('team', compact('names_upc','names_proven','img_proven'));
    }

}
