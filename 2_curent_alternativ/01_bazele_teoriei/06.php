<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Principii ale undelor radio</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>6. Principii ale undelor radio</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Una dintre cele mai fascinante aplicaţii a energiei electrice constă în generarea undelor invizibile de energie, şi anume, a undelor radio. Deşi subiectul este prea vast pentru a fi acoperit în acest scurt capitol, vom prezenta totuşi unele principii de bază.</p>

<h2>Unde electromagnetice</h2>

<p>Odată cu descoperirea accidentală a electromagnetismului de către Oersted, lumea ştiinţifică a realizat legătura strânsă dintre electricitate şi magnetism. La trecerea unui curent electric printr-un conductor, se generează un câmp magnetic perpendicular pe axa de curgere. Asemănător, dacă un conductor este expus unui flux magnetic variabil perpendicular pe lungimea acestuia, se va produce o cădere de lungime pe această porţiune. Până în acel moment, oamenii de ştiinţă ştiau că electricitatea şi magnetismul erau strâns legate prin aceste principii enumerate mai sus. Totuşi, o descoperire crucială se ascundea sub acest concept simplu al perpendicularităţii celor două câmpuri. Această descoperire reprezintă un moment crucial în istoria ştiinţei.</p>

<p>Cel responsabil de această revoluţie conceptuală în domeniul fizicii a fost James Clerk Maxwell (1831-1879), cel care a unificat studiul electricităţii şi a magnetismului sub forma unor ecuaţii diferenţiale compacte (în număr de 4) ce-i poartă numele (ecuaţiile lui Maxwell). Acestea descriu practic întreg comportamentul câmpurilor electrice şi magnetice, dar, necesită un nivel înalt de abstractizare şi pregătire matematică pentru a le putea înţelege. Formal însă, descoperirea lui Maxwell poate fi rezumată astfel: un câmp electric variabil produce un câmp magnetc perpendicular, iar un câmp magnetic variabil produce un câmp electric perpendicular.</p>

<p>Acest comportament poate avea loc în spaţiu liber, cele două câmpuri alternante menţinându-se unul pe celălalt pe măsură ce parcurg spaţiul cu viteza luminii. Această structură dimanică formată din câmpuri electrice şi magnetice este cunoscută sub numele de <i>undă electromagnetică</i>.</p>

<p>Există multe tipuri de energie radiantă naturală compusă din unde electromagnetice. Chiar şi lumina este o undă electromagnetică. La fel razele-X şi radiaţia gamma. Singura diferenţă dintre aceste tipuri de radiaţie electromagnetică este frecvenţa lor de oscilaţie (schimbarea polarităţii câmpurilor electrice şi magnetice).</p>

<h2>Crearea undelor electromagnetice cu ajutorul antenelor</h2>

<p>Folosind o sursă de tensiune de curent alternativ, şi un dispozitiv special ce poartă numele de <i>antenă</i>, putem crea unde electromagnetice (cu o frecvenţă mult mai mică decât cea a luminii) relativ uşor. O antenă nu este altceva decât un dispozitiv construit pentru a produce un câmp electric sau magnetic dispersi. Cele două tipuri fundamentale de antene sunt <i>antena dipol</i> şi <i>antena cadru</i>, prezentate în figura de mai jos:</p>

<img src="../poze/02023.png" alt="tipuri de antenă (dipol şi cadru)"/>

<p>Deşi cele două tipuri de antene nu sunt altceva decât un circuit deschis (dipol), respecitv un scurt-circuit (cadru), aceşti conductori reprezintă surse eficiente de câmpuri electromagnetice atunci când sunt conectate la surse de curent alternativ cu o frecvenţă corespunzătoare. Cei doi conductori ai antenei dipol joacă rolul unui condensator (doi conductori separaţi de un dielectric). Dispersia câmpului electric este însă permisă, spre deosebire de condensatoarele propriu-zise unde acesta este concentrat între două armători.</p>

<p>Circuitul închis al antenei cadru se comportă precum o bobină cu miez (mare) de aer. Din nou, şi în cazul acestei antene, dispersia câmpului este facilitată dinspre antenă spre mediul înconjurător. Acest lucru este în contradicţie cu o bobină propriu-zisă, unde câmpurile magnetice sunt concentrate în interior.</p>

<p>Pe măsură ce antena dipol radiază un câmp electric în spaţiu, va lua naştere un câmp magnetic variabil la unghiuri drepte. În acest fel, câmpul electric este susţinut mai departe în spatiu, iar unda electromagnetică se propagă cu viteza luminii (în vid). Acelaşi lucru este valabil şi pentru antena cadru, cu deosebirea că aceasta radiază iniţial un câmp magnetic şi nu electric. Rezultatul final este însă acelaşi: producerea controlată a unui câmp electromagnetic.</p>

<h2>Transmisia şi recepţia undelor electromagnetice</h2>

<p>Alimentată de o sursă de curent alternativ de frecvenţă înaltă, o antenă joacă rolul unui dispozitiv de transimisie. Tensiunea şi curentul alternativ sunt convertite în energie sub forma undelor electromagnetice. Antenele pot de asemenea să intercepteze undele electromagnetice şi să transforme energie lor în tensiunea şi curent alternativ. În acest mod de funcţionare, antena joacă rolul unui dispozitiv de recepţie:</p>

<img src="../poze/02024.png" alt="radioemiţători şi radioreceptori"/>

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