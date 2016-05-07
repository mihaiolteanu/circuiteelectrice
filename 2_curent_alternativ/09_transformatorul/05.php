<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Tipuri de înfăşurări</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>5. Tipuri de înfăşurări</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Nu este neapărat necesar ca transformatoarele să fie realizate din doar două seturi de înfăşurări. Să considerăm următorul circuit:</p>

<p><img src="../poze/02141.png" alt="transformator cu înfăşurări secundare multiple"/></p>

<p>În acest caz, toate înfăşurările împart acelaşi miez feromagnetic, fiind cuplate magnetic între ele. Relaţia dintre numărul spirelor înfăşurărilor şi raportul de transformare al tensiunilor considerat la transformatoarele cu două înfăsurări, este valabilă şi în acest caz, unde există înfăsurări multiple. Este posibilă proiectarea unui transformator precum cel din figura de mai sus (o înfăsurare primară şi două înfăşurări secundare) în care, o înfăşurare secundară să fie ridicătoare de tensiune iar cealaltă coborâtoare. Toate circuitele sunt separate electric în acest caz.</p>

<p>Dacă în schimb, nu avem neapărată nevoie de o separare electrică a circuitelor, un efect similar poate fi obţinut şi prin utilizarea prizelor în diferite puncte ale înfăşurării secundare, asfel:</p>

<p><img src="../poze/02142.png" alt="transformator cu înfăşurări secundare multiple folosind prize"/></p>

<p>O priză nu este altceva decât o conexiune făcută într-un anumit punct de pe sencundarul transformatorului. Ralaţia dintre numărul de spire al înfăşurării şi tensiunea obţinută în secundar este valabilă şi în acest caz, pentru toate prizele transformatorului. Acest lucru poate fi exploatat pentru obţinerea unui domeniu mult mai lar de raporturi de transformare:</p>

<p><img src="../poze/02143.png" alt="transformator cu înfăşurări secundare multiple folosind prize; utilizarea comutatoarelor pentru alegerea raportului de transformare"/></p>

<p>Trecând mai departe, putem construi un „transformator variabil”, caz în care vom avea un contact variabil ce se deplasează pe înfăşurarea secundară expusă a transformatorului, fiind posibilă conectarea acestuia în oricare punct (priză variabilă).</p>

<p><img src="../poze/02144.png" alt="transformator variabil; utilizarea unui contact variabil ce se deplasează pe înfăşurarea secundară expusă a transformatorului"/></p>

<p>Utlizarea acestor contacte variabile nu este practică în proiectarea transformatoarelor industriale de putere mare, dar sunt totuşi folosite pentru ajutarea tensiunilor. În sistemele de putere, aceste ajustări de tensiune trebuie făcute periodic pentru a veni în întâmpinarea variaţiei sarcinilor de-a lungul timpului. În mod normal, aceste tipuri de transformatoare nu sunt proiectate pentru a opera sub curenţi sa sarcină, prin urmare, „reglarea” lor se realizează doar atunci când transformatorul nu este alimentat.</p>

<h3>Autotransformatorul</h3>

<p>Dacă neglijăm în totalitate separarea electrică dintre înfăşurări, putem construi un transformator folosind doar o singură înfăşurare; dispozitivul asfel creat poartă numele de <i>autotransformator</i>:</p>

<p><img src="../poze/02145.png" alt="autotransformator ridicător de tensiune"/></p>

<p>Configuraţia de mai sus este un autotransformator ridicător de tensiune. Un autotransformator coborâtor de tensiune arată asfel:</p>

<p><img src="../poze/02146.png" alt="autotransformator coborâtor de tensiune"/></p>

<p>Autotransformatoarele sunt folosite în principal în aplicaţiile unde este nevoie de o mică reducere sau amplificare a tensiunii pe sarcină. Ca şi alternativă, se poate folosi un transformator normal construit special pentru aplicaţia în cauză, sau se poate folosi un autotransformator coborâtor de tensiune cu înfăşurarea secundară conectată în serie, fie pentru amplificarea tensiunii sau pentru reducerea ei (anti-serie).</p>

<p><img src="../poze/02147.png" alt="folosirea unui autotransformator coborâtor de tensiune cu înfăşurarea secundară conectată în serie pentru amplificarea tensiunii"/></p>

<p><img src="../poze/02148.png" alt="folosirea unui autotransformator coborâtor de tensiune cu înfăşurarea secundară conectată în serie pentru reducerea tensiunii"/></p>

<p>Principalul avantaj al unui autotransformator precum cel de mai sus, este folosirea unei singure înfăşurări pentru realizarea amplificării sau reducerii tensiunii, fiind mult mai uşor de construit şi mai ieftin decât un trnasformator normal.</p>

<p>Ca şi în cazul transformatoarelor normale, se pot realiza prize şi pe înfăşurările autotransformatoarelor pentru obţinerea variaţiei raporturilor de transformare. Mai mult decât atât, acestea pot fi realizate cu un contact variabil, caz în care transformatoarele poartă numele de <i>Variac</i>:</p>

<p><img src="../poze/02149.png" alt="Variac - autotransformator variabil"/></p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Este posibilă construirea transformatoarelor cu mai mult de o singură înfăsurare primară şi secundară. Acest lucru permite obţinerea unor raporturi de transformare variabile folosind acelaşi dispozitiv</li>
	<li>Există posibilitatea de realizare a „prizelor” pe înfăşurările transformatoarelor: intersecţia contactului electric în puncte diferite din lungul înfăşurării</li>
	<li>Transformatoarele variabile se pot realiza folosind un contact variabil pe lungimea infăşurării, putându-se practic realiza prize în orice punct de pe înfăşurare</li>
	<li>Un autotransformator este un transformator ce foloseşte o singură înfăşurare pentru ridicarea sau coborârea tensiunii; faţă de un transformator normal, acesta nu oferă separare electrică între primar şi secundar</li>
	<li>Un autotransformator variabil poartă numele de Variac</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>