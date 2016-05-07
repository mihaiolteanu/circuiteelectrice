<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Relaţia tensiune-curent pentru bobină</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Relaţia tensiune-curent pentru bobină</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Bobinele nu au o „rezistenţă” stabilă precum rezistenţele sau conductoarele. Totuşi, există o relaţie matematică dintre tensiunea şi curentul unei bobine, asfel:</p>

<p><img src="../poze/10269.png" alt="Legea lui Ohm pentru bobine"/></p>

<p>Forma acestei ecuaţii este asemănătoare cele pentru condensatoare.</p>

<p>Precum este şi cazul condensatoarelor, comportamentul bobinelor depinde de variabila timp. Pe lângă rezistenţa specifică spirelor înfăsurării (o vom presupune egală cu zero pentru simplificarea expunerii), căderea de tensiune la bornele unei bobine este strâns legată de viteza (rata) de variaţie a curentului în timp.</p>

<p>Să presupunem o bobină perfectă (rezistenţă de 0 ohmi a firelor) introdusă într-un circuit în care putem varia cantitatea de curent cu ajutorul unui potenţiometru conectat ca şi rezistor variabil:</p>

<p><img src="../poze/00404.png" alt="curent constant printr-o bobină"/></p>

<p>Dacă mecanismul potenţiometrului rămâne într-o poziţie fixă (perie nu se mişcă), ampermetrul conectat în serie va citi o valoarea constantă a curentului, iar voltmetrul conectat în paralel cu bobina va înregistra 0 volţi. În aceast scenariu, rata instantanee de variaţie a curentului (di/dt) este egală cu zero, deoarece curentul este stabil (constant). Ecuaţie ne spune că având o variaţie de 0 amper pe secundă (nu există de fapt variaţie) pentru di/dt, căderea de tensiune la bornele bobine trebuie să fie egală cu zero. Din punct de vedere fizic, dacă nu există o variaţie a curentului, câmpul magnetic generat de bobină va fi constant. Fără o variaţia a fluxului magnetic (dΦ/dt = Weber pe secundă), nu va există nicio cădere de tensiune în lungul bobinei datorată inducţiei.</p>

<p><img src="../poze/00405.png" alt="relaţia curent-tensiune în cazul bobinei - curent constant"/></p>

<p>Dacă deplasăm uşor peria potenţiometrului în „sus”, rezistenţa sa, „văzută” de circuit, scade. Efectul este creşterea curentului prin circuit, asfel că indicaţia ampermetrului va creşte uşor:</p>

<p><img src="../poze/00406.png" alt="curent variabil printr-o bobină"/></p>

<p>Presupunând că peria potenţiometrului se deplasează cu o <i>rată</i> constantă, asfel încât creşterea valorii curentului prin bobină să fie constantă (linie dreaptă pe graficul timp-curent), valoarea termenului di/dt din formulă va fi una constantă. Această valoare fixă, înmulţită cu inductanţă bobinei în Henry (de asemenea fixă), rezultă într-o valoare constantă a tensiunii. Fizic, creşterea progresivă a curentului dă naştere unui câmp magnetic de asemenea în creştere. Acesată creştere progresivă a fluxului magnetic la rândul ei, determină inducerea unei tensiuni în bobină aşa cum rezultă din ecuaţia inducţiei lui Faraday: e = N(dΦ/dt). Polaritatea aceastei tensiuni auto-induse de-a lungul bobinei (înfăşurării) se opune variaţiei curentului. Cu alte cuvinte, polaritatea tensiunii induse datorată <i>creşterii</i>curentului se va orienta <i>împotriva</i> direcţiei curentului, încercând să menţină curentul la vechea sa valoare. Acesta este de fapt un principiu mai general expus în <i>Legea lui Lenz</i>, ce spune că un efect indus va fi tot timpul opus cauzei ce-l produce.</p>

<p>În acest scenariu, bobina se comportă precum o <i>sarcină</i>, cu partea negativă a tensiunii induse ca loc de intrare al electronilor, iar partea pozitivă a tensiunii induse ca loc de ieşire al lor.</p>

<p><img src="../poze/00407.png" alt="relaţia curent-tensiune în cazul bobinei - rata de variaţie constantă a curentului"/></p>

