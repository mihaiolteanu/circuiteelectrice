<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Zona activă de funcţionare a tranzistorului</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Zona activă de funcţionare a tranzistorului</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Când baza nu este polarizată, şi prin urmare nu există curent între emitor şi colector, spunem că tranzistorul este <i>blocat</i>. Invers, când între emitor şi colector trece cantitatea maximă de curent permisă de colector şi de sursa de putere, spunem că tranzistorul este <i>saturat</i>. Dar, în cazul în care curentul controlat este mai mare decât zero dar este sub valoarea maximă admisă de sursă şi de circuit, tranzistorul va funcţiona între zonele de blocare şi saturare; în acest caz, spune că tranzistorul funcţionează în <i>zona activă</i>.</p>

<p>Să considerăm următorul circuit teoretic:</p>

<p><img src="../poze/03088.png" alt="circuit pentru exemplificarea zonei active de funcţionare a tranzistorului"/></p>

<p>Circuitul este format dintr-un tranzistor (Q<sub>1</sub>) de tip NPN, alimentat de o baterie (V<sub>1</sub>) şi controlat printr-o sursă de curent (I<sub>1</sub>). Sursa de curent va genera un curent fix, generând o tensiune mai mică sau mai mare pentru asigurarea acestui curent prin ea.</p>

<p>În această simulare, vom seta valoarea sursei de curent la 20 µA şi vom varia tensiunea sursei (V<sub>1</sub>) între 0 V şi 2 V; vom observa apoi curentul ce trece prin sursă.</p>

<p><img src="../poze/23000.png" alt="variaţia curent-tensiune pentru o tensiune de alimentare a tranzistorului între 0 V şi 2 V şi un curent de alimentare constant de 20 µA; curentul prin colector este un curent constant de 2 mA"/></p>

<p>Un curent de bază constant de 20 µA <i>controlează</i> un curent maxim de 2 mA prin colector, de exact 100 de ori mai mare. Pentru această valoare a curentului de baza, curentul prin colector nu poate creşte mai mult. Putem observa de pe grafic că forma curbei este plată în afară de prima porţiune, porţiune unde tensiunea bateriei (V<sub>1</sub>) creşte de la 0 V la 0.25 V. În acest interval, curentul prin colector creşte rapid de la 0 A la 2 mA.</p>

<p>Să observăm ce se întâmplă dacă lărgim plaja valorilor de tensiune a bateriei, de la intervalul 0 - 2 V, la intervalul 0 - 50 V, menţinând un curent de bază constant de 20 µA:</p>

<p><img src="../poze/23001.png" alt="variaţia curent-tensiune pentru o tensiune de alimentare a tranzistorului între 0 V şi 50 V şi un curent de alimentare constant de 20 µA; curentul prin colector este şi de această dată un curent constant de 2 mA"/></p>

<p>După cum era de aşteptat, rezultatul este acelaşi. Curentul prin colector nu poate trece de 2 mA (de exact 100 de ori valoarea curentului bazei!), cu toate că tensiunea bateriei (V<sub>1</sub>) variază de la 0 V până la 50 V. Putem trage concluzia că tensiunea dintre colector şi emitor nu are niciun efect asupra curentului din colector, decât la valori foarte mici (puţin peste 0 volţi). Peste această tensiune „critică”, valoarea tensiunii nu mai are nicio importanţă pentru valoarea curentului colectorului. Tranzistorul se comportă în acest caz precum un regulator de curent, permiţând un curent de exact 2 mA prin colector, şi nu mai mult.</p>

<p>Urmarea evidentă este creşterea curentului bazei, de la 20 µA la 75 µA, menţinând tensiunea bateriei în intervalul 0 - 50 V:</p>

<p><img src="../poze/23002.png" alt="variaţia curent-tensiune pentru o tensiune de alimentare a tranzistorului între 0 V şi 50 V şi un curent de alimentare variabil între 15 µA şi 75 µA; în acest caz există şi alte curbe de variaţie curent-tensiune"/></p>

<p>Pentru curentul maxim de bază, 75 µA, curentul prin colector este (din nou) de 100 de ori mai mare, 7.5 mA şi din nou curba curent-tensiune este plată, cu excepţia primei părti. Putem trage concluzia că factorul decisiv ce contribuie la valoarea curentului prin colector este curentul bazei, tensiunea bateriei (V<sub>1</sub>) fiind irelevantă atâta timp cât se situează peste o anumită valoare minimă.</p>

<h2>Curbele caracteristice</h2>

<p>Această relaţie dintre curent şi tensiune este fundamental diferită faţă de relaţia curent-tensiune a rezistorului. În cazul rezistorului, curentul creşte liniar pe măsură ce căderea de tensiune la bornele sale creşte. În cazul tranzistorului, curentul dinspre emitor spre colector are o valoare limită fixă, valoare peste care nu poate creşte, indiferent de căderea de tensiune dintre emitor şi colector.</p>

