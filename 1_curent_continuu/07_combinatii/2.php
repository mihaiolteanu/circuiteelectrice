<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Tehnici de analiză a circuitelor</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Tehnici de analiză a circuitelor</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Scopul analizei circuitului serie-paralel este determinarea tuturor căderilor de tensiune, curenţilor şi puterilor disipate în circuit. Strategia generală pentru atingerea acestui scop este următoarea:</p>

<ol>
	<li>Determinăm conexiunile existente din circuit: care rezistori sunt legaţi în serie şi care în paralel</li>
	<li>Redesenăm circuitul, înlocuind fiecare din combinaţiile serie sau parelel din circuit identificate la primul punct, cu un singur rezistor echivalent. Dacă folosim un tabel pentru scrierea valorilor, atunci vom realiza o nouă coloană în tabel pentru fiecare rezistenţă echivalentă</li>
	<li>Repetăm paşii 1 şi 2 până ce întreg circuitul este redus la un singur rezistor echivalent</li>
	<li>Calculăm curentul total cunoscând tensiunea şi rezistenţa totală folosind legea lui Ohm (I=E/R)</li>
	<li>Folosind valorile totale ale tensiunii şi ale curentului, mergem un pas înapoi, spre ultima reducere echivalentă din circuit şi inserăm valorile în locurile necesare</li>
	<li>Cunoscând rezistenţele şi tensiunea totală / curentul total de la pasul 5, folosim legeal lui Ohm pentru calcularea valorilor necunoscute (tensiuni sau curenţi) (E=IR sau I=E/R)</li>
	<li>Repetăm paşii 5 şi 6 până când toate valorile tensiunii şi ale curentului sunt cunoscute în configuraţia iniţială a circuitului. Practic, mergem pas cu pas de la versiunea simplificată a circuitului spre versiunea originală, complexă a acestuia, introducând valorile tensiunii şi ale curentului acolo unde este necesare până când toate valorile tensiunilor şi curenţilor sunt cunoscute</li>
	<li>Calculăm puterile disipate în circuit din valorile cunoscute ale tensiunilor, curenţilor şi/sau rezistenţelor.</li>
</ol>
	
<p>Deşi sună destul de complicat, vom înţelege întreg procesul mult mai uşor dacă luăm un exemplu practic:</p>

#+CAPTION: circuit serie-paralel combinat
[[../poze/00123.png]]

#+CAPTION: tabel
[[../poze/10126.png]]

<p>În exemplul de mai sus, rezistorii R<sub>1</sub> şi R<sub>2</sub> sunt conectaţi în paralel; la fel şi R<sub>3</sub> cu R<sub>4</sub>. Pentru că am identificat aceast tip de conecţiune ca fiind una paralelă, putem înlocui fiecare din cele două combinaţii printr-o singură rezistenţă echivalentă. Circuitul redesenat arată asfel:</p>

#+CAPTION: circuit electric
[[../poze/00124.png]]