<p>Modificând rata de creştere a curentului prin bobine prin deplasarea în sus a periei potenţiometrului la diferite viteze rezultă în valori diferite ale căderilor de tensiune la bornele bobine, cu aceeiaşi polaritate ca şi mai înainte (opusă creşterii curentului).</p>

<p><img src="../poze/00408.png" alt="relaţia curent-tensiune în cazul bobinei - rata de variaţie a curentului nu este constantă"/></p>

<p>Vedem că şi în acest caz avem de a face cu funcţia <i>derivată</i> în cazul bobinei. În termenii analizei matematice, spunem că tensiunea indusă de-a lungul bobine este <i>derivata curentului prin bobină</i>, adică, tensiunea este proporţională cu rata de variaţie a curentului în funcţie de timp.</p>

<p>Inversând direcţia de deplasare a periei potenţiometrului („jos”), rezistenţa sa, „văzută” de circuit, creşte. Curentul, prin urmare, va scădea prin circuit (valoare negativă pentru raportul di/dt). Bobina, ce se opune tot timpul variaţiei curentului, va produce o cădere de tensiune contrară direcţiei variaţiei:</p>

<p><img src="../poze/00409.png" alt="curent variabil printr-o bobină"/></p>

<p>Valoarea tensiunii produse de bobina va depinde de rata (viteza) de descreştere a curentului prin aceasta. Conform legii lui Lenz, tensiunea indusă se va opune variaţiei curentului. Cu un curent ce <i>descreşte</i>, polaritatea tensiunii este orientată asfel încât să menţină curentul la valoarea sa precedentă. În acest scenariu, bobina se comportă precum o <i>sursă</i>, cu partea negativă a tensiunii induse la capătul de ieşire al electronilor, iar partea pozitivă la capătul de intrare. Cu cât curentul descreşte mai rapid, cu atât bobina va produce o tensiune mai mare, în încercarea sa de menţinere constantă a curentului prin eliberarea energiei stocate spre circuit.</p>

<p>Din nou, cantiatea de tensiune la bornele unei bobine perfect este direct proporţională cu rata variaţiei curentului prin aceasta. Singura diferenţa între cazurile de creştere şi descreştere ale curentului este polaritatea tensiunii induse. Pentru aceeiaşi rată de creştere sau descreştere (variaţie) a curentului cu timpul, magnitudinea (valoarea absolută) a tensiunii va fi aceeiaşi. De exemplu, o variaţiei de di/dt = 2 A/s va produce aceeiaşi cantitate de tensiune indusă la bornele unei bobine precum o variaţie de di/dt = -2 A/s, însă de polaritate diferită.</p>

<p>Dacă variaţia curentului prin circuit este foarte rapidă, se vor produce căderi de tensiuni foarte mari. Să considerăm următorul circuit:</p>

<p><img src="../poze/00410.png" alt="circuit electric"/></p>

<p>În acest circuit, un neon este conectat la bornele unei bobine. Un întrerupător este folosit pentru controlul curentului din circuit, iar puterea din circuit este generată de o baterie de 6 volţi. Când întrerupătorul este închis, bobina se va opune pentru scurt timp variaţiei curentului de la 0 (circuit deschis) la o anumită valoare (circuit închis), dar căderea de tensiune la bornele sale va fi foarte mică. Pentru ionizarea gazului din interiorul neonului, acesta nu poate fi aprins de cei 6 volţi produşi de baterie, sau de căderea mică de tensiune datorată variaţiei curentului prin bobină la închiderea întrerupătorului:</p>

<p><img src="../poze/00411.png" alt="circuit electric"/></p>

<p>Când circuitul este deschis însă, întrerupătorul introduce o rezistenţă extrem de mare în circuit (rezistenţa aerului dintre contactele sale). Această introducere bruscă a unei rezistenţe foarte mari în circuit rezultă în scăderea aproape instantă a curentului din circuit la valoarea zero. Matematic, termenul di/dt va avea o valoare foarte mare, negativă. O asemenea variaţie puternică a curentului de la o anumită valoare la zero într-un interval de timp foarte scurt, va induce o tensiune foarte mare la bornele bobinei, de polaritate negativă în stânga şi pozitivă în dreapta, chiar dacă doar pentru un scurt moment până când curentul scade la zero:</p>

<p><img src="../poze/00412.png" alt="circuit electric"/></p>

<p>Pentru efect maxim, marimea bobine ar trebuie să fie cât mai mare posibil (o inductanţă de cel puţin 1 Henry).</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>