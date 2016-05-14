<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Tranzistorul bipolar cu joncţiune (BJT)</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>7. Tranzistorul bipolar cu joncţiune (BJT)</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Primul tranzistor bipolar a fost inventat la „Bell Labs” de către William Shockley, Walter Brattain, şi John Bardeen în 1948 (de fapt, 1947, dar invenţia a fost publicată doar în 1948). Pentru această descoperire, cei trei au fost recompensaţi cu premiul Nobel pentru fizică în anul 1956.</p>

<p>Tranzistorul bipolar cu joncţiune este un semiconductor format din trei straturi, două de tip N şi unul de tip P (NPN). Contactele celor trei straturi poartă numele de <i>emitor</i> şi <i>colector</i> pentru semiconductorii de tip N, şi <i>bază</i> pentru semiconductorul de tip P. Configuraţia este asemănătoare unei diode, doar că mai există un strat N în plus. Stratul din mijloc însă, baza, trebuie să fie cât mai subţire cu putinţă, fără a afecta suprafeţele celorlalte două straturi, emitorul şi colectorul.</p>

<p>Dispozitivul din figura de jos (a) este format din două joncţiuni, una între emitor şi bază, iar cealaltă între bază şi colector, aceste joncţiuni formând două zone de golire:</p>

#+CAPTION: (a) tranzistor bipolar cu joncţiune NPN; (b) polarizarea inversă a joncţiunii bază-colector
[[../poze/03412.png]]

<p>În mod normal, joncţiunea bază-colector a tranzistorului este polarizată învers (figura de sus (b)). Acest lucru duce la creşterea regiunii de golire. Această tensiune poate fii de câţiva volţi până la zeci de volţi pentru majoritatea tranzistorilor. În acest caz, nu există curent în circuitul colectorul, exceptând curentul de dispersie de o valoarea foarte mică.</p>

<p>Putem adăuga o sursă de tensiune şi în circuitul emitor-bază al tranzistorului (figura de mai jos (a)). În mod normal, joncţiunea emitor-bază este polarizată direct, în încercarea de depăşire a barierei de potenţial de aproximativ 0.6 V. Acest lucru este similar polarizării directe a joncţiunii diodei. Tensiune acestei surse trebuie să depăşească valoarea de 0.6 V pentru ca majoritatea purtătorilor de sarcină (electroni pentru NPN) să treacă din emitor spre bază, devenind purtători de sarcină minoritari în semiconductorul de tip P.</p>

<p>Dacă regiunea bazei ar fi mult mai mare, ca în cazul poziţionării spate-în-spate a două diode, tot curentul ce intră în bază prin emitor, ar ieşi prin contactul bazei spre borna pozitivă a bateriei.</p>

<p>Totuşi, tranzistoarele sunt confecţionate cu o bază foarte subţire. O mică partă a purtătorilor de sarcină majoritari din emitor, injectăţi ca şi purtători de sarcină minoritari în bază, se recombină cu golurile acesteia(figura de jos (b)). De asemenea, o mică parte a electronilor ce intră în bază pe la emitor trec direct prin bază spre borna pozitivă a bateriei. Dar majoritatea curentului din emitor trec prin suprafaţă subţire a bazei direct în colector. Mai mult, modificarea curentului mic al bazei duce la modificări importante ale curentului din colector. Dacă tensiunea bazei scade sub aproximativ 0.6 V, curentul emitor-colector scade la zero.</p>

#+CAPTION: tranzistor bipolar cu joncţiune NPN şi polarizarea inversă a joncţiunii colector-bază: (a) polarizarea directă a joncţiunii bază-emitor duce la (b) apariţia unui curent de bază mic şi a unui curent emitor-colector mare
[[../poze/03413.png]]

<p>Să privim însă mai în deaproape la acest mecanism de <i>amplificare al curentului</i> (figura de jos). Considerăm o joncţiune NPN mărită, cu accentul pus pe bază. Chiar dacă nu sunt prezentate în figură, presupunem că joncţiunea emitor-bază este polarizată direct de o sursă de tensiune, iar joncţiunea bază-colector este polarizată invers. Electronii, purtătorii de sarcină majoritari, intră în emitor de la borna negativă a bateriei. Deplasarea electronilor dinspre bază corespunde cu deplasarea acestor dinspre bază spre borna pozitivă a bateriei. Acesta este un curent foarte mic faţă de curentul din emitor.</p>

