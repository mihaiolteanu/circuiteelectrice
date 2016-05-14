<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Filtrul trece-jos</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Filtrul trece-jos</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>Prin definiţie, filtrul trece-jos permite trecerea (impedanţă mică) semnalelor de frecvenţă joasă şi blochează trecerea (impedanţă mare) celor de frecvenţă înaltă.</p>

<h3>Filtrul trece-jos inductiv</h3>

<p>Există două tipuri de circuite capabile să îndeplinească aceste condiţii, şi multe versiuni din fiecare: filtrul trece-jos inductiv şi filtrul trece-jos capacitiv:</p>

#+CAPTION: filtru trece-jos inductiv
[[../poze/02116.png]]

<p>În această configuraţie, impedanţa bobinei creşte odată cu creşterea frecvenţei, iar această impedanţă în serie cu rezistenţa de sarcină (bec, motor electric, ventilator, etc.) face ca semnalele de frecvenţă înaltă să nu ajungă la aceasta (blocarea/filtrarea lor). Grafic, comportamentul filtrului, atunci când este supus unei forme de undă multi-frecvenţă, arată asfel:</p>

#+CAPTION: diagrama Bode pentru filtrul trece-jos inductiv
[[../poze/22026.png]]

<h3>Filtrul trece-jos capacitiv</h3>

<p>Să considerăm şi filtrul trece-jos capacitiv:</p>

#+CAPTION: filtru trece-jos capacitiv
[[../poze/02117.png]]

<p>Impedanţa condensatorului scade odată cu scăderea frecvenţei. Acestă impedanţă mică, conectată în paralel cu rezistenţa de sarcină, duce la scurt-circuitarea celei din urmă la semnalele de frecvenţă înaltă, iar mare parte din căderea de tensiune se va regăsi pentru rezistorul serie R<sub>1</sub>.</p>

#+CAPTION: diagrama Bode pentru filtrul trece-jos capacitiv
[[../poze/22027.png]]

<h3>Comparaţie între filtrele trece-jos inductive şi capacitive</h3>

<p>Filtrul trece-jos inductiv este cât se poate de simplu, constând doar dintr-un singur comonent, bobina. Versiunea capacitivă a aceluiaşi filtru nu este nici ea mai complicată, constând dintr-un rezisotr şi un condensator. Totuşi, filtrele capacitive, chiar dacă sunt puţin mai complexe, sunt cele mai folosite dintre cele două, deoarece condensatoarele sunt în general elemente reactive mai „pure” decât bobinele, prin urmare, comportamentul acestora este mult mai previzibil. Prin pur se înţelege faptul că rezistenţa condensatoarelor este mult mai mică decât cea a bobinelor, fiind asfel aproape 100% reactive. Bobinele, pe de altă parte, prezintă efecte disipative importante (rezistive), atât în lungimea firelor utilizate cât şi prin pierderile magnetice din miezul magnetic. Condensatoarele sunt mult mai puţin supuse efectelor de „cuplaj” cu alte componente şi sunt mult mai ieftine decât bobinele.</p>

<p>Totuşi, filtrul trece-jos inductiv este adeseori preferat în cazul redresării tensiunii de curent alternativ în curent continuu pentru eliminarea vârfurilor create în această situaţie, rezultând o componentă continuă pură. Principalul motiv al alegerii constă în necesitatea unei rezistenţe mici a filtrului pentru ieşirea unei asfel de surse de alimentare. Un filtru capacitiv necesită introducerea unei rezistenţe suplimentare în serie cu sursa, pe când unul inductiv nu. Dacă în circuitul de curent continuu considerat, adăugarea unei rezistenţe suplimentare nu este de dorit, atunci filtrul trece-jos inductiv este cea mai bună alegere pentru filtrarea formei de undă. Pe de altă parte, dacă priorităţile principale sunt un volum şi o greutate scăzută, atunci filtrul capacitiv este cea mai bună alegere.</p>

<h3>Frecvenţa de tăiere</h3>

<p>Toate filtrele trece-jos au o anumită proprietate, şi anume, <i>frecvenţa de tăiere</i>, şi reprezintă frecvenţa peste care tensiunea de ieşire a circuitului scade sub 70.7% din valoarea tensiunii de intrare. Această valoare de 70.7% nu este arbitrară, chiar dacă pare aşa la prima vedere.</p>

