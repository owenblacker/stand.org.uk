<?php

include ("/data2/vhost/www.stand.org.uk/docs/weblog/includes/init.php");

$this_page = "archive_individual";

$title = "2002-06-08: The first test entry";

$DATA->set_metadata( array ("page" => $this_page, "key" => "title", "value" => $title) );

$HTML->page_start();

?>

	<div class="entry">

                <div class="line-full"></div>
                <div class="date">June 08, 2002</div>

		<a name="entry"></a>
		<div class="entry-title">The first test entry</div>
		<div class="entry-body"><p>Here's the first entry on the Stand weblog. It's in all three categories so we can see if it works. Here's some more text: nother example: by default individual archive files are named by the padded form of the entry ID (000002.html, for example), and are stored directly in your Local Archive Path directory. You may wish to impose a hierarchy on your archives, based on the category into which you've placed them; for example, you would place all entries in the. Bye!</p></div>
		
		<div class="entry-extra">
                          <div class="entry-links"> <a href="http://www.stand.org.uk/weblog/archive/2002/06/08/000188.php#comments">Comments (2)</a><?php 
$cats = "Intellectual Property, Open Networks, Privacy, ";
$HTML->entry_cats($cats);
?></div>
                 </div>
	</div>



<div class="line-part"></div>

<div class="comments">

	<div class="comment-head"><a name="comments"></a>Comments</div>

	
	<div class="comment">
	<p>Here's a test comment...</p>
		<div class="comments-post">Posted by <a href="mailto:adsf@asewrwdf.com">Phil</a> on June  8, 2002 11:35 PM</div>
	</div>
	<div class="line-part"></div>
	
	<div class="comment">
	<p>here's a nother comment</p>
		<div class="comments-post">Posted by <a href="mailto:asfdafsds@asdffasdfsda.com">phil</a> on June  8, 2002 11:57 PM</div>
	</div>
	<div class="line-part"></div>
	

	<div class="comment-head">Post a comment</div>

	<div class="comment">
	<form method="post" action="http://www.overmorgen.com/cgi-bin/mt-comments.cgi" name="comments_form" onsubmit="if (this.bakecookie.checked) rememberMe(this)">
	<input type="hidden" name="static" value="1" />
	<input type="hidden" name="entry_id" value="188" />

	<div class="comment-input">Name:<br />
	<input name="author" size="30" /></div>

	<div class="comment-input">Email Address:<br />
	<input name="email" size="30" /></div>

	<div class="comment-input">URL:<br />
	<input name="url" size="30" /></div>

	<div class="comment-input">Comments:<br />
	<textarea name="text" rows="10" cols="50"></textarea></div>

	<div class="comment-input"><input type="checkbox" name="bakecookie" />Remember info?</div>

	<div class="comment-input"><input type="submit" name="preview" value="&nbsp;Preview&nbsp;" />
	<input type="submit" name="post" value="&nbsp;Post&nbsp;" /></div>

	<div class="comment-input"><input type="button" onclick="forgetMe(this.form)" value="Forget personal information" /></div>
	</form>

	<script type="text/javascript" language="javascript">
	<!--
	document.comments_form.email.value = getCookie("mtcmtmail");
	document.comments_form.author.value = getCookie("mtcmtauth");
	document.comments_form.url.value = getCookie("mtcmthome");
	//-->
	</script>
	</div>

</div>


<?php

$HTML->page_end();

?>