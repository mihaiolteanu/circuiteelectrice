<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Metoda nodului de tensiune</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Metoda nodului de tensiune</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Metoda nodului de tensiune pentru analiza circuitelor determină tensiunea nodurilor în funcţie de ecuaţiile legii lui Kirchhoff pentru curent. Această analiză arată puţin ciudat pentru că necesită înlocuirea surselor de tensiune cu surse echivalente de curent. De asemenea, valorile rezistorilor în ohmi sunt înlocuite prin conductanţele ecivalente în siemens, G = 1/R. Unitatea de măsură pentru conductanţă este siemens-ul, S=Ω<sup>-1</sup></p>

<h3>Exemplul 1</h3>

<p>Începem cu un circuit ce conţine surse de tensiune convenţionale. Un punct comun E<sub>0</sub> este ales ca şi punct de referinţă. Tensiunile pentru celelalte noduri, E<sub>1</sub> şi E<sub>2</sub> sunt calculate în funcţie de acest punct.</p>

#+CAPTION: circuit electric
[[../poze/00497.png]]

<p>O sursă de tensiune în serie cu o rezistenţă trebuie să fie înlocuită de o sursă de curent echivalentă în paralel cu o rezistenţă. Vom scrie apoi ecuaţiile LKC pentru fiecare nod. Partea dreaptă a ecuaţiei reprezintă valoarea sursei de curent ce alimentează nodul respectiv. Circuitul modificat arată asfel:</p>

#+CAPTION: circuit electric
[[../poze/00498.png]]

<p>Înlocuim rezistenţa rezistorilor în ohmi cu conductanţa acestora în siemens:</p>

<pre>
&nbsp;          I<sub>1</sub> = E<sub>1</sub>/R<sub>1</sub> = 10/2 = 5 A
&nbsp;          I<sub>2</sub> = E<sub>2</sub>/R<sub>5</sub> = 4/1  = 4 A

&nbsp;          G<sub>1</sub> = 1/R<sub>1</sub> = 1/2 Ω   = 0.5 S
&nbsp;          G<sub>2</sub> = 1/R<sub>2</sub> = 1/4 Ω   = 0.25 S
&nbsp;          G<sub>3</sub> = 1/R<sub>3</sub> = 1/2.5 Ω = 0.4 S

&nbsp;          G<sub>4</sub> = 1/R<sub>4</sub> = 1/5 Ω   = 0.2 S
&nbsp;          G<sub>5</sub> = 1/R<sub>5</sub> = 1/1 Ω   = 1.0 S
</pre>

#+CAPTION: circuit electric
[[../poze/00499.png]]

<p>Conductanţele paralele (rezistorii) pot fi combinaţi prin adunarea conductanţelor. Deşi nu vom redesena circuitul, putem deja aplica metoda nodului de tensiune:</p>

<pre>
&nbsp;          G<sub>A</sub> = G<sub>1</sub> + G<sub>2</sub> = 0.5 S + 0.25 S = 0.75 S
&nbsp;          G<sub>B</sub> = G<sub>4</sub> + G<sub>5</sub> = 0.2 S + 1 S = 1.2 S 
</pre>

<p>Pentru dezvoltarea unei metode generale, vom scrie ecuaţiile LKC în funcţie de tensiunile necunoscute ale nodurilor 1 şi 2, V<sub>1</sub> şi V<sub>2</sub> de această dată.</p>

<pre>
&nbsp;          G<sub>A</sub>E<sub>1</sub> + G<sub>3</sub>(E<sub>1</sub> - E<sub>2</sub>) = I<sub>1</sub>             (1)

&nbsp;          G<sub>B</sub>E<sub>2</sub> - G<sub>3</sub>(E<sub>1</sub> - E<sub>2</sub>) = I<sub>2</sub>             (2)



&nbsp;          (G<sub>A</sub> + G<sub>3</sub> )E<sub>1</sub>         -G<sub>3</sub>E<sub>2</sub> = I<sub>1</sub>     (1)

&nbsp;                 -G<sub>3</sub>E<sub>1</sub> + (G<sub>B</sub> + G<sub>3</sub>)E<sub>2</sub> = I<sub>2</sub>     (2)
</pre>

<p>Suma conductanţelor conectate la primul nod este este coeficientul pozitiv al primei tensiuni din ecuaţia (1). Suma conductanţelor conectate la cel de al doilea nod este coeficientul pozitiv al celei de a doua tensiuni din ecuaţia (2). Ceilalţi coeficienţi sunt negativi, reprezentând conductanţele dintre noduri. Pentru ambele ecuaţii, partea dreaptă a ecuaţiei este egală cu sursa de curent respectivă conectată la nod. Această metodă ne permite să scriem rapid ecuaţiile prin inspecţie şi duce la următoarele reguli pentru aplicarea metodei nodului de tensiune.</p>

