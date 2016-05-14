<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Rezonanţa serie</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Rezonanţa serie</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Un efect similar rezonanţie parale are loc şi în circuitele inductiv/capacitive serie. Atunci când este atinsă o stare de rezonanţă (reactanţa capacitivă este egală cu cea inductivă), cele două impedanţe se anulează reciproc iar impedanţa totală scade la zero!</p>

#+CAPTION: circuit rezonant serie (LC)
[[../poze/02098.png]]

#+CAPTION: formule
[[../poze/12092.png]]

<p>Fiindcă impedanţa serie totală este 0 Ω la frecvenţa de rezonanţă de 159.155 Hz, se va produce un <i>scurt circuit</i> la bornele sursei de curent alternativ la rezonanţă. Graficul curentului în funcţie de frecvenţă arată asfel:</p>

#+CAPTION: graficul frecvenţă curent pentru un circuit rezonant serie
[[../poze/22006.png]]

<p>Putem observa de pe grafic, că la frecvenţa de rezonanţă de 159.155 (aproximativ), valoarea curentului prin circuit este maximă, ceea ce sugerează un scurt-circuit. Formula frecvenţei de rezonanţă calculată anterior este valabilă atât pentru circuitele LC paralel cât şi pentru cele serie:</p>

#+CAPTION: formula de calcul a frecvenţei de rezonanţă pentru circuitele LC serie şi paralel
[[../poze/12091.png]]

<p>Atenţie, datorită curenţilor mari ce se pot dezvoltă într-un circuit LC serie la rezonantă, este posibilă apariţia unor căderi de tensiune periculoase pe condensator şi bobină, întrucât fiecare component are o impedanţă suficient de mare. Dacă alimentăm acest circuit cu doar 1 V, căderile de tensiune pe cele două componente pot atinge valori impresionante de aproximativ 70 V ! Prin urmare, fiţi foarte atenţi atunci când experimentaţi cu asfel de circuite!</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Impedanţa totală a unui circuit LC serie se apropie de zero pe măsură ce frecvenţa sursei de alimentare se apropie de frecvenţa de rezonantă</li>
	<li>Formula de calcul a frecvenţei de rezonanţă este aceeiaşi ca şi în cazul circuitului LC paralel</li>
	<li>Circuitele LC serie pot dezvolta căderi de tensiune extrem de mari pe cele două componente atunci când se află la rezonantă, datorită curenţilor mari din circuit şi a impedanţelor suficient de mari ale componentelor</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
