<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Susceptanţa şi admitanţa</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Susceptanţa şi admitanţa</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>În studiul circuitelor electrice de curent continuu am întâlnit termenul de <i>conductanţă</i>; aceasta se defineşte ca inversul rezistenţei. Matematic, aceasta reprezintă reciproca rezistenţei, 1/R, termen ce în formula rezistenţei paralele este chiar conductanţa.</p>

<p>Pe când „rezistenţa” denotă cantitatea opoziţiei faţă de deplasarea electronilor, „conductanţa” reprezintă uşurinţa de deplasare a electronilor. Unitatea de măsură pentru conductanţă este Siemens, iar simbolul matematic, „G”.</p>

<p>Componentele reactive, precum bobinele şi condensatoarele, se opun trecerii curentului (deplasării electronilor) în funcţie de timp şi nu într-un mod constant, uniform, ca în cazul rezistorilor. Această opoziţie în funcţie de timp se numeşte <i>reactanţă</i>, notată cu „X” şi măsurată de asemenea în Ohm.</p>

<p>La fel cum pentru rezistenţă există o mărime complementară, conductanţa, şi pentru expresia reactanţei există o mărime complementară, denumită <i>susceptanţă</i>. Matematic, susceptanţă este inversa (reciproca) reactanţei, 1/X. Simbolul matematic este „B”, iar unitatea de măsură este tot Siemens.</p>

<p>În aceeiaşi ordine de idei, există şi o mărime complementară pentru impedanţă, <i>admitanţă</i>. Matematic, aceasta este inversa impedanţei, 1/Z. Simbolul matematic este „Y”, iar unitatea de măsură este Siemens. La fel ca şi impedanţa, admitanţa este o cantitate complexă, nu scalară.</p>

<p>Chiar dacă în calculele uzuale nu vom întâlni prea des aceşti termeni, este bine de ştiut că aceştia există.</p>

#+CAPTION: 
[[../poze/00000.png]]

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
