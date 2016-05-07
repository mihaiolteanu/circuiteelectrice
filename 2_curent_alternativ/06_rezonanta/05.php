<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Rezonanţa serie-paralel. Antirezonanţa</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Rezonanţa serie-paralel. Antirezonanţa</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>În circuitele reactive simple fără rezistenţă (sau rezistenţă foarte mică), efectele impedanţelor la frecvenţa de rezonanţă vor fi cele prezise de ecuaţia acesteia. Într-un circuit LC serie, aceasta înseamnă impedanţă infinită. În circuitele LC serie, înseamnă impedanţă zero (la rezonanţă).</p>

<p><img src="../poze/12091.png" alt="formula de calcul a frecvenţei de rezonanţă între bobină şi condensator"/></p>

<p>Totuşi, dacă începem să introducem rezistenţă în circuitele LC, această formulă de calcul pentru rezonanţă nu mai este utilizabilă. Vom luat câteva circuite LC ca şi exemplu, folosind aceleaşi valori pentru capacitate şi inductanţă ca şi înainte: 10 µF şi 100 mH. Frecvenţa de rezonanţă, potrivit formulei, ar trebui să fie 159.155 Hz, dar să vedem ce se întâmplă atunci când introducem un rezistor în circuit:</p>

<h3>Circuit LC paralel; rezistor în serie cu bobina</h3>

<p><img src="../poze/02102.png" alt="circuit LC paralel; rezistor serie cu bobina"/></p>

<p><img src="../poze/22008.png" alt="circuit LC paralel; rezistor serie cu bobina; graficul variaţiei curentului cu frecvenţa"/></p>

<p>Rezistorul conectat în paralel cu bobina produce un curent minim, ce nu este zero, la frecvenţa de 136.8 Hz, şi nu la 159.2 Hz, valoarea calculată.</p>

<h3>Circuit LC paralel; condensatorul în serie cu rezistorul</h3>

<p><img src="../poze/02103.png" alt="circuit LC paralel; rezistor serie cu condensatorul"/></p>

<p><img src="../poze/22009.png" alt="circuit LC paralel; rezistor serie cu condensatorul; graficul variaţiei curentului cu frecvenţa"/></p>

<p>Curentul minim în acest caz este la frecvenţa de 180 Hz, nu la 159.2.</p>

<h3>Circuit LC serie; rezistor paralel cu bobina</h3>

<p>Întorcându-ne la circuitul LC serie, vom conecta o rezistenţă în paralel cu bobina. În circuitul de mai jos, rezistorul R<sub>1</sub> de 1 Ω este conectat în serie cu bobina şi condensatorul pentru limitarea curentului total prin circuit la rezonanţă. Rezistorul „extra” pe care îl introducem în circuit pentru influenţarea frecvenţei de rezonanţă este rezistorul R<sub>2</sub> de 100 Ω:</p>

<p><img src="../poze/02104.png" alt="circuit LC serie; rezistor paralel cu bobina"/></p>

<p><img src="../poze/22010.png" alt="circuit LC serie; rezistor paralel cu bobina; graficul variaţiei curentului cu frecvenţa"/></p>

<p>Circuitul rezonant serie (LC) cu un rezistor conectat în paralel cu bobina, prezintă un curent maxim la o frecvenţă de 180 Hz, faţă de 159.2.</p>

<h3>Circuit LC serie; rezistor paralel cu condensatorul</h3>

<p><img src="../poze/02105.png" alt="circuit LC serie; rezistor paralel cu condensatorul"/></p>

<p><img src="../poze/22011.png" alt="circuit LC serie; rezistor paralel cu condensatorul; graficul variaţiei curentului cu frecvenţa"/></p>

<p>Şi în acest caz, curentul maxim prin circuit nu se mai produce la frecvenţa de 159.2 Hz, ci la 136.8 Hz.</p>

<h3>Antirezonanţa</h3>

<p>Tendinţa rezistenţei de modificare a punctului în care impedanţa atinge maximul sau minimul într-un circuit LC, poartă numel de <i>antirezonanţă</i>.</p> 

<p>Din nou, efectele de mai sus ilustrează natura complementară a condensatoarelor şi a bobinelor: rezistenţa serie cu unul dintre ele crează un efect de antirezonanţă echivalent cu rezistenţa paralel cu celălalt. Dacă ne uităm şi mai atent la graficele de mai sus, putem observa că frecvenţele de rezonanţă sunt modificate cu aceeiaşi valoare, iar forma graficelor complementare sunt în oglindă!</p>

<p>Nu este foarte greu să adăugăm o rezistenţă într-un circuit LC, dar, deşi confecţionarea condensatorilor cu rezistenţe neglijabile, este posibilă, bobinele suferă la acest capitol; rezistenţele lor sunt mari datorită lungimilor conductorilor folosiţi la confecţionarea acestora. Mai mult decât atât, rezistenţa conductorilor tinde să crească odată cu creşterea frecvenţei de funcţionare, datorită <i>efectului pelicular</i>, efect ce se manifestă prin excluderea deplasării curentului alternativ prin centrul conductorului, reducând prin urmare secţiunea transversală a firului şi mărind asfel rezistenţa sa. Asfel, bobinele nu doar că au rezistenţă, dar au o rezistenţă variabilă, dependentă de frecvenţă.</p>

<p>Pe lângă asta, bobinele se mai confruntă şi cu pierderi, datorită miezurilor de fier folosite, efect cunoscut sub numele de <i>curenţi turbionari</i>.</p>

