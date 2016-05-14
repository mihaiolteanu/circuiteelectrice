<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Aplicarea corectă a legii lui Ohm</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>6. Aplicarea corectă a legii lui Ohm</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Una dintre cele mai frecvente greşeli ale începătorilor în aplicarea legii lui Ohm constă în utilizarea greşită a mărimilor pentru tensiune, curent şi rezistenţa. Cu alte cuvinte, se poate întâmpla ca în aplicarea legii să se utilizeze valoarea curentului I printr-un rezistor şi valoarea căderii de tensiune U (sau E) pe un set de rezistori interconectaţi, cu speranţa că rezistenţa totală astfel calculată este egală cu rezistenţa reala a configuraţiei în cauză. Acest lucru este însă incorect! Reţineţi acest principiu extrem de important: variabilele utilizate în ecuaţiile legii lui Ohm trebuie să corespundă tot timpul aceluiaşi set de două puncte a circuitului în cauză. Cu alte cuvinte, dacă luăm în considerare o rezistenţă R<sub>AB</sub> aflată între două puncte din circuit, desemnate prin A şi B, atunci şi curentul I<sub>AB</sub> cât şi căderea de tensiune U<sub>AB</sub> trebuie să se refere exact la aceleaşi puncte pentru a putea aplica corect legea lui Ohm. Această observaţie este extrem de importantă în special în circuitele combinate serie-paralel, acolo unde componente adiacente pot avea valori diferita atât pentru tensiune cât şi pentru curent.</p>

<p>Utilizând metoda tabelului, putem să ne asigurăm de aplicarea corectă a legii lui Ohm considerând ca şi coloane doar rezistori individuali şi nu set de rezistori conectaţi în combinaţii serie, paralel sau serie-paralel. Vom folosi această metodă mai târziu pentru rezolvarea unor circuite mai complicate.</p>

<table class="floatleft">
	<tr>
        <th>R<sub>1</sub></th>
		<th>R<sub>2</sub></th>
		<th>R<sub>3</sub></th>
		<th>Total</th>
        <th>Unitate</th>
	</tr>
	<tr>
		<td>E</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td>V</td>
	</tr>
	<tr>
		<td>I</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td>A</td>
	</tr>
	<tr>
		<td>R</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td>Ω</td>
	</tr>
		<tr>
		<td>P</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td>W</td>
	</tr>
</table> 

<p>Astfel, în cazul circuitelor serie, coloana total poate fi foarte uşor calculată utilizând regulile circuitelor serie, şi anume: căderea totală de tensiune este egală cu suma căderilor individuale pe fiecare component, curentul total este egal cu valoarea curentului prin oricare component, rezistenţa totală este egală cu suma rezistenţelor individuale, iar puterea totală este şi ea egală cu suma puterilor individuale.</p>

<p>Pentru circuitele serie, coloana total se calculează astfel: căderea de tensiune totală este aceiaşi cu tensiunea de pe fiecare component, curentul total este egal cu suma curenţilor individuali, rezistenţa totală se calculează cu formula rezistenţei totale a circuitelor parale, iar puterea totală este egală cu suma puterilor individuale.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Folosind metoda tabelului, vom aplica legea lui Ohm vertical, pe fiecare coloană din tabel</li>
	<li>Folosind metoda tabelului, vom aplica regulie circuitelor serie/paralel pe fiecare linie</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
