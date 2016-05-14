<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Amplificator cu tranzistor în conexiune emitor comun</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Amplificator cu tranzistor în conexiune emitor comun</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Să reluăm exemplu studiat în secţiunile precedente, unde tranzistorul a fost folosit pe post de întrerupător:</p>

#+CAPTION: tranzistor NPN pe post de întrerupător
[[../poze/03079.png]]

<p>Această configuraţie poartă numele de <i>conexiune emitor comun</i> datorită faptului că, ignorând bateria de alimentare, atât pentru sursa de semnal (celula solară) cât şi pentru sarcină, contactul emitorului reprezintă un punct comun celor două.</p>

#+CAPTION: amplificator emitor comun: semnalele de intrare şi de ieşire au ca punct comun contactul emitorului
[[../poze/03102.png]]

<p>În exemplele precedente, am considerat că tranzistorul funcţionează saturat (la capacitate maximă). Cunoscând faptul că, curentul prin colector poate varia în funcţie de curentul bazei, putem controla luminozitatea lămpii din acest circuit în funcţie de expunerea celulei solare la lumină. Când intensitatea luminoasă ce cade pe celula solară este minimă, lampa va lumina foarte slab. Pe măsură ce intensitatea luminoasă ce cade pe celula solară creşte, va creşte şi intensitatea luminoasă a lămpii.</p>

<p>Să presupunem acum că am dori să măsurăm intensitatea luminoasă cu ajutorul celulei solare. Vrem să măsurăm de fapt intensitatea razei incidente pe celula solară folosind curentul său de ieşire conectat la un instrument de măsură (ampermetru). Una dintre soluţii ar consta în conectarea ampermetrului direct la celula solară:</p>

#+CAPTION: măsurarea intenstăţii luminoase cu ajutorului unui circuit format dintr-o celulă solară şi un ampermetru pentru măsurarea curentului de la ieşirea celulei
[[../poze/03093.png]]

<p>Cu toate că această metodă funcţionează pentru măsurători moderate al intensităţilor, ea nu poate fi folosită atunci când intensitatea luminoasă scade sub o anumită valoare, datorită faptului că celula solară trebuie să alimenteze şi ampermetrul iar precizia sistemului scade foarte mult în acest caz. Să presupunem în continuare că în exemplul de mai sus, suntem interesaţi de măsurători extrem de scăzute ale intensităţilor luminoase. În acest caz, trebuie să căutăm o altă soluţie.</p>

<p>Soluţia cea mai la îndemână este utilizarea unui tranzistor pentru <i>amplificarea</i> curentului generat de celula solară. Acest lucru înseamnă că va exista o cantitate mult mai mare de curent disponibilă pentru deviaţia acului indicator al aparatului de măsură, pentru o valoare mult mai mică a curentului generat de celula solară.</p>

#+CAPTION: amplificarea semnalului de curent generat de celula solară cu ajutorului unui tranzistor în conexiune emitor-comun
[[../poze/03094.png]]

<p>De această dată, curentul prin circuit (şi prin aparatul de măsură) va fi de β ori mai mare decât curentul prin celula solară. Pentru un tranzistor cu β = 100, aceast lucru reprezintă o creştere substanţială a preciziei măsurătorii. Atenţie însă, puterea adiţională necesară funcţionării aparatului de măsură este „colectată” de la bateria din dreapta, nu de către celula solară. Tot ceea ce realizează celula solară este <i>controlul</i> curentului bateriei pentru furnizarea unei puteri mai mari necesară funcţionării aparatului de măsură, puterea ce nu ar fi putut fi generată de către celula solară însăşi.</p>

