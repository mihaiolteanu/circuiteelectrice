<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuite complexe</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>6. Circuite complexe</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Ce facem în cazul în care avem un circuit mai complicat decât configuraţiile serie considerate până acum? Să luăm acest circuit, de exemplu:</p>

<p><img src="../poze/00335.png" alt="circuit RC complex"/></p>

<p>Formula constantei de timp (τ=RC) se bazează pe un circuit capacitiv serie simplu, format dintr-un condensator şi un rezistor conectate în serie. Acelaşi lucru este valabil şi pentru constanta de timp în circuitul inductiv serie simplu (τ=L/R). Ce putem face prin urmare într-o situaţie asemănătoare celei de faţă, unde rezistorii sunt conectaţi într-o configuraţie serie-paralel cu condensatorul/bobina?</p>

<p>Răspunsul este că putem folosi metodele învăţate la analiza reţelelor (link!). Teorema lui Thevenin ne spune că putem reduce <i>oricare</i> circuit liniar la un circuit echivalent compus dintr-o sursă de tensiune, un rezistor conenctat în serie cu aceasta şi o sarcină, urmând câţiva paşi simpli. Pentru aplicarea teoremei lui Thevenin la circuitul de faţă, considerăm componentul reactiv, condensatorul, ca fiind sarcina; pasul următor este îndepărtarea acestuia din circuit pentru determinarea tensiunii şi a rezistenţei Thevenin. Apoi, dupa ce am determinat valorile din circuitul echivalent, reconectăm condensatorul şi determinăm tensiunea şi curentul în funcţie de timp, exact cum am făcut şi până acum.</p>

<p>După ce am identificat condensatorul ca fiind „sarcina” circuitului, îl îndepărtăm şi determinam tensiunea la bornele sarcinii (întrerupătorul este închis)</p>

<p><img src="../poze/00336.png" alt="analiza circuitului RC complex folosind teorema lui Thevenin - tensiunea Thevenin"/></p>
<p><img src="../poze/10259.png" alt="tabel"/></p>

<p>Acest pas al analizei reflectă faptul că tensiunea la bornele sarcinii (aceeiaşi ca la bornele rezistorului R<sub>2</sub>) este de 1.8182 V atunci când nu este conectată nicio sarcină. Dacă suntem atenţi, observăm că această tensiunea este chiar tensiunea finală la bornele condensatorului, deoarece un condensator complet încărcat se comportă precum un circuit deschis (curent zero). Folosim această valoare a tensiunii pentru circuitul echivalent Thevenin.</p>

<p>Pentru determinarea rezistenţei Thevenin, trebuie să eliminăm toate sursele de putere din circuitul original şi să recalculăm rezistenţa aşa cum este ea văzută de la terminalele sarcinii:</p>

<p><img src="../poze/00337.png" alt="analiza circuitului RC complex folosind teorema lui Thevenin - rezistenţa Thevenin"/></p>
<p><img src="../poze/10260.png" alt="formule"/></p>

<p>Următorul pas este redesenarea circuitului original sub forma circuitului echivalent Thevenin:</p>

<p><img src="../poze/00338.png" alt="analiza circuitului RC complex folosind teorema lui Thevenin - circuitul echivalent"/></p>

<p>Constanta de timp pentru acest circuit va fi egală cu produsul dintre rezistenţa Thevenin şi capacitatea condensatorului (τ=RC). Cu valorile de mai sus, putem face următoarele calcule:</p>

<p><img src="../poze/10261.png" alt="formule"/></p>

<p>În acest moment putem afla şi tensiunea la bornele condensatorului direct din formula universală de calcul a constantei de timp. Să facem calculele pentru o valoare de 60 de milisecunde. Deoarece este o formulă capacitivă, vom face calculele în funcţie de tensiune:</p>

<p><img src="../poze/10262.png" alt="formule"/></p>

<p>Din nou, deoarece valoarea iniţială a tensiunii condensatorului am presupus-o ca fiind zero volţi, căderea de tensiune actuală pe condensator dupa un interval de 60 ms de la închiderea întrerupătorului este suma dintre valoarea iniţială (0 V) şi cea finală (1.3325 V), adică 1.3325 V.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Pentru analiza circuitelor RC sau L/R mai complexe decăt cele serie simple, putem transforma circuitul într-un circuit echivalent Thevenin considerând compoentul reactiv (condensator sau bobină) ca fiind „sarcina” şi reducând restul componentelor la un circuit echivalent cu o sursă de tensiune şi un rezistor serie. Apoi, analizăm comportamentul circuitului în timp, folosind formula universală a constantei de timp</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>