<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Numere şi simboluri</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Numere şi simboluri</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Exprimarea cantităţilor sub formă numerică ni se pare un lucru natural. Această situaţie este atât în avantajul cât şi în dezavantajul nostru atunci când studiem electronica. Pe de o parte, suntem obişnuiţi să facem calcule atunci când analizăm circuitele electrice sau electronice, iar acesta este un lucru bun. Pe de altă parte, sistemul de notaţie utilizat zi de zi, încă din şcoala primară, nu este sistemul intern folosit şi de echipamentele electronice moderne. Adoptarea unui nou sistem de notaţie şi o re-examinare a ideilor şi conceptelor deja învăţate nu este tocmai un lucru peste care să putem trece cu uşurinţă.</p>

<p>În primul rând, trebuie să facem o diferenţiere între numere şi simbolurile utilizate pentru reprezentarea acestor numere. Un număr este o cantitate matematică, corelată de obicei în cazul electronicii cu o cantitate fizică precum tensiune, curent sau rezistenţă. Există o multitudine de tipuri de numere. De exemplu: numere naturale (1, 2, 3, ...), numere întregi (..., -3, -2, -1, 0, 1, 2, 3, ...), numere iraţionale (&pi; - aproximativ 3,1415927, e - aproximativ 2,718281828), rădăcina pătrată a oricărui număr prim, etc.), numere reale (toate valorile numerice uni-dimensionale, negative şi pozitive, incluzând zero, numerele naturale, întregi şi iraţionale) şi complexe (3 - j4, 34, 5 &ang; 20<sup>o</sup>).</p>

<p>În funcţie de aplicaţia practică în cauză, se utilizează diferite tipuri de numere. Numerele naturale sunt perfecte şi suficiente pentru „inventarierea” obiectelor discrete, precum numărul de rezistori dintr-un circuit. Numerele întregi sunt necesare atunci când avem nevoie şi de echivalentul negativ al celor naturale. Numerele iraţionale reprezintă acele numere ce nu pot fi exprimate exact ca şi raport dintre două numere întregi; raportul dintre circumferinţa unui cerc şi diametrul acestuia (&pi;) este un astfel de număr iraţional. Valorile pentru tensiune, curent şi rezistenţa ce le-am întâlnit în analiza circuitelor electrice de curent continuu pot fi exprimate sub forma numerelor reale, atât sub formă de fracţii cât şi sub formă decimală. Pentru analiza circuitelor de curent alternativ însă, numerele reale nu pot exprima esenţa duală a amplitudinii si a unghiului de fază, astfel încât am fost nevoiţi să utilizăm numerele complexe, fie sub forma rectangulară, fie sub formă polară.</p>

<h2>Forma analogică şi forma digitală</h2>

<p>În cazul în care utilizăm numere pentru înţelegerea proceselor fizice din lumea reală, realizarea predicţiilor ştiinţifice sau pentru calcule economice, avem nevoie de o simbolistică pentru reprezentarea acestora. Aceste notaţii pot fi sub două forme: analogică şi digitală. În cazul reprezentării analogice, cantitatea simbolizată este diviziblă la infinit. În cazul reprezentării digitale, cantitatea simbolizată prezintă o diviziune discretă.</p>

<p><img src="../poze/04096.png" alt="termometru analogic"/></p>

<p>De exemplu, un termometru „clasic” precum în figura alăturată reprezintă un aparat de măsură analogic. Practic putem măsură orice temperatură din intervalul 0-50<sup>o</sup>, rezoluţia termometrului fiind practic infinită. De exemplu, putem spune că temperatura măsurată în acest caz este de 35<sup>o</sup>, dar, dacă avem ochi buni, putem fi mai precişi şi spune că ea este de fapt 35,7<sup>o</sup>. Sau, dacă avem ochi foarte buni, sau un mijloc mult mai precis de citire a scalei, s-ar putea să vedem că temperatura reală este de fapt de 35,72545<sup>o</sup>.</p>

<div class="clear"></div>

<p><img src="/sites/default/files/istock/termometru-digital.jpg" alt="termometru digital"/></p>

<p>Acest lucru nu este valabil şi în cazul unui termometru digital. De exemplu, termometrul din figura alăturată nu poată măsura temperatura cu o precizie mai mare de 0,1<sup>o</sup>C. Astfel că putem citi o temperatură fie de 33,0<sup>o</sup>C, fie o temperatură de 33,1<sup>o</sup>C, dar în niciun caz nu putem citi o valoare între aceste două puncte (de exemplu, 33,0125<sup>o</sup>C), aşa cum am fi putut face cu un termometru analogic.</p>

<div class="clear"></div>


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