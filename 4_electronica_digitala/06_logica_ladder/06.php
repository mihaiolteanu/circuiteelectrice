<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Automate programabile (PLC)</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>6. Automate programabile (PLC)</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Scurtă istorie</h2>

<p>Înainte de apariţia circuitelor logice cu semiconductori, sistemele logice de control erau proiectate şi realizate exclusiv cu relee electromecanice. Sistemele şi procesele ce necesită un control de tip „pornire/oprire” abundă în industria modernă, dar aceste sisteme sunt foarte rar realizate cu ajutorul releelor electromecanice sau a porţilor logice discrete. În schimb, sunt folosite calculatoare digitale ce pot fi programate şi pot realiza o varietate de funcţii logice.</p>

<p>La sfârşitul anilor 1960, o companie americană pe nume Bedford Associates, a lansat un dispozitiv de calcul denumit MODICON. Ca şi acronim, acesta s-ar traduce prin „controler digital modular”. Acesta mai târziu a deveni şi numele diviziei care se ocupa cu proiectarea, realizarea şi vânzarea acestor calculatoare de control speciale. Desigur, au existat mai apoi şi alte companii care au dezvoltat propriile lor variante ale acestui dispozitiv. Până la urmă, acest dispozitiv a primit denumirea de PLC (Programmable Logic Controller), sau, în traducere, automat programabil. Scopul unui PLC a fost de a înlocui releele electromecanice ca şi elemente de logică, locul lor urmând a fi luat de calculatoare digitale semiconductoare. Un program stocat în memoria calculatorului este capabil să simuleze funcţii logice realizate înainte prin interconectarea unui număr mare de reelee electromecanice.</p>

<p>Un automat programabil (PLC) are mai multe intrări, prin intermediul cărora interpretează stări logice „înalte”, respectiv „joase”, stări transmise de senzori şi comutatoare. De asemenea, există mai mulţi terminali de ieşire, prin intermediul cărora dispozitivul transmite semnale „înalte” sau „joase” către contactoare, motoare, lămpi, sau orice alte dispozitive ce pot fi controlate prin intermediul semnalelor de tip „închis/deschis”. În încercarea de simplificare a modului de programare a PLC-urilor, limbajul de programare a fost proiectat astfel încât să semene cu diagramele ladder. Astfel, un inginer sau electrician obişnuit cu citirea diagramelor ladder, se poate adapta relativ uşor mediului de programare a PLC-urilor pentru realizarea aceloraşi funcţii de control.</p>

<p>PLC-urile sunt „calculatoare industriale”, prin urmare, semnalele de intrare şi de ieşire sunt de 120 V c.a, asemenea releelor electromecanice de control. Deşi unele PLC-uri au intrări şi ieşiri de c.c de amplitudini mai mici, aceasta este excepţia şi nu regula.</p>

<h2>Programarea PLC-urilor</h2>

<p>Modul de conectare şi de programare diferă puţin în funcţie de modelul de PLC ales, dar aceste caracteristici sunt destul de similar pentru a permite o introducere „generală” a programării PLC-urilor în acest capitol.</p>

<img src="../poze/04330.png" alt="automat programabil"/>

<p>Figura alăturată este cea a unui PLC, văzut din faţă. Cei doi terminali L<sub>1</sub> şi L<sub>2</sub> din partea superioară sunt pentru alimentarea circuitului intern al dispozitivului cu 120 V c.a. Cei şase terminali din partea stângă se folosesc pentru conectarea dispozitivelor de intrare, fiecare terminal reprezentând un „canal” diferit cu propria sa notaţie (X). Terminalul din stânga jos (common), reprezintă masa, ce se conectează la L<sub>2</sub>.</p>

<div class="clear"></div>

<img src="../poze/04331.png" alt="automat programabil; intrarea X1 energizată"/>

<p>În interioriul carcasei PLC-ului, între fiecare terminal de intrare şi terminalul de masă, există conectat câte un dispozitiv opto-izolator (LED). Acesta asigură o izolare electrică între semnalul logic „înalt” de la intrare şi circuitul calculatorului, atunci când există o tensiune de 120 V c.a. aplicată între terminalul respectiv şi masă. O intrare energizată poate fi „citită” prin intermediul unui LED aprins pe carcasa dispozitivului.</p>

