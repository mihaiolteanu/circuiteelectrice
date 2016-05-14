<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Măsurarea tensiunii</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Măsurarea tensiunii</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Multimetrul analogic şi digital</h2>

<p>Multimetrul este un instrument electric cu ajutorul căruia se poate măsura tensiunea, curentul şi rezistenţa. Multimetrele digitale dispun de afişaje digitale, precum ceasurile digitale, pentru indicarea acestor mărimi. Multimetrele analogice indică mărimile de mai sus prin intermediul unui ac indicator în lungul unei scale gradate.</p>

<img src="../poze/05035.png" alt="multimetru analogic şi digital"/>

<p>Multimetrele analogice sunt de obicei mai ieftine decât variantele digitale. De asemenea, ele sunt mult mai utile pentru începători, ca şi instrument de învăţare. Dacă aveţi posibilitatea, cumpăraţi un multimetru analogic înainte de a achiziţiona unul digital. Până la urmă, ar fi bine să posedaţi ambele tipuri de aparate pentru realizarea acestor experimente.</p>

<h2>Scopul experimentului</h2>

<p>În toate experimentele prezentate în această carte vom folosi un anumit echipament de test pentru determinarea unor aspecte ale electricităţii ce nu le putem vedea, simţi, auzi, gusta sau mirosi direct. Electricitatea, cel puţin în cantităţi mici, nu poate fi sesizată de corpul uman. Din acest motiv, cel mai important „ochi” din domeniul electricităţii şi al electronicii pe care îl veţi folosi va fi multimetrul. În acest experiment aşadar, ne vom familiariza cu măsurarea tensiunii.</p>

<p>Multimetrul pe care l-aţi achiziţionat are mai mult ca sigur nişte instrucţiuni de bază. Citiţi-le cu atenţie înainte de al utiliza! Dacă multimetrul este digital, va necesita o baterie pentru funcţionare. Dacă este analogic, nu aveţi nevoie de o baterie pentru funcţionarea lui.</p>

<p>Unele multimetre digitale au o ajustare automată. Un astfel de instrument are doar câteva poziţii pe care le putem selecta. Cele cu ajustare manuală au mai multe poziţii pentru fiecare mărime de bază: câteva poziţii pentru tensiune, câteva pentru curent şi câteva pentru rezistenţă. Auto-ajustarea este domeniul aparatelor de măsură mai scumpe, fiind analoage maşinilor cu schimbător automat. Un astfel de aparat de măsură „schimbă vitezele” automat pentru indentificarea celui mai bun domeniu de măsură în cazul fiecărei măsurători.</p>

<h2>Bateria electrică</h2>

<p>Poziţionaţi selectorul multimetrului vostru pe poziţia de curent continuu (DC), pe cea mai mare valoare disponibilă. În această situaţie, multimetrul îndeplineşte funcţia de voltmetru. Aduceţi sonda roşie în contact cu borna pozitivă (+) a bateriei, iar sonda neagră cu borna negativă (-). Aparatul de măsură ar trebui acum să vă indice o anumită valoare. Inversaţi contactele (poziţia sondelor) între ele dacă indicaţia aparatului de măsură este negativă. În cazul unui multimetru analogic, o valoare negativă este observată prin deplasarea acului indicator în stânga, şi nu în dreapta.</p>

<img src="../poze/05036-1.png" alt=""/>

<p>Dacă aveţi un multimetru manual, iar selectorul a fost pus pe cea mai mare valoare, indicaţia acestuia va fi slabă. Deplasaţi selectorul la următorul nivel inferior, şi reconectaţi bateria. Indicaţia ar trebui să fie mai puternică acum. Pentru obţinerea celor mai bune rezultate, mutaţi selectorul pe valoarea cea mai mică, dar astfel încât să nu depăşiţi scara de măsură a aparatului. Un multimetru digital va indica o astfel de „abatare” prin notaţia „OL” sau o serie de linii întrerupte, în funcţie de model. Măsuraţi mai multe tipuri de bateri pentru a vă obişnui cu selectarea poziţiilor optime.</p>

<p>Ce se întâmplă dacă atingeţi doar o sondă la un singur capăt al bateriei? Cum ar trebui să conectăm aparatul de măsură la bornele bateriei pentru a obţine o indicaţie? Ce ne spune acest lucru despre utilizarea voltmetrului şi despre natura tensiunii? Există tensiune într-un singur punct?</p>

<h2>Măsurarea căderii de tensiune produsă de un LED</h2>

<p>Luaţi din nou multimetrul, şi poziţionaţi selectorul pe cea mai mică valoare (DC). Atingeţi cu cele două sonde terminalii unui LED. Un LED, este un dispozitiv proiectat astfel încât să producă lumină la trecerea unui curent foarte mic prin el. Dar LED-urile pot şi să <i>genereze</i> o tensiune de curent continuu când sunt expuse la lumină, asemănător unei celule solare. Îndreptaţi LED-ul spre o sursă puternică de lumină, cu multimetrul conectat la bornele acestuia. Observaţi indicaţia aparatului de măsură:</p>

<img src="../poze/05037.png" alt="multimetru şi LED"/>

<p>Bateriile generează tensiune electrică prin intermediul reacţiilor chimice. Când o baterie „moare”, acest lucru înseamnă de fapt că resursele sale chimice s-au terminat. Un LED, pe de altă parte, nu se bazează pe o formă de energie internă pentru generarea tensiunii electrice. Acesta <i>transformă</i> energia optică în energie electrică. Atâtă timp cât va exista o sursă de lumină întreptată asupra acestuia, LED-ul va produce tensiune.</p>

<h2>Generatorul electric</h2>

<p>O altă sursă potenţială de tensiune electrică prin transformarea energiei este generatorul. Luaţi un motor mic de curent continuu. Acesta se găseşte de obicei în jucării sau alte dispozitive electrice de mici dimensiuni, de unde îl puteţi „împrumuta”, sau îl puteţi cumpăra ca atare. Orice motor funcţionează ca şi generator dacă învărtim axul acestuia.</p>

<p>Conectaţi voltmetrul vostru la bornele motorului, la fel ca în cazul LED-ului sau al bateriei. Învârţiţi axul motorului cu mână. Aparatul de măsură ar trebui să indice o cădere de tensiune. Dacă nu puteţi ţine ambele sonde pe bornele bateriei, puteţi folosi terminali tip crocodil, astfel:</p>

<img src="../poze/05038.png" alt="multimetru şi motor electric"/>

<p>Puteţi determina relaţia dintre tensiune şi viteza de rotaţie a axului? Ce se întâmplă cu indicaţia voltmetrului dacă măriţi viteza acestuia? Inversaţi apoi direcţia de rotaţie. Rezultatul este schimbarea polarităţii căderii de tensiune create de generator. Voltmetrul indică polaritatea prin intermediul direcţiei acului indicator (stânga sau dreapta, aparat analog) sau prin semn (plus sau minus, aparat digital).</p>

<p>Când sonda roşie este pozitivă (+) iar cea neagră negativă (-), voltmetrul va indica „direcţia” normală a căderii de tensiune. Dacă polaritatea tensiunii aplicate este inversă (negativ pe sonda roşie şi pozitiv pe cea neagră), indicaţia aparatului de măsură va fi „inversă”.</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>