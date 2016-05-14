<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Analiza circuitelor defecte</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>7. Analiza circuitelor defecte</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Sarcina unui tehnician presupune adesea localizarea şi remedierea sau înlocuirea componentelor dintr-un circuit defect. Identificarea componentelor defecte presupune un efort considerabil, necesitând o foarte bună înţelegere a principiilor de bază, abilitatea de a formula ipoteze, de a judeca valoare acestora bazându-se pe probabilităti şi un simt al creactivitâţii în aplicarea unei soluţii pentru remedierea problemei. Deşi este posibilă trasarea unor metode ştiinţifice în jurul acestor abilităţi, majoritatea tehnicienilor cu experienţă văd această activitate ca pe o artă ce necesită ani de experienţă.</p>

<p>O abilitate esenţială este înţelegerea rapidă şi intuitivă a modului în care defectarea componentelor afectează comportamentului circuitului în ansamblul său, indiferent de configuraţia acestuia. Vom explora unele dintre aceste efecte atât în cazul circuitelor serie cât şi în cazul circuitelor paralel.</p>

<h2>Analiza defectelor într-un circuit serie simplu</h2>

#+CAPTION: circuit pur rezistiv serie
[[../poze/00098.png]]

<p>Să considerăm circuitul alăturat</p>

<div class="clear"></div>

<table class="floatleft">
	<tr>
        <th>R<sub>1</sub></th>
		<th>R<sub>2</sub></th>
		<th>R<sub>3</sub></th>
		<th>Total</th>
        <th>Unitate</th>
	</tr>
	<tr>
		<td>E</td>
		<td>2</td>
		<td>6</td>
		<td>1</td>
		<td>9</td>
		<td>V</td>
	</tr>
	<tr>
		<td>I</td>
		<td>20 m</td>
		<td>20 m</td>
		<td>20 m</td>
		<td>20 m</td>
		<td>A</td>
	</tr>
	<tr>
		<td>R</td>
		<td>100</td>
		<td>300</td>
		<td>50</td>
		<td>450</td>
		<td>Ω</td>
	</tr>
</table>

<p>Atunci când toate componentele acestui circuit funcţionează la parametrii normali, putem determina pe cale matematică toţi curenţi şi căderile de tensiune din circuit.</p>

<div class="clear"></div>

#+CAPTION: circuit pur rezistiv serie; şuntarea rezistorului
[[../poze/00099.png]]

<p>Să presupunem acum că rezistorul R<sub>2</sub> este scurt-circuitat; acest lucru înseamnă de fapt că, în locul rezistorului avem un simplu fir ce prezintă o rezistenţa aproape nulă. Practic, în circuitul alăturat, spunem că am realizat o <strong>şuntare</strong> a rezistorului R<sub>2</sub> iar firul utilizat poartă numele de conductor de şuntare, sau simplu, şunt.</p>

<div class="clear"></div>

<table class="floatleft">
	<tr>
        <th>R<sub>1</sub></th>
		<th>R<sub>2</sub></th>
		<th>R<sub>3</sub></th>
		<th>Total</th>
        <th>Unitate</th>
	</tr>
	<tr>
		<td>E</td>
		<td><b>6</b></td>
		<td><b>0</b></td>
		<td><b>3</b></td>
		<td>9</td>
		<td>V</td>
	</tr>
	<tr>
		<td>I</td>
		<td><b>60 m</b></td>
		<td><b>60 m</b></td>
		<td><b>60 m</b></td>
		<td><b>60 m</b></td>
		<td>A</td>
	</tr>
	<tr>
		<td>R</td>
		<td>100</td>
		<td><b>0</b></td>
		<td>50</td>
		<td><b>150</b></td>
		<td>Ω</td>
	</tr>
</table>

<p>Odată cu scurt-circuitarea rezistorului R<sub>2</sub>, fie prin şuntarea intenţionată a acestuia fie printr-un defect intern, valoarea rezistenţei totale din circuit va fi mai mică. Din moment ce tensiunea la bornele bateriei rămâne aceiaşi, o scăderea a rezistenţi totale din circuit conduce la creşterea curentului total.</p>

