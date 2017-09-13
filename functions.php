<?php 
	function getData($SQLString){    
    	$news = array(); 
        $sql = mysql_query("$SQLString");        
        while($row = mysql_fetch_assoc($sql)){
            $news[] = $row;
        }        
        return $news;
	}
	function sanitize($data){
		return htmlentities(strip_tags(mysql_real_escape_string($data)));
	}

	function array_sanitize(&$item){
		$item = htmlentities(strip_tags(mysql_real_escape_string($item)));
	}


 ?>