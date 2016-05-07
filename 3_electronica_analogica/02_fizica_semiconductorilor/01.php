<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Fizica cuantică</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Fizica cuantică</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Invenţia dispozitivelor semiconductoare a constituit cu siguranţă o nouă revoluţie industrială. Aceste dispozitive au făcut posibilă miniaturizarea aparatelor electronice, încluzând calculatoarele personale, dezvoltarea echipamentelor medicale de diagnoză şi tratament, apariţia dispozitivelor de telecomunicaţii moderne şi multe altele.</p>

<p>Dar în spatele acestor realizări remarcabile se află o altă revoluţie a ştiinţei în general: <i>fizica cuantică</i>. Fără această nouă înţelegere a lumii, dezvoltarea dispozitivelor semiconductoare nu ar fi fost posibilă. Fizica cuantică este însă un domeniu al ştiinţei extrem de complicat, iar acest capitol reprezintă doar o mică introducere. Fără o înţelegere de bază a fizicii cuantice, sau cel puţin o înţelegere a descoperirilor ştiinţifice ce au dus la formularea acesteia, este imposibilă inţelegerea funcţionării dispozitivelor electronice semiconductoare. Majoritatea textelor de electronică încearcă să explice semiconductorii cu ajutorul fizicii „clasice”, lucru ce duce la o confuzie şi mai mare, nu la înţelegerea subiectului.</p>

<h3>Modelul atomului</h3>

<p>Majoritatea dintre noi am văzut modele ale atomului care arată aproximativ asfel:</p>

<p><img src="../poze/03120.png" alt="modelul lui Rutherford al atomului; electronii orbitează în jurul unui mic nucleu pozitiv"/></p>

<p>Acesta este cunoscut sub numele de „modelul lui Rutherford”. Centrul atomului este format din particule de materie minuscule denumite <i>protoni</i> şi <i>neutroni</i>; <i>electronii</i> orbitează în jurul nucleului precum planatele în jurul Soarelui. Nucleul prezintă o sarcină electrică pozitivă datorită prezenţei protonilor, neutronii neavând sarcină electrică, iar electronii ce orbiteză în jurul nucleului poartă o sarcină negativă, întreg ansamblul fiind asfel echilibrat din punct de vedere al sarcinilor electrice. Electronii sunt atraşi de protoni la fel cu planetele sunt atrase prin intermediu gravitaţiei de Soare, dar orbitele sunt stabile datorită mişcării electronilor. Acest model extrem de popular al atomului a fost prezentat pentru prima dată de Ernest Rutherford, ce a determinat pe cale experimentală, în jurul anului 1911, că sarcinile pozitive ale atomului sunt concentrate într-un nucleu dens şi de dimensiuni reduse, în contradicţie cu modelul propus de J.J. Thompson, care susţinea că aceste sarcini sunt distribuite egal în interiorul atomului.</p>

<p>Experimentul de împrăştiere al lui Rutherford a presupus bombardarea unei folii subţiri de aur cu particule Alfa, încărcate pozitiv. Rezultatele au fost neaşteptate. O mică parte din particule au fost deviate la unghiuri foarte mari. Câteva dintre particulele Alfa au fost deviate înapoi, la aproape 180<sup>o</sup>, dar majoritatea particulelor au trecut pur şi simplu prin folia de aur nedeviate, indicând faptul că cea mai mare parte a foliei era compusă din aer. Faptul că o mică parte a particulelor Alfa au fost deviate la unghiuri foarte mare nu se putea explica decât prin prezenţă unui nucleu minuscul, încărcat cu sarcină pozitivă.</p> 

<p><img src="../poze/03389.png" alt="Experimentul de împrăştiere al lui Rutherford; bombardarea unei foiţe de aur cu particule Alfa încărcate pozitiv"/></p>

