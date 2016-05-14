<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Dioda</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>6. Dioda</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>După cum am precizat şi în secţiunea precedentă, dioda este realizată prin introducerea de impurităţi de tip N şi P în acelaşi cristal semiconductor. Simbolul schematic al diodei este prezentat în figura de mai jos (b), şi corespune semiconductorului dopat de la (a). Dioda este un dispozitiv <i>unidirecţional</i> (vezi joncţiunea PN). Deplasarea electronilor se poate realiza doar într-o singură direcţie, învers faţă de direcţia săgeţii, atunci când dioda (joncţiunea PN) este polarizată direct. Catodul, din reprezentarea diodei, reprezintă semiconductorului de tip N, iar anodul corespune materialului dopat de tip P.</p>

#+CAPTION: (a) joncţiunea PN; simbolul diodei; caracteristica curent-tensiune a diodei
[[../poze/03410.png]]

<p>Dacă dioda este polarizată direct, curentul creşte foarte puţin pe măsură ce tensiune creşte de la 0 V. În cazul în care materialul semiconductor din care este confecţionată dioda este siliciu, curentul începe să crească doar după ce tensiunea atinge valoarea de 0.6 V (figura de mai sus (c)). Dacă tensiunea creşte peste valoarea de 0.6 V, valoarea curentului creşte foarte repede. O tensiune peste 0.7 V poate foarte uşor să ducă la distrugerea diodei. Această tensiune de „deschidere” a diodei în jurul valorii de 0.6 V, poartă numele de <i>tensiune de polarizare directă</i> a diodei. Sub această valoare, dioda este „inchisă”, şi nu există curent pe la bornele acesteia. Deşi pentru siliciu tensiunea de polarizare directă este de 0.6-0.7 V, pentru germaniu aceasta este de 0. V, iar pentru LED-uri de câţiva volţi. Curentul ce străbate dioda la polarizarea directă poartă numele de <i>curent direct</i>, iar acesta poate lua valori curpinse între câţiva mA, până la sute sau mii de amperi pentru diodele de putere.</p>

<p>Dacă dioda este polarizată invers, <i>curentul invers</i> va avea o valoarea foarte mică, care în condiţiile cele mai extreme poate ajunge la un maxim de 1 µA (figura de mai sus (c), stânga). Valoarea acestui curent nu creşte semnificativ odată cu creşterea <i>tensiunii de polarizare inversă</i>, decât la atingerea punctului de <i>străpungere</i>. Când punctul de străpungere este atins, curentul prin diodă creşte la o valoare atât de mare, încât poate duce la distrugerea diodei dacă nu există un rezistor serie pentru limitarea curentului prin diodă. De obicei se alege o diodă a cărei <i>tensiune de străpungere</i> este mai mare decât valoarea tensiunilor aplicate la bornele sale. Diodele din siliciu au de obicei tensiuni de străpungere de la 50, 100, 200, 400, 800 V sau chiar mai mare. </p>

<p>Am menţionat mai sus că există un <i>curent de dispersie</i> de sub un µA, pentru diodele de siliciu, la polarizarea inversă. Explicaţia constă în faptul că energia termică produce câteva perechi de electroni-găuri, ce duc la apariţia unui curent de dispersie până la recombinaţie. Practic, acest curent previzibil este doar o parte a curentului de dispersie total. O mare parte a acestui curent se datorează conducţiei de suprafaţă datorită impurităţilor de la suprafaţa conductorului. Ambele tipuri de curenţi de dispersie cresc odată cu creşterea temperaturii. În cazul germaniului, curentul de dispersie este de câteva ori mai mare decât în cazul siliciului.</p>

<h3>Dioda cu joncţiune</h3>

<p>Deşi la început, cea mai folosită diodă a fost diodă cu contact punctiform (figura de mai jos, (a)), majoritatea diodelor folosite astăzi sunt diode cu joncţiune (figura de mai jos (b)). Deşi joncţiunea PN din figură este puţin mai complexă decât o joncţiune normală, aceasta este tot o joncţiune PN. Pornind de la catod, N<sup>+</sup> indică faptul că această regiune este dopată puternic, şi nu are legătură cu polaritatea. Acest lucru reduce rezistenţa serie a diodei. Regiunea N<sup>-</sup> din nou, nu are nicio legătură cu polaritatea, ci indică faptul că această regiune este mai puţin dopată, ceea ce duce la o diodă a cărei <i>tensiune de străpungere inversă</i> este mult mai mare, lucru important pentru diodele de putere folosite în rederesare.</p>

#+CAPTION: (a) dioda cu contact punctiform; (b) dioda cu joncţiune PN; (c) simbolul diodei; (d) modul de împachetare al unei diode
[[../poze/03301.png]]

<p>Diodele de puteri mai mici, chiar şi redresoarele de putere de tensiuni mai mic, vor avea pierderi de polarizare directă mult mai mici datorită dopajului mai puternic. Cel mai mare nivel de dopaj este folosit pentru diodele Zener, proiectate pentru tensiune de străpungeri mici. Totuşi, un dopaj puternic duce la creşterea curentului invers de disperise. Regiunea P<sup>+</sup> de la anod, reprezintă un material semiconductor, puternic dopat, de tip P, o foarte bună strategie pentru realizarea contactului. Diodele de joncţine mici, încapsulate în sticlă, pot conduce curenţi de ordinul zecilor sau sutelor de mA. Diodele de putere redresoare, încapsulate în plastic sau ceramică, pot conduce curenţi de ordinul miilor de amperi.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
