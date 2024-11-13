<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function who(): string
    {
        return view('whos_who');
    }

    public function egov(): string
    {

        return view('e_governance');
    }
    public function about(): string
    {

        return view('about');
    }
    public function cont(): string
    {

        return view('contact');
    }
}
