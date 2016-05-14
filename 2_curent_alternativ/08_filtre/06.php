<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Filtre rezonante</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>6. Filtre rezonante</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Filtrele considerate până în acest moment au fost compuse exclusiv din condensatoare <i>sau</i> bobine, dar nu ambele tipuri de componente în acelaşi timp. Ştim că circuitele ce folosesc combinaţii de L şi C tind să rezoneze, iar această proprietate poate fi exploatată în construcţia filtrelor trece-bandă şi stop-bandă.</p>

<p>Circuitele LC serie prezintă o impedanţă minimă la rezonanţă, iar circuitele LC paralel impedanţă maximă la frecvenţa de rezonanţă. Există prin urmare două strategii de bază pentru construcţie filtrelor trece- respectiv stop-bandă.</p>

<h3>Filtrul trece-bandă rezonant</h3>

<p>Pentru acest tip de filtru, există două strategii: circuit LC serie sau LC paralel.</p>

<h4>Filtrul trece-bandă în configuraţie LC serie</h4>

#+CAPTION: filtrul trece-bandă rezonant în configuraţie LC serie
[[../poze/02124.png]]

<p>Circuitul LC serie permite trecerea semnalului la frecvenţa de rezonanţa (impedanţă mică - scurt-circuit), şi blochează toate celelalte frecvenţe (impedanţă mare - circuit deschis), asfel că acestea nu ajung la sarcină, după cum se poate vedea în diagramă.</p>

#+CAPTION: răspunsul în frecvenţa a filtrului trece-bandă rezonant în configuraţie LC serie; diagrama Bode
[[../poze/22033.png]]

<p>Putem observa că în cazul acestui tip de filtru, nu există practic nicio atenuare a semnalului în banda de trecere, asfel că tensiunea de ieşire pe rezistenţa de sarcină este aceeiaşi cu tensiunea de alimentare a sursei; acesta nu este şi cazul filtrelor construite exclusiv din condensatoare sau bobine. De asemenea, din moment ce principiul de funcţionare al filtrului se bazează pe principiul rezonanţei LC serie, frecvenţa de rezonanţă nefiind prin urmare afectată de valoarea rezistenţei prezentă în circuit, valoarea rezistenţei de sarcină nu va influenţa în niciun fel frecvenţa de trecere. Totuşi, diferite valori ale rezistenţei de sarcină vor duce la modificarea pantei diagramei Bode („selectivitatea” filtrului).</p>

<h4>Filtrul trece-bandă în configuraţie LC paralel</h4>

#+CAPTION: filtrul trece-bandă rezonant în configuraţie LC paralel
[[../poze/02125.png]]

<p>Circuitul LC paralel permite trecerea semnalului la frecvenţa de rezonanţa (impedanţă mare - circuit deschis) spre sarcină, şi blochează toate celelalte frecvenţe (impedanţă mică - scurt-sicircuit), căderea de tensiune regăsindu-se în marea ei parte pe R<sub>1</sub>, asfel că acestea nu ajung la sarcină, după cum se poate vedea în diagramă.</p>

#+CAPTION: răspunsul în frecvenţa a filtrului trece-bandă rezonant în configuraţie LC paralel; diagrama Bode
[[../poze/22034.png]]

<p>Acest tip de filtru rezonant, asemenea filtrelor trece-sus şi trece-jos, nu va putea transmite întreaga tensiune de la sursă spre sarcină datorită rezistorului conectat în serie ce va prelua tot timpul o parte din căderea de tensiune totală existentă în circuit.</p>

<p>Putem menţiona că acest tip de filtru trece-bandă rezonant este folosit pe scară largă în radiourile analogice, pentru selectarea unei anumite frecvenţe din cele recepţionate de antenă. Practic, se foloseşte un disc selector pentru alegerea postului de radio, disc ce modifică capacitatea unui condensator variabil dintr-un circuit LC paralel.</p>

<h3>Filtrul stop-bandă rezonant</h3>

<p>Din nou, avem două strategii la dispoziţie, circuitul LC serie sau LC paralel.</p>

<h4>Filtrul stop-bandă rezonant în configuraţie LC serie</h4>

#+CAPTION: filtrul stop-bandă rezonant în configuraţie LC serie
[[../poze/02126.png]]

<p>Folosit în această combinaţie, filtrul LC prezintă o impedanţă foarte scăzută faţă de semnal, la frecvenţa de rezonaţă, întreaga cădere de tensiune regăsindu-se pe rezistorul R<sub>1</sub>, iar semnalul nu este asfel „văzut” de sarcină.</p>

#+CAPTION: răspunsul în frecvenţa a filtrului stop-bandă rezonant în configuraţie LC serie; diagrama Bode
[[../poze/22035.png]]

<h4>Filtrul stop-bandă rezonant în configuraţie LC paralel</h4>

#+CAPTION: filtrul stop-bandă rezonant în configuraţie LC paralel
[[../poze/02126.png]]

