<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Aplicaţii ale rezonanţei</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Aplicaţii ale rezonanţei</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Până acum, fenomenul rezonanţei pare doar o curiozitate nefolositoare, sau chiar dăunătoare,mai ales în cazul scurt-circuitării sursei de tensiune alternativă în circuitul serie. Totuşi, rezonanţa este o proprietate valoroasă a circuitelor de curent alternativ, fiind folosită într-o varietate de aplicaţii.</p>

<p>Una dintre aplicaţiile rezonanţei constă în atingerea unei frecvenţe stabile în circuitele folosite pentru producerea semnalelor alternative. De obicei este folosit un circuit paralel în acest scop, condensatorul şi bobina fiind conectate împreună, schimbând energie între ele, alternativ. La fel cum pendulul poate fi folosit pentru stabilizarea frecvenţei oscilaţiilor ceasurilor, un circuit oscilator (paralel) poate fi folosit pentru stabilizarea frecvenţei electrice a unui circuit <i>oscilator</i> de curent alternativ. După cum am mai spus, frecvenţa impusă de circuitul oscilator depinde doar de valorile L şi C, şi nu de amplitudinea tensiunii sau a curentului din circuit.</p>

<p><img src="../poze/02100.png" alt="circuit oscilator LC în curent alternativ"/></p>

<p>O altă aplicaţie a rezonanţei este în circuitele în care efectele impedanţelor mărite sau micşorate, la o anumită frecvenţă, sunt de dorit. Un circuit rezonant poate fi folosit pentru „blocarea” (impedanţă mare) unei anumite frecvenţe sau a unui domeniu de frecvenţe; circuitul se comportă în acest caz precum un „filtru”, pentru selectarea anumitor frecvenţe în defavoarea altora. Aceste circuite sunt de fapt denumite <i>filtre</i>, iar studiul lor constituie o întreagă disciplină.</p>

<p>În principiu, acesta este şi modul de funcţionare al unui aparat de radiorecepţie, ce selectează o anumită frecvenţă (post radio) din seria frecvenţelor variate recepţionate de antenă.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Rezonanţa poate fi utilizată pentru menţinearea oscilaţiilor circuitelor de curent alternativ la o frecvenţă constantă</li>
	<li>Rezonanţa poate fi exploatată pentru proprietăţile sale cu privire la impedanţă: creşterea sau descreşterea dramatică a impedanţei pentru anumite frecvenţe. Circuitele concepute special pentru înlăturarea tuturor frecvenţelor din circuit exceptând cele dorite, se numesc <i>filtre</i></li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>