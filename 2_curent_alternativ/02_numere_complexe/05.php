<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Notaţia polară şi rectangulară a numerelor complexe</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Notaţia polară şi rectangulară a numerelor complexe</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Pentru a putea lucra cu aceste numere complexe fără a fi nevoiţi să desenăm tot timpul vectori, avem nevoie de o notaţie matematică standard. Există două forme pentru notaţia numerelor complexe: <i>polară</i> şi <i>rectangulară</i>.</p>

<h3>Notaţia polară</h3>

<p>Forma polară constă în exprimarea unui număr complex prin <i>lungimea</i> (cunoscută şi sub numele de dimensiune, valoare absolută, modul) şi <i>unghiul</i> vectorului (desemnat de obicei prin simbolul &ang;). Să luăm două exemple de vectori împreună cu notaţia lor polară:</p>

<p><img src="../poze/02041.png" alt="notaţia polară a vectorilor; exemple"/></p>

<p>Orientarea standard pentru unghiurile vectorilor în curent alternativ defineşte unghiul de 0 grade ca fiind în dreapta (axa orizontală), 90<sup>o</sup> sus, 180<sup>o</sup> stânga, 270<sup>o</sup> jos. Atenţie, vectorii a căror unghi este „în jos” pot fi reprezentaţi cu ajutorul notaţiei polare ca fiind vectori pozitivi cu un unghi de peste 180<sup>o</sup>, sau ca numere negative cu unghiuri sub 180<sup>o</sup>. De exemplu, putem spune că un vector cu unghiul &ang;270<sup>o</sup> (direct în jos) are unghiul de -90<sup>o</sup> (notaţie echivalentă). Vectorul de mai sus (7.81 &ang;230.19<sup>o</sup>) poate fi descris de asemenea prin 7.81 &ang;-129.81<sup>o</sup>.</p>

<p><img src="../poze/02026.png" alt="sistemul de referinţă pentru unghiul vectorilor în curent alternativ"/></p>

<h3>Notaţia rectangulară</h3>

<p>Forma rectangulară constă în reprezentarea vectorului prin componentele sale orizontale şi verticale. În esenţă, vectorului unghiular este considerat a fi ipotenuza unui unghi drept şi descris cu ajutorul lungimilor laturilor opuse respectiv adiacente. În loc să descrie lungimea şi direcţia unui vector prin precizarea lungimii şi a unghiului, acesta este descris în termenii „cât de departe în stânga/dreapta” şi „cât de departe „sus/jos”.</p>

<p>Aceste două valori dimensionale (orizontală şi verticală) sunt simbolizate prin două valori numerice. Pentru a putea face distincţie între cele două dimensiuni, cea verticală este însoţită de notaţia „i” (în matematica pură) sau „j” (în domeniul electric). Aceste litere nu reprezintă o variabilă fizică (precum curentul instantaneu, simbolizat de asemenea prin „i”), ci sunt <i>operatori</i> matematici folosiţi pentru a face distincţia dintre componenta verticală şi cea orizontală a unui vector. Ca şi număr complex complet, valorile cele două componente sunt scrise ca şi sumă:</p>

<p><img src="../poze/02042.png" alt="exprimarea vectorilor folosind notaţia rectangulară"/></p>

<p>Componenta orizontală este denumită componentă <i>reală</i> deoarece aceasta este compatibilă cu numerele normale, scalare („reale”). Componenta verticală este denumită componenta <i>imaginară</i>, deoarece această dimensiune se află pe o altă direcţie şi nu are nicio legătură cu scara numerelor reale.</p>

<p><img src="../poze/02043.png" alt="sistemul de referinţă vectorial cu notarea axelor reale şi imaginare"/></p>

<p>Cele două axe poartă denumirea de <i>axa reală</i> respectiv <i>axa imaginară</i>:</p>

<p><img src="../poze/02044.png" alt="axa reală şi cea imaginară a unui sistem de referinţă vectorial"/></p>

<p>Oricare dintre cele două forme poate fi folosită pentru numerele complexe. Principalul motiv pentru care există două sisteme de notaţie valide se datorează faptului că forma rectangulară este uşor de folosit pentru adunare şi scădere, iar forma polară pentru înmulţire şi împărţire.</p>

<h3>Transformarea din formă polară în formă rectangulară</h3>

<p>Conversia de la o formă la alta se poate realiza pe cale trigonometrică destul de uşor. Pentru a transforma forma polară în forma rectangulară, aflăm mai întâi componenta reală prin înmulţirea lungimii polare cu cosinusul unghiului, iar componenta imaginare prin înmulţirea lungimii polare cu sinusul unghiului. Acest lucru poate fi înţeles mult mai uşor dacă desenăm valorile ca şi laturi ale unui triunghi dreptunghic, ipotenuza acestuia reprezentând exact vecotorul analizat (lungimea şi unghiul său faţă de orizontală reprezintă forma sa polară), latura orizontală fiind componenta reală, iar latura verticală reprezentând componenta imaginară:</p>

<p><img src="../poze/02045.png" alt="relaţia dintre forma polară şi cea rectangulară"/></p>
<p><img src="../poze/12005.png" alt="transformarea formei polare în formă rectangulară"/></p>

<h3>Transformarea din formă rectangulară în formă polară</h3>

<p>Pentru a realiza conversi de la forma rectangulară la cea polară, găsim mai întâi lungimea polară folosind teorema lui Pitagora, fiindcă lungimea polară este ipotenuza unui triunghiu dreptunghic, iar componenta reală şi cea imaginară sunt reprezentate de latura adiacentă respectiv cea opusă. Găsim unghiul ca fiind raportul dintre arctangenta componentei imaginare şi componenta reală:</p>

<p><img src="../poze/12006.png" alt="transformarea formei rectangulare în formă polară"/></p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Notaţia polară desemnează un număr complex ca fiind compus din lungimea şi direcţia vectorului faţă de punctul de plecare</li>
	<li>Notaţia rectangulară denesemnează un număr complex ca fiind compus din dimensiunile orizontale şi verticale ale vectorului</li>
	<li>În notaţia rectangulară, prima valoarea este componenta „reală” (dimensiunea orizontală a vectorului) iar a doua este componenta „imaginară” (dimensiunea verticală a vectorului). Componenta imaginară este desemnată prin alăturarea literei „j” (operatorul j) valorii imaginare</li>
	<li>Atât forma polară cât şi cea rectangulară a numerelor complexe poate fi reprezentată grafic sub forma unui triunghi, cu ipotenuza reprezentând vectorul însăşi (formă polară: lungimea ipotenuzei = lungimea vectorului; unghiul faţă de orizontală = unghiul vectorului), latura orizontală reprezentând componenta „reală”, iar latura opusă, verticală, reprezentând componenta rectangulară „imaginară”</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>