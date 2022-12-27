<?php

namespace app\site\controller;

use app\core\Controller;

class HomeController extends Controller{

    /**
     * carrega a pagina inicial do view
     *
     * @return void
     */
    public function index() 
    {
        $posts = [
            [
                'title' => 'Aprenda a trocar de celular',
                'image' => null,
                'link' => 'como-trocar-de-celular'
            ],
            [
                'title' => 'Aprenda a trocar de celular',
                'image' => null,
                'link' => 'como-trocar-de-celular'
            ],
            [
                'title' => 'Aprenda a trocar de celular',
                'image' => null,
                'link' => 'como-trocar-de-celular'
            ],
            [
                'title' => 'Como comprar a Rias Gremory',
                'image' => null,
                'link' => 'como-comprar-a-rias-gremory'
            ]
        ];

        $this->view('home.index',[
            'posts' => $posts
        ]);
    }
}