<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Simplificarea circuitelor logice cu hărţi Karnaugh</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>6. Simplificarea circuitelor logice cu hărţi Karnaugh</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>Exemplele de simplificare a circuitelor logice de până acum puteau fi realizate la fel de bine şi cu ajutorul algebrei booleene. Problemele de simplificare logică reale implică însă utilizarea unor hărţi Karnaugh mai mari. În această secţiune vom concepe câteva exemple imaginare, lăsând aplicaţiile practice pentru capitolul de logică combinaţională. Aceste exemple sunt concepute doar pentru a ilustra tehnicile de simplificare.</p>

<p>Vom folosi harta Karnaugh dezvoltată anterior, mai exact forma din dreapta:</p>

<img src="../poze/14093.png" alt="hartă Karnaugh"/>

<h2>Codul Gray</h2>

<p>Observaţi secvenţa numerelor din partea superioară a harţii. Aceasta nu este o secvenţa binară (00, 01, 10, 11), ci este o secvenţă de tipul 00, 01, 11, 10. Această secvenţă este cunoscută sub numele de cod Gray. Secvenţa de tip cod Gray modifică doar un singur bit pe măsură ce trecem de la un număr la următorul număr din secvenţă. Acest lucru nu este valabil într-o secvenţa binară. Regiunile adiacente diferă doar printr-un singur bit, sau variabilă booleană. Acest lucru este necesar dacă dorim organizarea ieşirilor unei funcţii logice pentru observarea elementelor lor comune.</p>

<p>Mai mult, antetul coloanelor şi rândurilor trebuie să fie în ordinea codului Gray, altfel, harta nu se va comporta precum o hartă Karnaugh. Regiunile ce au în comun variabile booleene nu vor mai fi adiacente şi nu vom mai putea identifica carcateristicile specifice funcţiei pe cale vizuală. Regiunile adiacente variază cu un singur bit, deoarece secvenţa de cod Gray variază la rândul ei doar cu un singur bit.</p>

<h2>Hărţi Karnaugh cu 3 variabile - exemple de simplificare</h2>

<p>Să folosim în continuare hărţile Karnaugh cu 3 variabile pentru simplificarea unor expresii booleene. Vom arăta cum să trecem termenii produs ai ecuaţiei nesimplificate în harta Karnaugh. Vom ilustra şi modul de identificare a grupurilor de regiuni adiacente ce duc la formarea sumei de produse simplificate a circuitului logic (expresiei booleene).</p>

<img src="../poze/14107.png" alt="simplificarea unei expresii booleene prin intermediul hărţii Karnaugh"/>

<p>Dându-se expresia (A'B'C' + A'B'C), primul pas este introducerea valorilor de 1 pe harta Karnaugh corespunzător poziţiei fiecărui produs al sumei (A'B'C' este echivalent cu 000, iar A'B'C este echivalent cu 001). Identificăm apoi un grup de regiuni alăturate ce conţin valori de 1 (în cazul de faţă, avem doar două astfel de regiuni). Scriem apoi produsul de termeni pentru acest grup, ceea ce reprezintă rezultatul simplificat.</p>

<img src="../poze/14108.png" alt="simplificarea unei expresii booleene prin intermediul hărţii Karnaugh"/>

<p>Grupând cei patru termeni de 1 pe harta Karnaugh, rezultatul este asigurat de expresia A'.</p>

<img src="../poze/14109.png" alt="simplificarea unei expresii booleene prin intermediul hărţii Karnaugh"/>

<p>Identic, grupând ce patru termeni de 1, putem foarte uşor observa că singura variabilă ce acoperă toate cele patru regiuni este C.</p>

<img src="../poze/14110.png" alt="simplificarea unei expresii booleene prin intermediul hărţii Karnaugh"/>

<p>Din moment ce avem două grupuri pe harta Karnaugh de mai sus, rezultatul va fi o sumă de produse, şi anume, A' + B.</p>

<img src="../poze/14111.png" alt="simplificarea unei expresii booleene prin intermediul hărţii Karnaugh"/>

<p>Cele două produse de mai sus formează un grup de doi termeni ce se simplifică la BC.</p>

<img src="../poze/14112.png" alt="simplificarea unei expresii booleene prin intermediul hărţii Karnaugh"/>

<p>Variabila comună celor patru termeni grupaţi mai sus este B</p>

<img src="../poze/14113.png" alt="simplificarea unei expresii booleene prin intermediul hărţii Karnaugh"/>

<p>Cei patru termeni de mai sus formează un singur grup. Putem vizualiza acest grup dacă îndoim extremităţile hărţii pentru a forma un cilindru. În acest caz, regiunile sunt adiacente. În mod normal, un astfel de grup se notează conform figurii din stânga. Din întregul set de variabile (A, B, C), singura variabilă comună este C'. C' este zero în toate cele patru regiuni. Acesta este atunci rezultatul final al simplificării.</p>

<img src="../poze/14114.png" alt="simplificarea unei expresii booleene prin intermediul hărţii Karnaugh"/>

<p>Cele şase regiuni rezultate din ecuaţia nesimplificată pot fi organizate în două grupuri de câte patru. Aceste grupuri trebuie să rezulte într-o sumă de două produse, şi anume A' + C'.</p>

<h2>Incinerator deşeuri toxice - reconsiderare</h2>

<p>Să reluăm mai jos exemplul incineratorului de deşeuri toxice studiat într-un capitol precedent. Vom încerca simplificarea circuitului logic folosind o hartă Karnaugh:</p>

<img src="../poze/14115.png" alt="incinerator deşeuri toxice - simplificarea circuitului logic folosind hărţi Karnaugh"/>

<p>Ecuaţia booleană de iesire este o sumă de patru produse. Prin urmare, vom avea patru regiuni de 1 pe harta Karnaugh. Grupând regiunile adiacente, avem trei grupuri de câte doi termeni. Vom avea prin urmare o sumă de trei produse, fiecare produs conţinând doi termeni. Circuitul logic simplificat, identic cu cel obţinut cu ajutorul regulilor de simlificare booleană, este redat mai jos:</p>

<img src="../poze/04366.png" alt="incinerator deşeuri toxice - circuitul logic simplificat"/>

<p>Făcând o comparaţie între regulile boolene folosite pentru simplificarea circuitului logic al incineratorului...</p>

<img src="../poze/14066.png" alt="incinerator deşeuri toxice - simplificarea booleană"/>

<p>...şi harta Karnaugh, care duce la exact acelaşi rezultat...</p>

<img src="../poze/14144.png" alt="incinerator deşeuri toxice - simplificarea circuitului logic folosind hărţi Karnaugh"/>

<p>Putem lesne vedea motivul pentru care hărţile Karnaugh sunt preferate pentru simplificarea circuitelor logice în detrimentul simplificării booleene.</p>

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