<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Realizarea unui amplificator diferenţial</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>8. Realizarea unui amplificator diferenţial</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Un aplificator fără reacţie negativă este deja un amplficator diferenţial, amplificând diferenţa de tensiune dintre cele două intrări. Totuşi, factorul său de amplificare nu poate fi controlat şi este de obicei prea mare pentru oricare aplicaţie practică. Folosirea reacţiei negative în circuitele cu AO a dus la „pierdere” unei intrări, amplificatorul rezultat putând fi folosit doar pentru amplificarea unui singur semnal de intrare. Putem însă construi un circuit cu AO, menţinând ambele intrări, dar cu un factor de amplificare controlat de elemente (rezistori) externe.</p>

<p><img src="../poze/03044.png" alt="amplificator diferenţial folosind un AO cu divizoare de tensiune pe cele două intrări"/></p>

<p>Dacă valorile tuturor rezistorilor sunt egale, acest amplificator va avea o amplificare diferenţială a tensiunii de 1. Analiza acestui circuit este practic identică cu cea a unui amplificator inversor, cu diferenţa că tensiunea pe intrarea neinversoare (+) a AO este egală cu o fracţiune din V<sub>2</sub>, şi nu este conectată la masă cum era cazul amplificatorului inversor. Prin urmare, V<sub>2</sub> reprezintă semnalul pe intrarea neinversoare, iar V<sub>1</sub> reprezintă semnalul pe intrarea inversoare.</p>

<div class="formula">
V<sub>ieşire</sub> = V<sub>2</sub> - V<sub>1</sub>
</div>

<p>Dacă dorim realizarea unei amplificări diferenţiale de tensiune diferită de 1, va trebui să ajustăm valorile <i>ambelor</i> divizorare de tensiune. Acest lucru necesită multiple schimbări ale rezistorilor şi echilibrarea celor doi divizori de tensiune pentru funcţionarea simetrică a circuitului, ceea ce nu este foarte practic.</p>

<p>O altă limitare a acestui circuit este faptul că impedanţele sale de intrare sunt mici în comparaţie cu alte configuraţii cu AO, în special amplificatorul neinversor (cu o singură intrare). Fiecare sursă de tensiune de intrare trebuie să genereze curenţi prin rezistori, ceea ce contribuie la o impedanţă mult mai mică decât impedanţa de intrare a unui AO „pur”. Soluţia la această problemă, din fericire, este destul de simplă. Tot ceea ce trebuie să facem este să trecem fiecare semnal de intrare print-un repetor de tensiune, asfel:</p>

<p><img src="../poze/03045.png" alt="amplificator diferenţial folosind trei amplificatoare operaţionale"/></p>

<p>De data aceasta, semnalele de intrare V<sub>1</sub> şi V<sub>2</sub> sunt conectate direct la intrările celor două AO repetoare de tensiune, rezultând o impedanţă foarte mare de intrare. Cele două AO din stânga sunt folosite pentru generarea curentului (prin intermediul unei surse de tensiune de c.c. exterioare) necesar prin prin rezistori în locul surselor de tensiune de la intrare.</p>

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