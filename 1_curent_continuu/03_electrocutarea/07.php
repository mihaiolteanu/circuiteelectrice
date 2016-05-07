<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Proiectarea aparatelor electrice</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>7. Proiectarea aparatelor electrice</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Odată cu realizarea împământării circuitului, cel puţin un punct din circuit este comun cu pământul şi prin urmare nu prezintă niciun risc de electrocutare. Într-un sistem electric simplu, format din două fire, conductorul conectat la împământare se numeşte <i>neutru</i>, iar celălalt conductor este conductorul <i>sub tensiune</i> sau <i>fază</i>:</p>

<p><img src="../poze/00070.png" alt="legarea unei părţi a circuitului monofazat la împământare"/></p>

<p>În ceea ce priveşte sursa de alimentare şi sarcina propriu-zisă, existenţa punctului de împământare nu are niciun efect asupra funcţionării circuitului. Acesta există doar pentru siguranţa persoanelor ce intră în contact cu circuitul, şi înseamnă o căderea de tensiunea de 0 volţi între circuit şi pământ, tensiune la care atingerea circuitului este sigură. Conductorul aflat sub tensiune, în schimb, poate produce electrocutarea persoanelor ce vin în contact cu acesta în cazul în care alimentarea cu energie electrică nu este întreruptă în prealabil.</p>

<p>Este bine de înţeles această diferenţă de pericole între cei doi conductori într-un circuit electric simplu. Următoarele ilustraţii sunt realizate pe baza unui circuit electric de apartament/casă tipic (folosind curentul continuu în acest caz pentru simplitatea prezentării, şi nu curent alternativ).</p>

<p>Dacă luăm, de exemplu, un aparat electric, precum un prăjitor de pâine, cu o carcasă metalică, putem observa că teoretic acesta nu ar trebui să prezinte niciun pericol de electrocutare în cazul în care funcţionează corespunzător. Firele metalice din interiorul aparatului ce conduc curentul spre elementul de încălzire sunt izolate faţă de carcasa metalică, precum şi între ele, cu un material plastic sau de cauciuc.</p>

<p><img src="../poze/00071.png" alt="conectarea unui aparat electric cu carcasă metalică la reţeaua de alimentare - căderea de tensiune între carcasa metalică şi pământ este de 0 volţi"/></p>

<p>Totuşi, în cazul în care unul dintre firele existente în interiorul aparatului vine în contact direct cu carcasa metalică, potenţialul electric al acesteia va fi egal cu cel al firului, iar atingerea carcasei va fi în acest caz la fel de periculoasă precum atingerea directă a firului. Dacă aceasta situaţie duce sau nu la electrocutare depinde de natura firului ce atinge carcasa:</p>

<p><img src="../poze/00072.png" alt="conectarea unui aparat electric cu carcasă metalică la reţeaua de alimentare; la contactul accidental dintre fază şi carcasa metalică, există o cădere de tensiune potenţial periculoasă între carcasă şi pământ"/></p>

<p>În cazul în care firul ce intră în contact cu carcasa metalică este faza (firul aflat „sub tensiune”), utilizatorul aparatului se află într-un real pericol. Pe de altă parte, dacă neutrul este cel ce atinge carcasa metalică, nu există niciun pericol de electrocutare:</p>

<p><img src="../poze/00073.png" alt="conectarea unui aparat electric cu carcasă metalică la reţeaua de alimentare; la contactul accidental dintre neutru şi carcasa metalică, nu există niciun pericol de electrocutare"/></p>

<p>Pentru a se asigura că primul caz este mai puţin probabil decât celălalt, se încearcă în general proiectarea aparatelor electrice asfel încât riscul ca faza să intre în contact direct cu carcasa metalică să fie minim. Totuşi, această măsură preventivă este eficientă doar în cazurile în care polaritatea prizei poate fi garantată. Dacă polaritatea acesteia poate fi inversată, atunci firul ce intră în contact cu carcasa poate la fel de bine să fie cel aflat sub tensiune:</p>

<p><img src="../poze/00074.png" alt="conectarea unui aparat electric cu carcasă metalică la reţeaua de alimentare; inversarea polarităţii prizei înseamnă ca orice fir care vine în contact cu carcasa prezintă un potenţial pericol de electrocutare"/></p>

<p>Aparatele electrice proiectate asfel se folosesc la prizele polarizate, un picior al conectorului fiind mai lat iar celălalt mai îngust (prizele sunt şi ele construite în acest fel). Prin urmare, conectorul nu poate fi introdus „inver” în priză, iar identitatea firelor din interiorul aparatului poate fi asigurată în acest fel. Acest lucru nu are niciun efect asupra funcţionării aparatului, ci serveşte doar ca şi mijloc de siguranţă în utilizare.</p>