<p>Într-un circuit simplu trece-jos capacitiv sau inductiv, frecvenţa de tăiere reprezintă frecvenţa la care reactanţă capacitivă (în ohmi) este egală cu rezistenţă (în ohmi). Într-un circuit trece-jos capacitiv simplu (un rezistor, un condensator), frecvenţa de tăiere este dată de următoarea formulă:</p>

#+CAPTION: formula frecvenţei de tăiere pentru un filtru trece-jos capacitiv
[[../poze/12097.png]]

<p>Realizând calculele, ajungem la valoarea frecvenţei de tăiere, 45.473 Hz. Întrucât formula de mai sus nu ia în considerare şi rezistenţa de sarcină din circuit, refacem graficul de mai sus, eliminând sarcina din circuit:</p>

#+CAPTION: diagrama Bode pentru filtrul trece-jos capacitiv
[[../poze/22028.png]]

<p>Este important de ţinut minte că răspunsul filtrului depinde de valorile componentelor acestuia precum <i>şi</i> de impedanţa sarcinii. Dacă ecuaţia frecvenţei de tăiere nu ia în considerare şi această impedanţă, sarcina nu este luată în considerare, iar valorile reale ale frecvenţei de tăiere vor fi diferite de valoarea calculată.</p>

<h3>Folosirea filtrului trece-jos capacitiv pentru eliminarea zgomotului</h3>

<p>O aplicaţie frecvenţă a filtrului trece-jos capacitiv este în cadrul circuitelor ce prezintă componente sau secţiuni susceptibile zgomotului electric. Un exemplu este suprapunerea zgomotului de curent alternativ peste liniile electrice de curent continuu folosite pentru alimentearea circuitelor sensibile prin capacitatea şi inductanţa mutuală parazită (C<sub>p</sub> şi M<sub>p</sub>:</p>

#+CAPTION: zgomotul inductiv şi capacitiv introdus de un circuit de curent alternativ într-un circuit de curent continuu sensibil
[[../poze/02300.png]]

<p>Aparatul de măsură din stânga măsoară o tensiune de alimentare în curent cotinuu „curată”. După realizarea cuplajului cu circuitul de curent alternativ, prin inductanţa mutuală şi capacitatea parazită, tensiunea măsurată la bornele sarcinii prezintă un amestec de curent continuu şi curent alternativ, componenta alternativă fiind cea nedorită. În mod normale ne-am aştepta ca E<sub>sarcină</sub> să fie identică cu E<sub>sursă</sub> datorită datorită faptului că nu există întreruperi ale conductorilor de la sursă la sarcină, iar cele două seturi de câte două puncte ar trebui să fie comune din punct de vedere electric. Totuşi, amplitudinea zgomotului poate varia în diferite puncte ale sistemului de curent continuu.</p>

<p>Scopul nostru este de a preveni asfel de zgomote în circuitul de curent continuu, iar pentru aceasta este suficientă conectarea unui filtru trece-jos la ieşirea circuitului, înainte de sarcină, pentru blocarea oricăror semnale de cuplaj nedorite. Sub forma cea mai simplă, acest filtru nu este nimic mai mult decât un condensator conectat direct la bornele sarcinii, acesta prezentând o impedanţă foarte mică faţă de orice zgomot de curent alternativ. Un asfel de condensator poartă numele de <i>condensator de decuplare</i>.</p>

#+CAPTION: zgomotul inductiv şi capacitiv introdus de un circuit de curent alternativ într-un circuit de curent continuu sensibil; folosirea condensatorului de decuplare
[[../poze/02301.png]]

<p>Capacitatea unui condensator de decuplare este în mod normal în jurul valorii de 0.1 µF, sau peste, fiind capacitatea minimă necesară pentru producerea unei impedanţe suficient de mari pentru scurt-circuitarea oricărui zgomot.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Un filtru trece-jos permite trecerea semnalelor de frecvenţă joasă de la sursă spre sarcină, şi blochează semnalele de frecvenţe înalte</li>
	<li>Filtrele trece-jos inductive constau din introducerea unei bobine în serie cu sarcina, prin blocarea semnalelor de frecvenţe nedorite</li>
	<li>Filtrele trece-jos capacitive constau în introducerea unui rezistor în serie cu un condensator, ambele componente fiind conecate în paralel cu sarcina, prin scurt-circuitarea semnalelor de frecvenţe nedorite</li>
	<li>Frecvenţa de tăiere a unui filtru trece-jos este frecvenţa la care tensiune de ieşire este egală cu 70.7% din tensiunea de intrare. Peste acestă frecvenţa de tăiere, valoarea tensiunii de ieşire este sub 70.7% din tensiune de intrare, şi invers</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
