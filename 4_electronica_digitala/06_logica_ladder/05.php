<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuite logice cu autoprotecţie</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Circuite logice cu autoprotecţie</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Circuitele logic, fie că sunt compuse din relee electromecanice sau din porţi logice semiconductoare, pot fi construite sub mai multe variante pentru realizarea aceleiaşi funcţii. Nu există în general o metodă „corectă” de proiectare a circuitelor logice complexe, dar există unele metode ce sunt mai bune decât altele.</p>

<p>În sistemele de control, siguranţa joacă un rol important (sau cel puţin ar trebui să o facă). Dacă exista mai multe metode de realizare a unui circuit digital care să realizeze aceiaşi funcţie, iar una dintre metode este mai bună din punct de vedere al siguranţei la funcţionare, atunci acea metodă este mai bună decât celelelate.</p>

<p>Să luăm ca şi exemplu un sistem simplu şi să vedem cum îl putem implementa folosind relee logice. Să presupunem că un laborator mare sau o clădire industrială urmează să fie echipată cu un sistem de alarmă în caz de incendiu. Acest sistem urmează să fie activat de oricare dintre comutatoarele instalate în întreaga clădire. Sistemul ar trebui să funcţioneze astfel încât sirenă să se energizeze dacă oricare dintre comutatoare este acţionat.</p>

#+CAPTION: diagrama ladder
[[../poze/04065.png]]

<p>La o primă vedere, ar părea că circuitul logic este extrem de simplu: utilizăm contacte normal-deschise conectate în paralel, precum în figura alăturată. Practic, aceasta este o funcţie logică SAU cu patru intrări. Putem extinde acest circuit pentru a include un număr oricât de mare de comutatoare, fiecare fiind adăugat în serie. Ne vom limita însă la patru în acest exemplu. În orice caz, acesta pare un sistem elementar şi totul pare a fi în regulă.</p>

<p>Dar ce se întâmplă în cazul unui defect de circuit? Natura circuitelor electrice este astfel încât defectele de funcţionare ce constau în deschiderea circuitului sunt mult mai frecvente decât oricare alt tip de defecte. Aceste deschideri ale circuitului se pot datora deschiderii contactelor releelor, întreruperea conductorilor, arderea siguranţelor fuzibile, etc. Luând acest lucru în considerare, pare normal să realizăm un circuit care să fie cât mai tolerant posibil la o astfel de defecţiune.</p>

#+CAPTION: diagrama ladder
[[../poze/04066.png]]

<p>Să presupunem, de exemplu, ca firul conductor al comutatorului doi se distruge, ducând la deschiderea circuitului în acest punct. În cazul în care această defecţiune ar avea loc, comutatorul 2 nu ar mai putea energia sirena în cazul în care ar fi acţionat (închis). Acest lucru, evident, nu este de dorit în cazul unui incendiu. Dacă sistemul nu este verificat periodic ( o idee bună oricum), nimeni nu ar putea ştii că există o problemă până când cineva nu ar încerca sa utilizeze acel comutator în caz de urgenţă.</p>

<div class="clear"></div>

#+CAPTION: diagrama ladder
[[../poze/04067.png]]

<p>Dar dacă am re-proiecta sistemul astfel încât alarma să se declanşeze (şi) în cazul unui astfel de defect? Astfel, defectul conductorului ar duce la o alarmă de incendiu falsă. Totuşi, acest scenariu este de preferat celui în care comutatorul nu funcţionează deloc în cazuri de urgenţă. Pentru atingerea acestui scop, va trebui să refacem circuit, astfel încât alarma să fie declanşată de un comutator deschis şi nu de unul închis. Comutatoarele vor trebui sa fie normal-închise şi în serie, alimentând bobina unui releu care la rândul ei activează un contact normal-închis ce controlează sirena.</p>

<div class="clear"></div>

<p>Atunci când toate comutatoarele sunt de-energizate (starea normală a sistemului), bobina releului CR1 va fi energizată (prima linie). Contactul CR1 (linia a doua) prin urmare, va fi deschis, iar sirena nu este alimentată. Totuşi, în cazul în care oricare dintre comutatoare este acţionat, bobina CR1 se de-energizează, iar contactul CR1 revine la starea sa normală, şi anume, închis. Alarma este în acest caz alimentată şi se va declanşa. Adiţional, dacă există un defect al conductorilor din prima linie a circuitului, alarma se va declanşa. Dacă se descoperă că alarma este falsă, personalul clădirii va ştii că sistemul de alarmă este defect şi necesită reperaţii.</p>

<p>Cu siguranţa, circuitul este mult mai complex decât era înainte introducerii releului de control CR1, iar sistemul poate şi în acest caz să nu funcţioneze corespunzător. Acest lucru se poate întâmpla dacă apare un defect în linia a doua a circuitului. Dar totuşi, acest circuit este mai sigur şi preferabil din acest punct de vedere.</p>






#+CAPTION: 
[[../poze/00000.png]]

<div class="clear"></div>

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
