<?php

    function readsys($section='') {
        
        $ini_array = parse_ini_file("config/sys.ini", true);
        if ($ini_array) {
            return $ini_array[$section];    
        }
        return $ini_array;
    }


	/**
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

?>