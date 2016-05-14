<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Voltmetrul</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Voltmetrul</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Majoritatea aparatelor de măsură sunt dispozitive foarte sensibile. Unele modele, precum D'Arsonval, necesită un curent de doar 50 µA pentru a duce acul indicator în poziţia maximă a scalei de valori; rezistenţa internă a acestor tipuri de aparate nu este mai mare de 1000 Ω. În consecinţă, un astfel de voltmetru poată măsura o tensiune maximă de doar 50 mV (50 µA X 1000 Ω), pentru că la această valoare, acul indicator este în poziţia sa maximă (dreapta) şi nu se mai poate deplasa. Pentru a putea realiza voltmetre practice, cu capabilităţi de măsurare a unor tensiuni mult mai mari, folosind aceste dispozitive sensibile, trebuie găsită o metodă de reducere a deplasării acului indicator.</p>

<h2>Modelul D'Arsonval</h2>

#+CAPTION: dispozitiv de măsură D'Arsonval
[[../poze/00150.png]]

<p>Să luăm ca şi prim exemplu un dispozitiv tip D'Arsonval, cu o rezistenţa internă a bobinei de 500 Ω, şi a cărei deplasare maximă (D.M.) se realizează pentru un curent de 1 mA.</p>

<div class="clear"></div>

<p>Aplicând legea lui Ohm, putem determina tensiunea necesară deplasării acului indicator la valoarea maximă:</p>

<div class="formula">
E = IR
E = (1 mA)(500 Ω)
E = 0,5 V
</div>

<p>Dacă am dori să folosim acest aparat pentru măsurarea tensiunilor ce nu depăşesc o jumătate de volt, această configuraţie ar fi mai mult decât suficientă. Dar pentru a măsură tensiuni peste această valoare, trebuie să aducem unele modificări. Pentru a obţine o deplasare observabilă a acului pentru o valoare a tensiunii de peste 0,5 V, este nevoie ca doar o parte din tensiune de măsurat să se regăsească pe bobina internă. Desigur, va trebui să modificăm şi scala aparatului de măsură, astfel încât să existe o legătură directă între deplasarea acului indicator şi valoarea reală a tensiuni măsurate.</p>

#+CAPTION: dispozitiv de măsură D'Arsonval
[[../poze/00151.png]]

<p>Această operaţie se poate realiza foarte uşor cu ajutorul unui divizor de tensiune. Ştiind că un divizor de tensiune se realizează cu ajutorul rezistorilor conectaţi în serie, tot ceea e trebuie să facem este să conectăm un rezistor în serie cu rezistenţa internă a configuraţiei iniţiale (înclusă în dispozitiv), rezultatul fiind un divizor de tensiune format din doi rezistori.</p>

<div class="clear"></div>

<p>Rezistorul serie poartă numele de „rezistor de multiplicare” datorită faptului că multiplică valoare tensiunii ce poate fi măsurată. Determinarea valorii rezistenţei este uşoară dacă suntem familiarizaţi cu analiza circuitelor serie. De exemplu, să determinăm valoarea R<sub>multiplicare</sub> pentru ca dispozitivul de mai sus (1 mA, 500 Ω) să poată măsura tensiuni de până la 10 V.</p>

<table class="floatleft">
	<tr>
		<th>Unitate</th>
        <th>Deplasare</th>
		<th>R<sub>multiplicare</sub></th>
		<th>Total</th>
        <th>Unitate</th>
	</tr>
	<tr>
		<td>E</td>
		<td></td>
		<td></td>
		<td></td>
		<td>V</td>
	</tr>
	<tr>
		<td>I</td>
		<td></td>
		<td></td>
		<td></td>
		<td>A</td>
	</tr>
	<tr>
		<td>R</td>
		<td></td>
		<td></td>
		<td></td>
		<td>Ω</td>
	</tr>
</table> 

<p>Putem folosi metoda tabelului pentru a ne uşura calculele.</p>

<div class="clear"></div>

