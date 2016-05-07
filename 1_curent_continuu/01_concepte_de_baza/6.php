<?php include ($_SERVER['DOCUMENT_ROOT']."/files/xml_header.html")?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>6. Tensiune şi curent într-un circuit practic</title>
  </head>
<body>
  <div id="meniu"><?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?></div>
  <div id="header">
	<h1>6. Tensiune şi curent într-un circuit practic</h1>
  </div>

<div id="meniu2">
	<div id="breadcrumbs"><?php include ("breadcrumbs.html")?></div>
	<?php include ("meniu2.html")?>
</div>
  
<div id="contents">
<p>Deoarece este nevoie de energie pentru a forţa electronii să se deplaseze împotriva opoziţiei unei rezistenţe, va exista întotdeauna o tensiune electrică între oricare două puncte ale unui circuit ce posedă rezistenţă. Este important de ţinut minte că, deşi cantitatea de curent (cantitatea de electroni ce se deplasează într-un anumit loc în fiecare secundă) este uniformă într-un circuit simplu, cantitatea de tensiune electrică (energia potenţială pe unitate de sarcină) între diferite seturi de puncte dintr-un singur circuit poate varia considerabil:</p>

<img src="../poze/00030.png" alt="curentul este acelaşi în oricare punct al unui circuit electric simplu"/> 

<p>Să luăm acest circuit ca şi exemplu. Dacă luăm patru puncte din acest circuit (1, 2, 3 şi 4), vom descoperi că valoarea curentului ce trece prin fir între punctele 1 şi 2 este exact aceeiaşi cu valoarea curentului ce trece prin bec între punctele 2 şi 3. Aceeiaşi cantitate de curent trece prin fir şi între punctele 3 şi 4, precum şi prin baterie între punctele 1 şi 4.</p>

<p>Dar, vom descoperi că tensiunea ce apare între oricare două puncte din acest circuit, este direct proporţională cu rezistenţa prezentă între cele două puncte, atunci când curentul este acelaşi în întreg circuit (în acest caz, el este). Într-un circuit normal precum cel de mai sus, rezistenţa becului va fi mult mai mare decât rezistenţa firelor conductoare, prin urmare ar trebui să vedem o cantitate substanţială de tensiune între punctele 2 şi 3, şi foarte puţină între punctele 1 şi 2, sau între 3 şi 4. Desigur, tensiunea dintre punctele 1 şi 4 va fi întreaga „forţă” oferită de baterie, şi va fi doar cu foarte puţin mai mare decât tensiune dintre punctele 2 şi 3 (bec).</p>

<p>Putem aduce din nou în discuţie analogia rezervorului de apă:</p>

<img src="../poze/00031.png" alt="analogia rezervorului de apă - folosirea energiei eliberate pentru punerea în mişcare a unei roţi de apă"/> 

<p>Între punctele 2 şi 3, acolo unde apa ce cade eliberează energie asupra roţii, există o diferenţă de presiune, reflectând opoziţia roţii la trecerea apei. Din punctul 1 în punctul 2, sau din punctul 3 la punctul 4, acolo unde apa curge liberă prin rezervor şi bazin întâmpinând o rezistenţă extrem de scăzută, nu există o diferenţă de presiune (nu există energie potenţială). Totuşi, rata de curgere a apei prin acest sistem continuu este aceeiaşi peste tot (presupunând că nivelul apei din rezervor şi bazin nu se schimbă): prin pompă, prin roată şi prin toate ţevile. Acelaşi lucru este valabil şi în cazul circuitelor electrice simple: rata de curgere a electronilor este aceeiaşi în oricare punct al circuitului, cu toate că tensiunile pot varia între diferite seturi de puncte.</p>
</div>
<div id="footer">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>