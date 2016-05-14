<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Relaţia tensiune-curent pentru condensator</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Relaţia tensiune-curent pentru condensator</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Condensatorii nu au o „rezistenţă” stabilă precum am rezistorii. Totuşi, există o relaţie matematică precisă între tensiunea şi curentului unui condensator:</p>

#+CAPTION: relaţia dintre curent şi tensiune pentru condensatoare
[[../poze/10268.png]]

<p>Litera „i” semnifică curentul <i>instantaneu</i>, adică valoarea curentului la un anumit moment din timp. Acest lucru este în contrast cu valoarea constantă a curentului, sau curentul mediu („I”) pe o perioadă de timp nedefinită. Expresia „dv/dt” aparţine analizei matematice şi semnifică rata de variaţia instantanee a tensiunii cu timpul, sau rata de variaţia a tensiunii (creştere sau descreştere în volt pe secundă) la un anumit moment în timp, acelaşi la care se referă şi curentul instantenu. Observaţi că notaţia tensiunii în acest caz este <i>v</i> şi nu <i>e</i>!</p>

<p>Până în acest moment nu am mai întâlnit variabila <i>timp</i> în studiul circuitelor electrice. Atunci când am vorbit de valori ale tensiunilor, curenţilor şi rezistenţelor rezistorilor, ne-a fost indiferent dacă măsurătorile au fost făcute pe o perioadă de timp nespecificată (E=IR; V=IR) sau la un anumit moment din timp (e=ir; v=ir). Formulele folosite sunt exact aceleaşi, şi asta pentru că timpul nu afectează valoarea tensiunii, a curentului sau a rezistenţei într-un component precum rezistorul.</p>

<p>În cazul unui condensator pe de altă parte, timpul este o variabilă esenţială, doarece curentul depinde de <i>rapiditatea</i> variaţiei tensiunii în timp. Pentru a înţelege pe deplin acest lucru, vom lua câteva exemple. Să presupunem că un condensator este conectat la o sursă de tensiune variabilă construită dintr-o baterie şi un potenţiometru:</p>

#+CAPTION: circuit electric
[[../poze/00396.png]]

<p>Dacă potenţiometrul rămâne în aceeiaşi poziţie (perie este fixă), voltmetrul conectat la bornele condensatorului va înregistra o tensiune constantă iar ampermetrul va înregistra 0 A. În acest caz, variaţia instantanee a tensiunii (dv/dt) este egală cu zero, deoarece tensiunea nu se modifică. Ecuaţia ne spune că având o rată de variaţie de 0 V / s pentru dv/dt, curentul instantaneu (i) trebuie să fie egal cu zero. Fizic, fără existenţa unei variaţii a tensiunii, nu este nevoie de nicio deplasare a electronilor de pe o armătură a condensatorului pe alta, şi prin urmare nu există nici curent.</p>

#+CAPTION: tensiunea şi curentul printr-un condensator
[[../poze/00398.png]]

<p>Dacă în schimb peria motenţiometrului se deplasează în mod constant în „sus” (spre borna pozitivă), căderea de tensiune pe condensator va fi din ce în ce mai mare. Voltmetrul înregistrează o creştere constantă a tensiunii indicate:</p>

#+CAPTION: circuit electric
[[../poze/00397.png]]

<p>Dacă presupunem că deplasarea periei condensatorului în „sus” se realizează asfel încât există o <i>rată</i> constantă de creştere a tensiunii la bornele condensatorului (de ex., 2 volţi pe secundă), termenul dv/dt din formula de mai sus va avea o valoare fixă. Ecuaţia ne spune în acez caz că, valoarea fixă a lui dv/dt (2 V/s) înmulţită cu capacitatea condensatorului în Farad, de asemenea o valoare fixă, duce la o valoare fixă (constantă) a curentului. Fizic, o creştere a tensiunii la bornele condensatorului presupune o creştere a sarcinii diferenţiale (creşterea diferenţei numărului de electroni) între cele două armături. Pentru o creştere constantă a tensiunii, trebuie să existe prin urmare şi o creştere constantă a sarcinii acumulate în condensator, ceea ce se treduce de fapt printr-o deplasare constantă a electronilor între armături, adică existenţa curentului. În această situaţie, condensatorul se comportă precum o <i>sarcină</i>; electronii intră pe armătura negativă şi ies din armătura pozitivă, acumulând energie sub formă de câmp electric.</p>

