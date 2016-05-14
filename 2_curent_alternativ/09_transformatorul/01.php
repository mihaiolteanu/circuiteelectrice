<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Inductanţa mutuală şi modul de funcţionare</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Inductanţa mutuală şi modul de funcţionare</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Să presupunem că avem un miez feromagnetic închis (formă dreptunghiulară) şi înfăşurăm un conductor metalic izolat alimentat în curent alternativ în jurul uneia dintre laturi:</p>

#+CAPTION: miez feromagnetic dreptunghiular cu o înfăşurare alimentată în curent alternativ
[[../poze/02305.png]]

<p>Fiindcă ceea ce am realizat mai sus este de fapt o bobină, această înfăşurare în jurul miezului feromagnetic ar trebui să se opună tensiunii aplicate datorită reactanţei inductive, limitând asfel curentul prin înfăşurare conform ecuaţiilor X<sub>L</sub> = 2πfL şi I=E/X (sau I=E/Z). Pentru a clarifica acest exemplu totuşi, vom analiza mai atent interacţiunile ce iau naştere între tensiune, curent şi fluxul magnetic în acest dispozitiv.</p>

<p>Conform legii lui Kirchhoff pentru tensiune, suma tuturor tensiunilor dintr-un circuit închis trebuie să fie egală cu zero. În exemplul de mai sus, putem aplica această lege generală a electricităţii pentru descrierea tensiunilor sursei, respectiv a înfăşurării. Ca în oricare circuit format dintr-o singură sursă şi o singură sarcină, căderea de tensiune a sarcinii trebuie să fie egală cu tensiunea produsă de sursă, presupunând că nu există căderi de tensiune în lungul firelor (rezistenţa lor este zero). Cu alte cuvinte, sarcina, reprezentată de înfăşurare, trebuie să producă o tensiune de semn contrar şi de aceeiaşi amplitudine cu sursa. Dar de unde apare această tensiune opusă tensiunii sursei? Dacă sarcina ar fi un rezistor (cazul „b” din figura de mai sus), căderea de tensiune ia naştere ca urmare a pierderilor sub formă de căldură datorate „frecării” electronilor la trecerea prin această rezistenţă. În cazul unei bobine perfecte (rezistenţă zero a înfăşurării), tensiunea opusă se prezintă sub o altă formă, şi anume, <i>reacţia</i> faţă de fluxul magnetic variabil al miezului de fier. Atunci când forma de undă a curentului variză, variază şi fluxul Φ. Variaţia fluxului induce un câmp electromagnetic contrar.</p>

<p>Formularea relaţiei matematice între fluxul magnetic (Φ) şi tensiunea indusă îi este atribuită lui Michael Faraday, şi arată asfel:</p>

#+CAPTION: formula matematică a inducţiei electromagnetice
[[../poze/12138.png]]

<p>Tensiunea instantanee indusă (e) în înfăşurare, în orice moment, este egală cu produsul dintre numărul spirelor înfăşurării (N) şi variaţia instantanee a fluxului magnetic (dΦ/dt) a bobinei. Grafic, formele de undă sunt sinusoidale (presupunând că forma de undă a sursei de alimentare este sinusoidală), fluxul fiind defazat în urma tensiunii cu 90<sup>o</sup>:</p>

#+CAPTION: formele de undă ale tensiunii induse şi a fluxului magnetic - defazate între ele cu 90 de grade
[[../poze/02306.png]]

<p>Fluxul magnetic printr-un material feromagnetic este analog curentului printr-un conductor: trebuie să fie „împins” de o forţă exterioară pentru a se forma. În circuitele electrice, această forţă o reprezintă tensiunea (mai precis, tensiunea electromotoare, prescurtat <i>tem</i>). În „circuitele” magnetice, această forţă este reprezentată de tensiunea magnetomotoare (prescurtat <i>tmm</i> si simbolizat prin u<sub>mm</sub>) Tensiunea magnetomotoare şi fluxul magnetic se află în strânsă legătură una cu cealaltă prin intermediul unei proprietăţi a materialelor magnetice, <i>reluctanţa</i>, concept analog rezistenţei în circuitele electrice.</p>

