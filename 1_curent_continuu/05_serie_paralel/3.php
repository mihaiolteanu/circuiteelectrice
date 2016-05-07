<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuite paralel simple</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Circuite paralel simple</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Să începem cu un circuit paralel format din trei rezistori şi o singură baterie:</p>

<img src="../poze/00092.png" alt="circuit paralel"/>

<p>Primul principiu pe care trebuie să-l înţelegem despre circuitele paralele este legat de faptul că tensiunea este egală la bornele tuturor componentelor din circuit. Acest lucru se datorează existenţei a unui număr de numai două seturi de puncte comune din punct de vedere electric într-un circuit paralel, iar tensiunea măsurată între seturi de puncte comune trebuie să fie tot timpul aceeiaşi. Prin urmare, în circuitul de mai sus, tensiunea la bornele rezistorului R<sub>1</sub> este egală cu tensiunea la bornele rezistorului R<sub>2</sub>egală cu tensiunea (căderea de tensiune) la bornele rezistorului R<sub>3</sub> şi de asemenea egală cu tensiunea (electromotoare) la bornele bateriei.</p>

<p>Ca şi în cazul circuitelor serie, dacă dorim aplicarea legii lui Ohm, valorile tensiunii, curentului şi ale rezistenţei trebuie să fie în acelaşi context (total sau individual) pentru a obţine rezultate reale prin aplicarea formulelor. Totuşi, în circuitul  de mai sus, putem aplica de la început legea lui Ohm fiecărui rezistor în parte, pentru că se cunoaşte tensiunea la bornele fiecărui rezistor (9 voloţi) precum şi rezistenţa fiecărui rezistor:</p>

<img src="../poze/10071.png" alt="circuit paralel"/>

<p>Până în acest moment, nu cunoaştem valoarea totală a curentului, sau rezistenţă totală a acestui circuit paralel, asfel că nu putem aplica legea lui Ohm pentru a afla valoarea totală a curentului prin circuit (între punctele 1 şi 8 de exemplu). Totuşi, putem observa că valoarea totală a curentului prin circuit trebuie să fie egală cu suma valorilor curenţilor prin fiecare ramură (fiecare rezistor în parte):</p>

<p><img src="../poze/00093.png" alt="circuit paralel"/></p>

<p><img src="../poze/10074_2.png" alt="calcule matematice"/></p>

<p>Pe măsură ce curentul iese prin terminalul negativ (-) al bateriei la punctul 8 şi se deplasează prin circuit, o parte din această cantitate se împarte în două la punctul 7, o parte mergând spre R<sub>1</sub>. La punctul 6 o parte din cantitate se va întrepta spre R<sub>2</sub>, iar ceea ce mai rămâne va curge spre R<sub>3</sub>. Acelaşi lucru se întâmplă pe partea cealaltă , la punctele 4, 3 şi 2, numai că de această dată curenţii se vor aduna şi vor curge împreună spre terminalul pozitiv al bateriei (+), la punctul 1. Cantitatea de electroni (curentul) ce se deplasează din punctul 2 spre punctul 1 trebuie să fie egală cu suma curenţilor din ramurile ce conţin rezistorii R<sub>1</sub>, R<sub>2</sub> şi R<sub>3</sub>.</p>

<p>Acesta este al doilea principiu al circuitelor paralele: valoarea totală a curentului prin circuit este egală cu suma curenţilor de pe fiecare ramură în parte.</p>

<p>Şi în sfârşit, aplicând legea lui Ohm pe întreg circuitul, putem calcula valoarea totală a rezistenţei prezentă în circuit:</p>

<img src="../poze/10074.png" alt="rezistenţa totală din circuit"/>

<p>Trebuie să observăm un lucru foarte important în acest caz! Valoarea rezistenţei totale este de numai 625 Ω: <i>mai puţin</i> decât valoarea oricărei rezistenţe luate separat. În cazul circuitelor serie, unde rezistenţa totală este egală cu suma tuturor rezistenţelor individuale, suma totală a fost <i>mai mare</i> decât valoarea oricărei rezistenţe luate separat. În cadrul circuitelor paralel, este exact invers. Acesta este al doilea principiu al circuitelor electrice paralele, iar matematic, această relaţie între rezistenţa totală şi rezistenţele individuale din circuit poate fi exprimată astfel:</p>

<img src="../poze/10075.png" alt="rezistenţa totală într-un circuit paralel"/>


<p class="sumar">Sumar:</p>
<ul>
	<li>Într-un circuit paralel, căderea de tensiune pe fiecare component este aceeiaşi: E<sub>Total</sub> = E<sub>1</sub> = E<sub>2</sub> = . . . E<sub>n</sub>.</li>
	<li>Într-un circuit paralel, rezistenţa totală este mai <i>mică</i> decât rezistenţele oricărui rezistor luat în parte: R<sub>Total</sub> = 1 / (1/R<sub>1</sub> + 1/R<sub>2</sub> + . . . 1/R<sub>n</sub>)</li>
	<li>Într-un circuit paralel, curentul total este egal cu suma curenţilor individual prin fiecare ramură: I<sub>Total</sub> = I<sub>1</sub> + I<sub>2</sub> + . . . I<sub>n</sub>.</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>