<table class="floatleft">
	<tr>
		<th>Unitate</th>
        <th>Deplasare</th>
		<th>R<sub>multiplicare</sub></th>
		<th>Total</th>
        <th>Unitate</th>
	</tr>
	<tr>
		<td>E</td>
		<td></td>
		<td></td>
		<td><b>10</b></td>
		<td>V</td>
	</tr>
	<tr>
		<td>I</td>
		<td><b>1 m</b></td>
		<td><b>1 m</b></td>
		<td><b>1 m</b></td>
		<td>A</td>
	</tr>
	<tr>
		<td>R</td>
		<td><b>500</b></td>
		<td></td>
		<td></td>
		<td>Ω</td>
	</tr>
</table> 

<p>Cunoscând faptul că deplasarea va fi maximă pentru un curent de 1 mA, precum şi faptul că tensiunea la care dorim ca acest lucru să se întâmple este de 10 V (circuit serie, valoare totală), putem completa tabelul astfel.</p>

<div class="clear"></div>

<table class="floatleft">
	<tr>
		<th>Unitate</th>
        <th>Deplasare</th>
		<th>R<sub>multiplicare</sub></th>
		<th>Total</th>
        <th>Unitate</th>
	</tr>
	<tr>
		<td>E</td>
		<td></td>
		<td></td>
		<td>10</td>
		<td>V</td>
	</tr>
	<tr>
		<td>I</td>
		<td>1 m</td>
		<td>1 m</td>
		<td>1 m</td>
		<td>A</td>
	</tr>
	<tr>
		<td>R</td>
		<td>500</td>
		<td><b>9,5 k</b></td>
		<td><b>10 k</b></td>
		<td>Ω</td>
	</tr>
</table> 

<p>Există mai multe metode de determinare a rezistenţei de multiplicare. O variantă presupune determinarea rezistenţei totale a circuitului aplicând legea lui Ohm pe coloana „total” (R = E / I), scazând apoi valoarea de 500 Ω a deplasării pentru a obţine valoarea R<sub>multiplicare</sub>. O a doua metodă constă în determinarea căderii de tensiune pe rezistenţa internă atunci când deplasarea acului indicator este maximă (E = IR), căderea de tensiunea pe rezistorul de multiplicare fiind egală cu diferenţa dintre căderea de tensiune totală şi căderea de tensiune pe rezistenţa internă.</p>

<div class="clear"></div>

<table class="floatleft">
	<tr>
		<th>Unitate</th>
        <th>Deplasare</th>
		<th>R<sub>multiplicare</sub></th>
		<th>Total</th>
        <th>Unitate</th>
	</tr>
	<tr>
		<td>E</td>
		<td><b>0,5</b></td>
		<td><b>9,5</b></td>
		<td>10</td>
		<td>V</td>
	</tr>
	<tr>
		<td>I</td>
		<td>1 m</td>
		<td>1 m</td>
		<td>1 m</td>
		<td>A</td>
	</tr>
	<tr>
		<td>R</td>
		<td>500</td>
		<td>9,5 k</td>
		<td>10 k</td>
		<td>Ω</td>
	</tr>
</table> 

<p>Ultimul pas constă în aplicarea legii lui Ohm (R = E / I) pentru determinarea rezistenţei rezistorului de multiplicare.</p>

<div class="clear"></div>

#+CAPTION: voltmetru
[[../poze/00152.png]]

<p>Indiferent de metoda folosită, răspunsul final este acelaşi (9.5 kΩ). Putem aplica ambele metode, pentru a ne asigura că rezultatul final este corect.</p>

<p>Cu o cădere de tensiune de exact 10 V între terminalii aparatului de măsură, curentul prin bobina internă va fi de exact 1 mA, acest curent fiind limitat de rezistorul de multiplicare şi de rezistenţa internă a bobinei. Căderea de tensiune pe bobină va fi de exact 0,5 V, iar deplasarea acului indicator va fi maximă (spre dreapta). Dacă am modificat şi scala astfel încât valorile acesteia să fie cuprinse între 0 şi 10 V (în loc de 0 şi 1 mA), orice persoană care va citi indicaţia aparatului o va interpreta ca fiind 10 V. Nu este necesar ca utilizatorii voltmetrului să cunoscă faptul că aparatul foloseşte doar o fracţiune din tensiunea totală de măsurat (10 V) a sursei externe. Tot ceea ce contează este ca circuitul să funcţioneze corect pentru a putea indica tensiunea totală aplicată.</p>

