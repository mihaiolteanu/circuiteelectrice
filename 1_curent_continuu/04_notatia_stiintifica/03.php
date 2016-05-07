<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Notaţia metrică</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Notaţia metrică</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p><a href="http://ro.wikipedia.org/wiki/Sistemul_interna%C5%A3ional_de_unit%C4%83%C5%A3i">Sistemul metric</a>, pe lângă faptul că reprezintă o colecţie de unităţi de măsură pentru diferite mărimi fizice, este structurat în jurul conceptului de notaţie metrică. Diferenţa faţa de notaţia ştiinţifică o reprezintă faptul că puterile lui zece sunt reprezentate cu ajutorul prefixelor alfabetice. În imaginea alăturată sunt prezentate câteva dintre cele mai uzuale prefixe alături de reprezentarea sub forma puterilor lui zece Pentru o descriere completă a tuturor prefixelor metrice utilizate, vedeţi intrarea de pe wikipedia, <a href="http://ro.wikipedia.org/wiki/Prefix_SI">aici</a>.</p>

<p><img src="../poze/00356.png" alt=""/></p>

<p>Urmărind această scală, putem vedea că, de exemplu, 2,5 Giga înseamnă de fapt 2,5 x 10<sup>9</sup>, sau 2,5 miliarde. De asemenea, 3,21 pA (picoamperi) înseamnă 3,21 x 10<sup>-12</sup> Amperi.</p>

<p>Deoarece majoritatea prefixelor în sistemul metric se referă la puteri ale lui 10 ce sunt multiplii de 3, notaţia metrică diferă de notaţia ştiinţifică prin faptul că cifrele semnificative se pot regăsi oriunde în intervalul 1 - 1000, în funcţie de prefixul ales. De exemplu, pentru o greutate de 0,000267 grame, cele două notaţii arată astfel:</p>

<div class="formula">
2,67 x 10<sup>-4</sup> g (notaţia ştiinţifică)
267 µg (notaţia metrică)
sau
0,267 mg (notaţia metrică)
</div>

<h2>Conversia prefixelor metrice</h2>

<p>Pentru a exprima o cantiate printr-un prefix metric diferit faţă de cel iniţial, trebuie doar să mutăm virgula decimală spre stânga sau spre dreapta, în funcţie de caz.</p>

<p>De exemplu, să exprimăm 0,000023 A (amperi) în mA (microamperi). Putem observa că 0,000023 A nu utilizează niciun prefix metric, ci reprezintă doar unitatea de măsură „pură”. Din graficul de mai sus, vedem că micro (µ) reprezintă 10<sup>-6</sup>, prin urmare, trebuie să deplasăm virgula decimală cu 6 poziţii spre drepta, iar rezultatul arată astfel:</p>

<div class="formula">
0,000023 A = 23 µA 
</div>

<p>Un alt exemplu: dorim să exprimăm 304.212 V (volţi) în kV (kilovolţi). Din nou, putem observa că acest număr nu are momentan niciun prefix. Astfel, dacă dorim să trecem de la 10<sup>0</sup> (vezi graficul de mai sus) la 10<sup>3</sup> (kilo) în stânga, trebuie să mutăm virgula decimală cu 3 poziţii spre stânga:</p>

<div class="formula">
304.212 V = 304,212 kV 
</div>

<p>Să presupunem acum că dorim să transformăm 50,3 MΩ (megaohmi) în mΩ (miliohmi). 50,3 MΩ înseamnă 50,3 x 10<sup>6</sup>. Uitându-ne pe graficul de mai sus, observăm că de la mega la mili există o diferenţa de 9 puteri ale lui zece (de la 10<sup>6</sup> la 10<sup>-3</sup>, de la stânga la dreapta), prin urmare, trebuie să deplasăm virgula decimală cu 9 poziţii spre drepta:</p>

<div class="formula">
50,3 MΩ = 50.300.000.000 mΩ 
</div>

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