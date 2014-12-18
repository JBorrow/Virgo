<?php

/* Runs the script that we need to sort out the page, for example grabbing page
 *  id and content */

global $page_content;
global $id;
global $page_list;
global $path_list;
global $this_page;

$page_list = array('Home', 'Projects');
$path_list = array('index.php?id=home', 'index.php?id=projects');

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$this_page = $id;
} else {
	$id = 'home';
	$this_page = 'home';
}

$page_content = grab_page($id);
