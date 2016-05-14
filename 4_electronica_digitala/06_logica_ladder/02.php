<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" >
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Funcţii logice digitale</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Funcţii logice digitale</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>

<div id="contents">

<h2>Funcţia logică SAU</h2>

<img src="../poze/04009.png" alt="diagramă lader; funcţia SAU"/>

<p>Putem construi funcţii logice simple pentru circuitul cu lampă din secţiunea precedentă, folosind contacte multiple. Documentarea acestor circuite se face relativ simplu prin conectarea unor linii adiţionale diagramei iniţiale.</p>

<div class="clear"></div>

<table class="floatleft">
<tr>
	<th>A</th>
	<th>B</th>
	<th>Ieşire</th>
</tr>
<tr>
	<td>0</td>
	<td>0</td>
	<td>0</td>
</tr>
<tr>
	<td>0</td>
	<td>1</td>
	<td>1</td>
</tr>
<tr>
	<td>1</td>
	<td>0</td>
	<td>1</td>
</tr>
<tr>
	<td>1</td>
	<td>1</td>
	<td>1</td>
</tr>
</table>

<p>Dacă folosim notaţia binară standard pentru starea comutatoarelor şi a lămpii (0 pentru ne-acţionat sau de-energizat, 1 pentru acţionat sau energizat), putem utiliza un tabel de adevăr pentru reprezentarea logicii circuitului.</p>

<div class="clear"></div>

<p>După cum se poate observa din diagrama ladder, lampa se va aprinde (energiza) în cazul în care contactul A sau contactul B este acţionat. Electronii nu au nevoie decât de o singură cale (de la L<sub>1</sub> spre 1) pentru a ajunge spre lampă. Prin urmare, indiferent care contact se închide, A sau B, lampa se va aprinde.</p>

<img src="../poze/04107.png" alt="simbolul porţii logice SAU"/>

<p>Ceea ce am implementat de fapt în acest caz nu este altceva decât o poartă logică SAU, utilizând două contacte normal-deschise şi o lampă.</p>

<div class="clear"></div>

<h2>Funcţia logică ŞI</h2>

<img src="../poze/04010.png" alt="diagramă lader; funcţia ŞI"/>

<p>Putem imita funcţia unei porţi logice ŞI prin conectarea celor două contacte normal-deschise în serie şi nu în paralel.</p>

<div class="clear"></div>

<table class="floatleft">
<tr>
	<th>A</th>
	<th>B</th>
	<th>Ieşire</th>
</tr>
<tr>
	<td>0</td>
	<td>0</td>
	<td>0</td>
</tr>
<tr>
	<td>0</td>
	<td>1</td>
	<td>0</td>
</tr>
<tr>
	<td>1</td>
	<td>0</td>
	<td>0</td>
</tr>
<tr>
	<td>1</td>
	<td>1</td>
	<td>1</td>
</tr>
</table>

<img src="../poze/04156-1.png" alt="simbolul porţii logice ŞI"/>

<p>Putem verifica cu ajutorul tabelului de adevăr că acest lucru este într-adevăr corect.</p>

<div class="clear"></div>

<p>În acest caz, lampa se va aprinde doar dacă ambele contacte sunt acţionate simultan. Curentul va putea trece de la L<sub>1</sub> la 2 doar dacă ambele contacte sunt închise.</p>

<h2>Funcţia logică NU</h2>

<img src="../poze/04011.png" alt="diagramă ladder; funcţia logică NU"/>

<p>Funcţia logică de inversare poate fi obţinută prin simpla utilizare a unui contact normal-închis, faţă de un contact normal-deschis precum cele folosite mai sus.</p>

<div class="clear"></div>

<div class="clear"></div>

<table class="floatleft">
<tr>
	<th>A</th>
	<th>Ieşire</th>
</tr>
<tr>
	<td>0</td>
	<td>1</td>
</tr>
<tr>
	<td>1</td>
	<td>0</td>
</tr>
</table>

<img src="../poze/04070.png" alt="simbolul funcţiei logice NU"/>

<p>Din nou, putem verifica prin intermediul tabelului de adevăr că acest lucru este corect.</p>

<div class="clear"></div>

<h2>Funcţia logică ŞI-negat</h2>

<img src="../poze/04012.png" alt="diagramă ladder; funcţia logică ŞI-negat"/>

<p>Dacă luăm funcţia SAU prezentată mai sus şi inversăm fiecare intrare vom obţine funcţia ŞI-negat. Intrările se inversează prin utilizarea contactelor normal-închise în loc de contacte normal-deschise.</p>

