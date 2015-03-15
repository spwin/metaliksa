<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div id="owl-demo" class="owl-carousel owl-theme">
<!-- Content 0 -->
	<div class="item" id="content_0">
<!---
	<video id="bgvid" autoplay>
		<source src="<?php echo Yii::app()->baseUrl; ?>/images/content_0/electric_bulb_hd_stock_video.mp4" type="video/mp4">
		<source src="polina.mp4" type="video/mp4">
	</video>

        <video muted="muted" preload="none" loop autoplay="autoplay" id="bgvid">
            <source type="video/webm" src="<?php echo Yii::app()->baseUrl; ?>/images/content_0/electric_bulb_hd_stock_video.webm">
            <source type="video/mp4" src="<?php echo Yii::app()->baseUrl; ?>/images/content_0/electric_bulb_hd_stock_video.mp4">
        </video>
--->
		<div class="header_0">
			<div class="wrapper">
				<a href="<?php echo Yii::app()->baseUrl; ?>" title="Metaliksa">
				<div class="logo_0">
					<span class="helper"></span>
					<?php echo CHtml::image('images/content_0/logo_0.png', 'Metaliksa'); ?>
				</div>
				</a>
				<div class="lang_switcher">
					<table>
						<tr>
							<td><a href="#">LT</a></td>
							<td><a href="#">EN</a></td>
							<td><a href="#">RU</a></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="main_title_bg">
			<div class="main_title_text"><?php echo CHtml::image('images/content_0/Griauname-atgyvenusius-ir-nusistovejusius-principus.png', 'Griauname atgyvenusius ir nusistovejusius principus'); ?></div>
		</div>
		<div class="down_button_0" onclick="jumpTo(1);">
			<?php echo CHtml::image('images/content_0/arrows_down_1.png', 'Continue'); ?>
		</div>
		<div class="footer_0">
			<div class="wrapper">
				<div class="partners_title"><?php echo Yii::t('metaliksa','Our partners:'); ?></div>
				<div id="slick_partners">
					<div><?php echo CHtml::image('images/content_0/sponsor_test.png', 'Sponsor'); ?></div>
					<div><?php echo CHtml::image('images/content_0/sponsor_test.png', 'Sponsor'); ?></div>
					<div><?php echo CHtml::image('images/content_0/sponsor_test.png', 'Sponsor'); ?></div>
					<div><?php echo CHtml::image('images/content_0/sponsor_test.png', 'Sponsor'); ?></div>
					<div><?php echo CHtml::image('images/content_0/sponsor_test.png', 'Sponsor'); ?></div>
					<div><?php echo CHtml::image('images/content_0/sponsor_test.png', 'Sponsor'); ?></div>
					<div><?php echo CHtml::image('images/content_0/sponsor_test.png', 'Sponsor'); ?></div>
				</div>
				<div class="footer_info">
					<div class="copyright">&copy; 2015 Metaliksa</div>
					<div class="phone"><?php echo Yii::t('metaliksa','Project manager: '); ?> <span>+370 658 55696</span></div>
				</div>
			</div>
		</div>
	</div>
	
