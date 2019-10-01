<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<form>
	Kérek egy számot:<br />
	<input type="number" name="input_szam"><br />
	<input type="submit" value="Dupláz">	
</form>

<?php
if (isset($_GET["input_szam"])) {
	$output = new sokszoroz();
	$output->set_szam($_GET["input_szam"]);
	$output->cmd_duplaz();
	echo "A számom duplája: " . $output->get_szam() . "<br />";
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
	
}
?>