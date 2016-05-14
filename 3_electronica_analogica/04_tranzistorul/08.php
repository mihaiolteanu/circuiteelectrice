<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Amplificatoare clasa A, B, AB, C şi D</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>9. Amplificatoare clasa A, B, AB, C şi D</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>După modul de reproducere la ieşire a formei de undă de la intrare, amplificatoarele pot fi împărţite pe <i>clase</i>. Aceaste clase sunt desemnate cu literele A, B, AB, C şi D.</p>

<h2>Amplificator clasa A</h2>

<p>În cazul amplificatoarelor de clasă A, întreg semnalul de intrare este reprodus la ieşire. Acest mod de operare al tranzistorului poate fi atins doar atunci când acest funcţionează tot timpul în zona activă, neatingând niciodată punctul de saturaţie sau de blocare. Pentru realizarea acestui lucru, este nevoie de o tensiune de polarizare de curent continuu suficient de mare pentru funcţionarea tranzistorului între zona de blocare şi cea de saturaţie. În acest fel, semnalul de intrare în curent alternativ va fi perfect „centrat” între limita superioară şi cea inferioară a nivelului de semnal al amplificatorului.</p>

#+CAPTION: amplificator clasa A
[[../poze/03124.png]]

<h2>Amplificator clasa B. Configuraţia contratimp</h2>

<p>Amplificatorul de clasă B este ceea ce am obţinut în cazul amplificatorului emitor comun, cu semnal de intrare în curent alternativ dar fără nicio tensiune de polarizare în curent continuu conectată la intrare. În acest caz, tranzistorul petrece doar o jumătate de timp în zona activă de funcţionare, iar în cealaltă jumătate de timp este blocat, datorită faptului că tensiune de intrare este prea mică, sau chiar de polaritate inversă, pentru a putea polariza direct joncţiunea bază-emitor.</p>

#+CAPTION: amplificator clasa B
[[../poze/03125.png]]

<p>Folosit individual, amplificatorul de clasă B nu este foarte folositor. De cele mai multe ori, distorsiunile foarte mari introduse în forme de undă, prim eliminarea unei semialternanţe, nu sunt acceptabile. Totuşi, această modalitate de polarizare a amplificatoarelor este folositoare dacă se folosesc două amplificatoare de clasă B în configuraţie <i>contratimp</i> (push-pull), fiecare amplificator reproducând doar o jumătate a formei de undă .</p>

#+CAPTION: conectarea a două amplificatoare clasă B în contratimp (push-pull)
[[../poze/03126.png]]

<p>Un avantaj al amplificatorului de clasă B (contratimp) faţă de cel de clasă A, constă într-o capacitate mai mare a puterii de ieşire. În clasa A, tranzistorul disipă o putere considerabilă sub formă de căldură datorită faptului că acesta se află tot timpul în zona activă de funcţionare. În clasa B, fiecare tranzistor conduce doar jumătate din timp, iar în cealaltă jumătate este blocat, nu conduce curent electric, şi prin urmare, puterea disipată sub formă de căldură este zero. Asfel, fiecare tranzistor are timp de „odihnă” şi de răcire, atunci când celălalt tranzistor se află în conducţie. Amplificatoarele de clasă A sunt mai simplu de construit, dar sunt limitate doar la aplicaţiie de putere joasă datorită căldurii generate.</p>

<h2>Amplificator clasa AB</h2>

<p>Amplificatoarele de clasă AB sunt undeva între clasa A şi clasa B; tranzistorul conduce mai mult de 50% din timp, dar mai puţin de 100%.</p>

<h2>Amplificator clasa C</h2>

<p>Dacă semnalul de intrare al amplificatorului este uşor negativ (sursa de tensiune în curent alternativ inversată), semnalul de ieşire va fi tăiat şi mai mult faţă de semnalul de ieşire al amplificatorului de clasa B. Tranzistorul va petrece majoritatea timpului în stare blocată:</p>

#+CAPTION: amplificator clasa C
[[../poze/03127.png]]

