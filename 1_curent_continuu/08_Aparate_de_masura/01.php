<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Ce este un aparat de măsură</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Ce este un aparat de măsură</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Un aparat de măsură este orice dispozitiv special realizat pentru afişarea unei mărimi electrice într-un format ce poate fi interpretat de către un operator uman. De obicei, acest format este sub formă vizuală: deplasarea unui indicator pe o scală, o serie de dispozitive luminoase aranjate sub forma unui bargraph, sau un afişaz format din cifre. În analiza şi testarea circuitelor, există dispozitive proiectate pentru realizarea măsurătorilor mărimilor electrice de bază, şi anume, tensiune, curent şi rezistenţa. Există multe alte tipuri de aparate de măsură, dar în acest capitol ne vom concentra atenţia, în principal, pe modul de funcţionare al acestora trei.</p>

<p>Majoritatea aparatelor de măsură moderne sunt digitale, folosind un afişaj numeric. Modelele mai vechi de aparate de măsură sunt însă mecanice, utilizând un indicator pentru afişarea mărimii măsurate. În ambele cazuri, este nevoie de o setare a aparatului pentru indicarea corespunzătoare a mărimilor măsurate. În acest capitol ne vom referi exclusiv asupra principiilor de funcţionare ale aparatelor de măsură analogice (mecanice).</p>

<h2>Principiul aparatelor de măsură electromagnetice</h2>

<p>Majoritatea aparatelor de măsură analogice se bazează pe principiul electromagnetismului, şi anume, pe faptul că trecerea unui curent printr-un conductor produce un câmp magnetic perpendicular pe axa de deplasare a electronilor. Cu cât valoarea curentului este mai mare, cu atât mai mare va fi câmpul magnetic produs. Dacă acest câmp magnetic produs de conductor este liber să interacţioneze cu un alt câmp magnetic, vom asista la dezvoltarea unei forţe fizice între cele două surse ale câmpurilor magnetice. Dacă una dintre acest surse este liberă să se deplaseze faţă de cealaltă sursă, aceasta se va deplasa pe măsură ce curentul trece prin conductor, deplasarea fiind direct proporţională cu mărimea curentului.</p>

<h2>Galvanometrul</h2>

#+CAPTION: galvanometru
[[../poze/50030.jpg]]

<p>Primele astfel de aparate de măsură construite erau cunoscute sub numele de galvanometre, fiind recunoscute pentru precizia lor. Un model foarte simplu de galvanometru constă dintr-un ac magnetizat (asemenea celui folosit la compas) suspendat la capătul unui fir şi poziţionat în interiorul unei înfăşurări conductoare. La trecerea curentului prin acest colac, se va produce un câmp magnetic ce va modifica poziţia iniţială a acului. Un astfel de aparat antic este prezentat în figura alăturată.</p>

<div class="clear"></div>

<p>Astfel de aparate nu mai sunt însă practice în prezent, fiind extrem de sensibile la orice tip de mişcare şi la interferenţele datorate câmpului magnetic al pământului. Singurul lor scop rămâne prezentarea conceptelor de bază ale dispozitivelor expermentale. În prezent, termenul de „galvanometru” este utilizat pentru desemnarea oricărui tip de aparat de măsură de o prezicie excepţională nereprezetând neapărat un astfel de dispozitiv prezentat mai sus.</p>

#+CAPTION: principiul de construcţie a unui aparate de măsură electromagnetic (analogic)
[[../poze/00146.png]]

<p>Aparatele de măsură electromagnetice sunt realizate în prezent dintr-o bobină suspendată într-un câmp magnetic, protejată de majoritatea influenţelor externe. Astfel de dispozitive sunt cunoscute sub numele de aparate de măsură cu magnet permanent.</p>

<div class="clear"></div>

<p>În figura de mai sus, acul indicator este poziţionat aproximativ la 35% pe scala valorilor, zero fiind în stânga iar valoarea maximă regăsindu-se în partea dreaptă. O creştere a curentului de măsurat va duce la o deplasare a acului indicator spre dreapta iar o descreştere a lui va duce la o deplasare a acului spre stânga. Afişajul aparatului de măsură conţine o scală gradată cu cifre pentru indicarea valorilor mărimii de măsurat, indiferent de tipul acesteia. Cu alte cuvinte, dacă este necesară o valoare de 50 µA pentru deplasarea maximă a acului indicator (spre capătul din dreapta), scala va avea scrisă o valoarea de 0 µA în partea stângă şi o valoare de 50 µA în partea dreaptă; mijlocul va fi desigur 25 µA. În exemplul din figură, acul ar indica în acest caz ipotetic o valoare a curentului de 17,5 µA. De obicei, scala este împărţită în gradaţii mult mai mici, din 5 în 5 µA, sau chiar la 1 µA, pentru a permite o citire mult mai precisă a indicaţiei acului.</p>

#+CAPTION: aparat de măsură; scala conţine atât valori pozitive cât şi valori negative
[[../poze/00147.png]]

<p>Majoritatea aparatelor pot detecta polaritatea curentului, o direcţie a acestuia ducând la deplasarea acului într-un anumit sens, iar direcţia opusă a curentului ducând la o deplasare în sens contrar al acului indicator. Modele D'Arsonval şi Weston sunt de acest tip.</p>

<div class="clear"></div>

