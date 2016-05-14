<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Ampermetrul</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Ampermetrul</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Un aparat de măsură conceput special pentru măsurarea valorii curentului electric (în amperi), poartă numele de ampermetru.</p>

<p>La proiectarea ampermetrelor, rezistorii de multiplicare (rezistori de şunt în acest caz) se vor conecta în paralel şi nu în serie, precum era cazul voltmetrelor. Asta datorită faptului că dorim o divizare a curentului, nu a tensiunii, iar un divizor de curent se realizează prin rezistori conectaţi în serie.</p>

<p>Considerând aceiaşi deplasare precum în cazul voltmetrului, putem observa că un astfel de aparat este destul de limitat, deplasarea maximă realizându-se pentru un curent de doar 1 mA.</p>

<img src="../poze/00150.png" alt="aparat de măsură"/>

<p>Odată cu extinderea plajei de valori ale aparatului de măsură, trebuie să modificăm şi scala valorilor pentru a reflecta această modificare. De exemplu, pentru un ampermetru a cărei valoare maximă măsurată poate atinge 5 A, deplasarea indicatorului fiind aceiaşi, va trebui să modificăm marcajul astfel: 0 A în partea stângă şi 5 A în partea dreaptă, în loc de 0 mA şi 1 mA.</p>

<div class="clear"></div>

<img src="../poze/00162.png" alt="ampermetru; adăugarea unei rezistenţe de şunt"/>

<p>După ce ne-am hotărât ca vrem să extindem domeniul maxim la 5 A, vom trece la determinarea rezistenţei de şuntare. Aceasta va asigura o valoare maximă a curentului prin dispozitivul de detectare propriu-zis de maxim 1 mA şi nu de 5 A (în situaţia în care curentul printre cele două sonde nu depăşeşte nici el valoarea de 5 A).</p>

<div class="clear"></div>

<table class="floatleft">
	<tr>
		<th>Unitate</th>
        <th>Deplasare</th>
		<th>R<sub>şunt</sub></th>
		<th>Total</th>
        <th>Unitate</th>
	</tr>
	<tr>
		<td>E</td>
		<td></td>
		<td></td>
		<td></td>
		<td>V</td>
	</tr>
	<tr>
		<td>I</td>
		<td>1 m</td>
		<td></td>
		<td>5</td>
		<td>A</td>
	</tr>
	<tr>
		<td>R</td>
		<td>500</td>
		<td></td>
		<td></td>
		<td>Ω</td>
	</tr>
</table> 

<p>Putem introduce datele cunoscute într-un tabel, pentru uşurarea calculelor.</p>

<div class="clear"></div>

<table class="floatleft">
	<tr>
		<th>Unitate</th>
        <th>Deplasare</th>
		<th>R<sub>şunt</sub></th>
		<th>Total</th>
        <th>Unitate</th>
	</tr>
	<tr>
		<td>E</td>
		<td><b>0,5</b></td>
		<td></td>
		<td></td>
		<td>V</td>
	</tr>
	<tr>
		<td>I</td>
		<td>1 m</td>
		<td></td>
		<td>5</td>
		<td>A</td>
	</tr>
	<tr>
		<td>R</td>
		<td>500</td>
		<td></td>
		<td></td>
		<td>Ω</td>
	</tr>
</table> 

<p>Din valorile cunoscute, putem determina căderea de tensiune pe aparatul de măsură, aplicând legea lui Ohm (E = IR).</p>

<div class="clear"></div>

<table class="floatleft">
	<tr>
		<th>Unitate</th>
        <th>Deplasare</th>
		<th>R<sub>şunt</sub></th>
		<th>Total</th>
        <th>Unitate</th>
	</tr>
	<tr>
		<td>E</td>
		<td>0,5</td>
		<td><b>0,5</b></td>
		<td><b>0,5</b></td>
		<td>V</td>
	</tr>
	<tr>
		<td>I</td>
		<td>1 m</td>
		<td></td>
		<td>5</td>
		<td>A</td>
	</tr>
	<tr>
		<td>R</td>
		<td>500</td>
		<td></td>
		<td></td>
		<td>Ω</td>
	</tr>
</table> 

<p>Circuitul de faţă este un circuit paralel, prin urmare, căderile de tensiune pe şunt, pe sistemul de detectare a deplasarării, precum şi între cele două sonde ale aparatului de măsură, trebuie să fie egale.</p>

<div class="clear"></div>