<p>Simbolul (//) este folosit pentru a reprezentă faptul că valoarea celor două rezistoare a fost obţinută cu ajutorul formule 1/(1/R). Rezistorul de 71.429 Ω de sus este echivalentul celor doi rezistori R<sub>1</sub> şi R<sub>2</sub> legaţi în paralel. Rezistorul de 127.27 Ω de jos este echivalentul celor doi rezistori R<sub>3</sub> şi R<sub>4</sub> legaţi în paralel.</p>

<p>Tabelul valorilor poate fi mărit cu două coloane pentru a include şi valorile acestori doi rezistori echivalenţi:</p>

#+CAPTION: tabel
[[../poze/10127.png]]
	
<p>Ar trebui să devină aparent că circuitul a fost redus la o configuraţie serie simplă ce conţine doar doi rezistori (echivalenţi). Pasul final în reducerea circuitului este adunarea acestor două rezistenţe şi aflarea rezistenţei totale a circuitului. Rezultatul acestei adunări este 198.70 Ω. Acum putem re-desena circuitul cu o singură rezistenţă echivalentă. Adăugăm, de asemenea, încă o coloană în tabel. Notaţia coloanei este (R<sub>1</sub>//R<sub>2</sub>--R<sub>3</sub>//R<sub>4</sub>) pentru a indica modul iniţial de conectare al rezistenţelor în circuit. Simbolul „--” reprezintă conexiune „serie”, iar simbolul „//” reprezintă conexiune „paralel”.</p>

#+CAPTION: circuit electric
[[../poze/00125.png]]

#+CAPTION: tabel
[[../poze/10128.png]]

<p>În acest moment putem folosi legea lui Ohm (I=E/R) pentru determinarea curentului total prin circuit şi completarea coloanei corespunzătoare din tabel:</p>

#+CAPTION: tabel
[[../poze/10129.png]]

<p>Reîntorcându-ne la diagrama circuitului, valoarea totală a curentului este momentan singura ce apare pe desen:</p>

#+CAPTION: circuit electric
[[../poze/00126.png]]

<p>Acum putem începe să ne re-întoarcem la paşii anteriori în simplificarea circuitului spre configuraţia originală. Pasul următor este să ne întoarcem la circuitul în care R<sub>1</sub>//R<sub>2</sub> şi R<sub>3</sub>//R<sub>4</sub> sunt în serie:</p>

#+CAPTION: circuit electric
[[../poze/00127.png]]

<p>Din moment ce R<sub>1</sub>//R<sub>2</sub> şi R<sub>3</sub>//R<sub>4</sub> sunt în serie, curentul prin ambele seturi de rezistenţe echivalente este acelaşi. Mai mult decât atât, valoarea curentului prin ele trebuie să fie egală valorii curentului total; putem completa coloana curent total din tabel cu valoarea curentului total pentru fiecare din cele două grupuri de rezistenţe echivalente:</p>

#+CAPTION: tabel
[[../poze/10130.png]]

<p>Cunoscând curentul prin rezistenţele echivalente R<sub>1</sub>//R<sub>2</sub> şi R<sub>3</sub>//R<sub>4</sub>, putem aplica legea lui Ohm (E=IR) pentru aflarea căderilor de tensiune pentru fiecare grup în parte, completând şi tabelul:</p>

#+CAPTION: circuit electric
[[../poze/00128.png]]

#+CAPTION: tabel
[[../poze/10131.png]]

<p>Deoarece ştim că R<sub>1</sub>//R<sub>2</sub> şi R<sub>3</sub>//R<sub>4</sub> sunt defapt conexiuni echivalente paralele, iar căderile de tensiune în circuitele paralele sunt egale. Cu alte cuvinte, putem să mai facem un pas înapoi spre configuraţia iniţială a circuitului şi să completăm tabelul cu valorile calculate:</p>

#+CAPTION: circuit electric
[[../poze/00129.png]]

#+CAPTION: tabel
[[../poze/10132.png]]

<p>Secţiune originală a tabelului pentru rezistori este acum completată (coloana R<sub>1</sub> la R<sub>4</sub>). Aplicând legea lui Ohm pentru celelalte valori rămase necompletate (I=E/R), putem determina valorile prin R<sub>1</sub>, R<sub>2</sub>, R<sub>3</sub> şi R<sub>4</sub>:</p>

#+CAPTION: tabel
[[../poze/10133.png]]

<p>Circuitul iniţial cu toate valorile tensiunilor, curenţilor şi a rezistenţelor arată asfel:</p>

#+CAPTION: circuit electric
[[../poze/00130.png]]

<p class="sumar">Sumar:</p>
<ul>
	<li><b>Paşii pentru analiza unui circuit serie-paralel combinat sunt următorii:</b></li>
	<li>Reducerea circuitului original la un singur rezistor echivalent, cu re-desenarea circuitului la fiecare pas, un pas însemnând reducerea conxiunilor serie sau paralel la un singur rezistor echivalent</li>
	<li>Calcularea rezistenţei totale</li>
	<li>Caluclarea curentului total</li>
	<li>Determinarea căderilor de tensiune pe fiecare rezistor echivalent şi curenţii pe fiecare ramură la fiecare pas, un pas însemnând „dezvoltarea„ circuitului redus spre forma iniţială</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
