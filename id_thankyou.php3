<?

$strippedbody = stripslashes($body);

$date = date("l j F Y");

$standee_address2 = $standee_address2 ? $standee_address2."\n" : "";

$message = "

Entitlement Cards Unit
Home Office
50 Queen Anne's Gate
London
SW1H 9AT

$standee_name
$standee_address1
$standee_address2$standee_town
$postcode


$date

$strippedbody

";


# entitlementcardsunit@homeoffice.gsi.gov.uk

if ($email) { mail("entitlementcardsunit@homeoffice.gsi.gov.uk", "Response to Consultation on Entitlement Cards and Identity Fraud", $message, "From: $standee_name <$email>\nBcc: $email, response@stand.org.uk"); }
if ($email) { mail("mysociety@loosemore.com", "Response to Consultation on Entitlement Cards and Identity Fraud", $message, "From: $standee_name <$email>\nBcc: $email, response@stand.org.uk"); }


include "config.php3";
$counter=$db_stand->execute("update standstats set sent = sent + 1");

$postcode = ereg_replace(" ","",$postcode);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title>Stand: Defining Digital Freedoms In The UK</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="description" content="The Stand weblog." />
	<meta name="keywords" content="Stand, weblog, blog" />
        <link rel="alternate" type="application/rss+xml" title="RSS" href="/weblog/syndication/index.xml" />
 
	<link rel="stylesheet" href="/weblog/includes/style/global.css" type="text/css" />
	<style type="text/css">
		@import url(/weblog/includes/style/global_non_ns4.css);
	</style>

		

</head>
<body link="#006611" alink="#006611 vlink="#996633">
		
<div id="top">
	<div id="masthead">stand</div>

	<div id="controls">
			<span class="control"><a href="/">home</a></span>&nbsp;
		<span class="control"><a href="weblog/about/">about</a></span>&nbsp;
		<span class="control"><a href="mailto:stand@stand.org.uk">email</a></span>
		<br>
	</div>
</div>	
<div class="titletomski">Done! We've emailed your response to the Government</div>
<div id="page-body">
	<div id="main">

<P>

We've sent your response to the Government, and also emailed you a copy for your records. 
<P>
Please encourage <B>all</B> your friends and family to visit <A HREF="http://www.stand.org.uk/">www.STAND.org.uk</A> submit a response to the consultation. Time is very short.<P>


<!-- remove while FYMP down -->
<TABLE CELLSPACING="0" CELLPADDING="2" BORDER="0" BGCOLOR="#006611">
	<TR>
	<TD VALIGN="top">
			<TABLE CELLSPACING="0" CELLPADDING="8" BORDER="0" BGCOLOR="#CCFF99">
		<TR><TD>
<div class="titletomski">Step 4 (optional!) - Why not Fax Your MP too?</div>
With just a couple more clicks you can <B><A HREF="http://www.faxyourmp.com/faxform.php3?input_postcode=<? echo $postcode ?>" onClick="javascript:document.sendfax.submit(); return false">Fax a copy of your response to your MP</A>.</B><P>
If they're a Labour Party MP, you might also like to ask them under what mandate they think they will introducing ID cards. 
Plans for ID cards were not in Labour's manifesto.<P>

</TD>
</TR>
</TABLE>
</TD>
</TR>
</TABLE>

<!---end snip out of FYM--->

<P>
If you'd like to be informed when www.STAND.org.uk has a new feature,
 send a blank mail to <A HREF="mailto:stand-news-subscribe@lists.stand.org.uk">stand-news-subscribe@lists.stand.org.uk</A>, 
 and we'll stick you on a mailing list. 
 <P>
 And if you'd like to help out, or have any suggestions, you can mail us directly at <A HREF="mailto:stand@stand.org.uk">stand@stand.org.uk</A> 



<FORM name="sendfax" method="POST" action="http://www.faxyourmp.com/faxform.php3">
<input type="hidden" name="input_postcode" value="<? echo $postcode ?>">
<input type="hidden" name="body" value="<? echo htmlentities(stripslashes($body)) ?>">
<input type="hidden" name="standee_name" value="<? echo $standee_name ?>">
<input type="hidden" name="standee_address1" value="<? echo $standee_address1 ?>">
<input type="hidden" name="standee_address2" value="<? echo $standee_address2 ?>">
<input type="hidden" name="standee_town" value="<? echo $standee_town ?>">
<input type="hidden" name="email" value="<? echo $email ?>">
</FORM>

</div>


	<!-- end main -->
	</div>

<!-- end page-body -->
</div>
<? include("id_tracker.php3"); ?>
</body>
</html>