<p>Cu toate că acest model al atomului era mai precis decât cel al lui Thompson, totuşi, nici acesta nu era perfect. Au fost întreprinse, prin urmare, noi experimente pentru determinarea structurii atomice corecte, iar aceste eforturi au dus la descoperirile bizare al fizicii cuantice. Astăzi, modelul atomului, aşa cum este el înţeles cel puţin, este destul de complex. Totuşi, comparaţia atomului „lui Rutherford” cu sistemul solar continuă să domine chiar şi în mediile academice.</p>

<p>De exemplu, următoarea descriere este luată dintr-o carte de electronică:</p>

<p><i>Electronii negativi ce orbitează în jurul nucleului pozitiv sunt atraşi de acesta, ceea ce ne face să ne întrebăm: de ce eletronii nu cad pe nucleul atomului? Răspunsul este că electronii rămân pe orbitele lor stabile datorită existenţei celor două forţe egale şi de sens contrar: forţa centrifugă exercitată asupra electronilor aflaţi în mişcare pe orbite ce anulează forţa centripetă ce atrage elecronii spre nucleu datorită sarcinilor opuse.</i></p>

<p>Urmând modelul lui Rutherford, autorul consideră electronii ca fiind bucăţi solide de materie ce se deplasează pe orbite circulare, atracţia faţă de nucleul încărcat cu o sarcină de semn contrar fiind balansată de mişcarea lor. Referirea la „forţa centrifugă” nu este corectă din punct de vedere tehnic (nici chiar pentru planete), dar este uşor de trecut cu vedere datorită popularităţii ei. În realitate, nu există nicio forţă care să împingă un corp, <i>orice</i> corp, departe de centrul orbitei acestuia. „Iluzia” este dată de faptul că un corp ce are inerţie tinde să se deplaseze în linie dreaptă, iar din moment ce o orbită este o deviaţie (acceleraţie) a deplasării în linie dreptă, există tot timpul o opoziţie faţă de forţa de atracţia a corpului spre centrul orbitei, fie că este forţă gravitaţională, atracţie electrostatică, sau orice altă forţă.</p>

<p>Însă, adevărata problemă a acestei explicaţii este idea că orbitele electronilor sunt circulare. Faptul că sarcinile electrice accelerate emit radiaţie electromagnetică se ştie încă de pe vremea lui Rutherford, iar acest lucur se poate dovedi pe cale experimentală. Din moment ce mişcare orbitală este o formă de acceleraţie (corpul ce orbitează este într-o accelarţie constantă faţă de mişcarea normală, liniară), electronii aflaţi în stare de orbitare ar trebui să „arunce” radiaţie precum o roată aflată în noroi. Dacă electronii ar pierde energie în acest mod, acesţia s-ar apropia din ce în ce mai mult de nucleu, rezultatul fiind o coliziune cu nucleul pozitiv. Totuşi, acest lucru nu se întâmplă în general în atomi. Într-adevăr, orbitele electronilor sunt extrem de stabile.</p>

<p>Mai mult decât atât, experimentele cu atomi „excitaţi” au demonstrat că energia electromagnetică emisă de un atom posedă doar anumite frecvenţe specifice. Atomii excitaţi de influenţe externe, precum lumina, absrob această energie şi emit unde electromagnetice de frecvenţe specifice. Când energia emisă de un atom este descompusă în frecvenţele sale (culori) cu ajutorul unei prisme, spectrul culorilor este compus din linii distincte, acestea fiind unice elementului respectiv. Acest fenoment este în general folosit pentru identificarea elementelor atomice, şi chiar şi pentru determinarea proporţiilor fiecărui element dintr-o compoziţie chimică. Conform modelului lui Rutherford şi a legilor fizicii clasice, domeniu frecvenţelor acestor atomi excitaţi ar trebui să fie practic nelimitat. Cu alte cuvinte, dacă modelul lui Rutherford ar fi fost corect, spectrul luminii emise de oricare atom ar apărea ca o bandă continuă de culori şi nu doar sub forma câtorva linii distincte.</p>

