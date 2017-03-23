<?php

	include 'classes/wrapper.php';
	include 'lang/index.he.php';
	include 'menus/topmenu.php';
	include 'classes/menu.class.php';
	
    
    $db = new Database();
    
    /*
    * Get grows product data from DB
    */
   
	$product = $db->query('	SELECT name, January, February, March, April, May, June, July, August, September, October, November, December
	                		FROM product, sowing_calander
							WHERE product.id = sowing_calander.product_id
							AND product.active = 1');
	$product = $db->resultset();
	
	/*
    * Get section 1 texts
    */
    
    $lang['SECTION_1'] = $db->query('	SELECT texts
										FROM  `pages` 
										WHERE  `page` =  \'index\'
										AND `slag` =  \'index_section_1\'');
	$lang['SECTION_1'] = $db->single();
	
	/*
    * Build dataTabel html structure
    */
	
	$table = new Table();
	$table->table(	'growtable',
            		'display nowrap dataTable dtr-inline collapsed',
                	'0',
	            	'100%');
	$table->sectionsingle(array_keys($product[0]),'thead','th');
	$table->sectionsingle(array_keys($product[0]),'tfoot','td');
	$table->sectionarray($product,'tbody','td');
	
	/*
    * check if banner text exist and if yes, create HTML code
    */
	
	$page_banner = '';
	if (!empty($lang['SLOGAN_TITLE']) || !empty($lang['SLOGAN_TEXT1']) || !empty($lang['SLOGAN_TEXT2'])) {
		
		$page_banner = '<!-- Main jumbotron for a primary marketing message or call to action -->
						<div class="jumbotron">
							<div class="container">';
		if ($lang['SLOGAN_TITLE']) $page_banner = $page_banner . '<h1>' . $lang['SLOGAN_TITLE'] .'</h1>';
		if ($lang['SLOGAN_TEXT1']) $page_banner = $page_banner . '<p>' . $lang['SLOGAN_TEXT1'] .'</p>'; 
		if ($lang['SLOGAN_TEXT2']) $page_banner = $page_banner . '<p>' . $lang['SLOGAN_TEXT2'] .'</p>'; 
		$page_banner = $page_banner . '		</div>
										</div>';
	}
	
	/*
    * check if page exist and if yes, create HTML code
    */
    
    $heading = '';
	if (!empty($lang['HEADING'])) {
		
		$heading = '<div class="row">
		  				<div class="col-md-12">
							<h2>' . $lang['HEADING'] . '</h2>
						</div>
					</div>';
	}
	
	/*
    * Building page menu html
    */
    
    $top_menu = new Menu();

	$top_menu_html = $top_menu->menu_sections($top_menu_html);
	$top_menu_html = $top_menu->menu_section_wrapper();
	$top_menu_html = $top_menu->menu_pages_wrapper();
	$top_menu_html = $top_menu->menu_header('Grows.Today','index.php');
	$top_menu_html = $top_menu->menu_div_wrapper( $top_menu_settings['main_div']);
	$top_menu_html = $top_menu->menu_nav_wrapper( $top_menu_settings['nav']);
	$top_menu_html = $top_menu->execute();

?>