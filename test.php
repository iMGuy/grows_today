<?php 
	include 'classes/wrapper.php';
	include 'lang/index.he.php';
	include 'data/index.php';
	include 'classes/menu.class.php';
	include 'menus/topmenu.php';

$top_menu = new Menu();

$html = $top_menu->menu_sections($top_menu_html);
$html = $top_menu->menu_pages_wrapper();
$html = $top_menu->menu_div_wrapper( $top_menu_settings['main_div']);
$html = $top_menu->menu_nav_wrapper( $top_menu_settings['nav']);
$html = $top_menu->execute();
echo $html;	

?>