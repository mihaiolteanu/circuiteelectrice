<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Verificarea tranzistorului cu ohmmetrul</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Verificarea tranzistorului cu ohmmetrul</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Tranzistorii se comportă precum două diode puse spate-în-spate atunci când sunt verificaţi cu ajutorul multimetrului pe post de ohmmetru sau cu funcţie „verificare diodă”, datorită celor trei straturi PNP sau NPN. Tranzistorul de mai jos este de tip PNP; sonda neagră este terminalul negativ (-) iar cea roşie corespunde terminalului pozitiv (+)</p>

#+CAPTION: verificarea unui tranzistor PNP cu ajutorul unui ohmetru: (a) joncţiunile bază-emitor şi bază-colector sunt polarizate direct, rezistenţa este mică; (b) joncţiunile bază-emitor şi bază-colector sunt polarizare invers, rezistenţa este infinită
[[../poze/03077.png]]

<p>Dacă multimetrul este echipat cu funcţia „verificare diodă”, putem folosi acea funcţie pentru aflarea tensiunii de polarizare directă a joncţiunii P-N. În cazul unui tranzistor NPN, indicaţia aparatului de măsură va fi exact invers.</p>

<h3>Determinarea tipului şi contactelor unui tranzistor bipolar nemarcat</h3>

<p>Dacă folosim funcţia „verificare diodă”, vom vedea că joncţiunea emitor-bază are o tensiune directă mai mare decât joncţiunea colector-bază. Această diferenţa a tensiunii directe se datorează diferenţei concentraţiilor de dopaj dintre regiunile emitorului şi colectorului: emitorul este un material semiconductor dopat mult mai puternic decât colectorul, ceea ce duce la producerea unei tensiuni directe mult mai mari a joncţiunii cu baza.</p>

<p>Cunoscând acest lucru, putem determina contactele unui tranzistor nemarcat. Acest lucru este important deoarece nu există un standar cu privire la modul de împachetare al tranzistorilor. Desigur, toţi tranzistorii bipolari au trei contacte, dar poziţie lor fizică în cadrul tranzistorului poate fi diferită de la un producător la altul.</p>

<p>Să presupunem că luăm un tranzistor la întâmplare, nemarcat, şi începem să măsurăm cu ajutorul multimetrului setat pe funcţie „verificare diodă”. După măsurarea tuturor combinaţiilor de contacte, ajungem la următoarele rezultate:</p>

#+CAPTION: tranzistor bipolar nemarcat
[[../poze/03084.png]]

<p><b><table>
<tr>între punctele 1(+) şi 2(-): OL</tr>
<tr>între punctele 1(-) şi 2(+): OL</tr>
<tr>între punctele 1(+) şi 3(-): 0.655 V</tr>
<tr>între punctele 1(-) şi 3(+): OL</tr>
<tr>între punctele 2(+) şi 3(-): 0.621 V</tr>
<tr>între punctele 2(-) şi 3(+): OL</tr>
</table></b></p>

<p>Singurele combinaţii de contacte pe care putem măsura tensiunea sunt 1 şi 3 (sonda roşie pe 1 şi sonda neagră pe 3), şi 2 şi 3 (sonda roşie pe 2 şi sonda neagră pe 3). Aceste două citiri <i>trebuie</i> să indice tensiunea de polarizare directă a joncţiunii emitor-bază (0.655 V) şi a joncţiunii colector-bază (0.621).</p>

<p>Putem acum căuta contactul comun ambelor seturi de măsurători „conductive”. Acest contact trebuie să fie baza tranzistorului, deoarece acesta este singurul strat, al dispozitivului format din trei straturi, ce este comun ambelor seturi de joncţiuni PN (emitor-bază şi colector-bază). În acest exemplu, contactul căutat este numărul 3, fiind comun combinaţiilor 1-3 şi 2-3. În ambele măsurători, sonda <i>neagră</i> (-) a aparatului de măsură a venit în contact cu contactul 3, ceea ce ne spune că baza acestui tranzistor este realizată dintr-un material semiconductor de tip N. Prin urmare, tranzistorul în cauză este un tranzistor bipolar de tip PNP, cu baza - contactul 3, emitor - contactul 1 şi colector - contactul 2.</p>

