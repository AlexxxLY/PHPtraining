<?php

 abstract class All{
     public $name;
     public $species;

     abstract public function Volume();

 }
 abstract class Birds extends All{
     abstract function Fly();
 }
 abstract class Animals extends All {
     abstract function Run();
 }
 class Gus extends Birds {
    public $species=' Gus ';

    public function Volume(){
        echo " I can speak ";
    }

     public function Fly(){
        echo " I can Fly! ";
    }
 }

 class Dog extends Animals {

     public $species=' Dog ';

     public function Volume(){
         echo " I can speak ";
     }

     public function tail(){
         echo " I have a Tail ";
     }
     public function Run(){
        echo " I can RUN! ";
    }

}

class labrador extends Dog{
     public $breed=' Labrador ';
}

$dog = new labrador;
$dog->name=' Chaky ';

$gus = new Gus;
$gus->name=' Sheptun ';

echo " I m ".$gus->species.". My name is ".$gus->name;
     $gus->Volume();
     $gus->Fly();
     echo'<br>';
echo " I m ".$dog->species.". My name is ".$dog->name.
     ". My breed is ".$dog->breed;
     $dog->Volume();
     $dog->Run();
     $dog->tail();
     echo '<br>';
?>
