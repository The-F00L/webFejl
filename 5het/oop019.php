<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<h3>Családneves</h3>
<form>
	Add meg a családneved:<br />
	<input type="text" name="input_csaladnev"><br />
	Add meg a utóneved:<br />
	<input type="text" name="input_utonev"><br />
	Add meg a korod:<br />
	<input type="number" name="input_kor"><br />
	<input type="hidden" name="action" value="cmd_vegrehajt">
	<input type="submit" value="Végrehajt">	
</form>
<?php
if (isset($_GET["action"]) and $_GET["action"]=="cmd_vegrehajt"){
	if (isset($_GET["input_csaladnev"]) and 
		!empty($_GET["input_csaladnev"]) and 
		isset($_GET["input_utonev"]) and 
		!empty($_GET["input_utonev"]) and 
		isset($_GET["input_kor"]) and 
		is_numeric($_GET["input_kor"]) and 
		$_GET["input_kor"] > 0
		){
		$output = new neves($_GET["input_csaladnev"],
							$_GET["input_utonev"],
							$_GET["input_kor"]);	
	}
}
?>
</body>
</html>
<?php
class neves{
	public $szam = 0;
	public function __construct($csaladnev, $utonev, $kor){
		self::set_csaladnev($csaladnev);
		self::set_utonev($utonev);
		self::set_kor($kor);
		// ...
		echo self::get_csaladnev() . " " .
			 self::get_utonev() . " " .
			 self::get_kor() . " éves vagy!<br />";
	}
	public function set_csaladnev($szam){ $this->csaladnev = $szam; }
	public function get_csaladnev(){ return $this->csaladnev; }	
	
	public function set_utonev($szam){ $this->utonev = $szam; }
	public function get_utonev(){ return $this->utonev; }	
	
	public function set_kor($szam){ $this->kor = $szam; }
	public function get_kor(){ return $this->kor; }
	
}
?>