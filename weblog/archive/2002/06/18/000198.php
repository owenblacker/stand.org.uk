<?php

include ("/data2/vhost/www.stand.org.uk/docs/weblog/includes/init.php");

$this_page = "archive_individual";

$title = "2002-06-18: Government admits 'we got it wrong'";

$DATA->set_metadata( array ("page" => $this_page, "key" => "title", "value" => $title) );

$HTML->page_start();

?>

	<div class="entry">

                <div class="line-full"></div>
                <div class="date">June 18, 2002</div>

		<a name="entry"></a>
		<div class="entry-title">Government admits 'we got it wrong'</div>
		<div class="entry-body"><p>The Home Secretary, David Blunkett, <a href="http://news.bbc.co.uk/hi/english/uk_politics/newsid_2051000/2051117.stm">has admitted</a> the government made a mistake and and the Statutory Instrument has been postponed indefinitely.</p></div>
		
		<div class="entry-extra">
                          <div class="entry-links"> <?php 
$cats = "Privacy, ";
$HTML->entry_cats($cats);
?></div>
                 </div>
	</div>



<?php

$HTML->page_end();

?>