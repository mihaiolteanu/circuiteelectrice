<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Linii electrice finite</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Linii electrice finite</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>O linie de transmisie inifită, precum cea considerată în secţiunea precedentă, este imposibil de realizat din punct de vedere fizic, prin urmare, comportamentul lor nu va fi exact acelaşi precum o linie infinită.</p>

<p>Totuşi, cunoaşterea/calcularea impedanţei caracteristice a liniilor de transmisie este importantă şi atunci când avem de a face cu lungimi finite. Dacă celălalt capăt al unei linii de transmisie finite este deschis, unda de curent ce se propagă în lungimea conductorului trebuie să se oprească la un moment dat, din moment ce electronii nu se pot deplasa într-un circuit deschis. Această întrerupere abruptă a curentului la sfârşitul liniei produce o „îngrămădire” de electroni de-a lungul liniei de transmisie, pentru că aceştia nu au unde să se deplaseze. Dacă ne imaginăm un tren lung în mişcare, cu o anumită cursă între vagoane, iar primul vagon (sau locomotiva) se opreşte brusc într-un parapet fix, acesta se va opri; urmarea este că toate celelalte vagoane din urma lui se vor opri rând pe rând, după ce fiecare parcurge „cursa” sa. Trenul nu se opreşte deodată, ci fiecare vagon pe rând, de la primul, până la ultimul:</p>

#+CAPTION: oprirea secvenţială a vagoanelor; undă reflectată
[[../poze/02364.png]]

<p>Propagarea unui semnal de la sursă până la capătul unei linii de transmisie (spre sarcină), poartă numele de <i>undă incidentă</i>. Propagarea unui semnal de la sarcină (capătul liniei) spre sursă, poartă numele de <i>undă reflectată</i></p>

<p>Această „îngrămădire” de electroni se propagă înapoi spre baterie, curentul prin baterie încetează, iar linia electrică se comportă precum un circuit deschis. Toate aceste lucruri au loc foarte repede pentru o linie de transmisie de lungime rezonabilă, prin urmare, un ohmetru nu poate măsură această perioadă foarte scurtă de timp în care linia se comportă precum un rezistor. Pentru o linie de aproximativ un kilometru, cu un factor de viteză de 0.66, durata de deplasare a semnalului de la un capăt la celălalt este de aproximativ şase microsecunde (3*10<sup>-6</sup>). Prin urmare, semnalul reflactat ajuge înapoi la sursă în aproximativ 12µs, după care, linia de transmisie se comportă precum un circuit deschis.</p>

<p>Există aparate ce pot măsura acest interval foarte scurt de timp de la sursă la capătul liniei şi înapoi, şi pot fi folosite pentru măsurarea lungimilor cablurilor. Această tehnică poate fi folosită şi pentru determinarea prezenţei <i>şi</i> locaţiei unei întreruperi într-unul sau în ambii conductori ai unei linii de transmisie, deoarece curentul se va „reflecta” din locul întreruperii la fel cu se reflectă şi într-un circuit deschis. Asfel de instrumente poartă numele de <i>reflectometre</i>, iar principiul de funcţionare este identic cu cel al sonarelor: generarea unui puls sonor şi măsurarea timpului necesar pentru întoarcerea ecoului.</p>

<p>Un fenomen similar are loc dacă scurt-circuităm capătul liniei de transmisie: când unda de tensiune ajunge la capătul liniei, acesta este reflectată înapoi spre sursă, deoarece tensiunea nu poate exista între două puncte comune din punct de vedere electric. Când unda reflectată ajunge înapoi la sursă, din punctul de vedere al sursei, întreaga linie de transmisie este scurt-circuitată. Din nou, acest lucru se întâmplă foarte repede.</p>

<p>Putem ilustra acest fenomen de reflexie al liniilor de transmisie cu un experiment simplu.</p>

#+CAPTION: exemplificarea propagării undelor de tensiune şi curent cu ajutorului unei sfori
[[../poze/02365.png]]

