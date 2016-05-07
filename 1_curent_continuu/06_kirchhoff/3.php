<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuite divizoare de curent</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Circuite divizoare de curent</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Să analizăm un circuit paralel simplu, determinând valorile curenţilor prin fiecare ramură, prin fiecare rezistor în parte:</p>

<img src="../poze/00118.png" alt="circuit paralel"/>

<p>Cunoscând faptul că pe fiecare component în parte căderea de tensiune este aceeiaşi, putem completa tabelul tensiune/curent/rezistenţă asfel (mărimile sunt exprimate în volţi, amperi şi ohmi):</p>

<img src="../poze/10113.png" alt="tabel valori tensiune/curent/rezistenţa"/>

<p>Folosind legea lui Ohm (I=E/R) putem calcula curentul prin fiecare ramură:</p>

<img src="../poze/10114.png" alt="tabel valori tensiune/curent/rezistenţa"/>

<p>Ştiind că în circuitele paralele suma curenţilor de pe fiecare ramură reprezintă curentul total, putem completa tabelul cu valoarea totală a curentului prin circuit, 11 mA:</p>

<img src="../poze/10115.png" alt="tabel valori tensiune/curent/rezistenţa"/>

<p>Ultimul pas este calcularea rezistenţei totale, folosind legea lui Ohm (R=E/I), sau folosind formula rezistenţelor în paralel; răspunsul va fi acelaşi:</p>

<img src="../poze/10116.png" alt="tabel valori tensiune/curent/rezistenţa"/>

<p>Ar trebui să fie evident deja faptul că prin fiecare rezistor curentul depinde de rezistenţa acestuia, ştiind că valoarea tensiunii prin toţi rezistorii este aceeiaşi. Această relaţie nu este una direct proporţională, ci invers proporţională. De exemplu, curentul prin R<sub>1</sub> este dublu faţă de curentul prin R<sub>3</sub>, iar rezistenţa lui R<sub>3</sub> este de două ori cea a rezistorului R<sub>1</sub>.</p>

<p>Dacă ar fi să schimbăm sursa de tensiune din acest circuit, am descoperi că (supriză!) acest raport nu se modifică:</p>

<img src="../poze/10117.png" alt="tabel valori tensiune/curent/rezistenţa"/>

<p>Curentul prin R<sub>1</sub> este şi de data aceasta dublu curentului prin R<sub>3</sub>, cu toate că valoarea tensiunii de alimentare (tensiunea bateriei) s-a modificat. Proporţionalitatea curenţilor între diferite ramuri ale circuitului depinde de rezistenţă.</p>

<p>De asemenea, precum era şi în cazul divizorilor de tensiune, curenţii ramurilor reprezintă fracţiuni fixe din curentul total. Cu toate că tensiunea sursei a crescut de patru ori, raportul dintre curentul ramurii şi curentul total a rămas acelaşi:</p>

<img src="../poze/10118.png" alt="formula raport curent ramura, curent total"/>

<p>Din acest motiv, un circuit paralel este denumit adesea un <i>divizor de curent</i> pentru abilitatea sa de divizare a curentului total în fracţii. Cu ajutorul algebrei, putem determina o formulă pentru calculul curentului prin rezistorii paraleli, atunci când cunoaştem curentului total, rezistenţa totală şi rezistenţele individuale:</p>

<img src="../poze/10119.png" alt="formula divizorului de curent"/>

<p>Raportul dintre rezistenţa totală şi rezistenţa individuală este acelaşi ca şi între curentul individual (pe ramură) şi cel total. Această formulă poartă denumirea de <i>formula divizorului de curent</i>, şi este o metodă mai scurtă de determinare a curenţilor prin ramură într-un circuit paralel atunci când se cunoaşte curentul total.</p>

<p>Folosind circuitul paralel original ca şi exemplu, putem re-calcula curentul prin ramuri folosind această formulă, dacă începem prin a cunoaşte valoarea totală a curentului şi a rezistenţei:</p>

<img src="../poze/10120.png" alt="formula divizorului de curent, aplicare"/>

<p>Dacă facem o comparaţie între cele două formule divizoare, putem observa că sunt extrem de asemănătoare. Putem observa totuşi, că în cazul divizorului de tensiune, raportul este R<sub>n</sub> (rezistenţă individuală) la R<sub>total</sub>, iar în cazul divizorului de curent, raportul este chiar inversi R<sub>total</sub> la R<sub>n</sub>:</p>

<img src="../poze/10120.png" alt="formulele divizorului de tensiune şi curent"/>

<p>Este foarte uşor să încurcăm cele două ecuaţii prin inversarea raportului rezistenţelor. O modalitate simplă de memorare a formei corecte este să ţinem minte că ambele raporturi dintre cele două ecuaţii trebuie să fie un număr subunitar (între 0 şi 1). Până la urmă, acestea sunt ecuaţii <i>divizoare</i> nu <i>multiplicatoare</i>. Dacă raportul este inversat, vom obţine o valoare mai mare decât unu, prin urmare greşită. Cunoscând faptul că rezistenţa totală într-un circuit serie (divizor de tensiune) este tot timpul mai mare decât oricare dintre rezistenţe luate separat, putem să deducem că raportul corect este R<sub>n</sub>/R<sub>total</sub>. La fel, cunoscând faptul că rezistenţa totală într-un circuit paralel (divizor de curent) este tot timpul mai mică decât valoarea oricărei rezistenţe luate individual, putem să deducem raportul corect, R<sub>n</sub>/R<sub>total</sub>.</p>

<p>Circuitele divizoare de curent îşi găsesc aplicaţie (de exemplu) în circuitele de măsură, acolo unde o fracţie din curentul de măsurat trebuie să fie redirecţionat spre un dispozitiv sensibil de detecţie. Folosin formula rezistorului de curent, se poate afla valoarea exactă a rezistenţei folosită pe post de şunt pentru a „devia” cantitatea precisă de curent prin dispozitiv în orice situaţie.</p>

<img src="../poze/00119.png" alt="circuit divizor curent pentru aparat de măsură"/>

<p class="sumar">Sumar:</p>
<ul>
	<li>Circuitele paralele împart cantitatea totală de curent pe fiecare ramură în parte, proporţiile fiind strict dependente de valorile rezistenţelor: I<sub>n</sub> = I<sub>Total</sub> (R<sub>Total</sub> / R<sub>n</sub>)</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>