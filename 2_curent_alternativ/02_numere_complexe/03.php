<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Adunarea simplă a vectorilor</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Adunarea simplă a vectorilor</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Operaţiile ce pot fi efectuate asupra vectorilor sunt aceleaşi care sunt posibile asupra oricărei mărimi scalare: adunare, scădere, înmulţire, împărţire. Dintre toate acestea, adunarea este probabil cea mai uşor de înţeles. Dacă adunăm doi vectori ce au acelaşi unghiu, lungimile lor se adună precum o mărime scalară:</p>

#+CAPTION: adunarea vectorilor în cazul în care unghiurile lor sunt egale
[[../poze/02033.png]]

<p>Similar, dacă două sau mai multe surse de curent alternativ cu aceeiaşi fază sunt conectate în serie, tensiunile lor se adună asemenea tensiunilor bateriilor:</p>

#+CAPTION: dacă două sau mai multe surse de curent alternativ cu aceeiaşi fază sunt conectate în serie, tensiunile lor se adună asemenea tensiunilor bateriilor
[[../poze/02034.png]]

<p>Observaţi notaţia „+” şi „-” la bornele surselor de alimentare în curent alternativ. Chiar dacă noţiunea de polaritate nu este aceeiaşi precum în curent continuu, aceste notaţii sunt esenţiale pentru scoaterea în evidenţă a fazei undei de referinţă (tensiunea).</p>

<p>Dacă adunăm doi vectori, a căror diferenţe de fază este de 180<sup>o</sup>, aflaţi prin urmare în opoziţie, lungimile lor se scad, asemenea operaţiei de adunare dintre doi scalari, unul pozitiv şi celălalt negativ:</p>

#+CAPTION: adunarea vectorilor aflaţi în opoziţie de fază (180 grade)
[[../poze/02035.png]]

<p>În mod similar, dacă două surse de curent alternativ aflate în antifază (defazaj de 180<sup>o</sup> sunt conectate în serie, tensiunile lor se scad asemenea bateriilor de curent continuu conectate în opoziţie:</p>

#+CAPTION: adunarea tensiunilor în curent alternativ aflate în antifază (180 grade)
[[../poze/02036.png]]

<p>Pentru a determina dacă cele două surse se află în opoziţie una faţă de celalată, este nevoie de o examinare atentă atât a polarităţii (+ sau -) cât şi a fazelor. Polarităţile de mai sus tind să indice faptul că cele două tensiuni sunt aditive (de la stânga spre dreapta: - şi + la sursa de 6 V, - şi + la sursa de 8 V). Chiar dacă aceste notaţii ar indica în mod normal un efect aditiv într-un circuit de curent continuu (cele două tensiuni „lucrează” împreună pentru a produce o tensiune rezultată mai mare), în acest circuit de curent alternativ, cele două tensiuni se scad pentru a da tensiunea finală, deoarece faza uneia dintre ele este de 0<sup>o</sup>, iar a celeilalte de 180<sup>o</sup>. Rezultatul total este o tensiune de 2 V, la 180<sup>o</sup>, sau, -2 V la 0<sup>o</sup>.</p>

<p>Un alt exemplu în care tensiunile se scad este următorul:</p>

#+CAPTION: adunarea tensiunilor în curent alternativ aflate în antifază (180 grade)
[[../poze/02267.png]]

<p>După cât am văzut mai sus, există două moduri de reprezentare a rezultatului final:</p>

#+CAPTION: cele două moduri de reprezentare a tensiunilor alternative; 0 sau 180 de grade cu semnul schimbat
[[../poze/02037.png]]

<p>O inversare a firelor sursei de curent alternativ este echivalentă cu schimbarea fazei acelei surse cu 180 de grade:</p>

#+CAPTION: echivalenţa dintre două surse de tensiune alternative; una cu polaritatea schimbată şi faza modificată cu 180 de grade faţă de cealaltă
[[../poze/02266.png]]

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
