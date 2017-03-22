<?php 
	include 'classes/wrapper.php';
	include 'lang/index.he.php';
	include 'data/index.php';
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

    <?php include 'topnav.php'; 
          echo $page_banner;   ?>
    
    <div class="container">
      
      <!-- Page H2 header -->
		  <?php echo $heading ?>
		  
    	<!-- DataTable Section -->
      <div class="row">
		  	<div class="col-md-12">
		    	<h2>טבלת שתילה</h2>
		      <?php echo $table->execute();?>  
		    </div>
			</div>
			
      <!-- Example row of columns -->
      <?php echo $lang['SECTION_1']['texts'];?>
      
   	</div>

      <hr>

      <footer>
        
          <?php include 'footer.php'; ?>
          
      </footer>
    </div> <!-- /container -->

    <?php include 'data/footer_JS.php' ?>
    
  </body>
</html>
