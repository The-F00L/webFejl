<?php
$pisti = new szemelyek();
$pisti->nev = "Istvan"; // értékadás
//$pisti->kor = 18;
echo "Pisti hivatalos formája: " . $pisti->nev; // hivatkozás

class szemelyek{
	public $nev;
	//public $kor
}
/* Feladatok:
1. osztály neve: negyzet
   adattagok: oldal
   kiíratás: kerület, terület
2. osztály elkészítése az alábbi kódrészletre:
   $PozNegNull = new elojel();
   $PozNegNull->szam = rand(-5,5);
   if ($PozNegNull->szam>0) echo "Pozitív"; .....

*/
?>