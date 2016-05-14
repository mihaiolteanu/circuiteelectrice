<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Măsurarea rezistenţei</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Măsurarea rezistenţei</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Scopul experimentului</h2>

<p>Experimentul următor descrie modul în care putem măsura rezistenţa unor obiecte. Nu trebuie neapărat să aveţi toate obiectele descrise mai jos pentru a învăţa efectiv despre rezistenţa. De asemenea, puteţi încerca şi cu alte obiecte. Totuşi, nu măsuraţi <i>niciodată</i> rezistenţa unui obiect sau circuit alimentat (aflat în funcţionare). Cu alte cuvinte, <i>nu</i> încercaţi să măsuraţi rezistenţa unei baterii sau a oricărei surse substanţiale de tensiune folosind un multimetru setat pe funcţia „rezistenţă” (Ω). Neluarea în considerare a acestei atenţionări va duce cel mai posibil la distrugerea aparatului de măsură şi eventual la rănirea personală.</p>

<h2>Exemplificare conceptului de puncte electric comune</h2>

<p>Setaţi multimetrul pe funcţia „Ω”, pe cea mai mare valoare disponibilă. În această situaţie, multimetrul îndeplineşte funcţia de ohmmetru. Atingeţi cele două sonde (neagră şi roşie) una de celalaltă. În acest caz, ohmmetrul ar trebui să indice o rezistenţă de 0 Ω. Dacă folosiţi în schimb un multimetru analogic, veţi observa o deplasare maximă a acului indicator în partea dreaptă.</p>

<p>Multimetrul poate fi folosit şi pentru detectarea stării de continuitate a circuitului, nu doar pentru măsurarea efectivă a valorilor rezistive. Putem testa, de exemplu, continuitatea unui fir electric prin conectarea celor două sonde la capetele acestuia. Ce se întâmplă cu indicaţia aparatului de măsură în acest caz? Ce putem spune despre un astfel de conductor electric dacă acul indicator al ohmmetrului nu s-ar deplasa deloc?</p>

<p>De menţionat, că multimetrele digitale, setate pe ohmmetru, indică lipsa continuităţii electrice dintr-un conductor sau component printr-un afişaj non-numeric. Unele model afişează „OL” (din engleză, Open Loop - circuit deschis), iar altele o serie de linii întrerupte.</p>

<p>Folosiţi multimetrul vostru pentru a determina continuitatea unei plăci electronice de test: un dispozitiv utilizat pentru construirea temporară a circuitelor. Folosiţi conductori subţiri de cupru, inseraţi în locurile libere de pe placă, pentru a putea conecta sondele aparatului de măsură la placă. Testaţi continuitatea lor.</p>

#+CAPTION: măsurarea continuităţii unei plăci electronice de test
[[../poze/05041.png]]

#+CAPTION: măsurarea continuităţii unei plăci electronice de test
[[../poze/05042.png]]

<p>Un concept foarte important în teoria electricităţii, strâns legat de cel al continuităţii, este cel al punctelor comune din punct de vedere electric. Punctele electrice comune, sunt puncte de contact dintr-un circuit sau dispozitiv, ce posedă o rezisenţă electric neglijabilă (extrem de mică) între ele.</p>

<p>Putem spune, prin urmare, conform experimentului de mai sus, că punctele verticale de o placă de test sunt comune din punct de vedere electric. Acest lucru se datorează faptului că există continuitate electrică între ele. Asemanător, punctele orizontale nu sunt electric comune, deoarece nu există continuitate electrică între ele.</p>

<p>Acest concept, de puncte comune, este foarte important de stăpânit. Motivul constă în faptul că exista câteva aspecte legate de tensiune ce au legătură directă cu acest concept, şi sunt foarte importante pentru analiza circuitelor şi depanarea lor. De exemplu, între două puncte electric comune, nu va exista niciodată o cădere de tensiune (substanţială).</p>

<h2>Măsurarea unui rezistor</h2>

<p>Alegeţi, de exemplu, un rezistor de 10 kΩ dintr trusa voastră. Valoarea rezistenţei este indicată printr-o serie de bezi colorate: maro, negru, portocaliu şi încă o culoare reprezentând precizia rezistorului: auriu (+/- 5%) sau argintiu (+/- 10%). Se consideră că rezistorii fără culoare de precizie au de fapt o precizie de +/- 20%. Alţi rezistori pot avea cinci bezi colorate pentru indicarea valorii şi a preciziei. În acest caz, culorile pentru un rezistor de 10 kΩ (10.000 Ω)  vor fi: maro, negru, negru, roşu si o culoare de precizie.</p>

<p>Conectaţi sondele aparatului de măsură la terminalii (bornele) rezistorului conform figurii de mai jos, şi observaţi afişajul aparatului:</p>

#+CAPTION: măsurarea unui rezistor
[[../poze/05040.png]]

<p>Dacă acul indicator se află foarte aproape de valoare de zero, va trebui să alegeţi o altă scară de măsură (mai mică), la fel ca în cazul măsurării unei tensiuni.</p>

