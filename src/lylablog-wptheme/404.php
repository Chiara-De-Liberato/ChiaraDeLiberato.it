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

	if(empty($_GET['page']))
		$page = "";
	else
		$page = $_GET['page'];

	$dir = "./";
	include_once "sidebar-mobile_detect.php"; 
	include_once "sidebar-po_detect.php"; 
	$detect = new Mobile_Detect();
	$mobi = $detect->isMobile();
	if(!$mobi){
		include_once "header.php"; 
		include_once "404_desktop.php"; 
		include_once "footer.php"; 
	}else{
		include_once "header-mobile.php"; 
		include_once "404_mobile.php"; 
		include_once "footer-mobile.php";
	}
?>
