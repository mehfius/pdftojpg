<?php

function createDir($dir){

	if(is_dir($dir)){
		//echo "existe";
	}else{
	
		mkdir($dir, 0777);
		
	}
	
}

?>