<div class="clear"></div>

<table class="floatleft">
<tr>
	<th>A</th>
	<th>B</th>
	<th>Ieşire</th>
</tr>
<tr>
	<td>0</td>
	<td>0</td>
	<td>1</td>
</tr>
<tr>
	<td>0</td>
	<td>1</td>
	<td>1</td>
</tr>
<tr>
	<td>1</td>
	<td>0</td>
	<td>1</td>
</tr>
<tr>
	<td>1</td>
	<td>1</td>
	<td>0</td>
</tr>
</table>

<img src="../poze/04106.png" alt="simbolul funcţiei logice ŞI-negat"/>

<img src="../poze/04012-1.png" alt="funcţia logică ŞI-negat"/>

<div class="clear"></div>

<p>Lampa va fi energizată dacă unul dintre contacte nu este acţionat, şi se va stinge doar dacă ambele contacte sunt acţionate simultan.</p>

<h2>Funcţia logică SAU-negat</h2>

<img src="../poze/04013.png" alt="diagramă ladder; funcţia logică SAU-negat"/>

<p>Asemănător, dacă luăm funcţia ŞI implementată mai sus, şi inversăm intrările, obţinem funcţia logică SAU-negat. Inversarea intrărilor se realizează şi în acest caz prin utilizarea contactelor normal-închise în loc de contacte normal-deschise.</p>

<div class="clear"></div>

<table class="floatleft">
<tr>
	<th>A</th>
	<th>B</th>
	<th>Ieşire</th>
</tr>
<tr>
	<td>0</td>
	<td>0</td>
	<td>1</td>
</tr>
<tr>
	<td>0</td>
	<td>1</td>
	<td>0</td>
</tr>
<tr>
	<td>1</td>
	<td>0</td>
	<td>0</td>
</tr>
<tr>
	<td>1</td>
	<td>1</td>
	<td>0</td>
</tr>
</table>

<img src="../poze/04113.png" alt="simbolul porţii logice SAU-negat"/>

<img src="../poze/04013-1.png" alt="funcţia logică SAU-negat"/>

<div class="clear"></div>

<p>Din cele observate mai sus, putem trage unele concluzii, şi anume: contactele paralele sunt echivalente cu o poartă logică SAU; contactele serie sunt echivalente cu o poartă ŞI; contactele normal-închise sunt echivalente cu o poartă NU (negare).</p>

<h2>Funcţia logică SAU-exclusiv</h2>

<img src="../poze/04014-1.png" alt="diagramă ladder; funcţia logică SAU-exclusiv"/>

<p>Putem construi circuite logice combinaţionale prin gruparea contactelor în aranjamente serie-paralel. În exemplul alăturat, funcţia SAU-exclusiv este construită prin combinarea porţilor ŞI, SAU şi NU.</p>

<div class="clear"></div>

<table class="floatleft">
<tr>
	<th>A</th>
	<th>B</th>
	<th>Ieşire</th>
</tr>
<tr>
	<td>0</td>
	<td>0</td>
	<td>0</td>
</tr>
<tr>
	<td>0</td>
	<td>1</td>
	<td>1</td>
</tr>
<tr>
	<td>1</td>
	<td>0</td>
	<td>1</td>
</tr>
<tr>
	<td>1</td>
	<td>1</td>
	<td>0</td>
</tr>
</table>

<img src="../poze/04116.png" alt="simbolul porţii logice SAU-exclusiv"/>

<img src="../poze/04014.png" alt="funcţia logică SAU-exclusiv"/>

<div class="clear"></div>

<p>Linia de sus (contactul normal-închis A în serie cu, contactul normal-deschis B) este echivalentă cu partea de sus a combinaţiei de porţi logice NU/ŞI. Linia de jos (contactul normal-deschis A în serie cu, contactul normal-închis B) este echivalentă cu partea de jos a combinaţiei de porţi NU/ŞI. Conexiunea în paralel a celor două linii în punctul 2, formează un circuit echivalent SAU. Acest lucru permite energizarea lămpii fie prin linia 1 fir prin linia 2.</p>

