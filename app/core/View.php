<?php

namespace App\Core;

class View
{
  public static function render($object)
  {
    if(!$object){
      return;
    }
    $file_name = $object[0];
    $marcas = $object[1];
    
    $path = 'public/pages/'.$file_name.'.php';
    $content = file_exists($path) ? file_get_contents($path) : file_get_contents(error_page(404));
    
    foreach($marcas as $key => $value){
      $content = str_replace('{{'.$key.'}}', $value, $content);
    }
    echo $content;
  }
}
