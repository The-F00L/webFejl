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
	$output->szam = rand(1,10); // értékadás
	echo "<h3>Az eredeti szám: " . $output->szam . "<h3>";
	echo "<h3>Háromszoros: " . ($output->szam*3) . "<h3>";
?>
</body>
</html>

<?php

class tobbszoros{
	public $szam = 0;	
}

?>