<div class="clear"></div>

<img src="../poze/04332.png" alt="automat programabil; intrarea X1 energizată"/>

<p>Semnalele de ieşire sunt generate de circuitul intern al PLC-ului prin activarea unui dispozitiv de comutare (tranzistor, triac, sau chiar releu electromecanic), conectând terminalul „Source” cu oricare dintre terminalii de ieşire „Y”. Terminalul „Source” este la rândul să conectat de obicei la L<sub>1</sub>. Din nou, o ieşire energizată poate fi citită de pe PLC prin intermediul unui LED.</p>

<div class="clear"></div>

<p>În acest fel, PLC-urile sunt o interfaţă între dispozitivele reale precum comutatoare, lămpi, motoare, etc.</p>

<p>Logica circuitului este stabilită în interiorul PLC-ului prin intermediul unui program software. Acest program decide care ieşiri sunt energizate şi sub ce condiţii de intrare. Chiar dacă programul însuşi pare a fi o diagramă logică, cu simboluri pentru relee şi comutatoare, în realitate nu există astfel de dispozitive în interiorul PLC-ului. Acestea sunt doar contacte şi bobine imaginare. Programul este introdus şi vizualizat prin intermediul unui PC conectat la portul PLC-ului (programming port).</p>

<img src="../poze/04333.png" alt="automat programabil şi circuit logic"/>

<p>Să considerăm circuitul şi programul alăturat. Atunci când comutatorul buton nu este apăsat, intrarea X<sub>1</sub> a PLC-ului nu este alimentată. Urmărind programul, putem vedea un contact X<sub>1</sub> normal-deschis în serie cu o bobină Y<sub>1</sub>. Puterea de pe bobina Y<sub>1</sub> este şi în acest caz zero. Prin urmare, ieşirea Y<sub>1</sub> a PLC-ului rămăne de-energizată, iar lampa indicatoare conectată pe această ieşire nu se aprinde.</p>

<div class="clear"></div>

<img src="../poze/04334.png" alt="automat programabil şi circuit logic"/>

<p>Apăsarea butonului însă face ca intrarea X<sub>1</sub> să fie alimentată. În acest caz, toate contactele X<sub>1</sub> ce apar în program vor fi acţionate. Energizarea intrării X<sub>1</sub> va duce la închiderea contactului normal-deschis X<sub>1</sub> alimentând bobina Y<sub>1</sub>. Când bobina Y<sub>1</sub> a programului este energizată, ieşirea reală Y<sub>1</sub> va deveni energizată., iar lampa conectată pe ieşire se va aprinde.</p>

<div class="clear"></div>

<p>Trebuie înţeles faptul că atât contactul X<sub>1</sub> cât şi bobina Y<sub>1</sub>, conductorii de legătură şi „puterea” ce apar pe afişajul PC-ul, toate sunt elemente pur virtuale. Acestea nu există ca şi componente reale. Ele există doar ca şi comenzi în interiorul programului unui calculator.</p>

<p>PC-ul este utilizat doar pentru vizualizarea şi editarea softului PLC-ului, şi nu este necesară prezenţa acestuia pentru funcţionarea dispozitivului. Odată ce programul a fost încărcat în PLC de pe PC, calculatorul poate fi deconectate de la acest, iar PLC-ul va continua să funcţioneze conform instrucţiunilor programului. Afişajul (monitorul) calculatorului este redat în aceste figurii doar pentru a ajuta la înţelegerea principiilor de bază a funcţionării PLC-urilor.</p>

<p>Adevărata utilitate a PLC-ului o putem vedea atunci când dorim modificarea comportamentului unui sistem de control. Din moment ce PLC-ul este un dispozitiv programabil, comportamentul acestuia poate fi modificat prin schimbarea comenzilor. Nu este nevoie de o reconfigurare a componentelor electrice conectate la intrarea şi ieşirea acestuia.</p>

<p>De exemplu, să presupunem că dorim ca circuitul de mai sus să funcţioneze exact invers: apăsarea butonului duce la închiderea lămpii, iar eliberarea acestuia la aprinderea ei. Soluţia „hardware” ar consta în înlocuirea comutatorului buton normal-deschis cu un comutator buton normal-închis. Soluţia software, aplicabilă cu ajutorul PLC-ului, constă în modificarea programului, astfel încât contactul X<sub>1</sub> să fie normal-închis în loc de normal-deschis.</p>