<p>Niels Bohr a încercat să îmbunătăţească modelului lui Rutherford după ce a studiat o perioadă de câteva luni în laboratorul acestuia în 1912. Încercând să armonizeze şi descoperirile celorlalţi fizicieni, precum Max Plank şi Albert Einstein, Bohr a sugerat că fiecare electron posedă o anumită energie specifică, iar orbitele lor sunt <i>cuantificate</i> asfel că fiecare dintre electroni poate ocupa doar anumite locuri în jurul nucleului. Pentru a scăpa de implicaţiile mişcării electronilor datorită legilor electromagnetismului şi a particulelor accelerate, Bohr a considerat aceste orbite (<i>orbitali</i>) ca fiind staţionare.</p>

<p>Cu toate că încercarea lui Bohr de reconstruire a structurii atomului în termeni cât mai apropiaţi de rezultatele experimentale, a constituit un pas foarte împortant pentru fizică, acesta nu a fost totuşi complet. Analizele sale matematice au condus la predicţii mult mai bune a evenimentelor experimentale decât modelele precedente ale atomului, dar câteva întrebări despre modul ciudat al comportamentului electronilor încă nu îşi găsiseră răspunsul. Susţinerea faptului că electroni existau în stări staţionare şi cuantificate în jurul nucleului era un pas înainte, dar motivul pentru care electronii se comportau asfel nu era încă cunoscut. Răspunsul acestor întrebări avea să-l dea un alt fizician, Louis de Broglie., cu aproximativ zece ani mai târziu.</p>

<p>De Broglie a propus că electronii, precum fotonii (particule de lumină), manifestă atât proprietăţi ale particulelor cât şi proprietăţi ale undelor. Bazându-se pe această interpretare, acesta a sugerată că o analiză a orbitalilor electronilor din punct de vedere al undelor şi nu al particulelor, ar răspunde mai multor întrebări legate de natura lor. Într-adevăr, acesta a reprezentat un nou pas în dezvoltarea unui model al atomului.</p>

<p>Ipoteza lui de Broglie a făcut posibilă introducerea suportului matematic şi analogiilor fizice pentru stările cuantificate al electronilor dintr-un atom, dar nici modelul acestuia nu era complet. În decurs de câţiva ani însă, fizicientii Werner Heisenberg şi Erwin Schrodinger, fiecare lucrând individual, au creat un model matematic mult mai riguros pentru particulele subatomice, plecând de la conceptul dualităţii undă-particulă a lui de Broglie.</p>

<p>Avansul teoretic de la modelul staţionar al undei propus de Brogile la modelul matricial al lui Heisenber la ecuaţiile diferenţiale ale lui Schrodinger, este cunoscut sub numele de <i>mecanică cuantică</i> şi introduce o carcateristică aparent şocantă a lumii particulelor subatomice, şi anume <i>probabilitatea</i> sau <i>incertitudinea</i>. Conform teoriei mecanicii cuantice, poziţia exacţă <i>şi</i> momentul exact al particulelor sunt imposibil de determinat în acelaşi timp. Explicaţa acestui „principiu al incertitudinii” constă într-o eroare de măsură cauzată de obicei de procesul de măsurare, şi anume, prin încercarea de măsurare exactă a poziţiei unui electron, are loc o interferenţă cu momentul acestuia şi prin urmare nu putem şti care a fost momentul acestuia înainte de efectuarea măsurătorii, şi invers. Implicaţia suprinzătoare a mecanicii cuantice este că particulele nu au de fapt o poziţie <i>şi</i> un moment precis, ci aceste două cantităţi sunt echilibrate asfel încât incertitudinea lor combinată nu scade niciodată sub o anumită valoare minimă.</p>

