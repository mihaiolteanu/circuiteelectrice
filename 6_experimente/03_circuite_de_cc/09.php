<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Termoelectricitate</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>09. Termoelectricitate</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Scopul experimentului</h2>

<p>Vom vedea pe parcursul acestui experiment modul de funcţionare şi utilizare a unei termocuple. Veţi avea nevoie de un conductor de cupru şi unul de fier (eventual de aluminiu), ambele dezizolate, o lumânare şi bucăţi de gheaţă. Circuitul electric pe care îl vom realiza este cel de jos:</p>

#+CAPTION: realizarea unei termocuple
[[../poze/05153.png]]

#+CAPTION: realizarea unei termocuple
[[../poze/05154.png]]

<h2>Realizarea termocuplei</h2>

<p>Răsuciţi un capăt al conductorului de fier cu un capăt al conductorului de cupru. Conectaţi celelalte capete rămase libere la o bornă de reglete. Setaţi voltmetrul pe cea mai sensibilă scară şi conectaţi-l la borna de regletă, conform figurii de mai sus. Indicaţia voltmetrului ar trebui să fie aproximativ 0 V.</p>

<p>Ceea ce am construit mai sus poartă numele de <i>termocuplă</i>: un dispozitiv folosit pentru generarea unei căderi de tensiune mici. Tensiunea produsă este proporţională cu diferenţa de temperatură dintre punctul de contact al celor doi conductori şi punctul de contact al voltmetrului cu cele două capete rămase libere. Dacă temperatura contactului este egală cu temperatură capetelor libere, tensiunea produsă va fi 0 V. Indicaţia voltmetrului indică exact acest lucru.</p>

<h2>Generarea tensiunii cu ajutorul termocuplei create</h2>

<p>Aprindeţi o lumânare şi puneţi contactul (vârful) termocuplei în flacără. Observaţi indicaţia voltmetrului. Îndepărtaţi contactul termocuplei din flacără şi lăsaţi-l să se răcească până când indicaţia voltmetrului se apropie din nou de zero.</p>

#+CAPTION: generarea tensiunii cu o termocuplă
[[../poze/05156.png]]

<p>Atingeti apoi contactul termocuplei cu un cub de gheaţă şi observaţi indicaţia voltmetrului. Ce puteţi spune despre valoare tensiunii generate, este mai mică sau mai mare decât în cazul precedent? Care este diferenţa dintre polaritatea tensinilor generate în cele două cazuri?</p>

<p>După ce aţi îndepărtat cubul de gheaţă, încălziţi contactul termocuplei ţinându-l între degete. Va dura puţin până când temperatura acestuia va atinge temperatura corpului vostru. Aveţi răbdare însă şi observaţi îndicaţia voltmetrului.</p>

<p>Termocuplele sunt folosite pe post de dispozitive de măsurare a temperaturii. Ralaţia matematică dintre diferenţa temperaturii şi tensiunea rezultată este destul de liniară. Prin măsurarea tensiunii, putem determina temperatura la punctul de contact.</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
