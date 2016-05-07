<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Decibelul</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Decibelul</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>În cea mai simplă formă, factorul de amplificare al amplificatorului este un raport dintre semnalul de ieşire şi cel de intrare, fiind o mărime fără unitate de măsură. Totuşi, există o unitate de măsură pentru reprezentarea amplificării, şi anume, <i>bel</i>-ul.</p>

<p>Ca şi unitate, bel-ul a fost folosit pentru reprezentarea pierderilor de putere din liniile telefonice, şi nu pentru reprezentarea amplificărilor. Unitatea poartă numele inventatorului scoţian, Alexander Graham Bell, a cărui muncă fundamentală a dus la dezvoltatea sistemelor telefonice. Sub forma sa originală, bel-ul reprezenta cantitatea de semnal pierdută datorită rezistenţei pe o anumită lungime de conductor electric. Acum, acesta este definit ca logaritm din baza zece a raportului dintre semnalul de ieşire şi cel de intrare:</p>

<p><img src="../poze/13028.png" alt="formula de calcul pentru bel"/></p>

<p>Deoarece bel-ul este o unitate logaritmică, acesta este ne-liniar. Să considerăm următorul tabel, ca şi o comparaţie între pierderile de putere exprimate sub formă de raport şi aceleaşi pierderi exprimate sub formă de bel:</p>

<p><img src="../poze/13029.png" alt="tabel; comparaţia între pierderile de putere exprimate sub formă de raport şi aceleaşi pierderi de putere exprimate în beli"/></p>

<p>Mai târziu a fost realizat faptul că bel-ul este o unitate de măsură prea mare pentru a fi utilizată direct; prin urmare, a îceput să fie folosit tot mai des prefixul metric <i>deci</i> (1/10, sau 10<sup>-1</sup>), şi anume <i>deci</i>bel-ul, sau dB. Astăzi, expresia „dB” este atât de răspândită încât majoritatea nu relaizează că aceasta este o combinaţie dintre „deci” şi „bel”, sau că măcar există o unitate de măsură numită „bel”. Următorul tabel este asemănător celui precedent, dar de data aceasta valorile sunt exprimate în dB:</p>

<p><img src="../poze/13030.png" alt="tabel; comparaţia între pierderile de putere exprimate sub formă de raport şi aceleaşi pierderi de putere exprimate în decibeli"/></p>

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