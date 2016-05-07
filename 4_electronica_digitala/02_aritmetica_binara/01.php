<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Valori şi sisteme de numeraţie</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Valori şi sisteme de numeraţie</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Este foarte important să înţelegem că sistemul de numeraţie ales pentru reprezentarea valorilor (numerelor) nu are absolut niciun impact asupra rezultatului aplicării operaţiilor aritmetice de adunare, scădere, înmulţire, împărţire, rădăcini, puteri sau algoritmi. O valoare este tot timpul aceiaşi, indiferent de modul în care alegem să o simbolizăm. Fie că reprezentăm temperatura de 35<sup>o</sup> sub această formă (zecimală) sau sub forma 100011 (binară), aceasta nu schimbă valoarea reală a temperaturii ce o resimţim. Ea rămâne aceiaşi, ceea ce se modifică este modul de reprezentare a acesteia.Operaţiile esenţiale şi legăturile matematice nu sunt afectate de modificarea sistemului de numeraţie pentru reprezentarea valorilor. Această distincţie între valori şi sisteme de numeraţie este foarte importantă şi trebuie înţeleasă.</p>

<p>Această distincţie esenţială dintre cei doi termeni este asemănătoare distincţie dintre cuvinte şi obiectele asociate acestor cuvinte. O casă este tot o casă, indiferent dacă de limba pe care o folosim pentru desemnarea acesteia (română, engleză, germană, etc.). Obiectul este ceva real, palpabil, pe când cuvântul este doar un simbol pentru reprezentarea acelui obiect.</p>

<p>Acestea fiind spuse, o simplă operaţie de aritmetică sub formă binară, precum adunarea, pare ciudată pentru o persoană obişnuită să lucreze doar cu sistemul de numeraţie zecimal. În acest capitol vom analiza tehnicile folosite pentru efectuarea operaţiilor artimetice simple cu numere binare. Aceste tehnici vor fi folosite pentru proiectarea circuitelor electronice care să realizeze exact acelaşi lucru. Chiar dacă suntem obişnuiţi cu operaţiile de adunare şi scădere folosind un calculator de mână, calculatorul însăşi foloseşte numerele binare pentru obţinerea rezultatului final.</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>