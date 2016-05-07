<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Aritmetica notaţiei ştiinţifice</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Aritmetica notaţiei ştiinţifice</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Înmulţirea numerelor sub forma notaţiei ştiinţifice</h2>

<p>Beneficiile notaţiei ştiinţifice nu se opresc doar la uşurinţa scrierii numerelor. O asemenea notaţie este uşor de folosit în cazul înmulţirii şi împărţirii numerelor. Să presupunem, de exemplu, că vrem să aflăm numărul de electroni ce trec printr-un anumit punct al unui circuit ce transportă un curent de 1 A într-o perioadă de 25 de secunde. Dacă ştim numărul de electroni pe secundă din circuit (ceea ce cunoaştem), tot ceea ce trebuie să facem este să înmulţim acea cantitate cu numărul de secunde (25) pentru aflarea răspunsului:</p>

<div class="formula">
(6.250.000.000.000.000.000 electroni pe secundă) x (25 secunde) =
156.250.000.000.000.000.000 electroni în 25 de secunde
</div>

<p>Utilizând notaţia ştiinţifică putem reformula problem astfel:</p>

<div class="formula">
(6,25 x 10<sup>18</sup> electroni pe secundă) x (25 secunde)
</div>

<p>Dacă luăm „6,25” şi îl înmulţim cu 25, obţinem 156,25. Prin urmare, răspunsul poate fi scris astfel:</p>

<div class="formula">
156,25 x 10<sup>18</sup> electroni
</div>

<p>Totuşi, dacă dorim să menţinem convenţia standard a notaţiei ştiinţifice, trebuie să reprezentăm cifrele semnificative ca şi numere între 1 şi 10. În cazul de faţă, „1,5625” înmulţit cu o anumită putere a lui 10. Pentru a obţine 1,5625 din 156,25, trebuie să trecem virgula decimală cu două locuri în stânga. Acest lucru se realizează astfel:</p>

<div class="formula">
156,25 = 1,5625 x 10<sup>2</sup>
</div>

<p>Adică, mutăm virgula decimală cu două poziţii în stânga, dar în acelaşi timp înmulţim numărul nou format cu 10 la puterea 2 (numărul de poziţii). Rezultatul final arată acum astfel (înmulţim numărul de mai sus cu 10<sup>18</sup>):</p>

<div class="formula">
1,5625 x 10<sup>20</sup>
deoarece,
10<sup>a</sup> x 10<sup>b</sup> = 10<sup>a + b</sup>
</div>

<p>Dacă am dori în schimb să aflăm numărul de electroni ce trec într-un interval de o oră (3.600 secunde)? În acest caz, putem trece şi timpul sub forma notaţiei ştiinţifice:</p>

<div class="formula">
6,25 x 10<sup>18</sup> x 3,6 x 10<sup>3</sup>
</div>

<p>Pentru realizarea acestui produs (înmulţire), înmulţim cele două cifre semnificative între ele (6,25 şi 3,6), precum şi cele două puteri ale lui zece între ele, astfel:</p>

<div class="formula">
6,25 x 3,6 = 22,5 
10<sup>18</sup> x 10<sup>3</sup> = 10<sup>21</sup>
</div>

<p>Ceea ce înseamnă:</p>

<div class="formula">
22,5 x 10<sup>21</sup> electroni
sau
2,25 x 10<sup>22</sup> electroni
</div>

<h2>Împărţirea numerelor sub forma notaţiei ştiinţifice</h2>

<p>Pentru ilustrarea operaţiei de împărţire cu numere sub forma notaţiei ştiinţifice, putem să luăm exemplul de mai sus invers, şi anume, să aflăm cât timp le-ar trebui acelui număr de electroni (2,25 x 10<sup>22</sup>) să treacă prin circuit, în cazul unui curent de 1 A:</p>

<div class="formula">
(2,25 x 10<sup>22</sup> electroni) / (6,25 x 10<sup>18</sup> electroni pe secundă)
</div>

<p>La fel ca şi în cazul înmulţirii, putem realiza calculele separat pentru cifrele semnificative şi pentru puterile lui zece:</p>

<div class="formula">
(2,25 / 6,25) x (10<sup>22</sup> / 10<sup>18</sup>)
0,36 x 10<sup>4</sup> sau 3,6 x 10<sup>3</sup> secunde
deoarece,
10<sup>a</sup> / 10<sup>b</sup> = 10<sup>a - b</sup>
</div>

<p>Putem vedea că am ajuns la aceeiaşi valoarea, 3600 secunde (3,6 x 10<sup>3</sup>).</p>


</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>