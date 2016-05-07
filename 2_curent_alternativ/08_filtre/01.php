<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Ce este un filtru</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Ce este un filtru</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>În unele cazuri este necesară folosirea unor circuite capabile să filtreze selectiv o anumită frecvenţă, sau un domeniu de frecvenţe, dintr-un circuit ce conţine o combinaţie de frecvenţe (cap. prec.). Un circuit construit special pentru realizarea acestei selecţii a frecvenţelor poartă numele de <i>circuit de filtrare</i>, sau mai simplu, <i>filtru</i>. O aplicaţie populară pentru circuitele de filtrare este în cazul sistemelor audio, unde este necesar ca anumite domenii de frecvenţe să fie amplificate sau înlăturate pentru obţinerea unui sunet de cea mai înaltă calitate şi eficienţă. Un exemplu este folosirea egalizatorului, ce permite selectarea de către utilizator a domeniilor frecvenţelor şi amplitudinile acestora în funcţie de preferinţele acestuia sau de acustica încăperii. Crossover-ele sunt folosite de asemenea pentru blocarea „accesului” anumitor frecvenţe la difuzoare. Un tweeter (difuzor de frecvenţă înaltă) este ineficient atunci când este folosit la reproducerea semnalelor de frecvenţe joase, asfel că este nevoie de conectarea unui crossover între tweeter şi terminalele de ieşire a sistemului audio pentru blocarea semnalelor de frecvenţă joasă; singurele semnale care trec de acest punct sunt doar semnalele de frecvenţă înaltă. Acest lucru duce la creşterea eficienţei sistelor audio, şi prin urmare la o performanţă crescută. Atât egalizatorul cât şi crossover-ul sunt exemple de filtre, concepute special pentru filtrarea anumitor frecvenţe nedorite.</p>

<p>O altă aplicaţie practică a circuitelor de filtrare constă în prelucrarea tensiunilor ne-sinusoidale în circuitele de putere. Unele componente electronice sunt sensibile în prezentă armonicilor surselor de alimentare, prin urmare, este nevoie de prelucrarea acestor forme de undă pentru funcţionarea normală a dispozitivelor electronice. Dacă o tensiune sinusoidală distorsionată se comportă precum o serie de armonici însumate cu frecvenţa fundamentalei, atunci ar trebui să fie posibilă construirea unui circuit de filtrare care să permită doar trecerea fundamentalei, blocând toate celelalte armonici.</p>

<p>În cele ce urmează, vom studia câteva circuite de filtrare elementare, folosind reprezentarea prin diagrame Bode (variaţia amplitudinii faţă de frecvenţă) pentru diferitele filtre considerate. Totuşi, aceste circuite pot fi analizate luând fiecare frecvenţă împarte şi aplicând teorema superpoziţiei, precum în cazul precedent.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Un filtru, este un circuit special de curent alternativ, utilizat pentru separarea anumitor frecvenţe într-un semnal cu frecvenţe multiple</li>
	<li>Amplicaţii ale filtrelor includ egalizatoarele şi reţelele de crossover</li>
	<li>O diagramă Bode este un grafic a cărei axă orizontală este frecvenţa, şi nu timpul</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>