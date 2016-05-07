<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Tuburi electronice cu descărcare în gaze</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>2. Tuburi electronice cu descărcare în gaze</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Înainte de a studia însă Dispozitivele multijoncţiune, este indicat să luăm în considerare şi predecesorul tehnologic al acestora, şi anume, tuburile electronice cu descărcare în gaze.</p>

<p>Putem vedea histereza electrică pe viu în cazul fulgerelor. Acţiunea vântului puternic şi a ploii duce la acumularea de sarcini electrice imense între nori şi pământ şi chiar şi între nori. Dezechilibrul de sarcină electrică se manifestă sub formă de diferenţa de potenţial, sau tensiune electrice, iar când rezistenţa electrică a aerului nu mai poate face faţă acestor tensiuni înalte, vor apărea cantităţi mari şi de scurtă durată de curent între polii opuşi ai sarcinilor electrice, fenoment ce poartă numele de fulger.</p>

<p>Acumularea tensiunilor înalte sub acţiunea vântului şi a ploii este un proces aproximativ continuu, rata acumulărilor de sarcină crescând atunci când condiţiile atmosferice sunt prielnice. Cu toate acestea, fulgerele nu sunt un fenomen continuu: acestea există sub forma curenţilor mari şi de scurtă durată. De ce se întâmplă acest lucru? De ce nu vedem arcuri electrice de lungă durată dar de o intensitate mai redusă? Răspunsul se regăseşte în rezistenţa neliniară a aerului.</p>

<p>În condiţii normale, aerul posedă o rezistenţa electrică extrem de mare, atât de mare încât o considerăm de obicei ca fiind infinită iar conductivitatea prin aer aproape neglijabilă. Prezenţa apei şi a prafului scade rezistenţa acestuia, dar practic, acesta rămâne tot un dielectric. Atunci când se aplică o tensiune suficient de mare între două puncte separate de aer, proprietăţile electrice ale acestuia suferă unele modificări: electronii sunt „smulşi” de pe poziţiile lor normale şi de pe atomii lor respetivi, eliberarea lor constituind un curent. În această stare, aerul este considerat ca fiind ionizat şi poartă numele de plasmă şi nu de gaz, a patra stare a materiei, pe lângă cea solidă, lichidă şi gazoasă. Plasma este un conductor relativ bun de electricitate, rezistivitatea acestia fiind mult mai mică decât cea a aceleiaşi substanţe sub formă gazoasă.</p>

<p>Pe măsură ce curentul trece prin plasmă, va exista o energie disipată prin plasmă sub formă de căldură, la fel ca şi în cazul curentului printr-un rezistor solid. În cazul fulgerelor, temperaturiile sunt extrem de mari. Aceste temperaturi ridicate sunt la rândul lor suficiente pentru transformarea aerului din forma gazoază în plasmă sau pentru menţinerea plasmei în acea stare fără prezenţa tensiunilor înalte. Pe măsură ce diferenţa de potenţial dintre nori sau dintre nor şi pământ scade datorită echilibrării sarcinilor electrice, căldura degajată de fulger menţine drumul dintre cele două acumulări de sarcină în stare de plasmă, iar rezistenţa este prin urmare scăzută. Fulgerul rămâne sub formă de plasmă până în momentul în care tensiunea scade suficient de mult încât să nu mai poată susţine un curent necesar disipării unei călduri suficient de mari. În final, aerul se reîntoarece în starea sa gazoasă iar curentul încetează; din acest moment, va reîncepe acumularea sarcinilor.</p>

<p>Putem observa că în acest caz, aerul prezintă histereză. Atunci când nu conduce electricitate, tinde să rămână un dielectric până în momentul în care acumularea de sarcini (tensiunea) trece de un anumit prag critic. După acest punct, aerul tinde să rămână un conductor (sub formă de plasmă) până când tensiune scade sub un anumit prag critic minim. Acest histerezis, combinat cu acumularea de tensiune datorită efectelor electrostatice ale vântului şi ploii, explică în mare comportamentul de scurtă durată şi intensitate mare a fulgerelor.</p>

<p>Din punct de vedere electronic, avem de a face cu un oscilator dinte de fierăstrău. Oscilatoarele sunt circuite electronice ce produc o tensiune alternativă dintr-o sursă de tensiune continuă. Un oscilator dinte de fierăstrău funcţionează pe principiul încărcării unui condensator şi descărcării bruşte ale acestuia de fiecare dată când tensiune atince un prag critic. Printre cele mai simple astfel de oscilatoare se numără un oscilator compus din trei componente (neincluzând sursa de putere de c.c): un rezistor, un condensator şi o lampă cu neon.</p>

<p><img src="../poze/03189.png" alt="oscilator dinte de fierăstrău"/></p>