<p>Coponentele LC conectate în paralel prezintă o impedanţă mare la frecvenţa de rezonanţă, blocând asfel semnalele de la sursa spre sarcină, la frecvenţa respectivă, şi permite trecerea tuturor celorlalte semnale (alte frecvenţe decăt cea de rezonanţă) de la sursă spre sarcină.</p>

#+CAPTION: răspunsul în frecvenţa a filtrului stop-bandă rezonant în configuraţie LC paralel; diagrama Bode
[[../poze/22036.png]]

<p>Din nou se poate observa faptul că absenţa unui rezistor serie duce la o atenuare minimă a semnalelor dorite. Amplitudinea semnalului la frecvenţa de trecere, pe de altă parte, este foarte mică. Cu alte cuvinte, acesta este un filtru foarte „selectiv”.</p>

<p>În toate aceste circuite de filtrare rezonante, selectivitatea depinde în mare măsură de „puritatea” bobinelor şi a condensatoarelor utilizate. În cazul în care există o rezistenţă parazită, aceasta va afecta abilitatea filtrului de discriminare precisă a frecvenţelor, şi este posibilă introducerea efectelor antirezonante ce afectează frecvenţele de trecere.</p>

<h3>Filtre trece-jos şi trece-sus rezonante</h3>

<p>După ce am analizat filtrele standard RC şi LC trece-jos şi trece-sus, ne-am putea imagina că se poate realiza o proiectare mai eficientă a acestor tipuri de filtre combinând efectele condensatoarelor şi a bobinelor în acelaşi circuit.</p>

<h4>Filtru trece-jos capacitiv-inductiv</h4>

<p>Bobinele ar trebui să blocheze trecerea frecvenţelor înalte, iar condensatorul ar trebui să blocheze şi el trecerea aceloraşi frecvenţe, efectele lor combinate permiţând doar trecerea semnalelor de frecvenţă joasă de la sursă spre sarcină.</p>

#+CAPTION: filtrul trece-jos LC
[[../poze/02128.png]]

<p>La prima vedere, aceasta pare o strategie bună, şi elimină rezistorul serie. Totuşi, trebuie realizat faptul că orice combinaţie condensator-bobină poate duce la efecte rezonante la o anumită frecvenţă, iar acesta nu este un lucru de dorit. Să urmărim răspunsul în frecvenţă a filtrului de mai sus, pe rezistenţa de sarcină (R<sub>sarcină</sub>):</p>

#+CAPTION: răspunsul în frecvenţa a filtrului trece-jos LC; diagrama Bode
[[../poze/22037.png]]

<p>Ceea ce a fost gândit ca un filtru trece-jos s-a dovedit a fi un filtru trece bandă cu o frecvenţă de trecere în jurul valorii de 526 Hz, frecvenţa de rezonantă a condensatorului şi a bobinei în acest caz.</p>

<p>Problema este că impedanţa de intrare şi impedanţa de ieşire a filtrului LC trebuie să fie egală. Cu alte cuvinte, impedanţa sursei de alimentare trebuie să fie egală cu impedanţa de intrare a filtrului, iar impedanţa de ieşire a filtrului trebuie să fie egală cu impedanţa sarcinii (R<sub>sarcină</sub>) pentru ca răspunsul filtrului să fie cel aşteptat. Impedanţa de intrare şi de ieşire a filtrului este radăcina pătrată a raportului dintre L şi C:</p>

<p><b>Z = (L/C)<sup>1/2</sup>)</b></p>

<p>Folosind valorile componentelor de pe circuit, putem afla impedanţa filtrului şi impedanţele sursei şi a sarcinii necesare.</p>

<p><b>Pentru L = 100 mH, C= 1µF</b></p>
<p><b>Z = (L/C)<sup>1/2</sup>=((100 mH)/(1 µF))<sup>1/2</sup> = 316 Ω</b></p>

<p>Asfel, în circuitul de mai sus putem adăuga rezistorul R<sub>g</sub> de 316 Ω în serie cu sursa de tensiune şi modificăm R<sub>sarcină</sub> de la 1.000 Ω la 316 Ω. Dacă ar fi fost necesară alimentarea unei sarcini de 1.000 Ω, am fi putut modifica raportul L/C pentru a păstra egalitatea faţă de sarcină.</p>

#+CAPTION: răspunsul în frecvenţa a filtrului trece-jos LC cu impedanţele de intrare şi ieşire egalate; diagrama Bode
[[../poze/02517.png]]

<p>Răspunsul în frecvenţă al filtrului arată de data aceasta mult mai bine:</p>

#+CAPTION: răspunsul în frecvenţa a filtrului trece-jos LC cu impedanţele de intrare şi ieşire egalate; diagrama Bode
[[../poze/22056.png]]

<p class="sumar">Sumar:</p>
<ul>
	<li>Filtrele trece-jos, trece-sus, trece-bandă sau stop-bandă pot fi proiectate utlizând combinaţii rezonante de condensatori şi bobine fără a fi necesară conectarea rezistorilor ce doar ar „împiedica” trecere frecvenţelor dorite dinstre sursă spre sarcină</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
