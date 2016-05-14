<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Tiristorul</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Tiristorul</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Diodele Shockley sunt dispozitive interesante, dar aplicaţiile lor sunt limitate. Utilitatea lor poate fi extinsă prin echiparea lor cu o altă modalitate de agăţare. Dispozitivele astfel rezultate sunt dispozitive de amplificare în adevăratul sens al cuvântului, chiar dacă singurele stări existente sunt pornit şi oprit. Aceste dispozitive poartă numele de tiristoare.</p>

<p>Trecerea de la dioda Shockley la tiristor se realizează cu o singură modificare, şi anume, adăugarea unui al treilea contact structurii PNPN existente.</p>

#+CAPTION: tiristorul; diagrama fizică, schema echivalentă şi simbol
[[../poze/03206.png]]

<p>Dacă poartă unui tiristor nu este conectată în circuit, dispozitivul se comportă exact ca o diodă Shockley. Totuşi, datorită faptului că poarta este conectată direct la baza tranzistorului inferior, aceasta poate fi folosită ca şi alternativă la pornirea dispozitivului. Prin aplicarea unei tensiuni reduse între poartă şi catod, tranzistorul inferior va fi forţat să intre în starea de conducţie datorită curentului de bază rezultat, ceea ce va duce la intrarea în conducţie şi a tranzistorului superior ce va furniza la rândul lui un curent de bază către tranzistorul inferior, curent suficient de mare astfel încât tensiunea pe poartă nu mai este necesară pentru rămânerea dispozitivului în starea de conducţie. Curentul necesar pentru pornirea dispozitivului va fi desigur mult mai mic decât curentul prin tiristor dinspre catod spre anod, astfel încât există un anumit nivel de amplificare existent în circuit.</p>

<p>Această metodă de intrare a tiristorului în conducţie poartă numele de aprindere, şi este cea mai folosită metodă de „agăţare” a dispozitivului în practică. De fapt, tiristoarele sunt de obicei astfel alese încât tensiune de străpungere este mult mai mare decât cea mai mare valoare a tensiunii existente în circuit, astfel încât acestea sa nu poate fi pornite decât printr-o aprindere intenţionată.</p>

<p>Trebuie menţionat că în unele cazuri, stingerea tiristorului se poate realiza prin conectarea directă dintre poartă şi catod, sau prin „aprinderea inversă” a porţi cu o tensiune negativă (faţă de catod), astfel incât tranzistorul inferior este forţat să intre în starea blocată. Acest lucru este posibil doar în unele cazuri deoarece implică şuntarea întregului curent de colector al tranzistorului superior faţă de baza tranzistorului inferior. Acest curent poate să fie substanţial, implicând o stingere dificilă a tiristorului. O variaţie a tiristorului simplu o constituie tiristorul cu stingere pe poartă, sau tiristorul GTO. Dar chiar şi în acest caz, curentul pe poartă necesar stingerii dispozitivului poate urca până la o valoare de 20% din curentul sarcinii. Simbolul tiristorului GTO este prezentat în figura alăturată.</p>

#+CAPTION: simbolul tiristorului cu stingere pe poartă (GTO)
[[../poze/03276.png]]

<p>Singura diferenţa dintre cele două tipuri de tiristoare sunt detaliile proiectării acestora. În cazul GTO-ului, tranzistorul NPN posedă un factor de amplificare în curent β mai mare decât tranzistorul PNP. Acest lucru permite unui curent pe poartă mult mai mic (direct sau invers) să exercită un grad de control mult mai mare asupra conducţiei dintre catod şi anod, agăţarea tranzistorului PNP fiind mult mai dependentă de tranzistorul NPN şi invers.</p>

<p>Un test rudimentar prin care se poate verifica un tiristor poate fi realizat cu ajutorul unui ohmmetru. Datorită faptului că intern, conexiunea dintre poartă şi catod reprezintă o singură joncţiune PN, un aparat de măsură ar trebui să indice o continuitate între aceste terminale, atunci când sonda roşie este conectată pe poartă iar sonda neagră pe catod.</p>

#+CAPTION: verificarea tiristorului cu ohmmetrul
[[../poze/03207.png]]

