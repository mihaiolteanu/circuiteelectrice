<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Metoda buclei de curent</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Metoda buclei de curent</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p><i>Metoda buclei de curent</i> sau <i>metoda ochiului de curent</i> este asemănătoare metodei ramurii de curent prin faptul că foloseşte un sistem de ecuaţii descris de legea lui Kirchhoff pentru tensiune şi legea lui Ohm pentru determinarea curenţilor necunoscuţi din circuit. Diferă de metoda ramurii de curent prin faptul că <i>nu</i> utilizează legea lui Kirchhoff pentru curent şi de obicei este nevoie de mai puţine variabile şi ecuaţii pentru rezolvare, ceea ce reprezintă un avantaj. </p>

<h3>Metoda convenţională</h3>

<p>Să vedem cun funcţionează această metodă folosind acelaşi circuit:</p>

<img src="../poze/00209.png" alt="circuit electric"/>

<p>Primul pas în metoda buclei este identificarea „buclelor” din circuit asfel încât să cuprindem toate componentele. În circuitul de mai sus, prima bucla va fi cea formată de B<sub>1</sub>, R<sub>1</sub>, şi R<sub>2</sub>, iar cea de a doua din B<sub>3</sub>, R<sub>2</sub>, and R<sub>3</sub>. Partea cea mai ciudată a acestei metode este imaginarea circulaţiei curenţilor prin fiecare dintre aceste bucle.</p>

<img src="../poze/00215.png" alt="circuit electric"/>

<p>Alegerea direcţiei fiecărui curent este complet arbitrară precum în cazul metodei ramurii de curent, dar ecuaţiile rezultate sunt mai uşor de rezolvat dacă avem aceeiaşi direcţie prin componentele aflate la intersecţia celor două bucle formate (putem observa faptul că atât curentul I<sub>1</sub> cât şi I<sub>2</sub> trec prin rezistorul R<sub>2</sub> de jos în sus în locul în care se intesectează). Dacă direcţia curentului presupusă iniţial se dovedeşte a fi greşită, acest lucru se va observa în soluţia finală prin faptul că valoarea va fi negativă.</p>

<p>Următorul pas este notarea tuturor polarităţilor căderilor de tensiune la bornele rezistorilor în funcţie de direcţia curenţilor indicată de bucle. Ţineţi minte că partea din „amonte” a rezistorului va fi tot timpul negativă, iar partea din „aval” tot timpul pozitivă întrucât electronii posedă o sarcină negativă. Polarităţile bateriei depind desigur de orientarea lor în diagramă şi pot să corespundă sau să nu corespundă cu polarităţile rezistorilor:</p>

<img src="../poze/00216.png" alt="circuit electric"/>

<p>Utilizând legea lui Kirchhoff pentru tensiune, putem parcurge fiecare dintre cele două bucle, generând ecuaţii în funcţie de căderile de tensiune ale coponentelor şi de polarităţi. La fel ca în cazul metodei ramurii de curent, vom desemna căderea de tensiune a unui rezistor ca produsul dintre rezistenţa acestuia (în ohmi) şi curentul buclei respective (I<sub>1</sub> sau I<sub>2</sub> în acest caz), a cărei valoare nu este cunoscută în acest moment. Când cei doi curenţi se intersectează (cazul rezistenţei R<sub>2</sub>), vom scrie acel termen al ecuaţie ca produsul dintre căderea de tensiune pe acel component şi <i>suma</i> celor doi curenţi ai buclelor (E<sub>R2</sub>*(I<sub>1</sub> +  I<sub>2</sub>)).</p>

<p>Începem cu bucla din stânga din colţul stânga sus şi parcurgem întregul ochi de reţea în direcţia inversă acelor de ceasornic (direcţia este pur arbitrară), obţinând următoarea ecuaţie:</p>

<p><img src="../poze/10181.png" alt="calcul matematic"/></p>

<p>Observaţi faptul că prin rezistorul R<sub>2</sub> curentul care trece este de fapt suma curenţilor celor două bucle( I<sub>1</sub> şi I<sub>2</sub>). Acest lucru se datorează faptul că ambii curenţi trec prin R<sub>2</sub> în aceeiaşi direcţie. Simplificând ecuaţia obţinem:</p>

<p><img src="../poze/10182.png" alt="calcul matematic"/></p>

<p>În acest moment avem o singură ecuaţie şi/cu două necunoscute. Acest lucru înseamnă ca mai avem nevoie de încă o evuaţie pentru a determina curenţii buclelor. Această ecuaţia o obţinem prin parcurgerea buclei din dreapta a circuitului, şi obţinem:</p>

<p><img src="../poze/10183.png" alt="calcul matematic"/></p>

<p>Simplificând ecuaţia cum am făcut şi înainte, obţinem:</p>

<p><img src="../poze/10184.png" alt="calcul matematic"/></p>

<p>Având două ecuaţii putem folosi metode matematice pentru determinarea necunoscutelor I<sub>1</sub> şi I<sub>2</sub>:</p>

<p><img src="../poze/10185.png" alt="calcul matematic"/></p>

