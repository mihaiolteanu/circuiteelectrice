<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Numere binare negative</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Numere binare negative</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<h2>Bit-ul de semn</h2>
<p>Operaţia de scădere se poate realiza asemănător cu cea de adunare prin considerarea unuia dintre numere ca fiind negativ. De exemplu, operaţia de scădere „7 - 5” este aceiaşi cu cea de adunare „7 + (-5)”, adică, adunarea unui număr pozitiv cu un număr negativ. Din moment ce ştim deja cum se realizează reprezentarea numerelor pozitive sub formă binară, tot ceea ce trebuie să facem este să reprezentăm şi numerele negative sub formă binară. De aici va rezulta direct operaţia de scădere.</p>

<p>Un număr zecimal negativ se reprezintă de obicei prin introducerea semnului minus(-) la stânga, la fel ca în exemplul de sus (-5). Totuşi, scopul notaţie binare este realizarea circuitelor tip oprit/pornit pentru reprezentarea valorilor sub forma căderilor de tensiune (două valori alternative: „înaltă” şi „joasă”). În această situaţie, nu ne putem permite să introducem un al treilea simbol, precum semnul minus, din moment ce aceste circuite au doar două stări posibile, pornit sau oprit. O soluţie o reprezintă utilizarea unui bit (circuit) doar pentru reprezentarea acestui semn matematic şi pentru nimic mai mult:</p>

<div class="formula">
101<sub>2</sub> = 5<sub>10</sub> (pozitiv)
Utilizând un bit adiţional (0 = pozitiv, 1 = negativ):
0101<sub>2</sub> = 5<sub>10</sub> (pozitiv)
1101<sub>2</sub> = -5<sub>10</sub> (negativ)
</div>

<p>Dar, în această situaţie în care folosim biţi pentru alt scop decât pentru reprezentarea valorilor, trebuie să fim foarte atenţi, altfel, riscăm ca numărul 1101<sub>2</sub> să fie interpretat ca fiind 13<sub>10</sub> în loc de -5<sub>10</sub>. Pentru a nu face astfel de greşeli, trebuie să ne decidem în primul rând de câţi biţi avem nevoie pentru a reprezenta cel mai mare număr posibil cu care vom lucra în aplicaţia noastră. Ne putem apoi asigura că nu vom depăşi această lungime (în biţi) atunci când aplicăm operaţiile aritmetice. În exemplul de mai sus, limita inferioară este -7 (1111<sub>2</sub>) iar cea superioară 7 (0111<sub>2</sub>), deoarece al patrulea bit este folosit pe post de semn. Doar prin stabilirea acestor numere putem fi sigur că nu vom amesteca un număr negativ cu un număr pozitiv, mai mare.</p>

<p>Pe cât de simplă pare această abordare, ea nu este foarte practică din punct de vedere al aritmeticii. De exemplu, cum efectuăm adunarea unui număr negativ (1101<sub>2</sub>) cu un oricare alt număr, folosind tehnica standar al adunării binare? Ar trebui să inventăm o nouă metodă de realizare a adunării pentru ca această tehnică să fie practică. Dar, dacă realizăm acest lucru, nu vom mai avea avantajul utilizării numerelor negative pentru realizarea scăderii prin adunare obişnuită.</p>

<h2>Reprezentarea în complement faţă de doi</h2>
<p>Din fericire, există o altă metodă pentru reprezentarea numerelor negative ce este compatibilă cu operaţia de adunare obişnuită, şi anume, complementarea. Cu această strategie, bit-ul din stânga primeşte un statut special, asemenea bit-ului de semn din exemplul precedent. Totuşi, de această dată, bit-ul din stânga nu este doar un bit de semn, ci posedă şi o valoare. De exemplu, -5 este reprezentat astfel:</p>

<div class="formula">
1011<sub>2</sub> = -5<sub>10</sub>
(1 x -8<sub>10</sub>) + (0 x 4<sub>10</sub>) + (1 x 2<sub>10</sub>) + (1 x 1<sub>10</sub>) = -5<sub>10</sub>
</div>

<p>Utilizând cei trei biţi din dreapta pentru reprezentarea valorilor de la zero la şapte, bit-ul din stânga reprezentând fie zero fie -8, putem reprezenta orice număr întreg de la -7 (1001<sub>2</sub> = -8<sub>10</sub> + 1<sub>10</sub> = -7<sub>10</sub>) la plus 7 (01112 = 010 + 710 = 710).</p>

<p>Reprezentarea numerelor pozitive utilizând această notaţie nu este diferită faţă de notaţia normală (bit-ul din stânga va fi tot timpul zero). Totuşi, reprezentarea numerelor negative nu este chiar aşa de intuitivă.</p>

<pre>
0 = 0000
1 = 0001          -1 = 1111
2 = 0010          -2 = 1110
3 = 0011          -3 = 1101
4 = 0100          -4 = 1100
5 = 0101          -5 = 1011
6 = 0110          -6 = 1010
7 = 0111          -7 = 1001
                  -8 = 1000
</pre>

<p>Observăm că numerele binare negative din coloana dreaptă, fiind suma celor trei biţi din dreapta plus bitul negativ din dreapta, egal cu minus opt, nu se „numără” în aceiaşi ordine precum numerele binare pozitive din coloana stângă. În schimb, cei trei biţi trebuie aduşi la forma necesară, astfel încât, după adunarea cu minus opt să se obţină rezultatul negativ dorit.</p>

<p>Spunem că cei trei biţi din dreapta sunt o reprezentare în complement faţă de doi al numărului pozitiv corespunzător. Să facem o comparaţie:</p>

<pre>
număr pozitiv         complementul faţă de doi
---------------       ------------------------
001                    111
010                    110
011                    101
100                    100
101                    011
110                    010
111                    001
</pre>

<p>În acest caz (bit-ul al patrulea are valoarea de minus opt), reprezentarea în complement faţă de doi a oricărui număr pozitiv este valoarea necesară însumări cu minus opt pentru a rezulta aceiaşi valoare, dar cu semn schimbat. Din fericire, există o cale uşoară de calcul al complementului, pentru oricare număr binar: inversăm toţi biţii acelui număr, schimbând 1 cu 0 şi invers. Ajungem astfel la reprezentarea în complement faţă de unu a numărului. Pentru soluţia dorită de noi, mai trebuie să adăugăm un unu.</p>

<p>De exemplu, pentru obţinerea complementului lui cinci (101<sub>2</sub>), inversăm toţi biţii şi obţinem 010<sub>2</sub>(complement faţă de unu), apoi adăugăm un unu şi obţinem 011<sub>2</sub>, sau -5<sub>10</sub> în complement faţă de doi.</p>

<p>Este interesant de menţionat faptul că, obţinerea complementului faţă de doi a unui număr binar funcţionează la fel de bine şi dacă aplicăm inversarea tuturor biţilor, inclusiv bit-ului din stânga. Să luăm exemplul precedent, inversarea lui 5 în -5, dar aplicând operaţia de inversare tuturor biţilor. Trebuie să includem însă şi bit-ul din stânga numărului iniţial (0101<sub>2</sub>). După inversarea tuturor biţilor, obţinem complementul faţa de unu (1010<sub>2</sub>). Apoi, adăugăm un unu pentru obţinerea răspunsului final: 1011<sub>2</sub>, sau -5<sub>10</sub> în complement faţă de doi, exprimat cu patru biţi.</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>