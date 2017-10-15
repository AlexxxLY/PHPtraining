<?php

 class All{
     public $name;
     public $vol;
     public $species;

     public function Volume($vol)
     {
         $this->vol=$vol;
         echo " I speak ".$vol." ";
     }

 }
 class Gus extends All {
    public $species=' Gus ';
    public function Fly(){
        echo " I can Fly! ";
    }
 }

 $gus = new Gus;
 $gus->name=' Sheptun ';
 $gus->vol=' Ga-ga-ga ';

 class Dog extends All {

     public $species=' Dog ';

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
$dog->vol=' Gav-gav ';

echo " I m ".$gus->species.". My name is ".$gus->name;
     $gus->Volume($gus->vol);
     $gus->Fly();
     echo"****";
echo " I m ".$dog->species.". My name is ".$dog->name.
     ". My breed is ".$dog->breed;
     $dog->Volume($dog->vol);
     $dog->Run();
     $dog->tail();
     echo"****";
?>