<p>Valoarea minimă a incertitudinii poziţiei şi momentului unei particule, exprimată de Heisenberg şi Schrodinger, nu are nimic de a face cu aparatele de măsură „neperformante”, ci este o proprietate intrinsecă a dualităţii undă-particulă. Electronii, prin urmare, nu există în orbitele lor ca şi „bucăţi” de materie precis delimitate, şi nici măcare sub formă de unde bine delimitate, ci sub formă de <i>nori</i> cu o distribuţie de probabilităţi, ca şi cum fiecare electron ar fi „împrăştiat” pe o suprafaţă mare de poziţii şi momente.</p>

<p>Poziţia radicală conform căreia, electronii existau sub formă de nori, părea să vină în contradicţie cu principiile originale a stărilor cuantificate ale electronilor: faptul că electronii există sub forma „orbitelor” discrete şi bine definite în jurul nucelului atomului. Această din urmă explcaţia a fost cea care a dus constituit, până la urmă, punctul de placare al mecanicii cuantice. Totuşi, comportamtenul „cuantic” al electronilor nu depinde de o anumită poziţie şi moment, ci depinde de cu totul altă proprietate, <i>numerele cuantice</i>. Pe scurt, mecanica cuantică înlătură noţiunile „clasice” de poziţie şi moment absolut înlocuindu-le pe acestea cu noţiuni ce nu au nicio analogie în viaţa reală.</p>

<p>Cu toate că electronii există sub formă de „nori” cu probabilităţi distribuite şi nu sub formă de materie discretă, aceşti nori au unele caracteristicei ce <i>sunt</i> discrete. Oricare electron dintr-un atom poate fi descris de patru numere cuantice, şi anume: număr cuantic principal, orbital, magnetic şi de spin. Toate aceste numere luate împreună determină starea unui electron la un moment dat.</p>

<h3>Numărul cuantic principal</h3>

<p>Simbolizat prin litera <b>n</b>, acest număr descrie <i>stratul</i> pe care se află un electron. Învelişul electronic este un spaţiu din jurul nucleului atomului, format din straturi, ce determină poziţiile în care electronii pot exista. Electronii se pot deplasa de pe un strat pe altul, dar nu pot exista în regiunile dintre straturi.</p>

<p>Numărul cuantic principal al electronului este un număr întreg pozitiv (1, 2, 3, 4...). Asfel, fiecare electron poate exista pe unul dintre aceste straturi, în funcţia de componenţa atomului. Aceste valori nu au fost alese arbitrar, ci ca urmare a experimentelor cu spectre de lumină: diferitele frecvenţe ale luminii emise de atomii de hidrogen excitaţi, urmează o secvenţă matematică ce depinde de anumite valori întregi.</p>

<p>Fiecare strat poate susţine mai mulţi electroni. O analogie a acestei aşezări poate fi imaginată dacă luăm în considerare un amfiteatru. Fiecare persoană trebuie să aleagă un rând în care să se aşeze (nu se poate aşeza <i>între</i> rânduri); la fel, fiecare electro trebuie să „aleaga” un anumit strat în care să se „aşeze”. Ca şi în cazul amfiteatrealor, stratul exterior poate susţine mai mulţi electroni decât stratul interior, din apropierea nucleului. De asemenea, electroni tind să se „aşeze” pe cel mai jos strat disponibil, la fel cum într-un amfiteatru, oamenii caută să se aşeze cât mai aproape de scenă (în primul rând). Cu cât numărul stratului (numărul cuantic principal, n) este mai mare, cu atât energia electronilor ce-l ocupă este mai mare.</p>

<p>Numărul maxim de electroni dintr-un strat este descris de ecuaţia 2n<sup>2</sup>, unde este este numărul cuantic principal. Asfel, primul strat (n=1) poate fi ocupat de doar 2 electroni, cel de al doilea strat (n=2) de 8 electroni, al treilea (n=3) de 18 electroni.</p>

<p><img src="../poze/03391.png" alt="numărul cuantic principal şi numărul maxim de electroni pe fiecare strat conform relaţiei 2n^2"/></p>

