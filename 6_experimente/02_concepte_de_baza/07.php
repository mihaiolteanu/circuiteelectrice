<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Disiparea puterii</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>7. Disiparea puterii</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Scopul experimentului</h2>

<p>Pentru realizarea acestui experiment, veţi avea nevoie de doi rezistori cu o putere de 0,25 W: unul de 10 Ω şi celălalt de 330 Ω. Nu folosiţi o baterie mai mare de 6 V. Este indicat ca termometrul utilizat să fie cât mai mic cu putinţă, pentru a putea măsura rapid căldura produsă de rezistor.</p>

<p>Scopul acestui experiment este familiarizarea cu legea lui Joule, importanţa puterii nominale a componentelor precum şi importanţa punctelor electric comune. Circuit pe care îl vom realiza este următorul:</p>

#+CAPTION: circuit electric simplu
[[../poze/05122.png]]

<p>Practic, circuitul va arăta conform figurii de mai jos. Atenţie însă, nu ţineţi rezistorul între degete atunci când este alimentat.</p>

#+CAPTION: circuit electric simplu
[[../poze/05123.png]]

<h2>Realizarea circuitului şi a măsurătorilor</h2>

<p>Măsuraţi valoarea fiecărui rezistor cu ohmmetrul. Notaţi-vă valorile obţinute pentru a le putea folosi în viitor.</p>

<p>Conectaţi rezistorul de 330 Ω la bateria de 6 V, precum în figura de mai sus. Folosiţi conductori adiţionali. Conectaţi prima dată conductorii de legătură la terminalii rezistorului. Conectaţi apoi (şi nu înainte!) conductorii la baterie. Putem evita astfel atingerea suprafeţei rezistorului atunci când acesta este alimentat. </p>

<p>Poate vă întrebaţi de ce am încerca să evităm contactul cu suprafaţa rezistorului când acesta este alimentat. Răspunsul este că acesta se va încălzi. Acesta este şi motivul pentru care avem nevoie de un termometru, pentru a măsură această temperatură.</p>

<p>Cu rezistorul de 330 Ω conectat la baterie, măsuraţi tensiunea cu ajutorul voltmetrului. Putem realiza acest lucru în mai multe feluri. Tensiunea poate fi măsurată direct la bornele bateriei, sau direct la bornele rezistorului. Tensiunea bateriei este aceiaşi cu tensiunea la bornele bateriei în circuitul de faţă. Încercaţi să măsuraţi tensiunea în ambele puncte pentru a vă lămuri că acest lucru este adevărat. Acesta este un principiu al punctelor electric comune, ceea ce avem şi în circuitul de mai jos:</p>

#+CAPTION: circuit electric simplu
[[../poze/05124.png]]

<h2>Calcularea puterii disipate</h2>

<p>Acum că avem toate datele necesare (rezistenţa, tensiune şi curent), putem calcula puterea disipată. Putem folosi oricare dintre cele trei relaţii - cunoscute sub numele de „legea lui Joule” - cunoscând cel puţin două valori dintre cele trei enumerate mai sus:</p>

<div class="formula">
P = IE; P = I<sup>2</sup>R; P = E<sup>2</sup> / R
</div>

<p>Încercaţi să calculaţi puterea disipată în acest circuit, folosindu-vă de cele trei valori măsurate mai sus. Indiferent de formula pe care o aplicaţii, rezultatul va fi aproximativ acelaşi. Presupunând că avem o baterie de 6 V şi un rezistor de 330 Ω, puterea disipată va fi de 0,109 W, sau 109 mW. Din moment ce puterea nominală a rezistorului (specificată de producător) este de 0,25 W sau 250 mW, rezistorul nostru poate disipa fără probleme o putere de 109 mW. Fiindcă valoarea efectivă a puterii este aproximativ jumătate din puterea nominală, rezistorul se va încălzi putin, dar nu se va supra-încălzi. Atingeţi mijlocul rezistorului cu vârful termometrului. Care este temperatura acestuia?</p>

<p>Puterea (maximă) nominală (înscrisă pe component sau specificată de producător) a unui component electric nu ne spune cantitatea de putere ce o va disipa componentul respectiv. Ne spune în schimb, care este cantitate de putere ce o poate disipa fără a duce la distrugerea acestuia. Dacă puterea efectiv disipată în timpul funcţionării depăşeşte puterea nominală a componentului, temperatura acestuia va creşte atât de mult încât va duce la distrugerea lui.</p>

<p>Pentru a ilustra cele spuse mai sus, deconectăti rezistorul de 330 Ω. Înlocuiţi-l cu un rezistor de 10 Ω. Evitaţi atingerea acestuia după ce aţi alimentat circuitul, deoarece se va încălzi repede. Atenţie, ţineţi rezistorul de 10 Ω departe de materiale inflamabile de orice fel, atunci când este alimentat!</p>

<p>Probabil că nu veţi avea timp suficient să măsuraţi tensiunea şi curentul înainte ca rezistorul să scoată fum. Dacă observaţi un astfel de comportament, întrerupeţi circuitul şi lăsaţi rezistorul câteva clipe pentru a se răci. Măsuraţi apoi rezistenţa acestuia cu ohmmetrul şi vedeţi dacă există o variaţie faţă de valoarea iniţială a rezistenţei. Dacă valoarea se încadrează încă în limita de +/-5 (între 9,5 şi 10,5 Ω), reconectaţi-o în circuit şi lăsaţi-o să mai fumege puţin.</p>

<p>Ce se întâmplă cu valoarea rezistenţei pe măsură ce rezistorul se arde din ce în ce mai tare? Distrugerea totală a rezistorului duce la o valoare a rezistenţei infinită între cei doi terminali.</p>

<p>Realizaţi acum calculele pentru aflarea puterii disipate de rezistorul de 10 Ω folosind legile lui Joule. Un rezistor de 10 Ω conectat la o baterie de 6 V va disipa o putere de 3,6 W, de 14,4 ori mai mult decât puterea nominală a acestuia. Nu e de mirare atunci că „ia foc” aşa de repede după conectarea la baterie.</p>



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
