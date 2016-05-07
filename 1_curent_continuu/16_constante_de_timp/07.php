<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Rezolvarea circuitului pentru variabila timp</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>7. Rezolvarea circuitului pentru variabila timp</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>În unele cazuri este necesară determinarea duratei de timp pentru care circuitul va atinge o valoarea predeterminată. Acest lucru este în special întâlnit în cazurile în care proiectăm circuitul RC sau L/R pentru o aplicaţie în funcţie de timp. Pentru acest calcul, trebuie să modificăm formula universală a constantei de timp. Cea originală arată asfel:</p>

<p><img src="../poze/10263.png" alt="formulă"/></p>

<p>În acest caz dorim însă să realizăm un calcul în funcţie de timp. Pentru aceasta, modificăm formula, şi scoatem variabila timp în stânga formulei, în loc de „variaţie”:</p>

<p><img src="../poze/10276.png" alt="formulă"/></p>

<p>Unde <i>ln</i> reprezintă <i>logaritmul natural</i>: inversa lui <i>e</i>:</p>
<p>Dacă e<sup>x</sup> = a, atunci ln a = x: puterea la care trebuie ridicat <i>e</i> pentru a produce rezultatul <i>a</i></p>

<h3>Exemplu</h3>
<p>Folosim acelasi circuit rezistor-condensator de la începutul capitolului şi ne folosim de datele deja determinate pentru a afla durata de timp pentru a ajunge la ele:</p>

<p><img src="../poze/00330.png" alt="circuit RC"/></p>

<p>Constanta de timp este aceeiaşi, 1 secundă (10 kΩ înmulţit cu 100 µF); iar valorile iniţiale şi finale rămân şi ele neschimbate (tensiunea iniţială a condensatorului este iniţial 0 V, iar finală 15 V). După cum reiese din tabelul de la începutul capitolului (link!), după 2 secunde condensatorul va fi încărcat la 12.970 V. Să întroducem aşadar valoarea de 12.970 V în formula determinată mai sus pentru a vedea dacă timpul rezultat este de 2 secunde:</p>

<p><img src="../poze/10266.png" alt="formulă"/></p>

<p>Într-adevăr, răspunsul este cel aşteptat, şi anume 2 secunde. Putem însă afla duratele de timp necesare încărcarii condensatorului pentru oricare valoare din intervalul (iniţial, final). De exemplu, care este durata de timp pentru care condensatorul se încarcă la 10 V?</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>