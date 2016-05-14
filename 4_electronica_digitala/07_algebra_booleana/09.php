<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Transformarea tabelelor de adevăr în expresii booleene</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>9. Transformarea tabelelor de adevăr în expresii booleene</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Procesul de proiectare al circuitelor digitale începe adesea cu un tabel de adevăr. Acest tabel descrie modul de funcţionare al circuitului, pe scurt, ce funcţii trebuie aceasta să îndeplinească. Partea de proiectare constă în mare parte în determinarea tipului de circuit ce va realiza funcţia propusă în acest tabel de adevăr. Deşii există unii oameni care pot determina circuitul final prin simpla privire a tabelului de adevăr, pentru noi ceilalţi există o serie metode foarte utile. Se va dovedi că algebra booleeană este de un real folos în această situaţie.</p>

<p>Pentru ilustrarea acestor metode, cel mai indicat este să începem cu o problemă de proiectare practică. Să presupunem că trebuie să proiectăm un circuit de detectare a flăcării unui incinerator de deşeuri toxice. Astfel de tehnici de ardere sunt folosite de obicei pentru neutralizarea deşeurilor medicale, ce pot fi infectate cu viruşi sau bacterii periculoase:</p>

#+CAPTION: incinerator deşeuri toxice
[[../poze/04360.png]]

<p>Atâta timp cât flacăra este menţinută în incinerator, injectarea deşeurilor toxice pentru neutralizare este sigură. Dacă în schimb flacăra se stinge, această alimentare a incineratorului se poate dovedi periculoasă. Evacuarea va conţine deşurile toxime ne-neutralizate, reprezentând un pericol de sănătate pentru persoanele aflate în apropiere. Avem nevoie prin urmare de un sistem de detectare a prezenţei flăcării. Injectarea deşeurilor va fi permisă doar atunci când sistemul de detectare ne asigură de prezenţa flăcării.</p>

<p>Există mai multe metode de detectare a flăcării: optic (detectarea luminii), termic (detectarea temperaturii înalte) şi conducţie electrică (detectarea particulelor ionizate). Fiecare din aceste metode prezintă avantaje şi dezavantaje. Să presupunem că, datorită pericolului ridicat al trecerii deşeurilor intacte prin evacuarea sistemului, s-a decis ca sistemul de detectare să fie redundant (senzori multiplii). Astfel că, defectare unuia dintre senzori să nu ducă la o situaţie nedorită. Fiecare senzor este echipat cu un contact normal-deschis (deschis - lipsă flacăra, închis - flacără detectată) necesar activării intrărilor unui sistem logic:</p>

#+CAPTION: incinerator deşeuri toxice; utilizarea senzorilor şi a circuitului logic pentru închiderea alimentării în cazul în care flacăra nu este detectată
[[../poze/04361.png]]

<p>Scopul nostru acum, este să proiectăm circuitul logic astfel încât acesta să deschidă valva de admisie doar dacă există flacără (detectată de senzori). Prima dată trebuie să vedem comportamentul acestui sistem de control. Dorim ca valva să se deschidă în cazul în care doar unul din cei trei senzori detectează flacăra? Probabil că nu. Altfel, nu ar mai avea niciun rost să folosim trei senzori în loc de unul singur. Ceea ce ne dorim de la sistemul logic, este ca acesta să deschidă valva de admisie doar în cazul în care toţi cei trei senzori detectează flacăra. În acest caz, tabelul de adevăr arată astfel:</p>

#+CAPTION: incinerator deşeuri toxice; tabelul de adevăr
[[../poze/14061.png]]

<p>Această funcţionalitate poate fi asigurată folosind o poartă ŞI cu trei intrări: ieşirea circuitului este 1 doar dacă intrarea A ŞI intrarea B ŞI intrarea C este 1:</p>

#+CAPTION: incinerator deşeuri toxice; adăugarea circuitului logic
[[../poze/04362.png]]

<p>Dacă folosim în schimb relee electromecanice, putem crea această funcţie ŞI prin conectarea celor trei contacte în serie. Sau pur şi simplu conectă cei trei senzori în serie, astfel încât, singura modalitate prin care se poate deschide valva de admisie, este dacă toţi cei trei senzori indică prezenţa flăcării:</p>

