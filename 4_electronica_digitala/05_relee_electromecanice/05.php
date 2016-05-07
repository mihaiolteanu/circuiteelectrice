<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Relee semiconductoare</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Relee semiconductoare</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Pe cât de utile sunt, releele electromecanice au totuşi multe inconveniente. Acestea sunt relativ scumpe, au o durată de viaţă a contactelor limitată, ocupă mult loc, iar timpii de comutaţie sunt mari în comparaţie cu dispozitivele semiconductoare moderne. Aceste limitări se aplică în special releelor de putere. Pentru a întâmpina aceste neajunsuri, mulţi producători oferă relee semiconductoare ce folosesc tiristori, triace sau tranzistori în loc de contactele mecanice.</p>

<img class="floatleft" src="../poze/04054.png" alt="releu semiconductor"/>

<p>Aceste dispozitive de ieşire (tiristori, triace, tranzistori) sunt cuplate optic la o sursă de lumină (LED) în interiorul releeului. Releul este pornit prin energizarea acestui LED, de obicei prin intermediul unei surse de tensiune de c.c. scăzute. Această izolare optică între intrare şi ieşire se ridică la nivelul celor mai bune relee electromecanice posibile.</p>

<div class="clear"></div>

<p>Fiind dispozitive semiconductoare, nu există părţi mobile care să se deterioreze la uzură. Timpii de comutaţie sunt mult mai mici decât viteza maximă posibilă de deplasare a armăturilor în cazul releelor mecanice. Nu există pericolul apariţiei arcelor electrice între contacte şi nici probleme corozive. Totuşi, aceste dispozitive semiconductoare sunt mai scumpe, mai ales pentru curenţi înalţi.</p>

<p>Un avantaj important al releelor cu tiristoare. este tendinţa naturală de deschidere a contactelor, într-un circuit de c.a., doar la trecerea curentului prin zero. Histereza „naturală” a tiristoarelor menţine continutiatea circuitului chiar şi după de-energizarea LED-ului, până în momentul în care c.a. scade sub un anumit prag (curentul de menţinere). Practic, acest lucru înseamnă că circuitul nu se va întrerupe în mijlocul unei semi-perioade (atunci când valoarea curentului este maximă, de exemplu). O asemenea întrerupere într-un circuit cu o inductanţă mare, va produce în mod normal o creştere mare şi de scurtă durată tensiunii. Acest lucru se datorează „căderii” bruşte a câmpului magnetic din jurul inductanţei. Acest lucru nu are loc însă în cazul unul releu semiconductor echipat cu tiristori.</p>

<p>Un dezavantaj al releelor semiconductoare este tendinţa de scurt-circuitare în caz de defect. Releele electromecanice tind să se deschidă la defect. Dintre cele două stări, deschiderea la defect este considerată mai sigură faţă de scurt-circuitarea la defect. Din acest motiv, în anumite aplicaţii, releele electromecanice sunt încă folosite în dauna celor semiconductoare.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li></li>
	<li></li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>