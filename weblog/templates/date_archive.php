<?php

<$MTInclude module="Init"$>

$full_title = "<$MTArchiveTitle$>";

$compressed_title = str_replace(" ", "", $full_title);

$this_page = "archive_date_".$compressed_title;

$DATA->set_metadata(array ("page"=>$this_page, "key"=>"title", "value"=>$full_title));

$nextprev = "<MTArchivePrevious><a href=\"<$MTArchiveLink$>\">&lt;&lt; <$MTArchiveTitle$></a></MTArchivePrevious> | <MTArchiveNext>
<a href=\"<$MTArchiveLink$>\"><$MTArchiveTitle$> &gt;&gt;</a></MTArchiveNext>";

$DATA->set_metadata(array ("page"=>$this_page, "key"=>"nextprev", "value"=>$nextprev));

$HTML->page_start();

?>

<$MTInclude module="Entries"$>

<?php

$HTML->page_end();

?>