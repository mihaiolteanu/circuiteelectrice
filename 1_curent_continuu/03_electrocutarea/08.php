<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Utilizarea aparatelor de măsură</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>8. Utilizarea aparatelor de măsură</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Utilizarea corectă şi în condiţii de siguranţă a unui aparat de măsură este o deprindere extrem de importantă pentru orice electrician sau electronist. Această utilizare prezintă un anumit risc de electrocutare datorită tensiunilor şi curenţilor prezenţi în circuitul de măsurat. Din această cauză, trebuie acţionat foarte atent atunci când utilizăm aparatele de măsură.</p>

<p>Cel mai utilizat aparat de măsură electric poartă numele de multimetru. Denumirea vine de la faptul că aceste aparate sunt capabile să măsoare o plajă largă de variabile, precum tensiune, curent, rezistenţă şi altele. În mânile unei persoane competente, multimetrul reprezintă un instrument de lucru eficient dar şi un dispozitiv de protecţie. În mâinile unei persoane ignorante sau neatente, acesta poate deveni o reală sursă de pericol la conectarea într-un circuit alimentat.</p>

<p>Cu siguranţă că există o multitudine de modele, fiecare cu caracteristici diferite, totuşi, multimetrul prezentat aici este unul general, utilizat pentru prezentarea principiilor sale de bază.</p> 

#+CAPTION: multimetru digital; prezentare generală
[[../poze/noi/00340.png]]

<p>Putem observa că afişajul este digital, din acest motiv, acest tip de multimetru mai poartă numele de multimetru digital. Selectorul rotativ (setat pe poziţia Off (închis) în acest caz) se poate găsi în 5 poziţii diferite: 2 poziţii „V” (tensiune), 2 poziţii „A” (curent), şi o poziţie Ω (rezistenţă). De asemenea, poziţia marcată cu o pereche de linii orizontale, paralele, una continuă şi cealaltă întreruptă, reprezintă curentul continuu, iar poziţie reprezentată cu ajutorul unei forme de undă sinusoidale, reprezintă curentul alternativ. Cu alte cuvinte, intern, multimetrul utilizează metode diferite pentru măsurarea curentului şi a tensiunii în curent continuu respectiv curent alternativ, de aici şi necesitatea existenţei a două poziţii pentru fiecare dintre cele două variabile.</p>

<p>Pe suprafaţa multimetrului există trei prize în care putem introduce sondele de test. Sondele nu sunt altceva decât conductori speciali utilizaţi pentru realizarea legăturii dintre circuit şi multimetru. Condcutorii sunt acoperiţii de o izolaţie colorată, neagră sau roşie, pentru a preveni contactul direct, iar vârfurile sunt ascuţite şi rigide.</p>

#+CAPTION: multimetru digital; prezentare generală
[[../poze/noi/00341.png]]

<p>Sonda neagră va fi tot timpul introdusă în priza neagră a multimetrului, cea marcată cu „COM” (comun). Sonda roşie va fi introdusă fie în priza marcată pentru tensiune şi rezistenţă (V Ω) sau în cea pentru curent (A), în funcţie de ce variabilă dorim să măsurăm.</p>

<h2>Utilizarea multimetrului - exemple</h2>

<h3>Măsurarea unei tensiuni de curent continuu</h3>

#+CAPTION: multimetru digital; măsurarea tensiunii de curent continuu a unei baterii
[[../poze/noi/00342.png]]

<p>Primul exemplu constă din măsurarea unei tensiuni de c.c. la bornele unei baterii. Observaţi prizele la care sunt conectate cele două sonde ale multimetrului (V Ω şi COM) şi faptul că selectorul este setat pe „V” în curent continuu.</p>

<h3>Măsurarea unei tensiuni de curent alternativ</h3>

#+CAPTION: multimetru digital; măsurarea tensiunii de curent alternativ la priză
[[../poze/noi/00343.png]]

