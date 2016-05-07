<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Reacţia prin divizor de tensiune</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Reacţia prin divizor de tensiune</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Dacă adăugăm un divizor de tensiune la reacţia negativă, asfel încât doar o <i>fracţiune</i> din tensiunea de ieşire este reintrodusă la intrarea inversoare, şi nu întreaga valoare, tensiunea de ieşire va fi un <i>multiplu</i> al tensiunii de intrare. Din nou, pentru simplitate, conexiunile alimentării în c.c. a AO au fost omise. Toate tensiunile au ca şi referinţă punctul de masă (0 V).</p>

<h2>Sursa de semnal conectată la intrarea neinversoare (+)</h2>

<p><img src="../poze/03037.png" alt="amplificator operaţional cu reacţie negativă divizată"/></p>

<p>Dacă R<sub>1</sub> şi R<sub>2</sub> sunt egale, iar tensiunea de intrare este de 6 V, AO va genera o cădere de tensiune necesară pentru menţinerea unei tensiuni de 6 V pe R<sub>1</sub> (asfel încât tensiunea la intrarea inversoare să fie egală cu 6 V, iar diferenţa de tensiune dintre cele două intrări să fie egală cu zero). Cu un raport al divizorului de tensiune R<sub>1</sub>--R<sub>2</sub> de 2:1, acest lucru va necesita o tensiune de 12 V la ieşirea AO.</p>

<p>O altă metodă de analiză a acestui circuit constă în calcularea amplitudinii şi direcţiei curentului prin R<sub>1</sub>, cunoscând tensiunea pe fiecare parte (şi prin urmare pe R<sub>1</sub>), şi rezistenţa rezistorului R<sub>1</sub>. Din moment ce partea stângă a rezistorului R<sub>1</sub> este conectată la masă (0 V), iar partea dreaptă are un potenţial de 6 V (datorită reacţiei negative ce menţine tensiune acelui punct egală cu V<sub>intrare</sub>), putem vedea că avem 6 V la bornele lui R<sub>1</sub>. Acest lucru înseamnă un curent de 6 mA prin R<sub>1</sub>, de la stânga la dreapta. Deoarece ştim că ambele intrări ale AO au impedanţe foarte mari, putem afirma că, curentul prin acestea este zero, şi nu se comportă precum un divizor de curent în punctul de conectare cu divizorul de tensiune. Cu alte cuvinte, putem considera că R<sub>1</sub> şi R<sub>2</sub> sunt conectate în serie: toţi electronii ce trec prin R<sub>1</sub> ajung în R<sub>2</sub>. Cunoscând curentul prin R<sub>2</sub> şi rezistenţa lui R<sub>2</sub>, putem calcula căderea de tensiune la bornele acestui rezistor (6 V) şi polaritatea acestuia. Calculând tensiunea totală dintre punctul de masă (0 V) la dreapta rezistorului R<sub>2</sub>, ajungem la o valoarea de 12 V.</p>

<p>Dacă ne uităm pe desenul precedent, ne putem întreba „unde anume se duce curentul de 6 mA”. Figura de mai sus nu prezintă întregul drum, dar în realitate, acest curent vine de la sursa de putere de c.c., trece prin masă, R<sub>1</sub>, R<sub>2</sub>, prin ieşirea AO şi înapoi la borna pozitivă a sursei. Utilizând modelul AO - potenţiometru/detector de nul, calea curentului arată asfel:</p>

<p><img src="../poze/03233.png" alt="modelul amplificator - potenţiometru/detector de nul; calea curentului prin circuit"/></p>

<p>Sursa de semnal de 6 V nu trebuie să furnizeze niciun curent în circuit: aceasta doar comandă amplificatorului operaţional echilibrul de tensiune dintre cele două intrări, iar ca urmare a acestui fapt, AO produce la ieşire o tensiune de două ori mai mare decât tensiunea de semnal datorită reacţiei divizate a celor doi rezistori de 1 kΩ.</p>

<p>Putem modifica factorul de amplificare în tensiune al acestui circuit, prin simpla modificare a valorilor celor doi rezistori. Amplificarea poate fi calculată asfel:</p>

<p><img src="../poze/13004.png" alt="formula de calcul a amplificării în tensiune al amplificatorului operaţional cu reacţie negativă divizată"/></p>

