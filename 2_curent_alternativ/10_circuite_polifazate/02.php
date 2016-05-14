<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Sisteme de alimentare trifazate</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Sisteme de alimentare trifazate</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Folosind modul „straniu” de însumare a vectorilor şi a numerelor complexe atunci când tensiunile alternative sunt defazate între ele, putem construi sisteme de putere cu o eficienţă crescută şi risc scăzut de electrocutare.</p>

<p>Să presupunem că avem două surse de curent continuu conectate în serie, la fel ca în secţiunea precedentă, cu diferenţa că fiecare sursă este defazată cu 120<sup>o</sup> faţă de cealaltă</p>

#+CAPTION: sistem de alimentare folosind două surse de tensiune de 120 V defazate între ele cu un unghi de 120 de grade
[[../poze/02171.png]]

<p>Din moment ce fiecare sursă de tensiune are 120 V, şi fiecare rezistor este conectat direct în paralel cu sursa respectivă, căderea de tensiune pe fiecare sarcină <i>trebuie</i> să fie de asemenea de 120 V. Curenţii prin sarcină fiind 83.33 A, aceastea vor disipa tot 10 kW de putere. Totuşi, tensiunea dintre cele două faze nu mai este 240 V ca în cazul precedent, deoarece diferenţa de fază între cele două tensiuni este 120<sup>o</sup>, nu 180<sup>o</sup> (sau 0<sup>o</sup>).</p>

#+CAPTION: calcule matematice
[[../poze/12113.png]]

<p>Putem spune că tensiunea nominală dintre cele două fază este de 208 V, iar notaţia sistemului este 120/208.</p>

<p>Dacă acum calculăm şi curentul prin neutru, folosind legea lui Kirchhoff pentru curent, vom vedea că acesta <i>nu</i> este zero, chiar şi în cazul sarcinilor echilibrate (egale între ele).</p>

#+CAPTION: sistem de alimentare folosind două surse de tensiune de 120 V defazate între ele cu un unghi de 120 de grade; calcului curentului prin neutru
[[../poze/02172.png]]

#+CAPTION: calcule matematice
[[../poze/12114.png]]

<p>Prin urmare, firul neutru conduce acelaşi curent de 83.33 A, ca şi celelalte fire.</p>

<p>Şi în acest caz, puterea totală furnizată în sistem este de 20 kW, iar fiecare fază conduce tot 83.33 A, prin urmare n-am reuşit o reducere a costurilor prin utilizarea unor conductori cu diametru mai mic. Totuşi, siguranţa sistemului este mai mare în acest caz, doarece căderea de tensiune între cele două faze este mai mică cu 32 V faţă de cazul precedent (208 V în loc de 240  V).</p>

<p>Putem profita de faptul că neutrul conduce un curent de 83.33 A: din moment ce orcum conduce curent, de ce să nu folosim acest al treilea fir pe post de fază, conectând o altă sarcină în serie cu o sursă de 120 V, defazată cu 240<sup>o</sup> faţă de tensiunea de referinţă? În acest fel, putem transmite mai multă putere (10 kW în plus), fără a fi nevoie de adăugarea unor conductori în plus.</p>

#+CAPTION: sistem de alimentare folosind trei surse de tensiune de 120 V defazate între ele cu un unghi de 120 de grade; folosirea neutrului pe post de fază
[[../poze/02173.png]]

<p>O analiză matematică completă a tuturor curenţilor şi tensiunilor din circuit ar necesita utilizarea unei teoreme de reţea, cea mai uşoară fiind teorema superpoziţiei. Căderea de tensiune pe fiecare sarcină este de 120 V, iar căderea de tensiune între oricare două fază este de aproximativ 208 V. Curenţii pron conductori sunt egali între ei, şi anume 83.33 A. La aceaste valori, fiecare sarcină va disipa o putere de 10 kW. Putem observa că acest circuit nu are un conductor neutru pentru asigurarea unei tensiuni stabile în cazul în care unul dintre ei este deconectat (sistem dezechilibrat), situaţia fiind similară cu cea întâlnită în secţiunea precedentă. </p>

#+CAPTION: sistem de alimentare trifazat; adăugarea conductorului neutru
[[../poze/02175.png]]

