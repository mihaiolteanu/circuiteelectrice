<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Rezistenţa non-liniară</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>6. Rezistenţa non-liniară</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Scopul experimentului</h2>

<p>Vom încerca în cele ce urmează să arătăm că, în unele cazuri, valoarea rezistenţei nu este constantă. Pentru soluţionarea „misterului” variaţiei rezistenţei, vom face apel la „metoda ştiinţifică”. Pe parcurs, vom realiza circuitul de mai jos:</p>

<img src="../poze/05064.png" alt="circuit electric simplu"/>

<p>Practic, circuitul de mai sus va arăta astfel:</p>

<img src="../poze/05065.png" alt="circuit electric simplu"/>

<h2>Desfăşurarea experimentului</h2>

<p>Măsuraţi rezistenţa becului cu ajutorul multimetrului. Valoarea acestei rezistenţe se datorează filamentului subţire din interiorul becului. Rezistenţa acestuia este semnificativ mai mare decât rezistenţa unui conductor normal, dar mai mică decât a oricărui rezistor din experimentele precedente. Notaţi-vă această valoare a rezistenţei pentru utilizarea ei ulterioară.</p>

<p>Construiţi un circuit format dintr-o baterie şi un bec. Selectaţi o scară de tensiune apropiată şi măsuraţi căderea de tensiune la bornele becului când acesta este alimentat (aprins). Notaţi-vă şi această valoare, lângă cea a rezistenţei.</p>

<p>Setaţi-vă multimetrul pe cea mai mare scară de curent disponibilă. Deschideţi circuitul şi conectaţi ampermetrul între capetele libere ale circuitului deschis. Ampermetrul este acum parte din circuit, fiind legat în serie cu bateria şi becul. Selectaţi cea mai bună scară de curent.  Notaţi-vă si această valoare a curentului alături de celelalte două valori de mai sus.</p>

<p>Luaţi valorile tensiunii şi rezistenţei obţinute la măsurătorile de mai sus şi aplicaţi legea lui Ohm pentru calcularea curentului din circuit. Comparaţi această valoare calculată cu valoarea măsurată a curentului din circuit:</p>

<div class="formula">
I = E / R
</div>

<p>Ceea ce ar trebui să observaţi este existenţa unei diferenţe între curentul măsurat şi cel calculat. Valoarea calculată este mult mai mare. De ce se întâmplă acest lucru?</p>

<p>Pentru a face lucrurile şi mai interesante, încercaţi să măsuraţi din nou rezistenţa becului, folosind de această dată un alt model de multimetru (dacă dispuneţi de unul, desigur). Va trebui să scoateţi becul din circuit pentru a putea face o astfel de măsurătoare, deoarece tensiunile existente în exteriorul aparatului de măsură afectează valorile măsurate ale rezistenţei. Aceasta este o regulă generală pe care va trebui să o ţineţi minte: măsuraţi rezistenţa doar după ce componentul respectiv nu mai este alimentat cu energie electrică!</p>

<p>Folosind un ohmmetru diferit, valoarea rezistenţei becului va fi probabil diferită. Acest comportament este foarte diferit de cel al rezistorilor din ultimul experiment. De ce se întâmplă acest lucru? Ce anume ar putea influenţa rezistenţa filamentului lămpii, şi care e diferenţa dintre cele două condiţii, aprind şi stins? De asemenea, care e diferenţa între măsurătorile efectuate cu diferite tipuri de aparate de măsură? De ce se întâmplă acest lucru?</p>

<p>Problema de mai sus este un foarte bun exemplu de aplicare a metodei ştiinţifice. Dacă aţi găsit un posibil răspuns pentru variaţia rezistenţei becului între cele două condiţii, aprins şi stins, încercaţi să reproduceţi această scenariul respectiv prin alte mijloace. De exemplu, aţi putea presupune că rezistenţa becului variază datorită expunerii la lumină (propria ei lumină, când becul este aprins). Această variaţie ar putea prin urmare explica variaţia dintre curenţii măsuraţi şi cei calculaţi. Dacă acesta este cazul, încercaţi să expuneţi becul la o sursă de lumină externă. Măsuraţi apoi rezistenţa acestuia. Dacă observaţi o diferenţă substanţială a rezistenţei între cele două scenarii, atunci ipoteza voastră s-ar putea să fie adevărată, deoarece aţi demonstrat-o experimental. În caz contrar, ipoteza voastră s-a dovedit falsă. Acest lucru înseamnă că există o altă cauză pentru variaţia rezistenţei. Care este aceasta?</p>
 

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