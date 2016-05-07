<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Puterea în circuitele electrice</title>
  </head>
<body>
  <div id="meniu"><?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?></div>
  <div id="header">
	<h1>2. Puterea în circuitele electrice</h1>
  </div>
  
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p> Pe lângă tensiune şi curent, mai există o altă mărime a activităţii electronilor liberi din circuit: <i>puterea</i>. În primul rând trebuie să înţelegem ce este puterea, înainte de a o analiza într-un circuit</p>

<p>Puterea este mărimea lucrului mecanic ce poate fi efectuat într-o anumită perioadă de timp. <i>Puterea</i> este de obicei definită ca şi ridicarea unui corp (grutăţi) atunci când asupra acestuia acţionează forţa gravitaţiei. Cu cât corpul este mai greu şi/sau cu cât este ridicat la o înălţime mai mare, cu atât a fost efectuat mai mult <i>lucru</i>. <i>Puterea</i> măsoară cât de rapid a fost efectuată o cantitate standard de lucru.</p>

<p>În cazul automobilelor, puterea unui motor este dată în <a class="link_extern" href="http://ro.wikipedia.org/wiki/Cal_putere">„cai putere”</a>, termen inventat iniţial de producătorii <a class="link_extern" href="http://ro.wikipedia.org/wiki/Motor_cu_abur">motoarelor cu aburi</a> ca şi mijloc de cuantificare a abilităţii maşinilor lor de a efectua lucru mecanic în relaţia cu cea mai utilizată sursă de putere din acele vremuri: calul. Puterea unui motor de automobil nu indică mărimea dealului ce-l poate urca sau ce greutate poate transporta, ci indică cât de <i>repede</i> poate urca un anumit deal sau trage o anumită greutate.</p>

<p>Puterea unui motor mecanic depinde atât de viteza motorului cât şi de cuplul ce se regăseşte pe arbore. Viteza arborelui unui motor se măsoară în rotaţii pe minut, sau r.p.m. Cuplul este cantitatea de forţă de torsiune produsă de motor şi se măsoară în Newton-metru (Nm). Dar nici viteza nici cuplul nu măsoară puterea unui motor.</p>

<p>Un motor diesel de tractor de 100 de cai putere, are o viteză de rotaţie mică, dar un cuplu mare. Um motor de motocicletă de 100 de cai putere, are o viteză de rotaţie foarte mare, dar un cuplu mic. Ambele produc 100 de cai putere, dar la viteze şi cupluri diferite. Ecuaţia pentru calcului cailor putere (CP) este simplă:</p>

<img src="../poze/10011.png" alt="formulă matematică"/>

<p>unde,</p>
<ul><li>S = viteza arborelui în r.p.m.</li>
	<li>T = cuplul arborelui în Nm</li>
	<li>π = 3.14 (constanta pi)</li>
</ul>

<p>Putem observa că există doar două variabile în partea dreaptă a ecuaţiei, S şi T. Toţi ceilalţi termeni sunt constanţi: 2, π şi 5252, toate sunt constante (nu îşi modifică valoarea în funcţie de timp sau de situaţie). CP (cal putere) variază doar atunci când variază fie viteza fie cuplul şi nimic altceva. Putem rescrie ecuaţia pentru a arăta această relaţie:</p>

<img src="../poze/10012.png" alt="formulă matematică"/>

<p>unde,</p>
<ul><li>&prop; înseamnă direct proporţional (adesea prescurtat d.p.)</li>
	<li>S şi T au semnificaţiile de mai sus</li>
</ul>

<p>Doarece unitatea de măsură „cal putere” nu coincide exact cu viteza în rotaţii pe minut înmulţită cu cuplul în Newton-metru, nu putem spune că acesta este <i>egal</i> cu ST. Cu toate aceastea, „calul putere” este <i>proporţional</i> cu ST. Valoarea calului putere se va modifica în aceeiaşi proporţie cu produsul ST (atunci când acesta variază).</p>

<p>Pentru circuitele electrice, puterea este o funcţie (depinde) de curent şi tensiune. Nu este surprinzător faptul că această relaţie seamănă izbitor cu formula „proporţională” a calului putere de mai sus:</p>

<img src="../poze/10013.png" alt="formulă matematică"/>

<p>Totuşi, în acest caz, puterea (P) este exact egală curentului (I) înmulţit cu tensiunea (E), şi nu este doar proporţională cu aceast produs (IE). Când folosim această formulă, unitatea de măsură pentru putere este <i>watt</i>-ul, prescurtat prin litera „W”.</p>

<p>Trebuie înţeles faptul că nici tensiunea nici curentul nu înseamnă putere ele însele. Puterea este combinaţia celor două într-un circuit. Reţineţi că tensiunea este lucrul specific (sau energia potenţială) pe unitate de sarcină, în timp ce curentul este rata de deplasare a sarcinilor electrice printr-un conductor. Tensiunea (lucrul specific) este analog lucrului efectuat în ridicarea unei greutăţi atunci când asupra acesteia acţionează forţa gravitaţiei. Curentul (rata) este analog vitezei de ridicare a greutăţii respective. Împreună ca şi produs (înmulţire), tensiunea (lucru) şi curentul (rata) constituie puterea.</p>

<p>La fel ca în cazul unui motor diesel de tractor şi un motor de motocicletă, un circuit cu o tensiune mare şi curent scăzut, poate disipa aceeiaşi putere precum un circuit cu o tensiune scăzută şi curent mare. Nici valoarea tensiunii şi nici cea a curentului, nu pot să indice singure cantitatea de putere prezentă într-un circuit.</p>

<p>Într-un circuit deschis, acolo unde tensiunea este prezentă între bornele sursei iar curentul este zero, puterea disipată este şi ea egală cu <i>zero</i>, oricât de mare ar fi tensiunea. Din moment ce P=IE şi I=0, şi înmulţirea cu zero are ca şi rezultat tot timpul zero, înseamnă că şi puterea disipată în circuit trebuie să fie egală cu zero. Dacă am fi să construim un scurt-circuit cu ajutorul unei bucle din material superconductor (rezistenţă zero), am putea obţine o situaţia în care tensiunea de-a lungul buclei să fie egală cu zero, şi în acest caz puterea ar fi deasemenea zero, folosind logica de mai sus. (Despre superconductivitate vom vorbi într-un alt capitol).</p>

<p>Fie că măsurăm puterea în „cal putere” sau în „watt”, vorbim despre acelaşi lucru: ce cantitate de lucru poate fi efectuat într-o anumită perioadă de timp. Cele două unităţi nu sunt egală din punct de vedere numeric, dar exprimă acelaşi lucru. Relaţia dintre cele două puteri este:</p>

<p><b>1	CP = 745.7 W</b></p>

<p>Prin urmare, cele două motoare de 100 de cai putere de mai sus pot fi de asemenea notate cu „74570” de watti, sau „74.57” kW.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Puterea este mărimea lucrului mecanic într-o anumită perioadă de timp.</li>
	<li>Puterea mecanică se măsoară de obicei în „cal putere”.</li>
	<li>Puterea electrică se măsoară aproape tot timpul în „watt” şi poate fi calculată cu formula P=IE.</li>
	<li>Puterea electrică este un produs al tensiunii <i>şi</i> al curentului, nu doar al unuia dintre aceşti termeni</li>
	<li>Calul putere şi watt-ul sunt pur şi simplu două unităţi de măsură ce descriu acelaşi principiu fizic, un cal putere fiind egal cu 745.7 de watti</li>
</ul>
</div>

<div id="footer">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>

</body>
</html>
