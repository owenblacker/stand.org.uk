<?php

include ("/data2/vhost/www.stand.org.uk/docs/weblog/includes/init.php");

$this_page = "archive_individual";

$title = "2002-06-15: Banner Ads";

$DATA->set_metadata( array ("page" => $this_page, "key" => "title", "value" => $title) );

$HTML->page_start();

?>

	<div class="entry">

                <div class="line-full"></div>
                <div class="date">June 15, 2002</div>

		<a name="entry"></a>
		<div class="entry-title">Banner Ads</div>
		<div class="entry-body"><p>No campaign would be complete without its banner ad. Here's ours, courtesy of Ian Vince. Just cut and paste the code at the bottom to include it in your Web page.</p> 
<table bordercolor="#333333" border="1" width="270" cellspacing="0"> <tr><td
align="center" bgcolor="#ffffff"><font style="line-height: normal; font-size: 12pt; font-family:
sans-serif" color="#000000"> <a href="http://www.stand.org.uk/"><img
style="float: left; border: 0;"
src="http://www.stand.org.uk/images/spoffice1.gif" alt="spook office?"></a> <br> The UK police,
the secret service, and the tax man can find out where you're surfing.<p> 
In August, so will the Post Office.  <br clear="all"> <br> If a new rule
passes Parliament, over <a
href="http://www.legislation.hmso.gov.uk/si/si2002/draft/20022322.htm">twenty
government departments</a> will be able to spy on your browsing without a
warrant.<br> <b><a href="http://www.stand.org.uk/">Find out the facts</a>.<a
href="http://www.faxyourmp.com/">Fax your MP</a>.<br>Stop the order.</b>
<br></font></td> </tr></table>
<p>Here's the code:</code>
<pre>
&lt;table bordercolor="#333333" border="1" width="270" cellspacing="0"&gt; 
&lt;tr&gt;&lt;td align="center" bgcolor="#ffffff"&gt;&lt;font style="font-size: 12pt; font-family: sans-serif" color="#000000"&gt; 
&lt;a href="http://www.stand.org.uk/"&gt;&lt;img alt="spook office?" style="float: left; border: 0;" src="http://www.stand.org.uk/images/spoffice1.gif"&gt;
&lt;/a&gt; &lt;br&gt; The UK police, the secret service, and the tax man can find out where you're surfing.
&lt;p&gt; In August, so will the Post Office.  &lt;br clear="all"&gt; 
&lt;br&gt; If a new rule passes Parliament, over &lt;a href="http://www.legislation.hmso.gov.uk/si/si2002/draft/20022322.htm"&gt;
twenty government departments&lt;/a&gt; will be able to spy on your browsing without a warrant.&lt;br&gt; 
&lt;b&gt;&lt;a href="http://www.stand.org.uk/"&gt;Find out the facts&lt;/a&gt;.&lt;a href="http://www.faxyourmp.com/"&gt;
Fax your MP&lt;/a&gt;.&lt;br&gt;Stop the order.&lt;/b&gt; &lt;br&gt;&lt;/font&gt;&lt;/td&gt; &lt;/tr&gt;&lt;/table&gt;
</pre>
<p>Do <a href="mailto:stand@stand.org.uk">mail us</a> if you've got an image to use, or can improve on our shoddy HTML.</p></div>
		
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