<p>Singura diferenţa constă în schimbarea poziţiei selectorului pe poziţie „V” în curent alternativ. Din moment ce efectuăm tot o măsurătoare de tensiune, sondele multimetrului vor rămâne conectate în aceleaşi prize.</p>

<h3>Surse de pericol</h3>

<p>În ambele cazuri de mai sus, este extrem de important să nu atingem vârfurile celor două sonde între ele, atunci când acestea se află în contact cu punctele lor respective din circuit. Dacă acest lucru are loc, se va forma un scurt-circuit, lucru pe care nu-l dorim.</p>

#+CAPTION: multimetru digital; măsurarea tensiunii de curent alternativ la priză
[[../poze/noi/00344.png]]

<p>Măsurarea tensiunilor este probabil cea mai folosită funcţie a unui multimetru. Este cu siguranţă cea mai folosită metodă pentru asigurarea împotriva electrocutărilor, şi din acest motiv, trebuie foarte bine înţeleasă de către utilizatorul acestuia. Fiindcă tensiunea este tot timpul relativă între două puncte, aparatul de măsură trebuie să fie conectat între două puncte din circuit pentru a putea oferi un rezultat satisfăcător. Acest lucru înseamnă că ambele sonde trebuie ţinute de mânile utilizatorului pentru crearea contactelor. Dar ştim deja că cea mai periculoasă cale pentru curent, în cazul electrocutărilor, este între cele două mâini, deoarece curentu în acest caz trece direct prin inimă; din această cauză, o astfel de măsurătoare reprezintă tot timpul un potenţial pericol.</p>

<p>Dacă izolaţia sondelor este deteriorată sau crăpată, degetele utilizatorului pot intra în contact direct cu conductorii de curent în timpul măsurătorilor. Dacă putem folosi doar o singură mână pentru ambele sonde, aceasta ar fi cea mai sigură metodă de efectuare a măsurătorilor. Câteodată este posibilă „agăţarea” uneia dintre sonde pe circuit, nefiind nevoiţi să o mai ţinem în mână; acest lucru reprezintă o reducere a pericolului electrocutării. Pentru această operaţie, exista accesorii speciale ce pot fi ataşate pe vârful sondelor.</p>

<p>Ţineţi minte că sondele aparatului de măsură sunt parte integrantă a aparatului însuşi. Dacă aveţi nevoie de accesorii speciale pentru sonde, consultaţi catalogul producătorului aparatului de măsură sau cataloagele altor producători de echipamente de măsură. Nu încercaţi să vă construiţi propriile sonde! Proiectarea sau realizarea lor defectuoasă vă pot pune într-un real pericol atunci când lucraţi într-un circuit alimentat!</p>

<p>De asemenea, trebuie ţinut minte că multimetrele digitale realizează diferenţa dintre c.c. şi c.a. După cum am văzut mai devreme, atât tensiunile de curent continuu cât şi cele de curent alternativ se pot dovedi periculoase; prin urmare, când folosiţi un multimetru pentru asigurarea unui circuit împotriva electrocutării, fiţi siguri că aţi efectuat măsurătorile atât în c.c. cât şi în c.a., chiar daca nu v-aţi aştepta să le găsiţi pe amandouă!</p>

<h3>Numărul măsurătorilor necesare</h3>

<p>Atunci când verificăm prezenţa unor posibile tensiuni periculoase, trebuie să luăm în calcul toate punctele din scenariul respectiv.</p>

<p>De exemplu, să presupunem că deschidem un panou electric şi găsim trei conductori ce alimentează o sursă în curent alternativ. Oprim alimentarea prein intermediul întrerupătorului, încercăm să pornim sarcina pentru a verifica absenţa oricărei tensiuni şi vedem că nu se întâmplă nimic. Următorul pas îl reprezintă măsurarea tensiunii cu ajutorul aparatului de măsură.</p>

