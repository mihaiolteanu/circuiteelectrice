<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuite inductive în curent alternativ</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Circuite inductive în curent alternativ</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Bobinele au în schimb un comportament diferit faţă de cel al rezistorilor atunci când sunt introduse în circuit. Faţă de rezistor, care doar se opun treceri curentului prin acel punct din circuit în care aceştia sunt conectaţi (prin dezvoltarea unei căderi de tensiune direct proporţionale cu valoarea curentului), bobinele se opun <i>variaţiei</i> curentului prin ele, prin dezvoltarea unei căderi de tensiune direct proporţionale cu <i>rata de variaţie</i> a curentului. În conformitate cu legea lui Lenz, polaritatea aceastei tensiuni induse este asfel încât valoarea curentului să se menţină la valoarea curentă, şi anume, dacă valoarea curentului creşte , tensiunea indusă se va opune deplasării electronilor; în cazul descreşterii curentului, polaritatea este inversă pentru a putea împinge electronii şi a se opune descreşterii curentului. Această opoziţie la variaţia curentului poartă denumirea de <i>reactanţă</i>, în loc de rezistenţă.</p>

<p>Matematic, relaţia dintre căderea de tensiune pe o bobină şi rata variaţiei curentului prin aceasta, se exprimă asfel:</p>

#+CAPTION: relaţia dintre căderea de tensiune pe o bobină şi rata variaţiei curentului prin aceasta
[[../poze/12016.png]]

<p>Expresia <i>di/dt</i> reprezintă derivata curentului cu timpul, adică rata de variaţia a curentului instantaneu (i) cu timpul, în amperi per secundă. „L” reprezintă inductanţă în Henry, iar „e” este tensiunea instantanee. Câteodată în loc de „e” se mai foloseşte şi „v”, dar cele două notaţii sunt echivalente.</p>

<p>Să analizăm un circuit pur inductiv simplu în curent alternativ. În acest, curentul este defazat în urmă faţă de tensiune cu 90<sup>o</sup>:</p>

#+CAPTION: circuit electric pur inductiv simplu în curent alternativ
[[../poze/02056.png]]

<p>Graficul tensiunii şi al curentului în acest caz arată aproximativ asfel:</p>

#+CAPTION: graficul formelor de undă pentru un circuit electric pur inductiv simplu în curent alternativ
[[../poze/02057.png]]

<p>Reţineţi faptul că valoarea căderii de tensiune pe bobină este în funcţie de <i>variaţia</i> curentului prin aceasta. Prin urmare, tensiunea instantanee este zero ori de câte ori curentul instantaneu este la valoarea maximă, de vârf (pozitivă sau negativă), deoarece în acest caz variaţia, sau panta, este zero; tensiunea instantanee are o valoare maximă, de vârf, atunci când panta curentului instanteneu, sau variaţia acestuia este maximă (intersecţia formei de undă cu axa orizontală a timpului). Datorită acestui fapt, formele de undă sunt defazate cu 90<sup>o</sup>. Dacă ne uităm pe grafic, observăm că unda de tensiune are un mic „avantaj” faţa de una de curent; prin urmare, spunem că tensiunea este defazată cu 90<sup>o</sup> înaintea curentului, sau echivalent, curentul este defazat cu 90<sup>o</sup> în urma tensiunii.</p>

#+CAPTION: graficul formelor de undă pentru un circuit electric pur inductiv simplu în curent alternativ - explicaţii
[[../poze/02058.png]]

<p>Lucrurile devin şi mai interesante atunci când introducem şi forma de undă a puterii pe grafic:</p>

#+CAPTION: graficul formelor de undă pentru un circuit electric pur inductiv simplu în curent alternativ
[[../poze/02059.png]]

