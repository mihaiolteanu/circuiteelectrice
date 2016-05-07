<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Transformarea diagramelor Venn în hărţi Karnaugh</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Transformarea diagramelor Venn în hărţi Karnaugh</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Hărţi Karnaigh cu două variabile</h2>

<p>Începem transformarea unei diagrame Venn într-o hartă Karnaugh prin desenarea unei mulţimi A în universul A' (figura de mai jos, a):</p>

<img src="../poze/14087.png" alt="diagrame Venn"/>

<p>Extindem apoi cercul A (b şi c), modificăm forma lui la punctul (d), şi transformăm A într-un dreptunghi (e). Tot ceea ce nu se află în A este A'. Desenăm un dreptunghi şi pentru A' la punctul (f). De asemenea, nu folosim haşuri pentru hărţile Karnaugh. Ceea ce avem până în acest moment este o hartă Karnaugh cu o singură variabilă. Acest lucru nu ne ajută însă. Avem nevoie de variabile multiple.</p>

<p>Figura (a) de mai jos este identică diagramei Venn precedente, cu diferenţa că notaţiile A şi A' se afla deasupra diagramei şi nu în interior. Urmând un proces similar, putem construi „o diagramă Venn dreptunghiulară” pentru B şi B' (b). Vom trece acum la suprapunerea diagramelor de la (a) şi (b) pentru obţinerea rezultatului (c), la fel cum am facut pentru diagramele Venn. Motivul pentru care realizăm acest lucru este pentru a observa ceea ce este comun celor două regiuni suprapuse - de exemplu, locul în care A se suprapune cu B. Pătratul din dreapta jos (c) corespunde relaţiei AB, unde A se suprapune cu B:</p>

<img src="../poze/14088.png" alt="diagrame Venn"/>

<p>Totuşi, nu vom pierde vremea desenând hărţi Karnaugh precum cea de mai sus (c), ci vom folosi o versiune simplificată:</p>

<img src="../poze/14089.png" alt="hărţi Karnaugh"/>

<p>Coloana formată din cele două celule de sub A' este asociată mulţimii A' (stânga); similar pentru celelalte mulţimi. Pentru simplitate, regiunile nu vor fi delimitate atât de clar precum în cazul diagramelor Venn.</p>

<p>Harta Karnaugh din dreapta este o formă alternativă utilizată în majoritatea textelor. Numele variabilelor sunt trecute lângă linia diagonală. A-ul de deasupra diagonalei indică faptul că variabila A (şi A') aparţine coloanelor. 0 este folosit pentru A' iar 1 pentru A. B-ul de sub diagonală este asociat cu liniile: 0 pentru B' şi 1 pentru B.</p>

<h3>Exemplu</h3>

<p>Marcaţi căsuţele corespunzătoare expresiei booleene AB în diagrama Karnaugh de mai sus cu 1. Soluţie: haşurăm sau încercuim regiunea corespunzătoare lui A; marcăm apoi regiunea corspunzătoare lui B. Intersecţia celor două regiuni reprezintă AB; trecem un 1 în această căsuţă. Nu este însă necesar să încercuim propriu-zis regiunile A şi B:</p>

<img src="../poze/14090.png" alt="hărţi Karnaugh"/>

<h2>Hărţi Karnaigh cu trei variabile</h2>

<p>Trecem acum la dezvoltarea unei hărţi Karnaugh pornind de la diagrame Venn. Universul (interiorul dreptunghiului negru) este împărţit în două regiuni înguste A' şi A. B şi B' împart universul în două regiuni pătrate. C-ul ocupă o regiune pătrată în mijlocul dreptunghiului, iar C' este împărţit în două dreptunghiuri verticale de fiecare parte a pătratului C:</p>

<img src="../poze/14091.png" alt="hărţi Karnaugh cu trei variabile"/>

<p>În figura finală suprapunem toate cele trei variabile, încercând să delimităm clar fiecare regiune. Această hartă Karnaugh cu 3 variabile are 2<sup>3</sup> = 8 regiuni, căsuţele din interiorul hărţii. Fiecare regiune este unic determinată prin intermediul celor trei variabile booleene (A, B şi C). De exemplu ABC' reprezintă regiunea din dreapta jos (*), iar A'B'C' reprezintă regiunea din stânga sus (x):</p>

<img src="../poze/14092.png" alt="hărţi Karnaugh cu trei variabile"/>

<p>Totuşi, în mod normal nu vom nota o hartă Karnaugh conform figurii de mai sus stânga. Notarea hărţilor Karnaugh se va face conform figurii din dreapta. Fiecare regiune este unic determinată printr-un produs de 3 variabile, o expresie booleană ŞI.</p>

<p>Cele două forme diferite de mai jos sunt echivalente, şi reprezintă forma finală a acestora. Versiunea din dreapta este puţin mai uşor de folosit, din moment ce nu suntem nevoiţi să scriem toate variabilele de fiecare dată, ci doar 1 şi 0. Noaţia B'C', B'C, BC şi BC' din stânga este echivalentă cu 00, 01, 11 respectiv 10 din dreapta. A şi A' sunt echivalente cu 0 respectiv 1.</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>