<p>Straturile electronice (de la electron) ale unui atom au fost notate cu litere nu cu cifre. Primul strat (n=1) se notează cu litera K, al doilea (n=2) cu L, al treilea (n=3) cu M, al patrulea (n=4) cu M, al cincilea (n=5) cu O, al şaselea (n=6) cu P şi al şaptelea (n=7) cu Q.</p>

<h3>Numărul cuantic orbital</h3>

<p>Fiecare strat este compus din <i>substraturi</i>. Substraturile sunt regiuni spaţiale ce descriu locul în care pot exista „nori” electronici iar forma lor este diferită de la un substrat la altul. Primul substrat are forma unei sfere, dacă îl privim sub forma unui nori de electroni ce „înveleşte” tridimensional nucleul atomic. Cel de al doilea substrat însă, este compus din doi „lobi” conectaţi împreună într-un singur punct în apropierea centrului atomului. Al treilea substrat este format dintr-un set de patru „lobi” aranjaţi în jurul nucleului.</p>

<p><img src="../poze/03420.png" alt="reprezentarea substraturilor sub formă orbitală"/></p>

<p>Numărul orbital este un număr întreg, la fel ca şi numărul principal, doar că înclude şi zero. Aceste numere sunt simbolizate prin intermediul literei <b>l</b>. Numărul substraturilor dintr-un strat este egal cu numărul cuanti orbital. Asfel, primul strat (n=1) are un substrat, numerotat cu 0; al doilea strat (n=2) are două substraturi, 0 şi 1; al treilea strat (n=3) are trei substraturi, 0,1 şi 2. O altă convenţie, foarte des întâlnită, este numerotarea substraturilor prin s (l=0), p (l=1), d (l=2) şi f (l=3)</p>

<p><img src="../poze/03392.png" alt="(a) reprezentarea lui Bohr a atomului de argint, (b) reprezentarea substraturilor atomului de Ag; notaţia spectroscopică"/></p>

<h3>Numărul cuantic magnetic</h3>

<p>Numărul cuantic magnetic al unui electron determină orientarea formei substratului. „Lobii” substraturile pot fi orientăţi în mai multe direcţii. Aceste orientării diferite poartă numele de <i>orbitali</i>. Primul substrat (s; l=0) este o sferă fără posibilitatea de existenţă a unei direcţii, prin urmare, în acest caz, avem doar un orbital. Pentru al doilea substrat (p; l=1) din fiecare strat, „lobii” acestora pot avea trei direcţii diferite.</p>

<p>Simbolul numărului magnetic este <b>m<sub>l</sub></b>. Pentru a calcula numărul de orbitali din fiecare strat, înmulţim numărul substratului şi adăugăm 1 (2*l + 1). De exemplu, priumul substrat (l=0) al oricărui strat, conţine un singur orbital, numerotat cu 0; al doilea substrat (l=1) al oricărui strat conţine trei orbitali, -1, 0, 1; al treilea substrat (l=2) conţine cinci orbitali, numerotaţi cu -2, -1, 0, 1 şi 2; etc.</p>

<h3>Numărul cuantic de spin</h3>

<p>Proprietatea de „spin” a electronilor a fost descoperită pe cale experimentală. O observaţie mai atentă a liniilor spectrale a reliefat faptul că fiecare linie este de fapt o pereche de linii foarte apropiate una de cealaltă, ipoteza fiind că această structură este rezultatul spin-ului fiecărui electron în jurul propriei sale axe. Atunci când sunt excitaţi, electronii cu spin diferit vor emite energie sub frecvenţe diferite.</p>

<p>Numărul de spin este simbolizat prin <b>m<sub>s</sub></b>. În fiecare orbital, din fiecare substrat al fiecărui strat, pot exista doi electroni, unul cu spin +1/2, iar celălalt cu spin -1/2.</p>

<h3>Principiul de excluziune al lui Pauli</h3>

