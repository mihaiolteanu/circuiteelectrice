<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Divizor de tensiune cu potenţiometru</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>05. Divizor de tensiune cu potenţiometru</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Scopul experimentului</h2>

<p>Pentru derularea acestui experiment veţi avea nevoie de două baterii de 6 V, o mină de grafit (creion mecanic), un potenţimetru liniar cu o singură înfăşurare (5 kΩ - 50 kΩ) şi un potenţiometru liniar cu înfăşurări multiple (1 kΩ - 20 kΩ).</p>

<p>Vom experimenta aşadar cu modul de realizare şi de funcţionare a unui divizor de tensiune. Vom vedea, de asemenea, modul în care se însumează tensiunile în serie. Circuitul pe care îl vom realiza, este următorul (schema plus circuite implementate practic):</p>

<img src="../poze/05106.png" alt="divizor de tensiune cu potenţiometru"/>

<img src="../poze/05107.png" alt="divizor de tensiune cu potenţiometru"/>

<img src="../poze/05108.png" alt="divizor de tensiune cu potenţiometru"/>

<img src="../poze/05109.png" alt="divizor de tensiune cu potenţiometru"/>

<h2>Desfăşurarea experimentului</h2>

<p>Începeţi experimentul cu circuitul format din mina de creion. Grafitul din care este realizată mina este un conductor prost de curent electric. Acesta va juca prin urmare rolul unui rezistor conectat la bornele bateriei de 6 V prin intermediul crocodililor. Conectaţi voltmetrul precum în figură şi atingeţi cu sonda roşie mina de grafit. Deplasaţi sonda roşie în lungul minei şi observaţi indicaţia voltmetrului. Care este poziţia sondei pentru care indicaţia voltmetrului este maximă?</p>

<p>Practic, mina de grafit se comportă precum o <i>pereche</i> de rezistori. Raportul dintre cele două rezistenţe este stabilit de poziţia sondei roşii pe lungimea acestuia:</p>

<img src="../poze/05110.png" alt="divizor de tensiune cu potenţiometru"/>

<p>Modificaţi apoi poziţia sondelor voltmetrului, astfel încât să măsuraţi tensiunea pe „rezistorul de sus” a minei, astfel:</p>

<img src="../poze/05111.png" alt="divizor de tensiune cu potenţiometru"/>

<p>Repoziţionaţi sonda neagră pe lungimea minei şi observaţi indicaţia voltmetrului. Care este poziţia pentru care tensiunea indicată de voltmetru este maximă? Există vreo diferenţă între această situaţie şi cea precedentă? De ce?</p>

<h2>Circuitul cu potenţiometru</h2>

<p>Realizaţi circuitul cu potenţiometru prezentat la începutul capitolului, în locul celui cu mină de creion. Măsuraţi tensiunea bateriei în timp ce potenţiometrul este alimentat. Notaţi-vă această valoare pe o hârtie. Măsuraţi tensiunea dintre perie şi capătul potenţiometrului conectat la borna negativă (-) a bateriei. Ajustaţi mecanismul potenţiometrului până când voltmetrul indică exact 1/3 din tensiunea totală. Pentru o baterie de 6 V, această valoare va fi de aproximativ 2 V.</p>

<p>Conectaţi apoi două baterii în serie, pentru a obţine o tensiune de 12 V pe potenţiometru. Măsuraţi tensiunea totală a bateriei şi măsuraţi apoi tensiunea între aceleaşi două puncte pe potenţiometru (între perie şi borna negativă). Împărţiţi tensiunea măsurată pe potenţiometru cu tensiunea totală măsurată pe baterie. Rezultatul ar trebui să fie 1/3, aceiaşi valoare a divizorului de tensiune ce am găsit-o şi înainte:</p>

<img src="../poze/05114.png" alt="divizor de tensiune cu potenţiometru"/>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>