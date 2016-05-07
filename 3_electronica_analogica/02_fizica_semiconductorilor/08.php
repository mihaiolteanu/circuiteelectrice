<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Tranzistorul cu efect de câmp (JFET)</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>8. Tranzistorul cu efect de câmp (JFET)</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Tranzistorul cu efect de câmp a fost propus de Julius Liliendfel în 1926 şi 1933 sub formă de patent. Shockley, Brattain şi Bardeen au investigat şi e tranzistorul cu efect de câpm în 1947, dar dificultăţile întâmpinate în realizarea acestuia i-au dus în schimb la dezvoltarea tranzistorului bipolar. Teoria tranzistorului cu efect de câmp a lui Shockley a fost publicată în 1952, dar tehnologia de procesare a materialelor nu era sufificent de bine dezvoltată, asfel că doar în anul 1960 s-a reuşit fabricarea unui dispozitiv funcţional de către John Atalla.</p>

<p>Un tranzistor cu efect de câmp (FET - field effect transistor), este un dispozitiv <i>unipolar</i>, ceea ce înseamnă că existenţa curentului depinde de un singur tip de purtători de sarcină. Dacă dispozitivul se bazează pe un material semiconductor de tip N, purtătorii de sarcină sunt electroni. Invers, pentru unul de tip P, purtătorii de sarcină sunt golurile.</p>

<p><img src="../poze/03415.png" alt="tranzistor cu efect de câmp cu joncţiune (JFET); secţiune transversală"/></p>

<p>La nivelul circuitului, funcţionarea tranzistorilor cu efect de câmp este simplă. O tensiune aplicată pe <i>poartă</i>, elementul de intrare, controlează rezistenţa unei regiuni unipolare dintre <i>sursă</i> şi <i>drenă</i> denumită <i>canal</i>; într-un dispozitiv de tip N, această regiune este reprezentată de un material semiconductor dopat de tip N<sup>-</sup>, cu terminale la ambele capete. Sursa şi drena sunt terminale echivalente cu emitorul şi colectorul într-un tranzistor bilpolar. Cu alte cuvinte, sursa este locul de plecare al purtătorilor de sarcină, iar drena este locul înspre care aceştia se deplasează. Poarta este echivalentă bazei tranzistorului bipolar, iar în cadrul unui dispozitiv de tip N, este reprezentată de o regiune de tip P<sup>+</sup> (dopată puternic) prezentă pe ambele laturi şi în jurul canalului din centrul semicondcutorului.</p>

<p>Curăţenia este absolut necesară în cazul producerii tranzistorilor cu efect de câmp. Deşi este posibilă producerea tranzistorilor bipolari în afara unui spaţiu perfect curat, nu acelaşi lucru se poate spune şi despre cei cu efect de câmp. Tranzistorul cu efect de câmp este mult mai simplu din punct de vedere conceptual decât cel bipolar, dar este foarte greu de produs.</p>

<p>În figura de mai sus, este prezentat un tranzistor cu efect de câmp cu joncţiune (JFET). Poarta constituie o joncţiune, şi este polarizată invers pentru funcţionarea corectă a dispozitivului. Curentul dintre sursă şi drenă poate exista în ambele direcţii.</p>

<p>În figura de mai jos este reprezentată zona de golire a joncţiunii porţii, datorită difuziei golurilor din regiunea de tip P (poartă) în regiunea de tip N (canal). Această difuzie duce la separarea purtătorilor de sarcină în zona joncţiunii şi o zonă de golire non-conductivă la joncţiune.</p>

<p><img src="../poze/03416.png" alt="canalul tranzistorului cu efect de câmp cu joncţiune (JFET): (a) zona de golire a porţii; (b) creşterea zonei de golire la polarizarea inversă; (c) zona de golire creşte tot mai mult cu creşterea tensiunii de polarizare inversă; (d) blocarea canalului sursă-drenă (S-D) datorită creşterii tensiunii de polarizare inversă "/></p>
 
<p>Grosimea zonei de golire poate fi crescută prin aplicarea unei tensiuni moderate de polarizare inversă (figura de mai sus(b)). Acest lucru duce la creşterea rezistenţei canalului sursă-drenă prin îngustarea acestuia. Creşterea în continuare a tensiunii de polarizare inversă duce la creşterea zonei de golire, scăderea grosimii canalului şi creşterea rezistenţei acestuia (c). Peste un anumit nivel (d), tensiunea de polarizare inversă, V<sub>GS</sub> va bloca curentul prin canal, rezistenţa acestuia fiind foarte mare. Tensiunea de blocare, V<sub>P</sub> este de câţiva volţi în majoritatea cazurilor. Pe scurt, rezistenţa canalului sursă-drenă poate fi controlat cu ajutorul valorii de polarizarea inversă a porţii.</p>

