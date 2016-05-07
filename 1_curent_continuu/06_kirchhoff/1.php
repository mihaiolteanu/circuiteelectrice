<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuite divizoare de tensiune. Potenţiometrul</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Circuite divizoare de tensiune. Potenţiometrul</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Să analizăm un circuit electric serie simplu, determinând căderile de tensiune pe fiecare rezistor:</p>

<img src="../poze/00106.png" alt="circuit serie"/>

<p>Vom introducele valorile cunoscute precum şi cele ce le vom afla prin aplicarea formulelor într-un tabel ce cuprinde tensiunea (E), curentul (I) şi rezistenţa (R), precum şi suma acestora în întreg circuitul. Valorile sunt exprimate in volţi (V), amperi (A), respectiv ohmi (Ω).</p>

<img src="../poze/10096.png" alt="tabel"/>

<p>Folosind valorile individuale ale rezistenţelor, putem determina valoarea rezistenţei totale din circuit, cunoscând că valoarea totală este suma rezistenţelor individuale în cazul circuitelor serie:</p>

<img src="../poze/10097.png" alt="tabel"/>

<p>De aici, putem folosi legea lui Ohm (I=E/R) pentru determinarea valorii totale a curentului, ce va fi aceeiaşi cu valoarea curentului prin fiecare rezistor, curenţii fiind egali în toate componentele într-un circuit serie:</p>

<img src="../poze/10098.png" alt="tabel"/>

<p>Cunoscând valoarea curentului (2 mA), putem folosi legea lui Ohm (E=IR) pentru calcularea căderilor de tensiune pe fiecare rezistor în parte:</p>

<img src="../poze/10099.png" alt="tabel"/>

<p>Putem observa că valoarea căderilor de tensiune pe fiecare rezistor este proporţională cu rezistenţa, datorită faptului că valoarea curentului este aceeiaşi prin toţi rezistorii. De asemenea, căderea de tensiune pe rezistorul R<sub>2</sub> este dublă faţă de căderea de tensiunea pe rezistorul R<sub>1</sub>, la fel precum rezistenţa R<sub>2</sub> este dublă faţă de rezistenţa R<sub>1</sub>.</p>

<p>Dacă ar fi să modificăm valoarea totală a tensiunii din circuit, vom vedea că această proporţionalitate a căderilor de tensiune rămâne constantă:</p>

<img src="../poze/10100.png" alt="tabel"/>

<p>Căderea de tensiune pe R<sub>2</sub> este în continuare exact dublul căderii de pe R<sub>1</sub>, în ciuda modificării tensiunii sursei. Proporţionalitatea căderilor de tensiune este strict în funcţie de valoarea rezistenţelor.</p>

<p>Devin aparent faptul că pe fiecare rezistor, căderea de tensiunea este o fracţiune fixă din valoarea tensiunii sursei. Tensiunea pe R<sub>1</sub> de exemplu, era 10 volţi atunci când valoarea tensiunii sursei era de 45 de volţi. Atunci când am crescut tensiunea bateriei până la 180 de volţi (de 4 ori mai mult), căderea de tensiune pe R<sub>1</sub> a crescut de asemenea de 4 ori (de la 10 la 40 de volţi). <i>Raportul</i> dintre căderea de tensiune pe R<sub>1</sub> şi căderea de tensiune totală a rămas însă aceeiaşi:</p>

<img src="../poze/10101.png" alt="formula"/>

<p>De asemenea, niciunul dintre raporturile căderilor de tensiune cu tensiunea sursei nu s-au schimbat:</p>

<img src="../poze/10102.png" alt="formula"/>

<p>Din această cauză, un circuit serie poartă adesea numele de <i>divizor de tensiune</i>, pentru abilitatea sa de divizare a tensiunii totale în fracţii proporţionale cu o valoare constantă. Matematic, aceasta se poate exprima asfel:</p>

<img src="../poze/10103.png" alt="formula"/>

<p>În cadrul unui circuit divizor de tensiune, raportul dintre rezistenţele individuale şi cea totală este acelaşi ca şi raportul dintre căderile de tensiune individuale şi tensiunea totală a sursei. Această formulă poartă denumirea de <i>formula divizorului de tensiune</i>, şi este o metodă mai rapidă de aflare a căderilor de tensiune într-un circuit serie faţa de folosirea repetată a legii lui Ohm</p>

<p>Folosind această formulă, putem re-analiza circuitul de mai sus în mai puţini paşi:</p>

<img src="../poze/00106.png" alt="circuit serie"/>

