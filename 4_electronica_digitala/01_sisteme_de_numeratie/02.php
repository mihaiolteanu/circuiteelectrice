<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Sisteme de numeraţie</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Sisteme de numeraţie</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Sistemul de numeraţie roman</h2>
<p>Romanii au pus la punct un sistem de numeraţie pe bază de simboluri (cifre) pentru reprezentarea cantităţilor, astfel:</p>

<div class="formula">
X = 10
L = 50
C = 100
D = 500
M = 1000
</div>

<p>Dacă o cifră este urmată de o altă cifră a cărei valoare este egală sau mai mică decât prima, niciuna dintre cifre nefiind mai mare decât cele din stânga sa, valoarea acestei cifre se adaugă la valoarea totală. Astfel, VIII reprezintă valoarea 8, iar CLVII reprezintă 157. Pe de altă parte, dacă o cifră este precedată la stânga sa de o altă cifră a cărei valoare este mai mică decât prima, valoare celei de a doua se scade din prima. Prin urmare, IV = 4 (V minus I), iar CM = 900 (M minus C). De exemplu, anul 1987 poate fi reprezentat în notaţia romană astfel: MCMLXXXVII. O analiză a acestei notaţii este bine-venită:</p>

<div class="formula">
M (1000) + CM (900) + L (50) + XXX (30) + V (5) + II (2) = 1987
</div>

<p>Numerele mari sunt dificil de reprezentat prin intermediul acestei notaţii. Adunarea şi scăderea cifrelor ne poate şi ea da bătăi de cap. O altă problemă majoră a acestui sistem este imposibilitatea reprezentării numerelor negative sau a valorii nule (zero), ambele fiind concepte foarte importante în matematică.</p>

<h2>Sistemul de numeraţie zecimal</h2>

<p>Una dintre cele mai importante idei ale sistemului zecimal de numeraţie se datorează babilonienilor. Aceştia au fost aparent prima civilizaţie ce s-a folosit de poziţia cifrei pentru reprezentarea numerelor mari. În loc să inventeze cifre noi pentru reprezentarea cantităţilor mari, precum romanii, aceştia au refolosit aceleaşi cifre, dar plasate în poziţii diferite de la dreapta spre stânga. Sistemul zecimal actual utilizează acest concept, folosind doar 10 cifre (0, 1, 2, 3, 4, 5, 6, 7, 8 şi 9) pentru reprezentarea valorilor în funcţie de poziţia acestora. Fiecare cifră reprezintă o valoare întreagă, iar fiecare poziţie de la dreapta spre stângă reprezintă o constantă de multiplicare pentru fiecare dintre aceste valori întregi. De exemplu, notaţia zecimală „1206”, poate fi desfăcută în următorul produs:</p>

<div class="formula">
1206 = 1000 + 200 + 6
1206 = (1 x 1000) + (2 x 100) + (0 x 10) + (6 x 1)
</div>

<p>Fiecare simbol poartă numele de cifră, iar fiecare poziţie este de zece ori mai mare decât poziţie imediat următoare (din dreapta). Astfel că în cazul de mai sus avem poziţia sau cifra unităţilor (6), cifra zecilor (0), cifra sutelor (2) şi cifra miilor (1), de la dreapta spre stânga.</p>

<h2>Sistemul de numeraţie binar</h2>

<p>Ce s-ar întâmpla dacă am realiza un sistem de numeraţie cu aceleaşi principii de bază precum sistemul zecimal, dar cu mai puţine sau mai multe cifre?</p>

<p>Sistemul binar este un astfel de sistem „modificat” ce utilizează doar două cifre, constanta de multiplicare  a fiecărei cifre fiind în acest caz de două ori mai mare decât a cifrei precedente (de la dreapta la stânga). Cele două cifre sunt „0” şi „1”. Poziţia din dreapta este poziţia unităţilor, la fel ca în cazul notaţiei zecimale. Spre stânga, constantele de multiplicare sunt după cum urmează: 2, 4, 8, 16, etc. De exemplu, următorul număr binar poate fi exprimat, la fel ca şi numărul zecimal 1206, ca şi sumă dintre produsul fiecărei cifre cu, constanta de multiplicare (în funcţie de poziţie):</p>

<div class="formula">
11010 = 2 + 8 + 16 = 26
11010 = (1 x 16) + (1 x 8) + (0 x 4) + (1 x 2) + (0 x 1)
</div>

<h2>Specificarea bazei</h2>

<p>Mai sus, am scris un număru sub formă binară (11010) şi l-am transformat în formă zecimală (16 + 8 + 2 = 26). Prin urmare, am amestecat două notaţii diferite în acelaşi loc. Pentru a nu crea confuzii, va trebui să explicităm tipul notaţiei folosite. Acest lucru se realizează prin specificarea bazei numărului respectiv prin folosirea indicilor, 2 pentru notaţia binară, şi 10 pentru cea zecimală, astfel: 11010<sub>2</sub> (baza doi) şi 26<sub>10</sub> (baza zece).</p>

<p>Aceşti indicii nu sunt operatori matematici, precum exponenţii (puteri). Tot ceea ce fac este să indice tipul de sistem de numeraţie utilizat pentru reprezentarea numărului respectiv. De obicei, atunci când nu este specificată nicio bază, se prespune că se lucrează în baza zece (<sub>10</sub>).</p>

<p>De remarcat că, în cazul notaţiei binare, fiecare poziţie poartă numele de bit</p>

<h2>Scopul sistemului binar de numeraţie</h2>

<p>De ce am vrea să folosim acest sistem de numeraţie binar? Sistemul decimal, cu cele zece cifre ale sale, este intuitiv şi uşor de înţeles. Sistemul binar este folosit în principal de electronica digitală (folosită pentru calculatoare, de exemplu), datorită uşurinţei de reprezentare electronică a celor două stări (0 şi 1). Cu un circuit relativ simplu, putem efectua operaţii matematice asupra numerelor binare reprezentând fiecare bit printr-un circuit care este fie pornit (curent) fie oprit (curent zero). La fel ca în cazul unui abac, putem adăuga mai multe circuite pentru a reprezenta numere din ce în ce mai mare. Acest sistem este ideal pentru stocarea şi redarea informaţiei sub format numeric: benzi magnetice, CD-uri, hard-disk-uri, etc.</p>

<div id="legaturi">
<ol>
<li>
<a href="http://www.stefamedia.ro/ce-sunt-sistemele-de-numeratie-si-despre-sistemul-zecimal/">Ce sunt sistemele de numeraţie şi despre sistemul zecimal</a> (stefamedia.ro)</li>
</ol>
</div>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
