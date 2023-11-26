<?php

namespace App\Controllers;

class Home extends BaseController
{
    // public function index()
    // {
    //     echo view('welcome_message');
    // }

    public function index()
    {
        echo view('layout/v_header');
        echo view('layout/v_navbar');
        echo view('home/v_home');
        echo view('layout/v_footer');
    }
}
