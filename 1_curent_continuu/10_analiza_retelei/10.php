<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Teorema lui Millman revizuită</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>10. Teorema lui Millman revizuită</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Revenim acum asupra teoremei lui Millman pentru a elucida forma „ciudată” a ecuaţiei şi provenienţa acesteia:</p>

#+CAPTION: formulă
[[../poze/10188.png]]

<p>Numitorul ecuaţiei seamănă cu numitorul ecuaţiei pentru calculul rezistenţei paralele, iar termenii E/R ai numărătorului reprezintă valori ale curentului (I=E/R).</p>

<p>Pentru înţelegearea acestei ecuaţii folosim echivalenţa Thevenin-Norton discutată în secţiunea precedentă. Ecuaţia Millman consideră că fiecare ramură reprezintă defapt un circuit Thevenin echivalent; fiecare ramură este apoi transformată într-un circuit Norton echivalent.</p>

#+CAPTION: circuit electric
[[../poze/00223.png]]

<p>În circuitul de mai sus, bateria B<sub>1</sub> şi rezistorul R<sub>1</sub> sunt văzute ca şi o sursă Thevenin potrivite pentru transformarea într-o sursă Norton de 7 A (28 V / 4 Ω) în paralel cu un rezistor de 4 Ω. Ramura din dreapta se transformă într-o sursă de curent de 7 A (7 V / 1 Ω) şi un rezistor de 1 Ω conectat în paralel. Ramura din centru, neconţinând nicio sursă de tensiune, se transformă într-o sursă de curent Norton de 0 A în paralel cu un rezistor de 2 Ω:</p>

#+CAPTION: circuit electric
[[../poze/00246.png]]

<p>Din moment ce valorile sursele de curent sunt aditive algebric, curentul total prin circuit este de 7 + 0 + 7, adică 14 A. Această adunare a curenţilor surselor Norton este reprezentată la numărătorul ecuaţiei Millman:</p>

#+CAPTION: ecuaţia teoremei lui Millman
[[../poze/10200.png]]

<p>Toate rezistenţele Norton sunt conectate în paralel. Aceast lucru este reprezentat în numitorul ecuaţiei lui Millman:</p>

#+CAPTION: ecuaţia teoremei lui Millman
[[../poze/10201.png]]

<p>În cazul de faţă, rezistenţa totală este de 517.43 miliohmi (571.43 mΩ). Circuitul echivalent se poate acum redesena şi conţine doar o sursă (de curent) Norton şi o singură rezistenţă Norton:</p>

#+CAPTION: circuit electric
[[../poze/00247.png]]

<p>Folosim legea lui Ohm pentru aflarea căderii de tensiune pe aceste două componente (E=IR):</p>

#+CAPTION: formulă
[[../poze/10202.png]]
#+CAPTION: circuit electric
[[../poze/00248.png]]

<p>Pe scurt, ştim despre acest circuit că valoarea totală a curentul este dată de suma tuturor tensiunilor pe ramuri împărţite la curenţi lor respectivi. Ştim de asemenea că rezistenţă totală este inversul sumei inversului tuturor rezistenţelor ramurilor. Şi, trebuie să luăm în considerare faptul că putem afla tensiunea totală pe toate ramurile prin înmulţirea curentului total cu rezistenţa totală (E=IR). Tot ce trebuie să facem acum este să punem împreună cele două ecuaţii pentru curentul şi rezistenţa totală, mai exact, putem afla tensiunea totală prin înmulţirea lor:</p>

#+CAPTION: formulă
[[../poze/10203.png]]

<p>În acest moment putem realiza faptul că ecuaţia lui Millman nu este nimic altceva decât o transformare Thevenin-Norton împreună cu formula rezistenţei paralele pentru determinarea căderii de tensiune pe toate ramurile circuitului.</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