<p>Explicarea aşezării electronilor în atom cu ajutorul acestor numere cuantice poartă numele de <i>principiul de excluziune al lui Pauli</i>. Acest principiu spune că, în acelaşi atom, nu pot exista doi electronic care să ocupe exact aceleaşi stări cuantice. Cu alte cuvinte, fiecare electron al unui atom posedă un set unic de numere cuantice. Acest lucru impune o limită numărului de electroni ce pot ocupa orice orbital, substrat sau strat.</p>

<p>Mai jos este este prezentat aranjamentul electronic al atomului de hidrogen:</p>

<p><img src="../poze/03365.png" alt="aranjamentul electronic al atomului de hidrogen"/></p>

<p>Cu nucleul format dintr-un singur proton, este suficient un electron pentru ca atomul să atingă achilibrul electrostatic (sarcina electrică pozitivă a protonului este în echilibru cu sarcina electrică negatică a electronului). Acest electron ocupă stratul cel mai de jos (n=1), primul substrat (l=1), în singurul orbital (orientarea spaţială) al acelui substrat (m<sub>l</sub>=0), cu un spin de 1/2. O metodă practică şi des întâlnită de descriere a acestui aranjament constă în scrierea electronilor în funcţie de straturile şi substraturile ocupate; această convenţie portă numele de <i>notaţia spectroscopică</i>. Sub această notaţie, numărul stratului este un număr întreg pozitiv, substratul este o literă (s, p, d, f), iar numărul total de electroni dintr-un substrat (toţi orbitalii şi spinii incluşi) este reprezentat printr-un indice superior. Asfel, hidrogenul, având doar un singur electron în stratul inferior, se poate descrie prin notaţia 1s<sup>1</sup>.</p>

<p>Trecând la următorul atom (în ordinea numărului atomic), avem elementul heliu:</p>

<p><img src="../poze/03366.png" alt="aranjamentul electronic al atomului de heliu"/></p>

<p>Nucleul unui atom de heliu are în compoziţia sa doi protoni, iar acest lucru necesită existenţa a doi electroni pentru a echilibra sarcina electrică totală a atomului. Din moment ce ambii electroni, unul cu spin 1/2, celălalt cu spin -1/2, „încap” pe un singur orbital, configuraţia atomului de heliu nu necesită substraturi sau straturi suplimentare pentru cel de al doilea electron.</p>

<p>Totuşi, un atom ce conţine trei sau mai mulţi electron, va necesita substraturi adiţionale pentru toţi acei electroni, din moment ce pe stratul inferior (n=1) încat doar doi electron. Să considerăm următorul atom, cel de litiu.</p>

<p><img src="../poze/03367.png" alt="aranjamentul electronic al atomului de litiu"/></p>

<p>Un atom de litiu foloseşte doar o fracţiune din capacitatea stratului L (n=2), capacitatea totală a acestuia fiind de opt electroni (capacitatea maximă a stratului = 2n<sup>2</sup>, unde n este numărul stratului). Dacă examinăm aranjamentul electronic al unui atom cu stratul L completat, putem vedea cum toate combinaţiile de substraturi, orbitali şi spini sunt ocupate de electroni. Elementul ce corespunde acestei configuraţii este neonul.</p>

<p><img src="../poze/03368.png" alt="aranjamentul electronic al atomului de neon"/></p>

<p>Adesea, atunci când se foloseşte notaţia spectroscopică a unui atom, toate straturile ce sunt ocupate complet sunt ignorate, fiind scrise doar straturile neocupate sau stratul ocupat superior. De exemplu, neonul (prezentat mai sus), ce are două straturi complet ocupate, poate fi descris pur şi simplu prin 2p<sup>6</sup> în loc de  1s<sup>2</sup>2s<sup>2</sup>2p<sup>6</sup>. Litiul, având stratul K complet ocupat, şi doar un singur electron în stratul L, poate fi descris prin notaţia 2s<sup>1</sup> în loc de 1s<sup>2</sup>2s<sup>1</sup>.</p>