<p>Toate celelaltă măsurători de continuiate vor indica un circuit deschis („OL” pe afişajul multimetrului). Trebuie înţeles că acesta este un test foarte crud al tiristorului. Este posibil ca indicaţia ohmmetrului să fie bună dar tiristorul să fie totuşi defect. Până la urmă, singura modalitate de testare a unui tiristor este supunerea acestuia unui curent de sarcină.</p>

<p>Dacă folosiţi un multimetru echipat cu funcţia „verificare diodă”, tensiunea joncţiunii poartă-catod s-ar putea să nu corespundă celei prevăzute de o joncţiune PN de siliciu (aproximativ 0,7 V), fiind mult mai mică. Acest lucru se datorează rezistorului intern conectact în cazul unor tirtistoare între poartă şi catod . Acest rezistor este introdus pentru a preveni aprinderea accidentală datorată creşterii bruşte şi de scurtă durată a tensiunii din cauza zgomotului prezent în circuit sau datorită descărcării sarcinilor electrice statice. Cu alte cuvinte, având un rezistor conectat între joncţiunea poartă-catod, necesită un semnal de aprindere mult mai mare (curent substanţial) pentru a porni tiristorulu. Această caracteristică se regăseşte în cazul tiristoarelor mari şi nu în cazul celor mici. Trebuie menţionat faptul că un tiristor echipat cu un rezistor intern între poartă şi catod va indica o continuitate în ambele direcţii ale acestor terminale.</p>

#+CAPTION: tiristor cu rezistor intern conectat între poartă şi catod
[[../poze/03324.png]]

<p>Tiristoarele „normale”, fără rezistor intern, poartă câteodată numele de tiristoare cu poartă sensibilă, datorită faptului că acestea pot fi foarte uşor aprinse printr-un semnal pozitiv mic pe poartă.</p>

<p>Circuitul de test al tiristorului reprezintă atât un instrument de diagnosticare al tiristoarelor suspecte cât şi o modalitate excelentă de înţelegere a funcţionării de bază ale acestora. Se utilizează o sursă de tensiune de c.c. şi două butoane folosite pentru aprinderea şi stingerea tiristorului.</p>

#+CAPTION: circuit de testare al tiristoarelor
[[../poze/03208.png]]

<p>Acţionarea întrerupătorului normal-deschis duce la conectarea porţii la anod, permiţând trecerea curentului dinspre terminalul negativ al bateriei, prin joncţiunea PN catod-poartă, prin întrerupător, prin rezistorul de sarcină şi înapoi la baterie. Acest curent prin poartă ar trebui să forţeze aprinderea tiristorului, permiţând trecerea curentului dinspre catod direct spre anod fără a mai fi nevoie de un curent prin poartă. Când întrerupătorul normal-deschis revine la poziţia sa iniţială (deschisă), sarcina va rămâne energizată.</p>

<p>Acţionarea întrerupătorului normal-închis duce la deschiderea circuitului, forţând încetarea curentului prin tiristor şi implicit stingerea acestuia.</p>

<p>Dacă aprinderea tiristorului nu are loc, se poate ca problema să fie sarcina şi nu tiristorul. Pentru menţinerea tiristorului în stare de conducţie este necesară o anumită valoare minimă a curentului prin acesta. Această valoare minimă poartă numele de curent de menţinere. O sarcină cu o rezistenţa mult prea mare nu va putea permite existenţa unui curent suficient de mare pentru menţinerea tiristorului în stare de conducţie la încetarea curentului pe poartă, dând impresia unui tiristor stricat în circuitul de test. Valorile curenţilor de menţinere pentru diferiţi tiristori sunt disponibile de la producători. Valorile tipice se situează în jurul a 1 mA-50 mA, sau mai mult pentru tiristorii mai mari.</p>

<p>Testul nu este însă complet dacă nu se verifică şi limita tensiunii de străpungere directe a tiristorului prin creşterea tensiunii sursei de c.c. (fără acţionarea întrerupătorului normal-deschis) până în momentul în care tiristorul intră în conducţie fără existenţa unui curent pe poartă. Atenţie însă, un astfel de test s-ar putea să necesite o tensiune extrem de mare: majoritatea tiristoarelor de putere au o tensiune de străpungere de 600 V sau chiar mai mult !</p>

