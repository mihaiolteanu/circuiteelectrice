<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Amplificatorul operaţional</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Amplificatorul operaţional</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Cu mult înainte de apariţia tehnologiei digitale, calculatoarele erau construite electronic pentru efectuarea calculelor, folosind curenţi şi tensiuni pentru reprezentarea cantităţilor numerice. Acest lucru a fost folositor în special pentru simularea proceselor fizice. O tensiune variabilă, de exemplu, ar putea reprezenta viteza, sau forţa, într-un sistem fizic. Prin utilizarea divizorilor de tensiune rezistiv şi amplificatoare de tensiune, operaţiile matematice de înmulţire şi împărţire putea să fie foarte uşor efectuate pe aceste semnale.</p>

<p>Proprietăţile reactive ale condensatoarelor şi bobinelor au fost utilizate pentru simularea variabilelor folosite în funcţii ce necesitau utilizarea analzei matematice. Curentul printr-un condensator depinde de rata de variaţie a tensiunii, variaţie desemnată prin intermediul unei <i>derivate</i>. Prin urmare, dacă tensiunea la bornele unui condensator ar reprezenta viteza de deplasare a unui obiect, curentul prin acesta ar reprezenta forţa necesară pentru accelerarea sau decelerarea acelui obiect, capacitatea condensatorului reprezentând în acest caz masa obiectului respectiv:</p>

#+CAPTION: relaţia tensiune-curent într-un condensator
[[../poze/13003.png]]

<div class="formula">
<p>unde,<br/>
i<sub>C</sub> = curentul instantaneu prin condensator<br/>
C = capacitatea condensatorului(F)<br/>
dv / dt = variaţia curentului cu timpul
</p>
</div>

#+CAPTION: relaţia acceleraţie-forţa a unui obiect
[[../poze/13003-1.png]]

<div class="formula">
<p>unde,<br/>
F = forţa aplicată obiectului<br/>
m = masa obiectului<br/>
dv / dt = variaţia vitezei cu timpul (acceleraţia)
</p>
</div>

<p>Această operaţie electronică poartă numele de <i>derivare</i>, şi este o funcţie naturală a curentului prin condensator în relaţie cu tensiunea aplicată la bornele sale. Observaţi că acest circuit nu are nevoie de nicio „programare” pentru efectuarea acestei funcţii matematice relativ avansate, lucru care nu se întâmplă în cazul unui calculator digital.</p>

<p>Circuitele electronice sunt ieftine şi foarte uşor de construit în comparaţie cu sistemele fizice complexe, iar asemenea simulări electronice au fost folosite pe bandă largă pentru cercetarea şi dezvoltarea sistemlor mecanice. Pentru simulări realistice totuşi, au fost necesare circuite amplificatoare de precizie înaltă şi uşor de configurat pentru aceste prime calculatoare.</p>

<p>Pe parcursul dezvoltării calculatoarelor, s-a ajuns la concluzia că amplificatoarele diferenţiale cu amplificări în tensiune foarte mari, erau candidaţii perfecţi pentru aceste necesităţi. Folosind componente simple, conectate la intrarea şi la ieşirea amplificatorului diferenţial, s-a putut obţine practic orice factor de amplificare era necesar şi se putea calcula orice funcţie matematică, fără modificarea sau ajustarea circuitului intern al amplificatorului însăşi. Aceste amplificatoare diferenţiale cu amplificări foarte mari, au ajuns să fie cunoscute sub numele de <i>amplificatoare operaţionale</i>, pe scurt AO, datorită folosirii lor în cadrul <i>operaţiilor</i> matematice efectuate de calculatoarele analogice.</p>

<p>Amplificatoarele operaţionale moderne, precum modelul polular 741, sunt circuite integrate de o înaltă performanţă şi ieftine pe de altă parte. Impedanţele lor de intrare sunt foarte mari, curenţii pe la bornele acestora se situează în jurul valorii de 0.5 mA pentru modelul 741, şi mult mai puţin pentru AO cu tranzistori cu efect de câmp la intrare. Impedanţa de ieşire este de obicei foarte mică, aproximativ 75 Ω pentru modelul 741, multe modele având protecţie integrată la scurt-circuit, ceea ce înseamnă că ieşirile acestora pot fi scurt-circuitate fără ca acest lucru să afecteze circuitul intern al amplificatorului. Cu un cuplaj direct între etajele interne cu tranzistori ale AO, acestea pot amplifica semnale de c.c., precum şi de c.a. Costurile de timp şi de bani pentru proiectarea unui circuitu amplificator utilizând componente discrete se ridică mult peste costului unui amplificator operaţional. Din aceste motive, AO au scos aproape complet din uz amplificatoatele de semnal folosind tranzistori discreţi.</p>

