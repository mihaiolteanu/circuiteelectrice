<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Construirea circuitelor rezistive simple</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>8. Construirea circuitelor rezistive simple</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>

<div id="contents">
<p>Pe măsură ce studiaţi circuitele electrice, veţi dori probabil să construiţi propriile circuite utilizând baterii şi rezistori (becuri, de exemplu). Există câteva opţiuni pentru realizarea acestor circuite, unele mai simple decât altele, opţiuni pe care le vom prezenta în acest capitol.</p>

#+CAPTION: circuit simplu cu o singură baterie şi un singur rezistor
[[../poze/00444.png]]

<p>Dacă dorim realizarea unui circuit simplu cu o sigură baterie şi un singur rezistor, putem foarte bine să utilizăm conductori cu cleme (crocodil/banană).</p>
  
<div class="clear"></div>

<p>Astfel de conductori, prevăzuţi cu banane pe la capete, reprezintă o metodă practică şi sigură din punct de vedere electric pentru conectarea componentelor între ele.</p>

#+CAPTION: circuit simplu cu o singură baterie şi trei rezistori
[[../poze/00445.png]]

<p>Dacă am dori să realizăm un circuit simplu cu o baterie şi trei rezistor, putem utiliza aceiaşi metodă de conectare a conductorilor.</p>

<div class="clear"></div>

#+CAPTION: placă electronică de test
[[../poze/50042.jpg]]

<p>Totuşi, această tehnică se dovedeşte a nu fi practică atunci când avem de a face cu circuite mult mai complicate decât cele de mai sus. O metodă mult mai practică de realizare a circuitelor temporare este utilizarea unei plăci de test (solderless breadboard), un dispozitiv realizat din plastic ce permite realizarea uşoară a unui număr relativ mare de conexiuni între componente.</p>

<div class="clear"></div>

#+CAPTION: circuit electric cu placă de test
[[../poze/00446.png]]

<p>Alăturat este un exemplu de circuit realizat cu ajutorul plăcii de test.</p>

<div class="clear"></div>

#+CAPTION: placă electronică de test - partea anterioară
[[../poze/00447.png]]

<p>Sub fiecare cavitate există un arc metalic ce prinde orice conductor sau terminal al componentelor introduse în acesta. Aceste arcuri metalice sunt conectate între ele pe spatele plăcii, realizâd astfel conexiuni între conductorii inseraţi prin partea superioară. Modelul plăcii este astfel încât, există o serie de cinci astfel de cavităţi unite vertical între ele, conform figurii alăturate.</p>

<div class="clear"></div>

<p>Astfel că atunci când inserăm un conductor într-una dintre cavităţi, există încă o serie de patru astfel de cavităţi pe aceeiaşi coloană, ce sunt comune din punct de vedere electric cu prima. Introducerea unui terminal sau conductor în oricare dintre aceste puncte comune este identică din punct de vedere electric cu conectarea directă a terminalilor sau conductorilor celor două componente. Rezultatul este o platformă extrem de flexibilă pentreu realizarea circuitelor electrice sau electronice temporare.</p>

#+CAPTION: placă electronică de test - circuit serie cu trei rezistori
[[../poze/00448.png]]

<p>De exemplu, circuitul electric de mai sus, format din trei rezistori, poate fi construit cu ajutorul unei plăci de test conform figurii alăturate.</p>

<div class="clear"></div>

#+CAPTION: placă electronică de test - circuit paralel cu trei rezistori
[[../poze/00449.png]]

<p>Un alt exemplu, de această dată a unui circuit paralel cu trei rezistori, este prezentat în figura alăturată.</p>

<div class="clear"></div>

<p>Acest plăci de test au totuşi unele neajunsuri. În primul rând, scopul lor sunt doar circuitele temporare. Dacă întoarcem placa şi o scuturăm, componentele s-ar putea să cadă din locaţiile lor respective. De asemenea, plăcile sunt limitate la curenţi destul de mici (sub 1 A). Acele arcuri metalice au o suprafaţă de contact destul de mică, prin urmare, nu pot suporta curenţi mari fără încălzirea lor excesivă.</p>

<h2>Regleta de conexiuni</h2>

<p>O metodă alternativă constă în utilizarea unei reglete de conexiuni (regletă de borne). Acestea sunt compuse dintr-un material izolator prevăzut cu spaţii metalice pentru prinderea conductorilor cu ajutorul unor şuruburi; acest procedeu este similor modului de conectare al prizelor sau întrerupătoarelor casnice.</p>

#+CAPTION: regletă de conexiuni
[[../poze/50033.jpg]]

<p>Un exemplu de astfel de regletă, având o serie de conductori ataşaţi, este prezentat în poza alăturată.</p>

<div class="clear"></div>

#+CAPTION: regletă de conexiuni
[[../poze/50034.jpg]]

