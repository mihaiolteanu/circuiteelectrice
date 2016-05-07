<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Principiul de funcţionare</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Principiul de funcţionare</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p><i>Dioda</i> este un dispozitiv electric ce permite trecerea curentului doar într-o singură direcţie. Cea mai folosită diodă în circuitele electrice este cea <i>semiconductoare</i>, deşi există şi alte tehnologii (vezi fizica dispozitivelor semiconductoare!). Simbolul diodelor semiconductoare este prezentat în figura de mai jos (săgeţile indică deplasarea reală a electronilor prin diodă):</p>

<p><img src="../poze/03246.png" alt="simbolul schematic al diodei semiconductoare: săgeţile indică direcţia de deplasare a electronilor"/></p>

<p>La conectarea într-un circuit simplu, format dintr-o baterie şi o lampă, dioda fie va permite trecerea curentului spre lampă, fie o va bloca, în funcţie de polaritatea tensiunii aplicate.</p>

<p><img src="../poze/03247.png" alt="modul de funcţionare al diodei: (a) polarizarea directă a diodei - trecerea curentului este permisă; (b) dioda este polarizată invers - trecerea curentului este blocată"/></p>

<p>Atunci când polaritatea bateriei este asfel încât este permisă trecerea electronilor prin diodă, spunem că dioda este <i>polarizată direct</i>. Invers, când trecerea electronilor este blocată datorită inversării bateriei, spunem că dioda este <i>polarizată invers</i>. Putem să ne gândim la diodă ca la un întrerupător: „închisă”, când este polarizată şî „deschisă” când este polarizată invers.</p>

<p>Comportamentul diodei este analog comportamentului dispozitivului hidraulic denumit <i>supapă de închidere</i>. O supapă de închidere permite trecerea fluidului doar într-o singură direcţie:</p>

<p><img src="../poze/03248.png" alt="analogie dintre o diodă şi o supapă de închidere hidraulică: (a) supapa este deschisă şi permite trecerea fluidului; (b) supapa este blocată şi nu permite trecerea fluidului"/></p>

<p>Supapele de închidere sunt de fapt dispozitive controlate cu ajutorul presiunii: acestea se deschid şi permit trecerea fluidului dacă „polaritatea” presiunii pe suprafaţă lor este corectă. Dacă „polaritatea” presiunii este de sens contrar, diferenţa de presiune pe suprafaţa valvei va duce la închiderea acesteia, iar curgerea fluidului nu mai este posibilă.</p>

<p>Acelaşi lucru este valabil şi în cazul diodelor, doar ca în acest caz presiunea este reprezentată de tensiune. Să reluăm circuitul de mai sus, dar folosind de această dată un aparat de măsură pentru determinarea căderilor de tensiune pe diferite componente ale circuitului.</p>

<p><img src="../poze/03249.png" alt="măsurarea căderilor de tensiune într-un circuit simplu cu diodă: (a) polarizarea directă a diodei; (b) polarizarea inversă a diodei"/></p>

<p>O diodă polarizată direct conduce curent şi prezintă o cădere mică de tensiune la bornele sale, asfel încât majoritatea tensiunii disponibile la bornele sursei de alimentare se regăseşte pe lampă (sarcină). Dacă polaritatea bateriei este inversată, dioda devine polarizată invers, şi <i>toată</i> tensiunea disponibilă la bornele sursei de alimentare se regăseşte pe diodă, iar căderea de tensiune pe sarcină va fi egală cu zero. Putem considera dioda ca fiind un întrerupător „automat” (se închide când este polarizat direct şi se deschide când este polarizat invers). Singura diferenţă notabilă este căderea de tensiune mult mai mare la bornele diodei (0.7 V), faţa de căderea de tensiune pe un întrerupător mecanic (câţiva mV).</p>

<p>Această cădere de tensiune de polarizare directă se datorează acţiunii zonei de golire formată de joncţiunea P-N sub influenţa tensiunii aplicate. Dacă nu există nicio tensiune aplicată la bornele diodei semiconductoare, eixstenţa zonei de golire înguste în jurul joncţiunii P-N previne apariţia curentului (figura de mai jos (a)). Purtătorii de sarcină aproape că lipsesc în zona de golire, şi prin urmare aceasta se comportă precum un izolator.</p>

<p><img src="../poze/03250.png" alt="reprezentarea diodei: (a) joncţiunea P-N; (b) simbolul schematic; (c) aspectul real al diodei"/></p>

<p>Dacă dioda este polarizată invers, zona de golire se extinde şi blochează şi mai bine trecerea curentului prin dispozitiv.</p>

<p><img src="../poze/03251.png" alt="polarizarea inversă a diodei duce la creşterea zonei de golire şi la blocarea acesteia"/></p>

