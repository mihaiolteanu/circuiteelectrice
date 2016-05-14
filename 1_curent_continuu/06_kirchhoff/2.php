<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Legea lui Kirchhoff pentru tensiune</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Legea lui Kirchhoff pentru tensiune</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Să luam un circuit serie cu trei rezistori şi să notăm punctele din circuit:</p>

#+CAPTION: circuit serie
[[../poze/00110.png]]

<p>Dacă ar fi să conectăm un voltmetru între punctele 2 şi 1, sonda roşie la punctul 2 şi sonda neagră la punctul 1, voltmetru va indica valoarea de +45 V. În mod normal, semnul „+” nu este arătat, ci este implicit în cazul citirii aparatelor de măsură digitale.</p>

#+CAPTION: formulă
[[../poze/10106.png]]

<p>Când o tensiune este exprimată cu indice dublu („2-1” în cazul notaţiei „E<sub>2-1</sub>”), înseamnă ca tensiunea este măsurată între cele două puncte. O tensiune exprimată prin „E<sub>cg</sub>” ar însemna că tensiunea măsurată este cea indicată de un voltmetru cu sonda roşie conectată la punctul „c” şi sonda neagră la punctul „g”.</p>

#+CAPTION: voltmetru
[[../poze/00435.png]]

<p>Dacă ar fi să luăm acelaşi voltmetru şi să măsurăm căderea de tensiune de pe fiecare rezistor, parcurgând circuitul în sensul acelor de ceasornic, cu sonda roşie în faţă şi cu cea neagră în spate, am obţine/citi următoarele valori:</p>

#+CAPTION: formule
[[../poze/10107.png]]
#+CAPTION: parcurgerea circuitului cu voltmetru
[[../poze/00436.png]]

<p>Suntem deja familiarizaţi cu conceptul general al circuitelor serie, si anume: suma căderilor de tensiune individuale este egală cu tensiunea aplicată. Dar, măsurând căderile de tensiune în acest fel şi ţinând cont de polaritatea („+” sau „-”) citirilor, descoperim o altă variantă a acestui principiu: suma tensiunilor măsurată în acest fel este zero:</p>

#+CAPTION: măsurarea tensiunii între diferite puncte ale circuitului
[[../poze/10108.png]]

