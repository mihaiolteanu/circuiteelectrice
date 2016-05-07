<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Amplificatorul tensiune-curent</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>7. Amplificatorul tensiune-curent</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>În circuitele de instrumentaţie, semnalele de c.c. sunt folosite adesea pentru reprezentarea analogică a unei mărimi fizice precum temperatura, presiunea, greutatea şi mişcarea. De obicei se preferă utilizarea semnalelor de <i>curent</i> şi nu a celor de <i>tesniune</i>, deoarece semnalele de curent sunt egale prin întreaga buclă a  circuitului serie, de la sursă (aparatul de măsură) până la sarcină (indicator, controler), pe când semnalele de tensiune în circuitele paralel pot veria de la un capăt la celălalt datorită pierderilor rezistive din fire. Mai mult, instrumentele de măsură ale curentului posedă în general o impedanţa mică de intrare, pe când instrumentele de măsură ale tensiunii au impedanţe mari de intrare; acest lucru înseamnă că cele de curent au o imunitate crescută faţă de gzgomotul electric.</p>

<p>Pentru a putea folosi curentul ca şi metodă de reprezentare a mărimilor fizice, trebuie să putem genera o cantiate precisă de curent în circuitul de semnal. Dar cum putem genera o cantitate precisă de curent dacă nu cunoaştem rezistenţa buclei de circuit. Răspunsul constă în utilizarea unui amplificator cu scopul menţinerii curentului prin circuit la o valoare prestabilită, aplicând o cădere de tensiune mai mică sau mai mare pentru îndeplinirea acestui obiectiv. Un astfel de amplificator se comportă precum o <i>sursă de curent</i>. Un AO cu reacţie negativă este o soluţie foarte bună pentru această problemă:</p>

<p><img src="../poze/03039.png" alt="amplificator operaţional cu reacţie negativă"/></p>

<p>Se presupune că tensiunea de intrare a acestui circuit este generată de un circuit traductor/amplificator, calibrat pentru producerea valorii de 1 V pentru 0% din mărimea de măsurat şi 5 V pentru 100% din valoarea mărimii de măsurat. Semnalul de curent analog standar este între 4 mA (0%) şi 20 mA (100%). Pentru o tensiune de intrare de 5 V, rezistorul (de precizie) de 250 Ω va avea o cădere de tensiune de 5 V la bornele sale, rezultând un curent de 20 mA prin bucla circuitului (incluzând rezistorul de sarcină, R<sub>sarcină</sub>). Nu contează rezistenţa rezistorului R<sub>sarcină</sub>, sau cât rezistenţa adiţională este prezentă în circuit datorită conductorilor, atâta timp cât AO are o sursă de putere suficient de mare pentru generarea celor 20 mA prin R<sub>sarcină</sub>. Rezistorul de 250 Ω stabileşte relaţie dintre tensiunea de intrare şi curentul de ieşire, ducând în acest caz la echivalenţa 1-5 V intrare / 4-20 mA ieşire.</p>

<p>Acest circuit mai este cunoscut şi sub numele de <i>amplificator de transconductanţă</i>. În electronică, transconductanţa este raportul dintre variaţia curentului şi variaţia tensiunii (ΔI / Δ V), şi se măsoară în Siemens, aceeiaşi unitate de măsură pentru exprimarea conductanţei, reciproca matematică a rezistenţei. În acest circuit, valoarea raportului de transconductanţă este fixată de către valoarea de 250 Ω a rezistorului, asigurând o relaţie linieră curent-ieşire/tensiune-intrare.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>În industrie, semnalele de curent în c.c. sunt adesea folosite în dauna semnalelor de tensiune în c.c., pentru reprezentarea mărimilor fizice</li>
	<li>Semnalele de tensiune se pot produce relativ uşor direct de la dispozitivele traductoare, pe când semnalele de curent nu. AO pot fi folosite pentru realizarea „conversiei” unui semnal de tensiune într-un semnal de curent. În acest mod de funcţionare, AO vor genera la ieşire o cădere de tensiune necesară pentru menţinerea curentului prin circuitul de semnal la o valoarea bine stabilită</li>
</ul>
</div>

<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>