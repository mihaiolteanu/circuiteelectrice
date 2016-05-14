<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Funcţionarea motorului polifazat</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Funcţionarea motorului polifazat</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Probabil că cel mai mare avantaj al sistemelor de curent alternativ polifazata constă în proiectarea şi operarea motoarelor de curent alternativ. După cum se ştie, unele tipuri de motoare sunt practic identice din punct de vedere constructiv cu generatoarele electrice, constând dintr-un set de înfăşurări staţionare şi un set de magneţi (electromagneţi) rotitori. Să considerăm prima dată un motor de curent alternativ monofazat:</p>

#+CAPTION: modul de funţionare al unui motor de curent alternativ monofazat; rotirea în sensul acelor de ceasornic
[[../poze/02186.png]]

<p>Dacă magnetul rotitor va putea să ţină pasul cu frecvenţe curentului alternativ prin înfăşurări, acesta va fi „tras” într-o mişcare permanentă în sensul acelor de ceasornic. Totuşi, aceasta nu este singura direcţia posibilă. Ar putea la fel de bine să se rotească în sensul invers acelor de ceasornic (trigonometric), folosind exact aceeiaşi formă de undă:</p>

#+CAPTION: modul de funţionare al unui motor de curent alternativ monofazat; rotirea în sens trigonometric
[[../poze/02187.png]]

<p>Folosind aceeiaşi formă de undă, rotorul magnetic se poate învârti în oricare dintre direcţii. Aceasta este o caracteristică comună a tuturor motoarelor monofazate de „inducţie” şi „sincrone”: nu posedă o direcţie normală, sau „corectă” de rotaţie. O întrebare este binevenită în acest moment: cum putem porni motorul în direcţia dorită, dacă acesta se poate roti la fel de bine în orice direcţie? Adevărul este că aceste motoare au nevoie de puţin ajutor la pornire. Odată ajutate să pornească într-o anumită direcţie, vor continua să se rotească în aceeiaşi direcţie, atâta timp când este menţinută puterea electrică pe înfăşurări.</p>

<h3>Pornirea motorului monofazat de curent alternativ</h3>

<p>În mod normal, acest ajutor vine din partea unor seturi adiţionale de înfăşurări poziţionate diferit faţă de seturile de înfăşurări principale, şi alimentate cu un curent alternativ defazat faţă de curentul principal.</p>

#+CAPTION: schema de principiu folosită pentru pornirea uni-direcţională a motoarului de curent alternativ monofazat
[[../poze/02188.png]]

<p>Aceste înfăşurări suplimentare sunt de obicei conectate în serie cu un condesator pentru introducerea unui defazat între curenţii celor două seturi de înfăşurări.</p>

#+CAPTION: utilizarea condensatorului pentru introducerea unui defazaj între curenţii înfăşurărilor de pornire a motorului de curent alternativ monofazat
[[../poze/02189.png]]

<p>Acest defazaj crează un câmp magnetic al înfăşurărilor 2a şi 2b ce este defazat la rândul lui cu câmpul magnetic al înfăşurărilor 1a şi 1b. Rezultatul este un set de câmpuri magnetice cu o direcţie de rotaţie precisă. Această secvenţă de rotaţie „trage”, trage la rândul său magnetul într-o direcţie precisă.</p>

<p>Motoarele de curent alternativ polifazate nu necesită asfel de mecanisme pentru pornirea lor într-o anumită direcţie. Datorită faptului că formele de undă ale tensiunilor au deja o direcţie bine stabilită (secvenţa fazelor), şi câmpurile magnetice generate de înfăşurări vor avea o direcţie precisă. De fapt, combinaţia tuturor seturilor de înfăşurări, lucrând împreună, crează un câmp magnetic ce poartă numele de <i>câmp magnetic rotitor</i>. Acest concept l-a inspirat şi pe Nikola Tesla să dezvolta primele sisteme electrice polifazate existente, pentru a realiza motoare mai simple şi mai eficiente. Avantajele sistemlor polifazate faţă de cele monofazate nu au fost descoperite decât mai târziu.</p>