<p>Deoarece tranzistorul este un dispozitiv de regulare a curentului, iar indicaţia aparatului de măsură depinde doar de curentul ce trece prin bobina acestuia, indicaţia aparatului de măsură va depinde doar de celula solară şi <i>nu</i> de valoarea tensiunii generată de baterie. Acest lucru înseamnă că acurateţea măsurătorii realizată de acest circuit va fi independentă de condiţiile bateriei, un lucru extrem de important! Tot ceea ce trebuie bateria să facă, este să genereze o anumită tensiune minimă şi un curent suficient pentru funcţionarea ampermetrului.</p>

<p>Configuraţia emitor comun mai poate fi folosită şi pentru producerea unei <i>tensiuni</i> dependente de semnalul de intrare, în loc de <i>curent</i>. Să înlocuim aşadar aparatul de măsură cu un rezistor şi să măsurăm tensiunea dintre colector şi emitor:</p>

#+CAPTION: căderea de tensiune dezvoltată pe un tranzistor în conexiune emitor comun datorită curentului prin sarcină
[[../poze/03095.png]]

<p>Când intensitatea luminoasă pe celula solară este zero, tranzistorul va fi blocat şi se va comporta precum un întrerupător deschis între colector şi emitor. Acest lucru va duce la apariţia unei căderi de tensiune maxime între colector şi emitor, V<sub>ieşire</sub>, tensiune egală cu tensiunea de la bornele bateriei.</p>

<p>Când intensitatea luminoasă pe celula solară este maximă, celula solară va duce tranzistorul în zona de saturaţie; acesta se va comporta precum un întrerupător închis între colector şi emitor. Rezultatul va fi o cădere de tensiune minime între colector şi emitor. Totuşi, această tensiune de saturaţie dintre colector şi emitor este destul de mică, câteva zecimi de volţi, în funcţie de tranzistorul folosit.</p>

<p>Pentru intensităţi luminoase ce se găsesc între aceste valori (minim/maxim), tranzistorul va funcţiona în zona activă, iar tensiunea de ieşire va fi undeva între zero volţi şi tensiunea bateriei. De menţionat că tensiunea de ieşire a tranzistorului în configuraţie emitor comun este <i>invers proporţională</i> cu intensitatea semnalului de intrar. Cu alte cuvinte, tensiunea de ieşire scade cu creşterea semnalului de intrare. Din acest motiv, amplificatorul (cu tranzistor) în configuraţie emitor comun poartă numele de amplificator <i>inversor</i>.</p> 

<p>Să considerăm circuitul:</p>

#+CAPTION: schema amplificatorului cu tranzistor în conexiune emitor comun
[[../poze/03096.png]]

<p>Graficul variaţiei tensiune-curent arată asfel (căderea de tensiune dintre colector şi emitor şi curentul bazei):</p>

#+CAPTION: amplificator cu tranzistor în conexiune emitor comun; graficul variaţiei tensiune-curent
[[../poze/23003.png]]

<p>La începutul simulării, curentul generat de sursă (celula solară) este zero, tranzistorul este blocat iar căderea de tensiune între colector şi emitor este maximă, şi anume 15 V, tensiunea bateriei. Pe măsură ce curentul generat de celula solară începe să crească, tensiunea de ieşire începe să scadă proportional, până când tranzistorul intră în starea de saturaţie la curentul de bază de 30 µA. Putem observa foarte clar de pe grafic că variaţia tensiunii este perfect liniară, până în momentul saturării, unde nu atinge de fapt niciodată valoarea zero. Un tranzistor saturat nu poate atinge niciodată o cădere de tensiune de exact 0 volţi între colector şi emitor datorită efectelor joncţiunii sale interne.</p>

<h2>Amplificarea semnalelor alternative</h2>

<p>Adesea avem nevoie însă de un amplificator în curent alternativ. O aplicaţia practică este utilizarea acestui tip de amplicare în sistemele audio. Să reluăm circuitul cu microfon (figura de mai jos), dar să încercăm de data aceasta să-l modificăm asfel încât să alimenteze un difuzor în loc de lampă.</p>

#+CAPTION: activarea tranzistorului cu ajutorul unei surse de sunet
[[../poze/03081.png]]

