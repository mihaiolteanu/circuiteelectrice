<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Conectarea bateriilor în paralel</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>02. Conectarea bateriilor în paralel</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Scopul experimentului</h2>

<p>Vom realiza circuitele de mai jos (schema teoretică şi circuitul practic), şi vom observa efectul conectării surselor de putere în paralel asupra tensiunii şi a curentului din circuit:</p>

<img src="../poze/05076.png" alt="conectarea bateriilor în paralel"/>

<img src="../poze/05077.png" alt="conectarea bateriilor în paralel"/>

<h2>Derularea experimentului</h2>

<p>Conectaţi o baterie de 6 V la un bec de 12 V, cu o putere de 25 sau 50 W. Becul va lumina relativ slab în acest caz. Utilizaţi voltmetrul pentru determinarea căderii de tensiune la bornele becului, astfel:</p>

<img src="../poze/05078.png" alt="conectarea bateriilor în paralel"/>

<p>Indicaţia voltmetrului ar trebui să fie mai mică decât tensiunea normală a bateriei. Dacă veţi folosi voltmetrul pentru citirea căderii de tensiune direct la bornele bateriei, veţi observa că şi în acest caz tensiunea este mai mică. De ce se întâplă acest lucru? Valoarea mare a curentului absorbit de bec (putere înaltă) duce la scăderea tensiunii la bornele bateriei. Acest lucru se datorează căderii de tensiune dezvoltate la bornele rezistenţei interne a bateriei.</p>

<p>Putem rezolva această problemă prin conectarea bateriilor în paralel. Astfel, fiecare baterie va fi nevoită să susţină doar o fracţiune din curentul total necesar becului. Conexiunile paralel presupun conectarea tuturor terminalelor pozitive (+) ale bateriilor între ele (terminale electric comune). Acelaşi lucru este valabil şi în cazul terminalelor negative (-).</p>

<p>Adăugaţi pe rând bateriile în paralel, observând tensiunea becului cu fiecare nouă baterie:</p>

<img src="../poze/05079.png" alt="conectarea bateriilor în paralel"/>

<p>De asemenea, intensitatea luminii becului ar trebui să crească cu fiecare nouă baterie adăugată în paralel. Încercaţi să măsuraţi curentul unei baterii. Comparaţi această valoare cu valoarea curentului total (prin bec). Cea mai uşoară metodă de măsurare a curentului unei singure baterii, este următoarea:</p>

<img src="../poze/05080.png" alt="conectarea bateriilor în paralel"/>

<p>Întrerupem circuitul pentru o singură baterie. Introducem apoi ampermetrul în locul întreruperii, astfel încât circuitul este acum închis, şi putem măsura curentul prin bateria respectivă. Măsurarea curentului total este similară: deschidem circuitul într-un loc prin care circulă curentul total şi conectăm ampermatrul între cei doi conductori liberi:</p>

<img src="../poze/05081.png" alt="conectarea bateriilor în paralel"/>

<p>Observaţi diferenţa dintre curentul unei singure baterii şi curentul total. Pentru a obţinea cea mai mare iluminare, avem nevoie însă de o conexiune serie-paralel. Două baterii de 6 V conectate în serie vor genera o tensiune de 12 V. Conectăm apoi două astfel de combinaţii serie în parale. O astfel de combinaţie poate susţine mult mai uşor valoarea curentului necesară alimentării becului. Tensiunea pe fiecare baterie va fi în acest caz mult mai aproape de 6 V:</p>

<img src="../poze/05082.png" alt="conectarea bateriilor în paralel"/>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>