<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Introducere</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Introducere</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Circuitele studiate până în acest moment au fost alimentate integral într-o singură frecvenţă sinusoidală. În multe aplicaţii însă, frecvenţa unică este mai degraba excepţia decât regula. De multe ori întâlnim circuite unde frecvenţa tensiunii de alimentare este compusă din mai multe frecvenţe individuale luate împreună. Pe lângă asta, formele de undă ale tensiunii pot avea şi alte forme, nu doar sinusoidale, caz în care ele intră in categoria formelor de undă <i>ne-sinusoidale</i>.</p>

<p>Întâlnim de asemenea cazuri în care semnalul de curent continuu este combinat cu cel de curent alternativ: forma de undă este suprapusă peste un semnal de curent continuu. Rezultatul unei asfel de combinaţii este un semnal variabil în intensitate (amplitudine) dar nu şi în polaritate, sau polaritatea sa variază asimetric. Indiferent de caz, atunci când avem mai multe frecvenţe în acelaşi circuit, analiza acestuia este mult mai complexă decât ceea ce am văzut până acum.</p>

<h3>Cuplajele inductive şi capacitive accidentale</h3>

<p>Unele situaţii de semnale de curent sau tensiune cu frecvenţe multiple sunt create accidental, fiind rezultatul conexiunilor accidentale dintre circuite, denumite <i>cuplaje</i>, cauzate de capacităţile sau inductanţele parazite dintre conductorii acelor circuite. Un exemplu clasic de cuplaj este întâlnit des în industrie, unde o reţea de curent continuu este plasată în apropierea unei reţele de curent alternativ. Prezenţă tensiunilor înalte şi a curenţilor alternativi pot duce la modificarea comportamentului reţelei de curent cotinuu. Capacitatea parazită formată între izolaţiile celor două reţele poate induce tensiune (faţă de împământare) de la cea de curent alternativ la cea de curent continuu, iar inductanţele parazite formate între cele două lungimi ale conductorilor pot duce la situaţia în care curenţii primei reţele să inducă tensiune pe cale electromagnetică în conductorii celei de a doua reţele. Rezultatul este o combinaţie de semnale de curent continuu şi alternativ. Următoarea schemă prezintă modul în care sursa de zgomot de curent alternativ se poate cupla la circuitul de curent alternativ prin inductanţa (M<sub>p</sub>) şi capacitatea parazită (C<sub>p</sub>):</p>

#+CAPTION: cuplaj inductiv şi cuplaj capacitiv între un circuit de curent continuu şi unul de curent alternativ
[[../poze/02302.png]]

<h3>Folosirea cablurilor răsucite şi ecranate</h3>

<p>Atunci când tensiunile alternative parazite se mixează cu semnalele de curent continuu, rezultatele sunt de obicei nedorite. Din acest motiv, reţeaua de alimentare cu energie electrică (curent alternativ, puteri mari) trebuie să fie neapărat separată de reţelele de semnal (curent continuu, puteri mici), iar semnalele transmise prin intermediul cablurilor răsucite (twisted) formate din doi conductori, şi nu doar printr-un singur fir şi conexiunea acestuia la împământare:</p>

#+CAPTION: cuplaj inductiv şi cuplaj capacitiv între un circuit de curent continuu şi unul de curent alternativ; folosirea cablurilor răsucite şi ecranate pentru reducerea efectelor cuplajelor
[[../poze/02303.png]]

<p>Ecranajul cablului - o folie metalică înfăşurată în jurul celor doi conductori izolaţi - este conectat la împământare, şi izolează ambii conductori faţă de cuplajul electrostatic (capacitiv), blocând orice câmp electric exterior. Răsucirea celor doi conductori, unul lângă celălalt, anulează orice cuplaj electromagnetic (inductanţă mutuală), întrucât orice tensiune parazită indusă va fi aproximativ egală în amplitudine dar defazată cu 180<sup>o</sup> (opoziţie de fază) în ambii conductori, cele două semnale anulându-se practic între ele, rezultând o diferenţă de potenţial aproape nulă.</p>

