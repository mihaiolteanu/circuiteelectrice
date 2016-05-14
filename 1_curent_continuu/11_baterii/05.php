<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Consideraţii practice</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Consideraţii practice</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>La conectarea bateriilor în serie (sau paralel), trebuie să fim atenţi la caracteristicile fiecărei baterii, pentru a nu cauza probleme.</p>

<h2>Conectarea în serie a bateriilor</h2>

<p>Să luăm pentru început cazul conectării bateriilor în serie pentru obţinerea unei tensiuni mai mari:</p>

<img src="../poze/00273.png" alt="conectarea bateriilor în serie"/>

<p>Cunoaştem faptul că valoarea curentului într-un circuit serie este aceiaşi în toate punctele. Oricare ar fi valoarea curentului în circuit, aceasta trebuie să fie aceiaşi prin fiecare baterie. Din acest motiv, toate bateriile trebuie să fie egale din punct de vedere al valorii amper-oră. În caz contrar, unele din baterii se vor goli mai repede decât celelalte, iar capacitatea întregului circuit va fi compromisă. Capacitatea amper-oră totală a acestui circuit serie nu este afectate de numărul de baterii conectate.</p>

<h2>Conectarea în paralel a bateriilor</h2>

<p>Să luăm cazul conectării bateriilor în paralel pentru creşterea curentului în circuit (rezistenţă înternă mai mică), sau creşterea capacităţii amper-oră:</p>

<img src="../poze/00274.png" alt="conectarea bateriilor în paralel"/>

<p>Cunoaştem faptul că într-un circuit paralel, căderea de tensiune este egală pe toate ramurile. Trebuie să ne asigurăm aşadar că tensiunea acestor baterii este egală. În caz contrar, vor exista curenţi relativ mari de la o baterie spre alta, bateriile cu o tensiune mai mare dominând bateriile cu tensiune mai mică. Acest lucru nu este de dorit.</p>

<h2>Protejarea circuitelor cu siguranţe fuzibile</h2>

<p>În aceiaşi ordine de idei, trebuie să ne asigurăm că orice elemente de protecţie la supracurent (siguranţe fuzibile sau întrerupătoare automate) sunt instalate astfel încât să fie eficiente. Pentru circuitul serie de mai sus, o singură siguranţă fuzibilă este suficientă pentru protecţia la supracurent a conductorilor, din moment ce orice deschidere a circuitului va opri curentul în întreg circuitul:</p>

<img src="../poze/00275.png" alt="conectarea bateriilor în serie; protecţia la supracurent"/>

<p>În cazul unor baterii conectate în paralel însă, o singură siguranţa fuzibilă este suficientă pentru protejarea conductorilor la supracurent (conectată între sarcină şi bateriile conectate în paralel). În acest caz însă, avem şi alte situaţii pe care trebuie să le luăm în considerare. Se ştie faptul că, în cazul bateriilor, pot apărea scurt-circuite interne datorită „defectării” mediului de separare dintre electrozi. Bateriile bune vor domina bateriile defecte (tensiune mică), ducând la apariţia unor curenţi relativ mari pe aceste ramuri. Pentru a ne proteja de un astfel de eveniment, fiecare baterie trebuie protejată la supracurent printr-o singuranţă fuzibilă individuală, pe lângă siguranţa fuzibilă principală:</p>

<img src="../poze/00276.png" alt="conectarea bateriilor în paralel; protecţia la supracurent"/>

<h2>Alte observaţii legate de baterii şi acumulatori</h2>

<p>Atunci când avem de a face cu acumulatori, trebuie să fim atenţi la modul lor de încărcare. În fucţie de tipul şi modul de construcţie, acumulatorii au nevoi diferite când vine vorba de încărcarea lor. De obicei, producătorii oferă unele recomandări cu privire la modul de proiectare şi de menţinere a unui sistem electric ce utilizează acumulatori.</p>

<p>Există două probleme principale: iterarea şi supraîncărcarea. Iterarea se referă la procesul de încărcare şi descărcare a unei baterii. Toate bateriile au un anumit număr de iteraţii permise. Supraîncărcarea reprezintă condiţia în care curentul continuă să fie forţat în sens invers prin acumulator, dincolo de punctul în care acesta a a tins încărcarea maximă. În cazul bateriilor de plumb-acid în special, supraîncărcarea duce la electroliza apei („fierberea” apei în afara bateriei) şi la scurtarea vieţii bateriei.</p>

<p>Toate bateriile care conţin apă în electrolit produc hidrogen datorită electrolizei. Acest lucru este în special valabil în cazul bateriilor de plumb-acid, dar nu numai. Hidrogenul este un gaz extrem de inflamabil, în special în prezenţa oxigenului liber creat de acelaşi proces de electroliză, inodor şi incolor. Asemenea baterii reprezintă un real pericol de explozie chiar şi în condiţii normale de funcţionare, şi trebuie tratate cu mare grijă. Autorul a fost martorul exploziei unei baterii de plumb-acid. O singură scânteie creată de îndepărtarea unei surse de curent continuu pentru încărcarea unei baterii auto a dus la aprinderea hidrogenului din interiorul carcasei bateriei. Partea superioară a bateriei s-a desprins, împrăştiind acid sulfuric peste tot. Din fericire, personalul purta ochelari şi echipament de protecţie. În caz contrar, s-ar fi putut produce arsuri grave.</p>

<p>La conectarea şi deconectarea echipamentului de încărcare a unei baterii, asiguraţi-vă că ultima conexiune (sau prima întrerupere a circuitului) se realizează la o distanţă suficientă faţă de baterie, astfel încât, orice scânteie rezultată să nu conducă la aprinderea hidrogenului.</p>






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