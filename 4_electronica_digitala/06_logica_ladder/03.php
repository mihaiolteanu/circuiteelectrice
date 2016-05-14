<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuite permisive şi de blocare</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Circuite permisive şi de blocare</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Controlul aprinderii furnalelor</h2>

<img src="../poze/04057.png" alt="diagramă ladder; circuit de control al aprinderii furnalelor"/>

<p>O aplicaţie practică a logicii digitale, bazate pe relee şi comutatoare, constă în controlul sistemelor în care există o serie de condiţii ce trebuie îndeplinite, înainte ca un echipament să poate porni în siguranţa. Un exemplu bun este cel al aprinderii furnalelor. Pentru pornirea în siguranţă a acestora, sistemul de control trebuie să ceară „permisiunea” câtorva comutatoare de proces, printre care: comutatoare de presiune joasă şi înaltă, comutatoare pentru verificarea funcţionării ventilatorului, a poziţiei uşii de acces, etc. Fiecare condiţie de proces se numeşte permisivă, iar fiecare contact permisiv este conectat în serie. Prin urmare, dacă oricare dintre contacte detectează o condiţie de nesiguranţă, circuitul va fi deschis.</p>

<div class="clear"></div>

<p>Dacă toate condiţiile sunt îndeplinite, CR1 se va energiza iar lapa verde se va aprinde. În realitate, nu doar lampa se energizează. De obicei există un releu de control, sau o valvă de fluid, ce este plasată pe acea linie a diagramei. Aceasta se va energiza cât toate contactele permisive sunt „în regulă”: adică, închise. Dacă oricare dintre condiţiile permisive nu este îndeplinită, linia de sus a diagramei va rămâne întreruptă, CR1 se ve de-energiza, iar lampa roşie se va aprinde.</p>

<p>Contactul pentru presiune înaltă a lichidul este un contact normal-închis. Acest lucru se datorează faptului că dorim deschiderea contactului doar în cazul în care presiunie lichidului devine prea mare. Din moment ce condiţia „noarmală” a oricărui comutator de presiune este îndeplinită când presiunea aplicată asupra sa este zero, şi dorim ca acest comutator să se deschidă în cazul unei presiuni excesive, trebuie să alegem un comutator ce este închis în starea sa normală.</p>

<h2>Controlul pornirii motoarelor electrice</h2>

<p>O altă aplicaţie practică a releelor constă în controlul sistemelor în care dorim ca două evenimente incompatibile să nu aibă loc în acelaşi timp.</p>

<img src="../poze/04058.png" alt="inversarea fazei unui motor electric"/>

<p>Un exemplu în acest sens constă controlul direcţiei de rotaţie a unui motor electric. Sunt utilizate contactoare pentru schimbarea polarităţii (sau secvenţei fazelor) unui motor electric. Nu dorim însă ca atât contactorul de polarizare directă cât şi cel de polarizare înversă să fie energizate în acelaşi timp.</p>

<div class="clear"></div>

<p>Când contactorul M<sub>1</sub> este energizat, sistemul trifazat de alimentare (A, B şi C) este conectat direct la terminalii 1, 2 şi 3 ai motorului. Totuşi, când contactorul M<sub>2</sub> este energizat, fazele A şi B sunt inversate, A fiind conectată la terminalul 2 al motorului, iar B la terminalul 1. Inversarea fazei duce la inversarea direcţiei de rotaţie a motorului.</p>

<img src="../poze/04059.png" alt="diagrama ladder; controlul pornirii unui motor electric"/>

<p>Să examinăm circuitul de control a acestor două contactoare. În dreapta avem un contact normal-închis (OL). Acesta este contactul termic de supra-încălzire ce este activat de elementele de „încălzire” conectate în serie cu fiecare fază a motorului de c.a. Dacă acestea se încălzesc prea tare, contactul va trece de la starea normală (închisă) la starea deschisă. Acest lucru nu va permite energizarea niciunui contactor.</p>
 
<div class="clear"></div>

<p>Acest sistem de control este suficient, atâta timp cât nimeni nu apasă ambele butoane simultan. Dacă acest lucru se întâmplă însă, fazele A şi B vor fi scurt-circuitate prin faptul că fazele A şi B sunt conectate direct la motor prin intermediul contactorului M<sub>1</sub>, iar contactorul M<sub>2</sub> le inversează. Faza A se va afla în scurt-circuit cu faza B şi invers. Evident, acesta nu este un sistem de control bun.</p>

 <img src="../poze/04060.png" alt="diagrama ladder; controlul pornirii unui motor electric"/>

<p>Pentru a preveni acest lucru, putem să proiectăm circuitul astfel încât energizarea unuia dintre contactoare săprevină energizarea celuilalt. Acest lucru se numeşte blocare, şi se poate realiza prin utilizarea de contacte adiţionale pe fiecare contactor.</p>

<div class="clear"></div>

<p>Acum când M<sub>1</sub> este energizat, contactul auxiliar normal-închis de pe linia a două se va deschide, prevenind astfel energizarea lui M<sub>2</sub>, chiar dacă buton „invers” este apăsat. Asemănător, energizarea lui M<sub>1</sub> nu este posibilă atunci când M<sub>2</sub> este energizat. Observaţi că au fost adăugate numerotaţii suplimentare ale firelor (4 şi 5) pentru a reflecta modificările.</p>

<p>Trebuie menţionat faptul că aceasta nu este singur metodă de blocare a contactoarelor pentru prevenirea scurt-circuitului. Unele contactoare sunt echipate cu dispozitive de blocare mecanice. Pentru siguranţa adiţională însă, se pot folosi şi metode de blocare electrice.</p>
  
<img src="../poze/00000.png" alt=""/>

<div class="clear"></div>

<p class="sumar">Sumar:</p>
<ul>
	<li>Contactele permisive sunt instalate pentru întreruperea funcţionării circuitului în cazul în care una sau mai multe condiţii fizice nu sunt îndeplinite</li>
	<li>Contactele de blocare sunt instalate pentru întâmpinarea situaţie în care două acţiuni ce au loc simultan sunt incompativile (alimentarea directă şi indirecta a unui motor electric, simultan, de exemplu)</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>