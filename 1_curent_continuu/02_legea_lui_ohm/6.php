<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Conexiunea unui circuit</title>
  </head>
<body>
  <div id="meniu"><?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?></div>
  <div id="header">
	<h1>6. Conexiunea unui circuit</h1>
  </div>
  
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>
  
<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>Până în acest moment am analizat circuite cu o singură baterie şi o singură rezistenţă fără a lua în calcul firele conductoare dintre componente, atâta timp cât am format un circuit complet. Contează lungimea firelor sau „forma” circuitului pentru calculele noastre? Să ne uităm aşadar la câteva configuraţii ale circitelor şi să aflăm:</p>

#+CAPTION: circuite electrice simple, diferite forme
[[../poze/00049.png]]

<p>Atunci când conectăm două puncte dintr-un circuit printr-un fir conductor, presupunem de obicei că acele fire prezintă o rezistenţă neglijabilă. Prin urmare, ele nu contribuie într-o măsură hotărâtoare la rezistenţă totală a circuitului, iar singura rezistenţă pe care o luăm în calcul este rezistenţă componentelor din circuit. În circuitele de mai sus, singura rezistenţă este rezistenţă de 5 Ω a rezistoarelor, şi o vom considera doar pe aceasta în calculele noastre. În realitate, firele metalice <i>au</i> o anumită rezistenţă (precum şi sursele de tensiune!), dar acele rezistenţe sunt în general mult mai mici decât rezistenţa prezentă în celelalte componente din circuit încât pot fi neglijate. Excepţie fac firele din circuitele de putere (curenţi mari), unde chiar şi o rezistenţă foarte mică poate genera căderi de tensiune importante.</p>

<p>Dacă rezistenţă firelor conductoare este mică spre zero, putem considera punctele conectate din circuit ca fiind <i>comune</i> din punct de vedere electric. Punctele 1 şi 2 din circuitele de mai sus pot exista fizic foarte aproape unul de celălalt sau la o distanţă destul de mare pentru că, din punct de vedere al măsurătorilor tensiunii şi rezistenţei, acest lucru nu contează. Acelaşi lucru este valabil şi pentru punctele 3 şi 4. Este ca şi cum capetele rezistorilor ar fi ataşate direct la terminalele bateriei din punct de vedere al legii lui Ohm. Este bine de ştiut acest lucru, pentru că asta înseamnă că putem re-trasa circuitul, lungind sau scurtând firele după bunul nostru plac, fără a afecta funcţionarea circuitului în mod decisiv. Tot ceea ce contează este legarea componentelor unul de celălalt în aceeiaşi secvenţă.</p>

<p>Rezultă şi faptul că valorile tensiunii între seturi de puncte „comune” vor fi identice. Adică, tensiunea între punctele 1 şi 4 (la bornele bateriei), este aceeiaşi cu tensiunea dintre punctele 2 şi 3 (la bornele rezistorului). Să analizăm următorul circuit şi să vedem care sunt punctele comune:</p>

#+CAPTION: circuite electrice simple, diferite forme
[[../poze/00050.png]]

<p>Aici avem doar două componente fără a lua în considerare şi firele: bateria şi rezistorul. Cu toate că firele au un drum mai încâlcit, ele formează un circuit şi există câteva puncte comune din punct de vedere electric în acest circuit, şi anume: punctele 1, 2 şi 3 pentru că aceastea sunt toate conectate între ele printr-un singur fir (fără alt component electric între ele). Acelaşi lucru este valabil şi pentru punctele 4, 5 şi 6.</p>

<p>Tensiunea între punctele 1 şi 6 este de 10 volţi, direct de la baterie. Dar, pentru că punctele 5 şi 4 sunt comune cu 6, iar punctele 2 şi 3 sunt comune cu 1, între aceste două grupe de puncte se regăsesc de asemenea 10 volţi:</p>

<pre>
Între punctele 1 şi 4 = 10 volţi                             
Între punctele 2 şi 4 = 10 volţi                               
Între punctele 3 şi 4 = 10 volţi (direct la bornele rezistorului) 
Între punctele 1 şi 5 = 10 volţi                              
Între punctele 2 şi 5 = 10 volţi                              
Între punctele 3 şi 5 = 10 volţi                               
Între punctele 1 şi 6 = 10 volţi (direct la bornele bateriei)  
Între punctele 2 şi 6 = 10 volţi                             
Între punctele 3 şi 6 = 10 volţi                      
</pre>

