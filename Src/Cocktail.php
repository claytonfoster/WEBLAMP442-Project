<?php

/**
 * Class representing a Cocktail
 * Has methods to pull the cocktail information from the database
 * 
 */

class Cocktail {

     /**
      * cocktail id - primary key 
      * @var int
      */
     public $id;

     /**
      * name of the cocktail
      * @var string
      */
     public $name;

     /**
      * instructions
      * @var string
      */
     public $instructions;

     /**
      * image file name
      * @var string
      */
     public $image;

     /**
      * cocktail ingredients
      * @var array
      */
     public $ingredients=array();

     public $cocktailId;

     public function getCocktail($cocktailId) {
	  
	  $cocktail = R::getRow('select * from Cocktail where COCKTAILID = '.$cocktailId.'');

	  return $cocktail;

     }

     public function getCocktailIngredients($cocktailId) {
	  
	  // Get cocktail ingredients from the database for the selected cocktailId
	  $ingredients = R::getAll('select ingredient from CocktailIngredients where COCKTAILID = '.$cocktailId.'');

	  return $ingredients;

     }  

     function __construct($cocktailId) {
	  
	  // Get cocktail name, image file name, and instructions from database
	  $cocktail = $this->getCocktail($cocktailId);

	  // Assign values to object instance

	  $this->name = $cocktail["name"];
	  $this->instructions = $cocktail["instructions"];
	  $this->image = $cocktail["image"];

	  // Get cocktail ingredients from database and assign
	  $this->ingredients = $this->getCocktailIngredients($cocktailId);
     }

}

?>
