<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Calcularea şi corectarea factorului de putere</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Calcularea şi corectarea factorului de putere</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Unghiul acestui „triunghi al puterilor” reprezintă raportul dintre valoarea puterii disipate (sau consumate) şi cantitatea de putere absorbită/returnată. De asemenea, reprezintă şi unghiul de fază al impedanţei circuitului, sub formă polară. Acest raport dintre puterea reală şi puterea aparentă poartă numele de <i>factor de putere</i> al circuitului. De asemenea, din geometria triunghiului, putem deduce că factorul de putere este egal şi cu cosinusul unghiului de fază. Folosind valorile din circuitul precedent:</p>

#+CAPTION: calculul factorului de putere al circuitului
[[../poze/12124.png]]

<p>Fiind calculat ca un raport, factorul de putere nu are unitate de măsură.</p>

<p>Pentru circuitele pur rezistive, factorul de putere este 1 (perfect), deoarece puterea reactivă este egală cu zero. În acest caz, triunghiul puterilor este o linie orizontală, deoarece latura opusă (puterea reactivă) va avea lungimea zero.</p>

<p>Pentru circuitele pur inductive, factorul de putere este zero, datorită faptului că puterea reală este zero. În acest caz, triunghiul puterilor este o linie verticală, deoarece latura adiacentă (puterea reală) va avea lungimea zero. Acelaşi lucru este valabil şi pentru circuitele pur capacitive, doar că sensul liniei verticale va fi în jos, nu în sus, cum este cazul circuitelor pur inductive.</p>

<p>Factorul de putere este un element foarte important în proiectarea circuitelor electrice de curent alternativ, deoarece un factor de putere mai mic decât 1 înseamnă că circuitul respectiv, sau mai bine spus, conductorii circuitului în cauză, trebuie să conducă mai mult curent decât ar fi necesar dacă reactanţa circuitului ar fi zero, caz în care, cu un curent mai mic, puterea reală distribuită pe sarcină ar fi aceeiaşi. Un curent mai mare înseamnă secţiuni ale conductorilor mai mari, ceea ce afectează direct costurile realizării instalaţiei electrice. Dacă circuitul considerat mai sus, ar fi fost pur rezistiv, am fi putut transporta o putere de 169.256 W spre sarcină, cu aceeiaşi valoare a curentului de 1.410 A, şi nu doar 119.365 W, valoare ce este disipată în acest moment pe sarcină. Factorul de putere scăzut se traduce printr-un sistem de distribuţie ineficient.</p>

<p>Factorul de putere poate fi însă corectat, paradoxal, prin adăugarea în circuit a unei sarcini suplimentare care să „consume” o cantitate egală de putere reactivă, dar de sens contrar, pentru anularea efectelor reactanţei inductive a sarcinii. Reactanţele inductive pot fi anulate şi cu ajutorul reactanţelor capacitive, şi anume, prin adăugarea unui condensator în paralel cu sarcina (în circuitul precedent). Efectul celor două reactanţe opuse, conectate în paralel, este să aducă impedanţa totală a circuitului la o valoare egală cu cea a rezistenţei totale. Rezultatul reducerea unghiului impedanţei la zero, sau o valoarea cât mai apropiată de zero.</p>

<p>Ştim că puterea reactivă, necorectată, este de 119.998 VAR (inductiv), prin urmare, trebuie să calculăm mărimea corectă a condensatorului, mărime necesară pentru a produce o cantitate egală de putere reactivă (capacitivă). Condensatorul va fi conectat în parelel cu sursa, prun urmare, vom folosi următoarea formulă:</p>

#+CAPTION: calcule matematice
[[../poze/12125.png]]

<p>Folosim un condensator cu o capacitate de 22 µF:</p>

#+CAPTION: corectarea factorului de putere prin adăugarea unui condensator în paralel cu sarcină rezistiv-inductivă
[[../poze/02219.png]]

#+CAPTION: calcule matematice
[[../poze/12126.png]]

<p>Factorul de putere al circuitului a crescut substanţial, fiind foarte aproape de valoarea 1. Curentul principal a scăzut de la 1.41 A la 994.7 mA, iar puterea disipată pe rezistorul de sarcină a rămas neschimbată, 119.365 W.</p>

#+CAPTION: calcule matematice
[[../poze/12127.png]]

<p>Din moment ce impedanţa finală este un număr pozitiv, putem spune că, per total, inductivitatea circuitului este mai mare decât capacitatea sa. Dacă corectarea factorului de putere ar fi fost perfectă, unghiul impedanţei ar fi fost zero, sau pur rezistiv. Dacă în schimb, am fi adăugat un condensator prea mare în paralel, am fi obţinut un unghi al impedanţei negativ, indicând faptul că inductivitatea circuitului este mai mică decât capacitatea sa. Cu un factor de putere de 0.9999, defazajul dintre curent şi tensiune este foarte aproape de 0<sup>o</sup>.</p>

<p>Dim moment ce curentul şi tensiunea sunt aproximativ în fază, produsul celor două va da o putere pozitivă pe aproximativ întreaga perioadă. Cu un factor de putere mult sub 1, produsul celor două ar fi fost negativ, fapt ce duce la reintroducerea puterii negative în circuit, înapoi spre generator. Această putere nu poate fi „vândută”, dar circulaţia sa de la sursă la sarcină şi invers, duce la pierderi de putere în lungul liniilor de transport datorită rezistenţei acestora. Conectarea condensatorului în paralel cu sarcina, rezolvă această problemă.</p>

<p>De notat faptul că reducerea pierderilor prin liniile de transport al curentului electric, se aplică doar de la generator la punctul de corecţie a factorului de putere (datorită condensatorului). Cu alte cuvinte, există în continuare circulaţie electrică între condensator şi sarcina (rezistiv-)inductivă. Acest lucru nu este în general o problemă însă, deoarece aplicarea corecţiei factorului de putere se realizează în vecinătatea sarcinii în cauză.</p>

<p>De asemenea, o capacitatea prea mare într-un circuit de curent alternativ va duce la un factor de putere scăzut, la fel ca în cazul unei inductanţe prea mari. Trebuie să fim prin urmare foarte atenţi când realizăm corectarea factorului de putere, pentru a nu supra-corecta circuitul.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Corectarea factorului de putere dintr-un circuit poate fi realizată prin conectarea în paralel a unei reactanţă opuse faţă de reactanţa sarcinii. Dacă reactanţă sarcinii este inductivă, ceea ce este cazul aproape tot timpul, factorul de putere se corectează prin adăugarea unui condensator în paralel cu sarcina</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
