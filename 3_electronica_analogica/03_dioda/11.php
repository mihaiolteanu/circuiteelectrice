<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Dioda Zener</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>11. Dioda Zener</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>La conectarea unei diode în serie cu un rezistor într-un circuit de curent continuu, asfel încât dioda să fie polarizată direct, căderea de tensiune la bornele diodei va rămâne aproximativ constantă pentru o plajă largă de tensiuni de alimentare (figura de mai jos (a).</p>

<p>Conforma ecuaţiei diodei, curentul printr-o joncţiune P-N polarizată direct este direct proporţională cu <i>e</i> ridicat la puterea tensiunii directe (tensiunea de polarizare directă). Deoarece ecuaţia este exponenţială, curentul creşte foarte repede pentru creşteri modeste ale căderii de tensiune. Cu alte cuvinte, căderea de tensiune la bornele unei diode polarizate direct variază foarte puţin pentru variaţi mari ale curentului prin diodă. În circuitul din figura de mai jos (a), curentul prin diodă este limitate de tensiunea sursei de alimentare, de rezistorul conectat în serie şi de căderea de tensiune la bornele diodei, care după câte ştim, nu se îndepărtează foarte mult de valoarea de 0.7 V. Dacă am fi să creştem tensiunea generată de sursă, căderea de tensiune pe rezistor ar creşte cu aproape aceeiaşi valoare, iar căderea de tensiune pe diodă ar creşte doar foarte puţin. Invers, o scădere a tensiunii generată de sursă, rezultă într-o descreştere aproape identică a căderii de tensiune pe rezistor şi doar într-o mică descreştere a căderii de tensiune pe diodă. Pe scurt, putem spune că dioda <i>stabilizează</i> tensiunea la valoarea de 0.7 V.</p>

<p>Stabilizarea tensiunii este o proprietatea foarte folositoare. Să presupunem că am construi un circuit, al cărei sarcini nu ar tolera variaţii ale tensiunii sursei de alimentare, dar că acest circuit trebuie să fie alimentat de o baterie, a cărei tensiune, după câte se ştie, variază pe durata sa de funcţionare. Am putea folosi în acest caz circuitul din figura de mai jos (a), iar circuitul în cauză să-l conectăm la bornele diodei, asfel încât tensiunea de alimentare a noului circuit să rămână stabilă la valoarea de 0.7 V.</p>

<p>Majoritatea circuitelor reale necesită însă o sursă de tensiune stabilizată cu o valoare de peste 0.7 V. O modalitate de creştere a tensiunii stabilizate este conectarea mai multor diode în serie, asfel încât tensiunile de polarizare directă să se însumeze. De exemplu, dacă am conecta zece diode în serie, valoarea tensiunii stabilizate ar fi de zece ori mai mare faţă de cazul precedent, adică 7 V.</p>

#+CAPTION: sursă de tensiune stabilizată folosind diode: (a) o singură diodă (0.7 V); (b) zece diode conectate în serie (7 V)
[[../poze/03284.png]]

<p>Atâta timp cât tensiunea bateriei nu scade sub 7 V, vor exista tot timpul 7 V (tensiune stabilizată) între bornele celor diode conectate în serie.</p>

<p>Dacă avem nevoie de tensiuni stabilizate şi mai mari, putem folosi şi mai multe diode în serie, sau putem încerca o altă complet diferită, folosindu-ne tot de diode. Ştim că tensiunea de polarizare a diodei este o valoare aproximativ constantă pentru o plajă largă de condiţii, dar acelaşi lucru este valabil şi pentru <i>tensiune (inversă) de străpungere</i>, iar valoarea acestei tensiuni de străpungere este de obicei mult mai mare decât tensiunea directă. Dacă inversăm polaritatea diodei în circuitul stabilizator de mai sus, şi creştem tensiunea sursei de alimentare până în punctul de străpungere al diodei, dioda va stabiliza şi în acest caz tensiunea la acel punct de străpungere, nepermiţând tensiunii să crească peste această valoare (figura de jos (a)).</p>

#+CAPTION: (a) tensiunea inversă de străpungere pentru o diodă de siliciu este aproximativ 100 V; (b) simbolul diodei Zener
[[../poze/03285.png]]

<p>Din păcate, când diodele redresoare normale ating punctul de stăpungere, acest faptul duce şi la distrugerea acestora. Totuşi, se pot construi diode speciale ce pot suporta tensiunea de străpungere fără distrugerea completă a acestora. Acest tip de diodă poartă numele de <i>diodă Zener</i>, iar simbolul este cel din figura de sus (b).</p>

<p>La polarizarea directă, diodele Zener se comportă precum diodele redresoare standard: tensiunea direcţa are valoarea de 0.7 V, conform ecuaţiei diodei. La polarizarea inversă însă, acestea nu conduc curentul decât peste o anumită valoare a tensiunii de alimentare, valoare denumită <i>tensiune Zener</i>; după atingerea acestei valori, dioda Zener va putea să conducă un curent substanţil, dar va limita căderea de tensiune la bornele sale la acea tensiune zener. Atâta timp când puterea disipată sub formă de căldură nu depăşeşte limita termică a diodei, aceasta nu va fi afectată în niciun fel.</p>

<p>Diodele zener sunt confencţionate cu tensiuni zener de câţiva volţi până la sute de volţi. Tensiunea zener variază uşor cu temperatura, dar acestea pot fi folosite cu succes ca dispozitive de stabilizare a tensiunii datorită stabilităţii şi acurateţii lor în funcţionare.</p>

#+CAPTION: circuit de stabilizare a tensiunii cu diodă zener; tensiunea zener este de 12.6 V
[[../poze/03287.png]]

<p>Observaţie! Orientarea diodei zener faţă de sursa de tensiune în circuit de mai sus, este asfel încât dioda să fie polarizată invers. Acesta este modul corect de conectare a diodelor zener în circuit! Dacă am fi să conectăm dioda zener invers, asfel încât să fie polarizată direct, aceasta s-ar comporta precum o diodă „normală”, iar tensiune de polarizare directă ar avea o valoare de doar 0.7 V. </p>

<p>Ca şi oricare dispozitiv semiconductor, dioda zener este sensibilă la temperatură. O temperatură excesivă poate duce la distrugerea diodei, asfel că va trebui să se ţină seama de puterea maximă permisă a diodei la proiectarea circuitelor. Interesant este faptul că, la distrugerea diodei zener, datorită căldurii excesive, distrugerea rezultată duce la <i>scurt-circuitarea</i> diodei, nu la <i>deschiderea</i>. O asfel de diodă „stricată” poate fi detectată foarte uşor, întrucât se comportă precum un conductor electric: căderea de tensiune este aproape zero atât la polarizarea directă cât şi la polarizarea inversă.</p>

<h3>Exemplu practic de utilizare a diodei zener</h3>

<p>Considerând circuitul precedent, vom rezolva matematic circuitul, determinând toate tensiunile, curenţii şi puterile disipate, pentru o tensiune zener de 12.6 V, o sursă de tensiune de 45 V şi o valoare a rezistorului de 1.000 Ω (figura de mai jos (a)).</p>

#+CAPTION: (a) stabilizator de tensiune cu diodă zener şi un rezistor de 1.000 Ω; (b) calcularea căderilor de tensiune şi ale curenţilor
[[../poze/03289.png]]

<p>Să calculăm prima dată puterile pe rezistor şi pe diodă:</p>

#+CAPTION: calcule matematice
[[../poze/13049.png]]

<p>O diodă zener cu o putere de 0.5 W şi un rezistor cu o putere de 1.5 sau 2 W sunt suficiente pentru această aplicaţie.</p>

<p>Dacă puterea excesivă disipată este atât de importanţa, de ce nu am proiecta un circuit asfel încât să existe o putere disipată minimă? De ce nu am introduce un rezistor cu o valoare foarte mare a rezistenţei, limitând prin urmare curentul şi menţinând puterea disipată la valori foarte scăzute? Să luăm, de exemplu, următorul circuit cu un rezistor de 100 kΩ în loc de rezistorul de 1 kΩ din circuitul precedent. Atât tensiunea de alimentarea cât şi tensiunea zener sunt cele din exemplul precedent.</p>

#+CAPTION: (a) stabilizator de tensiune cu diodă zener şi un rezistor de 100 kΩ
[[../poze/03290.png]]

<p>Având un curent de 100 de ori mai mic decât inainte (324 µA în loc de 32.4 mA), ambele valori ale puterilor disipate ar trebui să fie de 100 de ori mai mici:</p>

#+CAPTION: calcule matematice
[[../poze/13050.png]]

<p>Acestă configuraţie pare ideală. O putere disipată mai mică înseamnă temperaturi de funcţionare mai mici atât pentru dioda zener cât şi pentru rezistor şi o pierdere de energie mai mică în sistem. Într-adevăr, o rezistenţă mai mare reduce puterile disipate din circuit, dar, introduce o <i>altă</i> problemă. Scopul unui stabilizator de tensiune este alimentarea unui <i>alt circuit</i> cu o tensiune stabilă. Va trebui până la urmă să alimentăm un alt circuit cu 12.6 V, iar acest circuit legat la bornele diodei zener va necesita şi el un anumit curent. Să considerăm primul circuit, conectat de această dată la o sarcină de 500 Ω în paralel cu dioda zener:</p>

#+CAPTION: (a) stabilizator de tensiune cu diodă zener şi un rezistor de 1.000 Ω; conectarea unei sarcini de 500 Ω în paralel cu dioda zener
[[../poze/03291.png]]

<p>Dacă se menţine o tensiune de 12.6 V pe sarcina de 500 Ω, aceasta va „trage” un curent de 25.2 mA. Pentru ca rezistorul de 1 kΩ în serie cu sursa de tensiune, să aibă o cădere de tensiune de 32.4 V (45 V, tensiunea sursei - 12.6 V, căderea de tensiune pe diodă), acesta va trebui să conducă un curent de 32.4 mA. Acest lucru înseamnă ca prin dioda zener va trece un curent de 7.2 mA.</p>

<p>Să considerăm acum al doilea circuit de stabilizare a tensiunii cu un rezistor de 100 kΩ, alimentând aceeiaşi sarcină de 500 Ω. Ceea ce ar trebui să facă acest circuit, este să menţină o cădere de tensiune de 12.6 V la bornele sarcini, la fel ca în circuitul precedent. Dar, după cum putem vedea, circuitul stabilizator <i>nu poate</i> realiza acest lucru:</p>

#+CAPTION: (a) stabilizator de tensiune cu diodă zener şi un rezistor de 100 kΩ în serie; conectarea unei sarcini de 500 Ω în paralel cu dioda zener
[[../poze/03292.png]]

<p>Datorită prezenţei rezistorului foarte mare în serie cu sursa de tensiune, pe sarcină va exista o cădere de tensiune de doar 224 mV, mult mai puţin decât valoarea dorită de 12.6 V. De ce se întâmplă acest lucru? Dacă am fi să avem 12.6 V pe sarcină, curentul prin sarcină ar fi de 25.2 mA, la fel ca înainte. Acest curent de sarcină ar trebui să treacă şi prin rezistorul serie de valoare mult mai mare faţă de cazul precedent, iar căderea de tensiune necesară pentru susţinerea unui asfel de curent de 25.2 mA ar trebui să fie de 2.520 V! Din moment ce nu avem o tensiune aşa de mare la bornele sursei de alimentare, acest lucru nu este posibil. De asemenea, putem observa, că în circuitul de mai sus dioda este blocată.</p>

<p>Putem înţelege mai uşor situaţia de mai sus dacă îndepărtăm temporar dioda zener din circuit şi analizăm doar comportamentul celor doi rezistori:</p>

#+CAPTION: (a) stabilizator de tensiune cu diodă zener şi un rezistor de 100 kΩ în serie; conectarea unei sarcini de 500 Ω în paralel cu dioda zener; îndepărtarea temporară a diodei zener
[[../poze/03293.png]]

<p>Circuitul stabilizator cu rezistorul de 100 kΩ are totuşi o anumită valoare a rezistenţei sarcinii pentru care tensiunea la bornele sale este de 12.6 V. Putem afla această valoare făcând un mic calcul. Introducem toate valorile cunoscute într-un tabel, de forma celui de mai jos:</p>

#+CAPTION: tabel
[[../poze/13051.png]]

<p>Căderea de tensiune pe rezistorul serie de 100 kΩ este diferenţa căderilor de tensiune dintre sursă (coloana total) şi sarcină:</p>

#+CAPTION: tabel
[[../poze/13052.png]]

<p>Putem calcula curentul prin rezistorul serie folosind legea lui Ohm (I = E/R):</p>

#+CAPTION: tabel
[[../poze/13053.png]]

<p>Fiind un circuit serie, curentul este acelaşi prin toate componentele:</p>

#+CAPTION: tabel
[[../poze/13054.png]]

<p>Putem acum calcula rezistenţa sarcinii folosind legea lui Ohm (R = E/I):</p>

#+CAPTION: tabel
[[../poze/13055.png]]

<p>Prin urmare, dacă rezistenţa sarcini este exact 38.889 kΩ, vom avea o cădere de tensiune de 12.6 V la bornele sale, cu sau fără diodă. Orice rezistenţa de sarcină mai mică decât această valoare va duce la o cădere de tensiune mai mică de 12.6 V, cu sau fără diodă. Dacă inserăm şi dioda zener conform configuraţiei iniţiale, căderea de tensiune maximă pe sarcină va fi <i>stabilizată</i> la o valoare maximă de 12.6 V pentru oricare sarcină <i>mai mare</i> decât 38.889 kΩ.</p>

<p>Cu valoarea iniţială a rezistorului serie de 1 kΩ, circuitul putea să stabilizeze tensiunea chiar şi pentru o sarcină mult mai mică, de 500 Ω. Ceea ce vedem este un compromis între puterea disipată şi valoarea acceptabilă a sarcinii. Cu cât rezistorul serie este mai mare şi puterea disipată este mai mică, cu atât valoarea minimă a rezistenţei sarcinii trebuie să fie mai mare. Dacă vrem să stabilizăm tensiunea pentru o sarcină mică (rezistenţă mică), circuitul trebuie asfel conceput încât să suporte puteri mari de disipaţie.</p>

<h3>Circuit limitator cu diode zener</h3>

<p>Un circuit limitator ce „taie” vârfurile formei de undă aproximativ la tensiunea zener a diodelor, este prezentat în figura de mai jos. Circuitul este format din două ziode zenere conectate spate-în-spate. Rolul rezistorului este de limitare a curentului prin diode, pentru protecţia acestora:</p>

#+CAPTION: circuit limitator cu diode zener
[[../poze/03445.png]]

<p>Tensiunea de străpungere pentru cele două diode este fixată la 10 V. Acest lucru duce la tăierea formei de undă la aproximativ 10 V. Diodele, puse spate-în-spate, taie ambele vârfuri. Pentru semialternanţa pozitivă, dioda de sus este polarizată invers. Caderea de tensiune pe dioda de jos este 0.7 V, fiind polarizată direct. Asfel, tăierea exactă a formei de undă se realizează în jurul valorii de 10.7 V. Acelaşi lucru este valabil şi pentru semialternanţa negativă (-10.7 V):</p>

#+CAPTION: circuit limitator cu diode zener; formele de undă a tensiunii de alimentare şi a tensiunii de ieşire
[[../poze/23034.png]]

<p class="sumar">Sumar:</p>
<ul>
	<li>Diodele zener sunt proiectate să funcţioneze polarizate invers. Tensiunea la care aceste diode încep să conducă este denumită <i>tensiune zener</i></li>
	<li>Dioda zener poate funcţiona pe post de stabilizator de tensiune</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
