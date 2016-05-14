<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuite rezistiv-capacitive serie</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Circuite rezistiv-capacitive serie</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Până acum am văzut doar ce se întâmplă într-un circuit pur rezistiv, respectiv pur inductiv. Acum vom analiza cele două componente conectate împreună într-un circuit serie:</p>

#+CAPTION: circuit electric rezistiv-capacitiv serie
[[../poze/02074.png]]

<p>Rezistorul va produce o rezistenţă de 5 Ω în circuit faţă de curentul alternativ, indiferent de valoarea frecvenţei, iar condensatorul va produce o reactanţă de 26.5258 Ω faţă de curetul alternativ la o frecvenţă de 60 Hz. Deoarece rezistenţa rezistorului este un număr real (5 Ω &#8736; sau 5 + j0 &#8736; Ω), iar reactanţa condensatorului este un număr imaginar (26.5258 Ω &#8736;-90<sup>o</sup> sau 0 - j26.5258 Ω), efectul celor două componente luate împreună (combinate) va fi o opoziţie faţă de curent egală cu suma complexă a celor două numere. Termenul folosit pentru desemnarea acestei opoziţii faţă de curent se numeşte <i>impedanţă</i>, simbolizată prin Z şi exprimată în Ohm, la fel ca rezistenţă şi reactanţa. În circuitul de sus, impedanţă totală a circuitului este:</p>

#+CAPTION: formule
[[../poze/12045.png]]

<p>Relaţia dintre impedanţă, curent şi tensiune este similară rezistenţei din legea lui Ohm:</p>

#+CAPTION: legea lui Ohm în circuitele de curent alternativ
[[../poze/12021.png]]

<p>De fapt, această expresie este o formă a legii lui Ohm mult mai cuprinzătoarea (mai generală) decât cea considerată în curent continuu (E=IR), la fel precum impedanţă este o expresie mult mai cuprinzătoare a opoziţiei faţă de deplasarea electronilor decât rezistenţa. Orice rezistenţă şi orice reactanţă, separate sau în combinaţii serie/paralel, pot fi şi trebuie exprimate ca şi o singură impedanţă într-un circuit de curent alternativ.</p>

<p>Pentru a calcula curentul din circuitul de mai sus, trebuie să luăm prima data o referinţă a unghiului de fază pentru sursa de tensiune; în mod normal aceasta se consideră zero.</p>

#+CAPTION: formule
[[../poze/12046.png]]

<p>Ca şi în cazul circuitului pur capacitiv, curentul este defazat înaintea tensiunii (sursei), cu toate că de data aceasta diferenţa este de 79.325<sup>o</sup>, nu 90<sup>o</sup>.</p>

#+CAPTION: defazajul dintre curent şi tensiune într-un circuit electric rezistiv-capacitiv - formele de undă
[[../poze/02075.png]]

<p>Să folosim din nou metoda tabelului pentru analiza circuitului de mai sus. Primul pas este introducerea tuturor cantităţilor cunoscute în tabel:</p>

#+CAPTION: tabel
[[../poze/12047.png]]

<p>Într-un circuit serie, curentul total este acelaşi prin toate componentele circuitului; prin urmare, valorile curentului din coloana „Total” pot fi trecute şi în celelalte două coloane, a rezistorului şi a condensatorului:</p>

#+CAPTION: tabel
[[../poze/12048.png]]

<p>Continuând analiza, putem aplica legea lui Ohm (E=IR) vertical, pentru determniarea căderilor de tensiune pe rezistor şi condensator:</p>

#+CAPTION: tabel
[[../poze/12049.png]]

<p>Observaţi faptul că tensiune şi curentul prin rezistor au acelaşi unghi de fază, ceea ce înseamnă că E şi I sunt în fază în cazul rezistorului. Tensiunea la bornele condensatorului are un unghi de fază de -10.675<sup>o</sup>, cu exact 90<sup>o</sup> mai puţin decât unghiul de fază al curentului din circuit. Acest lucru ne spune că tensiunea şi curentul condensatorului sunt defazate cu exact 90<sup>o</sup> între ele (în cazul condensatorului!).</p>

<h3>Indicaţia instrumentelor de măsură</h3>

<p>Din nou, trebuie să insistăm pe faptul că valorile calculate ce corespund cu măsurătorile reale luate de aparatele de măsură, sunt cele sub formă <i>polară</i>, nu rectangulară! De exemplu, dacă am construi fizic acest circuit rezistiv-capacitiv (R-C) şi am măsura tensiunea la bornele rezistorului, voltmetrul ar indica 1.8523 V, nu 343.11 mV (termenul real rectangular) şi nici 1.8203 V (termenul imaginar rectangular). Instrumentele reale de măsură conectate la circuite reale indică lungimea vectorului (magnitudinea). Notaţia rectangulară, deşi este mai uşor de folosit pentru operaţiile aritmetice de adunare şi scădere, este o formă de notaţia mai abstractă decât forma polară pentru măsurătorile reale. Dacă ar fi să folosim doar o singură notaţie, cea mai bună alegere ar fi cea polară, pentru că este singura ce are legătură directă cu măsurătorile reale.</p>

<h3>Diagrama impedanţei</h3>

<p>Impedanţa (Z) unui circuit serie R-L poate fi calculată cunoscând rezistenţă (R) şi reactanţa inductivă (XL). Din moment ce E=IR, E=IXL şi E=IZ, rezistenţa, reactanţa şi impedanţă sunt proporţionale cu tensiunea. Prin urmare, diagrama fazorială a tensiunii poate fi înlocuită cu o diagramă similară a impedanţei:</p>

#+CAPTION: circuit electric rezitiv-capacitiv serie; diagrama fazorială a tensiunii şi a impedanţei
[[../poze/02516.png]]

<h3>Exemplu</h3>

<p>Găsiţi impedanţă unui circuit serie format dintr-un rezistor de 40 Ω şi un condensator de 88.42 mF la frecvenţa de 60 Hz. Răspuns: Z = 40 - j30 = 50&#8736;36.87<sup>o</sup>.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Impedanţa este cantitatea totală a opoziţiei faţă de curentul electric şi este suma complexă (vector) dintre rezistenţă (reală) şi ractanţa (imaginară)</li>
	<li>În circuitele serie, impedanţele (Z) se comportă precum rezistenţele (R) serie: acestea se adună pentru a forma impedanţa totală. Atenţie, efectuaţi toate calculele sub formă complexă, nu scalară! Z<sub>Total</sub> = Z<sub>1</sub> + Z<sub>2</sub> + . . . Z<sub>n</sub></li>
	<li>Ţineţi minte că impedanţele se însumează tot timpul atunci când sunt conectate în serie, indiferent de tipul componentelor, rezistive, inductive sau capacitive; din punct de vedere matematic, toate sunt echivalente</li>
	<li>O impedanţă pur rezistivă va avea tot timpul un unghi de fază de exact 0<sup>o</sup> (Z<sub>R</sub> = R Ω &#8736; 0<sup>o</sup>)</li>
	<li>O impedanţă pur capacitivă va avea tot timpul un unghi de fază de exact -90<sup>o</sup> (Z<sub>C</sub> = X<sub>C</sub> Ω &#8736; -90<sup>o</sup>)</li>
	<li>Legea lui Ohm pentru circuitele de curent alternativ: E = IZ ; I = E/Z ; Z = E/I</li>
	<li>Atunci când rezistorii şi condensatoarele sunt conectate împreună în circuite, impedanţa totală a circuitului va avea un unghi între 0<sup>o</sup> şi -90<sup>o</sup></li>
	<li>Circuitele serie de curent alternativ prezintă aceleaşi proprietăţi fundamentale ca şi în cazul circuitelor de curent continuu: curentul este acelaşi prin tot circuitul (prin toate componentele), căderile de tensiune se însumează, iar suma lor este tensiunea totală iar impedanţele se adună rezultând impedanţa totală</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
