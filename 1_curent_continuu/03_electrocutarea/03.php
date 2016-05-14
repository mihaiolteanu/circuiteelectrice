<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Legea lui Ohm (din nou!)</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Legea lui Ohm (din nou!)</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>În cadrul teoriei siguranţei electrice este rostită adeseori fraza: <i>Nu tensiunea omoară, ci curentul!</i> Deşi există o urmă de adevăr în această zicală, trebuie să înţelegem mult mai multe despre pericolul electrocutării decât atât. </p>

<p>Principiul conform căruia „curentul omoară” este în esenţă corect. Curentul electric este cel responsabil de arderea ţesuturilor, blocarea muşchilor şi intrarea inimii în fibrilaţie. Totuşi, curentul electric nu poate exista singur: trebuie să existe o anumită cădere de tensiune pentru motivarea deplasării electronilor prin corpul victimei. Corpul persoanei are şi el o anumită rezistenţă electrică, rezistentă ce trebuie luată de asemenea în considerare.</p>

<p>Conform legii lui Ohm, curentul este egal cu raportul dintre tensiune şi rezistenţă:</p>

<p><b>I = E / R</b></p>

<p>Cantitatea de curent printr-un corp este egală cu raportul dintre valoarea tensiunii aplicate între două puncte distincte de pe corp şi rezistenţa electrică oferită de acesta între cele două puncte. Evident, cu cât valoarea tensiunii disponibile pentru „împingerea” electronilor este mai mare, cu atât aceştia se vor deplasa mai uşor (curent mai mare) pentru aceeiaşi valoare a rezistenţei. De aici rezultă si pericolul tensiunii înalte: tensiunea înaltă înaseamnă un potenţial mai mare de trecere a unor cantităţi mari de curent prin corp. Invers, cu cât corpul oferă o rezistenţă electrică mai mare împotriva curentului, cu atât deplasarea electronilor este mai lentă (curent mai mic). Pericolul tensiunii este dat până la urmă de valoarea rezistenţei totale disponibilă în circuit pentru împiedicarea transferului de electroni prin corp.</p>

<p>Rezistenţa corpului nu este nici ea o valoarea fixă. Aceasta variază de la o persoană la alta şi nu este aceeiaşi de-a lungul timpului. Dintre factorii ce afectează rezistenţa totală a unei persoane se numără procentul de grăsime şi gradul de hidratare al organismului.</p>

<p>Rezistenţa organismului depinde şi de modul de realizare al contactului dintre fir şi piele: între cele două mâini, între mână şi picior, între cele două picioare, între picior şi cot, etc. Sudoarea, fiind un lichid bogat în săruri şi minerale, este un conductor excelent de electricitate. La fel este şi sângele. Prin urmare, contactul realizat cu o mână transpirată sau o rană deschisă va reduce substanţial valoarea rezistenţei disponibile.</p>

<p>Dacă măsurăm rezistenţa electrică între cele două mâini, valoarea indicată de un multimetru va fi de aproximativ un milion de ohmi (1 MΩ) (ţinând cele două sonde, fiecare într-o mână). Multimetrul indică o rezistenţă mai mică dacă strângem puternic sondele în mână decât atunci când le ţinem uşor.</p>

<h3>Valoarea curentului peste care acesta devine periculos</h3>
<p>Care este valoarea pentru care curentul este periculos? Răspunsul la această întrebare depinde şi el de câţiva factori. Fiecare corp este diferit din punct de vedere chimic, iar acest lucru duce la reacţii diferite la trecerea aceluiaşi curent prin două corpuri diferite. În ciuda acestor diferenţe, de-a lungul timpului s-au stabilit unele valori cu ajutorul testelor ce indică efectele curentului electric asupra organismului. Toate valorile curenţilor sunt date în miliamperi (1 mA = 0.001 A):</p>

