<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Relee temporizate</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Relee temporizate</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>Unele relee sunt prevăzute cun un fel de „amortizor”. Acest mecanism, ataşat arăturii releului previne deplasarea imediată şi completă a armăturii atunci când bobina este energizată sau de-energizată. Datorită acestui lucru, releul are proprietatea unei acţionări temporizate (întârziate în timp). Astfel de relee temporizate pot fi construite pentru temporizarea deplasării armăturii în momentul energizării bobinei, în momentul de-energizării bobinei, sau pentru ambele situaţii.</p>

<p>Releele temporizate au ca şi specificaţie nu doar poziţia normal-închisă sau normal-deschisă a contactelor, ci şi modul în care acţionează temporizarea (la închiderea sau la deschiderea contactelor). Mai jos este o descriere a celor patru tipuri de relee temporizate.</p>

<h2>Releu temporizat la închidere normal deschis</h2>

<p>Acest tip de contact este normal deschis atunci când bobina nu este energizată. Contactul se închide doar după aplicarea unui curent electric prin bobina releului, şi doar după o anumită perioadă de timp de la aplicarea acestuia. Cu alte cuvinte, direcţia deplasării contactului este identică cu cea a unui contact normal deschis, dar există o întârziere (temporizare) la închiderea contactului. Datorită faptului că temporizarea are loc în direcţia de energizare a bobinei, acest tip de contact mai poartă numele de normal-deschis  cu acţionare întârziată.</p>

<img class="floatleft" src="../poze/04043.png" alt="releu temporizat la închidere normal deschis"/>

<p>Releul din figura alăturată este un releu temporizat la închidere, normal-deschis. Acesta se închide după cinci secunde de la energizarea bobinei. Deschiderea se realizează imediat după de-energizarea bobinei.</p>

<div class="clear"></div>

<img class="floatleft" src="../poze/04044.png" alt="diagrama timp de funcţionare a contactelor unui releu temporizat la închidere, normal deschis"/>

<p>Alăturat este o diagramă de timp ce prezintă modul de funcţionare a contactelor acestui tip de releu temporizat.</p>

<div class="clear"></div>

<h2>Releu temporizat la deschidere, normal-deschis</h2>

<p>Asemenea releului precedent, şi acest dispozitiv este normal-deschis atunci când bobina este de-energizată. La aplicarea unui curent pe bobină, contactele releului se închid. Faţă de cazul precedent însă, temporizarea (întârzierea) are loc după de-energizarea bobine şi nu după energizarea ei. Datorită faptului că temporizarea are loc după de-energizarea bobinei, acest tip de contact mai poartă numele de normal deschis cu întârziere la revenire.</p>

<img class="floatleft" src="../poze/04045.png" alt="releu temporizat la deschidere normal deschis"/>

<p>Releul temporizat la deschidere, normal deschis, din figura alăturată se închide imediat după energizarea bobinei. Deschiderea contactelor are loc însă la cinci secunde după de-energizarea bobinei.</p>

<div class="clear"></div>

<img class="floatleft" src="../poze/04046.png" alt="diagrama timp de funcţionare a contactelor unui releu temporizat la deschidere, normal deschis"/>

<p>Diagrama de timp în acest caz, este cea din figura alăturată.</p>

<div class="clear"></div>

<h2>Releu temporizat la deschidere, normal-închis</h2>

<img class="floatleft" src="../poze/04047.png" alt="releu temporizat la deschidere normal închis"/>

<p>Acest tip de contact este normal închis atunci când bobina nu este energizată. Contactul se deschide la aplicarea unui curent prin bobină, dar doar după o anumită perioadă de timp. Cu alte cuvinte, direcţia de deplasare a contactului este identică cu a unui contact normal-închis, doar că există o temporizare în direcţia deschiderii acestuia. Datorită faptului că temporizarea are loc în direcţia energizării bobinei, acest contact mai poartă numele de contact  normal închis cu acţionare întârziată.</p>

<div class="clear"></div>

<img class="floatleft" src="../poze/04048.png" alt="diagrama timp de funcţionare a contactelor unui releu temporizat la deschidere, normal închis"/>

<div class="clear"></div>

<h2>Releu temporizat la închidere, normal-închis</h2>

<img class="floatleft" src="../poze/04049.png" alt="releu temporizat la închidere normal închis"/>

<p>Asemenea releului temporizat la deschidere normal-închis, acest tip de contact este normal-închis atunci când bobina nu este energizată. Deschiderea se realizează prin aplicarea unui curent prin bobina releului. Totuşi, la de-energizarea bobinei, contactele se închid cu o anumită întârziere de timp. Acest tip de contact mai poartă numele de contact normal închis cu întârziere la revenire.</p>

<div class="clear"></div>

<img class="floatleft" src="../poze/04050.png" alt="diagrama timp de funcţionare a contactelor unui releu temporizat la închidere, normal închis"/>

<div class="clear"></div>

<h2>Alte tipuri de relee temporizate</h2>

<p>Releele temporizate mecanice, mai vechi, utilizau amortizoare mecanice sau dispozitive cu pistoane/cilindrii umplute cu fluid pentru îtârzierea deplasării armăturilor. Modelele mai nou utilizează circuite electronice cu reţele rezistor-condensator pentru genererarea întârzierii. Energizarea (instantanee) a releului electromecanic se realizează cu ajutorul semnalului de ieşire al circuitului electronic. Aceste relee electronice sunt mai adaptabile decât variantele mecanice, şi mult mai durabile. Multe modele sunt capabile de efectuarea unor operaţii de temporizare avansate:</p>

<img class="floatleft" src="../poze/04051.png" alt="releu temporizat normal-deschis cu o singură închidere"/>

<p>Releu temporizat normal-deschis cu o singură închidere. Aceste relee se închid o singură dată, un anumit interval de timp şi apoi se re-deschid, la o tranziţie a intrării de la starea de-energizată la starea energizată.</p>

<div class="clear"></div>

<img class="floatleft" src="../poze/04052.png" alt="releu temporizat normal-deschis cu deschideri/închideri repetate"/>

<p>Releu temporizat normal-deschis cu deschideri/închideri repetate. Acest releu se închide şi se deschide pentru un anumit interval de timp atâta timp cât bobina este energizată.</p>

<div class="clear"></div>

<img class="floatleft" src="../poze/04053.png" alt="releu temporizat de supraveghere"/>

<p>Releu temporizat de supraveghere. Acest releu îşi schimbă starea în cazul în care semnalul de intrare nu variază continuu de la starea energizată la starea de-energizată.</p>

<div class="clear"></div>

<p>Această ultimă metodă de temporizare este utilă pentru monitorizarea sistemelor bazate pe calculatoare. Dacă se foloseşte un calculator pentru controlul unui proces critic, este recomandată de obicei instalarea unui sistem automat de alarmare în cazul în care calculatorul se blochează din diferite motive. O metodă relativ simplă de instalare a unui astfel de sistem constă în energizarea şi de-energizarea unei bobine prin intermediul unui semnal trimis de calculator. Dacă sistemul se blochează, semnalul de intrare pe releu nu se va mai modifica (se va bloca la ultima stare). La puţin timp după aceasta, contactul releului se va închide semnalizând o problemă.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Releele temporizate introduc o anumită întârziere de la momentul energizării/de-energizării bobinei şi până la închiderea/deschiderea contactelor.</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>