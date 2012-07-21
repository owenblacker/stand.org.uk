<?php

include ("/data2/vhost/www.stand.org.uk/docs/weblog/includes/init.php");

$full_title = "July 2002";

$compressed_title = str_replace(" ", "", $full_title);

$this_page = "archive_date_".$compressed_title;

$DATA->set_metadata(array ("page"=>$this_page, "key"=>"title", "value"=>$full_title));

$nextprev = "<a href=\"http://www.stand.org.uk/weblog/archive/2002/06/index.php\">&lt;&lt; June 2002</a> | 
<a href=\"http://www.stand.org.uk/weblog/archive/2002/08/index.php\">August 2002 &gt;&gt;</a>";

$DATA->set_metadata(array ("page"=>$this_page, "key"=>"nextprev", "value"=>$nextprev));

$HTML->page_start();

?>

		<div class="entry"><?php $first_entry_for_this_date = false; ?>
			<?php $first_entry_for_this_date = true; ?>
			<div class="line-full"></div>
			<div class="date">July 19, 2002</div>
			<a name="000226"></a><?php if (!$first_entry_for_this_date) { echo "\n\t\t\t<div class=\"line-part\"></div>\n"; } ?>
			<div class="entry-title">This Space Unintentionally Left Blank</div>
			<div class="entry-body"><p>Sorry about the lack of updates - and, indeed, the lack of anything on this front page for the last week. Technical trickiness; normal service will be resumed very shortly.</p>

<p>In the mean time, if you're looking to fax your MP, you really should be visiting the <a href="http://www.faxyourmp.com/">FaxYourMP.com</a> site.</p></div>
			<div class="entry-extra">
				<div class="entry-links"><a href="http://www.stand.org.uk/weblog/archive/2002/07/19/000226.php">Link</a><?php 
					$cats = "Administrivia, ";
					$HTML->entry_cats($cats);
				?></div>
			</div>
		</div>


<?php

$HTML->page_end();

?>