<?php
namespace app\site\controller;

use app\core\Controller;

class UsuarioController extends Controller
{
    public function index(){
        echo 'Método index';
    }

    public function teste(){
        echo 'Método teste';
    }

    public function message(string $msg){
        echo $msg;
    }
    public function pagina(){
        $produtos = [
            'Maça',
            'Pera',
            'Banana',
            'Rias Gremory',
            'Akane'
        ];
        
        $this->view('home.main', [
            'titulo' => 'Página inicial!',
            'produtos' => $produtos
        ]);
    }
}
?>