<img src="../poze/04335.png" alt="automat programabil şi circuit logic"/>

<p>Sistemul modificat, în cazul în care comutatorul nu este acţionat (nu este apăsat), este prezentat în figura alăturată.</p>

<div class="clear"></div>

<img src="../poze/04336.png" alt="automat programabil şi circuit logic"/>

<p>Când butonul este acţionat, sistemul arată conform figurii alăturate.</p>

<div class="clear"></div>

<h2>Reutilizarea intrărilor</h2>

<p>Un alt avantaj al implementării logicii de control în varianta software faţă de hardware, este că semnalele de intrare pot fi refolosite în interiorul programului ori de câte ori este necesar.</p>

<img src="../poze/04337.png" alt="automat programabil şi circuit logic"/>

<p>De exemplu, circuitul şi programul alăturat sunt proiectate pentru a energiza lampa în cazul în care cel puţin două din cele trei comutatoare sunt acţionate (închise) simultan.</p>

<div class="clear"></div>

<p>Pentru realizarea unui circuit echivalent folosind relee electromecanice, ar fi trebui să folosim trei relee cu câte două contacte normal-deschise fiecare. În total, am fi avut nevoie de şase contacte, câte două pe fiecare intrare. Folosind un automat programabil în schimb, putem refolosi intrările X ori de câte ori dorim prin intermediul soft-ului. Nu este necesară adăugarea unor noi componente, deoarece fiecare intrare cât şi ieşire a unui PLC nu este nimic mai mult decât un simplu bit (0 sau 1) stocat în memoria digitală a dispozitivului. Nu există o limită teoretică a numărului de reutilizări acestor biţi.</p>

<p>Mai mult, din moment ce fiecare ieşire este, la fel, doar un bit stocat în memoria PLC-ului, putem adăuga contacte (virtuale) în interiorul programului. De exemplu, putem adăuga un contact acţionat de ieşirea Y a PLC-ului.</p>

<img src="../poze/04338.png" alt="automat programabil şi circuit logic; sistem de control al pornirii şi opririi unui motor"/>

<p>Să considerăm exemplul alăturat. Acesta este un sistem de control al pornirii şi opririi unui motor.</p>

<p>Comutatorul buton conectat la intrarea X<sub>1</sub> este utilizat pentru pornirea motorului, iar comutatorul conectat la intrarea X<sub>2</sub> pentru oprirea acestuia. Un contact adiţional (virtual), adăugat în interiorul programului şi denumit Y<sub>1</sub>, utilizează bobina de ieşire ca şi contact de reţinere. Contactorul motorului continuă să fie energizat chiar şi după ce butonul „start” este eliberat. Contactul X<sub>2</sub> normal-închis este colorat, ceea ce înseamnă ca este închis şi conduce energie electrică.</p>

<div class="clear"></div>

<img src="../poze/04339.png" alt="automat programabil şi circuit logic; sistem de control al pornirii şi opririi unui motor"/>

<p>Dacă apăsăm butonul de „start”, intrarea X<sub>1</sub> se va energiza, închizând contactul X<sub>1</sub> din program. Bobina Y<sub>1</sub> va fi energizată şi se va aplica o tensiune de 120 V c.a. pe bobina contactorului motorului. Contactul paralel Y<sub>1</sub> se va închide şi el, iar circuitul va rămâne într-o stare energizată.</p>

<div class="clear"></div>

<img src="../poze/04340.png" alt="automat programabil şi circuit logic; sistem de control al pornirii şi opririi unui motor"/>

<p>Acum, dacă eliberăm contactorul „start”, contactul X<sub>1</sub> normal-deschis se va reîntoarce la poziţia sa normală (deschis). Motorul va continua însă să funcţioneze, deoarece contactul de reţinere intern Y<sub>1</sub>, continuă să alimenteze bobina Y<sub>1</sub>, care menţine la rândul ei energizată ieşirea Y<sub>1</sub>.</p>

<div class="clear"></div>

<img src="../poze/04341.png" alt="automat programabil şi circuit logic; sistem de control al pornirii şi opririi unui motor"/>

