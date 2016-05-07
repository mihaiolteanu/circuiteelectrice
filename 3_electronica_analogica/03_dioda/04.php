<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuite redresoare</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Circuite redresoare</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Cea mai populară aplicaţia e diodelor este <i>redresarea</i>. Pe scurt, redresarea reprezintă transformarea curentului alternativ în curent continuu. Acest lucru implică folosirea unui dispozitiv ce permite trecerea electronilor doar într-o singură direcţie, iar dioda realizează tocmai acest lucru.</p>

<h3>Redresorul monoalternanţă</h3>

<p>Cel mai simplu circuit de redresare îl reprezintă redresorul monoalternanţă. Acesta permite doar trecerea unei jumătăti a formei de undă de curent alternativ înspre sarcină:</p>

<p><img src="../poze/03258.png" alt="redresorul monoalternanţă"/></p>

<p>Pentru majoritatea aplicaţiilor de putere însă, redresarea monoalternanţă nu este suficientă. Conţinutul armonic al undei de ieşire este foarte mare şi prin urmare dificil de filtrat. Mai mult, sursa de tensiune alternativă este „văzută” de sursă doar odată la fiecare jumătate de perioadă, ceea ce înseamnă că mare parte din capacitatea sursei nu este folosită. Redresarea monoalternanţă este totuşi o modalitatea foarte uşoară de reducere a puterii generate pe o sarcină rezistive. Unele comutatoare cu rezistenţă reglabilă folosite la lămpi, aplică întreaga tensiune de curent continuu pe filamentul „lămpii” în poziţia „maxim”, şi doar o jumătate (folosind un redresor monoalternanţă) din tensiunea maximă disponibilă pe celalaltă poziţie, pentru o intensitate luminoasă mai scăzută:</p>

<p><img src="../poze/03259.png" alt="utilizarea redresorului monoalternanţă; comutator cu rezistenţă reglabilă cu două nivele"/></p>

<p>Când întrerupătorul este în poziţie mediu, lampa incandescentă primeşte aproximativ jumătate din puterea disponibilă la sursa de curent alternativ. Datorită faptului că forma de undă monoalternanţa pulsează mult mai rapid decât timpul necesar pentru încălzirea şi răcirea filamentului, lampa nu „clipeşte”, ci, filamentul ei pur şi simplu operează la o temperatură mai mică decât temperatura normală de funcţionare.</p>

<h3>Redresor dublă alternanţă cu punct median</h3>

<p>Pentru redresarea şi folosirea ambelor alternanţe a undelor sinusoidale, avem nevoie de o altă configuraţie a circuitului redresor, şi anume, un redresor <i>dublă alternanţă</i>. Una dintre posibilităţi este realizarea redresorului cu punct median, folosind un transformator cu priză mediană pe înfăşurarea secundară şi două diode:</p>

<p><img src="../poze/03260.png" alt="redresor dublă alternanţă cu punct median"/></p>

<p>Putem înţelege mult mai bine funcţionarea acestui redresor dacă luăm pe rând fiecare jumătate de perioadă (semi-perioadă). Să cosiderăm de exemplu prima jumătate a perioadei, când polaritatea tensiunii de alimentare este pozitivă (+) sus şi negativă (-) jos. În această situaţie, doar dioda de sus va conduce, iar dioda de jos este blocată. Sarcina „vede” prima jumătate a formei de undă sinusoidale, pozitiv sus şi negativ jos. Doar partea de sus a înfăşurării secundare a transformatorului conduce curent în acest caz:</p>

<p><img src="../poze/03261.png" alt="redresor dublă alternanţă cu punct median; observarea primei jumătăţi a periodei tensiunii de alimentare alternative"/></p>

<p>În a doua parte a perioadei, polaritatea tensiunii alternative se inversează. În acest caz, cealaltă diodă, cea de jos, şi cealaltă jumătate a secundarului transformatorului, vor conduce curent, iar celelalte porţiuni ale circuitului ce au fost active la pasul precedent, nu vor conduce curent. Sarcina „vede” şi în acest caz o jumătate de formă de undă sinusoidală, de <i>aceeiaşi</i> polaritate ca şi în cazul precedent: pozitiv în partea de sus şi negativ în partea de jos:</p>

