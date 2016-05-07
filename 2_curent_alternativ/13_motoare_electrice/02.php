<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Histereza şi curenţii turbionari</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Histereza şi curenţii turbionari</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>Primele experimente cu motoarele de c.a. s-au lovit de probleme specifice curenţilor alternativi. Aceste probleme au apărut la adaptarea motoarelor de c.c. pentru funcţionarea în c.a. Cu toate că puţine motoare de c.a. din prezent seamănă cu cele de c.c., aceste probleme au trebuit rezolvate înainte ca motoarele de c.a., indiferent de tip, să poată trece din faza de proiectare în faza de realizare prorpiu-zisă.</p>

<h2>Miezuri realizate din tole</h2>

<p>În cazul motoarelor de c.a., atât miezul rotorului cât şi cel al statorului este realizat din tole. Aceste tole nu reprezintă altceva decât un set de straturi metalice acoperite şi izolate între ele prin lăcuire. Curenţii turbionari sunt reduşi prin divizarea buclei potenţiale de curent în segmente mai mici şi cu pierderi reduse. Buclele de curent arată conform figurii de mai jos (stânga). Utilizarea tolelor pentru realizarea miezurilor duce la „spargerea” acestor bucle de curent (figura de mai jos, dreapta). De asemenea, adăugarea siliciului (material semiconductor) în aliajul din care sunt realizate toelele, duce la creşterea rezistenţei electrice. Acest lucru duce la descreşterea amplitudinii curenţilor turbionari:</p>

<p><img src="../poze/02422.png" alt="curenţi turbionari în miez masiv şi în miez realizat din tole"/></p>

<h2>Histereza magnetică</h2>

<p>Histereza magnetică este defazarea în urmă a intensităţii câmpului magnetic în comparaţie cu forţa de magnetizare. Dacă magnetizăm temporar un cui de fier cu ajutorul unei bobine cilindrice, ne aşteptăm ca materialul să-şi pierdă câmpul magnetic după ce bobina nu mai este alimentată. Totuşi, cuiul va păstra o cantitate mică de magnetizare reziduală, B<sub>r</sub>, datorită efectului de histerezis:</p>

<p><img src="../poze/02423.png" alt="pierderi prin histereză"/></p>

<p>Un curent alternativ va trebui să folosează energie, -H<sub>c</sub> (intensitatea câmpului coercitiv), pentru „învingerea” acestei magnetizări reziduale înainte de a putea magnetiza miezul înapoi la zero, sau chiar în direcţia opusă. Pierderile prin histereză au loc la fiecare schimbare de polaritate a curentului alternativ. Pierderea este proporţională cu aria mărginită de curba de histereză de pe grafigul B-H. Pierderile prin histereză în cazul aliajelor din fier moale sunt mai reduse decât în cazul aliajelor din fier carbon „dure”.</p>

<h2>Utilizarea legilor lui Steinmetz</h2>

<p>Punerea la punct a legilor lui Steinmetz pentru pierderile din miez, a făcut posibilă realizarea motoarelor de c.a. ce se comportau conform aşteptărilor. Această realizare a existenţei curenţilor turbionari şi a histerezei a fost aplicată mai întâi în realizarea motoarelor electrice a căror colector era similar celor de c.c. Astăzi, aceste motoare reprezintă doar o mică parte a motoarelor de c.a. Alţii au inventat noi tipuri de motoare de c.a. foarte diferite de cele de c.c.</p>

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