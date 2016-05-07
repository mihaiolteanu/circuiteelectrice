<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Ce sunt circuitele „serie” şi „paralel”</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Ce sunt circuitele „serie” şi „paralel”</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Circuitele formate dintr-o singură baterie şi o singură rezistenţă sunt foarte uşor de analizat, dar nu sunt foarte des întâlnite în practică. De obicei circuitele conţin mai mult de două componente conectate între ele</p>

<p>Există două modalităţi de bază în care putem conecta mai mult de două componente într-un circuit: <i>serie</i> şi <i>paralel</i>. Mai jos e un exemplu de circuit serie:</p>

<img src="../poze/00082.png" alt="circuit serie"/>

<p>În acest circuit avem 3 rezistori (R<sub>1</sub>,R<sub>2</sub> şi R<sub>3</sub>) conectaţi într-un singur lanţ de la un terminal al bateriei la celălalt. Caracteristica principală a unui circuit serie este existenţa unei singure căi pentru curgerea electronilor. </p>

<p>Să ne uităm acum şi la celălalt tip de circuit, cel paralel:</p>

<img src="../poze/00083.png" alt="circuit paralel"/>

<p>Şi în acest caz avem tot 3 rezistori, dar de data această există mai multe căi pentru curgerea electronilor. Există o cale de la 8 la 7, 2, 1 şi înapoi la 8. Mai exista una de la 8 la 7, 6, 3, 2, 1 şi înapoi la 8. Şi mai există o a treia cale de la 8 la 7, 6, 5, 4, 3, 2, 1 şi înapoi la 8. Fiecare cale individuală (prin R<sub>1</sub>,R<sub>2</sub> şi R<sub>3</sub>) poartă denumirea de <i>ramură</i></p>

<p>Caracteristica definitorie pentru un circuit paralel este faptul că toate componentele sunt conectate electric între aceleaşi seturi de puncte. În circuitul de mai sus, punctele 1, 2, 3 şi 4 sunt toate comune din punct de vedere electric. La fel şi punctele 8, 7, 6 şi 5. Toate rezistoarele, precum şi bateria, sunt conectate între aceste două puncte.</p>

<p>Desigur, complexitatea nu se opreşte nici la circuite serie sau paralel! Putem avea de asemenea circuite ce sunt o combinaţie dintre acestea două:</p>

<img src="../poze/00084.png" alt="circuit serie-paralel"/>

<p>În acest circuit, avem două ramuri prin care electroni pot să circule: una de la 6 la 5, 2, 1 şi înapoi la 6, iar altă ramură de la 6 la 5, 4, 3, 2, 1 şi înapoi la 6. Observaţi cum ambele drumuri trec prin R<sub>1</sub> (de la punctul 2 spre punctul 1). În această configuraţie, spunem că R<sub>1</sub> şi R<sub>2</sub> sunt paralele între ele, în timp ce R<sub>1</sub> este în serie cu combinaţia paralelă R<sub>1</sub> şi R<sub>2</sub>.</p>

<p>Idea de bază într-o conexiune serie este conectarea componentelor de la un capăt la altul într-o linie dreaptă:</p>

<img src="../poze/00085.png" alt="conexiune serie"/>

<p>Idea de bază într-o conexiune paralel, pe de altă parte, este că toate componentele sunt conectate între la aceleaşi capete. Într-un circuit pur paralel, nu există niciodată mai mult de două puncte comune, indiferent de numărul componentelor din circuit conectate. Există mai mult de o singură cale pentru deplasarea electronilor, dar o singură cădere de tensiune asupra tuturor componentelor"</p>

<img src="../poze/00086.png" alt="conexiune paralel"/>

<p>Cele două tipuri de configuraţii, serie şi paralel, prezintă proprietăţi electrice total diferite.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Într-un circuit serie, toate componentele sunt conectate unul în continuarea celuilalt, formând o singură cale pentru curgerea electronilor.</li>
	<li>Într-un circuit paralel, toate componentele sunt conectate la acelaşi capăt, formând exact un set de două puncte electric comune.</li>
	<li>O „ramură” într-un circuit paralel este o cale pentru curgerea curentului formată din cel puţin o sarcină (rezistenţă) din circuit.</li>
	<li>Legea lui Ohm: E = IR; I = E/R; R = E/I</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>