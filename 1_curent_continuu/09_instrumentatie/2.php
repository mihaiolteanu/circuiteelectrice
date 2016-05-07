<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Sisteme cu semnale de tensiune</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Sisteme cu semnale de tensiune</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Utilizarea tensiunii variabile pentru semnalele de instrumentaţie pare o soluţie bună în acest caz. Să vedem aşadar cum am putea folosi un semnal de tensiune pentru a măsura cantiatea de apă dintr-un bazin:</p>

<img src="../poze/00185.png" alt="sistem măsurare nivel apă în bazin folosind potenţiometru"/>

<p>Traductorul din diagrama de mai sus conţine propria sursă de tensiune, iar potenţiometrul este acţionat de un plutitor ce se află în interiorul bazinului, poziţia acestuia depinzând de nivelul apei. Indicatorul nu este nimic altceva decât un voltmetru cu o scală calibrată (modificată) pentru citirea unei anumite înălţimi a apei (cm, m, etc.) în loc de volţi.</p>

<p>Pe măsură ce nivelul apei suferă modificări, plutitorul se va mişca şi el. Această mişcare a plutitorului va modifica poziţia periei potenţiometrului, modificând asfel căderea de tensiune dintre cele două puncte la care este conectat voltmetrul. Prin urmare, tensiunea măsurată de voltmetru va depinde de nivelul apei din bazin.</p>

<p>Acest sistem elementar traductor/indicator este fiabil şi uşor de înţeles, însă are unele neajunsuri. Probabil că cel mai mare dintre ele este influenţa pe care o poate avea rezistenţa cablurilor electrice asupra mărimii de măsurat. Voltmetrele reale <b>folosesc</b> („trag”) valori foarte mici ale curentului datorită rezistenţei lor interne, deşi, ideal ar fi să nu folosească deloc. În acest caz, va exista o cantitate mică de curent prin cele două cabluri conductoare. Cablul având la rândul lui o valoare a rezistenţei diferita de zero, va prezenta şi o cădere de tensiune în lungul lui, ca şi în cazul unui rezistor; căderea de tensiune la bornele voltmetrului va fi asfel mai mică decât tensiunea totală generată de traductor prin intermediul potenţiometrului. Această pierdere de tensiune, oricât de mică, constituie o eroare de măsură:</p>

<img src="../poze/00186.png" alt="sistem măsurare nivel apă în bazin folosind potenţiometru"/>

<p>În figura de mai sus au fost adăugate simbolurile rezistorului pentru cablurile electrice pentru a indica ceea ce se întâmplă de fapt într-un sistem real. Valorile acestor rezistenţe pot fi reduse folosind cabluri electrice mai groase (şi mai scumpe) şi/sau putem evite efectele lor cu ajutorul unui voltmetru cu o rezistenţă internă foarte mică (complexitate sporită).</p>

<p>În ciuda acestui dezavantaj, semnalele de tensiune sunt încă folosite în multe aplicaţii datorită design-ului lor extrem de simplu. Un standard des folosit este de de 0-10 volţi, unde 0 volţi reprezintă 0% din valoarea de măsurat, 10 volţi 100%, 5 volţi 50%, etc. Un alt domeniu folosit este cel de 1-5 V, ce utilizează conceptul de „zero real” pentru detectarea cazurilor de defect.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Tensiunea poate fi folosită ca şi semnal analogic pentru transmiterea informaţiei</li>
	<li>Un mare dejavantaj pentru utilizarea tensiunii pe post de informaţie este posibilitatea ca tensiunea la bornele aparatului indicator (voltmetru) să fie mai mică decât căderea de tensiune la bornele sursei de tensiune datorită rezistenţei cablurilor şi utilizării unei cantităţi de curent de către voltmetru. Această cădere de tensiune de-a lungul cablurilor electrice constituie o eroare de măsură.</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>