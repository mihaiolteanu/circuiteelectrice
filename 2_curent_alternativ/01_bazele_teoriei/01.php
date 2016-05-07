<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Ce este curentul alternativ</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Ce este curentul alternativ</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>În primul capitol am luat în considerare doar curentul continuu, termen folosit în electricitate pentru a defini deplasarea electronilor într-o singură direcţie constantă şi/sau calitatea tensiunii de a deţine o singură polaritate. Curentul continuu este tipul de electricitate produsă de o baterie, de exemplu.</p>

<p>Pe cât de folosit şi uşor de înţeles este curentul continuu, acesta nu este „tipul” de electricitate folosit în general. Unele surse electrice, precum generatoarele electro-mecanice rotative, produc tensiuni a căror polaritate alternează, inversându-se în acest caz polii pozitivi şi negativi între ei. Fie că vorbim de modificarea polarităţii unei tensiuni sau de modificarea direcţiei de deplasare a electronilor înainte şi înapoi, acest gen de electricitatea poartă denumirea de curent alternativ:</p>

<p><img src="../poze/02001.png" alt="curent continuu vs. curent alternativ"/></p>

<p>Deşi simbolul bateriei este folosit pentru a reprezenta orice sursă de curent continuu, în cazul curentului alternativ, simbolul unei surse generige îl reprezintă o linie sinusoidală într-un cerc, precum în figura de mai sus.</p>

<p>Ne putem întreba, pe bună dreptate, de ce ne-am bate capul şi cu acest tip de electricitate. Este adevărat că în unele cazuri, curentul alternativ nu prezintă niciun avantaj faţă de cel continuu. În aplicaţiile în care curentul electric este folosit doar pentru a genera energie sub formă de căldură (reşou, bec, etc.), polaritatea sau direcţia curentului este irelevantă atâta timp cât tensiunea şi curentul existente în circuit sunt suficiente pentru a disipa puterea necesară elementelor din circuit. Totuşi, cu ajutorul curentului alternativ se pot construi generatoare electrice, motoare electrice şi sisteme de distribuţie a energiei electrice mult superioare din punct de vedere al eficienţei faţă de curentul continuu.</p>

<h3>Generarea curentului alternativ</h3>

<p>În cazul în care construim o maşină ce roteşte un câmp magnetic în jurul unui set de înfăşurări staţionare prin intermediul unui ax, vom constata producerea curentului alternativ pe înfăsurări pe măsură ce axul se roteşte; principiul se bazează pe legea inducţiei electromagnetice a lui Faraday. Acesta este şi principiul de bază a unui generator de curent alternativ, cunoscut şi sub numele de alternator.</p>

<p><img src="../poze/02002.png" alt="principiul generatorului de curent alternativ"/></p>

<p>Putem observa că polaritatea tensiunii pe înfăşurare se inversează atunci când prin preajma acestia trece polul opus al magnetului. Conectată la o sursă, această inversare a polarităţii crează un curent invers (în direcţie opusă) prin circuit. Cu cât viteza de rotaţie a axului generatorului este mai mare, cu atât mai repede se roteşte şi magnetul; rezultatul este o tensiune şi curent alternativ ce-şi modifică direcţiile mult mai des în aceeiaşi perioadă de timp.</p>

<h3>Generarea curentului continuu</h3>

<p>Deşi generatoarele de curent continuu funcţionează pe baza aceluiaşi principiu al inducţiei electromagnetice ca şi generatoarele de curent alternativ, construcţia acestora nu este aşa de simplă. La un generator de curent continuu, înfăşurarea este montată pe ax, acolo unde la generatorul de curent alternativ se află magnetul permanent, iar contactul dintre înfăşurarea rotativă şi circuitul exterior se realizează cu ajutorul unor contacte staţionare de carbon, numite perii, ce vin în contact cu fâşii de cabon aflate pe înfăşurare. Toate aceste elemente sunt necesare pentru schimbarea polarităţii de ieşire spre circuitul exterior, pentru ca acesta „să vadă” o polaritate constantă (curent continuu):</p>

<p><img src="../poze/02003.png" alt="principiul generatorului de curent continuu"/></p>

<p>Generatorul de mai sus produce două pulsuri de tensiune la fiecare revoluţie a axului, ambele pulsuri având aceeiaşi direcţie (polaritate). Pentru ca un generator de curent continuu să producă o tensiune <i>constantă</i> şi nu o tensiune intermitentă, acesta trebuie echipat cu seturi multiple de înfăşurări pentru contactul cu periile. Diagrama de mai sus este prin urmare una simplificată.</p>

<p>Problema ce se iveşte în cazul închiderii şi deschiderii contactelor între înfăsurările rotative şi perii este dezvoltarea căldurii excesive şi a scânteilor, în special la viteze mari. Dacă mediul ambiant în care funcţionează generatorul prezintă vapori inflamabili sau explozivi, problema folosirii unui asfel de generator este şi mai gravă. Pe de altă parte, un generator de curent alternativ nu necesită perii şi comutatoare pentru funcţionarea sa, şi este prin urmare imun la asfel de probleme. Avantajele curentului alternativ faţă de cel continuu se regăsesc şi în cazul confecţionării motoarelor electrice.</p>

