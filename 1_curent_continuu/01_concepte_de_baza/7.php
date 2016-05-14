<?php include ($_SERVER['DOCUMENT_ROOT']."/files/xml_header.html")?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>7. Sensul convenţional şi sensul real de deplasare al electronilor</title>
  </head>
<body>
  <div id="meniu"><?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?></div>
  <div id="header">
	<h1>7. Sensul convenţional şi sensul real de deplasare al electronilor</h1>
  </div>


<div id="meniu2">
	<div id="breadcrumbs"><?php include ("breadcrumbs.html")?></div>
	<?php include ("meniu2.html")?>
</div>  

<div id="contents">
<p><i>„Cel mai frumos lucru legat de standarde este că există atât de multe din care putem alege”</i><br/><b>Andrew S. Tanenbaum, profesor de informatică</b></p>

<p>Când Benjamin Franklin a presupus direcţia de curgere a sarcinii electrice (de pe parafină spre lână), a creat un precedent în notaţiile electrice ce există până în zielele noastre, în ciuda faptului că acum se ştie că electronii sunt purtătorii de sarcină electrică, şi că aceştia se deplasează de pe lână pe parafină - nu invers - atunci când aceste două materiale sunt frecate unul de celalalt. Din această cauză spunem că electronii posedă o sarcină <i>negativă</i>: deoarece Franklin a presupus că sarcina electrică se deplasează în direcţia contrară faţă de cea reală. Prin urmare, obiectele pe care el le-a numit „negative” (reprezentând un deficit de sarcină) au defapt un surplus de electroni.</p>

<p>În momentul în care a fost descoperita adevărata direcţie de deplasare a electronilor, nomenclatura „pozitiv” şi „negativ” era atât de bine stabilită în comunitatea ştiinţifică încât nu a fost făcut niciun efor spre modificarea ei, deşi numirea electronilor „pozitivi” ar fi mult mai potrivită ca şi purtători de sarcină în „exces”. Trebuie să realizăm că termenii de „pozitiv” şi „negativ” sunt invenţii ale oamenilor, şi nu au nici cea mai mică însemnătate dincolo de convenţiile noastre de limbaj şi descriere ştiinţifică. Franklin s-ar fi putut foarte bine referi la un surplus de sarcină cu termenul „negru” şi o deficienţă cu termenul „alb” (sau chiar invers), caz în care oamenii de ştiinţă ar considera acum electronii ca având o sarcină „albă” (sau „neagră”, în funcţie de alegerea făcută iniţial).</p>

<p>Datorită faptului că tindem să asociem termenul de „pozitiv” cu un „surplus”, şi termenul „negativ” cu o „deficienţă”, standardul tehnic pentru denumirea sarcinii electronilor pare să fie chiar invers. Datorită acestui lucru, mulţi ingineri se decid să menţină vechiul concept al electricităţii, unde „pozitiv” înseamnă un surplus de sarcină, şi notează curgerea curentului în acest fel. Această notaţie a devenit cunoscută sub denumirea de <i>sensul convenţional de deplasare al electronilor</i>:</p>

#+CAPTION: sensul convenţional de deplasare al electronilor
[[../poze/00438.png]]

<p>Alţii aleg să descrie deplasarea sarcinii exact aşa cum se realizează ea din punct de vedere fizic într-un circuit. Această notaţia a devenit cunoscută sub numele de <i>sensul real de deplasare al electronilor</i>:</p>

#+CAPTION: sensul real de deplasare al electronilor
[[../poze/00439.png]]

<p>În cazul sensului convenţional de deplasare al electronilor, deplasarea sarcinii electrice este indicată prin denumirile (tehnic incorecte) de + şi -. În acest fel aceste denumiri au sens, dar direcţia de deplasare a sarcinii este incorectă. În cazul sensului real de deplasare al electronilor, urmărim deplasarea reală a electronilor prin circuit, dar denumirile de + şi - sunt puse invers. Contează chiar aşa de mult modul în care punem aceste etichete într-un circuit? Nu, atâta timp cât folosim aceeiaşi notaţie peste tot. Putem folosi direcţia imaginată de Franklin a curgerii electronilor (convenţională) sau cea efectivă (reală) cu aceleaşi rezultate din punct de vedere al analizei circuitului. Conceptele de tensiune, curent, rezistenţă, continuitate şi chiar elemente matematice precum „Legea lui Ohm” (Capitolul 2) sau „Legile lui Kirchhoff” (Capitolul 6) sunt la fel de valide oricare notaţie am folosi-o.</p>