#+CAPTION: tranzistor bipolar nemarcat; contactele determinate cu ajutorul multimetrului
[[../poze/03085.png]]

<p>După cum putem observa, baza tranzistorului în acest caz <i>nu</i> este contactul din mijloc al tranzistorului, aşa cum ne-am aştepta. Acest lucru se întâmplă foarte des în practică. Singura modalitate prin care ne putem asigura de corectitudinea contactelor este prin verificarea cu ajutorului unui multimetru, sau cu ajutorul catalogului producătorului.</p>

<h3>Determinarea integrităţii unui tranzistor</h3>

<p>Ştiind faptul că un tranzistor se comportă precum două diode aşezate spate-în-spate la testarea conductivităţii cu un aparat de măsură, dacă în urma măsurătorilor descoperim că există continuitate în mai mult sau mai puţine de două dintre cele şase combinaţii de contate, putem spune cu singuranţă că tranzistorul este defect, sau ca dispozitivul aflat sub inspecţie <i>nu</i> este un tranzistor şi un cu totul alt dispozitiv!.</p>

<h3>Modul de funcţionare al tranzistorului</h3>

<p>Totuşi, modelul „celor două diode” nu poate explica funcţionarea tranzistorului ca şi dispozitiv de amplifcare a semnalului.</p>

<p>Pentru ilustrarea acestui paradox, putem examina următorul circuit, folosind diagrama fizică a tranzistorului pentru uşurarea explicaţiilor:</p>

#+CAPTION: tranzistor bipolar pe post de întrerupător; diagrama fizică
[[../poze/03086.png]]

<p>Săgeatea diagonală gri are direcţia deplasării electronilor prin joncţiunea emitor-bază. Acest lucru este clar, din moment ce electroni se deplasează dinspre emitorul de tip N spre baza de tip N: joncţiunea este polarizată direct. Totuşi, joncţiunea bază-colector se comportă mai ciudat. Săgeata îngroşată vericală indică direcţia de deplasare a electronilor dinspre bază spre colector. Din moment ce baza este realizată dintr-un material de tip P iar colectorul dintr-un semiconductor de tip N, direcţia de deplasare a electronilor este inversă faţă de direcţia normală de deplasare printr-o joncţiune P-N! În mod normal, o joncţiune P-N nu ar permite deplasarea inversă a electronilor, cel puţin nu fără a oferi o opoziţie extrem de mare. Totuşi, un tranzistor saturat prezintă o opoziţie foarte mică faţă de deplasarea electronilor de la emitor la colector, lucru demonstrat şi prin faptul că lampa este aprinsă!</p>

<p>Prin urmare, modelul celor două diode puse spate-în-spate poate fi folosit doar pentru înţelegerea modului de verificare al tranzistorilor cu ajutorul aparatului de măsură, nu şi pentru înţelegerea funcţionării acestora în circuitele practice.</p>

#+CAPTION: modelul celor două diode puse spate-în-spate nu poate fi folosi pentru explicare funcţionării tranzistorilor în circuitele reale
[[../poze/03087.png]]

<p class="sumar">Sumar:</p>
<ul>
	<li>Tranzistorul se comportă precum o pereche de diode conectate spate-în-spate atunci când este verificat cu ajutorul unui multimetru pe post de ohmmetru sau cu funcţia „verificare diodă”</li>
	<li>Joncţiunea emitor-bază de tip P-N, are o tensiune directă puţin mai mare decât joncţiunea colector-bază de tip P-N, datorită dopajului mai puternic al emitorului. Acest lucru poate fi exploatat pentru identificarea tranzistorilor</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
