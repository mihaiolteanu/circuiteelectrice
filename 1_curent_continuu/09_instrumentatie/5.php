<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Termocupla</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Termocupla</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Un fenomen interesant utilizat în domeniul instrumentaţiei este „efectul Seebeck” (notă: wikipedia), ce constă în producerea unei căderi de tensiune între două fire datorată diferenţei de temperatură dintre acestea. Acest efect este cel mai uşor de observat şi de aplicat cu ajutorul unui contact dintre două metale diferite, fiecare metal producând un potenţial electric diferit de-a lungul său, ceea ce se traduce printr-o tensiune electrică diferită între capetele libere ale celor două fire. Aproape orice pereche de metale diferite produc o cantitate de tensiune măsurabilă atunci când contactul lor este încălzit, unele combinaţii producând o cantitate mai mare decât altele:</p>

<img src="../poze/00192.png" alt="efectul Seebeck (termocupla)"/>

<p>Efectul Seebeck este destul de liniar, însemnând că tensiunea produsă de contactul încălzit dintre două fire este direct proporţională cu temperatura. Acest lucru înseamnă ca putem determina temperatura contactului măsurând tensiunea produsă. Prin urmare, efectul Seebeck constituie o metodă electrică de determinare a temperaturii.</p>

<p>Când o combinaţie de materiale diferite sunt conectate împreună pentru a măsura temperatura, dispozitivul format poartă numele de <i>termocuplă</i>. Termocuplele folosite pentru instrumentaţie folosesc metale de o puritate superioare pentru a păstra relaţia temperatură/tensiune cât mai liniară şi previzibilă cu putinţă.</p>

<p>Tensiunile Seedbeck sunt destul de mici, de ordinul milivolţilor (mV) pentru majoritatea temperaturilor. Din acest motiv sunt destul de greu de folosit pentru măsurători precise. De asemenea, faptul că <i>orice</i> contact dintre oricare două metale diferite produce o cădere de tensiune variabilă cu temperatură constituie o problemă la conectarea unui voltmetru la termocuplă pentru închiderea circuitului:</p>

<img src="../poze/00193.png" alt="termocupla - contact secundar"/>

<p>Contactul secundar fier - cupru format prin conexiunea dintre termocuplă şi aparatul de măsură din firul de sus va produce o diferenţă de potenţial dependentă de temperatură de polaritate diferită faţă de tensiunea produsă de punctul de contact iniţial (de măsură). Acest lucru înseamnă că tensiunea de la bornele voltmetrului va depinde de <i>diferenţa</i> de temperatură dintre cele două contacte, şi nu doar de temperatura de la contactul de măsură. Chiar şi în cazul termocuplelor ce nu folosesc cuprul pentru contact, combinaţia celor două contacte metalice adiţionale (trei cu cea de măsură)  , combinaţia celor două metale cu conductoarele de cupru ale aparatului de măsură formează un contact echivalent contactului de măsură:</p>

<img src="../poze/00194.png" alt="termocupla - contacte secundare"/>

<p>Acest contact secundar se numeşte contact de <i>referinţă</i> sau contact <i>rece</i>, pentru a face distincţia între acesta şi contactul de măsură. Nu putem evita un asfel de contact într-un circuit ce utilizează termocupla. În unele aplicaţii, este necesară măsurarea diferenţei de temperatură dinte două puncte, caz în care efectul de mai sus poate fi exploatat prin construirea unui sistem foarte simplu de măsură.</p>

<img src="../poze/00195.png" alt="termocupla - măsurarea diferenţei de temperatură dintre două puncte"/>

<p>Totuşi, în marea parte a aplicaţiilor scopul este măsurarea temperaturii doar într-un singur punct, caz în care cel de al doilea contact devine un rău necesar în funcţionarea termocuplei.</p>

<p>Compensarea pentru tensiunea generată de contactul rece se poate realiza cu un circuit construit special pentru măsurarea temperaturii în acel punct care să producă o tensiune proporţională şi inversă pentru anularea efectelor contactului. Sigur, ne putem întreba, „Dacă trebuie să folosim o altă formă de măsurare a temperaturii pentru contracararea efectelor nedorite ale termocuplei, de ce nu am folosi acest mod de măsurare în primul rând în locul contactului termocuplei?”. Raspunsul este acesta: pentru că celelalte forme de măsurare a temperaturii disponibile nu sunt le fel de robuste şi universale precum aceasta dar pot face foarte bine măsurători la temperatura camerei. De exemplu, contactul termocuplei poate fi introdus într-un furnal la temperaturi de 1.000 <sup>o</sup>C, pe când contactul rece poate sta la câţiva zeci de metri distanţă într-un loc special amenajat, la temperatura camerei, temperatura acestuia fiind măsurată de un dispozitiv ce nu ar putea niciodată supravieţui căldurii excesive sau mediului coroziv existent într-un furnal.</p>

<p>Tensiunea produsă de contactul termocuplei este stric dependtă de temperatură. Orice curent existent în circuitul termocuplei este o funcţie a rezistenţei din circuit opusă acestei tensiuni (I=E/R). Cu alte cuvinte, relaţia dintre temperatură şi tensiunea Seebeck este fixă, pe când relaţia dintre temperatură şi curent este variabilă, depinzând de rezistenţa totală din circuit. În cazul în care conductorii termocuplei sunt suficient de groşi (rezistenţă mică), putem genera curenţi de sute de amperi dintr-un singur contact!</p>

