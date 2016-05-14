<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Teoria benzilor de energie</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Teoria benzilor de energie</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Fizica cuantică descrie starea electronilor dintr-un atom cu ajutorul celor patru numere cuantice. Aceste numere descriu <i>stările permise</i> ale electronilor dintr-un atom. Dacă revenim la analogia amfiteatrului, numerele cuantice descriu numărul rândurilor şi a locurilor existente. Electronii individuali pot fi descrişi printr-o combinaţie de numere cuantice, precum un spectator într-un amfiteatru primeşte un anumit rând şi număr.</p>

<p>La fel ca spectatorii dintr-un amfiteatru, ce se pot deplasa liberi între scaune şi rânduri, şi electronii îşi pot modifica starea dacă există destulă energie şi loc pentru deplasarea acestora. Din moment ce nivelul stratului este strâns legat cu cantitatea de energie a unui electron, „salturile” între straturi (şi chiar substraturi) necesită un transfer de energie. Pentru ca un electron să se poată deplasa într-un strat mai înalt, acesta are nevoie de energie adiţională dintr-o sursă externă. Folosind analogia amfiteatrului, pentru a ajunge într-un rând de scaune superior, este nevoie de o energie din ce în ce mai mare, deoarece persoana trebuie să urce la o înălţime tot mai mare ce necesită învingerea forţei gravitaţionale. De asemenea, dacă un electron coboară pe un strat inferior, acesta cedează energie. Aceste nivele poartă numele de <i>nivele energetice</i></p>

<p>Nu toate „salturile” sunt însă egale, cele dintre straturi necesită cel mai mare schimb de energie, pe când salturile dintre substraturi sau dintre orbitali necesită un schimb de energie mai mic.</p>

<p>Când atomii se combină pentru formarea substanţelor, straturile, substraturile şi orbitalii exterior se combină între ele, ducând la creşterea energiei disponible pentru electroni. Când un număr foarte mare de atomi sunt foarte aproape unul de celălalt, aceste nivele de energie disponibile formează o <i>bandă</i> de electroni aproape continuă, bandă pe care electroni se pot deplasa cu uşurinţă.</p>

#+CAPTION: suprapunerea benzilor energetice în cazul metalelor
[[../poze/03370.png]]

<p>Lăţimea acestor benzi şi distanţa dintre ele determină mobilitatea electronilor în cazul aplicării unui câmp electric asupra lor. În substanţele metalice, benzile libere se suprapun cu benzile ce conţin electroni, ceea ce înseamnă că electronii unui singur atom se pot deplasa la un nivel energetic mai mare necesitând foarte puţină energie externă sau chiar deloc. Asfel, electronii din stratul exterior sunt cunoscuţi sub numele de <i>electroni liberi</i> şi se pot deplasa foarte uşor dacă sunt supuşi unui câmp electric exterior.</p>

<p>Suprapunerea benzilor nu are loc însă în toate substanţele, indiferent de numărul atomilor ce se află în proximitate. În cazul unor substanţe, există o distanţa considerabilă între banda de valenţă (nivelul energetic cel mai mare) şi următoarea bandă goală, denumită <i>banda de conducţie</i>. Prin urmare, electronii de valenţă sunt „legaţi” de atomii lor şi nu pot deveni mobili în cadrul substanţelor fără ajutorul unei energii externe considerabile. Aceste substanţe formează materialele izolatoare (dielectrice).</p>

#+CAPTION: separarea benzilor energetice în cazul dielectricilor
[[../poze/03371.png]]

<p>Însă, materialele din categoria <i>semiconductorilor</i> au o „distanţă energetică” îngustă între benzile de valenţă şi cele de conducţie. Asfel, cantitatea de energie necesară pentru trecerea electronilor de valenţă în banda de conducţie, de undă devin mobil, este destul de modestă.</p>

#+CAPTION: separarea benzilor energetice în cazul materialelor semiconductoare
[[../poze/03372.png]]

<p>La temperaturi joase, energia termică disponibilă pentru „împingerea” electronilor de valenţă peste spaţiul dintre banda de valenţă şi cea conducţie este foarte mică, iar materialul semiconductor se comportă precum un izolator. La temperaturi înalte însă, energia termică devine suficient de mare pentru a forţa electronii peste „distanţa energetică”, iar materialul se va comporta precum un material conductor.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Pentru îndepărtarea unui electron din banda de valenţă spre o bandă neocupată, superioară, denumită bandă de conducţie, este nevoie de o anumită energie exterioară. Pentru deplasarea electronilor între straturi este nevoie de o energie mai mare decât pentru deplasarea lor între substraturi.</li>
	<li>Datorită faptului că banda de valenţă şi cea de conducţie se suprapun în cazul metalelor, energia necesară pentru deplasarea unui electron este mică. Prin urmare, metalele sunt conductori de electricitate foarte buni</li>
	<li>Spaţiul foarte mare existent între banda de valenţă şi cea de conducţie în cazul materialelor izolatoare, necesită o energie foarte mare pentru deplasare electronilor între aceste benzi. Din această cauză, aceste materiale sunt bune izolatoare şi nu conduc electricitate</li>
	<li>Materialele semiconductoare au un spaţiu relativ mic între banda de valenţă şi banda de conducţie. Semiconductorii puri nu sunt nici buni izolatori, nici buni conductori</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