#+CAPTION: legea lui Ohm pentru circuite electrice şi magnetice; comparaţie
[[../poze/12139.png]]

<p>În exemplul de mai sus, tmm necesară producerii acestui flux magnetic variabil trebuie să fie furnizată de un curent variabil prin înfăşurare. Tensiunea magnetomotoare generată de înfăşurarea unui electromagnet este egală cu produsul dintre curentul prin înfăşurare şi numărul de spire a înfăsurări. Unitatea de măsură a tensiunii magnetomotoare este Amper-spiră. Deoarece relaţia matematică dintre fluxul magnetic şi tmm este direct proporţională, iar relaţia dintre tmm şi curent este de asemenea direct proporţională, curentul prin înfăşurare este în fază cu fluxul magnetic:</p>

#+CAPTION: formele de undă ale tensiunii induse, a curentului prin înfăşurare şi a fluxului magnetic
[[../poze/02307.png]]

<p>Acesta este şi motivul pentru care curentul într-o bobină este defazat în urma tensiunii cu 90<sup>o</sup>: deoarece aceasta este defazarea necesară producerii unui flux magnetic a cărui rate de variaţie poate produce o tensiune în opoziţie de fază cu tensiunea aplicată. Datorită funcţiei sale de producere a tensiunii magnetomotoare pentru miezul feromagnetic, acest curent este câteodată numit şi <i>curent de magnetizare</i>.</p>

<h3>Saturaţie miezului feromagnetic</h3>

<p>Trebuie menţionat faptul că acest curent prin înfăşurare nu este perfect sinusoidal, iar acest lucru se datorează neliniarităţii curbei de magnetizaţie (B/H) a fierului. Dacă bobina este construită ieftin, folosind cât mai puţin fier cu putinţă, densitatea fluxului magnetic poate atince valori mari, aproape de saturaţie, rezultatul fiind o formă de undă a curentului de magnetizare ce arată aproximativ asfel:</p>

#+CAPTION: formele de undă ale tensiunii induse, a curentului prin înfăşurare şi a fluxului magnetic; forma de undă a curentului este distorsionată datorită saturaţiei miezului feromagnetic
[[../poze/02336.png]]

<p>Atunci când un material feromagnetic se apropie de fluxul magnetic de saturaţie, este nevoie de tensiuni magnetomotoare din ce în ce mai mari pentru menţinerea constantă a creşterii fluxului magnetic. Deoarece tmm este direct proporţională cu valoarea curentului prin înfăsurare înfăşurare (u<sub>mm</sub> = NI), creşterea foarte mare a tmm necesare susţinerii creşterii fluxului duce la creşteri mari ale curentului prin înfăşurare, pentru a putea menţine forma de undă a fluxului magnetic nedistorsionată (sinusoidală).</p>

<p>Situaţia este însă şi mai complicată datorită pierderilor de energie din miezul feromagnetic. Efectul histerezisului şi al curenţilor turbionari duce la aceentuarea deformării formei de undă a curentului, alterându-i atât forma sinusoidală cât şi defazajul, ce va fi cu puţin sub 90<sup>o</sup> în urma tensiunii. Acest curent al înfăşurării constituit din suma tuturor efectelor magnetice asupra înfăsurării, poartă numele de <i>curent de excitaţie</i>. Distorsionarea curentului de excitaţie a unei înfăşurări cu miez feromagnetic (bobină) poate fi minimizată dacă aceasta este concepută şi funcţionează la densităţi de flux foarte scăzute. Acest lucru necesită însă un miez cu o secţiune transversală mare, ceea ce duce la costuri ridicate şi un volum mare. Pentru a simplifica lucrurile însă, vom presupune un miez feromagnetic ideal, fără pericolul saturaţiei şi fără pierderi, ceea ce duce la un curent de excitaţie perfect sinusoidal.</p>

<h3>Inducerea tensiunii într-o înfăşurare secundară</h3>

<p>După cum am văzut în capitolul dedicat bobinelor, defazajul curentul faţă de tensiune cu 90<sup>o</sup> crează o condiţie în care puterea este absorbită şi eliberată alternativ de la circuit la bobină şi invers. Dacă bobina este perfectă (rezistenţă zero, pierderi în miez zero, etc.), puterea disipată de aceasta va fi zero.</p>

