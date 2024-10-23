<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Test loading just the header view
        echo view('header');
        echo view('index');
        echo view('footer');

    }
}