<b><pre>
EFECT ASUPRA CORPULUI  	CURENT CONTINUU   CURENT ALTERNATIV (60 Hz)   CURENT ALTERNATIV (10 kHz)
--------------------------------------------------------------------------------------------------- 
Senzaţia uşoară         Bărbaţi = 1.0 mA       	0.4 mA                      7 mA 
de gâdilire         	Femei = 0.6 mA         	0.3 mA                      5 mA 
--------------------------------------------------------------------------------------------------- 
Pragul de               Bărbaţi = 5.2 mA       	1.1 mA                      12 mA 
percepţie               Femei = 3.5 mA         	0.7 mA                      8 mA 
--------------------------------------------------------------------------------------------------- 
Apariţia durerii,       Bărbaţi = 62 mA         9 mA                        55 mA 
dar se poate menţine    Femei = 41 mA           6 mA                        37 mA 
controlul voluntar
al muşchilor                                           
---------------------------------------------------------------------------------------------------
Apariţia durerii,       Bărbaţi = 76 mA        	16 mA                       75 mA 
victima nu poate lăsa   Femei = 51 mA          	10.5 mA                     50 mA 
firul din mână
--------------------------------------------------------------------------------------------------- 
Durere severă,          Bărbaţi = 90 mA        	23 mA                       94 mA 
apar dificultăţi        Femei = 60 mA          	15 mA                       63 mA 
de respiratie                                                    
--------------------------------------------------------------------------------------------------- 
Posibilitatea         	Bărbaţi = 500 mA       	100 mA             
apariţiei fibrilaţiei   Femei = 500 mA         	100 mA             
inimii după 3 secunde                                              
--------------------------------------------------------------------------------------------------- 
</pre></b>

<p>Atenţie, aceste date sunt doar aproximative, pentru că fiecare individ s-ar putea să reacţioneze diferit la trecerea curentului prin organism. S-a sugerat că o valoarea a curentului de doar 17 mA (<span class="important">0.017 A!</span>) este suficientă în anumite condiţii pentru inducerea fibrilaţiei inimii atunci când este aplicată de-a lungul pieptului. </p>

<h3>Scenarii</h3>
<p>Să presupunem de exemplu că am prinde în ambele mâini terminalele unei surse de tensiune alternativă la o frecvenţă de 60 Hz. Care este valoarea tensiunii necesare pentru a produce un curent de 20 mA (suficient pentru a face imposibilă desprinderea voluntară de pe fir) în condiţiile în care pielea este uscată şi curată? Folosim legea lui Ohm pentru a determina această valoare:</p>

<p>E = IR </p>
<p>E = (20 mA)(1 MΩ) </p>
<p>E = 20.000 V = 20 kV</p> 

<p>Ţineţi minte că aceasta este situaţia cea mai favorabilă victimei (piele curată şi uscată) din punct de vedere al siguranţei electrice, iar valoarea tensiunii de 20 kV este valoarea necesară inducerii tetanosului. Pentru cauzarea unui şoc electric dureros, este suficientă o valoare mult mai mică a tensiunii! De asemenea, ţineţi minte că efectele fiziologice ale curentului electric variază în mare măsură de la o persoană la alta, iar aceste valori calculate sunt <span class="important">doar aproximări</span>.</p>

<p>Dacă ne udăm pe mâini pentru a încerca să simulăm transpiraţia, rezistenţă electrică dintre cele două mâini scade până la o valoare de aproximativ 17.000 de ohmi (17 kΩ) (încercaţi să folosiţi un multimetru în diferite scenarii pentru calcularea rezistenţei electrice dintre diferite puncte ale corpului dumneavoastră!), atingând cu doar un deget fiecare dintre cele două sonde. O recalculare a tensiunii necesare inducerii unui curent de 20 mA, duce la următorul rezultat:</p>

<p>E = IR</p>
<p>E = (20 mA)(17 kΩ) </p>
<p>E = 340 V</p>

<p>În această situaţie realistă, este nevoie de o cădere de tensiune de doar 340 de volţi între cele două mâini pentru a induce un curent de 20 mA (vedeţi tabelul efectelor curentului asupra corpului). Totuşi, este posibilă apariţia unui şoc electric la o tensiune mult mai mică decât aceasta. În cazul în care rezistenţa electrică a corpului scade şi mai mult datorită contactului cu un inel purtat pe deget (un inel din aur în jurul degetului reprezintă un contact excelent pentru apariţia şocului electric), sau cu o suprafaţă de contact cu un corp metalic mare precum o ţeavă sau mânerul unei scule de lucru, valoarea rezistenţei poate coborâ până la valori în jurul a 1.000 de ohmi (1 kΩ), caz în care chiar şi o tensiune joasă prezintă un risc crescut de electrocutare:</p>

<p>E = IR</p>
<p>E = (20 mA)(1 kΩ)</p>
<p>E = 20 V</p>

<p>În această situaţie, sunt suficienţi 20 V pentru producerea unui curent de 20 mA prin corpul victimei, suficient pentru inducerea tetanosului. Luând în considerare faptul că, teoretic, 17 mA sunt suficienţi pentru inducerea fibrilaţiei inimii, o rezistenţă electrică de 1 kΩ între cele două mâini face ca o cădere de tensiune de <span class="important">doar 17 V</span> să fie extrem de periculoasă:</p>