<p>Dacă acest concept prezentat mai sus vă este încă confuz, putem folosi o analogie pentru explicarea lui mai pe înţeles. Să considerăm un set de beculeţe alimentate intermitent (ce „clipesc”), precum cele folosite la decoraţiile de crăciun. Unele seturi par să se „deplaseze” într-o anumită direcţie pe măsură ce becurile se aprind şi se sting într-o secvenţă bine stabilită. Altele doar se sting şi se aprind fără nicio mişcare aparentă. Cum se realizează această diferenţă între diferitele seturi de becuri? Cu ajutorul diferenţelor de fază!</p>

#+CAPTION: analogie pentru funcţionarea motorului de curent alternativ monofazat; secvenţa fazelor unui set de becuri
[[../poze/02190.png]]

<p>Când toate becurile „1” sunt aprinse, toate becurile „2” sunt stinse, şi invers. Cu acest tip de secvenţa, nu există nicio „mişcare” vizibilă a luminii becurilor. Putem la fel de bine să urmărim o deplasare de la stânga la dreapta, la fel de bine cum putem considera aceeiaşi mişcare ca realizânduse de la dreapta la stânga. Tehnic, secvenţelor de aprindere-stingere ale celor două becuri sunt defazate cu 180<sup>o</sup> între ele (exact opus). Acest lucru este analog motorului de curent alternativ monofazat, ce poate funcţiona la fel de bine în ambele direcţii, dar care nu poate porni singur datorită faptul că variaţia câmpului său magnetic nu are o direcţie precisă.</p>

<p>Să considerăm prin urmare un nou set de becuri, de această dată folosind trei becuri pentru secvenţa în loc de două, fiind şi acestea defazate între ele:</p>

#+CAPTION: analogie pentru funcţionarea motorului de curent alternativ trifazat; secvenţa fazelor unui set de becuri
[[../poze/02191.png]]

<p>Dacă secvenţa fazelor este 1-2-3, becurile par a se „deplasa” de la stânga la dreapta. Ne putem acum imagna acelaşi set de becuri, dar aranjate într-un cerc:</p>

#+CAPTION: analogie pentru funcţionarea motorului de curent alternativ trifazat; secvenţa fazelor unui set de becuri; rearanjarea acestora într-o combinaţie circulară
[[../poze/02192.png]]

<p>De data aceasta, becurile par a se deplasa în cerc, în direcţia acelor de ceasornic, deoarece sunt aranjate circular şi nu liniar, precum era cazul precedent. Desigur, aparenţa mişcării becurile se inversează dacă inversăm secvenţa de rotaţie a lor.</p>

<p>Mişcarea becurilor va fi fie în sensul acelor de ceasornic, fie în sens trigonometric, în funcţie de secvenţa fazelor. Această situaţie este analoagă unui motor de curent alternativ trifazat cu trei seturi de înfăşurări alimentate cu trei surse de tensiune de faze diferite:</p>

#+CAPTION: înfăşurările unui motor de curent alternativ trifazat
[[../poze/02193.png]]

<p class="sumar">Sumar:</p>
<ul>
	<li>Direcţia de rotaţie a motoarelor de curent alternativ sincrone şi de inducţie este dată de câmpurile magnetice alternative produse de înfăşurările staţionare </li>
	<li>Motoarele de curent alternativ monofazate au nevoie de ajutor pentru pornirea lor într-o anumită direcţie</li>
	<li>Prin introducerea unui defazaj mai mic de 180<sup>o</sup> între câmpurile magnetice ale unui motor de curent alternativ monofazat, se poate obţine o direcţie precisă a rotorului</li>
	<li>Motoarele de curent alternativ monofoazate folosesc adesea o înfăşurare auxiliară conectată în serie cu un condensator pentru crearea defazajului necesar</li>
	<li>Motoarele polifazate nu au nevoie de asemenea măsuri; direcţia lor de rotaţie este fixată de secvenţa de rotaţie a tensiunilor de la care sunt alimentate</li>
	<li>Inversarea fazelor unui motor de curent alternativ polifazat între ele, va duce la înversare secvenţei fazelor, şi implicit la direcţia de rotaţie a acestuia</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
