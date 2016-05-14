<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Amplificatoare cu reacţie</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>14. Amplificatoare cu reacţie</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Dacă un anumit procent din semnalul de ieşire al amplifiatorului este conectat la intrarea acestuia, asfel încât amplificatorul amplifică o parte din propriul său semnal de ieşire, rezultatul va fi un <i>amplificator cu reacţie</i>. Prin <i>reacţie pozitivă</i> se înţelege creşterea amplitudinii semnalului de intrare, iar o <i>reacţie negativă</i> duce la scăderea semnalului de intrare.</p>

<h2>Amplificator cu reacţie negativă</h2>

<p>Un amplificator echipat cu reacţie negativa este mai stabil, distorsionează mai puţin semnalul de intrare şi, în general, este capabil de amplificarea unor frecvenţe mai largi. Dezavantajul este un factor de amplificare mai scăzut.</p>

<p>Să examinăm un amplificator simplu, iniţial fără reacţie:</p>

#+CAPTION: amplificator emitor comun, fără reacţie
[[../poze/03311.png]]

<p>Configuraţia amplificatorului de mai sus este emitor comun, cu o reţea de polarizare formată din divizorul de tensiune R<sub>1</sub>--R<sub>2</sub>. Condensatorul cuplează semnalul de intrare în c.a., asfel încât sursa de semnal să nu conţină o componentă de c.c. datorită divizorului de tensiune R<sub>1</sub>--R<sub>2</sub>. Rolul rezistorului R<sub>3</sub> este de a controla amplificarea în tensiune, şi l-am putea îndepărta pentru o amplificare în tensiune maximă.</p>

<p>La fel ca în cazul tuturor amplificatoarelor emitor comun, şi acesta <i>inversează</i> semnalul de intrare. Putem vedea mai jos formele de undă ale tensiunilor de intrare şi ieşire:</p>

#+CAPTION: amplificator emitor comun, fără reacţie; observarea formelor de undă de la intrare şi ieşire
[[../poze/03312.png]]

<h3>Reacţia negativă între colector şi bază</h3>

<p>Datorită faptului că semnalul de ieşire este inversat (defazat cu 180<sup>o</sup> (antifază)), orice conxiune între ieşirea (colector) şi intrarea (bază) tranzistorului va duce la apariţia unei reacţii negative:</p>

#+CAPTION: introducerea reacţiei negative pe colector duce la descreşterea semnalului de ieşire
[[../poze/03313.png]]

<p>Rezistenţele R<sub>1</sub>, R<sub>2</sub>, R<sub>3</sub>, şi R<sub>reacţie</sub> funcţionează împreună precum o reţea de semnale, asfel că tensiunea de la baza tranzistorului (faţă de pământ) reprezintă o medie o tensiunii de intrare şi a tensiunii de reacţie negativă, rezultând un semnal de o amplitudine redusă la intrarea amplificatorului. Asfel, amplificatorul de mai sus, va avea un factoru de amplificare mai redus, dar o liniaritate îmbunătăţiă (reducerea distorsiunilor) şi o bandă de frecvenţe mărită.</p>

<h3>Reacţia negativă între emitor şi împământarea circuitului</h3>

<p>Aceasta nu este însă singura modalitate de introducere a reacţiei negative într-un amplificator emitor comun. O altă metodă, deşi mai greu de înţeles la început, constă în introducerea unui rezistor între terminalul emitorului şi împământarea circuitului:</p>

#+CAPTION: introducerea reacţiei negative pe emitor în configuraţia amplificatorului emitor comun
[[../poze/03314.png]]

<p>În acest caz, căderea de tensiune pe rezistorul de reacţie va fi direct proporţională cu valoarea curentului prin emitorul tranzistorului, opunându-se în acest fel influenţei semnalului de intrare asupra joncţiunii bază-emitor a tranzistorului. Să ne uităm mai atent la joncţiunea emitor-bază pentru a ne da seama de efectele introducerii acestui rezistor în circuit:</p>

#+CAPTION: amplificator emitor comun fără reacţie
[[../poze/03315.png]]

<p>Atunci când nu avem rezistorul de reacţie în circuit (R<sub>reacţie</sub>), tensiunea de intrare (V<sub>intrare</sub>) ce trece de condensatorul de cuplaj şi de reţeaua formată din rezistorii R<sub>1</sub>/R<sub>2</sub>/R<sub>3</sub>, se va regăsi în totalitate pe joncţiunea bază-emitor a tranzistorului sub forma tensiunii de intrare (V<sub>B-E</sub>). Cu alte cuvinte, fără R<sub>reacţie</sub>, V<sub>B-E</sub> = V<sub>intrare</sub>. Prin urmare, dacă V<sub>intrare</sub> creşte cu 100 mV, atunci şi V<sub>B-E</sub> creşte cu 100 mV: variaţia uneia este egală cu variaţia celeilalte, din moment ce ambele tensiunii sunt egale.</p>