<p>Se poate observa că amplificarea unui asfel de amplificator nu poate să scadă sub valoarea 1. Dacă ar fi să coborâm valoarea lui R<sub>2</sub> la zero ohmi, circuitul rezultat ar fi identic cu repetorul de tensiune, unde ieşirea este conectată direct la intrarea inversoare. Această amplificare poate fi mărită mult peste 1, prin creşterea valorii rezistorului R<sub>2</sub> faţa de R<sub>1</sub>.</p>

<p>Polaritatea tensiunii de ieşire este aceeiaşi cu cea a tensiunii de intrare. O tensiune pozitivă de intrare înseamnă o tensiune pozitivă de ieşire, şi invers (faţă de masă). Din acest motiv, acest circuitu poartă numele de <i>amplificator neinversor</i>.</p>

<h2>Sursa de semnal conectată la intrarea inversoare (-)</h2>

<p>Să reluăm circuitul de mai sus, dar de data aceasta să aplicăm tensiunea de intrare în altă parte:</p>

<p><img src="../poze/03038.png" alt="amplificator operaţional cu reacţie negativă divizată"/></p>

<p>Prin conectarea la masă a intrării neinversoare, reacţia negativă de la ieşire va încerca să menţină tensiunea intrării inversoare la 0 V. Din acest motiv, intrarea inversoare, în acest circuit, poartă numele de <i>masă virtuală</i> (având un potenţial de 0 V, dar nefiind conectată direct la masă). Tensiunea de intrare este aplicată de această dată din stânga divizorului de tensiune R<sub>1</sub>--R<sub>2</sub> (= 1 kΩ). Prin urmare, tensiune de ieşire trebuie să ia valoarea de -6 V pentru echilibrarea punctului de mijloc la potenţialul masei (0 V). Folosind metodele amplificatorului neinversor, putem analiza funcţionarea circuitului prin determinarea amplitudinilor şi direcţiilor curenţilor.</p>

<p>Din nou, putem modifica amplficarea în tensiune a circuitului prin modificarea valorilor rezistorilor R<sub>1</sub> şi R<sub>2</sub>. Amplificarea poate fi calculată cu următoarea formulă:</p>

<p><img src="../poze/13005.png" alt="formula de calcul a amplificării în tensiune al amplificatorului operaţional cu reacţie negativă divizată"/></p>

<p>De această dată, amplificarea în tensiune a circuitului <i>poate</i> fi sub 1, depinzând doar de raportul valorilor celor doi rezistori. Polaritatea ieşirii este tot timpul opusă polaritătii tensiunii de intrare. O tensiune de intrare pozitivă înseamnă o tensiune de ieşire negativă, şi invers (faţă de pământ). Din acest motiv, acest circuit este cunoscut sub numele de <i>amplificator inversor</i>. Semnul „-” din formula de mai sus scoate în evidenţă această inversare a polarităţilor.</p>

<p>Asfel de circuite studiate mai sus sunt folosite pentru efectuarea operaţiilor matematice de înmulţire şi împărţire în circuitele analogice ale calculatoarelor.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Prin conectarea reacţiei negative a unui AO prin intermediul unui divizor de tensiune, tensiune de ieşire devine un multiplu al tensiunii de intrare</li>
	<li>Un AO cu reacţie negativă, a cărui semnal de intrare este conectat la intrarea noninversoare (+), poartă numele de <i>amplificator neinversor</i>. Polaritatea tensiunii de ieşire va fi aceeiaşi cu a tensiunii de intrare. Amplificarea în tensiune a circuitului este dată de următoarea formula:<br/> A<sub>V</sub> = (R<sub>2</sub> / R<sub>1</sub>) + 1</li>
	<li>Un AO cu reacţie negativă, a cărui semnal de intrare este conectat în partea stângă a divizorului de tensiune, iar intrare neinversoare (+) este conectată la masă, poartă numele de <i>amplificator inversor</i>. Polaritatea tensiunii de ieşire va fi opusă polarităţii tensiunii de intrare. Amplificarea în tensiune a circuitului este dată de următoarea formulă: A<sub>V</sub> = -R<sub>2</sub> / R<sub>1</sub></li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>