<div class="clear"></div>

<p>Odată cu creşterea curentului de la 20 mA la 60 mA, căderea de tensiune pe rezistorii R<sub>1</sub> şi R<sub>3</sub> (a căror rezistenţă nu s-a modificat) creşte şi ea, astfel încât căderea de tensiune totală pe cele două componente rămase să fie tot 9 V. Rezistorul R<sub>2</sub>, fiind şuntat de rezistenţa foarte mică a conductorului de şuntare, este practic eliminat din circuit, rezistenţa dintre cele două captele ale conductorului fiind practic zero. Din această cauză, căderea de tensiune pe rezistorul R<sub>2</sub> este de zero V, chiar dacă valoarea totală a curentului din circuit a crescut.</p>

#+CAPTION: circuit pur rezistiv serie; deschiderea circuitului
[[../poze/00100.png]]

<p>Pe de altă parte, dacă defectul suferit de rezistorul R<sub>2</sub> este de aşa natură încât circuitul va rămâne deschis în acel punct - rezistenţa între cele două captele libere ale conductorilor rămaşi creşte practic spre infinit - efectele asupra circuitului iniţial vor fi diferite, dar la fel de radicale.</p>

<div class="clear"></div>

<table class="floatleft">
	<tr>
        <th>R<sub>1</sub></th>
		<th>R<sub>2</sub></th>
		<th>R<sub>3</sub></th>
		<th>Total</th>
        <th>Unitate</th>
	</tr>
	<tr>
		<td>E</td>
		<td><b>0</b></td>
		<td><b>9</b></td>
		<td><b>0</b></td>
		<td>9</td>
		<td>V</td>
	</tr>
	<tr>
		<td>I</td>
		<td><b>0</b></td>
		<td><b>0</b></td>
		<td><b>0</b></td>
		<td><b>0</b></td>
		<td>A</td>
	</tr>
	<tr>
		<td>R</td>
		<td>100</td>
		<td>&#8734;</td>
		<td>50</td>
		<td>&#8734;</td>
		<td>Ω</td>
	</tr>
</table>

<p>Cu R<sub>2</sub> având o rezistenţă infinită, iar rezistenţa totală într-un circuit serie fiind dată de suma tuturor rezistenţelor individuale, rezistenţa totală creşte spre infinit iar curentul total la zero. În această situaţie, nu va mai exista nicio deplasare a electronilor prin circuit necesară producerii unor căderi de tensiune pe rezistorii R<sub>1</sub> sau R<sub>3</sub>. În schimb, întreaga cădere de tensiune dezvoltată de baterie se va regăsi pe terminalele rezistorului R<sub>2</sub>.</p>

<div class="clear"></div>

<h2>Analiza defectelor într-un circuit paralel simplu</h2>

#+CAPTION: circuit pur rezistiv paralel
[[../poze/00101.png]]

<p>Putem aplica aceleaşi metode şi în cazul unui circuit paralel.</p>

<div class="clear"></div>

<table class="floatleft">
	<tr>
        <th>R<sub>1</sub></th>
		<th>R<sub>2</sub></th>
		<th>R<sub>3</sub></th>
		<th>Total</th>
        <th>Unitate</th>
	</tr>
	<tr>
		<td>E</td>
		<td>9</td>
		<td>9</td>
		<td>9</td>
		<td>9</td>
		<td>V</td>
	</tr>
	<tr>
		<td>I</td>
		<td>100 m</td>
		<td>200 m</td>
		<td>50 m</td>
		<td>350 m</td>
		<td>A</td>
	</tr>
	<tr>
		<td>R</td>
		<td>90</td>
		<td>45</td>
		<td>180</td>
		<td>25,71</td>
		<td>Ω</td>
	</tr>
</table>

<p>Să observăm prima dată comportamentul unui circuit paralel „sănătos”.</p>

<div class="clear"></div>

#+CAPTION: circuit pur rezistiv paralel; deschiderea rezistenţei
[[../poze/00102.png]]

<h3>Înlăturarea rezistorului</h3>

