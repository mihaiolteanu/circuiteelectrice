<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Introducere?</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Introducere?</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>Ar trebui să fiţi deja familiarizaţi cu legătura ce există între conductivitatea electrică şi tipul materialului. Acele materiale ce permit trecerea uşoară a electronilor liberi, poartă numele de conductori, pe când cele ce se opun trecerii electronilor prin ele, poartă numele de materiale dielectrice.</p>

<p>Din păcate, teoriile ştiinţifice ce explică motivul pentru care unele materiale sunt conductoare iar altele nu, sunt destul de complexe, şi conţin explicaţii despre modul de aranjare al electronilor în jurul nucleelor atomilor. Contrar modelului „planetar” atât de răspândit, conform căruia electronii se deplasează în jurul nucleului atomului precum nişte bucăţi de materie sub forma orbitelor eliptice, electronii nu se comportă deloc precum nişte bucăţi de materie. De fapt, electronii posedă atât caracteristici ale particulelor cât şi ale undelor, comportamentul lor fiind determinat de plasarea lor în zona distincte din jurul nucleului, zone denumite straturi sau substraturi. Electronii pot ocupa aceste zone doar într-o anumită bandă de energie, în funcţie de zona respectivă şi de prezenţa altor electroni. Dacă electronii s-ar comporta într-adevăr precum nişte planete ţinute pe orbita nucleului de către atracţia electrostatică, iar comportamentul lor fiind descris în acest caz de aceleaşi legi ce descriu mişcarea planetelor adevărate, atunci nu ar exista nicio distincţie reală între materialele conductoare şi dielectrice, iar legăturile chimice dintre atomi nu ar exista sub forma pe care o cunoaştem în acest moment. Aceste fenomene se datorează prin urmare naturii discrete, cuantificate a energiei electronilor şi poziţionării acestora, aşa cum sunt ele descrise de fizica cuantică.</p>

<p>Atunci când un electron este liber să treacă într-o stare energetică mai mare în jurul nucleului atomului (datorită plasării acestuia într-un anumit strat), acesta este liber să se „desprindă” de atomul său şi să constituie o parte a curentului electric prin substanţa din care face parte atomul respectiv. Acest scenariu este tipic materialelor conductoare. Dacă limitările cuantice impuse unui electric nu-i permit această liberate, se consideră că electronul este „legat” şi nu se poate desprinde de atom (cel puţin, nu uşor) pentru a lua parte la curentul total din substanţă. Acest scenariu este tipic materialelor dielectrice (izolatoare).</p>

<h2>Conductivitatea electrică</h2>

<p>În unele texte de specialitate este afirmat faptul că atât conductivitatea cât si non-conductivitatea unui element este determinată exclusiv de numărul electronilor din stratul de valenţă (stratul exterior al atomului). Această explicaţie este însă o simplificare exagerată, fapt ce devine aparent în momentul în care consultăm tabelul elementelor şi comparăm conductivitatea materialelor cu numărul electronilor de valenţă (numărul electronilor de pe ultimul strat). Adevărata complexitate a problemei este scoasă la lumină atunci când luăm în considerare conductivitatea moleculelor (mai mulţi atomi legaţi între ei prin intermediul activităţii electronilor).</p>

<p>Un exemplu pertinent în acest sens este carbonul, ce cuprinde două materiale de conductivităţi total diferite: grafitul şi diamantul. Grafitul este un conductor mediu de electricitate, pe când diamantul este practic un dielectric; tehnic însă, diamantul este clasificat ca şi semiconductor - material ce se comportă precum un dielectric în forma sa pură, dar poate conduce la temperaturi înalte sau/şi sub influenţa impurităţilor. Atât grafitul cât şi diamantul sunt compuse din exact aceleaşi tipuri de atomi, şi anume, din atomi de carbon ce conţin 6 protoni, 6 neutroni şi 6 electroni fiecare. Diferenţa fundamentală dintre cele două tipuri de materiale o constituie modul de aranjare al atomilor de carbon pentru formarea structurii.</p>

<p>Dacă atomii de carbon formează compuşi cu alte tipuri de atomi, conductivitatea electrică este din nou afectată. Carbura de siliciu (SiC), un compus al carbonului cu siliciul, prezintă un comportament neliniar: rezistenţa sa electrică descreşte odată cu creşterea tensiunii aplicate (rezistenţă negativă). Compuşii pe bază de hidrocarburi, precum produsele petroliere, sunt în general dielectrici foarte buni.</p>

<p>După cum putem vedea, simpla numărare e electronilor de valenţa a unui atom nu este un indicator foarte bun pentru conductivitatea electrice a materialului în cauză.</p>

<p>Toate elementele metalice sunt buni conductori de electricitate, datorită tipului de legături dintre atomi. Electronii atomilor metalelor sunt liberi să se deplaseze între nivelurile energetice, astfel că aceştia „plutesc” liber între diferitele nuclee din componenţa substanţei, fiind „motivaţi” foarte uşor de prezenţa unui câmp electric. De fapt, electronii sunt într-atât de mobili încât ne putem imagina că nucleele atomilor „plutesc într-o mare de electroni”. Această mobilitate este răspunzătoare şi de alte propritetăţi bine cunoscute ale metalelor: conductivitate termică, maleabilitate şi ductilitate.</p>

<p>Din fericire, fizica din spatele tuturor acestor fenomene este în mare parte irelevantă pentru scopul acestei cărţi, deşi o înţelegere a principiilor fizice ce stau la baza funcţionării circuitelor electrice sau electronice reprezintă un atu extrem de important în orice împrejurare.</p>

<p>Un pas important în „stăpânirea” curentului electric, este construirea căilor conductoare necesare deplasării electronilor şi controlul acestora prin intermediul rezistenţelor. De asemenea, este la fel de importantă prevenirea deplasării electronilor în locuri nedorite, folosind materiale dielectrice. Totuşi, nu toţi conductorii sunt la fel; acelaşi lucru este valabil şi în cazul dielectricilor. Trebuie să înţelegem prin urmare unele caracteristici principale ale conductorilor şi dielectricilor, pentru a le putea aplica în circuitele reale.</p>

<p>Aproape toţi conductorii posedă o anumită rezistenţă măsurabilă (în afară de supraconductoare). În mod normal, presupunem că rezistenţa conductorilor dintr-un circuit este zero, iar curentul ce trece prin ei nu prezintă nicio cădere de tensiune. În realitate, va exista tot timpul o cădere de tensiune în lungul conductorilor, fie că o dorim sau nu.</p>

<p><img src="../poze/00277.png" alt="într-un circuit electric, există tot timpul cădere de tensiune în lungul conductorilor"/></p>

<p>Pentru a putea calcula aceste căderi de tensiuni în oricare circuit, trebuie să putem determina rezistenţa oricăror conductori, cunoscând materialul din care este confecţionat, diametrul precum şi lungimea acestuia, lucru ce-l vom explora în următoarele capitole.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Conductivitatea electrică a materialelor este determinată de configuraţia electronilor în cadrul atomilor şi moleculelor materialului respectiv</li>
	<li>Electronii ce se deplasează printr-un conductor produc o cădere de tensiune în lungimea acelui conductor</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>