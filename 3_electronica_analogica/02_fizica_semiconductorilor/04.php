<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Electroni şi goluri</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Electroni şi goluri</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Materialele semiconductoare pure sunt izolatori relativ buni, în comparaţie cu metalele, dar nu sunt la fel de bune precum sticla, de exemplu. Pentru a putea fi folosit în aplicaţii cu semiconductori, materialul semiconductor pur, nedopat, nu trebuie să conţină mai mult de o impuritatea la 10 miliarde de atomi semiconductori. Acest lucru este analog unei impurităţi sub formă de „un fir de praf într-un sac de zahăr”. Materialele semiconductoare impure sunt conductoare mult mai bune, dar nu la fel de bune precum metalele. De ce se întâmplă acest lucru? Pentru a putea răspunde acestei întrebări, trebuie să ne uităm la structura electronică a acestor materiale.</p>

<p><img src="../poze/03403.png" alt="strucutra electronică a materialelor semiconductoare; reprezentarea electronilor şi a golurilor"/></p>

<p>În figura de sus (a), cei patru electroni din stratul de valenţă a unui material semiconductor formează legături covalente cu alţi patru atomi. Toţi electronii unui atom sunt formează legături covalente. Electronii nu se pot deplasa liber în structura cristalului. Prin urmare, semiconductorii puri (intrinseci) sunt izolatori relativ buni în coparaţie cu metalele. Energia termină poate elibera ocazional un electron din structura cristalină a semiconductorului. Acest electron se poate deplasa liber prin structura cristalului (electron liber). Când acest electron a fost eliberat cu ajutorul unei energii exterioare, a lăsat în urma lui un loc liber cu sarcină pozitivă în structura cristalului, sarcină cunoscută sub numele de <i>gol</i>. Acest gol nu este nici el fix, ci se poate deplasa liber. Atât electronul, cât şi golul contribuie la conducţia electrică a cristalului. Electronul este liber până în moment în care „cade” într-un gol, proces cunoscut sub numele de <i>recombinaţie</i>. Dacă se aplică un câmp electric extern asupra semiconductorului, electronii şi golurile se vor deplasa în direcţii opuse. Creşterea temperaturii duce le creşterea numărului de electroni şi goluri şi la descreşterea rezistenţei. Acest lucru este exact opus comportamentului metalelor, unei rezistenţa creşte cu creşterea temperaturii datorită creşterii coliziunilor dintre electroni şi structura cristalină. Numărul de electroni şi goluri într-un semiconductor intrinsec este egal. Totuşi, viteza de deplasare ai celor doi purtători de sarcină (electroni şi goluri) nu este egală la aplicarea unui câmp electric extern. Cu alte cuvinte, <i>mobilitatea</i> celor doi purtători de sarcină nu este aceeiaşi.</p>

<p>Materialele semiconductoare pure nu sunt foarte folositoare. Acestea trebuie să prezintă un nivel înalt de puritate înainte de adăugarea impurităţilor specifice.</p>

<p>Materialele semiconductoare pure (1 parte la 10 miliarde), pot fi „murdărite” cu aproximativ 1 parte la 10 milioane pentru creşterea numărului de purtători de sarcină. Adăugarea unei impurităţi precise unui material semiconductor este cunoscută sub numele de <i>dopare</i>. Doparea creşte conductivitatea semiconductorului, pentru ca acesta să se comporta mai mult ca un metal decât ca un izolator.</p>

<h3>Impuritatea donoare de tip N</h3>

<p>Creşterea numărului sarcinilor electrice negative din structura cristalină a unui material semiconductor se poate realiza prin doparea cu electroni a unui material <i>donor</i> precum fosforul. Materialele donatoare de electroni, cunoscute şi sub numele de „materiale de <i>tip N</i>”, includ elemente din grupa VA a tabelului periodic: N (azot), P (fosfor), As (arsenic) şi Sb (stibiu sau antimoniu). Azotul şi fosforul sunt folosite ca dopanţi de tipul N pentru diamant, iar fosforul, arsenicul şi stibiul sunt folosite pentru siliciu.</p>

<p>Structura cristalină din figura de mai jos conţine atomi având câte patru electroni în stratul de valenţă, formând câte patru legături covalente cu atomii adiacenţi. Aceasta este structura anticipată a materialului semiconductor. Adăugarea unui atom de fosfor cu cinci electroni în stratul de valenţa întroduce un electron suplimentar în structura materialului, în comparaţie cu atomul de siliciu (figura de mai jos (b)). Impuritatea petavalentă formează patru legături covalente cu patru atomi de siliciu cu ajutorul a patru electroni din cei cinci disponibili. Structura asfel formată va dispune de un electron liber, rămas de la atomul de fosfor, ce nu are o legătură foarte strânsă cu cristalul la fel cu au ceilalţi electroni de siliciu, fiind liber să se deplaseze în cristal. Din moment de am dopat semiconductorul cu un atom de fosfor la fiecare 10 milioane de atomi de siliciu, există relativ puţini electroni liberi creaţi prin dopaj, dacă face o comparaţie cu numărul de atomi de siliciu prezenţi în structură. Totuşi, dacă facem o comparaţie între numărul de electroni liberi ai materialului dopat cu materialul pur, numărul de electroni liberi este relativ mare. Aplicarea unui câmp electric extern produce o conducţie electrică puternică a materialului semiconductor dopat în banda de conducţie. Un nivel de dopaj mai ridicat, produce o conducţie şi mai puternică. Asfel, un material conductor cu o conductivitate scăzută, a fost „transformat” într-un material conductor destul de bun.</p>