<p>În această formă simplă, circuitul de test al tiristorului poate fi folosit pe post de circuit de control al pornirii/opririi unui motor, lampă sau orice altă sarcină practică.</p>

#+CAPTION: circuit cu tiristor pentru controlul pornirii/opririi unui motor
[[../poze/03209.png]]

<h2>Circuit de protecţie crowbar</h2>

<p>O altă utilizare practică a unui tiristor într-un circuit de c.c. o reprezintă un dispozitiv crowbar pentru protecţia la supratensiune. Un circuit crowbar este compus dintr-un tiristor conectat în paralel cu ieşirea unei surse de tensiune de c.c.; scopul este plasarea unui scurt-circuit pe ieşirea sursei de tensiune pentru prevenirea unei tensiuni excesive pe sarcină. Distrugerea tiristorului şi a sursei de tensiune se poate preveni prin amplasarea unei siguranţe fuzibile sau a unei rezistentenţe serie considerabile înaintea tiristorului pentru limitarea curentului de scurt-circuit. În figura alăturată, circuitul de aprindere al tiristorului este omis pentru simplitate.</p>

#+CAPTION: circuit crowbar cu tiristor pentru protecţie la supratensiune
[[../poze/03210.png]]

<p>Se poate utiliza un dispozitiv sau un circuit de detectare a tensiunii de ieşire pe poarta tiristorului, astfel încât, în momentul apariţiei unei supra-tensiuni, se va aplica o tensiune între poartă şi catod, tensiune ce duce la aprinderea tiristorului şi arderea siguranţei fuzibile. Efectul este aproximativ similar cu aşezarea unei răngi solide de fier (din engl. crowbar) direct între terminalele de ieşire ale sursei de tensiune, de aici şi denumirea circuitului.</p>

<p>Majoritatea aplicaţiilor tiristoarelor însă sunt pentru controlul circuitelor de putere în c.a., chiar dacă aceste dispozitive sunt uni-direcţionale (dispozitive de c.c.). În cazul curenţilor bidirecţionali, se pot utiliza mai multe tiristoare în acelaşi circuit. Principalul motiv pentru care tiristoarele sunt folosite pentru circuitele de putere în c.a. este răspunsul unic al acestora faţă de curentul alternativ. După cum am vazut şi în cazul tiratronului şi al DIAC-ului, aceste dispozitive intră în starea de conducţie peste un anumită valoare a formei de undă alternative şi rămâne în această stare pentru tot restul semi-perioadei, până în momentul în care curentul scade la zero. Cu puţin înainte de trecerea prin zero a formei de undă de curent, tiristorul va intra în starea blocată datorită curentului prea mic (acest comportament mai poartă numele şi de comunaţie naturală) şi va trebui re-pornit (re-aprins) în următoarea semi-perioadă. Rezultatul este o formă de undă a curentului echivalentă cu o undă sinusoidală „tăiată”. Graficul formei de undă al DIAC-ului ca şi răspuns la o tensiune de c.a a cărei vârf depăşeşte tensiunea de străpungere este reluat în figura alăturată.</p>

#+CAPTION: graficul formei de undă a DIAC-ului
[[../poze/03205.png]]

<p>În cazul DIAC-ului, acea tensiune de străpungere are o valoare fixă. În cazul tiristoarelor, putem controla exact momentul în care dispozitivul intră în starea de conducţie prin aprinderea porţii în orice moment de-a lungul formei de undă. Prin conectarea unui circuit de control adecvat pe poarta tiristorului, putem „tăia” unda sinusoidală în orice punct; rezultatul este un tiristor comandat în timp.</p>

<p>Să considerăm circuitul alăturat, de exemplu. În acest caz, un tiristor este conectate într-un circuit ce controlează puterea pe o sarcină de la o sursă de curent alternativ.</p>

#+CAPTION: circuit cu tiristor
[[../poze/03211.png]]

<p>Fiind un dispozitiv uni-direcţional, tot ceea ce poată să realizeze este să transmită doar o semi-perioadă spre sarcină. Totuşi, pentru a putea demonstra conceptul de comandă a tiristorului, acest circuit simplu este mai bun decât un circuit folosind două tiristoare pentru comanda întregii forme de undă.</p>

