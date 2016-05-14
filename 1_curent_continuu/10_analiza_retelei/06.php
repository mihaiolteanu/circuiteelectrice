<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Teorema superpoziţiei</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>6. Teorema superpoziţiei</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Teorema superpoziţiei reprezintă acea viziune de geniu ce transformă un subiect complex într-o versiune simplă şi uşor de înteles.</p>

<p>Strategia constă în eliminarea rând pe rând a tuturor surselor de putere din circuit exceptând una singură, utilizând analiza serie/paralel pentru determinarea căderilor de tensiune şi a curenţilor din reţeaua modificată pentru fiecare sursă de putere separat. Apoi, după ce toate căderile de tensiune şi curenţii au fost determinaţi pentru fiecare sursă de tensiune funcţionând separat/independent în reţea, valorile sunt <i>suprapuse</i> una peste cealaltă (adunare algebrucă) pentru determinarea efectivă a curenţilor şi tensiunilor atunci când în circuit funcţionează toate sursele de putere împreună.</p>

<h3>Exemplu</h3>

<p>Să luăm acelaşi circuit ca şi exemplu:</p>

#+CAPTION: circuit electric
[[../poze/00209.png]]

<p>Din moment ce avem două surse de putere în acest circuit, va trebui să calculăm două seturi de date pentru căderile de tensiune şi curent, un set pentru circuitul funcţionând doar cu sursa de tensiune de 28 de volţi...</p>

#+CAPTION: circuit electric
[[../poze/00227.png]]

<p>...celălalt pentru circuitul funcţionând doar cu bateria de 7 volţi:</p>

#+CAPTION: circuit electric
[[../poze/00228.png]]

<p>Atunci când redesenăm un circuit pentru analiza serie/paralel cu o singură sursă, toate celelalte surse de tensiune sunt înlocuite de fire (scurt circuit), şi toate sursele de curent sunt înlocuitr de circuite deschise. Din moment ce avem doar surse de tensiune (baterii) în circuitul de mai sus, toate sursele de putere inactive vor fi înlocuite de fire.</p>

<p>Analizând circuitul în care acţionează doar bateria de 28 de volţi, obţinem următoarele valori pentru tensiune şi curent:</p>

#+CAPTION: tabel
[[../poze/10192.png]]
#+CAPTION: circuit electric
[[../poze/00229.png]]

<p>Analizând circuitul în care acţionează doar bateria de 7 de volţi, obţinem următoarele valori pentru tensiune şi curent:</p>

#+CAPTION: tabel
[[../poze/10193.png]]
#+CAPTION: circuit electric
[[../poze/00230.png]]

<p>Atunci când realizăm suprapunerea, trebuie să fim foarte atenţi la polaritatea căderilor şi la direcţia curenţilor, pentru că aceste valori se adună <i>algebric</i>:</p>

#+CAPTION: tabel
[[../poze/00231.png]]

<p>Aplicând aceste valori, rezultatul final arată asfel:</p>

#+CAPTION: circuit electric
[[../poze/00232.png]]

<p>Acelaşi lucru este valabil şi în cazul curenţilor.</p>

#+CAPTION: tabel
[[../poze/00233.png]]

<p>Folosind valorile aflate după aplicarea superpoziţiei, circuitul arată asfel:</p>

#+CAPTION: circuit electric
[[../poze/00234.png]]

<p>Simplu şi elegant în acelaşi timp. Totuşi, teorema superpoziţiei poate fi aplicată doar circuitelor ce pot fi reduse la combinaţii de circuite serie/paralel pentru fiecare sursă de putere (tensiune sau curent) în parte, şi doar atunci când ecuaţiile folosite sunt liniare. Acest lucru înseamnă ca teorema nu potate fi folosită decât pentru determinare tensiunii şi a puteri <i>nu></i> şi a puterii! Puterile disipate în circuit, fiind funcţii neliniare, nu pot fi adunate algebric atunci când se consideră doar o sursă de putere. Aceeiaşi nevoie de liniaritate înseamnă ca teorema este inutilă în circuitele în care rezistenţa componentelor se modifică odată cu tensiunea sau temperatura, ca de exemplu becuri incandescente sau varistoare.</p>

<p>O altă condiţie este ca toate componentele să fie „bilaterale”, însemnând faptul că trebuie să se comporte exact le fel indiferent care este direcţia de deplasare a electronilor prin ele. Rezistenţele îndeplinesc această cerinţă, precum şi toate circuitele studiate până acum.</p>

<p>Teorema superpoziţiei se foloseşte şi în studiul circuitelor de curent alternativ (CA) şi circuitele cu amplificatoare semiconductoare, acolo unde de multe ori curentul alternativ este mixat (suprapus) peste curentul continuu. În asfel de cazuri putem analiza circuitul când doar sursa de curent continuu este prezentă în circuit şi atunci când doar cea de curent alternativ este prezentă; rezultatul final este superpoziţia celor două cazuri. Până una alta, folosind teorema superpoziţie nu mai suntem nevoiţi să folosim sistemele de ecuaţii pentru analiza circuitelor.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Conform teremei superpoziţiei, un circuit poate fi analizat considerând că în circuit funcţionează doar câte o singură sursă de putere pe rând; valorile tensiunilor şi curenţilor pentru fiecare caz în parte, se adună pentru aflarea soluţiei finale, atunci când în circuit funcţionează toate sursele de putere</li>
	<li>Pentru a scoate toate sursele de putere din circuit exceptând una singură, toate sursele de tensiune se înlocuiesc cu un fir, şi toate sursele de curent cu un circuit deschis.</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
