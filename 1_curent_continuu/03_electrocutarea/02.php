<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Drumul curentului în cazul electrocutării</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Drumul curentului în cazul electrocutării</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>După cum am văzut deja, deplasarea continuă a electronilor necesită prezenţa unui circuit închis. Acesta este motivul pentru care şocul electric datorat electricităţii statice este doar de moment: deplasarea electronilor este de scurtă durată, până când se reface echilibrul electric dintre cele două obiecte. Aceste tipuri de şocuri limitate sunt rareori periculoase.</p>

<p>Fără existenţa a două puncte pe corp necesare intrării şi ieşirii curentului, nu există riscul electrocutării. Din acest motiv păsărilor pot sta pe liniile de înaltă tensiune fără a suferi nicio electrocutare: contactul între acestea şi circuit se realizează doar într-un singur punct.</p>

<p><img src="../poze/00055.png" alt="păsările ce se aşează pe liniile de înaltă tensiune nu se electrocutează"/></p>

<p>Pentru ca electronii să circule printr-un conductor, este necesară prezenţa unei tensiuni pentru motivarea lor. Tensiunea este <i>tot timpul realtivă între două puncte</i>. Nu există tensiune „la” sau „pe” un anumit punct dintr-un circuit; prin urmare, nu există nicio tensiune aplicată păsării ce face contact cu circuitul în exemplul de mai sus într-un singur punct, prin urmare, nu există nici curent. Da, chiar dacă aceasta atinge circuitul cu <i>ambele</i> picioare, totuşi, ele ating acelaşi fir <i>comun din punct de vedere electric</i>. Din moment ce picioarele păsării ating acelaşi fir electric comun, nu există diferenţă de potenţial (tensiune) între cele două puncte şi nu există nici curent.</p>

<p>Aceste consideraţii pot duce la formarea părerii (greşite!) că nu putem fi electrocutaţi prin atingerea unui singur fir electric. Spre deosebire de păsări, oamenii stau de obicei pe suprafaţa pământului atunci când ating un fir prin care trece curent electric. Adesea, o parte din sistemul de alimentare este conectată întenţionat la pământ, iar persoana ce atinge un singur fir, realizează de fapt contactul între două puncte din circuit (firul şi pământarea):</p>

<p><img src="../poze/00056.png" alt="închiderea circuitului prin pământ la atingerea unui singur fir"/></p>

<p>Simbolul împământării (legării la pământ) este setul de trei linii orizontale cu lungimi descrescătoare, aflat în partea stângă-jos a circuitului de mai sus, precum şi la piciorul persoanei curentate. În realitate, sistemul de împământare a sistemelor de alimentare constă dintr-un conductor metalic îngropat în pământ la o adâncime mare pentru un contact maxim cu acesta. Acel conductor este conectat la rândul său într-un punct din circuit. Conectarea victimei la pământ (împământare) se realizează prin piciorul acesteia, datorită faptului că acesta atinge pământul.</p>

<p>Câteva întrebări sunt binevenite:</p>
<ul>
	<li>Dacă prezenţa unui punct de împământare în circuit poate duce la electrocutarea unei persoane, de ce îl avem în circuit în primul rând? Nu ar fi mai sigur un circuit fără împământare?</li>
	<li>Persoana electrocutată probabil că nu este desculţă. Dacă cauciucul şi materialele din care este realizată încălţămintea sunt materiale izolatoare, atunci de ce aceasta nu protejează persoanele electrocutate prin împiedicarea formării unui circuit închis</li>
	<li>Cât de bun conductor electric poate <i>pământul</i> să fie? Dacă putem fi electrocutaţi datorită curgerii curentului prin pământ, de ce să nu folosim pământul ca şi conductor în circuitele noastre de putere?</li>
</ul>

<h3>Motivul legării la pământ a circuitelor (împământarea)</h3>
<p>Cât priveşte prima întrebare, prezenţa unui punct de împământare „intenţional” asigură faptul că cel puţin contactul cu o parte din circuit <i>este</i> sigură. Dacă persoana din cazul precedent ar fi să atingă partea de jos a rezistorului, aceasta nu s-ar electrocuta, chiar dacă picioarele sale vin în contact cu pământul:</p>

<p><img src="../poze/00057.png" alt="persoana nu este electrocutată în cazul în care firul atins este conectat la împământare"/></p>

