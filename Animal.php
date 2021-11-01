<?php
class Animal {
    public $cry = "bowbow!";
    public function bow(){
        echo $this->cry,PHP_EOL;
    }
}

class Dog extends Animal {
    public $cry = "waan!";
   
    }


class Cat extends Animal {
    public $cry = "Nyaa~";
    
    }



$Dog = new Dog();
$Cat = new Cat();




$Dog->bow();
$Cat->bow();

?>