<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Rezistori</title>
  </head>
<body>
  <div id="meniu"><?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?></div>
  <div id="header">
	<h1>4. Rezistori</h1>
  </div>
  
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>
  
<div id="meniu2"><?php include ("meniu2.html")?></div>
#+CAPTION: http://www.flickr.com/photos/maurymccown/2381599778/sizes/l/
[[poza_meniu2]]
  
<div id="contents">

<p>Datorită relaţiei dintre tensiune, curent şi rezistenţă în oricare circuit, putem controla oricare variabilă dintr-un circuit prin simplul control al celorlalte două. Probabil că cea mai uşor de controlat variabilă dintr-un circuit este rezistenţa. Acest lucru poate fi realizat prin schimbarea materialului, mărimii, formei componentelor conductive (ţineţi minte cum filamentul metalic subţire al unui bec crează o rezistenţă electrică mai mare decât un fir gros?)</p>

<p>Componente speciale numite <i>rezistori</i> sunt confecţionate cu singurul motiv de a crea o cantitate precisă de rezistenţă electrică la introducerea lor în circuit. Sunt construite din fir metalic sau de carbon în general, şi realizate asfel încât să menţină o rezistenţă stabilă într-o gamă largă de condiţi externe. Rezistorii nu produc lumină precum este cazul becurilor, dar produc căldură atunci când degajă putere electrică într-un circuit închis în stare de funcţionare. În mod normal, totuşi, scopul unui rezistor nu este producerea căldurii folositoare, ci pur şi simplu asigurarea unei rezistenţe electrice precise în circuit.</p>

<p>Simbolul rezistenţei pe care îl vom folosi în circuite este cel în formă de zig-zag:</p>

#+CAPTION: simbolul rezistorului
[[../poze/00042.png]]

<p>Valorile rezistenţelor în ohmi sunt de obicei reprezentate printr-un număr adiacent, iar dacă într-un singur circuit sunt prezenţi mai mulţi rezistori, fiecare va fi notat cu R<sub>1</sub>, R<sub>2</sub>, R<sub>3</sub>, etc. După cum se poate vedea, simbolurile pentru rezistenţă pot fi prezentate fie orizontal, fie vertical:</p>

#+CAPTION: simbolul şi notaţia rezistorului
[[../poze/00043.png]]

<p>Rezistoarele reale nu seamănă deloc cu un zig-zag, ci sunt asemenea unor tuburi sau cilindrii cu câte un fir la fiecare capăt pentru conectarea lor în circuit. Mai jos sunt câteva exemple de rezistori de diferite tipuri şi mărimi:</p>

#+CAPTION: diferite tipuri şi mărimi de rezistori
[[../poze/50008.jpg]]

<p>Dacă ne luăm după aparenţa lor fizică, un simbol alternativ pentru rezistori este cel din figura de mai jos<sup>1</sup>:</p>

#+CAPTION: simbolul european al rezistorului
[[../poze/00368.png]]

<p>Rezistoarele pot de asemenea să fie cu rezistenţă variabilă, nu neapărat fixă. Această proprietate o putem întâlni în cadrul unui rezistor construit chiar pentru acest scop, sau o putem întâlni în cadrul unui component a cărui rezistenţă este instabilă în timp:</p>

#+CAPTION: simbolul rezistorului variabil
[[../poze/00339.png]]

<p>În general, ori de câte ori vedeţi simbolul unui component reprezentat cu o săgeată diagonală prin el, acel component are o valoarea variabilă şi nu statică (fixă). Acest simbol este o convenţie electronică standard.</p>

<p>Rezistoarele variabile trebuie să posede o modalitate de ajustare, fie un arbore rotitor sau un braţ ce poate fi mişcat pentru a varia valoarea rezistenţei electrice. Mai jos avem poza unor dispoizitive numite <i>potenţiometre</i>, ce pot fi folosite ca şi rezistori variabili:</p>

#+CAPTION: exemplu de potenţiometre - rezistori variabili
[[../poze/50009.jpg]]

