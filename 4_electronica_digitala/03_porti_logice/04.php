<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Porţi logice cu două intrări</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Porţi logice cu două intrări</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Având doar o intrare, singurele porţi „disponibile” sunt cele inversoare şi cele ne-inversoare. Pentru a lucra cu mai multe posibilităţi, trebuie să mărim numărul de intrări.</p>

<p>O poartă cu o singură intrare prezintă doar două posibilităţi: fie intrarea este „înaltă” (1), fie este „joasă” (0). În schimb, o poartă cu doua intrări are patru posibilităţi (00, 01, 10, 11). O poartă cu trei intrări are opt combinaţii posibile (000, 001, 010, 011, 100, 101, 110 şi 111). După cum am mai spus, numărul combinaţiilor posible este egal cu 2<sup>n</sup>, unde n este numărul de intrări.</p>

<p>Datorită faptului că există aşa de multe posibilităţi folosind doar două terminale, există mai multe tipuri de porţi logice cu două intrări. Vom prezenta mai jos fiecare tip.</p>

<h2>Poarta logică ŞI (AND)</h2>

<img class="floatleft" src="../poze/04100.png" alt="poarta logică ŞI cu două respectiv trei intrări; simbol"/>

<p>Una dintre cele mai uşor de înţeles porţi este poarta ŞI. Denumirea vine de la faptul că ieşirea porţii va fi 1 dacă şi numai dacă toate intrările sunt 1. Asemenea, ieşirea va fi 0, dacă si numai dacă toate intrările sunt 0. Alăturat este prezentat simbolul porţii ŞI cu două, respectiv trei intrări.</p>

<div class="clear"></div>

<table class="floatleft">
<tr>
	<th>A</th>
	<th>B</th>
	<th>Ieşire</th>
</tr>
<tr>
	<td>0</td>
	<td>0</td>
	<td>0</td>
</tr>
<tr>
	<td>0</td>
	<td>1</td>
	<td>0</td>
</tr>
<tr>
	<td>1</td>
	<td>0</td>
	<td>0</td>
</tr>
<tr>
	<td>1</td>
	<td>1</td>
	<td>1</td>
</tr>
</table>

<p>Tabelul de adevăr pentru poarta ŞI cu două intrări este conform tabelului alăturat.</p>

<div class="clear"></div>

<p>Practic, ceea ce se înţelege din tabelul de adevăr de mai sus poate fi ilustrat în cele ce urmează. Poarta logică ŞI este supusă tuturor posibilităţilor de intrare. Pentru determinarea nivelului logic de ieşire, se foloseşte un LED:</p>

<img class="floatleft" src="../poze/04102.png" alt="exemplificarea tabelului de adevăr a porţii logice ŞI printr-un circuit practic"/>

<img class="floatleft" src="../poze/04103.png" alt="exemplificarea tabelului de adevăr a porţii logice ŞI printr-un circuit practic"/>

<img class="floatleft" src="../poze/04104.png" alt="exemplificarea tabelului de adevăr a porţii logice ŞI printr-un circuit practic"/>

<img class="floatleft" src="../poze/04105.png" alt="exemplificarea tabelului de adevăr a porţii logice ŞI printr-un circuit practic"/>

<div class="clear"></div>

<p>LED-ul este alimentat cu energie electrică doar atunci când ambele intrări logice sunt 1.</p>

<h2>Poarta logică ŞI-negat (NAND)</h2>

<img class="floatleft" src="../poze/04106-1.png" alt="circuitul echivalent al unei porţi logice ŞI negat (NAND)"/>

<p>Poarta ŞI negat este o variaţie a porţii ŞI. Practic, comportamentul porţii este acelaşi ca al porţii ŞI, doar că la ieşire este conectată o poartă NU (inversoare).</p> 

<div class="clear"></div>

<img class="floatleft" src="../poze/04106.png" alt="poarta logică ŞI negat (NAND); simbol"/>

