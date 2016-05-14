<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuite logice combinaţionale - introducere</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Circuite logice combinaţionale - introducere</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>Termenul „combinaţional” provine din matematică. În matematică, o combinaţie reprezintă o mulţime neordonata. Pe scurt, este un mod de a spune că nimănui nu-i pasă ordinea elementelor mulţimii respective. Majoritatea jocurilor funcţionează exact în acest fel: dacă aruncăm zarurile, pe rând, nu contează dacă am dat un 2 urmat de 3 sau un 3 urmat de 2; rezultatul este acelaşi. Acelaşi lucru este valabil şi pentru circuitele lorgice combinaţionale: ieşirea circuitului este identică indiferent de ordinea intrărilor.</p>

<p>Desigur, există şi circuite a căror ieşire depinde de ordinea intrărilor, iar aceste circuite poartă numele de circuite logice secvenţiale. Deşi nu există un capitol cu acest titlul, următoarele capitole din volumul electronicii digitale se vor ocupa cu aceste circuite secvenţiale.</p>

<p>Circuitele practice sunt realizate dintr-o combinaţie de circuite logice combinaţionale şi secvenţiale. Cele secvenţiale asigură faptul că totul se întâmplă într-o anumita ordine. Cele combinaţionale realizează funcţii artimetice, logice sau de conversie.</p>

<p>Am folosit deja circuite logice combinaţionale. Fiecare dintre porţiloe logice discute este un astfel de circuit. Să urmărim comportamentul a două porţi logice ŞI-negat, atunci când intrările acestora sunt alimentate în diferite combinaţii.</p>

<p>Când ambele intrări sunt 0:</p>

#+CAPTION: circuit logic combinaţional format din două porţi logice ŞI-negat
[[../poze/04451.png]]

<p>Când una dintre intrări este 1:</p>

#+CAPTION: circuit logic combinaţional format din două porţi logice ŞI-negat
[[../poze/04452.png]]

<p>Când şi cealaltă intrare este 1:</p>

#+CAPTION: circuit logic combinaţional format din două porţi logice ŞI-negat
[[../poze/04453.png]]

<p>Prin urmare, porţile ŞI-negat sunt indiferente la ordinea de alimentare a intrărilor. Acelaşi lucru este valabil şi pentru celelalte porţi logice discutate până în acest moment (ŞI, SAU-exclusiv, SAU, SAU-negat, SAU-negat-exclusiv şi NU).</p>

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
