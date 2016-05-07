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
	<h1>6. Amplificator cu tranzistor în conexiune colector comun</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Configuraţa amplificatorului colector comun arată asfel:</p>

<p><img src="/sites/default/files/electronica_analogica/03100.png" alt="configuraţia amplificatorului cu tranzistor în conexiune colector comun"/></p>

<p>Denumirea de <i>colector comun</i> vine de la faptul că, ignorând sursa de alimentare (bateria), sursa de semnal şi sarcina au ca punct comun contactul colectorului:</p>

<p><img src="/sites/default/files/electronica_analogica/03101.png" alt="configuraţia amplificatorului cu tranzistor în conexiune colector comun"/></p>

<p>Se poate observa că prin rezistorul de sarcină trece atât curentul colectorului cât şi curentul bazei, fiind conectat în serie cu emitorul. Amplificarea în curent a amplificatorului colector comun este cea mai mare dintre toate configuraţiile, deoarece într-un tranzistor, cel mai mare curent se regăseşte pe emitor, fiind suma dintre curentul bazei şi al colectorului. Să analizăm însă circuitul de mai jos pentru a descoperi particularităţile acestei configuraţii:</p>

<p><img src="/sites/default/files/electronica_analogica/03103.png" alt="configuraţia amplificatorului cu tranzistor în conexiune colector comun; circuit practic"/></p>

<p>Graficul variaţiei căderii de tensiune de ieşire - cădere de tensiune de intrare, este următorul:</p>

<p><img src="/sites/default/files/electronica_analogica/23009.png" alt="configuraţia amplificatorului cu tranzistor în conexiune colector comun; variaţia tensiune ieşire - tensiune intrare"/></p>

<p>Faţa de conexiunea emitor comun, amplificatorul colector comun produce la ieşire o cădere de tensiune de aceeiaşi polaritate cu tensiunea de intrare. Pe măsură ce tensiunea de intrare creşte, creşte şi cea de ieşire. Mai mult, tensiunea de ieşire, este aproape <i>identică</i> cu tensiunea de intrare, minus căderea de 0.7 V a joncţiunii P-N. Indiferent de factorul beta al tranzistorului, sau de valoarea sarcinii, amplificatorul colector comun are un factor de amplificare în tensiune (A<sub>V</sub>) extrem de apropiat de valoarea 1. Din această cauză, conexiunea colector comun mai este denumită şi <i>repetor pe emitor</i>.</p>

<h2>Explicaţie</h2>

<p>Este relativ uşor de înţeles motivul pentru care căderea de tensiune pe sarcina amplificatorului în colector comun este aproximativ egală cu tensiunea de intrare. Dacă ne referim la modelul diodă-sursă-de-curent al tranzistorului, putem vedea că, curentul bazei trebuie să treacă prin joncţiunea P-N bază-emitor, joncţiune echivalentă unei diode redresoare. Dacă această joncţiune este polarizată direct, va exista o cădere de tensiune de aproximativ 0,7 V (siliciu) între terminalele acestia. Această cădere de tensiune de 0,7 V nu depinde de amplitudinea curentului de bază, asfel că putem considera această cădere de tensiune ca fiind constantă:</p>

<p><img src="/sites/default/files/electronica_analogica/03104.png" alt="configuraţia amplificatorului cu tranzistor în conexiune colector comun; modelul diodă-sursă-de-tensiune pentru explicarea comportamentului amplificatorului"/></p>

<p>Cunoscând polarităţile tensiunilor joncţiunii P-N bază-emitor şi a rezistorului de sarcină, putem vedea că tensiunea de intrare <i>trebuie</i> să fie egală cu suma celor două, în conformitatea cu legea lui Kirchhoff pentru tensiune. Cu alte cuvinte, tensiunea sarcinii va fi tot timpul cu aproximativ 0.7 V mai mică decât tensiunea de intrare, atunci când tranzistorul se află în stare de conducţie.</p>

<h2>Utilizarea unei surse de curent continuu</h2>

<p>Pentru amplficarea semnalelor de curent alternativ cu ajutorul configuraţiei colector comun, este nevoie de utilizarea unei surse de tensiune în curent continuu (tensiune de polarizare), la fel cum a fost cazul configuraţiei emitor comun. Rezultatul este însă de această dată un amplificator ne-inversor.</p>

<p><img src="/sites/default/files/electronica_analogica/03105.png" alt="configuraţia amplificatorului cu tranzistor în conexiune colector comun; adăugarea sursei de tensiune în curent continuu pentru polarizarea corectă a tranzistorului"/></p>

<p>Formele de undă a tensiunii de ieşire (albastru) şi a tensiunii de intrare (roşu) sunt prezentate în graficul de mai jos:</p>

<p><img src="/sites/default/files/electronica_analogica/23010.png" alt="formele de undă ale tensiunilor de intrare şi ieşire ale amplificatorului colector comun"/></p>

<p>Dacă ar să conectăm mai multe osciloscoape în circuit, vom vedea că formele de undă ale tensiunilor arată asfel:</p>

<p><img src="/sites/default/files/electronica_analogica/03111.png" alt="configuraţia amplificatorului cu tranzistor în conexiune colector comun; conectarea osciloscoapelor pentru vizualizarea formelor de undă"/></p>

<h2>Factorul de amplificare în curent</h2>

<p>Din moment ce această configuraţie nu oferă nicio amplificare în tensiune, singura amplificare realizată este în curent. Configuraţia anterioară, emitor comun, oferea un factorul de amplificare în curent egal cu factorul β al tranzistorului, datorită faptului că, curentul de intrare trecea prin bază, iar curentul de ieşire (sarcină) trecea prin colector, iar β este prin definiţie raportul dintre curentul de colector şi curentul de bază. În configuraţia colector comun însă, sarcina este conectată în serie cu emitorul, prin urmare, curentul de ieşire este egal cu acest curent al emitorului. Dar curentul prin emitor este curentul colectorului <i>plus</i> curentul bazei. Acest lucru înseamnă o amplificare în curent (A<sub>I</sub>) egală cu β plus 1:</p>