<p>Pentru simbolizarea acestui lucru se trece un mic cerculeţ pe terminalul de ieşire.</p>

<div class="clear"></div>

<table class="floatleft">
<tr>
	<th>A</th>
	<th>B</th>
	<th>Ieşire</th>
</tr>
<tr>
	<td>0</td>
	<td>0</td>
	<td>1</td>
</tr>
<tr>
	<td>0</td>
	<td>1</td>
	<td>1</td>
</tr>
<tr>
	<td>1</td>
	<td>0</td>
	<td>1</td>
</tr>
<tr>
	<td>1</td>
	<td>1</td>
	<td>0</td>
</tr>
</table>

<p>Tabelul de adevăr este exact invers faţă de cel prezentat anterior pentru poarta ŞI.</p>

<div class="clear"></div>

<p>După câte se poate observa, principiul este asemănător: ieşirea este 1 dacă toate intrările sunt 0 şi invers.</p>

<h2>Poarta logică SAU (OR)</h2>

<img class="floatleft" src="../poze/04107.png" alt="poarta logică SAU (OR); simbol"/>

<p>Ieşirea unei porţi logice SAU este 1 dacă oricare dintre intrări este 1. Ieşirea este 0 doar dacă toate intrările sunt 0.</p>

<div class="clear"></div>

<table class="floatleft">
<tr>
	<th>A</th>
	<th>B</th>
	<th>Ieşire</th>
</tr>
<tr>
	<td>0</td>
	<td>0</td>
	<td>0</td>
</tr>
<tr>
	<td>0</td>
	<td>1</td>
	<td>1</td>
</tr>
<tr>
	<td>1</td>
	<td>0</td>
	<td>1</td>
</tr>
<tr>
	<td>1</td>
	<td>1</td>
	<td>1</td>
</tr>
</table>

<p>Tabelul de adevăr este cel alăturat.</p>

<div class="clear"></div>

<p>Următoarele ilustraţii redau modul de funcţionare a porţii SAU, atunci când cele două intrări foarmează toate combinaţiile posibile. Indicaţia vizuală a ieşirii este furnizată de un LED:</p>

<img class="floatleft" src="../poze/04109.png" alt="exemplificarea tabelului de adevăr a porţii logice SAU printr0un circuit practic"/>

<img class="floatleft" src="../poze/04110.png" alt="exemplificarea tabelului de adevăr a porţii logice SAU printr-un circuit practic"/>

<img class="floatleft" src="../poze/04111.png" alt="exemplificarea tabelului de adevăr a porţii logice SAU printr-un circuit practic"/>

<img class="floatleft" src="../poze/04112.png" alt="exemplificarea tabelului de adevăr a porţii logice SAU printr-un circuit practic"/>

<div class="clear"></div>

<p>Dacă oricare dintre intrări se află în poziţia 1, LED-ul va fi alimentat cu energie electrică.</p>

<h2>Poarta logică SAU negat (NOR)</h2>

<img class="floatleft" src="../poze/04113-1.png" alt="schema echivalentă a unei porţi SAU negate (NOR)"/>

<p>După cum probabil v-aţi dat seama, poarta SAU negată este o partă SAU cu valoarea de ieşire negată (0 negat este 1, iar 1 negat este 0). Schema echivalentă este cea din figura alăturată.</p>

<div class="clear"></div>

<img class="floatleft" src="../poze/04113.png" alt="simbolul unei porţi SAU negate (NOR)"/>

<p>Pentru simplificarea reprezentării însă, există desigur un simbol special, conform figurii alăturate.</p>

<div class="clear"></div>

<table class="floatleft">
<tr>
	<th>A</th>
	<th>B</th>
	<th>Ieşire</th>
</tr>
<tr>
	<td>0</td>
	<td>0</td>
	<td>1</td>
</tr>
<tr>
	<td>0</td>
	<td>1</td>
	<td>0</td>
</tr>
<tr>
	<td>1</td>
	<td>0</td>
	<td>0</td>
