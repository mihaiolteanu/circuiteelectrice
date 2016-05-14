<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Sisteme de alimentare monofazate</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Sisteme de alimentare monofazate</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

#+CAPTION: schema electrică a unui circuit monofazat simplu; sarcini conectat în paralel
[[../poze/02164.png]]

<p>Schema electrică de sus este a unui circuit electric simplu, monofazat, în curent alternativ. Dacă puterea disipată pe sarcini este suficient de mare, putem denumi o asfel de configuraţie „circuit de putere”. Distincţia dintre un circuit de putere şi un circuit normal poate părea întâmplătoare, dar implicaţiile practice sunt importante.</p>

<p>Una dintre implicaţii este costul şi mărimea conductorilor necesari pentru alimenatrea sarcinilor de la sursa. În mod normal, nu ne interesează asfel de probleme dacă analizăm un circuit doar pentru a învăţa despre electricitate. Totuşi, în viaţa reală, acest lucru este de o importanţă deosebită. Dacă, în circuitul de mai sus, considerăm sursa de tensiune ca fiind de 120 V, iar puterile disipate pe sarcini de 10 kW fiecare, putem determina tipul conductorilor de care avem nevoie.</p>

#+CAPTION: schema electrică a unui circuit monofazat simplu; sarcini conectat în paralel
[[../poze/02165.png]]

#+CAPTION: calcule matematice
[[../poze/12109.png]]

<p>Putem vedea că valoarea curentului prin circuit este foarte mare în acest caz, 88.33 A pentru fiecare rezistor, adică 166.66 A pentru curentul total din circuit. Conductorii de cupru folosiţi pentru asfel de aplicaţii ar ajunge undeva la 6 mm în diametru, cu o greutate de aproximativ 50 kg  la 100 m, iar cuprul nu este nici el un material ieftin. În cazul în care ar fi să proiectăm un asfel de sistem de putere, cea mai bună strategie ar fi să căutăm soluţii pentru minimizarea acestor tipuri de costuri.</p>

<p>O soluţie ar fi creşterea tensiunii sursei de alimentare folosind sarcini ce disipă aceeiaşi cantitate de putere, 10 kW, pentru această tensiune. Sarcinile ar trebui să aibă valori mai mari ale rezistenţelor dacă vrem să disipe aceeiaşi putere la o tensiune mai mare. Avantajul constă în diminuarea curentului necesar, şi prin urmare, folosirea unor conductori de dimensiuni mai mici, mai uşori şi mai ieftini:</p>

#+CAPTION: schema electrică a unui circuit monofazat simplu; sarcini conectat în paralel
[[../poze/02166.png]]

#+CAPTION: calcule matematice
[[../poze/12110.png]]

<p>De data aceasta, curentul total este 83.33 A, jumătate faţă de valoarea precedentă. Putem utiliza conductori a căror greutate este jumătate din valoarea precedentă. Aceasta este o reducere considerabilă a costurilor sistemului, fără niciun efect negativ asupra performanţelor. Acesta este şi motivul pentru care sistemele de distribuţie sunt proiectate pentru transmiterea puterilor la tensiuni foarte înalte: pentru a profita de avantajul oferit de utilizarea conductorilor cu diametru mai mic, mai uşori şi mai ieftini.</p>

<p>Totuşi, această soluţie prezintă şi dezavantaje. O altă problemă ce trebuie luată în considerare în cadrul circuitelor de putere, este pericolul electrocutării datorat tensiunilor înalte. Din nou, acesta nu este neapărat un subiect luat în considerare atunci când învăţăm despre legile electricităţii, dar este o problemă reală în proiectarea sistemelor electrice, mai ales atunci când puterile sunt foarte mari. Deşi am câştigat în eficientă prin ridicarea tensiunii sistemului, acest lucru duce pe de altă parte la mărirea pericolului electrocutării. Companiile de distribuţie a curentului electric au rezolvat această problemă prin instalarea liniilor de putere pe stâlpi de „înaltă tensiune” şi izolarea lor faţă de conductori prin dielectrici confecţionaţi din porţelan.</p>

<p>Dar această tensiune ridicată nu poate fi păstrată la aceleaşi valori atunci când ajunge la consumatori, evident, din motive de siguranţă. Sistemele de putere din Europa folosesc această tensiune mai înaltă, de 240 V, riscul crescut de electrocutare al utilizatorilor fiind compensat de eficienţa mărită a unui asfel de sistem. În America de Nord, tensiune de alimentare este jumătate, şi anume 120 V, scăderea eficienţei în acest caz fiind compensată de creşterea siguranţei utilizatorilor.</p>

<p>O soluţie alternativă ar fi utilizarea unei surse de tensiune mai înaltă pentru alimentarea celor două sarcini în serie, căderea de tensiune pe fiecare sarcină fiind asfel jumătate din tensiunea de alimentare. Această soluţie combină eficienţa unui sistem de tensiune înaltă cu siguranţa oferită de un sistem de tensiune joasă.</p>

