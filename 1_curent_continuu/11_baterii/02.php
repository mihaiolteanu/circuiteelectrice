<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Construcţia bateriilor</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Construcţia bateriilor electrice</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Cuvântul <i>baterie</i> înseamnă pur şi simplu un grup de componente similare aduse împreună. O <i>baterie electrică</i> este un set de pile voltaice realizate cu scopul generării unei valori a tensiunii şi curentului mai mari decât este posibil cu doar o singură pilă.</p>

<p>Simbolul unei pile constă din două linii paralele, una mai scurtă şi una mai lungă, conectate la capete cu câte un fir:</p>

#+CAPTION: simbolul electric al pilei
[[../poze/00260.png]]

<p>În aceeiaşi ordine de idei, simbolul bateriei constă din mai multe pile conectate în serie:</p>

#+CAPTION: simbolul electric al bateriei
[[../poze/00261.png]]

<p>După cum am mai spus, tensiunea produsă de un anumita tip de pilă depinde doar de compoziţia ei chimică, mărimea pilei este irelevantă în acest caz. Pentru obţinerea unei tensiuni mai mari prin urmare, trebuie să conectăm mai multe pile în serie. Tensiunea totală la bornele unei baterii este suma tuturor tensiunilor pilelor. O baterie tipică plumb-acid instalată pe un automobil generează o tensiune nominală de 12.0 V (6 x 2.0 V):</p>

#+CAPTION: conectarea pilelor în serie pentru generarea unei tensiuni mai mari
[[../poze/00262.png]]

<p>Ca şi convenţie, simbolul bateriei este desenat de obicei cu doar patru linii lungi/scurte, chiar dacă bateria reală este compusă din mai mult de patru pile. Totuşi, se poate ca în unele cazuri să întâlnim un simbol al bateriei cu foarte multe linii lungi/scurte; folosim acest simbol pentru reprezentarea unei baterii cu o tensiune neobişnuit de mare:</p>

#+CAPTION: simbolul bateriei cu o tensiune neobişnuit de mare
[[../poze/00263.png]]

<p>Deşi mărimea fizică a unei pile nu are nicio relevanţă cu privire la valoarea tensiunii generate, are totuşi importanţă atunci când luăm în considerarea rezistenţa acesteia şi prin urmare determină cantitatea maximă de curent ce o poate genera în circuit. Orice celulă voltaică posedă o anumită rezistenţa internă datorată electrozilor şi soluţiei electrolitice. Cu cât pila este mai mare, cu atât este mai mare suprafaţa de contact a electrozilor cu electrolitul, ceea ce se traduce printr-o rezistenţă internă mai <i>scăzută</i>.</p>

<p>Deşi în mod normal considerăm că bateria se comportă ca o sursă perfectă de tensiune (absolut constantă) într-un circuit, considerând curentul ce-o străbate ca depinzând strict de rezistenţa <i>externă</i> a circuitului de care este ataşată, acest lucru nu se întâmplă de fapt în realitate. Deoarece fiecare baterie sau pilă posedă o anumită rezistenţa internă, aceasta afectează valoarea curentului în oricare circuit:</p>

#+CAPTION: simbolul bateriei cu o tensiune neobişnuit de mare
[[../poze/00264.png]]

<p>Bateria reală de mai sus posedă o rezistenţă internă de 0.2 Ω; acest lucru afectează performanţa bateriei atunci când alimentează sarcina de 1 Ω. Bateria ideală din stânga nu are rezistenţă internă, şi din această cauză, aplicarea legii lui Ohm (I=E/R) rezultă într-o valoare a curentului de 10 A pentru o rezistenţă de 1 Ω şi 10 V tensiune de alimentare. Dar, bateria reală are o rezistenţă în plus ce se opune şi ea deplasării electronilor, curentul generat în circuit în acest caz este de numai 8.333 A pentru aceeiaşi valoare a sarcinii.</p>

<p>Bateria ideală în scurt circuit (rezistenţă de 0 Ω a sarcinii) generează un curent infinit. Pe de altă parte, bateria reală, poate genera doar 50 A (10 V/ 0.2 Ω) într-un scurt circuit de 0 Ω datorită rezistenţei interne. Ca să nu existe nicio confuzie, reacţiile chimice interne produc o tensiune tot de 10 volţi şi în cazul bateriei reale, dar o parte din aceasta cade pe rezistenţa internă a bateriei şi prin urmare căderea te tensiune pe sarcina circuitului nu este 100% din valoarea totală a tensiunii generate de baterie.</p>

<p>În mod normal bateriile sunt folosite în circuite în care rezistenţele lor interne sunt neglijabile în comparaţie cu rezistenţele sarcinilor (curentul de scurt circuit este mult mai mare decât curentul normal prin sarcină), comportamentul lor în acest caz este foarte apropiat de cel al bateriilor reale.</p>

<p>Dacă totuşi avem nevoie de o baterie cu rezistenţă internă mult mai mică (pentru curenţi mai mari) decât cea a unei singure pile, putem conecta mai multe pile în paralel:</p>

#+CAPTION: conectarea pilelor în paralel pentru o rezistenţă internă mai mică
[[../poze/00265.png]]

<p>Circuitul Thevenin echivalent al celor cinci pile în paralel este un circuit cu o singură sursă de tensiune şi un rezistor în serie. Acest circuit are aceeiaşi valoare a tensiunii (2.0 V) dar o rezistenţa mai mică (0.04Ω) decât oricare dintre rezistenţele individuale ale pilelor (0.2 Ω). </p>

<p class="sumar">Sumar:</p>
<ul>
	<li></li>
	<li></li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
