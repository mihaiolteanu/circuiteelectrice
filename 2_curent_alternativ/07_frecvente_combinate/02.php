<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Forme de undă dreptunghiulare</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Forme de undă dreptunghiulare</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Este cunoscut faptul că <i>orice</i> semnal periodic (ce se repetă în timp) ne-sinusoidal poate fi reprezentat ca şi combinaţie de semnale continue, sinusoidale şi/sau cosinusoidale (semnal sinusoidal defazat cu 90 de grade) de frecvenţe şi amplitudini variate. Acest lucru este perfect valabil indiferent cât de „ciudat” sau „contorsionat” ar părea semnalul analizat. Atâta timp cât este periodic, se poate reduce la tipul de combinaţii prezentate mai sus. Într-un caz particular, formele de undă dreptunghiulare sunt echivalente din punct de vedere matematic cu suma unui semnal sinusoidal fundamental, de o anumită frecvenţă, plus o serie infinită de multiplii impari ai frecvenţei fundamentale cu amplitudini descrescătoare.</p>

<p>Acest adevăr, perfect demonstrabil, al formelor de undă pare greu de crezut. Totuşi, dacă o formă de undă dreptunghiulară este de fapt o serie infinită de armonici sinusoidal adunate împreună, ar trebui să putem demonstra acest lucru însumând câteva armonici sinusoidale şi obţinuând o aproximare a semnalului dreptunghiular. Vom încerca să facem acest lucru în continuare.</p>

<p>Circuitul considerat constă în cinci surse de tensiune, de amplitidini şi frecvenţe diferite, conectate în serie. Armonicele considerate sunt: cea fundamentală (prima) la o frecvenţă de 50 Hz, armonica a 3-a (3*50 = 150 Hz), a 5-a, a 7-a şi a 9-a (9*50 = 450 Hz). Amplitudinile semnalelor nu sunt nici ele aleatoare, ci, constau din fracţia 4/π înmulţită cu fracţiile 1 (4/π*1 = 4/π V), 1/3, 1/5, 1/7 şi 1/9 (4/π*1/9 =4/9π V) , în funţie de armonica corespunzătoare.</p>

<p>Primul grafic reprezintă tocmai frecvenţa fundamentală, la 50 Hz şi amplitudine de 4/π, adică aproximativ 1.27 V:</p>

<p><img src="../poze/22013.png" alt="graficul formei de undă sinusoidale fundamentale, la 50 Hz"/></p>

<p>În următorul grafic, vom vedea ce se întâmplă cu acest semnal sinusoidal pur atunci când îl combinăm cu armonica a 3-a (150 Hz). Din acest moment, nu mai seamană cu un semnal sinusoidal pur (semnalul combinat este cel cu roşu):</p>

<p><img src="../poze/22014.png" alt="graficul formei de undă sinusoidale fundamentale, la 50 Hz plus armonica a 3-a"/></p>

<p>Panta formei de undă la intersecţia cu axa orizontală a timpului este mult mai mare acum, semn că forma de undă iniţială se apropie de cea dreptunghiulară. Să adăugăm în continuare şi armonica a 5-a pe grafic:</p>

<p><img src="../poze/22015.png" alt="graficul formei de undă sinusoidale fundamentale, la 50 Hz, plus armonicele a 3-a şi a 5-a"/></p>

<p>Armonica a 5-a (250 Hz) este reprezentată pe graficul de mai sus cu albastru, iar efectele combinate a celor două armonici cu fundamentale sunt reprezentate cu roşu.</p>

<p>Putem observa cum vârful formei de undă s-a aplatizat faţă de situaţia iniţială, iar panta a crescut şi mai mult faţă de cazul precedent. Adăugăm pe rând şi armonicele a 7-a, respectiv a 9-a:</p>

<p><img src="../poze/22016.png" alt="graficul formei de undă sinusoidale fundamentale, la 50 Hz, plus armonicele a 3-a, a 5-a şi a 7-a"/></p>

<p><img src="../poze/22017.png" alt="graficul formei de undă sinusoidale fundamentale, la 50 Hz, plus armonicele a 3-a, a 5-a, a 7-a şi a 9-a"/></p>

<p>Rezultatul însumării celor 5 armonici, cu amplitidinile de rigoare, reprezintă o aproximare destul de bună a unui semnal dreptunghiular. Scopul acestui exemplu a fost ilustrarea modului de construire a unui semnal dreptunghiular folosind semnale sinusoidale multiple la frecvenţe diferite pentru a demonstra faptul că un semnal pur dreptunghiular este într-adevăr echivalent cu o serie de semnale sinusoidale. Atunci când aplică un semnal dreptunghular într-un circuit ce conţine elemente reactive (condensatoare şi/sau bobine), acele componente se comportă ca şi cum am fi aplicat mai multe tensiune de frecvenţe diferite în acelaşi timp, ceea ce de fapt am şi făcut.</p>

<p>Faptul că semnalele ne-sinusoidale perioadice sunt echivalente cu o serie de semnale de curent cotinuu, sinusoidale şi/sau cosinusoidale este o consecinţă intrinsecă a modului de „funcţionare” al semnalelor: o proprietate fundamentală a tuturor formelor de undă, indiferent că sunt electrice sau mecanice. Procesul matematic de reducere a acestor forme de undă ne-sinusoildale ca sumă a componentelor sale la frecvenţe şi amplitudini diferite, poartă numele de <i>analiză Fourier</i>, fiind un proces destul de complicat. Analziza Fourier este în schimb uşor de făcut folosind un calculator şi un algoritm numit <i>transformata Fourier</i>, ceea ce vom încerca să facem în continuare.</p>

<p>Să luăm din nou exemplul semnalului dreptunghiular, simetric, cu amplitudinea de 1 V:</p>

<p><img src="../poze/22018.png" alt="semnal dreptunghiular simetric"/></p>

<p><img src="../poze/22020.png" alt="analiza spectrală a formei de undă dreptunghiulare"/></p>

<p>În graficul de mai sus, formele de undă sunt împărţite în funcţie de frecvenţele lor sinusoidale, până la armonica a 9-a. Amplitudinile armonicilor pare sunt aproximativ zero, iar a celor impare descresc de la 1 la 9 (prima este cea mai mare, ultima cea mai mică).</p>

<p>Un dispozitiv construit special pentru afişarea - nu şi controlul - amplitudinii fiecărei frecvenţe a unui semnal format din mai multe frecvenţe, se numeşte <i>analizor spectral</i>, iar procesul de analiză a unui semnal în acest mod, poartă numele de <i>analiză spectrală</i></p>

<p>Deşi poate părea ciudat, orice formă de undă periodică ne-sinusoidală este de fapt echivalentă cu suma unei serii de unde sinusoidale de frecvenţe şi amplitudini diferite. Formele dreptunghiulare sunt doar un singur caz, dar nu unicul.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Formele de undă dreptunghiulare sunt echivalente unei forme de undă sinusoidală de aceeiaşi frecvenţă (fundamentala) însumată cu o serie infinită de unde sinusoidale (armonici) de frecvenţă multiplu impar ale acesteia şi amplitudini descrescătoare</li>
	<p>Orice formă de undă periodică, ne-sinusoidală poate fi reprezentată ca serie de semnale sinusoidale de frecvenţe şi amplitudini diferite însumate împreună</p>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>