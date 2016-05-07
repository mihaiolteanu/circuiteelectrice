<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Conducţie neliniară</title>
  </head>
<body>
  <div id="meniu"><?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?></div>
  <div id="header">
	<h1>5. Conducţie neliniară</h1>
  </div>
  
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>
  
<div id="meniu2"><?php include ("meniu2.html")?></div>

<div id="contents">

<p>Legea lui Ohm este un instrument simplu şi puternic pentru analiza circuitelor electrice, dar are şi unele limitaţii pe care trebuie să le înţelegem dacă vrem să o aplicăm cu succes circuitelor reale. Pentru majoritatea conductorilor, rezistenţa este o proprietate aproximativ constantă, neafectată de tensiune şi curent. Din acest motiv, considerăm rezistenţă majorităţii componentelor dintr-un circuit ca fiind constantă, astfel că tensiunea şi curentul sunt în relaţie directă unul cu celălalt.</p>

<p>De exemplu, în exemplu precedent cu becul de 3 Ω, am calculat curentul prin circuit împărţind tensiunea la rezistenţă (I=E/R). Cu o baterie de 18 volţi, curentul prin circuit a fost de 6 amperi. Dublând tensiunea bateriei la 36 de volţi, am dublat şi curentul la 12 volţi. Toate acest lucruri sunt evidente, atâta timp cât rezistenţa becului la deplasarea electronilor rămâne constantă la 3 Ω.</p>

<img src="../poze/00045.png" alt="circuit electric simplu, dublarea tensiunii rezultă în dublarea curentului"/>

<p>Totuşi, realitatea nu este atât de simplă. Unul din fenomenele prezentate într-un capitol viitor este cel al <i>modificării</i> rezistenţei odată cu modificarea temperaturii. Într-un bec incandescent, rezistenţa filamentului va creşte dramatic atunci când aceasta işi modifică temperatura de la cea a camerei la temperatura în stare de funcţionare. Dacă ar fi să mărim tensiunea furnizată într-un circuit real simplu, creşterea rezultată a curentului electric ar cauza creşterea temperaturii filamentul becului, creştere ce duce la creşterea rezistenţei acestuia, fapt ce face posibilă o nouă creştere a curentului prin circuit doar prin creşterea tensiunii furnizate de baterie. Prin urmare, tensiunea şi curentul nu se supun ecuaţiei simple „I=E/R”, deoarece rezistenţa filamentului unui bec nu rămâne stabilă odată cu modificarea curenţilor.</p>

<p>Fenomenul variaţiei rezistenţei cu temperatură este caracteristic majorităţii metalelor din care sunt confecţionate firele. Pentru majoritatea aplicaţiilor însă, aceste variaţii ale rezistenţei sunt suficient de mici încât sunt neglijabile (nu sunt luate în considerare). În cazul filamentelor becurilor, variaţia rezistenţei este destul de mare.</p>

<p>Acesta este doar un exemplu din domeniul neliniarităţii circuitelor electrice. Dar nu este nicidecum singurul. În matematică, o funcţie „liniară” este o funcţie reprezentată grafic printr-o linie dreaptă. Versiunea simplificată a circuitului simplu cu bec, cu o rezistenţă constantă a filamentului de 3 Ω, generează un grafic asemănător celui de jos:</p>

<img src="../poze/00046.png" alt="graficul curent-tensiune într-un circuit electric simplu idealizat"/>

<p>Linia dreaptă de pe grafic desemnează faptul că rezistenţa este stabilă pentru o varietate de tensiuni şi curenţi din circuit. Acest lucru se întâmplă însă doar într-un caz „ideal”. Fiindcă rezistorii sunt construiţi asfel încât rezistenţă lor să fie cât mai stabilă, se coportă aproximativ asemenea graficului de mai sus. Un matematician numeşte acest comportament „liniar”.</p>

<p>Un exemplu mai realist al unui circuit electric simplu cu bec, atunci când tensiunea la bornele bateriei variază într-un domeniu larg, este reprezentat prin graficul de mai jos:</p>

<img src="../poze/00047.png" alt="graficul curent-tensiune într-un circuit electric simplu idealizat"/>

<p>Acest grafic nu mai este o linie dreaptă. Acesta creşte brusc în partea stângă, odată cu creşterea tensiunii de la zero la o valoarea scăzută. Pe măsură ce tensiunea creşte, vedem o creştere din ce în ce mai mică a curentului; asfel că circuitul are nevoie de o creştere din ce în ce mai mare a tensiunii pentru a păstra o creştere egală şi constantă a curentului.</p>

<p>Dacă încercăm să aplicăm legea lui Ohm pentru determinarea rezistenţei acestui circuit folosind valorile curentului şi ale tensiunii din graficul de mai sus, ajungem la mai multe seturi de valori diferite. Putem spune că rezistenţa este <i>neliniară</i>, crescând cu creşterea tensiunii şi a curentului. Neliniaritatea este cauzată de efectul temperaturii ridicate a metalului ce compune filamentul becului.</p>

<p>Un alt exemplu de neliniaritate a curentului este prin gaze precum aerul. La temperaturi şi presiuni normale, aerul este un dielectric (izolator) eficient. Totuşi, dacă tensiunea dintre doi conductori separaţi printr-o porţiune de aer creşte suficient de mult, moleculele de aer se vor „ioniza”, iar electronii acestora se vor deplasa sub influenţa forţei generate de tensiunea ridicată dintre fire. Odată ionizate, aerul (şi alte gaze) devin bune conductoare de electricitate, permiţând curgerea electronilor. Dacă realizăm graficul curent-tensiune precum în circuitul precedent, putem observa foarte clar efectul neliniar al ionizării:</p>

