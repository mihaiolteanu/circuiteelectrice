<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Amplificatorul</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>3. Amplificatorul</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Practic, elementele active sunt folosite pentru proprietatea lor de <i>amplificare</i>. Indiferent dacă dispozitivul în cauză este constrolat în tensiune sau în curent, puterea necesară pentru semnalul de control este de obicei mult mai mică decât puterea disponibilă în curentul controlat. Cu alte cuvinte, un element activ nu permite pur şi simplu controlul curentului de către curent, ci, face posibil controlul unui curent mare de către un curent mic.</p>

<p>Datorită acestei diferenţă dintre puterea <i>controlată</i> şi puterea <i>controlatoare</i>, elementele active de circuit pot fi folosite pentru comanda unei cantităţi mari de putere (controlată) de către o cantitate mică de putere (controlatoare). Acest comportament poartă numele de <i>amplificare</i>.</p>

<p>O lege fundamentală a fizicii, cea a conservării energiei, spune că energia nu poate fi creată dar nici distrusă. Dacă această lege este adevărată, atunci construirea unui dispozitiv care să ia o cantitate mică de energie şi să o transforme într-o cantitate mare de energie, pe cale magică, nu este posibilă. Toate maşinile, incluzând circuitele electrice şi electronice, au o eficienţă maximă de 100%. În cele mai fericite cazuri, puterea de intrare este egală cu puterea de ieşire:</p>

#+CAPTION: eficienţa unei maşini ideale este de 100%, dar nu poate fi mai mare de atât
[[../poze/03165.png]]

<p>În realitate însă, de cele mai multe ori, maşinile nu ating nici măcar această limită superioară, deoarece o parte din energia de intrare se pierde sub formă de căldură radiată în spaţiul din jur, iar această energie pierdută nu se regăseşte în valoarea energiei de ieşire.</p>

#+CAPTION: eficienţa unei maşini reale este sub 100%, datorită pierderilor sub formă de căldură
[[../poze/03166.png]]

<p>Au existat numeroase încercări, fără succes însă, de a proiecta şi construi o maşină a cărei putere de ieşire să fie mai mare decât puterea de intrare. Acest lucru nu doar că ar viola legea conservării energiei, dar ar duce lumea într-o revoluţie tehnologică fără precedent, deoarece acest tip de maşină s-ar putea alimenta singură, într-o buclă circulară, şi ar putea genera putere „gratuită”. Această maşină este cunoscută sub numele de <i>perpetuum mobile.</i></p>

#+CAPTION: eficienţa unui perpetuum mobile este de peste 100%
[[../poze/03167.png]]

<p>Deşi au existat multe încercări în acest domeniu, până acum nu s-a reuşit construirea unei maşini capabile să se alimenteze singură, cu propria ei energie plus generarea unei energii suplimentare.</p>

<p>Totuşi, există o gamă de maşini denumite <i>amplificatoare</i>, în cadrul cărora, semnalele de putere mică de la intrare sunt „transformate” (cu ajutorul unei surse externe de putere) în semnale de ieşire de o putere mult mai mare. Pentru a înţelege cum pot amplificatoarele să existe fără a viola legea conservării energiei, trebuie să înţelegem modul de funcţionare al dispozitivelor active.</p>

<p>Pentru că elementele active de circuit pot <i>controla</i> cantităţi mari de putere electrică cu ajutorul unei cantităţi mici de putere electrică, acestea pot fi utilizate în circuite pentru duplicarea formei semnalului de intrare cu ajutorul unei surse externe de putere electrică. Rezultatul este un dispozitiv ce pare a transforma pe cale magică un semnal electric de putere mică într-un semnal identic, dar de o putere/amplitudine mai mare. Legea conservării energiei nu este violată, deoarece puterea adiţională este întrodusă în circuit de o sursă externă, de obicei o baterie de curent continuu sau o sursă echivalentă. Amplificatorul nu crează şi nici nu distruge energie, ci doar o „remodelează” într-o formă de undă dorită:</p>

#+CAPTION: schema bloc de principiu al unui amplificator electronic
[[../poze/03168.png]]

<p>Cu alte cuvinte, abilitatea de control al curentului pe care elementele active le posedă, este folosită pentru „transformarea” puterii de curent continuu dintr-o sursă externă în aceeiaşi formă de undă precum a semnalului de intrare, forma semnalului produs la ieşire fiind în acest caz identică cu cea de la intrare, dar de o amplitudine mult mai mare. Tranzistorul, sau alte dispozitive active conţinute într-un amplificator, formează pur şi simplu o <i>copie</i> a formei de undă a semnalului de intrare cu ajutorul sursei externe de curent continuu „brute”.</p>

<p>Eficienţa amplificatoarelor, precum este cazul tuturor maşinilor, este limitată la un maxim de 100%. De obicei, amplificatoarele electronice au o eficienţă mult sub acest nivel, datorită pierderilor considerabile de energie sub formă de căldură.</p>

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
