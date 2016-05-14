<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Tiristorul</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>10. Tiristorul</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Tiristoarele reprezintă o plajă largă de dispozitive semiconductoare bipolare folosind patru (sau mai multe) straturi alternante N-P-N-P. În categoria tiristoarelor intră: redresoare controlate pe bază de siliciu (SCR), TRIAC-uri, DIAC-uri, tiristoare tip GTO, tranzistoare uni-joncţiunie (UJT), tranzistoare uni-joncţiune programabile (PUT). Vom analiza aici doar SCR-ul, deşi vom menţiona şi GTO-ul.</p>

<p>Tiristorul cu patru straturi a fost propus de Shockley în 1950, deşi practic, acesta a fost construi mulţi ani mai târziu de către General Electric. Puterile suportate de SCR ajung până la ordinul MW.</p>

<p>Redresorul controlat pe bază de siliciu este o diodă cu patru straturi şi o poartă, asemenea figurii de mai jos (a):</p>

#+CAPTION: tiristorul SCR (redresor controlat pe bază de siliciu): (a) modul de dopare al straturilor; (b) circuit cu tranzistoare bipolare cu joncţiune echivalent
[[../poze/03424.png]]

<p>Dacă este „pornit”, acesta se comportă precum o diodă, pentru o singură polaritate a curentului. Dacă nu este „pornit”, nu conduce curent. Modul de funcţionare poate fi exmplicat cu ajutorul conexiunii echivalente realizate din tranzistoare bipolare cu joncţiune din figura de mai sus (b). Un semnal de pornire pozitiv este aplicat între poartă şi catod. Tranzistorul NPN echivalent va începe să conducă curent ceea ce va duce şi la declanşarea conducţiei tranzistorului PNP. În acest moment, tranzistorul NPN va conduce curent chiar şi în absenţa semnalului pe poartă, Odată ce un dispozitiv SCR începe să conducă, o va face atâta timp cât este prezentă o tensiune pe anod (infinit, în cazul circuitului cu baterie de mai sus).</p>

<h3>Modul de confencţionare</h3>

<p>Catodul unui SCR, ce corespunde emitorului echivalent al tranzistorului NPN este puternic dopat, N<sup>+</sup>. Anodul, ce corespunde emitorului echivlanet al tranzistorului PNP, este şi el puternic dopat, P<sup>+</sup>. Celelalte două regiuni din mijloc, ce corespund bazei şi colectorului tranzistoarelor echivalente, sunt dopate mai uşor, N<sup>-</sup> şi P (figura de mai jos (a)). Simbolurile tiristoarelor SCR şi GTO sunt prezentate de asemenea în figura de mai jos ((b) respectiv (c)).</p>

#+CAPTION: tiristoare: (a) secţiune transversală; (b) simbolul schematic al redresorului controlat pe bază de siliciu (SCR) (c) simbolul tiristorului de tip GTO
[[../poze/03307.png]]

<p class="sumar">Sumar:</p>
<ul>
	<li>SCR sunt cele mai des întâlnite dispozitive din familia tiristoarelor</li>
	<li>„Pornirea” conducţiei SCR-ului se realizează prin aplicarea unui impuls pozitiv porţii. Conducţia continuă chiar şi după ce impulsul asupra porţii încetează. Conducţia poate fi oprită doar dacă tensiunea dintre anod şi catod atinge valoarea zero </li>
	<li>SCR sunt folosite de obicei cu surse de tensiune de curent alternativ (sau de curent continuu pulsatorii) datorită conducţiei continue</li>
	<li>Un dispozitiv GTO poate fi oprit prin aplicarea unui puls negativ asupra porţii</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
