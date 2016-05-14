<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Amplificatorul cu potenţial de referinţă şi amplificatorul diferenţial</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Amplificatorul cu potenţial de referinţă şi amplificatorul diferenţial</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Pentru uşurinţa expunerii teoretice (desenării) a circuitelor electronice, amplificatoarele sunt adesea simbolizate printr-un simplu triunghi (figura de mai jos), iar componentele interne sunt „ascunse”. Această simplificare este foarte folositoare pentru cazurile în care construcţia amplificatorului este irelevantă pentru funcţionarea generală a circuitului.</p>

#+CAPTION: simbolul general al amplificatorului electronic
[[../poze/03022.png]]

<p>Conexiunile +V şi -V simbolizează borna pozitivă, respectiv negativă, a sursei de alimentare în c.c. Tensiunile de intrare şi de ieşire sunt reprezentate doar ca şi conductoare individuale, deoarece se presupune că toate semnalele au ca şi referinţă o conexiune comună din circuit, denumită <i>masă</i>. Adesea (dar nu tot timpul!), acest punct de referinţă îl reprezintă una dintre bornele sursei de alimentare în c.c., fie cea pozitivă, fie cea negativă. Un circuit practic cu amplificator arată asfel:</p>

#+CAPTION: circuit practic cu amplificator, folosind simbolul acestuia
[[../poze/03023.png]]

<p>Dacă dorim să folosm amplificatorul şi pentru semnale de c.a., va trebui să folosim două surse de c.c., iar masa să fie situată electric între +V şi -V. Această configuraţie poartă numele de sursă de tensiune <i>duală</i>.</p>

#+CAPTION: circuit practic cu amplificator; utilizarea unei surse de tensiune duală
[[../poze/03024.png]]

<p>Tensiunea de alimentare a amplificatorului este tot 30 V, dar cădere de tensiune de pe sarcină poate lua acum valori teoretice între +15 V şi -15V, în loc de +30 V şi 0 V. Aceasta este o modalitate simplă de obţinere a c.a. la ieşirea unui amplificator fără a fi nevoiţi să folosim cumplaje capacitive sau cuplaje cu transformator la ieşire.</p>

<h2>Amplificatorul diferenţial</h2>

