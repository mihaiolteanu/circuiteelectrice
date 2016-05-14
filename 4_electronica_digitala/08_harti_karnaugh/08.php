<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Mintermeni şi maxtermeni</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>8. Mintermeni şi maxtermeni</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>Până în acest moment am căutat soluţii sub forma unei sume de produse la problemele de simplificare booleană. Pentru fiecare dintre aceste soluţii există o altă soluţie sub forma unui produs de sume. Acest tip de soluţie se poate dovedi a fi mai practică, în funcţie de aplicaţie. Dar, înainte de a scrie soluţiile sub forma unui produs de sume, trebuie să introducem câteva concepte noi. Procedura de mai jos pentru extragerea termenilor sub formă de produs nu este nouă. Vrem doar să stabilim o procedură formală pentru mintermeni, ca mai apoi, să putem face o comparaţie cu noua procedură pentru maxtermeni.</p>

<h2>Analiza regiunilor ce conţin valori de 1 - mintermeni</h2>

<p>Un mintermen este o expresie booleană rezultând într-o valoare de 1 pentru ieşirea unei singure regiuni dintr-o hartă Karnaugh. Toate celelalte regiuni ale hărţii Karnaugh sau ale tabelului de adevăr fiind 0 în acest caz. Dacă un mintermen conţine un singur 1, iar regiunile rămase sunt toate 0, aria minimă pe care acest minterm o acoperă este 1.</p>

<p>Figura de mai jos (stânga) prezintă mintermenul ABC, un singur termen sub formă de produs, ca şi o singură valoare de 1 pe o hartă Karnaugh unde toate celelalte regiuni sunt 0. Până în acest moment, nu am prezentat valorile de 0 pe hărţile Karnaugh considerate. Acestea se omit de obicei, excepţie făcând cazurile speciale. Un alt mintermen, A'BC' este cel din dreapta. Ceea ce vrem să subliniem este faptul că adresa regiunii corespunde direct cu mintermenul extras de pe hartă. Regiunea 111 corespunde mintermenului ABC din stânga. Regiunea 010 corespunde la rândul ei mintermenului A'BC'. O expresie booleană sau o hartă poate avea mai mulţi mintermeni.</p>

<p>Referindu-ne la figura de mai sus, putem scrie procedura introducerii unui mintermen pe harta Karnaugh:</p>

<ul>
<li>Identificăm mintermenul (produsul) ce vrem să-l introducem pe hartă</li>
<li>Scriem valoarea numerică corespunzătoare</li>
<li>Ne folosim de valoarea binară ca şi adresă pe hartă</li>
<li>Introducem un 1 la adresa respectivă</li>
<li>Repetăm paşii de mai sus pentru un nou mintermen (termenii produs dintr-o sumă de produse)</li>
</ul>

<p>O expresie booleană este formată de cele mai multe ori din mai mulţi mintermeni, corespunzând mai multor regiuni pe o hartă Karnaugh, precum în exemplul de mai jos:</p>

#+CAPTION: simplificarea expresiei booleene prin intermediul hărţii Karnaugh
[[../poze/14127.png]]

<p>Mintermenii multiplii de pe această hartă sunt mintermenii individuali ce i-am analizat mai sus. Ceea ce vrem să reamintim este faptul că valorile de 1 sunt „traduse” de pe harta Karnaugh ca şi o adresă binară transformată direct într-unul sau mai mulţi termeni sub formă de produs. Prin direct, ne referim la faptul că 0 corespunde unei variabile negate, iar 1 corespunde unei variabile „pure”. De exemplu, 010 se transformă direct în A'BC'. În acest exemplu nu a existat nicio simplificare. Totuşi, avem ca şi rezultat o sumă de produse prin intermediul mintermenilor.</p>

<p>Referindu-ne la figura de mai sus, putem rezuma pe scurt procedura de urmat în cazul simplificării expresiei booleene sub forma unei sume de produse dintr-o hartă Karnaugh:</p>

<ul>
<li>Formăm grupuri de 1 cât mai mari posibile, acoperind toţi mintermenii de pe hartă. Grupurile trebuie să conţină un număr de regiuni sub forma puterii lui 2 (1, 2, 4, 8, etc.)</li>
<li>Scriem valori numerice binare pentru fiecare grup</li>
<li>Transformăm valoarea binară sub forma unui produs</li>
<li>Repetăm paşii de mai sus pentru toate grupurile formate. Din fiecare grup va rezulta un termen sub formă de produs</li>
<li>Expresia simplificată reprezintă suma acestor termeni sub formă de produs</li>
</ul>

