<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Depăşirea binară</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Depăşirea binară</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Una din problemele numerelor binare cu semn, este bit-ului de depăşire. Acesta apare ca în cazul în care rezultatul adunării sau scăderii efectuate între două numere binare este mai mare decât valoarea maximă ce poate fi reprezentată cu numărul de biţi alocaţi. Ţineţi minte că poziţia bit-ului de semn este fixată la începutul problemei. În exemplul precedent, am utilizat cinci biţi pentru reprezentarea unui număr, iar bit-ul din stânga a fost utilizat pe post de bit de semn, cu pondere negativă. Cu cinci biţi rămaşi pentru reprezentarea valorilor, cel mai mare număr ce-l putem scrie astfel este +31<sub>10</sub>(011111<sub>2</sub>), iar cel mai mic -32<sub>10</sub>(100000<sub>2</sub>). Dacă aplicăm o operaţie de adunare unor astfel de numere, iar rezultatul este mai mare decât 31<sub>10</sub> sau mai mic decât -32<sub>10</sub>, răspunsul obţinut nu va fi corect. Să luăm un exemplu:</p>

<div class="formula">
17<sub>10</sub> = 10001<sub>2</sub>
19<sub>10</sub> = 10011<sub>2</sub>
</div>

<p>Adăugând bit-ul de semn, adunarea celor două numere arată astfel:</p>

<pre>
    1  11  &lt;--- biţi ce se trec mai departe
    010001
  + 010011
  -------- 
    100100 
</pre>

<p>Răspunsul (100100<sub>2</sub>) este egal cu -28<sub>10</sub>, nu cu +36<sub>10</sub>, aşa cum ar trebui să obţinem adunând +17<sub>10</sub> cu +19<sub>10</sub>. Evident, acest răspuns nu este corect. Dar unde am greşit? Din moment ce valoarea reală a sumei (36<sub>10</sub>) depăşeşte limita permisă de cei cinci biţi (plus bit-ul de semn), ajungem la o eroare de depăşire binară.</p>

<p>O eroare similară obţinem şi în cazul adunării a două numere negative a cărei sumă este mai mică decât -32<sub>10</sub>:</p>

<div class="formula">
-17<sub>10</sub> = 101111<sub>2</sub>
-19<sub>10</sub> = 101101<sub>2</sub>
</div>

<p>Aplicând operaţia de adunare celor două numere, obţinem:</p>

<pre>
    1 1111  &lt;--- biţi ce se trec mai departe
     101111
   + 101101
   --------
    1011100 
</pre>

<p>După înlăturarea bit-ului în plus, rezultatul final este:</p>

<div class="formula">
011100<sub>2</sub> = +28<sub>10</sub>
</div>

<p>Acest răspuns este, desigur, incorect.</p>

<p>Să reconsiderăm cele două exemple de mai sus, dar de această dată utilizând şase biţi pentru reprezentarea numărului. Al şaptelea bit va fi bit-ul de semn:</p>

<pre>
    17<sub>10</sub> + 19<sub>10</sub>                     (-17<sub>10</sub>) + (-19<sub>10</sub>) 
 
     1  11                           11 1111
    0010001                           1101111
  + 0010011                         + 1101101
  ---------                         ---------
    0100100<sub>2</sub>                         11011100<sub>2</sub> &lt;--- înlăturarea bit-ului suplimentar
									
Răspunsuri: 0100100<sub>2</sub> = +36<sub>10</sub>
            1011100<sub>2</sub> = -36<sub>10</sub>
</pre>

<p>Utilizând un număr suficient de biţi pentru reprezentarea rezultatelor, răspunsurile sunt corecte.</p>

<p>În aceste exemple am putut determina erorile de depăşire prin realizarea „de mână” a operaţiilor de adunare sub formă zecimală. Această metodă de verificare nu este însă foarte eficientă. Până la urmă, întregul scop al complementării este realizarea adunării sub formă binară. Acest lucru este valabil mai ales în cazul proiectării circuitelor electronice: circuitul trebuie să poată sesiza singur existenţa unei erori de depăşire, fără ajutor uman.</p>

<p>Cea mai elegantă metodă de rezolvare a acestei situaţii constă în verificarea „semnului” sumei şi compararea acestuia cu semnele numerelor însumate. Desigur, rezultatul sumei a două numere pozitive este un număr pozitiv, iar suma a două numere negative, este un număr negativ. Putem observa că, de fiecare dată când avem o situaţie de depăşire, semnul sumei este invers faţă de semnul celor două numere adunate: +17<sub>10</sub> plus +19<sub>10</sub> ne-a dat -28<sub>10</sub>, sau, -17<sub>10</sub> plus -19<sub>10</sub> ne-a dat +28<sub>10</sub>. Prin simpla verificare a semnelor, putem să ne dăm seama că exista o eroare iar rezultatul este fals.</p>

<p>Ce se întâmplă în cazul în care unul din numere este pozitiv iar celălalt negativ? Care ar trebui să fie semnul sumei? Răspunsul este simplu: atunci când numerele însumate sunt de semne diferite, nu va exista niciodată o eroare de depăşire. Motivul este la fel de simplu: depăşirea are loc atunci când valoarea unui număr este mai mare decât cea permisă de numărul de biţi utilizaţi. În cazul numerelor de semn contrar, valoarea rezultatului trebuie să fie între cele două numere, prin urmare, nu poate fi mai mare sau mai mică decât limita maximă permisă de numărul de biţi.</p>

<p>Din fericire, această metodă de identificare a erorii de depăşire este uşor de implementat într-un circuit electronic.</p>

#+CAPTION: 
[[../poze/00000.png]]

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
