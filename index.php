<?php
/*
Plugin Name: Carrosel Sallo
Description: Carrosel de Imagens para marcas
Version: 1.0
Author: Dumon
Author URI: http://www.lojasite.com.br
*/


//Administracao

function menu_carrosel(){
	add_menu_page( 'Carrosel', 'Carrosel Sallo', 10, 'carrosel/carrosel.php');
	add_submenu_page('carrosel/carrosel.php','Carrosel', 'Slides', 10, 'carrosel/carrosel.php');
}

add_action('admin_menu', 'menu_carrosel');



//Layout

function criacao_carrosel(){

include('tela/html/tela.php');

}
    add_shortcode('carrosel_sallo', 'criacao_carrosel');
?>