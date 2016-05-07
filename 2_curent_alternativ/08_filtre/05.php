<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Filtrul stop-bandă</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Filtrul stop-bandă</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Filtrul stop-bandă permite trecerea tuturor frecvenţelor ce se află peste sau sub un anumit domeniu/bandă de frecvenţe determinat de elementele sale coponente. Şi acest tip de filtru poate fi realizat prin conectarea unui filtru trece-jos cu un filtru trece-sus, doar că de data aceasta conectarea se realizează în paralel, nu în serie cum era cazul filtrului trece-bandă. Mai jos este prezentată diagrama bloc a filtrului:</p>

<p><img src="../poze/02261.png" alt="diagrama bloc al filtrului stop-bandă format din conectarea în paralel a unui filtru trece-jos cu un filtru trece-sus"/></p>

<h3>Filtrul stop-bandă capacitiv</h3>

<p>Folosind componente reale, circuitul stop-bandă capacitiv arată în felul următor:</p>

<p><img src="../poze/02123.png" alt="circuitul electric al filtrului stop-bandă în configuraţie T, format din conectarea în paralel a unui filtru trece-jos cu un filtru trece-sus"/></p>

<p>Filtrul trece-jos este compus din R<sub>1</sub>, R<sub>2</sub> şi C<sub>1</sub> în configuraţie „T”, iar filtrul trece-sus este compus din C<sub>2</sub>, C<sub>3</sub> şi R<sub>3</sub> de asemenea în configuraţie „T”. Împreună, cele două filtre formează filtrul stop-bandă cunoscut sub numele de „dublu T”; răspunsul acestui filtru este foarte precis atunci când sunt respectate următoarele proporţii în alegerea elementelor constituente:</p>

<p><b>R<sub>1</sub> = R<sub>2</sub> = 2(R<sub>3</sub>)</b></p>
<p><b>C<sub>2</sub> = C<sub>3</sub> = (0.5)C<sub>1</sub></b></p>

<p>Utilizând aceste raţii, frecvenţa maximă de trecere poate fi calculată asfel:</p>

<p><img src="../poze/12099.png" alt="formula matematică de calcul pentru frecvenţa de trecere a unui filtru stop-bandă în dublu T"/></p>

<p>Putem vedea şi răspunsul în frecvenţă foarte bun al acestui filtru, folosind proprţiile de mai sus, în diagrama (Bode) de mai jos:</p>

<p><img src="../poze/22032.png" alt="răspunsul în frecvenţă al filtrului stop-bandă în configuraţie T"/></p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Scopul filtrului stop-bandă este înlăturarea frecvenţelor aflate într-un anumit domeniu, permiţând doar trecerea acelor frecvenţe ce se află în afara acestuia</li>
	<li>Filtrele stop-bandă pot fi realizate prin conectarea în paralel a unui filtru trece-jos cu un filtru trece-sus. Ambele filtre sunt în configuraţie „T”, prin urmare, acest tip de filtru mai este cunoscut şi sub numele de „filtru stop-bandă în dublu-T”</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>