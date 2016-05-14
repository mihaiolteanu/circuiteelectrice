<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuite rezistiv-capacitive paralel</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Circuite rezistiv-capacitive paralel</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Folosind aceleaşi valori, vom conecta rezistorul şi condensatorul în paralel, şi vom trece la analiza acestuia folosind metoda tabelului:</p>

#+CAPTION: circuit electric rezistiv-capacitiv serie; diagrama fazorială
[[../poze/02263.png]]

<p>Întrucât sursa de tensiune are aceeiaşi frecvenţă ca şi în cazul circuitului serie, iar rezistorul şi condensatorul au aceleaşi valori ale rezistenţei, respectiv capacităţii, valorile impedanţelor trebuie să fie aceleaşi. Prin urmare, putem începe completarea tabelului cu valorile cunoscute:</p>

#+CAPTION: tabel
[[../poze/12051.png]]

<p>Fiind un circuit paralel, ştim faptul că tensiunea este aceeiaşi pe fiecare dintre coponente, prin urmare, putem introduce tensiunea totală (10 V&#8736; 0<sup>o</sup>) pe toate coloanele:</p>

#+CAPTION: tabel
[[../poze/12052.png]]

<p>Acum putem aplica legea lui Ohm vertical (I=E/Z) pentru cele două coloane din tabel, calculând curentul prin rezistor, respectiv condensator:</p>

#+CAPTION: tabel
[[../poze/12053.png]]

<p>Asemenea circuitelor de curent continuu, curentul total este suma curenţilor de ramură (legea lui Kirchhoff pentru curent):</p>

#+CAPTION: tabel
[[../poze/12054.png]]

<h3>Formula de calcul a impedanţei totale</h3>

<p>Impedanţa totală poate fi calculată folosind legea lui Ohm (Z=E/I), vertical, pe coloana „Total”. După cum am mai văzut, impedanţa paralelă poate fi calculată folosind o formulă echivalentă cu cea folosită pentru calcularea rezistenţei totale paralele. Trebuie amintit faptul că această regulă a impedanţei paralele se aplică indiferent de tipul impedanţelor ce le avem în paralel. Cu alte cuvinte, nu contează dacă avem circuite compuse exclusiv din rezistori paraleli, bobine paralele, condensatoare paralele sau orice alt tip de combinaţie între cele trei: sub forma impedanţei (Z), toţi termenii sunt comuni şi pot fi aplicaţi uniform în aceeiaşi formulă:</p>

#+CAPTION: formula de calcul a impedanţei paralele
[[../poze/12036.png]]

<p>Singurul dezavantaj al acestei ecuaţii este volumul mare de muncă necesar pentru a efectua calculele matematice. Dar, indiferent de metoda ce o aplicăm pentru calcularea imedanţei paralel din circuitul de mai sus (fie folosind legea lui Ohm, fie formula echivalentă), rezultatul este identic:</p>

#+CAPTION: tabel
[[../poze/12055.png]]

<p class="sumar">Sumar:</p>
<ul>
	<li>În circuitele paralele, impedanţele (Z) se comportă precum rezistenţele (R) în paral: valoarea totală a impedanţei este mai mică decât valoarea fiecărei impedanţe luate individual, folosind formula echivalentă. Atenţie, efectuaţi toate calculele sub formă complexă, nu scalară! Z<sub>Total</sub> = 1/(1/Z<sub>1</sub> + 1/Z<sub>2</sub> + . . . 1/Z<sub>n</sub>)</li>
	<li>Legea lui Ohm pentru circuitele de curent alternativ: E = IZ ; I = E/Z ; Z = E/I</li>
	<li>Atunci când în circuit sunt conectaţi rezistori şi condensatori în paralel, unghiul de fază al impedanţei totală va fi între 0<sup>o</sup> şi -90<sup>o</sup>. Curentul din circuit va avea un unghi de fază între 0<sup>o</sup> şi +90<sup>o</sup></li>
	<li>Circuitele paralele în curent alternativ au aceleaşi proprietăţi fundamentale ca şi circuitele de curent continuu: tensiunea este aceeiaşi în întreg circuitul (pe fiecare component), curentul total este suma curenţilor de ramură iar impedanţa totală este mai mică decât fiecare dintre impedanţele individuale luate separat (cu ajutorul formulei echivalente)</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