<p>În diagrama de mai jos sunt prezentate conexiunile pinilor pentru un singur AO (la fel şi pentru modelul 741) dintr-un circuit integrat DIP (<b>D</b>ual <b>I</b>nline <b>P</b>ackage) cu 8 pini:</p>

#+CAPTION: modul de conectare intern al pinilor unui amplificator operaţional într-un circuit integrat cu 8 pini
[[../poze/03028.png]]

<p>Unele circuite integrate conţin două AO într-un singur pachet, incluzând modelele polulare TL082 şi 1458. Aceste unităţi „duale” sunt împachetate tot într-un integrat DIP cu 8 pini, asfel:</p>

#+CAPTION: amplificator operaţional dual într-un circuit integrat DIP cu 8 pini
[[../poze/03245.png]]

<p>AO practice au un factor de amplificare în tensiune în jurul a 200.000 sau chiar mai mult, ceea ce înseamnă că sunt inutile ca şi amplificatoare diferenţiale în sine. Pentru un AO cu o amplificare în tensiune, A<sub>V</sub> = 200.000, şi o tensiune maximă de ieşire între +15V şi -15V, o diferenţă de tensiune de doar 75 µV între cele două intrări este suficientă pentru intrarea amplificatorului în saturaţie sau blocare!</p>

<p>Înainte de a examina utilizarea componentelor externe pentru reducerea amplificării la un nivel rezonabil, putem investiga mai întâi amplicaţiile AO „pur”.</p>

<h2>Comparatorul</h2>

<p>Una dintre aceste aplicaţii o reprezintă <i>comparatorul</i>. Practic, putem spune că ieşirea unui AO va fi saturată pozitiv dacă intrarea pozitivă (+) este mai pozitivă decât cea negativă (-), şi saturat negativ dacă intrarea (+) este mai puţin pozitivă decât intrarea (-). Cu alte cuvinte, amplficarea foarte mare în tensiune a unui AO, înseamnă că acesta poate fi folosit pentru a compara două tensiuni (una reprezentând o mărime de stare şi alta un punct de referinţa), şi folosirea semnalului de la ieşire pentru semnalizarea cazului în care există o diferenţa între cele două semnale de intrare.</p>

#+CAPTION: amplificator operaţional pe post de comparator
[[../poze/03030.png]]

<p>Comparatorul cu AO de mai sus, compară tensiunea de la intrare cu o tensiune de referinţă stabilită printr-un potenţiometru (R<sub>1</sub>). Dacă V<sub>intrare</sub> scade sub tensiunea stabilită de R<sub>1</sub>, ieşirea AO se va satura la +V, iar LED-ul se va aprinde. Invers, dacă V<sub>intrare</sub> se află sub valoarea tensiunii de referinţă, LED-ul va fi polarizat invers, cu -V, şi nu se va aprinde. Dacă V<sub>intrare</sub> este un semnal de tensiune produs de un instrument de măsură, acest circuit comparator ar putea funcţiona precum o alarmă de „nivel”, nivel stabilit de R<sub>1</sub>. În loc de LED, am putea conecta un releu, un tranzistor sau orice alt dispozitiv capabil să pună în funcţiune un mecanism de acţiune în cazul unei „alarme”.</p>

<p>O altă aplicaţia a circuitului comparator este un convertor de semnal dreptunghiular. Presupunând că tensiunea de intrare aplicată la terminalul inversor (-) al AO ar fi o undă sinusoidală de c.a. în loc de c.c., tensiunea de ieşire ar oscila între saturaţie pozitivă şi saturaţie negativă de câte ori tensiune de intrare va fi egală cu tensiunea de referinţă produsă de potenţiometru. Rezultatul va fi un semnal drepunghiular:</p>

#+CAPTION: convertor cu circuit comparator
[[../poze/03031.png]]

