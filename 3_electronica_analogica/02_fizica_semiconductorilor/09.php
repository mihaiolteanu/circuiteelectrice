<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Tranzistorul cu efect de câmp cu poartă izolată (MOSFET)</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>9. Tranzistorul cu efect de câmp cu poartă izolată (MOSFET)</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Tranzistorul cu efect de câmp cu poartă izolată (IGFET), cunoscut şi sub numele de „tranzistor cu efect de câmp cu metal oxid” (MOSFET), este un dispozitiv derivat al tranzistorului cu efect de câmp (FET). În prezent, majoritatea tranzistorilor folosiţi în circuitele integrate sunt de acest tip, cu toate că tranzistorii bipolari cu joncţiune (BJT) discreţi sunt mult mai numeroşi decât dispozitivele discrete de tip MOSFET. Numărul de tranzistori MOSFET dintr-un circuit integrat poate ajunge la cateva sute de milioane. Dimensiunea unui MOSFET individual este sub un micron.</p>

<p>Sursa, poarta şi drena sunt asemănătoare cu cele de la FET-uri. Totuşi, contactul porţii nu realizează o conexiune directă cu materialul semiconductor, cum era cazul FET-urilor. Poarta unui MOSFET reprezintă un strat metalic sau de polisiliciu aşezat peste un strat de dioxid de siliciu (SiO<sub>2</sub>) izolator. Poarta seamănă foarte mult cu un condensator de tip MOS (figura de mai jos).</p>

<p><img src="../poze/03422.png" alt="codensator MOS cu canal de tip N: (a) nepolarizat; (b) polarizat"/></p>

<p>La polarizare, polaritatea armăturilor condensatorului va deveni cea a terminalilor bateriei. Armătura inferioară, de tip P formează un canal inversat datorită excesului de electroni din apropierea oxidului format prin respingerea electronilor terminalului negativ al bateriei înspre oxid şi atragerea acestora spre armătura pozitivă. Acest canal duce şi la formare unei zone de golire ce izolează canalul de restul substratului de siliciu.</p>

<p>În figura de mai jos, un condenstor de tip MOS este plasat între o pereche de material semiconductor de tip N aflată într-un substrat de tip P. Când nu există sarcină pe condensator (a), poarta nu este polarizată, iar sursa, drena şi cele două regiuni de tip N rămân izolate din punct de vedere electric.</p>

<p><img src="../poze/03423.png" alt="MOSFET cu canal N: (a) poartă nepolarizată; (b) polarizarea directă a porţii"/></p>

<p>Aplicarea unei polarizări directe duce la încărcarea condensatorului (porţii) (figura de mai sus (b)). Poarta de deasupra stratului de oxid se încarcă pozitiv de la baterie. Substratul de tip P de sub poartă se încarcă negativ. Sub poarta oxidului se va forma o regiune inversată cu un exces de electroni. Această regiune conectează sursa şi drena de tip N, formând o regiune continuă de tip N între cele două. Asfel, MOSFET-ul, ca şi FET-ul, este un dispozitiv unipolar. Doar un singur tip de purtător de sarcină este responsabil pentru conducţie. Exemplul de mai sus este un MOSFET cu canat de tip N. Conducţia unui curent mare este posibilă prin aplicarea unei tensiuni între sursă şi drenă. Un circuit practic ar avea conectată o sarcină în serie cu bateria drenei.</p>

<p>MOSFET-ul, ca şi FET-ul, este un dispozitiv controlat în tensiune. O tensiune aplicată porţii controlează curentul dinspre sursă spre drenă. Poarta nu necesită un curent permanent, ci are nevoie doar de un curent iniţial pentru încărcarea condensatorului porţii.</p>

<h3>Modul de confecţionare</h3>

<p>Secţiunea transversală a unui MOSFET de tip N este prezentată în figura de mai jos (a). Sursa şi drena sunt dopate puternic, N<sup>+</sup>, pentru reducerea pierderilor rezistive datorită curenţilor dinspre sursă spre drenă. N<sup>-</sup> indică o regiune cu dopaj scăzut. Regiunea P de sub poartă, aflată între sursă şi drenă, poate fi inversată prin aplicarea unei tensiuni de polarizare directă. Simbolul MOSFET-ului este reprezentat în figura de mai jos (b).</p>

<p><img src="../poze/03305.png" alt="MOSFET cu canal N: (a) secţiune transversală; (b) simbolul schematic"/></p>

<p>MOSFET-urile sunt dispozitive cu patru terminale: sursă, poartă, drenă şi substrat. Substratul este conectat la sursă în cazul MOSFET-urilor discrete, asfel încât dispozitivul final are doar trei terminale. MOSFET-urile realizate într-un circuit integrat au un substrat comun tuturor dispozitivelor. Această conexiune comună se regăseşte de obicei la ieşirea cipului şi se conectează la împământare sau la o sursă de tensiune.</p>

<p>O altă variantă a MOSFET-ului, V-MOS, este de fapt un MOSFET de putere îmbunătăţit, şi este prezentat în figura de mai jos. O altă variantă, similară, U-MOS, este mult mai uşor de produs.</p>

<p><img src="../poze/03306.png" alt="V-MOS cu canal N: (a) secţiune transversală; (b) simbolul schematic"/></p>

<p class="sumar">Sumar:</p>
<ul>
	<li>MOSFET-urile sunt dispozitive unipolare, precum FET-urile sau BJT-urile</li>
	<li>MOSFET-ul este un dispozitiv controlat în tensiune, precum FET-ul. O tensiune de intrare pe poartă controlează curentul dinspre sursă spre drenă</li>
	<li>Poarta MOSFET-ului nu necesită prezenţa unui curent în timpul funcţionării, ci doar prezenţa unui curent iniţial pentru încărcarea „condensatorului”</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>