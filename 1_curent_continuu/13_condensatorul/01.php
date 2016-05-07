<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Câmpuri şi capacitatea electrică</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Câmpuri şi capacitatea electrică</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Atunci când între doi conductori există o tensiune electrică, spunem că există un câmp electric în spaţiul dintre ei. Vorbind de câmpuri ne referim de fapt la interacţiunile ce au loc în spaţiul dintre şi din jurul conductorilor şi nu în interiorul acestora.</p>

<p>Conceptul de „câmp” este cu siguranţă unul destul de abstract. Cel puţin în cazul curentului electric ne putem imagina, fără prea mare dificultate, existenţa unor particule minuscule, denumite electroni, ce se deplasează între atomii conductorilor. Dar un „câmp” nu are nici măcar masă şi poate să nu existe deloc <i>în</i> materie.</p>

<p>În ciuda aspectului abstract, putem da un exemplu destul de practic cu care majoritatea dintre noi suntem familiarizaţi, şi anume magneţii. Deşi aparent nu există nicio legătură directă între două bucăţi separate de magnet, există cu siguranţă o forţă de atracţie sau de respingere în funcţie de orientarea lor relativă. Această „forţă” nu are nici culoare, nici masă, nici miros, iar dacă nu am observa interacţiunile dintre ei, nici nu am ştii că există. În cadrul fizicii, interacţiunile ce au loc în spaţiul dintre magneţi poartă numele de <i>câmpuri magnetice</i>. Dacă plasăm pilitură de fier în jurul unui magnet, putem oberva (re)orientarea acesteia în jurul liniilor de câmp; în acest fel putem avea o indicaţie vizuală a prezenţei câmpului magnetic.</p>

<p>Subiectul acestui capitol sunt câmpurile <i>electrice</i> (şi <i>condensatoarele</i> ce utilizează acest principiu) nu câmpurile <i>magnetice</i>, dar există multe asemănări între cele două. Mai mult ca sigur că sunteţi familiarizaţi şi cu câmpurile electrice. Un exemplu a fost dat îm primul capitol, atunci când am explicat electricitatea statică şi modul în care materiale precum parafina şi lâna se atrag după ce au fost în prealabil frecate una de cealaltă. Din nou, fizicienii includ aceste interacţii în domeniul <i>câmpurilor electrice</i> generate de două corpuri ca rezultat al dezechilibrului de electroni dintre ele. Este suficient să spunem că prezenţa unei diferenţe de potenţial (tensiuni) dintre două puncte duce la apariţia unui câmp electric în spaţiul rămas liber dintre acestea.</p>

<p>Câmpurile au două caracteristici principale: <i>forţa</i> şi <i>fluxul</i>. <i>Forţa</i> reprezintă cantitatea de „împingere” pe care un câmp îl exercită la o anumită distanţă. <i>Fluxul</i> este cantitatea totală, sau efectul, câmpului prin spaţiu. Forţa şi fluxul câmpului sunt aproximativ similare tensiunii (împingere) şi curentului (curgere) printr-un conductor. Fluxul unui câmp poate întâmpina rezistenţă în spaţiu precum un curent întâmpină rezistenţă într-un conductor. Cantitatea fluxului dezvoltat în spaţiu este proporţională cu valoarea forţei aplicate împărţită la valoarea opoziţiei fluxului. În cazul curentului, tipul de material conductor determină rezistenţa specifică la curgerea acestuia; similar, în cazul fluxului, tipul materialului dielectric (izolator) ce separă cele două conductoare determină opoziţia specifică.</p>

<p>În mod normal, electronii nu pot intra într-un conductor decât dacă există o cantitate egală de electroni ce părăsesc exact acelaşi conductor (analogia tubului cu mărgele). Din această cauză conductorii trebuie conectaţii împreună pentru a forma un drum complet (circuit) pentru deplasarea continuă a electronilor. Ciudat este totuşi faptul că, electroni adiţionali pot fi „îngrămădiţi” într-un conductor, fără existenţa unui drum de ieşire, dacă este posibilă/permisă formarea unui câmp electric în spaţiul liber dintre acest conductor şi un alt conductor. Numărul electronilor adiţionali din conductor (sau numărul de electroni pierduţi) este direct proporţional cu valoarea fluxului câmpului dintre cei doi conductori.</p>

