<?php 

require_once __DIR__ . '/../model/cat.php';
require_once __DIR__ . '/../model/dog.php';
require_once __DIR__ . '/../model/products.php';

class products {
    public $name;
    public $img;
    public $price;

    public function __costruct (string $_name , string $img , int $price){
        $this->name = $_name;
        $this->img = $_img;
        $this->price = $_price;
    }
}

?>