<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Semnale digitale şi porţi</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Semnale digitale şi porţi</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Deşi sistemul de numeraţie binar reprezintă un concept matematic abstract interesant, încă nu am spus nimic despre aplicaţiile practice în electronică. Acest capitol este dedicat prin urmare aplicării conceptelor binare circuitelor electronice. Importanţa sistemului binar de numeraţie în electronica digitală este importantă datorită uşurinţei cu care putem reprezenta biţii sub formă fizică. Deoarece un bit poate avea doar două stăi diferite, fie 0 fie 1, orice mediu fizic ce poate funcţiona în două stări saturate diferite, poate fi folosit pentru reprezentarea unui bit. În consecinţă, orice sistem fizic ce este capabil să reprezinte biţi sub formă binară, poate reprezenta de asemenea şi valori numerice. Prin urmare, are potenţialul de a manipula aceste numere. Acesta este principiul de bază al circuitelor digitale.</p>

<p>Circuitele electronice sunt perfecte pentru reprezentarea numerelor binare. Tranzistorii, atunci când funcţionează la limită, se pot afla într-un din cele două stări: fie în stare blocată (curent de control zero), fie în stare de saturaţie (curent de control maxim). Dacă un circuit cu tranzistor este proiectat pentru maximizarea probabilităţii de funcţionare într-una din cele două stări (evitarea funcţionării tranzistorului în zona activă de funcţionare), acesta poate fi folosit ca şi reprezentare fizică a unui bit. Căderea de tensiune măsurată la ieşirea unui astfel de circuit poate fi folosită pentru reprezentarea unui singur bit. O tensiune joasă reprezentând „0”, şi o tensiune (relativ) înaltă reprezentând „1”.</p>

#+CAPTION: tranzistor aflat în saturaţie
[[../poze/04068.png]]

<p>În figura alăturată, tranzistorul este saturat datorită tensiunii de intrare de 5 V (prin intermediul comutatorului cu două poziţii). Deoarece este saturat, căderea de tensiune dintre colector şi emitor este foarte mică, rezultând o tensiune de ieşire de practic 0 V. Dacă am folosit acest circuit pentru reprezentarea numerelor binare, am spune că semnalul de intrare este „1” binar, iar semnalul de ieşire este „0” binar. Orice tensiune apropiată de tensiunea de alimentare (având ca referinţă masa), este considerată a fi „1”, iar o lipsă de tensiune este considerată a fi „0”. Alternativ, se folosesc termenii de „înalt” (1 binar) sau jos (0 binar). Termenul general pentru reprezentarea unui bit prin intermediul unei tensiuni poartă numele de „nivel logic”.</p>

<div class="clear"></div>

#+CAPTION: tranzistor aflat în saturaţie
[[../poze/04068.png]]

<p>Trecând comunatorul pe cealalţă poziţie, aplicăm o intrare de 0 binar si obţinem la ieşire 1 binar.</p>

<div class="clear"></div>

<p>Ceea ce am creat mai sus poartă numele de poartă logică, sau simplu, poartă. O poartă nu este altceva decât un circuit amplificator special conceput pentru acceptarea şi generarea semnalelor de tensiune. Aceste semnale corespund numerelor binare 0 si 1. Prin urmare, porţile nu sunt concepute pentru amplificarea semnalelor analogice (semnale de tensiune între 0 şi tensiunea maximă). Mai multe porţi conectate împreună se pot folosi pentru stocare (circuite de memorare) sau manipulare (circuite de calcul). Ieşirea fiecărei porţi reprezintă în acest caz un singur bit dintr-un număr binar compus din mai mulţi biţi.</p>

<h2>Poarta inversoare (NU sau NOT)</h2>

#+CAPTION: poartă inversoare; simbol
[[../poze/04070.png]]

<p>Alăturat este simbolul folosit pentru reprezentarea unei porţi inversoare (NOT). Aceasta se comportă identic cu circuitul analizat mai sus, şi anume: ieşirea porţii este inversă faţa de intrare (intrare 0, ieşire 1 sau intrare 1, ieşire 0). Aceste porţi sunt de fapt circuite cu tranzistoare de genul celui prezentat mai sus, dar, pentru simplificarea analizei circuitelor, se vor folosi aceste simboluri specifice fiecărei porţi.</p>

<div class="clear"></div>

#+CAPTION: poartă inversoare; simbol alternativ
[[../poze/04099.png]]

<p>Un simbol alternativ pentru o poartă inversoare este cel din figura alăturată.</p>

<div class="clear"></div>

