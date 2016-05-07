<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Echivalenţa teoremelor Thevenin-Norton</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>9. Echivalenţa teoremelor Thevenin-Norton</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Din moment ce ambele teoreme, atât Thevenin cât şi Norton, reprezintă metode valide de reducere a reţelelor complexe spre circuite mult mai simple şi uşor de analizat, trebuie să existe un procedeu de transformare a unui circuit Thevenin echivalent într-unul Norton echivalent.</p>

<p>Metoda de calcuare a rezistenţei este aceeiaşi în ambele cazuri: îndepărtarea tuturor surselor de putere şi determinarea rezistenţei între punctele de conexiune rămase libere. Cele două rezistenţe sunt prin urmare egale:</p>

<p><img src="../poze/00241.png" alt="circuit electric"/></p>
<p><img src="../poze/00245.png" alt="circuit electric"/></p>

<p><img src="../poze/10197.png" alt="formulă"/></p>

<p>Luând în considerare faptul că ambele circuite echivalente sunt gândite să se comporte asemenea reţelei originale în ceea ce priveşte alimentarea sarcinii cu tensiune şi curent electric, circuitele Thevenin şi Norton ar trebui şi ele să se comporte identic.</p>

<p>Acest lucru se traduce prin faptul că ambele circuite ar trebui să producă aceeiaşi cădere de tensiune între punctele de contact ale sarcinii, atunci când aceasta nu este prezentă în circuit. Pentru circuitul Thevenin, căderea de tensiune pentru circuitul deschis trebuie să fie egală cu sursa de tensiune Thevenin, 11.2 voţi în acest caz. În cazul circuitului Norton, toţi cei 14 amperi generaţi de sursa de curent trebuie să treacă prin rezistenţa de 0.8 ohmi, producând prin urmare o cădere de tensiune de 11.2 volţi (E=IR). Putem susţine asfel că tensiunea Thevenin este egală cu, curentul Norton înmulţit cu rezistenţa Norton:</p>

<p><img src="../poze/10198.png" alt="formulă"/></p>

<p>Transformarea unui circuit Norton într-un circuit Thevenin se realizează folosind aceeiaşi valoare a rezistenţei şi calculând tensiunea Thevenin cu ajutorul legii lui Ohm.</p>

<p>În aceeiaşi ordine de idei, atât circuitul Thevenin cât şi circuitul Norton ar trebui să genereze aceeiaşi cantitate de curent printr-un scurt circuit între terminalii sarcinii, atunci când aceasta nu este prezentă în circuit. În circuitul Norton, curentul de scurt circuit este exact curentul sursei (de curent), 14 amperi în acest caz. În circuitul Thevenin, întreaga cădere de tensiune de 11.2 volţi se regăseşte la bornele rezistorului de 0.8 ohmi, ceea ce produce exact acelaşi curent prin scurt (circuit), 14 amperi (I=E/R). Putem susţine asfel că, curentul Norton este egal cu tensiune Thevenin împărţită la rezistenţa Thevenin:</p>

<p><img src="../poze/10199.png" alt="formulă"/></p>

<p>Vom utiliza relaţia de echivalenţă dintre cele două teorema în următoarea secţiune.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Rezistenţele Thevenin şi Norton sunt egale</li>
	<li>Tensiunea Norton este egală cu, curentul Norton înmulţi cu rezistenţa Norton</li>
	<li>Curentul Norton este egal cu tensiune Thevenin împărţită la rezistenţa Thevenin</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>