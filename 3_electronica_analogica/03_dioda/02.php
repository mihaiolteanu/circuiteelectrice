<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Verificarea diodei cu ajutorul ohmmetrului</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Verificarea diodei cu ajutorul ohmmetrului</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Din moment ce o diodă nu este nimic altceva decât o valvă uni-direcţională de curent, putem verifica acest lucru folosind un ohmmetru alimentat în curent continuu (cu baterie). La conectarea diodei într-o anumită direcţie, aparatul de măsură ar trebui să indice o rezistenţă foarte mică (figura de mai jos (a)), iar la conectarea inversă, aparatul ar trebui să indice o rezistenţă foarte mare (figura de mai jos (b)). („OL” reprezintă o valoarea prea mare ce nu poate fi indicată de aparatul de măsură (din engl. Over-Limit); în acest caz, putem considera rezistenţa ca fiind infinită).</p>

#+CAPTION: determinarea polarităţii diodei cu ajutorul aparatului de măsură: (a) rezistenţa mică între anod şi catod indică polarizarea directă a diodei; (b) inversarea sondelor aparatului de măsură duce la polarizarea inversă a diodei, indicată de rezistenţa foarte mare (infinită)
[[../poze/03254.png]]

<p>Desigur, determinarea polarităţii diodei (care terminal este anodul şi care catodul) necesită ca în primul rând să cunoaştem care din sondele aparatului de măsură este cea pozitivă (+) şi care sondă este cea negativă (-), atunci când aparatul este trecut pe funcţia „Ω”. La majoritatea multimetrelor digitale, sonda roşie reprezintă terminalul pozitiv iar sonda neagră reprezintă terminalul negativ, atunci când aparatul setat pe măsurarea rezistenţelor. Totuşi, acest lucru nu este valabil pentru toate multimetrele, existând posibilitatea ca sonda neagră să fie pozitivă (+) şi cea roşie negativă (-).</p>

<p>Problema folosirii unui ohmmetru pentru verificarea unei diode, este că indicaţia afişajului are doar valoare calitativă, nu şi cantitativă. Cu alte cuvinte, un ohmmetru poate doar să ne spune dacă dioda funcţionează (dacă aceasta conduce curent), dar valoarea rezistenţei obţinute din măsurătoare nu ne este de niciun folos. Dacă un ohmmetru indică o valoare de 1.73 Ω la polarizarea directă, această valoarea nu este folositoare unui tehnician sau celui care proiectează circuitul. Această valoare nu reprezintă nici căderea de tensiune la polarizarea directă şi nici rezistenţa materialului semiconductor din diodă, ci este o mărime dependentă de ambele cantităţi şi variază substanţial în funcţie de ohmmetrul folosit pentru efectuarea citirii.</p>

<p>Din acest motiv, unele multimetre digitale sunt prevăzute cu o funcţie specială de „verificare a diodei” ce indică tensiunea reală de polarizare directă a diodei, în volţi, în loc de o rezistenţă în ohmi. Principiul de funcţionare a acestor aparate de măsură constă în forţarea unui curent mic prin diodă şi măsurarea căderii de tensiune dintre cele două borne ale diodei.</p>

#+CAPTION: determinarea tensiunii de polarizare directă a diodei folosind un multimetru digital echipat cu funcţia de verificare a diodelor
[[../poze/03256.png]]

<p>Totuşi, valoarea tensiunii de polarizare directă indicată de aceste aparate va fi de obicei mai mică decât valoarea „normală” de 0.7 V, deoarece curent furnizat de aparatul de măsură prin diodă este foarte mic. Dacă nu avem la dispoziţie un multimetru cu funcţie de verificare a diodelor, sau dacă vrem să măsurăm tensiuena de polarizarea directă a diodei folosind un curent mai mare, putem realiza un circuit electric precum în figura de mai jos, folosind o baterie, un rezistor şi un voltmetru:</p>

#+CAPTION: măsurarea tensiunii de polarizare directă a diodei folosind un aparat de măsură (voltmetru), o baterie şi un rezistor: (a) schema electrică; (b) schema practică
[[../poze/03257.png]]

<p class="sumar">Sumar:</p>
<ul>
	<li>Putem folosi un ohmmetru pentru verificarea calitativă a diodei. Rezistenţa măsurată într-o anumită direcţie ar trebui să fie foarte mică şi foarte mare când inversăm direcţia de măsurare. Atenţia la polaritatea sondelor aparatului de măsură!</li>
	<li>Unele multimetre digitale oferă o funcţie de „verificare a diodei” ce indică tensiunea de polarizare directă a diodei atunci când aceasta conduce curent. Asfel de aparate de măsură indică de obicei o tensiune de polarizare direcţa mai mică decât valoarea normală a unei diode, datorită curentului foarte mic generat de aparat prin diodă în timpul măsurătorii</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