<p>Să reluăm exeplul de mai sus, dar introducem de data această o nouă înfăsurare în jurul aceluiaşi miez feromagnetic. Ca să diferenţiem între cele două înfăşurări, prima înfăşurare o vom denumit <i>înfăşurarea primară</i> sau simplu, <i>primar</i>, iar cea de a doua, <i>înfăşurarea secundară</i>, sau simplu, <i>secundar</i>.</p>

#+CAPTION: miez feromagnetic; înfăsurarea primară şi secundară
[[../poze/02308.png]]

<p>Dacă cea de a doua înfăşurare este supusă unei variaţii a fluxului magnetic identice cu prima infăşurare, iar numărul de spire al înfăşurării este acelaşi cu a primei înfăşurări, atunci, conform principiului inducţiei electromagnetice, tensiunea indusă în această înfăşurare va fi egală în amplitudine şi fază cu tensiunea sursei de alimentare a primei înfăşurări. În graficul de mai jos, amplitudinea tensiunii induse este voit mai mică, pentru a putea face distincţie între aceasta şi tensiunea de alimentare:</p>

#+CAPTION: miez feromagnetic; formele de undă ale tensiunilor din primar şi secundar, precum şi a fluxului magnetic şi a curentului din primar
[[../poze/02309.png]]

<p>Acest efect al inducerii unei tensiuni într-o înfăşurare ca răspuns a variaţiei curentului din cealaltă înfăşurare, poartă nuemele de <i>inductanţă mutuală</i>. Unitatea de măsură este Henry, la fel ca inductanţa proprie, iar simbolul matematic este „M”, în loc de „L”:</p>

#+CAPTION: inductanţa proprie şi inductanţa mutuală; formulele matematice de calcul
[[../poze/12140.png]]

<p>În acest moment, în înfăşurarea secundară nu există curent deoarece aceasta este deschisă. Dacă conectăm însă un rezistor în acest circuit, curentul alternativ prin înfăşurare va fi în fază cu tensiunea indusă.</p>

#+CAPTION: miez feromagnetic; înfăsurarea primară şi secundară
[[../poze/02310.png]]

<p>Ne-am putea aştepta ca acest curent secundar să producă un flux magnetic suplimentar în miezul feromagnetic. Acest lucru nu se întâmplă însă. Dacă fluxul magnetic indus în miez ar creşte, acest lucru ar duce la creşterea tensiunii induse a înfăşurării primare. Acest lucru nu se poate întâmpla, doarece tensiunea indusă a primarului trebuie să rămână la aceeiaşi amplitudine şi fază pentru se păstra egalitate dintre aceasta şi tensiunea sursei, potrivit legii lui Kirchhoff pentru tensiune. Prin urmare, fluxul magnetic al miezului nu este afectat de curentul din secundar. Totuşi, ceea ce se modifică este valoarea tensiunii magnetomotoare a circuitului magnetic.</p>

<p>Tensiunea magnetomotoare (tmm) ia naştere ori de câte ori există deplasare de electroni printr-un fir. De obicei, această tensiune este însoţită de flux magnetic, conform legii lui Ohm pentru circuitele magnetice, <b>u<sub>mm</sub> = ΦR</b>. Dar producerea unui flux magnetic suplimentar nu este permisă în acest caz, prin urmare, singura posibilitate de existenţă a tmm în secundar implică apariţia unei tmm contrare (în antifază), şi amplitudine egală, generate de înfăşurarea primară. Acest lucru este exact ceea ce se întâmplă, şi anume,  formarea unui curent alternativ în înfăşurarea primară, defazat cu 180<sup>o</sup> (în antifază) faţă de curentul secundarului, pentru generarea unei tmm contrare şi prevenirea apariţiei unui flux magnetic adiţional prin miez.</p>

#+CAPTION: miez feromagnetic; înfăsurarea primară şi secundară; conectarea sarcinii în înfăşurarea secundară
[[../poze/02311.png]]

