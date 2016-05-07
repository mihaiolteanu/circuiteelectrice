<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Calcularea tensiunii şi a curentului</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Calcularea tensiunii şi a curentului</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<h3>Valorile iniţiale şi cele finale</h3>
<p>Există o metodă sigură de calcul a tuturor variabilelor dintr-un circuit reactiv (cu bobine şi/sau condensatori) de curent continuu. Primul pas este identificarea valorilor iniţiale şi a celor finale pentru <i>tensiune</i> în cazul condensatoarelor şi pentru <i>curent</i> în cazul bobinelor. La închiderea întrerupătorului (sau deschiderea) dintr-un circuit, componentul reactiv încearcă să menţină această cantitate (tensiune pentru condensator, curent pentru bobină) la valoarea existenţă înainte de acţionarea întrerupătorului; această valoarea este prin urmare folosită ca valoare „iniţială”. Valoarea finală a acestei mărimi este cantiatea la care ajunge după o durată de timp infinită de la acţionarea întrerupătorului. Aceasta poate fi determinată în analiza circuitului capacitiv considerând condensatorul un circuit deschis, iar în cazul analizei circuitului inductiv, condiderând bobina un scurt-circuit, deoarece acesta este comportamentul lor după ce sunt încărcate la maxim (dupa o perioadă de timp infinită).</p>

<h3>Constanta de timp</h3>
<p>Următorul pas este calcularea <i>constantei de timp</i> a circuitului: timpul necesar pentru ca valorile tensiunii şi ale curentului să variaze cu aproximativ 63% de la valorile lor de pornire până la valorile finale, într-o situaţie tranzitorie. Într-un circuit RC serie, constanta de timp este egală cu produsul dintre rezistenţa totală în ohmi şi capacitatea în farazi. Pentru un circuit serie L/R, constanta de timp este egală cu raportul dintre inductanţa totală în Henry şi rezistenţa totală în ohmi. În ambele cazuri, constanta de timp se exprimă în <i>secunde</i> şi este simbolizată prin litera grecească „tau”, τ:</p>

<p><img src="../poze/10240.png" alt="constanta de timp pentru circuitele serie RC şi L/R"/></p>

<p>Creşterea şi descreşterea valorilor circuitului reactiv tranzitoriu, este asimptotică, curbele graficului sunt prin urmare exponenţiale.</p>

<p>După cum am spus mai sus, constanta de timp este durata de timp necesară pentru ca oricare dintre aceste valori să varieze cu 63% faţă de valoarea lor iniţială spre cea finală. Cu fiecare constantă de timp, aceste valori se situează cu 63% mai aproape de valoarea lor finală. Formula matematică pentru determinarea precisă a procentelor variaţiei este următoarea:</p>

<p><img src="../poze/10241.png" alt="formulă"/></p>

<p>Litera <i>e</i> este constanta lui Euler, aproximativ 2.7182818. La formula de mai sus s-a ajuns cu ajutorul analizei matematice, după analiza asimptotică a valorilor circuitului. După un timp egal cu o constantă de timp, procentul variaţiei faţă de valoarea iniţială este de:</p>

<p><img src="../poze/10242.png" alt="formulă"/></p>

<p>După o perioadă de două constante de timp, procentul variaţiei faţă de valoarea iniţială este:</p>

<p><img src="../poze/10243.png" alt="formulă"/></p>

<p>După zece constante de timp:</p>

<p><img src="../poze/10244.png" alt="formulă"/></p>

<p>Cu cât perioada de timp de la aplicarea tensiunii bateriei la bornele bobinei/condensatorului este mai lungă, cu atât este mai mare valoarea numitorului fracţiei, întraga fracţie fiind asfel mai mică, iar totalul scăzut din valoarea 1 se apropie eventual spre 1, sau, 100%.</p>

<p>Putem deduce o formulă universală pentru determinarea valorile curentului şi ale tensiunii în circuitele tranzitorii, prin înmulţirea aceste valori cu diferenţa dintre valorile iniţiale şi cele finale ale tensiunii/curentului:</p>

<p><img src="../poze/10245.png" alt="formula universală de calcul a variaţiei valorilor dintr-un circuit ractiv de curent continuu tranzitoriu"/></p>

<h3>Analiza circuitului RC</h3>
<p>Să analizăm circuitul RC serie de la începutul capitolului:</p>

<p><img src="../poze/00330.png" alt="circuit serie RC"/></p>

<p>Din moment ce constanta de timp (τ) a unui circuit RC serie este produsul dintre rezistenţă şi capacitate, valoarea obţinută este de 1 secundă:</p>

<p><img src="../poze/10246.png" alt="formulă"/></p>

<h4>Analiza tensiunii</h4>
<p>Analizăm în acest caz tensiunea deoarece este valoarea pe care condensatoarele încearcă să o menţină constantă. Cu toate că formula se poate aplica la fel de bine şi pentru curent, valorile finale şi cele iniţiale petru curent sunt de fapt derivate din tensiunea condensatorului, prin urmare, calcularea tensiunii este o metodă mai directă. Rezistenţa este de 10 kΩ iar capacitatea de 100 µF (microfarad).</p>

