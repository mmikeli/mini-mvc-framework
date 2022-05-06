<?php

namespace App\Utils;

class Route
{

  public static function get($endpoint, $object)
  {

    if( ($_SERVER['REQUEST_METHOD'] === 'GET') && ($_SERVER['REQUEST_URI'] === $endpoint) ){

      $contentViewPath =  __DIR__ . '/../../resources/view/pages/' . $object[0] . '.php';
      $contentView = file_exists($contentViewPath) ? file_get_contents($contentViewPath) : 404;

      $keys = array_keys($object[1]);
      $keys = array_map(function ($item) {
          return '{{' . $item . '}}';
      }, $keys);

      print str_replace($keys, array_values($object[1]), $contentView);

    }

  }

}
