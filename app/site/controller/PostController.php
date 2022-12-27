<?php
namespace app\site\controller;
use app\core\Controller;

class PostController extends Controller{

    public function index(){

    }

    public function ver(){
        echo 'ver';
    }

    public function ultimas(){

    }

    public function buscar(string $termo = ''){
        $termo = filter_var(urldecode($termo), FILTER_SANITIZE_STRING);
        dd($termo);
    }
}
?>