<p><img src="../poze/03262.png" alt="redresor dublă alternanţă cu punct median; observarea celei de a doua jumătăţi a periodei tensiunii de alimentare alternative"/></p>

<p>Un mare dezavantaj al acestei configuraţii este necesitatea folosirii unui transformator cu priză mediană pe înfăşurarea secundară. Dacă circuitul în cauză este un circuit de putere mare, mărimea şi costul unui asfel de transformator pot fi suficient de mari. Prin urmare, redresorul dublu alternanţa cu punct median este folosit doar în aplicaţiile de putere mică.</p>

<p>Polaritatea sarcinii poate fi inversată prin inversarea direcţiilor diodelor. Mai mult, diodele inversate pot fi conectate în paralel cu configuraţia pozitivă deja existentă. Rezultatul este un redresor dublă alternanţă cu polaritate dublă. Modul de conectare al diodelor este acelaşi ca şi la redresorul în punte.</p>

<p><img src="../poze/03444.png" alt="redresor dublă alternanţă cu punct median cu polaritate dublă"/></p>

<h3>Redresor dublă alternanţă în punte</h3>

<p>Probabil că cel mai popular redresor este cel dublă alternanţă în punte. Aceste utilizează patru diode conectate în punte:</p>

<p><img src="../poze/03263.png" alt="Redresor dublă alternanţă în punte"/></p>

<p>Direcţia curentului pentru semi-perioadele pozitive este prezentată în figura de mai jos:</p>

<p><img src="../poze/03264.png" alt="Redresor dublă alternanţă în punte; direcţia curentului pentru semi-perioadele pozitive"/></p>

<p>Direcţia curentului pentru semi-perioadele negative este prezentată în figura de mai jos:</p>

<p><img src="../poze/03265.png" alt="Redresor dublă alternanţă în punte; direcţia curentului pentru semi-perioadele negative"/></p>

<p>Indiferent de polaritatea intrării, curentul prin sarcină are aceeiaşi direcţie de curegere. Cu alte cuvinte, o semi-perioadă negativă la sursă este o semi-perioadă pozitivă pe sarcină. Curgerea curentului are loc prin două diode serie, pentru ambele polarităti. Asfel, căderea de tensiune pierdută dinspre sursă spre sarcină datorită diodelor este dublă (0.7 · 2 = 1.4 V pentru Si) faţa de redresorul dubă alternanţă cu punct median. Acest dezavantaj reprezintă însă o problemă doar pentru sursele cu o tensiune de alimentarea foarte scăzută.</p>

<p>Modul corect de aşezare în punte al diodelor poate prezenta pentru începători unele dificultăţi. O reprezentare alternativa, dar echivalentă, a acestui circuit este mult mai uşor de ţinut minte şi de înţeles. Este exact acelaşi circuit, doar că toate diodele sunt poziţionate orizontal, şi toate indică în aceeiaşi direcţie:</p>

<p><img src="../poze/03266.png" alt="Redresor dublă alternanţă în punte; reprezentare echivalentă - toate diodele sunt poziţionate orizontal şi indică aceeiaşi direcţie"/></p>

<p>Un avantaj al acestei notaţii este că poate fi uşor aplicată unei versiuni trifazate a redresorului:</p>

<p><img src="../poze/03267.png" alt="redresor trifazat dublă alternanţă în punte; "/></p>

<p>...sau oricărei configuraţii polifazate:</p>

<p><img src="../poze/03268.png" alt="redresor cu 6 faze dublă alternanţă în punte; "/></p>

<h3>Forma de undă a tensiunii redresate</h3>

<p>În cazul redresării unui circuit de curent alternativ polifazat, suprapunerea pulsurilor defazate produc o tensiune de curent continuu mult mai „netedă” (cu un conţinut mai mic de curent alternativ) decât cea produsă prin redresarea unei singure faze de curent alternativ. Acesta este un avantaj important în circuitele redresoare de putere, unde doar mărimea fizică a componentelor necesare pentru realizarea filtrării ar impune unele limite.</p>