<p>Acesta este într-adevăr şi modul de realizare şi utilizare al aparatelor de măsură: dispozitivul de detectare al mărimii de măsurat este construit astfel încât să fie necesară doar o cantitate foarte mică de tensiune şi de curent pentru funcţionarea acestuia, pentru o sensibilitatea cât mai ridicată. Această configuraţie este apoi conectată la un circuit divizor realizat cu rezistori de prezizie, pentru a putea indica o tensiune sau un curent mult mai mari.</p>

#+CAPTION: volmetru folosind un comutator multi-polar si o serie de rezistori de multiplicare
[[../poze/00153.png]]

<p>În general, este foarte utilă prezenţa mai multor astfel de circuite divizoare, pentru a putea măsură o plajă destul de largă de valori folosind acelaşi mecanism de bază pentru detectarea semnalului. Acest lucru se poate realiza printr-un comutator multi-polar şi câţiva rezistori de multiplicare, fiecare pentru o anumită bandă de tensiuni, conform figurii alăturate.</p>

<div class="clear"></div>

<p>Comutatorul cu cinci poziţii intră în contact doar cu cât un rezistor deodată. În poziţia de jos, acesta nu face contact cu niciun rezistor, fiind de fapt în poziţia „oprit”. Fiecare rezistor realizează o deplasare maximă diferită a voltmetrului, şi toate se bazează pe aceleaşi caracteristici principale (1 mA, 500 Ω).</p>

#+CAPTION: volmetru folosind un comutator multi-polar si o serie de rezistori de multiplicare
[[../poze/00154.png]]

<p>Cu o astfel de variantă, valoarea fiecărui rezistor este determinată folosind aceiaşi metodă utilizată mai sus, cunoscând tensiunea totală necesară în fiecare caz. Pentru un volmetru cu scala tensiunilro de 1 V, 10 V, 100 V şi 1000 V, rezistenţele de multiplicare sunt conform figurii alăturate.</p>

<div class="clear"></div>

#+CAPTION: volmetru folosind un comutator multi-polar si o serie de rezistori de multiplicare
[[../poze/00155.png]]

<p>Putem observa că valorile rezistorilor de multiplicare sunt puţin ciudate. Este puţin probabil să găsim un rezistor de precizie cu o valoare de 999,5 kΩ, astfel încât suntem nevoiţi să folosim o altă configuraţie.</p>

<div class="clear"></div>

<p>Cu fiecare pas, tot mai mulţi rezistori sunt conectaţi în circuit prin intermediul comutatorului (selectorului), astfel că rezistenţa totală este va fi egală cu suma rezistenţelor individuale. De exemplu, atunci când comutatorul se află în poziţia „1000 V”, ştim din exemplu precedent că avem nevoie de o rezistenţă de 999,5 kΩ. Folosind configuraţia anterioară, aceasta este exact valoarea obţinută:</p>

<div class="formula">
R<sub>total</sub> = R<sub>1</sub> + R<sub>2</sub> + R<sub>3</sub> + R<sub>4</sub>
R<sub>total</sub> = 900 kΩ + 90 kΩ + 9 kΩ + 500 kΩ
R<sub>total</sub> = 999,5 kΩ
</div>

<p>Avantajul constă, desigur, în faptul că rezistorii de 900 kΩ, 90 kΩ şi 9 kΩ sunt mult mai uşor de procurat decât cei precedenţi (999,5 kΩ, 99,5 kΩ şi 9,5 kΩ). Din punct de vedere funcţional, nu există nicio diferenţa între cele două configuraţii prezentate.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Realizarea practică a voltmetrelor constă în adăugarea rezistenţelor de multiplicare pentru divizarea tensiunii totale de măsurat</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
