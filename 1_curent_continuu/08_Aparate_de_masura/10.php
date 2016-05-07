<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuite în punte - puntea Wheatstone şi Thomson</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>10. Circuite în punte - puntea Wheatstone şi Thomson</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>Circuitele în punte se foloesc de un detector de nul pentru a compara două tensiuni. Principiul este asemănător unei balanţe de laborator ce compară două greutăţi pentru a indica egalitatea lor. Spre deosebire de circuitul „potenţiometric” utilizat pentru a măsura pur şi simplu o cădere de tensiune necunoscută, circuitele în punte pot fi folosite pentru a măsura o varietate de mărimi electrice, una din ele fiind rezistenţa.</p>

<h2>Puntea Wheatstone</h2>

<p>Circuitul în puncte standard, numit adeasea şi punte Wheatstone, arată astfel:</p>

<img src="../poze/00179.png" width="257" height="204" alt="punte Wheatstone"/>

<p>Atunci când căderea de tensiune între punctul 1 şi borna negativă a bateriei este egală cu tensiunea dintre punctul 2 şi borna negativă a bateriei, detectorul de nul va indica valoarea zero. În acest caz spunem că puntea este „echilibrată”. Starea de echilibru a balanţei este dependentă da raporturile R<sub>a</sub> / R<sub>b</sub> şi R<sub>1</sub> / R<sub>2</sub> şi este independentă de tensiunea de alimentare (a bateriei).</p>

<p>Pentru măsurarea rezistenţelor folosind puntea Wheatstone, rezistenţa necunoscută se conectează în locul rezistorului R<sub>a</sub> sau R<sub>b</sub>. Celelalte trei componente sunt dispozitive de precizie, a căror rezistenţă este cunoscută. Oricare din cei trei rezistori poate fi înlocuit sau ajustat, astfel încât puntea să fie echilibrată. Când se ajunge la echilibru, valoarea rezistorului necunoscut se determină din raporturile rezistenţelor cunoscute.</p>

<p>O cerinţă a acestui sistem de măsură constă în existenţa unor seturi de rezistori variabili de precizie. Din moment ce rezistenţa acestora este cunoscută, pot fi folosiţi ca şi referinţă. De exemplu, dacă folosim o punte Wheatstone pentru a măsura o rezistenţă necunoscută R<sub>x</sub>, va trebui să cunoaştem valorile exacte ale celorlalţi trei rezistori în starea de echilibru, dacă dorim să determinăm valoarea lui R<sub>x</sub>:</p>

<img src="../poze/00180.png" width="257" height="199" alt="punte Wheatstone"/>

<p>Ecuaţia de echilibru a punţii Wheatstone este următoarea:</p>

<img src="../poze/00180-1.png" width="120" height="65" alt="formulă"/>

<p>Fiecare din cei patru rezistori a unei punţi poartă numele de braţ. Rezistorul conectat în serie cu rezistenţa necunoscută R<sub>x</sub> (R<sub>a</sub> în figura de mai sus) poartă de obicei numele de reostat de reglaj. Din fericire, rezistenţele standard precise şi stabile nu sunt aşa de greu de realizat.</p>

<p>Punţile Wheatstone sunt considerate superioare circuitelor de măsură standard prezentate în secţiunea precedentă din punct de vedere al măsurării rezistenţelor. Spre deosebire de acele circuite, punţile Wheatstone sunt liniare şi extrem de precise.</p>

<p>Având la dispoziţie rezistenţe standard de o precizie ridicată şi un detector de nul cu o sensibilitate suficientă, putem măsura rezistenţe cu o precizie de cel puţin +/- 0,05 %. Această metodă este preferată şi indicată pentru măsurarea rezistenţelor de laborator datorită preciziei ridicate.</p>

<p>Există multe variaţii a circuitului în punte Wheatstone de bază. Majoritatea circuitelor în punte de curent continuu sunt folosite pentru măsurarea rezistenţei. Dar circuitele alimentate în curent alternativ pot fi folosite pentru a măsura diferite mărimi electrice precum inductanţă, capapacitate şi frecvenţă.</p>

