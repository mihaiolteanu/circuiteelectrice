<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Divizor de tensiune</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>03. Divizor de tensiune</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Scopul experimentului</h2>

<p>Pentru derularea acestui experiment veţi avea nevoie de diferiţi rezistori cu valori între 1 kΩ şi 100 kΩ. Altfel, s-ar putea să nu obţineţi valori corecte ale tensiunii şi curentului măsurat cu ajutorul multimetrului. În cazul unor rezistenţe mici, rezistenţa internă a ampermetrului are un impact destul de mare asupra acurateţii măsurătorii. Rezistenţele foarte mari pot cauza probleme măsurătorilor de tensiune. Rezistenţa internă a voltmetrului în acest caz modifică rezistenţa circuitului când acesta este conectat în paralel cu un rezistor de valoare mare.</p>

<p>În urma realizării acetui experiment, vă veţi familiariza cu utilizarea legii lui Kirchhoff pentru tensiune, precum şi cu realizarea unui divizor de tensiune. Vom realiza circuitul de mai jos (diagrama):</p>

<img src="../poze/05083.png" width="220" height="193" alt="divizor de tensiune"/>

<p>Practic, acest poate fi realizat în oricare din formele de mai jos (care va este mai la îndemână):</p>

<img src="../poze/05084.png" width="300" height="180" alt="divizor de tensiune; circuit practic"/>

<img src="../poze/05085.png" width="223" height="173" alt="divizor de tensiune; circuit practic"/>

<img src="../poze/05086.png" width="300" height="182" alt="divizor de tensiune; circuit practic"/>

<p>Alternativ, puteţi încerca realizarea tuturor celor trei variante de mai sus. Vă veţi familiariza astfel cu toate cele trei metode. Fiecare are avantajele şi dezavantajele sale. Ultima variantă - în care toate componentele sunt conectate între ele folosind conductori cu crocodili - este cea mai neprofesională, dar perfectă pentru un experiment precum cel de faţă. Construcţia circuitului pe placa de test este cea mai versatilă. Placa de test permite o densitate mare de componente (multe componente pe o suprafaţă mică), dar circuitului este temporar. Regleta de borne oferă un circuit mult mai permanent, dar o densitatea mică de componente.</p>

<h2>Desfăşurarea experimentului</h2>

<p>Alegeţi trei rezistori şi măsuraţi valoarea rezistenţei fiecăruia cu un ohmmetru. Notaţi-vă aceste valori pentru utilizarea lor ulterioara.</p>

<p>Conectaţi cei trei rezistori în serie. Conectaţi apoi şi bateria, conform figurilor de mai sus. Măsuraţi tensiunea bateriei cu un voltmetru după ce aţi realizat circuitul. Notaţi-vă şi această valoare. Este indicat să măsuraţi tensiunea bateriei în timpul alimentării rezistorilor, deoarece această valoare s-ar putea să difere puţin faţă de tensiunea normală a bateriei. Acest circuit nu ar trebui să prezinte o sarcină suficient de mare (curentul necesar nu este destul de mare) pentru a cauza scăderea tensiunii bateriei. Totuşi, măsurarea tensiunii bateriei sub sarcină este indicată în orice situaţie, întrucât oferă valori de calcul mult mai realiste.</p>

<p>Aplicaţi legea lui Ohm (I = E / R) pentru a calcula curentul din circuit. Verificaţi această valoare calculata prin măsurarea curentului cu un ampermetru astfel (metoda este similară indiferent de varianta circuitului):</p>

<img src="../poze/05087.png" width="300" height="288" alt="divizor de tensiune; măsurarea curentului"/>

<p>Dacă valorile rezistorilor pe care i-aţi ales se află într-adevăr în intervalul 1 kΩ - 100 kΩ, iar tensiunea bateriei este de aproximativ 6 V, valoarea curentului ar trebui să fie destul de mică (mA sau µA). Fiţi atenţi la prefixul afişat, într-unul din colţuri, în cazul multimetrelor digitale. Este foarte uşor să uităm aceste prefixe când citim valoarea măsurători.</p>