<ol>
	<li>Înnlcuirea surselor de tensiune în serie cu un rezistor cu o sursă echivalentă de curent şi un rezistor în paralel</li>
	<li>Schimbarea valorilor rezistorilor în conductanţe</li>
	<li>Selectarea unui nod de referinţă (E<sub>0</sub>)</li>
	<li>Desemnarea unor tensiuni necunoscute pentru nodurile rămase, (E<sub>1</sub>)(E<sub>2</sub>) ... (E<sub>N</sub>)</li>
	<li>Scrierea unei ecuaţii LKC pentru fiecare nod, 1, 2, ... N. Coeficientul pozitiv a primei tensiuni din prima ecuaţie este suma conductanţelor conectate la primul nod. Coeficientul pentru a doua tensiune din a doua ecuaţie este suma conductanţelor conectate la acel nod. Acelaşi lucru este valabil şi pentru a treia tensiune în ecuaţia a treia şi pentru celelalte ecuaţii. Aceşti coeficienţi se găsesc pe o diagonală.</li>
	<li>Toţi ceilalţi coeficienţi ai ecuaţiei sunt negativi, reprezentând conductanţele dintre noduri. În prima ecuaţie, coeficientul al doile reprezintă conductanţa dintre nodul 1 şi nodul 2, al treilea coeficient reprezintă conductanţă dintre nodul 1 şi nodul 3. Acelaşi lucru este valabil şi pentru celelalte ecuaţii</li>
	<li>Partea din dreapta a ecuaţiilor reprezintă sursa de curent conectată la nodurile respective</li>
	<li>Rezolvarea sistemului de ecuaţii şi aflarea tensiunilor nodurilor necunoscute</li>
</ol>

<p>Pentru figura de mai sus, ecuaţiile arată asfel:</p>

<pre>
&nbsp;          (0.5+0.25+0.4)E<sub>1</sub> -(0.4)E<sub>2</sub>=  5 
&nbsp;         -(0.4)E<sub>1</sub> +(0.4+0.2+1.0)E<sub>2</sub> = -4
&nbsp;          (1.15)E<sub>1</sub> -(0.4)E<sub>2</sub>=  5 

&nbsp;         -(0.4)E<sub>1</sub> +(1.6)E<sub>2  </sub> = -4

&nbsp;          E<sub>1</sub> =  3.8095
&nbsp;          E<sub>2</sub> = -1.5476
</pre>

<h3>Exemplul 2</h3>

<p>Circuitul de mai jos are trei noduri. Conductanţele nu apar pe desen, dar G<sub>1</sub>=1/R<sub>1</sub>, etc.</p>

#+CAPTION: circuit electric
[[../poze/00500.png]]

<p>Există trei noduri pentru care putem scrie ecuaţii. Coeficienţii sunt pozitivi pentru E<sub>1</sub> (ecuaţia 1), E<sub>2</sub> (ecuaţia 2) şi E<sub>3</sub> (ecuaţia 3). Acestea sunt sumele tuturor conductanţelor conectate la nodurile respective. Toţi ceilalţi coeficienţi sunt negativi, reprezentând conductanţa între noduri. Partea din dreapta a ecuaţiei reprezintă sursa de curent, 0.136092 amperi, singura sursă pentru nodul 1. Celelalte ecuaţii au zero în partea dreapta datorită lipsei unei surse de tensiune.</p>

<pre>
&nbsp;          (G<sub>1</sub> + G<sub>2</sub>)E<sub>1</sub>              -G<sub>1</sub>E<sub>2</sub>             -G<sub>2</sub>E<sub>3</sub>      = 0.136092
&nbsp;                -G<sub>1</sub>E<sub>1</sub>  +(G<sub>1</sub> + G<sub>3</sub> + G<sub>4</sub>)E<sub>2</sub>             -G<sub>3</sub>E<sub>3</sub>      = 0
&nbsp;                -G<sub>2</sub>E<sub>1</sub>              -G<sub>3</sub>E<sub>2</sub> +(G<sub>2</sub> + G<sub>3</sub> + G<sub>5</sub>)E<sub>3</sub>      = 0
</pre>

<p>Se poate observa că diagonala matricii formate are coeficienţi pozitivi. Toţi ceilalţi coeficienţi sunt negativi.</p>

<p>Soluţia este E<sub>1</sub> = 24.000 V,  E<sub>2</sub> = 17.655 V, E<sub>3</sub> = 19.310 V.</p>

<p class="sumar">Sumar:</p>
<ol>
<b>Paşii pentru aplicarea metodei ramurii de curent</b>
	<li>Înlocuirea surselor de tensiune conectate în serie cu un rezistor cu o sursă de curent conectată în paralel cu un rezistor. Cele două reprezentări sunt echivalente</li>
	<li>Schimbarea valorilor rezistorilor cu conductanţe</li>
	<li>Selectarea unui nod de referinţă (E<sub>0</sub>)</li>
	<li>Atribuirea de tensiuni necunoscute (E<sub>1</sub>)(E<sub>2</sub>) ... (E<sub>n</sub>) nodurilor rămase</li>
	<li>Scrierea legii lui Kirchhoff pentru curent pentru fiecare din nodurile 1, 2, ... N. Coeficientul pozitiv al primei tensiuni din prima ecuaţie reprezintă suma conductanţelor legate la acel nod. Coeficientul pozitiv al celei de a doua tensiuni, din ecuaţia a doua, este suma conductaţelor conectate la acel nod. Acelaşi lucru este valabil şi pentru coeficientul celei de a treia tensiuni din ecuaţia a treia, precum şi pentru toate celelalte ecuaţii. Toţi coeficienţii se regăsesc pe diagonala principală</li>
	<li>Toţi ceilalţi coeficienţi ale celorlalte ecuaţii sunt negativi şi reprezintă conductanţele dintre noduri. În prima ecuaţie, al doilea coeficient reprezintă conductanţa dintre nodul 1 şi nodul 2; coeficientul al treilea reprezintă conductanţa dintre nodul 1 şi nodul 3. Acelaşi lucru este valabil pentru toţi ceilalţi coeficienţi ai tuturor ecuaţiilor</li>
	<li>Termenii din partea dreapta a ecuyaţiei reprezintă sursele de curent conectate la nodurile respective</li>
	<li>Se rezolvă sistemul de ecuaţii pentru aflarea tensiunilor de nod necunoscute</li>
</ol>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