#+CAPTION: incinerator deşeuri toxice; utilizare relee electromecanice
[[../poze/04363.png]]

<p>Deşi această strategie maximizează siguranţa sistemului, este totuşi foarte sensibilă la defect. În cazul în care unul din cei trei senzori se defectează, indicând lipsa flăcării din incinerator, întregul sistem se va opri. Asta chiar dacă ceilalţi doi senzori funcţionează şi indică prezenţa flăcării. Această oprire „gratuită” a incineratorului duce la pierderi de producţie şi de combustibil (menţinerea unei flăcări ce nu este folosită pentru incinerarea materialului toxic).</p>

<p>Va trebui să reproiectăm sistemul, astfel încât, un astfel de defect să nu ducă la închiderea întregului sistem. Bazându-ne pe doi senzori în detectarea prezenţei flăcării, sistemul îşi păstrează şi în acest caz redundanţa. O astfel de strategie implică un circuit logic cu trei intrări, a cărui ieşire este 1 în cazul în care cel puţin două din cele trei intrări sunt 1. Tabelul de adevăr arată astfel:</p>

#+CAPTION: incinerator deşeuri toxice; tabelul de adevăr
[[../poze/14062.png]]

<h2>Suma-de-produse</h2>

<p>În această situaţie nu este foarte clar ce tip de circuit logic ar satisface tabelul de adevăr. O metodă simplă de realizarea a unui astfel de circuit constă în utilizarea unei forme booleene standard, denumită sumă-de-produse. Ca şi exemplu, o astfel de expresie ar putea arătă astfel: ABC + BC + DF, suma produselor ABC, BC şi DF.</p>

<p>Astfel de expresii sunt relativ uşor de realizat cu ajutorul tabelelor de adevăr. Trebuie doar să găsim acele rânduri din tabel unde ieşirea este 1, şi să scriem apoi un produs boolean a cărui rezultat să fie 1, cunoscând condiţiile de intrare. De exemplu, să luăm al patrulea rând din tabelul de adevăr de mai sus. Ieşirea acestuia este 1 (ceea ce căutăm), iar intrările sunt A = 0, B = 1 şi C = 1. Produsul acestor trei variabile este unu dacă expresia arată astfel: A'BC.</p>

#+CAPTION: incinerator deşeuri toxice; tabelul de adevăr
[[../poze/14063.png]]

<p>Să completăm şi celelalte rânduri care au o ieşire de 1, cu produsul termenilor:</p>

#+CAPTION: incinerator deşeuri toxice; tabelul de adevăr
[[../poze/14064.png]]

<p>Însumăm toate aceste patru expresii, pentru a crea o singură expresie booleeană ce descrie în întregime tabelul de adevăr:</p>

#+CAPTION: incinerator deşeuri toxice; tabelul de adevăr
[[../poze/14065.png]]

<h2>Realizarea circuitului logic</h2>

<p>După ce am obţinut expresia booleeană sub formă de sumă-de-produse, putem trece la realizarea circuitului logic bazat pe această expresie, fie cu porţi logice:</p>

#+CAPTION: incinerator deşeuri toxice; circuitul logic (porţi logice)
[[../poze/04364.png]]

<p>Fie cu relee electromecanice:</p>

#+CAPTION: incinerator deşeuri toxice; circuitul logic (relee electromecanice
[[../poze/04365.png]]

<h2>Simplificarea expresiei booleene</h2>

<p>Din păcate, ambele variante sunt destul de complexe. Din fericire însă, putem simplifica expresia iniţială folosing regulile simplificării booleene:</p>

#+CAPTION: incinerator deşeuri toxice; simplificarea expresiei booleene
[[../poze/14066.png]]

<p>Ca şi rezultat al simplificării, putem acum construi un circuit logic mult simplificat, dar care îndeplineşte exact aceiaşi funcţie logică, fie cu porţi logice:</p>

#+CAPTION: incinerator deşeuri toxice; circuitul logic (porţi logice)
[[../poze/04366.png]]

<p>Fie cu relee electromecanice:</p>

#+CAPTION: incinerator deşeuri toxice; circuitul logic (relee electromecanice
[[../poze/04367.png]]


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
