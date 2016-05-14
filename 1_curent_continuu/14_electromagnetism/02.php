<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Electromagnetism</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Electromagnetism</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Descoperirea relaţiei dintre magnetism şi electricitate a fost făcută, precum multe alte descoperiri ştiinţifice, aproape din întâmplare. În 1820, pe când preda un curs despre <i>posibilitatea</i> relaţiei dintre electricitate şi magnetism, fizicianul danez Hans Christian Oersted a demnostrat până la urmă experimental acest lucru în faţă întregii clase! Introducând un curent electric printr-un fir suspendat deasupra unui compas magnetic, Oersted a reuşit să producă o mişcare clară a acului compasului ca şi răspuns la trecerea curentului. Ceea ce a început ca şi ipoteză la începutul orei s-a transformat în realitate până la sfârşitul ei, iar Oersted a trebuit să-şi revizuiască notiţele pentru următoarele cursuri! Descoperirea sa accidentală a deschis drumul spre o nouă ramură a ştiinţei: electromagnetism.</p>


<p>Experimente detaliate au arătat că orientarea câmpului magnetic produs de un curent electric este tot timpul perpendiculară direcţiei de curgere. O metodă simplă de exemplificare a acestei relaţii este <i>regula mâinii stângi</i>. Această regulă spune că liniile câmpului magnetic produs de curentul electric printr-un fir sunt orientate în direcţia degetelor de la mâna stângă, atunci când aceastea sunt închise iar degetul mare este orientat în direcţia curentului:</p>

#+CAPTION: regula mâinii stângi
[[../poze/00307.png]]

<p>Liniile câmpului magnetic încercuiesc conductorul de curent şi nu au un pol „nord” sau „sud” bine definit. În acest caz însă, forţa câpului este foarte slabă, pentru valori normale ale curentului, fiind capabilă să deplaseze acul unui compas de exemplu, dar nu mai mult de atât. Pentru a crea un câmp magnetic mai puternic (forţă şi flux mai mari) cu aceeiaşi valoare a curentului electric, putem forma o serie de bucle cu ajutorul firului; în jurul acesteia, câmpurile magnetice se vor uni pentru a forma un câmp magnetic mai puternic cu o polaritate nord-sud bine definită.</p>

#+CAPTION: formarea buclei de curent pentru creşterea câmpului magnetic
[[../poze/00308.png]]

<p>Valoarea forţei magnetice generate de o asfel de buclă este proporţională cu valoarea curentului prin fir înmulţită cu numărul efectiv de bucle formate. Această forţă este denumită <i>forţă magnetomotoare</i> (mmf) şi este similară forţei electromotoare (E) dintr-un circuit electric.</p>

<p>Un <i>electromagnet</i> este un conductor electric construit special pentru generarea câmpului magnetic la trecerea curentului prin el. Deşi toţi conductori produc câmp magnetic la trecerea curentului prin ei, un electromagnet este construit special pentru a maximiza acest efect şi utilizarea lui pentru un anumit scop. Electromagneţii sunt folosiţi în industrie, cercetare, aparatură medicală şi bunuri de larg consum.</p>

<p>Probabil că cel mai bun exemplu de utilizare al electromagneţilor este <i>motorul electric</i>. Un alt exemplu este <i>releul</i>, un întrerupător controlat pe cale electrică. Dacă mecanismul unui întrerupător este construit asfel încât să poată fi acţionat (închis şi deschis) prin aplicarea unui câmp magnetic, iar electromagnetul este plasat în apropierea acestuia pentru a produce câmpul necesar, este posibilă închiderea şi deschiderea întrerupătorului plin aplicarea unui curent prin acesta. În principiu, acesta este un dispozitiv ce controlează electricitatea cu ajutorul electricităţii.</p>

#+CAPTION: închiderea contactului la trecerea curentului prin electromagnet
[[../poze/00394.png]]

<p>Întrerupătoarele pot fi construite pentru a acţiona multiple contacte, sau pentru a funcţiona „invers” (<i>deschiderea</i> contactelor la trecerea curentului prin electromagnet şi <i>inchiderea</i> lor la încetarea câmpului magnetic).</p>

#+CAPTION: întrerupător cu contacte multiple şi contact normal închis
[[../poze/00395.png]]

<p class="sumar">Sumar:</p>
<ul>
	<li>La trecerea curentului printr-un conductor, se va produce un câmp magnetic în jurul acestuia</li>
	<li><i>Regula mâinii stângi</i> spune că liniile câmpului magnetic produse de un conductor traversat de curent electric vor fi orientate în direcţia degetelor închise ale mâinii stângi atunci când degetul mare indică direcţia deplasării electronilor.</li>
	<li>Forţa câmpului magnetic produs de un conductor traversat de curent electric creşte atunci când construim firul sub forma unei înfăşurări. În acest caz, câmpulu magnetic se va orienta de-a lungul lungimii axei înfăşurării</li>
	<li>Forţă produsă de câmpul magnetic al unui electromagnet (denumită <i>forţă magnetomotoare</i>, sau mmf) este proporţională cu produsul dintre curentul ce parcurge electromagnetul şi numărul de înfăşurări complete formate de conductor</li>	
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
