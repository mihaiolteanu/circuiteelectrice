<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Terminali tip Kelvin şi rezistori de precizie</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>9. Terminali tip Kelvin şi rezistori de precizie</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Măsurarea rezistenţelor aflate la distanţă</h2>

<p>Să presupunem că vrem să măsurăm rezistenţa unui anumit component ce se află la o distanţă destul de mare de aparatul nostru de măsură (ohmmetru). Un asemenea scenariu va crea probleme, deoarece ohmmetrul măsoară rezistenţa totală din bucla de circuit. Aici este inclusă şi rezistenţa conductorilor (R<sub>fir</sub>) ce realizează conexiunea ohmmetrului cu rezistenţa de măsurat (R<sub>măsură</sub>):</p>

<img src="../poze/00474.png" alt="măsurarea rezistenţelor aflate la distanţă"/>

<p>În mod normal, rezistenţa fireloc conductoare este foarte mică. Dar, dacă firele conductoare sunt foarte lungi, sau în cazul în care componentul de măsurat are o rezistenţă foarte mică, eroarea de măsură introdusă de conductori poate fi substanţială:</p>

<div class="formula">
indicaţia ohmmetrului = R<sub>fir</sub> + R<sub>măsură</sub> + R<sub>fir</sub>
</div>

<h2>Măsurarea rezistenţei cu o combinaţie ampermetru-voltmetru</h2>

<p>O metodă ingenioasă de măsurare a unei rezistenţe în acest caz, presupune utilizarea împreună a unui ampermetru şi a unui voltmetru. Ştim din legea lui Ohm că rezistenţa este egală cu raportul dintre tensiune şi curent (R = E / I). Putem determina prin urmare rezistenţa componentului dacă măsurăm curentul ce trece prin el şi căderea de tensiune la bornele sale:</p>

<img src="../poze/00475.png" alt="măsurarea rezistenţei cu o combinaţie ampermetru-voltmetru"/>

<p>Valoarea curentului este aceiaşi în întreg circuitul, deoarece este un circuit serie. Întrucât măsurăm doar căderea de tensiune la bornele rezistenţei de măsurat (şi nu pe rezistenţele conductorilor), rezistenţa calculată cu ajutorul legii lui Ohm reprezintă doar rezistenţa componentului în cauză:</p>

<div class="formula">
R<sub>măsură</sub> = indicaţia voltmetrului / indicaţia ampermetrului
</div>

<p>Dar, voltmetrul se află în apropierea componentului de măsurat, ceea ce este imposibil în situaţia de faţă (am convenit că dorim să măsură rezistenţa componentelor aflate la o distanţa apreciabilă faţă de aparatele noastre de măsură). Prin urmare, dacă ar fi să conectăm voltmetrul la o distanţa apreciabilă faţă de component, vom introduce din nou rezistenţa „parazită” a firelor conductoare în circuit. Ce este de făcut în acest caz?</p>

<img src="../poze/00476.png" alt="măsurarea rezistenţei cu o combinaţie ampermetru-voltmetru"/>

<p>Dacă suntem puţin mai atenţi, putem observa că nu există nicio problemă legată de căderea de tensiune în lungul conductorilor, deoarece valoarea curentului prin conductorii voltmetrului este minusculă. Prin urmare, căderea de tensiune în lungul conductorilor este neglijabilă. Indicaţia voltmetrului este aproape identică în cele două cazuri: voltmetru conectat în apropierea componentului de măsurat şi voltmetru conectat la o distanţă apreciabilă:</p>

<img src="../poze/00477.png" alt="măsurarea rezistenţei cu o combinaţie ampermetru-voltmetru"/>

<p>Orice cădere de tensiune existentă pe conductorii principali nu va fi măsurată de voltmetru. Precizia măsurătorii poate fi îmbunătăţită dacă reducem curentul prin volmetru la o valoare minimă, fie folosind un aparat de măsură de calitate (curent mic pentru deplasare maximă), fie un sistem cu detector de nul.</p>

<h2>Metoda Kelvin (metoda celor patru conductori)</h2>

<p>Această metodă de măsurare ce evita erorile cauzate de rezistenţa conductorilor poartă numele de metoda Kelvin, sau metoda celor patru conductori. Există anumiţi terminali speciali, denumiţi terminali Kelvin, ce sunt special realizaţi pentru a facilita acest tip de măsurători:</p>

<img src="../poze/00478.png" alt="terminali Kelvin"/>

<p>Terminalii/clemele tip crocodil (banane) au ambele jumătăţi ale braţului comune din punct de vedere electric (de obicei în zona articulaţiei). În cazul terminalilor Kelvin însă, cele două jumătăţi sunt izolate între ele în zona articulaţie. Singurul contact se realizează în zona vârfurilor ce se „prind” pe conductorul sau pe terminalul componentului de măsurat. Astfel, curentul prin braţele „C” (curent) nu trece prin braţele „P” (potenţial, sau tensiune) şi nu va exista o cădere de tensiune în lungul lor care să ducă la erori de măsură:</p>

