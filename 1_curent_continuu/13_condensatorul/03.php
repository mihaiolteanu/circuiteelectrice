<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Factori ce afectează capacitatea electrică</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Factori ce afectează capacitatea electrică</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Există trei factori de bază în construcţia condensatoarelor ce afectează valoarea capacităţii asfel create. Toţi aceşti factori afectează valoarea fluxului de câmp (diferenţa relativă de electroni între armături) dezvoltat între armături pentru o anumită valoare a forţei câmpului electric.</p>

<h3>Aria armăturilor</h3>
<p>Toţi ceilalţi factori fiind egali, o aria mai mare a armăturilor se traduce printr-o capacitate mai mare a condensatorului; o arie mai mică înseamnă o valoare mai mică a capacităţii. Exmplicaţia constă în faptul că o aria mai mare poate susţine o flux mai mare al câmpului (sarcină colectată pe armături) pentru o anumită valoare a forţei câmpului (tensiunea dintre armături).</p>

<p><img src="../poze/00295.png" alt="capacitatea condensatorului în funcţie de aria armăturilor"/></p>

<h3>Distanţa dintre armături</h3>

<p>Toţi ceialţi factori fiind egali, o distanţă mai mare între armături se traduce printr-o capacitate mai mică a condensatorului; o distanţă mai mică între armături înseamnă o capacitate mai mare. Explicaţia constă în faptul că o distanţă mai mică duce la o forţă mai mare a câmpului (tensiunea dintre armături împărţită la distanţa dintre ele), ce rezultă într-un flux mai mare al câmpului (sarcină colectată pe armături), oricare ar fi valoarea tensiunii aplicate pe armături.</p>

<p><img src="../poze/00296.png" alt="capacitatea condensatorului în funcţie de distanţa dintre armături"/></p>

<h3>Materialul dielectric</h3>

<p>Toţi ceilalţi factori fiind egali, o permitivitate mai mare a materialului dielectric se traduce printr-o capacitate mai mare a condensatorului; o valoarea mai mică a permitivităţii înseamnă o capacitate mai mică. Deşi explicaţia este puţin mai complicată, unele materiale oferă o opoziţie mai mică fluxului pentru o anumită valoare a forţei câmpului electric. Materialele cu o permitivitate mai ridicată permit existenţa unui flux mai mare (oferă mai puţină opoziţie), şi prin urmare sarcina colectată pe armături poate fi mai mare, oricare ar fi valoarea forţei câmpului (tensiunea aplicată la bornele condensatorului).</p>

<p><img src="../poze/00297.png" alt="capacitatea condensatorului în funcţie de permitivitatea dielectricului"/></p>

<p>În acest context, „relativ” se referă la permitivitatea materialului relativ la permitivitatea vidului. Cu cât numărul este mai mare, cu atât este mai mare permitivitatea materialului. Sticla, de exemplu, cu permitivitatea relativă 7, are de şapte ori permitivitatea vidului şi va permite prin urmare stabilirea unul câmp electric (flux) de şapte ori mai puternic decâţ este posibil în vid, toţi ceilalţi factori fiind egali.</p>

<p>În următorul tabel sunt prezentate permitivităţile relative (cunoscută şi sub numele de „constanta dielectrică”) ale unor materiale obişnuite:</p>

<pre>
Material        Permitivitatea relativă (constanta dielectrică)
============================================================ 
Vid ---------------------------- 1.0000                      
Aer ---------------------------- 1.0006                      
PTFE, FEP ("Teflon") ----------- 2.0                         
Polipropilenă ------------------ 2.20 - 2.28                
Răşini ABS --------------------- 2.4 - 3.2                  
Polistiren --------------------- 2.45 to 4.0                
Hârtie ceruită ----------------- 2.5                         
Ulei de transformator ---------- 2.5 - 4                    
Cauciuc tare ------------------- 2.5 - 4.80                 
Lemn (stejar) ------------------ 3.3                         
Silicon ------------------------ 3.4 - 4.3                  
Bachelită ---------------------- 3.5 - 6.0                  
Cuarţ -------------------------- 3.8                         
Lemn (Arţar) ------------------- 4.4                         
Sticlă ------------------------- 4.9 - 7.5                  
Ulei de castor ----------------- 5.0                         
Lemn (Mesteacăn) --------------- 5.2                         
Mică, Muscovit  ---------------- 5.0 - 8.7                  
Mică, Sticlă ------------------- 6.3 - 9.3                  
Porţelan, Steatit -------------- 6.5                         
Alumina ------------------------ 8.0 - 10.0                 
Apă distilată ------------------ 80.0                       
Titanat-Bariu-Stronţiu --------- 7500                      
</pre>

<p>O valoare aproximativă pentru capacitatea unui condensator poate fi calculată cu următoarea formulă:</p>

<p><img src="../poze/10230.png" alt="formula de calcul a capacităţii condensatorului"/></p>

<h3>Condensatorul variabil</h3>
<p>După modul de construire al condensatorului acesta poate fi fix (discutat mai sus), sau poate fi variabil. Cel mai uşor factor de exploatat în cazul celor variabile este aria armăturilor, sau mai bine spus, aria de suprapunere a lor.</p>

<p><img src="../poze/50018.jpg" alt="condensator variabil"/></p>

<p>Pe măsură ce rotim axul, gradul de suprapunere al armăturilor variază, afectând aria efectivă în care poate exista campul electric între cele două armături. </p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>