<p>Prin sibolizarea unui circuit complex printr-un cingur triunghi, putem studia mult mai uşor amplificatoare şi circuite mult mai complexe. Unul dintre aceste amplificatoare mai complexe pe care le vom studia, poartă numele de <i>amplificator diferenţial</i>. Faţă de amplificatoarele „normale” ce amplifică un singur semnal de intrare (amplificatoare cu <i>potenţial de referinţă</i>, cele diferenţiale amplifică diferenţa de tensiune dintre două semnale de intrare. Utilizând simboul triunghiului pentru desemnarea acestuia, un amplificator diferenţial arată asfel:</p>

#+CAPTION: simbolul amplificatorului diferenţial
[[../poze/03025.png]]

<p>Ca şi în circuitul precedent, toate tensiunile au ca şi referinţă masa circuitului. Se poate observa că un terminal de intrare este marcat cu minus (-) iar celălalt cu plus (+). Întrucât un amplificator diferenţial amplifică diferenţa dintre cele două semnale de la intrare, fiecare intrare influenţează tensiunea de la ieşire în mod diferit (opus). Să considerăm următorul tabel cu tensiunile de intrare/ieşire pentru un amplificator diferenţial cu un factor de amplificare în tensiune de 4:</p>

<table>
	<tr>
		<td>(-) Intrare<sub>1</sub></td>
		<td>0</td>
		<td>0</td>
		<td>0</td>
		<td>0</td>
		<td>1</td>
		<td>2,5</td>
		<td>7</td>
		<td>3</td>
		<td>-3</td>
		<td>-2</td>
	</tr>
	<tr>
		<td>(-) Intrare<sub>2</sub></td>
		<td>0</td>
		<td>1</td>
		<td>2,5</td>
		<td>7</td>
		<td>0</td>
		<td>0</td>
		<td>0</td>
		<td>3</td>
		<td>3</td>
		<td>-7</td>
	</tr>
	<tr>
		<td>Ieşire</td>
		<td>0</td>
		<td>4</td>
		<td>10</td>
		<td>28</td>
		<td>-4</td>
		<td>-10</td>
		<td>-28</td>
		<td>0</td>
		<td>24</td>
		<td>-20</td>
	</tr>
</table>

<p>Unde ecuaţia tensiunii de ieşire arată astfel:</p>

<div class="formula">
V<sub>ieşire</sub> = A<sub>V</sub>(Intrare<sub>1</sub> - <sub>2</sub>) sau <br/>
V<sub>ieşire</sub> = A<sub>V</sub>(Intrare<sub>(+)</sub> - <sub>(-)</sub>)
</div>

<p>O creştere a tensiunii pe intrarea pozitivă (+) duce la creşterea pozitivă a amplificării, iar o creştere a tensiunii pe intrarea negativă (-) duce la o creştere negativă a amplificării. De asemenea, o scădere a tensiunii pe (+) duce la scăderea tensiunii de ieşire, iar o creştere a tensiunii pe (-) are un rezultat opus. Datorită acestei relaţii dintre cele două terminale de intrare, intrarea negativă (-) mai poartă numele de intrare <i>inversoare</i> iar cea pozitivă (+) poartă numele de intrare <i>neinversoare</i>.</p>

<p>Pentru a înţelege mai bine modul de funcţionare, putem reprezenta un amplificator diferenţial ca şi o sursă variabilă de tensiune controlată de un voltmetru sensibil, asfel:</p>

#+CAPTION: amplificatorul diferenţial ca şi sursă variabilă de tensiune controlată de un voltmetru sensibil
[[../poze/03231.png]]

<p>Desigur, figura de mai sus este doar un <i>model</i>, şi nu reprezintă schema reală de construire a amplificatorului. Simbolul „G” reprezintă un galvanometru, o deplasare sensibilă a unui voltmetru. Potenţiometrul conectat între +V şi -V furnizează o tensiune variabilă la contactul de ieşire (ce are ca şi referinţa una dintre bornele sursei de tensiune în c.c.), tensiune stabilită de indicaţia galvanometrului. Trebuie înţeles faptul că orice sursă conectată la ieşirea unui amplificator diferenţial este alimentată de sursa de tensiune de c.c. (baterie), şi <i>nu</i> de semnalul de intrare. Semnalul de intrare (galvanometru) doar <i>controlează</i> ieşirea.</p>

<p>Cu toate aceste polarităţi, este foarte uşor să greşim şi să nu ne dăm seama care va fi ieşirea unui amplificator diferenţial. Pentru evitarea acestor situaţii, putem observa următoarea regulă:</p>

#+CAPTION: regula amplificatoarelor diferenţiale pentru identificarea ieşirii acestora
[[../poze/03026.png]]

<p>Când polaritatea tensiunii <i>diferenţiale</i> de la intrare este aceeiaşi cu polaritatea intrărilor (inversoare şi neinversoare) amplificatorului, tensiunea de ieşire va fi pozitivă. Când polaritatea tensiunii diferenţiale este inversă faţă de cea a intrărilor, ieşirea amplificatorului va fi negativă.</p>

<h2>Utilizare</h2>

<p>Dacă tensiunile de intrare ale amplificatorului diferenţial reprezintă cantităţi matematice (cum este cazul circuitelor analogice ale calculatoarelor), sau mărimi fizice de proces (cum este cazul circuitelor electronice de instrumentaţie), putem vedea utilitatea unui asfel de dispozitiv. Am putea folosi amplificatoare operaţionale pentru a compara două cantităţi şi a vedea care este mai mare (prin intermediul polarităţii tensiunii de ieşire), sau am putea face o comparaţie a diferenţei dintre două cantităţi (precum nivelul apei din două bazine) şi acţionarea unei alarme luminoase şi/sau sonore dacă diferenţa este prea mare (în funcţie de valoarea absolută a semnalului de ieşire). În circuitele de control automat, cantiatea controlată poartă numele de <i>variabilă de proces</i> şi este comparată cu o valoare fixă denumită <i>punct de referinţă</i>; deciziile sistemului automat sunt luate în funcţie de diferenţa dintre aceste două valori. Primul pas într-o asfel de schemă constă în amplificarea diferenţei dintre variabila de proces şi punctul de referinţă cu ajutorul unui amplificator diferenţial. În circuitele simple, ieşirea amplificatorului poate fi utilizată pentru acţionarea unui element final de control (precum o valvă) şi menţinerea procesului cât mai aproape de punctul de referinţă.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Simbolul amplificatorului electronic este un triunghi, unde baza semnifică intrarea iar vârful semnifică ieşirea acestuia. Alimentarea amplificatorului este adesea omisă pentru simplificarea desenului</li>
	<li>Pentru amplificarea semnalelor de c.a. se poate folosi o sursă de tensiune duală, constând din două surse de c.c. conectate în serie cu punctul median conectat la masă</li>
	<li>Majoritatea amplificatoarelor au o singură intrare şi o singură ieşire. <i>Amplificatoarele diferenţiale</i> au două intrări şi o singură ieşire, semnalul de intrare fiind direct proporţional cu diferenţa dintre cele două semnale de intrare</li>
	<li>Tensiunea de ieşire a unui amplificator diferenţial este dată de ecuaţia V<sub>ieşire</sub> = A<sub>V</sub>(V<sub>(+)</sub> - V<sub>(-)</sub>)</li>
</ul>
</div>

<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
