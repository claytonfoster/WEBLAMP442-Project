<?php

########################################################################
#	file: index.php
#	version: 1.0
#	author: c. foster
#	date: 03.12.13
#	functionality: home page of drink database website
########################################################################

// include the html header 
include ('./includes/header.inc');

?>

	<!-- content-wrap starts here -->
	<div id="content-wrap"><div id="content">	
	
	<?php
	
	// include the side bar
	include ('./includes/sidebar.inc');
	
	?>
	
	<!-- main starts here -->
		<div id="main">		
			
				<h3>A compendium of cocktails, grogs, punches, and elixirs</h3>
				<p>
				Over the past few years I've collected a number of cocktail recipes that are stored in paper folders
				and word documents. I will be creating a cocktail database application that will allow me to archive
				these recipes, add new ones, edit recipes, and most important allow them to be easily searchable. The
				recipes will be searchable by ingredient, type of cocktail, year created, creator, and other parameters.
				</p>
				
							
		<!-- main ends here -->								
		</div>				
				
	<!-- content-wrap ends here -->		
	</div></div>
	
<?php

// include the footer
include ('./includes/footer.inc');

?>
	