<!-- Content 1 -->
  <div class="item" id="content_1">
		
		<div class="left_menu blur">
			<div class="left_menu_wrap">
				<div class="menu-lang">
					<ul>
						<li>LT</li>
						<li>EN</li>
						<li>RU</li>
					</ul>
				</div>
			</div>
			<div class="menu-line"></div>
			<div class="left_menu_wrap">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/menu_img/call-icon.png" alt="">
				<ul class="menu-list">
					<li>Projektų vadovas:</li>
					<li class="bold">+370 658 55696</li>
				</ul>
			</div>
			<div class="menu-line"></div>
			<div class="left_menu_wrap">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/menu_img/skype-icon.png" alt="">
				<ul class="menu-list">
					<li>Skype status:</li>
					<li class="bold">Online</li>
				</ul>
			</div>
			<div class="menu-line"></div>
			<div class="left_menu_wrap">
				<div class="left_menu_choice">
					<h1 onclick="jumpTo(0);">Pagrindinis</h1>
					<h1 onclick="jumpTo(1);" class="selected">Darbo metodika</h1>
					<p>Išsiskiriame kūrybiškumu ir lankstumu. Pateikiame patikimus, inovatyvius, bei kokybiškus techninius sprendimus.</p>
					<h1 onclick="jumpTo(2);">Darbo sritys</h1>
					<h1 onclick="jumpTo(3);">Mūsų darbai</h1>
					<h1 onclick="jumpTo(4);">Kontaktai</h1>
				</div>
			</div>
			<div class="left_menu_wrap">
			<div class="menu-bottom">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/menu_img/cc-metaliksa.png" alt="">
			</div>
			</div>
		</div>
		<div class="icon-container">
			<div class="icon-image-text">
				<img class="img-responsive-01" src="<?php echo Yii::app()->request->baseUrl; ?>/images/content_1/01-icon.png"  onmouseover="this.src='<?php echo Yii::app()->request->baseUrl; ?>/images/content_1/01-icon-hover.png';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl; ?>/images/content_1/01-icon.png';" alt="">
				<div class="icon-texts1 absolute"><span class="icon-number">01.</span><span class="icon-text icon-text-position1 bold">Įdėjų generavimas,<br>eskizavimas</span></div>
			</div>
			<div class="icon-image-text">
				<img class="img-responsive-02" src="<?php echo Yii::app()->request->baseUrl; ?>/images/content_1/02-icon.png" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl; ?>/images/content_1/02-icon-hover.png';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl; ?>/images/content_1/02-icon.png';"alt="">
				<div class="icon-texts2 absolute"><span class="icon-number">02.</span><span class="icon-text icon-text-position2 bold">3D CAD modeliavimas</span></div>
			</div>
			<div class="icon-image-text">
				<img class="img-responsive-03" src="<?php echo Yii::app()->request->baseUrl; ?>/images/content_1/03-icon.png" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl; ?>/images/content_1/03-icon-hover.png';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl; ?>/images/content_1/03-icon.png';"alt="">
				<div class="icon-texts3 absolute"><span class="icon-number">03.</span><span class="icon-text icon-text-position3 bold">2D brėžinių rengimas</span></div>
			</div>
			<div class="icon-image-text">
				<img class="img-responsive-04" src="<?php echo Yii::app()->request->baseUrl; ?>/images/content_1/04-icon.png" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl; ?>/images/content_1/04-icon-hover.png';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl; ?>/images/content_1/04-icon.png';"alt="">
				<div class="icon-texts4 absolute"><span class="icon-number">04.</span><span class="icon-text icon-text-position4 bold">Gamyba</span></div>
			</div>
		</div>
		<div class="bottom-right-text">
			<div class="bottom-number">01</div>
			<div class="bottom-text">Gavę techninę užduotį ir reikalingą informaciją iš kliento – ją analizuojame. Pasitelkdami vizualizaciją, pateikiame tik patį geriausią sprendimą aiškioje ir kiekvienam suprantamoje formoje. Gavę užtikrintą kliento pritarimą ir supratimą, pateikiame pilną techninį pasiūlymą.</div>
		</div>
	</div>
	
	
	
<!-- Content 2 -->
  <div class="item" id="content_2">
  
	<div class="left_menu blur">
			<div class="left_menu_wrap">
				<div class="menu-lang">
					<ul>
						<li>LT</li>
						<li>EN</li>
						<li>RU</li>
					</ul>
				</div>
			</div>
			<div class="menu-line"></div>
			<div class="left_menu_wrap">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/menu_img/call-icon-dark.png" alt="">
				<ul class="menu-list">
					<li>Projektų vadovas:</li>
					<li class="bold">+370 658 55696</li>
				</ul>
			</div>
			<div class="menu-line"></div>
			<div class="left_menu_wrap">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/menu_img/skype-icon-dark.png" alt="">
				<ul class="menu-list">
					<li>Skype status:</li>
					<li class="bold">Online</li>
				</ul>
			</div>
			<div class="menu-line"></div>
			<div class="left_menu_wrap">
				<div class="left_menu_choice">
					<h1 onclick="jumpTo(0);">Pagrindinis</h1>
					<h1 onclick="jumpTo(1);">Darbo metodika</h1>
					<h1 onclick="jumpTo(2);" class="selected">Darbo sritys</h1>
					<p>Vertiname kokybę, todėl specializuojamės tik į tai ką sugebame atlikti geriausiai. Esame inovatyvūs, todėl neįmanomų užduočių mums nėra.</p>
					<h1 onclick="jumpTo(3);">Mūsų darbai</h1>
					<h1 onclick="jumpTo(4);">Kontaktai</h1>
				</div>
			</div>
			<div class="left_menu_wrap">
			<div class="menu-bottom">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/menu_img/cc-metaliksa.png" alt="">
			</div>
			</div>
		</div>
		<div class="up-content">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/content_2/JAH_Pan.png">
		</div>
		
		<div class="images-wrapper">
			<div class="images-line1">
				<div class="image-div image1"><table><tr><td id="first-image">Nestandartinių pramonės įrengimų projektavimas </td></tr></table></div>
				<div class="image-div image2"><table><tr><td >Gamybos, surinkimo, pakavimo automatizavimas </td></tr></table></div>
				<div class="image-div image3"><table><tr><td>Inžinierių – konstruktorių nuoma</td></tr></table></div>
			</div>
			
			<div class="images-line2">
				<div class="image-div1 image4"><table><tr><td>Inovacijų diegimas</td></tr></table></div>
				<div class="image-div1 image5"><table><tr><td>Pramoninių robotų diegimas, programavimas, priedai</td></tr></table></div>
				<div class="image-div1 image6"><table><tr><td>Kompiuterinis inžinerinis modeliavimas (3D CAD)</td></tr></table></div>
				<div class="image-div1 image7"><table><tr><td>Naujų gaminių projektavimas, eskizavimas</td></tr></table></div>
			
			</div>
		</div>
  
  
  

  
	</div>