<p>Şaptesprezece volţi nu este o valoare foarte mare din punct de vedere al reţelelor electrice. Desigur, aceasta este situaţia cea mai proastă posbil, cu o tensiune alternativă la 60 Hz şi conductivitate excelentă a corpului, dar utilitatea ei constă în exemplificarea faptului că o tensiune foarte mică se poate dovedi periculoasă în anumite condiţii şi situaţii.</p>

<p>Nu este necesar ca aceste condiţii de realizare a rezistenţei electrice de 1 kΩ să fie atât de extreme precum a fost prezentat mai sus. Rezistenţa corpului poate scădea odată cu aplicarea tensiunii (în special dacă tetanosul face ca victima să strângă şi mai bine conductorul în mână), asfel încât cu o tensiune constantă, severitatea unui şoc electric se poate agrava în timp după contactul iniţial. Ceea ce începe ca un şoc uşor - suficient pentru a „îngheţa” victima pe fir, asfel încât să nu-l poată lăsa din mână - se poate transforma într-un şoc suficient de sever pentru a cauza decesul pe măsură ce rezistenţa corpului scade iar curentul corespunzător creşte.</p>

<p>Următoarele seturi de date au fost prelevate prin intermediul cercetărilor asupra valorilor rezistenţei corpului între diferite puncte şi condiţii de contact:</p>

<b><pre>
----------------------------------------------------------------------------------------------------
|                Scenariu                       |   Rezistenţa electrică  |  Rezistenţa electrică  |
|                                               |   (condiţii uscate)     |  (condiţii umede)      |
----------------------------------------------------------------------------------------------------
| Fir atins de deget                            |   40 kΩ - 1 MΩ          |  4 kΩ - 15 kΩ          |
| Fir prins în mână                             |   15 kΩ - 50 kΩ         |  3 kΩ - 5 kΩ           |
| Cleşti metalici ţinuţi în mână                |   5 kΩ - 10 Ωk          |  1 kΩ - 3 kΩ           |
| Contact cu palma mâinii                       |   3 kΩ - 8 kΩ           |  1 kΩ - 2 kΩ           |
| Bară metalică de 4 cm ţinută cu o mână        |   1 kΩ - 3 kΩ           |  0.5 kΩ - 1,5 kΩ       |
| Bară metalică de 4 cm ţinuta cu ambele mâini  |   0.5 kΩ - 1,5 kΩ       |  0.25 kΩ - 0.75 kΩ     |
| Mână introdusă în lichid conductor            |   0.2 kΩ - 0.5 kΩ       |                        |
| Picior introdus în lichid conductor           |   0.1 kΩ - 0.3 kΩ       |                        |
----------------------------------------------------------------------------------------------------
</pre></b>

<p>Obervaţi valorile rezistenţei pentru scenariul contactului cu o bară groasă de 4 cm. Rezistenta măsurată în cazul contactului cu ambele mâini este exact jumătate cazului de contact cu o singură mână.</p>

#+CAPTION: realizarea contactului cu o bară metalică cu o singură mână
[[../poze/00382.png]]

<p>Cu ambele mâini pe bară, suprafaţa de contact este de două ori mai mare decât cu o singură mână. Aceasta este o lecţie importantă de ţinut minte: <span class="important">rezistenţa electrică dintre două puncte de contact scade odată cu creşterea suprafeţei contactului, toţi ceilalţi factori rămânând constanţi</span>. Dacă ţinem bara metalică cu ambele mâini, electronii au două căi <i>paralele</i> de curgere dinspre bară spre corp şi invers.</p>

#+CAPTION: realizarea contactului cu o bară metalică cu două mâini
[[../poze/00383.png]]

<p>Conexiunea în paralel rezultă tot timpul într-o rezistenţă electrică totală mai mică decât oricare dintre rezistenţele conectate luate individual.</p>

<p>În industrie, valoarea de <span class="important">30 V</span> este considerată ca fiind pragul maxim de siguranţă; tot ce depăşeşte această valoare reprezintă un potenţial pericol de electrocutare.</p>

<h3>Folosiţi o singură mână când lucraţi cu circuitele electrice</h3>

<p>Drumul urmat de curent prin corpul uman este foarte important atunci când vorbim de efectele sale asupra organismului. Curentul afectează orice fel de ţesut/muşchi prin care trece, şi din moment ce muşchii inimii şi ai plămânilor sunt cei mai importanţi pentru supravieţuire, şocurile de curent ce traversează pieptul trebuiesc privite ca fiind cele mai periculoase. Din această cauză, închiderea circuitului prin mâini (electrocutare) este cea mai probabilă cauză a accidentelor şi deceselor.</p>