<p>În circuitul original (cel de sus), am folosit o punte redresoare pentru transformarea semnalului de curent alternativ al microfonului în tensiune de curent continuu pentru polarizarea bazei tranzistorului. În acel caz ne-a interesat doar să pornim lampa cu un semnal venit din partea microfonului, iar această configuraţie şi-a îndeplinit scopul. De data aceasta însă, vrem să reproducem un semnal de curent alternatv pe difuzor. Acest lucru înseamnă ca nu mai putem redresa semnalul de ieşire al microfonul, deoarece avem nevoie de semnalul de curent alternativ nedistorsionat la intrarea tranzistorului. Să îndepărtăm aşadar puntea redresoare din circuit şi să înlocuim lampa cu un difuzor:</p>

#+CAPTION: amplificator cu tranzistor în conexiune emitor comun legat la difuzor şi acţionat cu ajutorul unui semnal audio
[[../poze/03097.png]]

<p>Fiindcă microfonul poate produce tensiuni mai mari decât tensiunea de polarizare directă a joncţiunii bază-emitor, vom conecta şi un rezistor în serie cu microfonul. Circuitul practic pe care îl vom analiza arată asfel:</p>

#+CAPTION: amplificator cu tranzistor în conexiune emitor comun legat la difuzor şi acţionat cu ajutorul unui semnal audio; circuitul practic
[[../poze/03098.png]]

<p>Graficul variaţiei tensiune-curent, tensiunea de alimentare, V<sub>1</sub> (1,5 V, f = 2.000 Hz) cu roşu, curentul prin difuzor (mai mare de 10 ori pe grafic decât curentul real, pentru observarea mai clară a acestuia), cu albastru, este prezentat mai jos:</p>

#+CAPTION: amplificator cu tranzistor în conexiune emitor comun legat la difuzor şi acţionat cu ajutorul unui semnal audio; formele de undă ale tensiunii de intrare şi a curentului emitor-colector (prin difuzor)
[[../poze/23004.png]]

<p>Curentul prin difuzor este acelaşi cu cel prin baterie. Putem vedea că semnalul de tensiune de intrare este un semnal sinusoidal cu semiperioda pozitivă şi negativă, iar semnalul de curent de ieşire pulsează doar într-o singură direcţie (semiperioda negativă). Sunetul reprodus de difuzor în acest caz va fi extrem de distorsionat.</p>

<p>Ce s-a întâmplat cu circuitul în acest caz? De ce nu reproduce în totalitate semnalul de tensiune în curent alternativ de la intrare? Să revenim la modelul diodă-sursă-de-curent al tranzistorului pentru a încerca elucidarea problemei:</p>

#+CAPTION: modelul diodă-sursă-de-curent al tranzistorului
[[../poze/03091.png]]

<p>Curentul pron colector este regular, sau controlat, printr-un mecanism de curent constant ce depinde de curentul prin dioda bază-emitor. Observaţi că ambele direcţii ale curentului sunt <i>uni-direcţionale</i>! În ciuda faptului că se încearcă o amplificare de semnal în curent alternativ, acesta este de fapt un dispozitiv de curent continuu, fiind capabil să conducă curenţi doar într-o siungură direcţie. Chiar dacă aplicăm o tensiune alternativă între bază şi emitor, electronii nu se pot deplasa prin circuit în semi-perioada negativă a semnalului ce polarizează invers joncţiunea bază-emitor (dioda). Prin urmare, tranzistorul va fi blocat în acea porţiune a perioadei, şi va intra în conducţie doar când polaritatea tensiunii de intrare este corectă, asfel încât să polarizeze direct dioda bază-emitor, şi doar dacă acea tensiune este suficient de mare pentru a depăşi tensiune de polarizare directă a diodei. Reţineţi, tranzistorii sunt <i>dispozitive controlate în curent</i>: aceştia controlează curentul prin colector în funcţie de existenţa <i>curentului</i> între bază şi emitor (curentul de bază), şi nu în funcţie de <i>tensiunea</i> bază-emitor.</p>

