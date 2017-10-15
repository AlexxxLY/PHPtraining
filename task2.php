<?php

 class Animal{
   public $name;
   public $speak;
   public $can;

  public function printClass($name,$speak,$can)
  {
      $this->name=$name;
      $this->speak=$speak;
      $this->can=$can;
      echo " **** ";
      echo "My name is " .$name." ";
      echo "I can speak ". $speak." ";
      echo "I can ".$can." ";

  }

}
 class Gus extends Animal{};
 $gus = new Gus;
 $gus->name='Sheptun';
 $gus->speak='Ga-ga-ga';
 $gus->can='Fly';
 $gus->printClass($gus->name,$gus->speak, $gus->can);

 class Dog extends Animal{

//     private $tail;
     public $breed;

     public function printClass($name, $speak, $can, $breed)
     {
         parent::printClass($name, $speak, $can,$breed);
         $this->breed=$breed;
         echo "My breed ".$breed." ";
         echo "I have a tail";

     }
}
$dog = new Dog('Chaky','Gav-gav','run','Labrador');
$dog->name='Chaky';
$dog->speak='Gav-gav';
$dog->can='Run';
$dog->breed='Labrador';
$dog->printClass($dog->name,$dog->speak,$dog->can,$dog->breed);
?>