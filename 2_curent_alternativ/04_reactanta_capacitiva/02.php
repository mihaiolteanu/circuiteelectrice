<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuite pur capacitive</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Circuite pur capacitive</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Comportamentul condensatoarelor este diferit faţă de cel al rezistorilor. Pe când rezistorii opun o rezistenţă direct proporţională cu căderea de tensiune în faţă curgerii curentului, condensatoarele se opun <i>variaţiei</i> de tensiune absorbând (încărcare) sau eliberând (descărcare) curent în circuit. Curgerea curentului „prin” condensator este direct proporţională cu <i>rata de variaţie</i> a tensiunii la bornele acestuia. Această opoziţie în calea variaţiei tensiunii este o altă formă de <i>reactanţă</i>, opusă însă reactanţei bobinei.</p>

<p>Matematic, relaţia dintre curentul condensatorului şi rata de variaţie a tensiunii la bornele acestuia, se exprimă asfel:</p>

#+CAPTION: expresia matematică a relaţiei dintre curentul condensatorului şi rata de variaţie a tensiunii la bornele acestuia
[[../poze/12041.png]]

<p>Expresia <i>de/dt</i> exprimă rata de variaţie a tensiunii instantanee (e) în raport cu timpul, calculată în volţi per secundă. Capacitatea (C) este în Farazi, iar curentul instantaneu (i) în Amperi. O exprimare echivalentă este şi dv/dt, folosind „v” în loc de „e” pentru exprimarea tensiunii; cele două notaţii sunt însă echivalente. Să analizăm un circuit simpul pur capacitiv:</p>

#+CAPTION: circuit electric pur capacitiv şi diagrama fazorială
[[../poze/02068.png]]

<p>În circuitul de mai sus, tensiunea este defazată în urma curentului cu 90<sup>o</sup>. Graficul celor două forme de undă arată asfel:</p>

#+CAPTION: graficul formelor de undă pentru un circuit electric pur capacitiv
[[../poze/02069.png]]

<p>Reţineti, curentul printr-un condensator este rezultatul variaţiei tensiunii la bornele acestuia. Prin urmare, curentu instantaneu este zero atunci când tensiunea instantanee este la valoarea sa maximă, pozitivă sau negativă, reprezentând variaţie zero sau pantă zero; curentul instantaneu are valoarea maximă atunci când tensiunea instantanee are variaţia maximă, adică zona în care variaţia este maximă (intersecţia cu axa orizontală a timpului). Rezultă o undă a tensiunii defazată cu -90<sup>o</sup> faţă de curent. Dacă ne uităm pe grafic, curentul pare să aibe un „avantaj” faţă de tensiune; curentul este defazat înaintea tensiunii, sau echivalent, tensiunea este defazată în urma curentului.</p>

#+CAPTION: graficul explicat al formelor de undă pentru un circuit electric pur capacitiv
[[../poze/02070.png]]

<p>Forma de undă pentru putere este asemănătoare celei existente în cazul circuitului pur inductiv:</p>

#+CAPTION: graficul formelor de undă pentru un circuit electric pur capacitiv
[[../poze/02071.png]]

<p>Defazajul de 90<sup>o</sup> dintre curent şi tensiune duce la o formă a undei de putere ce alternează în mod egal între pozitiv şi negativ. Aceast lucru înseamnă că nu există pierdere de putere (nu se disipă putere) pe condensator ca urmare a variaţiei tensiunii; acesta doar absoarbe putere şi apoi o eliberează din şi înspre circuit, în mod alternativ.</p>

