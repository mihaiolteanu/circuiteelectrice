<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Activitatea electronilor în reacţiile chimice</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Activitatea electronilor în reacţiile chimice</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Până în acest moment nu am discutat în detaliu modul de funcţionare al bateriilor, ci am presupus pur şi simplu că acestea produc o tensiune constantă la bornele lor printr-un proces „misterios”. În cele ce urmează vom explora procesul în mare urmând să facem nişte precizări cu privire la utilizarea reală a bateriilor în sistemele electrice.</p>

<p>Am discutat în primul capitol despre conceptul de <i>atom</i>. Atomii sunt compuşi din părţi mai mici denumite <i>particule</i>. Particulele elementare dintr-un atom sunt electronii, protonii şi neutronii. Fiecare dintre aceste particule joacă rolul ei în comportamentul atomului. Activitatea electrică implică mişcarea electronilor, iar identitatea chimică (ce determină în mare tipul de material: coductiv/izolator) este determinată de numărul protonilor din nucleu.</p>

#+CAPTION: structura atomului
[[../poze/00006.png]]

<p>Dislocarea protonilor din nucleul atomului este foarte greu de realizat, de aici şi stabilitatea identităţii chimice a atomilor în general. Îndepărtarea electronilor, în schimb, este mult mai uşor de realizat. După cum am văzut, frecarea este unul dintre procedeele prin care electronii pot fi „mutaţi” de pe un material pe altul, la fel este şi căldura, procedeu evidenţiat în cazul termocuplei.</p>

<p>Electronii pot servi însă şi unui alt scop: legarea atomilor între ei. Această legare a atomilor prin intermediul electronilor poartă numele de <i>legătură chimică</i>. O reprezentare simplificată a unei asemenea legături dintre doi atomi arată asfel:</p>

#+CAPTION: legătură chimică între doi atomi
[[../poze/00257.png]]

<p>Există mai multe tipuri de legături chimice, cea de sus fiind una <i>covalentă</i>, caracterizată prin împărţirea electronilor de către atomi. Deoarece aceste legături sunt bazate pe legături formate de electroni, ele nu pot fi mai puternice decât gradul de imobilitate al electronilor constituenţi. Ceea ce vrem să spunem este că aceste legături chimice pot fi create sau desfăcute de aceleaşi forţe ce induc deplasarea electronilor: căldura, lumina, frecarea, etc.</p>

<p>Atunci când atomii sunt legaţi între ei prin legături chimice, aceştia formează materiale cu proprietăţi unice numite <i>molecule</i>. Desenul de mai sus, cu doi atomi de acelaşi tip legaţi, este un exemplu de moleculă simplă. Majoritatea moleculelor sunt formate însă din tipuri diferite de atomi. Chiar şi moleculele formate din atomi de acelaşi tip pot prezenta proprietăţi fizice radical diferite.</p>

<p>Însă, pentru studierea bateriilor, trebuie să introducem un alt tip de legătură chimică, cea <i>ionică</i>. Aceasta diferă faţă de legătura covalentă prin faptul că un atom al moleculei posedă un exces de electroni iar celălalt atom are electroni în minus; în acest caz, legătura dintre atomi este rezultatul atracţiei electrostatice dintre cele două sarcini diferite („+” şi „-”). Atunci când legăturile ionice iau naştere din atomi neutrii, există de fapt un transfer de electroni dintre atomii pozitivi şi negativi din punct de vedere electric. Este bine de ştiut faptul că moleculele conţine de obicei ambele tipuri de legături chimice. Hidroxidul de sodiu (NaOH) este format dintr-o legătură ionică dintre atomul de sodiu (pozitiv) şi ionul hidroxil (negativ). Ionul hidroxil formează o legătură covalentă (simbolizată prin bară) între hidrogen şi atomii de oxigen:</p>

<p>&nbsp;Na<sup>+</sup>  O—H<sup>-</sup></p>

<p>Sodiul pierde doar un electroc, sarcina lui fiind +1 în exemplul de mai sus. Dacă un atom pierde mai mult de un electron, sarcina rezultată poate fi desemnată prin +2, +3, +4, etc. sau printr-o cifră romană în paranteze ce desemnează starea sa de oxidare (pierderea electronilor), asfel: (I), (II), (IV), etc. Unii atomi pot avea mai multe stări de oxidare, şi este bine să precizăm starea de oxidare în formula moleculară pentru evitarea confuziilor.</p>

