<?php
/* Generates the navbar with the correct classes
 */

function navbar_gen($page_list=array('Home'), $path_list=array('index.php'),
					$this_page='Home')
{
	$navbar = "";
	for ($i=0; $i<count($page_list); $i++) {
		$page = $page_list[$i];
		$path = $path_list[$i];
		if ($page == $this_page) {
			$class = 'active';
		} else {
			$class = '';
		}
		$navbar .= "<li class='$class'><a href='$path'>$page</a></li>";
	}
	return $navbar;
}
