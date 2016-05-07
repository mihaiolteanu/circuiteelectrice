<?php include ($_SERVER['DOCUMENT_ROOT']."/files/xml_header.html")?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>5. Rezistenţa</title>
  </head>
<body>
  <div id="meniu"><?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?></div>
  <div id="header">
	<h1>5. Rezistenţa</h1>
  </div>

<div id="meniu2">
	<div id="breadcrumbs"><?php include ("breadcrumbs.html")?></div>
	<?php include ("meniu2.html")?>
</div>

<div id="poza_meniu2"><a href="http://upload.wikimedia.org/wikipedia/commons/e/e3/3_Resistors.jpg"><img src="poze/rezistori.jpg" alt="rezistori"></a></div>
  
<div id="contents">
<p>Circuitele prezentate în capitolele precedente nu sunt foarte practice. De fapt, este chiar periculos (conectarea directă a polilor unei surse de tensiune electrică cu un singur fir conductor). Motivul pentru care acest lucru este periculos se datorează amplitudinii (mărimii) curentului electric ce poate atinge valori foarte mari într-un astfel de <i>scurt circuit</i>, iar eliberarea energiei extrem de dramatică (de obicei sub formă de căldură). Uzual, circuitele electrice sunt construite pentru a folosi energia eliberată într-un mod practic, cât mai în siguranţă posibil.</p>

<p>O folosire practică si populară a curentului electric este iluminarea electrică (artificială). Cea mai simplă formă a lămpii electrice îl reprezintă un „filament” întrodus într-un balon transparent de sticlă ce dă o lumină albă-caldă („incandescenţă”) atunci când este parcurs de suficient curent electric. Ca şi bateria, are două puncte de contact electric, unul pentru intrarea electronilor, celălalt pentru ieşirea lor.</p>

<p>Conectată la o sursă de tensiune, o lampă electrică arată asfel într-un circuit:</p>

<img src="../poze/00027.png" alt="circuit electric simplu - baterie plus lampă electrică (bec)"/> 

<p>Atunci când electroni ajung la filamentul din material conductor subţire al lămpii, întâmpină o rezistenţă mult mai mare la deplasare faţă de cea întâmpinată în mod normal în fir. Această opoziţie a trecerii curentului electric depinde de tipul de material, aria secţiunii transversale şi temperatura acestuia. Termenul tehnic ce desemnează această opoziţie se numeşte <i>rezistenţă</i>. (Spunem că dielectricii au o rezistenţă foarte mare şi conductorii o rezistenţă mică). Rolul acestei rezistenţe este de limitare a curentului electric prin circuit dată fiind valoarea tensiunii produsă de baterie, prin comparaţie cu „scurt circuitul” în care nu am avut decât un simplu fir conectat între cele două capete (tehnic, borne) ale sursei de tensiune (baterie).</p>

<p>Atunci când electronii se deplasează împotriva rezistenţei se generează „frecare”. La fel ca în cazul frecării mecanice, şi cea produsă de curgerea electronilor împotriva unei rezistenţe se manifestă sub formă de căldură. Rezultatul concentrării rezistenţei filamentului lămpii pe o suprafaţă restrânsă este disiparea unei cantităti relativ mari de energie sub formă de căldură, energie necesară pentru „aprinderea” filamentului, ce produce asfel lumină, în timp ce firele care realizează conexiunea lămpii la baterie (de o rezistenţă mult mai mică) abia dacă se încălzesc în timpul conducerii curentului electric.</p>

<p>Ca şi în cazul scurt circuitului, dacă continuitatea circuitului este întreruptă în oricare punct, curgerea electronilor va înceta prin întreg circuitul. Cu o lampă conectată la acest circuit, acest lucru înseamnă ca această va înceta să mai lumineze:</p>

<img src="../poze/00028.png" alt="circuit electric simplu - baterie plus lampă electrică - întreruperea circuitului"/> 

<p>Ca şi înainte, fără existenţa curentului (curgerii electronilor), întregul potenţial (tensiune) al bateriei este disponibil în locul întreruperii, aşteptând ca o conexiune să „astupe” întreruperea permiţând din nou curgerea electronilor. Această situaţie este cunoscută sub denumirea de <i>circuit deschis</i>, o întrerupere a continuităţii circuitului ce întrerupe curentul peste tot. Este suficientă o singură „deschidere” a circuitului pentru a întrerupe curentul electric în întreg circuitul. După ce toate întreruperile au fost „astupate” iar continuitatea circuitului restabilită, acum circuitul poate fi denumit <i>circuit închis</i></p>

