<?php header("Content-type: application/xhtml+xml"); ?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/files/mathml_svg_header.html")?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" > 
  <head>
	<link rel="stylesheet" href="/files/template.css" type="text/css" />
    <title>Străpungerea dielectricului</title>
  </head>
<body>
  <div id="meniu">
	<?php include ($_SERVER['DOCUMENT_ROOT']."/files/meniu.html")?>
  </div>
  <div id="header">
	<h1>7. Străpungerea dielectricului</h1>
  </div>
  <div id="breadcrumbs">
	<?php include ("breadcrumbs.html")?>
  </div>

<div id="meniu2"><?php include ("meniu2.html")?></div>
  
<div id="contents">

<h2>Definiţia străpungerii dielectrice</h2>

<p>Electronii din interiorul atomilor materialelor dielectrice nu se pot deplasa la fel de uşor precum în cazul materialelor dielectrice. Totuşi, nici materialele dielectrice nu pot rezista unor tensiuni infinit de mari. <strong>Atunci când tensiunea aplicată este suficient de mare, dielectricul va ceda până la urmă „presiunii” electrice iar deplasarea electronilor va avea eventual loc prin material</strong>. Spunem în acest caz că a avut loc o străpungere a dielectricului. Faţă de conductori, unde curentul este direct proporţional cu tensiunea aplicată, atunci când valoarea rezistenţei este fixă, curentul printr-un dielectric este neliniar: pentru tensiuni aflate sub un anumit prag, nu va exista practic nici deplasare de electroni, dar, dacă tensiunea depăşeşte acest prag, curentul creşte extrem de rapid.</p>

<p>După străpungere, în funcţie de material, acesta poate să nu-şi mai recapete funcţia de dielectric (izolator), datorită modificării structurii sale moleculare. De obicei, există un „punct critic” ce desemnează locul prin care a avut loc deplasarea electronilor în momentul străpungerii.</p>

<h2>Rigiditatea dielectrică</h2>

<p>Grosimea materialului joacă un rol important în determinarea tensiunii sale de străpungere, tensiune cunoscută şi sub numele de rigiditate dielectrică. Alăturat este prezentat un tabel cu cele mai uzuale materiale folosite pe post de dielectric în cadrul circuitelor şi dispozitivelor electrice. Rigiditatea dielectrică este exprimată în MV / m (10<sup>6</sup>V / m).</p>

<table>
<tr>
  <th>Material</th>
  <th>Rigiditatea dielectrică (MV / m)</th>
</tr>
<tr>
  <td>Vid</td>
  <td>0,08</td>
</tr>
<tr>
  <td>Aer</td>
  <td>0,08 - 0,3</td>
</tr>
<tr>
  <td>Porţelan</td>
  <td>0,16 - 0,8</td>
</tr>
<tr>
  <td>Parafină</td>
  <td>0,8 - 1,2</td>
</tr>
<tr>
  <td>Ulei de transformator</td>
  <td>1,6</td>
</tr>
<tr>
  <td>Bachelită</td>
  <td>1,2 - 2,2</td>
</tr>
<tr>
  <td>Cauciuc</td>
  <td>1,8 - 2,8</td>
</tr>
<tr>
  <td>Şelac</td>
  <td>3,6</td>
</tr>
<tr>
  <td>Hârtie</td>
  <td>5</td>
</tr>
<tr>
  <td>Teflon</td>
  <td>6</td>
</tr>
<tr>
  <td>Sticlă</td>
  <td>8 - 12</td>
</tr>
<tr>
  <td>Mică</td>
  <td>20</td>
</tr>
</table>

<p class="sumar">Sumar:</p>
<ul>
	<li><strong>Tensiunea de străpungere</strong> sau <strong>rigiditatea dielectricului</strong> este tensiunea la care un dielectric permite trecerea unui curent, acesta comportându-se precum un conductor</li>
</ul>
</div>
<div id="footer">
		<?php include ($_SERVER['DOCUMENT_ROOT']."/files/google_script.js")?>
</div>
</body>
</html>
