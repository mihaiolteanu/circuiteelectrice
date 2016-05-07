<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Semnale analogice şi digitale</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Semnale analogice şi digitale</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Instrumentaţia este un domeniu bazat pe măsurarea şi constrolul proceselor fizice. Aceste procese fizice includ presiunea, temperatura, rata de curgere şi consitenţa chimică printre altele. Un instrument este un dispozitiv ce măsoară şi/sau controlează orice tip de proces fizic. Datorită faptului că valorile şi cantităţile de tensiune, curent şi rezistenţă sunt uşor de măsurat, manipulat şi de transmis pe distanţe mari, acestea sunt adesea folosite pentru reprezentarea acestor tipuri de variabile fizice şi transmiterea lor la distanţă.</p>

<p>Un <i>semnal</i> este orice tip de cantitate fizică ce transmite o informaţie. Vorbitul este cu siguranţă un tip de semnal, întrucât transmite gândurile (informaţii) de la o persoană la alta fizic, prin intermediul sunetului. Gesturile sunt de asemenea informaţii transmise cu ajutorul luminii. Textul este un alt tip de semnal. În acest capitol, cuvântul <i>semnal</i> va fi folosit pentru a <i>reprezenta</i> o cantitate fizică.</p>

<p>Un semnal <i>analog</i> este un semnal cu o variaţie continuă, în contradicţie cu cel <i>digital</i>, ce are o variaţie în trepte. Un exemplu bun de analog vs. digital este în cazul ceasurilor: cele analogice posedă ace indicatoare şi practic nu au o limită de precizie în ceea ce priveşte indicarea exactă a orei; cele digitale în schimb, nu pot indica intervale de timp sub capacitatea lor de afişaj, ceea ce în multe cazuri se reduce la secunde (<i>rezoluţie</i>).</p>

<p>Ambele tipuri de semnale, atât analogice cât şi digitale, îşi găsesc aplicaţia în sistemele electronice moderne, iar distincţia dintre aceste două tipuri de informaţie va fi reluată în capitolele viitoare. Acum însă, ne vom concentra atenţia în special pe semnalele analogice, întrucât sistemele ce utilizează aceste tipuri de semnale au de obicei un design mai simplu.</p>

<p>Marea majoritate a cantităţilor fizice de măsurat (temperatură, umiditate, viteză, etc.) posedă o variabilitate analogică. Dacă o asfel de cantitate fizică este utilizată pe post de canal de comunicaţie, reprezentarea informaţiei va avea practic o rezoluţie nelimitată.</p>

<p>La începutul instrumentaţiei industriale, aerul comprimat era folosit în scopul transmiterii informaţiei de la aparatele de măsură şi controlul acestora. Nivelul presiunii aerului se regăsea în valoarea variabilei de măsurat, oricare era aceea. Aerul curat şi uscat la o presiune de aproximativ 1,5 <a href="http://ro.wikipedia.org/wiki/Bar">bar</a> era furnizat de un compresor de aer prin intermediul unor tuburi spre instrumentul de măsura, ce modifica la rândul său valoarea presiunii în funcţie de cantitatea de măsurat producând asfel un semnal de ieşire. De exemplu, un dispozitiv pneumatic destinat măsurării înălţimii coloanei de apă dintr-un bazin (variabila procesului) va furniza o presiune scăzută a aerului atunci când bazinul este gol, una medie când bazinul este parţial plin şi o presiune ridicată atunci când bazinul este plin.</p>

<img src="../poze/00183.png" alt="sistem măsurare nivel apă în bazin folosind aer comprimat"/>

<p>Indicatorul nivelului de apă este de fapt un aparat de măsură a presiunii din tubul de aer. Această presiune a aerului, fiind un <i>semnal</i>, reprezintă nivelul apei din bazin. Orice variaţie a nivelului apei este reprezentată printr-o variaţie a presiunii semnalului măsurat. Acest semnal pneumatic are, cel puţin teoretic, o rezoluţie infinită, putând reprezenta orice variaţie cât de mică a nivelului din bazin, şi este prin urmare un semnal <i>analog</i> în adevăratul sens al cuvântului.</p>

