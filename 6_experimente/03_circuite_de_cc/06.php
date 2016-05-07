<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Potenţiometrul ca şi reostat</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>06. Potenţiometrul ca şi reostat</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Scopul experimentului</h2>

<p>Vom avea nevoie de o baterie de 6 V, un potenţiometru liniar cu o singură înfăşurare (5 kΩ) şi un motor electric mic cu magneţi permanenţi. Vom învăţă în acest experiment cum să utilizăm un reostat, cum să folosim un potenţiometru pe post de reostat, cum putem controla viteza de rotaţie a unui motor şi cum putem folosi un voltmetru pentru a verifica continuitatea circuitului în locul ampermetrului.</p>

<p>Pe parcursul experimentului vom realiza circuitul de mai jos (diagramă plus implementare practică):</p>

<img src="../poze/05144.png" width="230" height="133" alt="circuit electric cu potenţiometru şi motor"/>

<img src="../poze/05145.png" width="260" height="204" alt="circuit electric cu potenţiometru şi motor"/>

<h2>Realizarea reostatului din potenţiometru</h2>

<p>Potenţiometrele se utilizează de obicei pe post de divizori de tensiune, poziţia periei determinând raportul de divizare. Totuşi, există aplicaţii în care nu avem nevoie de un divizor de tensiune variabil, ci doar un rezistor variabil: un dispozitiv cu două terminale. Tehnic, un rezistor variabil este cunoscut sub numele de reostat, dar potenţiometrele pot fi utilizate foarte bine pe post de reostat.</p>

<p>În cea mai simplă comfiguraţie, potenţiometrul poate fi folosit pe post de reostat prin simpla utilizare a doi dintre terminalii acestuia. Cel de al treilea terminal este lăsat neconectat şi neutilizat:</p>

<img src="../poze/05146.png" width="230" height="133" alt="circuit electric cu potenţiometru şi motor"/>

<img src="../poze/05147.png" width="260" height="203" alt="circuit electric cu potenţiometru şi motor"/>

<p>Deplasarea periei potenţiometrului astfel încât aceasta să se apropie de celălalt terminal utilizat rezultă în descreşterea rezistenţei. Direcţia necesară creşterii sau descreşterii rezistenţei poate fi schimbată prin utilizarea unor seturi diferite de terminali:</p>

<img src="../poze/05148.png" width="378" height="176" alt="potenţiometru"/>

<p>Fiţi atenţi însă să nu folosiţi cei doi terminali externi. Acest lucru nu va duce la modificarea rezistenţei atunci când poziţia periei se schimbă. Cu alte cuvinte, potenţiometrul nu va mai funcţiona ca şi o rezistenţă variabilă:</p>

<img src="../poze/05149.png" width="198" height="164" alt="potenţiometru"/>

<h2>Controlul vitezei motorului</h2>

<p>Realizaţi circuitul prezentat la început, utilizând doar doi terminali ai potenţiometrului. Observaţi modul în care poate fi controlată viteza motorului prin ajustarea poziţiei periei potenţiometrului. Experimentaţi cu diferite conexiuni ale terminalilor. Observaţi comportamentul motorului. Dacă potenţiometrul vostru are o rezistenţă mare (măsurată între cei doi terminali externi), s-ar putea ca motorul să nu se rotească deloc până în momentul în care peria este adusă foarte aproape de terminalul extern conectat (rezistenţa mică).</p>

<p>După cum puteţi observa, viteza motorului poate fi variată folosind un reostat conectat în serie cu acesta. Reostatul modifică rezistenţa totală a circuitului şi limitează curentul total. Această metodă de control este însă ineficientă, deoarece puterea disipată (pierdută) de reostat este destul de mare. O metodă mult mai eficientă constă în alimentarea motorului cu o putere pulsatorie, folosind un tranzistor. O metodă similară este folosită şi în cazul dimmer-elor casnice.</p>

<h2>Conectarea terminalului liber la terminalul-perie (opţional)</h2>

<p>Când folosim potenţiometrul pe post de reostat, adesea, terminalul nefolosit este conectat la terminalul perie, astfel:</p>

<img src="../poze/05150.png" width="230" height="137" alt="circuit electric cu potenţiometru şi motor"/>

<p>Într-o primă instanţă, acest lucru pare complet inutil, întrucât nu are niciun impact asupra controlului rezistenţei. Puteţi verifica acest lucru prin introducerea unui nou fir în circuitul realizat. Comparati comportamentul motorului înainte şi după această modificare:</p>

<img src="../poze/05151.png" width="260" height="203" alt="circuit electric cu potenţiometru şi motor"/>

<p>Dacă potenţiometrul este în stare bună de funcţionare, acest conductor adiţional nu are niciun efect asupra funcţionării motorului. Totuşi, dacă peria pierde contactul cu elementul rezistiv din interiorul potenţiometrului, această conexiune adiţională menţine circuitul închis. În unele aplicaţii, acest lucru poate fi important.</p>

<p>Puteţi simula un asemenea „defect” a contactului periei. Deconectaţi terminalul din mijloc al potenţiometrului din circuit. Măsuraţi tensiunea motorului pentru a vă asigura că acesta este încă alimentat:</p>

<img src="../poze/05152.png" width="350" height="298" alt="circuit electric cu potenţiometru şi motor"/>

<h2>Verificarea circuitelor cu voltmetrul în locui ampermetrului</h2>

<p>Ar fi trebuit să măsuraţi curentul din circuit în loc de tensiunea motorului pentru a verifica continuitatea circuitului (circuit închis). Totuşi, această metodă este mult mai sigură deoarece nu implica deschiderea circuitului pentru conectarea în serie a ampermetrului. Ori de câte ori folosim un ampermetru, există riscul unui scurt-circuit prin conectarea acestuia la bornele unei surse substanţiale de tensiune. Rezultatul poate fi distrugerea aparatului de măsură sau chiar accidentarea persoanei respective.</p>

<p>Nu este şi cazul voltmetrelor însă. Prin urmare, ori de câte ori puteţi la fel de bine măsura tensiunea în detrimentul măsurării curentului (utilizarea voltmetrului în detrimentul ampermetrului), pentru a verifica exact acelaşi lucru, varianta tensiunii este cea indicată.</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>