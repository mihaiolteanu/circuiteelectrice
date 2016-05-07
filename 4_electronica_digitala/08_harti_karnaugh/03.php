<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Relaţii booleene cu diagrame Venn</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Relaţii booleene cu diagrame Venn</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Funcţia logică SAU (adunarea booleană)</h2>

<p>În ultimul exemplu din secţiunea precedentă, mulţimile A şi B s-au suprapus parţial. Iniţial, ne vom concentra atenţia asupra întregii regiuni haşurate de mai jos, abia apoi vom trece la analizarea regiunii comune celor două mulţimi. Să utilizăm expresii booleene pentru desemnarea reginilor diagramelor Venn, conform figurii de mai jos:</p>

<img src="../poze/14079.png" alt="diagrame Venn"/>

<p>Aria mulţimii A este haşurată cu roşu, iar cea a mulţimii B cu albastru. Dacă analizăm întreaga aria haşurată (suma totală a tuturor ariilor haşurate), indiferent de culoare sau stil, obţinem figura din dreapta sus. Aceasta corespunde funcţiei logice SAU, iar expresia booleană este A + B, aria fiind cea haşurată cu linii diagonale. Tot ceea ce se află în afară ariei haşurate reprezintă (A + B)-negat.</p>

<h2>Funcţia logică ŞI (înmulţirea booleană)</h2>

<p>O altă metodă de interpretare a diagramei Venn cu regiuni suprapuse, este analizarea regiunii comune atât mulţimii A cât şi mulţimii B, aria dublu haşurată de mai jos (stânga). Această arie corespunde funcţiei logice ŞI, iar expresia booleană este AB (jos dreapta). Tot ceea ce se află în afara ariei dublu haşurate AB reprezintă AB-negat:</p>

<img src="../poze/14080.png" alt="diagrame Venn"/>

<p>Observaţii că unele elemente ale mulţimilor A şi B de sus, sunt elemente ale mulţimii (AB)-negat, dar niciunul dintre elementele mulţimii (AB)-negat nu se află în interiorul ariei dublu haşurate AB.</p>

<h2>Expresii booleene</h2>

<h3>Diagrama Venn pentru A'B</h3>

<p>Vom trece acum la dezvoltarea unei expresii booleene. De exemplu, să presupunem că dorim reprezentarea prin diagrame Venn a expresiei booleene A'B (A-negat ŞI B).</p>

<p>Paşii sunt următorii: haşurarea ariei A' (A-negat); haşurarea ariei B; realizarea funcţiei ŞI (A'B) prin suprapunerea celor două regiuni precedente. Am putea să ne oprim aici, dar, pentru claritate, putem păstra doar aria dublu haşurată:</p>

<img src="../poze/14081.png" alt="diagrame Venn"/>

<p>Expresia A'B reprezintă regiunea în care A' şi B se suprapun. Regiunea nehaşurată din afara ariei A'B este (A'B)'.</p>

<h3>Diagrama Venn pentru B' + A</h3>

<p>Putem încerca acelaşi lucru cu expresia booleană SAU. De exemplu, să presupunem că dorim să reprezentăm prin diagrame Venn expresia B' + A.</p>

<p>Paşii sunt următorii: începem cu haşurarea lui B, şi apoi a regiunii B'; suprapunem A peste B'. Din moment ce suntem interesaţi de realizarea funcţiei SAU, vom căuta să reprezentăm întreaga arie formată de cele două mulţimi, indiferent de stilul haşurării. Prin urmare A + B' reprezintă întreaga arie haşurată:</p>

<img src="../poze/14082.png" alt="diagrame Venn"/>

<p>Pentru claritate, putem reprezenta întreaga regiune printr-o singură haşurare (jos stânga):</p>

<img src="../poze/14083.png" alt="diagrame Venn"/>

<h3>Diagrama Venn pentru (A + B')'</h3>

<p>Aria haşurată cu verde de mai sus este rezultatul expresiei A + B'. Trecând la (A + B')', căutam complementul expresiei A + B', reprezentat prin aria nehaşurată din figura de mai sus stânga. Aplicând teorema lui DeMorgan şi negarea dublă (A'' = A), ajungem la rezultatul (A + B')' = AB'. Prin urmare, cele două regiuni sunt identice.</p> 

<p>Putem face acum observaţia că diagramele Venn nu demonstrează nimic. Avem nevoie de algebra booleană pentru acest lucru. Totuşi, diagramele Venn pot fi utilizate pentru verificare şi vizualizare. În exemplul de mai sus, am verificat şi vizualizat teorema lui DeMorgan cu ajutorului unei diagrame Venn.</p>

<h3>Diagrama Venn pentru A' + B' şi (A' + B')'</h3>

<img src="../poze/14085.png" alt="diagrame Venn"/>

<h3>Arătaţi că A' + B' = AB</h3>

<img src="../poze/14143.png" alt="diagrame Venn"/>

<h2>Diagrame Venn cu 3 variabile</h2>

<p>Diagrama Venn de mai jos conţine trei regiuni haşurate, A (roşu), B (albastru) si C (verde). Interescţie tuturor regiunilor în centru reprezintă epxresia booleană ABC. Există o altă regiune unde A şi B se intersectează, reprezentând expresia booleană AB. Similar, interescţia ariei A cu C şi B cu C reprezintă expresia booleană AC, reprectiv BC.</p>

<img src="../poze/14086.png" alt="diagramă Venn cu trei variabile"/>

<p>Observând mărimea regiunilor descrise de functia ŞI de mai sus, putem vedea că mărimea regiunii variază cu numărul variabilelor asociate expresiei ŞI.</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>