<p>Deoarece puterea instantanee reprezintă produsul dintre tensiunea şi curentul instantaneu (p=ie), puterea este egală cu zero atunci când curentul <i>sau</i> tensiunea instantanee este zero. Ori de câte ori curentu şi tensiunea instantanee sunt ambele pozitive sau ambele negative, puterea este şi ea pozitivă. Dar, datorită faptului că cele două unde de tensiune, respectiv curent, sunt defazate între ele cu 90<sup>o</sup>, există momente în care una este pozitivă şi cealaltă negativă, rezultatul fiind o <i>putere instantanee negativă</i>:</p>

<p>Dar ce înseamnă putere <i>negativă</i>? Înseamnă că bobina generează putere înapoi în circuit, iar putere pozitivă înseamnă că aceasta absoarbe putere din circuit. Acest lucru dovedeşte faptul că bobina nu „consumă” putere precum o face un rezistor (ce o disipă sub formă de căldură), ci puterea absorbită din circuit este stocată sub formă de câmp magnetic. În cazul de faţă, datorită faptului că duratele de putere pozitivă şi negativă sunt perfect egale, bobină generează aceeiaşi cantitate de putere înapoi în circuit pe care absorbit-o într-o perioadă completă de timp. Practic, reactanţă (rezistenţă în curent continuu) bobine nu disipă energie, sau echivalent, energia disipată de aceasta este zero. Atenţie, cazul de sus este cel al unei bobine ideale, cu rezistenţă zero.</p>

<p>Opoziţia unei bobine faţă de variaţia curentului se traduce printr-o opoziţie faţă de curentul alternativ în general, curent ce este prin definiţie variabil în magnitudine instantanee şi direcţie (polaritate). Această opoziţie faţă de curent alternativ este similară rezistenţei, dar diferită prin faptul că rezultă întotdeaună într-o diferenţă de fază între curent şi tensiune, iar puterea disipată este zero. Datorită acestei diferenţe, are şi o denumire specificiă: <i>reactanţă</i>. Reactanţă în curent alternativ se exprimă în ohmi, la fel ca şi rezistenţa, doar că simbolul matematic este X, în loc de R. Pentru a fi mai exacţi, reactanţa asociata cu o bobină poartă numele de reactantă inductivă şi este simbolizată prin X<sub>L</sub>.</p>

<p>Din moment ce căderea de tensiune pe bobine este proporţională cu rata de variaţie a curentului, căderea de tensiune va fi mai mare pentru variaţii mai rapide de curent, şi mai mică pentru variaţii mai lente. Acest lucru înseamnă că reactanţă în ohmi pentru oricare bobină, este direct proporţională cu frecvenţă curentului alternativ. Matematic, acest lucru se exprimă asfel:</p>

#+CAPTION: formula matematică pentru calcularea reactanţei inductive
[[../poze/12017.png]]

<p>Dacă avem o bobină de 10 mH şi o conectăm într-un circuit cu frecvenţa variabilă, asfel: 60, 120 şi 2.500 Hz, reactanţa (inductivă) acesteia în fiecare dintre cele trei cazuri este următoarea:</p>

<table>
<tr>
<th>Frecvenţa (Hertz)</th><th>Reactanţă (Ohm)</th>
</tr>
<tr>
<td>60</td><td>3.7699</td>
</tr>
<tr>
<td>120</td><td>7.5398</td>
</tr>
<tr>
<td>2500</td><td>157.0796</td>
</tr>
</table>

<h3>Viteza unghiulară a sistemului</h3>

<p>În formula de calcul a reactanţei inductive, termenul „2πf” are un înţeles aparte. Este numărul de radiani pe secundă la care se „roteşte” curentul alternativ, dacă ne imaginăm că o perioadă a curentului alternativ reprezintă o rotaţie completă. <i>Radianul</i> este o unitate de măsură unghiulară: într-o rotaţie completă există 2π radiani, echivalentul a 360<sup>o</sup> într-un cerc complet. Dacă generatorul ce produce curentul alternativ are doi poli, va produce o rotaţie completă pentru fiecare rotaţie completă a arborelui, adică la fiecare 2π radiani, sau 360<sup>o</sup>. Dacă această constantă, 2π, este înmulţită cu frecvenţă în Herzi (număr de rotaţii pe secundă), rezultatul va reprezenta o valoare în radiani per secundă, valoare cunoscută sub numele de <i>viteza unghiulară</i> a sistemului de curent alternativ.</p>

