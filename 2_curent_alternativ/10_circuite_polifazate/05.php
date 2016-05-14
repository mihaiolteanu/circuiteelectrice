<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Configuraţii stea şi triunghi trifazate</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Configuraţii stea şi triunghi trifazate</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<h3>Configuraţia stea (Y)</h3>
<p>Acest tip de configuraţie este cel considerat până acum în secţiunile precedente. Aceasta se caracterizează prin existenţa unui punct comun tuturor surselor de tensiune:</p>

#+CAPTION: configuraţia stea trifazată
[[../poze/02194.png]]

<p>Dacă redesenăm circuitul, folosind în loc de sursele de tensiune bobine, reprezentând înfăşurările generatorului, şi rearanjăm poziţia acestora, configuraţia devine mai aparentă:</p>

#+CAPTION: configuraţia stea trifazată
[[../poze/02195.png]]

<p>Cei trei conductori ce pleacă de la sursele de alimentare (înfăşurări) înspre sarcină, poartă numele de „linii”, iar înfăşurările propriu-zise sunt denumite „faze”. Într-un sistem „Y” (stea), prezenţa conductorului neutru nu este obligatorie, deşi ajută la evitarea problemelor de potenţial în cazul în care una dintre sarcini este scoasă din funcţiune.</p>

#+CAPTION: configuraţia stea trifazată, fără conductorul neutru
[[../poze/02196.png]]

<h3>Tensiunea de linie şi tensiunea de fază</h3>

<p><span class="important">La măsurarea tensiunilor şi curenţilor într-un sistem trifazat, trebuie să fim atenţi ce şi unde anume măsurăm</span>. <i>Tensiunea de linie</i> se referă la valoarea tensiunii măsurată între oricare doi conductori, într-un sistem trifazat echilibrat. În circuitul de sus, tensiunea de linie este aproximativ 208 V. <i>Tensiunea de fază</i> se referă la tensiunea măsurată la bornele oricărui component (înfăşurarea sursei sau impedanţa) într-un circuit trifazat. Acolo unde există fir neutru, putem spune că tensiunea de fază se măsoară între linie şi neutru. în circuitul de sus, tensiune de fază este de 120 V. Ambii termeni, tensiunea/curentul de linie şi tensiunea/curentul de fază au aceeiaşi logică: primul se referă la tensiunea/curentul prin oricare dintre conductori (linie), iar celălalt la tensiunea/curentul prin oricare component.</p>

<p>Sursele şi sarcinile dintr-o configuraţie în stea au tot timpul tensiunile de linie mai mari decât tensiunile de fază, iar curenţii de linie egali cu cei de fază. Mai mult, dacă sursa sau sarcina este echilibrată, tensiunea de linie va fi egală cu produsul dintre tensiunea de fază şi radical de ordin doi din trei:</p>

#+CAPTION: relaţia dintre tensiunile/curenţii de linie şi tensiunile/curenţii de fază într-o sistem de tensiuni trifazate în configuraţie stea
[[../poze/12115.png]]

<h3>Configuraţia triunghi (Δ)</h3>

<p>Un alt tip de configuraţie pentru sistemele de alimentare trifazate este configuraţia triunghi, denumită şi „delta”, după litera grecească Δ:</p>

#+CAPTION: conexiunea unui sistem alternativ trifazat în configuraţie triunghi
[[../poze/02197.png]]

<p>La o primă vedere, am putea presupune că sursele de tensiune asfel conectate, ar produce un scurt-circuit, din cauză că electronii sunt liberi să se deplaseze în jurul triughiului neexistând o altă rezistenţă decât impedanţa internă a înfăşurărilor. Însă, datorită diferenţelor de fază dintre cele trei surse, acest lucru nu se întâmplă.</p>

<p>Putem verifica acest lucru aplicând legea lui Kirchhoff pentru tensiune şi să vedem dacă suma tensiunilor din interiorul buclei formate din laturile triunghiului este într-adevăr zero. Dacă suma este zero, atunci nu va există nicio cădere de tensiune necesară pentru împingerea electronilor de-a lungul buclei, şi prin urmare, nu va exista nici curent şi nici posibilitatea apariţiei scurt-circuitului. Începând cu înfăşurarea de sus şi continuând în direcţie trigonometrică, expresia legii lui Kirchhoff pentru tensiune arată asfel:</p>

#+CAPTION: suma tensiunilor surselor de alimentare a unui sistem trifazat în configuraţie stea, este egală cu zero
[[../poze/12116.png]]

<p>Într-adevăr, suma acestor trei vectori este zero.</p>

<p>O altă metodă prin care putem demonstra că nu poate exista curent electric în jurul circuitului format de cele trei surse de alimentare (înfăşurări), este să „deschidem” bucla la unul dintre noduri, şi să calculăm diferenţa de potenţial (tensiunea) dintre cele două ramuri:</p>

#+CAPTION: conexiunea unui sistem alternativ trifazat în configuraţie triunghi; deschiderea circuitului la unul din noduri pentru asigurarea faptului că nu există circulaţie de curent prin bucla formată din laturile triunghiului; tensiunea măsurată între cele două ramuri trebuie să fie zero
[[../poze/02198.png]]

<p>Începând cu înfăşurarea din dreapta şi continuând în sens trigonomentric, ecuaţia legii lui Kirchhoff pentru tensiune arată asfel:</p>

