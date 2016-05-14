<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Relaţia dintre tensiune, curent şi rezistenţă</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Relaţia dintre tensiune, curent şi rezistenţă</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Un circuit electric este format atunci când este construit un drum prin care electronii se pot deplasa continuu. Această mişcare continuă de electroni prin firele unui circuit poartă numele <i>curent</i>, şi adeseori este denimită „curgere”, la fel precum curgerea lichidului dintr-o ţeavă.</p>

<p>Forţa ce menţine „curgerea” electronilor prin circuit poartă numele de <i>tensiune</i>. Tensiunea este o mărime specifică a energiei potenţiale ce este tot timpul relativă între două puncte. Atunci când vorbim despre o anumită cantitate de tensiune prezentă într-un circuit, ne referim la cantiatea de energie <i>potenţială</i> existentă pentru deplasarea electronilor dintr-un punct al circuitului într-altul. Fără a face referinţa la <i>două</i> puncte distincte, termenul de „tensiune” nu are sens.</p>

<p>Electronii liberi tind să se deplaseze prin conductoare cu o anumită rezistenţă sau opoziţie la mişcare din partea acestora. Această opoziţia poartă numele de <i>rezistenţă</i>. Cantitatea de curent disponibilă într-un circuit depinde de cantitatea de tensiune disponibilă pentru a împinge electronii, dar şi de cantitatea de rezistenţă prezentă în circuit. Ca şi în cazul tensiunii, rezistenţa este o cantitate ce se măsoară între două puncte distincte. Din acest motiv, se folosesc termenii de „între” sau „la bornele” cand vorbim de tensiunea sau rezistenţă dintre două puncte ale unui circuit.</p>

<p>Pentru a putea vorbi concret despre valorile acestor mărimi într-un circuit, trebuie să putem descrie aceste cantităţi în acelaşi mod în care măsurăm temperatura, masa, distanţă sau oricare altă mărime fizică. Pentru masă, putem folosi „kilogramul” sau „gramul”. Pentru temperatură, putem folosi grade Fahrenheit sau grade Celsius. În următorul tabel avem unităţile de măsură standard pentru curentul electric, tensiune electrică şi rezistenţă:</p>

<table border="1">
	<tr>
		<th>Mărime</th>
		<th>Simbol</th>
		<th>Unitate de măsură</th>
		<th>Prescurtare</th>
	</tr>
	<tr>
		<td>Curent</td>
		<td>I</td>
		<td>Amper</td>
		<td>A</td>
	</tr>
	<tr>
		<td>Tensiune</td>
		<td>E <i>sau</i> V</td>
		<td>Volt</td>
		<td>V</td>
	</tr>
	<tr>
		<td>Rezistenţă</td>
		<td>R</td>
		<td>Ohm</td>
		<td>Ω</td>
	</tr>
</table> 

<p>„Simbolul” pentru fiecare mărime este litera din alfabet folosită pentru reprezentarea mărimii respective într-o ecuaţie algebrică. Asfel de litere standard sunt folosite adesea în discipline precum fizica şi ingineria, şi sunt recunoscute la nivel internaţional. „Unitatea de măsură” pentru fiecare cantitate reprezintă simbolul alfabetic folosit pentru a prescurta notaţia respectivei unităţi de măsură. </p>

<p>Fiecare unitate de măsură poartă numele unei personalităţi importante din domeniul electricităţii: <i>amper</i>-ul după Andre M. Ampere, <i>volt</i>-ul după Alessandro Volta, şi <i>ohm</i>-ul după Georg Simon Ohm.</p>

<p>Toate aceste valori sunt exprimate cu litere de tipar, exceptând cazurile în care o mărime (în special tensiunea sau curentul) este exprimată în funcţie de o durată scurtă de timp (numită valoarea „instantanee”). De exemplu, tensiunea unei baterii, fiind stabilă pe o perioadă lungă de timp, va fi simbolizată prin „E”, pe când tensiunea maximă atinsă de un fulger în momentul lovirii unei linii electrice va fi simbolizată cu litere mici, „e” (sau „v”) pentru a desemna această valoara ca existantă într-un anumit moment în timp. Aceeiaşi convenţie se foloseşte şi în cazul curentului, litera „i” fiind folosită pentru a reprezenta curentul instantaneu. Majoritatea mărimilor din curent continuu, fiind constante de-a lungul timpului, vor fi simbolizate cu litere mari (de tipar).</p>

<p>O mărime de bază în măsurătorile electrice, predată adesea la începutul cursurilor de electronică dar nefolosită mai târziu, este <i>coulomb</i>-ul, mărimea sarcinii electrice proporţională cu numărul de electroni în stare de dezechilibru. O sarcină de un coulomb este egală cu 6,25x10<sup>18</sup> electroni. Simbolul mărimii sarcinii electrice este litera „Q”, iar unitatea de măsura, coulombul, este abreviata prin „C”. Vedem prin urmare faptul că unitate de măsură pentru deplasarea electronilor, amperul, este egal cu o cantitate de electroni egală cu 1 coulomb ce se deplasează printr-un punct al circuitului într-un interval de 1 secundă. Pe scurt, curentul este <i>gradul de deplasare al sarcinii electrice</i> printr-un conductor.</p>

