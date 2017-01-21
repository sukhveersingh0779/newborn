<?php 

	include_once("header.php");  
	
	
	//print_r($content);

	$body_part = $content ? "$content.php":"loginbar.php";
	include_once('pages/'.$body_part);
	
	include_once("footer.php"); 
	 
?>
