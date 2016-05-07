<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Calcularea puterii</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Calcularea puterii</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>La calcularea puterii disipate pe componentele rezistive, putem folosi oricare dintre ecuaţiile de putere în funcţie de mărimile cunoscute: tensiune, curent şi/sau rezistenţă pe fiecare component.</p>

<div class="formula">
P = IE
P = E<sup>2</sup> / R
P = I<sup>2</sup>R
</div>

<p>Acest lucru este mult mai uşor de realizat prin simpla adăugare a unui rând adiţional în tabelul tensiunilor, curenţilor şi rezistenţelor.</p>

<table class="floatleft">
	<tr>
        <th>R<sub>1</sub></th>
		<th>R<sub>2</sub></th>
		<th>R<sub>3</sub></th>
		<th>Total</th>
        <th>Unitate</th>
	</tr>
	<tr>
		<td>E</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td>V</td>
	</tr>
	<tr>
		<td>I</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td>A</td>
	</tr>
	<tr>
		<td>R</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td>Ω</td>
	</tr>
		<tr>
		<td>P</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td>W</td>
	</tr>
</table> 

<p>Indiferent de coloană, puterea se va afla folosind ecuaţia corespunzătoare a legii lui Ohm.</p>

<p>O regulă interesantă pentru puterea totală vizavi de puterea individuală, este că aceasta este aditivă indiferent de configuraţia circuitului în cauză: serie, paralel, serie-paralel sau altfel. Fiind o expresie a lucrului mecanic efectuat, puterea configuraţia circuitului nu are niciun efect asupra calculelor matematice dacă luăm în considerare şi faptul că puterea disipată trebuie să fie egală cu puterea totală introdusă de către sursă în circuit (conform legii conservării energiei).</p>

<p>Atenţie, cele de mai sus se aplică doar în cazul calculării puterilor în circuitele pur rezistive (ce conţin doar rezistori).</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Indiferent de configuraţia circuitelor rezistive, puterea totală este suma puterilor individuale de pe fiecare componente:<br/>P<sub>total</sub> = P<sub>1</sub> + P<sub>2</sub> + ... + P<sub>n</sub></li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>