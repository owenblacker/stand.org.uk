<?php

include ("/data2/vhost/www.stand.org.uk/docs/weblog/includes/init.php");

$this_page = "archive_individual";

$title = "2002-07-19: This Space Unintentionally Left Blank";

$DATA->set_metadata( array ("page" => $this_page, "key" => "title", "value" => $title) );

$HTML->page_start();

?>

	<div class="entry">

                <div class="line-full"></div>
                <div class="date">July 19, 2002</div>

		<a name="entry"></a>
		<div class="entry-title">This Space Unintentionally Left Blank</div>
		<div class="entry-body"><p>Sorry about the lack of updates - and, indeed, the lack of anything on this front page for the last week. Technical trickiness; normal service will be resumed very shortly.</p>

<p>In the mean time, if you're looking to fax your MP, you really should be visiting the <a href="http://www.faxyourmp.com/">FaxYourMP.com</a> site.</p></div>
		
		<div class="entry-extra">
                          <div class="entry-links"> <?php 
$cats = "Administrivia, ";
$HTML->entry_cats($cats);
?></div>
                 </div>
	</div>



<?php

$HTML->page_end();

?>