<p>Să examinăm acum efectele introducerii rezistorului R<sub>reacţie</sub> între emitor şi împământare:</p>

#+CAPTION: amplificator emitor comun cu reacţie între emitor şi împământare
[[../poze/03316.png]]

<p>De data aceasta, V<sub>reacţie</sub> + V<sub>B-E</sub> = V<sub>intrare</sub>. Odată cu introducerea rezistenţei de reacţie în bucla (V<sub>intrare</sub>, V<sub>B-E</sub>), V<sub>B-E</sub> nu va mai fi egală cu V<sub>intrare</sub>. Ştim faptul că rezistorul R<sub>reacţie</sub> va avea o cădere de tensiune la bornele sale proporţională cu valoarea curentului prin emitor, valoare ce este controlată de curentul de bază, curent ce este la rândul lui controlat de căderea de tensiune pe joncţiunea bază emitor (V<sub>B-E</sub>) a trnazistorului. Asfel, dacă tensiunea de intrare creşte, acest lucru va duce la creşterea lui V<sub>B-E</sub>, ce duce la creşterea curentului bazei, ce duce la creşterea curentului prin colector (sarcină), ce cauzează creşterea curentului prin emitor, care la rândul lui va determina creşterea căderii de tensiune pe rezistorul de reacţie R<sub>reacţie</sub>. Dar această creştere a căderii de tensiune pe R<sub>reacţie</sub> se scade din tensiune de intrare (V<sub>intrare</sub>), lucru ce duce la reducerea căderii de tensiune între bază şi emitor (V<sub>B-E</sub>); creşterea reală a lui V<sub>B-E</sub> va fi de fapt mai mică decât creşterea lui V<sub>intrare</sub>. O creştere de 100 mV a tensiunii de intrare nu va mai duce la o creştere de 100 mV a tensiunii de polarizare bază-emitor, întrucât cele două tensiuni <i>nu</i> sunt egale între ele.</p>

<p>Ca urmare, tensiunea de intrare exercită un control mai redus asupra tranzistorului faţă de cazurile precedente, iar amplificarea în tensiune este şi ea redusă ca urmare a introducerii rezistorului de reacţie.</p>

<h2>Deriva termică</h2>

<p>În circuitele emitor comun practice, reacţia negativă nu este doar un lux, ci o necesitate pentru funcţionarea stabilă a circuitului. Într-o lume perfectă, am putea construi şi utiliza un amplificator emitor comun fără reacţie negativă, iar acest lucru ne-ar furniza o amplificare mare în tensiune. Din păcate însă, relaţia dintre tensiunea bază-emitor şi curentul bază-emitor variază cu temperatura, acest lucru fiind descris de „ecuaţia diodei”. Pe măsură ce tranzistorul se încălzeşte, căderea de tensiune pe joncţiunea bază-emitor necesară pentru  aceeiaşi valoare a curentului va fi tot mai mică. Acest lucru nu este de dorit, întrucât divizorul de tensiune R<sub>1</sub>--R<sub>2</sub> este proiectat să furnizeze curentul corect pentru funcţionarea tranzistorului la punctul static de funcţionare. Dacă relaţia curent/tensiune a tranzistorului variază cu temperatură, valoarea tensiunii de polarizare în c.c, necesară pentru operarea tranzistorului în clasa dorită, se va modifica. Un tranzistor încălzit va conduce un curent şi mai mare pentru aceeiaşi valoare a tensiunii de polarizare, ducând la o încălzire şi mai mare a acestuia şi la un curent şi mai mare de polarizare. Efectul este cunoscut sub numele de <i>derivă termică</i>.</p>

<p>Amplificatoarele colector comun nu sunt afectate de deriva termică. De ce? Răspunsul este strâns legat de reacţia negativă:</p>

#+CAPTION: amplificator colector comun (repetor pe emitor) fără reacţie
[[../poze/03317.png]]