<img src="../poze/00048.png" alt="graficul curent-tensiune neliniar în cazul ionizării dielectricului dintre borne"/>

<p>Graficul de mai sus este aproximat pentru o grosime a dielectricului (aer) de 1cm. O eventuală distanţă mai mare dintre cei doi conductori ar duce la un potenţial de ionizare mai ridicat, dar graficul curbei I/E ar rămâne similar: practic, nu există curent prin dielectric până în momentul atingerii potenţialului de ionizare, dar conducţia curentului este foarte bună după acest punct.</p>

<p>Acesta este şi motivul pentru care fulgerele există sub forma de şoc de scurtă durată şi sub o formă continuă de curgere a electronilor. Tensiunea formată între pământ şi nori (sau între diferiţi nori) trebuie să crească până la o valoare ce depăşeşte potenţialul de ionizare al golului de aer dintre cele două puncte. După atingerea acestui punct, aerul se ionizează suficient de mult pentru a permite curgerea substanţială a electronilor, iar curentul produs va exista prin aerul ionizat până în momentul în care sarcina electrică statică dintre cele două puncte se consumă. După scăderea sarcinii electrice până în punctul în care tensiunea scade sub un anumit punct de ionizare, aerul dintre cele două puncte (nor şi pământ) se dez-ionizează şi devine din nou un foarte bun dielectric (rezistenţă ridicată).</p>

<p>Multe materiale dielectrice solide posedă proprietăţi rezistive similare: rezistenţă extrem de mare la trecerea curentului electric sub o anumită tensiune critică, iar apoi, o rezistenţă mult diminuată la depăşirea acelei valori a tensiunii. Odată ce un material dielectric a trecut prin faza de <i>străpungere</i> (termenul folosit pentru acest fenomen), de cele mai multe ori acesta nu se reîntoarce la faza dielectrică precedentă aşa cum o fac majoritatea gazelor. Este posibil să se comporte ca şi un dielectric la tensiuni scăzute, dar valoarea pragului tensiunii de ionizare este mult sub valoarea iniţială, ceea ce duce la străpungeri mult mai uşoare pe viitor. Acesta este un mod de defectare des întâlnit în circuitele de tensiune înaltă: distrugerea izolaţie prin străpungere. Asemenea defecte pot fi detectate folosind aparate speciale de măurare a rezistenţei folosind tensiuni ridicate (peste 1000 V).</p>

<p>Există componente de circuit special concepute pentru proprietăţile lor rezistive neliniare; unul dintre acestea este <i>varistorul</i>. Confecţionat de obicei din oxid de zic sau carbură de siliciu, aceste dispozitive menţin o rezistenţă ridicată la bornele lor până în momentul atingerii unei tensiuni de „străpungere” (echivalentă cu „potenţialul de ionizare” a golului de aer), moment în care rezistenţa lor scade dramatic. Dar, faţă de străpungerea unui izolator, străpungerea unui varistor este repetabilă: adică, design-ul acesteia este de aşa natură încât permite străpungerile repetate fără apariţia distrugerii fizice a componentului. Mai jos este o poză a unui varistor:</p>

<a href="http://en.wikipedia.org/wiki/File:Varistor_S14K385_photo.jpg"><img src="../poze/varistor.jpg" alt="varistor"/></a>

<p>Alte componente electrice posedă curbe de variaţie curent/tensiune şi mai ciudate. Unele dispozitive suferă o <i>descreştere</i> a rezistenţei odată cu <i>creşterea</i> tensiunii. Datorită faptului că panta curent/tensiune în acest caz este negativă, fenomenul este cunoscut sub denumirea de <i>rezistenţă negativă</i>.</p>

<img src="../poze/00362.png" alt="graficul curent-tensiune neliniar cu rezistenţă negativă"/>

<p>Pentru simplitatea expunerii totuşi, vom considera rezistenţele din circuit stabile în timp oricare ar fi condiţiile de funcţionare, exceptând faptul în care vom preciza altcumva. Aceasta a fost doar o mică parte din complexitatea lumii reale, pentru a nu lăsa impresia falsă că toate fenomenele electrice pot fi însumate sub câteva ecuaţii simple.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Marea majoritatea a materialelor posedă o rezistenţă stabilă în timp sub diferite condiţii funcţionare, dar există şi materiale care fac excepţie de la această regulă</li>
	<li>Orice funcţia care poate fi descrisă pe un grafic printr-o linie dreaptă se numeşte funcţie <i>liniară</i>. În cadrul circuitelor cu rezistenţe constante, graficul curent-tensiune este liniar (I=E/R).</li>
	<li>În circuitele în care rezistenţa variază odată cu variaţia tensiunii sau a curentului, graficul cirent-tensiune va fi <i>neliniar</i></li>
	<li>Un <i>varistor </i> este un component ce-şi modifică resitenţă cu valoarea tensiunii aplicate la terminalele sale. Cu o tensiunea mică, rezistenţa sa este mare. Apoi, la o anumită tensiune de „străpungere”, rezistenţa sa scade dramatic.</li>
	<li><i>Rezistenţă negativă</i> este porţiunea în care curentul printr-un component scade odată cu creşterea tensiunii la bornele sale.</li>
</ul>

<a href="#meniu">&uarr; sus</a>
</div>

<div id="footer">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>

</body>
</html>
