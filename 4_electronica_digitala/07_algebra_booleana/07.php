<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Funcţia SAU-exclusiv</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>7. Funcţia SAU-exclusiv</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>Un element ce nu l-am întâlnit până în acest moment în operaţiile booleene este SAU-exclusiv. Deşi funcţia SAU este echivalentă cu o adunare booleeană, funcţia ŞI cu înmulţirea iar funcţia NU cu complementarea, nu există un echivalent boolean pentru funcţia SAU-exclusiv. Acest lucru nu ne împiedică să avem un simbol pentru reprezentarea ei:</p>

#+CAPTION: funcţia SAU-exclusiv; simbol
[[../poze/04297.png]]

<p>Acest simbol este folosit foarte rar în expresiile booleene, deoarece identitătile, proprietăţile şi regulile de simplificare ce implică adunare, înmulţire şi complementare nu se aplică şi acestei expresii. Totuşi, există o modalitate de reprezentare a funcţiei SAU-exclusiv cu ajutorul funcţiilor SAU şi ŞI:</p>

#+CAPTION: funcţia SAU-exclusiv realizată cu funcţiile SAU şi ŞI
[[../poze/04298.png]]

<p>Ca şi echivalenţă booleeană. această regulă poate fi folositoare în cazul simplificării anumitor expresii booleene. Orice expresie de forma AB' + A'B (două porţi ŞI şi o poartă SAU), poate fi înlocuită de o singură poartă SAU-exclusiv.</p>


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