<p>Ceea ce observăm aici se regăseşte în principiul pornirii şi opririi lămpilor prin intermediul unui întrerupător. Deoarece orice întrerupere în continuitatea circuitului rezultă în oprirea curentului în întreg circuitul, putem folosi un dispozitiv creat exact pentru acest scop, denumit <i>întrerupător</i>, montat într-o locaţie oarecare, dar asfel încât să putem controla deplasarea electronilor prin circuit:</p>

<img src="../poze/00029.png" alt="circuit electric simplu plus întrerupător"/> 

<p>Acesta este modul în care o întrerupătorul poate controla becul din cameră. Întrerupătorul însăşi constă dintr-o pereche de contacte metalice acţionate de un buton sau de un braţ mecanic. Când contactele se ating, electronii se vor deplasa dintr-un capăt în celălalt al circuitului iar continuitatea acestuia este restabilită; când contactele sunt separate, curgerea electronilor este întreruptă de către izolaţia dintre contacte reprezentată în acest caz de aer, iar continuitatea circuitului este întreruptă</p>

<p>Probabil că cel mai bun întrerupător pentru ilustrarea principiului de bază este un întrerupător de tip „cuţit”:</p>

<img src="../poze/50010.jpg" alt="întrerupător tip cuţit cu un contact"/> 

<p>Un întrerupător de tip „cuţit” nu este altceva decât dintr-un braţ mecanic ce poate pivota liber în jurul unei balamale (punct fix), ce vine în contact fizic cu unul sau mai multe contacte fixe ce sunt de asemenea conductive. Întrerupătorul de mai sus este construit pe o bază de porţelan (un material izolator excelent), folosind cupru (un excelent conductor) pentru construcţia contactelor şi a „lamei”. Mânerul este din plastic pentru a izola mâna operatorului de lama conductoare atunci când se efectuează operaţiile de închidere şi deschidere.</p>

<p>Un alt tip de întrerupător cuţit este format din două contacte staţionare în loc de unul:</p>

<img src="../poze/50006.jpg" alt="întrerupător tip cuţit cu două contacte"/> 	

<p>Acest întrerupător are o singură lamă dar două contacte staţionare, ceea ce înseamnă ca poate închide sau deschide mai mult de un singur circuit. Pentru acum, acest lucru nu este foarte important, doar conceptul de bază a ceea ce este un întrerupător şi modul său de funcţionare.</p>

<p>Întrerupătoarele cuţit sunt excelente pentru ilustrarea principiilor de bază în funcţionarea întrerupătoarelor, dar prezintă probleme distincte de siguranţă atunci când sunt folosite în circuitele electrice de putere înaltă. Conductoarele vizibile fac posibilă atingerea accidentală a lor, iar orice scânteie ce poate apărea între contactele staţionare şi lama aflată în mişcare riscă să aprindă materialele inflamabile aflate în apropiere. Contactele majorităţii întrerupătoarelor moderne sunt închise într-o carcasă izolatoare pentru evitarea acestor pericole. Poza de mai jos prezintă câteva modele de înterupătoare moderne:</p>

<img src="../poze/50019.jpg" alt="întrerupătoare moderne"/> 	

<p>Folisind în continuare terminologia circuitelor electrice, un întrerupător ce realizează contactul între cei doi terminali ai săi (ex.: întrerupătorul cuţin cu lama ce atinge contactul staţionar) crează continuitate pentru curgerea electronilor prin acesta, şi este denumit un întrerupător <i>închis</i>. Analog, un întrerupător ce crează o discontinuitate (ex.: întrerupătorul cuţit cu lama îndepărtată de contactul staţionar) nu va permite electronilor să treacă, şi se numeşte un întrerupător <i>deschis</i>.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Prin <i>rezistenţă</i> măsuram opoziţia faţă de curentul electric</li>
	<li>Un <i>scurt circuit</i> reprezintă un circuit electric ce oferă o rezistenţă foarte scăzută curgerii electronilor (sau deloc). Scurt circuitele sunt periculoase în cazul surselor de tensiune înaltă datorită curenţilor intenşi ce pot cauză eliberarea unei cantităţi mari de energie sub formă de căldură</li>
	<li>Un <i>circuit deschis</i> este un circuit electric ce nu are continuitate, prin urmare nu există o cale pe care electronii să o poată urma</li>
	<li>Un <i>circuit închis</i> este un circuit electronic complet, continuu, cu un drum pe care electronii îl pot urma</li>
	<li>Termenii <i>deschis</i> şi <i>închis</i> se referă atât la întrerupătoare cât şi la întregul circuit. Un întrerupător deschis este un întrerupător fără continuitate: electronii nu se pot deplasa prin el. Un întrerupător închis este un întrerupător ce oferă un drum direct, cu o rezistenţă scăzută, electronilor pentru curgere.</li>
</ul>
</div>
<div id="footer">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>