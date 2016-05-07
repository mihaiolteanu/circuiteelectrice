<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Impactul ampermetrului asupra circuitului</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Impactul ampermetrului asupra circuitului</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
<div id="contents">

<h2>Ampermetrul ideal</h2>

<p>Asemenea voltmetrelor, şi ampermetrele tind să influenţeze cantitatea de curent din circuitele în care sunt conectate. Totuşi, spre deosebire de voltmetrul ideal, rezistenţa interna a ampermetrului ideal este zero. Motivul îl reprezintă o cădere de tensiune cât mai mică la bornele acestuia. Observaţi că acest lucru este exact opus voltmetrului (curent cât mai mic consumat din circuit).</p>

<img class="floatleft" src="../poze/00169.png" alt="circuit paralel pur rezistiv"/>

<p>Să vedem un exemplu pentru identificarea efectelor unui ampermetru asupra circuitului. Atunci când ampermetrul nu este introdus în circuit, curentul prin rezistorul de 3 Ω este de 666,7 mA, iar curentul prin rezistorul de 1,5 Ω este de 1,33 A.</p>

<div class="clear"></div>

<img class="floatleft" src="../poze/00170.png" alt="circuit paralel pur rezistiv; introducerea ampermetrului într-una dintre ramuri"/>

<p>Dacă ampermetrul cu care efectuăm măsurătorile are o rezistenţă internă de 0,5 Ω, introducerea acestuia într-una din ramurile circuitului va afecta puternic circuitul. Modificând practic rezistenţa ramurii din stânga de la 3 Ω la 3,5 Ω, ampermetrul va indica un curent de 571, 43 mA în loc de 666,7 mA.</p>
  
<div class="clear"></div>

<img class="floatleft" src="../poze/00171.png" alt="circuit paralel pur rezistiv; introducerea ampermetrului într-una dintre ramuri"/>

<p>Introducerea ampermetrului în ramura din dreapta va avea un efect şi mai mare asupra curentului din aceasta. În acest caz, curentul de ramură va fi de 1 A, în loc de 1,33 A, din cauza creşterii rezistenţei prin introducerea ampermetrului.</p>

<div class="clear"></div>  

<p>La utilizarea ampermetrelor standard, ce se conectează în serie cu circuitul de măsurat, reproiectarea aparatului pentru o rezistenţa mai mică între cele două terminale, nu este practică sau poate chiar imposibilă. Totuşi, dacă măsurăm curentul cu ajutorul unui voltmetru şi a unui rezistor de şunt, cel mai indicat lucru este să alegem o rezistenţa cât mai mică. Orice rezistenţă adiţională introdusă în circuitul iniţial, va duce la modificarea comportamentului acestuia.</p>

<h2>Cleştele ampermetric (clampmetrul)</h2>

<img class="floatleft" src="../poze/00172.png" alt="măsurarea curentului dintr-un circuit cu ajutorul clampmetrului"/>

<p>O metodă ingenioasă de reducere a impactului pe care îl are un aparat de măsură asupra circuitului, este utilizarea conductorului ca parte integrantă a ampermetrului. Toţi conductorii produc un câmp magnetic în jurul lor la trecerea curentului prin ei; valoarea acestui câmp magnetic este direct proprţională cu valoarea curentului prin conductor. Construind un instrument pentru măsurarea puterii acelui câmp magnetic, se poate evita contactul direct şi întreruperea circuitului. Un astfel de ampermetru poartă numele de clampmetru sau cleşte ampermetric.</p>

<div class="clear"></div>

<img class="floatleft" src="../poze/00173.png" alt="măsurarea curentului dintr-un circuit cu ajutorul clampmetrului"/>


<p>Acesta constă practic din doi cleşti ce se pun în jurul conductorului. Cu ajutorul acestor dispozitive se pot realiza măsurător rapide şi sigure, în special în cazul circuitelor de putere. Datorită faptului că clampmetrul nu introduce nicio rezistenţa suplimentară în circuitul de test, nu va exista practic nicio eroare de măsurătoare în acest caz.</p>

<div class="clear"></div>

<p class="sumar">Sumar:</p>
<ul>
	<li>Rezistenţa unui ampermetru ideal este zero</li>
	<li>Un <strong>clampmetru</strong> măsoară valoarea curentului prin determinarea câmpului magnetic din jurul conductorului</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>