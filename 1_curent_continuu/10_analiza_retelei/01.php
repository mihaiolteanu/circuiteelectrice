<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Ce înseamnă analiza unei reţele</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Ce înseamnă analiza unei reţele</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>General vorbind, <i>analiza reţelei</i> este o metodă matematică folosită pentru analiza unui circuit (o „reţea” de componente interconectate). În multe cazuri, tehnicianul sau inginerul, va întâlni circuite ce conţine surse de putere multiple sau configuraţii ale componentelor ce nu se pot simplifica prin metodele serie/paralel. În aceste cazuri este necesară utilizarea altor mijloace. Acest capitol prezintă câteva tehnici folositoare pentru analiza unor asfel de circuite complexe.</p>

<p>Pentru ilustrarea faptului că un ciruit relativ simplu poate fi imposibil de redus în subcircuite serie sau paralel, să luam următorul circuit serie-paralel ca şi exemplu:</p>

<img src="../poze/00206.png" alt="circuit electric serie-paralel"/>

<p>Pentru analiza circuitului de mai sus paşii sunt următorii: găsirea rezistenţei echivalente pentru R<sub>2</sub> şi R<sub>3</sub> în paralel; adăugarea rezistorului R<sub>1</sub> în serie pentru aflarea rezistenţei echivalente totale; cunoscând tensiunea bateriei B<sub>1</sub> şi rezistenţa totală a circuitului, putem afla curentul total folosind legea lui Ohm (I=E/R); folosirea valorii curentului pentru calcularea căderilor de tensiune din circuit. O procedură destul de simplă până la urma.</p>

<p>Totuşi, dacă adăugăm o singură baterie în circuit, problema analizei circuitului se complică:</p> 

<img src="../poze/00207.png" alt="circuit electric"/>

<p>Rezistorii R<sub>2</sub> şi R<sub>3</sub> nu mai sunt conectaţi în paralel unul cu celălalt, pentru că bateria B<sub>2</sub> a fost introdusă în ramura de circuit a lui R<sub>3</sub>. Dacă suntem şi mai atenţi, putem observa că în acest circuit <i>nu</i> există doi rezistori legaţi direct în serie sau paralel unul cu celălalt. Acesta şi este dificultatea problemei: în analiza circuitelor serie-paralel, primul pas era identificarea rezistorilor în serie sau paralel, reducându-i la o rezistenţă echivalentă la următorul pas. Dar dacă niciun rezistor nu este legat în serie sau paralel cu un altul, ce putem face?</p>

<p>Este evident faptul că reducerea acestui circuit relativ simplu, cu doar trei rezistori, este imposibil de realizat prin metoda analizei circuitelor serie-paralel: este ceva cu totul diferit. Totuşi, acesta nu este singurul tip de circuit ce sfidează analiza serie-paralel.</p>

<img src="../poze/00208.png" alt="circuit electric - punte"/>

<p>În acest caz avem un circuit în punte; pentru simplitatea exemplului presupunem că <b>nu</b> este echilibrat (raportul R<sub>1</sub>/R<sub>4</sub> nu este egal cu raportul R<sub>2</sub>/R<sub>5</sub>). Dacă puntea ar fi echilibrată, curentul prin R<sub>3</sub> ar fi zero, prin urmare circuitul s-ar putea reduce la o combinaţie serie-paralel (R<sub>1</sub>--R<sub>4</sub> // R<sub>2</sub>--R<sub>5</sub>). Din păcate, iruce curent prin R<sub>3</sub> face imposibilă aplicarea analizei serie-paralel. Rezistorul R<sub>1</sub> nu este în serie cu R<sub>4</sub> datorită existenţei unei alte căi pentru curgerea electronilor, prin R<sub>3</sub>. Dar nici R<sub>2</sub> nu este în serie cu R<sub>5</sub> din aceleaşi motive. De asemenea, R<sub>1</sub> nu este în paralel cu R<sub>2</sub> pentru că existenţa rezistorului R<sub>3</sub> separă terminalii celor doi rezistori în partea de jos. Nici R<sub>4</sub> nu este în paralel cu R<sub>5</sub>.</p> 

<p>Deşi s-ar putea să nu fie evident în acest moment, problema o reprezintă existenţa prea multor cantităţi necunoscute. Într-o combinaţie serie-paralel cel puţin, exista o metodă de aflare a căderii de tensiune şi a rezistenţei totale, calcularea curentului fiind apoi posibilă utilizând acest valori. În cazul circuitelor de mai sus, există mai mult de o singură variabilă (parametru) necunoscut în cea mai simplă configuraţie a circuitului posibilă.</p>

<p>În cazul unui circuit cu două baterii, este imposibil să ajungem la valoarea „rezistenţei totale”, datorită existenţei a <i>două</i> surse de putere ce furnizează tensiune şi curent (am avea nevoie de <i>două</i> rezistenţe „totale” pentru a continua cu aplicarea legii lui Ohm). În cazul punţii dezechilibrate, există o rezistenţă totală la bornele bateriei, dar curentul total ce împarte în proporţii necunoscute în cadrul punţii, asfel că nu putem aplica legea lui Ohm pentru aflarea celorlalte valori din circuit.</p>

<p>Prin urmare, ce putem face în asfel de cazuri? Un prim răspuns este utilizarea unui proces matematic cunoscut sub numele de <i>ecuaţii simultane</i> sau <i>sisteme de ecuaţii</i>. Într-un scenariu cu o singură necunoscută, este suficientă existenţă unei singure relaţii pentru aflarea necunoscutei. Totuşi, atunci când dorim o rezolvare pentru mai multe necunoscute simultan, avem nevoie de un număr de ecuaţii egal cu numărul necunoscutelor. Rezolvarea unor asfel de ecuaţii se poate dovedi destul de dificilă în unele cazuri. Din fericire, în cele ce urmează, vom prezenta unele metode de analiză a circuitelor pentru evitatea folosirii acestor sisteme de ecuaţii. Aceste metode poartă numele de <i>teoreme de analiză a reţelelor</i>.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Unele configuraţii de reţea (circuite) nu pot fi rezolvate prin reducerea conform regulilor circuitelor serie-paralel datorită existenţei necunoscutelor multiple.</li>
	<li>Pentru rezolvarea acestor tipuri de probleme se pot folosi sistemele de ecuaţii.</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>