<p>Să presupunem acum deschiderea rezistenţei R<sub>2</sub> în acest circuit paralel.</p>

<div class="clear"></div>

<table class="floatleft">
	<tr>
        <th>R<sub>1</sub></th>
		<th>R<sub>2</sub></th>
		<th>R<sub>3</sub></th>
		<th>Total</th>
        <th>Unitate</th>
	</tr>
	<tr>
		<td>E</td>
		<td>9</td>
		<td>9</td>
		<td>9</td>
		<td>9</td>
		<td>V</td>
	</tr>
	<tr>
		<td>I</td>
		<td>100 m</td>
		<td><b>0</b></td>
		<td>50 m</td>
		<td><b>150 m</b></td>
		<td>A</td>
	</tr>
	<tr>
		<td>R</td>
		<td>90</td>
		<td><b>&#8734;</b></td>
		<td>180</td>
		<td><b>60</b></td>
		<td>Ω</td>
	</tr>
</table>

<p>Efectele acestui defect le putem observa în tabelul alăturat.</p>

<div class="clear"></div>

<p>În cazul acestui circuit paralel, deschiderea unei ramuri afectează doar curentul prin acea ramură precum şi curentul total dincircuit. Căderea de tensiune, fiind egală pe toate componentele va rămâne neschimbată pe toţi rezistorii. Datorită tendinţei sursei de alimentare de menţinere constantă a tensiunii de alimentare, aceasta nu se va modifica, şi datorită faptului că este conectată în paralel cu toţi rezistorii, căderea de tensiune pe fiecare dintre ei, după apariţia defectului, rămâne egală cu 9 V. Din această cauză (rezistenţa constantă, căderea de tensiune constantă) curentul prin ceilalţi doi rezistori nu se modifică nici ei.</p>

#+CAPTION: circuit pur rezistiv paralel cu becuri
[[../poze/00357.png]]

<p>Acelaşi lucru îl putem observa şi într-un circuit casnic: toate becurile sunt conectate în paralel. La pornirea sau oprirea unui bec (o ramură din circuitul paralel se închide şi se deschide), funcţionarea celorlalte becuri nu este afectată; singurul lucru care se modifică este curentul prin acel bec (circuit de ramură) şi curentul total din circuit.</p>

<div class="clear"></div>

<h3>Şuntarea rezistorului</h3>

#+CAPTION: circuit pur rezistiv paralel; şuntarea rezistorului
[[../poze/00103.png]]

<p>Într-un caz ideal (surse de tensiune perfecte şi conductori cu rezistenţă zero), rezistorii scurt-circuitaţi dintr-un circuit paralel simplu nu vor avea niciun efect asupra comportamentului celorlalte ramuri din circuit. În realitate însă, efectul nu este acelaşi, după cum putem observa din exemplul alăturat.</p>

<div class="clear"></div>

<table class="floatleft">
	<tr>
        <th>R<sub>1</sub></th>
		<th>R<sub>2</sub></th>
		<th>R<sub>3</sub></th>
		<th>Total</th>
        <th>Unitate</th>
	</tr>
	<tr>
		<td>E</td>
		<td>9</td>
		<td>9</td>
		<td>9</td>
		<td>9</td>
		<td>V</td>
	</tr>
	<tr>
		<td>I</td>
		<td>100 m</td>
		<td><b>&#8734;</b></td>
		<td>50 m</td>
		<td><b>&#8734;</b></td>
		<td>A</td>
	</tr>
	<tr>
		<td>R</td>
		<td>90</td>
		<td><b>0</b></td>
		<td>180</td>
		<td><b>0</b></td>
		<td>Ω</td>
	</tr>
</table>

<div class="clear"></div>

<p>Un rezistor scurt-circuitat (rezistenţa de 0 Ω) va permite, teoretic, trecerea unui curent infinit de la oricare sursă finită de tensiune (I = E / 0). În acest caz, rezistenţa nulă a rezistorului R<sub>2</sub> descreşte rezistenţa totală a circuitului la zero Ω, ducând la creşterea valorii curentului spre infinit. Atâta timp cât tensiunea sursei rămâne constantă la 9 V, curenţii prin celelalte ramuri ale circuitului (I<sub>R1</sub> şi I<sub>R3</sub>) rămân neschimbaţi.</p>