<p>Notaţia convenţională este folosită de majoritatea inginerilor şi ilustrată în majoritatea cărţilor de inginerie. Notaţia reală este cel mai adeasea întâlnita în textele introductive (aceste, de exemplu) şi în scrierile oamenilor de ştiinţă, în special în cazul celor ce studiază fizica materialelor solide pentru că ei sunt interesaţi de deplasarea reală a electronilor în substanţe. Aceste preferinţe sunt culturale, în sensul că unele grupuri de oameni au găsit avantaje notării curgerii curentului fie real fie convenţional. Prin faptul că majoritatea analizelor circuitelor electrice nu depinde de o descriere exactă din punct de vedere tehnic a deplasării electronilor, alegerea dintre cele două notaţii este (aproape) arbitrară.</p>

<p>Multe dispozitive electrice suportă curenţi electrici în ambele direcţii fără nicio diferenţă de funcţionare. Becurile cu incandescenţă, de exemplu, produc lumină cu aceeiaşi eficienţa indiferent de sensul de parcurgere al curentului prin ele. Funcţionează chiar foarte bine în curent alternativ (ca), acolo unde direcţia se modifică rapid în timp. Conductorii şi întrerupătoarele sunt de asemenea exemple din această categorie. Termenul tehnic pentru această „indiferenţă” la curgere este de dispozitive <i>nepolarizate</i>. Invers, orice dispozitive ce funcţionează diferit în funcţie de direcţie curentului se numesc dispozitive <i>polarizate</i>.</p>

<p>Există multe asfel de dispozitive polarizate folosite în circuitele electrice. Multe dintre ele sunt realizate din substanţe denumite <i>semiconductoare</i>, şi prin urmare nu le vom studia decât în al treilea volum din această carte. Ca şi în cazul întrerupătoarelor, becurilor sau bateriilor, fiecare din aceste dispozitive este reprezentat grafic de un simbol unic. Simbolurile dispozitivelor polarizate conţin de obicei o săgeată, undeva în reprezentarea lor, pentru a desemna sensul preferat sau unic al direcţiei curentului. În acest caz, notaţia convenţională şi cea reală contează cu adevărat. Deoarece inginerii din trecut au adoptat notaţia convenţională ca şi standard, şi pentru că inginerii sunt cei care au inventat dispozitivele electrice şi simbolurile lor, săgeţile folosit în aceste reprezentări, <i>indică toate în sensul convenţional de deplasare al electronilor, şi nu în cel real</i>. Ce vrem să spunem este că toate aceste dispozitive <b>nu</b> indică în simbolurile lor deplasarea reală a electronilor prin ele.</p>

<p>Probabil că cel mai bun exemplu de dispozitiv polarizat o reprezintă <i>dioda</i>.O diodă este o „valvă” electrică cu sens unic. Ideal, dioda oferă deplasare liberă electronilor într-o singură direcţie (rezistenţa foarte mică), dar prevină deplasarea electronilor în direcţia opusă (rezistenţă infinită). Simbolul folosit este acesta:</p>

#+CAPTION: simbolul diodei
[[../poze/00440.png]]

<p>Introdusă într-un circuit cu o baterie şi un bec, se comportă asfel<sup>5</sup>:</p>

#+CAPTION: funcţionarea diodei
[[../poze/00441.png]]

<p>Când dioda este plasată în direcţia curgerii curentului, becul se aprinde. Altfel dioda blochează curgerea electronilor precum oricare altă întrerupere din circuit, iar becul nu va lumina.</p>

<p>Dacă folosim notaţia convenţională, săgeata diodei este foarte uşor de înţeles: triunghiul este aşezat în direcţia de curgere a curentului, de la pozitiv spre negativ:</p>

#+CAPTION: sensul curentului prin diodă folosind notaţia convenţională
[[../poze/00442.png]]

<p>Pe de altă parte, dacă folosim notaţia reală de deplasare a electronilor prin circuit, săgeata diodei pare aşezată invers:</p>

#+CAPTION: sensul curentului prin diodă folosind notaţia reală
[[../poze/00443.png]]

<p>Din acest motiv simplu, mulţi oameni tind să folosească notaţia convenţională atunci când reprezinţă direcţia sarcinii electrice prin circuit. Dispozitivele semiconductoare precum diodele sunt mai uşor de înţeles asfel în cadrul unui circuit. Totuşi, unii aleg să folosească notaţia reală pentru a nu trebui să-şi reamintească lor însuşi de fiecare data faptul că electronic se deplasează <i>de fapt</i> în direcţia opusă, atunci când această direcţie de deplasare devine importantă dintr-un oarecare motiv.</p>

<p>Pentru restul cărţii se va folosi notaţia reală de deplasare a electronilor.</p>
</div>
<div id="footer">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