<h2>Puntea Thomson (puntea Kelvin dublă)</h2>

<p>O variantă interesantă a punţii Wheatstone o reprezintă puntea dublă Kelvin, cunoscută şi sub numele de punte Thomson. Aceast circuit este utilizat pentru măsurarea rezistenţelor extrem de mici (sub 1/10 ohmi):</p>

<img src="../poze/00419.png" width="250" height="238" alt="punte Thomson"/>

<p>Rezistorii de valoare mică sunt reprezentaţi prin simboluri cu linie îngroşată, la fel şi conductorii (prin care trece un curent mare) la care sunt conectaţi. Această punte „ciudată” poate fi cel mai bine înţeleasă dacă reluăm puntea Wheatstone standard pentru măsurarea rezistenţelor mici, pentru a ajunge apoi, pas cu pas (datorită problemelor întâmpinate), la forma finală a punţii Thomson.</p>

<p>Dacă am dori să folosim o punte Wheatstone standard pentru a măsura rezistenţe de o valoare foarte mica, circuitul ar artăta astfel:</p>

<img src="../poze/00420.png" width="250" height="232" alt="punte Wheatstone pentru măsurarea rezistenţelor mici"/>

<p>Când detectorul de nul indică o tensiune zero, ştim că puntea este echilibrată iar raporturile R<sub>a</sub> / R<sub>b</sub> şi R<sub>M</sub> / R<sub>N</sub> sunt egale. Cunoscând valorile rezistorilor R<sub>a</sub>, R<sub>M</sub> şi R<sub>N</sub> putem determina R<sub>x</sub>...aproximativ.</p>

<p>Avem totuşi o problemă: contactele şi firele conductoare dintre R<sub>a</sub> şi R<sub>x</sub> prezintă şi ele o anumită rezistenţă. Aceste rezistenţe parazite pot fi substanţiale în comparaţie cu rezistenţele mici R<sub>a</sub> şi R<sub>x</sub>. De asemenea, căderea de tensiune pe aceste rezistenţe parazite va fi suficient de mare, ducând la un curent mare prin ele. Toate aceste lucruri vor afecta indicaţia detectorului de nul, şi prin urmare, starea de echilibru a punţii:</p>

<img src="../poze/00421.png" width="250" height="234" alt="punte Wheatstone pentru măsurarea rezistenţelor mici"/>

<p>Din moment ce nu dorim măsurarea acestor rezistenţe parazite, ci doar a rezistenţei R<sub>x</sub>, trebuie găsita o modalitate de corectare a detectorului de nul astfel încât acesta să nu fie influenţat de căderile de tensiune din lungul acestor rezistenţe parazite. În cazul în care conectăm detectorul de nul şi braţele R<sub>M</sub> / R<sub>N</sub> direct la bornele rezistorilor R<sub>a</sub> şi R<sub>x</sub>, ne vom apropia de o soluţia mai practică:</p>

<img src="../poze/00422.png" width="250" height="234" alt="punte Wheatstone pentru măsurarea rezistenţelor mici"/>

<p>În această configuratie, cele două căderi de tensiune E<sub>fir</sub> din partea de sus şi de jos nu au niciun efect asupra detectorului de nul şi nu vor influenţa precizia măsurătorii lui R<sub>x</sub>. Totuşi, celelalte două căderi de tensiune E<sub>fir</sub> vor cauza probleme.</p>

<p>Cunoscând faptul că partea stângă a detectorului de nul trebuie conectată la cele două borne ale rezistorilor R<sub>a</sub> şi R<sub>x</sub> pentru evitarea introducerii căderilor de tensiune E<sub>fir</sub> în bucla detectorului de nul, şi că orice conductor ce face legătura cu cele două terminale va conduce el însuşi un curent substanţial (ce va duce la căderi de tensiune parazite adiţionale), singura soluţie în această situaţie este realizarea unui drum puternic rezistiv între partea de jos a rezistorului R<sub>a</sub> şi partea de sus a rezistorului R<sub>x</sub>:</p>

