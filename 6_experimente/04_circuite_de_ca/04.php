<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Detector audio de semnale</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>04. Detector audio de semnale</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Scopul experimentului</h2>

<p>Scopul principal al circuitului realizat în acest experiment constă în detectarea semnalelor electrice extrem de mici. Vom vedea însă şi cum putem folos un transformator pentru adaptarea impedanţelor şi vom utiliza diode pentru „tăierea” tensiunii la un anumit nivel maxim.</p>

<p>Acest tip de detector poate fi folosit pentru echilibrarea punţilor de măsură, a circuitelor cu detector de nul şi pentru detectarea semnalelor de curent alternativ cu amplitudine mică şi în domeniul frecvenţelor audio. Acest echipament se poate dovedi extrem de folositor, mai ales pentru cei care au un buget mai restrâns şi nu-şi pot permite un osciloscop. Este de asemenea folositor în sensul în care ne permite utilizarea unui alt simţ pentru interpretarea comportamentului unui circuit.</p>

<h2>Materiale necesare</h2>

<p>Veţi avea nevoie de o pereche de căşti de calitate, de tip închis; transformator coborâtor de tensiune de 6 V; două diode de redresare; un rezistor de 1 kΩ; un potenţimetru de 100 kΩ.</p>

<p>Cu cât sensibilitatea (dB) căştilor este mai mare, cu atât mai bine. În mod normal, transformatorul (de adaptare a impedanţelor) folosit în astfel de aplicaţii poartă numele de „transformator audio”. Intrarea, respectiv ieşirea înfăşurărilor, este specificată prin valori ale impedanţelor (1000 Ω: 8 Ω) în loc de tensiune. Puteţi folosi un astfel de transformator audio, sau puteţi folosi un transformator de putere (220 V/6 V). Circuitul realiza arată astfel:</p>

<img src="../poze/05009.png" alt="detector audio de semnal"/>

<img src="../poze/05010.png" alt="detector audio de semnal"/>

<h2>Realizarea detectorului audio de semnale</h2>

<p>Căştile, fiind cel mai probabil stereo, vor avea o fişă cu 3 contacte. Vom folosi doar două din cele trei puncte de contact în circuitul nostru. Există două posibilităţi de conectare în acest caz, fie în serie, fie în paralel. Aparent însă, cele mai bune rezultate se obţin folosind conexiunea serie:</p>

<img src="../poze/05011.png" alt="conectarea în serie serie şi paralel a difuzoarelor"/>

<p>Lipiţi cu mare grijă toate conexiunile. Acest detector este extrem de sensibil. Orice conexiuni proaste existente în circuit vor genera zgomote adiţionale nedorite, peste semnalul de tensiune măsurat. Cele două diode conectate în paralel cu primarul transformatorului, împreună cu rezistorul de 1 kΩ, „taie” semnalul de intrare (tensiune) ce depăşeşte 0,7 V. Acest lucru are doar un singur scop: limitarea volumului căştilor audio. Sistemul poate funcţiona foarte bine şi fără aceste diode. Atenţie însă, în acest caz nu va există practic nicio limită a volumului existent în circuit. Simpla conectare a celor două sonde de test la bornele unei baterii (de exemplu) poate produse un sunet asurzitor!</p>

<h2>Utilizarea detectorului audio</h2>

<p>Pentru conectarea dispozitivului realizat mai sus la o sursă de tensiune mai mare de 1 V, va trebui să atenuăm sensibilitatea extrem de mare a acestuia. Acest lucru se poate realiza prin conectarea unui divizor de tensiune la intrarea circuitului:</p>

<img src="../poze/05012.png" alt="atenuarea sensibilităţii detetorului audio"/>

<img src="../poze/05014.png" alt="atenuarea sensibilităţii detetorului audio"/>

<p>Atunci când probaţi un semnal de tensiune cu o amplitudine necunoscută, ajustaţi potenţiometrul divizor de tensiune de 100 kΩ aproximativ la jumătate scalei. Dacă sunetul este prea puternic, reajustaţi potenţiometrul (măriţi rezistenţa) şi reîncercaţi. Dacă sunetul este prea slab, descreşteţi rezistenţa potenţiometrului. Acest detector poate fi folosit chiar şi pentru detectarea semnalelor de curent continuu şi a celor ce se află în bandă de frecvenţa radio (semnale sub şi peste domeniul audio). În acest caz, veţi auzi un „click” la conectarea sau deconectarea sondelor de test la sursa de semnal. Practic, cu un astfel de circuit, puteti detecta curenţi de sub 0,1 µA (c.c.) şi semnale de radiofrecvenţa de până la 2 MHz.</p>

<p>Pentru a încerca dispozitivul şi a vă convinge de utilitatea lui, puteţi să aduceţi ambele sonde în contact cu vârful limbii, setând sensibilitatea la maxim. Tensiunea produsă de contactul metal-electrolit (cunoscută sub numele de tensiune galvanică) este foarte mică, dar suficientă pentru a produce „click”-uri ori de câte ori atingeţi sau îndepărtăţi sondele de pe limbă.</p>

<p>La fel ca în cazul sursei de tensiune, puteţi introduce întreg circuitul într-o carcasă pentru a putea fi folosit în viitor. Prin urmare, rezultatul final ar putea arăta astfel:</p>

<img src="../poze/05013.png" alt="detector audio de semnal; forma finală"/>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>