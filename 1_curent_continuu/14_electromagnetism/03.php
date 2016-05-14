<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Unităţi de măsură ale câmpului magnetic</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Unităţi de măsură ale câmpului magnetic</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>În cadrul discuţiei despre magnetism, vom întâlni următoarele mărimi:</p>

<p><b>Forţa magnetomotoare</b> sau <b>tensiunea magnetomotoare</b> - Valoarea forţei câmpului magnetic, sau „împingerea”, analog tensiunii electrice (forţă electromotoare).</p>

<p><b>Fluxul câmpului magnetic</b> - Valoarea efectului total al câmpului magnetic, sau „substanţa” câmpului, analog curentului electric.</p>

<p><b>Intensitatea câmpului magnetic</b> - Cantitatea forţei magnetomotoare distribuită de-a lungul electromagnetului, cunoscută şi sub numele de <i>forţa de magnetizare</i>.</p>

<p><b>Densitatea fluxului magnetic</b> - Valoarea fluxului magnetic concentrat pe o anumită suprafaţă.</p>

<p><b>Reluctanţa</b> - Opoziţia faţă de câmpul magnetic al unui anumit volum din spaţiu sau al unui material, analog rezistenţei electrice.</p>

<p><b>Permeabilitatea</b> - Măsura specifică de acceptare a câmpului magnetic de câtre un material, analoc rezistenţei specifice pentru un material conductiv (ρ), doar că relaţia este inversă, o permeabilitate mai mare înseamnă o trecere mai uşoară a liniilor câmpului magnetic.</p>

<p>Mai jos este tabelul cu unităţile de măsură pentru fiecare mărime:</p>
<table border="1">
	<tr>
		<th>Cantitate</th>
		<th>Simbol</th>
		<th>Unitate de măsură</th>
	</tr>
	<tr>
		<td>tensiunea magnetomotoare</td>
		<td>mmf</td>
		<td>Amper (A)</td>
	</tr>
	<tr>
		<td>fluxul magnetic</td>
		<td>Φ</td>
		<td>Weber (Wb)</td>
	</tr>
	<tr>
		<td>intensitatea magnetică</td>
		<td>H</td>
		<td>Amper / metru (A m<sup>-1</sup>)</td>
	</tr>
	<tr>
		<td>densitatea fluxului magnetic</td>
		<td>B</td>
		<td>Tesla (T)</td>
	</tr>
	<tr>
		<td>reluctanţa</td>
#+CAPTION: simbolul reluctanţei
[[poze/reluctanta.png]]
		<td>Amper / Weber (A Wb<sup>-1</sup>)</td>
	</tr>
	<tr>
		<td>permeabilitatea</td>
		<td>µ</td>
		<td>Henry / metru (H m<sup>-1</sup>)</td>
	</tr>
</table>
		
<p>Relaţiile dintre tensiunea magnetomotoare, fluxul magnet şi reluctanţă sunt asemenea relaţiilor dintre mărimile electrice precum tensiunea electromotoare, curent şi rezistenţă, şi pot fi consuderate un fel de legea lui Ohm pentru circuite magnetice:</p>

#+CAPTION: comparaţie pentru legea lui Ohm între circuitele electrice şi magnetice
[[../poze/10234.png]]

<p>Ştiind faptul că permeabilitatea este asemănătoare rezistenţei specifice (inversă), ecuaţia pentru aflarea reluctanţei materialului magnetic este similară celei pentru aflarea rezistenţei conductorului:</p>

#+CAPTION: comparaţie între rezistenţă electrică şi cea magnetică
[[../poze/10235.png]]

<p>În fiecare dintre cele două cazuri, pentru o bucată mai lungă din acelaşi material opoziţia este mai mare, toţi ceilalţi factorii fiind egali. De asemenea, o secţiune mai mare scade valoarea opoziţiei (rezistenţei electrice şi reluctanţei magnetice), toţi ceilalţi factori fiind egali.</p>

<p>Un lucru important de remarcat este că reluctanţa unui material la fluxul magnetic este <i>afectată</i> de concentraţia liniilor de câmp ce trec prin el. Acest lucru face ca legea lui Ohm pentru circuitele magnetice să aibă un comportament neliniar, prin urmare este mult mai dificilă de aplicat decât în cazul circuitelor electric. Acest efect este analog existenţei unui rezistor ce şi-ar modifica rezistenţa pe măsură ce curentul ce-l străbate variază.</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
