<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Răspunsul tranzitoriu al bobinei</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Răspunsul tranzitoriu al bobinei</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>O bobină complet descărcată (nu există câno magnetic), prin care nu trece niciun curent, la conectarea unei surse de tensiune la bornele sale, se va comporta iniţial asemenea unui circuit deschis (încearcă să menţină un curent de zero amperi), căderea de tensiunea la bornele sale fiind maximă. În timp, curentul creşte spre valoarea maximă permisă de circuit, iar tensiunea scade spre zero. Odată atinsă valoarea de zero volţi (pentru o bobină ideală), curentul rămâne la nivelul maxim, iar bobina se va comporta asemenea unui scurt circuit.</p>

<p><img src="../poze/00332.png" alt="circuit RL"/></p>

<p>La închiderea întrerupătorului, căderea de tensiune pe bobină sare direct la valoarea tensiunii bateriei (precum un circuit deschis) şi scade spre zero cu timpul (ajungând să se comporte precum un scurt-circuit). Tensiunea pe bobină se determină calculând care este căderea de tensiune de pe R cunoscând curentul prin bobină; diferenţa dintre tensiunea bateriei şi cea a rezistorului este tensiunea de pe bobină. La închiderea iniţială a întrerupătorului, curentul este zero, dar creşte apoi cu timpul până ajunge să fie egală cu raportul dintre tensiunea furnizată de baterie şi rezistenţa rezistorului conectat în serie (1 Ω în acest caz). Comportamentul acest este exact invers faţă de circuitul RC (rezistor-condensator), unde curentul iniţial a fost maxim iar tensiunea pe condensator zero.</p>

<p><img src="../poze/00333.png" alt="raspunsul timp-tensiune al bobinei la conectarea unei surse de tensiune la bornele sale într-un circuit RL"/></p>

<b><pre>
---------------------------------------------
|   Timp   | Tensiune | Tensiune  | Curent   |
|(secunde) | baterie  |  bobină   |          |
|--------------------------------------------|
|    0     |   15 V   |    15 V   |    0     |
|--------------------------------------------|
|   0.5    |   15 V   |  9.098 V  |  5.902 A |
|--------------------------------------------|
|    1     |   15 V   |  5.518 V  |  9.482 A |
|--------------------------------------------|
|    2     |   15 V   |  2.030 V  |  12.97 A |
|--------------------------------------------|
|    3     |   15 V   |  0.747 V  |  14.25 A |
|--------------------------------------------|
|    4     |   15 V   |  0.275 V  |  14.73 A |
|--------------------------------------------|
|    5     |   15 V   |  0.101 V  |  14.90 A |
|--------------------------------------------|
|    6     |   15 V   | 37.181 mV |  14.96 A |
|--------------------------------------------|
|    10    |   15 V   |  0.681 mV |  14.99 A |
---------------------------------------------
</pre></b>

<p>La fel ca în cazul circuitului RC, graficul tensiunii şi al curentului cu timpul este <i>asimptotic</i>.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>O bobină complet descărcată se comportă iniţial precum un circuit deschis atunci când la bornele sale este aplicată o tensiune. După ce se încarcă, curentul prin ea este maxim, iar tensiunea zero, comportamentul fiind asemenea unui scurt-circuit.</li>
	<li>Într-un circuit rezistor-bobină, curentul bobinei trece de la zero la valoarea maximă, iar tensiunea de la valoarea maximă la zero; ambele variabile au o variaţie puternică la început.</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>