<p>Cuplajul poate să apară şi între două seturi de conductori de curent alternativ, caz în care ambele semnale vor purta o combinaţie de frecvenţe:</p>

#+CAPTION: cuplaj inductiv şi cuplaj capacitiv între două circuite de curent alternativ
[[../poze/02304.png]]

<h3>Alte moduri de generare a frecvenţelor multiple</h3>

<p>Cuplajul este doar unul dintre exemplele de combinare a frecvenţelor, fiind accidental şi de nedorit. În alte cazuri însă, semnalele cu frecvenţe multiple sunt rezultatul proiectării voite a circuitului sau reprezintă o calitate intrinsecă a semnalului analizat. Cel mai uşor mod de producere a semnalelor cu frecvenţe multipe este conectarea surselor de tensiune de frecvenţe diferite în serie:</p>

#+CAPTION: modul de generare a semnalelor cu frecvenţe multiple
[[../poze/02109.png]]

<p>În unele cazuri, frecvenţa mixată a semnalului este produsă de o singură sursă de tensiune. Un exemplu este microfonul, un traductor ce transformă presiunea aerului datorată frecvenţelor audio într-o tensiune a cărei formă de undă corespunde acestor frecvenţe ne-sinusoidale. Foarte puţine sunete naturale sunt formate dintr-o vibraţie sinusoidală pură, ci, majoritatea sunt compuse dintr-o serie de vibraţii la frecvenţe şi amplitudini diferite combinate într-un singur semnal final.</p>

<h3>Sunetele muzicale</h3>

<p>Acordurile muzicale sunt produse printr-un amestec de frecvenţe cu frecvenţă de bază, fiecare dintre acestea fiind un multiplu al frecvenţei <i>fundamentale</i>. Chiar şi o simplă notă de pian este compusă dintr-o frecvenţă predominantă amestecată cu alte frecvenţe (<i>armonici</i>, fiecare dintre acestea fiind un multiplu al primei (fundamentala). Pentru ilustrare, putem considera următorul tabel, în care frecvenţa fundamentală este de 1.000 Hz (cifră luată la întâmplare):</p>

<table border="1">
<tr>
<th>Frecvenţa (Hz)</th><th>Termen</th>
</tr>
<tr>
<td>1000</td><td>armonica 1, sau fundamentala</td>
</tr>
<tr>
<td>2000</td><td>armonica a 2-a</td>
</tr>
<tr>
<td>3000</td><td>armonica a 3-a</td>
</tr>
<tr>
<td>4000</td><td>armonica a 4-a</td>
</tr>
<tr>
<td>5000</td><td>armonica a 5-a</td>
</tr>
<tr>
<td>6000</td><td>armonica a 6-a</td>
</tr>
<tr>
<td>7000</td><td>armonica a 7-a</td>
</tr>
</table>

<p>Unele instrumente muzicale nu pot produce anumite tipuri de frecvenţe armonice. De exemplu, un „instrument” realizat dintr-un tub deschis la un capăţ şi închis la celălalt (precum o sticlă) nu va putea produce armonice pare. Un asfel de instrument, construit asfel încât să producă o frecvenţă fundamentală de 1.000 Hz, va produce şi armonici de 3.000, 5.000, 7.000, etc. Hz, dar <i>nu</i> va putea produce 2.000, 4.000, 6.000, etc. Hz.</p>

<p>O formă de undă pur sinusoidală (frecvenţă unică, „curată”), neavând nicio armonică, sună „sec” urechii umane. Majoritatea instrumentelor muzicale nu sunt capabile să producă sunete atât de „simple”.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Combinarea mai multor forme de undă cu frecvenţe diferite duce la formarea unui semnal complex a cărei frecvenţă <i>fundamentală</i> este semnalul cu cea mai mică frecvenţă. Celelalte forme de undă sunt multiplii ale frecvenţei fundamentale, şi poartă numele de <i>armonici</i></li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
