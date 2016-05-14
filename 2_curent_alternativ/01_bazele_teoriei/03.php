<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Amplitudinea curentului alternativ</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Amplitudinea curentului alternativ</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>În curent continuu, unde valoarea tensiunii şi a curentului sunt constante în timp, exprimarea cantităţii acestora în orice moment este destul de uşoară. Dar cum putem măsura valoarea unei tensiuni sau a unui curent care variază tot timpul?</p>

<p>O metodă de exprimare a intensităţii, denumită şi <i>amplitudine</i>, curentului alternativ este măsurarea înălţimii formei de undă de pe grafic. Aceasta este denumită <i>valoarea de vârf</i> a unei unde alternative:</p>

#+CAPTION: măsurarea tensiunii de vârf pe grafic în cazul unei forme de undă alternative
[[../poze/02011.png]]

<p>O altă metodă constă în măsurarea înălţimii totale a forme de undă, între cele două vârfuri, valoare ce poartă numele de <i>amplitudine vârf la vârf</i>:</p>

#+CAPTION: măsurarea amplitudinii vârf la vârf pe grafic în cazul unei forme de undă alternative
[[../poze/02012.png]]

<p>Din păcate, ambele modalităţi de calculare a amplitudinii undei alternative sunt puţin folositoare atunci când vrem să facem o comparaţie între diferite tipuri de undă. De exemplu, o undă dreptunghiulară cu valoarea de vârf de 10 V are evident o valoare a tensiunii mai mare pentru o perioadă mai lungă de timp faţă de o undă triunghiulară cu aceeiaşi valoare maximă de 10 V. Efectele acestor două tipuri de undă asupra unei sarcini sunt diferite:</p>

#+CAPTION: efectele undelor dreptunghiulare şi triunghiulare, ambele cu o amplitudine de vârf de 10 V, asupra aceleiaşi sarcini sunt diferite
[[../poze/02013.png]]

<p>O modalitate de exprimare a amplitudinilor diferitelor forme de undă într-o formă echivalentă contă în efectuarea mediei aritmetice a valorilor tuturor punctelor de pe grafic. Această mărime este cunoscută sub numele de <i>valoarea medie</i> a formei de undă. Dacă luăm media aritmetică a tuturor punctelor de pe grafic, luând în considerare şi semnul (pozitiv sau negativ), valoarea medie pentru majoritatea undelor va fi zero, datorită anulării reciproce dintre valorile pozitive şi cele negative pe o perioadă completă:</p>

#+CAPTION: valoarea medie a tuturor punctelor de pe graficul unei forme de undă sinusoidală, luând în considerare şi semnul acestora, este zero
[[../poze/02412.png]]

<p>Acest lucru este valabil pentru oricare formă de undă constituită din arii egale atât deasupra cât şi sub axa orizonatală (zero) a graficului. Totuşi, practic, măsurarea valorii medii a undei se efectuează matematic prin considerarea valorilor absolute a tuturor punctelor dintr-o perioadă. Cu alte cuvinte, valoarea medie practică a undei se calculează considerând toate punctele de pe grafic ca fiind pozitive, prin „răstunarea” imaginară a tuturor punctelor de pe grafic aflate sub linia orizontală:</p>

#+CAPTION: valoarea medie practică a tuturor punctelor de pe graficul unei forme de undă sinusoidală, considerând toate punctele de pe grafic ca fiind pozitive
[[../poze/02413.png]]

<h3>Valoarea efectivă a tensiunii sau a curentului (RMS)</h3>

<p>O altă metodă de aflare a valorii reale a amplitudinii unei unde se bazează pe capacitatea acesteia de a efectua lucru mecanic util atunci când este aplicată asupra unei sarcini (P = E<sup>2</sup>/R, and P = I<sup>2</sup>R).</p>

<p>Să considerăm de exemplu un fierăstrău circular şi unul pendular (vertical), ambele folosite pentru tăierea lemnului. Ambele tipuri de fierăstraie folosesc o lamă metalică dinţată acţionată de un motor electric, dar cel circular foloseşte o mişcare continuă a lamei pentru a tăia, iar cel pendular foloseşte o mişcare înainte şi înapoi pentru a realiza aceeiaşi operaţie. Comparaţia dintre cele două tipuri de mişcări este analoagă comparaţiei dintre curentul continuu şi cel alternativ:</p>

