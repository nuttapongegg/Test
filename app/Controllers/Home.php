<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function Home()
    {
        return view('Home');
    }

    public function User()
    {
        return view('User');
    }
    public function Profile()
    {
        return view('Profile');
    }
}
