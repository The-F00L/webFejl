<!DOCTYPE html>
<html>
	<head>
		<title>008 PHP</title>
	</head>
	<body>
		
	<h2>Indexelt tömb</h2>
		<?php
		//tömb létrehozása
		$gyumolcsok = array("banán", "körte", "eper");
		//tömb elemének kiíratása:
		echo "<p>Az első gyümölcs: " . $gyumolcsok[0] . ".</p>"; 
		echo "<p>A második gyümölcs: " . $gyumolcsok[1] . ".</p>"; 
		echo "<p>Az harmadik gyümölcs: " . $gyumolcsok[2] . ".</p>"; 
		echo "<p>A gyümölcsök száma: " . count($gyumolcsok). "</p>";
		// új érték hozzáadása
		$gyumolcsok[3] = "Paradicsom";
		echo "<p>A negyedik gyümölcs: " . $gyumolcsok[3] . ".</p>"; 
		// elemek számának kiíratása
		echo "<p>A gyümölcsök száma: " . count($gyumolcsok). "</p>";
		echo "<p>A negyedik gyümölcs régi neve: " . $gyumolcsok[3] . ".</p>"; 
		// elem értékének felülírása
		$gyumolcsok[3] = "alma";
		echo "<p>A negyedik gyümölcs új neve: " . $gyumolcsok[3] . ".</p>"; 
		
		// tömb elemeinek kiíratása ciklussal
		for($i=0; $i<count($gyumolcsok);$i++){
			echo $gyumolcsok[$i].", ";
		}
		echo "<br />";
		// tömb elemeinek kiíratása ciklussal
		foreach($gyumolcsok as $gyumolcs){
			echo $gyumolcs . ", ";
		}
		?>
	<h2>Asszociatív tömb</h2>
		<?php 
		// kulcs=>érték
		$szemelyek = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
		echo "<p>Péter tavaly: " . $szemelyek["Peter"] . "éves volt,<br />";
		$szemelyek["Peter"] = 36;
		echo "Péter idén már " . $szemelyek["Peter"] . "éves!</p>";
		foreach($szemelyek as $kulcs => $ertek){
			echo "<p>" . $kulcs . ", " . $ertek . "</p>";
		}
		?>
	<h2>Többdimenziós tömb</h2>
		<?php
		$cars = array
			(
			array("Wolvo",22,18),
			array("BMW",15,13),
			array("Saab",5,2),
			array("Land Rover",17,15)
			);
		$cars[0][0] = "Volvo";
		echo "<p>Az első autó neve: " . $cars[0][0] . "</p>";
		echo "<p>Az első autó készlet: " . $cars[0][1] . "</p>";
		echo "<p>Az első autó eladott: " . $cars[0][2] . "</p>";
		
		for($i=0;$i<count($cars);$i++){
			for($j=0;$j<count($cars);$j++){
				echo "<p>" . $cars[$i][$j]. "</p>";
			}
		}
		echo "<pre>"; var_dump($cars);echo "</pre>"; 
		
		echo "#############################<br />";
		$telefonok = array
			(
			array("iPhone 5S & iPhone 5C" , 2013),
			array("iPhone 6 & 6 Plus" , 2014),
			array("iPhone 6s & 6s Plus" , 2015)
			);
		
		foreach($telefonok as $telefon){
			echo $telefon[1] . ".: " . $telefon[0] . "<br />"; 
		}
		
		echo "#############################<br />";
		/*echo "#############################";
		$telefonok = array(
				"iPhone 8 & 8 Plus" => "2017, September 22",
				"iPhone 7 & 7 Plus" => "2016, September 16",
				"iPhone X" => "2017, November 3",
				"iPhone XS & XS Max" => "2018, September 21",
				"iPhone XR" => "2018, October 26"
			);
		ksort($telefonok);
		foreach($telefonok as $telefon_nev => $telefon_kiadasidatum){
			echo "<p>";
				echo $telefon_kiadasidatum;
					echo ".: ";
				echo $telefon_nev;
			echo "</p>";
		}			
		echo "<pre>"; var_dump($telefonok);echo "</pre>" 			
		echo "#############################";*/
		?>
	</body>
