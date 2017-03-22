<?php

    function readsys($section='') {
        
        $ini_array = parse_ini_file("config/sys.ini", true);
        if ($ini_array) {
            return $ini_array[$section];    
        }
        return $ini_array;
    }

	/*
	* returns array in a columns
	*/
	
    function print_arr($arr) {
    	foreach ($arr as $k=>$v) {
            echo $k."=> ";
            if (is_array($v)) {
                echo "<br />";
                print_arr($v);
            }
            else echo "$v";
            echo "<br />";
            
        }
    }
    
    function header_metas_and_tags() {
        
        global $lang;
        
        $arr = [    'TITLE',
                    'META_DESCRIPTION', 
                    'META_KEYWORDS', 
        ];
        
        foreach ($arr as $data) {
            $tag = explode('_',$data);
            switch ($tag[0]) {
                case "TITLE":
                    if ($lang[$data]) echo "<title>" . $lang['TITLE'] ."</title>";
                    break;
                case "META":
                    if ($lang[$data]) echo "<meta name=\"" . $tag[1] . "\" content=\"" . $lang[$data] . "\" />";
            }
        }
    }
    
    
    
?>