<p>Fără existenţa unui semnal pe poartă şi cu valoarea tensiunii c.a. mult sub tensiunea de străpungere a tiristorului, dispozitivul nu va intra niciodată în starea de conducţie. Conectând poarta tiristorului la anod prin intermediul unei diode redresoare standard (pentru prevenirea curentului invers prin poartă în cazul în care tiristorul posedă un rezistor intern între poartă şi catod), va permite pornirea tiristorului aproape instant la începutul fiecărei semi-perioade pozitive.</p>

#+CAPTION: circuit cu tiristor; forma de undă
[[../poze/03212.png]]

<p>Putem întârzia pornirea tiristorului prin introducerea unei rezistenţe în circuitul porţii, rezistenţă ce creşte valoarea căderii de tensiune necesară pe poartă. Cu alte cuvinte, dacă mărim rezistenţa la care sunt supuşi electronii în drumul lor către poartă, tensiunea de c.a. va trebui să atingă un punct mai mare în cadrul semi-alternanţei pentru a crea un curent suficient de mare necesar aprinderii tiristorului.</p>

#+CAPTION: circuit cu tiristor; forma de undă cu o rezistenţa introdusă în circuitul porţii
[[../poze/03213.png]]

<p>Odată cu tăierea alternanţei pozitive a undei sinusoidale la un nivel mai mare decât în cazul precedent prin îtârzierea intrării în conducţie a tiristorului, puterea medie pe sarcină este mai mică. Dacă înlocuim rezistorul fix din circuitul porţii cu un rezistor variabil, putem controla puterea pe sarcină în timp. Creşterea rezistenţei duce la creşterea pragului de aprindere, ducând la o putere mai mică pe sarcină şi invers.</p>

#+CAPTION: circuit cu tiristor; rezistor variabil în circuitul porţii
[[../poze/03214.png]]

<p>Din păcate, acest circuit are un neajuns destul de mare. Folosind semnale de curent alternativ pentru aprinderea tiristorului, controlul asupra dispozitivului este limitat pe prima jumătat a alternanţei pozitive. Cu alte cuvinte, nu putem amâna pornirea tiristorului până după atingerea vârfului formei de undă. Astfel că putem opri puterea pe sarcină doar până în punctul maxim în care tiristorul intră în conducţie, punct situat spre vârful formei de undă. În figura alăturată circuitul este setat la puterea minimă la care sarcina poate fi alimentată în această configuraţie.</p>

#+CAPTION: circuit cu tiristor; pragul maxim de aprindere al tiristorului
[[../poze/03215.png]]

<p>Dacă în această situaţie vom continua să mărimi pragul de aprindere, tiristorul nu va mai intra deloc în conducţie, din moment ce nici măcar vârful formei de undă de c.a. nu va mai fi necesar pentru aprinderea tiristorului. Rezultatul este lipsa totală a puterii pe sarcină.</p>

<p>O soluţie ingenioasă la această problemă constă în introducerea unui condensator pentru modificarea fazei în circuit.</p>

#+CAPTION: circuit cu tiristor; adăugarea unui condensator de defazare
[[../poze/03216.png]]

<p>Forma de undă de amplitudine mai mică reprezintă căderea de tensiune la bornele condensatorului. Pentru simplitatea exemplificării, presupunem o rezistenţă de comandă maximă, adică tiristorul nu va intra deloc în conducţie iar curentul pe sarcină va fi zero exceptând un curent foarte mic ce trece prin rezistorul de comandă şi prin condensator. Căderea de tensiune pe acest condensator va fi defazată cu un unghi între 0<sup>o</sup> şi 90<sup>o</sup> în urma undei de c.a. Atunci când această tensiune defazată va atinge un nivel suficient de mare, tiristorul va intra în conducţie.</p>

<p>Cu o cădere de tensiune suficient de mare la bornele condensatorului pentru aprinderea periodică a tiristorului, rezultatul formei de undă a sarcinii va fi aproximativ cel alăturat.</p>

#+CAPTION: circuit cu tiristor; adăugarea unui condensator de defazare
[[../poze/03217.png]]

