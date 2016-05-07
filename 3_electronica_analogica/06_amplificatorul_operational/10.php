<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuite de derivare şi integrare</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>11. Circuite de derivare şi integrare</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Prin introducerea reactanţei electrice în buclele de reacţie ale amplificatoarelor operaţionale, ieşirea acestora va depinde de variaţie tensiunii de intrare cu <i>timpul</i>. Folosind nomenclatura analizei matematice, <i>integratorul</i> produce o tensiune de ieşire proporţională cu produsul dintre tensiunea de intrare şi timp; <i>derivatorul</i> produce o tensiune de ieşire proporţională cu variaţia tensiunii de intrare (dv / dt).</p>

<p>Putem construi un circuit cu AO ce măsoară variaţia de tensiune prin determinarea curentului printr-un condensator; tensiunea de ieşire va fi proporţională cu valoarea acelui curent:</p>

<h2>Circuit de derivare</h2>

<p><img src="/sites/default/files/electronica_analogica/03048.png" alt="circuit de derivare"/></p>

<p>Partea dreaptă a condensatorului este menţinută constantă la o tensiune de 0 V, datorită efectului „masei virtuale”. Prin urmare, curentul „prin” condensator se datorează doar <i>variaţiei</i> tensiunii de intrare. O tensiune constantă nu va duce la apariţia unui curent prin C, ci doar o tensiune de intrare <i>variabilă</i>.</p>

<p>Curentul condensatorului va trece şi prin rezistorul de reacţie, producând o cădere de tensiune la bornele sale, tensiune ce este egală cu tensiunea de ieşire. O variaţie liniară şi pozitivă a tensiunii de intrare va rezulta într-o tensiune negativă la ieşirea AO, şi invers. Această inversare a polarităţii se datorează faptului că semnalul de intrare este trimis la intrarea inversoare a AO, iar acesta se comportă precum un amplificator inversor. Cu cât variaţia tensiunii de la intrare este mai mare (negativă sau pozitivă), cu atât tensiune de la ieşire va fi mai mare.</p>

<p>Formula pentru determinarea tensiunii de ieşire a derivatorului este următoarea:</p>

<p><img src="/sites/default/files/electronica_analogica/13012.png" alt="formula pentru determinarea tensiunii de ieşire a derivatorului"/></p>

<p>Pe lângă utilizarea acestor circuite ca şi funcţie matematică de derivare în calculatoarele numerice, acestea se folosesc ca şi indicatoare de variaţie a mărimilor în instrumentaţie. O asfel de aplicatie include monitorizarea (sau controlul) ratei de variaţie a temperaturii într-un furnal, unde o creştere sau scădere prea bruscă a temperaturii poate crea probleme. Tensiunea de c.c. produsă de circuitul integrator poate fi folosită pentru acţionarea unui comparator, ce ar putea activa o alarmă sau ar putea controla rata de variaţie, dacă aceasta depăşeşte o anumită valoare prestabilită.</p>

<h2>Circuit de integrare</h2>

<p>În acest caz, AO va genera la ieşire o tensiune proporţională cu amplitudinea şi durata de timp în care semnalul a deviat de la valoarea de 0 V. Altfel spus, un semnal de intrare constat va genera o anumită <i>variaţie</i> a tensiunii de ieşire: inversul derivatorului. Pentru a realiza acest lucru, trebuie doar să inversăm locul rezistorului cu cel al condensatorului din circuitul precedent:</p>

<p><img src="/sites/default/files/electronica_analogica/03048.png" alt="circuit de integrare"/></p>

<p>Ca şi în cazul precedent, AO asigură faptul că intrarea inversoare va fi menţinută la o tensiune de 0 V (masa virtuală). Dacă tensiunea de intrare este exact 0 V, nu va exista curent prin rezistor, condensatorul nu se va încărca, şi prin urmare, tensiunea de ieşire nu se va modifica. Nu putem garanta valoarea tensiunii de la ieşire faţă de masă în această situaţie, dar putem afirma că aceasta va fi <i>constantă</i>.</p>

<p>Totuşim, dacă aplicăm o tensiune constantă şi pozitivă la intrare, tensiunea de ieşire va scădea spre negativ, într-un mod liniar, în încercarea de a produce o variaţia de tensiune pe condensator necesară menţinerii curentului stabilit datorită diferenţei de tensiune la bornele rezistorului. Invers, o tensiune constantă şi negativă va duce la apariţie unei variaţii de tensiune liniară şi pozitivă la ieşire. Rata de variaţie a tensiunii de ieşire este proporţională cu valoarea tensiunii de intrare.</p>

<p>Formula de determinare a tensiunii de ieşire a integratorului este următoarea:</p>

<p><img src="/sites/default/files/electronica_analogica/13013.png" alt="formula de calcul a tensiunii de ieşire a integratorului"/></p>

<div class="formula">
<p>unde,</p>
<p>c = tensiunea de ieşire iniţială (t = 0)</p>
</div>

<p>O aplicaţie a acestui circuit ar fi menţinerea expunerii totale la radiaţie, sau dozajul, în cazul în care tensiunea de intrare ar fi conectată la un detector electronic de radiaţie. Un circuit integrator trebuie să ia în calcul atât intensitatea radiaţiei (amplitudinea tensiunii de intrare) cât şi timpul de expunere, generând o tensiune de ieşire ce reprezintă expunerea totală suferita.</p>

<p>Circuitul de integrare poate fi folosit şi pentru integrarea unui semnal ce reprezintă curgerea unui lichid, producând la ieşire un semnal ce reprezintă cantitatea totală de lichid ce a trecut printr-un anumit punct, într-o anumită perioadă de timp.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Un circuit <i>derivator</i> produce o tensiune constantă la ieşire pentru o tensiune variabilă la intrare</li>
	<li>Un circuit <i>integrator</i> produce o tensiune variabilă la ieşire pentru o tensiune de intrare constantă</li>
	<li>Ambele tipuri de dispozitive se construiesc uşor, folosind componente reactive (de obicei condensatoare şi nu bobine) în bucla de reacţia a circuitului amplificatorului operational
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>