<p>Dacă dioda este polarizată direct însă, zona de golire devine mult mai subţire (figura de mai jos (a), polarizare parţială), iar rezistenţa faţă de curent scade. Pentru funcţionarea corectă a diodei însă, zona de golire trebuie să dispară complet. Acest lucru se poate realiza prin aplicarea unei anumite tensiuni minime, denumită <i>tensiune de polarizare directă</i> (figura de mai jos (b)), care pentru diodele de siliciu este în mod normal 0.7 V, iar pentru cele de germaniu de doar 0.3 V.</p>

<p><img src="../poze/03252.png" alt="polarizarea directă a diodei: (a) parţială; (b) completă"/></p>

<p>Căderea de tensiune la bornele diodei rămâne aproximativ constantă pentru o gamă largă de curenţi prin diodă. Pentru analiza circuitelor electronice simplificate, putem considera căderea de tensiune pe diodă ca fiind constantă (nu depinde de valoarea curentului prin diodă).</p>

<p>Ecuaţia exactă ce descrie curentul printr-o diodă poartă numele de <i>ecuaţia diodei</i>:</p>

<p><img src="../poze/13047.png" alt="ecuaţia diodei"/></p>

<p>Termenul q/KT descrie tensiunea produsă în joncţiunea P-N datorită acţiunii temperaturii, şi poartă numele de <i>tensiune termică</i>, sau V<sub>t</sub>. La temperatura camerei, această temperatură este de aproximativ 26 mV. Cunoscând acest fapt, şi considerând factorul de idealitate ca fiind 1, putem simplifica ecuaţia de mai sus şi să ajungem la următoarea relaţie:</p>

<p><img src="../poze/13048.png" alt="ecuaţia diodei simplificată"/></p>

<p>Această ecuaţie nu trebuie neapărat luată în considerare la analiza circuitelor simple cu diode, ci este menţionată aici doar pentru a înţelege faptul că există o variaţie a căderii de tensiune la bornele diodei pentru diferite valori ale curenţilor prin diodă. Această variaţie este foarte mică, aceasta fiind şi motivul pentru care se consideră că, la bornele diodei, căderea de tensiune rămâne constantă la 0.7 (siliciu) sau 0.3 V (germaniu). Totuşi, unele circuite folosesc în mod intenţionat relaţia curent/tensiune a joncţiunii P-N, şi ele pot fi înţelese doar în contextul acestei ecuaţii. De asemenea, din moment ce temperatura este un factor în ecuaţia diodei, o joncţiune P-N polarizată direct poate fi folosită ca un dispozitiv de determinare a temperaturii, iar această utilizarea poate fi înţeleasă doar dacă înţelegem în primul rând ecuaţia diodei de mai sus.</p>

<p>Deşi o diodă polarizată invers, nu permite curentului să treacă prin ea datorită extinderii zonei de golire, în realitate există un mic curent de scurgere ce trece prin diodă chiar şi la polarizarea inversă, iar acest curent poartă numele de <i>curent invers</i>. Curentul invers poate fi însă ignorat pentru majoritatea aplicaţiilor. Dioda nu poate suporta o tensiune de polarizare inversă infinit de mare. Dacă această tensiune devine prea mare, dioda va fi distrusă datorită unei condiţii denumită <i>străpungere</i>. Această tensiune inversă maximă poartă numele de <i>tensiune de străpungere (inversă)</i>, notată cu V<sub>s</sub>. Tensiunea de străpungerea creşte odată cu creşterea temperaturii şi scade cu scăderea temperaturii - exact invers faţă de tensiunea de polarizare directă. Mai jos este prezentat graficul curent-tensiune al diodei:</p>

<p><img src="../poze/03253.png" alt="graficul curent-tensiune al diodei"/></p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Dioda este un component electric ce se comportă precum o valvă uni-direcţională de curent</li>
	<li>Spunem că dioda este polarizată direct atunci când aceasta permite trecerea curentului prin diodă</li>
	<li>Spuenm că dioda este polarizată invers atunci când trecerea curentului prin diodă este blocată</li>
	<li>Căderea de tensiune la bornele unei diode polarizate direct poartă numele de tensiune de polarizare directă, şi este de 0.7 V pentru diodele din siliciu şi 0.3 V pentru cele din germaniu. Această tensiune variază foarte puţin pentru diferite valori ale curentului şi temperaturii</li>
	<li>Tensiunea de polarizare inversă maximă pe care o poate suporta o diodă fără apariţia fenomenului de „străpungere” ce duce inevitabil la distrugerea acesteia, se numeşte <i>tensiune de străpungere</i>, V<sub>s</sub></li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>