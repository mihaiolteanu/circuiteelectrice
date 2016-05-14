<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Conectarea bateriilor în serie</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>01. Conectarea bateriilor în serie</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Scopul experimentului</h2>

<p>Vom vedea mai jos modul de conectare a bateriilor pentru a obţine diferite valori ale tensiunii rezultate. Deşi putem folosi baterii de orice mărime, este recomandat să aveţi cel puţin două baterii cu valori ale tensiunii diferite, pentru a face experimentul mai interesant.</p>

<p>Pe parcurs, vom realiza circuitul de mai jos (schemă + circuit practic):</p>

#+CAPTION: conectarea bateriilor în serie
[[../poze/05072.png]]

#+CAPTION: conectarea bateriilor în serie
[[../poze/05073.png]]

<h2>Desfăşurarea experimentului</h2>

<p>Conectarea componentelor în serie înseamnă conectarea lor în linie, astfel încât să existe un singur drum pe care să poată circula electronii. Conectaţi aşadar două baterii electrice în serie. Borna pozitivă a unei baterii trebuie să fie conectată la borna negativă a celeilalte. Măsuraţi căderea de tensiune la bornele fiecărei baterii, cu ajutorul unui voltmetru. Măsuraţi apoi căderea de tensiune la bornele celor două baterii conectate în serie. Veţi observa că cele două valori ale tensiunii se adună:</p>

#+CAPTION: conectarea bateriilor în serie
[[../poze/05074.png]]

<p>Încercaţi să conectaţi baterii de tensiuni diferite în serie. De exemplu, conectaţi o baterie de 6 V cu una de 9 V. Care este valoarea totală a tensiunii în acest caz?</p>

<p>Inversaţi apoi conexiunile celor două baterii, conectând borna negativă(-) a uneia dintre baterii cu borna negativă(-) a celeilalte. Pe scurt, conectaţi-le în <i>contra-serie</i>, astfel:</p>

#+CAPTION: conectarea bateriilor în anti-serie
[[../poze/05075.png]]

<p>Care este valoarea tensiunii în acest caz. Care este diferenţa faţă de cazul precedent? Puteţi deduce polaritatea căderii de tensiune, cunoscând polarităţile individuale ale bateriilor şi valorile tensiunilor lor?</p>

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
