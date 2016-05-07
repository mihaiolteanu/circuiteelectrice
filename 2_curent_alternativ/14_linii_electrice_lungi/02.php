<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Impedanţa caracteristică</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Impedanţa caracteristică</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Să presupunem totuşi, că am avea un set de conductori de lungime infinită, fără nicio lampă conectată la capăt. Ce s-ar întâmpla la închiderea întrerupătorului. Din moment ce nu avem nicio sarcină conectată la bornele sale, acest circuit este de fapt deschis. Nu va exista deloc curent prin acest circuit?</p>

<p><img src="../poze/02356.png" alt="circuit electric simplu format din baterie şi întrerupător şi conductori de lungime infinită"/></p>

<p>Chiar dacă am putea elimina rezistenţa firelor prin folosirea superconductoarelor în acest „experiment”, nu am putea elimina însă capacitatea formată în lungimile conductorilor. <i>Orice</i> pereche de conductori separaţi între ei printr-un mediu izolant, prezintă o anumită capacitate electrică parazită între ei.</p>

<p><img src="../poze/02359.png" alt="circuit electric simplu format din baterie şi întrerupător şi conductori de lungime infinită; apariţia capacităţilor parazite între cei doi conductori"/></p>

<p>Aplicarea unei diferenţe de potenţial între doi conductori, duce la formarea unui câmp electric între acei doi conductori. Acest câmp electric va stoca energie, iar aceasta va duce la o opoziţie faţă de variaţia tensiunii, efect descris de ecuaţia i = C(de/dt), şi anume, curentul va fi proporţional cu rata de variaţia a tensiunii cu timpul. Asfel, la închiderea întrerupătorului, capacitatea dintre cei doi conductori va reacţiona împotriva creşterii bruşte (variaţie) a tensiunii, ceea ce va duce la apariţie unui curent prin circuit (de la sursă). Conform ecuaţiei, o variaţie instantă a tensiunii aplicate (produsă de închiderea perfectă a întrerupătorului) ar da naştere unui curent de încărcare infinit.</p>

<p>Cu toate acestea, curentul prin cei doi conductori paralelil nu va fi infinit, deoarece există o anumită impedanţă serie în lungul conductorilor, datorită inductanţei acestora. Apariţia unui curent, prin orice conductor, dă naştere unui câmp magnetic proporţional cu valoarea acestuia. Acest câmp magnetic va stoca energie, iar acest fapt va duce la o opoziţie faţă de variaţia curentului. Fiecare conductor va prezenta un câmp magnetic datorat trecerii curentului, iar căderea de tensiune ce ia naştere se calculează cu ecuaţia e = L(di/dt). Această cădere de tensiune limitează rata de variaţie a tensiunii în lungul capacitătilor distribuite, prevenind creşterea curentului spre infinit.</p>

<p><img src="../poze/02357.png" alt="circuit electric simplu format din baterie şi întrerupător şi conductori de lungime infinită; capacităţile şi inductanţele parazite"/></p>

<p><img src="../poze/02358.png" alt="circuit electric simplu format din baterie şi întrerupător şi conductori de lungime infinită; închiderea întrerupătorului şi apariţia câpurilor electrice şi magnetice"/></p>

<p>Deoarece transferul de mişcare al electronilor celor doi conductori de la unul la celălalt se realizează la viteza luminii, „frontul de undă” al variaţiei tensiunii şi curentului se va propaga în lungimea conductorilor cu aproximativ aceeiaşi viteză, ducând la încărcarea progresivă la valoarea maximă de tensiune şi curent a capacităţilor şi inductanţelor distribuite, asfel:</p>

<p><img src="../poze/02361.png" alt="linie electrică lungă neîncărcată; închiderea întrerupătorului şi propagarea undei"/></p>

<p><img src="../poze/02362.png" alt="linie electrică lungă neîncărcată; închiderea întrerupătorului şi propagarea undei"/></p>

<p><img src="../poze/02363.png" alt="linie electrică lungă neîncărcată; închiderea întrerupătorului şi propagarea undei cu aproximativ viteza luminii"/></p>

<p>Rezultatul final al acestor interacţiuni este un curent constant, de amplitudine limitată, prin sursa de tensiune (baterie). Din moment ce lungimea conductoarelor este infinită, capacităţile lor distribuite nu se vor putea încărca niciodată la tensiunea sursei, iar inductanţele distribuite nu vor permite niciodată un curent de încărcare nelimitat. Cu alte cuvinte, această pereche de conductori va „trage” curent de la sursă atâta timp cât întrerupătorul este închis, comportându-se precum o sarcină constantă. În acest caz, firele electrice nu mai sunt simple conductoare de curent electric, ci constituie ele însele un component al circuitului, cu caracteristici unice care trebuiesc luate în considerare. Spunem în acest caz, că cele două perechi de conductoare sunt <i>linii de transmisie</i>.</p>

