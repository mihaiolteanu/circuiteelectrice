<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Simplificarea circuitelor logice</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>6. Simplificarea circuitelor logice</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Simplificarea circuitelor cu porţi logice</h2>

<p>Să începem cu un circuit logic cu porţi ce necesită o simplificare. Presupunem că intrările A, B şi C sunt asigurate de comutatoare, senzori sau alte porţi logice. Originea acestor semnale nu este importantă din punct de vedere al simplificării.</p>

#+CAPTION: circuit cu porţi logice
[[../poze/04287.png]]

<h3>Scrierea expresiei booleene</h3>

<p>Primul pas al simplificării constă în scrierea expresiei booleene pentru acest circuit. Acest pas este cel mai uşor de realizat dacă scriem sub-expresii pentru ieşirea fiecărei porţi, corespunzător semnalelor de intrare. Este bine să reamintim faptul că porţile SAU sunt echivalente adunării booleene, iar porţile ŞI sunt echivalente înmulţirii booleene. Să scriem aşadar sub-expresii la ieşirea primelor trei porţi:</p>

#+CAPTION: circuit cu porţi logice; scrierea sub-expresiilor la ieşirea porţilor
[[../poze/04288.png]]

<p>Scriem apoi sub-expresiile următoarelor seturi de porţi. În cazul de faţa, avem doar o singură poartă pe nivelul următor:</p>

#+CAPTION: circuit cu porţi logice; scrierea sub-expresiilor la ieşirea porţilor
[[../poze/04289.png]]

<p>Şi, în sfârşit, ieşirea (Q) circuitului logic este egală cu următoarea expresie:</p>

#+CAPTION: circuit cu porţi logice; scrierea sub-expresiilor la ieşirea porţilor
[[../poze/04290.png]]

<h3>Simplificarea expresiei booleene</h3>

<p>Acum că avem o expresie booleenă, următorul pas este aplicarea regulilor algebrei booleene pentru reducerea expresiei de mai sus la forma ei cea mai simplă. Reamintim faptul că cea mai simplă formă este aceas formă care necesită cele mai puţine porţi logice pentru implementarea ei.</p>

<p>Prin urmare, expresia AB + BC(B + C) poate fi redusă astfel: la primul pas realizăm înmulţirea termenilor; aplicăm apoi identitatea AA = A termenilor doi şi trei; aplicăm identitatea A + A = A termenilor doi şi trei rezultaţi; scoatem termenul comun B în faţa:</p>

<div class="formula">
AB + BC(B + C) = AB + BBC + BCC = AB + BC + BC = AB + BC = B(A + C)
</div>

<p>Expresia rezultată, B(A + C), este mult mai simplă decât cea originală. Ea realizează însă aceiaşi funcţie. Dacă vreţi să verificaţi acest lucru, puteţi construi un tabel de adevăr pentru ambele expresii, Determinaţi apoi rezultatul Q (ieşirea circuitului) pentru toate cele opt combinaţii posibile dintre A, B şi C pentru ambele circuitele. Cele două tabele trebuie să fie identice.</p>

<h3>Evaluarea expresiei booleene rezultate</h3>

<p>Următorul pas constă în generarea unei scheme logice folosind această expresie booleeană simplificată. Pentru realizarea acestui lucru, evaluăm expresia urmând ordinea matematică a operaţiilor (înmulţirea înainte adunării, operaţiile din interiorul parantezelor înaintea celorlalte). La fiecare pas vom adăuga o nouă poartă. Porţile sau sunt echivalente cu adunarea booleană, iar porţile ŞI sunt echivalente operaţiei de înmulţirea booleană. În exemplul de faţa, începem construirea circuitului cu sub-expresia „A + C”, expresie ce nu este altceva decât o poartă SAU:</p>

#+CAPTION: poartă logică SAU
[[../poze/04291.png]]

<p>Următorul pas în evaluarea expresiei B(A + C) constă în înmulţirea (poartă ŞI) semnalului B cu ieşirea porţii precedente (A + C):</p>

#+CAPTION: evaluarea expresiei booleene
[[../poze/04292.png]]

<p>Evident, acest circuit este mult mai simplu decât cel original, având doar două porţi logice în loc de cinci. O astfel de reducere a numărului de componente duce la viteze de funcţionare crescute (timpul de propagare a semnalului de la intrare la ieşire este mai scurt), consum de energie mai scăzută, cost mai mic şi o fiabilitate crescută.</p>

<h2>Simplificarea circuitelor cu relee electromecanice</h2>

<p>Circuitele cu relee electromecanice pot profita foarte mult de pe urma simplificării booleene. De obicei, acestea sunt mai lente, consumă mult mai multă energie, costă mai mult, iar durata de viaţă medie este mai scurtă decât cea a porţilor logice semiconductoare. Să considerăm aşadar exemplul de mai jos:</p>

#+CAPTION: circuit logic cu relee electromecanice
[[../poze/04293.png]]

<h3>Scrierea expresiei booleene</h3>

<p>Primul pas al reducerii acestui circuit la forma cea mai simplă este, din nou, transformarea circuitului sub forma unei expresii booleene. Cea mai simplă metodă de realizare a acestui lucru este asemănătoare cu metoda reducerii unui circuit rezistiv serie-paralel la o singură rezistenţă. De exemplu, să considerăm circuitul rezistiv de mai jos, cu rezistorii aranjaţi asemeni contactelor circuitului precedent.</p>

#+CAPTION: circuit rezistiv serie-paralel
[[../poze/04294.png]]

<p>Formula corespunzătoare reducerii acestui circuit la o rezistenţă echivalenta, este următoarea:</p>

<div class="formula">
R<sub>total</sub> = R<sub>1</sub> // [(R<sub>3</sub> // R<sub>4</sub>) -- R<sub>2</sub>] // (R<sub>5</sub> -- R<sub>6</sub>)
</div>

<p>Contactele paralele sunt echivalente cu adunarea booleeană, iar contactele serie cu înmulţirea booleeană. Expresia booleenă a circuitului cu relee de mai sus se scrie urmând aceleaşi reguli care se regăsesc în cazul rducerii circuitelor serie-paralel la o rezistenţa totală echivalentă. Simplificarea ne este uşurată dacă scriem sub-expresii booleene la stânga fiecărei linii în parte:</p>

#+CAPTION: circuit logic cu relee electromecanice
[[../poze/04295.png]]

<p>Acum că avem o expresie booleană, tot ceea ce trebuie să facem este să aplicăm regulile de simplificare pentru a aduce expresia la forma ei cea mai simplă (formă ce necesită cele mai puţine relee pentru implementarea fizică).</p>

<p>Paşii sunt următorii: extindem termenul B(A + C); aplicăm regula A + AB = A primilor doi termeni; aplicăm regula A + AB = A primului termen şi termenului al treilea:</p>

<div class="formula">
A + B(A + C) + AC = A + AB + BC + AC = A + BC + AC = A + BC
</div>

<p>După cum putem vedea, circuitul redus este mult mai simplu decât originalul, dar funcţia logică pe care o îndeplineşte este neschimbată:</p>

#+CAPTION: circuit logic cu relee electromecanice; forma simplificată
[[../poze/04296.png]]



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
