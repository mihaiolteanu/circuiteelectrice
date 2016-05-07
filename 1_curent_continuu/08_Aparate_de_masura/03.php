<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Impactul voltmetrului asupra circuitului</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Impactul voltmetrului asupra circuitului</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Orice aparat de măsură introdus în circuit modifică comportamentul acestuia din urmă într-o oarecare măsură. Deşi impactul este inevitabil, acesta poate fi minimizat printr-o proiectare bună a aparatului de măsură în cauză.</p>

<p>Din moment ce voltmetrele se conectează tot timpul în paralel cu componentul sau componentele aflate sub test, orice curent prin voltmetru va modifica curentul total din circuitul de măsurat, ducând inevitabil şi la modificarea tensiunii reale din circuit. Un voltmetru ideal posedă o rezistenţă internă infinita, astfel încât curentul care trece prin acesta să fie de 0 A pentru a nu afecta circuitul testat. Totuşi, astfel de voltmetre nu există decât în paginile cărţilor, nu şi în viaţa reală!</p>

<img class="floatleft" src="../poze/00156.png" alt="măsurarea căderii de tensiune într-un circuit divizor de tensiune cu ajutorul unui voltmetru"/>

<p>Să luăm ca şi exemplu circuitul divizor de tensiune din figura alăturată, ca şi un exemplu extrem al efectelor unui voltmetru asupra circuitului de măsurat.</p>

<div class="clear"></div>

<img class="floatleft" src="../poze/00157.png" alt="realizarea unui subcircuit între volmetru şi componentul asupra cărei se face măsurarea tensiunii"/>

<p>Atunci când voltmetrul nu este conectat în circuit, vom aveam o cădere de tensiune de exact 12 V pe fiecare dintre cei doi rezistori (vezi circuitele divizoare de tensiune). Totuşi, dacă voltmetrul considerat în acest exemplu posedă o rezistenţa internă între cele două sonde de 10 MΩ (o valoare normală pentru un voltmetru digital), aceasta va crea un subcircuit paralel cu rezistorul inferior al divizorului.</p>

<div class="clear"></div>

<img class="floatleft" src="../poze/00158.png" alt="modificarea căderilor de tensiune din circuit ca urmare a conectării volmetrului"/>

<p>Acest lucru duce la scăderea rezistenţei inferioare de la 250 MΩ la 9,61 MΩ (circuit paralel), modificând fundamental căderile de tensiune din circuit.</p>

<div class="clear"></div>

<p>Un divizor de tensiune cu rezistenţele de 250 MΩ, respectiv 9,61 MΩ va diviza o tensiune de 24 V în 23,11 V, respectiv 0,88 V. Din moment ce voltmetrul face parte din rezistenţa de 9,61 MΩ, aceasta este şi valoarea pe care o va indica: 0,88 V.</p>

<p>Voltmetrul poate indica doar căderea de tensiune dintre punctele în care este conectat. Acesta nu poate „ştii” că înainte de introducerea sa în circuit, în acea locaţie exista o cădere de tensiune de 12 V şi nu de 0,88 V. Conectarea aparatului de măsură în circuit modifică rezistenţa circuitului şi prin urmare şi valoarea căderii de tensiune măsurate, aceasta nefiind prin urmare cea reală.</p>

<p>Acest efect este prezent, într-o anumită măsură, ori de câte ori folosim un voltmetru. Scenariul prezentat mai sus este unul extrem, cu o rezistenţa a voltmetrului mult mai mică decât rezistenţa divizorului de tensiune. Din aceste motive, cu cât rezistenţa internă a voltmetrului este mai mare, cu atât efectul acestuia asupra circuitului de măsurat va fi mai mic. Din această cauză, un voltmetru ideal posedă o rezistenţă infinită. Dar, indiferent de valoarea acestei rezistenţe, efectul prezentat mai sus va fi tot timpul prezent într-un circuit.</p>

<h2>Sensibilitatea voltmetrelor</h2>

<p>Impactul creat de voltmetrele electromecanice asupra circuitelor este desemnat prin numărul de ohmi prezenţi între terminalii aparatului pentru fiecare domeniu de tensiune (poziţii diferite ale selectorului). Practic, acesta este un număr exprimat în Ω/V. Voltmetrele digitale posedă de obicei o rezistenţa constantă între sondele aparatului indiferent de domeniu de tensiune ales.</p>

<img class="floatleft" src="../poze/00154.png" alt="volmetru folosind un comutator multi-polar si o serie de rezistori de multiplicare"/>

