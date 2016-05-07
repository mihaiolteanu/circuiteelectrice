<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Divizor de curent</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>04. Divizor de curent</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Scopul experimentului</h2>

<p>Asemănător exemplului precedent, vom avea nevoie de o baterie de 6 V şi o serie de rezistori cu valori cuprinse între 1 kΩ şi 100 kΩ. Faţă de exemplul precedent, ne vom familiariza cu legea lui Kirchhoff pentru curent şi cu funcţionarea unui circuit divizor de curent.</p>

<img src="../poze/05097.png" width="288" height="115" alt="divizor de curent"/>

<p>Circuitul se poate realiza practic în mai multe moduri:</p>

<img src="../poze/05098.png" width="330" height="202" alt="divizor de curent"/>

<img src="../poze/05102.png" width="295" height="213" alt="divizor de curent"/>

<img src="../poze/05099.png" width="330" height="176" alt="divizor de curent"/>

<p>În mod normal, nu este recomandat să conectaţi mai mult de doi conductori sub acelaşi terminal (şurub). În exemplul de mai sus, există trei conductori conectaţi împreună la terminalul din dreapta sus. Am realizat acest lucru doar pentru a demonstra un concept (sumarea curentului la nodul unui circuit), şi nu reprezintă o tehnică profesională de realizare a circuitelor.</p>

<p>Experimentaţi cu toate cele trei variante de realizare a circuitului pentru a vă familiariza cu avantajele şi dezavantajele fiecăruia.</p>

<h2>Desfăşurarea experimentului</h2>

<p>Alegeţi trei rezistori şi măsuraţi valoarea rezistenţei fiecăruia dintre ei cu ajutorulu unui ohmmetru. Notaţi-vă valoarea acestora pe o hârtie. Conectaţi cei trei rezistori în paralel şi conectaţi apoi şi baterie, precum în figurile de mai sus. Măsuraţi tensiunea bateriei cu un voltmetru, după ce aţi conectat rezistorii la bornele acesteia. Notaţi-vă şi această valoare pe hârtie. Este indicat să măsuraţi tensiunea bateriei în timp ce este alimentată, deoarece valoarea măsurată s-ar putea să difere într-o mică măsura de valoarea normală (fără sarcină).</p>

<p>Măsuraţi tensiunea la bornele fiecărui rezistor. Ce observaţi? Într-un circuit serie, valoarea curentului este aceiaşi prin toate componentele în orice moment. Într-un circuit paralel, tensiunea este variabila comună a tuturor componentelor.</p>

<p>Aplicaţi legea lui Ohm (I = E / R) pentru a calcula curentul prin fiecare rezistor. Verificaţi apoi această valoare calculată măsurând curentul real cu ajutorul unui ampermetru, astfel: conectaţi sonda roşie a ampermetrului în punctul de întâlnire a bornelor pozitive (+) ale rezistorilor; conectaţi borna neagră, pe rând, la capătul celălalt (-) al rezistorilor. Observaţi atât atât valoarea cât şi polaritatea curentului. De exemplu, pentru a calcula curentul prin rezistorul R<sub>1</sub>:</p>

<img src="../poze/05100.png" width="350" height="421" alt="divizor de curent; măsurarea curentului"/>

<img src="../poze/05101.png" width="350" height="339" alt="divizor de curent; măsurarea curentului"/>

<p>Măsuraţi curentul pentru toţi cei trei rezistori. Comparaţi aceste valori cu rezultatele obţinute anterior. Conectând ampermetrul asemenea figurilor de mai sus, toate cele trei indicaţii trebuie să fie pozitive, nu negative.</p>

<h2>Validarea legii lui Kirchhoff pentru curent</h2>

<p>Măsuraţi apoi curentul total din circuit, astfel: ţineţi sonda roşie a ampermetrului într-un singur punct din circuit; deconectaţi conductorul ce duce la borna pozitivă (+) a bateriei şi atingeţi-l cu sonda neagră.</p>

<img src="../poze/05103.png" width="300" height="363" alt="divizor de curent; măsurarea curentului"/>

<img src="../poze/05104.png" width="320" height="310" alt="divizor de curent; măsurarea curentului"/>

<p>Notaţi-vă atât valoarea cât şi semnul curentului indicat de ampermetru. Faceţi suma algebrică dintre această valoare şi valorile curenţilor pentru cei trei rezistori. Ce observaţi similar legii lui Kirchhoff pentru tensiune? Legea lui Kirchhoff pentru curent spune că suma tuturor curenţilor dintr-un nod trebuie să fie egală cu zero. Această lege este foarte utilă în analiza matematică a circuitelor electrice.</p>

<h2>Explicare divizorului de curent</h2>

<p>Observaţi cele patru valori ale curenţilor obţinute din măsurători. Consideraţi-le pe toate ca şi valori pozitive. Primele trei reprezintă curentul prin fiecare rezistor. a patra valoare reprezintă curentul total prin circuit ca şi suma pozitivă a celor trei curenţi pe fiecare ramură. Fiecare curent de ramură este o fracţiune, sau un procent, din curentul total. Din acest motiv, acest tip de circuit (cu rezistori conectaţi în paralel) poartă numele de divizor de curent.</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>