<?php

namespace App\Core;

class View
{
  public static function render($object)
  {
    //$path = __DIR__.'../../public/pages/'.$path.'.php';
    //$content = file_exists($path) ? file_get_contents($path) : file_get_contents(error_page(404));
    if(!$object){
      return false;
    }
    
    print_r('Executando render');
    echo '<br>';
  }
}