<p>Deşi întreg procesul pare destul de complicat, iar proiectarea transformatoarelor este un subiect complex, ceea ce este important de ţinut minte este aceasta: atunci când asupra înfăşurării primare este aplicată o tensiune alternativă, aceasta produce un flux magnetic în miexul feromagnetic ce induce o tensiune alternativă în înfăsurarea secundară, în fază cu tensiunea sursei de alimentare. Apariţia oricărui curent prin secundar, la conecatarea unei sarcini de exemplu, duce la apariţia unui curent similar în primar, curent menţinut de sursa de alimentare.</p>

<p>Putem observa faptul ca înfăşurarea primară se comportă precum o sarcină faţă de sursa de tensiune, iar înfăşurarea secundară este echivalentă unei surse de tensiune alternativă pentru rezistorul conectat la capetele acesteia. Faţă de prima situaţia, de data aceasta energia nu este abosrbită şi eliberată tot în înfăşurarea primare, ci este <i>cuplată</i> cu înfăşurarea secundară unde este folosită pentru alimentarea sarcinii (rezistor). Din punct de vedere al sursei, aceasta alimentează direct sarcina secundarului. Desigur, curentul din primar este defazat cu 90<sup>o</sup> faţă de tensiune, lucru ce nu s-ar întâmpla într-o alimentare directă a rezistorului.</p>

<p>Acest dispozitiv este cunoscut sub numele de <i>transformator</i>, deoarece transformă energia electrică în energie magnetică şi înapoi în energie electrică. Deoarece funcţionarea acestuia depinde de inducţia electromagnetică dintre două înfăşurări staţionare şi de variaţia amplitudinii şi „polarităţii” fluxului magnetic, transformatoarele se pot folosi doar în curent alternativ, nu şi în curent continuu. Simbolul electric al transformatorului îl reprezintă două bobine (înfăşurarea primară şi secundară) şi un miez feromagnetic comun celor două:</p>

#+CAPTION: simbolul transformatorului electric, constând din două bobine (înfăşurarea primară şi secundară) şi un miez feromagnetic comun celor două
[[../poze/02131.png]]

<p>Chiar dacă majoritatea transformatoarelor sunt confencţionate cu miez feromagnetic, există şi transformatoare în care cuplajul celor două înfăşurări se realizeaza prin aer.</p>

<p>Poza de mai jos reprezintă un transformator tipic folosit pentru iluminatul cu ajutorul lămpilor cu descărcare în gaz. Se pot observa clar cele două înfăşurări din jurul miezului de fier:</p>

#+CAPTION: transformator electric
[[../poze/52002.jpg]]

<p>Înfăşurarea de sus este mai mare decât cea de jos, având mai multe spire în jurul miezului (secţ. urm.!).</p>

<p>În următoarea poză, este prezentată o secţiune printr-un transformator cu cele două înfăşurări şi miezul feromagnetic vizibile. Şi în acest caz, numărul spirelor celor două înfăşurări nu este egal. Secţiunea conductorilor dintre cele două înfăşurări este de asemenea diferită (secţ. urm.!). De asemenea, putem observa că miezul nu este confecţionat dintr-o singură bucată de material ci din foi subţiri (denumite tole) laminate (secţ. urm.!).</p>

#+CAPTION: transformator electric; secţiune
[[../poze/52012.jpg]]

<h3>Exemplu</h3>

<p>Putem explica funcţionarea unui transformator simplu prin intermediul unui circuit electric. Vom considera <i>coeficientul de cuplaj magnetic</i> (k) ca având o valoare foarte aproape de perfecţie, şi anume, 0,999. Acest coeficient descrie cât de „strânse” sunt cuplate cele două bobine (înfăşurări) una faţă de cealaltă. Cu cât acest coeficient este mai mare (ideal, 1), cu atât cuplajul magnetic dintre cele două înfăşurări, şi prin urmare, şi eficienţa transferului de energie este mai mare. (Calcule realizate cu SPICE!)</p>

#+CAPTION: circuit electric simplu cu transformator
[[../poze/02132.png]]

<p>Ambele inductanţe ale înfăşurărilor fiind egale (100 H), tensiunile şi curenţii pentru cele două înfăşurări sunt aproximativ egale (10 V, respectiv 10 mA). Diferenţa dintre curentul primar şi cel secundar este defazajul de 90<sup>o</sup> dintre ele, datorat curentului de magnetizare al miezului. Valoarea acestui curent de magnetizare este foarte mică în acest caz, faţă de curentul din primar, asfel că cei doi curenţi sunt aproximativi egali. Această eficienţă mare este tipică transformatoarelor în general. Orice eficienţă de sub 95% este considerată mult prea mică în proiectarea transformatoarelor.</p>

