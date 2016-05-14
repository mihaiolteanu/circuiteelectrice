<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Poziţia „normală” a contactelor</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Poziţia „normală” a contactelor</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Orice tip de comutator poate fi proiectat astfel încât contactele sale să se închidă (stabilirea continuităţii circuitului), sau să se deschidă (întreruperea continuităţii), atunci când este acţionat. Pentru comutatoarele prevăzute cu un mecanism de re-întoarcere la poziţia iniţială, direcţia de re-întoarecere a comutatorului, atunci când nu este aplicată nicio forţă externă, poartă numele de poziţie normală. Prin urmare, contactele ce sunt deschise în poziţia normală, poartă numele de „normal-deschise”. Contactele ce sunt închise în poziţia normal, poartă numele de „normal-închise”.</p>

<p>Pentru comutatoarele de proces, poziţia normală, este acea poziţia în care nu există nicio influenţă de proces asupra comutatorului. O metodă simplă de determinarea a poziţiei normale a unui comutator de proces, constă în determinarea poziţiei comutatorului atunci când acesta nu a fost încă instalat. Să luăm câteva exemple de poziţii normale de proces. Comutator de viteză: axul este staţionar; comutator de presiune: presiunea aplicată este zero; comutator de temperatură: temperatură ambientală (temperatura camerei); comutator de nivel: recipient gol; comutator de curgere: viteza de curgere a lichidului este zero.</p>

<p>Este important să facem diferenţa între poziţia „normală” a comutatorului şi funcţionarea sa „normală” într-un proces. Să considerăm exemplul unul comutator de curgere ce este utilizat pentru semnalizarea (pe cale sonoră sau vizuală) scăderii debitului de apă dintr-un sistem de răcire. Funcţionarea normală a sistemului de răcire constă într-un debit constant şi suficient de lichid de răcire prin conducte. Să presupunem că urmărim închiderea contactelor comutatorului în cazul pierderii de lichid de răcire (pentru completarea unui circuit electric ce activează alarma vizuală sau auditivă, de exemplu). În acest caz, va trebui să folosim un comutator de curgere cu contacte în poziţia normal-închis şi nu în poziţia normal-deschis. În momentul în care existe un debit normal şi suficient de lichid prin conducte, contactele comutatorului rămân în poziţia deschis. Atunci când debitul lichidului scade sub un anumit nivel critic, contactele se re-întorc în poziţia lor normală, şi anume, normal-închis. Gândiţi-vă tot timpul la starea normală a unui comutator ca la acea stare în care se regăseşte dispozitivul când nu este introdus în sistem (este încă în magazin, de exemplu).</p>

<img src="../poze/04031.png" alt="simbolul comutatorului tip buton în poziţia normal-deschis, respectiv normal-închis"/>

<p>Simbolul comutatorelor este diferit în funcţie de scopul şi de modul de acţionare. Un comutator normal-deschis este reprezentat în aşa fel încât să reprezinte un contact deschis, care în momentul acţionării să se închidă. Invers, un comutator normal-închis este reprezentat ca şi un contact închis ce se deschide la acţionarea dispozitivului. Alăturat este reprezentat simbolul comutatorului tip buton în poziţia normal-deschis, respectiv normal-închis.</p>

<div class="clear"></div>

<img src="../poze/04029.png" alt="simbolul general al comutatorului în poziţie normal-deschis, respectiv normal-închis"/>

<p>Există de asemenea un simbol generic pentru poziţia oricărui tip de comutator, fie normal-deschis, fie normal-închis, asemeni figurii alăturate. Comutatorul din stânga se închide când este acţionat şi este deschis în poziţia normală (atunci când nu este acţionat din exterior). Comutatorul din dreapta se deschide când este acţionat şi este închis în poziţia sa normală (când nu este acţionat). Dacă se folosesc astfel de simboluri pentru reprezentarea comutatoarelor, tipul acestora este de obicei trecut în vecinătatea simbolului, în cuvinte.</p>

<div class="clear"></div>

<img src="../poze/04023.png" alt="simbolul condensatorului folosit în circuitele logice digitale"/>

<p>Atenţie, nu confundaţi simbolul stânga (în figura de mai sus) cu simbolul condensatorului. În cazul în care se doreşte reprezentarea unui condensator într-un circuit logic, se va folosi simbolul alăturat. În electronica standard, acest simbol este rezervat condensatoarelor polarizate. În circuitele logice digitale, acest simbol este folosit pentru orice tip de condensator, chiar şi în situaţia când condensatorul nu este un condensator polarizat.</p>

<div class="clear"></div>

<h2>Secvenţa realizării contactelor</h2>

<p>În cazul comutatoarelor cu mai multe poziţii, trebuie luat în considerare şi modul de deschidere şi de închidere a contactelor, pe măsură ce selectorul se deplasează de pe o poziţie pe alta.</p>