<h3>Circuit RLC serie</h3>

<p>O excepţie de la regula conform cărei o rezistenţă adiţională într-un circuit LC modifică valoarea rezistenţei de rezonanţă, este circuitul RLC serie. Atâta timp cât toate componentele sunt conectate în serie, frecvenţa de rezonanţă nu va fi afectată de rezistenţa în plus introdusă în circuit. Graficul variaţiei curentului în funcţie de frecvenţă este prezentat mai jos:</p>

<p><img src="../poze/02106.png" alt="circuit RLC serie; frecvenţa de rezonanţă nu este afectată de introducerea unei rezistenţe în serie"/></p>

<p><img src="../poze/22012.png" alt="circuit RLC serie; graficul variaţiei curentului cu frecvenţa"/></p>

<p>Valoarea curentului maxim este din nou atinsă pentru frecvenţa de 159.2 Hz!</p>

<h3>Aplicaţiile antirezonanţei</h3>

<p>Este bine de ştiu că antirezonanţa are un efect de amortizare (atenuare) a oscilaţiilor circuitelor pur LC, precum cele paralel. La începutul acestui capitol am observat cum un condensator şî o bobină conectate direct împreună se comportă precum un pendul, schimbând tensiune şi curent între ele precum un pendul schimbă energia potenţială cu cea cinetică, alternatov. Într-un circuit oscilator perfect (rezistenţă zero), această oscilaţie poate continua la infinit, la fel ca în cazul unui pendul fără frecări, ce ar putea oscila la infinit la frecvenţa sa de rezonanţă. Dar aceste dispozitive fără frecare sunt foarte greu de găsit în realitate, şi la fel este şi cazul circuitelor oscilatoare. Pierderea de energie prin rezistenţă (sau alte tipuri de pierdere) într-un circuit LC va duce la atenuarea amplitudinii oscilaţiilor până acestea se „sting”. Dacă într-un circuit oscilator, există suficiente pierderi de energie, acesta nu va rezona deloc.</p>

<p>Efectul de antirezonanţă este mai mult decât o simplă curiozitate: poate fi extrem de utilă la eliminarea oscilaţiilor <i>nedorite</i> din circuitele ce conţin inductanţe sau capacităţi parazite, precum este cazul majorităţii circuitelor. Să luăm ca şi exemplu următorul circuit, al cărei constantă de timp este L/R:</p>

<p><img src="../poze/02107.png" alt="circuit electric cu constanta de timp L/R"/></p>

<p>Idea acestui circuit este simplă: încărcarea bobinei atunci când întrerupătorul este închis. Rata (viteza) de încărcare a bobine depinde de raportul L/R, cunoscut sub numele de constante de timp al circuitului, măsurată în secunde. Totuşi, dacă ar fi să construim fizic un asfel de circuit, am descoperi oscilaţii neaşteptate a tensiunii la bornele bobine atunci când întrerupătorul este închis. De ce se întâmplă acest lucru? Nu există niciun condensator în circuit, prin urmare, cum putem avea oscilaţie rezonantă folosind doar o bobină, un rezistor şi o baterie?</p>

<p><img src="../poze/02108.png" alt="circuit electric cu constanta de timp L/R; forma reală şi forma ideală a undei L/R"/></p>

<p>Toate bobinele prezintă o anumită capacitate parazită datorită modului de realizare a înfăşurărilor. De asemenea, conductorii folosiţi pentru realizarea circuitului, prezintă şi ei o anumită capacitate parazită. Cu toate că proiectarea „curată” a circuitelor electrice elimină mare parte dintre aceste capacităţi parazite, aceasta nu poate fi niciodată eliminată integral. Dacă acest lucru cauzează probleme de rezonanţă (oscilaţii nedorite), un mod de combatere al acestui efect este prin adăugarea rezistenţelor. Dacă un rezistor, R, este suficient de mare, acesta va duce la o situaţie de antirezonanţă, disipând suficientă energie pentru anularea, sau diminuarea efectelor oscilaţiei datorate combinaţiei dintre inductanţă şi capacităţile parazite.</p>

<p>Este interesant de menţionat faptul că, principiul utilizării rezistenţei pentru eliminarea efectelor nedorite ale rezonanţei este des folosit în conceperea sistemlor mecanice, unde orice obiect aflat în mişcare reprezintă un potenţial rezonator. O aplicaţie extrem de des întâlnită este folosirea amortizoarelor la automobile. Fără amortizoare, automobilele ar vibra necontrolat la frecvenţa de rezonanţă, atunci când ar întâlni o denivelare în asfalt, de exemplu. Rolul amortizorului este de a introduce un efect antirezonant puterni prin disiparea energiei pe cale hidraulică, în acelaşi fel în care un rezistor disipă energie pe cale electrică.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Adaugarea unei rezistenţe într-un circuit LC poate duce efectul de <i>antirezonanţă</i>, unde efectele de vârf ale impedanţei au loc la o frecvenţă diferită faţă de frecvenţa de rezonanţă iniţială</li>
	<li>Rezistenţa prezentă în bobinele reale poate contribui în mare măsură la apariţia antirezonanţei. O sursă a unei asfel de rezistenţe este efectul pelicular.</li>
	<li>Într-un circuit RLC serie, rezistenţa adiţională în circuit <i>nu</i> produce antirezonanţă.</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>