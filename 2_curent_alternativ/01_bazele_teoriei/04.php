<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Rezolvarea circuitelor simple de curent alternativ</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Rezolvarea circuitelor simple de curent alternativ</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Rezolvarea circuitelor de curent alternativ se poate dovedi extrem de complexă în unele cazuri datorită comportamentului condensatoarelor şi circuitelor în aceste cazuri. Totuşi, în cazul circuitelor simple, constând dintr-o sursă de curent alternativ şi unul sau mai mulţi rezistori, putem aplica aceleaşi regului ca şi în cazul curentului alternativ fără alte complicaţii.</p>

#+CAPTION: circuit electric simplu în curent alternativ
[[../poze/02018.png]]
#+CAPTION: formule
[[../poze/12003.png]]

<p>Rezistenţele serie se adună, cele în paralel se diminuează, iar legile lui Ohm şi Kirchhoff sunt şi ele valabile. De fapt, după cum vom vedea, aceste regului sunt <i>tot timpul</i> valabile, doar că trebuie să folosim forme matematice mai avansate pentru exprimarea tensiuni, curentului şi a opoziţiei faţă de acesta. Pentru că acesta este însă un circuit pur rezistiv, complexităţile circuitelor de curent alternativ nu afectează rezolvarea lui.</p>

#+CAPTION: tabel
[[../poze/12004.png]]

<p>Un singur lucru foarte important trebuie ţinut minte: toate mărimile folosite în curent alternativ trebuiesc exprimate folosind aceeiaşi termeni (valori de vârf, vârf la vârf, medii sau efective). Dacă tensiunea sursei este dată ca valoare de vârf, atunci toţi curenţii şi tensiunile calculate vor fi exprimate ca şi valori de vârf. Acelaşi lucru este valabil şi în cazul celorlalte tipuri de valori. Exceptând cazurile speciale ce vor fi descrise explicit, toate valorile tensiunilor şi curenţilor din circuite se vor considera a fi valorile efective ale formelor de undă alternative şi nu cele de vârf, vârf la vârf sau medii.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Toate regulile şi legile circuitelor de curent continuu sunt valabile şî în cazul circuitelor de curent alternativ. Totuşi, pentru circuitele complexe, cantiăţile folosite vor trebui să fie exprimate într-o formă matematică mai complexă</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
