<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Teorema lui Norton</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>8. Teorema lui Norton</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Conform teoremei lui Norton este posibilă simplificarea oricărui circuit liniar, indiferent de complexitate, la un circuit echivalent dotat cu o singură sursă de curent şi o rezistenţă paralelă, ambele conectate la o sarcină. La fel ca în cazul teoremei lui Thevenin, termenul „liniar” are semnificaţia teoremei superpoziţiei: ecuaţiile implicate trebuie să fie liniare.</p>

<h3>Exemplu:</h3>

<p>Circuitul iniţial este cel folosit şi în exemplele precedente, şi arată asfel:</p>

<p><img src="../poze/00209.png" alt="circuit electric"/></p>

<p>Circuitul echivalent după aplicarea teoremei lui Norton va fi următorul:</p>

<p><img src="../poze/00242.png" alt="circuit Norton echivalent"/></p>

<p><i>Sursa de curent</i> este un component a cărui scop este furnizarea unei valori constante de curent, indiferent de valoarea tensiunii.</p>

<p>La fel ca în cazul teoremei lui Thevenin, întreg circuitul original, în afară de rezistenţa de sarcină, a fost redus la un circuit echivalent ce este mult mai uşor de analizat. Paşii folosiţi pentru calcularea sursei de curent, I<sub>Norton</sub>, şi a rezistenţei Norton, R<sub>Norton</sub>, sunt de asemenea similari teoremei precedente.</p>

<p>Primul pas este identificarea rezistenţei de sarcină şi înlăturarea acesteia din circuitul original:</p>

<p><img src="../poze/00237.png" alt="circuit electric"/></p>

<p>Pentru aflarea curentului Norton, plasăm un fir (scurt circuit) între cele două puncte ale sarcinii şi determinăm curentul rezultat. Observaţi că acest pas este exact invers în teorema lui Thevenin, unde am înlocuit sarcină cu un circuit deschis:</p>

<p><img src="../poze/00243.png" alt="circuit electric"/></p>

<p>Acum avem o cădere de 0 volţi între punctele de conexiune a sarcinii (înăturate), ceea ce înseamă că valoarea curentului prin R<sub>1</sub> depinde doar de tensiunea bateriei B<sub>1</sub> şi de valoarea rezistorului R<sub>1</sub>: 7 amperi (I=E/R). Acelaşi lucru este valabil şi în partea dreapta a circuitului, unde curentul este tot 7 amperi. Prin urmare, curentul total prin scurt circuitul sarcinii este de 14 amperi şi reprezintă curentul sursei Norton (I<sub>Norton</sub>).</p>

<p><img src="../poze/00244.png" alt="circuit electric"/></p>

<p>Din nou, direcţia săgeţii unei surse de curent este <i>contrară</i> deplasării reale a electronilor printr-un circuit, notaţie ce o folosim în această carte.</p>

<p>Pentru calcularea rezistenţei Norton, procedăm precum în cazul teoremei lui Thevenin: luăm circuitul original, fără rezistenţa de sarcină, îndepărtăm sursele de putere conform principiului aplicat în cadrul teoremei superpoziţiei (sursele de tensiune le înlocuim cu scurt circuit iar sursele de tensiune cu circuit deschis) şi aflăm apoi rezistenţa totală dintr-un punct al sarcinii la celălalt (cei doi rezistori legaţi în paralel):</p>

<p><img src="../poze/00240.png" alt="circuit electric"/></p>

<p>În acest moment circuitul Norton echivalent arată asfel:</p>

<p><img src="../poze/00245.png" alt="circuit electric"/></p>

<p>Reconectând rezistenţa de sarcină iniţială (2 Ω), vom analiza circuitul Norton precum o conexiune paralelă simplă:</p>

<p><img src="../poze/10196.png" alt="tabel"/></p>

<p>La fel cum am văzut şi în cazul teoremei lui Thevenin, singurele informaţii utile din această analiză sunt valoarea tensiunii şi a curentului prin rezistenţa de sarcină R<sub>2</sub>; celelalte informaţii cu privire la circuit sunt irelevent. Avantajul constă în simplitatea analizei circuitului atunci când avem mai multe valori ale rezistenţei de sarcină pentru care vrem să aflăm tensiunea şi curentul.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Teorema lui Norton este o metodă de reducere a reţelei la un circuit echivalent compus dintr-o singură sursă de curent, un rezistor în paralel şi o sarcină în paralel.</li>
</ul>
<b>Paşii pentru implementarea teoremei lui Norton:</b>
<ol>
	<li>Găsirea sursei Norton de curent prin îndepărtarea tuturor rezstorilor din circuitul iniţial şi calcularea curentului prin scurt circuitul creat între punctele de contact ale fostei sarcini a circuitului(scurt circuit)</li>
	<li>Aflarea rezistenţei Norton prin îndepărtarea tuturor surselor de putere din circuit şi calcularea rezistenţei totale dintre punctele de contact ale fostei sarcini a circuitului (circuit descis)</li>
	<li>Realizarea circuitului Norton echivalent, cu sursa de curent şi rezistorul Norton în paralel. Rezistorul de sarcină se re-introduce între cele două puncte deschise ale circuitului echivalent</li>
	<li>Aflarea tensiunii şi curentului prin sarcină aplicând regulile circuitelor paralele</li>
</ol>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>