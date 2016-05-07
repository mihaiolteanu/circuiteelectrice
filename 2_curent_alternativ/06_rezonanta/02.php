<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Rezonanţa paralel</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Rezonanţa paralel</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Putem ajunge la o stare de rezonanţă într-un circuit oscilator (LC), dacă reactanţele condensatorului şi a bobinei sunt egale între ele. Deoarece reactanţa inductivă creşte odată cu creşterea frecvenţei, iar reactanţa capacitivă scade cu creşterea frecvenţei, există doar o singură frecvenţă unde cele două reactanţe vor fi egale.</p>

<p><img src="../poze/02096.png" alt="circuit electric paralel simplu rezonant (LC); circuit oscilator"/></p>

<p>În circuitul de mai sus, avem un condensator de 10 µF şi o bobină de 100 mH. Din moment ce cunoaştem ecuaţiile pentru determinarea reactanţelor, oricare ar fi valoarea frecvenţei, iar ceea ce ne interesează este punctul în care cele două reactanţe sunt egale între ele, putem rezolva ecuaţia formată din egalitatea celor două reactanţa pentru a afla frecvenţa de rezonanţă (naturală):</p>

<p><img src="../poze/12088.png" alt="formule"/></p>

<p>Aceasta este formula prin care putem afla frecvenţa de rezonanţă a unui circuit oscilator, atunci când cunoaştem valorile inductanţei (L) şi a capacităţii (C). După introducerea valorilor L şi C în formula de mai sus, ajungel la frecvenţă de rezonanţă de 159.155 Hz.</p>

<p>Ceea ce se întâmplă la rezonanţă este interesant. Fiindcă reactanţa inductivă este egală cu cea capacitivă, impedanţa totală creşte spre infinit, ceea ce înseamnă că circuitul oscilator nu „consumă” deloc curent de la sursa de tensiune! Putem calcula impedanţele individuale ale condensatorului de 10 µF şi a bobinei de 100 mH, ca mai apoi să aplicăm formula impedanţei paralele pentru a demonstra matematic ceea ce am spus mai sus:</p>

<p><img src="../poze/12089.png" alt="formule"/></p>

<p>Prin urmare, ambele impedanţe sunt egale, 100 Ω. Putem acum să folosm formula impedanţei paralel:</p>

<p><img src="../poze/12090.png" alt="formule"/></p>

<p>Desigur, nu putem face raportul unui număr cu zero pentru a ajunge la un rezultat care să aibă sens, dar putem spune că rezultatul tinde spre infinit pe măsură ce valorile celor două impedanţe paralele se apropie una de cealaltă. Practic, acest lucru înseamnă că impedanţa totală a circuitului oscilator la rezonanţă este infinită (se comportă precum un circuit deschis).</p>

<p>Grafic, amplitudinea curentului din circuit în funcţie de frecvenţa sursei de alimentare arată asfel:</p>

<p><img src="../poze/22005.png" alt="graficul curent-frecvenţă pentru un circuit oscilator la frecvenţa de rezonanţă"/></p>

<p>Punctul de pe grafic unde curentul este zero, coincide cu frecvenţa de rezonanţă calculată mai sus, 159.155 Hz.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Rezonanţa are loc atunci când reactanţa capacitivă este egală cu reactanţă inductivă</li>
	<li>Impedanţa totală a unui circuit LC paralel tinde spre infinit pe măsură ce frecvenţa sursei de alimentare se apropie de frecvenţa de rezonanţă</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>