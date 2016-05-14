<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Realizarea practică a rezistenţelor de calibrare</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>12. Realizarea practică a rezistenţelor de calibrare</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>De multe ori, în cazul realizării circuitelor de măsură, avem nevoie de rezistenţe precise pentru a obţine circuitul dorit. În majoritatea cazurilor însă, valorile necesare ale rezistorilor nu se găsesc pe piaţă. În acest caz, ne vedem nevoiţi să ne construit proprii noştrii rezistori.</p>

<h2>Realizarea unei înfăşurări bifilare</h2>

<p>O soluţie a acestei dileme este realizarea rezistorilor dintr-un conductor special cu rezistenţă mare. Putem folosi o mică „bobină” ca şi suport pentru înfăşurarea rezultată. Înfăşurarea este astfel realizată încât să elimine orice efecte electromagnetice: lungimea dorită a firului conductor este împăturită în două, şi înfăsurată apoi în jurul bobinei. Astfel, curentul se deplasează în sensul acelor de ceasornic pentru o jumătate din lungimea conductorului şi în sens invers acelor de ceasornic pentru cealaltă jumătate. O astfel de înfăşurare poartă numele de înfăşurare bifilară. Orice câmp magnetic generat de trecerea curentului prin conductor este anulat. De asemenea, un câmp magnetic extern nu poate induce o cădere de tensiune în lungul conductorului:</p>

#+CAPTION: înfăşurare bifilară; realizarea rezistorilor
[[../poze/00413.png]]

<p>După cum vă puteţi imagina, această se poate dovedi extrem de laborioasă, îndeosebi în cazul în care avem nevoie de mai mulţi rezistori.</p>

<h2>Conectarea rezistorilor în combinaţii serie-paralel</h2>

 <p>O soluţie mai uşoară a acestei probleme constă în conectarea mai multor rezistori cu rezistenţe cunoscute într-o combinaţie serie-paralel pentru a obţine valoarea dorită a rezistenţei. Această soluţie, deşi necesită un timp îndelungat pentru găsirea combinaţiei perfecte, poate fi duplicată mult mai uşor pentru crearea unor rezistenţe multiple cu aceiaşi valoare:</p>
 
#+CAPTION: conectarea rezistorilor în combinaţii serie-paralel
[[../poze/00414.png]]

<p>Dezavantajul ambelor metode constă în faptul că ambele rezistenţe rezultate au o valoare fixă. Într-o lume perfectă, mecanismele de deplasare ale aparatelor de măsură nu-şi pierd niciodată puterea magnetică a magneţilor permanenţi din componenţă, temperatura şi timpul nu au niciun efect asupra rezistenţelor componentelor, iar firelor conductoare şi contactele pastrează pentru totdeauna o rezistenţă zero. În această „lume perfectă”, rezistorii cu valori fixe sunt suficienţi. Dar, în realitate, abilitatea de ajustare sau <i>calibrare</i> a instrumentelor în viitor este avantajoasă.</p>

<h2>Utilizarea potenţiometrelor</h2>

<p>Ne-am putea gândi ca în acest caz să folosim potenţiometre (conectate ca şi reostate, de obicei) ca şi rezistenţe variabile. Potenţiometrul ar putea fi montat în interiorul aparatului de măsură, astfel încât doar o persoană autorizată să-i poată modifica valoarea.</p>

<p>Totuşi, rezistenţa majorităţii potenţiometrelor variază prea mult pentru o deplasarea mică a manetei şi nu pot fi ajustate cu foarte mare precizie. Să presupunem că am dori o rezistenţă de 8,335 kΩ +/- 1 Ω, şi folosim un potenţiometru de 10 kΩ pentru obţinerea ei. O precizie de 1 Ω în cazul unui potenţiometru de 10 kΩ reprezintă 1 parte din 10.000, sau 0,01% din deplasarea maximă a potenţiometrului. Un astfel de rezultat este aproape imposibil de atins folosind un potenţiometru standard. Prin urmare, cum putem obţine valoarea rezistenţei dorite dar cu posibilitatea ajustării ei în viitor?</p>

<p>Soluţia problemei constă în utilizarea unui potenţiometru ca parte a unei combinaţii mai mari de rezistori. Acest lucru va crea un domeniu limitat de selecţie. Să urmărim următorul exemplu:</p>

#+CAPTION: conectarea rezistorilor în combinaţii serie-paralel
[[../poze/00415.png]]

<p>În acest caz, potenţiometrul de 1 kΩ, conectat ca şi reostat, introduce în circuit o rezistenţă variabilă între 0 Ω şi 1 kΩ. Conectat în serie cu rezistorul de 8 kΩ, rezistenţa totală din circuit poate fi ajustată între 8 kΩ şi 9 kΩ. O precizie de +/- 1 Ω reprezintă 1 parte din 1.000, sau 0,1 % din deplasarea maximă a potenţiometrului. Precizia ajustării este de 10 ori mai bună decât în cazul precedent unde am folosit un potenţiometru de 10 kΩ.</p>

<p>Dacă dorim să mărim şi mai mult precizia ajustării - pentru a realiza o rezistenţă de 8,335 kΩ cu o precizie şi mai bună - putem reduce impactul potenţiometrului asupra valorii totale a rezistenţei circuitului prin conectarea unui rezistor de valoare fixă în paralel:</p>

#+CAPTION: conectarea rezistorilor în combinaţii serie-paralel
[[../poze/00416.png]]

<p>Acum, ajustarea rezistorului se poate face doar în limita a 500 Ω, de la 8 kΩ la 8,5 kΩ. O precizie de +/- 1 Ω este egală cu 1 parte din 500, sau 0,2 %. Sensibilitatea ajustării este în acest caz de două ori mai bună decât înainte. Ajustarea nu va fi totuşi liniară, poziţionarea deplasării potenţiometrului la mijloc nu va rezulta într-o rezistenţă totală de 8,25 kΩ, ci de 8,333 kΩ.</p>

<p>Totuşi, aceasta este o îmbunătăţire a sensibilităţii circuitului, şi reprezintă o soluţie practică pentru problema construirii unei rezistenţe ajustabile pentru un instrument de precizie.</p>


<p class="sumar">Sumar:</p>
<ul>
	<li></li>
	<li></li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
