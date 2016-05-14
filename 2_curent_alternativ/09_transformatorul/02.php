<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Transformatorul ridicător şi coborâtor de tensiune</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Transformatorul ridicător şi coborâtor de tensiune</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Până în acest moment, am luat în considerare doar cazul în care cele două înfăşurări ale transformatorului aveau inductanţe identice, ducând la egalitatea tensiunilor şi a curenţilor în cele două înfăşurări. Această egalitate între înfăşurarea primară şi cea secundară nu este însă specifică tuturor transformatoarele. Dacă inductanţele celor două înfăşurări sunt diferite, prin modificarea raportului de spire dintre cele două, şi comportamentul transformatorului suferă modificări. Să considerăm circuitul de mai jos:</p>

#+CAPTION: circuit electric simplu cu transformator
[[../poze/02132_3.png]]

<p>În această configuraţie, tensiunea secundarului este de aproximativ 10 ori mai mică decât tensiunea din primare (1 V faţa de 10 V), iar pe de altă parte, curentul din secundar este de aproximativ 10 ori mai mare decât curentul din primar (1 mA faţă de 0.1 mA). Ceea ce avem în circuitul de mai sus, este un dispozitiv ce coboară tensiunea de zece ori şi creşte curentul cu acelaşi factor (coborâtor de tensiune / ridicător de curent):</p>

#+CAPTION: transformator coborâtor de tensiune
[[../poze/02133.png]]

<p>Acesta este un dispozitiv extrem de folositor. Cu ajutorul acestuia se pot foarte uşor multiplica sa împărţi valorile tensiunilor şi ale curenţilor în circuitele de curent continuu. Un transformator ce ridică nivelul tensiunii dinspre primar înspre secundar se numeşte transformator <i>ridicător</i> de tensiune, iar unul care face exact opusul, se numeşte <i>coborâtor</i> de tensiune.</p>

#+CAPTION: secţiune printr-un transformator coborâtor de tensiune
[[../poze/52012.jpg]]

<p>Transformatorul de mai sus este un transformator coborâtor de tensiune datorită faptului că numărul spirelor din înfăşurarea primară este mai mare decât cel din înfăşurarea secundară. Prin urmare, acesta transformă tensiunea ridicată şi curentul scăzut din primare în tensiune scăzută şi curent ridicat în secundar. Secţiunea mult mai mare a conductorului din secundar este necesară datorită creşterii curentului faţă de înfăşurarea primară.</p>

<p>Oricare transformator poate fi alimentat şi invers, dinspre secundar spre primar, inversându-se asfel şi rolul acestuia: transformatorul coborâtor de tensiune devine ridicător de tensiune, şi invers. Totuşi, după cum am precizat în secţiunea precedentă, funcţionare eficientă a unui transformator se poate realiza doar prin proiectarea acestuia pentru anumite valori ale curenţilor şi tensiunilor. Prin urmare, dacă am fi să folosim un transformator „invers”, va trebui să respectăm parametrii iniţiali pentru tensiune şi curent în cazul fiecărei înfăsurări, altfel, transformatorul s-ar putea dovedi extrem de ineficient, iar in cazuri extreme, operarea lui necorespunzătoare poate duce la distrugerea acestuia datorită curenţilor sau tensiunilor în exces.</p>

<p>În general, transformatoarele sunt asfel construite încât este imposibil de spus care este înfăşurarea primară şi care cea secundară. O convenţie folosită în industrie este notarea cu „H” a înfăşurării cu tensiune mai înaltă (primarul, într-un transformator coborâtor; secundarul, într-un transformator ridicător) şi cu „X” a înfăşurării cu tensiune mai joasă. Prin urmare, un transformator simplu ar trebui să aibă notaţiile „H<sub>1</sub>”, „H<sub>2</sub>”, „X<sub>1</sub>” şi „X<sub>2</sub>”.</p>

<p>Faptul că tensiunea şi curentul sunt „transformate” în direcţii opuse nu ar trebui să ne mire. Puterea este egală cu produsul dintre tensiune şi curent, iar transformatoarele nu pot produce putere, ci o pot doar converti.</p>

<p>Dacă ne uităm mai atent la rezultatele obţinute cu circuitul de mai sus, putem vedea o legătură între <i>raportul de transformare</i> al transformatorului şi cele două inductanţe. Se observă că bobina primară are o inductanţă de 100 de ori mai mare decât cea secundară, iar raportul de transformare al tensiunii a fost de 10 la 1. Înfăşurarea cu o inductanţă mai mare va avea o tensiune mai mare şi un curent mai mic decât cealaltă. Din moment ce ambele bobine sunt înfăşurate în jurul aceluiaşi material (pentru un cuplaj magnetic cât mai eficient între ele), singurul parametru care nu este comun ambelor înfăşurări este numărul spirelor din fiecare înfăşurare în parte. Din formula inductanţei (?!), putem observa că aceasta este direct proporţională cu pătratul spirelor înfăsurării:</p>

#+CAPTION: formula de calcul a inductanţei înfăşurării unei bobine
[[../poze/12100.png]]

<p>Asfel, putem deduce că cele două înfăşurări din exemplul de mai sus, cu un raport al inductanţelor de 100:1, ar trebui să aibă un raport al înfăşurărilor de 10:1 (10<sup>2</sup> = 100). Acesta este exact raportul descoperit între valorile tensiunilor şi ale curenţilor primare şi secundare (10:1). Putem spune prin urmare, că raportul de transformare al unui transformator este egal cu raportul dintre numărul spirelor înfăşurărilor primare şi secundare</p>

#+CAPTION: transformator coborâtor de tensiune; principiul de transformare al curenţilor şi al tensiunilor
[[../poze/02134.png]]

#+CAPTION: formula matematică de calcul al raportului de transformare al transformatorului electric
[[../poze/raport_transformare.png]]

<p class="sumar">Sumar:</p>
<ul>
	<li>Transformatoarele sunt dispozitive utilizate la ridicarea sau coborârea tensiunii în funcţie de raportul dintre numărul spirelor înfăşurărilor</li>
	<li>Un transformator proiectat să ridice tensiunea dinspre primar spre secundar (numărul spirelor din înfăşurarea secundară este mai mare decât numărul celor din primar), se numeşte transformator ridicător de tensiune</li>
	<li>Un transformator proiectat să realizeze chiar opusul, coborârea tensiunii dinspre primar spre secundar (numărul spirelor din înfăşurarea secundară este mai mic decât numărul celor din primar), poartă numele de transformator coborâtor de tensiune</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
