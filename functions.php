<?php


/* Create your own menu */

add_action('init', 'remove_rolopress_default_menu'); // first call the function to remove the default menu

function remove_rolopress_default_menu() { // here's where we remove the default menu
      remove_filter('rolopress_menu', 'rolopress_default_menu');
}

function my_menu() { // here's our new menu

    /* Widgetized Menu*/
					echo "new menu item";
				}

add_filter('rolopress_menu', 'my_menu');



?>