<?php

/* Runs the script that we need to sort out the page, for example grabbing page
 *  id and content */

global $page_content;
global $id;

if (isset($_GET[$id])) {
	$id = $_GET[$id];
} else {
	$id = 'home';
}
$page_content = grab_page($id);
