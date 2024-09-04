<?php

class dog extends products{
    // inseriamo le cose extra 
    public $weight;

    public function __construct(float $_weight){
        $this->weight = $_weight;
    }



    public function setWeight($_weight){
        // controllo il dato emesso , se è corretto lo imposto
        $this->weight = $_weight;
    }


    public function getWeight(){
        return $this->weight;
    }
}

?>