<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Teorema lui Thevenin</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>7. Teorema lui Thevenin</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Teorema lui Thevenin susţine că orice circuit liniar poate fi simplificat, indiferent de complexitatea sa, la un circuit echivalent cu doar o singură sursă de tensiune şi o rezistenţă legată în serie. Semnificaţia termenului „liniar” este aceeiaşi ca şi în cazul teoriei superpoziţiei, unde toate ecuaţiile folosite trebuie să fie liniare. Dacă avem de a face cu componente pasive (rezistori, bobine şi condensatori) această condiţie este îndeplinită. Dar, există unele componente, precum cele semiconductoare, ce sunt neliniare. Aceste circuite le vom numi prin urmare <i>neliniare</i></p>

<p>Teorema lui Thevenin este folosită în special pentru analiza sistemelor de putere şi alte circuite în care un rezistor din circuit (rezistorul de „sarcină”) este supus modificărilor; reclacularea circuitului este necesară cu fiecare valoare a rezistenţei de sarcină pentru determinarea tensiuni şi curentului prin el.</p>

<h3>Exemplu</h3>

<p>Să reluăm circuitul studiat până acum cu celelalte metode:</p>

<p><img src="../poze/00209.png" alt="circuit electric"/></p>

<p>Să presupunem că rezistorul R<sub>2</sub> este sarcina din acest circuit. Avem deja la dispoziţie patru metode pentru determinarea tensiunii şi curentului prin R<sub>2</sub>, dar niciuna dintre aceste metode nu este eficientă din punct de vedere al timpului de lucru. Imaginaţi-vă că aţi folosi aceste metode de fiecare dată când valoarea sarcinii (rezistenţei de sarcină) se schimbă (modificarea rezistenţei sarcinii este un lucru <i>foarte</i> des întâlnit în sistemele de putere). Această situaţie ar presupune <i>multă</i> muncă!</p>

<p>Teorema lui Thevenin înlătură temporar sarcina din circuitul iniţial transformând ceea ce rămâne într-un circuit echivalent compus dintr-o singură sursă de tensiune şi rezistenţe în serie. Rezistenţa de sarcină poate fi apoi re-conectată în acest „circuit Thevenin echivalent” şi se pot continua calculele pentru întreaga reţea ca şi cum nu ar fi decât un simplu circuit serie:</p>

<p><img src="../poze/00235.png" alt="circuit electric"/></p>

<p>După conversia circuitului vom avea:</p>

<p><img src="../poze/00236.png" alt="circuit electric"/></p>

<p>„Circuitul Thevenin echivalent” este echivalentul electric ale surselor şi rezistorilor B<sub>1</sub>, R<sub>1</sub>, R<sub>3</sub> şi B<sub>2</sub> văzute din cele două puncte de contact al rezistorului de sarcină R<sub>2</sub>. Acest circuit echivalent, dacă este dedus corect, se va comporta exact ca şi circuitul original. Cu alte cuvinte, curentul şi tensiunea sarcinii (R<sub>2</sub>) ar trebuie să fie exact aceeiaşi în ambele circuite. Rezistenţa R<sub>2</sub> nu potate face diferenţa dintre reţeaua originală şi circuitul echivelnt, atâta timp cât E<sub>Thevenin</sub> şi R<sub>Thevenin</sub> au fost calculate corect.</p>

<p>Avantajul transformării constă în uşurinţa calculelor pentru circuitul simplificat, mult mai uşoară decât în cazul circuitului original. Primul pas este înlăturarea rezistenţei de sarcină din circuitul original şi înlocuirea acestuia cu un circuit deschis:</p>

<p><img src="../poze/00237.png" alt="circuit electric"/></p>

<p>Apoi determinăm căderea de tensiune între punctele „fostei” sarcini, folind orice metode disponibile. În acest cazu, circuitul original, mai puţin sarcina, nu este altceva decât un circuit serie simplu cu două baterii; putem aplica prin urmare regulile circuitelor serie, legea lui ohm şi legea lui Kirchhoff pentru tensiune:</p>

<p><img src="../poze/10194.png" alt="tabel"/></p>
<p><img src="../poze/00238.png" alt="circuit electric"/></p>

<p>Căderea de tensiune între cele două puncte ale sarcinii poate fi dedusă din tensiunea bateriei şi căderea de tensiune pe una dintre baterii, fiind de 11.2 volţi. Aceasta este tensiunea Thevenin, E<sub>Thevenin</sub> din circuitul echivalent:</p>

<p><img src="../poze/00239.png" alt="circuit electric"/></p>

<p>Pentru aflarea rezistenţei serie din circuitul echivalent, trebuie să luăm circuitul original, mai puţin sarcina, să înlăturăm sursele de putere (la fel ca în cazul teoremei superpoziţiei) şi să determinăm rezistenţa de la un terminal la celălalt:</p>

<p><img src="../poze/00240.png" alt="circuit electric"/></p>

<p>După înlăturarea celor două baterii, rezistenţa totală măsurată în această locaţie este egală cu rezistenţele R<sub>1</sub> şi R<sub>3</sub> în paralel: 0.8 Ω. Aceasta reprezintă rezistenţa Thevenin (R<sub>Thevenin</sub>) pentru circuitul echivalent:</p>

<p><img src="../poze/00241.png" alt="circuit electric"/></p>

<p>Cunoscând valoarea rezistorului (2 Ω) dintre cele două puncte de conexiune, putem determina căderea de tensiune şi curentul prin acesta, ca şi cum întregul circuit nu ar fi altceva decât un simplu circuit serie:</p>

<p><img src="../poze/10195.png" alt="tabel"/></p>

<p>Putem oberva că valorile pentru curent şi tensiune (4 amperi, 8 volţi) sunt identice cu valorile găsite aplicând celelalte metode de analiză. De asemenea, valorile tensiunilior şi curenţilor pentru rezistenţa serie şi sursa Thevenin echivalente nu se aplică componentelor din circuitul original. Teorem lui Thevenin este folositoare doar pentru determinarea comportamentului unui <i>singur</i> rezistor din reţea: sarcina.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Teorema lui Theveinn este o modalitate de reducere a unei reţele la un circuit echivalent compus dinstr-o singură sursă de tensiune, o rezistenţă serie şi rezistenţa de sarcină</li>
</ul>
<b>Paşii pentru aplicarea teoremei lui Thevenin:</b>
<ol>
	<li>Găsirea sursei de tensiune Thevenin prin îndepărtarea sarcinii din circuitul original şi calcularea căderii de tensiune dintre punctele în care se afla sarcina iniţial</li>
	<li>Găsirea rezistenţei Thevenin prin îndepărtarea tuturor surselor de putere din circuitul original şi calcularea rezistenţei totale dintre cele două puncte</li>
	<li>Desenarea circuitului Thevenin echivalent, cu sursa de tensiune şi rezistenţa Thevenin în serie. Rezistorul de sarcină se re-introduce între cele două puncte (deschise) din circuit</li>
	<li>Aflarea căderii de tensiune şi a curentului prin rezistorul de sarcină folosind regulile circuitelor serie</li>
</ol>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>