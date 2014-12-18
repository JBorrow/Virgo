<?php

function navbar_gen($page_list=array('Home'), $path_list=array('index.php'),
					$this_page='Home')
{
	// Generates the navbar with the correct classes if this is the correct page
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

function read_page($path, $max_char=10000)
{
    // Reads the page and returns a string. $path = path to .html file
    $f = fopen($path, 'r');
    $contents = fread($f, $max_char);
    fclose($f);
    return $contents;
}

function page_list($path='content')
{
	// grabs a clean page list and cleans
	$unclean = scandir($path);
	$clean = array();
	foreach ($unclean as $dir) {
		if ($dir[0] != ".") {  // no hidden files
			array_push($clean, $dir);
		} else {
			continue;
		}
	}
	return array_reverse($clean);
}

function grab_page($id, $path='content')
{
	// gets the page content from page id
	include_once("$path/$id.php");
	return read_page("$path/$id/$id.html");
}