#+CAPTION: schema electrică a unui circuit monofazat simplu; sarcinile sunt conectate în serie
[[../poze/02167.png]]

<p>Puteţi observa pe desen şi polarităţile („+” şi „-”) pentru fiecare tensiune, precum şi direcţia curentului prin circuit. Chiar dacă este un circuit alternativ, vom utiliza aceste notaţii pentru a avea un sistem de referinţă pentru fazele tensiunilor şi a curenţilor, sistem ce se va dovedi folositor în capitolele următoare.</p>

<p>Curentul pe fiecare sarcină este acelaşi ca în cazul circuitului alimentat de la 120 V, dar aceştia nu se însumează, deoarece sunt în serie, nu în paralel. Căderea de tensiune pe fiecare sarcină este de doar 120 V, nu 240, aşadar nivelul de siguranţă a crescut. Diferenţa de potenţial între cei doi conductori ai sistemului de alimentare este tot de 240 V, dar fiecare sarcină este alimentată la o tensiune mult mai mică. În cazul apariţiei electrocutării, este foarte probabil ca persoana în cauză să intre în constat cu sarcina, sau conductorii acesteia, şi nu cu firele de 240 V.</p>

<p>Există însă un dezavantaj al acestui tip de circuit: în cazul defectării uneia dintre sarcinii, dacă aceasta este închisă sau scoasă din circuit, vom avea practic un circuit deschis, curentul scăzând la zero şi întreaga cădere de tensiune se va regăsi pe această sarcină „defecta”. Din acest motiv, trebuie să modificăm puţin circuitul:</p>

#+CAPTION: schema electrică a unui circuit monofazat simplu; sarcinile sunt conectate în serie; adăugarea unui conductor neutru
[[../poze/02168.png]]

#+CAPTION: calcule matematice
[[../poze/12111.png]]

<p>În locul unei singure surse de tensiune de 240 V, folosim două surse de 120 V, conectate în serie şi în fază una cu cealaltă, pentru producerea unei tensiuni de 240 V, şi utilizăm un conductor suplimentar conectat între cele două sarcini şi cele două surse, pentru a prelua curentul în cazul deschiderii uneia dintre sarcini. Dacă suntem atenţi, observăm că firul neutru trebuie să conducă doar diferenţa de curent dintre cele două sarcini. În cazul de mai sus, când sarcinile sunt echilibrate (egale), puterea consumată de acestea este egală, asfel că neutrul nu conduce curent.</p>

<p>Neutrul este conectat la împământare, fiind o practică des întâlnită în proiectarea sistemelor de putere cu fir neutru. Această împământare asigură o diferenţă de potenţial cât mai mică, în fiecare clipă, între fază şi pământ.</p>

<p>O componentă importantă a unui asfel de sistem o reprezintă sursele de tensiune duale în curent alternativ. Din fericire, construcţia unui asfel de sistem nu este dificilă. Din moment ce majoritatea sistemlor de curent alternativ sunt alimentate de un transformator coborâtor de tensiune, acel transformator poate fi construit cu o priză mediană pe înfăşurarea secundară:</p>

#+CAPTION: transformator coborâtor de tensiune cu priză mediană pe înfăşurarea secundară pentru alimentarea unui sistem de alimentare în curent continuu dual
[[../poze/02169.png]]

<p>Notarea polarităţilor („+” şi „-”) devine în acest moment importantă. Aceasta este folosită ca şi sistem de referinţă al fazelor în circuitele de curent alternativ cu surse de alimentare multiple. Cele două surse de mai sus, conectate în serie, pot fi la fel de bine reprezentate folosind notaţia polară: conectate în anti-serie şi defazaj de 180<sup>o</sup> între ele. Cele două moduri de reprezentare sunt echivalente.</p>

#+CAPTION: reprezentarea alternativă a conexiunilor surselor de alimentare, folosind notaţia polară
[[../poze/02170.png]]

<p>Căderea de tensiune între cele două faze poate fi calculată asfel:</p>

#+CAPTION: calcule matematice
[[../poze/12112.png]]

<p>Dacă marcăm conexiunea comună a celor două surse (firul neutru) cu aceeiaşi polaritate (-), atunci va trebui să exprimăm diferenţa de fază a celor două ca fiind 180<sup>o</sup>. În caz contrar, am avea două surse de tensiune acţionând în direcţii opuse, ceea ceea ce ar duce la o diferenţa de 0 V între cele două faze.</p>

<p>În general, un asfel de sistem de alimentare este denumit <i>monofazat</i>, datorită faptului că ambele forme de undă sunt în fază. De asemenea, toate circuitele electrice studiate până în acest moment au fost monofazate.</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Sistemele de alimentare monofazate constau dintr-o sursă de alimentare (sau mai multe) având doar o singură formă de undă a tensiunii</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
