<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Ohmmetrul</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>6. Ohmmetrul</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Scopul ohmmetrului</h2>

<p>Chiar daca ohmmetrele mecanice (analogice) sunt folosite destul de rar astăzi, fiind înlocuite de instrumentele digitale, modul lor de funcţionare este foarte interesant şi merită prin urmare studiat.</p>

<p>Scopul unui ohmmmetru este, desigur, măsurarea rezistenţei conectată între bornele sale. Citirea valorii rezistenţei se face prin observarea deplasării unui mecanism de deplasare acţionat de un curent electric. Prin urmare, ohmmetrul trebuie echipat cu o sursă internă de tensiune pentru a crea curentul necesar acţionării deplasării. Avem nevoie, de asemenea, de rezistenţe suplimentare pentru a permite trecerea unui curent necesar şi suficient prin mecanismul de deplasare, pentru oricare valoare a rezistenţei de măsurat.</p>

<h2>Realizarea unui ohmmetru simplu</h2>

<p>Începem cu un circuit simplu, format din mecanismul de măsură şi o baterie:</p>

<img src="../poze/00174.png" alt="ohmmetru analogic"/>

<p>Când avem o rezistenţă infinită (nu există continuitate între cele două sonde), curentul prin circuitul intern al ohmmetrului este zero. În acest caz, nu avem nicio deplasare, iar acul indicator este poziţionat în partea stângă a scalei de valori. Din acest punct de vedere, indicaţia ohmmetrului este chiar „inversă”, deoarece valoarea maximă (infinit) este la stânga scalei. Indicaţia voltmetrelor şi ampermetrelor este chiar inversă.</p>

<p>Dacă sondele acestui ohmmetru sunt conectate împreună (scurt-circuitate, rezistenţa 0 Ω), curentul prin aparatul de măsură va fi maxim. Valoarea acestui curent este limitată doar de tensiunea bateriei şi de rezistenţa internă a mecanismului de măsură:</p>

<img src="../poze/00175.png" alt="ohmmetru analogic"/>

<p>Cu o tensiune a bateriei de 9 V şi o rezistenţa internă a mecanismului de deplasare de doar 500 Ω, curentul prin circuit va fi de 18 mA. Această valoare este mult peste deplasarea maximă (D.M. = 1 mA) permisă de dispozitivul nostru. Un asemenea exces va duce cu siguranţa la distrugerea aparatului.</p>

<p>Pe lânga aceste aspecte, dispozitivul de mai sus nu va fi nici foarte practic. Dacă partea din stânga a scalei reprezintă o rezistenţă infinită, atunci partea din drepta (deplasare maximă) ar trebui să reprezinte 0 Ω. Trebuie să ne asigurăm de faptul că deplasarea acului indicator este maximă spre dreapta doar când sondele sunt conectate împreună (scurt-circuitate). Acest lucru se realizează prin adăugarea unei rezistenţe serie în circuitul aparatului de măsură:</p>

<img src="../poze/00176.png" alt="ohmmetru analogic"/>

<p>Pentru determinarea valorii lui R, calculăm rezistenţa totală din circuit necesară pentru a limita curentul la 1 mA (curentul necesar pentru deplasarea maximă). Ştim de asemenea că avem o diferenţa de potenţial de 9 V, dinspre baterie. Valoarea rezistenţei pe care o căutăm va fi diferenţa dintre această rezistenţă totală şi rezistenţa internă a aparatului de măsură:</p>

<div class="formula">
R<sub>total</sub> = E / I = 9 V / 1 mA
R<sub>total</sub> = 9 kΩ
R = R<sub>total</sub> - 500 Ω = 8,5 kΩ
</div>

<h2>Împărţirea scalei</h2>

<p>Acum că avem valoarea corectă a rezistorului R, mai avem o problemă: scala aparatului de măsură. După cum se ştie deja, în stânga scalei avem infinit, iar în drepta zero. În afara faptului că această scală este inversă faţă de cea a voltmetrelor şi ampermetrelor, mai are o ciudăţenie: valorile între care se face citirea se află între două extreme (infinit şi zero). În cazul celorlalte aparate de măsură, valorile citite se află între zero şi o anumită valoare (10 V, 1 A, etc.). Prin urmare, ce valoare reprezintă mijlocul scalei ?! Ce valoare se află exact între infinit şi zero?</p>

<p>Răspunsul acestui paradox poartă numele de „scală ne-liniară”. Pe scurt, scala unui ohmmetru nu reprezintă o trecere liniară de la zero spre infinit, pe măsură ce acul indicator se deplasează dinspre dreapta spre stânga. Iniţial, indicaţia este maximă spre dreapta (rezistenţa zero), iar valorile rezistenţelor se adună din ce în ce mai rapid una lângă cealaltă pe măsură ce trecem în partea stângă a scalei:</p>

