<?php
//  példányosítás, meghívások, stb...
$kimenet = new osztalynev();// példányosítás
$kimenet->metodusnev(); // metódus meghívása


//osztály létrehozása
class osztalynev{
	
	public function metodusnev(){
		echo "CzT";
	}
	
}

?>