<img src="../poze/00423.png" width="250" height="232" alt="punte Thomson (punte Kelvin dublă)"/>

<p>Putem controla căderile de tensiune parazite între R<sub>a</sub> şi R<sub>x</sub> prin dimensionarea celor doi rezistori noi, astfel încât raportul celui de sus cu cel de jos să fie egal cu raportul celor două braţe de pe partea celalată a detectorului de nul. Acesta este şi motivul pentru care aceşti rezistori au fost denumiţi R<sub>m</sub> şi R<sub>n</sub> în schema iniţială a puncţii Thomson: pentru a scoate în evidenţa proporţionalitatea lor cu rezistorii R<sub>M</sub> şi R<sub>N</sub>:</p>

<img src="../poze/00419.png" width="250" height="238" alt="punte Thomson"/>

<p>Raportul R<sub>m</sub> / R<sub>n</sub> fiind egal cu raportul R<sub>M</sub> / R<sub>N</sub>, braţul R<sub>a</sub> (reostatul) este ajustat până în momentul în care detectorul de nul indică echilibrul punţii. În acest moment putem spune că R<sub>a</sub> / R<sub>x</sub> este egal cu R<sub>M</sub> / R<sub>N</sub>. Putem calcula R<sub>x</sub> cu următoarea ecuaţie:</p>

<img src="../poze/10270.png" width="122" height="55" alt="formulă"/>

<p>De fapt, ecuaţia de echilibru a punţii Thomson este următoarea:</p>

<img src="../poze/10271.png" width="475" height="55" alt="formulă"/>

<p>unde R<sub>fir</sub> este rezistenţa firului conductor gros dintre rezistenţa standard de jos R<sub>a</sub> şi rezistenţa de test R<sub>x</sub>.</p>

<p>Atâta timp cât raportul dintre R<sub>M</sub> şi R<sub>N</sub> este egal cu raportul dintre R<sub>m</sub> şi R<sub>n</sub>, ecuaţia de echilibru nu este mai complexă decât cea a punţii Wheatstone normale. R<sub>x</sub> / R<sub>a</sub> va fi egal cu R<sub>N</sub> / R<sub>M</sub>, deoarece ultimul termen al ecuaţiei va fi zero, anulând efectele tuturor rezistorilor cu excepţia lui R<sub>x</sub>, R<sub>a</sub>, R<sub>M</sub> şi R<sub>N</sub>.</p>

<h2>Observaţii asupra punţii Thomson</h2>

<p>În multe cazuri, R<sub>M</sub>=R<sub>m</sub> şi R<sub>N</sub> = R<sub>n</sub>. Totuşi, cu cât rezistenţele R<sub>m</sub> şi R<sub>n</sub> sunt mai mici, cu atât detectorul de nul va fi mai sensibil, deoarece rezistenţa conectată în serie cu el va fi mai mică. Creşterea sensibilităţii detectorului este un lucru bun, deoarece permite detectarea unor dezechilibre mult mai mici, şi prin urmare, atingerea unei situaţii de echilibru mult mai precise. Din această cauză, unele punţi Thomson folosesc rezistori R<sub>m</sub> şi R<sub>n</sub> a căror valori sunt spre 1/100 din raportul braţelor opuse (R<sub>M</sub> şi R<sub>N</sub>).</p>

<p>Din păcate totuşi, cu cât valorile rezistorilor R<sub>m</sub> şi R<sub>n</sub>, cu atât vor conduce un curent mai mare, ceea ce va duce la creşterea efectului oricăror rezistenţe prezente la joncţiunea dintre acestea şi rezistorii R<sub>a</sub> şi R<sub>x</sub>. După cum se poate vedea, instrumentele de precizie înalta necesită luarea în considerare a tuturor factorilor susceptibili de a produce erori de măsură. De cele mai multe ori, cea mai bună soluţie reprezintă un compromis între două sau mai multe tipuri diferite de erori.</p>

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