<p>Nimic nou până în acest moment. Am scris doar paşii de urmat în cazul mintermenilor. Acelaşi lucru îl vom face şi în cazul maxtermenilor.</p>

<h2>Analiza regiunilor ce conţin valori de 0 - maxtermeni</h2>

<p>Să considerăm acum o funcţie booleană ce este 0 pentru o singură regiune şi 1 în rest:</p>

#+CAPTION: simplificarea expresiei booleene prin intermediul hărţii Karnaugh
[[../poze/14128.png]]

<p>Un maxtermen este o expresie booleană a cărei valori este 0 pentru o singură regiune, toate celelalte regiunii ale hărţii Karnaugh sau ale tabelului de adevăr fiind 0. Vedeţi şi explicaţia de la mintermen. Figura de sus stânga prezintă un maxtermen (A + B + C), o sumă de trei termeni simplii. Pe hartă, această sumă este reprezentată printr-un singur 0, toate celelalte regiunii ale hărţii fiind 1. Dacă un maxtermen are un singur 0, iar celelalte regiuni sunt 1, aria maximă pe care o acoperă este 1.</p>

<p>Există câteva diferenţe acum că am introdus şi maxtermenii. Maxtermenul este un 0, nu un 1 pe harta Karnaugh. Un maxterm este un termen sub formă de sumă, A + B + C în cazul nostru, şi nu termen sub formă de produs (ABC, de exemplu).</p>

<p>Pare ciudat că locaţia expresiei (termenului) (A + B + C) pe hartă este 000. Pentru ecuaţia „ieşire = (A + B + C) = 0, toate cele trei variabile (A, B, C) trebuie să fie egale cu 0. Doar expresia (0 + 0 + 0) = 0 va fi egală cu 0. Prin urmare, trecem singurul nostru maxtermen (A + B + C) în regiunea ce se află la adresa A,B,C = 000 pe harta Karnaugh, unde toate intrările sunt egale cu 0. Aceasta este singura posibilitate pentru a obţine valoarea de 0 pentru maxtermen. Toate celelalte regiuni conţin valori de 1 pentru că orice alte valoril de intrare diferite de (0, 0, 0) pentru expresia (A + B + C) au ca şi rezultat 1.</p>

<p>Luând în considerare figura de mai sus, paşii care trebuiesc urmaţii pentru introducerea unui maxtermen pe harta Karnaugh, sunt următorii:</p>

<ul>
<li>Identificăm termenul sub formă de sumă (maxtermenul) ce-l vom introduce pe hartă</li>
<li>Scriem valoarea numerică binară corespunzătoare</li>
<li>Formăm complementul</li>
<li>Utilizăm complementul ca şi adresă pentru introducerea valorii de 0 pe harta Karnaugh</li>
<li>Repetăm paşii de mai sus pentru toţi ceilalţi maxtermeni (termeni-sumă dintr-o expresie sub forma de produs de sume)</li>
</ul>

<p>Un alt maxtermen este prezentat în figura de mai jos. Valoarea numerică 000 corespunde termenului A' + B' + C'. Complementul este 111. Introducem o valoare de 0 pentru maxtermenul (A' + B' + C') la această adresă (1, 1, 1) a hărţii Karnaugh de mai jos:</p>

#+CAPTION: simplificarea expresiei booleene prin intermediul hărţii Karnaugh
[[../poze/14129.png]]

<h2>Scrierea expresiei booleene simplificate ca şi produs de sume</h2>

<p>O expresie booleană sub formă produsului de sume poate avea mai mulţi maxtermeni, conform figurii de mai jos:</p>

#+CAPTION: simplificarea expresiei booleene prin intermediul hărţii Karnaugh
[[../poze/14130.png]]

