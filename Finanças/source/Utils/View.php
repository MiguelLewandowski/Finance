<?php

namespace Source\Utils;

class View{

    /**
     * Método responsávl por retornar o conteúdo de uma view
     *  @param string $view 
     *  @return string
     */
    
    private static function getContentView($view){
        $file = __DIR__.'/../../view/'.$view.'.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }

    /**
     * Método responsávl por retornar o conteúdo renderizado de uma view
     * @param  string $view
     * @param  array $vars
     * @return string
     */
    public static function render($view, $vars = []){
        //Conteúdo da view
        $contentView = self::getContentView($view);

        //CHAVES DO ARRAY DE VARIÁVEIS
        $keys = array_keys($vars);
        $keys = array_map(function($item){
            return '{{'.$item.'}}';
        },$keys);

        

        //Retorna o conteúdo renderizado
        return str_replace($keys,array_values($vars), $contentView );
    }

}