<p>Orcât de primitiv ar părea, acest tip de sisteme pneumatice a stat la baza multor sisteme industriale de măsură şi control peste tot în lume, şi mai sunt şi acum folosite datorită simplicităţii, siguranţei şi fiabilităţii lor. Semnalele folosind aerul comprimat sunt uşoar de transmis prin tuburi ieftine, uşor de măsurat şi uşor de manipulat cu ajutorul dispozitivelor mecanice. Pe lângă asta, acest tip de semnal poate fi folosit nu doar pentru <i>măsurarea</i> proceselor fizice, dar şi pentru <i>controlul</i> lor. Cun ajutorul unui piston suficient de mare, un semnal slab poate fi folosit pentru generarea unei forţe mecanice suficient de mari pentru acţionarea unei valve sau controlul unui dispozitiv. Au fost create chiar şi sisteme automate complete de control folosind presiunea aerului ca şi canal de comunicaţie. Sunt simple şi relativ uşor de înţeles. Totuşi, limitele practice pentru precizia semnalului comprimat nu sunt suficiente în unele cazuri, mai ales atunci când aerul comprimat nu este curat şi uscat, sau atunci când există posibilitatea apariţiei spărturilor în ţevi.</p>

<p>Odată cu avansul amplificatoarelor din domeniul electronicii semiconductorilor, folosirea mărimilor de curent şi tensiune în instrumentaţie a devenit practică. În locul utilizării presiunii aerului pentru măsurarea gradului de umplere al unui bazin cu apă, s-a început folosire semnalele electrice pentru furnizarea aceleiaşi informaţii prin intermediul firelor conductoare (în loc de tuburi) fără a mai fi necesară utilizarea unui echipament scump. precum compresoarele de aer, pentru utilizare:</p>

<img src="../poze/00184.png" alt="sistem măsurare nivel apă în bazin folosind aer comprimat"/>

<p>Deşi semnalele electronice analogice încep să fie înlocuite de cele digitale, este bine să avem o bună înţelegere a principiilor de bază din spatele acestui mod de transmitere a informaţiei.</p>

<p>Un concept important aplicat în instrumentaţia semnalelor analogice este cel de „zero real”, un principiu standard de utilizare a semnalelor asfel încât valoarea zero (bazin de apă gol) sa nu fie confundată cu defectul sistemului în cauză. De exemplu, în cazul sistemului pneumatic de mai sus, dacă scala valorilor pentru presiune este între 1 şi 2 bar (1, 1,1, 1,2...2), cu 1 bar (presiunea aerului din mediul înconjurător) reprezentând 0% din valoarea mărimii de măsurat şi 2 bar reprezentând 100% din aceeiaşi valoare, dacă indicatorul va afişa 1 bar, acest lucru ar putea să însemne că bazinul de apă este într-adevăr gol, sau ar putea la fel de bine indica faptul că sistemul nu funcţinează (copresorul de aer este oprit, ţeava este spartă, traductorul este stricat, etc.).</p>

<p>În schimb, dacă am calibra (seta) instrumentele (traductorul şi indicatorul) pentru scara de 1.1 - 2 bar (1,1, 1,2, 1,3...2), asfel încât 1.1 bar să reprezinte 0% iar 2 bar 100%, orice tip de defect sau nefuncţionare a sistemului va rezulta într-o presiune de 1 bar, şi orice tip de măsurători efectuate se vor realiza doar pentru intervalul 1.1 - 2 bar.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Un <i>semnal</i> este orice tip de cantiate ce poate fi detectată şi folosită ca şi informaţie</li>
	<li>Un semnal <i>analog</i> este un semnal ce poate fi variat continu sau infinit pentru a reprezenta o variaţie oricât de mică a unei mărimi</li>
	<li>Semnalele <i>pneumatice</i> erau folosite pe scară largă în sistemele de instrumentaţie industriale. Aceste tehnici au fost însă abandonate odată cu folosirea semnalelor electrice analogice precum tensiunea şi curentul</li>
	<li>Conceptul de <i>zero real</i> se referă la o scară de măsură analogică în care o cantitate diferită de zero este folosită pentru reprezentarea valorii de 0% din variabila de măsurat, astfel încât orice defect al sistemului să poate fi uşor detectabil.</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>