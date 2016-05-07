<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Fazele curentului alternativ</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Fazele curentului alternativ</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Lucrurile încep să se complice atunci când trebuie să comparăm două sau mai multe forme de undă alternative ce sunt defazate între ele. Prin această „defazare” se înţelege faptul că formele de undă nu sunt sincronizate, valorile lor de vârf şi punctele de intersecţie cu axa orizontală nu sunt identice în timp. Figura de mai jos ilustrează acest lucru:</p>

<p><img src="../poze/02019.png" alt="forme de undă sinusoidale defazate între ele"/></p>

<p>Cele două unde de mai sus (A şi B) au aceeiaşi amplitudine şi frecvenţă, dar sunt defazate între ele. În exemplele precedente am considerat faptul că funcţia trigonometrică sinus este reprezentată grafic pornind din punctul zero (zero grade), continuând până la valoarea sa maximă pozisitvă la 90 de grade, din nou la zero la 180 de grade, minimă negativă la 270 de grade şi înapoi la punctul de plecare la 360 de grade. Putem folosi această scară pentru axa orizontală pentru a exprima valoarea defazajului dintre cele două unde:</p>

<p><img src="../poze/02020.png" alt="folosirea axei orizontale gradate de la 0 la 360 de grade pentru vizualizarea defazajului dintre două forme de undă sinusoidale - defazaj de 45 de grade"/></p>

<p>Defazajul (diferenţa de fază) dintre cele două forme de undă este de 45 de grade, unda A fiind înaintea undei B. O comparaţie între defazaje diferite ale undelor în graficiele de mai jos ilustrează mai bine acest concept:</p>

<p><img src="../poze/02021.png" alt="graficul diferitelor defazaje între două forme de undă"/></p>

<p>Deoarece formele de undă de mai sus au aceeiaşi frecvenţă, defazajul dintre ele este acelaşi în oricare punct din timp. Din acest motiv, putem exprima defazajul dintre două sau mai multe forme de undă ce au aceeiaşi frecvenţă ca şi o valoare constantă pentru întreagă undă, şi nu doar între două puncte particulare. Putem spune prin urmare că tensiunea A este defazată cu 45 de grade faţă de tensiunea B, de exemplu. Forma de undă ce este în faţă se numeşte <i>defazată înainte</i>, iar cea care este în urmă spunem că este <i>defazată înapoi</i>.</p>

<p>Defazajul, ca şi tensiunea, este tot timpul o valoare relativă între două lucruri. Nu putem spune că o formă de undă are o anumită fază <i>absolută</i> pentru că nu există o referinţă universală pentru fază. În mod uzual, în analiza circuitelor de curent alternativ, forma de undă a sursei de energie este folosita ca şi referinţă de fază, sub formă de „x volţi la 0 grade”. Orice altă tensiune sau curent alternativ va fi în fază sau defazată înainte sau înapoi faţă de această undă de referinţă.</p>

<p>Din acest motiv, circuitele de curent alternativ sunt mult mai complicate decât cele de curent continuu. La aplicarea legilor lui Ohm şi Kirchhoff, trebuiesc luate în considerare atât amplitidinile cât şi diferenţele de faze între undele de tensiune sau curent. Operaţiile de adunare, scădere, înmulţire sau împărţire trebuie să ia în considerare aceste lucruri, folosind sistemul <i>numerelor complexe</i> pentru reprezentarea amplitidinii şi a fazei.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Diferenţa de fază (defazajul) reprezintă nesincronizarea a două sau a mai multor forme de undă între ele</li>
	<li>Valoarea defazajului dintre două forme de undă poate fi exprimată prin grade</li>
	<li>Două sau mai multe forme de undă pot fi defazate înainte, înapoi sau se pot afla în fază (diferenţa de fază de 0 grade)</li>
	<li>Rezolvarea circuitelor de curent alternativ trebuie să ia în considerare atât amplitudinea undei cât şi diferenţele de fază existente; matematic, acest lucru se realizează cu ajutorul numerelor complexe</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>