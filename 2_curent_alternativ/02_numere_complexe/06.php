<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Aritmetica numerelor complexe</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>6. Aritmetica numerelor complexe</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<h3>Adunarea numerelor complexe</h3>

<p>Pentru adunarea numerelor complexe, adunăm pur şi simplu componentele reale pentru a determina componenta reală a sumei cele două numere complexe; acelaşi lucru este valabil şi pentru componenta imaginară:</p>

#+CAPTION: adunarea numerelor complexe
[[../poze/12007.png]]

<h3>Scăderea numerelor complexe</h3>

<p>Pentru scăderea numerlor complexe, se aplică acelaşi principiu de mai sus, doar cu scădere în loc de adunare:</p>

#+CAPTION: scăderea numerelor complexe
[[../poze/12008.png]]

<h3>Înmulţirea numerelor complexe</h3>

<p>Pentru operaţiile de înmulţire şi împărţire forma preferată este cea polară. Atunci când efectuăm înmulţirea numerelor complexe sub formă polară, înmulţim pur şi simplu dimensiunile numerelor complexe pentru determinarea dimensiuni produsului şi <i>adunăm</i> unghiurile numerelor complexe pentru determinarea unghiului final al produsului:</p>

#+CAPTION: înmulţirea numerelor complexe
[[../poze/12009.png]]

<h3>Împărţirea numerelor complexe</h3>

<p>Pentru efectuarea împărţirii numerelor complexe, calculăm pur şi simplu raportul dintre dimensiunea primului număr complex cu dimensiunea celui de al doilea pentru aflarea dimensiunii final a raportului, şi scădem unghiul celui de al doilea număr complex din primul pentru a afla unghiul final al raportului dintre cele două numere complexe:</p>

#+CAPTION: împărţirea numerelor complexe
[[../poze/12010.png]]

<h3>Reciproca (inversa) numerelor complexe</h3>

<p>Pentru a obţine reciproca (1/x), sau inversa unui număr complex, calculăm raportul dintre valoarea scalară 1 (unghi zero) şi numărul complex sub formă polară:</p>

#+CAPTION: reciproca (inversa) numerelor complexe
[[../poze/12011.png]]

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
