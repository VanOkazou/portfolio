<?php
/**
* Plugin Name: Widget Works
* Plugin URI: http://vannareth-phan.fr
* Description: Display all works
* Version: 1.0
* Author: Van PHAN
* Author URI: Display all works
*/

add_action('widgets_init','display_works');

function display_works() {

	// Enregistrement du widget
	register_widget('works_widget');

}

// Création du widget (une classe par widget)
class works_widget extends WP_widget{

	// 1ere fonction : même nom que la class du widget, permet de définir le nom, ses options, etc
	function works_widget(){
		$option = array(

		);
		$this->WP_widget('widget-works', 'Widget Works'); // ID du widget, Nom du widget, Option
	}

	// 2nde fonction : permet de récupérer les paramètres comme before_widget, after_widget, etc dans $args, et $instances sont les variables que contiennent le widget
	function widget($arg, $instance){

	}

	// 3eme fonction : formulaire du widget
	function form(){

	}

	// 4eme fonction : Enregistrement
	function update($p1,$p2){

	}

}




?>