<p>Acest lucru este analog unei linii de transmisie cu pierderi interne: puterea semnalului este din ce în ce mai slabă pe măsură ce se propagă în lungimea liniei şi nu se reflectă niciodată înapoi spre sursă. Totuşi, dacă celălalt capăt al sforii este fixat într-un punct în care amplitudinea semnalului nu este încă zero, în lungul sforii va apărea o a doua undă, reflectată înapoi spre mână.</p>

#+CAPTION: exemplificarea propagării undelor de tensiune şi curent cu ajutorului unei sfori; reflectarea undei
[[../poze/02366.png]]

<p>De obicei, rolul unei linii de transmisie este propagarea (transportul) energiei electrice dintr-un punct în altul. Dar chiar dacă semnalele sunt folosite doar pentru transmitere de informaţii, şi nu pentru alimentarea unei sarcini, situaţia ideală ar fi ca între semnalul original să fie transmis de la sursă spre sarcină şi abosorbit complet de aceasta, pentru un raport semnal/zgomot cât mai bun. Prin urmare, „pierderile” din lungul liniilor de transmisie sunt nedorite, la fel ca şi undele reflectate, deoarece energia reflectată reprezintă energie ce nu este transmisă sarcinii.</p>

<h3>Eliminarea reflexiei liniilor de transmisie</h3>

<p>Reflexiile liniilor de transmisie pot fi eliminate dacă impedanţa sarcinii este egală cu impedanţa liniei. De exemplu, un cablu coaxial de 50 Ω, ce este fie deschis, fie scurt-circuitat, va reflacta întreaga energie incidentă înapoi spre sursă. Dacă vom conecta însă un rezistor de 50 Ω la celălalt capăl al cablului, întreaga energia se va disipa pe acesta şi nu vor exista unde reflectate înapoi spre sursă.</p>

<p>În principiu, un rezistor a cărei impedanţă (rezistenţa) este exact impedanţa naturală (impedanţa caracteristică a liniei), conectat la capătul liniei de transmisie, face ca linia să „pară” infinit de lungă din punctul de vedere al sursei, deoarece un rezistor poate disipa energia pentru o durată infinită, în aceeiaşi măsură în care o linie de tansmisie infinită poate abosrbi energie pentru o durată de timp infinită.</p>

<p>În cazul în care rezistenţa nu este perfect egală cu impedanţa caracteristică a liniei de transmisie, vor apărea unde reflectate înapoi spre sursă, cel puţin parţial.</p>

<p>Se poate întâmpla ca unda reflectată să fie re-reflectată de către sursă, dacă impedanţa internă (impedanţa Thevenin echivalentă) a sursei nu este exact egală cu impedanţa caracteristică a liniei. O undă reflectată pe sursă va fi disipată în întregime, dacă impedanţa sursei este egală cu cea a liniei, dar va fi reflectată înapoi pe linie precum orice altă undă, cel puţin parţial, dacă impedanţa sursei nu este egală cu cea a liniei. Acest tip de reflexii pot fi supărătoare, deoarece aparent, reflexia undei de către sursă duce la impresia că aceasta tocmai a emis un puls nou.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>O linie de transmisie de lungime finită va fi văzută de o sursă de tensiune de curent continuu ca o rezistenţă constantă, pentru o perioadă scurtă de timp. După această perioadă, rezistenţa liniei este rezistenţa sarcinii de la capătul acesteia</li>
	<li>Aplicarea unui semnal la unul dintre capetele unei linii de transmisie deschise sau scurt-circuitate, duce la reflectarea acestuia la capătul celălalt al liniei şi apariţia unei unde secundare în lungul liniilor</li>
	<li>Un semnal ce se deplasează într-o linie de transmisie de la sursă spre sarcină poartă numele de undă incidentă</li>
	<li>Un semnal ce se reflectă într-o linie de transmisie de la sarcină spre sursă poartă numele de undă reflectată</li>
	<li>Undele reflectate pot fi eliminate prin conectarea la capătul celălalt al liniei a unei rezistor a cărui rezistenţă este egală cu impedanţa caracteristică a liniei</li>
	<li>O undă reflectată poate să fie re-reflectată de către sursă, dacă impedanţa internă a acesteia nu este exact egală cu impedanţa caracteristică a liniei</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
