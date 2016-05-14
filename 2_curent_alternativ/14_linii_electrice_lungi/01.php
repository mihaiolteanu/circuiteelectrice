<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Circuitele electrice şi viteza luminii</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Circuitele electrice şi viteza luminii</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Să presupunem că avem un circuit electric simplu, format dintr-o baterie, o lampă şi un întrerupător. La închiderea întrerupătorului, lampa se aprinde instant. La deschiderea întrerupătorului, lampe se stinge instant.</p>

#+CAPTION: circuit electric simplu, format dintr-o baterie, o lampă şi un întrerupător
[[../poze/02352.png]]

<p>De fapt, aprinderea lămpii durează o mică fracţiune de secundă până se încălzeşte şi emite lumină, timp necesar pentru ca valoarea curentului să devină suficient de mare. Prin urmare, efectul nu este instantaneu. Pentru aplicaţiile practice însă, putem considera că efectul este imediat, atunci când lampa şi întrerupătorul se află în vecinătate, întrucât „deplasarea” electronilor în conductori are loc cu o viteză foarte mare, şi anume, viteza luminii (aproximativ 300.000 de kilometri pe secundă). Ce s-ar întâmpla însă dacă conductorii electrici ai unui circuit ar avea o lungime de 300.000 de kilometri? Din moment ce ştim că efectele electricităţii a o viteză finită (deşi foarte mare), un set de conductori foarte lungi ar introduce o întârziere de timp în circuit, asfel că acţionarea întrerupătorului şi aprinderea/stingerea lămpii nu ar mai fi instantanee:</p>

#+CAPTION: circuit electric simplu, format dintr-o baterie, o lampă şi un întrerupător; conductori de 300.000 de km lungime
[[../poze/02353.png]]

<p>Presupunând că filamentul lămpii nu necesită încălzire, iar rezistenţa în lungul celor 600.000 de km de fire (dus-întors) este zero, lampa se va aprinde în aproximativ o secundă de la închiderea întrerupătorului. La închiderea întrerupătorului, lampa va continua să primească putere pentru încă o secundă, apoi se va stinge.</p>

<p>Ne putem imagina comportamentul electronilor printr-un conductor ca fiind echivalent cu vagoanele unui tren, legate între ele, dar prezentând o anumită „cursă” (distanţa parcusă de un vagon faţă de celălat, asfel încăt elementele de legătură să fie perfect întinse; doar după parcurgerea acestei distanţă, vagonul al doilea poate fi tras de primul vagon). Asfel, când trenul se pune în mişcare, nu toate vagoanele vor porni deodată, ci locomotiva trage primul vagon, după eliberarea cursei, primul vagon trage al doilea vagon după eliberarea cursei, etc. Asfel, mişcarea este transferată de la vagon la vagon la viteza maximă permisă de cursă, dar la o viteză mult mai mare decât viteza individuală a vagoanelor:</p>

#+CAPTION: analogie pentru deplasarea electronilor în conductori; pornirea trenului de pe loc şi deplasarea vagoanelor
[[../poze/02354.png]]

<p>O altă analogie estea cea a valurilor în apă. Să presupunem că punem în mişcare un obiect plan pe suprafaţa apei, asfel încât acesta produce o serie de valuri în urma sa. Apa se va „deplasa” datorită faptului că moleculele sale se ciocnesc una de cealaltă, transferând energia de mişcare de-a lungul suprafeţei apei cu o viteza mai mare decât viteza individuală a moleculelor:</p>

#+CAPTION: analogie pentru deplasarea electronilor în conductori; punerea în mişcare a unui obiect pe suprafaţa apei
[[../poze/02355.png]]

<p>În aceeiaşi ordine de idei, „unda de curent” se deplasează cu viteza luminii, deşi electronii individuali nu au o viteză într-atât de mare. Într-un circuit foarte lung, această diferenţă de viteză, această „cuplare” a electronilor (exemplul trenului), devine vizibilă sub forma unei întârzieri între acţiunea întrerupătorului şi efectul asupra lămpii.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Într-un circuit electric, curentul se „deplasează” cu viteza luminii, cu toate că electronii ce compun aceast curent au o viteză mult mai mică</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