</tr>
<tr>
	<td>1</td>
	<td>1</td>
	<td>0</td>
</tr>
</table>

<p>Tabelul de adevăr este exact invers faţă de cel al porţii SAU.</p>

<div class="clear"></div>

<p>Principiul de bază este următorul: ieşirea este zero dacă cel puţin una dintre intrări este 1 şi este 1 doar atunci când ambele intrări sunt 0.</p>

<h2>Poarta logică ŞI negativă</h2>

<img class="floatleft" src="../poze/04114-1.png" alt="schema echivalentă a unei porţi logice ŞI negative"/>

<p>O poartă logică ŞI negativă funcţionează la fel ca o poartă ŞI având toate intrările inversate (conectate la porţi NU).</p>

<div class="clear"></div>

<img class="floatleft" src="../poze/04114-2.png" alt="simbolul unei porţi logice ŞI negative"/>

<p>Conform standardului de notare, aceste intrări sunt simbolizate cu ajutorul unor cerculeţe.</p>

<div class="clear"></div>

<table class="floatleft">
<tr>
	<th>A</th>
	<th>B</th>
	<th>Ieşire</th>
</tr>
<tr>
	<td>0</td>
	<td>0</td>
	<td>1</td>
</tr>
<tr>
	<td>0</td>
	<td>1</td>
	<td>0</td>
</tr>
<tr>
	<td>1</td>
	<td>0</td>
	<td>0</td>
</tr>
<tr>
	<td>1</td>
	<td>1</td>
	<td>0</td>
</tr>
</table>

<p>Contrar intuiţiei, comportamentul logic al unei porţi ŞI negative nu este acelaşi cu al unei porţi ŞI negate. De fapt, tabelul său de adevăr este identic cu al unei porţi logic SAU negate.</p>

<div class="clear"></div>

<h2>Poarta logică SAU negativă</h2>

<img class="floatleft" src="../poze/04115-1.png" alt="schema echivalentă a unei porţi logice SAU negative"/>

<p>Conform aceluiaşi principiu, o poartă logică SAU negativă se comportă asemenea unei porţi SAU cu toate intrările inversate.</p>

<div class="clear"></div>

<img class="floatleft" src="../poze/04115-2.png" alt="simbolul unei porţi logice SAU negative"/>

<p>Conform standardului de notare, aceste intrări inversate sunt simbolizate prin cerculeţe.</p>

<div class="clear"></div>

<table class="floatleft">
<tr>
	<th>A</th>
	<th>B</th>
	<th>Ieşire</th>
</tr>
<tr>
	<td>0</td>
	<td>0</td>
	<td>1</td>
</tr>
<tr>
	<td>0</td>
	<td>1</td>
	<td>1</td>
</tr>
<tr>
	<td>1</td>
	<td>0</td>
	<td>1</td>
</tr>
<tr>
	<td>1</td>
	<td>1</td>
	<td>0</td>
</tr>
</table>

<p>Comportamentul logic şi tabelul de adevăr este exact acelaşi cu al unei porţi logice ŞI-negat.</p>

<div class="clear"></div>

<h2>Poarta logică SAU-exlusiv (XOR)</h2>

<img class="floatleft" src="../poze/04116.png" alt="simbolul unei porţi logice SAU-exclusiv"/>

<p>Ultimele şase variante de porţi logice au fost variaţii directe ale celor trei funcţii de bază: ŞI, SAU şi NU. Poarta SAU-exclusiv este însă diferită.</p>

<div class="clear"></div>

<table class="floatleft">
<tr>
	<th>A</th>
	<th>B</th>
	<th>Ieşire</th>
</tr>
<tr>
	<td>0</td>
	<td>0</td>
	<td>0</td>
</tr>
<tr>
	<td>0</td>
	<td>1</td>
	<td>1</td>
</tr>
<tr>
	<td>1</td>
	<td>0</td>
	<td>1</td>
</tr>
<tr>
	<td>1</td>
	<td>1</td>
	<td>0</td>
</tr>
</table>

