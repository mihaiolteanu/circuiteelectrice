<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Principiul universalităţii</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>9. Principiul universalităţii</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Porţile logice ŞI-negat şi SAU-negat posedă o proprietate specială: sunt universale. Cu alte cuvinte, având un număr suficient de astfel de porţi, fiecare din ele poate simula modul de funcţionare al oricărei alte porţi. De exemplu, putem construi un circuit care să se comporte precum o poartă SAU, folosind trei porţi ŞI-negat interconectate. Această abilitate este caracteristică doar acestor două tipuri de porţi. Practic, multe sisteme de control digital sunt construite doar cu ajutorul porţilor ŞI-negat şi SAU-negat, toate funcţiile logice necesare fiind derivate prin interconectarea acestor tipuri de porţi.</p>

<p>Vom lua mai jos câteva astfel de exemple.</p>

<h2>Realizarea funcţiei NU</h2>

<p>Să revedem prima dată simbolul şi tabelul de adevăr pentru poarta NU:</p>

<table class="floatleft">
<tr>
	<th>Intrare</th>
	<th>Ieşire</th>
</tr>
<tr>
	<td>0</td>
	<td>1</td>
</tr>
<tr>
	<td>1</td>
	<td>0</td>
</tr>
</table>

<img src="../poze/04070.png" alt="poartă logică NU"/>

<div class="clear"></div>

<img src="../poze/04154-1.png" alt="funcţia logică NU realizată cu porţi logice ŞI-negat şi SAU-negat prin interconectarea intrărilor"/>

<p>În figura alăturată este prezentat modul de realizare a acestei funcţii folosind porţi logice ŞI-negat şi SAU-negat.</p>

<div class="clear"></div>

<img src="../poze/04154.png" alt="funcţia logică NU realizată cu porţi logice ŞI-negat şi SAU-negat prin legarea uneia dintre intrări la masă"/>

<p>Această metodă de conectare împreună a intrărilor duce la creşterea curentului de intrare. Prin urmare, atât în cazul de faţă, cât şi în exemplele ce urmează, se va folosi conectarea la masă a unuia dintre terminali (celălalt terminal de intrare va fi legat la sursa de alimentare). Funcţional, rezultatul este acelaşi.</p>

<div class="clear"></div>

<h2>Realizarea funcţiei ne-inversoare (buffer)</h2>

<p>Să revedem prima dată simbolul şi tabelul de adevăr pentru o poartă ne-inversoare:</p>

<table class="floatleft">
<tr>
	<th>Intrare</th>
	<th>Ieşire</th>
</tr>
<tr>
	<td>0</td>
	<td>0</td>
</tr>
<tr>
	<td>1</td>
	<td>1</td>
</tr>
</table>

<img src="../poze/04088.png" alt="simbolul unei porţi ne-inversoare"/>

<div class="clear"></div>

<img src="../poze/04155.png" alt="realizarea funcţiei ne-inversoare cu două etaje de porţi ŞI-negat şi SAU-negat conectate împreună"/>

<p>Conform celor spuse mai sus, realizarea acestei funcţii folosind porţi logice ŞI-negat şi SAU-negat se realizează conectând două etaje împreună, conform figurii alăturate.</p>

<div class="clear"></div>

<h2>Realizarea funcţiei ŞI</h2>

<p>Simbolul şi tabelul de adevăr al porţii logice ŞI:</p>

<table class="floatleft">
<tr>
	<th>A</th>
	<th>B</th>
	<th>Ieşire</th>
</tr>
<tr>
	<td>0</td>
	<td>0</td>
	<td>0</td>
</tr>
<tr>
	<td>0</td>
	<td>1</td>
	<td>0</td>
</tr>
<tr>
	<td>1</td>
	<td>0</td>
	<td>0</td>
</tr>
<tr>
	<td>1</td>
	<td>1</td>
	<td>1</td>
</tr>
</table>

<img src="../poze/04156-1.png" alt="simbolul porţii logice ŞI"/>

<div class="clear"></div>

<img src="../poze/04156-2.png" alt="realizarea funcţiei ŞI prin intermediul a două porţi logice ŞI-negat"/>

<p>Folosind porţi logice ŞI-negat pentru realizarea funcţiei ŞI, avem nevoie de adăugarea unui etaj inversor (poartă NU) pe ieşirea porţii ŞI-negat. Dar, am văzut mai sus cum se poate realiza o poartă NU folosind o poartă ŞI-negat. Prin urmare, schema finală este cea din figura alăturată.</p>

<div class="clear"></div>

<img src="../poze/04156.png" alt="realizarea funcţiei ŞI prin intermediul a două porţi logice ŞI-negat"/>