<p>Să reluăm exemplu din secţiunea precedentă. Pe domeniul 1000 V, rezistenţa totală este de 1 MΩ (999,5 kΩ + 500Ω), ceea ce înseamnă 1 MΩ / 1000 V, sau 1 kΩ/V. Această sensibilitate rămâne constantă indiferent de domeniul ales:</p>

<div class="clear"></div>

<div class="formula">
domeniul 100 V; sensibilitatea: 100 kΩ / 100 V = 1 kΩ / V
domeniul 10 V; sensibilitatea: 10 kΩ / 10 V = 1 kΩ / V
domeniul 1 V; sensibilitatea: 1 kΩ / 1 V = 1 kΩ / V
</div>

<p>Astfel, valoarea exprimată în ohm/volt este o caracteristică principală a voltmetrului, şi nu depinde de domeniul selectat. Dacă suntem foarte atenţi, putem observa că această valoare este determinată de un singur factor: curentul necesar pentru deplasarea maximă a acului indicator, în acest caz, 1 mA. „Ohm/volt” este inversa matematică a raportului „volt/ohm”, ceea ce conform legii lui Ohm, este chiar curentul (I = E / R). Prin urmare, curentul necesar deplasării maxime dictează sensibilitatea ohm/volt a aparatului, indiferent de domeniile de tensiune disponibile şi de valorile rezistorilor de multiplicare. În cazul nostru particular, o deplasare maximă pentru valoarea de 1 mA rezultă într-o sensibilitate de 1000 Ω/V, indiferent de modul de aranjare al rezistorilor de multiplicare.</p>

<p>Pentru minimizarea efectelor asupra circuitelor, curentul de deplasare maximă trebuie să fie prin urmare cât mai mic. Acest lucru se poate realiza prin reproiectarea aparatului pentru o sensibilitatea maximă (un curent mai mic pentru o deflecţie maximă). Variabila ce trebuie luată însă în considerarea este robusteţea aparatului: cu cât deplasarea este mai sensibilită, cu cât acesta tinde să fie mai fragil.</p>

<img class="floatleft" src="../poze/00370.png" alt="amplificarea curentului voltmetrului pe cale electronică"/>

<p>O altă modalitate constă în amplificarea electronică a curentului necesar deplasării, astfel încât curentul ce este absorbit de către aparat din circuit să fie cât mai mic. Acest tip de circuit electronic poartă numele de amplificator.</p>

<div class="clear"></div>

<p>Nu vom intra în detaliile modului de funcţionare ala amplificatorului aici, dar putem spune că circuitul permite tensiuni de măsurat sa controleze valoarea curentului prin ampermetru. Astfel, curentul necesar deplasării acului indicator este generat de o baterie internă şi nu de circuitul exterior. Şi în acest caz există un anumit curent absorbit de aparat din circuitul măsurat, dar acesta este de sute sau mii de ori mai mici decât curentul absorbit în mod normal de un astfel de aparat fară amplificare.</p>

<h2>Detectorul de nul</h2>

<p>O ultimă soluţie, şi una foarte ingenioasă, la problema efectului introdus de voltmetru în circuit, îl constitue detectorul de nul. Acesta nu necesită un circuit complicat, dar este nevoie de multă pricepere din partea utilizatorului.</p>

<img class="floatleft" src="../poze/00159.png" alt="măsurarea căderii de tensiune din circuit cu ajutorul unui detector de nul"/>

<p>Într-un detector de nul, o sursă de tensiune de precizie, ajustabilă, este comparată cu tensiune de măsură iar aparatul indică diferenţa de tensiune dintre cele două. În cazul în care indicaţie este zero (nulă), căderea de tensiune din circuitul de test este egală cu tensiunea sursei de tensiune de precizie, iar curentul absorbit din circuit va fi de zero amperi. În unele situaţii, aparatul este prevăzut cu un potenţiometru de precizie pentru reglarea fină a tensiunii.</p>

<div class="clear"></div>

<p>Deoarece scopul unui detector de nul este indicarea precisă a condiţiei de zero (volţi), şi nu indicarea unei valori specifice diferite de zero, scala de valori folosită este irelevantă. Aceste dispozitive sunt proiectate a fi cât mai sensibile cu putinţă.</p>

<p>Un detector de nul extrem de simplu constă dintr-un set de căşti, utilizând difuzoarele pe post de „ac indicator”. Dacă amplicăm o tensiune de c.c. unui difuzor, curentul rezultat va deplasa conul acestuia, iar difuzorul va produce un „click” scurt. Un alt „click” se poate auzi la deconectarea sursei de c.c.</p>