<!-- Content 3 -->
<div class="item" id="content_3">
    <div class="left_menu blur">
			<div class="left_menu_wrap">
				<div class="menu-lang">
					<ul>
						<li>LT</li>
						<li>EN</li>
						<li>RU</li>
					</ul>
				</div>
			</div>
			<div class="menu-line"></div>
			<div class="left_menu_wrap">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/menu_img/call-icon.png" alt="">
				<ul class="menu-list">
					<li>Projektų vadovas:</li>
					<li class="bold">+370 658 55696</li>
				</ul>
			</div>
			<div class="menu-line"></div>
			<div class="left_menu_wrap">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/menu_img/skype-icon.png" alt="">
				<ul class="menu-list">
					<li>Skype status:</li>
					<li class="bold">Online</li>
				</ul>
			</div>
			<div class="menu-line"></div>
			<div class="left_menu_wrap">
				<div class="left_menu_choice">
					<h1 onclick="jumpTo(0);">Pagrindinis</h1>
					<h1 onclick="jumpTo(1);">Darbo metodika</h1>
					<h1 onclick="jumpTo(2);">Darbo sritys</h1>
					<h1 onclick="jumpTo(3);" class="selected">Mūsų darbai</h1>
					<p>Didžiuojamės visais savo darbais. Čia rasite mūsų darbus, kuriais galime pasidalinti su Jumis (konfidencialumas viena iš didžiausių mūsų vertybių).</p>
					<h1 onclick="jumpTo(4);">Kontaktai</h1>
				</div>
			</div>
			<div class="left_menu_wrap">
			<div class="menu-bottom">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/menu_img/cc-metaliksa.png" alt="">
			</div>
			</div>
		</div>
	Darbai

	
	
	
	
	
	
</div>






<!-- Content 4 -->
<div class="item" id="content_4">
<div class="left_menu blur" id="kontaktai">
			<div class="left_menu_wrap">
				<div class="menu-lang">
					<ul>
						<li>LT</li>
						<li>EN</li>
						<li>RU</li>
					</ul>
				</div>
			</div>
			<div class="menu-line"></div>
			<div class="left_menu_wrap">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/menu_img/call-icon.png" alt="">
				<ul class="menu-list">
					<li>Projektų vadovas:</li>
					<li class="bold">+370 658 55696</li>
				</ul>
			</div>
			<div class="menu-line"></div>
			<div class="left_menu_wrap">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/menu_img/skype-icon.png" alt="">
				<ul class="menu-list">
					<li>Skype status:</li>
					<li class="bold">Online</li>
				</ul>
			</div>
			<div class="menu-line"></div>
			<div class="left_menu_wrap">
				<div class="left_menu_choice">
					<h1 onclick="jumpTo(0);">Pagrindinis</h1>
					<h1 onclick="jumpTo(1);">Darbo metodika</h1>
					<h1 onclick="jumpTo(2);">Darbo sritys</h1>
					<h1 onclick="jumpTo(3);">Mūsų darbai</h1>
					<h1 onclick="jumpTo(4);" class="selected">Kontaktai</h1>
				</div>
			</div>
			<div class="left_menu_wrap">
			<div class="menu-bottom">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/menu_img/cc-metaliksa.png" alt="">
			</div>
			</div>
		</div>
		<div class="content-wrap">
		<div class="contacts-info">
			<div class="contact"><span class="bold">Direktorius</span><img src="images/content_4/dovydass.png"><span class="bold block">Karolis Senkus</span><span class="block">Mob. Tel.: +370 636 93884</span><span class="block">El. Paštas: karolis@metaliksa.lt</span></div>
			<div class="contact"><span class="bold">Projektų vadovas</span><img src="images/content_4/karolis.png"><span class="bold block">Dovydas Vėta</span><span class="block">Mob. Tel.: +370 658 55696</span><span class="block">El. Paštas: dovydas@metaliksa.lt</span></div>
			<div class="contact"><span class="bold">Pardavimų vadovas</span><img src="images/content_4/tautvydas.png"><span class="bold block">Tautvydas Stankus</span><span class="block">Mob. Tel.: +370 604 15117</span><span class="block">El. Paštas: tautvydas@metaliksa.lt</span></div>
		</div>
		<div class="map-form">
		<script src="https://maps.googleapis.com/maps/api/js"></script>
			<div class="map">
				<div id="map-canvas"></div>
				<div class="map-info">
					<h1>UAB "Metaliksa"</h1>
					<p>Savanorių pr. 219, Vilnius, Lietuva</p>
					<p>Įmonės kodas: 303265409</p>
					<p>PVM kodas: LT100009005215</p>
					<p>Sąsk nr: LT95 7300 0101 3870 6697</p>
					<p>AB "Swedbank"</p>
				</div>
			</div>
			<div class="form-wrap">
				<div class="form">
					<h1>Parašykite mums</h1>
					<form>
						<input type="text" placeholder="Vardas">
						<input type="mail" placeholder="El. paštas">
						<input type="text" placeholder="Tema" class="mb20">
						<label for="textarea">Žinutė</label>
						<textarea id="textarea"></textarea>
						<div class="send-button">Siųsti žinutę</div>
					</form>
				</div>
			</div>
		
		</div>
		
		</div>
</div>
<script>

</script>

</div>












