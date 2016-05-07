<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Diagrame ladder</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Diagrame ladder</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>

<div id="contents">

<p>Diagramele ladder sunt diagrame speciale folosite de obicei în sistemele logice de control industrial. Denumirea de ladder (din engleză: scară) vine de la asemănarea acestora cu o scară: două linii verticale  desemnând sursa de putere, şi linii orizontale reprezentând circuitele de control.</p>

<img class="floatleft" src="../poze/04002.png" alt="diagrama ladder de control a unei lămpi prin intermediul unui comutator manual"/>

<p>Ca şi exemplu de început, o diagramă ladder simplă reprezentând o lampă controlată de un comutator manual arată precum în figura alăturată. Notaţiile L<sub>1</sub> şi L<sub>2</sub> desemnează bornele unei surse de alimentare de 120 V c.a. L<sub>1</sub> este faza iar L<sub>2</sub> este conductorul neutru (legat la masă). Aceste notaţii nu au nicio legătură cu notaţia bobinelor.</p>

<div class="clear"></div>

<img class="floatleft" src="../poze/04003.png" alt="diagrama ladder de control a unei lămpi prin intermediul unui comutator manual; schema completă"/>

<p>Transformatorul sau generatorul ce alimentează acest circuit este omis pentru simplitate. În realitate, circuitul este cel alăturat.</p>

<div class="clear"></div>

<img class="floatleft" src="../poze/04004.png" alt="diagrama ladder de control a unei lămpi prin intermediul unui comutator manual; alimentare în c.c. la 24 V"/>

<p>Deşi circuitele logice industriale utilizează o tensiune de 120 V în c.a., există şi sisteme realizate la tensiuni mai mici în c.a. sau chiar şi în c.c.</p>

<div class="clear"></div>

<p>Atâta timp cât contactele comutatoarelor şi bobinele releelor sunt dimensionate corespunzător, tensiunea de alimentare a sistemului este irelevantă.</p>

<p>Observaţi cifra „1” notată pe conductorul dintre comutator şi lampă. În realitate acel conductor este notat cu cifra „1” folosind etichete adezive sau tuburi termocontractibile, în funcţie de preferinţe. Conductorii ce duc înspre comutator vor fi notaţi cu „L<sub>1</sub>, respectiv „1”. Conductorii ce duc înspre lampă vor fi notaţi cu „1”, respectiv „L<sub>2</sub>. Aceste numerotaţii sunt făcute pentru a uşura construirea şi întreţinerea întregului ansamblu. Fiecare conductor are propriul său număr unic. Numerotarea conductorilor nu se schimbă atunci când aceştia intră/ies dintr-un nod, indiferent dacă mărimea, culoarea sau lungimea lor se schimbă. Desigur, este de preferată utilizarea unei singura culori pentru desemnarea aceluiaşi conductor, dar acest lucru nu este tot timpul practic. Ceea ce contează este ca orice punct comun din punct de vedere electric dintr-un circuit de control să fie desemnat prin acelaşi număr de fir (conductor).</p>

<img class="floatleft" src="../poze/04005.png" alt="diagrama ladder"/>

<p>Să luăm de exemplu diagrama ladder alăturată. Conductorul notat cu „25” reprezintă de fapt acelaşi fir din punct de vedere electric, chiar dacă acesta este conectat la mai multe dispozitive.</p>

<div class="clear"></div>

<p>În diagramele ladder, sarcina (lampă, releu, etc.) este aproape tot timpul conectată la dreapta „scării”. Deşi din punct de vedere electric locaţia sarcinii nu are nicio importanţă, contează totuşi care capăt al „scării” este conectat la masă.</p>

<img class="floatleft" src="../poze/04006.png" alt="diagrama ladder"/>

<p>Să considerăm exemplul alăturat. În acest caz, lampa (sarcina) este conectată în dreapta circuitului, la fel şi masa sursei de alimentare. Aceasta nu este o simplă conincidenţă.</p>

<div class="clear"></div>

<img class="floatleft" src="../poze/04007.png" alt="diagrama ladder; masă accidentală"/>

<p>Să presupunem că la un moment dat există o conexiune accidentală între conductorul 1 şi masă. Această conexiune poate fi dată de uzura izolaţiei şi contactul conductorului cu un mediu conductor conectat la pământ. Cu ambele capete ale lămpii conectate la masă (acelaşi potenţial, prin urmare, cădere de tensiune zero), lampa este practic scurt-circuitată şi nu se poate aprinde. În cazul închiderii comutatorului, acest scurt-circuit va duce la arderea siguranţei fuzibile.</p>

<div class="clear"></div>

<img class="floatleft" src="../poze/04008.png" alt="diagrama ladder; masă accidentală"/>

<p>Dar, să vedem ce s-ar întâmpla în cazul unei defecţiuni identice (contactul accidental dintre conductorul 1 si masă) în cazul în care poziţia comutatorului este schimbată cu cea a lămpii. Şi în acest caz, L<sub>2</sub> este conectat la masă. Masa accidentală va forţă aprinderea lămpii, iar comutatorul nu va avea niciun efect asupra funcţionării acesteia.</p>

<div class="clear"></div>

<p>Este mult mai bine şi mai sigur din punct de vedere electric să avem un sistem a cărui siguranţă fuzibilă se arde în cazul unui defect de împământare , decât un sistem a cărui componente (lămpi, relee, etc.) nu pot fi controlate în cazul aceluiaşi defect. Din această cauză, sarcina(le) unei diagrame ladder trebuie tot timpul conectată lângă conductorul legat la masă (comun din punct de vedere electric cu acesta).</p>


<p class="sumar">Sumar:</p>
<ul>
	<li>Diagramele ladder, cuoscute şi sub numele de „logica ladder”, sunt un tip de notaţii şi reprezentări folosite frecvent pentru ilustrarea modului de interconectare a comutatoarelor şi a releelor electromecanice dintr-un circuit logic</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>