<p>„Ignorarea” straturilor inferioare, complet ocupate, nu este doar o convenţie de scriere, ci ilustrează foarte bine un principiu de bază al chimiei: <span class="important">comportamentul chimic al unui element este determinat în primul rând de straturile sale neocupate</span>. Atât hidrogenul cât şi litiul posedă un singur electron în straturile superioare (1s<sup>1</sup> şi 2s<sup>1</sup>), iar acest lucru se traduce printr-un comportament similar al celor două elemente. Ambele elemente sunt reactive, şi au o reactivitate similară. Contează mai puţin faptul că litiul posedă un strat complet (K) în plus faţă de hidrogen. Comportamentul său chimic este determinat de stratul său neocupat, L.</p>

<p>Elementele a căror straturi superioare sunt ocupate complet, sunt clasificate ca elemente <i>nobile</i>, fiind aproape non-reactive faţă de celelalte elemente. Aceste elemente au fost clasificate în trecut ca <i>inerte</i>, crezându-se că sunt complet non-reactive, dar acestea pot forma compuşi cu alte elemente în condiţii specifice.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Electronii există în atomi sub formă de „nori” ai probabilităţilor distribuite, şi nu sub forma unor corpuri discrete ce orbitează în jurul nucelului precum sateliţii în jurul planetelor</li>
	<li>Fiecare electron din jurul nucleului atomului are o „stare” unică descrisă de patru numere cuantice: numărul cuantic principal, cunoscut sub numele de strat; numărul cuantic orbital, cunoscut sub numele de substrat; numărul cuantic magnetic, ce descrie orbitalul (orientarea stratului); numărul cuantic de spin, sau pur şi simplu spin. Aceste stări sunt cuantificate, adică electronul nu poate exista „între” aceste stări ce sunt definite de numerotaţia cuantică</li>
	<li>Numărul cuantic principal (n) descrie stratul pe care se află electronul. Cu cât acest număr este mai mare, cu atât raza norului electronic este mai mare faţa de nucleul atomului, şi cu atât este mai mare energia electronului. Aceste numere sunt numere întregi pozitive</li>
	<li>Numărul cuantic orbital (l) descrie forma norului electronic dintr-un anumit strat şi este cunoscut adesea sub numele de substrat. Numărul substraturilor (formelor norilor electronici) din oricare strat este egal cu număru cuantic orbital. Acestea sunt numere întregi pozitive ce încep de la zero şi se termină la n-1 (n - numărul cuantic principal)</li>
	<li>Numărul cuantic magnetic m<sub>l</sub> descrie orientarea substratului (forma norului electronic). Numărul orientărilor substraturilor este de 2l + 1 (l - numărul cuantic orbital). Fiecare orientare unică poartă numele de orbital. Aceste numere sunt întregi, cu valor între -l şi l</li>
	<li>Numărul cuantic de spin m<sub>s</sub> descrie o altă proprietate a electronului, iar valoarea acestuia poate să fie +1/2 sau -1/2</li>
	<li>Principiul de excluziune al lui Pauli spune că, într-un atom, nu există doi electroni cu acelaşi set de numere cuantice. Prin urmare, numărul maxim de electroni pe fiecare orbital este de 2 (spin=1/2 şi spin=-1/2), de exemplu</li>
	<li>Notaţia spectroscopică este o convenţie folosită pentru descrierea configuraţiei electronilor dintr-un atom. Straturile sunt descrise de numere întregi, urmate de substraturi, descrise cu ajutorul literelor (s, p, d, f), iar un indice superior este folosit pentru indicarea numărului total de electroni de pe fiecare substrat în parte</li>
	<li>Comportamentul chimic al unui atom este complet determinat de electronii din straturile neocupate complet. Straturile inferioare ocupate complet nu au aproape niciun efect asupra formării legăturilor chimice ale elementelor</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>