#+CAPTION: analogie între fierăstră circular (curent continuu) şi fierăstrău pendular (vertical)(curent alternativ)
[[../poze/02014.png]]

<p>Problema descrierii variaţiei valorilor prezente în curent alternativ într-o singură componentă, este prezentă şi în acest caz al analogiei: cum putem exprima viteza lamei fierăstrăului? Lama fierăstrăului circular are o viteză constantă, la fel ca în cazul curentului continuu ce „împinge” electronii prin circuit cu o forţă constantă. Lama fierăstrăului pendular, pe de altă parte, se deplasează înainte şi înapoi (curent alternatic), iar în acest caz valoarea vitezei acesteia variază în fiecare clipă. Care viteză este mai mare, care dintre fierăstraie poate tăia mai mult lemn în aceeiaşi durată de timp? Mai mult decât atât, mişcare înainte şi înapoi a unui fierăstrău se poate să nu fie de acelaşi tip cu mişcare unui alt fierăstrău, în funcţie de caracteristicile mecanice ale fiecăruia. Unul dintre ele poate, de exemplu, să folosească o formă de undă sinusoidală în mişcarea sa, pe când un altul, o undă triunghiulară. O comparaţie între viteza de vârf între două fierăstraie nu are avea aproape niciun rost (sau o comparaţie între unul circular şi unul pendular!). Cu toate că fiecare dintre aceste fierăstraie are o mişcare diferită a lamei, toate sunt egale în cel puţin un sens: toate taie lemn, iar o comparaţia cantitativă asupra acestei funcţii comune poate servi ca punct de plecare pentru determinarea valorii universale a vitezei oricărui fierăstrău.</p>

<p>Dacă de imaginăm două fierăstraie, unul circular şi altul pendular, cu lame identice, capabile să taie acelaşi tip de lemn, cu aceeiaşi grosime, în acelaşi interval de timp, am putea spune despre ele că sunt echivalente în ceea ce priveşte capacitatea lor de tăiere, şi totuşi, ele sunt foarte diferite în modul lor de funcţionare. Această comparaţie poate fi folosită pentru a desemna o viteză a fierăstrăului pendular echivalentă cu cea a fierăstrăului circular, pentru a putea realiza o comparaţie reală între eficienţa celor două tipuri. Aceasta este şi ideea folosiri unui procedeu de măsură a „echivalenţei în curent continuu” a oricărei mărimi din curent alternativ: valoarea curentului sau tensiunii în curent continuu ce ar produce aceeişi cantitate de energie disipată pe o rezistenţă egală.</p>

#+CAPTION: disiparea unei puteri egale pe două rezistoare egale folosind valoarea efectivă a tensiunii şi a curentului alternativ
[[../poze/02015.png]]

<p>În cele două circuite de mai sus, avem aceeiaşi valoare a sarcinii, respectiv 2 Ω, ce disipă aceeiaşi cantitate de putere sub formă de căldură, 50 W, unul dintre ele fiind alimentat în curent alternativ, celălalt în curent continuu. Deoarece sursa de tensiune alternativă este echivalentă din punct de vedere al puterii transmise spre sarcină cu o baterie de 10 V în curent continuu, putem denumi aceasta o sursă de 10 V. Mai precis, spunem că <i>tensiunea efectivă</i> este de 10 V. În limba engleză notaţia este de 10 V <i>RMS</i>, notaţie ce o vedem adesea mai ales în sistemele audio. RMS înseamnă <i>Root Mean Square</i> şi se referă la modalitatea matematică de obţinere a acestei valori, şi anume, ridicarea la pătrat a tuturor valorilor de pe graficul formei de undă, atât pozitive cât şi negativa, calcularea valori medii a acestora şi introducerea lor sub radical pentru obţinerea valorii finale, efective.</p>

<p>Măsurarea valorii efective este cea mai bună modalitate de realizare a echivalenţei dintre cele două tipuri de electricitate, continuă şi alternativă, indiferent de natura formelor de undă implicate, fie sinusoidale, triunghiulare sau de orice altă formă. </p>

