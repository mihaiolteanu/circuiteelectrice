<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Tranzistorul pe post de întrerupător</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Tranzistorul pe post de întrerupător</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Doarece curentul colectorului tranzistorului este limitat proporţional de curentul bazei, acesta poate fi folosit pe poste întrerupător controlat în curent. O cantitate relativ mică de electroni, prin bază, poate exercita un control asupra unei cantităţi mult mai mari de electroni prin colector.</p>

<p>Să presupunem că avem o lampă pe care vrei să o pornim/oprim cu ajutorul unui întrerupător (figura de mai jos (a)):</p>

#+CAPTION: (a) controlul unei lămpi cu ajutorul unui întrerupător; (b) introducerea în circuit a unui tranzistor NPN în locul întrerupătorului; (c) introducerea în circuit a unui tranzistor PNP în locul întrerupătorului;
[[../poze/03075.png]]

<p>Pentru exemplificare, să inserăm acum un tranzistor (b) în locul întrerupătorului mecanic de la punctul (a). Ţineţi minte, curentul controlat trebuie să treacă prin tranzistor de la colector spre emitor. Din moment ce curentul controlat este cel prin lampă, trebuie să poziţionăm colectorul şi emitorul tranzistorului în locul contactelor întrerupătorului (a). Trebuie de asemenea să ne asigurăm că direcţia curentului prin tranzistor este <i>împotriva</i> săgeţii emitorului, pentru a ne asigura că joncţiunea tranzistorului este polarizată corect (direct).</p>

<p>Putem de asemenea să folosim şi un tranzistor PNP pentru realizarea acestui circuit (figura de mai sus(c)). Alegerea făcută între PNP şi NPN este complet arbitrară, deşi, pentru exemplificarea funcţionării tranzistoarelor, vom folosi în continuare cele de tipul NPN.</p>

<p>Întorcându-ne la exemplu cu tranzistorul NPN (b), ne găsim în situaţia în care mai trebuie să adăugăm ceva în circuit pentru a avea un curent de bază prin tranzistor. Fără o conexiune la terminalul bazei, curentul prin aceasta va fi zero, iar tranzistorul va fi închis, ceea ce înseamnă că lampa va fi tot timpul oprită. Ţineţi minte, că pentru un tranzistor NPN, direcţia curentului de bază trebuie să fie dinspre emitor spre bază (împotriva direcţiei săgeţii). Probabil că cel mai simplu lucru ar fi să conectăm un întrerupător între baza şi colector, precum în figura de mai jos (a):</p>

#+CAPTION: controlul unei lămpi cu ajutorul unui tranzistor: (a) tranzistor blocat; (b) tranzistor în stare de conducţie
[[../poze/03078.png]]

<p>Dacă întrerupătorul este deschis (a), baza tranzistorului nu va fi conectată la baterie şi nu va exista niciun curent prin ea. În această situaţie, spune că tranzistorul este <i>blocat</i>. Dacă întrerupătorul este închis (b), va exista un curent dinspre emitor spre bază, prin întrerupător şi prin lampă (partea stângă) înapoi la terminalul pozitiv al bateriei. Acest curent de bază va permite trecerea unui curent mult mai mare dinspre emitor spre colector, iar lampa se va aprinde. În această situaţie, în care curentul prin circuit este maxim, spunem că tranzistorul este <i>saturat</i>.</p>

<p>Putem însă folosi ceva total diferit pentru a controla lampa (pornit/oprit). De exemplu, putem folosi o pereche de celule solare pentru generarea unei tensiuni de 1 V, pentru depăşirea tensiunii directe de 0.7 V (V<sub>BE</sub>) între bază şi emitor, tensiune necesară pentru apariţia curentului de bază şi pornirea tranzistorului.</p>

#+CAPTION: controlul unei lămpi cu ajutorul unui tranzistor acţionat de o celulă solară
[[../poze/03079.png]]

<p>Sau putem folosi mai multe termocuple conectate în serie pentru generarea curentului bazei necesar pornirii tranzistorului:</p>

#+CAPTION: controlul unei lămpi cu ajutorul unui tranzistor acţionat de o termocuplă
[[../poze/03080.png]]

<p>Putem folosi chiar şi un microfon, care cu o tensiune şi un curent (printr-un aplificator) suficient de mari, ar putea pune tranzistorul în funcţiune. Desigur, ieşirea microfonului va trebui redresată din curent alternativ în curent continuu, pentru ca joncţiunea emitor-bază să fie tot timpul polarizată direct:</p>

#+CAPTION: controlul unei lămpi cu ajutorul unui tranzistor acţionat de un microfon
[[../poze/03081.png]]

<p>Ceea ce vrem să demonstrăm, este că <i>orice</i> sursă de tensiune în curent continuu, capabilă să pornească tranzistorul, poate fi folosită pentru controlul lămpii, iar puterea acestei surse de tensiune trebuie să fie doar o fracţiune din puterea circuitului controlat. Tranzistorul în acest caz nu se comportă doar ca un întrerupător, ci şi ca un <i>amplificator</i>: folosind un semnal de putere relativ mică pentru <i>controlul</i> unui semnal de putere relativ mare. Atenţie, puterea necesară aprinderii lămpii este furnizată de bateria din circuitul principal, şi <i>nu</i> de celula solară, termocuplă sau microfon. Acestea din urmă doar <i>controlează</i> puterea bateriei pentru aprinderea lămpii.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Tranzistoarele pot fi folosite ca şi întrerupătoare pentru controlul puterii de curent continuu asupra sarcinii. Curentul controlat trece prin emitor-colector; curentul de control trece prin emitor-bază</li>
	<li>Când curentul printr-un tranzistor este zero, spunem că acesta este <i>blocat</i></li>
	<li>Când curentul printr-un tranzistor este maxim, spunem că acesta este <i>saturat</i></li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
