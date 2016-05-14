<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>De ce L/R şi nu LR</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>4. De ce L/R şi nu LR</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">
<p>Pentru cei care studiază teoria circuitelor electrice pentru prima dată, este destul de greu de înţeles motivul pentru care calculul constantei de timp pentru un circuit inductiv este diferit faţă de circuitul capacitiv. Pentru un circuit rezistor-condensator (RC), constanta de timp (în secunde) se calculează ca produs dintre rezistenţă în ohmi şi capacitatea în Farad: τ=RC. Totuşi, pentru un circuit rezistor-bobină (L/R), constanta de timp se calculează ca raport dintre inductanţa în Henry şi rezistenţă în ohmi: τ=L/R.</p>

<p>Această diferenţă a modului de calcul are implicaţii profunde asupra analizei <i>calitative</i> a răspunsului tranzitoriu al circuitului. Circuitele RC au un răspuns mai rapid pentru o valoare mică a rezistenţei şi un răspuns mai lent pentru o valoare mare a rezistenţei; circuitele L/R sunt exact opusul, răspund mai rapid cu o rezistenţă mai mare şi mai lent pentru una mai mică. Circuitele RC în general sunt destul de intuitive, dar cele inductive sunt mai greu de înţeles.</p>

<p>Cheia care stă la baza înţelegerii circuitelor tranzitorii este o înşuşire temeinică a conceptului <i>transferului de energie </i> şi natura sa electrică. Atât condensatoarele cât şi bobinele pot stoca energie, condensatorul sub formă de câmp electric iar bobina sub formă de câmp magnetic. Energie electrostatică a condensatoruli tinde să menţină constantă valoarea tensiunii de la terminalele sale. Energia electromagnetică a bobinei tinde să menţină constantă valoarea curentului prin ea.</p>

<h3>Descărcarea condensatorului şi a bobinei pe un rezistor</h3>
<p>Să luăm în considerare ce se întâmplă în cazul fiecărui component reactiv în momentul <i>descărcării</i>, şi anume, atunci când energia stocată în dispozitiv (bobină sau condensator) este eliberată pe un rezistor şi disipată de acesta sub formă de căldură:</p>

#+CAPTION: descărcarea condensatorului şi a bobinei
[[../poze/00365.png]]

<p>În ambele cazuri, căldura disipată pe/de rezistor constituie energie ce <i>părăseşte</i> circuitul, în consecinţă, componentul reactiv (condensatorul sau bobina) îşi pierde energia stocată în timp; rezultatul este fie o descreştere a tensiunii condensatorului sau o descreştere a curentului bobinei, lucru reprezentat pe grafic. Cu cât rezistorul disipă mai multă putere, cu atât mai rapidă este descărcarea dispozitivelor, deoarece puterea, prin definiţie, este rata transferului de energie cu timpul.</p>

<p>Prin urmare, constanta de timp a unui circuit tranzitoriu depinde de rezistenţa circuitului. Desigur, aceasta depinde şi de capacitatea de stocare a componentului reactiv, dar ne vom concentra momentan doar pe efectul rezistorului asupra circuitului. Constanta de timp a circuitului este mai mică (o rată de descărcare mai rapidă) dacă valoarea rezistorului este în aşa fel încât maximizează disiparea puterii (rata transformării energiei în căldură) din circuit. Pentru un circuit capacitiv, unde energia stocată este sub formă de tensiune, acest lucru înseamnă că rezistorul trebuie să aibe o valoare mică a rezistenţei pentru maximizarea curentului, oricare ar fi tensiunea existenţă. Pentru un circuit inductiv, unde energia stocată este sub formă de curent, acest lucru înseamnă că rezistorul trebuie să aibă o valoare mare a rezistenţei pentru maximizarea căderii de tensiune, oricare ar fi valoarea curentului (luând în considerare faptul că produsul dintre tensiune şi curent este egal cu puterea).</p>

