<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Sisteme cu semnale de curent</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Sisteme cu semnale de curent</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Folosind amplificatoare electronice putem construi circuite a căror ieşire să fie o cantitate constantă de curent în loc de o cantitate constantă de tensiune, precum în cazul bateriei de exemplu. Aceste componente folosite împreună poartă denumirea de <i>sursă de curent</i>, iar simbolul este acesta:</p>

<img src="../poze/00187.png" alt="sursă de curent"/>

<p>O sursă de curent generează o valoare a tensiunii suficient de mică sau de mare asfel încâ să producă o cantitate constantă de curent la bornele sale. Acest lucru este exact opusul unei surse de tensiune (o baterie ideală), ce va furniza o cantitate mai mică sau mai mare de curent în funcţie de cerinţele circuitului la care este legată. Întrucât folosim notaţia reală de deplasare a electronilor prin circuit, săgeata simbolului va fi orientată <i>contrar</i> direcţiei de curgere.</p>

<img src="../poze/00188.png" alt="circuit electric cu sursă de curent"/>

<p>Sursele de curent pot fi construite ca şi dispozitive variabile, la fel ca şi sursele de tensiune, producând valori foarte precise de curent electric. Dacă am construi un traductor cu o sursă de curent variabilă în loc de o sursă de tensiune, am putea realiza un sistem de instrumentaţie bazat pe curent în loc de tensiune:</p>

<img src="../poze/00189.png" alt="sistem de instrumentaţie cu sursă de curent"/>

<p>Momentan nu ne interesează construcţia internă a sursei de curent din interiorul traductorului, ci doar faptul că ieşirea acestuia variază în funcţie de poziţia plutitorului, la fel ca în cazul potenţiometrului din sistemul de instrumentaţie bazat pe tensiune.</p>

<p>Indicatorul utilizat în acest caz nu mai este un voltmetru, ci un ampermetru a cărui scară a fost modificată pentru afişarea valorilor în centrimetri, metri sau orice altă mărime utilizată pentru reprezentarea înălţimii apei din rezervor. Datorită faptului că sistemul este un circuit serie (punând la socoteală şi rezistenţa conductorilor), curentul va fi <i>exact</i> acelaşi prin toate componentele. Cu sau fără rezistenţa conductorilor, curentul prin indicator este acelaşi ca şi curentul prin traductor şi prin urmare nu avem de a face cu nicio eroare de măsură precum în cazul tensiunii. Acesta este un mare avantaj faţă de sistemul precedent.</p>

<p>Cel mai folosit standard pentru semnalul de curent este de 4 - 20 miliamperi, unde 4 mA reprezintă 0% din cantitatea de măsurat şi 20 mA reprezintă 100% (12 mA, 50%, etc.). Un avantaj pentru utilizarea acestor valori o constituie uşurinţa folosirii instrumentelor de măsură pentru valorile de 1-5 V. Un simplu rezistor de precizie de 250 ohm conectat în serie cu acest circuit va produce o cădere de tensiune de 1 V la 4 mA şi 5 V la 20 mA: </p>

<img src="../poze/00190.png" alt="sistem de instrumentaţie cu sursă de curent"/>

<pre>
----------------------------------------
| Procentajul |  Semnal de | Semnal de |
| măsurătorii |   4-20 mA  |   1-5 V   |
----------------------------------------
|      0      |   4.0 mA   |   1.0 V   |
----------------------------------------
|     10      |   5.6 mA   |   1.4 V   |
----------------------------------------
|     20      |   7.2 mA   |   1.8 V   |
----------------------------------------
|     25      |   8.0 mA   |   2.0 V   |
----------------------------------------
|     30      |   8.8 mA   |   2.2 V   |
----------------------------------------
|     40      |  10.4 mA   |   2.6 V   |
----------------------------------------
|     50      |  12.0 mA   |   3.0 V   |
----------------------------------------
|     60      |  13.6 mA   |   3.4 V   |
----------------------------------------
|     70      |  15.2 mA   |   3.8 V   |
----------------------------------------
|     75      |  16.0 mA   |   4.0 V   |
---------------------------------------
|     80      |  16.8 mA   |   4.2 V   |
----------------------------------------
|     90      |  18.4 mA   |   4.6 V   |
----------------------------------------
|    100      |  20.0 mA   |   5.0 V   |
----------------------------------------
</pre>

<p class="sumar">Sumar:</p>
<ul>
	<li>O <i>sursă de curent</i> este un dispozitiv, de obicei constituit din mai multe componente electrice, ce păstrează o valoare constantă a curentului prin circuit precum o sursă de curent (baterie ideală) păstrează o valoarea constantă a tensiunii la bornele sale</li>
	<li>Un sistem de instrumentaţie pe bază de curent exloatează principiul conexiunii serie a circuitelor conform căruia curentul este acelaşi prin toate componentele; acest fapt ajută la eliminarea erorilor de măsură datorate rezistenţei conductorilor</li>
	<li>Cel mai utilizat standard pentru curentul analogic este bucla de curent de 4-20 miliamperi</li>
</ul>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>