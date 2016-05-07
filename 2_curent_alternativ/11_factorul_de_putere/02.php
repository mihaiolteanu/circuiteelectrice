<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Puterea reală, reactivă şi aparentă</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Puterea reală, reactivă şi aparentă</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Se ştie că elementele reactive precum bobinele şi condensatoarele nu disipă putere, dar existenţa căderii de tensiune şi curentului la bornele lor, dă impresia că acestea ar disipa putere. Această „putere nevăzută” poartă numele de <i>putere reactivă</i>, iar unitatea sa de măsură este <i>Volt-Amper-Reactiv</i>, VAR, şi nu Watt-ul. Simbolul matematic pentru puterea reactivă este „Q”. Puterea reală disipată, sau consumată, dintr-un circuit, poartă numele de <i>putere reală</i>, unitatea sa de măsură este Watt-ul, iar simbolul matematic este „P”. Combinaţie dintre cele două puteri, cea reactivă şi cea reală, poartă numele de <i>putere aparentă</i>. Unitatea de măsură a puterii aparente este Volt-Amper, iar simbolul matematic este „S”.</p>

<p>Ca şi regulă, puterea reală este o caracteristică a elementelor disipative, de obicei rezistori, puterea reactivă caracterizează reactanţa (X) circuitului, iar puterea aparentă depinde de impedanţa (Z) totală a circuitului. Datorită faptului că folosim valori scalare pentru reprezentarea puterilor, toate valorile complexe ale tensiunilor, curenţilor şi impedanţelor trebuie să fie reprezentate sub formă polară şi nu sub formă reală sau rectangulară. </p>

<p>Relaţiile dintre cele trei tipuri de putere şi rezistenţă, reactanţă şi impedanţa (folosind valori scalare), sunt următoarele:</p>

<p><img src="../poze/12123.png" alt="formulele de calcul pentru puterea reală, reactivă şi aparentă, în funcţie de rezistenţă, reactanţă şi impedanţă"/></p>

<p>Există două ecuaţii pentru calcularea puterilor reale şi reactive, dar există trei ecuaţii pentru calcularea puterii aparente, P=IE fiind folosită doar în acest scop. Să luăm următoarele circuit pur rezistiv ca şi prim exemplu:</p>

<p><img src="../poze/02215.png" alt="calcularea puterii reale, reactive şi aparente într-un circuit electric de curent alternativ pur rezistiv"/></p>

<p>Pentru un circuit pur inductiv (pur reactiv):</p>

<p><img src="../poze/02216.png" alt="calcularea puterii reale, reactive şi aparente într-un circuit electric de curent alternativ pur inductiv"/></p>

<p>Pentru un circuit rezistiv-inductiv:</p>

<p><img src="../poze/02217.png" alt="calcularea puterii reale, reactive şi aparente într-un circuit electric de curent alternativ pur rezistiv-inductiv"/></p>

<h3>Triunghiul puterii</h3>

<p>Relaţia dintre cele trei tipuri de putere, reală, reactivă şi aparentă, poate fi exprimată sub formă trigonometrică. Această exprimare este cunoscută sub numele de <i>triunghiul puterii</i>.</p>

<p><img src="../poze/02218.png" alt="triunghiul puterii"/></p>

<p>Folosind teorema lui Pitagora, putem afla lungimea oricărei laturi a triunghiului dreptunghic, latură ce reprezintă de fapt puterea respectivă, dacă ştim „lungimile” celorlalte două laturi, sau o lungime şi unghiul de fază din circuit</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Puterea disipată de o sarcină, sub formă de rezistor, poartă numele de <i>putere reală</i>. Simbol matematic: P, unitate de măsură: Watt (W)</li>
	<li>Puterea absorbită şi returnată în circuit datorită proprietătilor reactive ale sarcinii, sub formă de condensator sau bobină, poartă numele de <i>putere reactivă</i>. Simbol matematic: Q, unitate de măsură: Volt-Amper-Reactiv (VAR)</li>
	<li>Puterea totală dintr-un circuit de curent alternativ, atât cea disipată cât şi cea abosrbită/returnată, poartă numele de <i>putere aparentă</i>. Simbol matematic: S, unitate de măsură: Volt-Amper (VA)</li>
	<li>Relaţia dintre cele trei puteri se poate reprezenta sub formă trigonometrică, si anume cu ajutorul „triunghiului puterii”, unde: P - latura adiacentă, Q - latura opusă, S - ipotenuză, unghiul opus este egal cu unghiul de fază al impedanţei din circuit (Z)</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>