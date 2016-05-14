<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Capacitatea bateriilor</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Capacitatea bateriilor</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>Datorită faptului că bateriile dau naştere unei curgeri de electroni prin circuit prin intermediul reacţiilor chimice (schimb de electroni), şi, datorită faptului că numărul de molecule dintr-o baterie este limitat, trebuie să existe o limită a cantităţii totale de electroni dintr-o baterie ce sunt „împinşi” în circuit, înainte ca rezervele de energie a acesteia să se termine. Am putea măsura capacitatea unei baterii referindu-ne la numărul total de electroni, dar această cifră ar fi extrem de mare. Am putea folosi coulomb-ul (egal cu 6,25 x 10<sup>18</sup> electroni), astfel încât cantităţile cu care lucrăm să fie mult mai practice.</p>

<h2>Amper-oră (Ah)</h2>

<p>Totuşi, în practică, nu se utilizează mărimile de mai sus, ci se lucrează cu amper-oră (Ah). Din moment ce un amper reprezintă o curgere de un coulomb de electroni pe secundă, iar într-o oră sunt 3.600 de secunde, putem exprima o relaţie directă între numărul de coulombi (numărul de electroni) şi amper-oră: 1 Ah - 3600 C.</p>

<p>O baterie cu o capacitate de 1 Ah poate alimenta o sarcină cu un curent continuu de 1 A pentru o perioadă de 1 oră, sau 2 A pentru o jumătate de oră, etc. După această perioadă, spunem că baterie este descărcată. În cazul unei baterii ideale, relaţia dintre curentul continuu şi timpul de descărcare este stabilă şi absolută. Bateriile reale nu au însă acest comportament. Din acest motiv, atunci când se dă numărul de amperi-oră pentru o baterie, acest număr este specificat fie pentru o anumită valoare a curentului, fie a timpului, fie se presupune că este dată pentru o perioadă de 8 ore (în cazul în care nu este inclus alt factor de limitare).</p>

<p>În cazul acumulatorilor, notaţia amper-oră specifică de fapt timpul necesar de încărcare pentru o anumită valoare a curentului de încărcare. De exemplu, o baterie auto de 70 amperi-oră, complet descărcată, va necesita o perioadă de încărcare de 10 ore la un curent de încărcare constant de 7 A (70 / 7).</p>

<h2>Descărcarea bateriilor</h2>

<p>De exemplu, o baterie auto tipică poate avea o capacitate de 70 Ah, specificată pentru un curent de 3,5 A. Acest lucru înseamnă că bateria ar putea genera un curent de 3,5 A pentru o perioadă de 20 de ore (70 / 3,5). Dar, să presupunem că am conecta o sarcină cu o rezistenţă mai mică la bornele bateriei, sarcină ce consumă un curent de 70 A. Ecuaţia noastră ne-ar spune că în acest caz, bateria ar funcţiona pentru exact o oră (70 / 70), dar acest lucru nu este neapărat valabil în realitate. În cazul unor curenţi mai mare, bateria va disipa o căldură mai mare pe rezistenţa sa internă. Efectul constă în modificarea reacţiilor chimice ce au loc în interiorul acesteia. Realitatea este că, bateria se va descărca într-o perioadă mai mică de timp decât o oră.</p>

<p>Invers, dacă ar fi să conectăm o sarcină uşoară (1 mA) la bornele bateriei, ecuaţia ne-ar spune că baterie ar trebui să genereze putere pentru o perioadă de 70.000 de ore, puţin sub 8 ani. Totuşi, sunt foarte mari şanse ca energia chmică a unei baterii reale să se consume datorită altor factori, precum evaporarea electrolitului, deteriorarea electrozilor, scurgeri de curent în interiorul bateriei, înainte de perioada de 8 ani calculată mai sus.</p>

<p>În concluzie, relaţia amper-oră este doar o aproximare ideală a unei baterii reale. Această trebuie luată în considerare doar pentru valori apropiate de curent sau de timp specificate de producător. Unii producători specifică însă factori de reducere a capacităţii totale pentru funcţionarea la curenţi şi/sau temperaturi diferite de cele standard.</p>

<h2>Verificarea stării de încărcare a unei baterii</h2>

<p>Pe măsură ce o baterie se descarcă, pe lângă diminuarea stocului de energie internă, creşte şi rezistenţa internă a acesteia. Electrolitul devine din ce în ce mai puţin conductiv iar tensiunea bateriei scade pe măsură ce substanţele chimice devin din ce în ce mai diluate. Cel mai înşelător efect al unei baterii care se descarcă este creşterea rezistenţei. Cea mai bună metodă de verificare a stării unei baterii constă în măsurarea căderii de tensiune la bornele sale când aceasta se află <i>conectată în circuit</i> şi generează un curent electric considerabil. Altfel, o simplă conectare a voltmetrului la bornele bateriei poate indica eronat o baterie „sănătoasă” (tensiune corespunzătoare), chiar dacă rezistenţa sa internă a crescut considerabil. Curentul electric „considerabil” este determinat de parametrii de proiectare a fiecărei baterii în parte. O cădere de tensiune prea mică (indicată de voltmetru), va indica, evident, o baterie descărcată. Să luăm câteva exemple.</p>

<p>Scenariul pentru o baterie complet încărcată arată aproximativ astfel:</p>

#+CAPTION: verificarea stării de încărcare a unei baterii
[[../poze/00266.png]]

<p>Dacă bateria se descarcă puţin:</p>

#+CAPTION: verificarea stării de încărcare a unei baterii
[[../poze/00267.png]]

<p>Apoi puţin mai mult:</p>

#+CAPTION: verificarea stării de încărcare a unei baterii
[[../poze/00268.png]]

<p>Şi încă puţin până când este complet descărcată:</p>

#+CAPTION: verificarea stării de încărcare a unei baterii
[[../poze/00269.png]]

<p>Observaţi diferenţa dintre valoarea tensiunii măsurată cu ajutorul voltmetrului în funcţie de conectarea sau neconectarea bateriei la o sarcină. Înseamnă oare acest lucru că este inutil să verificăm o baterie doar cu ajutorului unui voltmetru (fără sarcină)? Nu chiar. Dacă un voltmetru simplu indică o valoare de doar 7,5 V pentru o baterie de 13,2 V, putem deduce fără urmă de îndoială că aceasta este descărcată. Totuşi, dacă voltmetrul ar indica 12,5 V, bateria este aproape încărcată. Atenţie însă, mărimea rezistorul folosit pe post de sarcină trebuie să corespundă puterii maxime disipate de baterie. Pentru verificarea bateriilor mari, precum bateriile auto (12 V) de plumb-acid, acest lucru înseamnă că va trebui să folosim un rezistor ce poate suporta o putere de câteva sute de W (watt).</p>



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