<p>O altă variantă este cea din poza alăturată. Această variantă, denumită şi „europeană” are şuruburile introduse într-un canal pentru a preveni scurt-circuitarea accidentală între terminali prin intermediul unei şurubelniţi sau al unui alt obiect metalic.</p>

<div class="clear"></div>

#+CAPTION: regletă de conexiuni; circuit serie
[[../poze/00450.png]]

<p>În figura alăturată, este prezentat un circuit serie compus dintr-o singură baterie şi trei rezistori folosind o regletă de conexiuni.</p>

<div class="clear"></div>

<p>Conxiunile realizate cu ajutorul unei reglete sunt robuste şi pot fi prin urmare folosite atât pentru circuitele temporare cât şi pentru construcţia circuitelor permanente.</p>

<p>Una dintre deprinderile esenţiale ale celor care vor să pună în practică lecţiile învăţate despre circuitele electrice şi electronice, este „traducerea” unei diagrame într-un circuit real. Diagramele circuitelor sunt de obicei realizate pentru a facilita citirea lor  cu uşurinţă, dar circuitele practice au de cele mai multe ori o orientare complet diferită.</p>

#+CAPTION: regletă de conexiuni; circuit paralel
[[../poze/00451.png]]

<p>Să luăm ca şi exemplu un circuit paralel format dintr-o singură baterie şi trei rezistori.</p>

<div class="clear"></div>

<p>Trecerea de la o diagrama circuitului la realizarea propriu-zisă a acestuia - mai ales atunci când rezistori ce trebuie conectaţi sunt aranjaţi liniar (asemănător circuitelor serie, nu paralel) pe regletă - nu este chiar aşa de evidentă, prin urmare, vom prezenta procesul pas cu pas în cele ce urmează.</p>

#+CAPTION: regletă de conexiuni; circuit paralel
[[../poze/00452.png]]

<p>Pentru început, considerăm diagrama iniţială a circuitului şi toate componentele prinse pe regleta de conexiuni dar fără niciun conductor electric între ele.</p>

<div class="clear"></div>

#+CAPTION: regletă de conexiuni; circuit paralel
[[../poze/00453.png]]

<p>Apoi, urmărim conductorul dinspre terminalul pozitiv al bateriei spre primul component al diagramei, realizând în acelaşi timp o legătură fizică, prin intermediul unui conductor, între aceste două puncte pe circuitul real. Dacă ne este mai uşor, putem trasa o linie de o culoare diferită pe diagramă, pentru a reprezenta ce tip de conexiuni au fost deja realizate în circuitul real.</p>

<div class="clear"></div>

<p>Continuând acest proces, fir cu fir, până în momentul în care întreaga schemă electrică (diagramă) a circuitului este acoperită.</p>

#+CAPTION: regletă de conexiuni; circuit paralel
[[../poze/00454.png]]

<p>Următorul pas, aşadar, constă în conectarea bornelor superioare a celor doi rezistori rămaşi.</p>

<div class="clear"></div>

#+CAPTION: regletă de conexiuni; circuit paralel
[[../poze/00455.png]]

<p>Având toate bornele superioare ale tuturor rezistorilor din circuit conectate la borna pozitivă a bateriei, următorul pas este să conectăm bornele inferioare ale acestora la borna negativă a bateriei.</p>

<div class="clear"></div>

#+CAPTION: regletă de conexiuni; circuit paralel; marcarea conductorilor
[[../poze/00456.png]]

<p>În mod normal, în circuitele practice folosite în industrie, toate firele sunt marcate; conductorii comuni din punct de vedere electric posedă acelaşi număr de marcaj. În exemplu nostru, am marcat conductorii cu 1 şi 2.</p>

<div class="clear"></div>

#+CAPTION: regletă de conexiuni; circuit paralel; marcarea conductorilor
[[../poze/00457.png]]

<p>O altă convenţie constă în modificarea uşoară a diagramei iniţiale pentru a indica punctul de contact propriu-zis al conductorului pe regletă. Acest lucru necesită un sistem de marcaj al regletei: „NB” (numărul blocului), si un număr reprezentând fiecare conexiune metalică de pe regletă.</p>

<div class="clear"></div>

<p>În acest mod, diagrama poate fi utilizata ca şi o „hartă” pentru localizarea punctelor dintr-un circuit real, indiferent cât de încâlcit şi de complex este în realitate. Această metodă poată părea exagerată pentru circuitul simplu cu trei rezistori de mai sus, dar aceste detalii sunt absolut necesare pentru realizarea şi întreţinerea circuitelor mari, în special ale acelora care se intind pe o distanţă considerabilă, folosind mai multe relgete localizate în puncte diferite.</p>

<p>Pentru circuite permanente, se pot folosi plăci imprimate, un subiect destul de vast în ale cărui detalii nu vom intra aici.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Pentru realizarea practică a circuitelor se pot utiliza placi de teste, reglete de conexiuni sau plăci imprimate</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