<p>Ajustarea potenţiometrului modifică tensiunea de referinţa aplicată la intrarea neinversoare (+), iar acest lucru modifică punctele de intersecţie a undei sinusoidale; rezultatul este o formă de undă dreptunghiulară cu un <i>factor de umplere</i> diferit:</p>

#+CAPTION: amplificator operaţional pe post de comparator; modificarea tensiunii de referintă duce la modificarea factorului de umplere a undei dreptunghiulare de la ieşire
[[../poze/03032.png]]

<p>Semnalul de c.a. de la intrare nu trebuie să fie neapărat un semnal sinusoidal pentru ca acest circuit să-şi îndeplinească funcţia. Semnalul de intrare ar putea la fel de bine să fie triunghiular, dinte de fierăstrău, sau orice alt semnal periodic cu semi-alternaţe pozitive şi negative. Acest circuit comparator este foarte folositor pentru formarea undelor dreptunghiulare cu factori de umplere diferiţi. Această tehnică mai este denumită şi <i>modularea pulsurilor în durată</i> sau PWM, adică variaţia, sau <i>modularea</i> unei forme de undă în funcţie de un semnal de control, în acest caz, semnalul produs de potenţiometru.</p>

<p>Bargraph-ul este o altă aplicaţie unde se poate folosi un comparator. Dacă conectăm mai multe AO pe post de comparatoare, fiecare având propria sa tensiune de referinţa conectată la intrarea neinversoare (+), dar fiecare primind acelaşi semnal de tensiune la intrarea neinversoare (-), putem construi un bargraf de tipul celor văzute la egalizatoarele grafice sau în sistemele stereo. Pe măsură ce semnalul de tensiune (reprezentând puterea semnalului radio sau nivelul sunetului audio) creşte, comparatoarele vor „porni” unul după altul şi vor pune în funcţiune LED-ul lor respectiv. Cu fiecare comparator pornind la un nivel diferit al sunetului audio, numărul LED-urilor aprinse va indica puterea semnalului de intrare.</p>

#+CAPTION: bargraf folosind mai multe amplificatoare operaţionale pe post de comparatoare
[[../poze/03033.png]]

<p>În circuitul de mai sus LED<sub>1</sub> va primul care se va aprinde pe măsură ce tensiunea de intrare va creşte într-o direcţie pozitivă. Pe măsură ce tensiunea va continua să crească, şi celelalte LED-uri vor începe să pornească, unul după altul, până când toate vor fi aprinse.</p>

<p>Aceeiaşi tehnologie este folosită şi în cazul convertorului analog-digital (CAD), pentru „traducerea” unui semnal analog într-o serie de tensiuni pornit/oprit, reprezentând un numări digital.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Dacă nu este specificat altcumva, <i>toate</i> tensiunile din circuitele folosind amplificatoare au ca şi referinţa un punct comun, denumit <i>masă</i>. Acest punct este de obicei conectat la unul dintre terminalele sursei de alimentare. În acest fel, putem vorbi despre o anumită tensiune ca fiind „pe” un singur fir, dar neuitând faptul că tensiunea se măsoară <i>tot timpul</i> între două puncte</li>
	<li>Un <i>amplificator diferenţial</i> este un dispozitiv ce amplifică <i>diferenţa</i> dintre două semnale de intrare. Una dintre intrări poartă numele de intrare <i>inversoare(-)</i>, iar cealaltă de intrare <i>neinversoare</i>(+)</li>
	<li>Un <i>amplificator operaţional</i> (AO) este un amplificator diferenţial cu o amplificare în tensiune foarte mare (A<sub>V</sub> = 200.000, sau mai mult)</li>
	<li>AO au de obicei impedanţe de intrare şi de ieşire foarte mari, respectiv foarte mici</li>
	<li>AO pot fi folosite pe post de <i>comparatoare</i>, funcţionând saturate sau blocate în funcţie de care dintre intrări are o tensiune mai mare</li>
	<li>Una dintre aplicaţiile comparatorului este <i>modularea pulsurilor în durată</i> (PWM), şi constă în copararea unui semnal de c.a. cu o tensiune de referinţă de c.c. Factorul de umplere a forme de undă de la ieşire poate fi controlat prin ajustarea tensiunii de c.c. de referintă, ce controlează, sau <i>modulează</i> durata (lăţimea) pulsului semnalului de ieşire </li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
