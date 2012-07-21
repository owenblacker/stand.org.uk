<?php

include ("/data2/vhost/www.stand.org.uk/docs/weblog/includes/init.php");

$this_page = "archive_category_" . strtolower("Administrivia");

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
		<div class="entry"><?php $first_entry_for_this_date = false; ?>
			<?php $first_entry_for_this_date = true; ?>
			<div class="line-full"></div>
			<div class="date">June 10, 2002</div>
			<a name="000190"></a><?php if (!$first_entry_for_this_date) { echo "\n\t\t\t<div class=\"line-part\"></div>\n"; } ?>
			<div class="entry-title">Is this thing on?</div>
			<div class="entry-body"><p>If you're reading this, you're either 
<a href="http://www.oreillynet.com/pub/a/webservices/2002/01/18/brewster.html">Brewster
Kahle</a>, or someone who was there for <a href="http://www.ntk.net/">our</a>
final speech at <a href="http://www.xcom2002.com/">XCOM 2002</a>, where we
overexcitedly announced the launch of this site.</p>

<p>Hi. Welcome to barely anything. This is the beginning of the beta of a new
STAND, a site for those who want to play a part defining digital freedoms in
the UK and beyond.  Our secret plan: to collate in one place all the
information you need to understand and fight the groups and laws that -
deliberately or not - could foul up what, until now, has been a rather
successful Internet.</p>

<p>We're starting out with a plain design, because that's what you do when
you're setting up a site at midnight with no sleep on the eve of a conference.
There's not much to see, because we're still feeling our way. Expect the site
to change <i>a lot</i> before we settle on what's a good approach.</p>

<p>If you'd like to be informed when the site has a new feature (or, when we
get up to speed, a regular digest of changes), send a blank mail to <a href="mailto:stand-news-subscribe@lists.stand.org.uk">stand-news-subscribe@lists.stand.org.uk</a>, and I'll stick you on a mailing
list. And if you'd like to help out, or have any suggestions - mail me at <a href="mailto:stand@stand.org.uk">stand@stand.org.uk</a>.

<p>You can find the old STAND homepage <a
href="/index.20020610.php3">here</a>.</p>                        </div>
			<div class="entry-extra">
				<div class="entry-links"><a href="http://www.stand.org.uk/weblog/archive/2002/06/10/000190.php">Link</a><?php 
					$cats = "Administrivia, ";
					$HTML->entry_cats($cats);
				?></div>
			</div>
		</div>


<?php

$HTML->page_end();

?>