<p>O altă metodă este realizarea carcasei exterioare a aparatului dintr-um material non-conductiv. Asfel de aparate se numesc dublu-izolate, doarece carcasa serveşte ca şi izolaţie adiţională pe lângă cea oferită de conductori. Dacă se întâmplă ca un fir din interiorul aparatului să intre în contact cu carcasa, aceasta nu prezintă niciun pericol de electrocutare pentru utilizator.</p>

<p>Iar o altă metodă constă în menţinerea carcasei metalice, dar şi adăugarea unui al treilea conductor între punctul de împământare şi carcasa metalică pentru asigurarea unei legături directe şi sigure între aceasta şi pământ:</p>

<p><img src="../poze/00075.png" alt="conectarea unui aparat electric cu carcasă metalică la reţeaua de alimentare; folosirea prizei cu împământare pentru înlăturarea pericolului electrocutării"/></p>

<p>Al treilea contact al conectorului prezent la capătul cablului de alimentare asigură o conexiune directă între carcasa metalică a aparatului şi pământ. Cele două puncte fiind în acest caz electric comune, nu poate exista nicio cădere de tensiune între ele. Dacă firul aflat sub tensiune (faza) atinge accidental carcasa metalică, se va produce un scurt-circuit prin sursa de tensiune şi firul de împământare, scurt-circuit ce va declanşa dispozitivele de protecţie la supracurent. Utilizatorul aparatului se va afla în siguranţa în tot acest timp.</p>

<p>Datorită acestui lucru, <span class="important">nu îndepărtaţi niciodată al treilea contact al prizei în cazul în care doriţi să introduceţi un conector fară împământare într-o priză cu împământare!</span> Aparatul va funcţiona în continuare fără nicio problemă, dar, prin îndepărtarea acestui conctact, nu va mai exista nicio legătură directă între carcasa metalică a aparatului şi pământ, existând asfel un real pericol de electrocutare pentru persoanele ce vin în contact direct cu carcasa aparatului în cazul apariţiei defectelor.</p>

<h3>Detectarea diferenţei de curent între fază şi neutru</h3>

<p>Asigurarea împotriva electrocutării se poate realiza şi în altă parte, nu doar asupra aparatului electric, asfel:</p>

<p><img src="../poze/00076.png" alt="conectarea unui aparat electric cu carcasă metalică la reţeaua de alimentare;"/></p>

<p>În cazul unui aparat electric ce funcţionează corespunzător, precum în figura de mai sus, valoarea curentului măsurat prin fază ar trebui să fie exact aceeiaşi cu valoarea curentului măsurat prin neutru, datorită faptului că există o singură cale pentru deplasarea electronilor. Dacă nu există nicio defecţiune în interiorul aparatului, nu există niciun pericol de electrocutare.</p>

<p>În schimb, dacă faza atinge accidental carcasa metalică, va exista un curent prin persoana electrocutată şi prin pământ, ce reduce curentul prin neutru şi amplifică valoarea sa prin fază, ducând la o diferenţă de curent între cele două:</p>

<p><img src="../poze/00077.png" alt="conectarea unui aparat electric cu carcasă metalică la reţeaua de alimentare; diferenţa de curent între fază şi neutru în cazul electrocutării"/></p>

<p>Diferenţa de curent între cei doi conductori, fază şi neutru, va exista doar în cazul existenţei unui curent prin împământare, caz în car există o defecţiune în sistem. O asfel de diferenţă a valoriilor curenţilor poate fi folosită pentru detectarea defecţiunilor şi a existenţei pericolului de electrocutare. Dacă folosim un dispozitiv pentru măsurarea diferenţei de curent dintre cei do conductori, existenţa acesteia poate fi folosită pentru deschiderea unui întrerupător pentru a întrerupe asfel alimentarea cu energie electrică de la reţea şi prevenirea electrocutării:</p>

<p><img src="../poze/00078.png" alt="conectarea unui aparat electric cu carcasă metalică la reţeaua de alimentare; deschiderea automată a întrerupătorului în cazul existenţei unei diferenţe prea mari între curenţii fazei şi al neutrului"/></p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Sistemele de alimentare au adesea conectată o parte a sursei de tensiune la împământare pentru asigurarea împotriva electrocutării în acel punct</li>
	<li>Conductorul conectat la împământare într-un sistem de alimentare poartă numele de conductor <i>neutru</i>, iar celălalt conductor se numeşte <i>fază</i></li>
	<li>Împământarea sistemelor de alimentare se realizează pentru prevenirea electrocutărilor şi nu afectează performanţa circuitului şi a sarcinii</li>
	<li>Siguranţa în utilizare a aparatelor electrice poate fi îmbunătăţită prin folosirea prizelor şi conectorilor polarizaţi, a izolaţiei duble sau a prizelor cu împământare</li>
	<li>Întrerupătoarele automate pot detecta diferenţa de curent dintre fază şi neutru; în cazul în care această diferenţă este prea mare, circuitul se deschide automat pentru a preveni pericolul apariţiei electrocutării</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>