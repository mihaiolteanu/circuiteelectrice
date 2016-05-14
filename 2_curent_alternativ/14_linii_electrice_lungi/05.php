<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Unde staţionare şi rezonanţa</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Unde staţionare şi rezonanţa</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>De câte ori există o diferenţă între impedanţa caracteristică a liniei şi impedanţa sarcinii, vor apărea şi reflexii ale undelor. Dacă unda incidentă este o formă de undă alternativă, aceste reflexii se vor „amesteca” cu semnalele incidente, iar formele de undă produse poartă numele de <i>forme de undă staţionare</i>.</p>

<p>Următoarea ilustraţie exemplifică modul în care o undă incidentă triunghiulară se transformă într-o reflexie „în oglindă” după ce aceasta ajunge la capătul liniei de transmisie (întrerupte). Linia de transmisă este reprezentată în acest caz doar printr-o singură linie, pentru simplitate. Unda incidentă se deplasează de la stânga la dreapta, iar unda reflectată de la dreapta la stânga:</p>

#+CAPTION: reflexia în oglindă a undei triunghiulare incidente într-o linie electrică întreruptă
[[../poze/02372.png]]

<p>Dacă adăugăm cele două forme de undă, descoperim că în lungul liniei se formează de fapt o a treia formă de undă, staţionară:</p>

#+CAPTION: reflexia în oglindă a undei triunghiulare incidente într-o linie electrică întreruptă; formarea formei de undă staţionare ca sumă dintre unda incidentă şi cea reflectată
[[../poze/02372.png]]

<p>Cea de a treia undă, cea staţionară, reprezintă de fapt singura tensiune din lungul liniei, fiind suma undelor incidente şi a undelor reflectate. Amplitudinea sa instantanee oscilează, dar unda nu se propagă în lungimea liniei precum celelalte două forme de undă. De observat că punctele de pe linie, ce marchează amplitudinea zero a undei staţionare (locul în care unda incidentă şi cea reflectată se anulează reciproc), au tot timpul aceeiaşi poziţie:</p>

#+CAPTION: unda staţionară nu se propagă în lungul liniilor de transmisie
[[../poze/02376.png]]

<p>Undele staţionare sunt destul de frecvent întâlnite în lumea înconjurătoare. Să considerăm o coardă, legată la un capăt şi „scuturată” la celălalt:</p>

#+CAPTION: udele staţionare într-o bucată de sfoară legată la un capăt şi mişcată la celălalt
[[../poze/02373.png]]

<p>Atât nodurile (punctele unde vibraţia este foarte mică sau inexistentă), cât şi antinodurilor (punctele unde vibraţia este maximă) rămân fixe de-a lungul corzii. Efectul este şi mai pronunţăt când capătul liber este mişcat la frecvenţa corectă. Corzile fixe prezintă acelaşi comportament. Diferenţa majoră este că aceasta vibrează la frecvenţa sa „corectă” pentru maximizarea efectului undelor staţionare:</p>

#+CAPTION: vibraţia coardei fixe
[[../poze/02374.png]]



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
