<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Scurtă introducere a motoarelor electrice</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>1. Scurtă introducere a motoarelor electrice</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>De la curent continuu la curent alternativ</h2>

<p>Imediat după introducerea sistemului de distribuţie electrică în curent continuu de către Edison în SUA, a început tranziţie graduală spre sistemele de curent alternativ mult mai economice. Iluminatul funcţiona la fel de bine atât pe curent continuu cât şi pe curent alternativ. Însă transportul energiei electrice pe distanţe lungi era însoţit de pierderi mai mici dacă se realiza în curent alternativ. Totuşi, motoarele electrice erau o problemă la acea vreme. Iniţial, motoarele de c.a. erau construite precum cele de c.c. Existau nenumărate probleme datorită variaţiei câmpurilor magnetice, în comparaţie cu motoarele de c.c, unde câmpurile sunt statice.</p>

<h2>Nikola Tesla şi motorul de inducţie</h2>

<p>Charles P. Steinmetz a aduse contribuţii importante în acest domeniu prin investigarea pierderilor prin histereză în armăturile de fier. Nikola Tesla a proiectat un tip de motor cu totul nou, un motor a cărei turbine nu era acţionată de apă sau aburi, ci de către un câmp magnetic rotitor. Acest tip nou de motor, motorul de inducţie de c.a., cunoscut şi sub numele de motor asincron, este şi în prezent cel mai utilizat motor din industrie. Robusteţea şi simplitatea acestuia îi conferă o durată de viaţă lungă, fiabilitate înaltă şi costuri de întreţinere mici. Cu toate acestea, motoarele de c.a. cu perii, similare celor de c.c, sunt folosite pentru puteri mici pe lângă cele de inducţie. Peste 750 W însă, motoarele Tesla nu au practic „competiţie”.</p>

<p>Circuitele moderne cu semiconductori acţionează motoare de c.c. fără perii, cu forme de undă în c.a. generate de surse de putere de c.c. Acest motor de curent continuu fără perii, un motor de curent alternativ în realitate, înlocuieşte motorul clasic de c.c cu perii în multe aplicaţii. Iar motorul pas cu pas, o versiune digitală a motorului, este acţionat de forme de undă de c.a. dreptunghiulare, din nou, generate de circuite cu semiconductori.</p>

<h2>Transformarea energiei electrice</h2>

<p>La nivelul sistemului, un motor „consumă” energie electrică sub forma unei diferenţe de potenţial şi a unui curent, şi produce la ieşire lucru mecanic:</p>

<p><img src="../poze/02421.png" alt="transformarea energiei electrice în energie mecanică şi caldură"/></p>

<p>Desigur, motoarele electrice nu au o eficienţă de 100%. O parte din energia electrică se pierde sub formă de căldură, o altă formă de energie, datorită pierderilor ohmice (I<sup>2</sup> din înfăşurările motorului. Căldura este un efect nedorit a conversiei electric-mecanic. Ea trebuie îndepărtate din vecinătatea motorului şi poate afecta durata de viaţă a acestuia. Astfel, unul din scopuri este maximizarea eficienţei motoarelor pentru reducerea pierderilor sub formă de căldură. De asemenea, motoarele de c.a. mai au şi alte tipuri de pierderi ne-întâlnite la motoarele de c.c.: histereza şi curenţii turbionari.</p>


</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>