<p>Acelaşi lucru se poate realiza folosind porţi logice SAU-negat, prin inversarea (poartă NU) tuturor intrărilor printr-o poartă SAU-negat. Din nou, am văzut mai sus cum se poate realiza o poartă NU dintr-o poartă SAU-negat.</p>

<div class="clear"></div>

<h2>Realizarea funcţiei ŞI-negat</h2>

<table class="floatleft">
<tr>
	<th>A</th>
	<th>B</th>
	<th>Ieşire</th>
</tr>
<tr>
	<td>0</td>
	<td>0</td>
	<td>1</td>
</tr>
<tr>
	<td>0</td>
	<td>1</td>
	<td>1</td>
</tr>
<tr>
	<td>1</td>
	<td>0</td>
	<td>1</td>
</tr>
<tr>
	<td>1</td>
	<td>1</td>
	<td>0</td>
</tr>
</table>

<img src="../poze/04106.png" alt="simbolul unei porţi logice ŞI-negat"/>

<div class="clear"></div>

<p>Desigur, nu avem ce „construi” la o funcţie ŞI-negat cu ajutorul porţilor ŞI-negat, pentru că nu este nimic de făcut.</p>

<img src="../poze/04157.png" alt="realizarea funcţiei logice ŞI-negat cu ajutorul porţilor SAU-negat"/>

<p>Cu ajutorul porţilor SAU-negat însă, va trebui să inversăm atât intrările cu o poartă SAU-negat, precum şi ieşirea acesteia din urmă (cu o poartă NU). Din nou, am văzut mai sus cum se poate realiza o poartă NU cu ajutorul porţii SAU-negat.</p>

<div class="clear"></div>

<h2>Realizarea funcţiei SAU</h2>

<table class="floatleft">
<tr>
	<th>A</th>
	<th>B</th>
	<th>Ieşire</th>
</tr>
<tr>
	<td>0</td>
	<td>0</td>
	<td>0</td>
</tr>
<tr>
	<td>0</td>
	<td>1</td>
	<td>1</td>
</tr>
<tr>
	<td>1</td>
	<td>0</td>
	<td>1</td>
</tr>
<tr>
	<td>1</td>
	<td>1</td>
	<td>1</td>
</tr>
</table>

<img src="../poze/04107.png" alt="simbolul porţii logice SAU"/>

<div class="clear"></div>

<img src="../poze/04158-1.png" alt="realizarea funcţiei logice SAU cu ajutorul porţilor logice SAU-negat"/>

<p>Inversarea ieşirii unei porţi SAU-negat (cu ajutorul unei alte porţi SAU-negat conectată ca şi poartă NU) are ca rezultat funcţia SAU. </p>

<div class="clear"></div>

<img src="../poze/04158.png" alt="realizarea funcţiei logice SAU cu ajutorul porţilor logice SAU-negat"/>

<p>Folosind porţi SAU-negat, trebuie să inversăm toate intrările pentru simularea funcţiei SAU, la fel cum a trebui să inversăm toate intrările unei porţi SAU-negat pentru a obţine funcţie ŞI.</p>

<div class="clear"></div>

<p>Ţineţi minte că inversarea tuturor intrărilor unei porţi rezultă în schimbarea funcţiei esenţiale ale acesteia. Astfel, poarta ŞI devine SAU, iar poarta SAU devine ŞI, plus o ieşire inversată. Astfel, cu toate intrările inversate, o poartă ŞI-negat se comportă precum o poartă SAU; o poartă SAU-negat se comportă precum o poartă ŞI; o poartă ŞI se comportă precum o poartă SAU-negat; şi, în fine, o poartă SAU se comportă precum o poartă ŞI-negat. În cadrul algebrei booleene, aceste transformări sunt cunoscute sub numele de „teorema lui DeMorgan”.</p>

<h2>Realizarea funcţiei SAU-negat</h2>

<table class="floatleft">
<tr>
	<th>A</th>
	<th>B</th>
	<th>Ieşire</th>
</tr>
<tr>
	<td>0</td>
	<td>0</td>
	<td>1</td>
</tr>
<tr>
	<td>0</td>
	<td>1</td>
	<td>0</td>
</tr>
<tr>
	<td>1</td>
	<td>0</td>
	<td>0</td>
</tr>
<tr>
	<td>1</td>
	<td>1</td>
	<td>0</td>
</tr>
</table>

<img src="../poze/04113.png" alt="simbolul porţii SAU-negat"/>

<div class="clear"></div>

<img src="../poze/04159.png" alt="realizarea funcţiei SAU-negat prin intermediul porţilor ŞI-negat"/>

<p>Pentru realizarea acestei fucţii folosind porţi ŞI-negat, trebuie să inversăm toate intrările şi ieşirea. Procedeul este asemănător cu cel prin care am realizat funcţia ŞI-negat folosind porţi logice SAU-negat.</p>

<div class="clear"></div>


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