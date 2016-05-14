<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Full-Adder</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Full-Adder</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>Circuitul half-adder (semi-sumator) este extrem de util până în momentul în care dorim adăugarea unor valori ce nu pot fi reprezentate cu un singur bit. Cea mai lentă metodă de realizare a sumatoarelor pe doi biţi constă în realizarea unui tabel de adevăr (şi reducerea acestuia). Dacă avem nevoie de un sumator pe trei biţi, patru biţi, etc., repetăm acest proces. Circuitele vor fi rapide, dar timpul de realizare al lor va fi destul de lung.</p>

<p>Să ne uităm puţin la o sumă dintre două numere pe doi biţi. Putem să ne facem astfel o idee a circuitului ce dorim să-l implementăm:</p>

<pre>
&nbsp;          11
&nbsp;           11
&nbsp;           11
&nbsp;          ---
&nbsp;          110
</pre>

<p>Putem observa numărul de intrări necesar coloanei din mijloc. Circuitul nostru sumator are nevoie de trei intrări: a, b şi bit-ul de depăşire. Putem folosi sumatorul cu două intrări pentru construirea unui sumator cu trei intrări.</p> 

<p>Termenul Σ este destul de uşor de obţinut. Aritmetica ne spune că în cazul în care Σ = a + b + C<sub>in</sub> şi Σ<sub>1</sub> = a + b, atunci Σ = Σ<sub>1</sub> + C<sub>in</sub>:</p>

#+CAPTION: full-adder
[[../poze/04455.png]]

#+CAPTION: diagramă ladder
[[../poze/04476.png]]

<p>La ce ne ajută însă C<sub>1</sub> şi C<sub>2</sub>? Să analizăm rezultatul adunării celor trei intrări:</p>

<pre>C<sub>in</sub> + a + b = ?
0 + 0 + 0 = 0          0 + 0 + 1 =  1          0 + 1 + 0 =  1          0 + 1 + 1 = 10
1 + 0 + 0 = 1          1 + 0 + 1 = 10          1 + 1 + 0 = 10          1 + 1 + 1 = 11
</pre>

<p>Dacă aveţi nelămuriri legate de bitul de rang inferior, puteţi verifica dacă circuitul şi diagrama ladder l-au calculat corect.</p>

<p>Pentru a calcula bitul de rang superior, putem observa că valoarea acestuia este 1 în ambele cazuri în care a + b produce un C<sub>1</sub>. De asemenea, bitul de rang superior este 1 când a + b produce un Σ<sub>1</sub>, iar C<sub>in</sub> este 1. Prin urmare, vom avea un bit de depăşire ori de câte ori avem C<sub>1</sub> sau (Σ<sub>1</sub> şi C<sub>in</sub>). Sumatorul nostru complet (full-adder) cu trei intrări, arată astfel:</p>

#+CAPTION: full-adder
[[../poze/04456.png]]

#+CAPTION: diagramă ladder
[[../poze/04477.png]]

<p>Pentru unele circuite, eliminarea uneia sau mai multor tipuri de porţi poate fi importantă. Putem înlocui poarta SAU finală cu o poartă SAU-exclusiv fără a modifica rezultatele. Putem acum conecta două sumatoare pentru realizarea adunării numerelor pe 2 biţi:</p>

#+CAPTION: full-adder
[[../poze/04457.png]]

#+CAPTION: diagramă ladder
[[../poze/04478.png]]

<p>A<sub>0</sub> este bitul de rang inferior a lui A iar A<sub>1</sub> este bitul de rang superior a lui A. Acelaşi lucru este valabil şi pentru B. Σ<sub>0</sub> este bitul de rang inferior al sumei iar Σ<sub>1</sub> este bitul de rang superior al sumeri. C<sub>out</sub> este bitul de depăşire.</p>

<h2>Sume de numere mai mari de doi biţi</h2>

<p>Un sumator pe doi biţi nu va fi realizat niciodată în acest fel. În schimb, biţi de rang inferior vor trece şi ei printr-un sumator complet (full-adder):</p>

#+CAPTION: full-adder
[[../poze/04458.png]]

#+CAPTION: diagramă ladder
[[../poze/04479.png]]

<p>Există câteva motive pentru această alegere. Unul dintre ele este că în acest caz, permitem circuitului să determine dacă bitul de depăşire de rang inferior este inclus în sumă. Acest lucru permite însumarea unor numere mai mari.</p>

<p>Să considerăm două moduri diferite de analiză a unei sume de numere pe patru biţi:</p>

<pre>
&nbsp;          111            1&lt;-+  11&lt;+-
&nbsp;           0110             |  01  |  10
&nbsp;           1011             |  10  |  11
&nbsp;          -----          -  | — &nbsp; | ---
&nbsp;          10001          1  +-100  +-101
</pre>

<p>Dacă permitem programului însumarea numerelor pe doi biţi, şi reţinem bitul de depăşire, putem folosi acest bit de depăşire în următoarea sumă. În acest fel, programul poate însuma orice număr de biţi, chiar dacă folosim un sumator pe doi biţi.</p>

<h2>Conectarea sumatoarelor între ele</h2>

<p>Aceste sumatoare complete pot fi extinse pe un număr de biţi oricât de mare. Ca şi exemplu, un sumator pe 8 biţi poate fi realizat astfel:</p>

#+CAPTION: conectarea sumatoarelor
[[../poze/04459.png]]

<p>Acest rezultat este identic utilizării sumatoarelor pe doi biţi pentru realizarea unui sumator pe 4 biţi, şi utilizării a două astfel de sumatoare pe 4 biţi pentru realizarea unui sumator pe 8 biţi:</p>

#+CAPTION: conectarea sumatoarelor
[[../poze/04460.png]]

<p>Fiecare „2+” este un sumator pe 2 biţi şi realizat din două sumatoare complete (full-adder). Fiecare „4+” este un sumator pe 4 biţi realizat din două sumatoare pe 2 biţi. Iar rezultatul celor două sumatoare pe 4 biţi este un sumator pe 8 biţi.</p>

<h2>Multiplicarea circuitelor simple sau construirea integrală a dispozitivului</h2>

<p>Există două metode principale de realizare a oricărui circuit logic combinaţional mare: putem folosi circuite simple, multiplicându-le; sau putem proiecta întregul circuit complex ca şi un singur dispozitiv. Utilizând circuite simple pentru realizarea circuitelor complexe, timpul petrecut pentru proiectarea lor scade foarte mult. Dezavantajul este că semnalele necesită un timp mai lung de propagare prin tranzistori. Sumatorul pe 8 biţi de mai sus trebuie să aştepte ca toate semnalele C<sub>xout</sub> să treacă de la A<sub>0</sub> + B<sub>0</sub> spre intrările A<sub>7</sub> + B<sub>7</sub>.</p>

<p>Dacă în schimb, proiectăm sumatorul pe 8 biţi ca şi dispozitiv complet, simplificat la o sumă de produse, atunci fiecare semnal trece printr-o singură poartă logică NU, o poartă logică ŞI şi o poartă logică SAU. Un dispozitiv cu 17 intrări are un tabel de adevăr cu 131.072 de intrări, iar reducerea acestor intrări la o sumă de produse va lua ceva timp.</p>

<p>Atunci când proiectăm circuite pentru sisteme ce au un timp de răspuns maxim pentru obţinerea rezultatului final, putem începe partea de proiectare prin utilizarea circuitelor sdimple. Putem încerca apoi înlocuirea porţiunilor de circuit ce sunt prea „lente”. În acest fel, ne putem concentra pe porţiunile de circuit care contează cel mai mult.</p>


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
