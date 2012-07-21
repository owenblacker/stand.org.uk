<?php

include ("/data2/vhost/www.stand.org.uk/docs/weblog/includes/init.php");

$this_page = "archive_category_" . strtolower("Open Networks");

$HTML->page_start();

?>


	<div class="entry">
                <?php $first_entry_for_this_date = false; ?>
		
                
                <?php $first_entry_for_this_date = true; ?>
                <div class="line-full"></div>
                <div class="date">June 08, 2002</div>
                

		<a name="000188"></a>
                <?php if (!$first_entry_for_this_date) { echo "<div class=\"line-part\"></div>\n"; } ?>
		<div class="entry-title">The first test entry</div>
		<div class="entry-body"><p>Here's the first entry on the Stand weblog. It's in all three categories so we can see if it works. Here's some more text: nother example: by default individual archive files are named by the padded form of the entry ID (000002.html, for example), and are stored directly in your Local Archive Path directory. You may wish to impose a hierarchy on your archives, based on the category into which you've placed them; for example, you would place all entries in the. Bye!</p></div>
		
		<div class="entry-extra">
                          <div class="entry-links"> <a href="http://www.stand.org.uk/weblog/archive/2002/06/08/000188.php#comments">Comments (2)</a> | <a href="http://www.stand.org.uk/weblog/archive/2002/06/08/000188.php">Link</a><?php 
$cats = "Intellectual Property, Open Networks, Privacy, ";
$HTML->entry_cats($cats);
?></div>
                </div>
	</div>


<?php

$HTML->page_end();

?>