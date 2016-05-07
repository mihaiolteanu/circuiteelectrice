<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Proprietăţi algebrice booleene</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Proprietăţi algebrice booleene</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>Un alt tip de identitate matematică, denumită „proprietate”, descrie relaţia dintre variabilele unui sistem de numere. </p>

<h2>Comutativitatea</h2>

<p>Una dintre aceste proprietăţi poartă numele de comutativitate, şi se aplică atât adunării cât şi înmulţirii. Ceea ce ne spune comutativitatea este că, putem inversa ordinea variabilelor atât în cazul adunării, cât şi în cazul înmulţirii. Rezultatul expresiei rămâne neschimbat în ambele cazuri. Comutativitatea adunării arată astfel:</p>

<img src="../poze/14028.png" alt="comutativitatea adunării booleene"/>

<p>Comutativitatea înmulţirii:</p>

<img src="../poze/14029.png" alt="comutativitatea înmulţirii booleene"/>

<h2>Asociativitatea</h2>

<p>Această proprietate spune că putem asocia grupuri de sume sau înmulţiri, prin intermediul parantezelor, fară a modifica rezultatul ecuaţiilor. Şi în acest caz, asociativitatea se aplică atât adunării cât şi înmulţirii. Asociativitatea adunării:</p>

<img src="../poze/14030.png" alt="asociativitatea adunării booleene"/>

<p>Asociativitatea înmulţirii:</p>

<img src="../poze/14031.png" alt="asociativitatea înmulţirii booleene"/>

<h2>Distributivitatea</h2>

<p>Proprietatea de distributivitate precizează modul de dezvoltare a unei expresii booleene formate din înmulţirea unei sume:</p>

<img src="../poze/14032.png" alt="distributivitatea booleeană"/>

<p>În concluzie, avem trei proprietăţi booleene de bază: comutativitatea, asociativitatea şi distributivitatea:</p>

<img src="../poze/14034.png" alt="proprietăţi boolene: comutativitatea, asociativitatea şi distributivitatea"/>


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