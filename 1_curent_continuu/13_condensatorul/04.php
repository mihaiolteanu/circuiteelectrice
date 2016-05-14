<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Conectarea condensatorilor în serie şi paralel</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Conectarea condensatorilor în serie şi paralel</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<h3>Conectarea în serie</h3>
<p>La conectarea condensatorilor în serie, capacitatea totală este mai mică decât capcitatea oricărui condensator individual. Dacă doi sau mai mulţi condensatori sunt conectaţi în serie, efectul rezultat este cel al unui condensator (echivalent) avât distanţa dintre armături egală cu suma distanţei dintre armături ale tuturor condensatorilor individuali. După cum am văzut în secţiunea precedentă, creşterea distanţei dintre armături, toţi ceilalţi factorii find egali, rezultă în scăderea capacităţii.</p>

#+CAPTION: conectarea condensatorilor în serie
[[../poze/00298.png]]

<p>Formula pentru calculul capacităţii serie totale este asemănătoare celei pentru calcularea rezistenţei echivalente la conectarea rezistorilor în paralel.</p>

#+CAPTION: formula capacităţii serie
[[../poze/10231.png]]

<h3>Conectarea în paralel</h3>
<p>Atunci când conectarea condensatorilor se realizează în paralel, capacitatea echivalentă totală este suma capacităţilor individuale ale condensatorilor. Dacă doi sau mai mulţi condensatori sunt conectaţi în paralel, efectul rezultat este cel al unui singur condensator (echivalent) având aria armăturilor egală cu suma ariilor armăturilor tuturor condesatorilor. După cum am văzut în secţiunea precedentă, creşterea ariei armăturilor, toţi ceilalţi factori rămânând neschimbaţi, duce la o creştere a capacităţii.</p>

#+CAPTION: conectarea condensatorilor în paralel
[[../poze/00299.png]]

<p>Formula pentru calculul capacităţii paralel totale este asemănătoare celei pentru calcularea rezistenţei echivalente la conectarea rezistorilor în serie:</p>

#+CAPTION: formula capacităţii paralel
[[../poze/10232.png]]

<p class="sumar">Sumar:</p>
<ul>
	<li>Capacităţile condensatorilor se reduc la conectarea în serie</li>
	<li>Capacităţile condensatorilor se adună la conectarea în paralel</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
