<?php

namespace App\Controller;

class HomeController
{
  public static function index($fields, $request)
  {
    
    if(!check_request($fields, $request)){
      return false;
    }
    
    print_r('HomeController Executando');
    echo '<br>';
    return true;
  }
}
