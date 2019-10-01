<?php

class site{
	public function doctype(){ echo "<!DOCTYPE html>"; }
	public function html_start(){ echo "<html>"; }
	public function html_stop(){ echo "</html>"; }	
	public function head_start(){ echo "<head>"; }	
	public function head_stop(){ echo "</head>"; }
	public function title(){ echo "<title>OOP</title>"; }
	public function body_start(){ echo "<body>"; }	
	public function body_stop(){ echo "</body>"; }	
	public function koszon(){ echo "<h1>Üdvözöllek!</h1>"; }
}

class basic{
	public function p_start(){
		echo "<p>";
	}
	public function p_stop(){
		echo "</p>";
	}
	public function ido(){
		echo date("H:i:s");
	}
}

?>