<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Teorema transferului maxim de putere</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>11. Teorema transferului maxim de putere</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Teorema transferului maxim de putere nu este neapărat o metodă de analiza a reţelelor ci este folosită pentru optimizarea design-ului sistemelor. Pe scurt, puterea disipată pe o rezistenţă este maximă atunci când valoarea rezistenţei este egală cu rezistenţa Thevenin/Norton a reţelei de alimentare. Dacă rezistenţa sarcinii este mai mare sau mai mică decât rezistenţa Thevenin/Norton, puterea disipată de aceasta nu va atinge valoarea maximă (eficienţă scăzută).</p>

<p>Acest lucru se urmăreşte în realizarea unui sistem stereo, unei dorim ca „impedanţă” difuzorului să fie aceeiaşi cu „impedanţă” amplificatorului pentru puterea de ieşire (sunet) maximă. Impedanţa este asemănătoare rezistenţei, doar că implică şi efectele curentului alternativ pe lângă cel continuu. O valoare a impedenţei prea mare va rezulta într-o putere de ieşire scăzută. O impedanţă prea mică, pe de altă parte, va rezulta de asemenea într-o putere de ieşire scăzută dar şi într-o posibilă încălzire excesivă a amplificatorului.</p>

<p>Revenind la circuitul studiat până acum...</p>

<p><img src="../poze/00209.png" alt="circuit electric"/></p>

<p>...conform teoremei transferului maxim de putere, valoarea rezistenţei de sarcină pentru disiparea puterii maxime din circuit, trebuie să fie egală cu rezistenţa Thevenin (0.8 Ω, în acest caz):</p>

<p><img src="../poze/00249.png" alt="circuit electric"/></p>

<p>Cu această valoare a rezistenţei, puterea disipată va fi de 39.2 watt:</p>

<p><img src="../poze/10204.png" alt="tabel"/></p>

<p>Dacă micşorăm valoarea rezistenţei de sarcină (la 0.5 Ω în loc de 0.8 Ω, de exemplu), puterea disipată pe sarcină descreşte:</p>

<p><img src="../poze/10205.png" alt="tabel"/></p>

<p>Dacă valoarea rezistenţei sarcinii creşte (la 1.1 Ω în loc de 0.8 Ω, de exemplu), puterea disipată va fi de asemenea mai mică decât valoarea acesteia pentru 0.8 Ω:</p>

<p><img src="../poze/10206.png" alt="tabel"/></p>

<p>Această teoremă este foarte folositoare atunci când dezoltăm un circuit electric pentru folosirea (disiparea) puterii maxime pe sarcină .</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Conform teoremei transferului maxim de putere, cantitatea de putere disipată pe o sarcină este maximă atunci când valoarea acestei rezistenţe este egală cu rezistenţa Thevenin sau Norton a reţelei de alimentare a sarcinii</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>