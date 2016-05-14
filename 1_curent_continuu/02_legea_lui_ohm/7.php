<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Polaritatea căderilor de tensiune</title>
  </head>
<body>
  <div id="meniu"><?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?></div>
  <div id="header">
	<h1>7. Polaritatea căderilor de tensiune</h1>
  </div>
  
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>
  
<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>Putem determina direcţia curgerii electronilor într-un circuit, urmărind drumul ce duce de la terminalul negativ (-) la cel pozitiv (+) al bateriei, singura sursă de tensiune din circuit. Observăm că electronii se deplasează contrar acelor de ceasornic, din punctul 6 spre 5, 4, 3, 2, 1 şi înapoi la 6.</p>


<p>În momentul în care curentul întâmpină rezistenţa de 5 Ω, se va înregistra o cădere de tensiune la capetele acesteia. Polaritatea acestei căderi de tensiune este minus (-) la punctul 4 şi plus (+) la punctul 3 (ţineţi minte, tensiunea este o mărime relativă între două puncte). Prin urmare, marcăm polaritatea căderii de tensiune la bornele rezistenţei cu aceste simboluri, folosind sensul real de deplasare al electronilor prin circuit, ceea ce înseamnă că borna pe unde curentul <i>intră</i> în rezistor este cea negativă, iar borna (capătul) pe unde curentul <i>iese</i> din rezistor este cea pozitivă.</p>

#+CAPTION: marcarea polarităţii căderii de tensiune într-un circuit simplu
[[../poze/00052.png]]

<pre>
Între punctele 1 (+) şi 4 (-) = 10 volţi                     
Între punctele 2 (+) şi 4 (-) = 10 volţi
Între punctele 3 (+) şi 4 (-) = 10 volţi 
Între punctele 1 (+) şi 5 (-) = 10 volţi                        
Între punctele 2 (+) şi 5 (-) = 10 volţi                       
Între punctele 3 (+) şi 5 (-) = 10 volţi  
Între punctele 1 (+) şi 6 (-) = 10 volţi 
Între punctele 2 (+) şi 6 (-) = 10 volţi                         
Între punctele 3 (+) şi 6 (-) = 10 volţi                          
</pre>

<p>Chiar dacă pare puţin neinspirată realizarea unui tabel cuprinzând căderile de tensiune în întreg circuitul, acesta este un concept foarte important de ţinut minte, pentru că se va folosi la analiza circuitelor mult mai complexe, cuprinzând rezistenţe şi baterii multiple.</p>

<p>Trebuie înţeles faptul că polaritatea nu are nimic de-a face cu legea lui Ohm: nu vom introduce niciodată tensiuni, curenţi sau rezistenţe negative într-o ecuaţie a legii lui Ohm! Există într-adevăr alte principii electrice unde folosirea polarităţii (+ sau -) contează, dar nu este cazul legii lui Ohm.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Polaritatea căderii de tensiune la bornele oricărui component rezistiv este determinată de direcţia de curgere (deplasare) a electronilor prin acesta, asfel: <i>nagativă</i> pentru intrare, <i>pozitivă</i> pentru ieşire.</li>
</ul>	
<a href="#meniu">&uarr; sus</a>
</div>

<div id="footer">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>

</body>
</html>