<p><img src="../poze/03404.png" alt="(a) configuraţia electronică a donorului de tip N (fosfor), acceptorului de tip P (bor) şi a siliciului (pentru referinţă) (b)impuritatea donorului de tip N crează electroni liberi; (c)impuritatea acceptorului de tip P crează goluri"/></p>

<h3>Impuritatea acceptoare de tip P</h3>

<p>De asemenea, este posibilă introducerea unei purităţi cu trei electroni în stratul de valenţă, adică un electron în minus faţă siliciu. Acest lucru duce la formarea unui gol, un purtător de sarcină pozitivă. Atomul de bor (B), ce are trei electroni pe stratul de valentă, încearcă să realizeze patru legături covalente cu atomii de siliciu, iar pe parcursul acestui proces, cei trei electroni se vor deplasa încercând să formeze aceste legături (figura de mai sus (c)). Acesta lucru duce la impresia că golul se deplasează. Mai mult, atomul trivalent de bor poate împrumuta un electron de la un atom de siliciu adiacent (sau distant) pentru formarea celor patru legături covalente. Dar acest lucru înseamnă ca atomul de siliciu are un deficit de un electron. Cu alte cuvinte, golul s-a „deplasat” pe un atom de siliciu vecin. Golurile se regăsesc în banda de valenţă, cu un nivel mai jos decât banda de conducţie. Doparea cu un acceptor - un atom ce poate accepta un electron - crează o deficienţă de electroni în structura materialului, sau un exces de goluri (cele două exprimări sunt echivalente). Din moment ce golurile sunt purtători de sarcină pozitivă, un dopant acceptor de electroni poartă numele de „dopant de <i>tip P</i>. Elementele dopante de tip P includ elementele din grupa IIIA a tebelului periodic: B (bor), Al (aluminiu), Ga (galiu) şi In (indiu). Borul este folosit pe post de dopant pentru siliciu şi diamant, iar indiul pentru germaniu.</p>

<h3>Deplasarea electronilor şi a golurilor</h3>

<p>Există o strânsă legătură, în analogia „mărgelelor dintr-un tub”, între deplasarea golurilor şi deplasarea electronilor. Mărgelele reprezintă electronii dintr-un conductor. Deplasarea electronilor de la stânga la dreapta într-un semiconductor de tip N se poate explica asfel: electronul intră în tub prin partea stângă şi iese prin partea dreaptă. Deplasarea electronilor de tip N are loc în banda de conducţie. Putem compara această deplasare cu deplasarea golurilor în banda de valenţă.</p>

<p><img src="../poze/03405.png" alt="analogia mărgelelor dintr-un tub pentru deplasarea electronilor şi a golurilor"/></p>

<p>Ceea ce trebuie înţeles este că electroni se deplasează în direcţia contrare de deplasare a golurilor. Golurile nu sunt altceva decât absenţa electronilor din banda de valenţă, având prin urmare o sarcină pozitivă, sarcină datorată prezenţei protonilor din nucleu, şi de fapt aceasta este sarcina „imaginară” pe care o reprezentăm cu ajutorul golurilor.</p>

<p>Deplasarea electronilor (curent) într-un semiconductor de tip N este similară deplasării electronilor dintr-un conductor metalic. Atomii materialului dopant de tip N furnizează electroni pentru conducţie. Aceşti electroni poartă numele de <i>purtători de sarcină majoritari</i>. Dacă aplicăm un câmp electric între două puncte ale unui material semiconductor, electronii intră prin partea negativă (-) a materialului, traversează structura acestuia şi ies prin partea dreaptă (+), terminalul pozitiv al bateriei.</p>

<p><img src="../poze/03407.png" alt="(a) deplasarea electronilor într-un material semiconductor de tip N; (b) (a) deplasarea electronilor într-un material semiconductor de tip P"/></p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Materialele semiconductoare pure, cu un procent de 1 parte la 10 miliarde, nu sunt bune conductoare</li>
	<li>Materialele semiconductoare de tip N sunt dopate cu o impuritate petavalentă pentru crearea electronilor liber. Un asfel de material este conductor, iar purtătorii de sarcină majoritari sunt în acest caz electronii</li>
	<li>Materialele semiconductoare de tip P sunt dopate cu o impuritate trivalentă şi duce la crearea unei abundenţe de goluri în structura semiconductorului. Un asfel de material este conductor, iar purtătorii de sarcină majoritari sunt în acest caz golurile</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>