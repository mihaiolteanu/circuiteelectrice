<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Construcţia releelor</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Construcţia releelor</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<img src="../poze/04040.png" alt="o bobină produce un câmp magnetic la trecerea curentului prin aceasta"/>

<p>La trecerea curentului electric printr-un canductor, va lua naştere un câmp magnetic în jurul acestuia. În cazul în care conductorul este construit sub forma unei bobine, câmpul magnetic produs se va orienta în lungimea bobine. Cu cât intensitatea curentului este mai mare, cu atât puterea câmpului magnetic este mai mare, toţi ceilalţi factori rămânând neschimbaţi.</p>

<div class="clear"></div>

<p>Bobinele reacţionează la variaţia curentului prin ele datorită energiei stocate sub forma acestui câmp magnetic. La construirea unui transformator din două bobine înfăşurate în jurul unui miez magnetic comun, utilizăm de fapt acest câmp magnetic pentru a transfera energie electrice de la o înfăşurare la alta. Totuşi, există şi alte metode mai simple şi mai directe de utilizare a câmpurilor electromagnetice. Câmpul magnetic produs de o bobină poate fi folosit pentru exercitarea unei forţe mecanice asupra oricărui obiect magnetic. În acelaşi fel folosim şi magneţi permanenţi pentru atragerea obiectelor magnetice. Diferenţa constă în faptul că acest electromagnet (format din bobină) poate fi pornit şi oprit prin închiderea şi deschiderea circuitului bobinei.</p>

<p>Dacă plasăm un obiect magnetic (un obiect metalic, de exemplu) în apropierea unei astfel de bobine, acest obiect se va deplasa atunci când prin bobină trece un curent electric. Obiectul magnetic deplasabil poartă numele de armătură, iar majoritatea lor pot fi deplasate fie prin intermediul curentului continuu, fie cu ajutorul curentului alternativ. Polaritatea câmpului magnetic este irelevantă din punct de vedere al atracţiei armăturii. Aceste dispozitive pot fi folosite pentru deschiderea pe cale electrică a încuietorilor, deschiderea sau închiderea valvelor, deplasarea braţelor mecanice, etc. Totuşi, în situaţia în care aceste dispozitive sunt utilizate pentru acţionarea unui comutator, ele sunt cunoscute sub denumirea de relee electromecanice.</p>

<img src="../poze/04041.png" alt="releu electromecanic într-un circuit electric"/>

<p>Releele sunt foarte practice pentru controlul unei cantităţi mari de curent sau tensiune prin intermediul unui semnal electric de putere mică. Bobina releului ce produce câmpul magnetic poate să consume o putere mai mică de 1 watt, de exemplu, pe când contactele acţionate de acest câmp magnetic pot susţine o putere de sute de ori mai mare. Funcţional, un releu electromecanic se comportă precum un amplificator cu două stări: pornit şi oprit.</p>

<div class="clear"></div>

<p>La fel ca în cazul tranzistorilor, abilitatea releelor de a controla un semnal electric prin intermediul unui alt semnal electric este utilizate pentru realizarea funcţiilor logice. Pentru moment însă, vom explora abilitatea de „amplificare” a releelor.</p>

<p>În figura de mai sus, bobina releului este energizată prin intermediul unei surse de tensiune de 12 V (c.c.). În schimb, comutatorul monopolar cu o singură direcţie este conectat într-un circuit electric alimentat de la o sursă de tensiune de 480 V (c.a.). În acest caz, curentul necesar energizării bobinei este de sute de ori mai mic decât curentul nominal al contactului comutatorului.</p>

<p>Un singur dispozitiv bobină/armătură poate fi folosit pentru acţionarea mai multor seturi de contacte. Aceste contacte pot fi normal-deschise, normal-închise, sau într-o combinaţie a celor două. Asemeni comutatoarelor, poziţia „normal” a releelor reprezintă acea stare a contactelor atunci când bobina nu este energizată, sau mai bine spus, atunci când releul este încă „în cutie”.</p>

<p>Pe lângă abilitatea de control a unui curent mare prin intermediul unui curent mic, releele oferă şi o izolaţie electrică între circuitul bobine şi circuitul contactelor. Acest lucru înseamnă că cele două elemente sunt izolate din punct de vedere electric una de cealaltă. Unul din circuite poate fi de c.c, iar celălalt de c.a., precum în exemplul anterior, sau chiar şi la tensiuni diferite.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Un releu electromecanic este compus dintr-o bobină şi un element magnetic mobil, ce poartă numele de armătură.</li>
	<li>La trecerea curentului prin bobină, aceasta produce un câmp magnetic ce atrage armătura. Armătura acţionează la rândul său contactele unui comutator </li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>