<p>Pentru a opri motorul, trebuie să apăsăm pentru o durată scurtă comutatorul „stop”. Acesta va energiza intrarea X<sub>2</sub> şi va deschide contactul (virtual) normal-închis. Continuitatea circuitului înspre bobina Y<sub>1</sub> va fi întreruptă.</p>

<div class="clear"></div>

<img src="../poze/04342.png" alt="automat programabil şi circuit logic; sistem de control al pornirii şi opririi unui motor"/>

<p>Când butonul de „stop” este eliberat, intrarea X<sub>2</sub> se de-energizează. Contactul X<sub>2</sub> se reîntoarce în poziţia sa normală (închis). Motorul nu va reporni însă până când comutatorul de „start” nu este acţionat, datorită „pierderii” contactului de reţinere Y<sub>1</sub>.</p>

<div class="clear"></div>

<h2>Autoprotecţia</h2>

<p>Desigur, proiectarea PLC-urilor astfel încât să conţină elemente de autoprotecţie este la fel de importantă precum în cazul sistemelor cu relee electromecanice. Va trebui tot timpul să luăm în considerare efectele unui circuit deschis (distrugerea firelor conductoare, de exemplu) asupra dispozitivelor controlate. În exemplul de mai sus, avem o problemă: în cazul în care conductorul comutatorului de intrare X<sub>2</sub> (butonul de stop) prezintă un defect (circuit deschis), nu vom putea opri motorul!</p>

<img src="../poze/04371.png" alt="automat programabil şi circuit logic; sistem de control al pornirii şi opririi unui motor"/>

<p>Soluţia acestei probleme constă în inversarea logicii între contactul X<sub>2</sub> din interiorul programului PLC-ului şi comutatorul „stop”. Când butonul „stop” nu este acţionat, intrarea X<sub>2</sub> este energizată, închizând contactul X<sub>2</sub> din interiorul programului. Acest lucru permite pornirea motorului atunci când intrarea X<sub>1</sub> este energizată, şi permitea funcţionarea acestuia chiar si atunci când butonul „start” este eliberat. Când butonul „stop” este acţionat, intrarea X<sub>2</sub> se va de-energiza, deschizând contactul X<sub>2</sub> din soft-ul PLC-ului şi oprind motorul. Prin urmare, nu există nicio diferenţa din punct de vedere funcţional între această variantă si cea precedentă.</p>

<div class="clear"></div>

<p>Totuşi, în caz de defect al conductorului pe intrarea X<sub>2</sub> (circuit deschis), intrarea X<sub>2</sub> va fi de-energizată. Efectul este similar acţionării butonului de „stop”, rezultatul fiind oprirea imediată a motorului în caz de defect. Această variantă este mult mai sigură decât cea precedentă, în care, acelaşi tip de defect ar conduce la imposibilitatea opririi motorului.</p>

<h2>Relee de control</h2>

<p>Pe lângă elementele de intrare (X) şi de ieşire (Y), PLC-urile conţin bobine şi contacte ce nu a legătură propriu-zisă cu exteriorul. Aceastea sunt folosite asemenea releelor de control (CR1, CR2, etc.) pentru asigurarea unui semnal logic inversor în caz de nevoie.</p>

<img src="../poze/04343.png" alt="automat programabil şi circuit logic; utilizarea releelor interne de control"/>

<p>Pentru demonstrarea funcţionării unui asemenea tip de releu „intern”, să consideram circuitul şi programul alăturat. Acesta este proiectat pentru a simula o poartă ŞI-negat cu trei intrări. Din moment ce elementele unui program PLC sunt desemnate printr-o singură literă, vom nota releul de control intern cu C1 şi nu cu CR1.</p>

<div class="clear"></div>

<img src="../poze/04344.png" alt="automat programabil şi circuit logic; utilizarea releelor interne de control"/>

<p>În acest circuit, lampa va rămâne aprinsă atâta timp cât oricare dintre butoane rămâne ne-acţionat (eliberat). Pentru a opri lampa, va trebui să acţionăm (apasăm) toate cele trei butoane.</p>

<div class="clear"></div>

<p>Un mare avantaj al automatelor programabile, avantaj ce nu poate fi duplicat cu ajutorul releelor electromecanice, constă în posibilitatea supravegherii şi controlului la distanţa a dispozitivelor prin intermediul reţelelor de calculatoare.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li></li>
	<li></li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>