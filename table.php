<?php 
	include 'data/table.php';
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
     
    <?php echo $top_menu_html;
          echo $page_banner;   ?>
          
    <div class="container">
      <!-- Page H2 header -->
		  <?php echo $heading ?>
      <div class="row">
		  	<div class="col-xs-12">
		  	  <!-- DataTable Section -->
		      <?php echo $table_html;?>  
		    </div>
			</div>
      <hr>
      <footer>
          <?php include 'footer.php'; ?>
      </footer>
    </div> <!-- /container -->
    <?php include 'data/footer_JS.php' ?>
  </body>
</html>