<p>Dar, atenţie, aceste valori ale curenţilor sunt valabile pentru bucle şi nu sunt curenţii efectivi ai <i>ramurilor</i>. Să ne întoarcem la circuitul iniţial pentru a vedea care este relaţia dintre ei.</p>

<img src="../poze/00217.png" alt="circuit electric"/>

<p>Rezultatul de minus 1 amper pentru curentul buclei I<sub>2</sub> înseamnă că direcţia indicată iniţial (aleator) este incorectă. În realitate, direcţia curentului I<sub>2</sub> este contrară acesteia (observaţi modificarea sensului buclei pe desen!)</p>

<img src="../poze/00218.png" alt="circuit electric"/>

<p>Această modificare a direcţiei curentului faţă de ceea ce am presupus iniţial va modificat polaritatea căderilor de tensiune pe rezistorii R<sub>2</sub> şi R<sub>3</sub> datorită curentului I<sub>2</sub>. De aici putem deduce curentul prin R<sub>1</sub>, 5 amperi, căderea de tensiune (I*R) 20 de volţi. De asemenea, curentul prin R<sub>3</sub> este 1 amper, cu o cădere de tensiune de 1 volt. Dar ce se întâmplă în cazul rezistorului R<sub>2</sub>?</p>

<p>Curentul de buclă I<sub>1</sub> trece prin R<sub>2</sub> de jos în sus, iar curentul I<sub>2</sub> de sus în jos. Pentru a determina curentul real prin R<sub>2</sub>, trebuie să observăm foarte atent interacţiunea dintre curenţii celor două bucle, I<sub>1</sub> şi I<sub>2</sub> (în acest caz sunt în opoziţie); valoarea finală va fi suma algerbrică a celor doi. Din moment ce I<sub>1</sub> are 5 amperi într-o direcţie şi I<sub>2</sub> 1 amper în direcţia opusă, curentul <i>real</i> prin R<sub>2</sub> este diferenţa celor doi, adică 4 amperi şi trece prin R<sub>2</sub> de jos în sus:</p>

<img src="../poze/00219.png" alt="circuit electric"/>

<p>Cu un curent de 4 amperi prin R<sub>2</sub> rezultă o cădere de tensiune de 8 volţi.</p>

<h3>Un alt exemplu</h3>

<p>Principalul avantaj al metodei buclei de curent este că în general soluţia unei reţele mari poate fi găsită cu relativ puţine ecuaţii şi puţine necunoscute. Pentru circuitul analizat de noi a fost nevoie de 3 ecuaţii folosind metoda ramurii de curent şi doar două folosind metoda buclei de curent. Acest avantaj creşte semnificativ atunci când reţeau creşte în complexitate:</p>

<img src="../poze/00220.png" alt="circuit electric"/>

<p>Pentru rezolvara acestui circuit folosind metoda ramurii de curent, am avea nevoie de 5 variabile pentru fiecare curent posibil din circuit (de la I<sub>1</sub> la I<sub>5</sub>) şi prin urmare 5 ecuaţii pentru aflarea soluţiei, două pentru LKC şi trei pentru LKT:</p>

<p><img src="../poze/00221.png" alt="circuit electric"/></p>
<p><img src="../poze/10186.png" alt="formule"/></p>

<p>În schimb, folosind metoda buclei de curent avem doar trei necunoscute şi prin urmare doar trei ecuaţii de rezolvat pentru rezolvarea reţelei, ceea ce constituie un avantaj:</p>

<p><img src="../poze/00222.png" alt="circuit electric"/></p>
<p><img src="../poze/10187.png" alt="formule"/></p>

<p class="sumar">Sumar:</p>
<b>Paşii pentru aplicarea metodei ramurii de curent:</b>
<ol>
	<li>Trasarea buclelor de curent în circuit asfel încât să fie cuprinse toate componentele</li>
	<li>Noatarea polarităţii căderilor de tensiune de pe rezistori în funcţie de direcţiile curenţilor de bucla aleşi</li>
	<li>Scrierea ecuaţiilor legii lui Kirchhoff pentru tensiune în cazul fiecărei bucle din circuit, înlocuind tensiunea (E) cu produsul dintre curent şi rezistenţă (IR) pentru fiecare rezistor din ecuaţie. Acolo unde doi curenţi de buclă se intersectează unul cu celălalt printr-un comonent, curentul se exprimă ca şi sumă algebrică dintre cei doi curenţi (ex. I<sub>1</sub> + I<sub>2</sub>) dacă au aceeiaşi direcţie prin component; în caz contrar, curentul se va exprima ca şi diferenţă (I<sub>1</sub> - I<sub>2</sub>)</li>
	<li>Rezolvare sistemului de ecuaţii rezultat şi aflarea curenţilor de buclă</li>
	<li>Dacă oricare dintre soluţii este negativă, înseamnă că direcţia iniţială presupusă pentru curent este greşită!</li>
	<li>Adunarea algebrică a curenţilor de buclă pentru aflarea curenţilor prin componentele prin care trec mai mulţi curenţi de buclă</li>
	<li>Aflarea căderilor de tensiune pe toţi rezistorii (E=IR)</li>
</ol>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>