<p>Pentru o sarcină constantă, răspunsul liniilor de transmisie, la aplicarea unei tensiuni, este rezistiv şi nu reactiv, deşi sunt compuse în mare parte din inductanţe şi capacităţi (presupunând rezistenţa conductorilor ca fiind zero). Merită menţionat acest lucru, deoarece, din punctul de vedere al bateriei, nu există nicio diferenţă între un rezistor ce disipă tot timpul energie şi un set de linii electrice infinite ce abosrbă energie tot timpul. Impedanţă (rezistenţa) acestei linii, măsurată în Ohmi, poartă numele de <i>impedanţă caracteristică</i>, şi este o cantitate ce depinde exclusiv de geometria celor doi conductori. Pentru un set de conductori paraleli, cu aer pe post de dielectric, impedanţa caracteristică poate fi calculată asfel:</p>

<p><img src="../poze/12144.png" alt="calcularea impedanţei caracteristice dintre două conductoare separate prin aer"/></p>

<p>Dacă linia de transmisie este un cablu coaxial, impedanţa caracteristică se calculează asfel:</p>

<p><img src="../poze/12145.png" alt="calcularea impedanţei caracteristice a unui cablu coaxial"/></p>

<p>În ambele ecuaţii se folosesc aceleaşi unităţi de măsură. Dacă dielectricul dintre cei doi conductori nu este aer (sau vid), atât impedanţa caracteristică cât şi viteza de propagare a undelor vor avea de suferit. Raportul dintre viteza reală de propagare a undelor într-o linie de transmisie şi viteza luminii, poartă numele de <i>factorului de viteză</i> al acelei linii.</p>

<p>Factorul de viteză depinde doar de permitivitatea relativă a materialului izolator (dielectric), cunoscută şi sub numele de <i>constanta dielectrică</i>, şi definita ca raportul dintre permitivitatea electrică a materialului respectiv şi permitivitatea electrică a vidului. Factorul de viteză a oricărui tip de cablu (coaxial sau alt tip), poate fi calculat cu următoarea formulă:</p>

<p><img src="../poze/12148.png" alt="formula matematică pentru calcularea factorului de viteză a oricărui tip de cablu"/></p>

<p>Impedanţa caracteristică mai este cunoscută şi sub numele de <i>impedanţă naturală</i>, şi se referă la rezistenţa echivalentă a liniei de transmisie dacă lungimea acesteia ar fi infinită, datorită capacităţilor şi inductanţelor distribuite.</p>

<p>Se poate vedea din ecuaţiile de mai sus, că impedanţa caracteristică (Z<sub>0</sub>) a liniilor de transmisie creşte odată cu creşterea distanţei dintre conductori. Dacă distanţa dintre cei doi conductori creştere, capacitatea distribuită scade, datorită distanţei mai mare dintre armături, iar inductanţa distribuită creşte, datorită efectelor de anulare a câmpurilor magnetice opuse mult mai mici. O capacitate paralel mult mai mică, şi o inductanţă serie mult mai mare, duce la un curent mult mai mic prin linie pentru aceeiaşi valoare a tensiunii aplicate, ceea ce prin definiţie înseamnă o impedanţă mai mare. Invers, dacă distanţa dintre cei doi conductori scade, capacitatea paralel creşte, iar inductanţa serie scade. Rezultatul este un curent mai mare prin conductori pentru aceeiaşi valoare a tensiunii, ceea ce înseamnă de fapt o impedanţă mai mică.</p>

<p>Ignorând orice efecte disipative a conductorilor, impedanţa caracteristică a liniilor electrice lungi este egală cu rădăcina pătrată a raportului dintre inductanţa liniei pe unitate de lungime şi capacitatea liniei pe unitate de lungime:</p>

<p><img src="../poze/12146.png" alt="formula matematică pentru calcularea impedanţei caracteristice a liniilor electrice lungi"/></p>

<p class="sumar">Sumar:</p>
<ul>
	<li>O linie de transmisie (linie electrică lungă) este o pereche de conductori cu anumite caracteristici specifice datorate capacităţilor şi inductanţelor distribuite pe lungimea ei</li>
	<li>Aplicarea unei tensiuni la capătul unei linii de transmisie, face ca propagarea undei de tensiune şi curent să se realizeze cu viteza luminii (aproximativ</li>
	<li>Dacă se aplică o tensiune continuă unei linii de transmisie de lungime infinită, din punctul de vedere al sursei, linia de transmisie este o rezistenţă constantă</li>
	<li>Impedanţa caracteristică (Z<sub>0</sub>) a unei linii de transmisie este echivalentă cu rezistenţa acestia dacă lungimea sa ar fi infinită. Impedanţa caracteristică depinde doar de capacitatea şi de inductanţa distribuită în lungul liniilor de trnasmisie, şi este prezentă chiar şi atunci când dielectricul este perfect</li>
	<li>Factorul de viteză este o valoare subunitară tipică pentru cabluri coaxiale şi linii electrice lungi duble. Pentru oricare tip de cablu, factorul de viteză este egal cu inversa rădăcinii pătrate a permitivităţii relative a dielectricului dintre cei doi conductori</li>
	
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>