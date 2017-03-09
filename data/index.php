<?php 



    /*
    * Get grows product data from DB
    */
    
    $db = new Database();
	$product = $db->query('	SELECT name, January, February, March, April, May, June, July, August, September, October, November, December
	                		FROM product, sowing_calander
							WHERE product.id = sowing_calander.product_id');
					
	$product = $db->resultset();
	
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
    
    
	
?>