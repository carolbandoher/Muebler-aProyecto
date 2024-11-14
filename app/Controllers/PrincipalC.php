<?php

namespace App\Controllers;

class PrincipalC extends BaseController
{
    public function Front()
    {
        return view('/front/Principal').
        view('/footer');
    }
}