<p>Deoarece partea de jos a circuitului este conectată la împământare în partea stângă, conductorul din dreapta jos este comun din punct de vedere electric cu acesta, atunci când este atins precum în figura de mai sus. Din moment ce nu poate exista o diferenţă de potenţial (tensiune) între două puncte comune electric, asupra persoanei ce vine în contact cu firul nu va fi aplicată nicio tensiune iar aceasta nu va suferi niciun şoc electric. Din acelaşi motiv, firul ce conectează circuitul la împământare nu are de obicei izolaţie; orice obiect metalic ce vine în contact cu acesta se va transforma într-un punct electric comun cu pământul, eliminând orice periocul de electrocutare.</p>

<p>Legarea unui circuit la pământ asigură faptul că există cel puţin un punct din circuit care dacă este atins nu duce la electrocutare. Dar dacă nu am lega circuitul deloc la pământ? Nu ar înseamna asta că atingerea oricărui fir ar fi la fel de sigură? Ideal, da. Practic însă, nu. Observaţi ce se întâmplă fără niciun fel de împământare:</p>

<p><img src="../poze/00058.png" alt="circuit neconectat la împământare - atingerea firelor libere este sigură"/></p>

<p>În ciuda faptului că picioarele persoane vin în contact direct cu pământul, atingerea oricărui punct din circuit este sigură. Din moment ce nu se formează un drum complet/închis prin corpul persoanei, nu este posibilă trecerea niciunui curent prin corpul acesteia. Totuşi, toate acestea se pot schimba radical în momentul formării unei legături accidentale cu pământul, precum atingerea liniilor de înaltă tensiune de către o creangă ce duce la formarea unei legături directe cu pământul:</p>

<p><img src="../poze/00059.png" alt="circuit neconectat la împământare - atingerea firelor libere nu este sigură atunci când există o conectare accidentală a circuitului la pământ"/></p>

<p>O asemenea conexiune accidentală dintre conductorul circuitului şi pământ poartă numele de <i>defect de împământare</i>. Cauzele defectelor de împământare pot fi numeroase şi prin urmare nu pot fi luate toate în considerare la proiectarea liniilor electrice. În cazul copacilor, este imposibil de prezis cu <i>care fir</i> ar putea aceştia să intre în contact. Dacă contactul se realizează între firul de sus, atunci aceste poate fi atins în siguranţă; dacă în schimb contactul se realizează între copac şi firul de jos, atunci atingerea acestui fir este cea care nu prezintă riscul electrocutării, adică exact invers faţă de cazul precedent.</p>

<p><img src="../poze/00060.png" alt="circuit neconectat la împământare - defectul de împământare poate duce la electrocutare"/></p>

<p>Precum am spus şi mai sus, ramurile copacilor sunt doar o sursă potenţială ale defectelor de împământare. Să considerăm un circuit neconectat la pământ, fără niciun contact accidental dintre copac şi pământ, dar de data aceasta avem <i>doi</i> oameni ce ating circuitul în două puncte cu potenţiale diferite:</p>

<p><img src="../poze/00061.png" alt="circuit fără împământare - electrocutarea ambelor persoane atunci când fiecare dintre ele atunge un punct din circuit cu potenţial electric diferit"/></p>

<p>În acest caz, contactul fiecărei persoane cu pământul asigură închiderea circuitului prin pământ şi prin ambele persoane. Chiar dacă fiecare din cele două persoane crede că se află în siguranţă în momentul atingerii punctului respectiv din circuit, atingerea lor concomitentă transformă situaţia de mai sus într-un scenariu periculos. De fapt, una dintre persoane reprezintă defectul de împământare în acest caz, ceea ce face ca atingerea conductorului de către cealaltă persoană să fie periculoasă pentru ambii. Acesta este motivul pentru care circuitele fără împământare sunt periculoase: tensiunea dintre oricare punct din circuit şi pământ este imprevizibilă, deoarece este posibilă apariţia unui defect de împământare în orice moment în oricare punct al circuitului. În acest scenariu, doar pasărea este sigură, doarece nu are niciun contact cu pământul. Prin conectarea unui  punct din circuit la pământ, putem asigura siguranţa atingerii cel puţin în acel punct. Deşi nu reprezintă o măsură de siguranţă 100%, tot este mai mare decât lipsa completă a împământării.</p>

