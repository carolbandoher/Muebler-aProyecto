<?php

namespace App\Controllers;

class PrincipalC extends BaseController
{
    public function Front()
    {
        return view('menu'). 
        view('/front/Principal').
        view('/footer');
    }

    public function Acercade()
    {
        return view('menu'). 
        view('/Acerca').
        view('/footer');
    }
}