<p>Ieşirea este 1 doar dacă intrările se alfă la nivele logice diferite, fie 0 şi 1, fie 1 şi 0. Altfel, ieşirea este 0 dacă toate intrările se află la acelaşi nivel logic.</p>

<div class="clear"></div>

<img class="floatleft" src="../poze/04117.png" alt="schema echivalentă a unei porţi logice SAU-exclusiv formată din porţi SI, SAU şi NU"/>

<p>Circuitele echivalente pentru o poartă SAU-exclusiv sunt formate din porţi ŞI, SAU şi NU. O metodă directă de simularea a unei porţi SAU-exclusiv este prin introducerea în circuit pentru început a unei porţi SAU. Apoi adăugăm porţi astfel încât să impiedicăm o valoare de 1 pe ieşire atunci când ambele intrări sunt 1.</p>

<div class="clear"></div>

<p>Putem verifica faptul că tabelul de adevăr al circuitului echivalent de mai sus este acelaşi cu tabelul de adevăr prezentat iniţial.</p>

<p>În acest circuit, poarta ŞI de ieşire se comportă ca un repetor (memorie) pentru poarta SAU atunci când ieşirea porţii ŞI-negat este 1. Acest lucru se întâmplă pentru primele trei combinaţii (00, 01 şi 10). Totuşi, atunci când ambele intrări sunt 1, ieşirea porţii SAU-negat este 0, forţând o valoare de 0 pe ieşirea porţii SAU.</p>

<img class="floatleft" src="../poze/04118.png" alt="schema echivalentă a unei porţi logice SAU-exclusiv formată din porţi ŞI, SAU şi NU"/>

<p>Un alt circuit echivalent pentru o poartă SAU-exclusiv este format din două porţi ŞI negate (cu ajutorul unei porţi NU). Acestea generează la ieşire o valoare de 1 dacă intrările sunt 01, respectiv 10. O poartă finală SAU  permite o ieşire de 1 dacă cel puţin o poartă ŞI are o ieşire de 1.</p>

<div class="clear"></div> 

<p>Porţile SAU-exclusiv sunt utilizate în circuitele unde este necesară o comparaţie bit cu bine a două sau mai multe numere binare.</p>

<h2>Poarta logică SAU-negat-exclusiv (XNOR)</h2>

<img class="floatleft" src="../poze/04119-1.png" alt="schema echivalentă a unei porţi logice SAU-negat-exclusiv"/>

<p>Ultima poartă pe care o vom analiza este poarta SAU-negat-exclusiv. Aceasta este echivalentă cu poarta SAU-exclusiv, doar că ieşirea este inversată.</p>

<div class="clear"></div>

<img class="floatleft" src="../poze/04119.png" alt="simbolul unei porţi logice SAU-negat-exclusiv"/>

<p>Desigur, şi pentru această poartă există un simbol special.</p>

<div class="clear"></div>

<table class="floatleft">
<tr>
	<th>A</th>
	<th>B</th>
	<th>Ieşire</th>
</tr>
<tr>
	<td>0</td>
	<td>0</td>
	<td>1</td>
</tr>
<tr>
	<td>0</td>
	<td>1</td>
	<td>0</td>
</tr>
<tr>
	<td>1</td>
	<td>0</td>
	<td>0</td>
</tr>
<tr>
	<td>1</td>
	<td>1</td>
	<td>1</td>
</tr>
</table>

<p>Şi, în sfârşit, să vedem cum arată tabelul de adevăr pentru această poartă.</p>

<div class="clear"></div>

<p>Aşa cum reiese din acest tabel, scopul unei porţi logice SAU-negat-exclusiv este de a genera un nivel logic 1 atunci când ambele intrări sunt la acelaşi nivel (fie 00, fie 11).</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Poarta logică ŞI: ieşirea este 1 doar dacă ambele intrări sunt 1</li>
	<li>Poarta logică SAU: ieşirea este 1 dacă intrarea A sau intrarea B este 1 </li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>