<p>Prima dată verificăm aparatul de măsură asupra unei surse de tensiune cunoscute, pentru a ne asigura de funcţionarea sa corectă (priză de c.a., de exemplu). Facem acest lucru şi observăm ca multimetrul funcţionează corect. Apoi, trebuie să măsurăm căderea de tensiune dintre aceste fire ale panoului. Dar tensiunea reprezintă o valoare între două puncte, prin urmare, ce puncte trebuie să luăm în considerare?</p>

#+CAPTION: panou electric; schiţă
[[../poze/noi/00353.png]]

<p>Adevărul este că trebuie să măsurăm căderea de tensiune între toate combinaţiile posibile, A cu B, B cu C şi A cu C. Dacă măsurăm o cădere de tensiune diferită de zero, în oricare din aceste scenarii, circuitul nu se află într-o stare de energie zero. Dar asta nu e tot. Un multimetru nu va înregistra tensiunile de c.c. atunci când selectorul este poziţionat pe c.a. şi invers; prin urmare, trebuie să mai efectuăm un set de trei măsurători pentru fiecare din cele două stări.</p>

<p>Totuşi, nici în acest caz nu am reuşit să acoperim toate posibilităţile. Ţineţi minte că tensiunile periculoase pot să apară între oricare dintre conductori şi pământ (în cazul de faţă, carcasa metalică a panoului electric). Prin urmare, trebuie să măsurăm căderile de tensiune şi între fiecare din cele trei puncte şi pământ, atât în c.c cât şi în c.a. Acest lucru duce numărul măsurătorilor la 12, pentru un scenariu aparent simplu. Desigur, după ce toate măsurătorile au fost încheiate, trebuie să re-testăm funcţionarea corectă a multimetrului, prin măsurarea unei căderi de tensiune cunoscute (priza, de exemplu).</p>

<h3>Măsurarea rezistenţelor</h3>

<p>În cazul măsurării rezistenţelor, sondele vor rămâne conectate în aceleaşi prize ale multimetrului ca şi în cazul măsurătorilor de tensiune, dar selectorul trebuie poziţionat pe Ω (vezi figura). Măsurătoarea se realizează simplu, prin poziţionarea vârfurilor celor două sonde pe capetele libere ale rezistorilor.</p>

#+CAPTION: panou electric; schiţă
[[../poze/noi/00345.png]]

<p>Atenţie însă, măsurarea rezistenţelor se face doar asupra componentelor nealimentate! Atunci când multimetrul se află în modul „rezistenţă”, acesta se foloseşte de o mică baterie internă pentru generarea unui curent mic prin componentul de măsurat. Prin sesizarea dificultătii de trecere a curentului prin component, se poate determina rezistenţa acestuia. Dacă există o sursă adiţională de tensiune în circuitul format din aparatul de măsură şi componentul în cauză, măsurătorile realizate vor fi greşite. În cel mai rău caz, prezenţa unei surse adiţionale de tensiune în circuit, poate duce la defectarea aparatului de măsură.</p>

<h3>Continuitatea firelor</h3>

<p>Modul „rezistenţă” a unui multimetru este foarte folositor şi pentru determinarea continuitătii conductorilor. Atunci când exista o un contact bun între vârfurile sondelor, aparatul va indicat o valoarea aproximativ egală cu 0 Ω. Dacă sondele nu ar prezenta nicio rezistenţa internă, această măsurătoare ar da exact 0 Ω.</p>

#+CAPTION: multimetru digital; atingerea sondelor între ele
[[../poze/noi/00346.png]]

<p>Dacă sondele nu se află în contact direct una cu cealaltă, sau daca sunt conectate la capetele opuse ale unui conductor întrerupt, acesta va indica o rezistenţă infinită, reprezentată de obicei pe afişajul multimetrului prin prescurtarea „O.L.” (open loop (eng.) - circuit deschis).</p>

#+CAPTION: multimetru digital; circuit deschis (O.L.)
[[../poze/noi/00347.png]]

<h3>Măsurarea curentului cu ajutorul multimetrului</h3>

