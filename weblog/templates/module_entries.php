<MTEntries>		<div class="entry"><?php $first_entry_for_this_date = false; ?>
			<MTDateHeader><?php $first_entry_for_this_date = true; ?>
			<div class="line-full"></div>
			<div class="date"><$MTEntryDate format="%B %d, %Y"$></div></MTDateHeader>
			<a name="<$MTEntryID pad="1"$>"></a><?php if (!$first_entry_for_this_date) { echo "\n\t\t\t<div class=\"line-part\"></div>\n"; } ?>
			<div class="entry-title"><$MTEntryTitle$></div>
			<div class="entry-body"><$MTEntryBody$></div>
			<div class="entry-extra">
				<div class="entry-links"><MTEntryIfAllowComments><a href="<$MTEntryLink$>#comments">Comments (<$MTEntryCommentCount$>)</a> | </MTEntryIfAllowComments><a href="<$MTEntryLink$>">Link</a><?php 
					$cats = "<MTEntryCategories><$MTCategoryLabel$>, </MTEntryCategories>";
					$HTML->entry_cats($cats);
				?></div>
			</div>
		</div>
</MTEntries>