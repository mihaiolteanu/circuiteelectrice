<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Secvenţa fazelor</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Secvenţa fazelor</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Să considerăm din nou generatorul trifazat de curent alternativ din cazul precedent şi să analizăm rotaţia magneţilor şi efectele acesteia:</p>

#+CAPTION: generatorul de curent alternativ trifazat
[[../poze/02180.png]]

<p>Unghiul de fază de 120<sup>o</sup> dintre cele trei tensiuni se datorează poziţionării celor trei seturi de înfăşurări la un unghi de 120<sup>o</sup> între ele. Dacă rotaţia magnetului se realizează în sensul acelor de ceasornic, înfăşurarea 3 va genera tensiunea instantanee maximă după o rotaţie de exact 120<sup>o</sup> a înfăşurării 2, a cărei tensiune instantenee va atinge pragul maxim la exact 120 <sup>o</sup> după înfăşurarea 1. Modul de poziţionare al înfăşurărilor va decide valoarea defazajului dintre formele de undă generate. Dacă luăm înfăşurarea 1 ca şi înfăşurare de referinţă (0<sup>o</sup>), atunci înfăşurarea doi va avea un defazaj de -120<sup>o</sup>(120<sup>o</sup> în urmă, sau 240<sup>o</sup> înainte), iar înfăşurarea 3 un unghi de -240<sup>o</sup>(240<sup>o</sup> în în urmă, sau 120<sup>o</sup> înainte).</p>

<p>Secvenţa fazelor are o ordine bine stabilită. Pentru rotaţia în sensul acelor de ceasornic, ordinea este 1-2-3. Această ordine se repetă atâta timp cât generatorul îşi continuă rotaţia (1-2-3-1-2-3-etc.).</p>

#+CAPTION: generatorul de curent alternativ trifazat; secvenţa fazelor - sensul acelor de ceasornic
[[../poze/02181.png]]

<p>Dacă inversăm sensul de rotaţie al generatorului, în sensul invers acelor de ceasornic, sau sensul trigonometric, magnetul va trece pe lângă perechile de poli în secvenţă inversă. În loc de 1-2-3, vom avea 3-2-1. Forma de undă celei de a doua înfăşurări va fi defazată înaintea primei cu 120<sup>o</sup> iar a treia înaintea celei de a doua cu 120<sup>o</sup>.</p>

#+CAPTION: generatorul de curent alternativ trifazat; secvenţa fazelor - sens trigonometric
[[../poze/02182.png]]

<p>Ordinea secvenţelor formelor de undă într-un sistem polifazat se numeşte <i>secvenţa fazelor</i>. Dacă folosim un sistem polifazat pentru alimentarea sarcinilor pur rezistive, rotaţia fazelor nu are nicio importanţă. Fie că vorbim de 1-2-3 sau 3-2-1, curenţi şi tensiunilor vor avea tot aceeiaşi valoare. Există însă aplicaţii ale sistemelor trifazate, în care, secvenţa fazelor este importantă. Din moment ce voltmetrele şi ampermetrele nu pot măsură această secvenţă, avem nevoie de un alt tip de instrument pentru această sarcină.</p>

<h3>Detectarea secvenţei fazelor într-un circuit trifazat</h3>

<p>Un circuit ingenios pentru aceastăa aplicaţie, utilizează un condensator pentru introducerea unui defazaj între tensiune şi curent, ce sunt mai apoi folosite pentru detectarea secvenţei prin comparaţie dintre intensitatea luminoasă a două lămpi.</p>

#+CAPTION: folosirea unei scheme electrice cu condensator şi două corpuri de iluminat pentru detectarea secvenţei fazelor unui sistem de alimentare trifazat
[[../poze/02183.png]]

<p>Cele două lămpi au aceeiaşi valoare a rezistenţei. Condensatorul este ales asfel încât valoarea reactanţei la frecvenţa sistemului să fie egală cu rezistenţa unei lămpi. Daca ar să înlocuim condensatorul cu un rezistor de o valoare egală cu ea a rezistenţei lămpii, intensitatea luminoasă a celor două lămpi ar fi egală, circuitul fiind echilibrat. Totuşi, condensatorul introduce un defazaj între tensiune şi curent de 90<sup>o</sup> în faza #3. Acest defazaj, mai mare de 0<sup>o</sup>, dar mai mic de 120<sup>o</sup>, „strică” valorile curenţilor şi ale tensiunilor celor două lămpi relativ la unghiul lor de fază faţă de faza 3. Să considerăm circuitul:</p>

#+CAPTION: circuit electric trifazat - determinarea secvenţei fazelor
[[../poze/02184.png]]

<p>Diferenţa de fază rezultată prin introducerea condensatorului în circuit duce la scăderea tensiunii din faza 1 la 48 V, şi la creşterea tensiunii din faza 2 la 180 V. Acest lucru înseamnă că intensitatea luminoasă a celei de a doua lămpi va fi mult mai mare, lucru ce poate fi observat lesne cu ochiul liber. Dacă inversăm secvenţa fazelor (3-2-1), rezultatul este exact invers.</p>

<h3>Inversarea secvenţei fazelor</h3>

<p>Am văzut că putem inversa secvenţa fazelor prin schimbarea sensului de rotaţie al generatorului. Totuşi, această modificare de rotaţie nu se poate realiza de către consumator, atunci când tensiune de alimentare din reţea provine de la un furnizor naţional de electricitate şi nu de la propriile sale generatoare. O inversare mult mai uşoară a secvenţelor se realizează prin inversarea oricăror două faze între ele.</p>

<p>Putem observa mai bine acest lucru, dacă ne uităm la o secvenţă mai lungă a fazelor unei surse trifazate:</p>

<p><b>secvenţă 1-2-3 :  1-2-3-1-2-3-1-2-3-1-2-3-1-2-3 . . .</b></p>
<p><b>secvenţă 3-2-1 :  3-2-1-3-2-1-3-2-1-3-2-1-3-2-1 . . .</b></p>

<p>Secvenţa 1-2-3 poate la fel de bine să fie notată prin 2-3-1 sau 3-1-2. Asemănător, secvenţa inversă, 3-2-1, o putem nota cu 2-1-3 sau 1-3-2.</p>

<p>Luând ca şi secvenţa iniţială combinaţia 3-2-1, putem încerca toate combinaţiile posibile de inversare a oricăror două faze şi să vedem secvenţa rezultată.</p>

#+CAPTION: combinaţiile posibile ale inversării fazelor într-un siste trifazat; secvenţa originală: 1-2-3
[[../poze/02185.png]]

<p>Indiferent de perechea fazelor alese pentru inversare, rezultatul este tot timpul o secvenţă inversată (1-2-3 devine 2-1-3, 1-3-2 sau 3-2-1, toate fiind echivalente).</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Secvenţa fazelor este ordinea formelor de undă, defazate între ele, a unui sistem polifazat de curent alternativ. Pentru un sistem trifazat, sunt posibile doar două secvenţe, 1-2-3 sau 3-2-1, secvenţe ce corespund direcţie de rotaţie a generatorului de tensiune</li>
	<li>Secvenţa fazelor nu are niciun efect asupra sarcinilor rezistive, dar are efect asupra sarcinilor reactive dezechilibrate, cum este cazul detectorului de secvenţă</li>
	<li>Secvenţa fazelor poate fi inversată prin inversarea oricăror două faze ale sistemului trifazat între ele, fără efect asupra direcţiei de rotaţie a generatorului</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
