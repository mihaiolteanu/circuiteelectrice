<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuite RLC serie-paralel</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Circuite RLC serie-paralel</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Să luăm ca şi exemplu următorul circuit serie-paralel:</p>

#+CAPTION: circuit electric RLC serie-paralel
[[../poze/02084.png]]

<p>Primul pas este determinarea valorilor impedanţelor (Z) pentru toate componentele, în funcţie de frecvenţa sursei de alimentare. Pentru a realiza acest lucru, trebuie mai întâi să determinăm valorile reactanţelor (X) bobinelor şi condensatoarelor iar apoi să exprimă reactanţele (X) şi rezistenţele (R) sub formă de impedanţe (Z):</p>

#+CAPTION: tabel
[[../poze/12070.png]]

#+CAPTION: tabel
[[../poze/12071.png]]

<p>Putem acum să completăm valorile iniţiale în tabel:</p>

#+CAPTION: tabel
[[../poze/12072.png]]

<p>Întrucât avea de a face în acest caz cu un circuit serie-paralel combinat, nu putem afla impedanţa totală dintr-un singur pas. Prima dată luăm L şi C<sub>2</sub> ca şi combinaţie serie; impedanţa combinată va fi suma impedanţelor individuale. Apoi, impendaţa rezultată o vom combina în paralel cu impedanţa rezistorului, rezultatul fiind o nouă impedanţă. Şi, în sfârşi, impedanţa precedentă o combinăm în serie cu impedanţa C<sub>1</sub> şi ajungem la valoarea impedanţei totale a circuitului considerat.</p>

<p>Pentru a putea reprezenta toţi aceşti paşi sub format tabelar, va trebui să mai adăugam câteva coloane (folosim de fapt un al doilea tabel din motive de spaţiu), fiecare coloană reprezentând combinaţia respectivă.</p>

#+CAPTION: tabel
[[../poze/12073.png]]

<p>Calcului acestor impedanţe combinate necesită sume complexe pentru combinaţiile serie şi utilizarea formulei echivalente pentru impedanţele paralel.</p>

#+CAPTION: tabel
[[../poze/12074.png]]

<p>Putem să renunţăm la coloana total din primul tabel, întrucât aceasta apare în cel de al doilea tabel.</p>

<p>Acum că ştim impedanţa şi tensiunea totală, putem aplica legea lui Ohm, vertical, pe coloana „Total” pentru calcularea curentului total:</p>

#+CAPTION: tabel
[[../poze/12075.png]]

<p>În acest moment, putem căuta componente sau combinaţii de componente ce au fie aceeiaşi cădere de tensiune sau acelaşi curent. Iar în acest caz, atât prin C<sub>1</sub> cât şi prin combinaţia paralel R//(L--C<sub>2</sub>) trece acelaşi curent, întrucât ele sunt în serie. Putem trece prin urmare aceste valori în ambele coloane:</p>

#+CAPTION: tabel
[[../poze/12076.png]]

#+CAPTION: tabel
[[../poze/12077.png]]

<p>Acum putem calcula căderile de tensiune pe C<sub>1</sub> şi pe combinaţia serie-paralel R//(L--C<sub>2</sub> folosind legea lui Ohm (E=IZ), vertical:</p>

#+CAPTION: tabel
[[../poze/12078.png]]

#+CAPTION: tabel
[[../poze/12079.png]]

<p>Din nou, putem căuta componente ce au aceeiaşi cădere de tensiune sau curent. În acest caz, rezistorul (R) şi combinaţia serie a bobinei cu cel de al doilea condensator (L--C) au aceeiaşi cădere de tensiune, pentru că cele două seturi de impedanţe sunt conectate în paralel. Asfel, putem trece valorile tensiunii calculate mai sus în coloanele R şi L--C<sub>2</sub>:</p>

#+CAPTION: tabel
[[../poze/12081.png]]

#+CAPTION: tabel
[[../poze/12082.png]]

<p>Următorul pas este calcularea curentului prin rezistor şi prin combinaţia serie L--C<sub>2</sub>. Tot ceea ce trebuie să facem este să aplicăm legea lui Ohm (I=E/Z), vertical, în ambele coloane:</p>

#+CAPTION: tabel
[[../poze/12083.png]]

#+CAPTION: tabel
[[../poze/12084.png]]

<p>Din moment ce L şi C<sub>2</sub> sunt conectate în serie şi cunoaştem curentul prin combinaţie serie a impedanţei, putem trece aceeleaşi valori şi în coloanele L şi C<sub>2</sub>, folosind regula conform căreia în circuitele serie, curentul prin fiecare component este acelaşi:</p>

#+CAPTION: tabel
[[../poze/12086.png]]

<p>Ultimul pas constă în aplicarea legii lui Ohm (E=IZ), vertical, pentru calcularea căderilor de tensiune pentru cele două coloane rămase (L şi C<sub>2</sub>):</p>

#+CAPTION: tabel
[[../poze/12087.png]]

<p class="sumar">Sumar:</p>
<ul>
	<li>Analiza circuitelor serie-paralel în curent continuu este similară analizei circuitelor serie-paralel din curent cotinuu. Singura diferenţă majoră constă în faptul că toate valorile şi calculele se realizează sub formă complexă, nu scalară</li>
	<li>Este important de ţinut minte ca înainte de simplificarea circuitului serie-paralel, trebuie să determinăm impedanţele (Z) fiecărui component, rezistor, bobină sau condensator. În acest fel, valorile tuturor componentelor vor fi exprimate sub aceeiaşi formă (Z) şi se evită asfel amestecarea rezistenţelor (R) cu inductanţe (L) şi capacităţi (C)</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
