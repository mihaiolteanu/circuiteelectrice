<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Cuplajul de intrare şi cuplajul de ieşire</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>13. Cuplajul de intrare şi cuplajul de ieşire</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Cuplaj de intrare</h2>

<h3>Cuplaj capacitiv</h3>

<p>Pentru a rezolva problemele de polarizare în curent continuu ale amplificatorului, fără utilizarea unei baterii conectată în serie cu sursa de semnal de curent alternativ, am folosit un divizor de tensiune conectat la sursa de tensiune de curent continuu deja existentă în circuit. Pentru a putea folosi această configuraţie cu semnale de curent alternativ, am „cuplat” semnalul de intrare la divizor printr-un condensator (cuplaj capacitiv), condensator ce s-a comportat precum un filtru trece-sus. Folosind acest filtru, impedanţa foarte scăzută a sursei de semnal de curent alternativ nu a putut scurt-circuite căderea de tensiunea de curent continuu de pe rezistorul de jos al divizorului de tensiune. O soluţie simplă la prima vedere, dar care prezintă şi dezavantaje.</p>

<p>Cea mai evidentă problemă este că, amplificatorul poate acum să amplifice doar semnale de curent alternativ. O tensiune constantă de curent continuu, aplicată la intrare, va fi blocată de către condensatorul de cuplaj. Mai mult, din moment ce reactanţa condensatorului este dependentă de frecvenţa, semnalele de curent alternativ de frecvenţe joase nu vor fi amplificate la fel de mult precum semnalele de frecvenţe înalte. Semnalele ne-sinusoidale vor fi distorsionate, din moment ce condensatorul va răspunde diferit la fiecare dintre armonicele sale constituente. Un exemplu extrem ar fi un semnal dreptunghiular de frecvenţa joasă:</p>

<p><img src="../poze/03136.png" alt="un semnal de intrare dreptunghiular, de frecvenţă joasă, conectat la intrarea unui amplifcator folosind un condensator de cuplaj la intrare, este puternic distorsionat la ieşire"/></p>

<h3>Cuplaj direct</h3>

<p>În situaţiile în care problemele ridicate de cuplajul capacitiv nu pot fi tolerate, se poate folosi un <i>cuplaj direct</i>. Cuplajul direct foloseşte rezistori în locul condensatorilor.</p>

<p><img src="../poze/03138.png" alt="folosirea cuplajului direct la intrarea tranzistorului/amplificatorului"/></p>

<p>Această configuraţie nu este dependentă de frecvenţa, fiindcă nu avem niciun condensator pentru filtrarea semnalului de intrare.</p>

<p>Dacă un cuplaj direct amplifică atât semnale de curent continuu cât şi semnale de curent alternativ, de ce să folosim cuplaje capacitive în primul rând? Unul dintre motive ar fi evitarea tensiunii naturale de polarizare în curent continuu prezentă în semnalul de amplificat. Unele semnale de curent alternativ conţin şi o coponentă de curent continuu direct de la sursă, ce nu poate fi controlata, iar această tensiune necontrolată înseamnă ca polarizarea tranzistorului este imposibilă.</p>

<p>Un alt motiv pentru utilizarea unui cuplaj capacitiv este lipsa atenuării semnalului de la intrare. În cazul cuplajului direct printr-un rezistor, atenuarea semnalului de intrare, asfel că doar o parte din acesta mai ajunge la baza tranzistorului, este un dezaventaj demn de luat în considerare. Unele aplicaţii necesită atenuarea semnalului de intrare într-o oarecare măsură, pentru prevenirea intrării tranzistorului în zona de saturaţie sau de blocare, asfel că o atenuare existentă pe cuplajul de intrare este oricum folositoare. În alte situaţii însă, <i>nu</i> este permisă atenuarea semnalului de intrare sub ncio formă , pentru obţinerea unei amplificării în tensiunea cât mai bune; în acest caz, un cuplaj direct nu este o soluţie foarte bună.</p>

<h2>Cuplaj de ieşire</h2>

<p>În circuitul din exemplu, sarcina este reprezentată de un difuzor. Majoritatea difuzoarelor sunt electromagnetice: acestea folosesc forţa generată de un electromagnet uşor, suspendat într-un câmp magnetic permanent, pentru deplasarea unui con de plastic sau hârtie, deplasare ce produce vibraţii în aer, care mai apoi sunt interpretate de sistemul auditiv ca fiind sunete. Aplicând o tensiune de o singură polaritate, conul se deplasează spre exterior; dacă inversăm polaritatea tensiunii, conul se deplasează spre interior. Pentru a putea utiliza întreaga libertate de mişcare a conului, difuzorul trebuie să primească o tensiune de curent alternativ pură (să nu conţină curent continuu). O componentă de curent continuu va tinde să deplaseze permanent conul de la poziţia sa naturală din centru, iar deplasarea sa înainte-înapoi va fi limitată la aplicarea unei tensiuni de curent alternativ ca urmare a acestui fapt.</p>

