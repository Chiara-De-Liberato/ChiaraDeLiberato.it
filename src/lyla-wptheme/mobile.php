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

<div id="content">
	
	<?php 
	if(is_home() && $lang1 == "en"){
		$pageid = "7";
		$page = get_page($pageid);
		$title = $page->post_title;
		$content = $page->post_content;
		echo "<div class='post-title'><a href='http://".$_SERVER['HTTP_HOST']."/'>$title</a></div>$content";
	}else if(is_home() && $lang1 == "it"){
		$pageid = "2";
		$page = get_page($pageid);
		$title = $page->post_title;
		$content = $page->post_content;
		echo "<div class='post-title'><a href='http://".$_SERVER['HTTP_HOST']."/'>$title</a></div>$content";
	}else if(is_page(22) || is_page(15)){
		if($lang1 == "en")
			$pageid = "22";
		else
			$pageid = "15";
		$page = get_page($pageid);
		$title = $page->post_title;
		$content = $page->post_content;
		echo "<div class='post-title'><a href='http://".$_SERVER['HTTP_HOST']."/'>$title</a></div>$content";
	}else if(is_page(20) || is_page(11)){
		if($lang1 == "en")
			$pageid = "20";
		else
			$pageid = "11";
		$page = get_page($pageid);
		$title = $page->post_title;
		$content = $page->post_content;
		echo "<div class='post-title'><a href='http://".$_SERVER['HTTP_HOST']."/'>$title</a></div>$content";
	}else if(is_page(21) || is_page(13)){
		if($lang1 == "en")
			$pageid = "21";
		else
			$pageid = "13";
		$page = get_page($pageid);
		$title = $page->post_title;
		$content = $page->post_content;
		echo "<div class='post-title'><a href='http://".$_SERVER['HTTP_HOST']."/'>$title</a></div>$content";
	}else{
	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
			<?php the_content(); ?>
	<?php endwhile; else: endif;  } ?>
	
</div>
