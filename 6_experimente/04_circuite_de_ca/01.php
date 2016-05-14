<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Transformator -- sursă de putere</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>01. Transformator -- sursă de putere</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Scopul experimentului</h2>

<p>Comportamentul unui transformator coborâtor de tensiune; scopul şi utilizarea transformatoarelor cu priză mediană; conectarea corectă şi sigură a cablurilor de alimentare.</p>

<h2>Materiale necesare</h2>

<p>Veţi avea nevoie de un transformator cu priză mediană pe înfăşurarea secundară (220 V ca - 12 V ca), o regletă de borne cu cel puţin trei terminale, un prelungitor, un întrerupător. Opţional, o carcasă şi o siguranţă fuzibilă.</p>

<p>Transformatorul poate fi obţinut dintr-un radio vechi sau cumpărat ca atare. Dacă vă decideţi să folosiţi şi siguranţa fuzibilă, alegeţi una lentă. Transformatoarele necesită de obicei curenţi mari la conectarea iniţială la o sursă de curent alternativ. Aceşti curenţi tranzitorii vor topi o siguranţa rapidă. Determinaţi amperajul siguranţei fuzibile prin împărţirea puterii transformatorului (VA) la 220 V: cu alte cuvinte, calculaţi curentul maxim permis în înfăsurarea primară şi alegeţi o siguranţă fuzibilă corespunzătoare.</p>

<p>Circuitul final va arăta astfel:</p>

#+CAPTION: sursă de tensiune joasă de curent alternativ
[[../poze/05001.png]]

#+CAPTION: sursă de tensiune joasă de curent alternativ
[[../poze/05002.png]]

<h2>Realizarea sursei de tensiune joasă</h2>

<p>Atenţie, realizarea acestui experiment implică utilizarea unor tensiuni periculoase ! Asiguraţi-vă că toţi conductorii de tensiune înaltă (220 V) sunt izolaţi corespunzător. Nu trebuie să aveţi sub nicio formă conductori dezizolaţi pe partea cu primarul transformatorului. Lipiţi toate conexiunile pentru o siguranţă sporita. Folosiţi bandă izolatoare adevărată (<i>nu</i> scotch, bandă de împachetat sau orice altă variantă) pentru izolarea conexiunilor lipite.</p>

<p>Dacă doriţi introducerea întregului ansamblu într-o carcasă metalică, folosiţi o fişă cu trei contacte (alimentare plus împământare). Conectaţi împământarea direct pe carcasa metalică pentru o siguranţă sporită.</p>

<p>Înainte de introducerea fişei (ştecărului) în priză, verificaţi pentru siguranţă aparatul cu un ohmmetru. Cu întrerupătorul închis, măsuraţi rezistenţa dintre un contact al fişei şi carcasa metalică. Ar trebui să obţineţi o rezistenţă infinită (maximă). Dacă aparatul de măsură înregistrează continuitate (o rezistenţă oarecare, dar nu infinită), atunci există un scurt-circuit între unul dintre conductoarele de putere şi carcasă. Acest lucru este periculos şi trebuie evitat cu orice preţ!</p>

<p>Verificaţi apoi şi înfăşurările transformatorului pentru continuitate. Cu întrerupătorul închis, ar trebui să obţineţi o rezistenţă mică între cele două contacte ale fişei. Când întrerupătorul este oprit, rezistenţa ar trebui să crească spre infinit (circuit deschis - discontinuitate). Măsuraţi rezistenţa pe partea secundarului. Rezistenţa înfăşurării secundare trebuie să fie mult mai mică decât cea a primarului. De ce?</p>

<p>Introduceţi fişa într-o priză şi închideţi întrerupătorul. Veţi obţine la ieşire (pe partea secundarului) o tensiune de curent alternativ între perechile de terminale. Între două terminale, tensiunea va fi de 12 V. Între unul din aceste terminale şi celălalt terminal, tensiunea va fi jumătate, adică 6 V. Acest al treilea terminal reprezintă priza mediană pe secundarul transformatorului.</p>

<p>Păstraţi acest circuit asamblat, deoarece îl veţi folosi pentru alimentarea altor experimente prezentate de aici înainte. Sursa de tensiune astfel realizată va fi desemnată de acum înainte prin următoarea diagramă:</p>

#+CAPTION: sursă de tensiune joasă de curent alternativ
[[../poze/05008.png]]



</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
