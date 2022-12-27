<?php
namespace app\core;

class Router{
    //Todos os parãmetros da nossa URL em Array
    private array $uriData;

    //Qual a controladora a ser executada
    private string $controller;

    //Qual método a ser chamado
    private string $method;

    public function __construct()
    {
        //Controladora padrão, ex: HomeController
        $this->controller  = 'home';

        //Método padrão exemplo: index()
        $this->method      = 'index';

        //chama o método para formatar as propriedades
        $this->format();

        //executamos e chamamos o nosso método
        $this->run();
    }
    
    /**
     * Recebe os dados da URI, formata e devolve na proproedade $uriData
     *
     * @return void
     */

    private function format() 
    {
        $uri = $_SERVER['REQUEST_URI'];
        
        if (strpos($uri, '?') > 0)
            $uri = substr($uri, 0, strpos($uri, '?'));

        $ex = explode('/',$uri);

        if (!is_array($ex))
            return;

        $ex = array_values(array_filter($ex));

        for ($i = 0; $i < REMOVE_INDEX; $i++ )
            unset($ex[$i]);

        $this->uriData = array_values($ex);
    }

     /**
     * Chama a controller, method e envia os parâmetros para a rota correta
     *
     * @return void
     */
    private function run(){
        $controller = $this->getController();
        $method = $this->getMethod($controller);
        $params = $this->getParams();

        call_user_func_array([
            (new $controller),
            $method,
        ], $params);
    }

    public function getController(){

        $cont = null;

        if (isset($this->uriData[0])){
            $cont = $this->uriData[0];

            $cont = 'app\\site\\controller\\'.ucfirst($cont). 'Controller';

            if (class_exists($cont))
                return $cont;
        }

        return 'app\\site\\controller\\'.ucfirst($this->controller). 'Controller';
    }

    public function getMethod(string $controllerPath){

        $meth = $this->method;//index

        if (isset($this->uriData[1])) //Se tiver algo na url, entra no if
            $meth = $this->uriData[1];//Agora Meth recebe oque está na url

        if (method_exists($controllerPath, $meth))//O método da URL existe?
            return $meth;//Se tiver, então o meth porque está correto

        return $this->method;//Retorna nosso Indez
    }

    public function getParams(){
        if (count($this->uriData) <= 2)
            return [];
            
        $params = [];

        for($i = 2; $i < count($this->uriData); $i++){
            $params[] = $this->uriData[$i];
        }
        return $params;
    }
}
?>