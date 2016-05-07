<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Joncţiunea P-N</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Joncţiunea P-N</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Dacă un bloc de material semiconductor de tip P este adus în contact cu un bloc de material semiconductor de tip N (figura de mai jos (a)), rezultatul este nesatisfăcător. Vom avea două blocuri conductoare aflate în contact unul cu celălalt, dar fără proprietăţi unice. Problema constă în existenţă a două corpuri cristaline distincte şi separate. Numărul de electroni este echilibrate de numărul de electroni în ambele blocuri. Asfel, niciunl dintre cele două blocuri nu are o sarcină netă.</p>

<p>Totuşi daca un <i>singur</i> cristal semiconductor este confecţionat (dopat) cu un material de tip P la un capăt, şi un material de tip N la celălalt capăt, combinaţia respectivă prezintă unele proprietăţi unice. În materialul de tip P, majoritatea purtătorilor de sarcină sunt goluri, aceştia putându-se deplasa liberi prin structura cristalului. În materialul de tip N majoritatea purtătorilor de sarcină sunt electroni, şi aceştia putându-se deplasa liberi prin structura cristalului. În jurul joncţiunii însă (intersecţia dintre cele două tipuri de materiale), electronii materialului N trec peste joncţione şi se combină cu golurile din materialul P (figura de jos, (b)). Regiunea materialului P din apropierea joncţiunii capătă o sarcină nagativă datorită electronilor atraşi, iar Regiunea materialului N din apropierea joncţiunii capătă o sarcină pozitivă datorită electronilor cedaţi. Stratul subţire a acestei structuri cristaline, dintre cele două sarcini de semne contrare, va fi „golit” de majoritatea purtătorilor de sarcină, prin urmare, acesta este cunoscută sub numele de <i>zona de golire</i>, şi devine un material semiconductor pur, non-conductor. De fapt, aproape că avem un material izolator ce separă cele două regiuni conductive P şi N.</p>

<p><img src="../poze/03408.png" alt="(a) două blocuri P şi N de material semiconductor nu au nicio proprietate remarcabilă; (b) un singur cristal dopat atât cu impurităţi P cât şi cu impurităţi N duce la formarea unei bariere de potenţial"/></p>

<p>Această separare de sarcini în jurul joncţiunii P-N (zona de golire) constituie în fapt o barieră de potenţial. Această barieră de potenţial trebuie să fie „învinsă” de o sursă de tensiune externă pentru a se putea comporta precum un material conductor. Formarea joncţiunii şi a barierei de potenţial are loc în timpul procesului de fabricaţie. „Înălţimea” barierei de potenţial depinde de materialele folosite pentru fabricarea acestuia. Joncţiunile PN din siliciu au o barieră de potenţial mai ridicată decât joncţiunile fabricate din germaniu.</p>

<h3>Polarizarea directă a joncţiunii PN</h3>

<p>În figura de mai jos (a), bateria este poziţionată asfel încât electronii să se deplaseze dinspre terminalul negativ înspre materialul de tip N. Aceşti electroni se adună în jurul joncţiunii. Terminalul pozitiv înlătură electronii din materialul semiconductor de tip P, ceea ce duce la crearea golurilor ce se îndreaptă şi ele spre joncţiune. Dacă tensiunea bateriei este suficient de mare pentru a depăşi potenţialul joncţiunii (0.6 V în cazul siliciului), electronii materialului N şi golurile materialului P se combină şi se anihilează reciproc. Acest lucru duce la crearea unui spaţiu liber în structura materialului ce poate susţine o deplasare şi mai mare de purtători de sarcină spre joncţiune. Asfel, curenţii purtătorilor de sarcină majoritari de tip N (electroni) şi de tip P (goluri) se deplasează înspre joncţiune. Recombinaţia ce are loc la joncţiune permite curentului bateriei să se „deplaseze” prin joncţiunea PN a unei asfel de diode. În acest caz, spunem că o asfel de joncţiune este polarizată direct.</p>

<p><img src="../poze/03409.png" alt="polarizarea directă a joncţiunii PN"/></p>

<h3>Polarizarea inversă a joncţiunii PN</h3>

<p>Dacă polaritatea bateriei este inversată (figura de sus (b)), majoritatea purtătorilor de sarcină vor fi atraşi dinspre joncţiune spre terminalii bateriei. Terminalul pozitiv al bateriei atrage purtătorii de sarcină majoritari (electronii) ai materialului N, iar terminalu negativ al bateriei atrage purtătorii de sarcină majoritari (golurile) ai materialului P. Acest fapt duce la creşterea grosimii zonei de golire non-conductive. Nu are loc nicio recombinare a purtătorilor de sarcină, prin urmare, nu are loc nicio conducţie. În acest caz, spunem că joncţiunea PN este <i>polarizată invers</i>.</p>

<p>Ceea ce am creat mai sus prin doparea aceluiaşi cristal atât cu material de tip N cât şi cu material de tip P, este o diodă.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Joncţiunile PN sunt fabricate dintr-o bucată monocristalină de material semiconductor şi conţin atât regiuni dopate cu materiale de tip P cât şi regiuni dopate cu materiale de tip N, regiuniu separate printr-o joncţiune</li>
	<li>Transferul electronilor de la materialul de tip N spre golurile materialului de tip P, produce o barieră de potenţial în jurul joncţiuni. Valoarea acesteia este de 0.6-0.7 V pentru siliciu, dar poate varia în cazul altor semiconductoare</li>
	<li>Joncţiunea PN polarizată direct, conduce curent electric</li>
	<li>Joncţiunea PN polarizată învers, nu conduce aproape deloc curent</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>