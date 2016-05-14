<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Coeficientul de temperatură al rezistenţei</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Coeficientul de temperatură al rezistenţei</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Tabelul rezistivităţilor diferitelor materiale, prezentat în secţiunea precedentă, s-a referit doar la temperatura de 20<sup>o</sup>. Prin urmare, dupa cum aţi putut bănui, rezistivitatea materialelor depinde de temperatură.</p>

<p>Valorile rezistenţelor conductorilor aflaţi la temperaturi diferite faţă de temperatura standard (20<sup>o</sup> tipic), din tabelul rezistivităţilor, se calculează printr-o altă formulă, şi anume:</p>

<div class="formula">
R = R<sub>ref</sub>[1 + α(T - T<sub>ref</sub>)]
unde,
R = rezistenţa conductorului la temperatura „T”
R<sub>ref</sub> = Rezistenţa conductorului la temperatura de referinţă, T<sub>ref</sub>, egală cu 20<sup>o</sup>C în mod uzual, dar poate fi şi 0<sup>o</sup>C
α = coeficientul de temperatură al rezistenţei specific pentru materialul conductor
T = temperatura conductorului (<sup>o</sup>C)
T<sub>ref</sub> = temperatura de referinţa pentru care α este specificat
</div>

<p>Se poate observa din relaţia de mai sus, că în cazul în care temperatura la care se află conductorul este exact temperatura de referinţă (20<sup>o</sup>C), atunci rezistenţa conductorului este exact rezistenţa de referinţă aşa cum este ea calculată din tabelul rezistivităţilor materialelor cu formula: R = ρl/A.</p>

<p>Constanta α, poartă numele de coeficientul de temperatură al rezistenţei, şi simbolizează variaţia rezistenţei cu temperatura; acest coeficient este specific fiecărui tip de material. Pentru metale pure, α este un număr pozitiv, ceea ce înseamnă că rezistenţa creşte odată cu creşterea temperaturii. Pentru carbon, siliciu şi germaniu, acest coeficient este negativ, ceea ce înseamnă că rezistenţa scade odată cu creşterea temperaturii. Pentru anumite aliaje, coeficient de temperatură al rezistenţei este foarte apropiat de valoarea zero, ceea ce înseamnă că rezistenţa aproape că nu se modifică odată cu variaţia temperaturii. În tabelul alăturat sunt prezentate câteva valori ale coeficientului α pentru câteva metale uzuale, pure sau aliaje, pentru temperatura de referinţă (T<sub>ref</sub>) de 20<sup>o</sup>C)</p>

<table>
<tr>
  <th>Material</th>
  <th>Element / Aliaj</th>
  <th>α</th>
</tr>
<tr>
  <td>Nichel</td>
  <td>Element</td>
  <td>0.005866</td>
</tr>
<tr>
  <td>Fier</td>
  <td>Element</td>
  <td>0.005671</td>
</tr>
<tr>
  <td>Molibden</td>
  <td>Element</td>
  <td>0.004579</td>
</tr>
<tr>
  <td>Tungsten</td>
  <td>Element</td>
  <td>0.004403</td>
</tr>
<tr>
  <td>Aluminiu</td>
  <td>Element</td>
  <td>0.004308</td>
</tr>
<tr>
  <td>Cupru</td>
  <td>Element</td>
  <td>0.004041</td>
</tr>
<tr>
  <td>Argint</td>
  <td>Element</td>
  <td>0.003819</td>
</tr>
<tr>
  <td>Platină</td>
  <td>Element</td>
  <td>0.003729</td>
</tr>
<tr>
  <td>Zinc</td>
  <td>Element</td>
  <td>0.003847</td>
</tr>
<tr>
  <td>Aur</td>
  <td>Element</td>
  <td>0.003715</td>
</tr>
<tr>
  <td>Oţel</td>
  <td>Aliaj</td>
  <td>0.003000</td>
</tr>
<tr>
  <td>Nicrom</td>
  <td>Aliaj</td>
  <td>0.000170</td>
</tr>
<tr>
  <td>Nicrom V</td>
  <td>Aliaj</td>
  <td>0.000130</td>
</tr>
<tr>
  <td>Manganină</td>
  <td>Aliaj</td>
  <td>&#177; 0.000015</td>
</tr>
<tr>
  <td>Constantan</td>
  <td>Aliaj</td>
  <td>- 0.000074</td>
