<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Reguli de simplificare booleană</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Reguli de simplificare booleană</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Una dintre cele mai practice aplicaţii ale algebrei boolene constă în simplificarea circuitelor logice. Dacă transformăm funcţia logică a unui circuit sub formă booleană, şi aplicăm anumite reguli ecuaţiei rezultate, putem reduce numărul termenilor sau operaţiilor aritmetice necesare. Ecuaţia simplificată poată fi apoi transformată înapoi sub formă de circuit logic. Sub noua formă, circuitul logic realizează aceiaşi funcţie, dar cu mai puţine componente. Dacă un circuit echivalent poate fi realizat cu mai puţine componente, costurile de realizare şi de funcţionare vor scădea.</p>

<p>Identităţile şi proprietăţile exprimate în acest secţiunile precedente sunt foarte folositoare simplificării booleene. Toate regulie prezentate în această secţiune sunt specifice matematicii booleene.</p>

#+CAPTION: simplificare booleană
[[../poze/14035.png]]

<p>Această regulă poate fi demonstrată simbolic prin scoaterea termenului comun (A) în afara sumei. Aplicând apoi regulile A + 1 = 1 şi 1A = A, ajungem la rezultatul final:</p>

<div class="formula">
A + AB = A(1 + B) = A(1) = A
</div>

<p>Observaţi cum a fost aplicată regula A + 1 = 1 pentru reducerea termenului (B + 1) la 1. Când aplicăm o regulă precum „A + 1 = 1”, exprimată prin intermediul literei „A”, nu înseamnă că aceasta se aplică doar expresiilor ce conţin „A”. A-ul din această expresie exprimă faptul că aceasta se aplică oricărei variabile sau colecţii de variabile booleene.</p>

<p>De exemplu, expresia booleeană ABC + 1 se reduce tot la 1 prin intermediul aplicării identităţii A + 1 = 1. În acest caz, termenul standard „A” din definiţia identităţii reprezintă întregul termen „ABC” al expresiei de mai sus.</p>

<p>Următoarea regulă este aproximativ similară cu prima. Practic, ea este destul de diferită, iar demonstraţia este puţin mai dificilă:</p>

#+CAPTION: simplificare booleană
[[../poze/14037.png]]

<p>Pentru început, dezvoltăm termenul A, folosind regula precedentă (A + AB = A). Scoatem termenul B în afara celei de a doua sume, şi aplicăm apoi identitatea A + A' = 1. La sfârşit, nu ne mai rămne decât să aplicăm identitatea 1A = A pentru obţinerea rezultatului final:</p>

<div class="formula">
A + A'B = A + AB + A'B = A + B(A + A') = A + B(1) = A + B
</div>

<p>O altă regulă implică simplificarea expresiei unui produs de sume:</p>

#+CAPTION: simplificare booleană
[[../poze/14039.png]]

<p>Pentru a demonstra această relaţie, realizăm pentru început înmulţirea celor două sume. Aplicăm apoi identitatea AA = A, apoi regula A + AB = A primilor doi termeni. Şi, în sfârşit, aplicăm aceiaşi regulă, A + AB = A primilor doi termeni a expresiei rezultate. Rezultatul este conform expresiei de mai sus:</p>

<div class="formula">
(A + B)(A + C) = AA + AC + AB + BC = A + AC + AB + BC = A + AB + BC = A + BC
</div>

<p>Pe scurt, acestea sunt cele trei reguli ale simplificării booleene:</p>

#+CAPTION: regulile simplificării booleene
[[../poze/14041.png]]

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
