<!DOCTYPE html>
<html>
	<head>
		<title>014 PHP</title>
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
		
		// Töm eleminek száma
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

	</body>
</html>
<!--
Feladatok tömbökre:

1. feladat:
	
	Tölts fel egy 10 elemű tömböt 1 és 10 közötti számokkal!
	Írasd ki!
	

2. feladat:
	
	Tölts fel egy 5 elemű tömböt 1 és 100 közötti számokkal!
	Írasd ki a tömb elemeinek számát!
	Írasd ki!
	
2. feladat:
	
	Tölts fel egy 100 elemű tömböt 1 és 200 közötti számokkal!
	Írasd ki a tömb elemeinek számát!
	a. Írsd ki a tömb elemeinek összegét!
	b. A legkisebb elemet!
	c. A legnagyobb elemet!
	d. A tömb elemeinek átlagát!
	e. Számoljuk meg a páros elemek számát!
	f. Számoljuk meg a páratlan elemek számát és azok összegért írassuk ki!
	g. Számoljuk meg a hárommal és öttel osztható elemek darabszámát!
	h. 1 és 200 között generálj egy számot,
	   Írasd ki, hogy a tömbben van-e ilyen szám! (Igen/nem)
	i. 1 és 200 között generálj egy számot,
	   Ha van ilyen, akkor írasd is ki azt!
	   
	i. 1 és 200 között generálj egy számot,
	   Ha van ilyen, akkor írasd is ki!
	   Ha van több ilyen, akkor számoltasd meg!
	
	x. Rendezd az elemek növekvő sorrendbe! (Manuális programozás)
	y. Rendezd az elemek csökkenő sorrendbe! (Fgv segítségével)
	 


















