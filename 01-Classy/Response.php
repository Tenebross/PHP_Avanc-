<?php

class Response
{
    public $nom = 'Je suis la';
    public function send(){
        echo $this->nom;
    }
}