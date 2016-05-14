<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Consideraţii practice (bobina)</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Consideraţii practice (bobina)</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>Bobinele, la fel ca toate celelalte componente, au anumite limite ce trebuiesc luate în considerare dacă se doreşte operarea eficientă şi siguranţa a circuitelor din care fac parte.</p>

<h2>Curentul maxim printr-o bobină</h2>

<p>Bobinele sunt realizate din conductori înfăşuraţi. Orice conductor are o limită maximă a capacităţii curentului prin el, limită datorată rezistenţei şi abilităţii acestuia de a elimina căldura creată. Din această cauză, trebuie să fim atenţi la valoarea curentului maxim permisă printr-o bobină.</p>

<h2>Circuitul echivalent a unei bobine</h2>

<p>Orice conductor din care este realizat bobina prezintă o anumită rezistenţă electrică. Adeseori, cerinţele circuitului impun cea mai mică dimensiune posibilă bobinelor din componenţă. Din acest motiv, nu există o bobină „ideală”. Conductorii bobinelor prezintă de obicei o rezistenţă electrică serie substanţială. Distanţa foarte mică dintre doi conductori adiacenţi ai înfăsurării dă naştere unei capacităti parazite. Toate aceste lucruri interacţionează cu caracteristicile pur inductive ale tuturor bobinelor.</p>

<p>Spre deosebire de condensatoare, ce sunt relativ uşor de confecţionat pentru obţinerea unor efecte parazite neglijabile, bobinele sunt greu de găsit în forma lor „pură”. În unele aplicaţii, aceste caracteristici nedorite pro pune serioase probleme inginereşti.</p>

<h2>Mărimea fizică a bobinelor</h2>

<p>Fizic, bobinele tind să fie mult mai mare decât condensatoarele, pentru aceiaşi valoare a energiei stocate. Acest lucru este cu atât mai adevărat dacă luăm în considerare condensatoarele electrolitice, ce permit stocarea unei energii (capacitive) mari într-un spaţiu relativ mic. Dacă dorim stocarea unei energii mari într-un volum mic, într-un anumit circuit pe care-l proiectăm, dacă putem alege între o bobină şi un condensator, de cele mai multe ori alegerea corectă o reprezintă condensatorul.</p>

<p>O excepţie notabilă a acestei regului o reprezintă aplicaţii care necesită capacităţi sau inductanţe extrem de mari pentru stocarea energiei electrice: bobinele realizate din fire supraconductoare (rezistenţă electrică zero) sunt mai practice din punct de vedere al realizării lor decât condensatoarele de aceiaşi valoare, şi probabil sunt şi mai mici.</p>

<h2>Interferenţa cauzată de bobine</h2>

<p>Bobinele pot afecta componentele adiacente dintr-un circuit electric sau electronic datorită câmpurilor magnetice create. Aceste câmpuri se întind pe o distanţa relativ mare fată de bobină. Acest lucru este adevărat mai ales în cazul în care există şi alte bobine în apropierea acesteia. În cazul în care câmpurile magnetice a două sau mai multe bobine se „cuplează”, în circuit vor exista inductanţe mutuale precum şi inductanţe proprii, ducând la efecte nedorite.</p>

<p>Acesta este un alt motiv pentru care, la proiectarea circuitelor, se aleg de obicei condensatoare în dauna bobinelor, acolo unde acest lucru este posibil: câmpul electric al condensatoarelor nu se „împrăştie” pe o suprafaţă mare precum cel al bobinelor, şi nu generează efecte mutuale cu celelalte componente din circuit.</p>

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
