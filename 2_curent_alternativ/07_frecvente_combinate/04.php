<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Analiza spectrală</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Analiza spectrală</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Analiza Fourier computerizată, în special sub forma algoritmului <i>FFT</i> (Fast Fourier Transform), este un instrument excelent pentru înţelegerea formelor de undă şi a componentelor spectrale ale acestora.</p>

<p>Pentru început, luăm o formă de undă sinusoidală (aproape perfectă) la frecvenţa de 523.25 Hz, semnal produs cu ajutorul unei claviaturi electronice. Graficul formei de undă este de mai jos este luat de pe afişajul unui osciloscop şi prezintă amplitudinea tensiunii (axa verticală) cu timpul (axa orizontală):</p>

#+CAPTION: formă de undă sinusoidală afişată pe osciloscop; variaţia amplitudine-timp
[[../poze/02279.png]]

<p>Dacă observăm cu atenţie unde sinusoidală putem vedea că există anumite imperfecţii ale formei acestia. Din păcate, acesta este rezultatul echipamentului folosit pentru analiza undei. Asfel de caracteristici datorate echipamentelor de testare sunt cunoscute sub denumirea tehnică de <i>artefacte</i>: fenomene a cărei existenţă se datorează aparatelor de măsură folosite pentru derularea experimentului.</p>

<p>Dacă urmărim această tensiune alternativă pe un analizor spectral, rezultatul este puţin diferit, dar semnalul analizat este exact acelaşi:</p>

#+CAPTION: analiza spectrală a formei de undă sinusoidale
[[../poze/02280.png]]

<p>După cum se poate vedea, orizontala este marcată şi reprezintă „Frecvenţa”, adică domeniul măsurătorii. Vârful curbei reprezintă frecvenţa dominantă, considerată mai sus (523.25 Hz), iar înălţimea acestuia este amplitudinea semnalului pentrua această frecvenţă.</p>

<p>Dacă vom combina mai multe note muzicale pe aceeiaşi claviatură electronică şi măsurăm rezultatul, din nou cu un osciloscop, putem vedea foarte uşor faptul că semnalul creşte în complexitate. Semnalul final este de fapt o combinaţie de semnale sinusoidale de frecvenţe şi amplitudini diferite:</p>

#+CAPTION: formă de undă ne-sinusoidală afişată pe osciloscop; variaţia amplitudine-timp
[[../poze/02281.png]]

<p>Analiza spectrală este mult mai uşor de analizat, întrucât fiecărei note (sinusoidale) îi corespune pe grafic un vârf, în funcţie de frecvenţa sa:</p>

#+CAPTION: analiza spectrală a unei forme de undă ne-sinusoidale
[[../poze/02282.png]]

<p>Să luăm în continuare alte forme de undă muzicale, şi să le analizăm grafic:</p>

#+CAPTION: formă de undă ne-sinusoidală afişată pe osciloscop; variaţia amplitudine-timp
[[../poze/02283.png]]

#+CAPTION: analiza spectrală a unei forme de undă ne-sinusoidale
[[../poze/02284.png]]

<p>Primul vârf îl reprezintă fundamentala, iar celelalte vârfuri (2-6) sunt armonicele formei de undă ne-sinusoidale considerate mai sus.</p>

<p>Un alt exemplu:</p>

#+CAPTION: formă de undă ne-sinusoidală afişată pe osciloscop; variaţia amplitudine-timp
[[../poze/02285.png]]

#+CAPTION: analiza spectrală a unei forme de undă ne-sinusoidale
[[../poze/02286.png]]

<p>Să luăm din nou o formă de undă dreptunghiulară:</p>

#+CAPTION: formă de undă dreptunghiulară afişată pe osciloscop; variaţia amplitudine-timp
[[../poze/02287.png]]

#+CAPTION: analiza spectrală a unui semnal dreptunghiular
[[../poze/02288.png]]

