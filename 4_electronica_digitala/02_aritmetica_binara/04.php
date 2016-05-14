<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Scăderea binară</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Scăderea binară</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Putem realiza operaţia de scădere binară utilizând aceleaşi metode standard împrumutate de la scăderea zecimală. Totuşi, dacă putem utiliza metoda deja cunoscută (şi mai uşoară) a adunării binare pentru efectuarea scăderii, ne va fi mai uşor. După cum am văzut, putem reprezenta numerele binare negative utilizâd reprezentarea în complement a lui doi plus un bit adiţional cu o valoare negativă. Să considerăm un exemplu:</p>

<div class="formula">
7<sub>10</sub> - 5<sub>10</sub> (scădere)
7<sub>10</sub> + (-5<sub>10</sub>) (adunare echivalentă)
</div>

<p>Tot ce trebuie să facem este să reprezentăm numărul 7 şi -5 sub formă binară:</p>

<div class="formula">
0111<sub>2</sub> = 7
1011<sub>2</sub> = -5
</div>

<p>Nu ne mai rămâne decât să efectuăm adunarea binară:</p>

<pre>
  1111    &lt;--- biţi ce trec mai departe
   0111
 + 1011
  ------
  10010   &lt;--- ignorăm bit-ul suplimentar

răspuns = 0010<sub>2</sub> = 2<sub>10</sub>
</pre>

<p>Din moment ce am definit numărul nostru ca fiind compus din trei biţi plus bitul cu valoare negativă, putem ignora al cincilea bit din răspuns (1), iar rezultatul final este astfel 0010<sub>2</sub>, sau plus doi, ceea ce reprezintă răspunsul corect.</p>

<p>O altă modalitate de a înţelege de ce înlăturăm al cincilea bit, este să ţinem minte că bit-ul din stânga are o valoare negativă, egală cu minus opt în cazul de faţă. Atunci când adunăm aceste două numere binare, realizăm de fapt o scădere a biţilor. În cazul operaţiei de scădere, cifrele nu sunt „duse” mai departe spre următoarea operaţie, ci sunt împrumutate.</p>

<p>Să considerăm un alt exemplu, cu numere mai mari de data aceasta. Dacă vrem să adunăm -25<sub>10</sub> cu 18<sub>10</sub>, trebuie să stabilim în primul rând numărul de biţi pe care numărul nostru îl va conţine în reprezentarea binară. Pentru a putea reprezenta cea mai mare valoarea absolută posibilă în acest caz, 25, avem nevoie de cel puţin cinci biţi, plus un al şaselea bit pentru valoarea negativă. Să începem prin a reprezenta numărul 25 sub formă binară, şi apoi sub forma complementului făţă de doi:</p>

<div class="formula">
+25<sub>10</sub>  = 011001<sub>2</sub> (toţi cei şase biţi)      
11001<sub>2</sub> = 100110<sub>2</sub> (complementul faţa de unu)
complementul faţa de unu + 1 = complementul faţa de doi = 100111<sub>2</sub>        
-25<sub>10</sub> = 100111<sub>2</sub> (forma finală)
</div>

<p>Mai exact, -25 sub formă binară este de fapt suma dintre bit-ul negativ de pe poziţia a şasea cu valoarea de -32 şi ceilalţi cinci biţi (00111<sub>2</sub> = 7<sub>10</sub>).</p>

<p>Să reprezentăm acum şi numărul 17 sub formă binară, folosind toţi cei şase biţi:</p>

<div class="formula">
18<sub>10</sub> = 010010<sub>2</sub>
</div>

<p>Adunarea lor ne conduce la următorul rezultat:</p>

<pre>
     11
   100111
 + 010010
  --------
   111001
</pre>

<p>În acest caz nu avem un „surplus” de biţi după adunanre, prin urmare, nu trebuie să „scăpăm” de niciunul din ei. Bitul din stânga este 1, ceea ce înseamnă că răspunsul, în complement faţă de doi, este negativ (ceea ce este corect). Pentru verificare, putem realiza conversia înapoi în forma zecimală prin însumarea produsului tuturor biţilor cu valorile lor respective, astfel:</p>

<div class="formula">
(1 x -32<sub>10</sub>) + (1 x 16<sub>10</sub>) + (1 x 8<sub>10</sub>) + (1 x 1<sub>10</sub>) = -7<sub>10</sub> 
</div>

<p>Răspunsul obţinut este corect (18<sub>10</sub> - 25<sub>10</sub> = -7<sub>10</sub>).</p>


</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
