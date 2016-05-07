<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Metoda ramurii de curent</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Metoda ramurii de curent</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Folosind aceasta metodă, presupunem şi indicăm un sens al curenţilor prin circuit şi scriem apoi ecuaţiile ce descriu relaţiile dintre aceştia folosind legile lui Ohm şi Kirchhoff. În momentul în care avem câte o ecuaţie pentru fiecare curent necunoscut, putem rezolva sistemul de ecuaţii pentru determinarea tuturor curenţilor şi prin urmare a tuturor căderilor de tensiune din reţea.</p>

<p>Să folosim următorul circuit pentru ilustrarea metodei:</p>

<img src="../poze/00209.png" alt="circuit electric"/>

<p>Primul pas este alegerea unui nod din circuit ca şi punct de referinţă pentru curenţii necunoscuţi:</p>

<img src="../poze/00210.png" alt="circuit electric"/>

<p>Ghicim apoi direcţia curenţilor din acest nod, notând curenţii cu  I<sub>1</sub>, I<sub>2</sub> şi I<sub>3</sub>. Nu este neapărat ca direcţiile acestea să fie cele corecte (reale), în acest moment acestea sunt pur speculative. Vom ştii dacă intuiţia noastră a fost greşită în momentul rezolvării ecuaţiilor matematice pentru curenţi; orice direcţie greşită va apărea în ecuaţii cu semnul minus.</p>

<img src="../poze/00211.png" alt="circuit electric"/>

<p>Legea lui Kirchhoff pentru curenţii (LKC) spune că suma algebrică a tuturor curenţilor ce intră şi iers dintr-un nod de reţea trebuie să fie egală cu zero, prin urmare putem introduce curenţii I<sub>1</sub>, I<sub>2</sub> şi I<sub>3</sub> într-o singură ecuaţie. Vom nota toţi curenţii ce <i>intră</i> într-un nod cu semnul pozitiv şi toţi curenţii ce <i>ies</i> dintr-un nod cu semnul negativ (acesta este doar o convenţie; inversând semnele rezultatul final va fi exact acelaşi):</p>

<img src="../poze/10171.png" alt="calcul matematic"/>

<p>Pasul următor este notarea tuturor semnelor căderilor de tensiune în funcţie de sensul presupus al curenţilor. Ţineţi minte că partea din „amonte” a rezistorului va fi tot timpul negativă, iar partea din „aval” tot timpul pozitivă întrucât electronii posedă o sarcină negativă.</p>

<img src="../poze/00212.png" alt="circuit electric"/>

<p>Desigur, polaritatea bateriilor rămâne aceeiaşi. Nu este nicio problemă dacă polaritatea rezistorului nu se „asortează” cu cea a bateriei atât timp cât polaritatea rezistorului este bazată pe direcţia presupusă de curgere a curentului prin acesta. Toate calculele efectuate de acum încolo se vor baza pe direcţia presupusă a curenţilor prin nodul ales.</p>

<p>Legea lui Kirchhoff pentru tensiune (LKU) spune că suma algebrică a tuturor căderilor de tensiune dintr-o buclă de reţea trebuie să fie egală cu zero. Pentru a obţine ecuaţiile folosind LKU, trebuie să introducem valorile căderilor de tensiune ca şi cum le-am fi măsurat cu un voltmetru real. Putem începe parcurgerea buclei din orice punct dorim; în cazul de faţa începem de la bornele bateriei şi continuăm în sens invers acelor de ceasornic până ajungem în punctul de unde am plecat:</p>

<p><img src="../poze/00384.png" alt="circuit electric"/></p>
<p><img src="../poze/00385.png" alt="circuit electric"/></p>
<p><img src="../poze/00386.png" alt="circuit electric"/></p>
<p><img src="../poze/00387.png" alt="circuit electric"/></p>

<p>După ce am percurs întreaga buclă din stânga, adunăm aceste valori ale tensiunii pentru a forma o ecuaţie:</p>

<p><img src="../poze/10172.png" alt="calcul matematic"/></p>

<p>Evident, nu cunoaştem încă valoarea căderilor de tensiune la bornele rezistorilor R<sub>1</sub> şi R<sub>2</sub> aşa că nu putem introduce valorile lor reale în ecuaţie în acest moment. Totuşi, <i>ştim</i> faptul că suma tuturor acestor căderi de tensiune trebuie să fie egală cu zero, prin urmare ecuaţia este adevărată şi o putem folosi mai departe în analiza noastră. Putem dezvolta ecuaţia înlocuind tensiunile necunoscute cu produsul dintre curenţii necunoscuţi, I<sub>1</sub> şi I<sub>2</sub>, şi valoarea rezistorilor prin care aceştia trec, folosind legea lui Ohm (E=IR). Eliminăm de asemenea şi valoarea 0 din sumă:</p>

<p><img src="../poze/10173.png" alt="calcul matematic"/></p>

<p>Din moment ce cunoaştem valorile tuturor rezistorilor în ohmi, putem să înlocui acele valori în evuaţie pentru uşurinţa calculelor:</p>

