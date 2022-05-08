<?php

namespace App\Controller;

class ContatoController
{
  public static function index($fields, $request)
  {
    
    if(!check_request($fields, $request)){
      return false;
    }
    
    print_r('ContatoController Executando');
    echo '<br>';
    return true;
    
  }
}
