<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Câmpul magnetic şi inductanţa</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Câmpul magnetic şi inductanţa</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Atunci când un conductor este parcurs de curent electric (deplasarea electronilor), se va forma tot timpul un câmp magnetic în jurul acestuia. Acest efect se numeşte <i>electromagnetism</i>. Câmpurile magnetice modifică alinierea electronilor din atomi şi pot duce la apariţia forţelor fizice între atomii, prin spaţiul liber dintre ei, la fel ca în cazul câmpurilor electrice ce iau naştere între particulele încărcate electric. Precum câmpurile electrice, cele magnetice pot ocupa spaţiul dintre corpuri şi pot afecta materia la distanţă.</p>

<p>Câmpurile magnetice se pot măsura prin două mărimi: <i>forţa</i> şi <i>fluxul</i>. <i>Forţa</i> (câmpului) magnetic(ă) este valoarea „forţei de împingere” ce acţionează la distanţă. <i>Fluxul</i> (câmpului) magnetic este cantitatea totală, sau efectul  câmpului prin spaţiu. Aceste două mărimi sunt aproximativ similare tensiunii („împingere”) şi curentului (curgere) printr-un conductor, cu toate că fluxul poate exista şi în vid (fără mişcarea particulelor precum electronii), pe când curentul poate exista doar acolo unde există electroni liber pentru a se deplasa. Fluxul (magnetic) poate întâmpina o anumită opoziţie în spaţiu, analog rezistenţei întâmpinate de electroni în conductori. Valoarea fluxului magnetic dezvoltat în spaţiu este proporţională cu cantitatea forţei magnetice aplicate împărţită la cantitatea opoziţiei faţă de flux. Precum tipul conductorului determină rezistenţa sa specifică faţă de curentul electric, şi tipul materialului ce ocupă spaţiul în care este aplicat câmpul magnetic determină opoziţia specifică faţă de fluxul magnetic.</p>

<p>Pe când un flux electric dintre doi conductori permite acumularea electronilor liberi în cadrul acelor conductori, un flux magnetic permite acumularea unei anumite „inerţii” de deplasare a electronilor prin conductorul ce produce câmpul.</p>

<p><i>Bobinele</i> sunt componente special concepute, pentru a profita de acest fenomen, sub forma unei înfăşurări de material conductor. Această formă suportă un câmp magnetic mai intens decât cel produs de un simplu fir. Unele înfăşurari ale bobinelor sunt realizate în jurul unui anumit tip de material, numit <i>miez</i>. Miezul unei bobine poate fi drept, sau poate forma un drum închis (pătrat, rectangular, circular) pentru menţinearea completă a fluxului magnetic. Toate aceste opţiuni de design au efect final asupra performanţelor şi caracteristicilor bobinelor.</p>

<p>Simbolul unei bobine, precum cel al condensatorului, este simplu, reprezentând înfăşurarea firului. Deşi o înfăşurare generală este simbolul oricărei bobine, cele cu miez sunt câteodată deosebite de celelalte prin adăugarea a două linii paralele cu axa sa. Un simbol mai nou pentru bobină nu mai reprezintă înfăşurărea propriu-zisă, ci se limitează la reprezentarea câtorva „cocoaşe” în serie:</p>

<p><img src="../poze/00355.png" alt="simbolul bobinei"/></p>

<p>Curentul electric produce în cazul de mai sus un câmp magnetic concentrat în jurul bobinei, iar acest flux magnetic reprezintă o stocare de energie cinetică datorată deplasării electronilor prin înfăşurare. Cu cât valoarea curentului prin bobină este mai mare, cu atât va fi mai puternic câmpul magnetic şi cu atât mai mare va fi energia stocată de bobină.</p>

<p><img src="../poze/00320.png" alt="câmpul magnetic în jurul unei bobine conectate în circuit"/></p>

<p>Datorită faptului că bobinele stochează energia cinetică a electronilor ce se deplasează prin înfăşurare sub forma câmpului magnetic, comportamentul acestor dispozitive este foarte diferit de cel al rezistorilor (care pur şi simplu disipă energia sub formă de căldură) dintr-un circuit. Energia stocată dintr-o bobină depinde de cantitatea de curent ce o străbate. Abilitatea unei bobine de a stoca energie în funcţie de curent se traduce printr-o tendinţă de menţinere constantă a curentului ce o străbate. Cu alte cuvinte, bobinele tind să se opună <i>variaţiei</i> curentului. Atunci când valoarea curentului printr-o bobină creşte sau deşcreşte, aceasta „rezistă” <i>variaţiei</i> producând o tensiune la bornele sale de polaritate inversă (opusă) variaţiei.</p>

