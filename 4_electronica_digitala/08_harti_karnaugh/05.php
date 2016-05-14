<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Hărţi Karnaugh, tabele de adevăr şi expresii booleene</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Hărţi Karnaugh, tabele de adevăr şi expresii booleene</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>Hărţile Karnaugh simplifică funcţiile logice mult mai rapid şi mai uşor în comparaţie cu algebra booleană. Dorim simplificarea circuitelor logic spre cel mai mic cost posibil prin eliminarea componentelor. Definim cel mai mic cost ca fiind cel mai mic număr de porţi cu cel mai mic număr de intrări pe poarta.</p>

<p>Mai jos am reprezentat cinci metode diferite de reprezentare a aceluiaşi lucru: o funcţie logică aleatoare cu două intrări. Metodele sunt: logica ladder, porţi logice, tabel de adevăr, hartă Karnaugh şi ecuatie booleană. Ceea ce vrem să sublinem este că toate acestea sunt echivalente. Două intrări A şi B pot lua valori de 0 sau 1, înalt sau jos, deschis sau închis, adevărat sau fals, în funcţie de caz. Există 2<sup>2</sup> = 4 combinaţii pentru generarea unei ieşiri. Acest lucru se aplică tuturor celor cinci exemple.</p>

#+CAPTION: reprezentarea unei funcţii logice prin metode diferite
[[../poze/14094.png]]

<p>Aceste patru ieşiri pot fi observate prin intermediul unei lampi la ieşirea circuitului ce utilizează logica ladder. Aceste ieşiri pot fi înregistrate într-un tabel de adevăr sau într-o hartă Karnaugh. Priviţi harta Karnaugh ca şi un tabel de adevăr „cosmetizat”. Ieşirea ecuaţiei booleene poate fi obţinută cu ajutorul legilor algebrei booleene şi transferată tabelului de adevăr sau hărţii Karnaugh. Care din cele cinci metode echivalente de reprezentare ar trebui să o folosim? Cea mai folositoare pentru situaţia în cauză.</p>

<p>Ieşirile unui tabel de adevăr corspund unu-la-unu elementelor unei hărţi Karnaugh. Începând cu partea de sus a tabelului de adevăr, intrările A = 0 şi B = 0 produc ieşirea α. Observă că aceeiaşi ieşire, α, se regăseşte pe harta Karnaugh la adresa A = 0, B = 0, în partea de sus stânga, la intersecţia coloanei B = 0 cu rândul A = 0. Celelalte ieşiri ale tabelului de adevăr, β, χ respectiv δ, corespunzătoare intrărilor AB = 01, 10 respectiv 11 au de asemenea corespondent pe harta Karnaugh:</p>

#+CAPTION: harta Karnaugh
[[../poze/14095.png]]

<p>Pentru uşurinţa expunerii, prezentăm mai jos regiunule adiacente ale hărţii Karnaugh cu două variabile folosind metoda dreptunghiulară a diagramei Venn din secţiunea precedentă:</p>

#+CAPTION: hărţi Karnaugh şi diagrame Venn
[[../poze/14096.png]]

<p>Regiunile α şi χ sunt adiacente pe harta Karnaugh. Nu putem spune acelaşi lucru despre tabelul de adevăr precedent, întrucât există o altă valoare (β) între ele. Acesta este si motivul organizării hărţilor Karnaugh sub formă de matrice pătrată. Regiunile cu variabile booleene comune trebuie să se afla una lângă cealaltă. Această structură este şi trebuie să fie uşor de recunoscut când privim o astfel de hartă, din moment ce α şi χ au variabila B' în comun. Ştim acest lucru deoarece B este 0 (identic cu B') pentru coloana de deasupra celor două regiuni. Comparaţi acest lucru cu diagrama Venn de deasupra hărţii Karnaugh.</p>

<p>În aceiaşi ordine de idei, putem observa că β şi δ au ca şi variabilă comună B (B = 1). Prin urmare, α şi β au în comun variabila booleană A' (A = 0), iar χ şi δ variabila A (A = 1).</p>

<p>Pe scurt, am încercat să grupăm variabilele booleene pe regiuni astfel încât să reiasă elementele lor comune. Hărţile Karnaugh sunt organizate pentru a ne oferi exact această „imagine”.</p>

<h2>Exemple de utilizare a hărţilor Karnaugh</h2>

<h3>Exemplul 1</h3>

<p>Tabelul de adevăr de mai jos conţine două valori de 1. Harta Karnaugh trebuie să conţină şi ea tot două valori de 1. Luăm prima valoare de 1 din rândul al doilea al tabelului de adevăr: observaţi adresa AB a tabelului de adevăr; localizaţi regiunea hărţii Karnaugh ce conţine aceiaşi adresă; scrieţi un 1 în acea regiune; repetaţi procesul pentru valoarea 1 din ultima linie a tabelului de adevăr.</p>

#+CAPTION: transformarea tabelului de adevăr în harta Karnaugh
[[../poze/14098.png]]

<p>Să încercăm să scriem acum pentru harta Karnaugh de mai sus şi expresia booleană. Soluţia este prezentată mai jos:</p>

#+CAPTION: transformarea hărţii Karnaugh în expresie booleană
[[../poze/14099.png]]

