<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Practici de bază</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Practici de bază</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p><span class="important">Dacă este posibil, închideţi întotdeauna alimentarea reţelei electrice înainte de atingerea oricăror elemente de circuit.</span> Trebuie de asemenea asigurate toate sursele de energie înainte ca un sistem să poate fi considerat sigur. Asigurarea faptului că în circuit nu se află energie periculoasă (<span class="important">starea de energie zero</span>) se face prin înlăturarea energiei potenţiale sau stocate din circuit.</p>

<h3>Asigurarea circuitelor cu ajurotul întrerupătoarelor</h3>
<p>Toate circuitele ar trebui să aibă mecanisme de „deconectare” pentru asigurarea tensiunii din circuit. În unele cazuri, aceste dispozitive servesc un scop secundar în circuit, şi anume, deschiderea automată a acestuia în cazul în care valoarea curentului depăşeşte valoarea nominală permisă în circuit; În alte situaţii, întrerupătoarele de deconectare sunt operate manual nu automat. În ambele cazuri, acestea sunt utilizate pentru protecţie şi este necesară folosirea lor corespunzătoare. Trebuie avut în vedere faptul că aceste dispozitive de deconectare trebuie să fie diferite faţă de întrerupătoarele ce închid şi deschid circuitul în mod normal. Acestea sunt dispozitive de siguranţă pentru asigurarea stării de energie zero a circuitului:</p>

<p><img src="../poze/00064.png" alt="întrerupător de siguranţă şi întrerupător de închidere/deschidere a circuitului"/></p>

<p>Cu întrerupător în poziţia deschis (precum în figură), continuitatea circuitului este întreruptă şi curentul din circuit este zero. Caderea de tensiune pe sarcină este şi ea zero, deoarece întreaga tensiune a sursei se regăseşte la bornele contactelor întrerupătorului deschis. Observaţi că nu este nevoie de încă un întrerupător în partea de jos a circuitului. Datorită faptului că acea parte din circuit este conectată la împământare, ea este electric comună cu pământul şi nu sunt necesare măsuri suplimentare de siguranţă. Pentru o siguranţă maximă a persoanelor ce lucrează pe partea de sarcină a circuitului, se poate stabili o legătură temporară la pământ a părţii superioare a circuitului, pentru a ne asigura că nu este posibilă în niciun fel apariţia unei căderi de tensiune la bornele sarcinii:</p>

<p><img src="../poze/00065.png" alt="asigurarea suplimentară a unui circuit deconectat de la sursa de putere prin realizarea unei împământări temporare a părţii din circuit neconectate iniţial la împământare"/></p>

<p>După realizarea împământării temporare, ambele părţi ale sarcinii sunt conectate la pământ, asigurând o stare de energie zero la bornele acesteia.</p>

<p>Din moment ce existenţa împământărilor pe ambele părţi ale circuitului înseamnă practic scurt-circuitarea sarcinii cu un conductor, putem asigura circuitul prin exact această metodă:</p>

<p><img src="../poze/00066.png" alt="asigurarea suplimentară a unui circuit deconectat de la sursa de putere prin realizarea unui scurt-circuit cu ajutorul unui conductor plasat între cele două părţi ale circuitului"/></p>

<p>Indiferent de măsura luată, ambele părţi ale sarcinii se vor afla la aceelaşi potenţial, cel al pământului, neexistând nicio cădere de tensiune între oricare parte/bornă a sarcinii şi persoanele ce lucrează în acel loc prin intermediul pământului. Această tehnică este des întâlnită atunci când se lucrează la întreţinerea liniilor electrice de înaltă tensiune din reţeaua de distribuţie a energiei electrice.</p>

<p>Chiar şi după luarea acestor măsuri de siguranţă, trebuie să ne asigurăm că într-adevăr nu există niciun fel de energie electrică prezentă în circuit. O modalitate este să acţionăm (închidem) întrerupătorul motorului/becului/ sau oricărui alt element din circuit la care lucrăm. Dacă acesta porneşte, înseamnă că încă mai există energie în circuit.</p>

