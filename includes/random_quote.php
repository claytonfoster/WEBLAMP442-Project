<?php

########################################################################
#	file: random_quote.php
#	version: 1.0
#	author: c. foster
#	date: 04.07.12
#	functionality: returns a random quote
########################################################################




function randomquote() {
	$quotes = array
	(
	"I drink to make other people more interesting.",
	"A lady came up to me one day and said 'Sir! You are drunk', to which I replied 'I am drunk today madam, and tomorrow I shall be sober but you will still be ugly.",
	"Beer is proof that God loves us and wants us to be happy.",
	"First you take a drink, then the drink takes a drink, then the drink takes you.",
	"Alcohol may be man's worst enemy, but the bible says love your enemy.",
	"After the first glass, you see things as you wish they were. After the second, you see things as they are not. Finally, you see things as they really are, and that is the most horrible thing in the world."
	);
	$author = array
	(
	"Ernest Hemingway",
	"Winston Churchill",
	"Benjamin Franklin",
	"F. Scott Fitzgerald",
	"Frank Sinatra",
	"Oscar Wilde"
	);
	$rand_key = array_rand($quotes);
	
	$rand_quote= '<p>&quot;' . $quotes[$rand_key] . '&quot;</p><p class="align-right">- ' . $author[$rand_key] . '</p>';
	
	return $rand_quote;
}

?>