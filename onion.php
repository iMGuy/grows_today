<?php 

/*  http://bootsnipp.com/snippets/featured/user-detail-panel  */
	include 'data/onion.php';
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
        <!-- Example row of columns -->
        <?php // echo $lang['SECTION_1']['texts'];?>
        		<div class="col-sm-12 col-md-12 user-details">
            <div class="user-image">
                <img src="http://www.gravatar.com/avatar/2ab7b2009d27ec37bffee791819a090c?s=100&d=mm&r=g" alt="Karan Singh Sisodia" title="Karan Singh Sisodia" class="img-circle">
            </div>
            <div class="user-info-block">
                <div class="user-heading">
                    <h3>Karan Singh Sisodia</h3>
                    <span class="help-block">Chandigarh, IN</span>
                </div>
                <ul class="navigation">
                    <li class="active">
                        <a data-toggle="tab" href="#information">
                            <span class="glyphicon glyphicon-info-sign"></span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#settings">
                            <span class="glyphicon glyphicon-question-sign"></span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#email">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#events">
                            <span class="glyphicon glyphicon-leaf" ></span>
                        </a>
                    </li>
                </ul>
                <div class="user-body">
                    <div class="tab-content">
                        <div id="information" class="tab-pane active">
                            <h4>Account Information</h4>
                        </div>
                        <div id="settings" class="tab-pane">
                            <h4>Settings</h4>
                        </div>
                        <div id="email" class="tab-pane">
                            <h4>Send Message</h4>
                        </div>
                        <div id="events" class="tab-pane">
                            <h4>Events</h4>
                        </div>
                    </div>
                </div>
            </div>
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