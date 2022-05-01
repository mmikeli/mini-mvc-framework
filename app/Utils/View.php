<?php

namespace App\Utils;

class View
{

    private const BASEURL = '/aula-mvc';

    /**
     * Método responsável por retornar o conteúdo de uma view
     * @param string $view
     * @return string
     */
    private static function getContentView($view)
    {
        $file = __DIR__.'/../../resources/view/pages/'.$view.'.php';

        return file_exists($file) ? file_get_contents($file) : '';
    }

    /**
     * Método responsável por retornar o conteúdo renderizado de uma view
     * @param string $view
     * @param array $vars (string/numeric)
     * @return string
     */
    public static function get($view, $vars = [])
    {
        if(str_replace(self::BASEURL, '', $_SERVER['REQUEST_URI']) === $view){
            
            $contentView = self::getContentView($view);
            $keys = array_keys($vars);
            $keys = array_map(function($item){
                return '{{'.$item.'}}';
            },$keys);
            
            return str_replace($keys, array_values($vars), $contentView);
        }
    }
}