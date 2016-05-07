<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuit de diferenţiere</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>17. Circuit de diferenţiere</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Scopul experimentului</h2>

<p>Experimentul indică modul de realizare a unui circuit de diferenţiere. După realizarea circuitului, veţi putea obţine o înţelegere emipirică a derivatei unei funcţii.</p>

<h2>Materiale necesare</h2>

<p>Pentru realizarea circuitului veţi avea nevoie de două baterii de 6 volţi, un condensator de 0,1 µF, un rezistor de 1 MΩ şi un potenţiometru liniar, simplu, de 5 kΩ. Valoarea potenţiometrului nu este neapărat critică. Totuşi, teoretic, o valoare mai mică a rezistenţei potenţiometrului conduce la rezultate mai bune în acest experiment. Circuitul final arată astfel:</p>

<img src="../poze/05229.png" width="300" height="147" alt="circuit de diferenţiere"/>

<img src="../poze/05230.png" width="270" height="273" alt="circuit de diferenţiere"/>

<h2>Realizarea circuitului</h2>

<p>Măsuraţi tensiune dintre peria potenţiometrului şi punctul de masă reprezentat în figura de mai sus (terminalul negativ al bateriei de 6 V din partea de jos). Aceasta este tensiunea de intrare a circuitului. Puteţi observa cum această tensiune variază continuu între 0 şi 12 V pe măsură ce deplasăm peria potenţiometrului. Din moment ce utilizăm potenţiometrul pe post de divizor de tensiune, acest comportament ar trebui să vă fie deja cunoscut.</p>

<p>Măsuraţi apoi tensiunea la bornele rezistorului de 1 MΩ pe măsură ce învârţiţi potenţiometrul. Setaţi voltmetrul pe cea mai sensibiliă (mV) scară. Ce indică voltmetrul atunci când <i>nu</i> învârtim controlul potenţiometrului? Învârtiţi potenţiometrul încet, în sensul acelor de ceasornic, şi observaţi indicaţia voltmetrului. Realizaţi acelaşi lucru, dar în sens invers acelor de ceasornic. Care este diferenţa dintre cele două direcţii ale deplasării potenţiometrului?</p>

<p>Încercaţi să controlaţi potenţiometrul astfel încât să obţineţi o indicaţie stabilă a tensiunii. Ce tip de deplasare a potenţiometrului oferă cea mai stabilă indicaţie a tensiunii la bornele rezistorului de 1 MΩ?</p>

<h2>Derivata unei funcţii în analiza matematică</h2>

<p>O funcţie matematică ce reprezintă rata de variaţie a unei variabile faţă de o alta, poartă numele de derivată. Acest circuit simplu ilustrează conceptul de derivare prin producerea unei tensiuni de ieşire proporţionale cu variaţia tensiunii de intrare în raportul cu timpul. Prin urmare, acest circuit mai este cunoscut sub numele de circuit de diferenţiere.</p>

<p>La fel ca circuitul de mediere, circuitul de diferenţiere poste fi considerat un calculator analogic. Diferenţierea este o operaţie matematică mult mai complexă decât medierea, în special când este implementată într-un calculator digital. Acest circuit este aşadar un exemplu excelent al eleganţei circuitelor analogice în realizarea calculelor matematice. Desigur, se pot realiza circuite de diferenţiere mult mai precise prin combinarea reţelelor rezistor-condensator cu circuite electronice de amplificare.</p>


</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>