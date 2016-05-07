<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Multimetre</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>8. Multimetre</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>Am văzut modul în care un sistem electromecanic poate funcţiona pe post de voltmetru, ampermetru sau ohmmetru prin simpla conectare a unor reţele externe de rezistori. Ne putem gândi că am putea realiza un aparat de măsură universal (multimetru), în care să fie încorporate toate funcţiile de mai sus. Acest lucru se realizează practic prin utilizarea corespunzătoare a contactelor şi rezistorilor.</p>

<h2>Voltmetru/ampermetru analogic</h2>

<p>Schema de principiu a unui voltmetru/ampermetru analogic simplu, arată astfel:</p>

<img src="../poze/00417.png" width="493" height="340" alt="schema de principiu voltmetru/ampermetru"/>

<p>În cele trei poziţii de jos ale comutatorului, mecanismul de detecţie al aparatului este conectat la prizele „common” şi V printr-unul din cei trei rezistori serie (R<sub>multiplicare</sub>). În acest caz, aparatul se comportă precum un voltmetru. În cea de a patra poziţie, mecanismul de deplasare este conectat în paralel cu rezistorul de şunt (R<sub>şunt</sub>. Astfel, aparatul este în acest caz un ampermetru. Curentul intră pe la priza „common” şi iese pe la priza A. În ultima poziţie, mecanismul de deplasare este deconectat de la ambele prize roşii (V şi A), dar scurcircuitat prin intermediul comutatorului.</p>

<h2>Adăugarea unui ohmmetru</h2>

<p>Dacă dorim şi adăugarea unui ohmmetru aparatului de măsură de mai sus, putem înlocui una din cele trei poziţii ale voltmetrului, astfel:</p>

<img src="../poze/00418.png" width="493" height="340" alt="schema de principiu voltmetru/ampermetru/ohmmetru"/>

<p>Cu toate cele trei funcţii disponibile, acest multimetru mai este cunoscut şi sub numele de volt-ohm-miliampermetru.</p>

<div id="legaturi">
<ol>
<li><a href="/curent-continuu/protectia-la-electrocutare/utilizarea-aparatelor-de-masura-multimetrul">Utilizarea multimetrului</a></li>
</ol>
</div>

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