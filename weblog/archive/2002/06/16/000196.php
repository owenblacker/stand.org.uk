<?php

include ("/data2/vhost/www.stand.org.uk/docs/weblog/includes/init.php");

$this_page = "archive_individual";

$title = "2002-06-16: Statutory Instrument Update";

$DATA->set_metadata( array ("page" => $this_page, "key" => "title", "value" => $title) );

$HTML->page_start();

?>

	<div class="entry">

                <div class="line-full"></div>
                <div class="date">June 16, 2002</div>

		<a name="entry"></a>
		<div class="entry-title">Statutory Instrument Update</div>
		<div class="entry-body"><p>Thanks for everyone who has already contacted their MP.
If your Member of Parliament has written back to say that there's nothing they can do,
please remind them (politely!) that they can attend and speak at the Standing Committee on Delegated Legislation meetings.</p>
<p>While your MP could not vote on the matter, their attendance would
definitely signal to the committee the extent of the concern over this
Instrument - even if they were only present for five minutes.</p>
<p>We're
preparing briefing notes for MPs for those who want to consider speaking.
We're also hoping to collect a list of MPs who may be considering this
so your MP will know that they won't be alone.</p>
<p>If you're new here, here's <a href="http://www.stand.org.uk/weblog/archive/2002/06/10/000193.php">a fuller explanation of the Statutory Instrument, and what you can do</a>.</p>
<p>Mail a blank mail to <a href="mailto:stand@ntk.net">stand@ntk.net</a> if you'd like to be kept in touch with developments.</p></div>
		
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