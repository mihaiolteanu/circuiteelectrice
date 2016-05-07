<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Aritmetica booleană</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Aritmetica booleană</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Numere binare şi numere booleene</h2>

<p>Trebuie înţeles încă de la început faptul că numerele booleene nu sunt tot una cu numerele binare. Numerele booleene reprezintă un sistem matematic total diferit de cel al numerelor reale, pe când notaţia binare este doar atât: o notaţie alternativă a numerelor reale. Cele două sunt adesea confundate datorită faptului că utilizează aceleaşi cifre: 0 şi 1. Diferenţa constă în faptul că valorile booleene sunt limitate la un singur bit (fie 0, fie 1), pe când numerele binare pot fi compuse din mai mulţi biţi.</p>

<h2>Adunarea booleană</h2>

<p>Să începem aşadar capitolul de algebră booleană prin adunarea numerelor:</p>

<div class="formula">
0 + 0 = 0
0 + 1 = 1
1 + 0 = 1
1 + 1 = 1
</div>

<p>Primele trei sume nu sunt deloc ieşite din comun din punct de vedere al operaţiei de adunare elementară. Ultima sumă în schimb, s-a dovedit a fi responsabilă de mai multă confuzie decât oricare alt element al electronicii digitale. Forma sa nu se supune princiilor de bază ale matematicii. Într-adevăr, aceasta contrazice principiile adunării numerelor reale, dar nu şi a numerelor booleene. În cadrul matematicii booleene există doar două valori posibile pentru oricare valoare şi pentru orice operaţie matematică: 0 sau 1. Nu există o valoare „2”. Din moment ce suma „1 + 1” nu poate fi 0, prin eliminare, această sumă trebuie să fie 1.</p>

<p>De asemenea, nu contează nici câţi termeni conţine suma. Să considerăm următoarele sume, de exemplu:</p>

<div class="formula">
0 + 1 + 1 = 1
1 + 1 + 1 = 1
0 + 1 + 1 + 1 = 1
1 + 0 + 1 + 1 + 1 = 1
</div>

<p>Revenind la primul set de ecuaţii, putem observa că aceste sume nu sunt altceva decât tabelul de adevăr al unei porţi logice SAU. Cu alte cuvinte, adunarea booleană corespunde funcţiei logice a porţii SAU, precum şi comutatoarelor conectate în paralel:</p>

<img src="../poze/14009.png" alt="poartă logică SAU şi comutatoare paralel (0 + 0)"/>

<img src="../poze/14010.png" alt="poartă logică SAU şi comutatoare paralel (0 + 1)"/>

<img src="../poze/14011.png" alt="poartă logică SAU şi comutatoare paralel (1 + 0)"/>

<img src="../poze/14012.png" alt="poartă logică SAU şi comutatoare paralel (1 + 1)"/>

<h2>Scăderea şi împărţirea booleană</h2>

<p>În cadrul matematicii booleene nu există noţiunea de scădere. Scăderea implică existenţa numerelor negative: 5 - 3 este identic cu 5 + (-3), de exemplu. Dar în algebra booleeană, valorile negative nu există (doar 0 şi 1).</p>

<p>De asemenea, nu există nici operaţie de împărţirea booleeană. Împărţirea nu este altceva decât o scădere compusă, la fel cum înmulţirea nu este altceva decât adunare compusă.</p>

<h2>Înmulţirea booleană</h2>

<p>Înmulţirea booleană este permisă, iar regulile sunt aceleaşi cu înmulţirea numerelor reale: orice număr înmulţit cu 0 este 0, şi orice număr înmultit cu 1 rămâne neschimbat:</p>

<div class="formula">
0 x 0 = 0
0 x 1 = 0
1 x 0 = 0
1 x 1 = 1
</div>

<p>Setul de ecuaţii ar trebui să vă fie cunoscute: sunt aceleaşi reguli ce se regăsesc în tabelul de adevăr al porţii ŞI. Cu alte cuvinte, înmulţirea booleană corespunde funcţiei logice a porţii ŞI, precum şi comutatoarelor conectate în serie:</p>

<img src="../poze/14013.png" alt="poartă logică ŞI şi comutatoare serie (0 x 0)"/>

<img src="../poze/14014.png" alt="poartă logică ŞI şi comutatoare serie (0 x 1)"/>

<img src="../poze/14015.png" alt="poartă logică ŞI şi comutatoare serie (1 x 0)"/>

<img src="../poze/14016.png" alt="poartă logică ŞI şi comutatoare serie (1 x 1)"/>

<h2>Variabile booleene şi complementul lor</h2>

<p>La fel ca algebra „normală”, algebra booleană utilizează litere pentru desemnarea variabilelor. Dar, faţa de algebra „normală”, aceste variabile se trec tot timpul cu majuscule. Datorită faptului că există doar două stări posibile, fie 1, fie 0, fiecare variabilă posedă şi un complement: valoarea opusă a acesteia. De exemplu, dacă variabila „A” este 0, atunci complementul ei este 1. Complementul se specifică prin intermediul unei linii deasupra variabilei, astfel:</p>

<img src="../poze/14005.png" alt="complementul unei variabile booleene"/>

<p>Sub formă scrisă, complementul lui „A” este desemnat prin „A-negat”. Câteodată se utilizează simbolul „'” pentru reprezentarea complementului (A'). De obicei însă, simbolul cu linie este mai folosit decât simbolul „'”. Motivele le vom afla puţin mai încolo.</p>

<p>Complementarea booleeană este echivalentă cu o poartă logică NU, sau cu un contact normal-închis:</p>

<img src="../poze/14017.png" alt="complementul unei variabile booleene; poartă logică SAU şi contact normal-închis"/>

<img src="../poze/14018.png" alt="complementul unei variabile booleene; poartă logică SAU şi contact normal-închis"/>

<p class="sumar">Sumar:</p>
<ul>
	<li>Adunarea booleană este echivalentă unei porţi logice SAU, precum şi contactelor conectate în paralel</li>
	<li>Înmulţirea booleană este echivalentă unei porţi logice ŞI, precum şi contactelor conectate în serie</li>
	<li>Complementarea booleană este echivalentă unei porţi logice NU, precum şi contactelor normal-închise</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>