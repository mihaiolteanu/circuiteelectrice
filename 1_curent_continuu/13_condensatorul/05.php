<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Consideraţii practice (condensatorul)</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Consideraţii practice (condensatorul)</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>Condensatoarele, la fel ca toate celelalte componente, au unele limite de funcţionare şi utilizare. Acestea trebuie respectate dacă dorim o funcţionare corectă şi sigură a circuitelor electrice cu condensatoare.</p>

<h2>Tensiunea maximă, polaritate şi condensatorul electrolitic</h2>

<p>Din moment ce condensatoarele nu sunt altceva decât doi conductori separaţi printr-un mediu dielectric, trebuie să fim atenţi la tensiunea maximă adimisă la bornele acestora. Dacă aplicăm o tensiune mult prea mare, putem depăşi tensiunea de străpungere a dielectricului, rezultând un condensator scurt-circuitat intern.</p>

<p>Unele condensatoare sunt construite astfel încât să suporte aplicarea unei tensiuni de o anumită polaritate. Acest lucru se datorează modului lor de realizare: dielectricul reprezintă un strat microscopic de material izolator depus pe una dintre armături prin intermediul unei tensiuni de curent continuu. Aceste condensatoare sunt cunoscute sub numele de condensatoare <i>electrolitice</i>, iar polaritatea lor este tot timpul precizată. Simbolul condensatorului electrolitic este prezentat în următoarea figură:</p>

#+CAPTION: simbolul condensatorului electrolotic
[[../poze/00301.png]]

<p>Armătura curbată reprezintă tot timpul armătura negativa. Inversarea polarităţii unui condensator electrolitic duce la distrugerea acelui strat foarte subţire de dielectric şi prin urmare şi a dispozitivului. Totuşi, mărimea dielectricului permite valori mari ale capacităţii relativ la mărimea propriu-zisă a condensatorului. Din acelaşi motiv, condensatoarele electrolitice suportă tensiuni mici faţă de celelalte modele de condensatoare.</p>

<h2>Circuitul echivalent al condensatorului</h2>

<p>Din moment ce armăturile unui condensator prezintă o anumită rezistenţă electrică, şi, din moment ce niciun dielectric nu este un izolator perfect, este imposibilă crearea unui condensator „perfect”. În realitate, un condensator are atât o rezistenţă serie cât si o rezistenţa paralel (de scurgere) suprapuse peste caracteristicile sale pur capacitive:</p>

#+CAPTION: circuitul echivalent al unui condensator
[[../poze/00300.png]]

<p>Din fericirea, realizarea condensatoarelor cu o rezisteţă serie foarte mică şi rezistenţă de scurgere foarte mare, este relativ uşoară.</p>

<h2>Mărimea fizică a condensatoarelor</h2>

<p>În majoritatea aplicaţiilor, mărimea (cât mai mică) joacă un rol ingineresc important. Cu cât componentele sunt mai mici, cu atât mai multe elemente pot fi introduse în circuit, iar greutatea întregului ansamblu scade şi ea.</p>

<p>În cazul condensatoarelor, există doi factori importanţi ce afectează mărimea unui component: tensiunea de lucru şi capacitatea. Aceşti doi factori tind să fie în opoziţie unul cu celălalt. Pentru un anumit dielectric ales, singura modalitate de a creşte tensiunea de lucru a unui condensator este creşterea grosimii dielectricului. Totuşi, după cum am văzut, această situaţie duce la descreşterea capacitătii dispozitivului. Putem readuce capacitatea la valoarea iniţială prin creşterea ariei armăturilor. Dar acest lucru duce la creşterea mărimii fizice a condensatorului. Acesta este motivul pentru care nu putem aprecia capacitatea unui condensator (în Farad) prin simpla observare a mărimii acestuia. Un condensator de o anumită marime, poate avea o capacitate mare şi o tensiune de lucru mică, sau o capacitate mică şi o tensiune de lucru mare, sau un compromis între cele două situaţii.</p>

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
