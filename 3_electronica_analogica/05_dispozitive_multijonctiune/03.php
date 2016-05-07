<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Dioda Shockley</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Dioda Shockley</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Primul dispozitiv din seria dispozitivele multijoncţiune pe care îl vom studia este o diodă cu patru straturi, cunoscută sub numele de diodă PNPN, sau dioda Shockley, după cel care a inventat-o, William Shockley. Acest dispozitiv nu trebuie confundat cu dioda Schottky, dispozitivul metal-semiconductor cunoscut pentru viteza mare de comutaţie. O reprezentare brută a diodei Shockely, reprezentare întâlnită adesea în manuale, constă din patru straturi de material semiconductor P-N-P-N, unul peste altul.</p>

<p><img src="../poze/03192.png" alt="dioda Shockley"/></p>

<p>Din păcate, această reprezentare nu explică deloc modul de funcţionare al acestui dispozitiv. Să considerăm aşadar o reprezentare alternativă a construcţiei dispozitivului în figura alăturată.</p>

<p><img src="../poze/03193.png" alt="dioda Shockley; reprezentarea alternativă"/></p>

<p>Sub această reprezentare, dispozitivul pare a fi un set de tranzistori bipolari interconectaţi, unul de tip PNP iar celălalt de tip NPN. Utilizând simbolurile standard şi respectând concentraţiile dopărilor, dioda Shockley arată conform figurii alăturate.</p>

<p><img src="../poze/03194.png" alt="dioda Shockley; schemă echivalentă şi simbol"/></p>

<p>Să conectăm un astfel de dispozitiv la o sursă variabilă de tensiune pentru a observa comportamentul acestuia.</p>

<p><img src="../poze/03195.png" alt="circuit cu dioda Shockley"/></p>

<p>Desigur, fără nicio tensiune aplicată, nu va exista niciun curent. O creştere iniţială a tensiunii nu va duce la apariţia niciuni curent datorită faptului că ambii tranzistori se vor afla în starea blocată. Pentru a înţelege motivul unui astfel de comportament, trebuie să înţelegem ce anume este necesar pentru trecerea unui tranzistor în faza de conducţie, şi anume, existenţa unui curent prin joncţiunea bază-emitor. Dar, după cum putem observa din diagramă. curentul de bază prin tranzistorul de jos este controlat de către tranzistorul de sus, iar curentul de bază al tranzistorului de sus este controlat de către tranzistorul de jos. Cu alte cuvinte, niciunl dintre tranzistori nu poate intra în starea de conducţie până când celălalt nu se află şi el în starea de conducţie.</p>

<p>Prin urmare, cum poate o diodă Shockley să conducă curent, dacă tranzistorii săi constituenţi se află tot timpul în starea de blocare? Răspunsul este dat de comportamentul tranzistorilor reali, spre deosebire de tranzistorii ideali. Un tranzistor bipolar real nu va conduce niciodată curent prin colecor fără existenţa unui curent de bază, indiferent de valoarea tensiunii aplicate între colector şi emitor. Tranzistorii reali pe de altă parte, posedă limite finite ale valorilor tensiunii colector-emitor pe care aceştia le pot susţine înainte de a intra în starea de conducţie. Cu alte cuvinte, peste o anumită valoare a tensiunii colector-emitor, tranzistorul va intra în starea de conducţie, indiferent de curentul de bază. Dacă doi tranzistori sunt conectaţi în acest mod pentru formarea unei diode Shockley, fiecare dintre ei va conduce dacă se va aplica o tensiune suficient de mare de către bateria dintre anod şi catod. Odată ce unul dintre tranzistori intră în starea de conducţie, acesta va duce la apariţia unui curent de bază prin celălalt tranzistor, ducând la funcţionarea normală a acelui tranzistor, ceea ce duce la apariţia unui curent de bază prin tranzistorul iniţial. Rezultatul final este că ambii tranzistori se vor satura, menţinându-se unul pe celălalt în conducţie.</p>

<p>Prin urmare, putem forţă intrarea în conducţie a unei diode Shockley prin aplicarea unei tensiuni suficient de mari între anod şi catod. După cum am văzut, acest lucru va duce inevitabil la pornirea unuia dintre tranzistor, ceea ce duce la rândul său şi la pornirea celuilalt tranzistor şi „agăţarea” ambilor tranzistori în starea de conducţie, acolo unde vor şi rămâne. Dar cum putem opri cei doi tranzistori acum? Chiar dacă tensiunea aplicată este redusă cu mult sub punctul necesar intrării în conducţie a diodei, aceasta va rămâne în starea de conducţie datorită faptului că prin ambii tranzistori există acum un curent de bază suficient pentru menţinerea conducţiei controlate. Răspunsul este reducerea tensiunii aplicate sub un nivel mult mai mic, astfel încât valoarea curentului să fie mai mică decât valoarea necesară polarizării directe a tranzistorilor, punct în care unul dintre tranzistori va intra în starea de blocare, ducând la oprirea curentului prin baza celulilalt tranzistori şi intrarea ambilor în starea de blocare iniţială.</p>

<p>Dacă trecem această serie de evenimente pe un grafic curent-tensiune, histerezisul este evident. Iniţial, observăm circuitul atunci când sursa de tensiune de c.c. (bateria) este de zero volţi.</p>

<p><img src="../poze/03196.png" alt="circuit cu dioda Shockley; graficul curent-tensiune; sursa de c.c. de zero volţi"/></p>

<p>Următorul pas este creşterea treptată a tensiunii de c.c. aplicate. Curentul prin circuit este zero sau foarte apropiat de această valoare, datorită faptului că limita de intrare în conducţie a tranzistorului nu a fost atinsă pentru niciunul din cele două dispozitive.</p>