<p>Singura modalitate prin care tranzistorul poate reproduce întreaga formă de undă pe difuzor, este menţinerea acestuia în zona activă pe întreaga perioadă a undei, adică, trebuie să menţinem un curent prin bază în toată această perioadă. Prin urmare, joncţiunea bază-emitor trebuie polarizată direct tot timpul. Din fericire, acest lucru se poate realiza prin conectarea unei surse de curent continuu în serie cu semnalul de intrare:</p>

#+CAPTION: adăugarea unei surse de tensiune în curent continuu pentru polarizarea directă a jocţiunii bază-emitor pe toată perioada semnalului de intrare
[[../poze/03099.png]]

<p>Graficul variaţiei tensiune-curent arată de data aceasta asfel:</p>

#+CAPTION: graficul variaţiei tensiune-curent
[[../poze/23005.png]]

<p>Cu sursa de tensiune de polarizare (V<sub>polarizare</sub>) conectată în serie cu sursa de semnal, tranzistorul rămâne în zona activă de funcţionare pe toată perioada undei, reproducând cu exactitate forma de undă de la intrare pe difuzor. Observaţi că tensiunea de la intrare variază între valorile de 0.8 V şi 3.8 V, o amplitudine vârf-la-vârf de exact 3 volţi (2 * amplitudinea de vârf a sursei = 2 * 1,5 = 3 V). Curentul de ieşire, pe difuzor, variază între zero şi aproximativ 300 mA, fiind defazat cu 180<sup>o</sup> cu semnalul de intrare (al microfonului).</p>

<p>Dacă am conecta simultan mai multe osciloscoape în circuitul de mai sus, formele de undă ale tensiunilor ar arăta asfel:</p>

#+CAPTION: observarea formelor de undă ale tensiunilor în diferite puncte critice ale unui amplificator cu tranzistor în conexiune emitor-comun
[[../poze/03110.png]]

<p>Amplificarea în curent al circuitului de mai sus este dată de factorul beta β al tranzistorului, în acest caz particular, 100, sau 40 dB. Amplificarea în tensiune însă, este puţin mai complicat de determinat. Să urmărim graficul tensiunii pe difuzor (albastru) şi al tensiunii de intrare pe tranzistor (roşu, bază-emitor):</p>

#+CAPTION: graficul formelor de undă a tensiunii pe difuzor (albastru) şi al tensiunii de intrare a tranzistorului (roşu)
[[../poze/23006.png]]

<p>Dacă am lua aceeiaşi scală, de la 0 la 4 V, putem vedea că forma de undă a tensiunii de ieşire are o amplitudine vârf-la-vârf mai mică decât tensiunea de intrare. Dim moment ce amplificarea în tensiune a unui amplificator este definită ca şi raportul dintre amplitudinile semnalelor de curent alternativ, putem igonar componenta de curent continuu ce separă cele două forme de undă. Chiar şi asa, tensiune de intrare este mai mare decât cea de ieşire, ceea ce înseamnă ca amplificarea în tensiune este sub-unitară.</p>

<p>Această amplificare mică în tensiune nu este caracteristică tuturor amplificatoarelor emitor-comun, ci este consecinţa diferenţei mari dintre rezistenţele de intrare şi ieşire. Rezistenţa de intrare (R<sub>1</sub>) în acest caz este de 1.000 Ω, iar rezistenţa sarcinii (difuzor) este de doar 8 Ω. Deoarece amplificarea în curent a amplifiatorului este determinată doar de factorul beta (β) al tranzistorului, şi deoarece acest factor este fix, amplificarea în curent nu se va modifica odată cu variaţia nici uneia dintre cele două rezistenţe. Totuşi, amplificarea în tensiune <i>depinde</i> de aceste rezistenţe. Dacă mărim rezistenţa sarcinii, căderea de tensiune pe aceasta va fi mai mare pentru aceleaşi valori ale curenţilor, rezultând o formă de undă de ieşire mai mare. Să urmărim şi graficul formelor de undă pentru sarcina de 30 Ω:</p>

