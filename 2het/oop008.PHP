<?php

$negyzet = new kerter();
$negyzet->oldal = rand(1,10);
echo "A négyzet oldala: " . $negyzet->oldal . "<br />";
echo "A négyzet kerülete: ";
	$negyzet->cmd_kerulet();
	echo $negyzet->kerulet;
echo "<br />";
echo "A négyzet területe: "; 
	echo $negyzet->ki_terulet();
echo "<br />";

class kerter{
	public $oldal;
	public $kerulet;
	public function cmd_kerulet(){
		$this->kerulet = $this->oldal*4;
	}	
	public function ki_kerulet(){
		echo $this->oldal*4;
	}
	public function ki_terulet(){
		echo $this->oldal*$this->oldal;
	}
}

$negyzet2 = new kerter();
$negyzet2->oldal = rand(1,10);
echo "A négyzet oldala: " . $negyzet2->oldal . "<br />";
echo "A négyzet kerülete: " . ($negyzet2->oldal*4) . "<br />";
echo "A négyzet területe: " . ($negyzet2->oldal*$negyzet2->oldal) . "<br />";
/*
2. osztály elkészítése az alábbi kódrészletre:
   $PozNegNull = new elojel();
   $PozNegNull->szam = rand(-5,5);
   if ($PozNegNull->szam>0) echo "Pozitív"; .....
*/
/*
1. osztály neve: negyzet
   adattagok: oldal
   kiíratás: kerület, terület
*/

?>