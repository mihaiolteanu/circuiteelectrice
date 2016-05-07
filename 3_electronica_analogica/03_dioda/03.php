<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Parametrii diodei</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Parametrii diodei</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Pe lângă tensiunea de polarizare directă (V<sub>f</sub>) şi tensiunea de străpungere (V<sub>s</sub>), mai există mulţi alţi parametrii importanţi ai diodelor pentru proiectarea circuitelor şi alegerea componentelor. Producătorii de dispozitive semiconductoare oferă aceste specificaţii ale produselor în publicaţii denumite <i>cataloage</i>. Cataloagele producătorilor de componente pot fi găsite în cărţi de specialitate sau pe interne.</p>

<p>Pentru simplicarea explicaţiilor, am folosit în unele situaţii „tensiunea directă” în loc de „tensiunea de polarizare directă” sau „curentul direct” în loc de „curentul de polarizare direct”. Cele două exprimări sunt însă echivalente.</p>

<p>Principalele caracteristici ale diodelor, trecute în cataloage, sunt următoarele:</p>

<p><b>V<sub>RRM</sub> - tensiunea inversă repetitivă maximă</b>, este tensiunea maximă inversă la care poate rezista dioda, atunci când această tensiune este atinsă în mod repetat. Ideal, această valoare ar fi infinită.</p>

<p><b>V<sub>R</sub> sau V<sub>DC</sub> - tensiunea maximă inversă de curent continuu</b>, este valoarea maximă a tensiunii la care dioda poate funcţiona neîntrerupt, fără distrugerea acesteia. Ideal, această valoare a fi infinită.</p>

<p><b>V<sub>F</sub> - tensiunea (de polarizare) directă maximă</b>, de obicei este specificată împreună cu valoarea curentului direct. Ideal, această valoare ar fi zero: ideal, dioda nu ar prezenta niciun fel de opoziţie în faţa deplasării electronilor. În realitate, tensiunea directă este descrisă de ecuaţia diodei.</p>

<p><b>I<sub>F(AV)</sub> - valoarea maximă (medie) a curentului direct</b>, valoarea maximă medie a curentului pe care bobina o poate suportă la polarizarea directă. Această limitarea este practic o limitare termincă: câtă căldură poate „suporta” joncţiunea P-N, având în vedere că puterea disipată reprezintă produsul dintre curent şi tensiune, iar tensiunea de polarizare directă depinde atât de curent cât şi de temperatura joncţiunii. Ideal, această valoare ar fi infinită.</p>

<p><b>I<sub>FSM</sub> sau i<sub>f(vârf)</sub> - curentul de polarizare directă maxim</b>, reprezintă curentul de vârf maxim pe care dioda îl poate conduce la polarizare directă, fără ca aceast curent să ducă la distrugerea diodei. Din nou, această valoare este limitată de capacitatea termică a joncţiunii diodei, şi este de obicei mult mai mare decât valoarea curentului mediu datorită inerţiei termice. Ideal, această valoare ar fi infinită.</p>

<p><b>P<sub>D</sub> - puterea maximă disipată totală</b>, reprezintă valoarea puterii (în watt) pe care dioda o poate disipa fără ca această putere să ducă la distrugerea diodei. Această valoare este limitată de capacitatea termică a diodei. Ideal, această valoare ar fi infinită.</p>

<p><b>T<sub>J</sub> - temperatura de functionare a joncţiunii</b>, reprezintă temperatura maximă admisă a joncţiunii P-N a diodei, valoare dată de obicei în <sup>o</sup>C. Căldura reprezintă punctul critic al dispozitivelor semiconductoare: acestea <i>trebuie</i> menţiunute la o temperatură cât mai apropiată de temperatura camerei pentru funcţionarea lor corectă şi o durată de funcţionare cât mai lungă.</p>

<p><b>T<sub>STG</sub> - temperatura de depozitare</b>, reprezintă valoarea temperaturii de stocare a diodelor (nepolarizate).</p>

<p><b>R(Θ) - rezistenţa termică</b>, reprezintă diferenţa dintre temperatura joncţiunii şi temperatura aerului exteriori diodei (R(Θ)<sub>JA</sub>), sau dintre joncţiune şi contacte (R(Θ)<sub>JL</sub>), pentru o anumită putere disipată. Valoarea este exprimată în <sup>o</sup>C/W. Ideal, această valoare ar fi zero, ceea ce ar înseamna că învelişul (carcasa) diodei ar fi un conductor şi radiator termic perfect, fiind capabil să transfere energiea sub formă de căldură dinspre joncţiune spre mediul exterior (sau spre contacte) fără nicio diferenţă de temperatură existenţa în grosimea carcasei. O rezistenţă termică ridicată se traduce prin faptul că dioda va stoca o temperatură excesivă în jurul joncţiunii (punctul critic), în ciuda eforturilor susţinute de răcire a mediului exterior diodei; acest lucru duce la limitarea puterii maxime disipate.</p>

<p><b>I<sub>R</sub> - curentul maxim de polarizare inversă</b>, reprezintă valoarea curentului prin diodă la polarizarea inversă şi aplicarea tensiunii de polarizare inversă maximă de curent continuu(V<sub>DC</sub>). Mai este cunoscut şi sub numele de <i>curent de scăpări</i>. Ideal, această valoare ar fi zero, deoarece o diodă perfectă ar bloca toţi curenţii atunci când este polarizată inversă. În realitate, această valoarea este mică în comparaţie cu valoarea curentului maxim de polarizare directă.</p>

<p><b>C<sub>J</sub> - capacitatea tipică a joncţiunii</b>, reprezintă capacitatea intrinsecă joncţiunii, datorită comportării zonei de golire precum un dielectric între anod şi catod. Această valoare este de obicei foarte mică, de ordinul picofarazilor (pF).</p>

<p><b>t<sub>rr</sub> - timpul de revenire invers</b>, reprezintă durata de timp necesară „stingerii” diodei atunci când tensiunea la bornele sale alternează între polarizare directă şi polarizare inversă. Ideal, această valoare ar fi zero: dioda se „stinge” imediat după inversarea polarităţii. Pentru o diodă redresoare tipică, timpul de revenire este de oridinul zecilor de microsecunde (ms); pentru o diodă de comutaţie rapidă, acest timp poate ajunge la doar câteva nanosecunde (ns).</p>

<p>Majoritatea acestor parametrii variază cu temperatura sau alte condiţii de operare, prin urmare, o singură valoarea nu poate descrie complet niciun parametru. Prin urmare, producătorii pun la dispoziţie grafice ale variaţiilor parametrilor cu temperatura (sau alte variabile).</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>