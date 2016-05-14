<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Half-Adder</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Half-Adder</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>Ca şi prim exemplu a unui circuit logic combinaţional util, să realizăm un dispozitiv ce realizează adunarea a două numere binare. Putem calcula rapid care ar trebui să fie răspunsul unui astfel de dispozitiv:</p>

<div class="formula">
0 + 0 = 0
0 + 1 = 1
1 + 0 = 1
1 + 1 = 10<sub>2</sub>
</div>

<p>Avem nevoie prin urmare de două intrări (a şi b) şi de două ieşiri. Prima ieşire o denumim Σ, deoarece reprezintă suma. A doua ieşire o numim C<sub>out</sub> şi reprezintă bitul de depăşire. Tabelul de adevăr corespunzător este reprezentat mai jos:</p>

#+CAPTION: tabel de adevăr
[[../poze/14164.png]]

<p>Simplificând ecuaţiile booleene, sau realizând o hartă Karnaugh, vom obţine circuitul de mai jos:</p>

#+CAPTION: circuit logic combinaţional
[[../poze/04454.png]]

<p>Dar să ne uităm mai atent la rezultate. Coloana Σ nu este altceva decât o poartă logică SAU-exclusiv. Coloana C<sub>out</sub> reprezintă o poartă logică ŞI. Acest dispozitiv poartă numele de half-adder (semisumator), din motive pe care le vom vedea în secţiunea următoare.</p>

<p>Sub forma unei diagrame ladder, circuitul de mai sus arată astfel:</p>

#+CAPTION: diagramă ladder
[[../poze/04475.png]]




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
