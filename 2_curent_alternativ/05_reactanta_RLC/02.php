<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuite RLC serie</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Circuite RLC serie</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Să considerăm următorul circuit RLC serie:</p>

<p><img src="../poze/02078.png" alt="circuit electric RLC serie"/></p>

<p>Primul pas este determinarea reactanţelor pentru bobină şi condensator:</p>

<p><img src="../poze/12056.png" alt="formule"/></p>

<p>Următorul pas constă în exprimarea tuturor rezistenţelor şi reactanţelor într-o formă matematică comună: impedanţa. Ţineţi minte că reactanţă inductivă (a bobinei) se traduce printr-o impedanţă imaginară pozitivă(+90<sup>o</sup>), iar reactanţă capacitivă (a condensatorului) se traduce printr-i impedanţă imaginară negativă (-90<sup>o</sup>). Rezistenţa, desigur, este considerată o impedanţă „reală” pură (unghi polar de 0<sup>o</sup>:</p>

<p><img src="../poze/12057.png" alt="formule"/></p>

<p><img src="../poze/02079.png" alt="circuit electric RLC serie; impedanţele componentelor"/></p>

<p>După ce toate valorile opoziţiei faţă de curent au fost exprimate sub forma comună a impedanţei, ca numere complexe, acestea pot fi manipulate la fel ca rezistenţele în curent continuu. Putem scrie toate valorile cunoscute într-un tabel, şi apoi să rezolvăm mai departe acest circuit:</p>

<p><img src="../poze/12058.png" alt="tabel"/></p>

<p>Circuitul de mai sus fiind unul serie, ştim că impedanţa totală este egală cu suma impedanţelor individuale:</p>

<p><img src="../poze/12059.png" alt="formule"/></p>

<p>Introducând valoarea impedanţei totale în tabel, obţinem:</p>

<p><img src="../poze/12060.png" alt="tabel"/></p>

<p>Putem acum să aplicăm legea lui Ohm (I=E/R), vertical, în coloana „Total” pentru a găsi curentul total din circuit:</p>

<p><img src="../poze/12061.png" alt="tabel"/></p>

<p>Fiind un circuit serie, curentul trebuie să fie acelaşi prin toate componentele:</p>

<p><img src="../poze/12062.png" alt="tabel"/></p>

<p>Putem aplica acum legea lui Ohm (E=IZ) fiecărui component în parte, pentru determinarea căderilor de tensiune:</p>

<p><img src="../poze/12063.png" alt="tabel"/></p>

<p>Putem observa ceva aparent ciudat în acest caz: cu toate că tensiunea sursei de alimentare este de doar 120 V, tensiunea la bornele condensatorului este de 137.46 V! De ce se întâmplă acest lucru? Răspunsul se află în interacţiunea dintre reactanţele inductive şi capacitive. Exprimată ca şi impedanţă, putem vedea că bobina se opune trecerii curentului într-un mod exact invers faţa de condensator. Exprimată sub formă rectangulară, impedanţă bobinei posedă un termen imaginar pozitiv, iar condensatorul un termen imaginar negativ. Când aceste două impedanţe contrare sunt adunate (în serie), ele tind să se anuleze reciproc! Cu toate că ele se adună, suma lor este defapt mai mică decât oricare dintre impedanţe (inductive sau capacitive) considerate separat. Acest lucru este analog sumei dintre un scalar pozitiv şi unul negativ.</p>

<p>Dacă impedanţa totală într-un circuit serie ce conţine atât elemente inductive cât şi capacitive, pe lângă cele rezistive (RLC), este mai mică decât impedanţa individuală a oricărui element luat separat, atunci curentul total din circuit trebuie să fie <i>mai mare</i> decât curentul rezultat în cazul în care doar componeta capacitivă sau inductivă ar fi introduse în circuit. Odată cu apariţia acestui curent prin fiecare element, mai mare decât în mod normal, pot apărea căderi de tensiune mai mari decât tensiunea sursei de alimentare, pe anumite elemente din circuit!</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Cu toate că impedanţele în serie se adună, impedanţa totală pentru un circuit ce conţine atât bobine cât şi condensatoare poate să fie mai mică decât impedanţele individuale, datorită faptului că impedanţele inductive şi capacitive tind să se anuleze reciproc atunci când sunt conectateîn serie. Acest lucru poate duce la căderi de tensiune pe componente mai mari decât tensiunea sursei de alimentare</li>
</ul>
</div>
<div id="footer">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>