<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Puterea în circuitele de curent alternativ rezistive şi reactive</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Puterea în circuitele de curent alternativ rezistive şi reactive</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Să considerăm un circuit monofazat de curent alternativ, compus dintr-o sursă de tensiune de 120 V, la frecvenţa de 60 Hz, şi o sarcină rezistivă:</p>

<p><img src="../poze/02211.png" alt="circuit electric monofazat de curent alternativ cu sarcină rezistivă"/></p>

<p><img src="../poze/12120.png" alt="calcule matematice"/></p>

<p>Curentul efectiv prin sarcină va fi de 2 A, iar puterea disipată de 240 W. Deoarece sarcina este pur rezistivă (fără reactanţă), curentul este în fază cu tensiune, iar calculele sunt asemănătoare unui circuit de curent continuu. Formele de undă ale tensiunii, curentului şi puterii, arată asfel:</p>

<p><img src="../poze/02055.png" alt="Formele de undă ale tensiunii, curentului şi puterii într-un circuit monofazat de curent alternativ cu sarcină pur rezistivă"/></p>

<p>Puterea este tot timpul pozitivă în acest caz. Acest lucru înseamnă că puterea este tot timpul disipată de sarcina rezistivă şi nu este reintrodusă în circuit, aşa cum este cazul sarcinilor reactive. </p>

<p>De asemenea, frecvenţa formei de undă a puterii este dublul frecvenţei tensiunii şi curentului. Această diferenţa de frecvenţă face imposibilă exprimarea puterii în circuitele de curent alternativ folosind aceeiaşi notaţie complexă, rectangulară sau polară, folosită în cazul tensiunii, curentului şi a impedanţei, deoarece această formă de exprimare matematică presupune o frecvenţă constantă pentru toate formele de undă implicate.</p>

<p>Cea mai bună metodă de calcul a puterii în circuitele de curent alternativ se realizează folosind notaţia scalară, iar relaţiile de fază sunt evidenţiate cu ajutorul trigonometriei.</p>

<p>Ca şi comparaţie, să considerăm un circuit simplu cu o sarcină reactivă:</p>

<p><img src="../poze/02212.png" alt="circuit electric monofazat de curent alternativ cu sarcină inductivă"/></p>

<p><img src="../poze/12121.png" alt="calcule matematice"/></p>

<p><img src="../poze/02059.png" alt="Formele de undă ale tensiunii, curentului şi puterii într-un circuit monofazat de curent alternativ cu sarcină pur inductivă"/></p>

<p>În acest caz, puterea variază alternativ între partea pozitivă şi cea negativă. Acest lucru înseamnă că puterea este alternativ absorbită şi eliberată din şi în circuit. Dacă am considera sursa ca fiind un generator mecanic, practic, energia consumată pentru acţionarea arborelui ar fi zero, deoarece sarcina nu consumă deloc putere.</p>

<p>Să considerăm acum un circuit cu sarcină rezistiv-inductivă:</p>

<p><img src="../poze/02213.png" alt="circuit electric monofazat de curent alternativ cu sarcină rezistiv-inductivă"/></p>

<p><img src="../poze/12122.png" alt="calcule matematice"/></p>

<p>Aceasta este valoarea efectivă a curentului (1.41 A) pe care ar arăta-o un ampermetru conectat în serie cu rezistorul şi bobina. Graficul formelor de undă arată în acest caz asfel:</p>

<p><img src="../poze/02214.png" alt="cFormele de undă ale tensiunii, curentului şi puterii într-un circuit monofazat de curent alternativ cu sarcină rezistiv-inductivă"/></p>

<p>Şi în acest caz, puterea alternează între partea negativă şi cea pozitivă, dar valoarea puterii „pozitive” este mai mare decât cea negativă. Cu alte cuvinte, combinaţie serie rezistor-bobină, va consuma mai multă putere decât va introduce înapoi în circuit.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Într-un circuit pur rezistiv, toată puterea se disipă pe rezistor, iar tensiunea şi curentul sunt în fază</li>
	<li>Într-un circuit pur reactiv, nu există putere disipată pe sarcină, ci, puterea este absorbită şi reintrodusă alternativ dinspre şi înspre sursă. Curentul şi tensiunea sunt defazate cu 90 de grade</li>
	<li>Într-un cricuit mixt, ce conţine atât elemente rezistive cât şi elemente reactive, puterea disipată de sarcină va fi mai mare decât puterea reintrodusă în circuit, dar totuşi, o parte din putere se disipă iar o parte este absorbită şi reintrodusă în circuit de către elementele reactive. Tensiune şi curentul sunt defazate cu un unghi între 0 şi 90 de grade</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>