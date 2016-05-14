<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Siguranţe fuzibile</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Siguranţe fuzibile</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Definiţia şi scopul siguranţelor fuzibile</h2>

<p>În mod normal, amperajul unui conductor reprezintă o limită a circuitului electric ce nu trebuie depăşită în mod intenţionat. Siguranţele fuzibile sunt proiectate tocmai pentru a acţiona în cazul unor astfel de „supra-curenţi”.</p>

<p>O siguranţă fuzibilă nu este altceva decât o un fir conductor scurt, proiectat astfel încât, în situaţia unui curent excesiv, acesta să se separe prin topire. <strong>Siguranţele fuzibile se conectează tot timpul în serie cu componentul sau componentele ce necesită o protecţia la supra-curent</strong>, astfel încât, în cazul deschiderii circuitului prin topirea siguranţei, curentul prin toate componentele sa scadă la zero. Desigur, o siguranţa fuzibilă conectată pe o ramură a unui circuit paralel, nu va afecta curentul prin celelalte ramuri.</p>

<p>În mod normal, firul conductor este acoperit de un înveliş protector pentru minimizarea pericolelor arcului electric în cazul deschiderii bruşte a circuitului. În cazul siguranţelor din locuinţă clasice, „liţele” sunt protejate de un patron din ceramică (poză). Siguranţele fuzibile folosite în cazul autoturismelor sunt transparente, astfel încât elementul fuzibil poate fi observat direct (poza).</p>

<p>Simbolul siguranţei fuzibile pe care îl vom folosi, este cel în formă de „S”, precum în figura alăturată.</p>

#+CAPTION: simbolul siguranţei fuzibile într-un circuit electric
[[../poze/00282.png]]

<p>Deoarece siguranţele fuzibile sunt proiectate pentru a se „defecta” în cazul în care limita maximă de curent din circuit este depăşită, este ideal ca acestea să poată fi îndepărtate şi înlocuite cu uşurinţă din circuit. Acest lucru înseamnă că ele vor fi introduse într-o cutie de siguranţe şi nu vor fi lipite sau prinse direct în circuit (poză).</p>

<h2>Întrerupătoare automate</h2>

<p>Întrerupătoarele automate sunt cele mai utilizate dispozitive pentru protecţia la supracurent. Aceste dispozitive sunt nişte întrerupătoare proiectate special pentru deschiderea automată şi oprirea alimentării cu energie electrică în cazul apariţiei unui supra-curent. Întrerupătoarele automate mici, precum cele din locuinţe, comerciale şi pentru iluminat, funcţionează pe bază termică. Acestea conţin o bandă bimetalică (o bandă subţirea formată din două metale puse cap la cap). La trecerea curentului din circuit prin aceasta, banda bimetalică se curbează sub acţiunea căldurii disipate. Atunci când forţa generată de bandă este suficient de mare (datorită supra-curentului ce o încălzeşte), mecanismul de întrerupere este acţionat iar întrerupătorul va deschide circuitul. Întrerupătoarele automate mai mari, sunt acţionate de forţa câmpului magnetic produs de conductoarele străbătute de curet din interiorul acestuia, sau pot fi acţionate de dispozitive exterioare (relee de protecţie) ce monitorizează curentul din circuit. În ambele cazuri, dispozitivul nu se distruge, ci doar se deschide; acesta poate fi reînchis prin acţionarea unei manete şi nu necesită nicio înlocuire precum esta cazul siguranţelor fuzibile (poza).</p>

<h2>Consideraţii practice</h2>

<p>Siguranţele fuzibile sunt catalogate după curentul maxim admis prin ele, şi anume, în amperi. Cu toate că funcţionarea acestora depinde de generarea căldurii în cazul curenţilor excesivi de către propria lor rezistenţa, acestea sunt construite astfel încât să contribuie cu o rezistenţă adtiţională neglijabilă în circuitul protejat. Acest lucru se relaizează printr-un fir conductor cât mai scurt posibil. La fel cum amperajul unui conductor nu depinde de lungimea sa, un fir folosit pentru construirea siguranţei fuzibile se va topi la un anumit curent indiferent de lungimea acestuia. Din moment ce lungimea nu reprezintă un factor pentru capacitatea maximă în curent a siguranţei, cu cât această lungime este mai mică, cu atât rezistenţa dintre cele două capete ale firului va fi mai mică.</p>

<p>Totuşi, trebuie luată în considerare şi situaţie în care o siguranţa fuzibilă se topeşte („sare”): capetele libere ale firului conductor vor fi separate în acest caz de un spaţiu liber şi o diferenţa de potenţial (tensiune) între acestea. Dacă firul nu este destul de lung, într-un circuit de tensiune înaltă, este posibilă ionizarea aerului dintre capete şi re-închiderea circuitului prin acest mediu.</p>

<p>Atunci când siguranţa se arde, întreaga cădere de tensiune a sursei de alimentare se va regăsi pe aceasta, iar curentul din circuit va fi zero.</p>

#+CAPTION: siguranţă fuzibilă arsă într-un circuit electric
[[../poze/00283.png]]

<p>În cazul în care căderea de tensiune la bornele unei siguranţe fuzibile topite este suficient de mare, este posibilă apariţia arcului electric ce duce la apariţia unui curent în circuit, lucru pe care nu-l dorim.</p>

#+CAPTION: apariţia arcului electric în cazul unei siguranţe fuzibile topite
[[../poze/00284.png]]

<p>Prin urmare, siguranţele fuzible sunt catalogate atât în funcţie de curentul de „deschidere” cât şi în funcţie de tensiunea de străpungere a dielectricului existent între cele două capete dupa arderea acesteia.</p>

