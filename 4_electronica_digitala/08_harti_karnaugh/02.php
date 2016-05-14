<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Diagrame Venn</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Diagrame Venn</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>Matematicienii utilizează diagramele Venn pentru reprezentarea relaţiilor logice dintre mulţimi (colecţii de obiecte). Ne vom folosi de diagramele Venn pentru a face tranziţia dintre algebra booleană şi hărţile Karnaugh.</p>

<h2>Mulţimi şi submulţimi</h2>

<p>O mulţime este o colecţie de obiecte dintr-un univers dat. Elementele mulţimii sunt obiecte ce aparţin mulţimii. Elementele unei mulţimi au de obicei ceva în comun, deşi acest lucru nu este neapărat necesar. Din universul numerelor reale, de exemplu, mulţimea tuturor numerelor întregi pozitive {1, 2, 3 ...}, este o mulţime. Mulţimea {3, 4, 5} este o mulţime mai mică, sau o submulţime a mulţimii numerelor întregi pozitive. Un alt exemplu este mulţimea tuturor băieţilor dintr-o clasă (reprezentând universul discuţiei). Vă puteţi gândi şi la alte mulţimi?</p>

<h2>Diagrame Venn - exemple</h2>

<p>Diagrama Venn din figura de mai jos stânga, reprezintă mulţimea A (în interiorul cercului) din universul U (aria dreptunghiulară). Dacă tot ceea ce se află în interiorul cercului este A, atunci tot ceea ce se află în exteriorul cercului nu este A (A-negat). Prin urmare, in figura de mai jos centru, denumit aria dreptunghiulară din afara cercului A cu A-negat în loc de U. B şi B-negat se reprezintă similar (figura de mai jos dreapta).</p>

#+CAPTION: diagrame Venn
[[../poze/14073.png]]

<p>Ce se întâmplă dacă şi A şi B se află în acelaşi univers? Există patru posibilităţi:</p>

#+CAPTION: diagrame Venn
[[../poze/14074.png]]

<p>Să reluăm fiecare din cele patru posibilităţi în parte:</p>

#+CAPTION: diagrame Venn
[[../poze/14075.png]]

<p>Primul exemplu indică faptul că mulţimile A şi B nu au niciun element comun, conform diagramei Venn. Regiunile celor două mulţimi nu se suprapun în niciun punc. De exemplu, să presupunem că mulţimile A şi B ar conţine următoarele elemente: A = {1, 2, 3, 4}, B = {5, 6, 7, 8}. Niciunul dintre elementele mulţimii A nu este inclus în mulţimea B şi invers. Prin urmare, cele două cercuri nu se suprapun.</p>

#+CAPTION: diagrame Venn
[[../poze/14076.png]]

<p>În cel de al doilea exemplu, mulţimea A este inclusă total în mulţimea B. Cum putem explica această situaţie? Să presupunem că mulţimile A şi B conţin următoarele elemente: A = {1, 2}, B = {1, 2, 3, 4, 5, 6, 7, 8}. Toate elementele din A se regăsesc şi în B. Prin urmare, mulţimea A este o submulţime a mulţimii B, iar cercul A este inclus în cercul B.</p>

#+CAPTION: diagrame Venn
[[../poze/14077.png]]

<p>În cel de al treilea caz, mulţimile A şi B se suprapun perfect. Din diagrama Venn, putem deduce că cele două mulţimi conţin exact aceleaşi elemente. Să presupunem că mulţimile arată astfel: A = {1, 2, 3, 4} şi B = {1, 2, 3, 4}. Prin urmare A = B. Cele două mulţimi sunt identic egale deoarece conţin exact aceleaşi elemente.</p>

#+CAPTION: diagrame Venn
[[../poze/14078.png]]

<p>În ultimul caz, cele două mulţimi se suprapun, dar nu complet ci doar parţial. Acest lucru ne spune că există elemente comune celor două mulţimi, dar fiecare mulţime are si elemente unice. Să presupunem că cele două mulţimi ar arăta astfel: A = {1, 2, 3, 4} şi B = {3, 4, 5, 6}. Ambele mulţimi conţin elementele 3 şi 4. Acesta este şi motivul pentru care cele două cercuri sunt suprapuse.</p>


</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