<p>Maxtermenul (A + B + C) sub formă numerică este 111, iar complementat este 000. Plasăm prin urmare un 0 la adresa (0, 0, 0). Maxtermenul (A + B + C') sub formă numerică este 110, iar complementat este 001. Plasăm prin urmare un zero la adresa (0, 0, 1).</p>

<p>Acum că am construit harta Karnaugh, suntem interesaţi de modul în care putem scrie o formă simplificată a expresiei booleene iniţiale sub formă de produs de sume. Primul pas este gruparea termenilor de 0, precum grupul de mai jos:</p>

#+CAPTION: simplificarea expresiei booleene prin intermediul hărţii Karnaugh
[[../poze/14131.png]]

<p>Scriem apoi valoarea binară corespunzătoare termenului-sumă, ce arată astfel: (0, 0, X). Pentru grupul format, atât A cât şi B sunt 0. Dar C este atât 0 cât şi 1. Prin urmare, scriem un X în locul valorii lui C. Formăm complementul: (1, 1, X). Scriem termenul sumă (A + B) ignorând C-ul si X-ul ce l-a înlocuit.</p>

<p>Să reluăm paşii necesari pentru reducerea unei expresii booleene la un produs de sume:</p>

<ul>
<li>Formăm grupuri de 0 cât mai mari posibile, incluzând toţi maxtermenii. Numărul termenilor trebuie să fie puteri ale lui 2</li>
<li>Screim valoarea numerică a grupului</li>
<li>Complementăm această valoare numerică a grupului</li>
<li>Transformăm valoarea complementată într-un termen sub formă de sumă</li>
<li>Repetăm paşii de mai sus pentru toate grupurile rămase pe hartă. Rezultatul fiecărui grup este un termen sub formă de sumă, iar rezultatul final este produsul acestor termeni-sumă</li>
</ul>

<h3>Exemplul 1</h3>

<p>Simplificaţi expresia booleană sub forma produsului de sume de mai jos. Scrieţi rezultatul final sub forma unui produs de sume:</p>

#+CAPTION: expresie booleană sub formă de produs de sume
[[../poze/14132.png]]

<p>Soluţie: completăm o hartă Karnaugh cu cei şapte maxtermeni de mai sus (introducem valori de 0). Reţineţi să complementaţi variabile de intrare pentru găsirea adresei corespunzătoare:</p>

#+CAPTION: simplificarea expresiei booleene prin intermediul hărţii Karnaugh
[[../poze/14133.png]]

<p>După ce am introdus toţi maxtermenii în tabel, trecem la gruparea regiunilor, precum în figura de mai jos. Grupurile mai mari se traduc printr-un termen-sumă cu mai puţine intrări. Cu cât avem mai puţine grupuri, cu atât vom avea mai puţin termeni-sumă în expresia finală:</p>

#+CAPTION: simplificarea expresiei booleene prin intermediul hărţii Karnaugh
[[../poze/14134.png]]

<p>Avem trei grupuri, prin urmare, trebuie să avem trei termeni-sumă în rezultatul final. Detaliile simplificării sunt prezentate în figura de mai sus. Pentru oricare grup, scriem mai întâi adresa de intrare, o comlementăm şi o transformăm într-un termen boolean sub formă de sumă. Rezultatul final este produsul acestor trei termeni-sumă.</p>

<h3>Exemplul 2</h3>

<p>Simplificaţi expresia booleană sub formă de produs de sume de mai jos, exprimând rezultatul sub forma unei sume de produse:</p>

#+CAPTION: expresie booleană sub formă de produs de sume
[[../poze/14132.png]]

<p>Această problemă este identică cu cea anterioară, cu diferenţa că expresia simplificată se cere sub formă de sumă de produse şi nu sub formă de produs de sume.</p>

<p>Trecem maxtermenii (0) din expresia iniţială pe harta Karnaugh de mai jos (stânga), exact ca în exemplul precedent:</p>

#+CAPTION: simplificarea expresiei booleene prin intermediul hărţii Karnaugh
[[../poze/14135.png]]

<p>Completăm apoi toate celelalte regiuni rămase libere cu valori de 1 (dreapta sus).</p>

<p>Formăm grupuri de 1 pentru toate regiunile ce conţin valori de 1. Scriem apoi rezultatul simplificat sub forma sumei de produse, conform secţiunii precedente a acestui capitol. Acest lucru este identic problemei precedente:</p>

#+CAPTION: simplificarea expresiei booleene prin intermediul hărţii Karnaugh
[[../poze/14136.png]]

<h2>Comparaţie între soluţiile cu mintermeni şi maxtermeni</h2>

<p>În figura de mai jos sunt ambele soluţii ale exemplelor de mai sus, pentru comparaţie:</p>

#+CAPTION: simplificarea expresiei booleene prin intermediul hărţii Karnaugh
[[../poze/14137.png]]

<p>Care soluţie este mai simplă? Dacă ar fi să implementăm fizic rezultatul sub formă de produs de sume, am avea nevoie de trei porţi logice SAU şi o poartă logică ŞI. Invers, darcă ar fi să implementăm rezultatul sub formă de sumă de produse, am avea nevoie de trei porţi ŞI şi o poartă SAU. În ambele situaţii am avea nevoie de patru porţi. Să numărăm atunci şi numărul de intrări ale porţilor. Prima variantă utilizează 8 intrări, iar a doua 7 intrări. Din definiţia costului minim, soluţia sub forma sumei de produse este mai simplă. Acesta este un exemplu tehnic corect, dar care nu ne este de prea mare folos în realitate.</p>

<p>Soluţia „corectă” depinde însă de complexitate şi de familia de porţi logice folosite. Soluţia sumei de produse este mai bună facă folosim circuite TTL, a căror porţi principale sunt porţile ŞI-negat. Acestea sunt foarte bune pentru implementări sub forma de sumă de produse. Pe de altă parte, soluţia produsului de sume este acceptabilă dacă folosim circuite CMOS, deoarece avem astfel la dispoziţie porţi SAU-negat de toate mărimile.</p>

<h2>Echivalenţa circuitelor ŞI-SAU cu circuitele ŞI-negat-ŞI-negat</h2>

<p>Circuitele cu porţi logice pentru ambele cazuri sunt prezentate mai jos, produsul de sume în stânga şi suma de produse în dreapta:</p>

#+CAPTION: simplificarea expresiei booleene prin intermediul hărţii Karnaugh
[[../poze/14138.png]]

<p>Reluăm mai jos (stânga) circuitul sub forma sumei de produse:</p>

#+CAPTION: circuite cu porţi logice
[[../poze/14139.png]]

<p>Dacă înlocuim toate porţile logice ŞI din stânga cu porţi logice ŞI-negat, obţinem rezultatu din dreapta sus. Poarta SAU de la intrare este înlocuită de asemenea cu o poartă ŞI-negat. Pentru a demonstra că logica ŞI-SAU este echivalentă cu logică ŞI-negat-ŞI-negat, este suficient să mutăm „cerculeţele” inversoare de la ieşirea celor trei porţi ŞI-negat la intrarea porţii finale ŞI-negat, conform figurii de mai jos:</p>

#+CAPTION: circuite cu porţi logice
[[../poze/14140.png]]

<p>În figura de mai sus (dreapta), putem observa că ieşirea unei porţi SI-negat cu intrări inversate este echivalentă din punct de vedere logic cu o poartă SAU, conform teoremei lui DeMorgan şi a negaţiei duble. Această informaţie ne este de ajutor în implementarea fizică a circuitelor digitale atunci când dispunem de circuite logice TTL cu porţi ŞI-negat.</p>

<p>Paşii necesari construirii logicii ŞI-negat-ŞI-negat în locul logicii ŞI-SAU, sunt următorii:</p>

<ul>
<li>Realizăm un circuit logic (teoretic) sub formă de sumă de produse</li>
<li>Când desenăm diagrama logică, înlocuim toate porţile logice (ŞI si SAU) cu porţi logice ŞI-negat</li>
<li>Intrările nefolosite trebuie legate la valoarea logică „înalt”</li>
<li>În caz de defect, nodurile interne de la primul nivel de ieşire al porţilor ŞI-negat nu sunt identice cu valorile diagramei ŞI-SAU, ci sunt inversate. Folosim diagrama logică ŞI-negat-ŞI-negat. Intrările şi ieşirile finale sunt identice, totuşi</li>
<li>Notăm fiecare capsulă (circuit integrat) cu U<sub>1</sub>, U<sub>2</sub>, etc.</li>
<li>Folosim catalogul producătorului pentru conectarea pinilor circuitului integrat la intrările si ieşirile porţilor din circuit </li>
</ul>

<h3>Exemplul 1</h3>

<p>Să reluăm o problemă precedentă ce implică o simplificare sub formă sumei de produse. Vom realiza o simplificare sub forma unui produs de sume de această dată. Putem compara cele două soluţii la final.</p>

#+CAPTION: simplificarea expresiei booleene cu ajutorul hărţi Karnaugh
[[../poze/14141.png]]

<p>Soluţie: în figura de sus stânga avem problema iniţială, o expresie booleană cu 9 mintermeni nesimplificată. Recapitulând, am format patru grupuri de câte patru regiuni fiecare. Rezultatul a fost o sumă de patru produse (partea din stânga, jos).</p>

<p>În figura din mijloc, completăm regiunile rămase libere cu valori de 0. Formăm două grupuri de câte patru regiuni. Grupul de jos (albastru) este A' + B, iar grupul din dreapta (roşu) este C' + D. Rezultatul este prin urmare un produs de două sume, (A' + B)(C' + D).</p>

<p>Comparând cele două soluţii de mai sus, putem observa că soluţia produsului de sume reprezintă soluţia cu cel mai mic cost. Pentru implementarea primei soluţii am avea nevoie de 5 porţii, iar pentru soluţia produsului de sume am avea nevoie doar de 3. Folosind circuite logice TTL, aceasta din urmă este şi atractivă datorită simplităţii rezultatului. Putem găsim porţi logice ŞI şi SAU cu 2 intrări. Mai jos sunt prezentate circuitele logice pentru ambele soluţii</p>

#+CAPTION: circuite cu porţi logice
[[../poze/14142.png]]

<p>Să presupunem că avem la dispoziţie circuitele logice TTL de mai jos. În acest caz, cunoaştem şi poziţionarea porţilor logice în interiorul acestora, precum în figura de mai jos:</p>

#+CAPTION: circuite logice TTL
[[../poze/14145.png]]

<p>Circuitele integrate folosite (trei la număr) vor fi identificate prin notaţia U1, U2 respectiv U3. Pentru a face distincţie între porţile individuale din fiecare capsulă, acestea vor fi identificate prin a, b, c, d, etc. Circuitul inversor 7404 va fi U<sub>1</sub>. Porţile inversoare individuale sunt U1-a, U1-b, U1-c, etc. Circuitul SAU 7432 va fi notat cu U2, iar U3 este notaţie folosită pentru circuitul ŞI 7408.</p>

<p>Luând în considerare piningul circuitelor logice folosite mai sus, vom desemna toate intrările şi ieşirile circuitului logic ce vrem să-l construim, conform figurii de mai jos (intrările porţilor nefolosite se vor lega la masă):</p>

#+CAPTION: circuit logic
[[../poze/14146.png]]

<p>Putem găsi cu uşurinţă porţi logice ŞI cu două intrări (7408, stânga). Totuşi, este mai greu să găsim o poartă logică SAU cu patru intrări. Singurul tip de poartă cu patru intrări este un circuit TTL 7420 cu porţi ŞI-negat (dreapta):</p>

#+CAPTION: circuite logice TTL
[[../poze/14147.png]]

<p>Putem transforma poarta logică ŞI-negat cu patru intrări într-o poartă logică SAU cu patru intrări prin inversarea intrărilor acesteia:</p>

#+CAPTION: transformarea funcţiei logice ŞI-negat în SAU
[[../poze/14148.png]]

<p>Putem prin urmare folosi circuitul 7420 cu porţi logice ŞI-negat cu patru intrări ca şi poartă SAU prin negarea (inversarea) intrărilor.</p>

<p>Nu vom folosi porţi logice inversoare discrete pentru inversarea intrărilor circuitului 7420. Vom folosi în schimb porţi logice ŞI-negat cu două intrări în locul porţilor ŞI din soluţia booleană cu mintermeni (sumă de produse). Inversarea ieşirii porţilor ŞI-negat cu două intrări este suficientă pentru inversarea necesară realizării porţii logice SAU cu patru intrări:</p>

#+CAPTION: circuit logic - notarea intrărilor şi ieşirilor
[[../poze/14149.png]]

<p>Rezultatul de mai sus este singura modalitate practică de realizarea a circuitului folosind TTL cu porţi logice ŞI-negat-ŞI-negat în locul porţilor ŞI-SAU.</p>

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
