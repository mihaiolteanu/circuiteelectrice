<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Tahogeneratorul</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Tahogeneratorul</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Un generator electromecanic este un dispozitiv capabil să genereze putere electrică folosind energie mecanică, de obicei prin intermediul unui ax. Atunci când nu sunt conectate la o sarcină (rezistenţă), generatoarele vor produce o tensiune electrică aproximativ proporţională cu viteza axului. Cu un design şi construcţie precisă, aceste dispizitive pot fi construite asfel încât să genereze tensiuni exacte pentru anumite viteze ale axului; din această cauză pot fi folosite ca şi instrumente de măsură în cadrul echipamentelor mecanice. Un generator special construit pentru această utilizare se numeşte <i>tahometru</i> sau <i>tahogenerator</i>.</p>

#+CAPTION: tahogenerator
[[../poze/00191.png]]

<p>Măsurând tensiunea produsă de un tahogenerator putem determina vieteza de rotaţia a dispozitivului conectat la bornele acestuia.</p>

<p>Tahogeneratoarele pot fi folosite şi pentru a indica direcţie de rotaţie prin intermediul polarităţii („+” sau „-”) tensiunii de ieşire. În sisteme de măsură şi control unde direcţie de rotaţie este importantă, tahogeneratorul este o metodă uşoară de determinare a acestui lucru. Tehogeneratoarele sunt frecvent utulizate pentru determinarea vitezei motoarelor electrice</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
