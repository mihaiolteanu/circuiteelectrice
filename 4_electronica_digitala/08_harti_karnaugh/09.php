<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Notaţia Σ (sumă) şi notaţia Π (produs)</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>9. Notaţia Σ (sumă) şi notaţia Π (produs)</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>Ca şi referinţa, această secţiune introduce terminologia folosită în unele texte pentru descrierea mintermenilor şi maxtermenilor aparţinând hărţilor Karnaugh. Mai departe de atât, această secţiune nu conţine nimic nou.</p>

<h2>Notaţia Σ (sumă) pentru mintermeni</h2>

<p>Simbolul Σ (sigma) indică o sumă iar litera „m” indică mintermenii. Prin urmare, Σm reprezintă o sumă de mintermeni. Următorul exemplu ilustrează afirmaţia de mai sus. În loc de ecuaţie booleană, am ales să enumerăm mintermenii:</p>

<div class="formula">
f(A,B,C,D) = Σ m(1, 2, 3, 4, 5, 7, 8, 9, 11, 12, 13, 15) 
sau
f(A,B,C,D) = Σ(m1,m2,m3,m4,m5,m7,m8,m9,m11,m12,m13,m15)
</div>

<p>Indicii termenilor indică locaţia regiunii, sau adresa, dintr-o hartă Karnaugh. Acesta este cu siguranţa un mod mult mai compact pentru descrierea mintermenilor sau regiunilor unei hărţi Karnaugh.</p>

#+CAPTION: harta Karnaugh
[[../poze/14162.png]]

<p>Soluţia exprimată sub formă sumei de produse nu este afectată prin utilizarea acestei terminologii. Mintermenii de pe harta (valorile de 1) sunt grupaţi ca de obicei, iar mai apoi putem scrie o soluţie sub forma sumei de produse.</p>

<h2>Notaţia Π (produs) pentru maxtemeni</h2>

<p>Mai jos luăm în considerare şi terminologia folosită pentru descrierea unei liste de maxtermeni. Produsul este indicat prin litera Π (pi), iar „M” indică maxtermenii. Prin urmare, ΠP indică un produs de maxtermeni. Putem folosi acelaşi exemplu pentru ilustrarea celor spuse mai sus. Ecuaţia logică booleană nesimplificată este înlocuita cu o listă de maxtermeni:</p>

<div class="formula">
f(A,B,C,D) = Π M(2, 6, 8, 9, 10, 11, 14) 
sau
f(A,B,C,D) = Π(M2, M6, M8, M9, M10, M11, M14) 
</div>

<p>Din nou, numerele indică adresa sau locaţia pe harta Karnaugh. Pentru maxtermeni, acestea reprezintă locaţiile valorilor de 0. Soluţia sub forma produsului de sume se scrie ca de obicei.</p>

#+CAPTION: harta Karnaugh
[[../poze/14163.png]]




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
