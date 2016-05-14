<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Bobină variabilă</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>03. Bobină variabilă</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Scopul experimentului</h2>

<p>Efectele permeabilităţii magnetice asupra inductanţei; cum poate fi controlat curentul de către reactanţa inductivă, într-un circuit electric de curent alternativ.</p>

<h2>Materiale necesare</h2>

<p>Pentru realizarea experimentului, veţi avea nevoie de un tub de hârtie/carton (de la un sul de şerveţele, de exemplu), o bară de fier sau oţel, cu un diametru suficient de mare pentru a umple tubul de carton; conductor de cupru pentru magnet/transformator de 0,32 mm; sursă de tensiune de c.a. şi un bec. Schema electrică realizată arată astfel:</p>

#+CAPTION: circuit cu bobină variabilă
[[../poze/05006.png]]

#+CAPTION: circuit cu bobină variabilă
[[../poze/05007.png]]

<h2>Realizarea bobinei variabile</h2>

<p>Luaţi conductorul de cupru şi realizaţi câteva sute de înfăşurări în jurul tubului de hârtie. Conectaţi această bobină în serie cu o sursă de tensiune joasă de curent alternativ şi un bec, formând un circuit. Când tubul este gol, intensitatea luminoasă a becului ar trebui să fie mare. Când introducem bara de oţel, intensitatea becului scade datorită creşterii inductanţei (L) şi, prin urmare, a creşterii reactanţei inductive (X<sub>L</sub>).</p>

<p>Ca şi variaţie a circuitului de mai sus, încercaţi să introduceţi diferite materiale în tubul de hârtie, precum cupru sau oţel inoxidabil, dacă aveţi la îndemână. Nu toate metalele vor avea acelaşi efect, datorită diferenţelor de permeabilitate magnetică.</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
