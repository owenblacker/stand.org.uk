<?php

<$MTInclude module="Init"$>

$this_page = "archive_individual";

$title = "<$MTEntryDate format="%Y-%m-%d"$>: <$MTEntryTitle encode_php="qq"$>";

$DATA->set_metadata( array ("page" => $this_page, "key" => "title", "value" => $title) );

$HTML->page_start();

?>

	<div class="entry">

                <div class="line-full"></div>
                <div class="date"><$MTEntryDate format="%B %d, %Y"$></div>

		<a name="entry"></a>
		<div class="entry-title"><$MTEntryTitle$></div>
		<div class="entry-body"><$MTEntryBody$></div>
		
		<div class="entry-extra">
                          <div class="entry-links"> <MTEntryIfAllowComments><a href="<$MTEntryLink$>#comments">Comments (<$MTEntryCommentCount$>)</a></MTEntryIfAllowComments><?php 
$cats = "<MTEntryCategories><$MTCategoryLabel$>, </MTEntryCategories>";
$HTML->entry_cats($cats);
?></div>
                 </div>
	</div>

<MTEntryIfAllowComments>

<div class="line-part"></div>

<div class="comments">

	<div class="comment-head"><a name="comments"></a>Comments</div>

	<MTComments>
	<div class="comment">
	<$MTCommentBody$>
		<div class="comments-post">Posted by <$MTCommentAuthorLink$> on <$MTCommentDate$></div>
	</div>
	<div class="line-part"></div>
	</MTComments>

	<div class="comment-head">Post a comment</div>

	<div class="comment">
	<form method="post" action="<$MTCGIPath$>mt-comments.cgi" name="comments_form" onsubmit="if (this.bakecookie.checked) rememberMe(this)">
	<input type="hidden" name="static" value="1" />
	<input type="hidden" name="entry_id" value="<$MTEntryID$>" />

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
</MTEntryIfAllowComments>

<?php

$HTML->page_end();

?>