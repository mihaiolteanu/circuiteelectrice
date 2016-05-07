<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Filtrul trece-bandă</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Filtrul trece-bandă</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Există aplicaţii în care este nevoie de filtrarea unei anumite benzi de frecvenţe din totalul frecvenţelor prezente în semnal. Circuitele de filtrarea realizate pentru îndeplinirea acestui obiectiv pot dintr-un filtru trece-jos şi unul trece-sus, conectate împreună. Rezultatul este un filtru denumit <i>trece-bandă</i>. Diagrama prin care pot fi combinate cele două tipuri de filtre, arată în felul următor:</p>

<p><img src="../poze/02260.png" alt="diagrama bloc a principiului de combinare a filtrelor trece-jos şi trece-sus pentru formarea filtrului trece-bandă"/></p>

<p>Rezultatul acestei combinaţii serie dintre cele două filtre este un circuit ce va permite trecerea acelor frecvenţe ce se regăsesc între cele două limite, nici mai mari, nici mai mici.</p>

<h3>Filtrul trece-bandă capacitiv</h3>

<p>Folosind componente reale, circuitul electric al filtrului trece-bandă asfel conceput, arată asfel:</p>

<p><img src="../poze/02121.png" alt="circuitul electric al filtrului trece-bandă compus dintr-un filtru trece-jos capacitiv şi un filtru trece-sus capacitiv conectate în serie"/></p>

<p>Să vedem şi răspunsul în frecvenţă (diagrama Bode) a filtrului capacitiv trece-bandă:</p>

<p><img src="../poze/22031.png" alt="răspunsul în frecvenţă (diagrama Bode) al filtrului trece-bandă compus dintr-un filtru trece-jos capacitiv şi un filtru trece-sus capacitiv conectate în serie"/></p>

<h3>Filtrul trece-bandă inductiv</h3>

<p>Filtrele trece-bandă pot fi construite folosind elemente inductive, dar, după cum am mai menţionat, filtrele capacitive sunt preferate în locul celor inductive datorită „purităţii” reactive a condensatoarelor. Circuitul electric al filtrului inductiv arată asfel:</p>

<p><img src="../poze/02122.png" alt="circuitul electric al filtrului trece-bandă inductiv"/></p>

<p>Faptul că filtrul trece-sus se află poziţionat înainte filtrului trece-jos, nu are nicio importanţă din punct de vedere al funcţionalităţii filtrului.</p>

<h3>Limitele unui asfel de filtru</h3>

<p>Deşi idea combinării celor două filtre, trece-jos şi trece-sus, într-unul singur, pentru a realiza un filtru trece-bandă, este bună, aceasta posedă şi unele dezavantaje. Deoarece acest tip de filtru funcţionează utlizând proprietatea fiecărui filtru în parte de a <i>bloca</i> frecvenţele nedorite, construirea unui asfel de filtru, asfel încât să nu blochează în anumită măsură şi frecvenţele din banda dorită, este de obicei dificilă. Atât filtrul trece-jos cât şi filtrul trece-sus vor bloca toate semnalele într-o anumită măsură, iar efectul lor combinat se traduce printr-o amplitudine redusă a semnalului chiar şi în domeniul frecvenţelor dorite (de trecere). Putem obseerva acest lucru din diagrama de mai sus, unde tensiunea sarcinii nu depăşeste valoarea de 0.6 V, deşi tensiunea sursei este de 1 V. Această atenuare a semnalului de ieşire devine şi mai pronunţată în cazul în care filtrul are un scop mult mai restrictiv (pantă mai mare a undei, banda de trecere a frecvenţelor mai îngustă).</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Un filtru trece-bandă blochează frecvenţele care sunt prea mici sau prea mari, permiţând trecerea acelor frecvenţe ce se regăsesc într-un anumit domeniu de frecvenţe</li>
	<li>Filtrele trece-bandă pot fi construite prin conectarea în serie a unui filtru trece-jos şi a unui filtru trece-sus, indiferent de ordinea lor</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>