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
	if($browser_lang == "it" || "en" || "jp"){
		include_once "./po/".$cookie_lang.".php";
	}else{
		include_once "./po/en.php";
	}
}
	
?>
