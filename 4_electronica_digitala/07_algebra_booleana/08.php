<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Teoremele lui DeMorgan</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>8. Teoremele lui DeMorgan</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>DeMorgan a dezvoltat o serie de reguli importante în algebra liniară cu privire la complementul de grup. Prin complementul de grup ne referim la complenentul unui grup de termeni, şi nu doar la o singură variabilă.</p>

<p>Ţineţi minte de la capitolul legat de porţi logice, că inversând toate intrările unei porţi, inversăm şi fucţia logică esenţială a acesteia. O poartă SAU cu toate intrările inversate (o poartă SAU-negativă) se comportă precum o poartă ŞI-negat. O poartă ŞI cu toate intrările inversate (o poartă ŞI-negativă) se comportă precum o poartă SAU-negat. Teoremele lui DeMorgan exprimă aceiaşi echivalenţă în sens invers: inversând ieşirea unei porţi, funcţia rezultată este aceiaşi cu tipul opus de poartă cu intrările inversate:</p> 

#+CAPTION: teorema lui DeMorgan
[[../poze/04299.png]]

<p>O bară deasupra termenului AB se comportă precum un simbol de grup. Acest lucru este total diferit faţă de produsul AB inversat separat (A'B'). Cu alte cuvinte, (AB)' nu este egal cu A'B'. Acest lucru are un impact profund asupra modului de evaluare şi de reducere a expresiilor booleene, după cum vom vedea.</p>

<p>Teorema lui DeMorgan poate fi gândită ca şi „întreruperea” complementului (bara orizontală). Atunci când simbolul complementului este rupt în doua, operaţia de sub el se modifică din adunare în înmulţirea şi invers. După aplicarea teoremei, fiecare variabilă are propriul ei complement. Ca şi exemplu:</p>

#+CAPTION: înteruperea complementului în aplicarea teoremei lui DeMorgan
[[../poze/14045.png]]

