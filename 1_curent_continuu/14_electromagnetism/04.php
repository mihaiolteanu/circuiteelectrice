<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Permeabilitatea şi saturaţia</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Permeabilitatea şi saturaţia</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Nonliniaritatea permeabilităţii materialelor poate fi trasată pe un grafic pentru o mai bună înţelegere a ei. Plasăm intensitatea câmpului (H), egală cu tensiunea magnetomotoare (tmm) împărţită la lungimea materialului, pe axa orizontală. Pe axa verticală, plasăm densitatea fluxului (B) egală cu fluxul total împărţit la aria secţiunii materialului. Folosim aceste mărimi (H şi B) în loc de tensiunea magnetomotoare (tmm) şi fluxul total (Φ), pentru ca alura graficului să rămână independentă de dimensiunile fizice ale materialului de măsură.</p>

#+CAPTION: curbe de magnetizare pentru diferite materiale
[[../poze/00309.png]]

<p>Aceste curbe poartă denumirea de <i>curbe normale de magnetizare</i> sau <i>curbe B-H</i> pentru orice material. Putem observa de pe grafi că densitatea fluxului pentru oricare din cele trei materiale are o creştere neliniară (puternică la început, apoi din ce în ce mai scăzută) odată cu creşterea valorii intensităţii câmpului. Acest efect este cunoscut sub numele de <i>saturaţie</i>. Când aplicăm o forţă magnetică mică (H mic), doar câţiva atomi sunt aliniaţi după liniile câmpului, restul fiind uşor de aliniat dacă aplicăm o forţă adiţională. Totuşi, pe măsura creşterii fluxului magnetic prin aceeiaşi secţiune a materialului feromagnetic, tot mai puţini atomi sunt disponibil pentru aliniere de-al lungul liniilor de câmp pe măsură ce forţa aplicată creşte. De aceea, este nevoie de o forţă (H) din ce în ce mai mare pentru crearea unei densităţi a fluxului din ce în ce mai mică (B). Saturaţia este un fenoment întâlnit doar în cazul electromagneţilor cu miez de fier. Electromagneţii cu miez de aer nu se saturează, dar, pe de altă parte, nici nu produc valori aşa de mari ale fluxului magnetic pentru acelaşi număr de spire (bucle) şi aceeiaşi valoare a curentului.</p>

<p>Un alt fenomen al analizei curbelor de magnetizare este cel de <i>histerezis</i>. Ca şi termen general, histerezisul înseamnă o întârziere intrarea şi ieşirea unui sistem după o modificare de direcţie. Într-un sistem magnetic, acesta se caracterizează prin faptul că materialul feromagnetic tinde să rămână magnetizat după ce forţa magnetică aplicată este îndepărtată (remanenţă magnetică), dacă polaritatea forţei este inversată.</p>

<p>Să folosim acelaşi grafic, dar să extindem axele pentru a indicat atât valori pozitive cât şi negative. Alicăm întâi o forţă magnetică (curent prin spirele electromagnetului) crescătoare. Observăm creşterea densităţii fluxului după curba normală de magnetizare:</p>

#+CAPTION: curba de histerezis
[[../poze/00310.png]]

<p>Apoi, oprim curentul prin infăşurarea electromagnetului şi observăm ce se întâmplă cu fluxul; lăsăm prima curbă pe grafic.</p>

#+CAPTION: curba de histerezis
[[../poze/00311.png]]

<p>Datorită remanenţei materialului, vom avea un flux magnetic chiar şi fără existenţa forţei aplicate mai înainte (nu există curent prin înfăşurare). Electromagnetul se comportă în acest moment precum un magnet permanent. Următorul pas este să aplicăm un câmp magnetic cu aceeiaşi forţă dar în direcţia <i>opusă</i>.</p>

#+CAPTION: curba de histerezis
[[../poze/00312.png]]

<p>Densitatea fluxului magnet a atins acum un punct echivalent celui în care se afla în cazul aplicării unei intensităţi magnetice (H) pozitive, doar că se află în direcţie opusă, negativă. Să observăm comportamentul electromagnetului dacă întrerupem din nou curentul prin înfăşurare:</p>

#+CAPTION: curba de histerezis
[[../poze/00313.png]]

<p>Din nou, datorită remanenţei naturale a materialului, acesta va reţine un flux magnetic fără existenţa unui curent prin înfăşurare, doar că de data aceasta se află în direcţie opusă faţa de ultima întrerupere a curentului. Dacă re-introducem curentul prin electromagnet, vom vedea că densitatea fluxului magnetic atinge din nou punctul maxim iniţial (dreapta sus pe grafic):</p>

#+CAPTION: curba completă de histerezis
[[../poze/00314.png]]

<p>Această curbă în formă de „S” se numeşte <i>curba de histerezis</i> al materialului feromagnetic pentru o anumită valoare a intensităţii câmpului magnetic maxim, respectiv minim (+H şi -H). Existenţa acestui histerezis este de nedorit în cazul proiectării sistemelor ce ar trebui să producă o cantitate fixă de flux în funcţie de valoarea curentului, deoarece valoarea densităţi fluxului va depinde de curent <i>şi</i> de starea de magnetizaţie de dinainte. De asemenea, datorită nevoii de învingere a magnetizaţiei remanente din electromagnet, se va produce o risipă de energie atunci când se foloseşte curentul alternativ. Putem aproxima cantiatea de energie pierdută în funcţie de aria curbei de histerezis.</p>

<p>În alte cazuri, precum stocarea informaţiilor cu ajutorul materialelor magnetice (hard-disk-uri de calculator sau benzi audio şi video) curba de histerezis este un lucru de dorit. În aceste cazuri, este de dorit ca magnetizarea unui material magnetic (ferită) să fie de durată (remanenţă mare) pentru a-şi putea „aminti” ultima stare de magnetizare. O altă aplicaţie practică este filtrarea „zgomotului” electromagnetic de frecvenţă înaltă (supratensiuni de valori mari şi durate de timp scurte). Energia consumată pentru întâmpinarea histerezisului feritei atenuează forţă semnalului de zgomot. Curba de histerezis pentru ferită este destul de extremă:</p>

#+CAPTION: curba de histerezis pentru ferită
[[../poze/00317.png]]

<p class="sumar">Sumar:</p>
<ul>
	<li>Permeabilitatea unui materiel depinde de valoarea forţei fluxului magnetic prin acesta</li>
	<li>Relaţia specifică dintre forţă şi flux (intensitatea câmpului H, şi densitatea fluxului B) este trasată pe un grafic denumit <i>curba normală de magnetizare</i></li>
	<li>Este posibilă aplicarea asupra unui material feromagnetic a unui câmp magnetic atât de intens încât acesta atinge valoarea sa maximă a fluxului. Această condiţie este cunoscută sub numele de <i>saturaţie</i> magnetică</li>
	<li>Când <i>remaneţa</i> unui material feromagnetic interferează cu re-magnetizarea sa în direcţia opusă, condiţia este cunoscută sub numele de <i>histerezis</i></li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
