<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Rezistivitatea şi conductibilitatea electrică</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Rezistivitatea şi conductibilitatea electrică</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Amperajul unui conductor, bazat pe potenţialul curentului de a distruge conductorul. nu este cea mai bună metodă de reprezentare a rezistenţei acestuia. Există situaţii în care căderea de tensiune creată de rezistenţa unui conductor în lungul acestuia duce la apariţia altor probleme decât evitarea incendiilor. De exemplu, să presupunem că proiectăm un circuit unde căderea de tensiune la bornele unui anumit component este extrem de importanţa şi nu trebuie să scadă sub o anumită limită. Dacă acest lucru se întâmplă, căderea de tensiune datorată rezistenţei conductorului poate duce la apariţia unei probleme tehnice a aplicaţiei în cauză.</p>

<p><img src="../poze/00287.png" alt="circuit electric; conductori cu rezistenţă electrică"/></p>

<p>În circuitul alăturat, sarcina necesită o cădere de tensiune de cel puţin 220 V în cazul unei surse de tensiune este de 230 V. În acest caz, trebuie să ne asigurăm de faptul că rezistenţa conductorilor nu va genera o cădere de tensiune mai mare de 10 V în lungul acestora. Luând în considerare ambii conductori (dus şi întors), căderea de tensiune maximă admisă în lungul unui conductor este de 5 V. Utilizând legea lui Ohm, putem determina rezistenţa maximă admisă pentru fiecare conductor în parte:</p>

<div class="formula">
R = E / I
R = 5 V / 25 A
R 0,2 Ω
</div>

<p>Ştim că lungimea fiecărui conductor este de 700 m, dar cum putem determina valoarea rezistenţei pentru o anumită lungime şi diametru al firului. Pentru acest lucru avem nevoie de o altă formulă, şi anume:</p>

<p><img src="../poze/10221.png" alt="formula de calcul a rezistenţei electrice"/></p>

<p>Prin urmare, rezistenţa electrică a unui conductor depinde de rezistivitatea acestuia, simbolizată prin litera grecească <strong>ρ</strong> (ro), de lungimea conductorului (l) şi de aria secţiunii transversale (A). Urmărind ecuaţia de mai sus, putem trage concluzia (deja ştiută) că rezistenţa conductorului creşte odată cu lungimea acestuia şi scade odată cu creşterea ariei secţiunii transversale. Rezistivitatea este o proprietate specifică unui anumit material de a se opune trecerii curentului prin acesta, iar unitatea sa de măsură este ohm-metru (Ω·m).</p>

<p>Rezistivitatea câtorva tipuri de materiale conductoare, la temperatura de 20<sup>o</sup> C este dată în tabelul alăturat. Putem observa că printre cele mai scăzute valori (ceea ce se traduce printr-o rezistenţa scăzută) o are cuprul, imediat după argint.</p>

<table>
<tr>
  <th>Material</th>
  <th>Element / Aliaj</th>
  <th>10<sup>-8</sup> Ω·m</th>
</tr>
<tr>
  <td>Nicrom</td>
  <td>Aliaj</td>
  <td>112,2</td>
</tr>
<tr>
  <td>Nicrom V</td>
  <td>Aliaj</td>
  <td>108,2</td>
</tr>
<tr>
  <td>Manganină</td>
  <td>Aliaj</td>
  <td>48,21</td>
</tr>
<tr>
  <td>Constantan</td>
  <td>Aliaj</td>
  <td>45,38</td>
</tr>
<tr>
  <td>Oţel</td>
  <td>Aliaj</td>
  <td>16,62</td>
</tr>
<tr>
  <td>Platină</td>
  <td>Element</td>
  <td>10,5</td>
</tr>
<tr>
  <td>Fier</td>
  <td>Element</td>
  <td>9,61</td>
</tr>
<tr>
  <td>Nickel</td>
  <td>Element</td>
  <td>6,93</td>
</tr>
<tr>
  <td>Zinc</td>
  <td>Element</td>
  <td>5,90</td>
</tr>
<tr>
  <td>Molibden</td>
  <td>Element</td>
  <td>5,34</td>
</tr>
<tr>
  <td>Tungsten</td>
  <td>Element</td>
  <td>5,28</td>
</tr>
<tr>
  <td>Aluminiu</td>
  <td>Element</td>
  <td>2,65</td>
</tr>
<tr>
  <td>Aur</td>
  <td>Element</td>
  <td>2,21</td>
</tr>
<tr>
  <td>Cupru</td>
  <td>Element</td>
  <td>1,67</td>
</tr>
<tr>
  <td>Argint</td>
  <td>Element</td>
  <td>1,58</td>
</tr>
</table>

<p>Revenind la circuitul din exemplul de mai sus, am calculat o rezistenţa de 0,2 Ω pentru o lungime de 700 m. Presupunând că materialul folosit este cupru (cel mai utilizat material pentru confecţionarea conductorilor electrici), putem determina aria secţiunii transversale necesare pentru conductorii din circuit:</p>

<div class="formula">
R = ρ (l / A)
A = ρ (l / R)
A = 1,67 x 10<sup>-8</sup> Ω·m (700 m / 0,2 Ω)
A = 58,4 mm<sup>2</sup>
</div>

<p>O secţiune transversală de 54,4 mm<sup>2</sup>, se traduce printr-un diametru al conductorului circular de 8,6 mm. Dacă luăm un <a href="http://www.cabluri.net/cabluri-caracteristici-rezistenta-amperaje.html">tabel</a> al conductorilor, putem observa că cea mai apropiată valoare mai mare decât 54,4 este 70 mm<sup>2</sup>, iar rezistenţa conductorului la o lungime de 1.000 m este de 0,268. Pentru exemplu nostru, la o lungime de 700 m, aceasta înseamnă o rezistenţa a conductorului de 0,182 Ω, sub valoarea maximă impusă de 0,2 Ω; conductorul ales este prin urmare potrivit pentru aplicaţia în cauză.</p>

<h2>Conductibilitatea electrică</h2>

<p>Conductibilitatea electrică, denumită şi conductivitate electrică, <strong>caracterizează capacitatea unui material de a permite deplasarea electronilor prin acesta</strong>.  Simbolul matematic este σ (sigma), iar unitatea de măsură este Siemens pe metru (S·m<sup>-1</sup>). Practic, conductibilitatea electrică este inversa rezistivităţii electrice:</p>

<div class="formula">
σ = 1 / ρ
</div>

<p class="sumar">Sumar:</p>
<ul>
	<li><strong>Rezistenţa unui conductor</strong> creşte odată cu creşterea lungimii sale şi descreşterea ariei secţiunii transversale, toţi ceilalţi factorii fiind constanţi</li>
	<li><strong>Rezistivitatea electrică</strong> (ρ) este o proprietate a oricărui material conductor, o mărume utilizată pentru determinarea rezistenţei dintre cele două capeta ala unui conductor, atunci când se cunosc lungimea şi aria secţiunii transversale cu formula: R = ρl/A</li>
	<li><strong>Conductibilitatea electrică</strong> caracterizează capacitatea unui material de a permite deplasarea electronilor prin acesta</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>