<p>Sursa şi drena sunt interschimbabile, ceea ce înseamnă că există posibilitatea deplasării electronilor în oricare dintre direcţii pentru o tensiune mică a bateriei drenei (0.6 V). Cu alte cuvinte, bateria drenei poate fi înlocuită cu o sursă de tensiune scăzută în curent alternativ. Pentru valori mai mari a tensiunii drenei, de ordinul zecilor de volţi pentru dispozitive mici, polaritatea alimentării este cea prezentată în figura de mai jos (a). Atenţie, în unele cărţi de specialitate, poarta (P) mai este denumită şi grilă (G), sau cele două notaţii sunt folosite chiar concomitent. Am ales în această carte să rămânem la denumirea de poartă, iar aceasta este notată corespunzător pe desene cu P. În orice caz, cele două exprimări sunt echivalente.</p>

<p><img src="../poze/03417.png" alt="direcţia curentului într-un tranzistor cu efect de câmp de tip N: (a) secţiune transversală; (b) simbolul schematic"/></p>

<p>Această sursă de tensiune a drenei, ce nu este prezentă în figurile precedente, distorsionează zona de golre, mărind-o înspre partea drenei. Aceasta este o reprezentare mult mai corectă o tensiunilor de curent continuu ale drenei, de la câţiva volţi la zeci de volţi. Pe măsură ce tensiunea drenă-sursă (U<sub>DS</sub>) creşte, zona de golire dinspre drenă creşte spre această. Acest lucru duce şi la creşterea lungimii canalului, cu efecte asupra rezistenţei (creşte) acestuia. Totuşi, această creştere a rezistenţei datorată creşterii lungimii canalului este foarte mică în comparaţie cu rezistenţa datorată polarizării inverse a porţii. În figura de mai sus (b) este prezentat şi simbolul schematic al unui tranzistor cu efect de câmp cu canal de tip N. Săgeata porţii indică aceeiaşi direcţia ca şi joncţiunea diodei, şi corespunde regiunii de tip P. Celelalte două extremităţi (S şi D), ce nu conţin nicio direcţie, corespund materialului semiconductor de tip N.</p>

<p>În figura de mai sus este reprezentată şi direcţia curentului de la terminalul (-) a bateriei spre sursă (S), apoi spre drenă (D) şi înspre terminalul (+) al bateriei. Acest curent poate fi controlat prin variaţia tensiunii de polarizare înversă a porţii (P). O sarcină conectată în serie cu bateria „vede” o versiune amplificată a variaţiei tensiunii de pe poartă.</p>

<h3>Tranzistorul cu efect de câmp cu canal de tip P</h3>

<p>Tranzistoarele cu efect de câmp pot fi realizate şi cu canal de tip P, ceea ce înseamnă ca poarta este realizată dintr-un material semiconductor dopat de tip N<sup>+</sup> (dopat puternic). Toate sursele de tensiune sunt inversate într-un circuit cu JFET de tip P faţa de cel cu canal de tip N (figura de mai jos (a)). Săgeata în acest caz este îndreptată dinspre poartă înspre sursa de polarizare inversă (figura de mai jos (b)).</p>

<p><img src="../poze/03418.png" alt="tranzistor cu efect de câmp cu canal de tip P: (a) tensiunile surselor de alimentare sunt inversată faţă de tranzistorul cu canal de tip N; (b) simbolul schematic - direcţia săgeţii porţii este inversată"/></p>

<p>Modul de funcţionare este asemănător tranzistorului cu efect de câmp cu canal de tip N prezentat mai sus.</p>

<h3>Modul de confecţionare</h3>

<p>Dispozitivele discrete sunt confecţionate conform figurii de mai jos (a), iar circuitele integrate cu tranzistoare cu efect de câmp, sunt confecţionate conform figurii de mai jos (b). Poarta este dopată puternic, P<sup>+</sup>, pentru obţinerea unei zone de golire cât mai mari. Sursa şi drena acestui dispozitiv de tip N sunt şi ele dopate puternic, N<sup>+</sup>, pentru obţinerea unei rezistenţe de conexiune cât mai mici. Totuşi, canalului din jurul porţii este dopat uşor, N<sup>-</sup>, pentru a permiter trecerea golurilor dinspre poartă înspre canal.</p>

<p><img src="../poze/03303.png" alt="tranzistorul cu efect de câmp cu joncţiune: (a) secţiune transversală printr-un dispozitiv discret; (b) simbolul schematic; (c) secţiune transversală printr-un circuit integrat"/></p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Conducţia canalului unui tranzistor (unipolar) cu efect de câmp (FET sau JFET) se datorează unui singur tip de purtător de sarcină</li>
	<li>Sursa, poarta şi drena unui JFET corespund emitorului, bazei şi colectorului unui tranzistor bipolar</li>
	<li>Polarizarea inversă a porţii duce la variaţia rezistenţei canalului prin extinderea zonei de golire</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>