<p>Aceasta reprezintă cea mai complexă şi periculoasă aplicaţie a multimetrului. Motivul este destul de simplu: curentul de măsurat trebuie să treacă <b>prin</b> aparatul de măsură, ceea ce înseamnă că multimetrul trebuie integrat în circuit. Pentru a realiza acest lucru, circuit iniţial trebuie oprit, iar multimetrul conectat între cele două puncte ale circuitului deschis. Pentru realizarea propriu-zisă a măsurătorii, selectorul trebuie să se afle în poziţia „A”, fie în c.a., fie în c.c., iar sonda roşie trebuie introdusă în priza marcata cu „A” (vezi figura).</p>

#+CAPTION: multimetru digital; măsurarea curentului
[[../poze/noi/00348.png]]

<p>Următorul pas este deschiderea circuitului pentru a putea conecta multimetrul.</p>

#+CAPTION: multimetru digital; măsurarea curentului; deschiderea circuitului
[[../poze/noi/00349.png]]

<p>Închiderea circuitul se realizează apoi prin multimetru, astfel: conectăm vârfurile sondelor la captele libere ale circuitului deschis, sonda neagră la terminalul negativ al bateriei de 9 V, iar sonda roşie la capătul conductorului liber ce duce la bec.</p>

#+CAPTION: multimetru digital; măsurarea curentului; închiderea circuitului prin intermediul multimetrului
[[../poze/noi/00350.png]]

<p>Deşi acest circuit, cu o sursă de 9 V, este sigur din punct de vedere al electrocutărilor, în circuitele de putere această metodă reprezintă o adevărată sursă de pericol.</p>

<h3>Selectarea curentului sau a tensiunii</h3>

<p>La modificarea poziţiei multimetrului din modul „curent” (ampermetru) în modul „tensiune” (voltmetru), se întâmplă adesea să schimbăm poziţia de pe „A” pe „V” dar să uităm sonda roşie în priza „A” şi nu în priza (V Ω). Dacă aparatul de măsură este apoi conectat la bornele unei surse de tensiune suficient de mare, rezultatul va fi un scurt-circuit prin aparatul de măsură. Atunci când multimeturl se află în poziţia „A”, acesta este proiectat pentru o rezistenţă între vârfurile sondelor ce tinde practic la 0 Ω. În poziţia „V”, lucrurile stau exact invers, rezistenţa dintre vârfurile sondelor este de ordinul mega-ohmilor (MΩ).</p>

#+CAPTION: multimetru digital setat pentru măsurarea curentului dar folosit pentru măsurarea tensiunii; apariţia scurt-circuitului
[[../poze/noi/00351.png]]

<p>Pentru a preveni acest lucru, majoritatea multimetrlor produc un avertisment sonor în cazul în care sonda este introdusă în priza „A” iar selectorul este poziţionat pe „V”.</p>

<h3>Verificarea siguranţei fuzibile interne</h3>

<p>Toate multimetrele de calitate sunt echipate cu siguranţe fuzibile în interior, siguranţe ce se ard la trecerea unui curent excesiv prin ele, precum este cazul exemplului anterior. La fel ca toate dispozitivele de siguranţă, şi aceste siguranţe sunt proiectate în primul rând pentru protecţia echipamentului şi doar apoi pentru protecţia utilizatorului. Un multimetru poate fi utilizat pentru verificarea propriei siguranţe prin setarea pe poziţia „Ω”, iar sondele pe poziţia „A” respectiv „V Ω”. Verificarea se realizează prin contactul direct al celor două sonde.</p>

#+CAPTION: multimetru digital; verificarea siguranţei fuzibile interne
[[../poze/noi/00352.png]]

<p>O siguranţa bună va indica o rezistenţa foarte mică, pe când o siguranţa arsă va indica tot timpul un circuit deschis (O.L.). Valoarea măsurătorii nu este de o importanţă foarte mare, atâta timp cât este mica.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li><strong>Multimetrul</strong> este un aparat de măsură capabil să măsoare tensiunea, curentul şi rezistenţa</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