<p><i>Condensatoarele</i> sunt componente ce utlizează acest fenomen electric în funcţionarea lor. Acestea sunt realizate din două armături (plăci) metalice conductoare plasate una în apropierea celeilalte, separate printr-un dielectric. Există totuşi o multitudine de tipuri şi moduri de construcţia a condensatoarelor, în funcţie de aplicaţia necesară.</p>

<p>Simbolul electric al condensatorului este prezentat în următoarea figură:</p>

<p><img src="../poze/00354.png" alt="simbolul condensatorului"/></p>

<p>Atunci când la bornele condensatorului aplicăm o tensiune electrică, între cele două armături ia naştere un câmp electric ce permite existenţa unei diferenţe semnificative de electroni liberi (sarcină) între cele două armături:</p>

<p><img src="../poze/00291.png" alt="câmp electric în interiorul condensatorului"/></p>

<p>Pe măsură ce câmpul electric este format prin aplicarea tensiunii, electronii liberi vor fi forţaţi să se „adune” la terminalul negativ fiind „furaţi” de pe terminalul negativ. Acestă diferenţă de sarcină se traduce prin apariţia unui stoc de energie electrică în condensator şi reprezintă sarcina potenţială a electronilor dintre cele două armături. Cu cât diferenţa numerică a electronilor între cele două armături ale unui condensator este mai mare, cu atât mai mare este fluxul câmpului şi cu atât mai mare „stocul” de energie din condensator.</p>

<p>Deoarece condensatorii stochează energie potenţială sub formă de câmp electric, comportamentul lor într-un circuit este fundamental diferit de cel al rezistorilor, cei din urmă disipând pur şi simplu putere în circuit sub formă de căldură. Energia stocată într-un condensator depinde de tensiunea dintre armături precum şi de alţi factori pe care îi vom lua imediat în considerare. Abilitatea acestora de stocare a energiei în funcţie de tensiune rezultă într-o tendinţă de menţinere a tensiunii la un nivel constant. Cu alte cuvinte, condensatoarele tind să se opună <i>variaţiei</i> căderii de tensiune. Atunci când modificăm tensiunea la bornele unui condensator, fie o mărim, fie o scădem, acesta tinde să se opună schimbării trăgând curent de la sau generând curent spre sursa de variaţie a tensiunii, în opoziţie cu <i>variaţia</i>.</p>

<p>Pentru a stoca mai multă energie într-un condensator, trebuie mărită valoarea tensiunii la bornele sale. Acest lucru prsupune o înmulţire a electronilor pe armătura negativă şi o diminuare a lor pe cea negativă, lucru ce necesită existenţa unui curent în acea direcţie. Dimpotrivă, pentru a elibera energie dintr-un condensator, trebuie scăzută valoarea tensiunii la bornele sale. Acest lucru presupune o diminuare a electronilor pe armătura negativă prin deplasarea lor spre cea pozitivă; această deplasare dă naştere, evident, unui curent în acea direcţie (opusă).</p>

<p>Asemenea legii de mişcare a lui Isaac Newton (un obiect aflat în mişcare, tinde să rămână în mişcare; un obiect aflat în repaus tinde să rămână în repaus) ce descrie tendinţa obiectelor de a se opune variaţiilor de viteză, putem descrie tendinţă unui condensator de a se opune variaţiei tensiunii asfel: „Un condensator încărcat tinde să rămână încărcat; un condensator descărcat tinde să rămână descărcat.” Ipotetic, un condesator (încărcat sau descărcat) lasat neatins îşi va menţine la infinit starea sa iniţială. Doar o sursă (sau un canal) exterior de curent poate modifica valoarea energiei stocate (implicit şi a tensiunii la bornele sale) de un condensator perfect:</p>

<p><img src="../poze/00292.png" alt="tensiune electrică la bornele condensatorului este menţinută constantă într-un circuit deschis"/></p>

