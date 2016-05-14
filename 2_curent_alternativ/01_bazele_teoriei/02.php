<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Forme de undă în curent alternativ</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Forme de undă în curent alternativ</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Datorită modului de producere al energiei electrice, unda produsă de modificarea continuă a polarităţii tensiunii, respectiv direcţiei curentului, are o formă <i>sinusoidală</i>:</p>

#+CAPTION: formă de undă sinusoidală
[[../poze/02008.png]]

<p>Graficul tensiunii cu timpul pentru un generator electric electromecanic ne arată o modificare netedă a polarităţii (dinspre + spre - sau invers); nivelul tensiunii are cea mai rapidă variaţie în jurul valorii de zero, la intersecţia cu axa timpului, şi cea mai lentă în jurul valorilor maxime. Dacă luăm funcţia trigonometrică sinus între 0 şi 360 de grade şi o desenăm pe un grafic, aceasta va fi exact figurii considerate mai sus.</p>

<p>Motivul pentru care generatorul produce curent alternativ se datorează modului său fizic de funcţionare. Tensiunea produsă de stator (înfăşurările staţionare) datorită mişcării rotorului (magnetului rotativ) este proporţională cu rata variaţiei fluxului magnetic perpendicular pe înfăşurări (legea inducţiei electromagnetice). Această rată de variaţie este maximă atunci când polii magnetului se află în imediata apropiere a înfăşurărilor, iar valoarea ei este minimă atunci când aceştia se află la distanţa maximă faţă de înfăşurări. Matematic, rata variaţiei fluxului magnetic datorită unui magnetet rotativ, urmăreşte graficul funcţiei sinus, asfel că tensiunea produsă de înfăşurări este descrisă de aceeiaşi funcţie.</p>

<p>Dacă urmărim variaţia tensiunii produsă de înfăşurările unui generator din oricare punct de pe graficul funcţiei (sinus în acest caz) până în momentul în care graficul începe să se repete, spunem că s-a efectuat exact o perioadă a acelei funcţii. Matematic, perioada unei funcţii se notează cu <i>T</i>. Aceast concept este cel mai uşor de vizualizat între valorile maxime ale funcţiei, dar poate la fel de bine să fie luat în considerare între oricare puncte ale acestuia. Valorile unghiurilor de pe axa orizontală desemnează domeniul funcţiei trigonometrice sinus, dar şi poziţia unghiulară a axului alternatorului aflat în mişcare:</p>

#+CAPTION: identificarea unei perioade a funcţiei trigonometrice sinus 
[[../poze/02009.png]]

<p>Din moment ce axa orizontală a graficului desemnează trecerea timpului precum şi poziţia axului alternatorului în grade, unitatea de măsură folosită pentru marcarea unei perioade este timpul, în majoritatea cazurilor măsurat în secunde sau fracţiuni de secundă. Perioada unei unde, măsurată în grade, este tot timpul 360, dar tipul ocupat de o singură perioadă depinde de rata variaţiei tensiunii de la o polaritate spre cealaltă.</p>

<h3>Frecvenţa</h3>

<p>O metodă şi mai des folosită pentru a descrie alternanţa curentului alternativ este exact rata acestei oscilaţii, denumită <i>frecventă</i>, desemnată matematic prin <i>f</i>. Unitatea de măsură pentru frecventă este Hertz-ul (prescurtat Hz), şi reprezintă numărul de perioade complete într-un interval de o secundă. În Europa, frecvenţa standard folosită este de 50 Hz, ceea ce se traduce prin faptul că tensiunea alternativă oscilează cu o rată de 50 de perioade la fiecare secundă. O staţie de transmisie radio ce foloseşte o frecvenţă de 100 MH generează tensiune alternativă ce oscilează cu o rată de 100 de milioane de perioade pe secundă.</p>

<p>Matematic, perioada şi frecvenţa sunt mărimi reciproce, frecvenţa fiind egală cu inversul perioadei (f = 1 / T) De exemplu, pentru o perioadă T = 16 ms, frecvenţa f = 1 / 16 = 62.5 Hz. Instrumentul folosit pentru vizualizarea formelor de undă (a variaţiei tensiunii sau curentului cu timpul) se numeşte <i>osciloscop</i></p>

<h3>Alte forme de undă</h3>

<p>Deşi generatoarele electromecanice şi multe alte fenomene fizice produc în mod natural forme de undă sinusoidale, acestea nu sunt singurele forme de unde alternative existente. Există o varietate de unde alternative produse de circuitele electronice. Mai jos sunt câteva exemple:</p>

#+CAPTION: exemple de formă de undă: dreptunghiulară, triunghiulară, dinte de fierăstrău
[[../poze/02010.png]]

<p>Acestea nu sunt însă singurele tipuri de forme de undă existente, ci doar câteva dintre cele mai comune. Chiar şi circuitele considerate sinusoidale, dreptunghliare sau triunghiulare pure nu sunt perfecte în realitate. Unele forme de undă sunt atât de complexe încăt nu pot fi clasificate. General vorbind, orice formă de undă ce se apropie de o formă sinusoidală este denumită ca atare, toate celelalte fiind denumite ne-sinusoidale. Forma undei de tensiune sau curent are o importanţă crucială asupra comportamentului unui circuit şi trebuie să fim prin urmare atenţi la diferitele forme de undă existente în practică.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Graficul curentului alternativ produs de un generator (alternator) electromecanic este sinusoidal (formă de undă)</li>
	<li>Perioada reprezintă timpul, luat din oricare punct al graficului formei de undă până în punctul în care acesta începe să se repete, măsurat în secunde</li>
	<li>Frecvenţa este numărul perioadelor efectuate de o formă de undă într-un interval de o secundă şi se măsoară în Hertz (Hz); 1 Hz este egal cu o perioadă efectuată într-un interval de o secundă</li>
	<li>f = 1 / T</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
