<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Punctul static de funcţionare al tranzistorului</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>10. Punctul static de funcţionare al tranzistorului</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>O stare de <i>repaus</i> se caracterizează prin faptul că semnalul de intrare al circuitului este zero. <i>Curentul de repaus</i>, de exemplu, este valoarea curentului dintr-un circuit, atunci când tensiunea aplicată la intrare este zero. Tensiunea de polarizare directă (curent continuu) forţează un nivel diferit al curentului colector-emitor prin tranzistor pentru un semnal de intrare zero, faţă de cazul în care tensiunea de polarizare directă nu ar exista. Prin urmare, valoarea tensiunii de polarizare într-un circuit de amplificare, determină valorile de repaus ale acestuia.</p>

<p><i>Punctul static de funcţionare</i> al unui tranzistor reprezintă coordonatele de funcţionare ale tranzistorului în zona activă de funcţionare (vezi secţiunea precedetă).</p>

<p>Pentru un amplificator de clasa A, curentul de repaus trebuie să fie exact între valoarea sa de saturaţie şi valoarea sa de blocare. Amplificatoarele de clasa B şi C au un curent de repaos zero, din moment ce acestea sunt proiectate pentru funcţionarea în zona de blocare, atunci când nu este aplicat niciun semnal la intrare. Amplificatoarele de clasa AB, au un curent de repaus foarte mic, puţin peste zona de blocare. Pentru a ilustra grafic acest lucru, se trasează o <i>dreaptă de sarcină</i> peste curbele caracteristice ale tranzistorului, pentru ilustrarea modului de funcţionare atunci când tranzistorul este conectat la o sarcină de o anumită valoare:</p>

#+CAPTION: trasarea dreptei de sarcină pe curbele caracteristice ale tranzistorului
[[../poze/03144.png]]

<p>O dreaptă de sarcină reprezintă graficul tensiunii colector-emitor pentru un anumit domeniu al curenţilor de colector. În partea din dreapta jos, tensiunea este maximă şi curentul este zero, reprezentând o condiţie de blocare. În stânga sus, tensiunea este zero, iar curentul este maxim, reprezentând o condiţie de saturaţie. Punctele de intersecţie ale dreptei cu, curbele caracteristice, reprezintă condiţii de operare reale al tranzistorului pentru acei curenţi de bază.</p>

<p>Punctul static de funcţionare poate fi reprezentat pe acest grafic printr-un siplu punct la intersecţia unei curbe caracteristice cu dreapta de sarcină. Pentru un amplificator de clasa A, punctul static de funcţionare se va situa pe mijlocul dreptei de sarcină.</p>

#+CAPTION: punctul static de funcţionare al amplificatorului clasa A
[[../poze/03145.png]]

<p>În acest caz particular, punctul static de funcţionare se află pe curba de 40 µA a curentului de bază. Dacă schimbăm însă rezistenţa sarcinii acestui circuit cu o rezistenţă mai mare, acest lucru va afecta panta dreptei de sarcină, întrucât o rezistenţă de sarcină mai mare va limite curentul maxim prin colector la saturaţie, dar nu va modifica tensiunea de blocare colector-emitor. Grafic, rezultatul este o dreaptă de sarcină cu un punct de saturaţie (stânga sus) diferit, dar cu un punct de blocare (dreapta jos) identic:</p>

#+CAPTION: punctul static de funcţionare al amplificatorului clasa A; modificarea pantei dreptei de sarcină prin creşterea valorii rezistenţei sarcinii
[[../poze/03146.png]]

<p>Putem observa că în această situaţie, dreapta de sarcină <i>nu</i> mai intersectează curba caracteristică de 75 µA pe porţiunea sa orizontală. Acest lucru este foarte important de realizat, deoarece porţiunea ne-orizontală a curbei caracteristice reprezintă, după cum am mai menţionat, o condiţie de saturaţie a tranzistorului (curentul colector-emitor nu mai poate fi controlat prin intermediul curentului bazei). Prin urmare, pentru un curent al bazei de 75 µA, tranzistorul (amplificatorul) va fi saturat.</p>

<p>Pentru menţinerea funcţionării liniare (fără distorsiuni), amplificatoarele cu tranzistori nu ar trebui să funcţioneze în zona de saturaţie, adică, acolo un dreapta de sarcină nu intersectează curbele de sarcină pe porţiunea lor orizontală. Vom mai adăuga câteva curbe caracteristice pe grafic, pentru a putea observa până unde putem „impinge” tranzistorul prin creşterea curentului bazei fără ca acesta să intre în zona de saturaţie.</p>

#+CAPTION: punctul static de funcţionare al amplificatorului clasa A; adăugarea unor curbe de sarcină suplimentară pentru observarea intrării în zona de saturaţie
[[../poze/03147.png]]

<p>Se poate vedea de pe grafic că cel mai înalt punct de pe dreapta de sacină ce intersectează curbele de sarcină ale tranzistorului pe porţiunea orizontală, este pentru curba de 50 µA (curentul de bază). Acest punct ar trebui considerat nivelul maxim al semnalului de intrare pentru funcţionarea amplificatorului de clasă A. De asemenea, tot pentru funcţionarea corectă a amplificatorului de clasă A, tensiunea de polarizare ar trebui să fie astfel încât punctul static de funcţionare să se regăsească la mijlocul drumului între punctul maxim de funcţionare şi punctul de blocare:</p>

#+CAPTION: noul punct static de funcţionare al amplificatorului clasa A;
[[../poze/03148.png]]

<p>Asfel, noul punct static de funcţionare, ales pe cale grafică, ne spune că, pentru funcţionarea corectă a amplificatorului de clasă A, pentru sarcina în cauză, curentul bazei trebuie să aibă o valoare de aproximativ 25 µA. Cunoscând această valoare, putem determina mai apoi şi tensiune de polarizare directă în curent continuu.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Punctul static de funcţionare reprezintă valoarea curentului bazei pentru care tranzistorul funcţionează corect</li>
	<li>Pentru amplificatorul de clasă A, punctul static de funcţionare se află la jumătatea distanţei dintre punctul de blocare şi zona de saturaţie a dreptei de sarcină</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
