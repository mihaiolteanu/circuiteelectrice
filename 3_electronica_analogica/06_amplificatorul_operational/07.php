<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuite sumatoare şi de mediere</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>8. Circuite sumatoare şi de mediere</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Dacă luăm trei rezistori egali şi conectăm unul din capetele fiecăruia dintre ei la un punct comun şi aplicăm apoi trei tensiuni de intrare, câte o tensiune pe fiecare din capetele libere ale rezistorilor, tensiunea văzută la punctul comun reprezintă <i>media</i> matematică a celor trei.</p>

<p><img src="../poze/03040.png" alt="circuit rezistiv de mediere a tensiunilor de intrare"/></p>

<p>Acest circuit nu este altceva decât o aplicaţie practică a teoremei lui Millman:</p>

<p><img src="../poze/03041.png" alt="circuit rezistiv de mediere a tensiunilor de intrare conform teoremei lui Millman"/></p>

<p>Dacă luăm un <i>circuit de mediere pasiv</i> şi îl folosm la intrarea unui AO cu un factor de amplificare de 3, putem transforma această funcţie de mediere într-o funcţie de <i>adunare</i>. Rezultatul este un circuit <i>sumator neinversor</i>:</p>

<p><img src="../poze/03042.png" alt="circuit sumator neinversor"/></p>

<p>Cu un divizor de tensiune a cărui raport este 2 kΩ / 1 kΩ, circuitul amplificator neinversor va avea o amplificare în tensiune de 3. Având ca şi intrare media celor trei tensiuni ((V<sub>1</sub> + V<sub>2</sub> + V<sub>3</sub>) / 3), prin circuitul de mediere pasiv, şi înmulţind această medie cu 3, ajungem la o tensiune de ieşire egală cu <i>suma</i> celor trei tensiuni de intrare (V<sub>1</sub> + V<sub>2</sub> + V<sub>3</sub>).</p>

<p><img src="../poze/13007.png" alt="formule matematice"/></p>

<p>Acelaşi lucru este realizabil şi cu un AO inversor, folosind un circuit de mediere pasiv ca şi componentă a circuitului de reacţie negativa. Rezultatul este cunoscut sub numele de circuit <i>sumator inversor</i>:</p>

<p><img src="../poze/03043.png" alt="circuit sumator inversor"/></p>

<p>Acum, cu partea dreaptă a circuitului de mediere pasiv conectată la punctul de masă virtual al intrării inversoare, teorema lui Millman nu se mai poate aplica precum înainte. Tensiunea masei virtuale este menţinută la valoarea de 0 V de către reacţia negativă a AO, pe când înainte, această valoare putea să oscileze spre valoarea medie a celor trei tensiuni, V<sub>1</sub>, V<sub>2</sub>, V<sub>3</sub>. Totuşi, fiindcă valorile rezistorilor sunt egale între ele, curentul prin fiecare dintre cei trei va fi proporţional cu valoarea tensiunii de intrare a fiecărui rezistor. Din moment ce curentul la nodul comun va fi <i>suma</i> celor trei curenţi, aceast curent total prin rezistorul de reacţie va produce o tensiune de ieşire egală cu suma celor trei tensiuni, cu polaritate inversă, de aici şi denumirea de sumator <i>inversor</i>:</p>

<div class="formula">
V<sub>ieşire</sub> = -(V<sub>1</sub> + V<sub>2</sub> + V<sub>3</sub>)
</div>

<p class="sumar">Sumar:</p>
<ul>
	<li>Un circuit <i>sumator</i> realizează suma algebrică a semnalelor de tensiune de la intrare. Folosind AO, circuitele de sumare pot fi <i>neinversoare</i> şi <i>inversoare</i></li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>