#+CAPTION: comportamentul electronilor la intrarea în bază dinspre emitor: (a) pierduţi datorită recombinării cu golurile bazei; (b) se deplasează spre contactul bazei şi înspre borna pozitivă a sursei de aplimentare; (c) moajoritatea trec prin zona îngustă de golire bază-colector înspre colector; (d) electronii sunt atraşi de câmpul electric al zonei de golire înspre colector
[[../poze/03414.png]]

<p>Majoritatea purtătorilor de sarcină în emitorul de tip N sunt electronii, ce devin purtători de sarcină minoritară la intrarea în baza de tip P. Aceşti electroni au patru posibilităţi după ce intră în baza de tip P. O mică parte „cad” în goluri (figura de sus (a)), lucru ce contribuie la curentul înspre terminalul pozitiv al bateriei. Deşi nu este reprezentată pe figură, golurile pot trece din bază spre emitor, unde se recombină cu electronii, contribuind şi aceştia la curentul bazei. O altă mică parte din electroni (b) trec direct prin bază înspre terminalul pozitiv al bateriei, ca şi cum baza ar fi un rezistor. Atât (a) cât şi (b) contribuie curentului foarte mic al bazei. Curentul bazei este aproximativ 1% din curentul emitor-colector, pentru tranzistoarele mici. Majoritatea electronilor din emitor însă (c), trec direct prin zona îngustă de golire, înspre colector. Putem observa polaritatea zonei de golire ce înconjoară electronul (d). Câmpul electric intens „trage” electronul rapid în colector. Puterea câmpului electric este direct proporţională cu tensiunea de alimentare a bateriei. Asfel, 99% din curentul emitorului trece în colector. Această „trecere” este însă controlată de curentul bazei, ce reprezintă aproximativ 1% din curentul emitorului. Acest lucru reprezintă o amplificare de curent de 99, reprezentat de raportul dintre curentul colectorului şi curentul bazei (I<sub>C</sub>/I<sub>B</sub>), cunoscut şi ca β.</p>

<p>Difuzia electronilor emitorului prin bază şi înspre colector, este posibilă doar dacă baza este foarte subţire. Ce s-ar întâmpla cu aceşti purtători de sarcină dacă baza ar fi de 100 de ori mai groasă. Este foarte posibil ca majoritatea dintre ei, 99% in loc de 1%, să cadă în goluri, nemaiajungand la colector. Prin urmare, curentul de bază poate constrola 99% din curentul emitorului, doar dacă 99% din curentul emitorului trece înspre colector. Dacă întreg curentul iese pe la bază, controlul nu este posibil.</p>

<p>Un alt motiv pentru care 99% dintre electronii trec din emitor, peste bariera de potenţial şi în colector, este că joncţiunile bipolare reale folosesc un emitor mic dopat puternic. Concentraţia mare a electronilor din emitor forţează trecerea acestora în bază. Concentraţia mică a dopajului din bază înseamnă că există mult mai puţine goluri ce trec în emitor (lucru ce doar ar creşte curentul bazei). Difuzia purtătorilor de sarcină dintre emitor spre bază, este puternic favorizată.</p>

<p>Faptul că baza este subţire iar emitorul puternic dopat, ţin foarte sus <i>eficienţa emitorului</i>, 99% de exemplu. Acest lucru corespunde ramificaţiei curentului emitorului de 100% în 1% bază şi 99% colector. Eficienţă emitorului este cunoscută ca şi α = I<sub>C</sub>/I<sub>E</sub>.</p>

<h3>Joncţiunea PNP</h3>

<p>Tranzistoarele bipolare pot fi confencţionate şi sub forma PNP. Diferenţa dintre PNP şi NPN poate fi văzută în figura de mai jos:</p>

#+CAPTION: diferenţa dintre tranzistorul NPN (a) şi tranzistorul PNP (b)
[[../poze/03419.png]]

