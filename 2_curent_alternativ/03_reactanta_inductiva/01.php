<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuite rezistive în curent alternativ</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Circuite rezistive în curent alternativ</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Să considerăm un circuit de curent alternativ pur rezistiv, caz în care tensiunea şi curentul sunt în fază (unghiul de defazaj dintre ele este 0<sup>o</sup>):</p>

<p><img src="../poze/02053.png" alt="circuit de curent alternativ pur rezistiv - tensiunea şi curentul sunt în fază"/></p>

<p>Dacă trecem curentul şi tensiunea din circuitul de mai sus pe un grafic, acesta va arăta aproximativ asfel:</p>

<p><img src="../poze/02054.png" alt="graficul tensiunii şi al curentului în cazul unui circuit circuit de curent alternativ pur rezistiv"/></p>

<p>Deoarece rezistorul se opune pur şi simplu deplasării electronilor prin circuit în mod direct, în orice moment din timp, forma de undă a căderii de tensiune pe rezistor este exact în fază cu forma de undă a curentului prin acesta. Putem lua în considerare orice punct de pe axa orizontală a graficului şi compara valorile curentului şi ale tensiunii între ele (aceste puncte poartă denumirea de <i>valori instantanee</i>). Asfel, atunci când valoarea instantanee a curentului este zero, valoarea instantanee a tensiunii este şi ea zero. De asemenea, atunci când curentul prin rezistor atinge valoarea sa maximă pozitivă, tensiunea la bornele sale este şi ea la valoarea sa maximă pozitivă. În orice punct de-a lungul formelor de undă, putem aplica legea lui Ohm pentru valorile instantanee a curentului şi tensiunii.</p>

<p>Putem de asemenea să calculăm puterea disipată de rezistor şi să completăm graficul asfel:</p>

<p><img src="../poze/02055.png" alt="graficul tensiunii, curentului şi a puterii disipate în cazul unui circuit circuit de curent alternativ pur rezistiv"/></p>

<p>Se poate observa de pe grafic faptul că puterea nu are niciodată o valoarea negativă. Atunci când valoarea curentului este pozitivă, şi tensiunea este pozitivă, produsul celor două (p=ie) fiind prin urmare pozitiv. Atunci când curentul este negativ, şi tensiunea este negativă, ceea ce se traduce din nou printr-un produs pozitiv între cele două. Această polaritate unică ne spune de fapt că rezistorul disipă tot timpul putere ce este generată de sursă şi degajată de acesta sub formă de căldură. Indiferent de valoarea curentului, pozitivă sau negativă, un rezistor va disipa tot timpul energie.</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>