</tr>
</table>

<h2>Exemplu</h2>

<p>Să luăm un circuit practic pentru a vedea efectele temperaturii asupra rezistenţei şi implicit asupra performanţei circuitului.</p>

#+CAPTION: circuit electric pentru exemplificare impactului temperaturii asupra rezistenţei şi asupra performanţei circuitului
[[../poze/00289.png]]

<p>Rezistenţa totală a conductorilor din acest circuit este de 30 Ω (R<sub>fir1</sub> + R<sub>fir2</sub>) la temperatura standard de 20<sup>o</sup>C. Folosind metoda tabelului pentru analiza circuitului, obţinem următoarele valori:</p>

<table>
	<tr>
		<th>Mărime</th>
        <th>Fir<sub>1</sub></th>
		<th>Fir<sub>2</sub></th>
		<th>Sarcină</th>
		<th>Total</th>
        <th>Unitate</th>
	</tr>
	<tr>
		<td>E</td>
		<td>0,75</td>
		<td>0,75</td>
		<td>12,5</td>
		<td>14</td>
		<td>V</td>
	</tr>
	<tr>
		<td>I</td>
		<td>50 m</td>
		<td>50 m</td>
		<td>50 m</td>
		<td>50 m</td>
		<td>A</td>
	</tr>
	<tr>
		<td>R</td>
		<td>15</td>
		<td>15</td>
		<td>250</td>
		<td>280</td>
		<td>Ω</td>
	</tr>
</table> 

<p>La 20<sup>o</sup>C, obţinem o cădere de tensiune de 12,5 V la bornele sarcinii şi o cădere de tensiune totală de 1,5 V (0,75 V+ 0,75 V) în lungul conductoarelor datorită rezistenţei acestora. Dacă temperatura ar creşte la 35<sup>o</sup>C, putem vedea ce se întâmplă cu rezistenţele fiecărui conductor. Presupunând că materialul conductor este cuprul (α = 0,004041), obţinem următorul rezultat:</p>

<div class="formula">
R = R<sub>ref</sub>[1 + α(T - T<sub>ref</sub>)]
R = (15 Ω)[1 + 0,004041 (35<sup>o</sup> - 20<sup>o</sup>)]
R = 15,9 Ω
</div>

<p>Reanalizând circuitul de mai sus cu noile valori, putem vedea efectele creşterii temperaturii asupra circuitului.</p>

<table>
	<tr>
		<th>Mărime</th>
        <th>Fir<sub>1</sub></th>
		<th>Fir<sub>2</sub></th>
		<th>Sarcină</th>
		<th>Total</th>
        <th>Unitate</th>
	</tr>
	<tr>
		<td>E</td>
		<td>0,79</td>
		<td>0,79</td>
		<td>12,42</td>
		<td>14</td>
		<td>V</td>
	</tr>
	<tr>
		<td>I</td>
		<td>49,67 m</td>
		<td>49,67 m</td>
		<td>49,67 m</td>
		<td>49,67 m</td>
		<td>A</td>
	</tr>
	<tr>
		<td>R</td>
		<td>15,9</td>
		<td>15,9</td>
		<td>250</td>
		<td>281,82</td>
		<td>Ω</td>
	</tr>
</table> 

<p>După cum se poate observa, tensiunea la bornele sarcinii a scăzut de la 12,5 V la 12,42 V, iar căderea de tensiune în lungul conductorilor a crescut de la 0,75 V la 0,79 V ca şi consecinţă a creşterii temperaturii. Chiar dacă variaţiile par mici, acestea se pot dovedi semnificative în cazul liniilor electrice de transport ce se pot intinde pe kilometri întregi între centralale electrice şi staţiile de transformare şi între staţiile de transformare şi consumatori.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Rezistenţa majorităţii materialelor conductoare variază odată cu variaţia temperaturii de operare</li>
	<li><strong>Coeficientul variaţiei cu temperatura</strong> (α) reprezintă factorul de variaţie pe grad Celsius al rezistenţei materialelor conductoare</li>
	<li>Formula pentru determinarea rezistenţei unui conductor aflat la o temperatură diferită faţă de temperatura de referinţă specificată în tabel, este următoarea:<br/> R = R<sub>ref</sub>[1 + α(T - T<sub>ref</sub>)]</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
