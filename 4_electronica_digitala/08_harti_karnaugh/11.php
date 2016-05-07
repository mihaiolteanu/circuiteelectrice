<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Hărţi Karnaugh de 5 şi 6 variabile</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>11. Hărţi Karnaugh de 5 şi 6 variabile</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>Pentru reducerea circuitelor logice mai mari se folosesc, evident, hărţi Karnaugh mai mare. Dar care este mărimea maximă (practică) a unei hărţi Karnaugh? Acest lucru depinde de numărul de intrări a circuitului logic considerat. Practic, se poate constata că această limită este de 6 intrări. Prezentăm mai jos aşadar hărţile Karnaugh de 5 şi 6 variabile.</p>

<h2>Harta Karnaugh de 5 variabile</h2>

<p>Prima variantă a hărţii Karnaugh de 5 variabile este modelul în oglindă. Desigur, numerotarea se realizează în cod Gray (partea de sus). Acesta se reflectă aproximativ la mijlocul hărţii. Acest stil este folosit de textele mai vechi:</p>

<img src="../poze/14150.png" width="372" height="216" alt="hartă Karnaugh de 5 variabile (stil vechi, în oglindă)"/>

<p>Varianta preferată, cea cu suprapunere, este prezentată mai jos:</p>

<img src="../poze/14151.png" width="373" height="216" alt="hartă Karnaugh de 5 variabile (stil nou, cu suprapunere)"/>

<p>Această variantă constă pur şi simplu din două (patru pentru o hartă Karnaugh de 6 variabile) hărţi identice, cu excepţia bitului cel mai semnificativ din adresa de 3 biţi din partea superioară. Dacă ne uităm în partea de sus a hărţii, observăm că numerotaţia este diferită faţa de harta precedentă (în cod Gray). Dacă ignorăm bitul cel mai semnificativ, precum am spus mai sus, secvenţa 00, 01, 11, 10 se regăseşte în partea superioară a ambelor sub-hărţi. Secvenţa formată din cele opt numere de 3 biţi nu este cod Gray. </p>

<h3>Harta Karnaugh cu 5 variabile - exemplu</h3>

<p>Să proiectăm un circuit cu 5 intrări binare (A, B, C, D, E), A fiind bit-ul cel mai semnificativ. Circuitul va trebui să producă o ieşire „înaltă” pentru orice număr prim detectat la intrare:</p>

<p>Prezentăm mai jos o soluţie sub forma hărţii Karnaugh de 5 variabile în oglindă, folosind cod Gray:</p>

<img src="../poze/14152.png" width="373" height="299" alt="hartă Karnaugh de 5 variabile (stil vechi, în oglindă)"/>

<p>Numerele prime sunt (1,2,3,5,7,11,13,17,19,23,29,31). Introducem o valoare de 1 în fiecare regiune corespunzătoare. Trecem apoi la gruparea regiunilor şi scrierea rezultatului simplificat. Observaţi că grupul de patru regiuni A'B'E conţine două perechi de câte două regiuni aflate de fiecare parte a liniei de reflexie. Acelaşi lucru este valabil şi pentru grupul format din două regiuni AB'DE. Aceste grupuri se formează prin reflexie. Atunci când folosim acest stil de hartă Karnaugh, va trebui să căutăm astfel de grupuri reflectate. Expresia booleană simplificată mai sus este următoarea:</p>

<div class="formula">
ieşire = A'B'E + B'C'E + A'C'DE + A'CD'E + ABCE + AB'DE + A'B'C'D 
</div>

<p>Să considerăm şi varianta hărţii Karnaugh cu 5 variabile, cu suprapunere:</p>

<img src="../poze/14153.png" width="372" height="295" alt="hartă Karnaugh de 5 variabile (stil nou, cu suprapunere)"/>

<p>Dacă facem o coparaţie între cele două variante de sus, anumite regiuni din partea dreaptă a hărţii îşi modifică locatie, din moment ce adresele din partea de sus a hărţii s-au modificat. Trebuie de asemenea să găsim o altă modalitate de grupare a termenilor din cele două jumătăţii ale hărţii. Soluţia constă în suprapunerea (imaginară) a celor două jumătăţi. Orice suprapunere a hărţii de deasupra cu harta de dedesupt prezintă o posibilă grupare. Figura de mai jos indică faptul că grupul AB'DE este compus din două regiuni suprapuse. Grupul A'B'E este format din două perechi de regiuni suprapuse:</p>