<p>După cum am mai spus, tensiunea este mărimea <i>energiei potenţiale pe unitatea de sarcină</i> disponibilă pentru motivarea electronilor dintr-un punct în altul. Înainte de a putea da o definiţie exactă a „volt”-ului, trebuie să înţelegem cum putem măsura această cantitate pe care o numim „energie potenţială”. Unitatea generală pentru orice tip de energie este <i>joule</i>-ul, egal cu lucrul mecanic efectuat de o forţă de 1 newton pentru a deplasa un corp pe o distanţă de 1 metru. Definit prin aceşti termeni ştiinţifici, 1 volt este egal cu o energie electrică potenţială de 1 joule pe (împărţit la) o sarcină electrică de 1 coulomb. Asfel, o baterie de 9 volţi eliberează o energie de 9 jouli pentru fiecare coulomb de electroni ce se deplasează prin circuit.</p>

<p>Aceste simboluri şi unităţi pentru mărimile electrice vor fi foarte importante atunci atunci când vom începe să folosim relaţiile dintre ele în cadrul circuitelor. Prima, şi poate cea mai importantă, este relaţia dintre curent, tensiune şi rezistenţă, legea lui Ohm, descoperită de Georg Simon Ohm şi publicată în 1827 în lucrarea <i>Die galvanishe Kette, mathematisch berabeitet</i> (Analiza matematică a circuitului galvanic). Principala descoperire a lui Ohm a fost că, cantitatea de curent printr-un conductor metalic într-un circuit este direct proporţională cu tensiunea aplica asupra sa, oricare ar fi temperatura, lucru exprimat printr-o ecuaţie simplă ce descrie relaţie dintre tensiune, curent şi rezistenţă:</p>

#+CAPTION: formulă matematică
[[../poze/10002.png]]

<p>În această expresie algebrică, tensiunea(E) este egală cu, curentul(I) înmulţit cu rezistenţa(R). Această formulă poate fi rescrisă sub următoarele forme, în funcţie de I:</p>

#+CAPTION: formulă matematică
[[../poze/10003.png]]

<p>Să folosim acum aceste ecuaţii pentru a analiza circuitele simple:</p>

#+CAPTION: circuit simplu: baterie plus bec
[[../poze/00032.png]]

<p>În circuitul de mai sus, există doar o singură sursă de tensiune (bateria), şi doar o singură rezistenţă (becul, neglijând rezistenţa datorată conductorilor). În această situaţie legea lui Ohm se poate aplica foarte uşor. În cazul în care cunoaştem două din cele trei variabile (tensiune, curent şi rezistenţă) din acest circuit, putem folosi legea lui Ohm pentru determinarea celei de a treia.</p>

<p>În acest prim exemplu, vom calcula cantitatea de curent (I) dintr-un circuit, atunci când cunoaştem valorile tensiunii (E) şi a rezistenţei (R):</p>

#+CAPTION: aflarea curentului într-un circuit simplu, atunci când cunoaştem tensiunea şi rezistenţa folosind legea lui Ohm
[[../poze/00033.png]]

<p>Care este valoarea curentului (I) din acest circuit?</p>

#+CAPTION: calcule matematice
[[../poze/10004.png]]

<p>În al doilea exemplu, vom calcula valoarea rezistenţei (R) într-un circuit, atunci când cunoaştem valorile tensiunii (E) şi a curentului (I):</p>

#+CAPTION: aflarea rezistenţei într-un circuit simplu, atunci când cunoaştem tensiunea şi curentul folosind legea lui Ohm
[[../poze/00034.png]]

<p>Care este valoarea rezistenţei becului în acest caz?</p>

#+CAPTION: calcule matematice
[[../poze/10005.png]]

<p>În ultimul exemplu, vom calcula valoarea tensiunii generate de baterie (E), atunci când cunoaştem valoarea curentului (I) şi a rezistenţei (R):</p>

#+CAPTION: aflarea tensiunii generate de baterie într-un circuit simplu, atunci când cunoaştem rezistenţa şi curentul folosind legea lui Ohm
[[../poze/00035.png]]

<p>Care este valoarea tensiunii generate de baterie?</p>

#+CAPTION: calcule matematice
[[../poze/10006.png]]

<p class="sumar">Sumar:</p>
<ul>
	<li>Tensiunea se măsoară în <i>volţi</i> şi este simbolizată prin „E” sau „V”</li>
	<li>Curentul se măsoară în <i>amperi</i> şi este simbolizat prin „I”</li>
	<li>Rezistenţa se măsoară în <i>ohmi</i> şi este simbolizată prin „R”</li>
	<li>Legea lui Ohm: E = IR; I = E/R; R = E/I</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
