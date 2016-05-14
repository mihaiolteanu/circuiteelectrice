<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Pendulul electric</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Pendulul electric</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Condensatoarele stochează energie sub formă de câmp electric, iar această energie stocată se manifestă electric sub formă de potenţial: <i>tensiune statică</i>. Bobinele stochează energie sub formă de câmp magnetic, iar această energie stocată se manifestă electric sub formă cinetică: <i>curent</i>. Ambele elemente sunt însă feţele opuse ale aceleiaşi monede; ambele sunt elemente reactive ce stochează şi eliberează energie în două moduri complementare. Când aceste două tipuri de componente reactive sunt conectate împreună, rezultatul modului lor complementar de stocare a energiei este unul neobişnuit.</p>

<p>Dacă unul dintre cele două componente, fie condensatorul, fie bobina, este iniţial încărcat, cele două componente vor schimba energie între ele, de la unul la altul, creând propria lor tensiune şi curent alternativ. Dacă presupunem că ambele componente sunt supuse unei tensiuni aplicate brusc (de la o baterie, de exemplu), condensatorul se va încărca foarte repede, iar bobina se va opune variaţiei curentului; prin urmare condensatorul va fi încărcat, iar bobina descărcată:</p>

#+CAPTION: pendul electric - încărcarea circuitului; condansator încărcat la tensiunea de vârf, bobina descărcată, curent zero
[[../poze/02086.png]]

<p>Condensatorul va începe să-şi descarce energia înmagazinată pe bobină, prin urmare, tensiunea va descreşte. Între timp, bobina va conduce curent electric şi va înmagazina energie sub formă de câmp magnetic; rezultatul este creşterea curentului în circuit:</p>

#+CAPTION: pendul electric - descărcarea condensatorului, tensiunea descreşte; încărcarea bobine, curentul creşte
[[../poze/02087.png]]

<p>Bobina va continua să se încarce şi să menţină curgerea electronilor în circuit până când condensatorul va fi complet descărcat (tensiune zero la bornele sale):</p>

#+CAPTION: pendul electric - condensator complet descărcat, tensiune zero; bobină complet încărcată, curent maxim
[[../poze/02088.png]]

<p>Bobina va menţine curentul chiar şi fără existenţa unei tensiuni aplicate la bornele sale; de fapt, va genera o tensiune (precum o baterie) pentru menţinerea direcţiei curentului. Condensatorul, fiind elementul ce primeşte acest curent, va începe să acumuleze o sarcină de polaritate inversă faţă de polaritatea sa iniţială:</p>

#+CAPTION: pendul electric - încărcarea condensatorului, creşterea tensiunii; descărcarea bobine, descreşterea curentului
[[../poze/02089.png]]

<p>Atunci când curentul prin bobină se epuizează iar energia înmagazinată ajunge la zero, tensiunea condensatorului va fi maximă, şi de polaritate opusă tensiunii iniţiale:</p>

#+CAPTION: pendul electric - condensator încărcat complet, tensiune maximă; bobină descărcată complet, curent zero
[[../poze/02090.png]]

<p>Am ajuns acum la o situaţie foarte similară celei iniţiale: condensatorul este complet încărcat iar curentul prin circuit este zero (bobină descărcată). Condensatorul va începe (din nou) să se descarce prin/pe bobină, ducând la creşterea curentului (în direcţie opusă faţă de cazul iniţial) şi descreşterea tensiunii pe măsură ce energia înmagazinată de condensator tinde spre zero:</p>

#+CAPTION: pendul electric - condensatorul se descarcă, tensiunea descreşte; bobina se încarcă, curentul creşte
[[../poze/02091.png]]

<p>Într-un final, condensatorul se va descărca complet (zero volţi), iar bobina va deveni încărcată complet (curent maxim):</p>

#+CAPTION: pendul electric - condensator complet descărcat, tensiune zero; bobină complet încărcată, curent maxim
[[../poze/02092.png]]

<p>Bobina, încercând să menţină direcţia curentului, se va comporta din nou precum o sursă, generând tensiune electrică precum o baterie pentru menţinerea acestuia. În acest fel, condensatorul va începe să se încarce din nou, iar amplitudinea curentului din circuit va descreşte din nou:</p>

#+CAPTION: pendul electric - încărcarea condensatorului, creşterea tensiunii; descărcarea bobinei, descreşterea curentului
[[../poze/02093.png]]

<p>Până la urmă condensatorul se va încărca complet (din nou) pe măsură ce energia bobinei se apropie de zero. Tensiunea se va afla din nou la valoarea maximă pozitivă, iar curentul la zero. Acest ultim pas duce la completarea unei perioade pe parcursul cărei cele două componente au schimbat între ele aceeiaşi energie electrică:</p>

