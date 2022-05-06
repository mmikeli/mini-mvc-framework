<?php

namespace App\Controller;

use Controller;

class HomeController
{
    public static function index()
    {
        return ['pages/home', [
            "name" => "Supernova Digital",
            "description" => "A Mais nova Agência digital"
        ]];
    }
}
