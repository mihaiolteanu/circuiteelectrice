<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Conductanţa</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Conductanţa</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Prin definiţie, rezistenţa este mărimea ce măsoară <i>frecarea</i> întâmpinată de electroni atunci când se deplasează prin componentul respectiv (rezistor). Totuşi, putem să ne gândim şi la inversa aceasei mărimi electrice: cat de <i>uşor</i> le este electronilor să se deplaseze printr-un component, faţă de cât de <i>dificil</i>, cum este cazul rezistenţei. Denumirea pentru această <i>uşurinţă</i> este <i>conductanţa</i> electrică, în opoziţie cu rezistenţa electrică.</p>

<p>Matematic, conductanţa este inversa rezistenţei:</p>

#+CAPTION: relaţia conductanţă-rezistenţă
[[../poze/10079.png]]

<p>Cu cât valoarea rezistenţei este mai mare, cu atât mai mică va fi cea a conductanţei şi invers. Simbolul folosit pentru desemnarea conductanţei este „G”, iar unitatea de măsură este <i>siemens</i>, abreviat prin „S”.</p>

<p>Întorcându-ne la circuitul paralel studiat, putem vedea că existenţa mai multor ramuri în circuit reduc rezistenţa totală a circuitului, pentru că electroni sunt capabil să curgă mult mai uşor prin circuit atunci când există mai multe ramuri decât atunci când există doar una. În termeni de <i>rezistenţă</i>, ramurile îm plus rezultă într-o rezistenţă mai scăzută. Dacă folosim însă termenul de <i>conductanţă</i>, ramurile adiţionale din circuit duc la o conductanţă (totală) mai mare.</p>


<p>Rezistenţa totală paralelă este mai <i>mică</i> decât oricare dintre rezistenţele ramurilor luate individual (R<sub>total</sub> mai mică decât R<sub>1</sub>, R<sub>2</sub>, R<sub>3</sub> sau R<sub>4</sub> luate individual):</p>

#+CAPTION: circuit paralel
[[../poze/00096.png]]

<p>Conductanţa paralelă este mai <i>mare</i> decât oricare dintre conductanţele ramurilor luate individual, deoarece rezistorii paraleli conduct mai bine curantul electricât decât o fac fiecare luat în parte(G<sub>total</sub> mai mare decât G<sub>1</sub>, G<sub>2</sub>, G<sub>3</sub> sau G<sub>4</sub> luate individual):</p>

#+CAPTION: circuit paralel, conductanţă
[[../poze/00097.png]]

<p>Matematic, această relaţie se exprimă asfel:</p>

#+CAPTION: formula conductanţei
[[../poze/10080.png]]

<p>Cunoscând relaţia matematică inversă dintre conductanţă şi rezistenţă (1/x), putem transforma fiecare din termenii formulei de mai sus în rezistenţe:</p>

#+CAPTION: formula conductanţei, înlcuită cu rezistenţe
[[../poze/10081.png]]

<p>Rezolvând ecuaţie de mai sus pentru R<sub>total</sub>, ajungem la următoarea formulă:</p>

#+CAPTION: rezistenţa totală, circuit paralel
[[../poze/10082.png]]

<p>Asfel, ajungem la formula rezistenţei totale dintr-un circuit paralel.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Conductanţa este opusul rezistenţei: măsoară cât de <i>uşor</i> este pentru electroni să curgă printr-un circuit/component.</li>
	<li>Simbolul conductanţei este litera „G”, iar unitatea de măsură este „Siemens”.</li>
	<li>Matematic, conductanţa este inversul rezistenţei: G=1/R</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