<img src="../poze/04032.png" alt="comutator cu întrerupere; realizarea contactelor"/>

<p>Selectorul  comutatorului din figura alăturată realizează contactul (închiderea circuitului) într-una din cele cinci poziţii diferite. Poziţiile sunt numerotate de la 1 la 5. Configuraţia cea mai des întâlnită a unui comutator cu pas reglabil, este aceea în care contactul cu o anumită poziţie este deschis înainte de realizarea contactului (închiderea contactului) cu poziţia următoare. Sub această configuraţie, comutatorul este cunoscut sub numele de comutator cu întrerupere. Ca şi exemplu, să presupunem cazul în care comutatorul se află pe poziţia 3. Dacă selectorul este întors în sensul acelor de ceasornic, acesta va deschide contactul 3, deschizând practic circuitul, şi se va deplasa între poziţia 3 şi 4. În acest moment, ambele circuite (3 şi 4) sunt deschise, ambele contacte fiind deschis. Dacă se continuă deplasarea selectorului în sensul acelor de ceasornic, se va ajunge în poziţia 4, moment în care contactul se închide.</p>

<div class="clear"></div>

<img src="../poze/04033.png" alt="comutator cu suprapunere (comutator fără întrerupere); realizarea contactelor"/>

<p>Există însă situaţii în care nu este permisă în nicio clipă deschiderea completă a circuitului ataşat selectorului. Pentru astfel de aplicaţii, există o altă variantă de comutator, denumită comutator cu suprapunere, sau comutator fără întrerupere. În acest caz, selectorul nu deschide circuitul precedent înainte de realizarea contactului cu circuitul următor (în sensul de rotire). În exemplu precedent, contactul 4 este realizat înaintea deschiderii contactului 3. Compromisul constă în faptul că circuitul trebuie să poată tolera asemenea contacte adiacente realizata simultan (1 cu 2, 2 cu 3, 3 cu 4 şi 4 cu 5).</p>

<div class="clear"></div>

<h2>Comutatoare multipolare</h2>

<p>Când contactul(e) mobil poate fi adus pe unul dintre contactele fixe, acele poziţii sunt denumite „direcţii”. Numărul contactelor mobile poartă numele de poli. Ambele comutatoare prezentate mai sus cu un contact mobil şi cinci contacte staţionare pot fi desemnate ca si comutatoare monopolare cu cinci direcţii.</p>

<img src="../poze/04034.png" alt="comutator bipolar cu cinci direcţii"/>

<p>Să presupunem că două comutatoare bipolare cu cinci direcţii sunt legate împreună, astfel încât ele să fie acţionate prin intermediul aceluiaşi mecanism. Întregul dispozitiv astfel format poartă numele de comutator bipolar cu cinci direcţii. Simbolul unui astfel de comutator este prezentat în figura alăturată. De menţionat că linia întreruptă trasată între cele două selectoare, desemnează faptul că acestea sunt acţionate simultan de  acelaşi mecanism extern.</p>

<div class="clear"></div>

<p>Să luăm şi alte exemple de comutatoare:</p>

<img src="../poze/04016.png" alt="comutator monopolar cu o direcţie"/>

<p>Comutator monopolar cu o direcţie</p>

<div class="clear"></div>

<img src="../poze/04036.png" alt="comutator bipolar cu o direcţie"/>

<p>Comutator bipolar cu o direcţie</p>

<div class="clear"></div>

<img src="../poze/04037.png" alt="comutator monopolar cu două direcţii"/>

<p>Comutator monopolar cu două direcţii</p>

<div class="clear"></div>

<img src="../poze/04038.png" alt="comutator bipolar cu două direcţii"/>

<p>Comutator bipolar cu două direcţii</p>

<div class="clear"></div>

<img src="../poze/04039.png" alt="comutator cvadripolar cu patru direcţii"/>

<p>Comutator cvadripolar cu patru direcţii</p>

<div class="clear"></div>

<p class="sumar">Sumar:</p>
<ul>
	<li>Prin poziţia normala a unui comutator se înţelege poziţia în care acesta nu este acţionat. Pentru comutatoarele de proces, această poziţie este poziţia în care se regăseşte dispozitivul atunci când nu este instalat</li>
	<li>Un comutator deschis atunci când nu este acţionat poartă numele de comutator normal-deschis (N.D.)</li>
	<li>Un comutator închis atunci când nu este acţionat poartă numele de comutator normal-închis (N.Î.)</li>
	<li>Numărul de poli a unui comutator se referă la numărul de contacte mobile. Numărul de direcţi a unui comutator se referă la numărul contactelor staţionare disponibile pentru fiecare contact mobil</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>