<p>Dar în circuitul nostru de mai sus, tensiunea aplicată la bornele difuzorului este de <i>o singură</i> polaritate (tensiune alternativă + componentă de curent continuu), deoarece difuzorul este conectat în serie cu tranzistorul, iar tranzistorul nu poate conduce curent decât într-o singură direcţie. Acest lucru nu este acceptabil pentru niciun amplificator audio.</p>

<h3>Transformator de cuplaj</h3>

<p>Prin urmare, trebuie să izolăm difuzorul faţă de componenta de curent continuu a curentului de colector, asfel încât acesta să primească doar tensiune de curent alternativ. O modalitate de realizare a acestui lucru, este cuplarea circuitului de colector al tranzistorului la difuzor prin intermediul unui transformator:</p>

<p><img src="../poze/03140.png" alt="conectarea colectorului tranzistorului la difuzor prin intermediul unui condensator de cuplaj"/></p>

<p>Tensiunea indusă în secundarul transformatorului (legat la difuzor) se va datora strict <i>variaţiilor</i> curentului de colector, datorita faptului că inductanţa mutuală a unui transformator funcţionează doar la <i>variaţiile</i> curentului prin înfăşurare. CU alte cuvinte, doar componenta de curent alternativ al curentul de colector va fi cuplată la secundar pentru alimentarea difuzorului.</p>

<p>Această metodă funcţionează foarte bine, dar, transformatoarele sunt de obicei mari şi grele, mai ales în aplicaţiile de putere mare. De asemenea, este dificil de proiectat nu transformator care să fie folosit într-o plajă largă de frecvenţe, ceea ce este şi cazul amplifcatoarelor audio. Mai rau decât atât, curentul continuu prin înfăşurarea primară duce la magnetizarea miezului doar într-o singură polaritate, ceea ce înseamnă ca transformatorul se va satura mult mai uşor într-una dintr-e polarităţile semnalului de curent alternativ decât în cealaltă. </p>

<h3>Cuplaj capacitiv</h3>

<p>O altă metodă de izolare a componentei de curent continuu din semnalul de ieşire, este utilizarea unui condensator de cuplaj pe ieşire, într-o manieră similară cuplajului capacitiv de intrare:</p>

<p><img src="../poze/03141.png" alt="folosirea cuplajului capacitiv la ieşirea amplificatorului pentru eliminarea componentei de curent continuu pe sarcină"/></p>

<p>Circuitul de mai sus seamănă foarte bine cu un amplificator în conexiune emitor comun, având colectorul tranzistorului conectat la baterie printr-un rezistor. Condensatorul se comportă precum un filtru trece-sus; majoritatea semnalului de curent alternativ se va regăsi pe difuzor, dar tensiunea de curent continuu va fi blocată de către filtru. Din nou, valoarea acestui condensator de cuplaj este aleasă asfel încât impedanţa la frecvenţa semnalului să fie cât mai mică.</p>

<h2>Conectarea etajelor</h2>

<p>Blocarea tensiunii de c.c. de la ieşirea unui amplificator, fie prin utilizarea unui transformator sau a unui condensator, este folositoare nu doar în cazul conectării unui amplificator la o sarcină, ci şi la cuplarea unui amplificator la un alt amplificator. Amplificatoarele cu mai multe etaje sunt folosite adesea pentru obţinerea unor factori de amplificare mult mai mari decât este posibil utilizând un singur tranzistor.</p>

<p><img src="../poze/03142.png" alt="amplificator cu trei etaje în configuraţie emitor comun, conectate prin condensatori de cuplaj"/></p>

<p>Deşi fiecare etaj se poate cupla direct cu următorul, prin intermediul unui rezistor în loc de condensator, acest lucru face ca întreg amplificatorul să fie <i>foarte</i> sensibil la variaţiile tensiunii de polarizare în c.c., datorită faptului că această tensiune va fi amplificată în fiecare etaj odată cu semnalul de c.a. Dar, dacă etajele sunt cuplate capacitiv între ele, tensiunea de c.c. al unui etaj nu influenţează tensiune de polarizare al următorului etaj, deoarece trecerea acestuia este blocată.</p>

<p>De asemenea, etajele pot fi cuplate prin intermediul transformatoarelor, dar acest lucru nu se relalizează prea des în practică, datorită problemelor menţionate mai sus. O excepţie o reprezintă amplificatoarele de radio-frecvenţă, unde se utilizează transformatoare de cuplaj mici, cu miez de aer (fiind asfle imuni la efectele de saturaţie), ce fac parte dintr-un circuit rezonant pentru blocarea trecerii armonicilor de frecvenţe nedorite dintr-un etaj la celălalt. Circuitele rezonante se folosesc doar atunci când frecvenţa semnalului rămâne constantă, ceea ce este valabil în cazul circuitelor de radio frecvenţă.</p>

<p><img src="../poze/03143.png" alt="amplificator de radio-frecvenţă; ilustrarea folosirii cuplajului cu transformator"/></p>

<p>Trebuie menţionat că <i>este</i> posibilă cuplarea directă a amplificatoarelor. În cazurile în care circuitul trebuie să amplifice şi semnale de c.c., aceasta este singura alternativă.</p>
</div>
<div id="footer">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>