<p>Acest principiu este cunoscut sub denumirea de <i>legea lui Kirchhoff pentru tensiune</i> (descoperită în 1847 de către <a href="http://ro.wikipedia.org/wiki/Gustav_Robert_Kirchhoff">Gustav R. Kirchhoff</a>, şi poate fi exprimat asfel:</p>

<p><b>„Suma algebrică a tuturor căderilor de tensiune dintr-o bulcă trebuie să fie egală cu zero”</b></p>

<p>Termenul de sumă <i>algebrică</i> este folosit pentru a desemna faptul că trebuie luate în considerarea semnele (polarităţile) tensiunilor din circuit pe lângă valorile acestora. Prin <i>buclă</i> se înţelege orice drum prin circuit ce începe şi se termină în acelaşi punct. În exemplul de mai sus, bucla s-a format între punctele 1-2-3-4-1, în exact această ordine. Nu contează punctul din care începem sau direcţie pe care o urmăm (în sensul acelor de ceasornic, sau invers), suma căderilor de tensiune va fi tot zero. Pentru a demonstra acest lucru, putem „modifica” bucla asfel (3-2-1-4-3):</p>

#+CAPTION: măsurarea tensiunii între diferite puncte ale circuitului
[[../poze/10109.png]]

<p>Pentru o mai bună vizualizare, putem redesena circuitul serie de mai sus, asfel încât toate componentele să se regăsească pe aceeiaşi linie dreaptă:</p>

#+CAPTION: circuit serie
[[../poze/00111.png]]

<p>Este exact acelaşi circuit, doar că aranjamentul componentelor este diferit. Observaţi polaritatea căderilor de tensiune de pe rezistori în compoaraţie cu cea a bateriei: tensiunea bateriei este negativă în stânga şi pozitivă în dreapta, pe cât tensiunile la bornele rezistorilor sunt orientate în sens opus: pozitivă în stânga şi negativă în drepta. Aceasta pentru că rezistorii <i>rezistă</i> curegerii electronilor „împinşi” de baterie. Cu alte cuvinte, rezistenţa <i>împotriva</i> curgerii electronilor <i>trebuie</i> să fie direcţionată în direcţie opusă sursei de tensiune electromotoare.</p>

<p>Acestea sunt indicaţiile pe care un voltmetru introdus în circuit le-ar afişa (sonda neagră în stânga, cea roşie în dreapta):</p>

#+CAPTION: circuit serie, măsurarea cu ajutorul voltmetrului
[[../poze/00112.png]]

<p>Dacă am fi să luăm acelaşi voltmetru pentru a citi căderile de tensiunea pentru combinaţiile componentelor din circuit începând cu R<sub>1</sub>, putem observa adunarea algebrică a tensiunilor (spre zero):</p>

#+CAPTION: circuit serie, măsurarea cu ajutorul voltmetrului
[[../poze/00113.png]]

<p>În cadrul măsurătorilor de mai sus, putem observa importanţa <i>polarităţii</i> căderilor de tensiune atunci când le adunăm. Citind rezultatele măsurătorilor tensiunii la bornele lui R<sub>1</sub>, R<sub>1</sub>--R<sub>2</sub> şi R<sub>1</sub>--R<sub>2</sub>--R<sub>3</sub> (folosim simbolul „--” pentru a desemna conexiunea „serie” între cei trei rezistori R<sub>1</sub>R<sub>2</sub> şi R<sub>3</sub>) vedem că suma căderilor de tensiune are valori tot mai mari (deşi negative), deoarece polaritatea căderilor de tensiune pe fiecare component are aceeiaşi orientare (stânga pozitiv, dreapta negativ). Suma căderilor de tensiune pe R<sub>1</sub>, R<sub>2</sub> şi R<sub>3</sub> este de 45 de volţi, aceeiaşi cu tensiunea la ieşirea bateriei, cu observaţia că polaritatea bateriei este opusă faţă de cea a rezistorilor (stânga negativ, dreapta pozitiv) şi prin urmare rezultatul final este o măsurătoare de 0 volţi pe toate cele patru componente luate la un loc.</p>

<p>O un alt mod de a privi acest circuit este de a observa că partea stânga a circuitului(stânga rezistorului R<sub>1</sub>: punctul 2) este conectat direct la partea dreapta a circuitului (dreapta bateriei: punctul 2), pas necesar pentru închiderea circuitului. Din moment ce aceste două puncte sunt conectate direct, acestea sunt <i>electric comune</i> şi prin urmare, căderea de tensiune dintre cele două <i>trebuie</i> să fie zero.</p>

<p>Legea lui Kirchhoff pentru tensiunie (prescurtat LKT) funcţionează pentru <i>orice</i> configuraţie a circuitului, nu doar pentru cele serie. Să vedem un exemplu pentru circuitul paralel prin urmare:</p>

#+CAPTION: circuit paralel
[[../poze/00114.png]]

<p>Fiind un circuit paralel, căderile de tensiune pe fiecare rezistor în parte sunt aceleaşi precum tensiunea sursei de alimentare: 6 volţi. Măsurând tensiunile în bucla 2-3-4-5-6-7-2, obţinem:</p>

#+CAPTION: rezultate măsurători tensiune circuit paralel
[[../poze/10110.png]]

<p>Observaţi notaţia căderii de tensiune totale (sumei) cu E<sub>2-2</sub>. Din moment ce am început măsurătorile buclei la punctul 2 şi am terminat tot la punctul 2, suma algebrică a tuturor căderilor de tensiune va fi aceeiaşi cu tensiunea măsurată între acelaşi punct (E<sub>2-2</sub>), care, desigur, trebuie să fie zero.</p>

<p>Faptul că acest circuit este paralel şi nu serie nu încurcă cu nimic aplicarea legii lui Krichhoff pentru tensiune. Din punctul nostru de vedere, întregul circuit ar putea să fie o „cutie neagră” - configuraţia componentelor să fie complet ascunsă şi să avem la dispoziţie doar un set de puncte unde să putem măsura tensiunea - şi legea lui Kirchhoff tot ar fi valabilă:</p>

#+CAPTION: aplicarea legii lui Kirchhof
[[../poze/00115.png]]

<p>Dacă încercăm orice combinaţie de paşi, pornind de la oricare terminal în diagrama de mai sus, completând o buclă asfel încât să ajungem la punctul de unde am plecat, vom vedea că suma algebrică a tuturor căderilor de tensiune va fi <i>tot timpul</i> egală cu zero.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Legea lui Kirchhoff pentru tensiune: <b>„Suma algebrică a tuturor căderilor de tensiune dintr-o bulcă trebuie să fie egală cu zero”</b></li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
