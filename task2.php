<?php

 class Animal{
   public $name;
   public $speak;
   public $can;

  public function printClass($name,$speak,$can)
  {
//      $this->name=$name;
//      $this->speak=$speak;
//      $this->can=$can;
      echo " **** ";
      echo "My name is " .$name." ";
      echo "I cant speak ". $speak." ";
      echo "I cant ".$can." ";

  }

}
 class Gus extends Animal{};
 $gus = new Gus;
 $gus->name='Sheptun';
 $gus->speak='Ga-ga-ga';
 $gus->can='Fly';
 $gus->printClass($name,$speak,$can);

 /*class Dog extends Animal{

//     private $tail;
     private $breed;
     public function __construct($name, $speak, $can)
     {
         parent::__construct($name, $speak, $can);
     }
}
$dog = new Dog('Chaky','Gav-gav','run','Labrador');
 */
?>