<?php

namespace App\Controller;

class ContatoController
{
  public static function index($fields, $request)
  {
    if(!check_request($fields, $request)){
      return false;
    }
    return ['contato', ['page_title' => 'Meu sitezão', 'ano_rodape' => '2022', 'header' => 'Menu']];
  }
}