<p>Atâta timp cât sistemul este echilibrat (rezistenţe egale, curenţi egali), conductorul neutru nu va conduce niciun curent. Acesta este folosit însă pentru cazurile în care una dintre sarcini este înlăturată din circuit (defect, oprire, etc.).</p>

<p>Acest circuit analizat mai sus, folosind trei surse de alimentare, poartă numele de <i>circuit polifazat</i>, mai exact, este un <i>circuit trifazat</i> (trei surse de alimentare), folosit în sistemele de distribuţie a energiei electrice.</p>

<h3>Avantajele unui sistem de alimentare trifazat</h3>

<p>Să analizăm unele dintre avantajele unui asfel de circuit trifazat faţă de un circuit monofazat de putere echivalentă. Un sistem monofazat (o singură sursă de alimentare, sau mai multe surse, dar în fază) cu trei sarcini conectate în paralel ar produce un curent total foarte mare (3 * 83.33 A, sau 250 A).</p>

#+CAPTION: sistem de alimentare monofazat cu trei sarcini conectate în paralel
[[../poze/02176.png]]

<p>Acest lucru ar necesita conductori cu secţiune foarte mare, cu o greutate de aproximativ optzeci de kilograme la o sută de metri. Dacă distanţa dintre sursă şi sarcină ar depăşi cu puţin un kilometru, am avea nevoie de aproximativ o tonă de cupru pentru realizarea acestui circuit!</p>

<p>Folosind în schimb un sistem trifazat, costurile cu conductorii se reduc considerabil, şi în plus, creşte şi siguranţa la electrocutare a sistemului (208 V faţă de 240 V).</p>

<p>Mai rămână însă o singură întrebare: cum putem obţine trei surse de curent alternativ defazate cu exact 120<sup>o</sup> între ele? Evident, nu putem folosi transformatoare cu prize pe înfăşurarea secudnară, pentru că am obţine forme de undă ale tensiunii fie în fază, fie defazate cu 180<sup>o</sup> între ele. Am putea folosi condensatoare şi bobine pentru a crea un defazaj de 120<sup>o</sup>, dar atunci, aceste defazaje ar depinde şi de unghiurle de fază ale sarcinilor, în cazul în care în loc de sarcină rezistivă avem o sarcină capacitivă sau inductivă.</p>

<p>Cea mai bună metodă de obţinere a defazajelor dorite este chiar generarea lor directă, folosind generatoare de curent alternativ construite pentru exact acest scop: câmpul magnetic rotitor trece pe lângă trei seturi de înfăşurări, fiecare la o distanţă de 120<sup>o</sup> una faţă de cealaltă în jurul circumferinţei generatorului.</p>

#+CAPTION: principiul de proiectare al generatoarelor monofazate şi trifazate
[[../poze/02178.png]]

<p>Împreună, cele şase înfăşurări ale generatorului trifazat sunt conectate asfel încât să formeze trei perechi de înfăşurări (1a cu 1b, 2a cu 2b, 3a cu 3b), fiecare pereche producând o tensiune alternativă defazată cu 120<sup>o</sup> faţă de oricare dintre celelalte două perechi/tensiuni. Conexiunile fizice existente pentru fiecare pereche de înfăşurări au fost omise pentru simplitate. Acestea se pot vedea însă în cazul generatorului monofazat.</p>

<p>În circuitul considerat, cele trei surse de alimentare au fost conectate în configuraţie stea, sau „Y”, fiecare sursă având o parte conectată la punctul comun (conductorul neutru). Descrierea unei asfel de circuit se face asfel:</p>

#+CAPTION: sistem de alimentare trifazat în configuraţie stea (Y); schema de reprezentare
[[../poze/02179.png]]

<p>Aceasta însă nu este singura schma de conectare posibilă.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Un sistem de alimentare monofazat constă dintr-o singură sursă alimentare (un singur tip de formă de undă)</li>
	<li>Un sistem de alimentare polifazat utilozează mai multe surse de tensiune defazate între ele (mai multe forme de undă existente). Un sistem polifazat poate transmite o putere electrică mai mare folosind conductor de secţiuni mai mici</li>
	<li>Defazajul tensiunilor necesar pentru utilizarea unui sistem polifazat este creat cu ajutorul generatoarelor polifazate ce utilizează seturi multiple de înfăşurări</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
