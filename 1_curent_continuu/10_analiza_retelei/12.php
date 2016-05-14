<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Transformarea triunghi-stea şi stea-triunghi</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>12. Transformarea triunghi-stea şi stea-triunghi</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>De multe ori componentele sunt conectate într-o reţea cu trei terminale, asfel: conexiunea triunghi (Δ) cunoscută şi sub numele de delta sau Pi (π) şi configuraţia stea (Y) cunoscută şi sub numele de T. Ne putem da seama de unde vine numele acestora urmărind desenele de mai jos:</p>

#+CAPTION: configuraţii stea, triunghi, Pi şi T
[[../poze/00250.png]]

<p>Este posibilă calcularea reală a valorilor rezistorilor necesari pentru formarea unui tip de configuraţie (Δ sau Y) bazându-ne pe valorile rezistorilor celeilalte configuraţii, prin simpla analiză a conexiunilor terminalilor. Pe scurt, dacă avem două reţele de rezistori, una Δ şi una Y, în cadrul cărora rezistorii nu sunt vizibil dar avem la dispoziţie trei terminali (A, B şi C), rezistorii pot fi proiectaţi pentru ambele reţele asfel încât nu am putea face diferenţa dintre cele două reţele din punct de vedere electric. Cu alte cuvinte, configuraţiile echivalente Δ şi Y se comportă identic.</p>

<p>Există câteva ecuaţii pentru transformare unei reţele în celelate:</p>

#+CAPTION: transformarea triunghi-stea şi stea-triunghi, formule
[[../poze/10207.png]]

<p>Acest tip de configuraţii sunt frecvent întâlnite în sistemele de putere trifazate de curent alternativ, dar acestea sunt de obicei reţele echilibrate (toţi rezistorii au aceeiaşi valoare) şi prin urmare calculele nu sunt atât de complexe.</p>

<h3>Exemplu</h3>

<p>O altă aplicaţie a transformării Δ-Y se găseşte în cadrul circuitelor punte dezechilibrate, precum cel de jos:</p>

#+CAPTION: punte electrică dezechilibrată
[[../poze/00251.png]]

<p>Rezolvarea acestui circuit folosind analiza curentului de ramură sau buclei de curent este destul de laborioasă, iar fiindcă există doar o singură sursă de putere, nici teoremele lui Millman sau superpoziţiei nu ne sunt de prea mare ajutor în acest caz. Putem folosi teorema lui Thevenin sau Norton considerând R<sub>3</sub> rezistorul de sarcină, dar le ce ne-ar ajuta?</p>

<p>În schimb, putem considera că rezistorii R<sub>1</sub>, R<sub>2</sub> şi R<sub>3</sub> sunt conectaţi în Δ (respectiv R<sub>ab</sub>, R<sub>ac</sub> şi R<sub>bc</sub>); generăm apoi o reţea Y echivalentă pentru înlocuirea lor şi transformăm prin acest pas puntea într-un circuit combinat (mai simplu) serie/paralel.</p>

#+CAPTION: punte electrică dezechilibrată alegerea configuraţiei Δ de transformat în Y
[[../poze/00252.png]]

<p>După aplicarea transformării:</p>

#+CAPTION: punte electrică dezechilibrată Δ transformat în Y
[[../poze/00253.png]]

<p>După efectuarea corectă a calculelor, căderile de tensiune între punctele A, B şi C vor fi aceleaşi în ambele circuite</p>

#+CAPTION: formule
[[../poze/10208.png]]
#+CAPTION: circuit electric
[[../poze/00254.png]]

<p>Desigur, valorile rezistorilor R<sub>4</sub> şi R<sub>5</sub> rămân aceleşi, 18 Ω respectiv 12 Ω. Acum putem analiza circuitul precum o combinaţie serie/paralel, obţinând următoarele rezultate:</p>

#+CAPTION: tabel
[[../poze/10209.png]]

<p>Folosim valorile căderilor de tensiune din tabelul de mai sus pentru determinarea căderilor de tensiune între punctele A, B şi C, fiind atenţi la adunarea sau scăderea lor (precum este cazul tensiunii între punctele B şi C):</p>

#+CAPTION: circuit electric
[[../poze/00255.png]]
#+CAPTION: formule
[[../poze/10210.png]]

<p>Cu valorile acestor căderi de tensiune aflate, putem trece la circuitul original unde aceste căderi de tensiune sunt aceleaşi (între aceleaşi puncte).</p>

#+CAPTION: circuit electric
[[../poze/00256.png]]

<p>Desigur, căderile de tensiune pe rezistorii R<sub>4</sub> şi R<sub>5</sub> sunt aceleaşi ca în cazul circuitului transformat (Y).</p>

<p>Acum putem determina curenţii prin rezistori folosind valorile acestor tensiuni şi aplicând repetat legea lui Ohm (I=E/R):</p>

#+CAPTION: formule
[[../poze/10211.png]]

<p class="sumar">Sumar:</p>
<ul>
	<li>Configuraţiile Δ (triunghi) mai sunt cunoscute şi sub numele de π (Pi)</li>
	<li>Configuraţiile Y (stea) mai sunt cunoscute şi sub numele de T</li>
	<li>Atât configuraţiile Δ cât şi Y pot fi transformate (transfigurate) în complementele lor echivalente cu ajutorul formulelor corecte ale rezistenţelor. Prin „echivalent„, se înţelege faptul că cele două reţele sunt electric identice atunci când sunt măsurate de la cele trei terminale (A, B şi C)</li>
	<li>O punte poate fi simplificată la un circuit serie/paralel prin transformarea unei jumătăţi din circuit din Δ în Y. Valorile căderilor de tensiune din circuitul Y sunt aceleaşi şi în circuitul Δ între punctele A, B şi C</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