<p>O reprezentare a tuturor acestor curbe (variaţii) curent-tensiune pe un singur grafic, pentru un anumit tranzistor, poartă numele de <i>curbe caracteristice</i>:</p>

<p><img src="../poze/03089.png" alt="curbele caracteristice ale tranzistorului bipolar cu joncţiune"/></p>

<p>Trebuie înţeles faptul foarte important, că în graficul de mai sus, avem trei variabile: tensiunea colector emitor (E<sub>colector-emitor</sub>), curentul de la emitor la colector (I<sub>colector</sub>) şi curentul bazei (I<sub>bază</sub>). Pentru fiecare variaţie a curentului de bază, de la 5 µA la 20 µA la 40 până la 75 µA, vom avea o altă curbă caracteristică, şi practic, pot exista o infinitate de curbe între aceste valori.</p>

<h2>Factorul beta (factorul de amplificare în curent)</h2>

<p>Din moment ce tranzistorul se comportă precum un regulator de curent, limitând curentu colectorului printr-o proporţie fixă faţă de curentul bazei, putem exprima această caracteristică standar a tranzistoarelor printr-un raport, cunoscut sub numele de <i>factor beta</i> sau <i>factor de amplificare în curent</i>, şi simbolizat prin litera grecească β, sau prin h<sub>fe</sub>:</p>

<p><img src="../poze/13016.png" alt="factorul beta"/></p>

<p>Factorul β al oricărui tranzistor este determinat de modul său de fabricare, şi este o mărime ce nu poate fi modificată după confecţionarea acestuia. Este foarte greu să găsim doi tranzistori, de acelaşi tip, care să posedă un factor beta identic, datorită variabilelor fizice ce afectează valoarea acestuia. Dacă vrem să construim un circuit în care avem nevoie de tranzistori cu β egali, aceştia se pot cumpăra în seturi, la un preţ mai mare. Dar, construirea unor circuite electronice cu asfel de dependinţe nu este indicată.</p>

<p>β nu rămâne constant pentru toate condiţiile de operare. Pentru un tranzistor fizic, raportul beta poate varia cu un factor mai mare decât trei între limitele curentului de operare. De exemplu, un tranzistor marcat cu β = 50, poate în realitate să prezinte un raport I<sub>c</sub> / I<sub>b</sub> de 30 sau chiar de 100, în funcţie de valoarea curentului prin colector, temperatura tranzistorului, frecvenţa semnalului amplificat, plus alte variabile. Deşi teoretic vom considera β ca fiind constant pentru oricare tranzistor, în realitate acest lucru nu este valabil!</p>

<h2>Modelul diodă-potenţiometru al tranzistorului</h2>

<p>Pentru a înţelege mai uşor modul de funcţionare al tranzistorului, putem considera următorul model teoretic:</p>

<p><img src="../poze/03090.png" alt="modelul diodă-potenţiometru al tranzistorului (tip NPN)"/></p>

<p>Conform acestui model, tranzistorul este o combinaţie dintre o diodă şi un potenţiometru. Curentul prin dioda bază-emitor controlează rezistenţa potenţiometrului colector-emitor, lucru evidenţiat prin linia întreruptă dintre cele două componente, ceea ce duce la controlul curentului prin colector. Tranzistorul de sus este de tipul NPN. Tranzistorul de tipul PNP, va avea dioda bază-emitor inversată.</p>

<h2>Modelul diodă-sursă-de-curent al tranzistorului</h2>

<p>Un model mult mai precis însă, este cel din figura de mai jos:</p>

<p><img src="../poze/03090.png" alt="modelul diodă-sursă-de-curent al tranzistorului (tip NPN)"/></p>

<p>Conform acestui model, tranzistorul este o combinaţie dintre o diodă şi o sursă de curent, ieşirea sursei de curen fiind un multiplu (raportul beta) al curentului de bază. Acest model descrie mult mai precis caracteristica intrare/ieşire al tranzistorului: curentul de bază stabileşte o un anumit <i>curent</i> în colector, şi nu o anumită <i>rezistenţă</i> colector-emitor, precum în cazul precedent. Din păcate, folosirea unei surse de curent îi poate duce pe cei mai ne-experimentaţi în eroare; un tranzistor <i>nu</i> este în niciun caz o sursă de energie electrică, dar pe model, faptul că sursa de energie este externă tranzistorului, nu este aparentă.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Tranzistorul se află în <i>zona activă de funcţionare</i>, atunci când funcţionează între starea de blocare şi cea de saturaţie</li>
	<li>Curentul bazei regulează curentul colectorului. Acest lucru înseamnă că prin colector nu poate trece un curent mai mare decât valoarea permisă de câtre curentul bazei</li>
	<li>Raportul dintre curentul colectorului şi curentul bazei poartă numele de <i>factor beta</i> sau <i>factor de amplificare în curent</i> al tranzistorului, şi se notează cu β sau h<sub>fe</sub>)</li>
	<li>β variază pentru fiecare tranzistor în parte</li>
	<li>β variază pentru diferite condiţii de operare</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>