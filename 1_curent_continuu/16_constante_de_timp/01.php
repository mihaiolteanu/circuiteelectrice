<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Răspunsul tranzitoriu al condensatorului</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Răspunsul tranzitoriu al condensatorului</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Condensatorii tind să se comporte asemenea bateriilor secundare datorită posibilităţii de stocare şi eliberare ulterioară a energiei sub formă de câmp electric. Un condensator complet descărcat generează o tensiune de zero volţi la bornele sale, iar un condensator încărcat menţine o valoare constantă a tensiunii la bornele sale, asemenea unei baterii. Atunci când aceştia sunt introduşi într-un circuit cu alte surse de tensiune, abosrb energie de la aceste surse, la fel precum o baterie secundară se încarcă atunci când este conectată la un generator. Un condensator complet descărcat, având cădere de tensiune zero la bornele sale, conectată la o sursă de tensiune, se va comporta iniţial precum un scurt circuit, „trăgând” un curent maxim de la sursă pe măsură ce se încarcă. Cu timpul, tensiunea la bornele sale creşte spre valoarea tensinii aplicate de sursă, iar curent prin condensator scade din această cauză. După ce condensatorul a atins valoarea maximă a tensiunii sursei, încetează să mai tragă curent de la această, şi se comportă practic precum un circuit deschis.</p>

<p><img src="../poze/00330.png" alt="circuit RC"/></p>

<p>Atunci când întrerupător este închis prima dată, tensiunea la bornele condensatorului (considerat complet descărcat) este de zero volţi; de aceea, în primă fază se comportă precum un scurt-circuit. Cu timpul, tensiunea condensatorului creşte până la valoarea tensiunii bateriei, moment în care condensatorul se comportă precum un circuit deschis. În această configuraţie, curentul prin circuit este determinat de diferenţe de tensiune dintre baterie şi condensator, împărţită la valoarea rezistenţei, 10 kΩ. Pe măsură ce tensiune condensatorului se apropie de cea a baterie, curentul prin circuit se apropie şi el de valoarea zero. Odată atinsă tensiunea bateriei de către condensator (15 V), curentul va fi exact zero.</p>

<p><img src="../poze/00331.png" alt="circuit RC - graficul variaţiei tensiunii condensatorului cu timpul"/></p>

<b><pre>
------------------------------------------------
| Timp     | Tensiune | Tensiune    | Curent   |
|(secunde) | baterie  | condensator |          |
|----------------------------------------------|
|    0     |   15 V   |     0 V     | 1500 uA  |
|----------------------------------------------|
|   0.5    |   15 V   |  5.902 V    | 909.8 uA |
|----------------------------------------------|
|    1     |   15 V   |  9.482 V    | 551.8 uA |
|----------------------------------------------|
|    2     |   15 V   |  12.970 V   | 203.0 uA |
|----------------------------------------------|
|    3     |   15 V   |  14.253 V   | 74.68 uA |
|----------------------------------------------|
|    4     |   15 V   |  14.725 V   | 27.47 uA |
|----------------------------------------------|
|    5     |   15 V   |  14.899 V   | 10.11 uA |
|----------------------------------------------|
|    6     |   15 V   |  14.963 V   | 3.718 uA |
|----------------------------------------------|
|    10    |   15 V   |  14.999 V   | 0.068 uA |
------------------------------------------------
</pre></b>

<p>În timp, tensiunea condensatorului se apropie de 15 volţi iar curentul se apropie de zero; acest grafic se numeşte <i>asimptotic</i>, adică, ambele variabile se apropie din ce în ce mai tare de valoarea lor finală cu timpul, dar niciuna nu atinge exact acea valoare. Din punct de vedere practic însă, putem presupune că valoarea tensiunii la bornele condensatorului atinge la un moment dat 15 volţi, iar curentul zero amperi.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Condensatoarele se comportă aproximativ asemenea bateriilor secundare în cazul aplicării unei tensiuni la bornele lor: reacţia iniţială este de a produce un curent foarte mare ce tinde spre zero cu timpul</li>
	<li>Un condensator complet descărcat se comportă iniţial asemenea unui scurt circuit atunci când la bornele sale se aplică o anumită tensiune. După ce se încarcă la valoarea tensiunii sursei de alimentare, se comportă precum un circuit deschis</li>
	<li>Într-un circuit RC (rezistor-condensator) alimentat, tensiunea condensatorului creşte de la zero la valoarea sursei de alimentare, pe când curentul trece de la valoarea maximă spre zero; ambele variabile au o variaţie puternică la început, şi se apropie tot mai greu de valorile lor finale odată cu trecerea timpului</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>