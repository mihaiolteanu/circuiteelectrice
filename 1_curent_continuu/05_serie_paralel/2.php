<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuite serie simple</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Circuite serie simple</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Să începem cu un circuit electric format dintr-o baterie şi trei rezistori:</p>

<img src="../poze/00087.png" alt="circuit serie"/>

<p>Primul principiu pe care trebuie să-l înţelegem legat de circuitele serie este păstrarea constantă a valorii curentului în întreg circuitul, şi prin urmare, prin fiecare component (prin fiecare component va trece aceeiaşi cantitate de curent electric). Acest lucru se datorează existenţei unei singurei căi pentru trecerea electronilor, iar dacă privim circuitul ca un tub cu bile, putem înţelege de ce rata de deplasare a bilelor trebuie să fie aceeiaşi în orice punct al tubului (circuitului).</p>

<p>După modul în care este aşezată bateria de 9 volţi în circuit, ne putem da seama că deplasarea electronilor se va realiza în sens invers acelor de ceasornic (atenţie, folosim sensul real de deplasare al electronilor în circuit), de la punctul 4 la 3, 2, 1 şi înapoi la 4. Totuşi, avem o singură sursa de tensiune şi trei rezistori. Cum putem aplica legea lui Ohm în acest caz?</p>

<p>Un principiu important de ţinut minte legat de legea lui Ohm, este relaţia dintre tensiune, curent şi a rezistenţă între aceleaşi două puncte din circuit. De exemplu, în cazul unei singure bateri şi a unui singur rezistor în circuit, putem calcula foarte uşor valorile circuitului, pentru că acestea se referă la aceleaşi două puncte din circuit:</p>

<p><img src="../poze/00088.png" alt="circuit serie"/></p>

<p><img src="../poze/10056.png" alt="relaţii matematice"/></p>

<p>Din moment ce punctele 1 şi 2 sunt conectate împreună printr-un fir de o rezistenţă neglijabilă (la fel şi punctele 3 şi 4), putem spune că punctele 1 şi 2 sunt comune, precum şi că punctele 3 şi 4 sunt comune între ele. De asemenea, ştim faptul că avem o tensiune electromotoare de 9 volţi între punctele 1 şi 4 (direct asupra bateriei), şi pentru că punctele 1 şi 2 cu punctele 3 şi 4 sunt comune, trebuie de asemenea să avem tot 9 volţi între punctele 2 şi 3 (direct asupra rezistorului). Prin urmare, putem aplica legea lui Ohm (I=E/R) asupra curentului prin rezistor, pentru că ştim tensiunea (E) la bornele rezistorului precum şi rezistenţa acestuia. Toţi termenii (E, I, R) se aplică în cazul aceloraşi două puncte din circuit, asupra aceluiaşi rezistor, prin urmare putem folosi legea lui Ohm fără nicio problemă.</p>

<p>Totuşi, în circuitele ce conţin mai mult de un singur rezistor, trebuie să fim atenţi cum aplicăm legea lui Ohm. În exemplul de jos cu trei rezistori în circuit, ştim că avem 9 volţi între punctele 1 şi 4, valoare reprezentând forţa electromotoare disponibilă pentru impingerea electronilor prin conexiunea serie realizată din rezistorii R<sub>1</sub>,R<sub>2</sub> şi R<sub>3</sub>. Nu putem însă împărţi cei 9 volţi la 3kΩ, 10kΩ sau 5kΩ pentru a găsi valoarea curentului, pentru că nu cunoaştem defapt valoarea tensiunii pe fiecare din rezistori în parte, cunoaştem valoarea tensiunii pe întreg ansamblul de rezistori doar.</p>

<img src="../poze/00087.png" alt="circuit serie"/>

<p>Valoarea de 9 volţi reprezintă o cantitate <i>totală</i> din circuit, pe când valorile de 3kΩ, 10kΩ şi 5kΩ, reprezintă cantităţi <i>individuale</i> din cadrul circuitului de faţă. Dacă ar să folosim în cadrul legii lui Ohm o valoare totală (tensiunea în acest caz) concomitent cu o valoare individuală (rezistenţa în acest caz), rezultatul nu va fi acelaşi pe care îl vom regăsi într-un circuit real.</p>

