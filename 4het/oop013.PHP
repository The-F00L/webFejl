<!--
generálj egy számot 1 és 10 között
írasd ki a tripláját
-->

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<?php
$output = new tobbszoros();
$output->set_szam(rand(1,10));
echo "<p>Eredeti: " . ($output->get_szam()) . "<p>";
$output->cmd_haromszor();
echo "<p>Új: " . ($output->get_tripla()) . "<p>";

?>
</body>
</html>

<?php

class tobbszoros{
	private $szam = 0;	
	
		public function set_szam($ertek){
			$this->szam = $ertek;
		}
		public function get_szam(){
			return $this->szam;
		}

	private $tripla = 0;	
		public function set_tripla($ertek){
			$this->tripla = $ertek;
		}
		public function get_tripla(){
			return $this->tripla;
		}	
		
	public function cmd_haromszor(){
		self::set_tripla(self::get_szam()*3);
	}
}

?>

<!--

legalább három feladat átírása
ilyen szerkezetre!

-->