<table class="floatleft">
	<tr>
		<th>Unitate</th>
        <th>Deplasare</th>
		<th>R<sub>şunt</sub></th>
		<th>Total</th>
        <th>Unitate</th>
	</tr>
	<tr>
		<td>E</td>
		<td>0,5</td>
		<td>0,5</td>
		<td>0,5</td>
		<td>V</td>
	</tr>
	<tr>
		<td>I</td>
		<td>1 m</td>
		<td><b>4,99</b></td>
		<td>5</td>
		<td>A</td>
	</tr>
	<tr>
		<td>R</td>
		<td>500</td>
		<td></td>
		<td></td>
		<td>Ω</td>
	</tr>
</table> 

<p>Ştim de asemenea ca prin şunt, curentul trebuie să fie egal cu diferenţa dintre curentul total (5 A) şi curentul deplasării (1 mA), datorită adunării curenţilor de ramuri în configuraţia parelel.</p>

<div class="clear"></div>

<table class="floatleft">
	<tr>
		<th>Unitate</th>
        <th>Deplasare</th>
		<th>R<sub>şunt</sub></th>
		<th>Total</th>
        <th>Unitate</th>
	</tr>
	<tr>
		<td>E</td>
		<td>0,5</td>
		<td>0,5</td>
		<td>0,5</td>
		<td>V</td>
	</tr>
	<tr>
		<td>I</td>
		<td>1 m</td>
		<td>4,99</td>
		<td>5</td>
		<td>A</td>
	</tr>
	<tr>
		<td>R</td>
		<td>500</td>
		<td><b>100,02 m</b></td>
		<td></td>
		<td>Ω</td>
	</tr>
</table> 

<p>Aplicând apoi legea lui Ohm (R = E / I), determinăm rezistenţa de şunt necesară.</p>

<div class="clear"></div>

<p>Desigur, în realitate, rezistenţa de şunt se regăşeste în interiorul aparatului de măsură.</p>

<img src="../poze/00163.png" alt="ampermetru; adăugarea rezistenţelor de şunt"/>

<p>La fel ca şi în cazul voltmetrelor, pot exista mai multe valori ale curenţilor de deplasare maximă. Acest lucru se realizează prin introducerea în circuit a unui număr suplimentar de rezistori de şunt. Selectarea lor se realizează printr-un comutator (selector) multi-polar.</p>

<div class="clear"></div>

<p>Observăm că rezistorii sunt conectaţi în paralel cu aparatul de măsură, şi nu în serie precum în cazul voltmetrului. Selectorul cu cinci poziţii realizează contact doar cu câte un rezistor pe rând. Marimea fiecărui rezistor este diferită şi conform cu deplasarea maximă a domeniului respectiv de valori, bazându-se pe caracteristicile sistemului de detectare al deplasării (1 mA, 500 Ω).</p>

<img src="../poze/00164.png" alt="ampermetru; determinarea rezistenţelor de şunt conectare în paralel"/>

<p>Valoarea fiecărui rezistor se determină prin aceiaşi metodă, luând în considerare curentul total, deplasarea maximă şi rezistenţa internă. Pentru un ampermetru cu un domeniu de valori maxim de 100 mA, 1 A, 10 A, respectiv 100A, rezistenţele de şunt sunt conform figurii alăturate.</p>

<div class="clear"></div>

<p>Aceste rezistenţe de şunt sunt extrem de mici! Pentru a atinge astfel de rezistenţe, rezistori de şunt ai ampermetrelor trebuie realizaţi de cele mai multe ori printr-o comandă specială din conductori cu diametru relativ mare sau din plăci metalice solide.</p>

<p>Trebuie să fim atenţi însă la puterea disipată în această situaţie. Faţă de voltmetru, curentul prin rezistorii unui ampermetru sunt destul de mari. Dacă acei rezistori nu sunt proiectaţi corespunzător, se pot încălzi şi distruge, sau, în cel mai „fericit” caz, îşi pot pierde acurateţea prin încălzire excesivă. Pentru exemplul precedent, puterea disipată pentru valoarea maximă a deplasării, în valori aproximative, este următoarea:</p>

<div class="formula">
P<sub>R1</sub> = E<sup>2</sup> / R<sub>1</sub> = (0,5 V)<sup>2</sup> / 5,00005 mΩ = 50 W 
P<sub>R2</sub> = E<sup>2</sup> / R<sub>2</sub> = (0,5 V)<sup>2</sup> / 50,005 mΩ = 5 W
P<sub>R3</sub> = E<sup>2</sup> / R<sub>3</sub> = (0,5 V)<sup>2</sup> / 500,5 mΩ = 0,5 W
P<sub>R4</sub> = E<sup>2</sup> / R<sub>4</sub> = (0,5 V)<sup>2</sup> / 5,05 mΩ = 49,5 mW
</div>

