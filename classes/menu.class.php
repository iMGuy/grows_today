<?php
	class Menu{
		
	    private $menu;
		
	    public function __construct(){
			
			$this->menu = '';
	        
	    }
	    
	    /**
		* returns the menu HTML with relevent settings
		* @param: $id - The css id of the table
		* @param: $class - The css class of the tabel
		* @param: $cellspacing - The cellspacing in the table 
		* @param: $width - The table width
		*/
	    
	    public function menu_nav_wrapper($arr) {
            
            $temp_html ='';	        
	        // Building the main Nav Tag
	        $temp_html = $temp_html . '   <!-- Top menu source http://bootsnipp.com/snippets/n2Gd8 --> <nav ';
            
            if (!empty($arr['class'])) { 
                $temp_html = $temp_html . 'class="' . $arr['class'] .'" ';
            }
            
            if (!empty($arr['id'])) { 
                $temp_html = $temp_html . 'class="' . $arr['id'] .'"';
            }
            
            $temp_html = $temp_html . '>';
            $this->menu = $temp_html . $this->menu . '</nav>';
	    }
	    
	    public function menu_div_wrapper($arr) {
            
            $temp_html ='';	        
            // Building the main div Tag
            $temp_html = $temp_html . '<div ';
            if (!empty($arr['class'])) { 
                $temp_html = $temp_html . 'class="' . $arr['class'] .'" ';
            }
            
            if (!empty($arr['main_div']['id'])) { 
                $temp_html = $temp_html . 'class="' . $arr['id'] .'"';
            }
            
            $this->menu = $temp_html . '>' . $this->menu . '	</div>';
	    }
	    
	    public function menu_pages_wrapper() {
	   
	    	$this->menu = '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">' . $this->menu . '</div>';
	    	
	    }
	    
	    public function menu_section_wrapper() {
	    	
	    	$this->menu = '<ul class="nav navbar-nav navbar-right">' . $this->menu . '</ul>';
	    }
	    
	    
	    public function menu_sections($arr) {
			
			foreach ($arr as $name => $link) {
				
				if (is_array($link)) {
					
					$this->menu = $this->menu . '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">' . $name .'<span class="caret"></span></a>';
					
					$this->menu = $this->menu . '<ul class="dropdown-menu">';
					$this->menu_sections($link);
					$this->menu = $this->menu . '</ul></li>';
					
				} else {
					
					if ($name == 'separator') {
						
						$this->menu = $this->menu . '<li role="separator" class="' . $link . '"></li>';
					
					} else {
						$this->menu = $this->menu . '<li><a href="' . $link . '">' . $name . '</a></li>';	
					}	
				}
			}
	        
	    }
	    
	    public function menu_header($text='',$link='#') {
			
			$this->menu = '	<!-- Brand and toggle get grouped for better mobile display -->
						    <div class="navbar-header">
						      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						      </button>
						      <a class="navbar-brand" href="' . $link .'">' . $text .'</a>
						    </div>'. $this->menu;
	    }
	
	    public function execute() {
	    	
	    	return $this->menu;
	    	
	    }
	    
	    
	}
?>