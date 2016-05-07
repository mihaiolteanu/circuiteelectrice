<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Hărţi Karnaugh de patru variabile</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Hărţi Karnaugh de patru variabile</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>Folosindu-ne de codul Gray, putem construi hărţi Karnaugh mai mari. O hartă Karnaugh cu patru variabile arată precum cea de mai jos:</p>

<img src="../poze/14116.png" alt="hartă Karnaugh cu patru variabile"/>

<p>Exemplele de mai jos ilustrează simplificarea expresiilor booleene ce sunt prea greu de realizat prin intermediul regulilor de simplificare booleană. Aceste expresii pot fi simplificate cu algebra booleană. Totuşi, utilizarea hărţilor Karnaugh este un procedeu mult mai rapid si mai uşor, mai ales dacă există multe simplificări logice de realizat.</p>

<h2>Exemple de simplificare logică cu hărţi Karnaugh de patru variabile</h2>

<img src="../poze/14117.png" alt="simplificarea expresiilor booleene folosind hărţi Karnaugh de patru variabile"/>

<p>Expresia booleană de mai sus conţine 7 produse. Aceşti termeni sunt grupaţi de sus în jos şi de la stânga la dreapta pe harta Karnaugh de mai sus. De exemplu, primul termen, A'B'CD, se regăseşte pe rândul 1, căsuţa a 3-a, şi corespunde locaţiei A = 0, B = 0, C = 1, D = 1. Ceilalţi termeni sunt poziţionaţi într-o manieră similară. Grupul orizontal (albastru) corespunde termenului AB, iar grupul vertical (roşu) corespunde expresiei booleene CD. Din moment ce avem două grupuri, rezultatul trebuie să fie o sumă de două produse, prin urmare, AB + CD.</p>

<img src="../poze/14118.png" alt="simplificarea expresiilor booleene folosind hărţi Karnaugh de patru variabile"/>

<p>În cazul de mai sus, „împăturim” cele patru colţuri ale hărţii Karnaugh, precum un şerveţel, pentru a observa mai bine adiacenţa celor patru regiuni. B = 0 şi D = 0 pentru toate regiunile. Celelalte variabile, A şi B, sunt 0 în unele cazuri şi 1 în altele. Prin urmare, aceste variabile nu se vor regăsi în rezultatul final al expresiei simplificate.</p>

<img src="../poze/14119.png" alt="simplificarea expresiilor booleene folosind hărţi Karnaugh de patru variabile"/>

<p>Pentru o vizualizare mai bună, ne putem imagina că îndoim marginile de jos şi de sus a hărţii sub forma unui cilindru. În acest caz, ambele grupuri sunt adiacente şi formează practic un singur grup. Acest lucru ne spune că rezultatul este un singur termen. Singura variabilă comună a acestui grup de 8 variabile este B = 0. Rezultatul simplificării este prin urmare B'.</p>

<img src="../poze/14120.png" alt="simplificarea expresiilor booleene folosind hărţi Karnaugh de patru variabile"/>

<p>Expresia booleană de mai sus conţine 9 termeni de produse, dintre care trei au doar trei variabile booleene în loc de patru. Diferenţa constă în faptul că, deşi termenii ce conţin patru variabile booleene acoperă o singură regiune, termenii cu trei variabile booleene acoperă o pereche de regiuni fiecare.</p>

<p>Trecând la simplificare, formăm două grupuri de câte opt termeni. Regiunle ce se regăsesc în colţ sunt comune ambelor grupuri. Acest lucru este corect. De fapt, această strategie conduce la o soluţie mai bună decât dacă am fi format un grup de opt şi un grup de patru regiuni, fără nicio regiune comună celor două. Soluţia finală este B' + D'.</p>

<img src="../poze/14121.png" alt="simplificarea expresiilor booleene folosind hărţi Karnaugh de patru variabile"/>

<p>În exemplul de mai sus, trei regiuni formează două grupuri de câte două. O a patra regiune nu poate fi combinată cu nicio altă regiune, ceea ce se întâmplă frecvenţe în situaţiile reale. În acest caz, termenul ABCD rămâne neschimbat în cadrul procesului de simplificare a expresiei booleene iniţiale. Rezultatul este B'C'D' + A'B'D' + ABCD.</p>

<p>Adeseori, există mai mult de o singură soluţie cu cost minim pentru expresia nesimplificată. Un astfel de caz este cel de mai jos:</p>

<img src="../poze/14122.png" alt="simplificarea expresiilor booleene folosind hărţi Karnaugh de patru variabile"/>

<p>Ambele rezultate de mai sus conţin patru termeni, cu trei variabile booleene fiecare. Ambele soluţii sunt valide din punct de vedere al minimizării costurilor. Diferenţa dintre cele două soluţii finale constă în modul de grupare al regiunilor. Reamintim faptul că o soluţie cu cost minim este acea soluţie ce permite o implementare fizică a circuitului logic cu un număr cât mai mic de porţi logice şi număr de intrări.</p>

<img src="../poze/14123.png" alt="simplificarea expresiilor booleene folosind hărţi Karnaugh de patru variabile"/>

<p>În următorul exemplu, cel de mai sus, după ce trecem toate valorile de 1 pe hartă Karnaugh, realizăm primul pas al simplificării, şi anume, gruparea primelor patru regiuni (stânga). În acest punct, s-ar putea să nu fie foarte evident cum am putea grupa regiunile rămase.</p>

<p>La pasul al doilea (centru), grupăm încă patru regiuni. Mai rămân în acest moment încă două regiuni negrupate. Soluţia cu cost minim este să grupă aceste două regiuni, ca şi grupuri de patru, conform figurii din dreapta.</p>

<p>Atenţie, nu încercaţi să realizaţi grupuri de câte trei. Grupările trebuie să fie sub forma puterilor lui 2, şi anume, 1, 2, 4, 8, etc.</p>

<img src="../poze/14124.png" alt="simplificarea expresiilor booleene folosind hărţi Karnaugh de patru variabile"/>

<p>Avem din nou mai sus un exemplu ce suportă două soluţi cu cost minim. Formăm iniţial cele două grupuri de câte patru regiuni (roşu şi albastru). Soluţia finală depinde de modul în care grupăm regiunea rămasă liberă. Dacă o introducem în grupul din stânga (roşu), soluţia este ABC'. Dacă o întroducem în grupul din dreapta (albastru), soluţia este ABD. Indiferent de alegerea făcută, ambele soluţii sunt corecte din punct de vedere al minimizării costurilor de implementare.</p>

<img src="../poze/14125.png" alt="simplificarea expresiilor booleene folosind hărţi Karnaugh de patru variabile"/>

<p>Mai sus este un exemplu de simplificare cu hărţi Karnaugh (stânga) precum şi cu regulile algebrei booleene (dreapta). C' (C = 0) reprezintă aria formată de cele opt regiuni din stânga. Regiunea rămasă negrupată este echivalentă cu expresia ABCD. Grupând această regiune cu cea din stânga ei, simplifă termenul ABCD la ABD. Rezultatul final este prin urmare C' + ABD.</p>

<p>Cazul de mai sus este un exemplu rar a unei probleme cu patru variabile ce poate fi redusă destul de uşor şi cu algebra booleană. Asta în cazul în care vă amintiţi teoremele de simplificare booleană.</p>



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