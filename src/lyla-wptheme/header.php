<?php 
/*
 * ChiaraDeLiberato (Wordpress Theme)
 *   Copyright (C) 2012  Chiara De Liberato
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *  
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *  
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 * 
 *	WebSite: http://www.chiaradeliberato.it/
 * 	Source Code: http://source.chiaradeliberato.it/ 
 * 
*/
?>
<!DOCTYPE html> 
<html dir="ltr" lang="<?php echo $lang0; ?>"> 
<head> 
	<meta charset="<?php echo $lang2; ?>" />
	<title><?php wp_title(''); ?> <?php if(wp_title(' ', false)) { echo '&laquo;'; } ?> <?php bloginfo('name'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<meta name="generator" content="Geany IDE" />
	
	<meta name="author" content="Patryk Rzucidlo" />
	<meta name="author-mail" content="ptkdev[at]gmail[dot]com" />
	<meta name="author-msn" content="ptkdev[at]gmail[dot]com" />
	<meta name="author-skype" content="ptkdev" />
	<meta name="author-twitter" content="@PTKDev" />
	<meta name="author-irc" content="chat.freenode.net #ptkdev" />
	<meta name="author-gadu_gadu" content="2825253" />
	<meta name="author-phone_wind" content="+39 3281759093" />
	
	<meta name="copyright" content="GNU Affero General Public License" />
	<meta name="source-code" content="https://source.<?php echo $_SERVER["HTTP_HOST"]; ?>/" />
	
	<meta name="distribution" content="global" />
	<meta name="robots" content="index,follow" />
	<meta name="revisit-after" content="3 days" />
	<meta name="rating" content="general" />
	<meta name="language" content="<?php echo $lang1; ?>" />
	
	<link rel="alternate" type="application/rss+xml" title="<?php echo $lang3; ?> - <?php echo $lang4; ?>" href="http://feeds.feedburner.com/chiaradeliberato" />
	<link rel="shortcut icon" href="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/favicon.ico" />
	<link rel="icon" href="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/favicon.png" type="image/png" />
	<link rel="icon" href="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/favicon.ico" type="image/ico" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/desktop/layout.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/desktop/header.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/desktop/body.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/desktop/footer.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/desktop/link.css" />
	
	<script src="<?php bloginfo('template_url'); ?>/plugin/lightbox/jquery-1.7.2.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/plugin/lightbox/lightbox.js"></script>
	<link href="<?php bloginfo('template_url'); ?>/plugin/lightbox/lightbox.css" rel="stylesheet" />
	<!--[if lt IE 7.]>
	<script defer type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/pngfix.js"></script>
	<![endif]-->
</head>

<body>
	
<div id="container">
	<div id="header"></div>
		<div id="header_content">
			<a href="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/"><img id="logo" src="<?php bloginfo('template_url'); ?>/img/desktop/logo.png" /></a>
			<?php if($lang1 == "it"){ ?>
				<a href="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/?lang=en"><div class="flags_en_enable"></div></a>
				<a href="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/?lang=it"><div class="flags_it_disable"></div></a>
			<?php }else{ ?>
				<a href="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/?lang=en"><div class="flags_en_disable"></div></a>
				<a href="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/?lang=it"><div class="flags_it_enable"></div></a>
			<?php } ?>
			<div class="clear"></div>
			
			<div id="social">
				<a target="_blank" href="https://www.facebook.com/chiara.deliberato"><img class="space-icon-first" src="<?php bloginfo('template_url'); ?>/img/desktop/icon/facebook-icon.png" /></a>
				<a target="_blank" href="https://twitter.com/chiara_lyla"><img class="space-icon" src="<?php bloginfo('template_url'); ?>/img/desktop/icon/twitter-icon.png" /></a>
				<a target="_blank" href="https://plus.google.com/115347192402186810903/posts"><img class="space-icon" src="<?php bloginfo('template_url'); ?>/img/desktop/icon/gplus-icon.png" /></a>
				<a target="_blank" href="http://it.linkedin.com/in/chiaradeliberato"><img class="space-icon" src="<?php bloginfo('template_url'); ?>/img/desktop/icon/linkedin-icon.png" /></a>
				<a target="_blank" href="skype:hey_lyla84?call"><img class="space-icon" src="<?php bloginfo('template_url'); ?>/img/desktop/icon/skype-icon.png" /></a>
				<a target="_blank" href="https://github.com/Chiara-De-Liberato"><img class="space-icon" src="<?php bloginfo('template_url'); ?>/img/desktop/icon/github-icon.png" /></a>
				<a target="_blank" href="http://feeds.feedburner.com/chiaradeliberato"><img class="space-icon" src="<?php bloginfo('template_url'); ?>/img/desktop/icon/rss-icon.png" /></a>
			</div>
			
			<?php
			if($_SERVER['REQUEST_URI'] == $url1){
				$menu1 = "enable";
				$menu2 = "disable";
				$menu3 = "disable";
				$menu4 = "disable";
			}else if($_SERVER['REQUEST_URI'] == $url2){
				$menu1 = "disable";
				$menu2 = "enable";
				$menu3 = "disable";
				$menu4 = "disable";
			}else if($_SERVER['REQUEST_URI'] == $url3){
				$menu1 = "disable";
				$menu2 = "disable";
				$menu3 = "enable";
				$menu4 = "disable";
			}else if($_SERVER['REQUEST_URI'] == $url4){
				$menu1 = "disable";
				$menu2 = "disable";
				$menu3 = "disable";
				$menu4 = "enable";
			}else{
				$menu1 = "disable";
				$menu2 = "disable";
				$menu3 = "disable";
				$menu4 = "disable";
			}
			
			?>
			
			<div id="menu">
				<a href="http://<?php echo $_SERVER["HTTP_HOST"]; echo $url4; ?>"><div class="button_<?php echo $menu4; ?>"><div class="space-top"><?php echo $url4txt; ?></div></div></a>		
				<a href="http://blog.chiaradeliberato.it/"><div class="button_<?php echo $menu3; ?>"><div class="space-top"><?php echo $url3txt; ?></div></div></a>
				<a href="http://<?php echo $_SERVER["HTTP_HOST"]; echo $url2; ?>"><div class="button_<?php echo $menu2; ?>"><div class="space-top"><?php echo $url2txt; ?></div></div></a>
				<a href="http://<?php echo $_SERVER["HTTP_HOST"]; echo $url1; ?>"><div class="button_<?php echo $menu1; ?>"><div class="space-top"><?php echo $url1txt; ?></div></div></a>	
			</div>
			<div class="clear"></div>
		</div>
<div class="clear"></div>
