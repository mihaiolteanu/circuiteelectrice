<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Transformatorul trifazat</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>6. Transformatorul trifazat</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Din moment ce sistemele trifazate sunt folosite atât de des în sistemele de distribuţie a energiei electrice, este necesară folosirea transformatoarelor trifazate pentru ridicarea sau coborârea tensiunilor. Este adevărat că se pot folosi individual transformatoare monofazate, câte unul pe fiecare fază şi în diverse combinaţii, pentru realizarea acestei sarcini. Dar, transformatoarele trifazate sunt construite special pentru acest scop, folosind mult mai puţin material, volum şi greutate decât utilizarea modulară a transformatoarelor monofazate.</p>

<p>Un transformator trifazat este compus din trei seturi de înfăşurări primare şi secundare, înfăşurate pe acelaşi miez feromagnetic şi având fiecare propria sa latură.</p>

#+CAPTION: transformator trifazat
[[../poze/02203.png]]

<p>Aceste înfăşurări primare şi secundare pot fi conectate între ele în configuraţii Δ sau Y, asfel:</p>

<b><pre>
Primar - Secondar
  Y    -    Y
  Y    -    Δ
  Δ    -    Y
  Δ    -    Δ
</pre></b>

<p>Motivul alegerii configuraţiei Δ sau Y pentru conexiunile înfăşurărilor transformatorului sunt aceleaşi ca şi în cazul aplicaţiilor trifazate: conexiunile Y oferă posibilitatea tensiunilor multiple, iar conexiunile Δ oferă un nivel mai ridicat de fiabilitate.</p>

<p>Cel mai important aspect al conectării celor trei seturi de înfăşurări o reprezintă faza înfăşurărilor (punctele sunt folosite pentru desemnarea „polarităţii” înfăşurărilor). Putem revedea relaţiile dintre fazele înfăşurărilor Y şi Δ, centrul înfăşurării trebuie să fie ori „-” ori „+”, pentru toatele cele trei înfăsurări, iar polarităţile înfăşurării Δ trebuie să complementare, „+” şi „-”:</p>

#+CAPTION: fazele corecte ale înfăşurărilor stea şi triunghi
[[../poze/02204.png]]

<p>Realizarea corectă a fazelor, atunci când înfăşurările nu sunt prezentate sub forma configuraţiilor stea sau triunghi, poate să fie destul de dificilă. Să ilustrăm acest lucru, pornind cu figura de mai jos:, fiecare transformator monofazat reprezentând o înfăşurare primară plus cea secundară, întreg ansamblul fiind echivalent din punct de vedere funcţional unui transformator trifazat:</p>

#+CAPTION: intrările A1, B1, C1 pot fi conectate fie în configuraţie stea, fie triunghi; acelaşi lucru este valabil şi pentru intrările A2, B2, C2
[[../poze/02205.png]]

<p>Cele trei transformatoare monofazate sunt vor fi conectate împreună pentru transformarea puterii dintr-un sistem trifazat în altul. Să considerăm conexiunea Y-Y:</p>

#+CAPTION: conectarea unui transformator trifazat în configuraţie triunghi-triunghi - Y-Y; exemplificare cu ajutorul a trei transformatoare monofazate echivalente
[[../poze/02206.png]]

<p>În cazul de mai sus, Y-Y, toate înfăşurările marcate cu punct sunt conectate la fazele lor respective, A, B, C, iar înfăşurările fără punct sunt conectate împreună (la firul neutru, N) pentru a forma centrul fiecărei configuraţii stea. Dacă realizăm ambele înfăşurări în configuraţie Y, putem folosi conductori de nul (N<sub>1</sub> şi N<sub>2</sub>) în fiecare sistem trifazat.</p>

<p>Următoarea configuraţie, stea-triunghi (Y-Δ), arată asfel:</p>

#+CAPTION: conectarea unui transformator trifazat în configuraţie stea-triunghi - Y-Δ; exemplificare cu ajutorul a trei transformatoare monofazate echivalente
[[../poze/02207.png]]

<p>În acest caz, înfăşurările secundare sunt conectate în lanţ, înfăsurarea conectată fiind conectată la următoarea înfăşurare ne-punctate, formând o buclă Δ.</p>

<p>Configuraţia triunghi-stea (Δ-Y):</p>

#+CAPTION: conectarea unui transformator trifazat în configuraţie triunghi-stea - Δ-Y; exemplificare cu ajutorul a trei transformatoare monofazate echivalente
[[../poze/02208.png]]

<p>O asemenea configuraţie permite folosirea tensiunilor multiple, linie-linie, sau linie-neutru, în sistemul de putere secundar, folosind un sistem primar fără neutru.</p>

<p>Configuraţia triunghi-triunghi (Δ-Δ):</p>

#+CAPTION: conectarea unui transformator trifazat în configuraţie triunghi-triunghi - Δ-Δ; exemplificare cu ajutorul a trei transformatoare monofazate echivalente
[[../poze/02209.png]]

<p>Atunci când nu avem nevoie de un conductor neutru în sistemul secundar, cele mai folosite configuraţii sunt cele triunghi-triunghi, datorită fiabilităţii lor crescute.</p>

<p>Considerând faptul că o configuraţie triunghi poate funcţiona suficient de bine folosind doar două înfăşurări, unele scheme de transformare trifazate utilizează doar două transformatoare, reprezentând o configuraţie triunghi-triunghi, dar fără una dintre înfăşurările primare şi secundare:</p>

#+CAPTION: conectarea unui transformator trifazat în configuraţie triunghi-triunghi deschisă- Δ-Δ; exemplificare cu ajutorul a două transformatoare monofazate echivalente
[[../poze/02210.png]]

<p>Această configuraţie mai este cunoscută şi sub numele de „V” sau „triunghi deschisă”. Fiecare dintre cele două transformatoare va trebui să fie însă supradimensionat, pentru a putea face faţă aceleiaşi puteri precum o configuraţie standard cu trei transformatoare în configuraţie triunghi, dar de multe ori, avantajele de cost, mărime şi greutate, fac ca această configuraţie să merite realizată. Totuşi, în caz de avarie, sistemul nu poate funcţiona la fel ca un sistem triunghi-triunghi în aceeiaşi situaţie. Dacă unul din cele două transformatoare se defectează, tensiunile şi curenţii de sarcină vor avea cu siguranţă de suferit.</p>



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