<p>Dacă folosiţi un multimetru digital, ar trebui să vedeţi o cifră foarte aproape de 10 pe afişaj, şi un semn „k” mic în partea dreaptă. Acesta semnifică prefixul „kilo”, sau 1.000. Asemănător, încercaţi diferite scări de măsură prin intermediul selectorului, pentru a vedea care dintre ele oferă cea mai bună indicaţie.</p>

<p>Inversaţi acum sondele ohmmetrului între ele. Se modifică în acest caz indicaţia aparatului de măsură în vreun fel? Ce ne spune acest lucru despre rezistenţa unui rezistor? Ce se întâmplă dacă conectăm doar o singură sondă la unul dintre terminalii rezistorului? Ce ne spune acest lucru despre natura rezistenţei şi despre felul în care este ea măsurată? Cum se compară aceste rezultate cu rezultatele obţinute la măsurarea tensiunii?</p>

<p>În timp ce realizaţi măsurătoarea propriu-zisă, încercaţi să nu atingeţi ambele sonde cu degetele. Dacă faceţi acest lucru, veţi măsura în realitate combinaţia paralelă dintre rezistor şi corp. Acest lucru determină o indicaţie mai mică a ohmmetrului decât ar trebui în mod normal. Pentru măsurarea unei rezistenţe de 10 kΩ, eroarea va fi minimă, dar s-ar putea să fie mult mai mare dacă măsurăm alţi rezistori. Încercaţi acest lucru dacă dispuneţi de mai mulţi rezistori, de mărimi şi precizii diferite.</p>

<h2>Măsurarea rezistenţei corpului</h2>

<p>Puteţi măsură în siguranţa rezistenţa propriului vostru corp. Ţineţi vârful uneia dintre sonde între degetele de la mâna, iar sonda cealaltă cu degetele de la cealaltă mână. Ţineţi vârful sondelor în lungime, şi nu le prindeti exact de vârf. Observaţi indicaţia ohmmetrului. Corpul are de obicei o rezistenţa mai mare de 10.000 de ohmi între cele două mâini. Ar trebui să obţineţi o valoare aproximativ egală cu aceasta.</p>

<p>Umeziţi-vă degetele cu apă, şi remăsuraţi rezistenţa corpului cu ohmmetrul. Ce impact are acest lucru asupra indicaţiei aparatului. Umeziţi-vă apoi degetele în apa sărată şi remăsuraţi rezistenţa. Ce impact are acest lucru asupra rezistenţei corpului vostru?</p>

<p>Rezistenţa electrică este frecarea întâmpinată de electroni pe măsură ce aceştia se deplasează printr-un obiect. Cu cât rezistenţa dintre două puncte este mai mare, cu atât deplasarea electronilor între acele două puncte este mai dificilă. Cunoscând faptul că electrocutarea este cauzată de o deplasarea importantă de electroni prin corpului victimei, o creştere a rezistenţei corpului este o măsură excelentă de prevenire a accidentelor neplăcute.</p>

<h2>Măsurarea rezistenţei diodei</h2>

<p>Măsuraţi rezistenţa unei diode cu un ohmmetru. Încercaţi să inversaţi modul de conectare al sondelor pe terminalii diodei şi remăsuraţi rezistenţa. Care este diferenţa dintre diodă şi rezistenţa din acest punct de vedere?</p>

<h2>Măsurarea rezistenţei grafitului</h2>

<p>Luaţi o foaie de hârtie şi trasaţi o linie groasă cu un creion (nu cu pix!). Măsuraţi rezistenţa liniei cu ajutorul ohmmetrului, poziţionând sondele la capătului liniei astfel:</p>

#+CAPTION: măsurarea rezistenţei grafitului
[[../poze/05043.png]]

<p>Aduceţi vârful sondelor mai aproape una de celaltă, dar menţinând contactul cu linia. Ce se întâmplă cu rezistenţa în acest caz, creşte sau scade? Dacă rezultatele sunt incompatibile, va trebui să retrasaţi linia, astfel încât densitatea ei să fie consistentă. Ce vă spune acest lucru despre legătura dintre rezistenţăşi lungimea unui material conductor?</p>

<h2>Masurarea rezistenţei unei celule fotovoltaice</h2>

<p>Conectaţi sondele aparatului de măsură la bornele unei celule fotovoltaice de. Măsuraţi varianţia rezistenţei datorată diferitelor expuneri la lumină. Asemănător experimentului cu LED, este indicat să folosiţi conductori cu crocodili pentru realizarea conexiuni componentului. În acest fel, puteţi ţine celula fotovoltaică în apropierea unei surse de lumină şi schimba în acelaşi timp scara aparatului:</p>

#+CAPTION: măsurarea rezistenţei unei celule fotovoltaice
[[../poze/05044.png]]

<p>Experimentăţi cu măsurarea rezistenţei diferitelor tipuri de materiale. Aveţi însă grijă să nu folosiţi ohmmetrul pe un component aflat sub tensiune, precum o baterie, de exemplu. Puteţi măsură rezistenţa următoarelor materiale, de exemplu: plastic, lemn, metal, apă curată, apă murdară, apă sărată, sticlă, diamant (de pe un inel), hârtie, cauciuc şi hârtie.</p>

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