<img src="../poze/14154.png" width="373" height="427" alt="hartă Karnaugh de 5 variabile (stil nou, cu suprapunere)"/>

<p>Pentru grupul A'B'E de patru regiuni, ABCDE = 00xx1. Cu alte cuvinte, variabilele A, B şi E sunt aceleaşi (001) pentru grup. Pe de altă parte, CD = xx (acesta variabile nu sunt identice pentru grup). Din moment ce ABCDE = 00xx1, grupul de patru regiuni este acoperit de A'B'XXE = A'B'E.</p>

<h2>Hartă Karnaugh de 6 variabile</h2>

<p>Luăm acum un exemplu de utilizare a unei hărţi Karnaugh de 6 variabile. Am suprapus (imaginar) cele patru sub-hărţi pentru a putea vizualiza gruparea de patru regiuni corespunzătoare ieşirii C'F':</p>

<img src="../poze/14159.png" width="378" height="375" alt="hartă Karnaugh de 6 variabile (suprapunere)"/>

<p>Un comparator de amplitudine (utilizat pentru ilustrarea utilizării hărţii Karnaugh de 6 variabile) compară două numere binare. Acesta indică dacă cele două numere sunt egale, mai mici sau mai mari unul faţă de celălalt. Un astfel de comparator are trei ieşiri:</p>

<img src="../poze/14160.png" width="380" height="108" alt="comparator digital de amplitudine"/>

<p>Un comparator de amplitudine pe trei biţi are două intrări: A<sub>2</sub>A<sub>1</sub>A<sub>0</sub> şi B<sub>2</sub>B<sub>1</sub>B<sub>0</sub>. Un comparator de amplitudine sub forma unui circuit integrat (7485) are practic patru intrări. Totuşi, harta Karnaugh de mai jos trebuie menţinută la o mărime rezonabilă. Vom rezolva problema doar pentru ieşirea A>B.</p>

<p>Pentru simplificarea logicii comparatorului de amplitudine pe 3 biţi, folosim harta Karnaugh cu 6 variabile de mai jos. Această variantă este cea cu suprapunere. Codul binar folosit nu este cod Gray. Găsim expresiile redundante prin suprapunerea celor patru sub-hărţi, precum am arătat mai sus. Am putea găsi regiuni comune tuturor celor patru hărţi, deşi, în exemplul de mai jos nu este cazul. Putem observa totuşi că există regiuni comune sub-hărţilor:</p>

<img src="../poze/14161.png" width="538" height="454" alt="hartă Karnaugh de 6 variabile (suprapunere)"/>

<p>Ieşirea A>B este reprezentată de ABC>XYZ pe harta de mai sus. Ori de căte ori ABC este mai mare decât XYZ, avem o valoare de 1 pe hartă. Pe prima linie, ABC = 000 nu poate fi mai mare decât nicio valoare a lui XYZ. Nu avem nici o valoare de 1 pe această linie. Pe linia a doua, ABC = 001, şi doar în prima regiune, ABCXYZ = 001000, ABC este mai mare decât XYZ. Avem un un singur 1 în prima regiune a celei de a doua linii. Pe linia a patra, ABC = 010, există o pereche de 1. Pe linia a treia, ABC = 011 şi avem trei valori de 1. Prin urmare, harta este completată cu valori de unu ori de câte ori ABC este mai mare decât XYZ.</p>

<p>Pentru gruparea regiunilor, acolo unde este posibil, încercăm să formăm grupuri cu sub-harţile adiacente. Toate grupurile în afară de un grup de 16 regiuni sunt formate cu regiuni aparţinând sub-hărţilor adiacente. Rezultatul este: 1 grup de 16 regiuni; 2 grupuri de 8 regiuni; 4 grupuri de 4 regiuni. Grupul de 16 regiuni, AX', ocupă toată sub-harta din partea de jos-stânga a hărţii Karnaugh, deşi, în figura de mai sus, aceasta nu este încercuită.</p>

<p>Numărând valorile de 1 de pe hartă, ajungem la un total de 16 + 6 + 6 = 28. Înainte de reducerea logică folosind harta Karnaugh de mai sus, soluţia logică sub formă de sumă de produse ar fi avut 28 de termeni, fiecare cu 6 intrări. Simplificarea logică cu ajutorul hărţii Karnaugh de mai sus, a redus numărul termenilor la şapte, fiecare cu un număr de patru sau mai puţin de patru intrări. Acesta este de fapt scopul hărţilor Karnaugh!</p>



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