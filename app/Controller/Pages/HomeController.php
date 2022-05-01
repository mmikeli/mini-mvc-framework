<?php

namespace App\Controller\Pages;

class HomeController
{
    public static function index()
    {
        $fields = [
            "name" => "Supernova Digital",
            "description" => "A Mais nova Agência digital"
        ];

        return $fields;
    }
}