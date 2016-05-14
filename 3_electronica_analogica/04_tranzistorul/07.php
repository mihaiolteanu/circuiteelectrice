<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Amplificator cu tranzistor în conexiune bază comună</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>7. Amplificator cu tranzistor în conexiune bază comună</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Această configuraţie este mai complexă decât celelalte două, emitor comun şi colector comun, şi este mai puţin folosită datorită caracteristicilor ciudate de funcţionare:</p>

#+CAPTION: amplificator în conexiune bază comună
[[../poze/03114.png]]

<p>Denumirea de bază comună vine de la faptul că semnalul sursei de alimentare şi sarcina au ca şi punct comun baza tranzistorului:</p>

#+CAPTION: amplificator în conexiune bază comună; intrarea între emitor şi bază, ieşirea între colector şi bază
[[../poze/03115.png]]

<p>Probabil că cea mai ciudată caracteristică a acestui tip de configuraţie constă în faptul că sursa de semnal de intrare trebuie să conducă întreg curentul de pe emitor al tranzistorului, după cum este indicat în prima figură prin săgeţile îngroşate. După câte ştim, curentul emitorului este mai mare decât oricare alţi curenţi ai tranzistorului, fiind suma curenţilor de bază şi de colector. În celelalte două configuraţii, sursa de semnal era conectată la baza tranzistorului, curentul prin sursă fiind asfel cel mai mic posibil.</p>

<p>Deoarece curentul de intrare este mai mare decât toţi ceilalţi curenţi din circuit, inclusiv curentul de ieşire, amplificarea în curent a acestui tip de amplificator este în realitatea <i>mai mică</i> de 1. Cu alte cuvinte, acest amplificator <i>atenuează</i> curentul, nu-l amplifică. În configuraţiile emitor şi colector comun, parametrul folosit pentru amplificarea în curent este β, dar în configuraţie bază comună, avem nevoie de un alt parametru de bază al tranzistorului: raportul dintre curentul colectorului şi curentul emitorului, raport ce este tot timpul mai mic decât 1, şi poartă numele de <i>factorul alfa</i> (α).</p>

<h2>Circuitul practic</h2>

<p>Circuitul practic pe care îl vom studia, arată asfel:</p>

#+CAPTION: amplificator în conexiune bază comună
[[../poze/03116.png]]

<p>Graficul variaţiei tensiunii de ieşire cu tensiune de intrare arată asfel:</p>

#+CAPTION: amplificator în conexiune bază comună
[[../poze/23011.png]]

<p>Putem observa din graficul de mai sus că tensiune de ieşire creşte de la 0 (tranzistor blocat) la 15.75 V (tranzistor saturat) pe câd tensiunea de intrare creşte de la 0.6 V până la doar 1.2 V. Mai precis, tensiunea de ieşire nu începe să crească decât după ce tensiune de intrare a depăşite valoarea de 0.7 V, iar nivelul de saturaţie este atins pentru o tensiune de intrare de 1.12. Acest lucru reprezintă o amplificare în tensiune destul de mare, de 37.5. Putem observa de asemenea, că tensiunea de ieşire (măsurată la bornele rezistorului de sarcină, R<sub>sarcină</sub>) creşte peste valoarea sursei de tensiune (15 V) la saturaţie, datorită conectării în serie a celor două surse de putere.</p>

<p>O nouă analiză a circuitului, de data aceasta cu o sursă de semnal în curent alternativ legată în serie cu o sursă de polarizare de curent continuu, dezvăluie încă odată factorul mare de amplificare în tensiune:</p>

#+CAPTION: amplificator în conexiune bază comună; adăugarea unei surse de semnal în curent alternativ
[[../poze/03117.png]]

<p>După cum se poate observa în figura de mai jos, semnalul de intrare (roşu, mărit de 10 ori pentru uşurinţa vizualizării) este în fază cu cel de ieşire (albastru), ceea ce înseamnă că amplificatorul bază comun este non-inversor:</p>

#+CAPTION: amplificator în conexiune bază comună; graficul formelor de undă ale tensiunilor de intrare şi de ieşire
[[../poze/23012.png]]

<p>Putem vizualiza formele de undă ale amplificatorului conectând mai multe osciloscoape, simultan, în punctele de interes:</p>

#+CAPTION: amplificator în conexiune bază comună; vizualizarea formelor de undă ale tensiunilor
[[../poze/03118.png]]

<p>Acelaşi lucru este valabil şi pentru un tranzistor PNP:</p>

#+CAPTION: amplificator în conexiune bază comună; vizualizarea formelor de undă ale tensiunilor; tranzistor tip PNP
[[../poze/03119.png]]

<h2>Calcularea factorului de amplificare în tensiune</h2>

<p>Calcularea factorului de amplificare în tensiune pentru configuraţie bază comună este destul de dificilă şi presupune aproximări ale comportamentului tranzistorului ce sunt greu de măsurat direct. Fată de celelalte configuraţii, unde amplificarea era determinată fie de raportul dintre doi rezistori (emitor comun), fie avea o valoare fixă (colector comun), în cazul de faţă această valoare depinde în mare măsură de valoarea tensiunii de polarizare în curent continuu a semnalului de intrare. Rezistenţa internă a tranzistorului între emitor şi bază joacă un rol major în determinarea factorului de amplificare în tensiune, iar această rezistenţă variază odată cu variaţia curentului prin emitor.</p>

<p>Prin urmare, un factor de amplificare în curent subunitar şi un factor de amplificare în tensiune imprevizibil, fac ca această configuraţie să ofere puţine aplicaţii practice.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Denumirea de <i>bază comună</i> vine de la faptul că tensiunile de intrare şi de ieşire ale amplificatorului au ca şi punct comun baza tranzistorului, neluând în considerare sursele de putere</li>
	<li>Factorul de amplificare în curent al amplificatorului bază comună este tot timpul mai mic decât 1</li>
	<li>Factorul de amplificare în tensiune depinde de rezistenţele de intrare şi de ieşire, cât şi de rezistenţa internă a joncţiunii emitor-bază a tranzistorului, rezistenţa ce variază cu variaţia tensiunii de polarizare în curent continuu. Această amplificare este însă foarte mare</li>
	<li>Raportul dintre curentul colectorului şi curentul emitorului unui tranzistor, poartă numele de factor alfa (α). Pentru orice tranzistor, factorul alfa este subunitar (mai mic decât 1)</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
