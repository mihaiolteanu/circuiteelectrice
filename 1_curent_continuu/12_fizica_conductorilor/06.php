<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Supraconductibilitatea</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>6. Supraconductibilitatea</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>În cazul răcirii la temperaturi extrem de scăzute, temperaturi apropiate de zero absolut (aproximativ -273<sup>o</sup>C), rezistenţa conductorilor electrici scade la zero. Trebuie înţeles faptul că supraconductibilitatea nu este o extensie a tendinţei conductorilor de pierdere a rezistenţei cu descreşterea temperaturii, ci reprezintă o modificare cuantică bruscă a rezistivităţii de la o valoare finită la zero. <strong>Un material supraconductor prezintă o rezistenţă electrică de exact 0 Ω, nu doar o valoare foarte mică</strong>.</p>

<p>Acest fenomen a fost descoperit în 1911 de către H. Kamerlingh Onnes. Cu doar trei ani înainte, Onnes a dezvoltat o metodă de lichefiere a heliului, ce a permis existenţa unui mediu pentru supra-răcirea experimentală a diferitelor obiecte cu doar câteva grade peste nivelul de zero absolut. Investigând variaţia rezistenţei electrice a mercurului atunci când este încălzit la această temperatură joasă, Onnes a descoperit că rezistenţa acestuia scade la zero sub aproape de punctul de fierbere al heliului.</p>

<p>Nu este încă înţeles exact motivul pentru care materialele supraconductoare se comportă în acest fel. Una dintre teorii suţine că electronii se deplasează în grupuri (grupuri Cooper) prin conductor şi nu individual cum este cazul deplasării normale ale electronilor; acest lucru ar fi o legătură directă cu deplasarea lor fără frecare. Este interesant de menţionat faptul că şi în cazul fluidelor există un fenomen similar, denumit superfluditate, rezultând într-o curgere fără frecare a moleculelor, în special în cazul heliului lichid.</p>

<p>Supraconductibilitatea promite un comportament ieşit din comun al circuitelor electrice. Dacă rezistenţa conductorilor ar putea fi eliminată complet, nu ar mai există pierderi de putere sau ineficienţe în sistemele de putere datorate rezistenţelor parazite. Eficienţa motoarelor electrice ar putea creşte spre o eficienţă apropiată de 100%. Componente precum conedsatorul sau bobina, ale căror caracteristici sunt „stricate” de rezistenţa inerentă a conductorilor din care sunt construite, ar putea fi ideale în adevăratul sens al cuvântului. Deşi există astfel de aplicaţii, utilitatea lor practică este destul de scăzută datorită problemelor întâmpinate cu menţinerea temperaturilor extrem de scăzute.</p>

<h2>Temperatura de tranziţie</h2>

<p><strong>Pragul de temperatură la care materialul trece din faza de conductibilitate normală la supraconductibilitate</strong>, poartă numele de temperatură de tranziţie, sau temperatură critică. Pentru supraconductorii „clasici”, temperatura de tranziţie se situează în jurul valorii de zero absolut. Ideal, un supraconductor ar trebui să funcţionezeze la temperatura camerei, sau cel puţin la o temperatură suficient de „ridicată” încât să poată fi menţinută cu echipamente de răcire relativ ieftine.</p>

<p>Temperaturile critice pentru câteva substanţe uzuale sunt prezentate în tabelul alăturat.</p>

<table>
<tr>
  <th>Material</th>
  <th>Element / Aliaj</th>
  <th>Temperatura critică (<sup>o</sup>C)</th>
</tr>
<tr>
  <td>Aluminiu</td>
  <td>Element</td>
  <td>-271,8</td>
</tr>
<tr>
  <td>Cadmiu</td>
  <td>Element</td>
  <td>-272,44</td>
</tr>
<tr>
  <td>Plumb</td>
  <td>Element</td>
  <td>-265,8</td>
</tr>
<tr>
  <td>Mercur</td>
  <td>Element</td>
  <td>-268,84</td>
</tr>
<tr>
  <td>Niobiu</td>
  <td>Element</td>
  <td>-264,3</td>
</tr>
<tr>
  <td>Toriu</td>
  <td>Element</td>
  <td>-271,63</td>
</tr>
<tr>
  <td>Staniu</td>
  <td>Element</td>
  <td>-269,28</td>
</tr>
<tr>
  <td>Titaniu</td>
  <td>Element</td>
  <td>-272,61</td>
</tr>
<tr>
  <td>Uraniu</td>
  <td>Element</td>
  <td>-272</td>
</tr>
<tr>
  <td>Zinc</td>
  <td>Element</td>
  <td>-272,09</td>
</tr>
<tr>
  <td>Niobiu / Staniu</td>
  <td>Aliaj</td>
  <td>-254,9</td>
</tr>
</table>

<h2>Efectul Meissner (vezi video, net)</h2>

<p>Materialele supraconductoare interacţionează într-un mod interesant cu câmpurile magnetice. <strong>Atunci când se află în stare de supraconducţie, materialele supraconductoare tind să excludă toate câmpurile magnetice</strong>, fenomen cunoscut sub numele de efect Meissner. Totuşi, în cazul în care intensitatea câmpului magnetic depăşeşte o anumită valoare critică, materialul îşi va pierde proprietăţile supraconductoare, indiferent de temperatură. De fapt, prezeţa oricărui câmp magnetic în preajma acestora, tinde să scadă temperatura critică a materialului.</p>

<p>Acest lucru este încă un inconvenient din punct de vedere practic, din moment ce curentul electric prin orice conductor produce un câmp magnetic. Cu toate că un fir supraconductor nu posedă rezistenţă electrică la trecerea curentul, există o limită a volorii curentului prin acesta datorită limitei câmpului magnetic generat.</p>

<p>Lipsa rezistenţei electrice într-un circuit supraconductor conduce la efecte unice. Într-un astfel de circuit, menţinerea curenţilor mari este posibilă fără aplicarea niciunei tensiuni externe.</p>

<p><img src="../poze/00290.png" alt="într-un circuit închis, format din fire supraconductoare, curentul electric poate fi susţinut pentru o perioadă de timp practic infinită, fără aplicarea unei tensiuni externe"/></p>

<p>S-a demonstrat pe cale experimentală faptul că inele din materiale supraconductoare pot susţine curenţi prin ei ani la rând, fără aplicarea unei tensiuni. Practic, nu există o limită teoretică a perioadei de timp pentru care aceşti curenţi pot fi susţinuţi într-un circuit supraconductor. Acest efect pare a fi o formă de mişcare perpetuă. De fapt, nu există nicio lege a fizicii care să nu permită existenţă acestui tip de mişcare, ci doar o lege a fizicii care spune că un sistem nu poate genera mai multă energie decât consumă. În cel mai bun caz, o „maşină de mişcare perpetuă” poate doar să stocheze energie, nu să o şi genereze.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li><strong>Materialele supraconductoare</strong> sunt materiale ce o rezistenţă electrică de exact zero ohmi </li>
	<li>Toate materialele supraconductoare trebuiesc supra-răcite pentru a-şi menifesta proprietatea de rezistenţă zero. Aceste temperaturi sunt în jurul valori de zero absolut (aproximativ -272<sup>o</sup>C</li>
	<li><strong>Temperatura de tranziţie</strong>, sau temperatura critică, este temperatura minimă la care trebuie adus materialul pentru a intra în faza de supraconducţie</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>