<p>Datorită faptului că forma de undă a condensatorului se află în creştere chiar şi după ce forma de undă a c.a. şi-a depăşit vârful şi este în scădere, aprinderea tiristorului este posibilă la un prag ce se situează dincolo de acest vârf, reuşindu-se tăierea formei de undă dincolo de limita maximă admisă de configuraţia precedentă. În realitate, forma de undă a tensiunii condensatorului este puţin mai complexă decât este prezentat aici, forma sa sinusoidală fiind distorsionată de fiecare dată când tiristorul intră în conducţie.</p>

<p>Tiristoarele pot fi aprinse cu ajutorul unor circuite mult mai complexe. Chiar dacă circuitul precedent este suficient pentru o aplicaţie simplă precum comanda unei lămpi, comanda motoarelor electrice industriale necesită metode mult mai sofisticate de aprindere. Câteodată se pot folosi transformatoare de impulsuri pentru cuplarea unui circuitu de aprindere pe poarta şi catodul tiristorului pentru asigurarea izolaţiei electrice dintre aprindere şi circuitele de putere.</p>

#+CAPTION: utilizarea unui transformator de impulsuri pentru separarea circuitului de aprindere de circuitul de putere
[[../poze/03218.png]]

<p>Atunci când se folosesc mai multe tiristoare pentru comanda puterii pe sarcină, adesea catozii nu sunt comuni din punct de vedere electric, făcând dificilă conectarea unui singur circuit de aprindere pentru toate tiristoarele. Un astfel de exemplu îl reprezintă un redresor în punte comandat cu tiristoare.</p>

#+CAPTION: punte comandată cu tiristoare
[[../poze/03219.png]]

<p>În oricare circuit redresor în punte, diodele redresoare (în acest caz, tiristoarele) trebuie să conducă în perechi opuse: T<sub>1</sub> şi T<sub>3</sub> trebuie aprinse simultan; acelaşi lucru este valabil şi pentru perechea T<sub>2</sub> - T<sub>4</sub>. După cum putem vedea însă, aceste perechi de tiristoare nu posedă aceleaşi conexiuni ale catozilor, ceea ce înseamnă că nu putem pur şi simplu să utilizăm o singură sursă de tensiune pentru aprinderea ambelor dispozitive, precum în figura alăturată.</p>

#+CAPTION: punte comandată cu tiristoare
[[../poze/03220.png]]

<p>Deşi sursa de impulsuri de tensiune prezentată mai sus va produce aprinderea tiristorului T<sub>4</sub>, tiristorul T<sub>2</sub> nu se va aprinde corespunzător datorită faptului că cele două tiristoare nu au o conexiune comună a catozilor, conexiune utilizată ca şi punct de referinţă al tensiunii de aprindere. Folosind transformatoare de impulsuri pentru conectarea porţilor celor două tiristoare la o sursă de impulsuri de tensiune continuă, va produce rezultatul aşteptat, aprinderea simultană a celor două dispozitive.</p>

#+CAPTION: punte comandată cu tiristoare; utilizarea transformatoarelor de impulsuri pentru comanda simultană a tiristoarelor
[[../poze/03221.png]]

<p>Trebuie menţionat faptul că acest circuit prezintă doar conexiunile porţilor tiristoarelor T<sub>2</sub> şi T<sub>4</sub>. Transformatoarele de impulsuri şi sursele de tensiune pentru tiristoarele T<sub>1</sub> şi T<sub>3</sub>, la fel şi detaliile surselor de impulsuri de tensiune, au fost omise pentru simplitatea prezentării.</p>

<p>Redresoarele comandate în punte cu tiristoare pot fi folosite şi pentru redresarea tensiunilor trifazate. Un astfel de redresor este prezentat în figura alăturată, fără a include şi transformatoarele de impulsuri şi circuitele de aprindere.</p>

#+CAPTION: redresor comandat trifazat în punte cu tiristoare
[[../poze/03222.png]]

<p class="sumar">Sumar:</p>
<ul>
	<li>Tiristorul este practic o diodă Shockley cu un terminal în plus, terminal denumit poartă şi folosit pentru aprinderea dispozitivului folosind o tensiune mică</li>
	<li>Pentru aprinderea tiristorului, tensiunea trebuie aplicată între poartă şi catod, pozitivă pe poartă şi negativă pe catod</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
