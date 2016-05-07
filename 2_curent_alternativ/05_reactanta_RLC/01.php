<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>R, X si Z - recapitulare</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. R, X şi Z - recapitulare</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Înainte de a începe să explorăm efectele rezistorilor, bobinelor şi a condensatoarelor conectate împreună în acelaşi circuit de curent alternativ, să recapitulăm mai întâi câteva noţiuni de bază.</p>

<h3>Rezistenţa (R)</h3>

<p>Rezistenţa este defapt <i>frecarea</i> întâmpinată de electroni, atunci când aceştia se află în mişcare. Toate materialele conductoare posedă o anumită rezistenţă (excepţie făcând supraconductoarele!), în special rezistorii. Atunci când curentul alternativ întâmpină o rezistenţă, căderea de tensiune produsă şi curentul prin aceasta sunt în fază. Simbolul matematic pentru rezistenţă este „R”, iar unitatea de măsură este Ohm-ul (Ω).</p>

<h3>Reactanţa (X)</h3>

<p>Reactanţa este defapt <i>inerţia</i> întâmpinată de electroni, atunci când aceştia se află în mişcare. Este prezentă peste tot unde există câmpuri electrice sau magnetice datorită tensiunii sau curentului aplicat, dar în special în condensatoare şi bobine. Atunci când curentul alternativ întâmpină o reactanţă, căderea de tensiune şi curentul prin aceasta sunt defazate cu 90<sup>o</sup>. Simbolul matematic pentru reactanţă este „X”, iar unitatea de măsură este Ohm-ul (Ω).</p>

<h3>Impedanţa (Z)</h3>

<p>Impedanţa este o expresie completă a tuturor formelor de opoziţie întâmpinate de electroni, atunci când aceştia se află în mişcare, şi include efectele rezistenţei cât şi a reactanţei. Este prezentă în toate circuitele şi în toate componentele. Atunci când curentul alternativ întâmpină o impedanţă, căderea de tensiune şi curentul prin aceasta sunt defazate cu un unghi între 0<sup>o</sup> şi 90<sup>o</sup>. Simbolul matematic al impedanţei este „Z”, iar unitatea de măsură este Ohm-ul (Ω), sub formă complexă.</p>

<h3>Componente ideale</h3>

<p>Rezistorii perfecţi posedă doar rezistenţă, nu şi reactanţă. Bobinele şi condensatoarele perfecte posedă doar reactanţă, nu şi rezistenţă. Toate componentele posedă impedanţă, şi, datorită acestei proprietăţi universale a componentelor, este normal să exprimăm (traducem) valorile tuturor componentelor (rezistenţă, inductanţă şi capacitate) sub un termen comul, cel al impedanţei, ca prim pas în analiza oricărui circuit de curent alternativ:</p>

<p><img src="../poze/02347.png" alt="rezistor, bobină şi condensator ideal"/></p>

<h3>Unghiul de fază al impedanţei</h3>

<p>Unghiul de fază al impedanţei pentru fiecare component este diferenţa de fază dintre căderea de tensiune la bornele acelui component şi curentul prin el. În cazul unui rezistor perfect, căderea de tensiune şi curentul sunt tot timpul în fază, prin urmare, unghiul de fază al impedanţei rezistorului (impedanţa rezistivă) este 0<sup>o</sup>. Pentru o bobină perfectă, căderea de tensiune este tot timpul defazată înaintea curentului cu 90<sup>o</sup>, prin urmare, unghiul de fază al impedanţei bobinei (impedanţa inductivă) este +90<sup>o</sup>. Pentru un condensator perfect, căderea de tensiune este tot timpul defazată în urma curentului cu 90<sup>o</sup>, prin urmare, unghiul de fază al impedanţei condensatorului (impedanţa capacitivă) este -90<sup>o</sup>.</p>

<h3>Legile lui Ohm şi Kirchhoff în curent alternativ</h3>

<p>Impedanţele în curent alternativ se comportă analog rezistenţelor în curent continuu: se adună când sunt conectate în serie şi se micşorează în paralel. Legea lui Ohm pentru circuitele de curent alternativ, bazată pe impedanţă, nu pe rezistenţă, arată asfel:</p>

<p><img src="../poze/12021.png" alt="legea lui Ohm pentru circuitele de curent alternativ - impedanţă în loc de rezistenţă"/></p>

<p>Legile lui Kirchhoff, precum şi toate metodele de analiză a reţelelor şi toate teoremele valabile pentru curent continuu sunt valabile şi în curent alternativ, atâta timp când valorile sunt exprimate sub formă complexă şi nu scalară. Cu toate că această echivalenţă poate fi greu de aplicat aritmetic, conceptual, ea este simplă şi elegantă. Singura diferenţă reală între circuitele de curent continuu şi alternativ este cea legată de calcularea puterii. Doarece reactanţa nu disipă putere precum o face rezistenţă, conceptul de putere în circuitele de curent alternativ este radical diferit faţă de cele de curent alternativ.</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>