<p>Practic, condensatoarele îşi vor pierde tensiune stocată datorită imperfecţiunilor interne ce permit electronilor să se deplaseze de pe o armătură pe cealaltă. În funcţie de tipul specific de condensator, timpul de „golire” poate fi foarte lung, de până la câţiva ani, pentru condensatoarele ce nu sunt deloc folosite.</p>

<p>Când tensiune la bornele condensatorului creşte, acesta trage curent din circuit; în acest caz condensatorul se comportă ca o sarcină şi spune că se <i>încarcă</i>. Observaţi direcţia de deplasare a electronilor (curentul) faţă de polaritatea tensiunii:</p>

<p><img src="../poze/00293.png" alt="condensatorul ca o sarcină"/></p>

<p>Invers, atunci când tensiunea la bornele condensatorului scade, acesta introduce/generează curent în circuitul extern; în acest caz condensatorul se comportă ca o sursă de putere şi spunem că se <i>descarcă</i>. Stocul de energie din câmpul electric este direcţionat către restul circuitului. Observaţi direcţia de deplasare a electronilor (curentul) faţă de polaritatea tensiunii:</p>

<p><img src="../poze/00293.png" alt="condensatorul ca o sursă"/></p>

<p>Dacă introducem brusc o sursă de tensiune la bornele unui condensator descărcat (o creştere bruscă de tensiune), acest va trage curent din circuitul exterior, reprezentat în acest caz de sursa respectivă, până în momentul în care tensiune la bornele sale este egală cu tensiunea sursei. După atingerea acestui punct de încărcare, curentul scade spre zero (condensator încărcat). Invers, dacă o rezistenţă de sarcină este conectată la bornele unui condensator încărcat, acesta va genera curent spre sarcină până în momentul epuizării energiei stocate, iar tensiunea sa va scădea spre zero. După atingerea acestui punct de descărcare, curentul scade spre zero. Putem să ne gândim la condensatoare ca la un fel de baterii secundare prin modul de încărcare şi descărcare al lor.</p>

<p>Precum am mai spus, alegerea materialului izolant dintre plăci are o importanţă capitală în comportamentul condensatorului, mai bine spus, în mărimea fluxului electric şi implicit a tensiunii dintre armături. Datorită rolului acestui material în comportamentului fluxului, i s-a dat un nume special: <i>dielectric</i>. Nu toate materialele dielectrice sunt egale, ci sunt diferenţiate printr-o valoare fizică numită <i>permitivitatea</i> dielectricului.</p>

<p>Mărimea pentru volumul de energie stocat de un condensator, atunci când se aplică o anumită tensiune la bornele sale, poartă denumirea de <i>capacitate</i>. Simbolic, se notează cu „C” şi se măsoară în Farad, prescurtat „F”.</p>

<p>Există o anumită convenţie atunci când vine vorba de notaţia condensatoarelor, şi anume, valorile acestora se exprimă adesea în mircoFarad (µF). </p> 

<p>Aparent, denumirea de <i>condensator</i> este învechită şi nu mai este folosită în lucrările de specialitate, fiind înlocuită cu cea de <i>capacitor</i>. Întrucât în literatura de specialitate de la noi din ţară se foloseşte încă termenul de condensator, îl vom folosi şi noi în această carte.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Condensatorii reacţionează împotriva variaţiei tensiunii prin generarea sau tragerea de curent în/din circuit în direcţia necesară opunerii variaţiei</li>
	<li>Când tensiunea la bornele unui condensator creşte (alimentat de o baterie, de ex), acesta se comportă precum o <i>sarcină</i></li>
	<li>Când tensiunea la bornele unui condensator scade (conectat la o sarcină, de ex), acesta se comportă precum o <i>sursă</i></li>
	<li>Proprietatea condensatorului de a stoca energie sub formă de câmp electric (şi prin urmare de a se opune variaţiei tensiuni) poartă numele de <i>capacitate</i>. Unitatea de măsură este Farad-ul (F)</li>
	<li>Denumirea nouă pentru <i>condensator</i> este <i>capacitor</i></li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>