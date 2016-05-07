<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Identităţi algebrice booleene</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Identităţi algebrice booleene</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Ce este o identitate</h2>

<p>În matematică, o identitate este o afirmaţie valabilă pentru toate valorile posibile ale variabilei sau variabilelor implicate. Identitatea algebrică x + 0 = x, ne spune că suma dintre oricare variabilă (x) şi zero este egală cu variabila iniţială (x), indiferent de valoarea acesteia. Asemenea algebrei obişnuite, există identităti specifice algebrei booleene. Aceste identităţi sunt bazate pe cele două stări posibile ale variabilelor booleene (0 sau 1).</p>

<h2>Identităţi aditive</h2>

<p>Prima identitate booleană este suma unei variabile cu zero. Rezultatul este valoarea variabilei iniţiale. Această identitate nu este cu nimic diferită faţă de echivalentul algebric al numerelor reale:</p>

<img src="../poze/14019.png" alt="identitate booleană; suma unei variabile cu zero"/>

<p>Indiferent de valoare lui A, ieşirea va fi tot timpul aceiaşi. Când A = 1, ieşirea va fi 1; când A = 0, ieşirea va fi 0.</p>

<p>Următoarea identitate este cu siguranţă diferită faţă de cele văzute în algebra obişnuită. Aici putem vedea că suma unei variabile cu 1 este 1:</p>

<img src="../poze/14020.png" alt="identitate booleană; suma unei variabile cu unu"/>

<p>Indiferent de valoarea lui A, suma lui A cu 1 va fi tot timpul 1. Practic, ieşirea circuitului nu ţine cont de valoarea lui A, ci este fixată pe 1.</p>

<p>Următoare identitate este suma unei variabile cu ea însăşi. Practic, acest lucru înseamnă conectarea intrărilor unei porţi logice SAU şi activarea lor cu acelaşi semnal:</p>

<img src="../poze/14021.png" alt="identitate booleană; suma unei variabile cu ea însăşi"/>

<p>În algebra numerelor reale, suma a două variabile identice este dublul variabilei iniţiale (x + x = 2x). Dar în cadrul algebrei booleene nu exista „2”, ci numai 0 şi 1. Prin urmare, nu putem spune că A + A = 2A. Adunarea unei variabile cu ea însăşi este egală cu suma originală: 0 + 0 = 0 şi 1 + 1 = 1.</p>

<p>Dacă introducem conceptul de complement într-o identitate aditivă, putem vedea un efect interesant. Din moment ce între orice variabilă şi complementul acesteia trebuie să avem un 1, şi din moment ce suma oricărei variabile booleene cu 1 este 1, suma dintre o variabilă şi complementul ei trebuie să fie 1:</p>

<img src="../poze/14022.png" alt="suma booleană dintre o variabilă şi complementul acesteia"/>

<h2>Identităţi multiplicative</h2>

<p>La fel cum există patru identităţi booleene aditive (A + 0, A + 1, A + A şi A + A'), există şi patru identităti multiplicative: A x 0, A x 1, A x A şi A x A'. Dintre acestea, primele două nu sunt deloc diferite de identităţile echivalente ale algebrei numerelor reale:</p>

<img src="../poze/14023.png" alt="identităţi algebrice multiplicative: produsul dintre o variabilă şi zero"/>

<img src="../poze/14024.png" alt="identităţi algebrice multiplicative: produsul dintre o variabilă şi unu"/>

<p>Cea de a treia identitate multiplicativă exprimă rezultatul unei variabile booleene înmulţită cu ea însăşi. În algebra numerelor reale, acest tip de produs reprezintă pătratul variabilei în cauză (3 x 3 = 3<sup>2</sup> = 9). Conceptul de „pătrat” implică existenţa valorii 2, valoare ce nu poate fi exprimată prin algebra booleană. Nu putem spune că A x A = A<sup>2</sup>. În schimb, produsul unei valori booleene cu ea însăşi este valoarea iniţială, din moment ce 0 x 0 = 0 şi 1 x 1 = 1:</p>

<img src="../poze/14025.png" alt="identităţi algebrice multiplicative: produsul dintre o variabilă şi ea însăşi"/>

<p>A patra identitate multiplicativă nu are echivalent în algebra numerelor reale, doarece utilizaează complementul variabilei. Acest concept este unic matematicii booleene. Din moment ce trebuie să avem o valoare de „0” între oricare variabilă şi complementul acesteia, şi din moment ce produsul oricărei valorii booleene cu 0 este 0, produsul dintre o variabilă şi complementul acesteia trebuei să fie 0:</p>

<img src="../poze/14026.png" alt="identităţi algebrice multiplicative: produsul dintre o variabilă şi complementul ei"/>

<p>În concluzie, avem patru identităti booleene de bază pentru adunare şi patru pentru produs (multiplicative):</p>

<img src="../poze/14027.png" alt="identităţi algebrice aditive şi multiplicative"/>

<h2>Identitatea complementului dublu</h2>

<p>O altă identitate caracteristică complementului unei variabile este cea a complementului dublu: o variabilă inversată de două ori. Rezultatul complementării duble a unei variabile este valoarea booleană iniţială a variabilei. Acest lucru este similar înmulţirii cu -1 în algebra numerelor reale: un număr par de astfel de înmulţiri se anulează, iar rezultatul final este valoarea iniţială:</p>

<img src="../poze/14033.png" alt="identitate algebrică booleeană; complementul dublu"/>




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