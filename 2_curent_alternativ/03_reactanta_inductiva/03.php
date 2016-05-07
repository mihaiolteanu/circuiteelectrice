<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuite rezistiv-inductive serie. Impedanţa</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Circuite rezistiv-inductive serie. Impedanţa</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>În secţiunile precedente, am văzut ce se întâmplă într-un circuit electric de curent alternativ simplu pur rezistiv, respectiv pur inductiv. Acum vom considera ambele componente legate în serie şi vom studia efectele lor. Luăm aşadar ca şi exemplu un curcuit rezistiv-inductiv, caz în care curentul este defazat în urma tensiunii cu un unghi cuprins între 0<sup>o</sup> şi 90<sup>o</sup></p>

<p><img src="../poze/02062.png" alt="circuit electric rezistiv-inductiv serie în curent alternativ "/></p>

<p>Rezistorul impune o rezistenţă de 5 Ω faţă de curent, indiferent de valoarea frecvenţei, iar bobina va oferi o reactanţă de 3.7699 Ω faţă de curentul alternativ la o valoare a frecvenţei de 60 Hz. Deoarece rezistenţa rezistorului este un număr real (5 Ω &#8736; 0<sup>o</sup>, sau 5 + j0 Ω), iar reactanţa bobinei este un număr imaginar (3.7699 Ω &#8736; 90<sup>o</sup>, sau 0 + j3.7699 Ω), efectul total (combinat) al celor două componente va crea o opoziţie faţă de curent egală cu suma complexă a celor două numere. Această opoziţie combinată va fi un vector. Pentru a putea exprima mai clar această opoziţie, avem nevoie de un nou termen pentru opoziţia faţă de curent pe lângă rezistenţă şi reactanţă. Acest termen poartă numele de <i>impedanţă</i>, iar simbolul lui este „Z”; unitatea de măsură este de asemenea ohm-ul, la fel ca şi a rezistenţei şi a reactanţei. În exemplul de mai sus, impedanţa totală a circuitului este:</p>

<p><img src="../poze/12020.png" alt="formule"/></p>

<p>Relaţia dintre impedanţă, curent şi tensiune este similară rezistenţei din legea lui Ohm:</p>

<p><img src="../poze/12021.png" alt="Leagea lui Ohm pentru circuite în curent alternativ"/></p>

<p>De fapt, această expresie este o formă a legii lui Ohm mult mai cuprinzătoarea (mai generală) decât cea considerată în curent continuu (E=IR), la fel precum impedanţă este o expresie mult mai cuprinzătoare a opoziţiei faţă de deplasarea electronilor decât rezistenţa. <i>Orice</i> rezistenţă şi orice reactanţă, separate sau în combinaţii serie/paralel, pot fi şi trebuie exprimate ca şi o singură impedanţă într-un circuit de curent alternativ.</p>

<p>Pentru aflarea valorii curentului în circuitul de mai sus, trebuie mai întâi să impunem o referinţa pentru unghiul de fază a sursei de tensiune, iar în mod normal, aceasta se presupune a fi zero.</p>

<p><img src="../poze/12022.png" alt="formule"/></p>

<p>La fel ca şi în cazul circuitelor pur inductive, curentul este defazat în urma tensiunii (sursei), cu toată că de data aceasta defazajul nu este atât de mare, doar 37.016<sup>o</sup>, faţă de 90<sup>o</sup> în cazul circuitului pur inductiv.</p>

<p><img src="../poze/02063.png" alt="formele de undă ale curentului şi tensiunii pentru un circuit electric rezistiv-inductiv serie în curent alternativ"/></p>

<p>Relaţiile de fază pentru rezistor şi bobină, luate individual, nu s-au modificat. Caderea de tensiune la bornele rezistorului şi curentul prin acesta sunt in fază (defazaj de 0<sup>o</sup>), iar defazajul dintre tensiune şi curent în cazul bobinei este de +90<sup>o</sup>. Putem verifica matematic acest lucru:</p>

<p><img src="../poze/12023.png" alt="formule"/></p>

<p>În formula de mai sus Z<sub>R</sub> semnifică impedanţa rezistivă, şi este acelaşi lucru cu rezistenţa. Tensiunea şi curentul prin rezistor sunt în fază, adică au acelaşi unghiu de fază.</p>

<p><img src="../poze/12024.png" alt="formule"/></p>

<p>Tensiunea la bornele bobinei are un unghiu de fază de 52.984<sup>o</sup> (faţă de unghiul de fază de referinţă, 0<sup>o</sup>), iar curentul prin bobina are un unghiu de fază de -37.016<sup>o</sup>, o diferenţă de exact 90<sup>o</sup> între cele două. Acest lucru ne spune că E şi I sunt defazate între ele tot cu 90<sup>o</sup> (doar în cazul bobinei).</p>

<p>Putem de asemenea să demonstrăm matematic că rezultatul sumei acestor valori complexe este tensiunea totală, aşa cum rezultă din aplicarea legii lui Kirchhoff:</p>

<p><img src="../poze/12025.png" alt="formule"/></p>

<h3>Aplicarea metodei tabelului</h3>

<p>Cu toate aceste valori rezultate, chiar şi pentru un circuit simplu precum este acesta, este mai uşor să aplicăm metoda tabelului. Tabelul va conţine valorile pentru tensiune (E), curent (I) şi impedanţă (Z) pentru fiecare component în parte. Nu vom insera valorile propriu-zise ale rezistenţei şi inductanţei în ohm sau Henry, ci forma lor complexă:</p>

<p><img src="../poze/12028.png" alt="tabel"/></p>
 
<p>Deşi nu este neapărat necesar, este folositor să trecem atât forma rectangulară (x + jy) cât şi pe cea polară (x &#8736;y) în fiecare tabel. Dacă folosim un calculator pentru a realiza automat aceste calcule complexe fără a mai fi nevoiţi să facem conversia între cele două forme, atunci această documentaţie suplimentară nu este deloc necesară. Totuşi, dacă suntem nevoiţi să efectuăm calculele „de mână”, atunci scrierea ambelor forme în tabel se va dovedi într-adevăr folositoare.</p>

<p>După ce am introdus în tabel toate datele cunoscute, putem trece la rezolvarea circuitului asemănător circuitelor de curent continuu: determinăm impedanţa totală din impedanţele individuale. Din moment ce acesta este un circuit serie, ştim că opoziţia faţă de curgerea electronilor (rezistenţă <i>sau</i> impedanţă) este aditivă, iar rezultatul îl reprezintă opoziţia totală:</p>

<p><img src="../poze/12029.png" alt="tabel"/></p>

<p>Acum, după ce tensiunea şi impedanţa totală ne sunt cunoscute, putem aplica legea lui Ohm (I=E/Z) pentru determinarea curentului total din circuit:</p>

<p><img src="../poze/12030.png" alt="tabel"/></p>

<p>La fel ca în cazul circuitelor de curent continuu, curentul total într-un circuit de curent alternativ <i>serie</i> este acelaşi prin oricare din componentele circuitului. Acest lucru este în continuare adevărat, deoarece într-un circuit serie există doar o singură cale pentru curgerea electronilor, prin urmare, rata lor de deplasare trebuie să fie uniformă în întreg circuitul. Prin urmare, putem trece valorile curentului total pentru fiecare component în parte (rezistor şi bobină) în tabel:</p>

<p><img src="../poze/12031.png" alt="tabel"/></p>

<p>Acum, tot ceea ce mai avem de făcut este să completăm căderea de tensiune pe rezistor şi pe bobină. Aflarea acestor valori se realizează folosind legea lui Ohm (E=IZ), aplicată pe fiecare coloană a tabelului:</p>

<p><img src="../poze/12032.png" alt="tabel"/></p>

<p>Tabelul este acum complet. De observat că am aplicat exact aceleaşi reguli ca şi în analiza circuitelor electrice în curent continuu, cu diferenţa ca toate valorile trebuie exprimate şi calculate sub formă complexă şi nu scalară precum era cazul în curent continuu. Atâta timp cât diferenţa de fază este reprezentată corect, nu există nicio diferenţă fundamentală între analiza unui circuit de curent alternativ faţă de unul în curent continuu.</p>

<h3>Indicaţia instrumentelor de măsură</h3>

<p>Să luăm acum în considerare relaţie dintre valorile calculate mai sus şi indicaţia tensiunii şi a curentului dată de instrumentele de măsură. Valorile din tabel care corespund cu valorile citite de pe un instrument de măsură sunt cele sub formă <i>polară</i>, nu rectangulară! Cu alte cuvinte, dacă am conecta un voltmetru la bornele rezistorului din circuit pentru aflarea căderii de tensiune, acesta va indica 7.9847 V (valoarea sub formă polară), nu 6.3756 V (valoarea reală sub formă rectangulară) şi nici 4.8071 V (valoarea imaginară sub formă rectangulară). Pentru a exprima acest lucru grafic, aparatele de măsură „indică” pur şi simplu lungimea vectorului (pentru tensiune sau curent). Notaţia rectangulară, deşi este mai uşor de folosit pentru operaţiile aritmetice de adunare şi scădere, este o formă de notaţia mai abstractă decât forma polară pentru măsurătorile reale. Dacă ar fi să folosim doar o singură notaţie, cea mai bună alegere ar fi cea polară, pentru că este singura ce are legătură directă cu măsurătorile reale.</p>

<h3>Diagrama impedanţei</h3>

<p>Impedanţa (Z) unui circuit serie R-L poate fi calculată cunoscând rezistenţă (R) şi reactanţa inductivă (X<sub>L</sub>). Din moment ce E=IR, E=IX<sub>L</sub> şi E=IZ, rezistenţa, reactanţa şi impedanţă sunt proporţionale cu tensiunea. Prin urmare, diagrama fazorială a tensiunii poate fi înlocuită cu o diagramă similară a impedanţei:</p>

<p><img src="../poze/02515.png" alt="diagrama fazorială a impedanţei într-un circuit R-L serie"/></p>

<h3>Exemplu</h3>

<p>Găsiţi impedanţă totală a circuitului format dintr-un rezistor de 40 Ω conectat în serie cu o bobină de 79.59 mH, la o frecvenţă a sursei de alimentare de 60 Hz. Răspuns: Z = 40 + j30 = 50&#8736;36.87<sup>o</sup>.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Impedanţa reprezintă valoarea totală a opoziţiei faţă de curentul electric şi este suma complexă (vector) a rezistenţei (reale) şi a reactanţei (imaginară). Simbolul este litera „Z” iar unitate sa de măsură este Ohm-ul, la fel ca a rezistenţei (R) şi a reactanţei (X)</li>
	<li>În analiza circuitelor, impedanţele (Z) serie se comportă precum rezistenţele (R) serie: se adună pentru a forma impedanţa totală. Ţineţi minte să efectuaţi toate calculele sub formă complexă, nu scalară! Z<sub>Total</sub> = Z<sub>1</sub> + Z<sub>2</sub> + . . . Z<sub>n</sub></li>
	<li>O impedanţă pur rezistivă va avea tot timpul un unghi de fază de exact 0<sup>o</sup> (Z<sub>R</sub> = R Ω &#8736; 0<sup>o</sup>)</li>
	<li>O impedanţă pur inductivă va avea tot timpul un unghi de fază de exact +90<sup>o</sup> (Z<sub>L</sub> = X<sub>L</sub> Ω &#8736; 90<sup>o</sup>)</li>
	<li>Legea lui Ohm pentru circuitele de curent alternativ: E=IZ; I=E/Z; Z=E/I</li>
	<li>Când într-un circuit avem şi rezistori şi bobine, impedanţă totală va avea un unghi de fază între 0<sup>o</sup> şi +90<sup>o</sup>. Curentul din circuit va avea un unghi de fază între 0<sup>o</sup> şi -90<sup>o</sup></li>
	<li>Circuitele serie în curent alternativ posedă aceleaşi proprietăţi fundamentale precum circuitele de curent continuu: curentul este acelaşi prin întreg circuitul, căderile de tensiune se adună pentru a forma tensiunea totală din circuit, iar impedanţele se adună pentru a forma impedanţa totală</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>