<p>Valoarea măsurată a curentului ar trebui să fie foarte apropiată de valoarea calculată folosind legea lui Ohm. Înmulţiţi acum valoarea calculată pentru curent cu valoarea rezistenţei fiecărui rezistor. Aflaţi astfel valoarea căderilor de tensiune (E = IR). Măsuraţi apoi cu ajutorul voltmetrului căderea de tensiune reală pe fiecare rezistor, verificând astfel acurateţea calculelor. Din nou, cele două valori, cea calculată şi cea măsurată, trebuie să fie extrem de apropiate.</p>

<h2>Explicarea divizorului de tensiune</h2>

<p>Fiecare cădere de tensiune a rezistorilor este doar o fracţiune din tensiunea totală. De aici şi denumirea de <i>divizor de tensiune</i> a acestui circuit. Această valoare subunitară este determinată de rezistenţa individuală a rezistorului şi de rezistenţa totală a circuitului.</p>

<p>Dacă tensiunea unui rezistor este de 50% din tensiunea totală a bateriei, acest procent va rămâne neschimbat atâta timp cât valorile rezistorilor nu se modifică, indiferent de tensiunea bateriei. Prin urmare, dacă tensiunea totală este de 6 V, tensiunea rezistorului respectiv va fi 50% din această valoare, adică 3 V. Dacă tensiunea totală este 20 V, căderea de tensiune la bornele rezistorului va fi de 10 V, sau 50% din 20 V.</p>

<h2>Validarea legii lui Kirchhoff pentru tensiune</h2>

<p>Identificaţi fiecare punct din circuit cu un număr. Punctele ce sunt electric comune trebuiesc notate cu acelaşi număr, astfel:</p>

<img src="../poze/05089.png" width="140" height="201" alt="divizor de tensiune; notarea punctelor din circuit"/>

<p>Practic, circuitul se poate realiza prin lipirea unei benzi adezive la capătul conductorilor pe care este scris numărul punctului respectiv de contact din circuit:</p>

<img src="../poze/05088.png" width="245" height="191" alt="divizor de tensiune; notarea punctelor din circuit"/>

<p>Folosiţi un voltmetru digital (acest lucru este important!). Măsuraţi căderile de tensiune în jurul buclei formate din punctele 0-1-2-3-0. Notaţi-vă fiecare din aceste tensiuni, cât şi semnul indicat de voltmetrul. Cu alte cuvinte, dacă valoarea afişată de voltmetru este -1,325 V, notaţi această valoare cu semnul minus. <i>Nu</i> inversaţi sondele voltmetrului pentru a obţine o citire „corectă” (pozitivă). Semnul matematic este foarte important pentru exemplificarea legii lui Kirchhoff. Paşii pe care trebuie sa-i urmaţii sunt următorii:</p>

<img src="../poze/05090.png" width="403" height="318" alt="divizor de tensiune; măsurarea căderilor de tensiune"/>

<img src="../poze/05091.png" width="408" height="317" alt="divizor de tensiune; măsurarea căderilor de tensiune"/>

<img src="../poze/05092.png" width="420" height="338" alt="divizor de tensiune; măsurarea căderilor de tensiune"/>

<img src="../poze/05093.png" width="423" height="338" alt="divizor de tensiune; măsurarea căderilor de tensiune"/>

<p>Folosind astfel voltmetrul pentru a „păşi” în jurul circuitului, veţi obţine trei tensiuni pozitive şi o tensiune negativă:</p>

<img src="../poze/05094.png" width="210" height="280" alt="divizor de tensiune; măsurarea căderilor de tensiune"/>

<p>Adunaţi toate aceste valori algebric (respectând semnul). Rezultatul sumei trebuie să fie zero. Acesta este principiul fundamental al legii lui Kirchhoff pentru tensiune: suma algebrică a tutor căderilor de tensiune dintr-o buclă trebuie să fie egală cu zero.</p>

<p>Indiferent de sensul de parcugere al buclei, rezultatul este acelaşi. Încercaţi să realizaţi o buclă închisă între oricare seturi de puncte. Suma algebrică a căderilor de tensiune va fi tot timpul egală cu zero. Această lege este valabilă indiferent de configuraţia circuitului studiat: serie, paralel, serie-paralel sau circuit complex.</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>