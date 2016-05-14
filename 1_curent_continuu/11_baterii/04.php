<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Baterii speciale</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Baterii speciale</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Pila standard cu mercur</h2>

<p>Pe vremuri, un tip special de baterie, cunoscuta sub numele de pilă standard cu mercur, era folosită ca şi etalon (standard) pentru calibrarea tensiunilor. Ieşirea unei pile cu mercur era între 1,0184 şi 1,0194 V c.c. (în funcţie de tipul pilei), fiind extrem de stabilă în timp. Variaţia tensiunii era în jurul valorii de 0,004% pe an. Alternativ, pilele cu mercur erau cunoscute si sub numele de pile cu cadmium sau pile Weston. Structura unei astfel de pile este prezentată în figura de mai jos:</p>

<img src="../poze/00270.png" alt="pilă standard cu mercur"/>

<p>Din păcate, pilele cu mercur sunt intolerante la „scurgerile” de curent şi nu pot fi măsurate cu un voltmetru analogic fără a compromite acurateţea măsurătorii. Producătorii menţionau un curent nu mai mare de 0,1 mA prin pilă, dar chiar şi această cifră era considerată de moment, sau instantanee maximă. Prin urmare, pilele standard nu puteau fi măsurate decât cu un dispozitiv potenţiometric (detector de nul), pentru care curentul de funcţionare este zero. Scurt-circuitarea unei pile cu mercur este stric interzisă. După scurt-circuitare, pila nu mai putea fi folosită ca şi dispozitiv standard. Pilele cu mercur sunt de asemenea susceptibile la variaţii mici de tensiune în cazul „bruscării” lor fizice sau termice.</p>

<p>Există două tipuri de pile standard cu mercur, în funcţie de nevoile de calibrare: saturate şi nesaturate. Pilele standard saturate oferă cea mai bună stabilitate a tensiunii în timp, suferind în schimb de o instabilitate termică. Cu alte cuvinte, variaţia tensiunii este neglijabilă în timp (o variaţie de doar câţiva microvolţi în decurs de 10 ani!), dar este mare schimbările de temperatură (zeci de microvolţi per grad Celsius). Aceste pile funcţionează cel mai bine în medii de laborator controlate din punct de vedere termic, şi unde stabilitatea tensiunii este de o importanţa crucială.</p>

<p>Pilele nesaturate oferă o foarte bună stabilitate termică în dauna stabilităţii în timp. Tensiunea rămâne practic constantă odată cu variaţia temperaturii, dar scade constant cu aproximativ 100 µV pe an. Acest celule erau utilizate cel mai adesea ca şi dispozitive de calibrare „de teren”. Temperatura ambiantă nu poate fi controlată precis în aceste situaţii. Tensiunea nominală a unei pile saturate este de 1,0186 V, iar a cele nesaturate de 1,019 V.</p>

<p>Dispozitivele de calibrare semiconductoare moderne au înlocuit în totalitate pilele standard ca şi referinţe de laborator sau „de teren” pentru tensiuni.</p>

<h2>Pila de combustie</h2>

<p>Un dispozitiv fascinant, foarte asemănător pilei voltaice, este pila de combustie. Acest dispozitiv utilizează reacţia chimică de combustie (ardere) pentru generarea unui curent electric. Procesul de oxidare chimică (formarea legăturilor ionice ale oxigenului cu alte elemente) poate produce o deplasare de electroni între doi electrozi asemănător unei combinaţii de metale şi electroliţi. O pilă de combustie este practic o baterie alimentată de la o sursă externă de energie chimică:</p>

<img src="../poze/00271.png" alt="pilă de combustie hidrogen-oxigen"/>

<p>Pe măsură ce „arde” hidrogen, singurele emisii ale unei pile de combustie sunt apă şi o cantitate mică de căldură. Eficienţa transformării energiei chimice în energie electrică, în cazul unei pile de combustie, este mult mai mare decât limita de eficientă Carnot pentru orice motor cu ardere (combustie) internă.</p>

<h2>Celula solară</h2>

<p>Un alt tip de „baterie” este celula (pila) solară, un produs al electronicii (semiconductor). Efectul fotoelectric, conform căruia electronii sunt „smulşi” din atomi sub influenţa luminii, este pus în aplicare pentru generarea de curent electric prin intermediul luminii. Eficienţa celulelor solare este destul de mică, dar beneficiile utilizării acesteia ca şi sursă de energie sunt nenumărate: nu există părţi mobile, zgomot, poluare sau emisii şi o viaţa practic infinită:</p>

<img src="../poze/00272.png" alt="celulă solară"/>

<h2>Pila chimică de detecţie</h2>

<p>Un alt tip de „baterie” specială este pila chimică de detecţie. Pe scurt, aceste pile reacţionează chimic cu o substanţa specifică din mediul lor ambiant (din aer) pentru a crea o cădere de tensiune proporţională cu concentratia substanţei respective. O aplicaţie practică a unei pile chimice de detecţie constă în detecţia şi măsurarea concentraţiei de oxigen. Majoritatea analizoarelor de oxigen sunt construite în jurul acestor mici pile. Pila chimică trebuie astfel proiectată încât să corespundă substenţei(lor) ce se doresc a fi detectate. Aceste pile tind să se uzeze, pe măsură de materialele chimice se epuizează sau se contaminează în decursul utilizării.</p>

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