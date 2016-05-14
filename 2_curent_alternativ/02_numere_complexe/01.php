<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Introducere</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Introducere</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Dacă dorim de exemplu să descriem distanţa dintre două oraşe, putem folosi o singură cifră, în kilometri, sau orice altă unitate de măsură pentru distanţa liniară. Totuşi, dacă vrem să descriem şi modul de deplasare dintr-un oraş în altul, avem nevoie de mai multă informaţie pe lângă distanţă propriu-zisă dintre oraşe; trebuie să indicăm şi <i>direcţia</i> de mers în acest caz.</p>

<p>Tipul de informaţie ce exprimă o singură dimensiune, precum distanţa liniară, poartă denumirea de <i>scalar</i> în matematică. Numerele scalare sunt cele folosite pentru desemnarea valori tensiunii unei bateri, de exemplu, a rezistenţei sau a curentului, dacă vorbim de curent continuu.</p>

<p>Totuşi, atunci când începem să analizăm circuitele electrice în curent alternativ, descoperim că valorile tensiunii, curentului şi chiar a rezistenţei (denumită <i>impedanţă</i> în curent alternativ) nu sunt cantităţi uni-dimensionale precum în cazul circuitelor de curent continuu, ci, aceste cantităţi, fiind dinamice (alternează în direcţie şi amplitudine), posedă alte dimensiuni ce trebuiesc luate în considerare. Frecvenţă şi diferenţă de fază sunt două dintre aceste dimensiuni adiţionale.</p>

<p>Pentru a putea analiza cu succes circuitele de curent alternativ, trebuie să abandonăm numerele scalare şi să luăm în considerare cele complexe, capabile să reprezinte atât amplitudine cât şi faze unei unde în acelaşi timp.</p>

<p>Numerele complexe sunt mai uşor de înţeles dacă sunt trecute pe un grafic. Dacă desenăm o linie cu o anumită lungime (amplitudine) şi unghi (direcţie), obţinem o reprezentare grafică a unui număr complex, reprezentare cunoscută în fizica sub numele de <i>vector</i>:</p>

#+CAPTION: reprezentarea grafică a numerelor complexe sub formă de vectori; diferite lungimi şi unghiuri
[[../poze/02025.png]]

<p>Precum în cazul distenţelor şi direcţiilor de pe o hartă, trebuie să avem un sistem de referinţă pentru ca toate aceste valori să aibă un sens. În acest caz, dreapta înseamnă 0<sup>o</sup>, iar unghiurile sunt măsurate în direcţie pozitive în sensul invers acelor de ceasornic:</p>

#+CAPTION: sistemul de referinţă al vectorilor
[[../poze/02026.png]]

<p class="sumar">Sumar:</p>
<ul>
	<li>Un număr scalar este un tip de obiect matematic uni-dimensional folosit pentru măsurarea temparaturii, distanţei, greutăţii, etc.</li>
	<li>Un număr complex este un tip de obiect matematic bi-dimensional (două dimensiuni) folosit pentru reprezentarea valorii cât şi a direcţiei</li>
	<li>Un vector, este reprezentarea grafică a unui număr complex, posedând direcţie şi sens. Câteodată, în aplicaţiile electrice, mai este folosit şi termenul de <i>fazor</i>, acolo unde unghiul vectorului reprezintă diferenţa de fază între formele de undă</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