<p>Măsurătorile vârf la vârf sunt cel mai bine efectuate cu ajutorul unui osciloscop, deoarece acesta poate indicat vârful formei de undă cu o acurateţe maximă. Pentru măsurarea valorilor efective, aparatele de măsură analogice vor funcţiona doar dacă au fost special calibrate pentru acest scop. Datorită inerţiei mecanice şi efectului de atenuare, deplasarea indcatorului electromecanic al aparatului de măsură va fi în proporţie cu valoarea medie a undei alternative, şi nu valoare ei efectivă. Datorită acestui lucru, aparatele de măsură analogice trebuiesc calibrate, iar acurateţea acestei operaţii depinde de natura formei de undă presupuse, de obicei sinusoidală.</p>

<p>Cele mai bune aparate de măsură a volorilor efective sunt cele electronice, special concepute pentru acest tip de măsurători. O metodă constă în măsurarea temperaturii unui element rezistiv pentru redarea precisă a valorii efective fără alte calcula matematice, folosind doar legile fizici. Acurateţea acestui tip de măsurătoare este independentă de natura formei de undă.</p>

<p>Pentru forme de undă „pure”, există nişte coeficienţi pentru calcularea relaţiei dintre valorile de vârf, vârf la vârf, medii practice şi valorii efective ale acestora:</p>

#+CAPTION: coeficienţi pentru calcularea relaţiei dintre valorile de vârf, vârf la vârf, medii practice şi valorii efective pentru formele de undă sinusoidale, dreptunghiulare şi triunghiulare
[[../poze/02016.png]]

<p>Pe lângă aceşti coeficienţi, mai există şi alte modalităţi de exprimare a proporţionalităţii între formele de undă fundamentale. <i>Factorul de vârf</i> a unei forme de undă alternative este raportul dintre valoarea sa de vârf şi valoarea efectivă. <i>Factorul de formă</i> reprezintă raportul dintre valoarea efectivă a undei şi valoarea sa medie. Factorii de vârf şi formă ale undelor dreptunghiulare sunt întotdeauna egali cu 1, din moment ce valoarea de vârf este egală cu cea medie (practică) şi cea efectivă. Formele de undă sinusoidale au o valoare efectivă de 0.707 (1 / 2<sup>1/2</sup>) şi un factor de formă de 1.11 (0.707 / 0.636). Formele de undă triunghiulare şi dinte de fierăstrău a valorile efective de 0.577 (1 / 3<sup>1/2</sup>) şi factorii de formă egali cu 1.15 (0.5777 / 0.5)</p>

<p>Ţineţi minte că aceste constate de conversi între valorile de vârf, vârf la vârf, medii şi efective ale unei forme de undă se pot folosi doar pentru formele de undă <i>pure</i>. Relaţiile dintre aceste valori, folosind aceste constante, nu se pot aplica în cazul formele de undă distorsionate:</p>

#+CAPTION: pentru o formă de undă distorsionată nu putem folosi aceeiaşi coeficienţi pentru calcularea relaţiei dintre valorile de vârf, vârf la vârf, medii şi efective
[[../poze/02017.png]]


<p class="sumar">Sumar:</p>
<ul>
	<li>Amplitudine unei unde alternative este valoarea sa pe grafic în funcţie de timp, şi poate însemna valoare de vârf, vârf la vârf, medii sau efective</li>
	<li>Valoarea de vârf a unei forme de unde alternative se măsoară de la intersecţia acesteia cu axa orizontală (timp) până la nivelul maxim pozitiv pe grafic, sau nivelul minim negativ</li>
	<li>Amplitudinea vârf la vârf reprezintă înălţimea totală a unei forme de undă alternative măsurată pe grafic între valoarea sa maximă pozitivă şi valoarea minimă negativă</li>
	<li>Amplitudinea medie reprezintă media aritmetică a valorilor tuturor punctelor de pe grafic în decurs de o perioadă. Pentru că valoarea medie a unei forme de undă simetrice faţă de axa orizontală este tot timpul zero, se foloseşte adesea valoarea medie practică a undei, ca fiind valoarea medie a valorilor absolute a tuturor punctelor de pe grafic (considerând valorile negative ca fiind pozitive)</li>
	<li>Valoarea efectivă (RMS) a unei forme de undă alternative este un mod de exprimare a echivalenţei dintre efectele curetului continuu şi cel alternativ. RMS vine din engleză, şi înseamnă Root Mean Square, adică metoda de calcul a acestei valori</li>
	<li>Factorul de vârf a unei unde alternative este raportul dintre valoarea sa de vârf şi cea efectivă</li>
	<li>Factorul de formă a unei unde alternative este raportul dintre valoarea sa efectivă şi cea medie</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
