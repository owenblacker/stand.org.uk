<?php

include ("/data2/vhost/www.stand.org.uk/docs/weblog/includes/init.php");

$this_page = "archive_index";

$HTML->page_start();

$list = array (

	array (
	"url" => "http://www.stand.org.uk/weblog/archive/2002/08/index.php",
	"text" => "August 2002",
	"count" => "1"),

	array (
	"url" => "http://www.stand.org.uk/weblog/archive/2002/07/index.php",
	"text" => "July 2002",
	"count" => "1"),

	array (
	"url" => "http://www.stand.org.uk/weblog/archive/2002/06/index.php",
	"text" => "June 2002",
	"count" => "9"),

"empty"
);
// Need that last "empty" on there or else we'll get an error with the final comma.

$HTML->archive_dates($list);

$HTML->page_end();

?>