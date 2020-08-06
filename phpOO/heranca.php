<?php

//Herança pode ajudar a reaproveitar código;

class Post{
    private int $id;
    private int $likes = 0;

    // emcapsulamento Get e Set

    public function setId($i){
        $this->id = $i;
    }
    public function getId(){
        return $this->id;
    }

    public function setLikes($n){
        $this->likes = $n;
    }
    public function getLikes(){
        return $this->likes;
    }
}

class Foto extends Post{ //extends é usado para dizer que a classe Foto herdou a classe Post
    private $url;

    //Contrutor
    public function __construct($i){
        $this->setId($i); //é possível utilizar o setID, pois esse metodo foi herdado ca Classe Post
    }

    //emcapsulamento Get e SET
    public function setUrl($u){
        $this->url = $u;
    }
    public function getUrl(){
        return $this->url;
    }
}

$foto = new FOTO(20);
$foto->setLikes(12);
$foto->setUrl('https://www.google.com.br/google.jpg');

echo "Foto: #".$foto->getId()." - ".$foto->getLikes()." likes - URL: ".$foto->getUrl();