<p>Deoarece rezistori produc energie sub formă de căldură la trecerea curentului prin ei datorită frecării, aceştia pof fi împărţiţi în funcţie de cantitatea de căldură ce o pot susţine fără a se supra-încălzi şi distruge. Această categorie este specificată în „watti”. Majoritatea rezistorilor din aparatele electronice portabile sunt în categoria de 1/4 (0.25) watt sau mai puţin. Puterea unui rezistor este aproximativ proporţională cu mărimea sa: cu cât rezistorul este mai mare, cu atât mai mare este puterea sa. De menţionat şi faptul că rezistenţa (în ohmi) nu are deloc legătură cu mărimea!</p>

<p>Chiar dacă apariţia rezistorilor într-un circuit pare pe moment a nu avea niciun sens, aceştia sunt nişte dispozitive cu un rol extrem de folositor în cadrul circuitelor. Pentru că sunt atât de simpli şi de des utilizaţi în domeniul electricităţii şi a electronicii, vom dedica o bună bucată de vreme analizei circuitelor compuse doar din rezistenţe şi baterii.</p>

<p>În diagramele schematice, simbolul rezistorilor este adesea folosit pentru a indica un dispozitiv general dintr-un circuit electric ce transformă energia electrică primită în ceva folositor (bec, de exemplu). Orice asfel de dispozitiv non-specific într-un circuit electric poartă de obicei denumira de „sarcină”.</p>

<p>Pentru a rezuma ceea ce am spus până acum, vom analiza circuitul de mai jos, încercând să determinăm tot ceea ce putem cu ajutorul informaţiilor disponibile:</p>

#+CAPTION: circuit electric simplu
[[../poze/00044.png]]

<p>Tot ceea ce cunoaştem în acest circuit este tensiunea la bornele bariei (10 volţi) şi curentul prin circuit (2 amperi). Nu cunoaştem rezistenţa rezistorului în ohmi sau puterea disipată de acesta în watti. Folosindu-ne însă de ecuaţiile lui Ohm, putem găsi două ecuaţii ce ne pot oferi răspunsuri folosind doar cantitătile cunoascute, tensiunea, respectiv curentul:</p>

#+CAPTION: relatii matematice
[[../poze/10022.png]]

<p>Introducând cantităţile cunoscute de tensiune (E) şi curent (I) în aceste două ecuaţii, putem determina rezistenţa circuitului (R), şi puterea disipată (P):</p>

#+CAPTION: calcule matematice
[[../poze/10023.png]]

<p>Pentru circuitul de faţă, în care avem 10 volţi şi 2 amperi, rezistenţa rezistorului trebuie şa fie de 5 Ω. Dacă ar fi să proiectăm un circuit pentru a opera la aceste valori, ar trebui să folosim un rezistor cu o putere de minim 20 de watti; în caz contrar, s-ar distruge din cauza supra-încălzirii.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Dispozitivele numite <i>rezistori</i> sunt construite pentru a asigura cantităţi precise de rezistenţă electrică într-un circuit. Rezistorii sunt clasificaţi atât în funcţie de rezistenţa lor (în ohmi) cât si de capacitatea acestora de a disipa căldura (watt).</li>
	<li>Rezistenţa unui rezistor nu poate fi determinată prin mărimea fizică a acestuia, cu toate că valorile aproximative ale puterii pot fi determinate. Cu cât este mai mare un rezistor, cu atât poate dispipa mai multă putere sub formă de căldură fără a se strica.</li>
	<li>Orice dispoizitiv electric ce transformă energia într-o manieră practică poartă numele de <i>sarcină</i>. De multe ori, într-un circuit electric, se foloseşte simbolul rezistenţei pentru a desemna şi alt fel de dispozitive non-specifice, nu neapărat un rezistor propriu-zis.</li>
</ul>

<a href="#meniu">&uarr; sus</a>
</div>

<div id="footer">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>

</body>
</html>
