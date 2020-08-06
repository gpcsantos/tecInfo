<?php
    // Orientação a objeto
    //exemplo produtos: tem carateristicas próprias
    //

    //Classe (posts do facebook)
    
    class Post{
        //typed properties: a partir do PHP 7.4, permite coloar um tipo de dados na classe
        public int $likes = 0;
        public array $comments=[];
        public string $author;

        //Método COSNTRUTOR: é executado toda vez que um objeto é criado
        public function __construct($qtLikes = 0){ //igual o $qtLikes a 0, permite a possibilidade de ser opcional
            $this->likes = $qtLikes;
        }
        
        //Método
        public function aumentarLike(){
            $this->likes++;
        }
    }

    //Objeto
    $post1 = new Post();
    $post1->likes = 3;

    $post2 = new Post();
    $post2->likes = 10;
    echo "POST 1: ".$post1->likes."<br/>";
    echo "POST 2: ".$post2->likes."<br/>";

    //Propriedades ou atributos
    //são as características de uma classe
    //PUBLIC é uma propriedade pode ser acessada de fora da class
    //PROTEGIDA não pode ser acessada de fora da classe, uso interno
    //PRIVADA não pode ser acessada de fora da classe, uso interno


    //MÉTODOS
    $post2->aumentarLike();

    //Método CONSTRUTUOR
    //Métodos pré-programados


    $post3 = new Post(30);
    $post3->aumentarLike();
   


    echo "POST 1: ".$post1->likes."<br/>";
    echo "POST 2: ".$post2->likes."<br/>";
    echo "POST 3: ".$post3->likes."<br/>";

