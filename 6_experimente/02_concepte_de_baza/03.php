<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Realizarea unui circuit simplu</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Realizarea unui circuit simplu</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Scopul experimentului</h2>

<p>În cele ce urmează vom realiza un circuit simplu, format dintr-un bec şi o baterie, precum cel prezentat în figura de mai jos:</p>

<img src="../poze/05045.png" alt="circuit electric rezitiv simplu"/>

<p>Practic, circuitul nostru va arăta astfel:</p>

<img src="../poze/05046.png" alt="circuit electric rezitiv simplu"/>

<p>Acesta reprezintă de fapt cel mai simplu circuit pe care îl vom studia în întreg volumul: o baterie şi un bec. Conectaţi becul la baterie, conform figurii de mai sus. Acesta ar trebui sa se aprindă în cazul în care ambele se află în stare de funcţionare, iar tensiunea bateriei este suficientă pentru a-l aprinde.</p>

<p>În cazul în care există o discontinuitate (circuit deschis), indiferent în ce parte a circuitului, becul nu se va aprinde. <i>Nu</i> contează locul apariţiei unei astfel de discontinuităţi. Experimentaţi cu scenariile prezentate mai jos ca să vă convingeţi de acest lucru:</p>

<img src="../poze/05047.png" alt="discontinuitatea unui circuit electric"/>

<img src="../poze/05048.png" alt="discontinuitatea unui circuit electric"/>

<img src="../poze/05049.png" alt="discontinuitatea unui circuit electric"/>

<img src="../poze/05050.png" alt="discontinuitatea unui circuit electric"/>

<h2>Desfăşurarea experimentului</h2>

<p>Folosind multimetrul setat pe poziţia DC, măsuraţi căderea de tensiune la bornele bateriei, la bornele becului şi la capetele firului de scurt-circuit. Familiarizaţi-vă cu valorile normale ale tensiuni într-un cirucit aflat în funcţionare.</p>

<p>Acum, întrerupeţi circuitul şi remăsuraţi tensiune între aceleaşi seturi de puncte. Opţional, măsuraţi tensinea în locul întreruperii circuitului, astfel:</p>

<img src="../poze/05051.png" alt="discontinuitatea unui circuit electric"/>

<p>Ce tensiuni sunt similare tensiunilor de dinainte? Ce tensiuni sunt diferite după introducerea întreruperii? Ce cantitate de tensiune se regăseşte la locul întreruperii? Care este polaritatea căderii de tensiune de la locul întreruperii, indicată de aparatul de măsură?</p>

<p>Refaceţi circuitul prin reconectarea bateriei la bec, şi întrerupeţi circuitul în alt loc. Măsuraţi din nou căderile de tensine. Familiarizaţi-va cu valorile tensiunilor într-un circuit deschis.</p>

<p>Realizaţi acelaşi circuit pe o placă de test. Aveţi grijă să introduceţi becul şi firele pe placă astfel încât să există contact între ele (continuitatea circuitului). Exemplul de mai jos este doar un exemplu, şi nu reprezintă singura modalitate de realizare a unui circuit pe placă:</p>

<img src="../poze/05052.png" alt="circuit electric pe o placă de test"/>

<p>Experimentaţi cu diferite configuraţii ale circuitului pe placa de test. Dacă întâmpinaţi o situaţie în care becul nu se aprinde, iar firele conductoare se încălzesc, aveţi probabil de a face cu un scurt-circuit. Cu alte cuvinte, există un drum cu o rezistenţă mai mică decât a becului. Curentul va „prefera” acest drum în detrimentul becului. Să vedem un astfel de exemplu:</p>

<img src="../poze/05053.png" alt="circuit electric pe o placă de test; scurt-circuit"/>

<p>Şi un exemplu tipic de scurt-circuit <i>accidental</i> realizat de obicei de cei care nu sunt familiarizaţi încă cu folosirea plăcii de test:</p>

<img src="../poze/05054.png" alt="circuit electric pe o placă de test; scurt-circuit"/>

<p>Vă daţi seama de unde rezultă scurt-circuitul? Astfel de scenarii trebuie însă evitate cu orice preţ, întrucât scurt-circuitele pot duce la distrugeri materiale şi vătămări corporale.</p>

<p>Puteţi de asemenea realiza circuitul de mai sus folosindu-vă de o regletă de borne:</p>

<img src="../poze/05055.png" alt="circuit electric pe o regletă de borne"/>




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