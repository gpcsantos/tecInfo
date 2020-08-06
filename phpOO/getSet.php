<?php
    
    //Classe (posts do facebook)
    
    class Post{
        //typed properties: a partir do PHP 7.4, permite coloar um tipo de dados na classe
        public int $likes = 0;
        public array $comments=[];
        private string $author;

        //Método COSNTRUTOR: é executado toda vez que um objeto é criado
        public function __construct($qtLikes = 0){ //igual o $qtLikes a 0, permite a possibilidade de ser opcional
            $this->likes = $qtLikes;
        }
        
        //Método
        public function aumentarLike(){
            $this->likes++;
        }

        //Entendendo Encapsulamento - não permitir acesso externo à propriedade da classe sem proteção
        // IMPORTANTE
        // FAZER o encapsulamento para todas as propriedades da CLASSE (like, commnets)
        public function setAuthor($n){
            if(strlen($n) >= 3){
                $this->author = ucfirst($n);
            }
        }
        public function getAuthor(){
            return $this->author ?? 'Visitande';

        }
    }

    $post1 = new Post();
    $post1->likes=3;
    $post1->setAuthor('Glauco Santos');

    $post2= new Post();
    $post2->likes=10;
    $post2->setAuthor('pi');

    echo "POST 1 ".$post1->likes." likes - ". $post1->getAuthor()."<br />";
    echo "POST 2 ".$post2->likes." likes - ". $post2->getAuthor()."<br />";
    