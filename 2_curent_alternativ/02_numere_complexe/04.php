<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Adunarea complexă a vectorilor</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Adunarea complexă a vectorilor</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Dacă adunăm doi vectori cu unghiuri diferite, lungimile lor se adună diferit faţă de cele scalare:</p>

#+CAPTION: adunarea vectorilor cu unghiuri diferite
[[../poze/02039.png]]

<p>Dacă două tensiuni alternativ, defazate cu 90<sup>o</sup> între ele, sunt conectate în serie, amplitudinile lor nu se adună sau scad direct precum valorile scalare în cazul curentului continuu. În schimb, aceste tensiuni sunt valori complexe, şi, precum în cazul vectorilor de mai sus a căror adunare se realizează trigonometric, o sursă de 6 V la 0<sup>o</sup> adunată (conectată în serie) cu o sursă de 8 V la 90<sup>o</sup>, rezultă într-o tensiune de 10 V a cărei fază este de 53.13<sup>o</sup>:</p>

#+CAPTION: adunarea tensiunilor alternative aflate în diferenţă de fază
[[../poze/02040.png]]

<p>Prin comparaţie cu circuitele de curent continuu, acest lucru poate părea ciudat la început. De exemplu, cu ajutorul unui voltmetru, putem citi indicaţiile de 6 şi respectiv 8 volţi la borenele celor două surse de curent alternativ, dar tensiunea totală indicată de acesta va fi de „doar” 10 volţi!</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