<p><img src="../poze/03197.png" alt="circuit cu dioda Shockley; graficul curent-tensiune; tensiunea sursei de curent continuu creşte treptat"/></p>

<p>Atunci când limita de străpungere a unuia dintre tranzistori este atinsă, acest lucru va duce la apariţia unui curent prin colector chiar şi fără existenţa unui curent de bază prin acesta. În mod normal, un astfel de scenariu ar distruge un tranzistor bipolar cu joncţiune, dar joncţiunile PNP ale unei diode Shockley sunt proiectate să suporte acest tip de abuz, într-un mod similar diodelor Zener, ce suporta tensiuni de străpungere inverse fără a se distruge. De dragul exemplificării, vom presupune că tranzistorul inferior este cel care va intra prima dată în conducţie, ducând la apariţia unui curent de bază prin tranzistorul superior.</p>

<p><img src="../poze/03198.png" alt="circuit cu dioda Shockley; graficul curent-tensiune; intrarea în conducţie a unuia dintre tranzistori"/></p>

<p>După ce tranzistorul de sus primeşte un curent de bază, şi acesta va intra în conducţie. Acest fapt duce la intrarea în conducţie normală (existenţa curentului de bază) şi a tranzistorului de jos, ambii tranzistori rămânând în starea de conducţie. Curentul prin circuit trece rapid la valoarea maximă.</p>

<p><img src="../poze/03199.png" alt="circuit cu dioda Shockley; graficul curent-tensiune; intrarea în conducţie a ambilor tranzistori"/></p>

<p>Reacţia pozitivă este evidentă în această situaţie. Atunci când are loc străpungerea unuia dintre tranzistori, acest lucru duce la existenţa unui curent prin întreaga structură. Acest curent poate fi considerat semnalul de ieşire al dispozitivului. Odată ce s-a stabilit un curent de ieşire, acesta tinde să menţină ambii tranzistori în saturaţie, asigurqnd continuitatea unui curent de ieşire substanţial. Cu alte cuvinte, curentul de ieşire este reintrodus la intrare (curentul de bază al tranzistorului) pentru menţinearea ambilor tranzistori în starea de conducţie.</p>

<p>Cu ambii tranzistori menţinuţi într-o stare de saturaţie prin prezenţa unui curent de bază substanţial, fiecare va continua să conducă chiar şi atunci când tensiunea aplicată este redusă mult sub nivelul de străpungere iniţial. Efectul reacţiei pozitive este de menţinere a ambilor tranzistori într-o stare de saturaţie în ciuda pierderii semnalului de intrare iniţial (tensiunea necesară străpungerii unuia dintre tranzistori).</p>

<p><img src="../poze/03200.png" alt="circuit cu dioda Shockley; graficul curent-tensiune; tranzistorii rămân în starea de conducţie chiar şi după ce tensiunea iniţială scade cu mult sub valoarea de străpungere iniţială"/></p>

<p>Dacă tensiunea sursei de alimentare în c.c. scade la o valoare mult prea mică, circuitul va atinge eventual un punct în care curentul nu va fi suficient pentru menţinerea ambilor tranzistori în starea de conducţie. Pe măsură ce curentul de colector al unuia dintre tranzistori scade tot mai mult, va duce la scăderea curentului de bază prin celălalt tranzistori, fapt ce duce la reducerea curentului de bază prin primul tranzistor. Acest cerc vicios continuă rapid până în momentul în care ambii tranzistori intră în starea de blocare.</p>

<p><img src="../poze/03201.png" alt="circuit cu dioda Shockley; graficul curent-tensiune; reintrarea tranzistorilor în stare de blocare pe măsură ce tensiunea sursei de c.c. scade sub o anumită valoare"/></p>

<p>Din nou putem vedea efectele reacţiei pozitive: faptul că ciclul cauză-efect dintre cei doi tranzistori este „vicios” (a descreşte a curentului prin unul dintre ei duce la descreşterea curentului prin celălalt, ceea ce duce la rândul său la o nouă descreştere a curentului prin primul tranzistor) indică o relaţie pozitivă dintre ieşire (curent controlat) şi intrare (curent de control prin baza tranzistorilor).</p>

<p>Curba graficului rezultată este un exemplu clasic de histereză: pe măsură ce semnalul de intrare (tensiune) creşte şi descreşte, ieşirea (curent) nu urmăreşte aceiaşi cale la creşterea şi descreşterea acesteia.</p>

<p><img src="../poze/03202.png" alt="graficul sub formă de histereză al comportamentului diodei Shockley"/></p>

<p>Pe scurt, dioda Shockley tinde să rămână în stare de conducţie odată ce a fost pornită şi în stare blocată o dată ce a fost oprită. Nu există un mod de operare între aceste două extreme şi nu există o zonă activă de funcţionare precum în cazul tranzistoarelor bipolare de exemplu: acesta este undispozitiv pur oprit-pornit, asemenea tuturor dispozitivelor semiconductoare multijoncţiune.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Dioda Shockley este un dispozitiv semiconductor format din patru straturi PNPN. Aceste straturi se comportă precum o pereche de tranzistori PNP şi NPN interconectaţi</li>
	<li>La fel ca toate dispozitivele multijoncţiune, diodele Shockely tind să rămână în stare de conducţie odată pornite şi în stare blocată odată oprite</li>
	<li>Pentru trecerea unei diode Shockley în stare de conducţie, este necesară depăşirea tensiunii de străpungere anot-catod</li>
	<li>Pentru blocarea unei diode Shockley, este necesară reducerea curentului prin această sub un anumit prag critic</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>