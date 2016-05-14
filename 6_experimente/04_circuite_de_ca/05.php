<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Detectarea câpurilor magnetice</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>05. Detectarea câpurilor magnetice</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Scopul experimentului</h2>

<p>Efectele inducţiei electromagnetice şi tehnici de ecranare electromagnetică.</p>

<h2>Materiale necesare</h2>

<p>Vom avea nevoie de un detector audio cu căşti şi o bobină de electromagnet. O bobină luată de la un releu electromagnetic sau de la un solenoid (bobină cilindrică fără miez magnetic) este perfectă pentru această aplicaţie. Circuitul realizat arată astfel:</p>

#+CAPTION: circuit de detectare a câpurilor electromagnetice
[[../poze/05015.png]]

#+CAPTION: circuit de detectare a câpurilor electromagnetice
[[../poze/05016.png]]

<h2>Utilizarea detectorului de câpuri electromagnetice</h2>

<p>Practic, circuitul a fost deja realizat în secţiunea precentă, şi constă în simpla conectare a unei bobina la ieşirea acestuia (sondele de test). Prin urmare, vom trece direct la explicarea modului de utilizare a unui astfel de detector.</p>

<p>Folosim şi în acest caz detectorul audio pentru detectarea tensiunilor de curent alternativ pentru frecvenţe audio, detector explicat în secţiunea precedentă. Folosim de asemena o bobină pentru a detecta câpurile magnetice de curent alternativ. Tensiunile produse de bobină vor fi destul de mici. Ajustaţi prin urmare sensibilitatea aparatului la maxim.</p>

<p>Există multe surse de câmpuri magnetice la dispoziţie. De exemplu, aduceţi bobina în apropierea ecranului unui televizor sau a tabloului de siguranţe. Orientarea bobinei este la fel de importantă precum distanţa dintre aceasta şi sura câmpurilor magnetice. Încercaţi să descoperiţi acest lucru singuri! Dacă doriţi sunete mai interesante, aduceţi bobina în aproierea plăcii de bază a calculatorului vostru, sau în apropierea hard-disk-ului în timp ce copiaţi ceva. Încercaţi să nu atingeţi însă nicio parte a plăcii de bază, în timp ce calculatorul este în funcţiune, cu oricare dintre părţile metalice expuse ale bobinei de detectare.</p>

<p>O sursă foarte puternică de câmpuri magnetice este transformatorul realizat într-una din secţiunile precedente. O altă sursă o reprezintă circuitul cu bobină variabilă şi bec, prezentate de asemenea într-una din secţiunile precedente.</p>

<h2>Ecranarea bobinelor</h2>

<p>Puteţi observa din aceste experimente că nu este necesar contactul fizic dintre bobina de detectare şi sursa câmpului magnetic: câpurile magnetice există în spaţiul din jurul surselor ce le emit.</p>

<p>Puteţi încerca de asemenea să ecranaţi bobina faţă de o sursă puternică de câmpuri magnetice folosind diferite materiale. Încercaţi folie de aluminiu, hârtie, oţel, plastic, sau orice alte materiale ce le aveţi la dispoziţie. Care din materialele încercate dau cele mai bune rezultate? (cel mai bun rezultat înseamnă cel mai mic zgomot înregistrat cu ajutorul căştilor). De ce? Care unghiuri (orientări) ale bobine minimizează cuplajul magnetic? (detectarea minimă a semnalului). Ce ne spune acest rezultat legat de poziţionarea bobinelor atunci când interferanţa dintre circuite nu este dorită?</p>


</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
