<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Wattmetrul</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>11. Wattmetrul</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>Puterea într-un circuit electric este produsul dintre tensiune şi curent. Prin urmare, orice aparat de măsura a puterii trebuie să poată măsură ambele variabile.</p>

<p>Un mecanism de deplasare priectat special pentru măsurarea puterii este mecanismul de tip dinamometru. Structura acestuia este similară modelelor D'Arsonval şi Weston, cu diferenţa că se utilizează o bobină (staţionară) în locul unui magnet permanent pentru generarea câmpului magnetic. Bobina mobilă este în general alimentată de la tensiunea circuitului, iar bobina staţionară este alimentată de curentul circuitului. Într-un cirucuit, o astfel de strucutră arată astfel:</p>

#+CAPTION: conectarea wattmetrului în circuit
[[../poze/00181.png]]

<p>Bobina de sus (orizontală) măsoară curentul, în timp ce bobina de jos (verticală) măsoară căderea de tensiune. La fel ca în cazul voltmetrelor, deplasarea dinamometrului este de obicei conectată în serie cu un rezistor pentru a nu aplica întreaga cădere de tensiune pe mecanism. Asemanător, bobina (staţionară) de curent va fi prevăzută cu rezistori de şunt pentru a diviza curentul în jurul acesteia. Totuşi, de multe ori nu este nevoie de rezistori de şunt, deoarece grosimea conductorului din care este realizată bobina staţionară poate fi oricât de mare (pentru reducerea curentului), fără a influenţa răspunsul aparatului de măsură. Bobina mobilă nu se poate bucura de această „libertate”, deoarece ea trebuie realizată din conductori cât mai usori pentru a o inerţie minimă.</p>

#+CAPTION: electrodinamometru
[[../poze/00182.png]]




<p class="sumar">Sumar:</p>
<ul>
	<li></li>
	<li></li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