#+CAPTION: graficul formelor de undă a tensiunii pe difuzor (albastru) şi al tensiunii de intrare a tranzistorului (roşu), pentru o sarcină de 30 Ω în loc de 8 Ω
[[../poze/23007.png]]

<p>De data aceasta, amplitudinea formei de undă a tensiunii de ieşire (albastru) este mult mai mare decât tensiunea de intrare. Dacă ne uităm mai atent, putem vedea că amplitudinea vârf la vârf este de 9 V, de 3 ori mai mare decât amplitudinea tensiunii de intrare. Mai exact, tensiunea de intrare este de 1.5 V, iar cea de ieşire de 4.418 V. Să calulăm aşadar raportul (factorul) de amplificare în tensiune (A<sub>V</sub>):</p>

#+CAPTION: calcule matematice
[[../poze/13018.png]]

<p>Deoarece amplificarea în curent a amplificatorului emitor comun este fixată de factorul β, iar tensiunile de intrare şi ieşire vor fi egale cu produsul dintre curenţii de intrare şi ieşire şi rezistenţele rezistorilor respectivi, putem scrie următoarea ecuaţie pentru aproximarea amplificării în tensiune:</p>

#+CAPTION: ecuaţia amplificării în tensiune a amplificatorului în conexiune emitor comun
[[../poze/13017.png]]

<p>Diferenţa dintre amplificarea reală (2.94) şi cea ideală (3), se datorează imperfecţiunilor tranzistorilor în general.</p>

<h2>Amplificator emitor comun cu tranzistor PNP</h2>

<p>Până acum am folosit doar tranzistori de tipul NPN, dar putem la fel de bine utiliza tranzistori NPN în <i>orice</i> tip de configuraţie, atâta timp cât polaritatea şi direcţiile curenţilor sunt cele corecte. Factorii de amplificare în curent şi tensiune sunt aceeiaşi şi pentru amplificatorul cu tranzistor PNP, doar polarităţile bateriilor sunt diferite:</p>

#+CAPTION: amplificator în configuraţie emitor comun cu tranzistor de tipul PNP
[[../poze/03112.png]]

<p class="sumar">Sumar:</p>
<ul>
	<li>Denumirea de <i>emitor-comun</i> vine de la faptul că tensiunile de intrare şi de ieşire ale tranzistorului au ca şi punct comun contactul emitorului, neluând în considerare alte surse de putere</li>
	<li>Tranzistorii sunt în principiu dispozitive de curent continuu: nu pot conduce curenţi în direcţie inversă la polarizarea inversă. Pentru a funcţiona cu semnale de curent alternativ, semnalul de intrare (alternativ) trebuie să conţină şi o componentă de curent continuu pentru menţinerea tranzistorului în zona activă de functionare pe toată durata perioadei semnalului de intrare</li>
	<li>Tensiunea de ieşire, între emitor şi colector, a unui amplificator în conexiune emitor comun, este defazată cu 180<sup>o</sup> faţă de tensiunea de intrare. Amplificatorul emitor comun mai este cunoscut din această cauză şi ca amplificator inversor</li>
	<li>Amplificarea în curent a tranzistorului emitor-comun, cu sarcina conectată în serie cu colectorul, este egală cu β</li>
	<li>Amplificarea în tensiune a tranzistorului emitor-comun este dată de relaţia A<sub>V</sub> = β (R<sub>ieşire</sub> / R<sub>intrare</sub>), unde R<sub>ieşire</sub> reprezintă rezistorul conectat în serie cu colectorul, iar R<sub>intrare</sub> reprezintă rezistorul conectat în serie cu baza tranzistorului</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
