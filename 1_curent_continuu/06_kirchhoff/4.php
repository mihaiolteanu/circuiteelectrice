<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Legea lui Kirchhoff pentru curent</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Legea lui Kirchhoff pentru curent</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Să considerăm următorul circuit paralel:</p>

<img src="../poze/00120.png" alt="circuit paralel"/>

<p>Calculând toate valorile tensiunilor şi curenţilor din acest circuit, obţinem:</p>

<img src="../poze/10116.png" alt="tabel valori tensiune/curent/rezistenţă"/>

<p>În acest moment cunoaştem valorile curenţilor din fiecare ramură precum şi valoarea totală a curentului din circuit. Cunoaştem faptul că valoarea totală a curentului dintr-un circuit paralel trebuie să fie egală cu suma curenţilor de pe fiecare ramură, dar mai putem observa un principiu foarte important în acest circuit. Să observăm aşadar ce se întâmplă la fiecare nod (locul de întâlnire a cel puţin trei ramuri) din acest circuit:</p>

<img src="../poze/00121.png" alt="circuit paralel"/>

<p>Pe ramura negativă de jos (8-7-6-5), la fiecare nod curentul principal se divide pe fiecare ramură succesivă spre rezistori. Pe ramura pozitivă de sus (1-2-3-4) curentul de pe fiecare ramură se „alătură” curentului principal. Dacă ne uităm mai atent la un anumit nod, precum 3, observă că valoarea curentului ce intră într-un nod este egală cu valoarea curentului ce părăseşte acel nod:</p>

<img src="../poze/00122.png" alt="circuit paralel"/>

<p>Avem doi curenţi care intră în nodul 3, din partea dreaptă şi de jos. Din partea stângă avem un singur curent care iese din nod, egal ca şi valoare cu suma celor doi curenţi care intră. Acest lucru este valabil pentru oricare nod, indiferent de numărul ieşirilor/intrărilor. Matematic, putem exprima această observaţie asfel:</p>

<p>I<sub>intrare</sub> = I<sub>ieşire</sub></p>

<p>O altă formă uşor diferită dar echivaletă din punct de vedere matematic este următoarea:</p>

<p>I<sub>intrare</sub> + (-I<sub>ieşire</sub>) = 0</p>

<p>Pe scurt, legea lui Kirchhoff pentru curent sună asfel:</p>

<p><b>„Suma algebrică a tuturor curenţilor ce intră şi ies dintr-un nod trebuie să fie egală cu zero”</b></p>

<p>Adică, dacă notăm polaritatea fiecărui curent, cu „+” dacă intră într-un nod şi cu „-” dacă iese, suma lor va da tot timpul zero.</p>

<p>În cazul nodului 3 de mai sus, putem determina valoarea curentului ce iese din nod prin partea stângă folosind legea lui Kirchhoff pentru curent asfel:</p>

<img src="../poze/10125.png" alt="formulă"/>

<p>Semnul negativ (-) pentru valoarea de 5 mA ne spune faptul că, curentul <i>iese</i> din acest nod, în contradicţie cu cei doi curenţi de 2 mA şi 3 mA ce sunt cu semnul pozitiv (+), şi prin urmare <i>intră</i> în nod. Cele două notaţii („+” şi „-”) pentru intrarea, respectiv ieşirea curentului din nod sunt pur arbitrare, atâta timp cât reprezintă semne diferite pentru direcţii diferite şi prin urmare putem aplica legeal lui Kirchhoff pentru curenţi.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Legea lui Kirchhoff pentru curent: <b>„Suma algebrică a tuturor curenţilor ce intră şi ies dintr-un nod trebuie să fie egală cu zero”</b></li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>