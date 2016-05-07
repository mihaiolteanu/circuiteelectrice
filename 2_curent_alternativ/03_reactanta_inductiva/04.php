<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuite rezistiv-inductive paralel în curent alternativ</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Circuite rezistiv-inductive paralel în curent alternativ</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Să luăm în considerare aceleaşi componente din circuitul serie, dar să le conectăm de data aceasta în paralel:</p>

<p><img src="../poze/02262.png" alt="circuit rezistiv-inductiv paralel în curent alternativ"/></p>

<p>Deoarece sursa de tensiune are aceeiaşi frecvenţă ca şi în cazul circuitului serie, iar rezistorul şi bobina au aceleaşi valori ale rezistenţei şi inductanţei, acestea trebuie sa aibă aceleaşi valori ale impedanţei. Prin urmare, începem completarea tabelului cu aceleaşi valori date:</p>

<p><img src="../poze/12028.png" alt="tabel"/></p>

<p>Singura diferenţă faţă de cazul precedent, este că de data aceasta vom aplica regulile circuitelor paralele, şi nu cele ale circuitelor serie. Metoda de lucru este practic aceeiaşi ca şi în cazul circuitelor de curent continuu. Cunoaştem faptul că tensiunea este aceeiaşi pe toate componentele într-un circuit paralel, aşa că putem copleta toate coloanele cu aceeiaşi valoare a tensiunii:</p>

<p><img src="../poze/12033.png" alt="tabel"/></p>

<p>Acum putem aplica legea lui Ohm (I=E/Z) vertical pentru cele două coloane, calculând curentul prin rezistor şi curentul prin bobină:</p>

<p><img src="../poze/12034.png" alt="tabel"/></p>

<p>La fel ca în cazul circuitelor de curent continuu, curenţii de ramură în circuitele de curent alternativ se însumează pentru a forma curentul total (legea lui Kirchhoff pentru curent este valabilă şi în acest caz):</p>

<p><img src="../poze/12035.png" alt="tabel"/></p>

<p>Impedanţa totală poate fi calculată folosind legea lui Ohm (Z=E/I) vertical pe coloana „Total”. Impedanţa totală poate fi calculată, de asemenea, folosind o formulă echivalentă celei folosite pentru calcularea rezistenţei totale paralele:</p>

<p><img src="../poze/12036.png" alt="formula de calcul a impedanţei paralele totale"/></p>

<p>Indiferent ce motodă folosim, rezultatul este acelaşi:</p>

<p><img src="../poze/12037.png" alt="tabel"/></p>

<p class="sumar">Sumar:</p>
<ul>
	<li>În analiza circuitelor, impedanţele paralel (Z) se comportă precum rezistorii (R) paralel: impedanţa totală este mai mică decât impedanţă fiecărei ramuri luată individual, folosind formula echivalentă. Atenţie, realizaţi toate calculele sub formă complexă, nu scalară! Z<sub>Total</sub> = 1/(1/Z<sub>1</sub> + 1/Z<sub>2</sub> + . . . 1/Z<sub>n</sub>)</li>
	<li>Legea lui Ohm pentru circuitele de curent alternativ: E = IZ ; I = E/Z ; Z = E/I</li>
	<li>Când rezistorii şi bobinele sunt conectate în parelel, impedanţa totală va avea un unghi de fază între 0<sup>o</sup> şi +90<sup>o</sup>. Curentul din circuit va avea un unghi de fază între <sup>o</sup> şi -90<sup>o</sup></li>
	<li>Circuitele paralel în curent alternativ prezintă aceleaşi proprietăţi ca şi circuitele în curent continuu: căderile de tensiune sunt aceleaşi pe toate componentele circuitului, curenţii de ramură se însumează şi dau naştere curentului total, iar impedanţele totală este mai mică decât impedanţa fiecărei ramuri luate în parte</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>