#+CAPTION: suma tensiunilor surselor de alimentare a unui sistem trifazat în configuraţie stea, este egală cu zero
[[../poze/12117.png]]

<p>Rezultatul obţinut este într-adevăr zero, ceea ce înseamnă că nu va exista circuilaţie de curent în bucla formată de triunghiul surselor de alimentare, atunci când circuitul este închis.</p>

<p>Datorită faptului că fiecare pereche de conductori, într-o configuraţie stea, este conectată direct la bornele unei singure înfăşurări, tensiunea de linie va fi egală cu tensiunea de fază. De asemenea, datorită faptului că fiecare conductor are un punct comun cu două înfăşurări, curentul de linie va fi suma vectorilor celor doi curenţi de fază.</p>

#+CAPTION: relaţia dintre tensiunile/curenţii de linie şi tensiunile/curenţii de fază într-o sistem de tensiuni trifazate în configuraţie triunghi
[[../poze/12118.png]]

<p>Să luăm un circuit ca şi exemplu:</p>

#+CAPTION: circuit electric trifazat utilizând un sistem de alimentare în configuraţie triunghi (delta)
[[../poze/02199.png]]

<p>Căderea de tensiune pe fiecare rezistor va fi de 120 V, iar curentul fiecărei faza va fi de 83.33 A:</p>

#+CAPTION: calcule matematice
[[../poze/12119.png]]

<p>Un avantaj al utilizării configuraţiei triunghi, constă în lipsa firului neutru. În conecţiunea stea, firul neutru este necesar pentru preluarea oricăror curenţi în cazul în care sarcina este dezechilibrată. Acest lucru nu este însă necesar (nici măcar posibil!) într-o configuraţie triunghi. Fiecare element fiind conectat direct la bornele sursei respective, tensiunea din circuit va fi aceeiaşi indiferent de comportamentul individual al sarcinilor.</p>

<p>Proabil că cel mai mare avantaj a conexiunii triunghi este toleranţa sistemului în caz de defect. Defectarea uneia dintre înfăşurări nu va influenţa tensiunea sarcinii şi nici curentul!</p>

#+CAPTION: defectarea unei dintre înfăşurări, într-un sistem trifazat în configuraţie triunghi, nu afectează tensiunea de linie şi de fază; singura diferenţă este creşterea curentului în înfăşurările funcţionale rămase
[[../poze/02200.png]]

<p>Singura consecinţă al unui defect într-un dintre înfăşurări pentru un sistem în configuraţie triunghi, este creşterea curentului de fază pentru înfăsurările rămase. Să comparăm acest comportament cu cel al unui sistem în configuraţie stea, dar cu aceeiaşi configuraţie sa sarcinii (triunghi):</p>

#+CAPTION: defectarea unei dintre înfăşurări, într-un sistem trifazat în configuraţie stea, alimentând o sarcină în configuraţie triunghi
[[../poze/02201.png]]

<p>Cu o sarcină în configuraţie triunghi (Δ), căderea de tensiune pe două dintre sarcini scade la jumătate (104 V), iar una dintre sarcini rămâne la tensiunea originală, 208 V. O sarcină în configuraţie Y, suferă şi mai mult de pe urma aceluiaşi defect al înfăşurării:</p>

#+CAPTION: defectarea unei dintre înfăşurări, într-un sistem trifazat în configuraţie stea, alimentând o sarcină în configuraţie stea
[[../poze/02202.png]]

<p>În acest caz, numărul sarcinilor ce suferă o reducere a tensiunii se ridică la două, iar căderea de tensiunea pe cea de a treia sarcină este zero! Din această cauză, sursele de tensiune în configuraţie triunghi (Δ) sunt preferate pentru fiabilitatea lor. Totuşi, dacă este necesară o tensiune duală (120/208), sau curenţi de linie mai mici, sunt preferate sistemele în conexiune strea (Y).</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Conductorii conectaţi în cele trei puncte ale unei surse sau sarcini trifazate, se numesc <i>linii</i></li>
	<li>Cele trei componente ale sursei sau sarcinii unui sistem trifazat, poartă numele de <i>faze</i></li>
	<li>Tensiunea de linie, este tensiunea măsurată între oricare două linii ale unui circuit trifazat</li>
	<li>Tensiunea de fază, este tensiunea măsurată la bornele unui singur component a sursei sau sarcinii unui sistem trifazat</li>
	<li>Curentul de linie este curentul prin oricare dintre liniile sursei sau sarcinii unui sistem trifazat</li>
	<li>Curentul de fază este curentul prin oricare dintre componentele sursei sau sarcinii unui sistem trifazat</li>
	<li>În circuitele trifazate în configuraţie stea (Y) echilibrate, tensiunea de linie este egală cu produsul dintre tensiunea de fază şi radical de ordinul doi din trei, iar curentul de linie este egal cu cel de fază</li>
	<li>În circuitele trifazate în configuraţie stea (Y) echilibrate, curentul de linie este egal cu produsul dintre curentul de fază şi radical de ordinul doi din trei, iar tensiunea de linie este egală cu tensiunea de fază</li>
	<li>Fiabilitatea sistemelor în configuraţie triunghi este mult mai bună decât cea a sistemelor în configuraţie stea în caz de avarie. Totuşi, sursele în configuraţie stea pot asigura aceeiaşi putere pe sarcină cu un curent de linie mai mic faţă de conexiunea triunghi.</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