<p><img src="/sites/default/files/electronica_analogica/13020.png" alt="configuraţia amplificatorului cu tranzistor în conexiune colector comun; calcularea factorului de amplificare în curent"/></p>

<h2>Amplificator colector comun cu tranzistor PNP</h2>

<p>Şi în acest caz, se pot utiliza tranzistori de tip PNP pentru realizarea amplificatorului colector comun. Toate calculele sunt identice. Singura diferenţă este inversarea polarităţii tensiunilor si a direcţiei curenţilor:</p>

<p><img src="/sites/default/files/electronica_analogica/03113.png" alt="configuraţia amplificatorului cu tranzistor de tip PNP în conexiune colector comun;"/></p>

<h2>Stabilizarea tensiunii cu tranzistor în conexiune colector comun</h2>

<p>O aplicaţie populară a tranzistorului colector comun constă în stabilizarea surselor de putere în curent continuu. Una dintre soluţii utilizează diode zener pentru tăierea tensiunilor mai mari decât tensiunea zener:</p>

<p><img src="/sites/default/files/electronica_analogica/03106.png" alt="stabilizarea tensiunii cu ajutorul diodelor zener"/></p>

<p>Totuşi, curentul ce poate fi transmis sursei este destul de limitat în această situaţie. În principiu, acest circuit regulează tensiunea la bornele sarcinii prin menţinerea curentului prin rezistorul serie la valori suficient de mari pentru ca întreaga putere în exces a sursei de tensiune şa cadă pe rezistor; dioda zener va „trage” un curent necesar menţinerii unei căderi de tensiune constante la bornele sale. Pentru sarcini mari, ce necesită un curent mare pentru acţionarea lor, un stabilizator de tensiune cu diodă zener ar trebui să şunteze un curent mare prin diodă pentru a putea stabiliza tensiunea pe sarcină.</p>

<p>O metodă de rezolvare a acestei probleme constă în utilizarea unui tranzistor în conexine colector comun pentru amplificarea curentului prin sarcină, asfel ca dioda zener să nu fie nevoită să conducă decât curentul necesar bazei tranzistorului.</p>

<p><img src="/sites/default/files/electronica_analogica/03107.png" alt="stabilizarea tensiunii cu ajutorul diodelor zener şi a unui tranzistor în conexiune colector comun pentru acţionarea sarcinii"/></p>

<p>Singura problemă este că tensiunea pe sarcină va fi cu aproximativ 0.7 V mai mică decât căderea de tensiune pe dioda zener. Acest lucru poate fi însă corectat prin utilizarea unei diode zener cu o tensiune zener mai mare cu 0.7 V decât tensiunea necesară pentru aplicaţia în cauză.</p>

<h2>Tranzistor Darlington</h2>

<p>În unele aplicaţii, factorul de amplificare în curent al unui singur tranzistor în configuraţie colector comun nu este suficient. În acest caz, se pot conecta (etaja) mai mulţi tranzistori într-o <i>configuraţie Darlington</i>:</p>

<p><img src="/sites/default/files/electronica_analogica/03108.png" alt="tranzistori în configuraţie Darlington"/></p>

<p>Configuraţia Darlington constă în conectarea pe sarcina unui tranzistor colector comun a unui alt tranzistor, multiplicând asfel factorii de amplificare în curent al celor doi:</p>

<div class="formula">
<p>A<sub>I</sub> = (β<sub>1</sub> + 1)(β<sub>2</sub> + 1), unde:</p>
<p>β<sub>1</sub> - factorul beta al primul tranzistor</p>
<p>β<sub>2</sub> - factorul beta al celui de al doilea tranzistor</p>
</div>

<p>Amplificarea în tensiune va fi şi de această dată apropiată de 1, cu toate că tensiunea de ieşire va fi mai mică cu 1,4 V decât tensiunea de intrare:</p>

<p><img src="/sites/default/files/electronica_analogica/03109.png" alt="amplificator cu tranzistori în configuraţie Darlington"/></p>

<p>Tranzistorii în configuraţie Darlington pot fi cumpăraţi ca şi dispozitive discrete, sau pot fi construiţi din tranzistori individuali. Desigur, dacă se doreşte obţinerea unor curenţi şi mai mari, se pot conecta chiar şi trei sau patru tranzistori în configuraţie Darlington.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Denumirea de <i>colector comun</i> vine de la faptul că tensiunea de intrare şi cea de ieşire au ca şi punct comun terminalul colectorului tranzistorului, neluând în considerare sursele de putere din circuit</li>
	<li>Amplificator colector comun mai este cunoscut şi sub numele de repetor pe emitor</li>
	<li>Tensiunea de ieşire a unui amplificator în configuraţie colector comun este în fază cu tensiunea de intrare, ceea ce înseamnă că acest tip de amplificator este <i>ne-inversor</i></li>
	<li>Factorul de amplificare în curent (A<sub>I</sub>) al amplificatorului colector comun este egal cu β plus 1, iar factorul de amplficare în tensiune (A<sub>V</sub> este foarte aproape de 1</li>
	<li>Conectarea în serie a mai multor tranzistori în configuraţie colector comun, poartă numele de <i>configuraţie Darlington</i>. Factorul de amplificare în curent rezultat este produsul dintre factorii de amplificare a fiecărui tranzistor din configuraţie</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>