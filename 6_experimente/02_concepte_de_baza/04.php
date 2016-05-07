<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Măsurarea curentului</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Măsurarea curentului</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Scopul experimentului</h2>

<p>Următorul experiment are ca principal scop realizarea şi înţelegearea circuitului de mai jos:</p>

<img src="../poze/05056.png" width="220" height="109" alt="circuit electric simplu"/>

<p>Practic, circuitul de mai sus arată astfel:</p>

<img src="../poze/05057.png" width="274" height="229" alt="circuit electric simplu"/>

<h2>Atenţie la scurt-circuitarea accidentală a ampermetrului</h2>

<p>Cea mai uitilizată metodă de măsurare a curentului constă în întreruperea circuitului şi introducerea unui ampermetru în serie cu circuitul. În acest fel toţi electroni ce trec prin circuitu, vor trebui să treacă şi prin ampermetru. Deoarece măsurarea curentului în acest fel necesită introducerea aparatului de măsură în circuit, acest tip de măsurătoare este mai dificilă decât măsurarea tensiunii sau a rezistenţei.</p>

<p>Unele multimetre digitale, precum cel din figură, sunt prevăzute cu un conector separat pentru măsurarea curentului. Introduceţi sonda roşie în acest conector, marcat cu „A”.</p>

<p>În mod ideal, la bornele unui ampermetrului introdus în serie într-un circuit, nu va exista cădere de tensiune. Cu alte cuvinte, acesta se comportă precum un fir conductor, prezentând o rezistenţa foarte mică de la un capăt la celălalt. Prin urmare, un ampermetru se va comporta precum un scurt-circuit dacă este conectat în paralel cu o sursă substanţială de tensiune. Nu încercaţi totuşi să faceţi acest lucru. Curentul foarte mare rezultat poate duce la distrugerea aparatului:</p>

<img src="../poze/05058.png" width="266" height="229" alt="scurt-circuitarea ampermetrului"/>

<p>Ampermetrele sunt de obicei protejate împotriva unor astfel de scenarii prin intermediul unei siguranţe fuzibile localizate în interiorul carcasei. Încercaţi însă să evitaţi astfel de scenarii.</p>

<p>Puteţi verifica starea siguranţei fuzibile interne a multimetrului trecând pe „Ω” (măsurare rezistenţe), şi măsurând continuitatea între cele două sonde (şi prin siguranţa fuzibilă), astfel:</p>

<img src="../poze/05059.png" width="260" height="338" alt="circuit electric simplu"/>

<h2>Desfăşurarea experimentului</h2>

<p>Realizaţi circuitul de mai sus constând dintr-o baterie şi un bec folosindu-vă de fire conductoare adiţionale. Utilizaţi aceste fire pentru conectarea becului la baterie. Verificaţi dacă becul se aprinde înainte de a conecta şi ampermetrul în circuit. Întrerupeţi apoi circuitul într-un anumit punct, şi conectaţi ampermetrul între cele două puncte rămase libere după deschiderea curentului, Măsuraţi valoarea curentului.</p>

<p>Ca de obicei, daca aparatul de măsură pe care îl folosiţi este manual, selectaţi la început valoarea cea mai mare a scalei. Mutaţi selectorul pe poziţii mai joase până când obţineţi cea mai precisă măsurătoare, având grijă să nu depăşiţi scare. Dacă indicaţia este „inversă” (acul indicator deplasat în stânga, sau o valoare negativă pe afişaj), inversaţi sondele între ele şi încercaţi din nou. Când ampermetrul indică o citire normală (nu inversă), electronii intră prin sonda neagră şi ies prin sonda roşie. Acesta este modul de determinare al direcţiei curentului folosind un aparat de măsură.</p>

<p>Pentru o baterie de 6 V şi un bec mic, curentul prin circuit este de ordinul miliamperilor (mA). Multimetrele digitale arată de obicei acest lucru printr-un mic „m” în partea dreaptă a afişajului.</p>

<p>Încercaţi să întrerupeţi circuitul în alt punct, şi conectaţi ampermetrul între acele puncte. Ce puteţi spune despre valoarea curentului? De ce credeţi că se întâmplă acest lucru?</p>

<p>Refaceţi circuitul pe o placă de test, astfel:</p>

<img src="../poze/05052.png" width="250" height="252" alt="circuit electric pe placa de test"/>

<p>Este foarte posibil ca în acest moment să nu vă daţi seama cum aţi putea conecta un ampermetru la o placă de test. Cum putem conecta ampermetrul pentru a măsura întreaga cantitate de curent şi a nu crea un scurt-circuit. Realizaţi circuitul de mai jos:</p>

<img src="../poze/05060.png" width="350" height="275" alt="circuit electric pe placa de test"/>

<p>Din nou, măsuraţi valoarea curentului prin diferite fire ale acestui circuit. Urmaţi aceleaşi metode precum cele de mai sus. Ce observaţi în legătură cu aceste măsurători? Rezultatele măsurătorilor realizate pe placa de test ar trebui să fie identice cu rezultate obţinute fără placa de test, din exemplul precedent.</p>

<p>Dacă ar fi să construim circuitul de mai sus pe o regletă de borne, rezultatul ar fi similar:</p>

<img src="../poze/05061.png" width="270" height="243" alt="circuit electric pe regleta de borne"/>



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