<h3>Analogie mecanică pentru modul de stocare al energiei din componentele reactive</h3>
<p>Ca şi o analogie, putem recurge la o exemplificare mecanică a stocării energiei sub formă capacitivă şi inductivă. Condensatoarele, stocând energie electrostatic, sunt rezervoare de <i>energie potenţială</i>. Bobinele, stocând energie electromagnetic (electro<i>dinamic</i>), sunt rezervoare de <i>energie cinetică</i>. Mecanic, energia potenţială poate fi reprezentată cu ajutorul unei mase suspendate, iar energia cinetică cu ajutorul unei mase aflate în mişcare. </p>

<h4>Analogia mecanică a energiei potenţiale pentru condensator</h4>
<p>Să considerăm următoarea ilustraţie pentru condensator, considerând energia stocată în acest ca fiind energie potenţială:</p>

#+CAPTION: stocarea şi eliberarea energiei potenţiale - analogie pentru modul de stocare al energiei pentru condensator
[[../poze/00366.png]]

<p>Căruciorul, atunci când se afla în vârful pantei, posedă energie potenţială datorată influenţei gravitaţiei şi poziţiei sale din vârf. Dacă luăm în considerare sistemul de frânare al căruciorului, acesta este analog rezistenţei circuitului/sistemului, iar căruciorul este în acest caz condensatorul; întrebarea este, ce valoare (mică sau mare) a rezistenţai ajută la o eliberare mai rapidă (parcurgerea mai rapidă a pantei) a energiei potenţiale? Desigur, o rezistenţă minimă (lipsa frânelor) ar duce la parcurgerea cea mai rapidă a pantei de către cărucior! Fară ca sistemul de frânare să acţioneze, căruciorul se va deplasa liber pe pantă în jos, folosind („consumând”) energie potenţială pe măsură ce pierde din înălţime. Atunci când sistemul de frânare acţionează la capacitate maximă, căruciorul nu se va deplasa la vale (sau o va face foarte încet), iar energia sa potenţială se va păstra pentru o perioadă mai îndelungată de timp. Acelaşi lucru se întâmplă şi în cazul circutului capacitiv, ce se descarcă rapid dacă rezistenţa sa este mică, şi se descarcă lent dacă rezistenţa este mare.</p>

<h4>Analogia mecanică a energiei cinetice pentru bobină</h4>
<p>Să considerăm acum o analigie mecanică pentru bobină, reprezentând energie stocată de acesta sub formă cinetică:</p>

#+CAPTION: stocarea şi eliberarea energiei cinetice - analogie pentru modul de stocare al energiei pentru bobină
[[../poze/00367.png]]

<p>De această dată, căruciorul se află la nivelul solului şi este deja în mişcare. Energia sa în acest caz este energie cinetică (mişcare), nu potenţială (înălţime). Din nou, considerând sistemul de frânare al căruciorului ca fiind analog rezistenţei din circuit, atunci putem considera căruciorul ca fiind bobina; întrebarea în acest caz este este asemănătoare celei din cazul condensatorului, şi anume, ce valoare a rezistenţei facilitează eliberarea rapidă a energiei cinetice stocate? Desigur, o rezistenţă maximă (sistemul de frânarea acţionat la maxim) va încetini căruciorul cel mai repede (într-o perioadă de timp cât mai scurta). Cu sistemul de frânare acţionat la maxim, căruciorul se va opri foarte repede, folosind („consumând”) energia cinetică pe măsură ce încetineşte. Fără acţiunea frânelor, căruciorul se deplasează liber, pentru o perioadă de timp infinita (neglijând frecarea şi rezistenţa aerodinamică în acest caz, de dragul exemplificării), iar energia sa cinetică va fi menţinută (stocată) pentru o perioadă lungă de timp. Analog, un circuit inductiv se descarcă rapid dacă rezistenţa pe care se descarcă este mare şi invers, se descarcă lent dacă rezistenţa este mică.</p>


</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