#+CAPTION: tensiunea şi curentul printr-un condensator
[[../poze/00399.png]]

<p>Dacă repetăm scenariul de mai sus, doar că în acest caz, mărim rata de deplasare a periei condensatorului, variaţia tensiuni (dv/dt) va avea o valoare mai mare; curentul prin condensator va fi şi el mai mare în acest caz:</p>

#+CAPTION: circuit electric
[[../poze/00400.png]]

#+CAPTION: tensiunea şi curentul printr-un condensator
[[../poze/00401.png]]

<p>Analiza matematica introduce de fapt conceptul de <i>rată de variaţie</i> pentru o varietate de funcţii. <i>Derivata</i> unei funcţii, un principiu de bază al analizei matematice, este expresia variaţiei unei variabile în funcţie de o altă, în cazul nostru, variaţia tensiunii în funcţie de timp. Mai simplu spus, curentul printr-un condensator este direct proportional cu viteza de variaţie a tensiunii la bornele acestuia.</p>

<p>Să luăm acum un alt exemplu. Dacă de data aceasta deplasăm peria potenţiometrului în aceeiaşi direcţie ca şi inainte („sus”) dar nu constant ci la viteze (rate de variaţie) diferite. În acest caz obţinem un grafic al variaţiei tensiunii şi curentului ce arată aproximativ asfel:</p>

#+CAPTION: circuit electric
[[../poze/00402.png]]

<p>Putem observă de pe grafic că tot timpul curentul prin condensator este proporţional cu rata de variaţie sau <i>panta</i> tensiunii condensatorului. Când graficul tensiunii creşte rapid (pantă mare), curentul este de asemenea mare. Când panta tensiunii este mai mică, şi curentul este mai mic. La un moment dat panta tensiunii este zero (linie orizontală), datorită faptului că peria potenţiometrului nu s-a deplasat deloc în acest interval de timp; în acest caz, curentul prin condensator este zero (vezi graficul).</p>

<p>Dacă deplasăm în schimb peria potenţiometrului în „jos”, tensiunea la bornele condensatorului va <i>scădea</i>. Din nou, condensatorul reacţionează la această variaţie de tensiune prin producerea unui curent în sensul contrar de această dată. O descreştere a tensiunii unui condensator presupune că diferenţa de sarcină dintre armăturile condensatorului se reduce, singurul mod în care acest lucru se poate întâmpla este dacă electronii îşi schimbă direcţia de deplasare; condensatorul în acest caz se descarcă. În aceast caz, în care electronii ies de pe armătura negativă şi intră pe cea pozitivă, condensatorul se comportă precum o <i>sursă</i> (ex, o baterie), eliberând în circuitul extern energia stoacată sub formă de câmp electric.</p>

#+CAPTION: circuit electric
[[../poze/00403.png]]

<p>Din nou, cantitatea de curent prin condensator este direct proporţională cu rata de variaţie a tensiunii la bornele sale. Singura difrentă între <i>scăderea</i> şi <i>creşterea</i> tensiunii este <i>direcţia</i> de deplasare a electronilor (direcţia curentului). Pentru o aceeiaşi rată de variaţie a tensiunii cu tipul, valoarea absolută (sau amplitudinea) curentului este exact aceeiaşi. Matematic, o descreştere a tensiunii se traduce printr-o valoarea <i>negativă</i> a raportului dv/dt. Acest lucru se traduce printr-un curent cu semn negativ, indicând de fapt direcţia de deplasare a electronilor la descărcarea condensatorului, în sens opus faţă de încărcarea acestuia.</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
