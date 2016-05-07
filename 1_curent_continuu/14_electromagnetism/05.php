<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Inducţia electromagnetică</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Inducţia electromagnetică</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Deşi Oersted a fost cel care a descoperit existenţa electromagnetismului, totuşi, <a href="http://ro.wikipedia.org/wiki/Michael_Faraday">Michael Faraday</a> a fost cel care a deschis drumul <i>generării</i> electricităţii prin <i>inducţie electromagnetică</i>. Faraday a descoperit că la expunerea unui conductor electric unui câmp magnetic (flux magnetic) perpendicular pe acesta şi de intensitatea variabilă, în lungul firului se va genera o tensiune electrică.</p>

<p>O modalitate relativ simplă de a crea acest câmp magnetic de intensitate variabilă este prin deplasarea unui magnet permanent în apropierea firului sau a înfăşurării. Important: intensitatea câmpului trebuie să crească sau să scadă în intensitate <i>perpendicular</i> pe fir (asfel că liniile de câmp să „taie” conductorul); în caz contrar, nu va exista tensiune indusă în fir:</p>

<p><img src="../poze/00318.png" alt="inducţia electromagnetică"/></p>

<p>Expresia matematică pentru valoarea tensiunii generate în funcţie de fluxul câmpului magnetic, expresie dedusă tot de Faraday, este următoarea (observaţi utilizarea litere „e” pentru tensiune. Aceasta se referă la tensiuni <i>instantanee</i>, sau tensiune la un anumit moment din timp, şi nu o tensiune constantă, fixă):</p>

<p><img src="../poze/10236.png" alt="ecuaţia lui Faraday pentru inducţia electromagnetică"/></p>

<p>Termenii „d” sunt specifici analizei matematice şi reprezintă rata de variaţie (creştere, deşcreştere) a fluxului magnetic cu timpul. „N” este numărul de spire din înfăşurare (atunci când aceasta este folosită, pentru o eficienţă electromagnetică maximă).</p>

<p>Fenomenul este utilizat practic pentru construcţia generatoarelor electrice, folosesind putere mecanică pentru deplasarea unui câmp magnetic prin preajma înfăşurărilor (firelor) pentru generarea tensiunii. Aceasta nu este însă singura aplicaţie practică.</p>

<p>Dacă luăm în considerare faptul că la trecerea curentului printr-un conductor electric acesta produce un câmp magnetic perpendicular pe fir, şi că variaţia intensităţii fluxului acelui câmp magnetic variază cu variaţia curentului prin fir, putem vedea că un fir este capabil de inducerea unei tensiuni electrice <i>de-a lungul propriei lungimi</i> prin simpla variaţia a curentului prin el. Acest efect poartă denumirea de <i>auto-inducţie</i>: un câmp magnetic variabil produs de variaţia curentului printr-un fir ce induce o tensiune electrică de-a lungul aceluiaşi fir. Dacă fluxul magnetic este mărit prin îndoirea firului sub formă de colac şi/sau infăşurarea acestuia în jurul unui material cu permeabilitate ridicată, acest efect de tensiune auto-indusă va fi şi mai prounţat. Un dospozitiv construit special pentru a profita de acest efect este <i>bobina</i>, dispozitiv studiat pe larg în următorul capitol.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Un câmp magnetic de intensitatea variabilă perpendicular pe un conductor electric va induce o tensiunea pe lungimea acestui fir. Valoarea tensiunii induse depinde de rata variaţiei fluxului magnetic şi de numărul de înfăşurări (dacă există) expuse variaţiei fluxului</li>
	<li>Ecuaţia lui Faraday pentru tensiune indusă este: e = N(dΦ/dt)</li>
	<li>De-a lungul unui conductor electric străbătut de un curent electric variabil va apărea o tensiune electrică indusă; această variaţie duce la variaţia fluxului magnetic perpendicular pe fir, ce induce la rândul său o tensiune electrică pe lungimea firului conform ecuaţiei lui Faraday. Un dispozitiv construit special pentru folosirea acestui principiu/efect se numeşte <i>bobină</i></li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>