<p>Când există mai multe complemente deasupra aceleiaşi expresii, nu putem întrerupe decât un complement pe rând. Cel mai uşor este să începem cu cea mai lungă linie orizontală (cea de sus). Ca şi exemplu, să considerăm expresia (A + (BC)')' redusă cu ajutorul teoremelor lui DeMorgan:</p>

#+CAPTION: aplicarea teoremei lui DeMorgan
[[../poze/04300.png]]

<p>Urmând consideraţiile exprimate mai sus, aplicăm următorii paşi:</p>

#+CAPTION: înteruperea complementului în aplicarea teoremei lui DeMorgan
[[../poze/14046.png]]

<p>Ca şi rezultat, circuitul original este redus la un circuit format dintr-o poartă ŞI cu trei intrări, unde intrarea A este inversată printr-o poartă NU:</p>

#+CAPTION: circuit logic simplificat cu ajutorul teoremei lui DeMorgan
[[../poze/04301.png]]

<p>Ca şi contra-exemplu, nu întrerupeţi niciodată mai mult de un complement la un singur pas:</p>

#+CAPTION: întreruperea greşită a complementului
[[../poze/14050.png]]

<p>Pe cât de tentant pare, pe atât de incorect este să scurtăm paşi simplificării prin întreruperea mai multor complemente deodată. Prin urmare, nu faceţi niciodată acest lucru!</p>

<p>Putem simplifica expresia de mai sus şi prin întreruperea complementului scurt în primă instanţă, şi apoi a complementului lung:</p>

#+CAPTION: întreruperea complementului scurt
[[../poze/14047.png]]

<p>Desigur, rezultatul final este acelaşi şi în acest caz. Paşii necesari pentru simplificare sunt însă mai numeroşi faţa de exemplul precedent (întreruperea complementului lung la primul pas). La pasul al treilea, în exemplul de mai sus, întreruperea complementului lung se realizează în două locuri simultat. Această operaţie matematică este permisă, şi nu este identică cu întreruperea a două complemente deodată! Interidicţia întreruperii mai multor complemente deodată nu interzice întreruperea complementului în mai multe locuri.</p>

<p>Poate vă întrebaţi de ce am folosit paranteze în jurul sub-expresiei B' + C', din moment ce oricum le-am îndepărtat la pasul următor. Am făcut acest lucru pentru a sublinia un aspect important dar neglijat al teoremei lui DeMorgan. Din moment ce o linie orizontală lungă funcţionează ca şi simbol de grup, variabilele incluse sub aceasta trebuie să rămână grupate. În caz contrar, ordinea operaţiilor se pierde. În exemplul anterior, nu contează dacă am fi pus sau nu aceste paranteze, dar în alte cazuri s-ar putea să conteze. Să luăm un alt exemplu, meţinând parantezele:</p>

#+CAPTION: simplificarea expresiei booleene cu ajutorul teoremei lui DeMorgan
[[../poze/14048.png]]

<p>În cazul în care nu menţinem parantezele, riscăm să obţinem un răspuns greşit:</p>

#+CAPTION: simplificarea expresiei booleene cu ajutorul teoremei lui DeMorgan
[[../poze/14049.png]]

<p>După cum se poate observa, menţinerea grupării realizate implicit prin liniile de complementare, este cruciale pentru obţinerea răspunsului corect.</p>

<h2>Simplificarea unui circuit logic - exemplu</h2>

<p>Să aplicăm acum principiile teoremelor lui DeMorgan pentru simplificarea unui circuit cu porţi logice:</p>

#+CAPTION: circuit cu porţi logice
[[../poze/04302.png]]

<h3>Expresia booleeană echivalentă</h3>

<p>Ca de obicei, primul pas al simplificării circuitului constă în găsirea expresiei booleene echivalente. Putem face acest lucru prin notarea sub-expresiilor la ieşirea fiecărei porţi, pe măsură ce intrările ne sunt cunoscute:</p>

#+CAPTION: circuit cu porţi logice; notarea sub-expresiilor la ieşirea porţilor
[[../poze/04303.png]]

<p>Apoi, notăm ieşirea primei porţi SAU-negat şi ieşirea porţii ŞI-negat. Atunci când aveam de a face cu porţi inversate pe ieşire, este mai uşor să scriem prima dată expresia fără inversarea finală. Observaţi şi de pe figură faptul că săgeata indică ieşirea porţii chiar înaintea inversării (cerculeţul de la ieşire). Expresia finală, după inversare, este complementul expresiei precedente. Astfel, ne putem asigura că nu uităm introducerea complementului în cadrul expresiei:</p>

#+CAPTION: circuit cu porţi logice; notarea sub-expresiilor la ieşirea porţilor
[[../poze/04304.png]]

<p>Şi, în sfârşit, ultimul pas constă în scrierea expresiei pentru poarta SAU-negat finală:</p>

#+CAPTION: circuit cu porţi logice; notarea sub-expresiilor la ieşirea porţilor
[[../poze/04305.png]]

<h3>Simplificare expresiei echivalente</h3>

<p>Trecem apoi la reducerea acestei expresii folosind identităţile, proprietăţile, regulile si teoremele (lui DeMorgan) algebrei booleene:</p>

#+CAPTION: siplificarea expresiei booleene echivalente
[[../poze/14051.png]]

<h3>Circuitul echivalent</h3>

<p>Circuitul echivalent al expresiei mult simplificate:</p>

#+CAPTION: circuit cu porţi logice echivalent (simplificat)
[[../poze/04306.png]]


<p class="sumar">Sumar:</p>
<ul>
	<li>Teoremele lui DeMorgan descriu echivalenţă dintre porţile cu intrări inversate şi porţi cu ieşirei inversate</li>
	<li>O poartă ŞI-negat este echivalentă cu o poartă SAU-negativă; O poartă SAU-negat este echivalentă cu o poartă ŞI-negativă</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
