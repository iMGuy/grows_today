<?php
	class Table{
		
	    private $table;
		
	    public function __construct(){
			
			$this->table      = '';
	        
	    }
	    
	    /**
		* returns the tabel HTML tag with relevent settings
		* @param: $id - The css id of the table
		* @param: $class - The css class of the tabel
		* @param: $cellspacing - The cellspacing in the table 
		* @param: $width - The table width
		*/
	     
		public function table($id='',$class='',$cellspacing='',$width='') {
			
			$this->table = '<table';
	
			if (!empty($id))				{ $this->table = $this->table . ' ID ="' . $id . '"'; }
			if (!empty($class)) 			{ $this->table = $this->table . ' class ="' . $class . '"'; }
			if (!empty($cellspacing))		{ $this->table = $this->table . ' cellspacing =' . $cellspacing . '"'; }
			if (!empty($width)) 			{ $this->table = $this->table . ' width =' . $width . '"'; }
			
			$this->table = $this->table . '>';
			
		}
		
		/**
		* returns tabel section with only one row
		* @param: $array - The row information array
		* @param: $section - The section tag (thead/tfoot/tbody)
		* @param: $cell - the cell tag (td/th) 
		*/
		
		public function sectionSingle($array=array(),$section='',$cell='') {
			
			if ((isset($array)) and (isset($section)) and (isset($cell)))  {
	
				$this->table = $this->table . '<' . $section . '><tr>';
				foreach ($array as $data) {
					
					$this->table = $this->table . "<" . $cell . ">" . substr($data,0,3) . "</" . $cell . ">";
							
				}
					
				$this->table = $this->table . '</tr></' . $section . '>';
			
			} 
		}
		
		/**
		* returns table section with more then one row
		* @param: $array - The row information array
		* @param: $section - The section tag (thead/tfoot/tbody)
		* @param: $cell - the cell tag (td/th) 
		*/
		
		public function sectionArray($array=array(),$section='',$cell='') {
			
			if ((isset($array)) and (isset($section)) and (isset($cell)))  {
				
				$this->table = $this->table . '<' . $section . '>';
				foreach ($array as $data) {
					
					if (is_array($data)) {
						
						$this->table = $this->table . '<tr>';
						foreach ($data as $var) {
					
							$this->table = $this->table . "<" . $cell . ">" . $var . "</" . $cell . ">";
							
						}
					
					$this->table = $this->table . '</tr>';
					}
				}
				
			$this->table = $this->table . '</' . $section . '>';
			}
		}
		
		public function execute() {
			
			$this->table = $this->table . '</table>';
			return $this->table;
		}

	}
	
	/* Example
	
	$table = new table();

	$table->table(  'example',
	                'display nowrap dataTable dtr-inline collapsed',
	                '0',
	                '100%'
	);
	
	
	$table->sectionsingle(array (1,2,3,4,5,6,),'thead','th');
	$table->sectionsingle(array (1,2,3,4,5,6,),'tfoot','td');
	$table->sectionarray(array (   array(1,2,3,4,5,6),
	                            array(1,2,3,4,5,6),
	                            array(1,2,3,4,5,6),
	                            array(1,2,3,4,5,6),
	                            array(1,2,3,4,5,6),
	                            array(1,2,3,4,5,6)),
	                            'tbody','td');
	
	$row = $table->execute();
	
	*/


?>



