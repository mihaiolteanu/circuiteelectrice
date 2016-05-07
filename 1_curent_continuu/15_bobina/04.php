<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Bobine serie şi paralel</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Bobine serie şi paralel</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<h3>Inductanţa bobinelor în serie</h3>
<p>La conectarea bobinelor în serie, inductanţa totală este suma inductanţelor individuale ale bobinelor. Acest lucru se datorează faptului că inductaţa este valoarea căderii de tensiune pe o bobină în funcţie de rata de variaţie a curentului prin ea. Dacă bobinele sunt conectate în serie, prin urmare având acelaşi curent pe la borne şi aceeiaşi rată de variaţia a acestuia, atunci valoarea totală a căderii de tensiune ca urmare a variaţiei curentului va fi suma căderilor individuale, pe fiecare bobină; se crează asfel o tensiune totală mult mai mare decât este posibilă pe fiecare bobină în parte, dacă aceasta ar fi fost conectată singură în circuit. O valoare mai mare a tensiunii pentru aceeiaşi valoare a variaţiei curentului înseamnă o inductanţă mai mare.</p>

<p><img src="../poze/00328.png" alt="bobine legate în serie"/></p>

<p>Asfel, inductanţa totală pentru bobinele serie este mai mare decât inductanţele individuale ale bobinelor. Formula pentru calcularea inductanţei serie este asemănătoare celei pentru calculu rezistenţelor în serie:</p>

<p><img src="../poze/10238.png" alt="inductanţa totală a bobinelor serie"/></p>

<h3>Inductanţa bobinelor în paralel</h3>
<p>La conectarea bobinelor în paralel, inductanţa totală este mai mică decât inductanţele individuale ale bobinelor. Explicaţia este asemănătoare celei pentru conectarea bobinelor în serie. Măsura inductanţei este valoarea căderii de tensiune pe bobină pentru o anumită rată de variaţie a curentului prin aceasta. Din moment ce valoarea curentului prin fiecare bobină este doar o fracţiune din valoarea totală a curentului, iar tensiunea pe fiecare bobină paralelă este egală, o modificare a valorii totale a curentului va duce la o cădere de tensiune pe fiecare bobină în parte mult mai mică decât dacă fiecare bobină ar fi fost considerată separat (legată singură în circuit). O cădere de tensiune mai mică pentru aceeiaşi rată de variaţie a curentului înseamnă o inductanţă mai mică.</p>

<p><img src="../poze/00329.png" alt="bobine legate în paralel"/></p>

<p>Prin urmare, inductanţa totală este mai mică decât valoarea inductanţei ce ar fi fost posibilă pe fiecare bobină luată în parte. Formula de calcul al inductanţei paralele are aceeiaşi formă ca şi a rezistenţelor conectate în paralel:</p>

<p><img src="../poze/10239.png" alt="inductanţa totală a bobinelor paralel"/></p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Inductanţele serie se adună</li>
	<li>Inductanţele paralel scad</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>