<p>Pentru a veni în întimpinarea acestor scenarii neplăcute, <span class="important">este indicat să folosim o singură mână atunci când lucrăm cu circuitele electrice alimentate la tensiuni ce pot pune viaţa în pericol</span>; cealată mână se va ţine departe de sursa de tensiune, preferabil în buzunar pentru a nu atinge din greşeală circuitul. Evident, cel mai sigur este să lucrăm <span class="important">tot timpul</span> pe un circuit electric nealimentat, dar acest lucru nu este tot timpul practic sau posibil. Pentru lucrul cu o singură mână, este indicat să folosim mâna dreaptă, şi nu cea stângă, din două motive: majoritatea oamenilor sunt dreptaci (prin urmare îndemânarea este mai mare), iar inima este de obicei situată în partea stângă sau la mijlocul pieptului. Desigur, stângacii vor folosi mâna stângă pentru că deşi pericolul este mai mare în eventualitatea unui şoc electric, şansele apariţiei acestuia sunt mai mici datorită coordonării crescute faţă de mâna dreapta a acestora.</p>

<h3>Folosiţi echipamente şi instrumente de lucru izolate electric</h3>

<p>Cea mai bună protecţie împotriva electrocutării este rezistenţa electrică, iar aceasta poate fi adăugată rezistenţei corpului prin folosirea instrumentelor de lucru, echipamentelor, mănuşilor şi încălţămintei izolate electric. Curentul prin circuit (factorul periculos la electrocutare) este raportul dintre tensiunea electrică prezentă şi valoarea <span class="important">totală</span> a rezistenţei în calea curgerii curentului. Valoarea totală a rezistenţelor conectate în serie este mai mare decât valoarea oricărei rezistenţe luată individual (link!).</p>

#+CAPTION: rezistenţa corpului într-un circuit electric
[[../poze/00062.png]]
#+CAPTION: persoanele ce intră în contact direct cu sursele de tensiune: curentul este limitat doar de rezistenţa corpului
[[../poze/10029.png]]

<p>Circuitul echivalent pentru aceeiaşi situaţie, dar cu persoana în cauză purtând mănuşi şi încălţăminte de protecţie (izolate electric):</p>

#+CAPTION: rezistenţa corpului plus cea a încălţăminte şi mănuşilor de protecţie într-un circuit electric
[[../poze/00063.png]]
#+CAPTION: persoanele ce poartă mănuşi şi încălţăminte de protecţie: curentul este limitat acum de valoarea totală a rezistenţei din circuit
[[../poze/10030.png]]

<p>Deoarece curentul trebuie acum să treacă prin încălţăminte, prin corp şi prin mănuşi pentru a închide circuitul spre baterie, suma tuturor acestor rezistenţe se opune trecerii curentului într-o măsură mai mare decât oricare rezistenţă luată în parte.</p>

<h3>Siguranţa liniilor de înaltă tensiune</h3>
<p>Siguranţa este unul din motivele pentru care conductoarele electrice sunt de obicei acoperite cu izolaţie de plastic sau cauciuc: pentru a creşte substanţial valoarea rezistenţei dintre conductori şi persoanele ce ar putea veni în contact cu acestea, oricare ar fi motivul. Din păcate, izolarea conductorilor din liniile electrice de înaltă tensiune este mult prea scumpă datorită cantităţii de izolaţie necesară pentru protecţia în caz de contact accidental; siguranţa la electrocutare în acest caz este asigurată prin construirea şi menţinerea acestora la înălţime (de aici şi denumirea de linii electrice aeriene (LEA)), pentru a evita în primul rând contactul accidental dintre acestea şi persoanele neautorizate.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Efectele nedorite ale şocului electric asupra corpului sunt datorate curentului electric. O tensiune mai mare permite producerea unui curent mai mare şi mai periculos. Rezistenţa se opune curgerii curentului; creşterea rezistenţei electrice este o măsură bună de prevenire a şocului electric</li>
	<li>Orice tensiune mai mare de 30 V este capabilă să producă şocuri de curent periculoase</li>
	<li>Nu este indicat să purtăm inele sau brăţări atunci când lucrăm cu circuitele electrice. Acestea asigură un contact excelent între corp şi circuitul electric, şi pot chiar ele să conducă curenţi suficienţi de mari pentru producerea arsurilor chiar şi la tensiuni mici</li>
	<li>Chiar şi tensiunile mici pot fi periculoase într-un mod indirect. Aceste pot crea şocuri electrice suficiente pentru a arunca victima într-un loc periculos din încăpere (elicele unui motor, ţevi încinse, contact cu substanţe periculoase, etc.)</li>
	<li>Atunci când trebuie neapărat să lucrăm cu un circuit electric alimentat, este indicat să lucrăm doar cu o singură mână pentru a preveni închiderea circuitului prin piept</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
