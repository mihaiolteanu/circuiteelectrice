<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Introducere</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Introducere</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Un tranzistor bipolar cu joncţiune (BJT) este alcătuit din trei straturi de materiale semiconductoare, fie de tipul PNP, fie de tipul NPN. Fiecare strat are un nume specific şi un contact pentru conexiunea la circuit:</p>

#+CAPTION: tranzistorul bipolar cu joncţiune: (a) simbolul PNP; (b) secţiune transversală PNP; (c) simbolul NPN; (d) secţiune transversală NPN
[[../poze/03071.png]]

<p>Diferenţa funcţională dintre tranzistorul PNP şi NPN, este modul de polarizare corectă a joncţiunii. Indiferent de starea în care se află, direcţiile curenţilor şi polarităţile tensiunii sunt exact invers la cele două tipuri de tranzistoare.</p>

<p>Tranzistorii sunt regulatori de curent controlaţi în curent. Cu alte cuvinte, tranzistorii limitează valoarea curentului prin ei cu ajutorul unui curent de control mai mic. Curentul principal, cel <i>controlat</i>, pleacă dinspre emitor spre colector (tipul NPN), iar curentul mai mic <i>de control</i>, pleacă dinspre emitor spre bază (tipul NPN). Pentru tranzistorul de tip PNP, direcţia curenţilor este exact inversă. Atenţie, folosim sensul real de deplasare al electronilor, prin urmare, săgeţile indicate pe simbolurile elementelor semiconductoare vor indicat tot timpul <i>împotriva</i> direcţiei de deplasare al electronilor.</p>

#+CAPTION: controlul tranzistorului bipolar cu joncţiune
[[../poze/03073.png]]

<p>Denumirea tranzistoarelor bipolare vine de la faptul că deplasarea electronilor prin ele are loc prin <i>două</i> tipuri de material semiconductor: P şi N. Cu alte cuvinte, există două tipuri de purtători de sarcină, electroni şi goluri.</p>

<p>După cum se poate observa, curentul <i>de control</i> şi curentul <i>controlat</i> se însumează tot timpul pe emitor, iar deplasarea electronilor are loc tot timpul <i>împotriva</i> direcţiei săgeţii. Aceasta este prima şi cea mai importantă regulă a tranzistoarelor: toţi curenţii trebuie să meargă în direcţiile corecte pentru ca dispozitivul să funcţioneze ca şi regulator de curent. De obicei, curentul de control este denumit <i>curent de bază</i>, iar curentul controlat este denumit <i>curent de colector</i>, deoarece sunt singurii curenţii ce trec pe la aceste terminale. Curentul pe emitor este suma curenţilor de bază şi colector, în conformitatea cu legea lui Kirchhoff pentru curent.</p>

<p>Atunci când nu există niciun curent prin bază, tranzistorul se comportă precum un întrerupător deschis, iar trecerea curentului prin colector nu este posibilă. Un curent de bază porneşte tranzistorul, acesta comportându-se precum un întrerupător închis şi permiţând trecerea unui curent proporţional prin colector. Curentul de colector este limitat de curentul bazei, indiferent de valoarea căderii de tensiune pe colector.</p>

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
