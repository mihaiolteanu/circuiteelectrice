<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>DIAC-ul</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. DIAC-ul</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Şi diodele Shockley sunt dispozitive unidirecţionale, la fel ca toate diodele: acestea conduct curentul doar într-o singură direcţie. Dacă dorim în schimb functionarea bidirectională (c.a.), putem folosi două diode Shockley, conectate în paralel şi având direcţii opuse pentru a forma un nou dip de dispozitiv multijoncţiune, şi anume, DIAC-ul.</p>

#+CAPTION: DIAC-ul; circuitul echivalent şi simbol
[[../poze/03204.png]]

<p>DIACU-ul se comportă asemeni unei diode Shockley atunci când tensiunea la bornele sale este o tensiune de curent continuu. Cu o tensiuen de curent alternativ însă, comportamentul este puţin diferit. Datorită inversării periodice a direcţiei curentului alternativ, DIAC-ul nu se va agăţă într-un dintre stările pornit/oprit mai mult de o semi-perioadă. Dacă Dacă DIAC-ul va intra în starea de conducţie, acesta va continua să conducă curent atâta timp când tensiunea disponibilă este suficientă pentru susţinerea unui curent suficient de mare în acea direcţie. La inversarea polarităţii tensiunii de c.a., DIAC-ul va intra în starea de blocare datorită unui curent insuficient pentru menţinerea acestuia în starea de conducţie, necesitând o nouă străpungere înainte de a putea conduce din nou. Rezultatul este o formă de undă asemănătoarea cu cea din figura alăturată.</p>

#+CAPTION: DIAC-ul; graficul formelor de undă
[[../poze/03205.png]]

<p>DIAC-ul nu este aproape niciodată folosit singur ci combinat cu alte dispozitive multijoncţiune.</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