<p><img src="../poze/10174.png" alt="calcul matematic"/></p>

<p>Motivul pentru care am redus ecuaţia în acest fel (până la urmă, avem tot două necunoscute) este folosirea aceloraşi <i>variabile necunoscute</i> ce le-am folosit şi în evuaţia LKC de mai sus (curenţi). Aceast pas este necesar pentru aflarea soluţiei sistemului final de ecuaţii.</p>

<p>Aplicând aceeiaşi paşi şi pentru bucla din dreapta, obţinem o altă ecuaţie.</p>

<p><img src="../poze/00388.png" alt="circuit electric"/></p>
<p><img src="../poze/00389.png" alt="circuit electric"/></p>
<p><img src="../poze/00390.png" alt="circuit electric"/></p>
<p><img src="../poze/00391.png" alt="circuit electric"/></p>

<p><img src="../poze/10175.png" alt="calcul matematic"/></p>

<p>Cunoscând faptul că tensiunea de pe fiecare rezistor poate şi <i>trebuie</i> să fie exprimată ca şi produsul dintre curent şi rezistenţa fiecarărui rezistor, putem rescrie ecuaţia de mai sus asfel:</p>

<p><img src="../poze/10176.png" alt="calcul matematic"/></p>

<p>În acest moment avem un sistem matematic format din trei ecuaţii (o ecuaţie LKC şi două ecuaţii LKT) şi trei necunoscute:</p>

<p><img src="../poze/10177.png" alt="calcul matematic"/></p>

<p>Putem rescrie ecuaţiile de mai sus trecând în dreapta valorile cunoscute (constantele ecuaţiilor) şi lăsând în partea stângă valorile necunoscute (I<sub>1</sub>, I<sub>2</sub> şi I<sub>3</sub>), trecând explicit toţi coeficienţii pentru claritate. Putem oberva că toate cele trei variabile sunt prezente în toate cele trei ecuaţii:</p>

<p><img src="../poze/10178.png" alt="calcul matematic"/></p>

<p>Rezolvând ecuaţiile de mai sus, ajungem la soluţia celor trei valori necunoscute ale curenţilor:</p>

<p><img src="../poze/10179.png" alt="calcul matematic"/></p>

<p>Prin urmare, valoarea curentului I<sub>1</sub> este de 5 amperi, I<sub>2</sub> 4 amperi iar I<sub>3</sub> minus 1 amper. Dar ce înseamnă curent „negativ”? În acest caz, înseamnă că <i>intuiţia</i> noastră cu privire la direcţia curentului a fost inversă faţa de direcţia <i>reală</i>. Revenind la circuitul iniţial, putem reface schema acestuia schimbând direcţia curentului I<sub>3</sub> schimbând în acelaşi timp şi polaritatea căderii de tensiune de pe rezistorul R<sub>3</sub>.</p>

<p><img src="../poze/00213.png" alt="circuit electric"/></p>

<p>Observăm faptul că, prin bateria B<sub>2</sub> curentul circulă în sens invers datorită tensiunii mai ridicate a bateriei B<sub>1</sub>. În ciuda faptului că polaritatea bateriei încercă să împingă electronii prin acea ramură de circuit, electronii sunt defapt forţaţi să se deplaseze în sens contrar datorită tensiunii superioare a bateriei B<sub>1</sub>. Înseamnă acest lucru faptul că întotdeauna bateria mai puternică va „câştiga” iar curentul prin bateria mai slabă va fi forţăt tot timpul în sens contrar? Nu! Acest lucru depinde de fapt atât de diferenţe de tensiune dintre cele două bateri cât <i>şi</i> de valoarea rezistorilor din circuit. Singura metodă sigură de aflare a comportamentului circuitului este analiza matematică a acestuia.</p>

<p>Cunoscând acum valoarea tuturor curenţilor din circuit, putem calcula căderile de tensiune la bornele tuturor rezistorilor folosind legea lui Ohm (E=IR):</p>

<p><img src="../poze/10180.png" alt="formulă"/></p>


<p class="sumar">Sumar:</p>
<b>Paşii pentru aplicarea metodei ramurii de curent:</b>
<ol>
	<li>Alegearea unui nod şi a direcţiilor curenţilor (aleator)</li>
	<li>Scrierea ecuaţiei legii lui Kirchhoff pentru curent în acel nod</li>
	<li>Notarea polarităţilor căderilor de tensiune în funcţie de direcţia aleasă a curenţilor</li>
	<li>Scrierea ecuaţiilor legii lui Kirchhoff pentru fiecare buclă din circuit, înlocuind căderea de tensiune de pe fiecare rezistor (E) cu produsul IR în fiecare ecuaţie</li>
	<li>Aflarea curenţilor necunoscuţi de pe fiecare ramură (rezolvarea sistemului de ecuaţii)</li>
	<li>Dacă oricare dintre soluţii este negativă, atunci direcţia pe care am intuit-o la punctul 1 este greşită!</li>
	<li>Calcularea căderilor de tensiune la bornele tuturor rezistorilor (E=IR)</li>
</ol>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>