<p>Forma triunghiulară este asemănătoare simbolului amplificatorului operaţional. După cum am spus mai sus, porţile sunt de fapt amplificatoare. Metoda standard de reprezentare a unei funcţii inversoare este prin intermediul acelui mic cerc desenat pe terminalul de intrare sau de ieşire. Dacă îndepărtăm acest cerc din simbolul porţii, lăsând doar triunghiul, acest simbol nu ar mai indica o inversare, ci o amplificare. Un astfel de simbol, şi o astfel de poartă chiar există, şi poartă numele de poarta ne-inversoare, sau buffer.</p>

<h2>Poarta ne-inversoare (buffer)</h2>

#+CAPTION: inversare dublă (două porţi inversoare conectate cap-coadă
[[../poze/04087.png]]

<p>Dacă ar fi să conectăm două porţi inversoare, una în continuarea celeilalte, cele două funcţii de inversare s-ar „anula” reciproc. În acest caz, semnalul de ieşire va fi acelaşi cu cel de intrare.</p>

<div class="clear"></div>

#+CAPTION: poartă ne-inversoare (buffer); simbol
[[../poze/04088.png]]

<p>Pentru acest scop, există o poartă logică separată, denumită buffer (sau poartă ne-inversoare). Simbolul este un triunghiu simplu, precum în figura alăturată.</p>

<div class="clear"></div>

<h2>Reprezentarea conexiunilor</h2>

<p>Asemănător simbolului amplificatorului operational, conexiunile de intrare şi de ieşire sunt reprezentate printr-un singur fir, punct de referinţă implicit pentru fiecare cădere de tensiune fiind masa. În circuitele logice, masa este aproape tot timpul reprezentată de către conexiunea negativă a sursei de alimentare. Sursele de alimentare duale sunt rareori folosite în astfel de circuite. Datorită faptului că circuitele logice (cu porţi) sunt de fapt nişte amplficatoare, acestea necesită o sursă de putere pentru funcţionare. La fel ca în cazul AO, conexiunile surselor de alimentare sunt omise pentru simplitate.</p>

#+CAPTION: poartă inversoare; circuit de alimentare complet
[[../poze/04071.png]]

<p>Dacă ar fi să reprezentăm toate conexiunile necesare pentru utilizarea acestei porţi, circuitul ar arăta precum cel din figura alăturată.</p>

<div class="clear"></div>

#+CAPTION: poartă inversoare; circuit de alimentare complet
[[../poze/04072.png]]

<p>Conductorii surselor de alimentare sunt rareori reprezentaţi în circuitele electronice, chiar şi atunci când sunt reprezentate conexiunile pe fiecare poartă. Astfel, eliminând liniile ce nu sunt necesare, obţinem rezultatul alăturat.</p>

<div class="clear"></div>

<p>V<sub>cc</sub> reprezintă tensiunea constantă de alimentare a colectorului din circuitul cu tranzistor bipolar. Punctul de referintă este, desigur, masa. Punctele marcate cu V<sub>cc</sub> sunt toate conectate la acelaşi punct, iar acel punct este borna pozitivă a sursei de alimentare de curent continuu. Valoarea acesteia este de obicei de 5 V.</p>

<h2>Tabelul de adevăr</h2>

<table class="floatleft">
<tr>
<th>Intrare</th>
<th>Ieşire</th>
</tr>
<tr>
<td>0</td>
<td>1</td>
</tr>
<tr>
<td>1</td>
<td>0</td>
</tr>
</table>

<p>O modalitate de exprimare a funcţiei unei porţi logice, poartă numele de tabel de adevăr. Aceste tabele descriu toate combinaţiile posibile ale intrărilor şi rezultatul ieşirilor. Pentru poarta inversoare, sau NOT, prezentată mai sus, tabelul de adevăr este cel alăturat.</p>

<div class="clear"></div>

<table class="floatleft">
<tr>
<th>Intrare</th>
<th>Ieşire</th>
</tr>
<tr>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td>1</td>
<td>1</td>
</tr>
</table>

<p>Pentru poarta ne-inversoare, tabelul de adevăr este puţin diferit.</p>

<div class="clear"></div>

<p>Pentru porţi mai complexe, tabelele de adevăr sunt mai mari decât acesta. Numărul liniilor unui astfel de tabel trebuie să fie egal cu 2<sup>n</sup>, unde n reprezintă numărul intrărilor porţii logice considerate.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>O poartă logică este un amplificator special proiectat pentru reprezentarea numerelor binare sub forma tensiunilor de nivel logic</li>
	<li>Un tabel de adevăr este o metodă standard de reprezentare a relaţiilor dintre mărimile de intrare şi cele de ieşire dintr-un circuit logic</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