<p>Putem observa că sarcina amplificatorului colector comun este conectată în exact acelaşi loc în care am introdus R<sub>reacţie</sub> în circuitul precedent, şi anume, între emitor şi împământare. Acest lucru înseamnă că singura cădere de tensiune pe joncţiunea bază-emitor este reprezentată de <i>diferenţa</i> dintre V<sub>intrare</sub> şi V<sub>ieşire</sub>, rezultatul fiind o amplificare în tensiune foarte mică (de obicei aproape de 1). Apariţia derivei termice este imposibilă pentru acest tip de amplificator: în cazul în care curentul bazei ar creşte datorită încălzirii tranzistorului, curentul emitorului va creşte şi el, rezultând o cădere de tensiune mai mare pe sarcină, cădere de tensiune ce se <i>scade</i> din tensiunea de intrare (V<sub>intrare</sub>); acest lucru duce la descreşterea căderii de tensiune între bază şi emitor.</p>

<h2>Dependenţa amplificării în tensiunea de factorul beta este redusă cu ajutorul reacţiei negative</h2>

<p>Prin adăugarea unui rezistor de reacţie între emitor şi împământare în cazul unui amplificator emitor comun, amplificatorul se va comporta mai puţin precum un amplificator emitor comun „pur” şi puţin mai mult precum un amplificator colector comun. Valoarea acestui rezistor de reacţie este în general mult mai mică decât valoarea sarcinii, minimizând cantiatea de reacţie negativă şi menţinând amplificarea în tensiune destul de ridicată.</p>

<p>Un alt beneficiu al reacţiei negative constă în faptul că scade dependenţa amplificării în tensiune faţă de caracteristicile tranzistorului. Observaţi că în cazul amplificatorului colector comun, amplificarea în tensiune este aproximativ egală cu 1, indiferent de factorul beta (β) al amplificatorului. Acest lucru înseamnă, printre altele, că putem schimba tranzistorul din configuraţie colector comun cu un alt tranzistor al cărui factor beta este diferit, fără a vedea modificări semnificative faţa de amplificarea tensiunii. Într-un amplificator emitor comun, amplificarea în tensiune depinde foarte mult de β. Dacă ar fi să înlocuim un tranzistor dintr-o configuraţie emitor comun, cu un tranzistor al cărui β este diferit, amplificarea în tensiune ar suferi modificări substanţiale. Într-un amplificator emitor comun cu reacţie negativă, amplificarea în tensiune va fi de asemenea dependentă de factorul beta într-o oarecare măsură, dar nu într-o asemenea măsură precum fără reacţie; circuitul va fi în acest caz mult mai previzibil, în ciuda variaţiilor factorului β al tranzistorilor folosiţi.</p>

<h2>Condensatorul de decuplare</h2>

<p>Faptul că trebuie să introducem o reacţie negativă într-un amplificator emitor comun pentru evitarea derivei termice nu este o soluţie satisfăcătoare. Putem evita deriva termică fără a fi nevoiţi să suprimăm factorul de amplificare în tensiune ridicat al acestui tip de amplificator? Putem găsi o soluţie dacă analizăm îndeaproape această problemă: tensiunea amplificată care trebuie minimizată pentru evitarea derivei termice, este cea de c.c., nu cea de c.a. Nu semnalul de intrare în c.a. este cel care duce la apariţia derivei termice, ci tensiunea de polarizare în c.c., tensiune necesară pentru o anumită clasă de funcţionare; este acea tensiune de c.c. folosită pentru a „păcăli” tranzistorul (un dispozitiv de c.c.) săamplifice şi semnale de c.a. Putem suprima amplificarea în c.c. fără ca acest lucru să afecteze amplificare în c.a., dacă putem găsi o cale prin care reacţia negativă să funcţioneze doar în c.c. Cu alte cuvinte, dacă semnalul reintrodus de la ieşire la intrare este un semnal de c.c., nu de c.a.</p>

<p>Dacă vrem ca reacţia negativă să conţină doar semnale de c.c., dar nu şi semnale de c.a., avem nevoie de o impedanţa mare pentru c.c. dar mică pentru c.a. Ce tip de circuit prezintă o impedanţa mare la c.c. dar o impedanţă mică la c.a.? Desigur, un filtru trece-sus!</p>

<p>Prin conectarea unui condensator în paralel cu rezistorul de reacţie, putem crea exact situaţia de care avem nevoie: o cale dinspre emitor spre împământare ce este mai uşor de parcurs pentru semnalele de c.a. decât cele de c.c.</p>

#+CAPTION: amplificator emitor comun cu reacţie negativă pe emitor şi condensator de decuplare al emitorului
[[../poze/03318.png]]