<h3>Protecţia la electrocutare prin purtarea încălţămintei adecvate</h3>

<p>Pentru a răspunde celei de a doua întrebări, încălţămintea cu talpă de cauciuc <i>asigură</i> întradevăr o anumită protecţie la electrocutare prin prevenirea închiderii circuitului între victimă şi pământ. Cu toate acestea, majoritatea tipurilor de încălţăminte nu sunt sunt proiectate pentru asigurarea siguranţei electrice, având în majoritatea cazurilor o talpă prea subţire sau dintr-un material neadecvat. De asemenea, orice umeazeală, mizerie sau săruri conductive provenite de la transpiraţie aflate pe suprafaţă sau ce străpung talpa încălţămintei duce la compromiterea valorii izolaţiei iniţiale ale acesteia. Există încălţăminte special concepută pentru lucrul la tensiune înaltă, precum şi preşuri din cauciuc pentru stat, dar aceste echipamente speciale de lucru trebuiesc menţinute uscate şi într-o stare perfectă de curăţenie pentru a-şi dovedi eficienţa. În concluzie, încălţămintea obişnuită nu este o garanţia a protecţiei la electrocutare atunci când intrăm în contact cu un circuit electric.</p>

<p>Cercetările efectuate asupra rezistenţei contactului dintre corpul uman şi pământ au relevat aproximativ următoarele valori:</p>

<ul>
	<li>Contact prin intermediul mâinii sau piciorului protejat prin izolaţie de cauciuc: 20 MΩ</li>
	<li>Contact prin intermediul piciorului protejat cu încălţăminte de piele (uscat): între 100 kΩ şi 500 kΩ</li>
	<li>Contact prin intermediul piciorului protejat cu încălţăminte de piele (ud): între 5 kΩ şi 20 kΩ</li>
</ul>

<p>Din cele de mai sus reiese că faţă de piele, cauciucul este un material izolator mult mai bun, iar prezenţa apei într-un material poros precum pielea, reduce <i>semnificativ</i> rezitenţa electrică a acestuia.</p>

<h3>Pământul nu este un foarte bun conductor</h3>
<p>Ca să răspundem şi la a treia întrebare, pământul nu este un conductor foarte bun, cel puţin nu atunci când este uscat. Acesta este un conductor mult prea slab pentru a putea susţine un curent continuu pentru alimentarea unei sarcini. Totuşi, pentru accidentarea sau decesul unei persoane este suficientă chiar şi o cantitate foarte mică de curent, prin urmare chiar şi conductivitatea slabă a pământului poate fi suficientă pentru a conduce o cantitate suficientă de curent atunci când există o tensiune suficientă la îndemână (care de obicei în sistemele de alimentare există).</p>

<p>Unele suprafeţe de pământ sunt materiale izolatoare mai bune decât altele. Asfaltul de exemplu, fiind o substanţă în mare uleioasă, prezintă o rezistenţă mult mai mare decât majoritatea tipurilor de piatră sau pământ. Betonul pe de altă parte, posedă o rezistenţă electrică mică datorită conţinutului său de apă şi electrolit (substanţă chimică conductoare).</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Electrocutarea poate avea loc doar atunci când există un contact între două puncte din circuit şi este aplicată o tensiune electrică asupra corpului victimei</li>
	<li>Circuitele electrice au de obicei un punct special legat la pământ: tije sau plăci metalice îngropate în pământ pentru asigurarea faptului că cel puţin o parte din circuit se află la potenţialul pământului (tensiune zero între acel punct şi pământ)</li>
	<li>Un <i>defect de împământare</i> este o conexiune accidentală dintre un conductor al circuitului şi pământ</li>
	<li>Există echipamente speciale de protecţie la lucrul cu tensiuni periculoase, precum încălţăminte şi preşuri din cauciuc, dar acestea trebuiesc menţinute într-o stare perfectă de curăţenie şi uscate pentru a-şi dovedi eficienţă. Încălţămintea obişnuită nu oferă o protecţie suficient de bună la electrocutare prin izolarea purtătorului faţă de pământ</li>
	<li>Cu toate că pământul este un conductor slab de electricitate, curentul pe care îl poate conduce este suficient pentru accidentarea gravă sau chiar decesul persoane în cauză</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>