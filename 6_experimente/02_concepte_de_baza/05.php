<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Legea lui Ohm (experiment)</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Legea lui Ohm (experiment)</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Scopul experimentului</h2>

<p>În acest experiment vom încerca să ilustrăm „funcţionarea” legii lui Ohm, construind circuitul de mai jos:</p>

<img src="../poze/05062.png" width="290" height="112" alt="circuit electric simplu"/>

<p>Practic, circuitul va arăta astfel:</p>

<img src="../poze/05063.png" width="250" height="365" alt="circuit electric simplu"/>

<h2>Desfăşurarea experimentului</h2>

<p>Alegeţi un rezistor din trusa voastră. Măsuraţi rezistenţa lui cu ajutorul multimetrului. Notaţi-vă rezultatul pentru a-l putea folosi pe viitor.</p>

<p>Construiţi un circuit format dintr-o baterie şi un rezistor. În figură, circuitul este realizat cu ajutorul unei reglete de borne, dar orice mijloc de realizare a circuitului este la fel de bun. Setaţi multimetrul pe scara de tensiune apropiată şi măsuraţi căderea de tensiune la bornele rezistorului în timp ce este alimentat de la baterie. Notaţi-vă acest rezultat pentru a-l putea folosit mai departe, alături de valoarea rezistenţei de mai sus.</p>

<p>Poziţionaţi selectorul multimetrului pe cea mai mare scară de curent disponibilă. Deschideţi circuitul şi conectaţi ampermetrul între cele două puncte libere. Ampermetrul va fi acum în serie cu bateria şi rezistorul. Selectaţi cea mai bună scară de tensiune: cea care dă cea mai precisă indicaţie a curentului, fără a depăşi scara. Notăţi şi această valoare a curentului alături de valoarea rezistenţei şi a tensiunii.</p>

<p>Luaţi valorile pentru tensiune şi rezistenţa măsurate mai sus şi aplicaţi legea lui Ohm pentru a determina valoarea curentului din circuit. Comparaţi valoarea astfel calculată cu valoarea măsurată cu ajutorul multimetrului:</p>

<div class="formula">
I = E / R
</div>

unde,
E = tensiunea în volţi
I = curentul în amperi
R = rezistenţa în ohmi

<p>Asemănător, luaţi valorile măsurate pentru tensiune şi curent şi aplicaţi legea lui Ohm pentru calcularea rezistenţei circuitului. Comparaţi valoarea obţinută cu cea măsurată cu ajutorul multimetrului:</p>

<div class="formula">
R = E / I
</div>

<p>Şi, în sfârşit, luaţi valorile măsurate mai sus pentru rezistenţa şi curent şi aplicaţi legea lui Ohm pentru calcularea tensiunii circuitului. Comparati valoarea calculată cu cea măsurată:</p>

<div class="formula">
E = IR
</div>

<p>Rezultatele obţinute prin măsurări şi prin calcul ar trebui să fie foarte apropiate, pentru toate cele trei situaţii. Orice diferenţă între respectivele valori ale tensiunii, curentului sau rezistenţei se datorează mai mult ca sigur erorilor aparatului de măsură. Totuşi, aceste diferenţe ar trebui să fie mici, cel mult câteva procente. Desigur, unele aparate de măsură sunt mai precise decât altele.</p>

<p>Înlocuiţi rezistorul din circuitu cu alţi rezistori de mărimi diferite. Refaceţi măsurătorile de rezistenţă, tensiune şi curent. Refaceţi apoi calculele pentru aceste mărimi (cei trei paşi de mai sus). Observaţi relaţia matematică simplă dintre variaţia rezistenţei şi variaţia curentului din circuit. Tensiunea ar trebui însă să rămână aproximativ egală pentru oricare din rezistorii introduşi în circuit, deoarece acesta este rolul unei baterii: să menţină o cădere de tensiune constantă între bornele sale.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li></li>
	<li></li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>