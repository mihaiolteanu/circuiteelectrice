<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Amplificatorul de instrumentaţie</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>10. Amplificatorul de instrumentaţie</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>După cum am spus şi în secţiunea precedentă, este de dorit modificarea factorul de amplificare al circuitului fără a schimba mai mult de un rezistor, aşa cum era cazul exemplului precedent. Această posibilitatea se poate realiza cu ajutorul amplificatorului de <i>instrumentaţie</i>:</p>

#+CAPTION: amplificatorul de instrumentaţie
[[../poze/03046.png]]

<p>Circuitul este construit din două amplificatoare diferenţiale şi trei rezistori ce conectează cele două amplificatoare împreună. Considerăm că toţi rezistorii din circuit sunt egali, cu excepţia rezistorului R<sub>amplificare</sub>. Reacţia negativă a AO din stânga sus duce tensiunea din punctul 1 (deasupra lui R<sub>amplificare</sub>) la o valoare egală cu V<sub>1</sub>. Asemănător, tensiunea la punctul 2 (sub R<sub>amplificare</sub> este menţinută la o valoare egală cu V<sub>2</sub>. Caderea de tensiune la bornele lui R<sub>amplificare</sub> va fi egală cu diferenţa de tensiune dintre V<sub>1</sub> şi V<sub>2</sub>. Această cădere de tensiune duce la apariţia unui curent prin R<sub>amplificare</sub>, şi din moment ce curentul prin buclele de reacţie a celor două amplificatoare este zero, curentul prin R<sub>amplificare</sub> trebuie să fie egal cu valoarea curentului prin cele două rezistoare R din imediata sa vacinătate. Căderea de tensiune între punctele 3 şi 4 va fi prin urmare egală cu:</p>

<div class="formula">
V<sub>3-4</sub> = (V<sub>2</sub> - V<sub>3</sub>)(1 + 2R / R<sub>amplificare</sub>)
</div>

<p>Amplificatorul diferenţial din dreapta va amplifica această cădere de tensiune dintre punctele 3 şi 4 cu un factor de 1 (presupunând că valorile tuturor rezistorilor R sunt egale). Deşi modul de realizare al acestui AO pare greoi, avantajul constă în impedanţele de intrare extrem de mari pentru V<sub>1</sub> şi V<sub>2</sub>, iar amplificarea se poate ajusta prin variaţia valorii unui singur rezistor. Din formula de mai sus reiese şi factorul de amplificare în tensiune al unui amplificator de instrumentaţie:</p>

<div class="formula">
A<sub>V</sub> = (1 + 2R / R<sub>amplificare</sub>)
</div>

<p>Cea mai mică amplificare posibilă cu ajutorul configuraţiei de mai sus este 1, atunci când R<sub>amplificare</sub> este deschis (rezistenţa infinită).</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Un <i>amplificator diferenţial</i> este un circuit diferenţial cu amplificatoare operaţionale, având impedanţa de intrare foarte mari şi un factor de amplificare ajustabil prin intermediul variaţiei rezistenţei unui singur rezistor</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