<p>Dacă reducem rezistenţa sarcini (de la 1 kΩ la 200 Ω), pentru a creşte valoarea curentului în secundar, pentru aceeiaşi valoare a tensiunii, observăm că şi curentul din înfăşurarea primare creşte. Chiar dacă sursa de tensiune alternativă nu este conectată direct la sarcină, ci este cuplată electromagnetic, valoarea curentului ce parcurge sarcina este aproximativ aceeiaşi cu valoarea curentului dacă sarcina ar fi conectată direct la sursă. În acest caz, valoarea curenţilor din înfăşurări va creşte de la aproximativ 10 mA la 47 mA. De fapt, egalitatea celor doi curenţi este chiar mai accentuată faţă de cazul precedent, deoarece curentul de magnetizare este acelaşi ca şi în cazul precedent. De asemenea, tensiunea din secundar a scăzut puţin sub influenţă sarcini mai mare (curent mai mare), de la aproximativ 10 V la 9.3 V.</p>

<p>Să vedem ce se întâmplă dacă reducem şi mai mult rezistenţa sarcinii, până la valoarea de 15 Ω. Curentul sarcinii (în secundar) este acum 130 mA, o creştere substanţială faţă de cazul precedent, iar curentul primar este aproximativ egal cu acesta. În schimb, tensiunea prin secundar a scăzut foarte mult comparativ cu valoarea tensiunii din secundar (1.95 V în secundar faţă de 10 V în primar). Motivul acestei diferenţe se regăşeste în imperfecţiunile transformatorului: cuplajul dintre cele două înfăşurări nu este perfect, coeficientul de cuplaj magnetic, k, fiind 0.999, nu 1. Prin urmare, există o inductanţă de <i>scăpări</i> prezentă, ceea ce înseamnă ca o parte a câmpului magnetic nu se regăseşte pe înfăşurarea secundare şi nu poate „transfera” energie din această cauză:</p>

#+CAPTION: inductanţa de scăpări datorită faptului că fluxul magnetic nu este acelaşi pe cele două înfăşurări
[[../poze/02312.png]]

<p>Acest flux de scăpări doar stochează şi eliberează energia înapoi în circuitul de alimentare prin intermediul inductanţei proprii, comportamentul acesteia fiind al unei impedanţe serie conectate în ambele înfăşurări. Căderea de tensiunea finală este redusă datorită existenţei unei căderi de tensiune pe această „impedanţă serie”. Efectul este cu atât mai pronunţat cu cât curentul sarcinii creşte.</p>

#+CAPTION: circuit electric echivalent al inductanţelor de scăpări şi transformatorul ideal, fără scăpări
[[../poze/02313.png]]

<p>Dacă cuplajul magnetic dintre cele două înfăşurări ar fi mai „strâns”, de exemplu, k=0.99999 (în loc de 0.999), valorile tensiunii în cele două înfăşurări ar fi din nou aproximativ egale (10 V), păstrându-se şi egalitatea dintre cei doi curenţi.</p>

<p>Din păcate, construirea unui transformator real, cu un asfel de coeficient de cuplaj magnetic, este foarte dificilă. O soluţie de compromis constă în folosirea unei inductanţe mai scăzute pentru ambele înfăşurări (1 H, în loc de 100 H), deoarece o inductanţă mai scăzută duce şi la o inductanţă de scăpări mai scăzută, oricare ar fi coeficientul de cuplaj magnetic. Rezultatul este o cădere de tensiune pe sarcină mult mai bună, menţinând aceeiaşi valoare a curentului şi a cuplajului:</p>

#+CAPTION: circuit electric simplu cu transformator
[[../poze/02132_2.png]]

