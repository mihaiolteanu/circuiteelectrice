<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuit de detectare a defazajului</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>07. Circuit de detectare a defazajului</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Scopul experimentului</h2>

<p>Exemplificarea faptului că însumarea tensiunilor de curent alternativ nu se realizează algebric, ci vectorial (fazorial).</p>

<h2>Materiale necesare</h2>

<p>Veţi avea nevoie de o sursă de tensiune de ca, doi condensatori de 0,1 µF fiecare, nepolarizaţi şi două rezistenţe de 27 kΩ. Este indicat să folosiţi condensatori ceramici sub formă de disc, întrucât nu sunt sensibili la polaritatea tensiuni (nepolarizaţi), sunt ieftini şi durabil. Evitaţi condensatorii marcaţi cu orice tip de polaritate, întrucât aceştia se vor distruge dacă îi alimentaţi în curent alternativ. Circuitul final va arăta astfel:</p>



#+CAPTION: 
[[../poze/00000.png]]

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
