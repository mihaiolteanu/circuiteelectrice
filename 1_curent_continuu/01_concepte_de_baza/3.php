<?php include ($_SERVER['DOCUMENT_ROOT']."/files/xml_header.html")?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>3. Circuite electrice</title>
  </head>
<body>
  <div id="meniu"><?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Circuite electrice</h1>
  </div>

<div id="meniu2">
	<div id="breadcrumbs"><?php include ("breadcrumbs.html")?></div>
	<?php include ("meniu2.html")?>
</div>

#+CAPTION: http://www.flickr.com/photos/judybaxter/2656574939/sizes/l/
[[poza_meniu2]]
 
<div id="contents">
<p>Poate vă întrebaţi cum este posibil ca electronii să se deplaseze continuu într-o direcţie uniformă prin fire dacă nu am lua în considerare aceste Surse şi Destinaţii ipotetice. Pentru ca aceste idealizări să funcţioneze, ambele ar trebui să posede o capacitate infinită pentru a putea susţine o curgere continuă a electronilor! Folosind analogia cu mărgelele şi tubul, sursa de mărgele şi destinaţia acestora ar trebui să fie infinit de mari pentru a conţine o cantitate suficientă de mărgele necesară „curgerii” lor continue.</p>

<p>Răspunsul acestui paradox se regăseşte în conceptul de <i>circuit</i>: o buclă continuă şi neîntreruptă pentru curgerea electronilor. Dacă luăm un fir, sau mai multe fire puse cap la cap, şi îl aranjăm sub formă de buclă, asfel încât să formeze un drum continuu, curgerea uniformă a electronilor fără ajutorul surselor şi destinaţiilor ipotetice de mai sus, este posibilă:</p>

#+CAPTION: bucla - ciruit electric
[[../poze/00012.png]]

<p>În cadrul acestui circuit în sensul acelor de ceasornic, fiecare electron împinge electronul din faţa lui, ce împinge electronul din faţa lui, şi aşa mai departe, precum un circuit din mărgele. Asfel, putem susţine o deplasare continuă a electronilor fără a recurge la suresele şi destinaţiile infinite (sures teoretice). Tot ceea ce avem nevoie este prezenţa unei motivaţii pentru aceşti electroni, lucru ce-l vom discuta în următoarea secţiune din acest capitol.</p>

<p>Trebuie realizat faptul că este la fel de importantă continuitatea circuitului precum în cazul  firului conductor analizat mai sus. La fel ca şi în acel exemplu, orice întrerupere a circuitului opreşte curgerea (deplasarea) electronilor:</p>

#+CAPTION: ciruit electric întrerupt
[[../poze/00013.png]]

<p>Un principiu important de reţinut este că <i>nu contează locul întreruperii</i>. Orice discontinuitate din circuit va întrerupe curgerea electronilor prin întreg circuitul. O curgere continuă a electronilor prin circuit poate fi realizată doar dacă există un circuit continuu şi neîntrerupt printr-un material conductiv prin care aceştia să se poată deplasa.</p>

#+CAPTION: ciruit electric întrerupt 2
[[../poze/00014.png]]

<p class="sumar">Sumar:</p>
<ul>
	<li>Un <i>circuit</i> este o buclă de material conductiv ce permite electronilor curgerea continuă fără început sau sfârşit</li>
	<li>Întreruperea unui circuit înseamnă că elementele sale conductoarea nu mai formează un drum complet, iar curgerea continuă a electronilor nu mai poate avea loc</li>
	<li>Locul întreruperii este irelevant în ceea ce priveşte capacitatea circuitului de a susţine curgerea electronilor. Orice întrerupere, <i>oriunde</i> în circuit împiedică curgerea electronilor prin acesta</li>
</ul>
</div>
<div id="footer">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