</html>
<!--
Feladatok tömbökre:

	Egydimenziós tömbök:
	
		1. feladat:
			Hozz létre egy tömböt,
			a neve legyen: batman_filmek,
			töltsd fel legalább 5 elemmel
			Írasd ki őket egymás alá felsorolásként
			("4 Batman és Robin",
			 "1 Batman",
			 "2 Batman visszatér",
			 "5 Batman: kezdődik",
			 "3 Batman mindörökké")

		1.1. feladat:
			1-es feladat kiegészítése:
			Programozd le a feladatot úgy,
			hogy növekvő sorrendben listázódjonak ki a filmek!
			[Önálló leprogramozás!!!]
		1.2. feladat:
			1-es feladat kiegészítése:
			Csökkenő sorrendben írasd ki a filmeket!
			[Beépített fgv!]
			
		2. feladat:

			Hozz létre egy tömböt,
			a tömb neve legyen: osztalytarsak,
			töltsd fel az osztálytársaid nevével azt,
			a nevek sorszámozott listában jelenjenek meg,
			h1-es tagben az osztály neve legyen a lista előtt,
			a lista tagjai pedig paragrafusok között
		
		3. feladat:
			Hozz létre egy tömböt,
			a neve legyen x_man_filmek,
			töltsd fel legalább 5 elemmel,
			Írasd ki a tömb elemeit egy táblázatban,
			a táblázat legyen két oszlopos,
			az elsőben sorszám legyen,
			a második oszlopban a film neve,
			a táblázat rendelkezzen fejléccel!
		
	Többdimenziós vagy asszociatív tömbök:
		
		1. feladat:
			(Ez a feladat megoldható asszociatív tömbbel is, vagy vegyessel!)
			Hozz létre egy többdimenziós tömböt,
			a tömb tartalmazza az össze Iphone-t és kiadási évét,
			listázd ki a kiadási évet és a telefon nevét,
			felsorolásként
			(segítség:
				iPhone 3G: July 11, 2008 
				iPhone 3GS: June 19, 2009
				iPhone 4: June 24, 2010
				iPhone 4S: October 14, 2011
				iPhone 5: September 21, 2012
				iPhone 5S & iPhone 5C: September 20, 2013
				iPhone 6 & 6 Plus: September 19, 2014
				iPhone 6s & 6s Plus: September 19, 2015
				iPhone SE: March 31, 2016
				iPhone 7 & 7 Plus, September 16, 2016
				iPhone 8 & 8 Plus, September 22, 2017
				iPhone X, November 3, 2017
				iPhone XS & XS Max, September 21, 2018
				iPhone XR, October 26, 2018)
		
		1.1. feladat:
			Az előző feladat kiegészítése: kiadási év szerint csökkenő sorrendben listázd,
			felsorolásban írasd ki

		1.2. feladat:
			Az előző feladat kiegészítése: kiadási év szerint növekvő sorrendben listázd,
			felsorolásban írasd ki
			
		1.3. feladat:
			Az előző feladat kiegészítése: a telefon neve szerint növekvő sorrendben listázd,
			sorszámozásban írasd ki
			
		1.4. feladat:
			Az előző feladat kiegészítése: a telefon neve szerint csökkenő sorrendben listázd,
			sorszámozásban írasd ki			
			
		3. feladat:
			(Ez a feladat megoldható asszociatív tömbbel is, vagy vegyessel!)
			Hozz létre egy többdimenziós tömböt,
			a tömb neve legyen terminators,
			a tömb tartalmazza a filmek kiadási dátumát és a filmcímet!
			A kiíratást sorszámozott listában valósítsd meg,
			a sorszámozás adott értéke legyen mindig a film kiadási éve,
			(minta/segítség:
				1984: Terminátor – A halálosztó
				1991: Terminátor 2. – Az ítélet napja
				2003: Terminátor 3. – A gépek lázadása
				2015: Terminátor: Genisys
				2009: Terminátor: Megváltás
				2019: Terminátor: Sötét végzet)