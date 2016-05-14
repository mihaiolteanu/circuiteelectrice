<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Inductanţa mutuală. Transformatorul</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>6. Inductanţa mutuală. Transformatorul</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Dacă două înfăşurări străbătute de curent electric sunt aduse una în vecinătatea celeilalte, asfel încât câmpul magnetic al uneia să se cupleze cu cealaltă, în ce-a de a doua înfăşurare se va generea o tensiune electrică. Acest efect se numeşte <i>inductanţă mutuală</i>: când aplicarea unei tensiuni asupra unei înfăşurări induce o tensiune în cealaltă.</p>

<p>Un dispozitiv special conceput pentru producerea efectului de inductanţă mutuală între două sau mai multe înfăşurări este <i>transformatorul</i>.</p>

<p>Deoarece tensiunea indusă pe cale magnetică poate fi realizată doar atunci când valoarea fluxului câmpului magnetic este <i>variabil</i> faţă de fir, cuplajul magnetic (prin urmare şi inductanţă mutuală) dintre două înfăşurări poate lua naştere doar în cazul curentului alternativ. Singura aplicaţie în curent continuu pentru inductanţa mutuală este atunci când există o cale de a pori şi opri puterea prin înfăşurare cu ajutorul unui întrerupător; se crează în acest caz o tensiune de curent continuu <i>pulsatoare</i>, iar tensiunea indusă va atinge valori maxime la fiecare puls.</p>

<p>O proprietate extrem de utilă a transformatorului este capacitatea de transformare a valorilor tensiunii şi curentului după o regulă simplă, determinată de raportul dintre numărul spirelor celor două înfăşurări. Dacă o înfăşurare a transformatorului este alimentată în curent alternativ, valoarea tensiunii indusă în cealaltă înfăşurare, nealimentată, va fi egală cu valoarea tensiunii de alimentare înmulţită cu valoarea raportului dintre numărul spirelor înfăşurărilor (primară şi secundară). De asemenea, curentul prin înfăşurarea secundară se va comporta exact invers: dacă tensiunea de alimentare (din înfăşurarea primară) creşte, curentul va deşcreşte cu aceeiaşi rată. Acest comportament al transformatorului este analog unui angrenaj mecanic:</p>

#+CAPTION: analogie între reducerea cuplului folosind roţi dinţate şi transformatorul coborâtor de tensiune
[[../poze/00319.png]]

<p>Un transformator conceput pentru obţineare unei tensiune mai mari la bornele înfăşurări secundare (înfăşurare nealimentată) faţă de cea primară (înfăsurare alimentată) se numeşte transformator ridicător de tensiune, iar unul construit pentru a realiza exact opusul se numeşte transformator coborâtor de tensiune. Valoarea curentului prin fiecare înfăşurare este exact inversă faţă de situaţia precedentă, cea a tensiunii.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Inductanţa mutuală reprezintă situaţia în care câmpul magnetic generat de o înfăşurare, induce tensiune electrică într-o înfăşurare învecinată</li>
	<li>Un <i>transformator</i> este un dispozitiv special conceput şi format din două sau mai multe înfăşurări, una în apropierea celeilalte, ce foloseşte principiul inductanţei mutuale dintre înfăşurări</li>
	<li>Transformatoarele pot fi folosite doar în cazul tensiunilor variabile, nu şi în cazul celor constante. Din această cauză, ele sunt dispozitive de curent alternativ şi nu de curent continuu</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