<p>Căutam regiuni adiacente (regiunile diagonale nu sunt adiacente), întrucât acestea vor avea una sau mai multe variabile booleene în comun: grupăm cele două valori de 1 din coloană; căutăm acea sau acele variabile ce sunt comune pentru grup şi scriem acest lucru ca şi rezultat boolean (în cazul nostru acesta este B); ignorăm variabilele ce nu sunt identice pentru un grup de regiuni (în cazul nostru, A variază, este atât 1 cât şi 0, prin urmare, ignorăm A); ignorăm de asemenea orice variabilă ce nu este asociată cu regiunile ce conţin 1 (B' nu conţine niciun 1, prin urmare, ignorăm B'); rezultatul final şi prin urmare expresia booleană asociată hărţii Karnaugh precedente este B. Acest lucru poate fi observa mai uşor comparând diagramele Venn din dreapta, în mod special coloana B.</p>

<h3>Exemplul 2</h3>

<p>Scrieţi expresia booleană asociată hărţii Karnaugh de mai jos:</p>

#+CAPTION: transformarea hărţii Karnaugh în expresie booleană
[[../poze/14099.png]]

<p>Urmând o logică asemănătoare celei de mai sus, grupăm toate valorile de 1 şi găsim variabila comună întregului grup astfel format; rezultatul este A'.</p>

<h3>Exemplul 3</h3>

<p>Pentru tabelul de adevăr de mai jos, găsiţi harta Karnaugh corespunzătoare şi scrieţi apoi expresia booleană folosind rezultatul obţinut:</p>

#+CAPTION: transformarea tabelului de adevăr în harta Karnaugh
[[../poze/14101.png]]

<p>Soluţie: transferăm valorile de 1 din tabelul de adevăr în locaţiile corespunzătoare pe harta Karnaugh; grupăm cele două valori de 1 pe coloana de sub B = 1; grupăm cele două valori de 1 de pe rândul A = 1; scriem rezultatul produsului primului grup (B); scriem rezultatul produsului celui de al doilea grup (A); scriem suma produselor celor doi termeni de mai sus (A + B).</p>

<p>Soluţia din mijloc este cea mai simplă şi prezintă cel mai mic cost. O soluţie mai puţin dorită este cea din dreapta. După gruparea valorilor 1, facem greşeala de a forma un grup cu o singură regiune. Motivul pentru care acest lucru nu este de dorit este următorul: aceast grup ce conţine o singură reziune are termenul produsului egal cu AB'; soluţia întregii hărţii este în aces caz AB' + B, iar aceasta nu reprezintă cea mai simplă soluţie.</p>

<p>Metoda corectă constă în gruparea acestui 1 singur cu regiunea din dreapta lui, regiune ce conţine la rândul ei o valoare de 1, chiar dacă aceasta a fost deja inclusă într-un alt grup. (coloana B). Putem refolosi regiuni pentru a forma grupuri mai mari. De fapt, este chiar indicat să facem acest lucru întrucât conduce la rezultate mai simple.</p>

<p>Trebuie să facem observaţia că oricare dintre soluţiile de mai sus, atât cea corectă cât şi cea „greşită” sunt de fapt corecte din punct de vedere logic. Ambele circuite vor genera aceiaşi ieşire. Pur şi simplu, circuitul corect presupune un cost mai redus de implementare fizică.</p>

<h3>Exemplul 4</h3>

<p>Completaţi o hartă Karnaugh folosind expresia booleană de mai jos. Scrieţi apoi expresia booleană a rezultatului:</p>

#+CAPTION: transformarea expresiei booleene în harta Karnaugh
[[../poze/14102.png]]

<p>Expresia booleană conţine trei sume de produse. Va exista câte o valoare de 1 pe harta Karnaugh pentru fiecare produs. Deşi, în general, numărul valorilor de 1 pe produs variază cu numărul variabilelor produsului în comparaţie cu mărimea hărţii Karnaugh. Termenul produsului reprezintă adresa regiunii unde vom introduce valoare de 1. Primul termen este A'B şi corespunde adresei 01 a hărţii. Inotroducem un 1 în această regiune. Similar, introducem şi ceilalţi doi termeni de 1.</p>

<p>Trecem apoi la gruparea termenilor şi simplificarea rezultatului conform exemplului precedent.</p>

<h3>Exemplul 5</h3>

<p>Simplificaţi circuitul logic de mai jos:</p>

#+CAPTION: circuit logic
[[../poze/14103.png]]

<p>Scriem expresia booleană pentru circuitul logic iniţial; transferăm expresia booleană rezultată într-o hartă Karnaugh; grupăm regiunile precum în exemplele precedente; scriem expresii booleene pentru fiecare grup, conform exemplelor precedente; redesenăm circuitul logic simplificat:</p>

#+CAPTION: simplificarea unui circuit logic
[[../poze/14104.png]]

<h3>Exemplul 6</h3>

<p>Simplificaţi circuitul logic de mai jos:</p>

#+CAPTION: circuit logic
[[../poze/14105.png]]

<p>Scriem expresia booleană pentru circuitul logic iniţial; completăm harta Karnaugh; obervăm că nu putem forma niciun grup care să conţină mai mult de două regiuni 1; prin urmare, simplificarea nu este posibilă, iar expresia finală este identică cu cea iniţială (SAU-exclusiv).</p>



</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
