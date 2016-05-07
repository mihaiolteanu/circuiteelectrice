<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Încărcarea şi descărcarea condensatorului</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>16. Încărcarea şi descărcarea condensatorului</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Scopul experimentului</h2>

<p>Vom observa modul de încărcare şi descărcare al condensatoarelor. Vom calcula constanta de timp a circuitului şi capacitatea rezultată prin conectarea condensatoarelor în serie şi paralel.</p>

<h2>Materiale necesare</h2>

<p>Pentru acest experiment veţi avea nevoie de o baterie de 6 V (sau sursă de tensiune echivalentă), două condensatoare electrolitice mari, de cel puţin 1000 µF, doi rezistori de 1 kΩ şi de un întrerupător. Circuitul realizat arată astfel:</p>

<img src="../poze/05172.png" width="295" height="217" alt="încărcarea şi decărcarea unui condensator"/>

<img src="../poze/05173.png" width="250" height="182" alt="încărcarea unui condensator"/>

<img src="../poze/05174.png" width="265" height="167" alt="decărcarea unui condensator"/>

<h2>Atenţie la condensatoarele electrolitice</h2>

<p>Acest experiment necesită utilizarea unor condensatoare mari pentru producerea unor constante de timp adecvate. Altfel, nu am putea urmări comportamentul circuitului cu ajutorul unui voltmetru şi a unui cronometru. Atenţie însă, majoritatea condensatoarelor de o asemenea capacitate sunt condensatoarele electrolitice. Polaritatea acestora este importantă! Cel puţin unul din terminalele fiecărui condensator este de obicei marcat cu polaritatea respecitvă. De obicei, pentru astfel de mărimi, condensatoarele sunt marcate printr-unul sau mai multe minusuri (-) pe partea terminalului negativ.</p>

<p>Dacă nu respectaţi indicaţia polarităţii, şi prin urmare, modul corect de alimentare al lor, mai mult ca sigur că aceste condensatoare se vor deteriora, chiar şi în cazul unei tensiuni mici de 6 V. Distrugerea condensatoarelor electrolitice constă de obicei în explozia lor şi împrăştierea materialelor chimice din interior. Încercaţi să evitaţi acest lucru !</p> 

<h2>Realizarea circuitului şi măsurarea constantei de timp</h2>

<p>Construiţi circuitul de încărcare a condensatorului, precum în figura de mai sus. Măsuraţi tensiunea la terminalele condensatorului atunci când întrerupătorul este închis. Observaţi cum tensiunea creşte încet, cu timpul, şi nu brusc cum se întâmplă în cazul unui rezistor. Puteţi „reseta” condensatorul înapoi la tensiunea de 0 V prin scurt-circuitarea terminalelor acestuia pe o sarcină (rezistor, de exemplu).</p>

<p>Constanta de timp (τ) a unui circuit rezistor-condensator se calculează prin înmulţirea capacităţii şi a rezistenţei circuitului. Pentru un rezistor de 1 kΩ şi un condensator de 1.000 µF, constanta de timp ar trebui să fie 1 secundă. Aceasta este durata de timp pentru care tensiunea condensatorului creşte de la 0 V la aproximativ 63,2% din tensiunea sa finală: tensiunea bateriei.</p>

<p>Ar fi interesant de realizat un grafic, în care să vedem tensiunea condensatorului cu timpul. Pentru a putea realiza acest grafic totuşi, trebuie să găsim o metodă de încetinire a circuitului. O fereastră de o secundă nu este chiar suficientă pentru a putea măsura tensiuni cu un voltmetru.</p>

<p>Cum putem însă creşte constanta de timp a circuitului. Dacă ne uităm la formulă, există doar două posibilităţi: modificăm rezistenţa totală din circuit sau/si modificăm capacitatea totală a circuitului. Experimentaţi cu diferite combinaţi serie şi parelel, având la dispoziţie o pereche de rezistori identici şi o pereche de condensatori identici. Găsiţi combinaţia pentru care timpul de încărcare este cel mai lung.</p>

<p>Desigur, conectarea rezistorilor în serie formează o rezistenţă şi mai mare. Este valabil acest lucru şi în cazul condensatoarelor? Realizând acest circuit, vă puteti lămuri ce se întâmplă cu capacitatea condensatoarelor conectate în serie, respectiv paralel. Asiguraţi-vă însă de conectarea corectă a condensatoarele în circuit!</p>

<p>Circuitul de descărcare este similar celui de încărcare. Singura deosebire este că de această dată, tensiunea este maximă la închiderea întrerupătorului şi scade treptat după deschiderea acestuia. Experimentaţi şi în acest caz cu diferite combinaţii de rezistori şi condensatoare.</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>