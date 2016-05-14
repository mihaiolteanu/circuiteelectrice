<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Grupări de biţi</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>6. Grupări de biţi</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>La reprezentarea numerelor binare cu ajutorul circuitelor electronice, suntem nevoiţi să utilizăm un număr suficient de circuite cu tranzistori pentru reprezentarea tuturor biţilor. Cu alte cuvinte, la proiectarea unui circuit digital, trebuie să ne decidem câţi biţi vom utilizat (maxim) pentru reprezentarea valorilor, din moment ce fiecare bit necesită un circuit pornit/oprit separat.</p>

#+CAPTION: abac cu 10 linii; analogie
[[../poze/04315.png]]

<p>Acest principiu este analog proiectării unui abac pentru reprezentarea digitală a numerelor zecimale: trebuie mai întâi să ne decidem câte cifre dorim să reprezentăm cu acest dispozitiv primitiv. Fiecare cifră necesită o nouă linie cu mărgele.</p>

<div class="clear"></div>

<p>Un abac cu 10 linii poate reprezenta un număr zecimal cu 10 cifre, sau o valoare maximă de 9.999.999.999. Dacă am dori reprezentarea unui număr mai mare decât atât, va trebui să ma adăugăm una sau mai multe linii.</p>

<p>Orice circuit digital se proiectează pe un anumită număr de biţi: numărul maxim de biţi alocaţi pentru reprezentarea valorilor numerice. Calculatoarele digitale iniţiale erau proiectate pe patru sau pe opt biţi. Sistemele moderne sunt proiectate pe 32 sau pe 64 de biţi.</p>

<p>Pentru a vorbi mai uşor de numărul de biţi dintr-o grupare, cele mai uzuale au primit şi un nume, astfel:</p>

<div class="formula">
Bit: unitatea fundamentală a notaţiei binare; echivalentă cu o cifră zecimală
Crumb, Tydbit sau Tayste: 2 biţi
Nibble sau Nybble: 4 biţi
Nickle: 5 biţi
Byte: 8 biţi
Deckle: 10 biţi
Playte: 16 biţi
Dynner: 32 biţi
Word: (în funcţie de sistem)
</div>

<p>Cel mai ambiguu termen este word-ul. Pentru un sistem pe 32 de biţi, un word înseamnă 32 de biţi. Dacă sistemul utilizează 16 biţi, atunci word-ul este de 16 biţi. Termenul playte şi dynner se referă tot timpul la 16, respectiv 32 de biţi, indiferent de contextul în care sunt folosiţi.</p>

<p>Tot în funcţie de sistem sunt folosiţi şi termenii de „double word” sau „longword” (ambii termenii desemnând o lungime dublă faţă de lungimea standard), „half-word” (jumătatea lungimii) sau quar (de patru ori lungimea standard).</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
