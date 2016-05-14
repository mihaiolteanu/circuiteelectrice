<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>TRIAC-ul</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>6. TRIAC-ul</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>TRIAC-ul nu este altceva decât două tiristoare în paralel aşezate spate în spate.</p>

#+CAPTION: triacul; schema echivalentă şi simbol
[[../poze/03223.png]]

<p>Deoarece tiristoarele individuale sunt mult mai flexibile într-un sistem de control, acestea sunt adesea întâlnite în aplicaţiile cu motoare electrice. TRIAC-ele sunt de obicei folosite în aplicaţii mai simple, de putere mică, precum dimmer-ele. Un astfel de circuit simplu, pentru controlul unei lămpi, este prezentat în figura alăturată. De observat că acest circuit include şi condensatorul de defazare necesar pentru aprinderea dispozitivului dincolo de valoarea de vârf a formei de undă de c.a.</p>

#+CAPTION: circuit dimmer cu lampă folosind triac
[[../poze/03224.png]]

<p>Triacele sunt recunoscute pentru aprinderea lor nesimetrucă. Acest lucru înseamnă că tensiunea de străpungere este diferită pentru fiecare din cele două polarităţi a formei de undă. De obicei, acest lucru nu este de dorit, datorită faptului că rezultatul aprinderii nesimetrice a dispozitivului înseamnă o formă de undă cu un conţinut armonic mai mare. Formele de undă simetrice faţă de axa orizontală sunt compuse doar din armonici impare. Formele de undă nesimetrice însă, conţin armonici pare, dar care pot fi, în funcţie de situaţie, acompaniate şi de armonici impare.</p>

<p>În interesul reducerii conţinutului aromoni al sistemelor de putere, cu cât numărul armonicilor este mai scăzut şi mai puţin diversificat, cu atât mai bine - un motiv în plus pentru care tiristoarele sunt preferate triacelor în sistemele de control complexe de putere mare. O modalitate de aducere a formei de undă de curent a triacului la o formă mai simetrică este utilizarea unui dispozitiv extern pentru declanşarea impulsurilor pe poartă. Acest lucru se poate realiza cu ajutorul unui diac.</p>

#+CAPTION: circuit dimmer cu lampă folosind triac; conectarea unui diac în serie cu poarta triacului
[[../poze/03225.png]]

<p>Tensiunile de străpungere ale diacelor tind să fie mult mai simetrice (aceeiaşi valoare pentru ambele polarităţi ale formei de undă) faţă de tensiunile triacelor. Din moment ce diacul împiedică orice curent pe poarta triacului până în momentul în care tensiunea de străpungere a atins un anumit nivel precus, repetabil în ambele direcţii, punctul de aprindere al triacului de la o semi-alternanţă la alta tinde să fie mult mai consistent, simetria formei de undă rezultată fiind mult îmbunătăţită faţă de axa orizontală.</p>

<p>Practic, toate caracteristicile tiristoarelor se aplică şi triacelor, cu excepţia faptului că triacele sunt dispozitive bidirecţionale (pot conduce curenţi în ambele direcţii). Nu este necesar prin urmare să facem alte observaţii cu privire la acest dispozitiv, cu excepţia modului de numerotare al terminalelor.</p>

<p>Din circuitul echivalent prezentat mai sus, s-ar putea înţelege faptul că terminalii 1 şi 2 se pot interschimba între ei. Acest lucru nu este însă corect! Cu toate că ne putem imagina triacul ca fiind compus din două tiristoare, adevărul este că acest dispozitiv este construit dintr-o singură bucată de material semiconductor, cu straturi şi dopaje corespunzătoare. Caracteristicele actuale de operare pot să difere uşor faţă de modelul echivalent format din două tiristoare.</p>

<p>Acest lucru poate fi scos în evidenţă considerând două circuite simple, unul funcţional, celălalt nefuncţional. Circuitele considerate sunt variante uşor modificate ale circuitului cu lampă prezentat mai sus, fără a lua în considerare condensatorul de defazaj. Cu toate că circuitul rezultat nu posedă acelaşi grad de control precum versiunea mai complexă (cu condensator şi diac), acesta este funcţional.</p>

#+CAPTION: circuit dimmer cu lampă folosind triac
[[../poze/03226.png]]

<p>Să presupunem acum că inversăm terminalii principali ai triacului între ei. Conform circuitului echivalent cu două tiristoare de mai sus, această modificare nu ar trebui să afecteze în niciun fel funcţionarea circuitului.</p>

#+CAPTION: circuit dimmer cu lampă folosind triac; inversarea triacului
[[../poze/03227.png]]

<p>Presupunerea noastră nu este însă corectă! Dacă ar fi să construim acest circuit, vom observa că el nu funcţionează. Puterea pe sarcină va fi zero, deoarece triacul nu va intra niciodată în starea de conducţie, indiferent ed valoarea rezistenţei de comandă. Aprinderea corectă a triacului se realizează asigurându-ne că poartă primeşte curentul de comandă de la terminalul principal A<sub>2</sub>. Identificarea terminalilor A<sub>1</sub> şi A<sub>2</sub> se face folosind catalogul producătorului.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Comportamentul triacului este asemănător unui număr de două tiristoare conectate în paralel şi în direcţii diferite</li>
	<li>Triacele se folosesc adesea în circuitele simple şi de puterea joasă</li>
	<li>Terminalii A<sub>1</sub> şi A<sub>2</sub> nu se pot interschimba! Pentru o aprindere corectă a triacului, curentul pe poartă trebuie să treacă prin terminalul A<sub>2</sub></li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
