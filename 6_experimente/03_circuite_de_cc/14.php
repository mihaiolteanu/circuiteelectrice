<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuit de mediere</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>14. Circuit de mediere</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Scopul experimentului</h2>

<p>Vom vedea în cele ce urmează cum puem realiza media aritmedică a valorilor tensiunilor cu ajutorul unei reţele de rezistori. Aceasta este de fapt o aplicaţie a teoremei lui Millman. Veţi avea nevoie de 3 baterii (sau surse de alimentare în c.c.), fiecare cu o tensiune diferită şi trei rezistori cu rezistenţe egale (între 10 kΩ şi 47 kΩ fiecare). Practic, vom realiza circuitul de mai jos:</p>

<img src="../poze/05115.png" width="256" height="179" alt="circuit de mediere a tensiunilor printr-o reţea de rezistori"/>

<img src="../poze/05116.png" width="300" height="358" alt="circuit de mediere a tensiunilor printr-o reţea de rezistori"/>

<img src="../poze/05117.png" width="240" height="353" alt="circuit de mediere a tensiunilor printr-o reţea de rezistori"/>

<p>Acest circuit realizează funcţia matematică de mediere. Practic, intrarea circuitului constă din cele trei tensiuni, iar ieşirea din media aritmetică a acestora, astfel:</p>

<div class="formula">
V<sub>ieşire</sub> = (V<sub>1</sub> + V<sub>2</sub> + V<sub>3</sub>) / 3
</div>

<h2>Realizarea şi funţionarea circuitului de mediere</h2>

<p>Construiţi acest circuit conform figurii de mai sus. Măsuraţi apoi tensiunile celor trei baterii cu ajutorul unui voltmetru. Notaţi-vă aceste valori pe o foaie de hârtie şi calculaţi media lor aritmetică, conform formulei de mai sus. Când măsuraţi tensiunea fiecărei baterii, ţineţi sonda neagră conectată la „masă” (partea bateriei conectată direct la celelalte baterii prin conductorii de legătură). Atingeţi celălalt terminal al bateriei cu sonda roşie. Polaritatea este foarte importantă în această situaţie. Puteţi observa din schema de mai sus, că una din baterii este conectată invers faţă de celelalte două. Tensiunea acestei baterii va trebui să fie negativă atunci când o măsurăm cu un voltmetru digital. Tensiunile celorlalte două baterii vor fi pozitive.</p>

<p>Când voltmetrul este conectat în circuit conform figurii de mai sus, valoarea indicată (V<sub>ieşire</sub>) va fi media aritmetică a tensiunilor celor trei baterii. Dacă valorile rezistorilor sunt astfel alese încât să fie foarte apropiate între ele, tensiunea de ieşire a circuitului va fi foarte aproape de valoarea calculată pe hârtie.</p>

<p>Dacă una dintre baterii este deconectată, valoarea tensiunii de ieşire va fi egală cu media aritmetică a celor două tensiuni rămase (baterii). În cazul în care conductorii de legătură conectaţi iniţial la bornele bateriei înlăturate din circuit, sunt conectaţi împreună, circuitul va realia media aritmetică a celor două tensiuni rămase împreună cu valoarea de 0 V. Tensiunea de ieşire va fi prin urmare mai mică:</p>

<img src="../poze/05118.png" width="250" height="335" alt="circuit de mediere a tensiunilor printr-o reţea de rezistori"/>
 
<h2>Concluzii şi notă istorică</h2>

<p>Datorită simplităţii acestui circuit, nu-l putem numi un „calculator” în adevăratul sens al cuvântului. Totuşi, acesta realizează foarte funcţia matematică de mediere, şi o realizează mult mai rapid decât sunt capabile calculatoarele digitale. Acestea din urmă realizează operaţiile matematice printr-o succesiune de paşi discreti. Calculatoarele analogice (precum cel de mai sus), realizează calculele într-un mod continuu, valorificând legea lui Ohm şi legile lui Kirchhoff în scop aritmetic. Calcularea răspunsului depinde de viteza de propagare a tensiunii prin întreg circuitul, practic, viteza luminii (aproximativ)!</p>

<p>Prin introducerea circuitelor de amplificare, semnalele de tensiune din reţelele analogice de calculatoare pot fi amplificate şi re-utilizate în alte reţele pentru a realiza o varietate de funcţii matematice. Astfel de calculatoare analogice sunt excelente pentru realizarea funcţiilor de integrare şi diferenţiere. Ele pot fi folosite prin urmare pentru simularea comportamentului unor sisteme mecanice, electrice şi chiar chimice destul de complexe.</p>

<p>La un moment dat, calculatoarele analogice erau considerate instrumentul cel mai important pentru cercetările din domeniul ingineriei. Pe parcurs însă, acestea au fost înlocuite de calculatoarele digitale, ce realizează operaţiile matematice cu o precizie mai bună decât cele analogice, chiar dacă viteza teoretică este mult mai mică. Cu toate acestea, realizarea practică a unor astfel de circuite, pentru începători, duce la o înţelegerea mult mai bună a funcţionării circuitelor electrice în general. Ce alte operaţii matematice credeţi că pot fi realizate cu astfel de circuite analogice?</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>