<img src="../poze/00479.png" alt="terminali Kelvin"/>

<h2>Rezistori de şunt de precizie înaltă</h2>

<p>Acelaşi principiu de utilizare a diferitelor puncte de conctat pentru măsurarea curentului şi a tensiunii poate fi folosit în cazul rezistorilor de şunt de precizie pentru măsurarea valorilor mari de curent. După cum am mai discutat, rezistorii de şunt sunt folosiţi pe post de dispozitive de măsură de curent. Căderea de tensiune la bornele acestora depinde strict de valoare curentului ce-i străbate, această cădere de tensiune fiind măsurată cu un voltmetru. În acest caz, un şunt de precizie „transformă” valoarea curentului în tensiune. Curentul poate fi măsurat cu o precizie ridicată prin măsurarea căderii de tensiune la bornele şuntului:</p>

<img src="../poze/00165.png" alt="măsurarea curentului cu ajutorul rezistorilor de şunt"/>

<p>Măsurarea curentului cu ajutorului unui rezistor de şunt şi un voltmetru este indicată în aplicaţiile de curent înalt. În astfel de cazuri, rezistenţa şuntului are valori de ordinul miliohmilor sau microohmilor. Căderea de tensiune la bornele sale va fi foarte mică, chiar şi pentru o valoare maximă a curentului de măsurat. O rezistenţă aşa de mică este comparabilă cu rezistenţa firelor conductoare. Acest lucru înseamnă că tensiunea măsurată la bornele unui astfel de şunt trebuie măsurată astfel încât să se evite introducerea unei erori de măsură datorate căderilor de tensiune din lungul conductorilor dintre voltmetru şi şunt. Pentru ca voltmetrul să măsoare doar căderea de tensiune la bornele şuntului, fără nicio altă cădere de tensiune parazită datorată fireloc conductoare, şunturile sunt adesea prevăzute cu <i>patru</i> terminali:</p>

<img src="../poze/00480.png" alt="şunt cu patru terminale"/>

<h2>Rezistori de precizie cu patru terminali</h2>

<p>În aplicatii metrologice (metrologie = "ştiinţă măsurătorilor”), unde acurateţea este de o importanţă crucială, rezistorii „standard” de precizie sunt prevăzuţi de asemenea cu patru terminali: doi pentru transportul curentului de măsurat, şi doi pentru măsurarea căderii de tensiune cu ajutorului voltmetrului. În acest mod, voltmetru măsoară doar căderea de tensiune pe rezistorul de precizie, fără introducerea altor tensiuni parazite datorită firelor conducătoare sau a rezistenţelor datorate contactelor dintre fire şi terminale.</p>

<p>Observaţi că rezistorul de precizie standard de 1 Ω din figura de mai jos are patru terminali: cei doi terminali mari pentru curent şi cei doi terminali mai mici pentru tensiune:</p>

<img src="../poze/50044.jpg" alt="rezistor de precizie cu patru terminali"/>

<p>Trebuie să facem observaţia că rezistenţa măsurată astfel, folosind atât un voltmetru cât şi un ampermetru, este supusă unei erori compuse. Datorită faptului că rezultatul final depinde de precizia de măsură a ambelor instrumente, precizia măsurătorii finale s-ar putea să fie mai mică decât cea a fiecărui instrument individual. De exemplu, dacă precizia ampermetrului este de +/- 1%, iar cea a voltmetrului este şi ea de +/- 1%, orice măsurătoare ce depinde de indicaţia ambelor instrumente are o precizie de +/- 2% (valoarea reală este mai mică sau mai mare cu 2% decât valoarea măsurată).</p>

<p>O precizie sporită poate fi obţinută prin înlocuirea ampermetrului cu un rezistor de precizie standard, folosit pe post de şunt de măsurare a curentului. Şi în acest caz va exista o eroare compusă din eroarea rezistorului cu cea a voltmetrului utilizat pentru măsurarea căderii de tensiune. Această eroare va fi însă mai mică decât eroare prezentă în cazul utilizării unui aranjament voltmetru + ampermetru, datorită faptului că precizia unui rezistor standard este mult mai mare decât precizia unui ampermetru obişnuit. Folosind terminali de tip Kelvin pentru realizarea contactelor cu rezistenţa de măsură, circuitul arată astfel:</p>

<img src="../poze/00481.png" alt="măsurarea rezistenţei"/>

<p>Toţi conductorii din figura de mai sus prin care trece curent sunt reprezentaţi cu linie îngroşată, pentru a face distincţie între conductorii.</p>



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