<img src="../poze/00177.png" alt="scala logaritmică a unui ohmmetru"/>

<p>Nu ne putem apropia de infinit printr-o manieră liniară, pentru că scala nu ar ajunge niciodată acolo! Cu o scală ne-liniară, cantitatea de rezistenţa acoperită de o anumită distanţă creşte pe măsură ce scala se apropie de infinit. În acest caz, putem spune că infinitul este o „valoare” ce poate fi atinsă.</p>

<p>Mai există totuşi încă o nelămurire legată de scala noastră. Care este valoarea necesară a rezistenţei dintre sonde, astfel încât acul indicator să se regăsească la jumătatea scalei? Cunoaştem că deplasarea maximă este 1 mA. Atunci, 0,5 mA (500 µA) este valoare curentului necesară pentru această deplasare la mijlocul scalei. Păstrâng bateria de 9 V în circuit, obţinem următorul rezultat:</p>

<div class="formula">
R<sub>total</sub> = E / I = 9 V / 500 µA
R<sub>total</sub> = 18 kΩ
</div>

<p>Cu o rezistenţa internă de 500 Ω, şi un rezistor serie de 8,5 kΩ, ne mai rămân 9 kΩ pentru o rezistenţa de test externă (conectată între sonde), pentru o deplasare la jumătatea a scalei. Cu alte cuvinte, rezistenţa de test necesară unei deplasări la jumătatea scalei a acului indicator, este egală în valoare cu rezistenţa serie internă totală a aparatului de măsură. Aplicând din nou legea lui Ohm, putem determina valoarea rezistenţei de test pentru o deplasare la 1/4 şi 3/4 a scalei:</p>

<p>Deplasare la 1/4 (0,25 mA):</p>

<div class="formula">
R<sub>total</sub> = E / I = 9 V / 250 µA
R<sub>total</sub> = 36 kΩ

R<sub>test</sub> = R<sub>total</sub> - R<sub>intern</sub>
R<sub>test</sub> = 36 kΩ - 9 kΩ
R<sub>test</sub> = 27 kΩ
</div>

<p>Deplasare la 3/4 (0,75 mA):</p>

<div class="formula">
R<sub>total</sub> = E / I = 9 V / 750 µA
R<sub>total</sub> = 12 kΩ

R<sub>test</sub> = R<sub>total</sub> - R<sub>intern</sub>
R<sub>test</sub> = 12 kΩ - 9 kΩ
R<sub>test</sub> = 3 kΩ
</div>

<p>Prin urmare, scala finală a ohmmetrului arată astfel:</p>

<img src="../poze/00178.png" alt="scala logaritmică a unui ohmmetru"/>

<h2>Dezavantajele metodei de mai sus</h2>

<p>O problemă majoră a acestui aranjament constă în necesitatea utilizării unei baterii precise. În caz contrar, valorile citite nu vor fi reale. Dacă tensiunea bateriei scade (acest lucru se întâmplă cu toate bateriile chimice), ohmmetrul va pierde din precizie. Cu rezistorul de scală conectat în serie şi la o valoare constantă de 8,5 kΩ, o descreştere a tensiunii bateriei va însemna că deplasarea acului indicator nu se va realiza înspre poziţia dreapta-maximă la conectarea sondelor împreună (0 Ω). Identic, o rezistenţa de test de 9 kΩ nu va reuşi să deplaseze acul indicator la exact jumătatea scalei de măsură, dacă tensiunea bateriei scade.</p>

<p>Desigur, există metode de compensare a acestei pierderi de tensiune a bateriei. Aceste „artificii” însă nu rezolvă în totalitate problema, şi sunt considerate în cel mai bun caz doar aproximaţii. Din acest motiv, şi datorită scalei neliniare, acest tip de ohmmetru nu poate fi în niciun caz considerat un instrument de precizie.</p>

<p>Mai există încă o particularitate a ohmmetrelor ce trebuie menţionată: acestea funcţionează corect doar atunci când măsoară o rezistenţă ce nu este alimentată de o sursă de curent sau de tensiune. Cu alte cuvinte, nu putem măsură rezistenţa cu un ohmmetru, atunci când circuitul este alimentat (conectat la o sursă de tensiune). Motivul este simplu: indicaţia precisă a ohmmetrului se bazează pe faptul că singură sursă de tensiune din circuit este propria sa baterie internă. Prezenţa unei alte căderi de tensiune la bornele componentului supus măsurătorii va da peste cap funcţionarea corectă a ohmmetrului. Dacă această cădere de tensiune este suficient de mare, poate duce chiar la distrugerea acestuia.</p>




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