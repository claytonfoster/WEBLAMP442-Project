<?php

namespace Tests\Src;
use \Src\Cocktail as Cocktail;

/**
 * unit test code to test Cocktail class
 */

class testCocktail extends \PHPUnit_Framework_TestCase {

     /**
      * Create a test Cocktail object and test that is was properly constructed
      */

     public function testCocktail() {
	  $cocktail = new Civic(11);
	  $this->assertEquals('Blood and Sand', $cocktail->name());
	  $this->assertEquals('Shake in an iced cocktail shaker. Strain n to a cocktail glass. Garnish with a Maraschino cherry.', $cocktail->instructions());
	  $this->assertEquals('blood-and-sand.jpg', $cocktail->image());
//	  $this->assertEquals('1 oz Scotch Whiskey', $cocktail->ingredients[0][ingredient]);
	  return $cocktail;     
     }

}

?>
