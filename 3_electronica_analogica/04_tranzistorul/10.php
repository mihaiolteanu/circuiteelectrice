<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Metode de polarizare ale tranzistorului</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>11. Metode de polarizare ale tranzistorului</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Până în acest moment, am folosit o sursă de tensiune de curent continuu (baterie) conectată în serie cu semnalul de intrare în curent alternativ pentru polarizarea tranzistorului, indiferent de clasa de funcţionare din care făcea parte. În realitate, conectarea unei baterii cu o tensiune precisă la intrarea amplificatorului nu este o soluţie deloc practică. Chiar dacă am putea găsi o baterie care să producă exact cantiatea de tensiune necesară pentru o anumită polarizare, acea tensiune nu poate fi menţinută pe toată durata de funcţionare a bateriei. Când aceasta începe să se descarce, tensiunea sa de ieşire scade, iar amplificatorul se ve îndrepta spre clasa de funcţionare B.</p>

<p>Să (re)-considerăm acest circuit, de exemplu:</p>

<p><img src="../poze/03099.png" alt="utilizarea unei baterii conectate în serie cu sursa de semnal în curent alternativ pentru polarizarea tranzistorului"/></p>

<p>Includerea unei baterii cu o tensiune de polarizare (V<sub>polarizare</sub>) într-un circuit de amplficare, nu este practică în realitate. O metodă mult mai practică pentru obţinerea tensiunii de polarizare este folosirea unei reţele divizoare de tensiune conectată la bateria de 15 V, baterie care oricum este necesară pentru funcţionarea amplificatorului. Circuitele divizoare de tensiune sunt şi ele uşor de proiectat şi construit, prin urmare, să vedem cum arată o asfel de configuraţie:</p>

<p><img src="../poze/03130.png" alt="folosirea unui circuit divizor de tensiune pentru polarizarea tranzistorului"/></p>

<p>Dacă alegem o pereche de rezistori R<sub>2</sub> şi R<sub>3</sub> a căror rezistenţe să producă o tensiune de 2.3 V pe rezistorul R<sub>3</sub> dintr-o tensiune totală disponibilă de 15 V (R<sub>2</sub> = 8.644 Ω, R<sub>3</sub> = 1.533 Ω, de exemplu), vom obţine o tensiune de polarizare în curent continuu de 2.3 V între baza şi emitorul tranzistorului, atunci când nu există semnal de intrare. Singura problemă este că, această configuraţie conectează sursa de semnal de curent alternativ direct în paralel cu rezistorul R<sub>3</sub> al divizorului de tensiune. Acest lucru nu este acceptabil, deoarece sursa de curent alternativ va „învinge” tensiunea de curent continuu de la bornele rezistorului R<sub>3</sub>. Componentele conectate în paralel <i>trebuie</i> să posede acelaşi tip de tensiune la bornele lor; prin urmare, dacă o sursă de curent alternativ este conectată direct la bornele unui rezistor dintr-un divizor de tensiune de curent continuu, sursa de curent alternativ va „învinge” tot timpul, prin urmare, nu va exista nicio componentă de curent continuu în forma de undă a semnalului.</p>

<p>O modalitate prin care această configuraţie poate funcţiona, deşi este posibil să nu fie evident <i>de ce</i>, este prin conectarea unui <i>condensator de cuplaj</i> între sursa de curent alternativ şi divizorul de tensiune, asfel:</p>

<p><img src="../poze/03131.png" alt="conectarea unui condensator de cuplaj între sursa de semnal de curent alternativ şi circuitul divizor de tensiune pentru polarizarea tranzistorului"/></p>

<p>Condensatorul formează un filtru trece-sus între sursa de tensiune în curent alternativ şi divizorul de tensiune în curent continuu; întregul semnal (aproximativ) de curent alternativ va trece înspre tranzistor, iar tensiunea de curent continuu nu va putea ajunge la sursa de semnal. Acest lucru este mult mai clar dacă ne folosim de teorema superpoziţiei, conform căreia, orice circuit liniar poate fi analizat considerând că doar o singură sursă de alimentare funcţionează în acelaşi timp în circuit. Rezultatul/efectul final poate fi aflat prin însumarea algebrică a efectelor tuturor surselor de putere luate individual. Dacă am separa condensatorul şi divizorul de tensiune R<sub>2</sub>--R<sub>3</sub> de restul amplificatorului, am înţelege mai bine cum funcţionează această superpoziţie între curentul continuu şi cel alternativ.</p>

<p>Dacă luăm în considerare doar sursa de semnal de curent alternativ, şi un condensator cu o impedanţă arbitrară mică la frecvenţa semnalului, majoritatea semnalului de curent alternativ se va regăsi pe rezistorul R<sub>3</sub>. Datorită impedanţei foarte mici a condensatorului de cuplaj la frecvenţa de semnal, acesta se comportă precum un scurt-circuit (fir simplu), prin urmare, poate fi omis din figura de mai jos:</p>