#+CAPTION: pendul electric - condensator încărcat complet, tensiune maximă; bobină descărcată complet, curent zero
[[../poze/02094.png]]

<p>Această oscilaţie a energie de la un component la altul va continua cu o amplitudine a semnalelor din ce în ce mai mică, descreştere datorată pierderilor de putere cauzate de rezistenţele parazite din circuit, până când întregul proces se opreşte cu totul. În mare, acest comportament este asemănător comportamentului pendulului: pe măsură ce masa pendului oscilează înainte şi înapoi, există o transformare continuă între energia cinetică (mişcare) şi energia potenţială (înălţime), asemănător circuitului format din bobină şi condensator.</p>

<p>În punctul în care înălţimea pendulului este maximă, masa acestuia se opreşte pentru o scurtă perioadă de timp, urmată de schimbarea direcţiei sale de mişcare. În acest punct, energia potenţială (înălţime) este maximă iar energia cinetică (mişcare) este zero. Pe măsură ce masa oscilează înapoi, trece rapid printr-un punct în care coarda este direcţionată perpendicular pe direcţia pământului. În acest punct, energia potenţială (înălţime) este zero iar energia cinetică (mişcare) este la valoarea sa maximă. Precum un circuit, oscilaţia înainte şi înapoi a pendului va continua cu o amplitudine a oscilaţiilor din ce în ce mai mică, descreştera datorată frecării cu aerul (rezistenţă) ce disipă energie. Tot precum în cazul circuitului de mai sus, poziţia şi viteza pendulului trasate pe un grafic (timp-amplitudine) trasează două unde sinusoidale defazate între ele cu 90<sup>o</sup>.</p>

#+CAPTION: principiul pendulului fizic şi formele de undă descrise de acesta
[[../poze/02095.png]]

<p>În fizică, această oscilaţie sinusoidală naturală este cunoscută sub numele de <i>mişcare armonică simplă</i>. Aceleaşi principii stau însă şi la baza circuitelor formate din condensator şi bobină, de genul celui văzut mai sus. O proprietate interesantă al oricărui tip de pendul, este că perdioada sa depinde de lungimea braţului şi nu de greutatea masei de la capătul acesteia. De aceea pendulul va continua să oscileze la aceeiaşi frecvenţă pe măsură ce amplitudinea oscilaţiilor scade. Rata oscilaţiilor este independentă de <i>cantitatea</i> de energie stocată în pendul.</p>

<p>Acelaşi lucru este valabil şi pentru circuitul bobină/condensator. Rata oscilaţiilor este stric dependentă de mărimea condensatorului şi a bobinei, şi nu de cantitatea de tensiune (sau curent) disponibilă în circuit. Proprietatea sa de a menţine o singură frecvenţă, naturală, indiferent de valoarea energiei stocate, este de o mare importanţă în realizarea circuitelor electric.</p>

<p>Totuşi, această tendinţă de oscilaţie, sau <i>rezonanţă</i>, la o anumită frecvenţă, nu este limitată doar la circuitele concepute special în acest scop. De fapt, aproape orice circuit de curent alternativ ce conţine o combinaţie de capacităţi şi inductivităţi (circuit „LC”) tinde să manifeste efecte neobişnuite atunci când frecvenţa sursei de alimentare în curent alternativ se apropie de frecvenţa naturală. Acest lucru este valabil indiferent de scopul pentru care circuitul a fost creat.</p>

<p>Dacă frecvenţa sursei de alimentare a circuitului este exact frecvenţă naturală de oscilaţie a combinaţiei LC, spunem că circuitul se află într-o stare de <i>rezonanţă</i>. Efectele neobişnuite vor atinge un maxim în această condiţie de rezonanţă. Din acest motiv, trebuie să calculăm din timp frecvenţa de rezonanţă pentru diferite combinaţii de L şi C, şi să ţinem cont de efectele acesteia asupra circuitului.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Un condensator şi o bobină conectate împreună formează un circuit oscilator, ce rezonează (oscilează) pe o anumită frecvenţă. La această frecvenţă, energia este transferată de la condensator spre bobină şi invers sub formă de tensiune şi curent alternativ defazate între ele cu 90<sup>o</sup></li>
	<li>Atunci când frecvenţa sursei de alimentare în curent alternativ este exact egală cu frecvenţa naturală de oscilaţie a circuitului LC, spunem că circuitul se află într-o stare de <i>rezonanţă</i></li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