<p>Pentru a stoca energie într-o bobină, curentul prin aceasta trebuie să crească. Acest lucru înseamnă că şi câmpul magnetic trebuie să crească în forţă, iar această variaţie a forţei câmpului produce la rândul ei o cădere tensiune conform principiului (auto-)inducţiei electromagnetice.  De asemenea, pentru a ceda energia stocată într-o bobină, curentul prin aceasta trebuie să scadă. Acest lucru înseamnă că şi câmpul magnetic trebuie să descrească în forţă, iar această variaţie a câmpului magnetic auto-induce o cădere de tensiune de polaritate opusă.</p>

<p>Asemenea legii de mişcare a lui Newton („un obiect în mişcare tinde să rămână în mişcare; in obiect în repaos tinde să rămână în repaos”) ce descrie tendinţa corpurilor de a se opune variaţiei (schimbărilor) vitezei, putem defini tendinţa unuei bobine de a se opune variaţiei curentului asfel: „Electronii ce se deplasează printr-o bobină tind să rămână în mişcare; electronii ce se află în repaos într-o bobină tind să rămână în repaos.”. Teoretic, o bobină scurt-circuitată va menţine o valoare constantă a curentului la bornele sale fără niciun ajutor extern:</p>

<p><img src="../poze/00321.png" alt="menţinerea constantă a curentului la bornele bobinei scurt-circuitate"/></p>

<p>Practic însă, abilitatea unei bobine de susţinere individuală a unui curent la bornele sale se poate realiza doar cu ajutorul firelor supraconductoare, deoarece rezistenţa inerentă oricărui conductor normal este suficientă pentru disiparea rapidă a puterii din circuit şi descreşterea a curentului fără vreo sursă externă de putere.</p>

<p>Când curentul printr-o bobină creşte, aceasta va genera o cădere de tensiune în direcţia opusă deplasării electronilor, comportamentul fiind asemenea unei sarcini. În această situaţie, spunem că bobina se <i>încarcă</i>, deoarece energie stocată sub formă de câmp magnetic creşte. Observaţi polaritate tensiuni faţă de direcţia curentului:</p>

<p><img src="../poze/00322.png" alt="bobina se comportă ca o sarcină atunci când absoarbe curent din circuitul exterior"/></p>

<p>Atunci când curentul prin bobină deşcreşte, căderea de tensiune generată de aceasta este îndreptată spre direcţia de deplasare a electronilor, comportamentul fiind asemenea unei surse. În această situaţie, spunem că bobina se <i>descarcă</i>, deoarece stocul de energie descreşte, fiind elibertă în circuitul extern. Obervaţi polaritatea căderii de tensiune faţă de direcţia curentului:</p>

<p><img src="../poze/00323.png" alt="bobina se comportă precum o sursă atunci când eliberează curent în circuitul exterior"/></p>

<p>Dacă conectăm bursc o bobină nemagnetizată la o sursă de putere, bobina va rezista iniţial curgeri electronilor prin generarea unei căderi de tensiune egală cu cea a sursei. Pe măsură ce curentul începe să crească, se va crea un câmp magnetic din ce în ce mai puternic ce absoarbe energie de la sursă. Eventual, curentul atinge valoarea maximă şi creşterea sa se opreşte. În acest moment, bobina nu mai absoarbe energie de la sursă, iar căderea de tensiune la bornele sale este minimă (tinde spre zero) (curentul rămâne la valoarea sa maximă). Pe măsura ce o bobină stochează o cantiate mai mare de energie, curentul prin aceasta creşte, iar căderea de tensiune scade. Obervaţi că acest comportament este exact opus comportamentului condensatorului, acolo unde stocarea energie duce la creşterea căderii de tensiune pe component! Condensatoarele stochează energia prin menţinerea unei tensiuni statice între armăturile sale, iar bobinele stochează energie prin menţinerea unui curent prin înfăşurarea sa.</p>

<p>Măsura capacităţii unei bobine de stocare a energiei pentru o anumită valoare a curentului se numeşte <i>inductanţă</i>. Inductanţă măsoară şi intensitate opoziţiei variaţiei de curent (valoarea tensiunii auto-induse pentru o anumită rată de variaţie a curentului). Simbolul acesteia este „L”, iar unitatea de măsură este Henry, prescurtat „H”.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Bobinele reacţionează variaţiei curentului ce le străbate generând o cădere de tensiune la bornele sale de polaritate opusă variaţiei</li>
	<li>Atunci când curentul prin bobină creşte, aceasta se comportă precum o sarcina: va exista o cădere de tensiune la bornele sale pe măsură ce absoarbe energie din circuit (negativă la intrarea curentului în bobină şi pozitivă la ieşire, precum un rezistor)</li>
	<li>Atunci când curentul prin bobină descreşte, aceasta se comportă precum o sarcină: crează o tensiune la bornele sale pe măsură ce eliberează energie în circuit (pozitivă la intrarea curentului şi negativă la ieşire, precum o baterie)</li>
	<li>Proprietatea unei bobine de a stoca energie sub formă de câmp magnetic (şi în consecinţă de a se opune variaţiei curentului) se numeşte <i>inductanţă</i> (L). Unitatea sa de măsură este <i>Henry</i> (H)</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>