<p>Prin simpla utilizare a unei inductanţe mai mici pentru cele două înfăşurăi, căderea de tensiune pe sarcină este din nou „ideală”, aproximativ 10 V, aceeiaşi valoare cu a sursei de alimentare. Cu siguranţă că ne putem întreba, „Dacă tot ceea ce este necesar pentru atingerea unei performanţe ideale în cazul unei sarcini mari, este reducerea inductanţei, de ce să ne mai facem griji cu privire la eficienţa cuplajului magnetic? Dacă este imposibilă proiectarea transformatoarelor cu coeficienţi de cuplaj perfecţi, dar înfăşurările cu inductanţe mici sunt uşor de construit, atunci de ce nu am construi transformatoare cu inductanţe mici şi cuplaj scăzut pentru obţinerea unei eficienţe ridicate?”</p>

<p>Pentru a răspunde acestei nedumeriri, considerăm un nou circuit, în care sarcina de data aceasta este de 1 Ω în loc de 15 Ω, toate celalalte valori rămânând egale. Cu inductanţe mai mici pentru înfăşurări, tensiunile din primar şi secundar sunt aproximativ egale (10 V), dar curenţii celor două înfăşurări nu sunt egali, cel din primar fiind 28.35 mA, de aproape trei ori mai mare decât cel din secundar, de doar 10 mA. De ce se întâmplă acest lucru? Cu o inductanţă mult mai mică a înfăşurăii primare, reactanţa inductivă este mult mai mică, şi prin urmare, curentul de magnetizare este mult mai mare. O parte importantă a curentului din înfăşurarea primară este folosit doar pentru magnetizarea miezului feromagnetic şi nu pentru <i>transferul</i> de energie spre înfăşurarea secundară.</p>

<p>Un transformator ideal, cu înfăşurări primare şi secundare identice, ar dezvolta aceeleaşi căderi de tensiune şi curenţi în ambele înfăşurări, indiferent de valoarea sarcinii. Ideal, transformatoarele ar trebui să transfere putere electrică din primar în secundar ca şi cum sarcina (secundar) ar fi conectată direct la sursă (primar). Acest lucru se poate realiza doar dacă există un cuplaj magnetic <i>perfect</i> între cele două înfăşurări. Din moment ce acest lucru nu este imposibil, transformatoarele trebuiesc proiectate pentru a funcţiona între anumite valori ale tensiunii şi sarcinii, valori cunoscute dinainte, pentru a oferi maximul de eficienţă.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Inductanţa mutuală reprezintă situaţia în care fluxurile magnetice a două sau a mai multor bobine sunt cuplate între ele, asfel încât există o tensiune indusă într-una dintre bobine direc proporţională cu rata de variaţie a curentului în cealaltă</li>
	<li>Un transformator este un dispozitiv construit din două sau mai multe bobine, una dintre ele alimentată în curent alternatic ce induce o tensiune alternativă în cealaltă bobină. Dacă a doua bobină este conectată la o sarcină, puterea sursei de tensiune a primei bobine este cuplată electromagnetic la sarcina celei de a doua</li>
	<li>Bobina transformatorului alimentată în curent alternativ se numeşte <i>înfăşurare primară</i>. Bobina ne-alimentată a transformatorului se numeşte <i>înfăşurare secundară</i></li>
	<li>Fluxul magnetic al miezului este defazat cu 90<sup>o</sup> în urma tensiunii de alimentare. Curentul furnizat de sursa de alimentare în înfăşurarea primară pentru producerea acestui flux magnetic, poartă numele de <i>curent de magnetizare</i>, şi este şi acesta defazat cu 90<sup>o</sup> în urma tensiunii de alimentare</li>
	<li>Curentul total din primar al unui transformator neconectat la sarcină, se numeşte <i>curent de excitaţie</i>, şi este compus din curentul de magnetizare plus curentul datorat pierderilor miezului feromagnetic. Într-un transformator real, forma de undă a acestuia nu este niciodată sinusoidală</li>
	<li>Fluxul magnetic al miezului induce o tensiune electrică în orice înfăşurare realizată în jurul acestuia. Tensiunile induse sunt, ideal, în fază cu tensiunea primară (a sursei) şi au aceeiaşi formă de undă</li>
	<li>Orice curent prin secundar, datorită sarcinii, va produce un curent echivalent în înfăşurarea primară, curent generat de sursă, ca şi când sursa ar fi conectată direct la sarcină</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
