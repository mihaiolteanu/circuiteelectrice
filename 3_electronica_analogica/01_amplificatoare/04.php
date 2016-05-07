<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Factorul de amplificare</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. Factorul de amplificare</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Deoarece amplificatoarele pot să mărească amplitudinea semnalului de intrare, ar fi foarte util dacă am descrie această proprietatea a lor printr-un raport ieşire/intrare, raport ce poartă numele de <i>factor de amplificare</i>, sau <i>amplificare</i>. Acest factor nu are unitate de măsură, fiind un raport dintre două mărimi cu aceeiaşi unitate de măsură. Matematic, simbolul amplificării este „A”.</p>

<p>De exemplu, dacă la intrarea unui amplificator avem un semnal de tensiune alternativă efectivă de 2 V, iar la ieşire avem o tensiune alternativă efectivă de 30 V, spunem că factorul de amplificare în tensiune al amplificatorului este de 15, adică 30 împărţit la 2.</p>

<p><img src="../poze/13025.png" alt="calcule matematice"/></p>

<p>Prin aceeiaşi metodă, dacă ştim factorul de amplificare şi amplitudinea semnalului de intrare, putem calcula amplitudinea semnalului de ieşire. De exemplu, dacă un amplificator cu un factor de amplificare în curent alternativ de 3.5, are la intrare un semnal de 28 mA efectiv, semnalul de ieşire va fi 98 mA efectiv, sau 3.5 * 28 mA.</p>

<p><img src="../poze/13026.png" alt="calcule matematice"/></p>

<p>În exemplele de mai sus, toate semnalele şi amplificările au fost considerate în curent alternativ. Trebuie menţionat un principiu important: amplificatoarele electronice răspund diferit semnalelor de intrare în curent alternativ şi curent continuu, iar amplificarea celor două poate să fie diferită. Înainte de a putea face calculele amplifcărilor, trebuie să înţelegem cu ce semnale avem de a face în primul rând, alternative sau de continue.</p>

<p>Dacă conectăm mai multe amplificatoare în etaje, factorul de amplificare totale va fi egal cu produsul amplificărilor individuale. În figura de mai jos, un semnal de 1 V este aplicat intrării unui amplificator cu factorul de amplificare 3. Ieşirea acestuia, de 3 V, este introdusă la intrarea unui amplificator cu factorul de amplificare 5, semnalul de la ieşire fiind 15 V:</p>

<p><img src="../poze/03169.png" alt="schema bloc de principiu al legării amplificatoarelor în etaje; amplificarea finală este produsul amplificărilor individuale"/></p>



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