<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Clarificări legate de polaritatea curentului alternativ</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>7. Clarificări legate de polaritatea curentului alternativ</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Polaritatea căderilor de tensiune</h2>

<p>Numerele complexe sunt folositoare pentru analiza circuitelor de curent alternativ, deoarece reprezintă o metodă comodă de reprezentare simbolică a defazajului dintre mărimile curentului alternativ, precum tensiunea şi curentul. Totuşi, pentru majoritatea dintre noi, echivalenţa dintre abstractizarea vectorială şi valorile reale dintr-un circuit este destul de greu de înţeles. În acest capitol, am văzut că sursele de tensiune de curent alternativ sunt caracterizate atât prin valoarea tensiunii sub formă complexă (amplitudine şi unghi de fază) cât şi prin polaritatea tensiunii. Dat fiind faptul că în cazul curentului alternativ nu există o „polaritate” dată, precum în cazul curentului continuu, aceste notaţii de polaritate şi relaţia acestora cu unghiul de fază poate crea confuzii. Această secţiune este scrisă pentru a încerca clarificarea unora dintre aceste probleme.</p>

<p>Tensiunea este o cantitate relativă. Atunci când măsurăm o tensiune, putem alege modul de conectare a voltmetrului la sursa de tensiune, din moment ce există două puncte între care măsurăm tensiunea şi două sonde pentru oricare voltmetru. În cazul circuitelor de c.c., polaritatea şi valoarea surselor de tensiune se specifică exact folosind simbolurile „+” şi „-”. În cazul sondelor aparatului de măsură, acestea sunt colorate cu roşu, respectiv negru. Dacă un voltmetru digital indică o tensiune de c.c. negativă, putem fi siguri că sondele de test au fost conectate invers (roşu la „-” şi negru la „+”).</p>

<p>Polaritatea bateriilor este specificată prin intermediul simbolisticii specifice acestora: linia mai scurtă reprezintă tot timpul terminalul negativ (-), iar linia orizontală mai lungă este tot timpul borna pozitivă (+):</p>

<img src="../poze/02348.png" width="80" height="78" alt="simboul şi polaritatea unei baterii electrice"/>

<p>Cu toate că, din punct de vedere matematic, reprezentarea tensiunii bateriei printr-o valoare negativă şi polaritatea bornelor inversată este corectă, acest lucru nu este convenţional:</p>

<img src="../poze/02349.png" width="80" height="78" alt="simboul şi polaritatea unei baterii electrice"/>

<p>Interpretarea unei astfel de notaţii ar fi mai usoară dacă polarităţile „+” şi „-” ar fi văzute ca şi puncte de referinţă pentru sondele voltmetrului. Polaritatea „+” însemnând „roşu” iar „-” însemnând „negru”. Un voltmetru conectat la bateria de mai sus cu sonda roşie la borna de jos şi sonda neagră la borna de sus, ar indica într-adevăr o tensiune negativă (-6 V).</p>

<p>În cazul circuitelor de c.a. totuşi, nu lucrăm cu valori negative ale tensiunii. În schimb, descriem relaţia dintre două tensiuni prin intermediul fazei: defazarea în timp dintre două forme de undă. Nu descriem niciodată o tensiune de c.a. printr-o valoare negativă, deoarece utilizarea notaţiei polare permite existenţa vectorilor cu sens invers. Dacă două tensiuni de c.a. sunt opuse (+6 V şi -6 V pentru c.c.), spunem că ele sunt defazate cu 180<sup>0</sup> între ele, sau că se găsesc în antifază.</p>

<p>Totuşi, tensiunea este o valoare relativă între două punce, şi putem alege modul de conectare a aparatului de măsură între aceste două puncte. Semnul matematic al indicaţiei unui voltmetru în cazul unei măsurători în c.c. are sens doar în contextul modului de conectare al celor două sonde (la care terminal este conectată sonda roşie, şi la care terminal cea neagră). Asemănător, unghiul de fază a unui semnal de c.a are sens doar dacă ştim care din cele două puncte este considerat punctul de „referinţă”. Din această cauză, polarităţile „+” şi „”¨sunt adesea folosite pentru bornele surselor de c.a.: pentru a specifica punctul de referinţă al unghiului de fază.</p>



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