<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Calcularea puterii electrice</title>
  </head>
<body>
  <div id="meniu"><?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?></div>
  <div id="header">
	<h1>3. Calcularea puterii electrice</h1>
  </div>
  
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>  

<div id="contents">
<p>Am văzut formula pentru determinarea puterii într-un circuit electric: prin înmulţirea curentului (în amperi) cu tensiunea (în volţi) ajungem la „watti”. Să aplicăm această formulă unui circuit:</p>

#+CAPTION: circuit simplu: baterie plus bec, calcularea puterii
[[../poze/00040.png]]

<p>În circuitul de sus avem o baterie de 18 V, şi un bec cu o rezistenţă de 3 Ω. Folosind legea lui Ohm pentru determinarea curentului, obţinem:</p>

#+CAPTION: calcule matematice
[[../poze/10015.png]]

<p>După ce am aflat valoarea curentului, putem lua această valoare şi să o înmulţim cu cea a tensiunii pentru a determina puterea:</p>

#+CAPTION: calcule matematice
[[../poze/10016.png]]

<p>Prin urmare, becul degajează o putere de 108 W, atât sub formă de lumină, cât şi sub formă de căldură.</p>

<p>Să încercăm acum să luăm acelaşi circuit, dar să mărim tensiunea la bornele bateriei (schimbăm baterie) şi să vedem ce sa întâmplă. Intuiţia ne spune că va creşte curentul prin circuit pe măsură ce tensiunea bateriei creşte iar rezistenţa becului rămâne aceeiaşi. Şi puterea va creşte de asemenea:</p>

#+CAPTION: circuit simplu: baterie plus bec, calcularea puterii 2
[[../poze/00041.png]]

<p>Acum, tensiunea bateriei (tensiunea electromotoare) este de 36 V în loc de 18 V cât era înainte. Becul are o valoarea a rezistenţei tot de 3 Ω. Curentul este acum:</p>

#+CAPTION: calcule matematice
[[../poze/10017.png]]

<p>Trebuia să ne aşteptăm la acest lucru: dacă I = E/R, şi dublăm E-ul pe când R-ul rămâne acelaşi, curentul ar trebui să se dubleze. Întradevăr, asta s-a şi întâmplat; acum avem 12 A în loc de 6 A câţi aveam înainte. Să calculăm acum şi puterea:</p>

#+CAPTION: calcule matematice
[[../poze/10018.png]]

<p>Observăm că puterea a crescut precum ne-am fi aşteptat, dar a crescut puţin mai mult decât curentul. De ce? Pentru că puterea este funcţie de produsul dintre tensiune şi curent, iar în acest caz, <i>ambele</i> valori, şi curentul şi tensiunea, s-au dublat faţă de valorile precedente, asfel că puterea a crescut cu un factor de 2 x 2, adică 4. Puteţi verifica acest lucru împărţind 432 la 108 şi observând că proporţia dintre cele două valori este întradevăr 4.</p>

<p>Folosind reguli algebrice pentru a manipula formulele, putem lua formula originală a puterii şi să o modificăm pentru cazurile în care nu cunoaştem şi tensiunea şi curentul:</p>

<p>În cazul în care cunoaştem doar tensiunea (E) şi rezistenţa (R):</p>

#+CAPTION: formule matematice
[[../poze/10019.png]]
	
<p>În cazul în care cunoaştem doar curentul (I) şi rezistenţa (R):</p>

#+CAPTION: calcule matematice
[[../poze/10020.png]]

<p>O notă istorică: <a class="link_extern" href="http://ro.wikipedia.org/wiki/James_Prescott_Joule">James Prescott Joule</a> este cel care a descoperit relaţia matematică între disiparea puterii şi curentul printr-o rezistenţă, nu <a class="link_extern" href="http://ro.wikipedia.org/wiki/Georg_Simon_Ohm">Georg Simon Ohm</a>. Această descoperire, publicată în 1843 sub forma ultimei ecuaţii (P = I<sup>2</sup>R), şi este cunoscută ca „Legea lui Joule”. Datorită faptului că aceste ecuaţii ale puterii sunt strâns legate de ecuaţiile legii lui Ohm legate de tensiune, curent şi rezistenţă (E=IR; I=E/R; R=E/I) sunt adeasea acreditate lui Ohm.</p>

</div>

<p class="sumar">Sumar:</p>
<ul>
	<li>Puterea se măsoară în <i>watt</i>i, simbolizat prin litera „W”.</li>
	<li>Legea lui Joule (ecuaţiile de putere): P = I<sup>2</sup>R ; P = IE ; P = E<sup>2</sup>/R</li>
</ul>

<div id="footer">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>

</body>
</html>
