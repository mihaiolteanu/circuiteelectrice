<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Notaţia ştiinţifică</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Notaţia ştiinţifică</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Scop</h2>

<p>În multe discipline ştiinţifice şi inginereşti, trebuie să lucrăm adesea cu valori foarte mari sau foarte mici. Unele dintre aceste cantităţi sunt foarte greu de reprezentat, fiind extrem de mari sau extrem de mici. Să luăm ca şi exemplu masa protonului, una dintre particulele nucleului atomului:</p>

<div class="formula">
masa protonului = 0,00000000000000000000000167 grame
</div>

<p>Sau, numărul de electronic ce trec printr-un punct al unui circuit în fiecare secundă, sub influenţa unui curent de 1 Amper:</p>

<div class="formula">
1 Amper = 6.250.000.000.000.000.000 electroni pe secundă
</div>

<p>În ambele cazuri, avem de a face cu mulţi de zero. Evident, este destul de incomod să lucrăm cu atât de multe cifre, chiar şi cu ajutorul calculatoarelor.</p>

<h2>Cifre semnificative</h2>

<p>În cazul celor două numere de mai sus, putem observa că există relativ puţine cifre diferite de zero în componenţa acestora. În cazul masei protonului, avem doar „167” precedat de 23 de zero înainte de virgula (decimală). Pentru numărul de electroni pe secundă într-un Amper, avem „625” urmat de 16 zerouri. Numim aceste cifre diferite de zero (de la prima la ultima), plus oricare zerouri ce se află între aceste limite, „cifrele semnificative” ale oricărui număr.</p>

<p>Cifrele semnificative rezultate în urma unei măsurători reale indică de obicei acurateţea acelei măsurători. De exemplu, dacă spunem că o maşină cântăreşte 1.000 kg, probabil că nu dorim să fim foarte exacţi referitor la greutatea acesteia, ci am făcut o rotunjire aproximativă şi comodă. Această valoare conţine doar o cifră semnificativă, şi anume, „1”-ul din faţa, zerourile fiind folosite în acest caz doar pentru a indica un multiplu al primei cifre, şi nu „posedă” nicio valoare. Touşi, dacă am spune că maşina cântăreşte 1.005 kg, atunci valoarea ar avea 4 cifre semnificative, şi anume „1.005”, iar în acest caz, zerourile sunt parte componentă a mărimii măsurate.</p>

<p>În aceeiaşi ordine de idei, numerele cu mai mulţi de zero nu sunt neapărat reprezentative pentru o anumita cantitate reală până la punctul decimal. În acest caz, un asemenea număr poate fi scris printr-o prescurtarea matematică pentru a fi mai uşor de citit. Prescurtarea poartă denumirea de <strong>notaţia ştiinţifică</strong>.</p>

<h3>Numere mari folosind notaţia ştiinţifică</h3>

<p>Folosind notaţia ştiinţifică, un număr poate fi scris prin intermediul cifrelor semnificative ca şi o valoare între 1 şi 10 (sau -1 şi -10 pentru numerele negative), iar zerourile sunt reprezentate ca şi puteri ale lui 10. De exemplu:</p>

<div class="formula">
1 Amper = 6.250.000.000.000.000.000 electroni pe secundă
poate fi scris sub forma
1 Amper = 6,25 x 10<sup>18</sup> electroni pe secundă
</div>

<p>10 la puterea 18 (10<sup>18</sup>) înseamnă 10 înmulţit cu el însuşi de 18 ori, sau, un 1 urmat de 18 zerouri. Înmulţit cu 6,25, rezultă „625” urmat de 16 zerouri (luăm 6,25 şi mutăm virgula cu 18 locuri spre dreapta). Avantajele notaţiei ştiinţifice sunt evidente: numărul nu mai este atât de „imposibil” de scris iar cifrele semnificative sunt foare uşor de identificat.</p>

<h3>Numere mici folosind notaţia ştiinţifică</h3>

<p>Ce putem face însă în cazul numerelor foarte mici, precum masa protonului în grame? Putem folosi şi în acest caz notaţia ştiinţifică, doar că puterile lui 10 vor fi negative în acest caz, şi nu pozitive, ceea ce se traduce printr-o deplasare a virgulei decimale înspre stânga şi nu înspre dreapta, precum în cazul precedent.</p>

<div class="formula">
masa protonului = 0,00000000000000000000000167 grame
poate fi scrisă sub forma
masa protonului = 1,67 x 10<sup>-24</sup> grame
</div>

<p>10 ridicat la puterea -24 (10<sup>-24</sup>) înseamnă inversa (1 / x) lui 10 înmulţit cu el însuşi de 24 de ori, sau, un 1 precedat de o virgulă decimală şi de 23 de zerouri. Înmulţit cu 1,67, rezultatul este „167” precedat de virgula decimală şi 23 de zerouri. La fel ca şi în cazul numerelor foarte mari, este mult mai uşor pentru o persoană să utilizeze notaţia prescurtată. Şi în acest caz, cifrele semnificative sunt exprimate clar.</p>

<p>Revenind la exemplul precedent, putem exprima valoarea de 1.000 kg cu ajutorul notaţiei ştiinţifice, astfel:

<div class="formula">
greutatea = 3 x 10<sup>3</sup> kg
</div>

<p>În cazul în care maşina ar cântări 1.005 kg, notaţia ştiinţifica ar fi următoarea:</p>

<div class="formula">
greutatea = 3,005 x 10<sup>3</sup> kg
</div>
</p>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>