<p>Conform analizei spectrale, această formă de undă <i>nu</i> conţine armonici pare, doar impare. Cu toate că afişajul osciloscopului nu permite vizualizarea frecvenţelor peste armonica a 6-a, armonicile impare continuă la infinit, cu o amplitudine din ce în ce mai mică.</p>

<p>Să considerăm şi un semnal triunghiular:</p>

#+CAPTION: formă de undă triunghiulară afişată pe osciloscop; variaţia amplitudine-timp
[[../poze/02289.png]]

#+CAPTION: analiza spectrală a unui semnal triunghiular
[[../poze/02290.png]]

<p>În acest caz, nu există practic armonici pare: singurele armonici sunt cele pare. Deşi putem vedea vârfuri mici pentru armonicele 2, 4 şi 6, acestea se datorează imperfecţiunilor formei de undă triunghiulare. O formă de undă triunghiulară perfectă, nu produce armonici pare, la fel ca în cazul formei de undă dreptunghiulare. Este evident însă că cele spectrul celor două nu este identic: amplitudinile armonicelor respective nu sunt identice.</p>

<p>Să analizăm şi semnalul dinte de fierăstrău:</p>

#+CAPTION: formă de undă dinte de fierăstrău afişată pe osciloscop; variaţia amplitudine-timp
[[../poze/02291.png]]

#+CAPTION: analiza spectrală a unui semnal dinte de fierăstrău
[[../poze/02292.png]]

<h3>Diferenţa dintre armonicile pare şi impare</h3>

<p>Distincţia dintre o formă de undă ce conţine armonici pare şi o formă de undă ce nu conţine aceste armonici se poate observa grafic, înaintea realizării analizei spectrale. Diferenţa constă în <i>simetria</i> faţă de axa orizontală a undei. O formă de undă simetrică faţă de axa orizontală nu va prezenta armonici pare:</p>

#+CAPTION: forme de undă ce nu conţin armonici pare (dreptunghiulară, triunghiulară şi pur sinusoidală) - simetrice faţă de axa orizontală
[[../poze/02293.png]]

<p>Formele de undă de mai sus, fiind toate simetrice faţă de orizontală, conţin doar armonici impare (forma de undă pur sinusoidală conţine doar armonica de gradul întâi, fundamentala).</p>

<p>Cele care nu sunt simetrice faţă de orzontală, conţin însă şi armonici pare:</p>

#+CAPTION: forme de undă asimetrice faţă de orizonatală - conţine forme de undă pare
[[../poze/02294.png]]

<p>Trebuie înţeles faptul că simetria se referă exclusiv la axa orizontală a undei, şi nu neapărat la axa orizontală a timpului. Să luăm de exemplu aceleaşi forme de undă, dar însumate cu o componentă de curent continuu, asfel încât graficul lor este deplasat în sus, sau în jos, faţă de axa timpului (în cazul precedent, componenta de curent continuu era zero, asfel încât cele două axe orizontale conincideau). Analiza armonică a acestor forme de undă nu va fi diferită faţă de cele de mai sus, singura diferenţă fiind componenta de curent continuu, care însă nu afectează în niciun fel conţinutul armonicilor (frecvenţa ei este zero):</p>

#+CAPTION: forme de undă ce nu conţin armonici pare (dreptunghiulară, triunghiulară şi pur sinusoidală plus o componentă de curent continuu) - simetrice faţă de axa lor orizontală
[[../poze/02296.png]]

<p>Acelaşi lucru este valabil şi pentru formele de undă nesimetrice faţă de orizontală, conţinutul armonic al acestor forme de undă nu va fi afectat de introducerea componentei de curent continuu:</p>

#+CAPTION: forme de undă asimetrice faţă de orizonatală - conţine forme de undă pare
[[../poze/02297.png]]

<p class="sumar">Sumar:</p>
<ul>
	<li>Formele de undă simetrice faţă de axa lor orizontală nu conţin armonici pare</li>
	<li>Componenta de curent continuu prezentă în semnal nu are niciun fel de impact asupra conţinutului armonic al formei de undă în cauză</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