<p><img src="../poze/10104.png" alt="tabel"/></p>

<p>Circuitele divizoare de tensiune se folosesc acolo unde o combinaţie specifică de rezistori serie este folosită pentru a „diviza” tensiunea în cantiăţi precise (în cazul aparatelor de măsură, de exemplu).</p>

<p><img src="../poze/00107.png" alt="circuit divizor de tensiune"/></p>

<p>Unul dintre dispozitivele folosite frecvent ca şi divizor de tensiune este <i>potenţiometrul</i>, ce este de fapt un rezistor cu un element mobil poziţionat cu ajutorul unei manete. Elementul mobil, denumit şi <i>perie</i>, face contact cu un material rezistiv dezizolat în oricare punct selectat manual:</p>

<p><img src="../poze/00108.png" alt="potenţiometru"/></p>

<p>Pe măsură ce contactul periei este se apropie de terminalul 1 şi se îndepărtează de terminalul 2, rezistenţa spre terminalul 1 scade iar cea către terminalul 2 creşte. Dacă apropiem contactul de terminalul 2, vom obţine efectul contrar. Rezistenţa între cele două puncte (1 şi 2) este constantă indiferent de poziţia contactului periei.</p>

<p><img src="../poze/00109.png" alt="potenţiometru"/></p>

<p>Mai jos sunt ilustrate două tipuri de potenţiometre, rotative şi liniare:</p>

<p><img src="../poze/00483.png" alt="construcţia potenţiometrului rotativ"/></p>
<p><img src="../poze/00484.png" alt="construcţia potenţiometrului liniar"/></p>

<p>Pozele de mai jos reprezintă un potenţiometru rotativ real cu peria vizizibilă pentru o mai bună vizualizare. Axul ce deplasează peria este rotit în acest caz în sensul acelor de ceasornic aproape la maxim, asfel încât aproape atinge terminalul din stânga:</p>

<p><img src="../poze/50031.jpg" alt="potenţiometru rotativ"/></p>

<p>În acest caz, peria este rotită în sensul învers acelor de ceasornic, asfel încât aceasta se afla în cealaltă extremă:</p>

<p><img src="../poze/50032.jpg" alt="potenţiometru rotativ"/></p>

<p>Dacă aplicăm o tensiune constantă între cei doi terminali de la extremităţi, poziţia periei va „lua” doar o fracţiune din tensiunea aplicată, măsurată între contactul periei şi oricare dintre ceilalţi doi terminali. Valoarea acestei fracţii depinde în întregime de poziţia fizică a periei:</p>

<p><img src="../poze/00363.png" alt="potenţiometru ca şi divizor de tensiune variabilă"/></p>

<p>Ca şi în cazul unui divizor de tensiune fix, <i>coeficientul de diviziune</i> este strict o funcţie de rezistenţă şi nu depinde de valoarea tensiunii aplicate. Cu alte cuvinte, dacă maneta potenţiometrului este deplasată la exact jumătatea distanţei dintre cei doi terminali externi, căderea de tensiune între perie şi oricare dintre cei doi terminali este exact jumătate (1/2) din valoarea tensiunii aplicate, indiferent de valoarea aceteia sau de rezistenţa totală a potenţiometrului. Cu alte cuvinte, un potenţiometru acţionează precum un divizor variabil de tensiune, unde coeficientul de diviziune este stabilit de poziţia periei.</p>

<p>Această aplicaţie a potenţiometrului este una foarte folositoare pentru obţinerea unei tensiuni variabile cu ajutorul unei surse fixe de tensiune precum bateria. Dacă circuitul ce-l construim necesită o anumită valoare a tensiunii mai mică decât valoarea tensiunii la bornele bateriei, putem conecta terminalii externi ai potenţiometrului la baterie iar sarcina (bec, de exemplu) o conectăm între terminalul periei şi oricare dintre cei doi terminali externi:</p>

<p><img src="../poze/00364.png" alt="ajustarea tensiunii pentru un circuit ce necesită o tensiune mai mică decât cea existentă la bornele bateriei"/></p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Circuitele serie proporţionează, sau <i>divid</i>, cantitatea totală de tensiune pe fiecare component în parte, aceaste proporţii depinzând strict de rezistori: E<sub>Rn</sub> = E<sub>Total</sub> (R<sub>n</sub> / R<sub>Total</sub>).</li>
	<li>Un potenţiometru este o componentă rezistivă variabilă cu trei puncte de conectare, folosit frecvent pe post de divizor de tensiune ajustabil.</li>

</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>