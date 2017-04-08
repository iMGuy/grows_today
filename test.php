<?php 
	include 'classes/wrapper.php';

?>
<!DOCTYPE html>
<html lang="he">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="icon" href="../../favicon.ico"> -->
		<base href="https://gtoday-shguy.c9users.io/growstoday/grows_today/" target="_blank">
		<?php
        header_metas_and_tags();    		
    		include 'data/head_CSS.php'; ?> 
  </head>
  <body style="direction:rtl">
  	

  
  <?php
	/*
    * Build dataTabel html structure
    */
    
     $db = new Database();
    
    /*
    * Get grows product data from DB
    */
   
	$product = $db->query('	SELECT name, January, February, March, April, May, June, July, August, September, October, November, December
	                		FROM product, sowing_calander
							WHERE product.id = sowing_calander.product_id
							AND product.active = 1');
	$product = $db->resultset();
	
	$table = new Table();
	$table->table(	'growtable',
            		'display nowrap dataTable dtr-inline collapsed',
                	'0',
	            	'100%');
	$table->sectionsingle(array_keys($product[0]),'thead','th');
	$table->sectionsingle(array_keys($product[0]),'tfoot','td');
	$table->sectionarray($product,'tbody','td');
	
	echo $table->execute();





?>

    <?php include 'data/footer_JS.php' ?>
  </body>
</html>