<h3>Transformatorul</h3>

<p>Un alt domeniu de aplicare al curentului continuu se bazează pe un efect al electromagnetismului cunoscut sub denumirea de <i>inducţie mutuală</i>: două sau mai multe înfăşurări plasate una în vecinătatea celeilalte, asfel încât câmpul magnetic variabil create de o înfăşurare induce o tensiune electrică în cealaltă. Dacă avem două înfăşurări mutual inductive şi alimentăm una dintre ele în curent altenativ, cea de a doua înfăşurare va şi ea străbătută de curent alternativ. O asfel de utilizare a înfăşurătorilor dă naştere unui dispozitiv numit <i>transformator</i>:</p>

<p><img src="../poze/02004.png" alt="principiul transformatorului - un curent alternativ ce alimentează prima înfăşurare dintr-un set de două înfăşurări mutual inductive, va induce un curent alternativ în cea de a doua înfăşurare"/></p>

<p>Transformatorul este utilizat în principal pentru ridicarea sau coborârea valorii tensiunii de la înfăşurarea alimentată la cea nealimentată. Prima înfăşurare, cea care este alimentată în curent alternativ, poartă denumirea de <i>primar</i>; cea de a doua înfăşurare, cea în care se induce un curent alternativ dinspre primar, poartă denumirea de <i>secundar</i>. Valoarea tensiunii induse în secundar este egală cu produsul dintre valoarea tensiunii din primar şi raportul dintre numărul de spire din secundar şi numărul de înfăşurări din primar (U<sub>2</sub> = U<sub>1</sub>*n<sub>2</sub>/n<sub>1</sub>). Această relaţie poate fi reprezentată printr-o analogie mecanică, folosind cuplul şi viteza pentru reprezentarea tensiunii şi respectiv a curentului.</p>

<p><img src="../poze/02005.png" alt="analogie între transformator şi angrenajul mecanic unde cuplul reprezintă tensiunea şi viteza reprezintă curentul"/></p>

<p>Dacă inversăm raportul numărului de spire dintre primar şi secundar, asfel încât primarul va avea mai puţine spire decât secundarul, atunci transformatorul va „ridica” tensiune de la nivelul existent în primar la un nivel mai mare în secundar.</p>

<p>Abilitatea transformatoarelor de a ridica tensiunea sau de a o coborî este extrem de utilă în proiectare reţelelor de distribuţie a energiei electrice. Atunci când se transportă energie electrică pe distanţe lungi, este mult mai eficient dacă aceasta se realizează la tensiuni înalte şi curenţi mici (diamentrul conductorilor este mai mic, prin urmare şi pierderile sunt mai mici), si coborârea acesteia pentru utilizarea de către consumatori.</p>

<p><img src="../poze/02007.png" alt="principiul reţelei de distribuţie a energiei electrice - folosirea transformatoarelor ridicătoare şi coborâtoare de tensiune"/></p>

<p>Tehnologia proiectării transformatoarelor face posibilă existenţa sistemelor de distribuţie. Fară capacitatea de ridicare şi coborâre a tensiuni, sistemele de distribuţie ar fi mult prea scumpe pentru a fi practice, decât poate, doar pe distanţe scurte, de câţiva kilometri.</p>

<p>Pe cât sunt de folositoare, transformatoarele funcţionează doar în curent alternativ, deoarece fenomenul de inducţie mutuală se bazează pe câmpuri magnetice variabile, iar curentul continuu nu poate produce decât câmpuri magnetice constante. Desigur, curentul continuu poate fi folosit sub formă de impulsuri prin înfăşurarea primară pentru crearea unui câmp magnetic variabil, dar acest curent pulsatoriu nu este foarte diferit până la urmă de curentul alternativ.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Curentul continuu menţine tensiunea şi curentul la o polaritate respectiv direcţie constante în timp</li>
	<li>În curent alternativ, tensiunea şi curentul îşi schimbă polaritatea respectiv direcţia în timp</li>
	<li>Generatoarele electromacanice în curent alternativ, cunoscute sub numele de <i>alternatoare</i>, sunt mult mai simplu de construit decât generatoarele de curent continuu. Acelaşi lucru este valabil şi în cazul motoarelor electrice</li>
	<li>Un transformator reprezintă un set de înfăşurări mutual inductive, folosite pentru transmiterea puterii electrice în curent alternativ de la o înfăşurare la cealaltă. De obicei, numărul de spire din fiecare înfăşurare este asfel stabilit încât transformatorul ridică sau coboară tensiune din primar (înfăşurarea alimentată) spre secundar (înfăşurarea nealimentată, indusă) </li>
	<li>Tensiunea din secundar = Tensiunea din primar (numărul de spire din secundar / numărul de spire din primar</li>
	<li>Curentul din secundar = Curentul din primar (numărul de spire din primar / numărul de spire din secundar</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>