<p>Opoziţia condensatorului la variaţia tensiunii se traduce printr-o opoziţia faţă de tensiunea alternativă în general, care prin definiţie îşi modifică tot timpul amplitudinea instantanee şi direcţia. Oricare ar fi amplitudinea tensiunii alternative pentru o anumită frecvenţă, un condensator va „conduce” o anumită valoare a curentului alternativ. La fel ca în cazul rezistorilor, unde curentul este o funcţie de tensiune la bornele acestuia şi rezistenţa sa, curentul alternativ printr-un condensator este o funcţie de tensiune la bornele sale şi <i>reactanţa</i> oferită de acesta. Ca şi în cazul bobinelor, reactanţa este exprimată în ohmi, iar simbolul este X (sau mai exact, X<sub>C</sub> - reactanţa capacitivă).</p>

<p>Din moment ce condensatoarele „conduc” curent în proporţie directă cu variaţia tensiunii, acestea vor conduce mai mult curent cu cât variaţia tensiunii este mai mare (durata de încărcare şi descărcare la valorile de vârf este mai mică), şi mai puţin cu cât variaţia tensiunii este mai mică. Acest lucru înseamnă că reactanţă condensatoarelor este <i>invers</i> proporţională cu frecvenţă curentului alternativ.</p>

#+CAPTION: formula de calcul a reactanţei capacitive
[[../poze/12042.png]]

<p>Reactanţă unui condensator de 100 &#181;F:</p>
<table border="1">
	<tr>
		<th>Frecvenţa (Hertz)</th>
		<th>Reactance (Ohm)</th>
	</tr>
	<tr>
		<td>60</td>
		<td>26.5258</td>
	</tr>
	<tr>
		<td>120</td>
		<td>13.2629</td>
	</tr>
	<tr>
		<td>2500</td>
		<td>0.6366 </td>
	</tr>
</table>

<p>De observat că relaţia dintre reactanţa capacitivă şi frecvenţă este exact opusă faţă de cea a reactanţei inductive. Reactanţa capacitivă scade odată cu creşterea frecvenţei curentului alternativ, şi invers. Bobinele se opun variaţiei curentului prin producerea unor căderi de tensiune mai mari; condensatoarele se opun variaţiei tensiunii prin trecerea unor curenţi mai mari prin aceştia.</p>

<p>Termenul 2πf poate fi înlocuit cu litera grecească Omega (ω), viteza unghiulară a circuitului de curent alternativ. Asfel, ecuaţia X<sub>C</sub> = 1/(2πfC) devine X<sub>C</sub> = 1/(ωC), unde ω se exprimă în radiani pe secundă.</p>

<p>Curentul alternativ într-un circuit pur capacitiv este egal cu raportul dintre tensiune şi reactanţă capacitivă. Să luăm ca şi exemplu următorul circuit:</p>

#+CAPTION: circuit capacitiv simplu
[[../poze/02072.png]]
#+CAPTION: calcularea curentului într-un circuit pur capacitiv
[[../poze/12043.png]]

<p>Totuşi, trebuie să ne reamintim faptul că tensiunea şi curentul nu sunt în fază în acest caz, curentul fiind defazat cu +90<sup>o</sup> faţă de tensiune. Dacă reprezentăm unghiul de fază al tensiunii şi al curentului sub formă matematică, putem calcula unghiul de fază al opoziţiei reactive a condensatorului faţă de curent:</p>

#+CAPTION: calcularea opoziţiei condensatorului faţă de curent într-un circuit pur capacitiv
[[../poze/12044.png]]

#+CAPTION: circuit capacitiv simplu - diagrama fazorială
[[../poze/02073.png]]

<p class="sumar">Sumar:</p>
<ul>
	<li>Reactanţa capacitiva reprezintă opoziţia condensatorului faţă de curentul alternativ datorită modului său „defazat” de stocare şi eliberare a energiei sub forma câmpului electric </li>
	<li>Reactanţa capacitivă poate fi calculată folosind formula X<sub>C</sub> = 1/(2πfC)</li>
	<li>Reactanţă capacitivă scade odată cu creşterea frecvenţei. Cu alte cuvinte, cu cât frecvenţa este mai mare, cu atât opoziţia faţa de curent este mai mică (cu atât conduce mai bine)</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
