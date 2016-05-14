<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Factori ce influenţează inductanţa</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Factori ce influenţează inductanţa</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Există patru factori de bază în construcţia bobinelor ce influenţează valoarea inductanţei create. Toţi aceşti factori se referă la valoarea fluxului magnetic creat pentru o anumită valoare a forţei magnetice:</p>

<h3>Numărul spirelor din înfăşurare</h3>
<p>Toţi ceilalţi factori fiind egali, un număr mai mare de spire în înfăşurarea bobine rezultă într-o valoare mai mare a inductanţei, şi invers.</p>

<p><i>Explicaţie:</i> Un număr mai mare de spire se traduce printr-o forţă magnetică mai mare (în amperi), pentru o anumită valoare a curentului prin bobină.</p>

#+CAPTION: valoarea inductanţei create de o bobină în funcţie de numărul de spire din înfăşurare
[[../poze/00324.png]]

<h3>Aria înfăşurării</h3>

<p>Toţi ceialţi factorii fiind egali, o arie mai mare a înfăşurării (privind în lungul înfăşurării la secţiunea transversală a acesteia) rezultă într-o inductanţă mai mare, şi invers.</p>

<p><i>Explicaţie:</i> O arie mai mare a înfăşurării prezintă o opoziţie mai mică faţă de formarea fluxului magnetic, pentru o anumită valoarea a forţei câmpului magnetic.</p>

#+CAPTION: valoarea inductanţei create de o bobină în funcţie de aria înfăşurării
[[../poze/00325.png]]

<h3>Lungimea înfăşurării</h3>
<p>Toţi ceialţi factorii fiind egali, cu cât lungimea înfăşurării este mai mare, cu atât inductanţa este mai mică, şi invers.</p>

<p><i>Explicaţie:</i> O cale mai lungă pentru fluxul magnetic rezultă într-o opoziţie crescută faţă de formarea acelui flux, pentru o anumită valoare a forţei magnetice.</p>

#+CAPTION: valoarea inductanţei create de o bobină în funcţie de lungimea înfăşurării
[[../poze/00326.png]]

<h3>Materialul miezului</h3>
<p>Toţi ceialţi factorii fiind egali, cu cât permeabilitatea magnetică miezului înfăşurării este mai mare, cu atât mai mare este inductanţa, şi invers.</p>
<p><i>Explicaţie:</i> Un miez dintr-un material cu o permeabilitate magnetică mai mare rezultă într-un flux magnetic mai mare pentru o anumită valoare a forţei magnetice.</p>

#+CAPTION: valoarea inductanţei create de o bobină în funcţie de materialul miezului - aer vs. fier
[[../poze/00327.png]]

<h3>Formula de calcul a inductanţei</h3>
<p>O aproximare pentru calcularea inductanţei oricărei înfăşurări se poate obţine cu următoarea formulă:</p>

#+CAPTION: formula de calcul a inductanţei
[[../poze/10237.png]]

<p>Această formulă este doar aproximativă, deoarece permeabilitatea magnetică variază odatată cu variaţia intensităţii câmpului magnetic (vezi neliniaritatea curbelor „B-H” pentru diferite materiale). Dacă termenul µ (permeabilitatea) din ecuaţia de mai sus nu este stabil, nici inductanţa (L) nu va fi perfect stabilă atunci când apar variaţii ale curentului prin înfăşurare. Dacă histerezisul miezului este suficient de mare, acest lucru se va răsfrânge asupra inductanţei bobinei. La construcţia bobinelor se încercă minimizarea acestor efecte prin realizarea bobinei în aşa fel încât densitatea fluxului magnetic nu atinge niciodată nivelul de saturaţie, iar bobina funcţionează în porţiunea mai liniară a curbei de magnetizaţie B-H.</p>

<p>Bobinele variabile sunt de obicei concepute asfel încât să fie posibilă variaţia numărului de înfăşurări folosite în orice moment, sau prin schimbarea miezului.</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
