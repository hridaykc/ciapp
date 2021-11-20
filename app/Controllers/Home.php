<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function saveapp(){
        echo '<h1>saveapp</h1>';
        

        //return view();
    }
}
