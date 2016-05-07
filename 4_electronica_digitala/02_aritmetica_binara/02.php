<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Adunarea binară</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Adunarea binară</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Adunarea numerelor binare este relativ simplă, foarte asemănătoare cu adunarea numerelor zecimale. Adunarea se realizează adunând pe coloane fiecare bit, pe rând, de la dreapta la stânga, la fel ca în cazul adunării zecimale. Spre deosebire de aceasta însă, există puţine reguli de memorat:</p>

<div class="formula">
0 + 0 = 0
1 + 0 = 1
0 + 1 = 1
1 + 1 = 10
1 + 1 + 1 = 11
</div>

<p>Când rezultatul adunării pe coloane este format din doi biţi (de ex, 1 + 1 = 10), bitul din dreapta (0, în acest caz) se scrie iar cel din stânga se trece mai departe (1, în acest caz):</p>

<pre>
                          11  1                         11      &lt;--- biţi ce trec mai departe
     1001101             1001001                     1000111
   + 0010010           + 0011001                   + 0010110
   ---------           ---------                   ---------
     1011111             1100010                     1011101
</pre>

<p>Adunarea din stânga nu a dat niciunde doi biţi, pe fiecare coloană suna fiind fie 1, fie 0. În celelalte două adunări, există sume care dau fie 10 fie 11, iar în acest caz bitul din stânga (0 sau 1) se trece mai departe la următoarea adunare.</p>

<p>După cum vom vedea mai târziu, se pot construi circuite electronice care să realizeze exact această operaţie aritmetică de adunare, prin reprezentarea fiecărui bit a fiecărui număr prin intermediul unui semnal de tensiune. Acest principiu reprezintă baza efectuării tuturor operaţiilor aritmetice realizate de calculatoarele moderne.</p>



<p><img src="../poze/00000.png" alt=""/></p>

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