<p>Viteza unghiulară poate fi reprezentată prin expresia 2πf, sau poate fi reprezentată folosind propriul său simbol, şi anume, litera grecească Omega, ω. Asfel, formula reactanţei, X<sub>L</sub> = 2πfL, poate fi rescrisă asfel: X<sub>L</sub> = ωL.</p>

<p>Trebuie înţeles faptul că această „viteză unghiulară” este o expresie a vitezei de rotaţie a formelor de undă în curent alternativ, o rotaţie completă fiind egală cu 2π radiani, şi nu este neapărat viteza actuală a arborelui generatorului ce produce curentul alternativ. Dacă generatorul este format din mai mult de doi poli, viteza unghiulară va fi multiplu de viteza arborelui. Din acest motiv, viteza unghiulară ω este câteodaţa exprimata sub formă de radiani <i>electrici</i> per secundă, pentru a face diferenţă între aceasta şi rotaţia mecanică.</p>

<p>Indiferent de modul în care reprezentăm viteza unghiulară a sistemului, este ştiut faptul că ractanţa bobinei este direct proporţională cu aceasta. Odată cu creşterea frecvenţei sistemului de curent alternativ (creşterea vitezei de rotaţie a arborelui generatorului), opoziţia bobinei faţă de curgerea curentului va fi tot mai mare, şi invers. Curentul alternativ într-un circuit inductiv simplu este egal cu raportul dintre tensiunea şi reactanţa inductivă, asemănător modului de calcul în curent continuu, sau în circuitele rezistive în curent alternativ; să considerăm un exemplu:</p>

#+CAPTION: circuit electri în curent alternativ pur inductiv
[[../poze/02060.png]]
#+CAPTION: formule
[[../poze/12018.png]]

<p>Totuşi, trebuie să fim atenţi la faptul că tensiunea şi curentul nu sunt în fază în acest caz. După cum am văzut, diferenţa de fază dintre cele două unde este de 90<sup>o</sup>. Dacă reprezentăm aceste unghiuri de fază matematic, sub forma numerelor complexe, observăm că opoziţia unei bobine faţă de curent posedă şi un unghi al fazei:</p>

#+CAPTION: formule
[[../poze/12019.png]]

#+CAPTION: curentul este în urma tensiunii în cazul bobinei
[[../poze/02061.png]]

<p>Matematic, spunem că unghiul de fază a opoziţiei bobinei faţă de curent este de 90<sup>o</sup>, ceea ce înseamnă o mărime imaginară pozitivă. Acest unghi de fază este foarte important în analiza circuitelor electrice, în special al celor complexe (în curent alternativ), unde există o interacţiune între rezistenţă şi reactanţă. Se va dovedi extrem de benefică reprezentarea opoziţiei faţă de curent a <i>oricărei</i> componente sub forma numerelor complexe şi nu sub forma cantităţilor scalare.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Reactanţa inductivă reprezintă opoziţia bobinei faţă de curentul alternativ datorată defazajului ce apare la stocarea şi eliberarea energiei sub formă de câmp magnetic. Simbolul reactanţei este „X”, iar unitatea de măsură este ohm-ul, exact ca în cazul rezistenţei (R)</li>
	<li>Matematic, reactanţa inductivă se calculează folosind formula: X<sub>L</sub> = 2πfL</li>
	<li><i>Viteza unghiulară</i> a unui circuit electric în curent alternativ reprezintă un alt mod de exprimare a frecvenţei sale; unitatea de măsură o reprezintă radiani electrici per secundă în loc de numărul de perioade per secundă. Simbolul este litera grecească „omega”, ω</li>
	<li>Reactanţa inductivă creşte odată cu creşterea frecvenţei, şi invers. Cu alte cuvinte, cu cât frecvenţa este mai mare, cu atât mai mare este opoziţia faţă de deplasarea electronilor (curent) în curent alternativ</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