<p>Dacă iniţial condensatorul este complet descărcat (0 V), putem folosi această valoare pentru tensiunea iniţială. Valoarea finală va fi tensiunea bateriei, 15 V. Formula universală pentru tensiunea condensatorului în acest circuit arată asfel:</p>

<p><img src="../poze/10247.png" alt="formulă"/></p>

<p>După 7.25 de secunde de la aplicarea tensiunii la bornele condensatorului (prin închiderea întrerupătorului), tensiunea va creşte asfel:</p>

<p><img src="../poze/10248.png" alt="formulă"/></p>

<p>Deoarece tensiunea iniţială la bornele condensatorului a fost de 0 V, o creştere cu 14.989 V se traduce printr-o cădere de tensiune de 14.989 la bornele condensatorului după 7.25 s de la inchiderea circuitului.</p>

<h4>Analiza curentului</h4>
<p>Aceeiaşi formulă poate fi folosită şi pentru determinarea curentului din circuit. Ştim că un condensator descărcat se comportă precum un scurt circuit, prin urmare, curentul iniţial va fi maximul posibil în circuit:</p>

<p><img src="../poze/10249.png" alt="formulă"/></p>

<p>Ştim de asemenea că valoarea finală a curentului va fi zero, din moment ce condensatorul se va comporta eventual precum un circuit deschis, prin uramre, nu va exista curgere a electronilor prin circuit. Cunoscând valorile iniţiale şi cele finale, putem folosi formula universală pentru determinarea valorii curentului după 7.25 de secunde de la închiderea aceluiaşi circuit RC de mai sus:</p>

<p><img src="../poze/10250.png" alt="formulă"/></p>

<p>Observăm că valoarea obiţinută este negativă, nu pozitivă! Acest lucru înseamă o <i>descreştere</i> a curentului şi nu creştere a acestuia în timp. Din moment ce am început cu un curent de 1.5 mA, această descreştere de 1.4989 mA se traduce prin existenţa unui curent de 0.001065 mA (1.065 µA) după un interval de timp de 7.25 de secunde de la închiderea circuitului.</p>

<p>Am fi putut determina curentul prin circuit după 7.25 s, scăzând tensiunea condensatorului din tensiunea bateriei pentru obţinerea tensiunii pe rezistor; aflam apoi curentul prin rezistor (şi prin întreg circuitul) folosing legea lui Ohm (I=E/R). În ambele cazuri, ar trebui să obţinem acelaşi răspuns:</p>

<p><img src="../poze/10251.png" alt="formulă"/></p>

<h3>Analiza circuitului L/R</h3>
<p>Să analizăm acum circuitul L/R serie de la începutul capitolului:</p>

<p><img src="../poze/00332.png" alt="circuitul L/R serie"/></p>

<p>Cu o inductanţă de 1 Henry şi o rezistenţă serie de 1 ohm, constanta de timp a circuitului de faţă este de 1 secundă:</p>

<p><img src="../poze/10252.png" alt="formulă"/></p>

<h4>Analiza curentului</h4>
<p>Deoarece este un circuit inductiv, iar bobinele ştim că se opun variaţiei curentului, vom aplica formula universală folosind valorile iniţiale şi finale ale curentului. Dacă îniţial întrerupătorul este deschis, curentul este egal cu zero (valoarea iniţială). După o perioadă de timp infinită, curentul va atinge valoarea sa finală, egală cu raportul dintre tensiunea sursei şi rezistenţa totală din circuit (I=E/R), 15 A în acest caz.</p>

<p>Dacă vrem să aflăm valoarea curentului la 3.5 secunde după închiderea întrerupătorului, aplicăm formula universală asfel:</p>

<p><img src="../poze/10253.png" alt="formulă"/></p>

<p>Din moment ce valoarea iniţială a curentului a fost zero, valoare acestuia după 3.5 secunde este de 14.547 amperi.</p>

<h4>Analiza tensiunii</h4>
<p>Având doar un singur rezistor în circuit, calculăm mai întâi căderea de tensiune pe acesta pentru timpul de 3.5 s:</p>

<p><img src="../poze/10254.png" alt="formulă"/></p>

<p>Făcând diferenţa între tensiunea bateriei şi cea a rezistorului, căderea de tensiune pe bobină este de 0.453 pentru timpul de 3.5 s</p>

<p><img src="../poze/10255.png" alt="formulă"/></p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Formula universală a constantei de timp: 
		<p><img src="../poze/10245.png" alt="formul universală a constantei de timp"/></p>
	</li>
</ul>
Paşii pentru analiza circuitelor RC şi L/R:
<ol>
	<li>Determinarea constantei de timp a circuitului (RC sau L/R)</li>
	<li>Identificarea variabilei de calculat (tensiune pentr condensator, curentu pentru bobină)</li>
	<li>Determinarea valorilor iniţiale şi finale a variabilei alese</li>
	<li>Introducerea valorilor (iniţiale, finale, constantei de timp) în formula universală a constantei de timp şi rezolvarea acesteia (calcularea <i>variaţiei</i>)</li>
	<li>Dacă valoarea iniţială a fost zero, atunci valoarea actuală la timpul specificat este egală cu variaţia calculată cu ajutorul formulei universale. În caz contrar, valoarea actuală este suma dintre variaţia calculată şi valoarea iniţială a variabilei</li>
</ol>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>