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
		$output = new sokszoroz();
		$output->set_szam($_GET["input_szam"]);
		$output->cmd_duplaz();
		echo "A számom duplája: " . $output->get_szam() . "<br />";
	}
}

if (isset($_GET["action"]) and $_GET["action"]=="cmd_triplaz") {
	if (isset($_GET["input_szam"]) and
		is_numeric($_GET["input_szam"]) and 
		!empty($_GET["input_szam"])
	) {
		$output = new sokszoroz();
		$output->set_szam($_GET["input_szam"]);
		$output->cmd_triplaz();
		echo "A számom triplája: " . $output->get_szam() . "<br />";
	}
}

?>

</body>
</html>
<?php
class sokszoroz{
	public $szam = 0;
	public function set_szam($szam){ $this->szam = $szam; }
	public function get_szam(){ return $this->szam; }
	public function cmd_duplaz(){ $this->szam=2*$this->szam; }
	public function cmd_triplaz(){ $this->szam=3*$this->szam; }
	
}
?>