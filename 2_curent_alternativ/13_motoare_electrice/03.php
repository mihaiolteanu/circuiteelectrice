<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Motorul sincron</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Motorul sincron</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<p>Motoarele sincrone monofazate de dimensiuni mici sunt folosite în aplicaţii ce necesită o sincronizare precisă, precum ceasuri, de exemplu. Pentru o putere mai mare de 10 kW, eficienţa crescută şi factorul de putere capacitiv, motoarele sincrone sunt folositoare în industrie. Motoarele sincrone mari sunt cu câteva procente mai eficiente decât motoarele asincrone (de inducţie). Cu toate acestea, motorul sincron este mult mai complex.</p>

<p>Din moment ce motoarele şi generatoarele electrice au o construcţie similară, cele două funcţii se pot întreschimba. Un motor sincron este similar unui alternator cu câmp rotitor. În figura de mai jos sunt nişte alternatoare cu magneţi permanenţi:</p>

#+CAPTION: motor sincron
[[../poze/02424.png]]

<p>Această figură ar putea reprezenta fie două alternatoare paralele şi sincronizate acţionate de surse de energie mecanică, fie un alternator conectat la un motor sincron. Sau ar putea reprezenta două motoare, dacă ar fi conectată şi o sursă de putere externă. Important este că, în fiecare caz, rotoarele se rotesc la aceiaşi frecvenţa nominală, şi sunt în fază. Cu alte cuvinte, ele trebuie să fie sincronizate.</p>

<p>Metoda de sincronizare a alternatoarelor este următoarea: (1) deschiderea contactelor, (2) antrenarea ambelor alternatoare cu aceiaşi viteză, (3) defazarea înainte sau înapoi a unui alternator până când ambele ieşiri de c.a. sunt în fază, (4) închiderea contactului în perioada în care cele două unităti sunt încă în fază. Odată sincronizate, alternatoarele se vor bloca reciproc, necesitând un cuplu considerabil pentru de-sincronizarea acestora.</p>

<p>Dacă unuia dintre alternatoarele de mai sus i se aplică un cuplu adiţional pe direcţia de rotaţie, unghiul rotorului faţa de câmpul magnetic al statorului va creşte. Sincronizarea se păstrează iar rotorul va genera energie sistemului de alimentare de c.a. precum un alternator. Rotorul va avansa şi faţă de rotorul celuilalt alternator. Dacă aplicăm în schimb o sarcină (o frână, de exemplu) unei dintre cele două unităţi de mai sus, unghiul rotorul va fi defazat în urma câmpului magnetic al statorului. În acest caz, unitatea va consuma energie din reţeaua de c.a., comportându-se de fapt precum un motor. Dacă se aplică un cuplu sau o sarcină excesivă, rotorul va depăşi unghiul de cuplu maxim, iar sincronizarea se va pierde. Cuplul se dezvoltă doar atunci când sincronizarea motorului este menţinută.</p>

<p>În cazul unui motor sincron în locul alternatorului (figura de sus, dreapta), paşi de sincronizare necesari în cazul alternatoarelor nu sunt necesari. Totuşi, motorul sincron nu poate porni singur, şi trebuie adus prin urmare aproximativ la viteza alternatorului înainte de sincronizarea cu viteza de rotaţie a generatorului de putere electrică. Odată adus la această viteză, motorul sincron va menţine sincronizarea cu sursa de putere de c.a. si va dezvolta cuplu.</p>

<h2>Poziţia rotorului şi a statorului la funcţionare</h2>

<p>Presupunem că motorul se află la viteza de sincronism. Pe măsură ce unda sinusoidală trece în semialternanţa pozitivă, înfăşurarea inferioară a statorului (N) împinge polul nord al rotorului, iar înfăşurarea superioară (S) atrage polul nord al rotorului. Asemănător, polul sud al rotorului este respins de înfăşurarea superioară a statorului (S) şi atras de înfăşurarea inferioară (N). Atunci când amplitudinea undei sinusoidale atinge un maxim (la 2), cuplul ce menţine polul nord al rotorului este maxim. Acest cuplu scade pe măsură ce amplitudinea undei sinusoidale scade spre 0 (la 3), unde cuplul este minim:</p>

#+CAPTION: motor sincron
[[../poze/02425.png]]

<p>Pe măsură ce polaritatea undei sinusoidale se modifică (negativă, între 3 şi 4), înfăşurarea inferioară a statorului (S în acest caz) respinge polul sud al rotorului şi atrage polul nord al rotorului. Asemanător, înfăşurarea superioară (N) a statorului respinge polul nord al rotorului şi atrage polul sud al acestuia. La (4), unda sinusoidală atinge un maxim negativ, iar cuplul este din nou maxim. Pe măsură ce amplitudinea undei creşte spre 0, cuplul scade. Procesul se repetă apoi pentru o nouă perioadă a unei sinusoidale.</p>