<p>Ipoteza critică pe care ne-am asumat-o în această situaţie este că tensiunea de alimentare rămâne constantă pentru un curent infinit introdus în circuit. Acest lucru nu este însă deloc realist. Chiar dacă scurt-circuitul prezintă o rezistenţa mică (faţă de o rezistenţa egală cu zero), nicio sursă reală de tensiune nu poate genera un supra-curent extrem de mare în acelaşi timp cu menţinerea valorii tensiunii la un nivel constant.</p>

#+CAPTION: orice sursă de alimentare prezintă o rezistenţa internă
[[../poze/00104.png]]

<p>Acest lucru se datorează rezistenţei interne caracteristice tuturor surselor de putere electrice, rezistenţe datorate proprietătilor intrinseci ale materialelor din care sunt construite.</p>

<div class="clear"></div>

#+CAPTION: circuit pur rezistiv paralel; şuntarea rezistorului
[[../poze/00105.png]]

<p>Aceste rezistenţe interne, oricât de mici, transformă circuitul paralel de mai sus într-o combinaţie serie-paralel. De obicei, rezistenţele interne al surselor de putere sunt suficient de mici pentru a putea fi ignorate fără nicio problemă, dar odată cu apariţia curenţilor foarte mari datorită componentelor scurt-circuitate, efectelor lor nu mai pot fi neglijate. În acest caz, scurt-circuitarea rezistenţei R<sub>2</sub> va duce la situaţia în care întreaga cădere de tensiune se va regăsi pe rezistenţa internă a bateriei, căderile de tensiune pe R<sub>1</sub>, R<sub>2</sub> şi R<sub>3</sub> fiind aproape zero.</p>

<div class="clear"></div>

<table class="floatleft">
	<tr>
        <th>R<sub>1</sub></th>
		<th>R<sub>2</sub></th>
		<th>R<sub>3</sub></th>
		<th>Total</th>
        <th>Unitate</th>
	</tr>
	<tr>
		<td>E</td>
		<td>mică</td>
		<td>mică</td>
		<td>mică</td>
		<td>mică</td>
		<td>V</td>
	</tr>
	<tr>
		<td>I</td>
		<td>mic</td>
		<td>mare</td>
		<td>mic</td>
		<td>mare</td>
		<td>A</td>
	</tr>
	<tr>
		<td>R</td>
		<td>90</td>
		<td>0</td>
		<td>180</td>
		<td>0</td>
		<td>Ω</td>
	</tr>
</table>

<div class="clear"></div>

<p>Ca şi concluzie, scurt-circuitarea intenţionată a terminanilor surselor de alimentare, indiferent de tipul acestora, trebuie evitată cu orice preţ. Chiar şi în cazul în care curenţii mari dezvoltaţi (căldură, scântei, explozii) nu duc la rănirea niciunei persoane din apropiere, sursa de tensiune va suferi cu siguranţă unele defecte în cazul în care nu este proiectată a rezista la curenţi de scurt-circuit (majoritatea surselor de tensiune nu sunt).</p>

<p class="sumar">Sumar:</p>
<ul>
	<li>Pentru determinarea efectelor unui component defect asupra funcţionării circuitului, redesenaţi circuitul iniţial înlocuind rezistenţa iniţială a componentului cu rezistenţa echivalentă după defect şi reanalizaţi circuitul</li>
	<li>Un component scurt-circuitat este un component al cărei rezistenţă a scăzut dramatic (spre zero)</li>
	<li>Un component deschis este un component al cărei rezistenţa a crescut dramatic (spre infinit)</li>
	<li>Defectarea rezistorilor constă cel mai adesea în deschiderea acestora, nu în scurt-circuitarea lor, iar acest lucru nu se întâmplă decât dacă sunt supuşi unui stres fizic sau electric peste limitele normale de funcţionare</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