<h3>Folosirea aparatului de măsură pentru asigurarea electrică a circuitului</h3>

<p>În afară de asta, va trebui <span class="important">întotdeauna</span> să ne asigurăm de prezenţă tensiunilor electrice periculoase din circuit cu ajutorul unui aparat de măsură <span class="important">înaintea</span> atingerii directe a oricărui element sau conductor din circuit. Paşii pentru asigurarea circutului cu ajutorul aparatului de măsură sunt următorii:</p>

<ul>
	<li>Asiguraţi-vă că aparatul de măsură folosit indică corect o cădere de tensiune cunoscută; folosiţi-l pentru a măsura tensiunea unei bateri, de exemplu</li>
	<li>Folisiţi aparatul de măsură pentru determinarea prezenţei oricărei tensiuni electrice periculoase din circuit, doar după ce aţi urmat pasul de mai sus</li>
	<li>Este important să verificaţi încă odată funcţionalitatea aparatului de măsură pentru a vă asigura că şi acum indică valoarea corectă; puteţi folosi aceeiaşi baterie şi în acest caz</li>
</ul>

<p>Chiar dacă aceste metode par exagerate sau chiar paranoice, cei trei paşi de mai sus sunt o metodă a cărei eficienţă a fost demostrată în practică. Există tot timpul riscul ca aparatul de măsură din dotare să fie defect chiar în momentul în care îl folosiţi pentru determinarea tensiunilor potenţial periculoase din circuit. Urmând paşii de mai sus, vă puteţi asigura că nu sunteţi păcăliţi de un aparat de măsură stricat. Eventual, folosiţi un al doilea aparat de măsură în cazul în care nu sunteţi absolut sigur de indicaţia primului aparat.</p>

<h3>Atingerea circuitului după luarea tuturor măsurilor de siguranţă</h3>
<p>Într-un final, după ce toate măsurile de siguranţă au fost luate, atingerea directă a elementelor şi conductorilor din circuit este permisă. Atenţie totuşi, chiar şi după ce toate măsurile de siguranţă au fost urmate, este posibil ca încă să mai existe surse de tensiuni periculoase în circuit (deşi este puţin probabil). O ultimă măsură de precauţie constă în atingerea uşoară şi de scurtă durată a circuitului cu <span class="important">partea anterioară a palmei</span> înainte de prinderea oricărui element de circuit în mână. De ce? În cazul în care încă mai există tensiune prezentă între acel element şi pământ, atingerea acestuia duce la strângerea degetelor în pumn datorită efectului curentului electric asupra muşchilor (link!) şi la îndepărtarea persoanei de locul periculos. <span class="important">Acesta este însă ultima măsură de siguranţă ce trebuie luată şi nu prima</span>, şi nu trebuie folosită ca şi metodă alternativă de verificare a existenţei tensiunilor periculoase în circuit.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Orice circuit, echipament sau sistem trebuie adus într-o stare de energie zero atunci când se doreşte atingerea directă a elementelor din circuit</li>
	<li>Întrerupătoarele de siguranţă trebuie să fie prezente în orice circuit electric pentru a putea asigura cu uşurinţă o situaţie de energie zero în circuit</li>
	<li>Pentru o siguranţă suplimentară, la bornele sarcinii la care se efectuează operaţii de reparaţie sau întreţinere, se poate conecta o împământare temporară sau un conductor de scurt-circuit între cele două părţi cu potenţiale diferite ale circuitului</li>
	<li>Verificaţi întotdeauna dacă circuitul a fost adus într-o stare de energie zero cu ajutorul aparatelor de măsură. Asiguraţi-vă de funcţionalitatea aparatului şi înainte şi după ce aţi verificat circuitul</li>
	<li>După ce toate măsurile de siguranţă au fost luate, ultimul pas înaintea contactului propriu-zis cu circuitul este atingerea scurtă şi uşoară a acestuia cu partea posterioară a palmei; în cazul apariţiei şocului electric, reacţia muşchilor va îndepărta mână de pericolul existent</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>