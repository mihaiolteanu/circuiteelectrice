<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Filtrul trece-sus</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Filtrul trece-sus</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Filtrul trece-sus este exact opusul filtrului trece-jos, după cum sugerează şi numele: permite trecerea semnalelor de frecvenţă înaltă şi blochează trecerea semnalelor de frecvenţă joasă. Modul de conectare al elementelor reactive în circuit este exact opus faţă de filtrele trece-jos.</p>

<h3>Filtrul trece-sus capacitiv</h3>

<p><img src="../poze/02118.png" alt="filtru trece-sus capacitiv"/></p>

<p>Impedanţa condensatorului din circuitul de mai sus creşte odată cu descreşterea frecvenţei. Această impedanţă în serie cu sarcina tinde să blocheaze semnalele de frecvenţă joasă ce ar putea ajunge pe sarcină.</p>

<p><img src="../poze/22029.png" alt="diagrama Bode a filtrului capacitiv trece-sus"/></p>

<p>După cum se poate vedea în diagrama Bode, răspunsul filtrului capacitiv trece-sus creşte cu creşterea frecvenţei.</p>

<h3>Filtrul trece-sus inductiv</h3>

<p><img src="../poze/02119.png" alt="filtru trece-sus inductiv"/></p>

<p>Impedanţa bobine scade odată cu scăderea frecvenţei. Aceasta impedanţă mică conectată în paralel cu sarcina, tinde să scurt-circuiteze semnalele de frecvenţă joasă, asfel că acestea nu mai ajung la sarcină. Prin urmare, mare parte a căderii de tensiune se va regăsi pe rezistorul R<sub>1</sub>.</p>

<p><img src="../poze/22030.png" alt="diagrama Bode a filtrului trece-sus inductiv"/></p>

<p>După cum se poate vedea în diagrama Bode, răspunsul filtrului inductiv trece-sus creşte cu creşterea frecvenţei.</p>

<h3>Comparaţie între filtrele trece-sus inductive şi capacitive</h3>

<p>De data aceasta, schema filtrului capacitiv trece-sus este mai simplă decât cea inductivă, necesitând doar un singur component în plus, un condensator. Din nou, puritatea reactivă a condensatoarelor faţă de bobine face ca filtrele capacitive să fie cel mai des folosite.</p>

<h3>Frecvenţa de taiere</h3>

<p>La fel ca în cazul filtrelor trece-jos, şi filtrele trece-sus au o <i>frecvenţă de tăiere</i> specifică. Peste valoarea aceste frecvenţă, tensiunea de ieşire este mai mare de 70.7% din valoarea tensiunii de intrare. Formula de calcul a frecvenţei de tăiere este aceeiaşi ca şi în cazul filtrelor trece-jos:</p>

<p><img src="../poze/12097.png" alt="formula de calcul a frecvenţei de tăiere a filtrelor trece-sus"/></p>

<p>Rezistenţa din formulă, în cazul circuitului capacitiv trece-sus, este chiar rezistenţa de sarcină:</p>

<h3>Filtrarea unui sistem audio</h3>

<p>Să considerăm un sistem audio, ca şi exemplu. Un condensator conectat în serie cu tweeter-ul (înaltele) are rolul de filtru trece-sus, impunând circuitului de ieşire o impedanţă mare frecvenţelor joase (bas), prevenind asfel risipa de putere pe un difuzor ce este ineficient în reproducerea acestor sunete. Asemnănător, bobina conectată în serie cu woofer-ul (bas) are rolul de filtru trece-jos, permiţând doar trecerea acelor sunete pe care difuzorul le şi poate reproduce cu succes. În acest circuit simplu, difuzorul pentru frecvenţele medii este supus întregului spectru de frecvenţe produs de aparatul stereo. Câteodată se folosesc sisteme de filtrare mult mai elaborate, dar ideea generală este aceasta. În acest exemplu este prezentat doar un singur canal (stânga sau dreapta). Un sistem real ar conţine 6 difuzoare: 2 joase, 2 medii şi 2 înalte.</p>

<p><img src="../poze/02120.png" alt="folosirea filtrelor trece-jos şi trece sus la ieşirea unui sistem audio"/></p>

<p>Pentru a mări şi mai mult performanţele acestui sistem, am putea construi un circuit de filtrare capabil să permită trecerea frecvenţelor ce se află între joase şi înalte spre difuzorul de medii, asfel încât să nu existe putere disipată (de frecvenţă înaltă sau joasă) pe un difuzor ce reproduce acest tip de sunete ineficient. Ceea ce vrem de fapt să realizăm, este un filtru <i>trece bandă</i>.</p>


<p class="sumar">Sumar:</p>
<ul>
	<li>Un filtru trece-sus permite trecerea semnalelor de frecvenţă înaltă de la sursă spre sarcină, şi blochează semnalele de frecvenţă joasă</li>
	<li>Circuitele trece-sus capacitive folosesc un condensator conectat în serie cu sarcina, prin blocarea semnalelor de frecvenţe nedorite</li>
	<li>Circuitele trece-sus inductive folosesc un rezistor conectat în serie cu o bobină, ambele componente fiind conectate în paralel cu sarcina, prin scurt-circuitarea semnalelor de frecvenţe nedorite</li>
	<li>Frecvenţa de tăiere pentru un filtru trece-sus, reprezintă frecvenţa la care tensiunea de ieşire este egală cu 70.7% din tensiunea de intrare. Peste această frecvenţă de tăiere, tensiunea de ieşire este mai mare decât 70.7% din tensiunea de intrare, şi invers</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>