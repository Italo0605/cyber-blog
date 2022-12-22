<?php
namespace app\site\Controller;

use app\core\Controller;

class ProdutoController extends Controller
{
    public function index(){

    }

    public function ver($idProduto, $quantidadeItem){
        $this->view('produto.index',[
            'idProduto' => $idProduto,
            'quantidadeDeProduto' => $quantidadeItem
        ]);
    }
}
?>