<p><img src="../poze/03269.png" alt="forma de undă de curent continuu redresată pentru o sursă de tensiune trifazată"/></p>

<p>Indiferent de tipul redresării - monofazată sau polifazată - cantitatea de tensiunea alternativă „amestecată” cu tensiunea de curent continuu de ieşire a redresorului, poartă numele de <i>tensiune de riplu</i>, sau simplu <i>riplu</i>. În majoritatea cazurilor, din moment ce la ieşire dorim o tensiune de curent continuu pură, riplul reprezintă o tensiune nedorită. Dacă puterile implicate nu sunt foarte mari, se pot folosi reţele de filtrare pentru reducerea riplului tensiunii de ieşire.</p>

<p>Câteodată, metoda rectificării este descrisă numărând „pulsurile” tensiunii de curent continuu pentru fiecare 360<sup>o</sup> electrice. Un redresor monofazat, monoalternanţă, este prin urmare un redresor cu <i>un puls</i>, deoarece produce un singur puls într-o perioadă completă (360<sup>o</sup>) a formei de undă alternative. Un redresaor monofazata, dublă alternanţă (indiferent dacă este cu punct median sau în punte), poate fi numit redresor cu <i>două pulsuri</i>, deoarece produce două pulsuri de tensiune continuă într-o perioadă a tensiunii de curent alternativ. Un redresor trifazat, dublă alternanţă poate fi denumit redresor cu <i>şase pulsuri</i>.</p>

<p>Notaţie 1Ph1W1P ?!?!?! -- ro?!!?</p>

<p>Este posibilă obţinerea unui număru dublu de pulsuri faţă de numărul fazelor cu ajutorului unui redresor. Folosind transformatoare, putem conecta în paralel un set de redresoare dublă alternanţă în punte asfel încât să rezultă mai mult de 6 pulsuri de tensiune continuă pentru cele trei faze ale curentului alternativ. Se introduce un defazaj de 30<sup>o</sup> între primarul şi secundarul transformatorului trifazat atunci înfăşurările nu sunt de acelaşi tip. Cu alte cuvinte, un transformator în configuraţie Y-Δ (stea-triunghi) sau Δ-Y (triunghi-stea), va prezenta acest defazaj de 30<sup>o</sup>, dar nu şi un transformator în configuraţie Y-Y sau Δ-Δ. Acest fenoment poate fi exploatat prin utlizarea unui transformator în configuraţie Y-Y conectat la un redresor în punte, iar un alt transformator în configuraţie Y-Δ conectat la un al doilea redresor în punte; cele două punţi redresoare le conectăm apoi în parelel. Din moment de tensiunea de riplu dintre cele două redresoare este defazată cu 30<sup>o</sup>, tensiunea de riplu rezultată prin superpoziţia lor va fi mai mică decât tensiunea de riplu luată individual pentru cele două redresoare: 12 pulsuri pentru o perioadă (360<sup>o</sup>) în loc de 6.</p>

<p><img src="../poze/03270.png" alt="redresor polifazat dublu alternanţa cu două redresoare în punte conectate în paralel, folosind un transformator primar şi două secundare în configuraţie Y-Y, respectiv Y-Δ"/></p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Redresarea este transformarea curentului alternativ în curent continuu</li>
	<li>Un redresor monoalternanţa este un circuit ce permite aplicarea doar a unei semiperioade (o jumătate de perioadă) a tensiunii de curent alternativ asupra sarcinii, rezultând într-o polaritate non-alternantă a căderii de tensiune a sarcinii. Tensiunea de curent continuu rezultată prezintă o „pulsaţie” semnificativă</li>
	<li>Un redresor dublă alternanţă este un circuit ce transformă întreaga perioadă (ambele semiperioade) a tensiunii de curent alternativ într-o serie de pulsuri neîntrerupte de tensiune de aceeiaşi polaritate. Tensiunea de curent continuu rezultată prezintă un număr mai mic de pulsuri</li>
	<li>Redresarea tensiunii de curent alternativ polifazate rezultă într-o formă de undă de curent continuu mult mai „netedă” (tensiune de riplu mult mai scăzută) decât redresarea tensiunii monofazate</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>