<p>Deşi această configuraţie nu pare practică, dacă se conectează un circuit rezonant condensator-bobină la ieşire, semnalul ocazional produs de amplificator la ieşire este suficient pentru punerea în funcţionare a oscilatorului:</p>

#+CAPTION: amplificator clasa C cu ieşire rezonantă
[[../poze/03127.png]]

<p>Datorită faptului că tranzistorul este în mare parte a timpului blocat, puterea la bornele sale poate fi mult mai mare decât în cazul celorlalte două configuraţii văzute mai sus. Datorită dependenţei de circuitul rezonante de la ieşire, acest amplificator poate fi folosit doar pentru semnale de o anumită frecvenţă fixă.</p>

<h2>Amplificator clasa D</h2>

<p>Acest tip de amplificator este total diferit fată de amplificatoarele de clasă A, B, AB sau C. Acesta nu este obţinut prin apliocarea unei anumite tensiune de polarizare, precum este cazul celorlalte clase, ci necesită o modificare a circuitului de amplificare. Nu vom intra pentru moment în detaliile construirii unui asfel de amplificator, dar vom discuta în schimb principiul său de funcţionare.</p>

<p>Un amplificator clasa D reproduce profilul formei de undă în tensiune de la intrare prin generarea unui semnal de ieşire dreptunghiular cu o rată de pulsaţie mare. <i>Factorul de umplere</i> reprezintă raportul dintre durata în care semnalul este maxim durata în care semnalul este zero. Cu alte cuvinte, reprezintă durata de funcţionare al unui dispozitiv, în general. Factorul de umplere variază odată cu amplitudinea instantanee a semnalului de intrare.</p>

#+CAPTION: principiul de funcţionare al amplificatorului clasă D; formele de undă de intrare şi ieşire nefiltrată
[[../poze/03230.png]]

<p>Cu cât amplitudinea instantanee a semnalului de intrare este mai mare, cu atât factorul de umplere a formei de undă dreptunghiulare este mai mare. Singurul motiv pentru folosirea amplificatorului de clasă D, este evitarea funcţionării tranzistorului în zona activă de funcţionare; tranzistorul va fi tot timpul fie blocat fie saturat. Puterea disipată de tranzistor va fi foarte mică în acest caz. Dezavantajul metodei constă în prezenţa armonicilor la ieşire. Din fericire, din moment ce frecvenţa acestor armonici este mult mai mare decât frecvenţa semnalului de intrare, acestea pot fi filtrate relativ uşor cu ajutorul unui filtru trece-jos, rezultând un semnal de ieşire mult mai asemănător cu semnalul de intrare original. Amplificatoarele de clasă D sunt folosite de obicei în locurile unde este nevoie de puteri mari la frecvenţe raltiv joase, precum invertoarele industriale (dispozitive ce transformă curentul continuu în curent alternativ) şi amplificatoarele audio de înaltă performanţă.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Amplificatorul clasa A se află în zona activă de funcţionare pe întreaga perioadă a formei de undă de la intrare, prin urmare, aceasta este reprodusă în totalitate la ieşire</li>
	<li>Amplificatorul clasa B reproduce la ieşire doar o jumătate din forma de undăde la intrare: fie jumătatea pozitivă, fie pe cea negativă. Tranzistorul se află doar o jumătate din timp în zona activă de funcţionarea, iar în rest este blocat</li>
	<li>Amplificatorul clasa AB este o configuraţie ce se află între amplficatorul de clasa A şi cel de clasă B în ceea ce priveşte timpul petrecut de acesta în zona activă de funcţionare</li>
	<li>Clasa D presupune (re)-proiectarea amplificatorului, şi nu se bazează doar pe tensiunea de polarizare în curent continuu, aşa cum este cazul claselor precedente. Forma semnalului de ieşire este dreptunghiulară, iar factorul de umplere al acestuia depinde de amplitudinea instantanee a semnalului de intrare. Tranzistorii unui asfel de amplificator nu se află niciodată în zona activă de funcţionare, ei sunt fie blocaţi fie saturaţi. Eficienţa acestui tip de amplificator este mare datorită puterii dispiate sub formă de căldură foarte scăzută</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
