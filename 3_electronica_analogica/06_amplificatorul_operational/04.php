<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Reacţia negativă</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Reacţia negativă</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Dacă ar fi să conectăm ieşirea unui AO la intrarea sa inversoare (-) şi în acelaşi timp să aplicăm un semnal te tensiune la intrarea sa neinversoare (+), vom vedea că tensiunea de ieşire a AO este foarte apropiată de cea de intrare (pentru simplitate, sursa de putere, circuitul +V/-V şi masa nu au mai fost desenate în figură):</p>

#+CAPTION: amplificator operaţional; conectarea ieşirii la intrarea neinversoare
[[../poze/03034.png]]

<p>Pe măsură ce V<sub>intrare</sub> creşte, V<sub>ieşire</sub> creşte şi ea pe măsura amplificării diferenţiale. Totuşi, pe măsură ce V<sub>ieşire</sub> creşte, această tensiune de ieşire este furnizată înapoi spre intrarea inversoare, ducât asfel la scăderea diferenţei de tensiune dintre cele două intrări şi scăderea tensiunii de ieşire prin urmare. Rezultatul este că, pentru oricare valoare a tensiunii de intrare, tensiunea de ieşire va fi aproape egală cu V<sub>intrare</sub>, dar suficientă pentru menţinerea unei diferenţe de tensiune între V<sub>intrare</sub> şi intrarea (-) a cărei amplificare generează tensiunea de ieşire.</p>

<p>Circuitul va atinge foarte repede un punct de echilibru, unde valoare tensiunii de ieşire este asfel încât să menţină o diferenţa necesară de tensiune la intrare, ce produce la rândul ei o tensiune de ieşire suficientă. Introducerea la intrarea inversoare a amplificatorului a tensiunii sale de ieşire este o tehnică numită <i>reacţie negativă</i>, şi este un concept fundamental şi esenţial pentru stabilizarea unui sistem în general. Această stabilitate oferă amplificatorului operaţional posibilitatea funcţionării în zona sa liniară, şi nu doar saturat sau blocat, aşa cum a fost cazul comparatorului (fără reacţie).</p>

<p>Deoarece amplificarea AO este atât de mare, tensiunea pe intrarea inversoare poate fi menţinuţa aproximativ egală cu V<sub>intrare</sub>. Să presupunem de exemplu că AO din exemplu are o amplficare de 200.000. Dacă V<sub>intrare</sub> = 6 V, tensiunea de ieşire va fi de 5.999970000149999 V. Această valoare este suficientă pentru ca tensiunea diferenţială de 6 V - 5.999970000149999 V = 29.99985 µV, amplficată cu factorul de 200.000 să producă la ieşire exact 5.999970000149999 V; sistemul este asfel în echilibru, iar valoarea tensiunii de ieşire nu se (mai) modifică. După cum se poate vedea, diferenţa de tensiune nu este prea mare (29.99985 µV); din considerente practice, putem presupune că această diferenţă de tensiune dintre cele două intrări este menţinută prin intermediul reacţiei negative la exact 0 V.</p>

#+CAPTION: amplificator operaţional cu recţie negativă; diferenţa de tensiune dintre cele două intrări este foarte aproape de zero volţi
[[../poze/03035.png]]

#+CAPTION: aproximarea efectelor unui amplificator operaţional cu reacţie negativă
[[../poze/03036.png]]

<p>Un mare avantaj al utilizării AO cu reacţie negativă este că valoarea amplificării în tensiune  nu este importantă, atâta timp cât este foarte mare. Dacă amplificarea diferenţială ar fi fost 250.000 în loc de 200.000, atunci tensiunea de ieşire ar fi şi mai apropiată de valoarea V<sub>intrare</sub>. În circuitul prezentat însă, tensiunea de ieşire ar fi (din punct de vedere practic) şi în acest caz egală cu tensiunea de la intrarea neinversoare. Amplificările AO, prin urmare, nu trebuie să fie foarte precise din fabricaţie pentru a putea fi folosite cu succes în circuitele electronice. Circuitul de mai sus va urma pur şi simplu semnalul la intrare, cu o amplificare stabilă de 1.</p>