<p>Pentru creşterea preciziei măsurătorilor, voltmetrul folosit într-un circuit cu termocuplă este construit cu o rezistenţă foarte mare pentru evitarea căderilor de tensiune de-a lungul firelor termocuplei. Problema căderilor de tensiune de-al lungul firelor este şi mai gravă în acest caz faţă de semnalele de curent continuu discutate mai sus, pentru că în acest caz, contactul termocuplei produce o tensiune de doar câţive milivolţi. Nu ne putem permite să avem nici măcar o cădere de tensiune de un singur milivol pe conductori fără a induce erori serioase de măsurare a temperaturii.</p>

<p>În mod ideal, prin urmare, curentul printr-un circuit al termocuplei ar trebui să fie zero. Instrumentele moderne folosesc amplificatoare cu semiconductori pentru a permite semnalul de tensiune al termocuplei să acţioneze asupra aparatului de măsură cu foarte puţin curent tras în circuit sau chiar deloc.</p>

<h3>Termopila</h3>

<p>Termocuplele pot fi confecţionate din conductori foarte groşi pentru rezistenţă scăzută şi conectate în aşa fel încât să genereze curenţi mari pentru alt scop decât măsurarea temperaturii. O asfel de aplicaţie este generarea puterii electrice. Conectând multe termocuple în serie, alternând temperaturile cald/rece cu fiecare contact, putem construi un dispozitiv numit <i>termopilă</i> cu scopul producerii unor cantităţi mari de tensiune şi curent:</p>

<img src="../poze/00196.png" alt="termopilă"/>

<p>Dacă setul contactelor din stânga şi setul contactelor din dreapta sunt menţinute la aceeiaşi temperatură, tensiunea generată de fiecare contact va fi aceeiaşi dar de semn contrar asfel încât căderea de tensiune per ansamblu va fi egală cu zero. Dacă în schimb, încălzim contactele din stânga şi le răcim pe cele din dreapta, căderea de tensiune pe fiecare contact din stânga va fi mai mare decât căderea de tensiunea pe fiecare contact din dreapta, rezultând o cădere de tensiune per ansamblu ce se traduce prin suma tuturor diferenţelor căderilor de tensiune dintre contacte. Acest lucru este aplicat în cazul unei termopile. În acest caz aplicăm o sursă de căldură (combustie, substanţe radioactive, căldură solară, etc.) unui set de contacte iar celălalt set este ţinut la temperatură cât mai joasă (răcit cu aer sau apă). Şi mai interesant este faptul că, în timp ce electroni se deplasează printr-un circuit electric extern conectat termopilei, există un transfer de energie sub formă de căldură dinspre contactele calde spre cele reci, demonstrând un alt efect termo-electric, <i>efectul Peltier</i>, şi anume, transfelul căldurii prin intermediul curentului electric.</p>

<p>O altă aplicaţie a termocuplelor este măsurarea temperaturii <i>medii</i> între mai multe locatii. Cel mai uşor mod de realizare a acestei măsurători este prin conectarea câtorva termocuple în paralel, asfel încât se va face o medie a tuturor semnalelor de ordinul milivolţilor la punctul de contact dintre termocuple.</p>

<img src="../poze/00197.png" alt="termopilă"/>

<p>Din păcate, media ditre aceste tensiuni Seebeck este precisă doar dacă rezistenţa firelor fiecărei termocuple este egală. Dacă termocuplele sunt amplasate în locatii diferite iar firele lor conectate în paralele se întâlnesc într-o singură locaţie, este puţin probabil ca lungimile acestora să fie egale. Termocupla cu cea mai mare lungime a firelor din punctul de măsura la conexiunea paralel va tinde să aibă şi cea mai mare rezistenţă şi prin urmar cel mai mic efect asupra mediei finale a tensiunii produse.</p>

<p>Pentru compensarea acestui fenomen, se pot adăuga rezistenţe suplimentare fiecărei termocuple din conexiunea paralel pentru a aduce rezistenţele tuturor cât mai apropiate ca valoare. Dacă nu este posibilă instalarea unor rezistori diferiţi, specifici fiecărei ramuri (pentru ca toate rezistenţele termocuplelor să fie egale), se pot instala totuşi rezistori cu valori egale, dar mult peste cele ale termocuplei asfel încât impactul rezistenţei firelor asupra măsurătorii să fie cât mai mic posibil.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li><i>Efectul Seebeck</i> constă în producerea unei căderi de tensiune între două metale disimilare conectate împreună, temperatură direct proporţională cu temperatura acestui contact</li>
	<li>În oricare circuit cu termocuple, există două contacte echivalente formate între două metale diferite. Contactul plasat la locul de măsurare se numeşte contact de <i>măsură</i>, iar celălalt contact (singur sau echivalent) este numit contact <i>rece</i></li>
	<li>Două contacte de termocuplă pot fi poziţionate în opoziţie unul faţă de celălalt pentru a genera un semnal de tensiune proporţionat cu diferenţa de temperatură dintre ele. Un set de asfel de contacte folosite în scopul producerii curentului electric poartă numele de <i>termopilă</i></li>
	<li>Atunci când electronii se deplasează prin contactul unei termopile, există un transfer de energie sub formă de căldură de la un set de contacte la celălalt. Acesta este cunoscut ca şi <i>efectul Peltier</i></li>
	<li>Mai multe contacte de termocuplă pot fi aşezate în paralel pentru a genera o cădere de tensiune ce reprezintă media temperaturilor măsurate de fiecare contact în parte.</li>
	<li>Este absolut necesar ca prin circuitul termocuplei curentul să fie menţinut la o valoare cât mai mică posibil pentru acurateţea măsurătorii</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>