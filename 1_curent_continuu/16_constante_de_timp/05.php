<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Cazuri speciale de calcul</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Cazuri speciale de calcul</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Există cazuri de analiză a circuitelor de curent continuu tranzitorii în care componentele reactive (condensatori sau bobine) nu sunt iniţial „descărcate”, prin urmare, valorile iniţiale ale tensiunii şi curentului nu sunt zero. Cu alte cuvinte, condensatorul poate fi parţial încărcat la momentul iniţial (tensiunea la bornele sale este diferită de zero), iar bobina poate fi deja străbătuta de un anumit curent la momentul iniţial. Să luăm următorul circuit ca şi exemplu; iniţial întrerupătorul este deschis, iar la momentul final acesta este închis:</p>

<p><img src="../poze/00334.png" alt="circuit L/R"/></p>

<p>Deoarece acesta este un circuit inductiv, începem analiza prin determinarea valorilor iniţiale şi finale ale <i>curentului</i>. Acest pas este extrem de important în analiza circuitelor inductive, deoarece valorile iniţiale şi finale ale <i>tensiunii</i> nu pot fi cunoscute decât după determinarea curentului! Cu întrerupătorul în poziţia deschis (condiţia iniţială), rezistenţa serie totală este de 3 Ω, ceea ce limitează valoarea finală a curentului din circuit la 5 A:</p>

<p><img src="../poze/10256.png" alt="formulă"/></p>

<p>Asfel, chiar înainte de a închide întrerupătorul, avem un curent de 5 A prin bobină, faţă de 0 A în exemplul din secţiunea precedentă (link!). Când întrerupătorul este închis (condiţia finală), rezistorul de 1 Ω este scurt-circuitat, iar valoarea totală a rezistenţei din circuit se reduce la 2 Ω (R<sub>1</sub>); valoarea finală a curentului prin circuit cu întrerupătorul închis este:</p>

<p><img src="../poze/10257.png" alt="formulă"/></p>

<p>Prin urmare, bobina din acest circuit are un curent iniţial de 5 A şi unul final de 7.5 A. Deoarece ne interesează ce se întâmplă în circuit după închiderea întrerupătorului şi scurt-circuitarea rezistorului R<sub>2</sub>, calcularea constantei de timp se calculează pentru L<sub>1</sub> şi R<sub>1</sub>: 1 Henry / 2 Ω, sau τ = 1/2 secunde. Cu aceste valori, putem acum calcula valorile curentului în timp. Tensiune pe bobină este egală cu diferenţa dintre tensiunea bateriei (15 V) şi produsul dintre curentul circuitului (7.5 A) şi rezistenţa R<sub>1</sub> (2 Ω). Dacă observăm că tensiunea iniţială la bornele bobinei este de 5 V şi apoi scade la 0 volţi după un timp infinit de la închiderea întrerupătorului, putem folosi aceste valori în formula universală a constantei (link!) de timp pentru a ajunge la aceleaşi rezultate:</p>

<p><img src="../poze/10258.png" alt="formulă"/></p>

<b><pre>
|-------------------------------------------|
|   Timp   | Tensiune | Tensiune  | Curent  |
|(secunde) | baterie  |  bobină   |         |
|-------------------------------------------|
|    0     |   15 V   |    5 V    |   5 A   |
|-------------------------------------------|
|   0.1    |   15 V   |  4.094 V  | 5.453 A |
|-------------------------------------------|
|   0.25   |   15 V   |  3.033 V  | 5.984 A |
|-------------------------------------------|
|   0.5    |   15 V   |  1.839 V  | 6.580 A |
|-------------------------------------------|
|    1     |   15 V   |  0.677 V  | 7.162 A |
|-------------------------------------------|
|    2     |   15 V   |  0.092 V  | 7.454 A |
|-------------------------------------------|
|    3     |   15 V   |  0.012 V  | 7.494 A |
|-------------------------------------------|
</pre></b>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>