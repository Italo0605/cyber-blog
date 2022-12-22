<?php

/**
 * utilizamos para debugar as instruções passadas por parametros
 * após a execução a aplicação é encerrada
 *
 * @param  mixed $param Parâmetro a ser debugado
 * @return void
 */
function dd($param){
    echo '<pre>';
    print_r($param);
    echo '</pre>';
    die();
}


/**
 * Redireciona o Usuario para a URL especificada
 *
 * @param  mixed $url define a url para qual o usuario será direcionado.
 * @return void
 */
function redrect(string $url){
    header('Location' . $url);
}
?>