<p>Un rezistor de 1/8 W este suficient pentru R<sub>4</sub>, unul de 1/2 W pentru R<sub>3</sub> şi unul de 5 W pentru R<sub>2</sub>. Totuşi, rezistorii îşi menţin acurateţea pentru o perioadă mult mai îndelungată de timp dacă nu funcţionează foarte aproape de valoarea maximă admisă; prin urmare, o supra-dimensionare a rezistorilor R<sub>2</sub> şi R<sub>3</sub> ar fi binevenită. Dar, rezistorii de precizie cu o putere nominală de 50 W sunt extrem de rari şi de scumpi. Singura modalitate este realizarea la comandă a acestora.</p>

<h2>Măsurarea curentului cu un rezistor de şunt şi un voltmetru</h2>

<img src="../poze/00165.png" alt="utilizarea rezistenţelor de şunt în paralel cu un voltmetru pentru măsurarea curentului"/>

<p>În unele cazuri, rezistorii de şunt sunt utilizaţi în combinaţie cu voltmetre cu rezistenţa de intrare ridicată pentru măsurarea curenţilor. Curentul prin voltmetru va fi suficient de mic pentru a-l putea neglija, iar rezistenţa de şunt poate fi dimensionată în funcţie de numărul de volţi sau milivolţi produşi pentru fiecare amper de curent.</p>

<p>De exemplu, dacă rezistorul de şunt din figura de mai sus ar fi dimensionat la o valoare de exact 1 Ω, pentru fiecare creştere de un amper, căderea de tensiune la bornele acestuia va creşte cu un volt. Indicaţia voltmetrului va putea fi considerată ca fiind direct legată valoarea curentului prin şunt. Pentru valori foarte mici ale curentului, rezistenţa de şunt trebuie să fie mare pentru a putea genera tensiuni mai mari pentru fiecare unitate de curent, extinzând astfel gama valorilor măsurate cu voltmetrul spre mărimi foarte mici. Această metodă de măsurare este des întâlnită în aplicaţiile industriale. Desigur, în acest caz, scala voltmetrului poate fi modificată/înlocuită pentru a putea citi direct valorile curentului.</p>

<img src="../poze/00166.png" alt="introducerea unui ampermetru în circuit pentru măsurarea curentului"/>

<p>Utilizarea unui rezistor de şunt în combinaţie cu un voltmetru poate simplifca operaţiile de măsurare ale curenţilor, atunci când acestea sunt dese, În mod normal, atunci când măsurăm curentul dintr-un circuit cu ampermetrul, circuitul trebuie întrerupt (deschis), iar ampermetru conectate între cele două capete libere închizând astfel din nou circuitul.</p>

<div class="clear"></div>

<img src="../poze/00167.png" alt="introducerea unei rezistenţe de şunt în circuit pentru măsurarea curentului cu ajutorul unui voltmetru; util în cazul unui circuit asupra căruia sunt necesare măsurători dese ale valorii curentului"/>

<p>Dacă avem un circuit în care această operaţie trebuie realizată des, sau dacă dorim simplificarea procesului de măsură, putem plasa permanent un rezistor de şunt între cele două capete rămase libere după deschiderea circuitului. Curentul poate fi măsurat de acum încolo cu ajutorul unui voltmetru, fără a necesita întreruperea circuitului la fiecare măsurătoare.</p>

<div class="clear"></div>

<p>Desigur, dimensiunea şuntului trebuie să fie suficient de mică pentru a nu afecta funcţionarea normală a circuitului în care este introdus. Va exista o mică eroare de măsură datorită prezenţei şuntului, dar aceasta se încadrează în limite acceptabile.</p>

<img src="../poze/00163.png" alt="ampermetru; adăugarea rezistenţelor de şunt"/>

<div class="clear"></div>

<p class="sumar">Sumar:</p>
<ul>
	<li>Exitinderea domeniului de măsură a ampermetrului se realizează prin introducerea în paralel a rezistorilor de şunt, realizându-se astfel un divizor de curent</li>
	<li>Curentul poate fi măsurat şi cu ajutorul voltmetrului, atunci când în circuit este introdus un rezistor de şunt; căderea de tensiune pe şunt măsurată de voltmetru este în acest caz direct proporţională cu valoare acurentului prin şunt</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>