<p>De menţionat că figura de mai sus indică poziţia rotorului atunci fără existenţa sarcinii (α = 0<sup>o</sup>). Practic, conectarea unei sarcini pe rotor va determina defazarea rotorului în urma poziţiilor reprezentate în figură cu un unghi α. Acest unghi creşte cu sarcina, până în momentul în care motorul atinge cuplul maxim, la α = 90<sup>o</sup> (electric). Sincronizarea şi cuplul se pierd peste această valoare a unghiului α.</p>

<p>Curentul din înfăşurările unui motor sincron mono-fazat pulsează la schimbarea polarităţii. Dacă viteza magnetului permanent a rotorului este apropiată de frecvenţa acestei schimbări de polaritate, motorul se va sincroniza pe aceasta. Din moment ce câmpul înfăşurării pulsează dar nu se roteşte, este necesară aducerea rotorului la aceiaşi viteză cu cea a unui motor auxiliar.</p>

<h2>Viteza de rotaţie a motorului sincron</h2>

<p>Un alternator cu doi poli (o pereche de poli N-S) va genera o undă sinusoidală de 60 Hz atunci când este rotit la 3600 rpm (rotaţii pe minut). 3600 rpm înseamnă 60 de rotaţii pe secundă. Un motor sincron cu 2 poli se comportă similar. Viteza motorului poate fi redusă prin adăugarea unor perechi de poli adiţionali. Un motor cu 4 poli se va roti la viteza de 1800 rpm, un motor cu 12 poli la 600 rpm. Motoarele cu eficienţă şi cuplu crescut, folosesc un număr şi mai mare de poli pe rotor.</p>

<p>Dar, în loc de realizarea unui număr de 12 înfăşurări separate pentru un motor cu 12 poli, se uitilizează o singură înfăşurare realizată în jurul a 12 poli metalici precum în figura de mai jos:</p>

#+CAPTION: realizarea unui motor sincron cu mai multe perechi de poli
[[../poze/02427.png]]

<p>Viteza de rotaţie este 1/6 din viteza electrică a curentului alternativ. Viteza rotorului va fi 1/6 din cea a unui motor sincron cu 2 poli. Exemplu: un c.a. de 60 Hz roteşte un motor cu 2 poli la 3600 rpm, iar un motor cu 12 poli la 600 rpm.</p>

<h2>Motorul sincron trifazat</h2>

<p>Un motor sincron trifazat precum cel din figura de mai jos, generează un câmp electric rotitor în stator. Asemenea motoare nu pot fi pornite singure de la o sursă de frecvenţă fixă (50 sau 60 Hz). Mai mult, rotorul nu este un magnet permanent precum în exemplul de mai jos, ci un electromagnet. Motoarele sincrone industriale de putere mare sunt mai eficiente decât motoarele asincrone. Acestea sunt folosite atunci când este necesară o viteză constantă. Având un factor de putere capacitiv, acestea pot corecta linia de alimentare în cazul unui factor de putere inductiv.</p>

<p>Cele trei faze al statorului se adună vectorial pentru a produce un singur câmp magnetic rezultant ce se roteşte de f/2n ori pe secundă, unde f este frecvenţa liniei de alimentare, iar n numărul de poli. Pentru a calcula viteza rotorului în rpm, înmulţim cu 60.</p>

#+CAPTION: motor sincron trifazat
[[../poze/02428.png]]

<p>Motorul sincron trifazat cu 4 poli (pe fază) din figura de mai sus se va roti la 1800 rpm (60 Hz) sau la 1500 rpm (50 Hz). Dacă înfăşurările sunt energizate pe rând, în secvenţa φ-1, φ-2, φ-3, rotorul se va afla pe direcţia polilor corespunzători, pe rând. Din moment ce undele sinusoidale se suprapun, câmpul rezultat se va roti, nu discret, ci continuu. De exemplu, atunci când formele de undă φ-1 şi φ-2 coincid, câmpul va avea un maxim în regiunea dintre aceşti poli. Rotorul cu un singur magnet permanent este utilizat doar la motoarele de putere mică. Rotorul cu mai mulţi magneţi permanenţi (figura de mai sus, dreapta) este utilizat pentru sarcini mai mare ale motorului. Motoarele industriale de putere mare sunt prevăzute cu sisteme de autopornire.</p>


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
