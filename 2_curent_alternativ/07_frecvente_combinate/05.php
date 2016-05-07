<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Efecte asupra circuitelor</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Efecte asupra circuitelor</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Principiul conform căruia formele de undă periodice ne-sinusoidale sunt compuse dintr-o serie de unde sinusoidale de frecvenţe şi amplitudini diferite, este o proprietate generală a formelor de undă şi are o importanţă practică în studiul circuitelor de curent alternativ. Acest lucru înseamnă că de fiecare dată când întâlnim o formă de undă ne-sinusoidală, comportamentul circuitului va fi acelaşi ca şi în cazul în care am introduce deodată, în circuit, tensiuni de frecvenţe diferite.</p>

<p>Când un circuit de curent alternativ este alimentat de la o sursă de tensiune ce conţine o combinaţie de forme de undă de frecvenţe diferite, componentele acelui circuit vor răspunde diferit fiecărei frecvenţe în parte. Orice component reactiv din circuit, precum condensatorul şi bobina, va avea simultan o impedanţa unică şi diferită faţă de fiecare frecvenţă prezentă în circuit. Din fericire, analiza unui asfel de circuit este destul de uşor de realizat apelând la <i>teorema superpoziţiei</i>, considerând sursa de alimentare cu frecvenţe multiple ca un set de surse cu frecvenţe unice conectate în serie; analiza circuitului se face considerând fiecare „sursă” în pare, însumând la final rezultatele pentru a determina efectul total asupra circuitului:</p>

<p><img src="../poze/02113.png" alt="circuit electric alimentat printr-o combinaţie de frecvenţe de 60 Hz, respectiv 90 Hz"/></p>

<p>Primul pas constă în analiza circuitului alimentat doar cu sursa de tensiune de 60 Hz:</p>

<p><img src="../poze/02114.png" alt="circuit electric alimentat printr-o combinaţie de frecvenţe de 60 Hz, respectiv 90 Hz - analiza circuitului doar cu sursa de tensiune de 60 Hz"/></p>

<p><img src="../poze/12094.png" alt="tabel"/></p>

<p>Apoi analizăm circuitul considerând doar efectele sursei de tensiune de 90 Hz:</p>

<p><img src="../poze/02115.png" alt="circuit electric alimentat printr-o combinaţie de frecvenţe de 60 Hz, respectiv 90 Hz - analiza circuitului doar cu sursa de tensiune de 90 Hz"/></p>

<p><img src="../poze/12095.png" alt="tabel"/></p>

<p>Folosind teorema superpoziţiei (suma efectelor celor două surse de tensiune) pentru căderile de tensiune pe rezistor (R) şi condensator (C), obţinem:</p>

<p><img src="../poze/12096.png" alt="tabel"/></p>

<p>Pentru că cele două tensiuni se află la frecvenţe diferite, nu putem obţine un rezultat final cu o singură valoare a tensiunii, precum putem aduna două tensiuni de amplitudini şi faze diferite dar de <i>aceeiaşi</i> frecvenţă. Cu ajutorul numerelor complexe, putem reprezenta amplitudinea şi faza formelor de undă, dar nu şi frecvenţa.</p>

<p>Ceea ce putem concluziona după aplicarea teoremei superpoziţiei, este că, pe condensator, căderea de tensiune va fi mai mare pentru componenta de 60 Hz faţă de componenta de 90 Hz. În cazul bobinei, este exact invers. Acest lucru este important de realizat, având în vedere faptul că tensiunile celor două surse de alimentare sunt, de fapt, <i>egale</i>. Este important de luat în considerare acest răspuns nesimetric al componentelor circuitului (cap. următor?!).</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Orice formă de undă periodică nesinusoidală este echivalentă cu o anumită serie (infinită) de unde sinusodiale/cosinusoidale de frecvenţe, faze şi amplitudini diferite, plus o componentă de tensiune în curent continuu (în funcţie de caz). Metoda matematică de determinarea formei de undă echivalente, poartă numele de <i>analiza Fourier</li>
	<li>Simularea tensiunilor cu frecvenţe diferite se poate realiza prin conectarea mai multor surse de tensiune, cu o singură frecvenţă, în serie. Analiza curenţilor şi a tensiunilor se realizează folosind teorema superpoziţiei. Atenţie, curenţii şi tensiunile de frecvenţe diferite <i>nu</i> pot fi adunaţi sub formă complexă folosind teorema superpoziţie, din moment ce frecvenţa nu poate fi indicată cu ajutorul numerelor complexe, ci numai amplitudinea şi faza</li>
	<li>Armonicile pot cauza probleme prin inducerea de tensiuni nedorite (zgomot) în circuitele învecinate. Aceste zgomote pot apărea prin cuplaj capacitiv, cuplaj inductiv, radiaţie electromagnetică, sau o combinaţie dintre acestea</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>