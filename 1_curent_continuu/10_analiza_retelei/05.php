<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Teorema lui Millman</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Teorema lui Millman</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Prin intermediul teoremei lui Millman, circuitul este redesenat ca şi o reţea de ramuri paralele, fiecare ramură conţinând un rezistor sau o combinaţie serie baterie/rezistor. Această teoremă se poate aplica doar în cazul circuitelor ce pot suferi această modificare.</p>

<h3>Exemplu</h3>

<p>Avem (din nou) circuitul de mai jos:</p>

#+CAPTION: circuit electric
[[../poze/00209.png]]

<p>Acelaşi circuit redesenat pentru aplicarea teoremei lui Millman:</p>

#+CAPTION: circuit electric
[[../poze/00223.png]]

<p>Luând în considerare rezisteţa şi tensiunea furnizată în fiecare ramură, putem folosi teorema lui Millman pentru aflarea căderilor de tensiune în toate ramurile. Chiar dacă nu există bateria B<sub>2</sub>, notaţia B<sub>3</sub> pentru bateria din dreapta este pentru a scoate în evidenţă faptul că aceasta aparţine ramurii 3 din circuit!</p>

<p>Teorema nu este altceva decât o ecuaţie lungă aplicabilă oricărui circuit ce poate fi redesenat ca şi ramuri paralele, fiecare ramură cu propria sa sursă de tensiune şi rezistenţă în serie:</p>

#+CAPTION: teorema lui Millman
[[../poze/10188.png]]

<p>Înlocuind valorile din exemplul de mai sus ajungem la următorul rezultat:</p>

#+CAPTION: formulă
[[../poze/10189.png]]

<p>Valoarea rezultatului, 8 V, reprezintă căderea de tensiune pe toate ramurile:</p>

#+CAPTION: circuit electric
[[../poze/00224.png]]

<p>Polarităţile tuturor tensiunilor au ca şi referinţa acelaşi punct. În exemplul de mai sus, firul de jos este folosit ca şi punct de referinţă, prin urmare tensiunile pentru fiecare ramură au fost introduse în ecuaţie ca fiind pozitive (28 pentru R<sub>1</sub>, 0 pentru R<sub>2</sub> şi 7 pentru R<sub>3</sub>).</p>

<p>Pentru aflarea căderilor de tensiune pe fiecare rezistor, tensiunea Millman (8 V în acest caz) trebuie compoarată cu tensiunea fiecărei surse din fiecare ramură, folosind principiul aditivităţii tensiunilor în serie:</p>

#+CAPTION: formulă
[[../poze/10190.png]]

<p>Pentru aflarea curenţilor prin fiecare ramură, aplicăm legea lui Ohm (I=E/R):</p>

#+CAPTION: formulă
[[../poze/10191.png]]

<p>Direcţia curentului prin fiecare rezistor este determinată de polaritatea fiecărui rezistor şi <b>nu</b> de polaritatea bateriei, curentul putând fi forţat să de deplaseze invers printr-o baterie, precum în cazul bateriei B<sub>3</sub>. Acest lucru este bine de ţinut minte fiindcă teorema lui Millman nu ne oferă niciun indiciu cu privire la posibilitatea unei direcţii greşite a curenţilor precum este cazul metodelor ramurii de curent şi a buclei de curent. Trebuie să fim atenţi la polaritatea căderii de tensiune la bornele rezistorilor, determind de acolo direcţie de curgere a curentului.</p>

#+CAPTION: circuit electric
[[../poze/00226.png]]

<p class="sumar">Sumar:</p>
<ul>
	<li>Teorema lui Millman consideră circuitul o reţea paralelă de ramuri.</li>
	<li>Toate tensiunile introduse şi aflate din teorema lui Millman au ca referinţă unul şi acelaşi punct din circuit (de obicei latura de jos a circuitului)</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