<p>Din moment ce aceste puncte sunt conectate înpreună prin fire cu rezistenţă zero (ideală), căderea de tensine dintre aceste puncte este zero, indiferent ce cantitate de curent avem prin aceste puncte/fire. Dacă am fi să citim tensiunea între puncte comune, aceasta ar trebui să fie practic zero</p>

<pre>
Între punctele 1 şi 2 = 0 volţi     Punctele 1, 2, şi 3 sunt  
Între punctele 2 şi 3 = 0 volţi     comune din punct de vedere electric    
Între punctele 1 şi 3 = 0 volţi                          
                                                             
Între punctele 4 şi 5 = 0 volţi     Punctele 4, 5, şi 6 sunt 
Între punctele 5 şi 6 = 0 volţi     comune din punct de vedere electric
Între punctele 4 şi 6 = 0 volţi                         
</pre>

<p>Acest lucru are sens şi din punct de vedere matematic. Cu o baterie de 10 volţi şi un rezistor de 5 Ω, curentul va fi de 2 amperi. Rezistenţa firelor fiind zero, căderea de tensiune pe întregul circuit poate fi determinată cu ajutorul legii lui Ohm, asfel:</p>

#+CAPTION: relaţii matematice
[[../poze/10267.png]]

<p>Pentru că punctele comune din punct de vedere electric dintr-un circuit au aceeiaşi tensiunea şi rezistenţă relativă, firele ce conectează aceste puncte sunt de obicei desemnate printr-o aceeiaşi notaţie. Asta nu înseamnă că punctele <i>terminalelor</i> au aceeiaşi denumire, ci doar firele de legătură. De exemplu:</p>

#+CAPTION: numerotarea firelor într-un circuit
[[../poze/00051.png]]

<p>Punctele 1, 2 şi 3 sunt comune, prin urmare firul ce conectează punctele 1 şi 2 este notat asemenea (firul #2) firului ce conectează punctele 2 şi 3 (firul #2). Într-un circuit real, firul dintre punctele 1 şi 2 se poate avea culori şi mărimi diferite faţă de firul ce conectează punctele 2 şi 3, dar notaţia lor ar trebui să fie asemănătoare. Acelaşi lucru este valabil şi pentru firele ce conectează punctele 6, 5 şi 4.</p>

<p>Ne putem folosi de faptul că tensiunea dintre punctele comune este zero ca şi o metodă foarte bună de detectare a defectelor din circuit. Dacă măsor tensiunea din circuit dintre două puncte ce ar trebui să fie comune, aceasta ar trebui să fie zero. Dar dacă tensiunea citită este diferită de zero între aceste două puncte, atunci pot spune cu siguranţă că cele două puncte nu au o conexiune directă între ele (nu sunt comune), caz în care s-ar putea ca între cele două puncte, circuitul studiat să fie defapt (accidental) deschis.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Presupunem că firele conductoare dintr-un circuit au rezistenţă zero.</li>
	<li>Firele dintr-un circuit pot fi lungite sau scurtate fără a afecta funcţia circuitului - ceea ce este important esta ca toate componentele să fie legate unul de celălalt (circuit închis) în aceeiaşi ordine.</li>
	<li>Într-un circuit, punctele direct conectate între ele printr-un fir cu rezistenţă zero, sunt considerate <i>comune din punct de vedere electric</i></li>
	<li>Între punctele comune, cu rezistenţă zero între ele, va exista o cădere de tensiune de zero volţi, indiferent de valoarea curentului (caz ideal)</li>
	<li>Valorile tensiunii sau curentului între seturi de puncte comune vor fi egale</li>
	<li>Toate aceste reguli se aplică doar în condiţii <i>ideale</i>, acolo unde presupunem că firele conductoare posedă rezistenţă zero. În realitate, nu este aproape niciodată cazul (excepţie în cazul <a href="http://ro.wikipedia.org/wiki/Supraconductibilitate">supraconductibilităţii</a>, dar rezistenţa firelor ar trebui totuşi să fie suficient de mică asfel încât principiile generale prezentate aici să-şi menţină valabilitatea</li>
</ul>

<a href="#meniu">&uarr; sus</a>
</div>

<div id="footer">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>

</body>
</html>
