<?php
/**
 * Index Template
 *
 * This file is required by WordPress to recoginze Thematic as a valid theme.
 * It is also the default template WordPress will use to display your web site,
 * when no other applicable templates are present in this theme's root directory
 * that apply to the query made to the site.
 * 
 * WP Codex Reference: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Thematic
 * @subpackage Templates
 */

	// calling the header.php
	get_header();
	
	// action hook for placing content above #container
	thematic5_abovecontainer();
?>

		<div id="container">

			<?php
		    	// action hook for placing content above #content
				thematic5_abovecontent();
				
				// filter for manipulating the element that wraps the content 
				echo apply_filters( 'thematic5_open_id_content', '<div id="content">' . "\n\n" );
				
				// create the navigation above the content
            	thematic5_navigation_above();
				
            	// calling the widget area 'index-top'
            	get_sidebar('content-top');
				
            	// action hook for placing content above the index loop
            	thematic5_above_indexloop();
				
            	// action hook creating the index loop
            	thematic5_indexloop();
				
            	// action hook for placing content below the index loop
            	thematic5_below_indexloop();
				
            	// calling the widget area 'index-bottom'
            	get_sidebar('content-bottom');
				
            	// create the navigation below the content
            	thematic5_navigation_below();
            ?>

			</div><!-- #content -->

			<?php
				// action hook for placing content below #content
				thematic5_belowcontent();
			?>
		</div><!-- #container -->
		
<?php
	// action hook for placing content below #container
	thematic5_belowcontainer();
	
	// calling the standard sidebar 
	thematic5_sidebar();
	
	// calling footer.php
	get_footer();
?>