<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<h3>Dupláz</h3>
<form>
	Kérek egy számot:<br />
	<input type="number" name="input_szam"><br />
	<input type="hidden" name="action" value="cmd_duplaz">
	<input type="submit" value="Dupláz">	
</form>
<h3>Tripláz</h3>
<form>
	Kérek egy számot:<br />
	<input type="number" name="input_szam"><br />
	<input type="hidden" name="action" value="cmd_triplaz">
	<input type="submit" value="Tripláz">	
</form>

<?php
if (isset($_GET["action"]) and $_GET["action"]=="cmd_duplaz") {
	if (isset($_GET["input_szam"]) and
		is_numeric($_GET["input_szam"]) and 
		!empty($_GET["input_szam"])
	) {
		$output = new sokszoroz(2,$_GET["input_szam"]);
	}
}

if (isset($_GET["action"]) and $_GET["action"]=="cmd_triplaz") {
	if (isset($_GET["input_szam"]) and
		is_numeric($_GET["input_szam"]) and 
		!empty($_GET["input_szam"])
	) {
		$output = new sokszoroz(3,$_GET["input_szam"]);
	}
}

?>

</body>
</html>
<?php
class sokszoroz{
	public $szam = 0;
	public function __construct($hatvany, $ertek){
		self::set_szam($ertek);
		if ($hatvany==2){ self::cmd_duplaz(); }
		if ($hatvany==3){ self::cmd_triplaz(); }
		echo "A számom: " . $hatvany . "x: " . self::get_szam() . "<br />";
	}
	public function set_szam($szam){ $this->szam = $szam; }
	public function get_szam(){ return $this->szam; }
	public function cmd_duplaz(){ $this->szam=2*$this->szam; }
	public function cmd_triplaz(){ $this->szam=3*$this->szam; }
	
}
?>