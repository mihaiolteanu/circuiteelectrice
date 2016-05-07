<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Reacţia pozitivă</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>12. Reacţia pozitivă</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Spre deosebire de reacţia negativă, ce conectează ieşirea amplificatorului la intrarea sa inversoare (-), <i>reacţia pozitivă</i> introduce semnalul de ieşire al AO la intrarea sa neinversoare (+), asfel:</p>

<p><img src="../poze/03052.png" alt="amplificator operaţional cu reacţie pozitivă"/></p>

<h2>Circuitul bistabil</h2>

<p>Intrarea inversoare nu este conectată la bucla de reacţie, prin urmare, se poate aplica o tensiune externă pe aceasta. Să vedem pentru început efectele conectării intrării inversoare la masă (0 V):</p>

<p><img src="../poze/03053.png" alt="amplificator operaţional cu reacţie pozitivă; intrarea inversoare conectată la masă"/></p>

<p>În acest caz, tensiunea de ieşire va depinde de amplitudinea şi de polaritatea tensiunii intrării neinversoare. Dacă această tensiune este pozitivă, ieşirea AO va fi şi ea pozitivă, ducând la saturaţia pozitivă a amplificatorului ca urmare a reacţiei pozitive pe intrarea neinversoare. Pe de altă parte, dacă tensiunea intrării neinvesoare porneşte de la o valoare negativă, AO se va satura negativ.</p>

<p>Ceea ce avem în cazul de faţă poartă numele de <i>circuit bistabil</i>, şi anume stabil într-una dintre cele două stări (saturat pozitiv sau saturat negativ). După atingerea uneia dintre aceste stări, circuitul tinde să rămână în acea stare, nemodificat. Pentru aducerea circuitului dintr-o stare în cealaltă, este necesară aplicarea unei tensiuni de aceeiaşi polaritate pe intrarea inversoare (-), dar de o amplitudine mai mare. De exemplu, dacă circuitul este saturat pozitiv la +12 V, va fi necesară o tensiune pe intrarea inversoare de cel puţin +12 V pentru ca AO să intre în saturaţie negativă.</p>

<p>Prin urmare, un AO cu reacţie pozitivă tinde să rămână în starea în care se află deja. Tehnic, acest lucru este cunoscut sub numele de <i>histerezis</i>.</p>

<h2>Comparator cu histereză</h2>

<p>După cum am mai văzut, comparatoarele pot fi utilizate pentru producerea unei unde dreptunghiulare folosind orice tip de undă periodică (sinusoidală, triunghiulară, dinte de fierăstrău, etc.) pe intrare. Dacă forma de undă în c.a. este pură, un comparator simplu este suficient pentru realizarea acestei transformări:</p>

<p><img src="../poze/03054.png" alt="comparator cu amplificator diferenţial"/></p>

<p>Pe de altă parte, dacă semnalul de intrare conţine zgomot, ce cauzează creşterea sau descreşterea semnificativă a amplitudinii în decurs de o perioadă, ieşirea unui asfel de comparator poate varia neaşteptat:</p>

<p><img src="../poze/03055.png" alt="comparator cu amplificator diferenţial"/></p>

<p>Ori de câte ori există o tranziţie a semnalului de intrare prin semnalul de referinţa, indiferent cât de mică ar fi, ieşirea comparatorului îşi va modifica starea.</p>

<p>Dacă adăugăm o mică reacţie pozitivă circuitului comparator, vom introduce histereză în circuit. Această histereză va determina rămânerea circuitului în starea sa actuală, modificându-şi starea doar dacă amplitudinea tensiunii de intrare în c.a. suferă o modificarea <i>majoră</i>.</p>

<p><img src="../poze/03056.png" alt="comparatorul cu histereză"/></p>

<p>Acest rezistor de reacţie crează o referinţă duală pentru circuitul comparator. Tensiunea aplicată la intrarea neinversoare (+) ca şi referinţă pentru comparaţia tensiunii de c.a, depinde de valoarea tensiunii de ieşire a AO. Când ieşirea AO este saturată pozitiv, tensiune de referinţa pe intrarea neinversoare va fi mai pozitivă decât inainte. Invers, când ieşirea AO este saturată negativ, tensiunea de referinţă a intrării neinversoare va fi mai negativă decât inainte. Rezultatul poate fi transpus pe un grafic, asfel:</p>

<p><img src="../poze/03057.png" alt="comparatorul cu histereză; formele de undă de la intrare şi ieşire"/></p>

<p>Când ieşirea AO este saturată pozitiv, tensiunea de referinţa va fi cea superioară; ieşirea nu va fi saturată pozitiv decât dacă intrarea de c.a. creşte <i>peste</i> această referinţă superioară. Invers, când AO este saturat negativ, tensiunea de referintă luată în considerare este cea inferioră; ieşirea nu va creşte spre saturaţie pozitivă decât dacă intrarea de c.a. scade <i>sub</i> nivelul de referinţă inferioară. Rezultatul este un semnal de ieşire dreptunghiular curat, în ciuda existenţei unor distorsiuni mari ale semnalului de intrare de c.a. Pentru ca ieşirea comparatorului să sară de la o stare la alta (lucru nedorit), este nevoie ca diferenţa dintre amplitudinile semnalului de intrare să fie cel puţin la fel de mare precum diferenţa dintre tensiunile de referinţa superioară şi inferioară.</p>

<h2>Circuite oscilatoare</h2>

<p>Un <i>oscilator</i> este un dispozitiv ce produce o tensiune de ieşire alternativă sau pulsatorie. Tehnic, este cunoscut sub numele de dispozitiv <i>astabil</i>: nu posedă o ieşire stabilă.</p>

<p>Să vedem un circuit oscilator cu AO şi reacţie pozitivă:</p>

<p><img src="../poze/03058.png" alt="circuit oscilator cu amplificator operaţional şi reacţie pozitivă"/></p>

<p>Când ieşirea este saturată pozitiv, V<sub>referinţa</sub> va fi pozitivă, iar condensatorul se va încărca în direcţia pozitivă. Când V<sub>rampă</sub> este mai mare decât V<sub>referinţa</sub> (chiar şi cu o valoarea foarte mică), ieşirea se va satura negativ, iar condensatorul se va încărca în direcţia (polaritatea) opusă. Oscilatia are loc datorită faptului că reacţia negativă este instantanee iar reacţia negativă este întârziată (printr-o constantă de timp RC). Frecvenţa acestui oscilator poate fi setată prin variaţia mărimii oricărui component.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Reacţia pozitivă crează o condiţie de <i>histereză</i>: tendinţa de „agăţare” într-una dintre cele două condiţii extreme, saturaţie pozitivă sau saturaţie negativă</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>