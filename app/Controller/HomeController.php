<?php

namespace App\Controller;

class HomeController
{
  public static function index($fields, $request)
  {
    if(!check_request($fields, $request)){
      return false;
    }
    return ['home', ['page_title' => 'Meu sitezão', 'ano_rodape' => '2022', 'header' => 'Menu']];
  }
}
