<?php
namespace app\site\controller;
use app\core\Controller;

class PostController extends Controller{

    public function index(){

    }

    public function ver(){
        $article = [
            'title' => 'Título da página',
            'subtitle' => 'Subtítulo da página',
            'article' => '<p>conteudo em HTML, Blá, blá, blá...</p>'
        ];

        $posts = [
            [
                'title' => 'Aprenda a trocar de celular',
                'image' => null,
                'description' => 'Descrição do conteudo aqui',
                'link' => 'como-trocar-de-celular'
            ],
            [
                'title' => 'Como comprar a Rias Gremory',
                'image' => null,
                'description' => 'Descrição do conteudo aqui',
                'link' => 'como-comprar-a-rias-gremory'
            ]
        ];

        $this->view('post.view', [
            'posts' => $posts,
            'article' => $article
        ]);
    }

    public function ultimas(){

    }

    public function buscar(string $terms = ''){
        $terms  = filter_var(urldecode($terms), FILTER_SANITIZE_SPECIAL_CHARS);

        $terms = mb_substr($terms, 0, 25);

        $posts = [
            [
                'title' => 'Aprenda a trocar de celular',
                'image' => null,
                'description' => 'Descrição do conteudo aqui',
                'link' => 'como-trocar-de-celular'
            ],
            [
                'title' => 'Aprenda a trocar de celular',
                'image' => null,
                'description' => 'Descrição do conteudo aqui',
                'link' => 'como-trocar-de-celular'
            ],
            [
                'title' => 'Aprenda a trocar de celular',
                'image' => null,
                'description' => 'Descrição do conteudo aqui',
                'link' => 'como-trocar-de-celular'
            ],
            [
                'title' => 'Como comprar a Rias Gremory',
                'image' => null,
                'description' => 'Descrição do conteudo aqui',
                'link' => 'como-comprar-a-rias-gremory'
            ]
        ];

        $this->view('post.search', [
            'terms' => $terms,
            'posts' => $posts,
            'countPosts' => count($posts)
        ]);
    }
}
?>