<img class="floatleft" src="../poze/00425.png" alt="detector de nul realizat cu ajutorul unei perechi de căşti şi un întrerupător"/>

<p>Luând în considerare acest principiu, un detector de nul sensibil poate fi realizat dintr-o simplă pereche de căşti şi un întrerupător.</p>

<div class="clear"></div>

<img class="floatleft" src="../poze/00426.png" alt="detector de nul realizat cu ajutorul unei perechi de căşti şi un întrerupător; adăugarea în circuit a unui transformator"/>

<p>Dacă folosim o pereche de căşti de 8 Ω, sensibilitatea aparatului poate fi crescută prin conectarea sa la un transformator coborâtor de tensiune. La închidere/deschiderea întrerupătorului, curentul mic de la intrare va avea o valoare mult mai mare la ieşirea transformatorului. Rezultatul este un „click” mai puternic şi mai uşor de sesizat, chiar şi pentru curenţi mult mai mici.</p>

<div class="clear"></div>

<img class="floatleft" src="../poze/00424.png" alt="detector de nul realizat cu ajutorul unei perechi de căşti şi un întrerupător; exemplu"/>

<p>Conectat în circuitul cu detector de nul prezentat mai sus, configuraţia arată precum în figura alăturată.</p>

<div class="clear"></div>

<img class="floatleft" src="../poze/00160.png" alt="balanţă de laborator; măsurarea unei greutăţi necunoscute"/>

<p>Scopul oricărui detector de nul este să se comporte precum o balanţă de laborator, indicând condiţia de egalitate ale celor două tensiuni, sau, altfel spus, lipsa unei căderi de tensiune între cele două puncte (1 şi 2). O astfel de balanţă nu măsoară de fapt nimic, ci doar indică egalitatea între o greutate necunoscută şi un set de greutăţi calibrate standard.</p>

<div class="clear"></div>

<p>Asemănător, detectorul de nul indică pur şi simplu momentul în care căderea de tensiune între punctele 1 şi 2 este egală (potenţialul celor două puncte este egal). Conform legii lui Kirchhoff pentru tensiune, acest lucru se va întâmpla atunci când sursa de tensiune ajustabilă este egală cu căderea de tensiune pe rezistorul R<sub>2</sub>.</p>

<img class="floatleft" src="../poze/00161.png" alt="etector de nul realizat cu ajutorul unei perechi de căşti şi un întrerupător; exemplu"/>


<p>Pentru a utiliza acest instrument, trebuie să ajustăm manual sursa de tensiune prin intermediul unui potenţiometru, acţionând de fiecare data întrerupătorul, până în momentul în care detectorul de nul va indica o condiţie de zero. Circuitul este echilibrat atunci când, în urma acţionării întrerupătorului, nu se va mai auzi nici un sunet la căşti. Valoarea căderii de tensiune pe R<sub>2</sub> va fi citită de pe un volmetru conectat la sursa de tensiune de precizie.</p>

<div class="clear"></div>

<p>Voltmetrul utilizat la bornele sursei de tensiune de prezicie nu trebuie neapărat sa aibă o sensibilitate Ω/V foarte ridicată, deoarece curentul necesar funcţionăii acestuia va fi generat de către sursă. Atâta timp cât căderea de tensiune pe detectorul de nul este zero, nu va exista niciun curent între punctele 1 şi 2, impactul voltmetrului asupra circuitului fiind inexistent.</p>.

<p>Merită să reamintim faptul că această metodă, executată perfect, aproape că nu introduce nicio rezistenţă suplimentară în circuitul de măsurat. Ideal, această rezistenţa ar fi zero, dar pentru atingerea acestui scop, căderea de tensiune pe detectorul de nul ar trebui să fie exact zero volţi. Acest lucru ar fi posibil doar prin intermediul unei metode de detectarea infinit sensibile şi o tensiune la fel de precisă din partea surse de tensiune de precizie. Totuşi, în ciuda acestui „neajuns”, un astfel de circuit reprezintă o metodă excelentă de măsurare a căderilor de tensiune. Şi, comparată cu soluţia amplificatorului, ce rezolvă această problemă cu ajutorul tehnologiei avansate, soluţia de faţă rezolvă problema aproape perfect utilizând o lege fundamentală a circuitelor electrice (legea lui Kirchhoff pentru tensiune).</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Un <strong>voltmetru ideal</strong> posedă o rezistenţă internă infinită</li>
	<li>Un <strong>detector de nul</strong> este un dispozitiv pentru determinarea curenţilor şi al tensiunilor. Acesta se evidenţiază prin sensibilitatea sa extrem de ridicată</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>