<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Construirea unui transformator</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>02. Construirea unui transformator</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Scopul experimentului</h2>

<p>Construirea unui transformator electric este o ocazie foarte bună de a studia efectele electromagnetismului şi inducţia electromagnetică. Acest lucru îl vom realiza în cele ce urmează.</p>

<h2>Materiale necesare</h2>

<p>Veţi avea nevoie de bare plate din oţel, diferite şuruburi, piuliţie şi şaibe, conductor de cupru (pentru magnet/transformator) de 0,32 mm şi o sursă de alimentare în curent alternativ de mică putere. Conductorul de cupru pentru magnet/transformator este un conductor subţire izolat prin lăcuire. Puteţi folosi aproape orice diametre, dar cel de 0,32 mm este recomandat pentru simplul fapt că putem realiza multe înfăşurări într-un spaţiu relativ îngust. Transformatorul final va arăta aproximativ astfel:</p>

<img src="../poze/05005.png" alt="construirea unui transformator"/>



<h2>Realizarea transformatorului</h2>

<p>Înfăşuraţi două bare de oţel de lungimi egale cu un strat subţire de bandă izolatoare. Aplicaţi câteva sute de înfăşurări de conductor de magnet în jurul acestor bare. Puteţi realiza aceste înfăşurări în număr egal sau inegal, în funcţie de transformatorul pe care doriţi să-l realizaţi. Este mai bine să începeţi cu un număr egal de înfăşurări. Puteţi experimenta apoi cu un număr inegal de înfăsurări.</p>

<p>Conectaţi aceste bare sub forma unui dreptunghi cu ajutorul altor două bare de oţel de lungimi mai mici. Folosiţi şuruburi şi piuliţe pentru prinderea lor. Este indicat să găuriţi barele înainte de aplicarea înfăşurărilor în jurul acestora.</p>

<p>Verificaţi dacă vreuna din înfăşurări este scurt-circuitată după ce aţi terminat de înfăşurările. Indicaţia unui ohmmetru conectat între capetele înfăşurărilor şi bara de fier ar trebui să fie înfinită (circuit deschis). Verificaţi de asemenea continuitate înfăşurărilor, prin conectarea ohmmetrului între capetele acestora, pentru a vă asigura că nu există întreruperi. Dacă oricare dintre aceste măsurători indică o problemă, va trebui să refaceţi înfăsurarea respectivă.</p>

<p>Alimentaţi transformatorul astfel realizat cu o tensiune joasă (conform sursei de tensiune realizate în secţiunea precedentă). <i>Nu</i> încercaţi alimentarea transformatorului direct de la priza de 220 V, deoarece înfăşurările realizate mai sus nu pot suporta o asemenea tensiune.</p>

<p>Măsuraţi tensiunea de ieşire a transformatorului (tensiunea secundarului) cu un voltmetru de curent alternativ. Conectaţi o sarcină (motor, bec, etc.) la înfăşurarea secundară şi remasuraţi tensiunea. Observaţi variaţia (descreşterea) tensiunii înfăşurării secundare pe măsură ce curentul creşte.</p>

<p>Desfaceţi sau îndepărtăti unul dintre şuruburi. Veţi creşte astfel reluctanţa (analog rezistenţei) circuitului magnetic ce face legătura între cele două înfăşurări. Observaţi efectul acestui lucru asupra tensiunii de ieşire la mers în gol (fără sarcină) şi sub sarcină.</p>

<p>În cazul în care aţi realizat transformatorul cu înfăşurări inegale, încercaţi să-l alimentaţi, pe rând, din ambele părţi (transformator coborâtor, respectic ridicător de tensiune) şi conectaţi diferite sarcini de ca pe înfăşurărea secundară.</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>