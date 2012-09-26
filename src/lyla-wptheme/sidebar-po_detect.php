<?php
$browser_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

$cookie_lang = $_COOKIE['chiaradeliberato_lang'];

if(empty($cookie_lang)){
	if($browser_lang == "it" || "en" || "jp"){
		setcookie("chiaradeliberato_lang", $browser_lang, time()+604800);
		include_once "./po/".$browser_lang.".php";
	}else{
	include_once "./po/en.php";
	}
}else{
	include_once "./po/".$cookie_lang.".php";
}
	
?>
