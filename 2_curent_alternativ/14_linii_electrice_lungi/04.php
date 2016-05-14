<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Linii electrice lungi şi linii electrice scurte</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Linii electrice lungi şi linii electrice scurte</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>În circuitele de curent continuu şi în cele de curent alternativ de frecvenţă joasă, impedanţa caracteristică a conductorilor paraleli este de obicei ignorată, datorită duratelor de timp relativ scurte a reflexiilor din lungul liniilor, faţă de perioada undelor sau a pulsurilor din circuit. După cum am văzut în secţiunea precedentă, dacă o linie de transmisie este conectată la o sursă de curent continuu, aceasta se va comporta precum un rezistor a cărei valoare este egală cu impedanţă caracteristică a liniei pentru o durată de timp egală cu durata de parcugere a undei până la capătul liniei şi înapoi spre sursă. După acea perioadă (aproximativ 12 µs pentru un cablu coaxial de un kilometru), sursa „vede” doar impedanţa conectată în circuit, oricare ar fi aceasta.</p>

<p>Dacă circuitul în cauză foloseşte putere în curent alternativ, consecinţele unei asemenea întârzieri, introduse de linia de transmisie între vârful tensiunii de curent alternativ generat de tensiune şi momentul în care sarcina „vede” acest vârf, nu sunt de o importanţă crucială. Cu toate că amplitudinile instantanee ale semnalului în lungimea liniei nu sunt egale, datorită propagării acestuia cu viteza luminii, diferenţa de fază a semnalelor dintre începutul şi capătul liniei este neglijabilă, deoarece propagarea acestora în lungul liniilor au loc cu o fracţiune foarte mică din perioada formei de undă alternative. Din considerente practice, putem spune că tensiunea de-a lungul unei linii de transmisie cu două conductoare, de frecvenţă joasă, este egală şi în fază în oricare moment.</p>

<p>Acest tip de line poartă denumirea de <i>linie de transmisie scurtă</i>, deoarece efectele propagării semnalelor sunt mult mai rapide decât perioadele semnalelor transmise. Invers, o <i>linie electrică lungă</i> are un timp de propagare mult mai mare ce poate ajunge să fie multiplu al perioadei semnalului transmis. O linie este considerată „lungă” atunci când semnalul sursei „parcurge” cel puţin un sfert de perioadă (90 de grade) înainte ca semnalul incident să ajungă la capătul liniei. Până în acest moment, toate liniile electrice au fost considerate electric scurte.</p>

<p>Să încercăm o explicaţie. Trebuie să exprimăm distanţa parcursă de o undă de tensiune sau curent, în lungul liniei de transmisie, în funcţie de frecvenţa sursei. Perioada unei forme de undă alternative cu o frecvenţă de 60 Hz este de 16,66 ms. La viteza luminii, un semnal de tensiune sau curent va parcurge o distantă de aproximativ 5 km. Dacă factorul de viteză al liniei de transmisie este sub unu, viteza de propagare va fi mai mică decât viteza luminii, prin urmare şi distanţa parcursă va fi mai mică. Dar chiar şi dacă utilizăm un factor de viteză mai mică, distanţa parcusă în acel interval va fi tot foarte mare. Distanţa calculată pentru o anumită frecvenţa, poartă denumirea de <i>lungime de undă</i> a semnalului.</p>

<p>Formula de calcul a lungimii de undă este următoarea:</p>

#+CAPTION: formula de calcul a lungimii de undă
[[../poze/12147.png]]

<p>Considerând o linie lungă ca având o lungime de cel puţin 1/4 din lungimea de undă, putem vedea de ce toate liniile folosite în circuitele discutate au fost presupuse ca fiind linii electrice scurte. Pentru un circuit la frecvenţa de 60 Hz, liniile de tensiune ar trebui să depăşească 1.200 de kilometri în lungime, înainte ca efectele timpului de propagare a semnalelor să devină importante. Cablurile ce realizează conexiunea dintre difuzoare şi amplificator ar trebui să depăşească lungimea de 7 kilometri pentru ca reflexiile acestuia să afecteze suficient de mult semnalul audio de 10 kHz.</p>

<p>În cazul circuitelor de frecvenţă înaltă însă, lungimea liniei este foarte importantă. Să considerăm ca şi exemplu un semnal radio de 100 MHz, lungimea sa de undă fiind de doar 3 m, chiar şi la viteza de propagare maximă (factor de viteză 1). O linie de transmisie pentru acest semnal este considerată lungă dacă depăşeşte lungimea de 0.75 m! Mai mult, cu un factor de viteză de 0.66, această lungime critică devine 0.5 m!</p>

<p>Când o sursă electrică este conectată la sarcină printr-o linie de transmisie scurtă, impedanţa sarcinii domină circuitul. Cu alte cuvinte, când linia electrică este scurtă, impendaţa caracteristică a liniei are un impact extrem de redus asupra performanţelor circuitului.</p>

<p>La conectarea unei surse la sarcină prin intermediul unei linii de transmisie lungă, impedanţa caracteristică a liniei domină impedanţa sarcinii. Cu alte cuvinte, liniile electrice lungi constituie componenta principală a circuitului.</p>

<p>Cea mai eficientă metodă de minimizare a impactului lungimii liniilor de transmisie asupra circuitului, este egalarea impedanţei caracteristice a liniei cu impedanţa sarcinii. În acest caz, orice sursă de semnale conectată la celălalt capăt al iniei va „vedea” exact aceeiaşi impedanţă, şi va genera acelaşi curent în circuit, indiferent de lungimea liniei. În această condiţie perfectă, lungimea liniei afectează doar durata de timp necesară pentru transmiterii semnalului de la sursă la sarcină. Totuşi, egalarea perfectă a impedanţelor nu este tot timpul practică sau posibilă.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Atunci când perioada de transmitere a semnalului de curent sau tensiune este mult mai mare decât timpul de propagare al semnalului de-a lungul liniei de transmisie, spunem că linia este electric scurtă. Invers, când timpul de propagare este o fracţiune mai mare sau chiar un multiplu al perioadei semnalului transmis, spune că linia este electric lungă</li>
	<li>Lungimea de undă a unui semnal reprezintă distanţa fizică pe care aceasta o poate parcurge pe durata unei perioade. Formula de calcul a lungii de undă este λ=v/f, unde „λ” reprezintă lungimea de undă, „v” este viteza de propagare iar „f” este frecvenţa semnalului</li>
	<li>Ca şi regulă, lungimea liniei trebuie să fie mai mare decât un sfert (1/4) din lungimea de undă a semnalului pentru a fi considerată linie electrică lungă</li>
	<li>Când la capătul unei linii de transmisie este conectatăo sarcină de impedanţă exact egală cu impedanţa caracteristică a linie, nu vor exista unde reflectată, şi prin urmare, nu vor exista nici efecte nedorite datorate lungimii liniei</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
