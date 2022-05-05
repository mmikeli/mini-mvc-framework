<?php

namespace App\Controller\Pages;

class HomeController
{
    public static function index()
    {
        return [
            "name" => "Supernova Digital",
            "description" => "A Mais nova Agência digital"
        ];
    }
}
