<?php

namespace app\classes;

/**
 * Gerencia os tipos de entradas GET e POST
 */
class Input{
    
    /**
     * Faz uma requisisção do tipo GET
     *
     * @param  string $param
     * @param  int $filter Constante com o filtro para a variável
     * @return string Retorna false se não encontrar ou o contentudo encontrado
     */
    public static function get(string $param, int $filter = FILTER_SANITIZE_SPECIAL_CHARS): string
    {
        return filter_input(INPUT_GET, $param, $filter);
    }

    
     /**
     * Faz uma requisisção do tipo POST
     *
     * @param  string $param
     * @param  int $filter Constante com o filtro para a variável
     * @return string Retorna false se não encontrar ou o contentudo encontrado
     */
    public static function post(string $param, int $filter = FILTER_SANITIZE_SPECIAL_CHARS): string
    {
        return filter_input(INPUT_POST, $param, $filter);
    }
}
?>