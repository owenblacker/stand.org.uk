<?php

<$MTInclude module="Init"$>

$this_page = "archive_index";

$HTML->page_start();

$list = array (
<MTArchiveList  archive_type="Monthly">
	array (
	"url" => "<$MTArchiveLink$>",
	"text" => "<$MTArchiveTitle$>",
	"count" => "<$MTArchiveCount$>"),
</MTArchiveList>
"empty"
);
// Need that last "empty" on there or else we'll get an error with the final comma.

$HTML->archive_dates($list);

$HTML->page_end();

?>