<p>Lămpile cu neon nu sunt altceva decât doi electrozi metalici într-un tub de sticlă etanş, separaţi de neonul din interior. La temperatura camerei, fără existenţa niciunei tensiuni aplicate pe cei doi electroci, lampa prezintă o rezistenţă infinită. Totuşi, dacă se depăşeşte o anumită tensiune de prag (această tensiune depinzând de presiunea gazului şi de geometria tubului), neonul se va ioniza (transforma în plasmă) iar rezistenţa sa va scădea brusc. În principiu, lampa cu neon prezintă aceleaşi caracteristici precum aerul în cazul fulgerelor.</p>

<p>Condensatorul din circuitul de mai sus se încarcă cu o rată exponenţială inversă, rată determinată de mărimea rezistorului. Atunci când tensiunea atunce pragul critic de tensiune al lămpii, lampa se va „aprinde” brusc şi va duce la descărcarea rapidă a condensatorului spre o tensiune mică. Odată descărcat, lampa se va „stinge” şi va permite reîncărcarea condensatorului. Rezultatul este o serie de „fulgere” de scurtă durată de la lampă, rata acestora fiind determinată de tensiunea bateriei, rezistenţa rezistorului, capacitatea condensatorului şi pragul critic de tensiune al lămpii.</p>

<p>Deşi lămpile cu descărcări în gaze, de genul celei de mai sus, sunt folosite de obicei ca şi surse de iluminat, proprietăţile lor de histereză pot fi folosite sub variante mult mai sofisticate, şi anume tuburile tiratron. Fiind de fapt o triodă, tiratronul poate fi pornit cu ajutorul unei tensiune de control mici aplicate între grilă şi catod, şi poate fi oprit prin reducerea tensiunii dintre anod şi catod.</p>

<p><img src="../poze/03018.png" alt="circuit simplu cu tiratron"/></p>

<p>În principiu, tiratroanele erau versiuni controlate ale lămpilor cu neon, proiectate special pentru comutarea curentului pe sarcină. Punctul din interiorul simbolului indică faptul că acest dispozitiv este umplut cu gaz, spre deosebire de celelalte tuburi cu vid. În circuitul de sus tiratronul permite trecerea curentului prin sarcină într-o singură direcţie (observaţi polaritatea rezistorului) atunci când este pornit de către o tensiune de control de c.c. dintre grilă şi catod. Sursa de putere a sarcinii este în c.a., indicând modul în care dispozitivul este oprit: din moment ce tensiunea de c.a. trece periodic printr-o condiţie de 0 V, curentul prin sarcina alimentată în c.a. va atinge periodic o valoarea de 0 A. Această pauză scurtă dintre semi-perioade permite tubului să se răcească şi să se reîntoarcă în starea „oprit”. Conducţia va reîncepe doar dacă va exista o tensiune suficient de mare aplicată de sursa de putere în c.a. şi dacă sursa de c.c. o va permite.</p>

<p>Tensiunea de sarcină într-un astfel de circuit va arăta aproximativ precum în figura alăturată.</p>

<p><img src="../poze/03190.png" alt="forma de undă a tensiunii de sarcină într-un circuit cu tiratron"/></p>

<p>Pe măsură ce tensiunea de c.a. creşte de la zero volţi spre primul vârf, tensiunea pe sarcină rămâne de zero volţi (curent de sarcină zero) până când este atinsă valoarea tensiunii de prag. În acel moment, tubul trece în starea „pornit” şi începe să conducă, tensiunea de sarcină fiind aceiaşi cu tensiunea sursei de alimentare în c.a. pentru restul perioadei. Chiar şi după ce forma de undă de c.a. scade sub valoarea tensiunii de prag, va mai exista tensiune pe sarcină, şi prin urmare şi curent. Acest lucru se datorează histerezei: dispozitivul rămâne în starea de conducţie (pornit) dincolo de punctul de pornire iniţial, continuând să conducă până în momentul în care tensiunea de alimentare scade spre aproximativ zero volţi. Datorită faptului că tiratroanele sunt dispozitive uni-direcţionale (precum diodele), căderea de tensiune pe sarcină în cazul semi-perioadei negative a semnalului de c.a. este zero. În circuitele practice, se vor folosi mai multe dispozitive aranjate sub forma unei punţi redresoare pentru a permite trecerea întregii forme de undă spre sarcină.</p>

<p>Tuburile tiratron au fost înlocuite complet de către componentele semiconductoare moderne, exceptând câteva aplicaţii speciale. Dispozitivele multijoncţiune moderne realizează însă acelaşi lucru precum dispozitivul prezentat mai sus: pornirea şi oprirea curenţilor prin intermediul histerezei.</p>

</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>