<p>Noul condensator decuplează semnalele de c.a. dinspre emitor spre împământare, asfel încât să nu existe o cădere de tensiune apreciabilă (impedanţă mică, cădere de tensiune mică) între emitor şi împământare, tensiunea care ar putea duce la suprimarea amplificării în tensiune a circuitului. Curentul continuu, pe de altă parte, nu poate trece prin condensatorul de decuplare (impedanţă mare în c.c.) şi trebuie să treacă prin rezistorul de reacţie; acest lucru duce la apariţia unei căderi de tensiune între emitor şi împământare ce afectează amplificarea în tensiune a circuitului şi stabilizează răspunsul amplificatorului în c.c. prevenind astfel deriva termică. Deoarece vrem ca reactanţa (X<sub>C</sub>) acestui condensator să fie cât mai mică posibilă, acesta ar trebui să fie cât mai mare. Deoarece polaritatea acestui condensator nu se va modifica niciodată, putem folosi un condensator polarizat (electrolitic) în această situaţie.</p>

<h2>Folosirea amplificatoarelor etajate pentru reducerea pierderilor de amplificare în tensiune</h2>

<p>O altă abordare a problemei reducerii amplificării în tensiune datorită utilizării reacţiei negative, este folosirea mai multor etaje de amplificare în loc de unul singur. În cazul în care amplificarea atenuată în tensiune a unui singur tranzistor nu este suficientă pentru aplicaţia respectivă, putem folosi mai mulţi tranzistori pentru compensarea reducerii cauzate de reacţia negativă. Circuitul de mai jos constă dint trei etaje de amplificare în conexiune emitor comun cu reacţie negativă:</p>

#+CAPTION: amplificator emitor comun în trei etaje cu reacţie negativă
[[../poze/03321.png]]

<p>Reacţia negativă de la etajul final înspre intrare se realizează prin intermediul unui singur rezistor, R<sub>reacţie</sub>. Din moment ce fiecare etaj este un amplificator emitor comun (inversor), numărul impar de etaje dinspre intrare spre ieşire va inversa semnalul de ieşire, iar reacţia va fi negativă. Se pot folosi valori relativ mari de reacţie fără a sacrifica amplificarea în tensiune, deoarece această amplficare este foarte mare de la bun început.</p>

<p>La o privire de ansamblu, poate părea că această filozofie nu este elegantă şi este chiar contra-productivă. Nu este adăugarea de etaje unul după altul o metodă cam grosolană de evitare a pierderilor de amplificare în tensiune, datorită utilizării reacţiei negative? Ce rost are să creăm o amplificare în tensiune foarte mare, folosind trei etaje de amplificare, dacă vom atenua oricum această amplificare prin intermediul reacţiei negative? „Rostul” acestei configuraţii este creşterea stabilităţii şi a predicabilităţii circuitului, luat ca întreg. Dacă cele trei etaje de amplificare sunt proiectate pentru furnizarea unei amplificări în tensiune foarte mari (zeci de mii, sau chiar mai mult), fără reacţie, vom descoperi că adăugarea reacţiei negative în circuit se traduce printr-o dependenţă mult mai mică a amplificării în tensiune faţă de amplificările fiecărui etaj în parte; amplificarea în tensiune va fi aporiximativ egală cu <i>simplul</i> raport R<sub>reacţie</sub>/R<sub>intrare</sub>. Cu cât circuitul prezintă o amplificare în tensiune mai mare (fără reacţie), cu atât amplificarea în tensiune va fi mai apropiată de R<sub>reacţie</sub>/R<sub>intrare</sub> odată ce este introdusă şi reacţia în circuit. Cu alte cuvinte, amplificarea în tensiune a acestui circuit depinde <i>doar</i> de valorile celor doi rezistori, şi de nimic altceva.</p>

<p>Acest lucru este un avantaj imens pentru produţia de serie a circuitelor electronice: dacă se pot construi amplificatoare cu o amplificare previzibilă folosind tranzistori cu factori beta diferiţi între ei, selecţia şi înlocuirea componentelor este foarte uşoară. Înseamnă de asemenea că amplificarea variază foarte puţin cu temperatura. Acest principiu de stabilizare a amplificării este dus la extrem în cazul <i>amplificatoarelor operaţionale</i>.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Reacţia înseamnă cuplarea ieşiri unui amplificator la intrarea acestuia</li>
	<li>Reacţia pozitivă produce oscilaţii într-un circuit, asfel că acesta devine instabil</li>
	<li>Reacţia negativă tinde să stabilizeze amplificatorul, asfel încât variaţia semnalului de ieşire este mai mică pentru o anumită variaţie a semnalui de intrare</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