<p>Diferenţa constă în polaritea joncţiunilor bază-emitor, polaritatea semnalată cu ajutorul săgeţii emitorului în simbolul tranzistorului. Direcţia săgeţii este asemenea direcţiei anodului joncţiunii unei diode, împotriva sensului real de deplasare al electronilor. Pentru tranzistorii NPN, direcţia săgeţii este dinspre bază spre emitor, iar în cazul tranzistorilor PNP, direcţia este dinspre emitor spre bază. Colectorul nu este reprezentat în niciunul dintre cazuri cu ajutorul vreunei săgeţi. Totuşi, polaritatea joncţiunii bază-colector este aceeiaşi cu polaritatea joncţiunii bază-emitor în comparaţie cu o diodă.</p>

<h3>Structura</h3>

<p>Emitorul tranzistorului bipolar cu joncţiune de mai jos este puternic dopat, după cum indică şi notaţia N<sup>+</sup>. Baza are un nivel de dopaj P normal, dar aceasta este mult mai subţire în realitate decât este prezentat în această figură (a).</p>

#+CAPTION: tranzistor bipolar cu joncţiune: (a) secţiune transversală; (b) simbol; (c) secţiune transversală într-un circuit integrat
[[../poze/03302.png]]

<p>Procentul de dopaj al colectorului este scăzut, după cum indică notaţia N<sup>-</sup>, pentru ca tensiunea de străpungere a joncţiunii colector-bază să fie cât mai mare, ceea ce înseamnă că sursa de tensiune poate alimenta tranzistorul la tensiuni mai mari. Tranzistoarele de siliciu mici, au o tensiune de străpungere de 60-80 V, dar poate ajunge la sute de volţi pentru tranzistoarele de tensiune înaltă. Dar, colectorul trebuie să fie în acelaşi timp dopat puternic pentru minimizarea pierderilor ohmice (datorită rezistenţelor), în cazul în care tranzistorul trebuie să conducă curenţi mari. Îndeplinirea acestor cerinţeo contradictorii se realizează prin doparea mai puternică a colectorului spre partea de contact metalic, şi doparea mai uşoară a colectorului în apropierea bazei în comparaţie cu emitorul. Tensiunea de străpungere a joncţiunii emitor-bază scade până la aproximativ 7 V datorită dopării puternice a emitorului, în tranzistorii mici. Şi tot datorită acestei dopări puternice, joncţiunea emitor-bază se comportă precum o diodă Zener polarizată invers.</p>

<p>Fabricarea mai multor tranzistoare pe acelaşi cip dă naştere unui <i>circuit integrat</i>, o reprezentare aproximativă a acestuia este dată în figura de mai sus (c).</p>

<p>Calitatea tranzistorilor discreţi de tip PNP este aproape la fel de bună precum cea a tranzistorilor NPN. Totuşi, tranzistorii PNP integraţi nu sunt la fel de buni precum cei de tipul NPN, prin urmare, circuitele integrate folosesc tranzistori de tipul NPN în marea lor majoritate.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Tranzistorii bipolari conduct curentul folosind ca purtători de sarcină atât electroni cât şi goluri în cadrul aceluiaşi circuit. De aici şi denumirea de „bipolar”</li>
	<li>Funcţionarea corectă a unui tranzistor bipolar ca şi amplificator de curent necesită polarizarea inversă a joncţiunii colector-bază şi polarizarea directă e joncţiunii emitor-bază</li>
	<li>Diferenţa dintre un tranzistor şi două diode montate cap-la-cap, constă în faptul că stratul de mijloc, baza, este foarte subţire. Acest lucru permite purtătorilor de sarcină majoritari din emitor (electronii) să treacă ca şi purtători de sarcină minoritari prin bază în zona de golire joncţiunii bază-colector, de unde câmpul electric foarte puternic îi „colectează” înspre colector</li>
	<li>Eficienţa emitorului este îmbunătăţite printr-un dopaj puternic faţă de dopajul colectorului. Eficienţa emitorului se exprimă prin α = I<sub>C</sub>/I<sub>E</sub>, iar valoarea acesteia este de 0.99 (sau 99%) pentru tranzistorii mici</li>
	<li>Amplificarea în curent a tranzistorului este exprimată prin relaţia β=I<sub>C</sub>/I<sub>B</sub>, iar valoarea ei este de la 100 la 300 pentru tranzistorii mici</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