<p>Formarea ionilor şi a legăturilor ionice din atomi neutrii sau molecule (sau <i>invers</i>) presupune transferul de electroni. Acest transfer poate fi folosit pentru generarea curentului electric. Un dispozitiv construit special în acest scop poartă denumirea de <i>pilă voltaică</i> sau, pe scurt, <i>pilă</i>; aceasta este de obicei formată din doi electrozi metalic introduşi într-o substanţă chimică denumită <i>electrolit</i> special concepută pentru facilitarea unei asfel de reacţii electrochimice (oxidare/reducere):</p>

#+CAPTION: pilă voltaică
[[../poze/00258.png]]

<p>Pila folosită pentru automobile este de obicei cea de „plumb-acid”. Electrodul negativ este confecţionat din plumb (Pb), iar cel pozitiv din dioxid de plumb (IV) (PbO<sub>2</sub>), ambele substanţe fiind metalice. Soluţia de electrolit este o soluţie diluată de acid sulfuric (H<sub>2</sub>SO<sub>4</sub> + H<sub>2</sub>O). Dacă electrozii pilei sunt conectaţi la un circuit extern, asfel încât să fie posibilă deplasarea electronilor de la un electrod la celălalt, atomii de plumb (IV) din electrodul pozitiv (PbO<sub>2</sub> vor câştiga fiecare câte doi electroni pentru a produe Pb(II)O. Atomii de oxigen rezultaţi se vor combina cu ionii pozitivi de hidrogen (H)<sup>+</sup> şi formează apă (H<sub>2</sub>O). Această deplasare a electrolinor spre electrodul PbO<sub>2</sub> îi conferă o sarcină pozitivă. Atomii de plumb din electrodul negativ cedează fiecare câte doi electroni pentru a produce plumb Pb(II), care în conbinaţie cu ionii de sulfat (SO<sub>4</sub><sup>-2</sup>), produşi prin disociaţia ionilor de hidrogen (H<sup>+</sup>) din acidul sulfuric (H<sub>2</sub>SO<sub>4</sub>), formează sulfatul de plumb (PbSO<sub>4</sub>. Deplasarea electronilor dinspre electrodul de plumb îi conferă sarcina electrică negativă. Aceste reacţii sunt reprezentate mai jos:</p>

#+CAPTION: descărcarea pilei de plumb-acid
[[../poze/00259.png]]

<p>Acest proces prin care pila produce energie pentru alimentarea sarcinii se numeşte <i>descărcare</i> şi provine de la faptul ca aceasta îşi epuizează rezervele chimice interne în urma acestui proces. Teoretic, după ce întreaga cantitate de acid sulfuric se consumă, din pilămai rămân cei doi electrozi de sulfat de plumb (PbSO<sub>4</sub>) şi o soluţie electrolitică de apă pură (H<sub>2</sub>O); această situaţie nu mai permite formarea legăturilor ionice adiţionale. În acest moment, pila se spune că este <i>complet descărcată</i>. Stadiul de încărcare poate fi determinat în acest caz de concentraţia soluţiei acide.</p>

<p>Nu toate pilele voltaice sunt construite pe baza aceloraşi reacţii chimice, dar lucrul cel mai important de reţinut este că electronii sunt „motivaţi” să se deplaseze între cei doi electrozi de către reacţiile ionice dintre moleculele electrozilor şi moleculele electrolitului. Reacţia este activată atunci când există un drum exterior închis (complet) pentru formarea curentului electric. La întreruperea acestui circuit, reacţiile chimice încetează.</p>

<p>Valoarea tensiunii generate de o celulă depinde de tipul reacţiilor chimice ce au loc în interiorul acesteia, mai bine spus, de configuraţia chimică a celulei. În exemplul de mai sus, pila de plumb-acid prezintă la bornele sale o tensiune nominală de 2.04 V, atunci când este încârcată la maxim (cocentraţia de acid ridicată). <i>Pila Edison</i>, confencţionată din oxid de nickel (electrodul pozitiv) şi fier (electrodul negativ), cu o soluţie electrolitică de hidroxid de potasiu generează o tensiune nominală de 1.2 V.</p>

<h3>Încărcarea pilei voltaice</h3>

<p>În cazul anumitor tipuri de pile, reacţiile chimice pot fi inversate forţând curgerea curentului în sens invers prin pilă. Acest proces poartă denumirea de <i>încărcare</i>. O asfel de pila reîncărcabilă se numeşte <i>pilă secundară</i>. O pilă a cărei compoziţii chimice nu poate fi readusă la starea iniţială se numeşte <i>pilă primară</i>.</p>

<p>Încărcarea unei pile de plumb-acid printr-o sursă de curent externă duce la inversarea reacţiilor chimice din interiorul acesteia:</p>

#+CAPTION: încărcarea pilei de plumb-acid
[[../poze/00393.png]]

<p class="sumar">Sumar:</p>
<ul>
	<li></li>
	<li></li>
	
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
