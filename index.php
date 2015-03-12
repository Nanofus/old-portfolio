<!DOCTYPE html>
<html lang="fi">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width" />
		<title>Portfolio - Nanofus</title>
		<link rel="shortcut icon" href="images/icons/favicon.ico" />
		<link href='//fonts.googleapis.com/css?family=Roboto:400,700,100italic,300italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="css/lightbox.css" rel="stylesheet" />
		<script src='//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>
		<script src="js/portfolioScripts.js"></script>
		<script src="js/lightbox.min.js"></script>
		<?php
			function age() {
				//date in mm/dd/yyyy format; or it can be in other formats as well
				$birthDate = "10/28/1994";
				//explode the date to get month, day and year
				$birthDate = explode("/", $birthDate);
				//get age from date or birthdate
				$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
					? ((date("Y") - $birthDate[2]) - 1)
					: (date("Y") - $birthDate[2]));
				echo $age;
			}	
		?>
	</head>
	
	<body class="fi">
		<div class="background">
			<div class="transparentlayer"></div>
		</div>
	
		<header>
			<div class="flags">
				<div class="flag" id="fi" onclick="document.body.className='fi';closeAll();"></div>
				<div class="flag" id="en" onclick="document.body.className='en';closeAll();"></div>
			</div>
		</header>
			
		<main>
			<section>
				<h1>Ville Talonpoika – Portfolio</h1>
				<div class="content">
					<p class="date">Work in progress!</p>
				</div>
				<div id="socialbackg">
					<div id="socialbuttons">
						<div class="socialbutton" id="fb"><a title="Facebook" target="_blank" href="http://facebook.com/nanofus"></a></div>
						<div class="socialbutton" id="github"><a title="GitHub" target="_blank" href="http://github.com/nanofus"></a></div>
						<div class="socialbutton" id="twitter"><a title="Twitter" target="_blank" href="http://twitter.com/nanofus"></a></div>
						<div class="socialbutton" id="gplus"><a title="Google+" target="_blank" href="https://plus.google.com/+VilleTalonpoika"></a></div>
						<div class="socialbutton" id="linkedin"><a title="LinkedIn" target="_blank" href="https://www.linkedin.com/profile/view?id=323692990"></a></div>
						<div class="socialbutton" id="ludumdare"><a title="Ludum Dare" target="_blank" href="http://ludumdare.com/compo/author/nanofi/"></a></div>
						<div class="socialbutton" id="steam"><a title="Steam" target="_blank" href="https://steamcommunity.com/id/nanofus"></a></div>
						<div class="socialbutton" id="reddit"><a title="Reddit" target="_blank" href="http://www.reddit.com/user/Nanofus/"></a></div>
					</div>
				</div>
				
				<div class="content">
					<p lang="fi">Ensimmäisen vuoden tietojenkäsittelytieteen opiskelija ja harrastelijapelinkehittäjä Helsingistä.</p>
					<p lang="en">I'm a first-year computer science student and indie game developer from Helsinki.</p>
				</div>
				
				<div class="button noselect" id="button2" onclick="setHeight(button2,wrapper2,content2,tri2);">
					<div class="triwrapper"><div class="tri" id="tri2"></div></div><h2 lang="fi">Peliprojektit</h2><h2 lang="en">Game Projects</h2>
				</div>
				<div class="wrapper" id="wrapper2">
					<div class="content" id="content2">
						<div>
							<h3><a href="http://games.nanof.us/caelorumgratia/" target="_blank">Caelorum Gratia</a></h3>
							<p class="date">9–10/2014</p>
							<p lang="fi">Alunperin Ludum Dare -pelinä syntynyt, myöhemmin yliopiston pelikurssilla laajentunut prototyyppi kahden pelaajan kilpailullisesta planeetanvaltauksesta. Semifiksu tekoäly, tosi kummallinen visuaalinen ilme ja erilliset kosketusnäyttökontrollit Android-versiossa.</p>
							<p lang="en">Originally a Ludum Dare game, the prototype was later expanded during a university game course. It's a two-player competitive game of planetary conquest. It has a somewhat smart AI, a really strange visual style and dedicated touchscreen controls in the Android port.</p>
						</div>
						<hr>
						<div>
							<h3 lang="fi"><a href="http://nano.fi/rastas/verstas.html" target="_blank">Verstas</a></h3><h3 lang="en"><a href="http://nano.fi/rastas/verstas.html" target="_blank">Verstas ("The Workshop")</a></h3>
							<p class="date">6–12/2014</p>
							<p lang="fi">Ensimmäisen persoonan tutkiskelupeli, jossa pikku otus Dox eksyy mystiseen Verstaaseen.</p>
							<p lang="fi">Osa viidentoista kirjoittajan kokeellista multimediaprojektia, joka sisältää proosamuotoista tarinankerrontaa, musiikkia, kuvitusta sekä interaktiivisia osuuksia.</p>
							<p lang="en">A first person exploration game, in which a little creature known as Dox gets lost in the mysterious Workshop.</p>
							<p lang="en">A part of an experimental multimedia project by 15 authors that consists of storytelling in prose format, music, illustrations and interactive sequences.</p>
							<a href="images/images/verstas.png" data-lightbox="verstas" data-title=""><img src="images/images/verstas.jpg" alt="Verstas"></a>
						</div>
						<hr>
						<div>	
							<h3 lang="fi"><a href="http://ludumdare.com/compo/author/nanofi" target="_blank">Ludum Dare -pelit</a></h3><h3 lang="en"><a href="http://ludumdare.com/compo/author/nanofi" target="_blank">Ludum Dare games</a></h3>
							<p lang="fi">Vanhat Ludum Dare -pelini:</p>
							<p lang="fi">My Ludum Dare games from years past are available on the Ludum Dare website.</p>
							<ul>
								<li><a href="http://ludumdare.com/compo/ludum-dare-30/?action=preview&uid=6719" target="_blank">Connection Chase</a><p lang="en">(later evolved into Caelorum Gratia)</p><p lang="fi">(myöhemmin kehittyi Caelorum Gratiaksi)</p></li>
								<li><a href="http://ludumdare.com/compo/ludum-dare-25/?action=preview&uid=6719" target="_blank">Splonet</a></li>
								<li><a href="http://ludumdare.com/compo/ludum-dare-23/?action=preview&uid=6719" target="_blank">Casal Navity</a></li>
								<li><a href="http://ludumdare.com/compo/ludum-dare-22/?action=preview&uid=6719" target="_blank">Ego Sum</a><p lang="en">(download link no longer works, I'll fix it as soon as I find the .zip!)</p><p lang="fi">(latauslinkki ei toimi, korjaan heti kun löydän .zipin!)</p></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="button noselect" id="button1" onclick="setHeight(button1,wrapper1,content1,tri1);">
					<div class="triwrapper"><div class="tri" id="tri1"></div></div><h2 lang="fi">Ohjelmointiprojektit</h2><h2 lang="en">Programming Projects</h2>
				</div>
				<div class="wrapper" id="wrapper1">
					<div class="content" id="content1">
						<div>
							<h3><a href="https://github.com/Nanofus/DialogueSystem" target="_blank">DialogueSystem</a></h3>
							<p class="date">2/2014–</p>
							<p lang="fi">Kehitteillä oleva dialogisysteemi Unity3D:lle. Tukee RPG-henkisiä tekstilaatikoita ja visual novel -tyylisiä hahmokuvia. Lukee dialogit .txt-tiedostoista, ja osaa tulkita niissä olevia tageja tekstin värin/koon/rullausnopeuden muuttamiseksi.</p>
							<p lang="fi">Tulossa olevat ominaisuudet: käännös C#:aan, pelaajan valinnat (ja mahdollisesti satunnaisia tapahtumia jne.), parempi tuki erilaisille hahmokuville, tuki äänille ja ääninäyttelylle dialogitiedoston tagien avulla.</p>
							<p lang="en">A still work-in-progress dialogue system for Unity3D. Supports RPG-style dialogue boxes and visual novel -style character images. Reads dialogue files from .txt files, can also parse tags to make text change color/size/scrolling speed.</p>
							<p lang="en">Upcoming features: conversion to C#, player choices (and possibly random events etc.), better support for different kinds of character portraits, support for sound tags in .txt files so that voice acting and sound effects can be used.</p>
						</div>
					</div>
				</div>
				
				<div class="button noselect" id="button5" onclick="setHeight(button5,wrapper5,content5,tri5);">
					<div class="triwrapper"><div class="tri" id="tri5"></div></div><h2 lang="fi">Verkkosivustot</h2><h2 lang="en">Websites</h2>
				</div>
				<div class="wrapper" id="wrapper5">
					<div class="content" id="content5">
						<div>
							<h3 lang="fi">Henkilökohtainen portfolio</h3>
							<h3 lang="en">Personal portfolio</h3>
							<p class="date">1/2015</p>
							<p lang="fi">Tämä portfoliosivuni on itsessään osa portfoliota – se on HTML5-standardin mukainen, muotoilu on kirjoitettu <a href="http://sass-lang.com" target="_blank">SASS</a>:lla, ja toiminnallisuus perustuu suurilta osin jQueryyn ja tavalliseen JavaScriptiin.</p>
							<p lang="fi">Sivuston ulkoasu on saanut vahvoja vaikutteita Googlen <a href="http://www.google.com/design/spec/material-design/introduction.html" target="_blank">Material Design</a> -muotokielestä.</p>
							<p lang="en">This portfolio page is in itself a part of my portfolio - it's HTML5 compliant, the stylesheets are written in <a href="http://sass-lang.com" target="_blank">SASS</a>, and most functionality is based on jQuery and JavaScript.</p>
							<p lang="en">The design of this page is based on Google <a href="http://www.google.com/design/spec/material-design/introduction.html" target="_blank">Material Design</a>.</p>
						</div>
						<hr>
						<div>
							<h3>Kauriansalmen tili- ja isännöintitoimisto Tmi (<a href="http://kauriansalmi.net" target="_blank">kauriansalmi.net</a>)</h3>
							<p class="date">11/2014–</p>
							<p lang="fi">Toinen HTML5-standardin mukainen sivusto, jota ylläpidän. Asiakas on suomenniemeläinen pienyritys, joka palvelee lähiseudun asukkaita.</p>
							<p lang="en">Another HTML5 compliant website I maintain. The client is a small accounting firm.</p>
						</div>
						<hr>
						<div>
							<h3 lang="fi">Sukuseura Hujanen-Hujala (<a href="http://hujanen-hujala.fi" target="_blank">hujanen-hujala.fi</a>)</h3>
							<h3 lang="en">Family Society Hujanen-Hujala (<a href="http://hujanen-hujala.fi" target="_blank">hujanen-hujala.fi</a>)</h3>
							<p class="date">6/2013–</p>
							<p lang="fi">WordPress-sisällönhallintajärjestelmällä toteutettu sivusto Sukuseura Hujanen-Hujalalle.</p>
							<p lang="en">A website for the Hujanen-Hujala family society, made with WordPress.</p>
						</div>
						<hr>
						<div>
							<h3 lang="fi">Harrastesivusto Bio-Klaani (<a href="http://bioklaani.fi" target="_blank">bioklaani.fi</a>)</h3>
							<h3 lang="en">Hobby site Bio-Klaani (<a href="http://bioklaani.fi" target="_blank">bioklaani.fi</a>)</h3>
							<p class="date">6/2012–</p>
							<p lang="fi">Verkkoyhteisö, jossa vaikutan aktiivisesti teknisenä vastaavana. Tällä hetkellä sivuston muodostavat phpBB-keskustelualue sekä useampi WordPress-asennus.</p>
							<p lang="en">An online community where I actively work as an administrator. At the moment the site consists of a phpBB forum and multiple WordPress installations.</p>
						</div>
					</div>
				</div>
				
				<div class="button noselect" id="button3" onclick="setHeight(button3,wrapper3,content3,tri3);">
					<div class="triwrapper"><div class="tri" id="tri3"></div></div><h2 lang="fi">Taideprojektit</h2><h2 lang="en">Art Projects</h2>
				</div>
				<div class="wrapper" id="wrapper3">
					<div class="content" id="content3">
						<div>
							<h3><a href="http://klaanon.bioklaani.fi/" target="_blank">Klaanon</a></h3>
							<p class="date">8/2010–</p>
							<p lang="fi">Noin viidentoista kirjoittajan monivuotinen kaunokirjallinen projekti, jonka osa yllämainittu Verstas on. Klaanonin kirjoittaminen on ollut valtaosin tiimityöskentelyä, sillä tarinan lukuja kirjoitetaan usein ryhmissä muiden luettavaksi, ja tarinan pääjuoni on pitkälti yhteisen suunnittelun tulosta.</p>
							<p lang="en">A perennial multimedia work of fiction by about fifteen authors, a part of which the aforementioned The Workshop is. Klaanon is usually written in groups with other groups as the audience, and the main storyline is a product of joint planning.</p>
						</div>
					</div>
				</div>
				
				<div class="button noselect" id="button4" onclick="setHeight(button4,wrapper4,content4,tri4);">
					<div class="triwrapper"><div class="tri" id="tri4"></div></div><h2 lang="fi">CV</h2><h2 lang="en">CV</h2>
				</div>
				<div class="wrapper" id="wrapper4">
					<div class="content" id="content4">
						<p lang="fi">Latauslinkit tänne</p>
					</div>
				</div>
			</section>
		</main>
		<footer>
			<p>&copy; Ville Talonpoika <script>document.write(new Date().getFullYear());</script></p>
		</footer>
	</body>
	
</html>