<p>Pentru realizarea funcţiei SAU-exclusiv a trebuit să folosim două contacte pe o singură intrare: un contact pentru intrarea directă, iar celălalt contact pentru intrarea inversată. Cele două contacte A din diagrama de mai sus sunt acţionate fizic de acelaşi mecanism. Acelaşi lucru este valabil şi pentru contactele B. Această legătură „fizică” dintre contacte este scoasă în evidentă prin marcarea identică a contactelor. Nu există nicio limită a numărului de contacte ce pot fi reprezentate pe acelaşi releu. Fiecare nou contact adăugat unui releu sau unui comutator, fie că este contact normal-închis sau normal-deschis) este reprezentat prin acelaşi simbol.</p>

<h2>Marcarea compusă</h2>

<p>În unele situaţii, se foloseşte o marcare compusă de genul „A-1” şi „A-2” în loc de „A” pentru ambele contacte ale aceluiaşi dispozitiv. Acest lucru este folositor mai ales în cazul în care dorim să scoatem în evidenţă care seturi de contacte, din fiecare dispozitiv, este utilizat pentru care parte a circuitului. Pentru simplitate însă, nu vom folosi o asemenea notaţie în cele ce urmează. Dacă vedeţi mai multe contacte marcate identic (A, B, etc.), puteţi să fiţi siguri că acele contacte sunt acţionate de acelaşi mecanism.</p>

<h2>Inversarea ieşirii</h2>

<img src="../poze/04055-1.png" alt="diagramă ladder; negarea ieşirii unei funcţii logice"/>

<p>Dacă dorim să inversăm ieşirea unei funcţii logice realizate cu ajutorul unui comutator, trebuie să folosim un releu cu un contact normal-închis. De exemplu, dacă vrem să energizăm o sarcină bazându-ne pe negarea (funcţia NU) unui contact normal-deschis, putem realiza diagrama alăturată.</p>

<div class="clear"></div>

<table class="floatleft">
<tr>
	<th>A</th>
	<th>CR1</th>
	<th>Ieşire</th>
</tr>
<tr>
	<td>0</td>
	<td>0</td>
	<td>1</td>
</tr>
<tr>
	<td>1</td>
	<td>1</td>
	<td>0</td>
</tr>
</table>

<img src="../poze/04055.png" alt="funcţia logică NU"/>

<div class="clear"></div>

<p>Releul este indicat pe figură prin notaţia CR1 (releu de control 1). Atunci când bobina releului, simbolizată printr-un cerc pe prima linie, este energizată, contactul de pe linia a doua se deschide. Deschiderea acestui contact de-energizează lampa. De la comutatorul la bobina CR1, funcţia logică este ne-inversată. Contactul normal-închis este acţionat de bobina releului CR1, asigurând o funcţie logică de negare (NU) pe lampă, inversă faţă de starea de acţionare a comutatorului (A).</p>

<img src="../poze/04056-1.png" alt="diagrama ladder; funcţia logică ŞI-negat realizată prin inversarea ieşirii"/>

<p>Să aplicăm această strategie de inversare uneia dintre funcţiile cu intrare inversată realizate mai sus. Spre exemplu, funcţia logică ŞI folosind diagrama funcţiei ŞI-negat de mai sus. Putem inversa ieşirea cu ajutorul unui releu pentru realizarea unei funcţii ne-inversate.</p>

<div class="clear"></div>

<table class="floatleft">
<tr>
	<th>A</th>
	<th>B</th>
	<th>Ieşire</th>
</tr>
<tr>
	<td>0</td>
	<td>0</td>
	<td>0</td>
</tr>
<tr>
	<td>0</td>
	<td>1</td>
	<td>0</td>
</tr>
<tr>
	<td>1</td>
	<td>0</td>
	<td>0</td>
</tr>
<tr>
	<td>1</td>
	<td>1</td>
	<td>1</td>
</tr>
</table>

<img src="../poze/04056-2.png" alt="funcţia logică ŞI"/>

<img src="../poze/04056.png" alt="simbolul porţii logice ŞI"/>

<div class="clear"></div>

<p>De la comutator la bobina CR1, funcţia logică realizată este cea a unei porţi ŞI-negat. Contactele CR1 normal-închise inversează şi transformă ieşirea funcţiei ŞI-negat într-o funcţie ŞI.</p>


<p class="sumar">Sumar:</p>
<ul>
	<li>Contactele conectate în parelel sunt echivalente cu o poartă SAU</li>
	<li>Contactele conectate în serei sunt echivalente cu o poartă ŞI </li>
	<li>Contactele normal-închise sunt echivalente cu o poartă NU</li>
	<li>Pentru inversarea intrărilor pe porţi, se folosesc contacte normal-închis</li>
	<li>Pentru inversarea ieşirii unei funcţii logice, se folosesc relee</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>