<p><img src="../poze/03133.png" alt="aplicarea teoremei superpoziţiei; studierea circuitului de intrare al amplificatorului atunci când doar sursa de semnal de curent alternativ este conectată în circuit"/></p>

<p>Dacă ar fi să conectăm doar sursa de tensiune de curent continuu (bateria de 15 V), condensatorul se va comporta precum un circuit deschis, prin urmare nici acesta şi nici sursa de semnal de curent alternativ nu vor avea niciun efect asupra modului de funcţionare al divizorului de tensiune R<sub>2</sub>--R<sub>3</sub>:</p>

<p><img src="../poze/03134.png" alt="aplicarea teoremei superpoziţiei; studierea circuitului de intrare al amplificatorului atunci când doar sursa de tensiune de curent continuu (bateria de 15 V) este conectată în circuit"/></p>

<p>Folosind teorema superpoziţiei, şi combinând cele două analize separate ale circuitului, obţinem o tensiune (de superpoziţie) de aproximativ 1.5 V curent alternativ şi 2.3 V curent continuu, tensiuni ce vor fi aplicate la intrarea tranzistorului. Observaţi în circuitul considerat mai jos, că tranzistorul <i>nu</i> a fost conectat:</p>

<p><img src="../poze/03132.png" alt="aplicarea teoremei superpoziţiei; efectele combinate ale celor două surse de tensiune"/></p>

<p>Folosind un condensator de 100 µF, putem obţine o impedanţă de 0.8 Ω la frecvenţa de 2.000 Hz:</p>

<p><img src="../poze/23013.png" alt="aplicarea teoremei superpoziţiei; efectele combinate ale celor două surse de tensiune"/></p>

<p>Putem observa că acest circuitu distorsionează puternic forma undei curentului de ieşire (albastru). Unda sinusoidală este tăiată pe majoritatea semi-alternanţei negativă a semnalului de tensiune de intrare (roşu). Acest lucru ne spune că tranzistorul intră în starea de blocare, deşi nu ar trebui. De ce se întâmplă acest lucru? Această nouă metodă de polarizare ar trebui să genereze o tensiune de polarizare în curent continuu de 2.3 V.</p>

<p>Dacă în circuit avem doar condensatorul şi divizorul de tensiune format din R<sub>2</sub>--R<sub>3</sub>, acesta va furniza o tensiune de polarizare de exact 2.3 V. Totuşi, dupa ce conectăm tranzistorul la acest circuit, lucrurile se schimbă. Curentul existent prin baza tranzistorului se va aduna la curentul deja existent prin divizor şi va reduce tensiunea de polarizare disponibilă pentru tranzistor. Folosind modelul diodă-sursă-de-curent al tranzistorului, problema polarizării devine mai clară:</p>

<p><img src="../poze/03135.png" alt="conectarea tranzistorului la reţeaua formată din condensator şi divizorul de tensiune; analiza circuitului folosind modelul diodă-sursă-de-curent al tranzistorului"/></p>

<p>Ieşirea unui divizor de tensiune depinde nu doar de mărimea rezistorilor săi componenţi, ci şi de cantitatea de curent „divizată” de aceasta spre o sarcină. Joncţiunea P-N a tranzistorului reprezintă o sarcină datorită căreia tensiunea de curent continuu la bornele rezistorului R<sub>3</sub> scade; curentul de polarizare se însumează cu cel de pe rezistorul R<sub>3</sub>, modificând raportul rezistenţelor calculat înainte, când am luat în considerare doar cei doi rezistori, R<sub>2</sub> şi R<sub>3</sub>. Pentru obţinerea unei tensiuni de polarizare de 2.3 V, valorile rezistorilor R<sub>2</sub> şi/sau R<sub>3</sub> trebuiesc ajustate pentru compensarea efectului curentului de bază. Pentru <i>creşterea</i> tensiunii de polarizare de pe R<sub>3</sub>, putem scădea valoarea lui R<sub>2</sub>, creşte valoarea lui R<sub>3</sub>, sau ambele.</p>

<p>Folosind noi valori pentru cei doi rezistori (R<sub>2</sub> = 6 kΩ, R<sub>3</sub> = 4 kΩ), graficul formelor de undă corespunde unui amplificator de clasă A, exact ceea ce urmăream:</p>

<p><img src="../poze/23014.png" alt="modificarea rezistorilor duce la obţinerea unui semnal de curent de ieşire nedistorsionat, semnal tipic pentru un amplificator de clasa A"/></p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Tensiunea de polarizare în curent continuu, necesară pentru funcţionarea amplificatoarelor de clasă A şi C, poate fi obţinută prin utilizarea unui divizor de tensiune şi un condensator de cuplaj. Această configuraţie este folosită practic în locul bateriei conectate în serie cu sursa de semnal de curent alternativ de la intrare</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>