<p>În cazul lui R<sub>1</sub>, legea lui Ohm se va folosi specificând tensiunea şi curentul la bornele rezistorului R<sub>1</sub>, şi valoarea rezistenţei lui, 3kΩ:</p>

<img src="../poze/10057.png" alt="formula"/>

<p>Dar din moment ce nu cunoaştem tensiunea la bornele lui R<sub>1</sub> (doar tensiunea totală pe toţi cei trei rezistori conectaţi în serie), şi nu cunoaştem nici curentul prin R<sub>1</sub> (curentul prin întreg circuitul defapt, deci şi prin ceilalţi doi rezistori), nu putem realiza niciun calcul cu niciuna dintre formule. Acelaşi lucru este valabil şi pentru R<sub>2</sub> şi R<sub>3</sub>.</p>

<p>Prin urmare, ce putem face? Dacă am cunoaşte valoarea <i>totală</i> a rezistenţei din circuit, atunci am putea calcula valoarea <i>totală</i> a curentului pentru cantitatea <i>totală</i> a tensiunii (I=E/R).</p>

<p>Cu această observaţia putem enunţa al doilea principiu al circuitelor serie: în oricare circuit serie, rezistenţa totală a circuitului este egală cu suma rezistenţelor individuale a fiecărui rezistor, prin urmare, cu cât avem mai multe rezistenţe în circuit, cu atât mai greu le va fi electronilor să se deplaseze prin circuit. În exemplul nostru, aveam trei rezistori în serie, de 3 kΩ, 10 kΩ, respectiv 5 kΩ, ceea ce rezultă într-o rezistenţă totală de 18Ω:</p>

<img src="../poze/10058.png" alt="formula"/>

<p>Ceea ce am făcut de fapt, a fost să calculăm rezistenţa echivalentă a rezistenţelor de 3 kΩ, 10 kΩ şi 5 kΩ luate împreună. Cunoscând acest lucru, putem redesena circuitul cu un singur rezistor echivalent reprezentând combinaţia serie a celor trei rezistori R<sub>1</sub>, R<sub>2</sub> şi R<sub>3</sub>:</p>

<img src="../poze/00089.png" alt="formula"/>

<p>Acum avem toate informaţiile necesare pentru a calcula curentul prin circuit, deoarece aven tensiunea între punctele 1 şi 4 (9 volţi), precum şi rezistenţă între punctele 1 şi 4 (18kΩ):</p>

<img src="../poze/10059.png" alt="formula"/>

<p>Cunoscând faptul că prin fiecare component în cadrul unui circuit serie, curentul este acelaşi, şi cunoscând valoarea acelui curentu în cazul de faţă, putem merge înapoi la circuitul iniţial şi să notăm valoarea curentului prin fiecare component în parte:</p>

<img src="../poze/00090.png" alt="formula"/>

<p>Acum că valoarea curentului prin fiecare rezistor ne este cunoscută, putem folosi legea lui OHm pentru determinarea căderilor de tensiune pe fiecare component în parte:</p>

<img src="../poze/10060.png" alt="formula"/>

<p>Putem observa căderea te tensiune pe fiecare rezistor în parte şi faptul că suma acestor căderi de tensiune (1.5 V + 5 V + 2.5 V) este egală cu tensiunea la bornele bateriei, 9 V. Acesta reprezintă al treilea principiu al circuitelor serie: tensiune electromotoare (a bateriei) este egală cu suma căderilor de tensiune pe fiecare component în parte.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Într-un circuit serie, curentul este acelaşi prin fiecare component: I<sub>Total</sub> = I<sub>1</sub> = I<sub>2</sub> = . . . I<sub>n</sub>.</li>
	<li>Într-un circuit serie, rezistenţa totală este egală cu suma rezistenţelor individuale a tuturor rezistorilor din circuit: R<sub>Total</sub> = R<sub>1</sub> + R<sub>2</sub> + . . . R<sub>n</sub>.</li>
	<li>Într-un circuit serie, tensiunea totală este egală cu suma căderilor individuale de tensiune pe fiecare component în parte: E<sub>Total</sub> = E<sub>1</sub> + E<sub>2</sub> + . . . E<sub>n</sub>.</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>