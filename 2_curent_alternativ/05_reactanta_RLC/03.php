<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuite RLC paralel</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Circuite RLC paralel</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
<div id="contents">
<p>Putem folosi aceleaşi componente de la circuitul serie, dar conectate în paralel de această dată:</p>

<p><img src="../poze/02081.png" alt="circuit electric RLC paralel"/></p>

<p>Faptul că aceste componente sunt conectate în paralel şi nu în serie, nu are absolut niciun efect asupra impedanţelor individuale. Atâta timp cât frecvenţa sursei de tensiune este aceeiaşi, reactanţele inductive şi capacitive nu se vor modifica deloc:</p>

<p><img src="../poze/02082.png" alt="circuit electric RLC paralel - impedanţele componentelor"/></p>

<p>După ce am exprimat valorile tuturor componentelor ca şi impedanţe (Z), putem începe analiza circuitului prin completarea tabelului, folosind regulile circuitelor serie de data aceasta:</p>

<p><img src="../poze/12058.png" alt="tabel"/></p>

<p>Ştiind că într-un circuit paralel, căderea de tensiune este aceeiaşi pe toate componentele, putem trece valoarea tensiunii totale în fiecare coloană:</p>

<p><img src="../poze/12066.png" alt="tabel"/></p>

<p>Acum putem aplica legea lui Ohm (I=E/Z) vertical, pe fiecare coloană, pentru determinarea curentului prin fiecare component:</p>

<p><img src="../poze/12067.png" alt="tabel"/></p>

<p>Există două strategii pentru calcularea curentului şi a impedanţei totale. Prima presupune calcularea impedanţei totale din impedanţele individuale conectate în paralel folosind formula echivalentă (Z<sub>Total</sub> = 1/(1/Z<sub>R</sub> + 1/Z<sub>L</sub> + 1/Z<sub>C</sub>), iar curentul total ca raport dintre tensiunea sursei de alimentare şi impedanţa totală (I=E/Z). Totuşi, rezolvarea ecuaţiei presupune un calcul dificil cu numere complexe. A doua metodă de calcul presupune aflarea curentului total ca sumă a curenţilor de ramură, iar apoi, folosind legea lui Ohm, putem determina impedanţa totală ca raport dintre tensiunea sursei de alimentare şi curentul total (Z=E/I). Rezultatul final trebuie să fie acelaşi în ambele cazuri.</p>

<p><img src="../poze/12068.png" alt="tabel"/></p>

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