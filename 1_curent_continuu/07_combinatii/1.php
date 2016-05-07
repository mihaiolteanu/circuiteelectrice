<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Ce este un circuit serie-paralel</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Ce este un circuit serie-paralel</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>În cazul circuitelor serie simple, toate componentele sunt legate cap la cap şi formează o singură cale pentru curgerea electronilor prin circuit:</p>

<img src="../poze/00082.png" alt="circuit serie"/>

<p>În cazul circuitelor parale simple, toate conponentele sunt legate legate între acelaşi set de puncte comune din punct de vedere electric, formându-se asfel mai multe căi pentru curgerea electronilor de la un capăt la celălalt al bateriei:</p>

<img src="../poze/00083.png" alt="circuit serie"/>

<p>În ambele cazuri, avem de a face cu anumite seturi specifice de reguli pentru relaţiile dintre tesiune, curent şi rezistenţă. (notă: vezi circuitele serie şi circuitele paralel)</p>

<p>Dar, în cazul în care o parte dintre componente sunt legate în serie şi o altă parte a componentelor în paralel, nu este posibilă aplicarea unei <i>singure</i> reguli pentru întreg circuitul, sau pentru fiecare parte constituentă. În schimb, vom încerca identificarea părţilor serie din circuit şi a părţilor paralele, ca mai apoi să aplicăm regulile necesare în funcţie de tipul circuitului. Să vedem un exemplu:</p>

<img src="../poze/00123.png" alt="circuit serie-paralel combinat"/>

<p><img src="../poze/10126.png" alt="tabel"/></p>

<p>Acesta nu este nici un circuit serie simplu nici unul paralel simplu, ci conţine elementele din ambele tipuri. Curentul iese prin partea de jos a bateriei, se împarte (ramifică) pe cele două ramuri spre R<sub>3</sub> şi R<sub>4</sub>, se re-întâlneşte, se ramifică încă odată spre R<sub>1</sub> şi R<sub>2</sub>, se re-întânleşte din nou şi se re-întoarce la baterie. Există mai mult de un singur drum pentru circulaţia curentului (nu este serie), dar totuşi, există mai mult decât două seturi de puncte electric comune (nu este paralel).</p>

<p>Deoarece circuitul este o combinaţie între serie şi paralel, nu putem aplica relaţiile de tensiune, curent sau rezistenţă direct în tabel precum a fost cazul circuitelor serie şi paralel simple. De exemplu, dacă circuitul de mai sus ar fi fost serie simplu, am putea pur şi simplu să adunăm cele patru rezistenţe şi să obţinem rezistenţa finală, să calculăm apoi curentul total, şi apoi căderile de tensiune pe fiecare rezistor. Asemănător, dacă circuitul ar fi fost paralel simplu, am fi putut afla curenţii prin fiecare ramură, suma lor ne-ar fi dat curentul total iar de acolo puteam calcula rezistenţa totală. Totuşi, soluţia acestui circuit este puţin mai complexă de atât.</p>

<p>Tabelul este folositor pentru aflarea diferitelor valori într-un circuit serie-paralel, dar trebuie să fim atent cum şi unde aplicăm regulile pentru fiecare tip de circuit în parte (serie şi paralel).</p>

<p>Dacă putem distinge care părţi din circuit sunt serie şi care paralel, putem analiza circuitul în mai multe etape, fiecare etapă pe rând, folosind regulile corecte pentru determinarea relaţiilor dintre tensiune, curent şi rezistenţă. Restul capitolului va fi dedicat acestor tehnici.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Regulile circuitelor serie şi parelel trebuie să fie aplicate selectiv atunci când avea de a face cu un circuit combinat serie-paralel</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>