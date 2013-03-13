<?php

########################################################################
#	file: weeklycocktail.php
#	version: 1.0
#	author: c. foster
#	date: 03.12.13
#	functionality: page that displays cocktail of the week
########################################################################

// include the html header 
include ('./includes/header.inc');

// load required files
require './Vendors/RedBeanPHP3_3_7/rb.php'; // Redbean php library
include ('./Src/Cocktail.php'); // Cocktail Class
include ('./Src/fbscript.inc'); // Facebook script for Like button enablement

// set up database connection
R::setup('mysql:host=localhost;dbname=imbibe','root','weblamp442');
R::freeze(true);

// set default timezone - needed for determining week of the year
date_default_timezone_set('UTC');

?>

	<!-- content-wrap starts here -->
	<div id="content-wrap"><div id="content">	
	
	<?php
	
	// include the side bar
	include ('./includes/sidebar.inc');
	
	?>
	
	<!-- main starts here -->
	<div id="main">
		<h2>Cocktail of the Week</h2>

		<?php

		// determine week of the year - this determines what cocktail to display from db
		// $cocktailId in db is week of the year 
		$cocktailId = date("W");

		// Create Cocktail object referencing the cocktailId
		$cocktail = new Cocktail($cocktailId);
		
		// Display Cocktail
		echo '<h3>' . $cocktail->name . '</h3>';
		foreach ($cocktail->ingredients as $ingredient) {
			echo '<li>' . $ingredient["ingredient"] . '</li>';
		}
		echo '<p>' . $cocktail->instructions . '</p>';
	
		?>

		<!-- display Facebook Like button -->

		<div class="fb-like" data-href="http://localhost/~claytonfoster/Project/" 
		data-send="true" data-width="250" data-show-faces="true"></div>
						
	<!-- main ends here -->							
	</div>				
				
	<!-- content-wrap ends here -->		
	</div></div>
	
<?php

// include the footer
include ('./includes/footer.inc');

?>