<p>Există însă şi aparate care nu sunt sensibile la modificarea sensului curentului prin circuit, bazându-se pe atragerea unui cursor mobil de fier, nemagnetizat, către conductorul de curent fix pentru deplasarea acului inducator. Astfel de aparate sunt folosite pentru măsurător în curent alternativ. Un dispozitiv sensibil la variaţia polarităţii curentului, ar vibra pur şi simplu înainte şi înapoi fără a putea da o indicaţie practică a mărimii de măsurat.</p>

<h2>Aparate de măsură electrostatice</h2>

<p>Deşi majoritatea aparatelor de măsură analogice se bazează pe principiul electromagnetismului, câteva dintre ele se bazează pe electrostatică, cu alte cuvinte, pe forţa de atracţie sau de respingere generată de sarcinile electrice în mediul dintre ele.</p>

#+CAPTION: aparat de măsură electrostatic
[[../poze/00148.png]]

<p>Dacă aplicăm o tensiune între două suprafeţe conductoare separate printr-un dielectric format din aer, va exista o forţă fizică de atracţie dintre cele două suprafeţe, forţa capabilă să deplaseze un mecanism de măsurare. Această forţă este direct proporţională cu tensiunea aplicată între plăci şi invers proporţională cu pătratul dinstanţei dintre ele. De asemenea, forţa nu depinde de polaritate, rezultând astfel un dispozitiv insensibil la variaţia polarităţii tensiunii.</p>

<div class="clear"></div>

<p>Din păcate, forţa generată de atracţia electrostatică este foarte mică în cazul tensiunilor normale, astfel încât aceste tipuri de aparate de măsură nu sunt practice pentru instrumentele de test normale. Astfel de aparate electrostatice sunt folosite pentru măsurarea tensiunilor înalte, de ordinul miilor de volţi. Unul dintre cele mai mare avantaje al aparatelor electrostatice constă în rezistenţa electrică extrem de mare, fată de aparatele electromagnetice  care au o rezistenţa electrică mult mai mică. După cum vom vedea în cele ce urmează, o rezistenţa electrică mare, rezultând într-un curent mult mai mic prin dispozitiv, este absolut necesară pentru realizarea unui volmetru profesional.</p>

<h3>Tubul catodic (CRT)</h3>

#+CAPTION: tubul catodic
[[../poze/00149.png]]

<p>O aplicaţie mult mai întâlnită a dispozitivelor electrostatice este tubul catodic. Acestea sunt tuburi speciale din sticlă, similare celor întâlnite la televizoarele clasice. Într-un astfel de tub, un fascicol de electroni ce se deplasează prin vid, este deviat prin intermediul unei tensiuni existente între două plăci metalice aşezate de o parte şi de cealaltă a tubului. Datorită faptului că electronii posedă o sarcină electrică negativă, aceştia tind să fie respinşi de placa negativă şi atraşi de placa pozitivă. O inversare a polarităţii ensiunii dintre cele două plăci va duce la modificarea în sens contrar al traseului fascicolului de electroni, acest dispozitiv fiind prin urmare sensibil la polaritate.</p>

<div class="clear"></div>

<p>Electronii, având o greutate mult mai mică decât plăcile metalice, deplasează mult mai uşor sub acţiunea forţei dintre cele două plăci decât plăcile propriu-zise. Traseul lor deviat poate fi detectat pe măsură ce aceştia se lovesc de afişajul din sticla de la capătul tubului, unde întâlnesc un strat subţire de fosfor; rezultatul este emiterea unei unde luminoase ce poate fi observată din exteriorul tubului. Cu cât tensiunea dintre cele două plăci este mai mare, cu atât electronii vor fi deviaţi mai puteric de la traseul lor iniţial, punctul luminos de pe afişaj regăsindu-se la o distanţa mai mare faţă de centrul acestuia.</p>

#+CAPTION: tub catodic
[[../poze/50001.jpg]]

<p>Un astfel de tub este prezentat în figura alăturată. Într-un tub real, precum cel alăturat, există două perechi de placi metalice pentru deviaţia electronilor, nu doar una singură, pentru a putea acoperi întreaga aria a afişajului de sticlă din capătul dispozitivului.</p>

<div class="clear"></div>

<p>Cu toate că acest dispozitive pot înregistra tensiuni mică cu o precizie ridicată, ele sunt totuşi greoaie, fragile şi necesită putere electrică pentru funcţionare, spre deosebire de dispozitivele electromagnetice ce sunt mult mai compacte şi sunt alimentate direct de semnalul de măsurat ce se regăseşte la bornele lor. De obicei, tuburile catodice sunt folosite în combinaţie cu circuite externe precise pentru formarea unui echipament de test mult mai mare, şi anume, osciloscopul. Acest din urmă dispozitiv poate indica variaţia tensiunii cu timpul, o abilitatea extrem de importantă în cazul circuitelor cu tensiuni şi curenţi variabili în timp.</p>


<p class="sumar">Sumar:</p>
<ul>
	<li>Mecanismul de afişaj al unui aparat de măsură analogic presupun deplasarea unui ac indicator pe o scală gradată</li>
	<li>Aparatele de măsură <strong>electromagnetice</strong> funcţionează pe principiul generării unui câmp magnetic la trecerea unui curent electric printr-un conductor</li>
	<li>Aparatele de măsură <strong>electrostatice</strong> funcţionează pe principiul generării unei forţe fizice datorită câmpului electric dintre două plăci</li>
	<li><strong>Tuburile catodice</strong> utilizează un câmp electrostatic pentru devierea unui fascicol de electroni; poziţia finală a fascicolului este redată cu ajutorul unei unde luminoase emise în momentul ciocnirii electronilor de sticla prevăzută cu fosfor de la capătul dispozitivului</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
