<?php

namespace app\core;

class Controller{
    
    /**
     * Carrega uma página de template do Twig a partir do diretório e nome especificado
     * Não informar .twig.php junmto ao nome da pagina pois é insserido aitomaticamente
     *
     * @param  mixed $page diretorio e página do arquivo do twig
     * @param  mixed $params array associatvio com os parametros a serem passados para o twig
     * @return void Imprime o HTML gerado pelo twig
     */
    protected function view(string $page, array $params = [])
    {
        $page = str_replace('.', '/', $page);

        $page .= '.twig.php';

        $loader = new \Twig\Loader\FilesystemLoader('../app/site/view');

        $twig = new \Twig\Environment($loader);
        $twig->addGlobal('BASE', BASE);

        echo $twig->render($page, $params);
    }
}