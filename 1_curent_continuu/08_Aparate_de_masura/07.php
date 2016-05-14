<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Ohmmetre pentru tensiuni înalte</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>7. Ohmmetre pentru tensiuni înalte</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Limitările ohmmetrelor de joasă tensiune</h2>

<p>Majoritatea ohmmetrelor de tipul celui prezentat în secţiunea precedentă folosesc o baterie cu o tensiune relativ mică, de 9 V sau chiar mai puţin. Acest lucru este suficient pentru măsurarea rezistenţelor cu valori mai mici de câţiva mega-ohmi (MΩ). Pentru a măsura însă rezistenţe extrem de mari, o baterie de 9 V nu este suficientă pentru generarea unui curent necesar acţionării mecanismului electromecanic de deplasare.</p>

<p>De asemena, după cum am discutat deja, rezistenţa nu este tot timpul o valoare stabilă (liniară). Acest lucru este valabil în special în cazul materialelor ne-metalice. Un dielectric format dintr-o mică porţiune de aer, prezintă (aproximativ) următorul grafic curent-tensiune:</p>

<img src="../poze/00048.png" alt="graficul curent-tensiune"/>

<p>Deşi acesta este un exemplu extrem de conducţie non-liniară, aceleaşi proprietăţi izolatoare/conductoare se regăsesc şi în cazul altor substanţe când sunt supuse tensiunilor înalte. Evident, un ohmmetru echipat cu o baterie de tensiune joasă ca şi sursă de putere, nu poată măsura rezistenţa gazului în zona potenţialului de ionizare, sau la punctul de străpungere a unui dielectric. Dacă este necesară măsurarea unor astfel de rezistenţe, avem nevoie de un ohmmetru echipat cu o sursă de tensiune înaltă.</p>

<h2>Modul de proiectare al ohmmetrelor de tensiune înaltă</h2>

<p>Metoda cea mai directă de măsurare a rezistenţelor folosind tensiuni înalte, constă în simpla înlocuire a bateriei, păstrând structura precedentă a ohmmetrului neschimbată:</p>

<img src="../poze/00371.png" alt="ohmmetru de tensiune înaltă"/>

<p>Totuşi, cunoscând faptul că rezistenţa unora dintre materiale tinde să se modifice odată cu variaţia tensiunii aplicate, ar fi avantajos dacă am putea selecta tensiunea de funcţionare a ohmmetrului în funcţie de condiţiile de realizare a măsurătorii:</p>

<img src="../poze/00372.png" alt="ohmmetru de tensiune înaltă (tensiune variabilă)"/>

<p>Din păcate, această situaţie crează o problemă de calibrare a ohmmetrului. Dacă deplasarea acului indicator este maximă cu o anumită valoare a curentului prin aparat, scala aparatului de măsură (în ohmi) se va modifica odată cu variaţia tensiunii sursei de alimentare. Imaginaţi-vă că am conecta o rezistenţa stabilă la bornele ohmmetrului, variind tensiunea sursei de alimentare: pe măsură ce tensiunea creşte, curentul prin aparat va fi din ce în ce mai mare; deplasarea acului indicator va fi la rândul ei din ce în ce mai mare.</p>

<h2>Megohmmetrul</h2>

<p>Avem nevoie prin urmare de un sistem electromecanic ce produce o deplasare stabilă, indiferent de rezistenţa de măsurat şi de tensiunea aplicată. Această nevoie poate fi îndeplinită folosind un sistem electromecanic special, sistem tipic megohmmetrelor:</p>

<img src="../poze/00373.png" alt="megohmmetru"/>

<p>Blocurile rectangulare numerotate din figura de mai sus reprezintă secţiuni transversale al bobinelor. Toate cele trei bobine se deplasează odată cu acul indicator. Nu există niciun arc care să readucă acul la poziţia iniţială. Când aparatul nu este alimentat, acul indicator va „pluti” într-o poziţie aleatoare. Electric, bobinele sunt conectate astfel:</p>

<img src="../poze/00374.png" alt="megohmmetru; modul de conectare al bobinelor"/>

<p>Când avem o rezistenţă infinită între cele două sonde (circuit deschis, precum în figura de sus), singurul curent existent în circuit va fi prin bobinele 2 şi 3, dar nu şi prin bobina 1. Când sunt alimentate, aceste bobine încearcă să se alinieze în spaţiul liber dintre cei doi poli magnetici. Acul indicator se va deplasa spre dreapta scalei (infinit):</p>

<img src="../poze/00381.png" alt="megohmmetru"/>

<p>Existenţa unui curent prin bobina 1 (printr-o rezistenţa de măsurat conectată între cele două sonde de măsură) tinde să ducă acul indicat spre stânga scalei (zero). Valorile rezistenţelor interne ale sistemului de măsură sunt calibrate astfel încât, în cazul în care sondele sunt scurt-circuitate, acul indicator indică exact 0 Ω.</p>

<p>Datorită faptului că orice variaţie a tensiunii bateriei interne va afecta cuplul generat de <i>ambele</i> seturi de bobine (bobinele 2 şi 3, ce deplasează acul indicator spre dreapta, şi bobina 1 şi deplasează acul spre stânga), aceste variaţii nu vor avea niciun efect asupra setării deplasării. Cu alte cuvinte, precizia sistemului de măsură a acestui ohmmetru nu este afectată de tensiunea bateriei: o anumită valoare a rezistenţei de măsurat va produce o anumită deplasare a acului indicator, indiferent de valoarea tensiunii produsă de baterie.</p>




<div class="clear"></div>

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