<h2>Siguranţe fuzibile cu temporizare</h2>

<p>La apariţia unui curent de 35 A printr-o siguranţă fuzibilă de 30 A, aceasta se poate arde instant sau poate prezenta o anumită durată de timp până la topirea conductorului metalic, în funcţie de tipul dispozitivului. Unele siguranţe sunt proiectate să se ardă extrem de repede, pe când altele necesită un timp mai indelungat de „deschidere”, sau chiar amânarea deschiderii, în funcţie de aplicaţie. Acestea din urmă poartă denumirea de <strong>siguranţe fuzibile lente</strong>, spre deosebire de celelalte, ce pot fi catalogate drept <strong>siguranţe fuzibile rapide</strong>.</p>

<p>O aplicaţie clasică a siguranţelor fuzibile lente este în cazul protecţiei motoarelor electrice, unde curenţii de pornire pot ajunge până la valori de zece ori mai mari decât curenţii normali de funcţionare. Dacă ar fi să folosim cele rapide, nu am putea porni motorul în primul rând, deoarece curenţii de pornire foarte mari ar duce la distrugerea imediată a siguranţei fuzibile. În cazul siguranţelor lente, elementul fuzibil este astfel proiectat încât să prezinte o masă mai mare (dar nu şi amperaj mai mare) decât o siguranţa rapidă, ceea ce înseamnă că încălzirea acestuia va dure un timp mai îndelungat, ajungând până la urmă la aceeiaşi temperatură, indiferent de valoarea curentului.</p>

<p>Pe de altă parte, există <strong>siguranţe fuzibile semiconductoare</strong>, proiectate pentru o deschidere extrem de rapidă în cazul apariţiei unei situaţii de supra-curent. Dispozitivele semiconductoare, precum tranzistorii, tind să fie foarte sensibile la supra-curenţi, prin urmare, în cazul acestora este nevoie de dispozitive de protecţie rapide în circuitele de putere mare.</p>

<h2>Introducerea corectă în circuit a siguranţelor fuzibile</h2>

<p>Siguranţele fuzibile trebuie poziţionate pe faza circuitului, în cazul circuitelor cu împământare. Scopul este oprirea curentului prin sarcini în cazul în care siguranţa se deschide. Putem face o comparaţie între cele două figuri alăturate, pentru a vedea diferenţa între utilizarea unei siguranţe pe fază şi utilizarea aceleaşi siguranţe pe neutru.</p>

<p>În acest caz, când siguranţa este introdusă în faza circuitului, la deschiderea acesteia, căderea de tensiune între oricare punct al sarcinii şi pământ va fi zero. Atingerea circuitului este sigură în acest caz, eliminând practic pericolul electrocutării.</p>

#+CAPTION: poziţionarea corectă a siguranţei fuzibile în circuit pe faza acestuia
[[../poze/00285.png]]

<p>În cazul în care siguranţa fuzibilă este introdusă pe neutrul circuitului, în cazul deschiderii acesteia, va exista o tensiune periculoasă între oricare punct al sarcinii şi pământ. Atingerea circuitului în acest caz se poate dovedi periculoasă din punct de vedere al electrocutării.</p>

#+CAPTION: poziţionarea greşită a siguranţei fuzibile în circuit pe neutrul acestuia
[[../poze/00286.png]]

<p>Indiferent dacă folosim siguranţe fuzible simple sau întrerupătoare automate, poziţionarea corectă a acestora în circuit se face conform celor spuse mai sus, şi anume: dispozitivul de siguranţa trebuie plasat pe partea de putere a circuitului şi nu conectat la pământ.</p>

<h2>Observaţii</h2>

<p>Cu toate că protecţia la supra-curent a circuitelor poate oferi într-o oarecare măsură o anumită siguranţă la electrocutare în anumite condiţii, trebuie înţeles faptul că aceste dispozitive nu sunt concepute în acest scop. Nici siguranţele fuzibile şi nici întrerupătoarele automate nu au fost proiectate cu scopul deschiderii în cazul electrocutării persoanei care atinge circuitul, ci, sunt proiectate pentru deschiderea în cazul supra-încălzirii conductorilor circuitului. Dispozitivele de protecţie la supra-curent, protejează în principal conductorii de la distrugere prin supra-incălzire şi a pericolelor asociate cu conductori foarte încinşi, şi în alt doilea rând, protejează anumite echipamente precum sarcini şi generatoare. Din moment ce valorile curenţilor necesari pentru electrocutare sunt mult mai mici decât curenţii normali ale sarcinilor din circuit, o condiţie de supra-curent nu indică neapărat un pericol de electrocutare, ci aceasta poate apărea chiar şi atunci când circuitul funcţionează la parametrii normali. Desigur, există dispozitive special concepute pentru protecţia la electrocutare (detectoare de curenţi de defect), dar aceste dispozitive sunt utilizate stric pentru acel scop şi nu au nico legătură cu protecţia conductorilor la supra-încălzire.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li><strong>Siguranţa fuzibilă</strong> este un conductor electric subţire, proiectat a se topi şi separa în două părţi, cu scopul de a deschide un circuit în cazul apariţiei unor supra-curenţi</li>
	<li><strong>Întrerupătorul automat</strong> este un întrerupător special conceput pentru deschiderea automată a circuitului în cazul apariţiei unui supra-curent. Aceştia se pot reutiliza prin re-închiderea circuitului</li>
	<li>Dispozitivele de siguranţa într-un circuit cu împământare se instalează pe faza acestuia şi nu pe neutru</li>	
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