<p>Reîntorcându-ne la modelulu amplificatorului operaţional, putem să ne imaginăm AO ca fiind o sursă de tensiune variabilă constrolată de un <i>detector de nul</i> extrem de sensibil. „Potenţiometrul” din interiorul AO ce crează o tensiune variabilă, se va deplasa spre orice poziţie este nevoie, asfel încât să „balanseze” intrările inversoare şi neinversoare iar căderea de tensiune pe detectorul de nul, ca urmare a acestui fapt, să fie zero (indicaţia detectorului de nul = 0).</p>

#+CAPTION: amplificator operaţional cu reacţie negativă - analogie detector de nul şi potenţiometru
[[../poze/03232.png]]

<p>Peria potenţiometrului se va mişca asfel încât tensiunea de ieşire să ducă acul indicator al detectorului de nul la zero volţi. Tensiune de ieşire va fi egală cu tensiunea de intrare, 6 V în acest caz. Dacă tensiunea de intrare se modifică, potenţiometrul din interiorul AO îşi va modifica poziţia asfel încât detectorul de nul să fie echilibrat (0 V). Rezultatul este o tensiune de ieşire aproximativ egală cu cea de intrare.</p>

<p>Acest lucru este valabil pentru întregul domeniu de tensiuni pe care AO îl poate susţine la ieşire. Cu o sursă de putere de +15V/-15V, şi un amplificator ideal ce poate amplfica tensiunea de la intrare între aceste limite maxime, ieşirea AO va „urmări” tot timpul intrarea sa între -15 V şi + 15 V. Din acest motiv, circuitul de mai sus poartă numele de <i>repetor de tensiune</i>. Amplificarea în tensiune este 1 pentru această configuraţie, impedanţa de intrare mare, cea de ieşie mică şi un factor de amplificare în curent mare. </p>

<p>Trebuie menţionat faptul că multe AO nu pot genera la ieşire căderi de tensiune exact cât tensiunea de alimentare. Tensiunea de ieşire a modelului 741, de exemplu, la saturaţie, este mai mică cu un volt pe partea pozitivă (+V), şi cu doi volţi pe partea negativă (-V). Asfel, cu o sursă de tensiune duală de +15/-15 V, ieşirea unui AO poate fi maxim +14 V şi minim -13 V (cu aproximare), dar nu poate creşte mai mult de atât datorită metodei de confecţionare al AO. Aceste două limite sunt cunoscute sub numele de <i>tensiunea pozitivă de saturaţie</i>, respectiv <i>tensiunea negativă de saturaţie</i>. Alte AO, precum modelul 3130, ce folosesc tranzistori cu efect de câmp pe etaju de ieşire, pot urma tensiunea de alimentare cu o aproximaţie de câţive milivolţi, în ambele părţi. Practic, tensiunile de saturaţie pozitivă, respectiv negativă, sunt egale cu tensiunile de alimentare.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Comectarea ieşiri unui AO la intrarea sa inversoare (-) poartă numele de <i>reacţie negativă</i></li>
	<li>Când ieşirea unui AO este conectată <i>direct</i> la intrarea inversoare (-), configuraţia creată poartă numele de <i>repetor de tensiune</i>. Oricare ar fi semnalul de tensiune aplicat pe intrarea neinversoare (+), valoarea semnalului de ieşire va fi egală cu acesta</li>
	<li>Un AO cu reacţie negativă tinde să aducă tensiunea sa de ieşire la nivelul necesar pentru ca diferenţa de tensiune dintre cele două intrări ale sale să fie practic zero. Cu cât amplficarea AO este mai mare, cu atât mai apropiată de zero va fi valoarea diferenţei de tensiune</li>
	<li>Unele AO nu pot produce la ieşire o tensiune egală cu tensiunea de alimentare atunci când sunt saturate. Limita superioară şi inferioară a tensiunii de saturaţie poartă numele de <i>tensiunea pozitivă de saturaţie</i>, respectiv <i>tensiunea negativă de saturaţie</i></li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
