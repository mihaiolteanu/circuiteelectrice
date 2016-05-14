<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>De ce hărţi Karnaugh</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. De ce hărţi Karnaugh</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>La ce ne folosesc hărţile Karnaugh? Harta Karnaugh, asemenea algebrei booleene, este o metodă de simplificare a circuitelor logice digitale. Vedeţi exemplul „incineratorului de deşeuri toxice” ca şi exemplu de simplificare booleană a unui circuit logic. Harta Karnaugh va simplifica circuitul mult mai rapid şi mai uşor în majoritatea cazurile.</p>

<p>Simplificarea booleană este de fapt mai rapidă în cazul în care avem maxim două variabile booleene. Putem folosi această metodă chiar şi în situaţia în care avem trei variabile, dar metoda booleană este mai greoaie în acest caz. Cu patru variabile de intrare, algebra booleeană devine „imposibilă”. Hărţile Karnaugh sunt mai rapide şi mai uşor de implementat. Acestea pot fi folosite cu succes în situaţiile în care avem până la şase variabile de intrare. Între şase şi opt, mai putem încă folosi aceste hărţi. Peste această valoare, este indicat să folosim un program software specializat pentru realizarea simplificărilor logice.</p>


#+CAPTION: 
[[../poze/00000.png]]


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
