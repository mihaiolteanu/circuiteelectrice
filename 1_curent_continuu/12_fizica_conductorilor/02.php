<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Mărimea şi amperajul conductorilor</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Mărimea şi amperajul conductorilor</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Diametrul conductorilor si deplasarea electronilor</h2>

<p>Ar trebui să ne putem da seama de faptul că lichidele ce curg prin conducte cu diametru mare trec mai uşor decât lichidele ce curg prin conducte de diametru mic (ca şi exemplu practic, încercaţi să beţi un lichid folosind paie de diametre diferie). Acelaşi principiu general se aplică şi în cazul deplasării electronilor prin conductori: cu cât secţiunea transversală (grosimea) a conductorului este mai mare, cu atât există mai mult loc pentru deplasarea electronilor; acest lucru se traduce printr-o rezistenţă mai mică.</p>

<h2>Tipuri de conductoare</h2>

<p>Conductoarele electrice sunt de obicei rotunde, deşi există câteva excepţii de la această regulă, şi confecţionează în două variante de bază: solid şi răsucit. Conductoarele de cupru solide sunt exact asta: un singur fir de cupru pe toată lungimea cablului. Cele răsucite sunt format din mai multe fire solide de cupru răsucite împreună pentru a forma un singur conductor mai mare. Cel mai mare avantaj al cablurilor răsucite constă în flexibilitatea lor mecanică, fiind capabile să suporte îndoituri şi răsuciri repetate mult mai bine decât un singur fir de cupru; acesta din urmă tinde să „îmbătrânească” şi să se deterioreze (rupă) cu timpul.</p>

<h2>Mărimea conductorilor - aria secţiunii transversale</h2>

<p>Mărimea firelor poate fi măsurată în mai multe moduri. Am putea vorbi despre diametru firului, dar, din moment ce elementul cel mai important legat de deplasarea electronilor este de fapt aria secţiunii transversale, cel mai corect este să desemnăm mărimea unui fir prin intermediul acestei arii.</p>

<p><img src="../poze/00278.png" alt="secţiunea transversală printr-un conductor şi aria acesteia"/></p>

<p>Desigur, secţiunea transversală a firului de sus nu este reprezentată la scară. Diametrul firului este de 1,13 mm. Calculând aria secţiunii transversale cu formula de mai jos, obţinem rezultatul de 1 mm<sup>2</sup>:</p>

<div class="formula">
A = &pi;r<sup>2</sup>
A = 3,14 (1,13 / 2)<sup>2</sup>
A = 1 mm<sup>2</sup>
</div>

<h2>Bare metalice conductoare</h2>

<p>Pentru anumite aplicaţii ce utilizează curenţi mari, dimensiunea maximă practică a firelor circulare nu este suficientă. În aceste situaţii se folosesc bare metalice pe post de conductori. Acestea sunt realizate în general din cupru sau aluminiu, şi de cele mai multe ori nu sunt izolate. Cea mai întâlnită forma este cea rectangulară, dar nu este singura.</p>

<h2>Amperajul conductorilor</h2>

<p>Cu cât aria secţiunii transversale a conductorului este mai mică, cu atât este mai mică rezistenţa conductorului pentru a ceeiaşi lungime a sa, toţi ceilalţi factori ramânând constanţi. Un conductor cu o rezistenţă mai mare va disipa o cantitate mai mare de energie sub formă de căldura, oricare ar fi valoarea curentului, puterea fiind egală cu P = I<sup>2</sup>R.</p>

<p>Puterea disipată într-o rezistenţă se manifestă sub formă de căldură, iar căldura excesivă poate distruge conductorul, cât şi obiectele din jurul acestuia, şi în special materialul izolant din jurul acestuia ce se poate topi şi chiar arde. Conductorii mai subţiri, prin urmare, vor tolera un curent de o valoare mai mică decât conductorii groşi, toţi ceilalţi factori rămânând constanţi. <strong>Curentul maxim pe care un conductor îl poate susţine, fără a duce la distrugerea acestuia</strong>, poartă numele de amperaj.</p>

<p>Tabelele tipice pentru amperajul cablurilor descriu curenţii maximi pentru diferite valori şi aplicaţii ale acestora. Deşi punctul de topire al cuprului impune o limită amperajului conductorului, meterialele folosite de obicei la izolarea acestora posedă puncte de topire mult sub această temperatură; prin urmare, limitările amperajului iau practic în calcul limitele termice ale izolaţiei. Căderea de tensiune datorată rezistenţei excesive a conductorului este de asemenea un factor în alegerea tipului de conductori dintr-un circuit, dar această valoare se calculează prin metode specifice.</p>

<div id="legaturi">
<ol>
<li><a href="http://www.cabluri.net/cabluri-caracteristici-rezistenta-amperaje.html">Cabluri electrice - caracteristici</a> (link extern, cabluri.net)</li>
</ol>
</div>

<p class="sumar">Sumar:</p>
<ul>
	<li>Deplasarea electronilor se realizează mai uşor prin conductori cu diametru mare decât prin conductori cu diametru mic, datorită ariei secţiunii transversale prin care trebuie să treacă</li>
	<li><strong>Amperajul</strong> unui conductor reprezintă curentul maxim pe care un conductor îl poate susţine, fără a duce la distrugerea acestuia</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>