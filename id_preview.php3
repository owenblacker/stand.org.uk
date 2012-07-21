<?
$cooked_body = ereg_replace("\n","<br>",htmlentities($body));
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
<div class="titletomski">Step 3 - Preview Your Response, Then Send It In</div>
<div id="page-body">
	<div id="main">



<TABLE CELLSPACING="0" CELLPADDING="0" BORDER="0" WIDTH="525">
<TR>
<TD VALIGN="top">

<P>
	<TABLE CELLSPACING="0" CELLPADDING="2" BORDER="0" WIDTH="100%" BGCOLOR="#006611">
	<TR>
	<TD>
		<TABLE CELLSPACING="0" CELLPADDING="5" BORDER="0" WIDTH="100%" BGCOLOR="#CCFF99">
		<TR>

	
		<TD VALIGN="top" ALIGN="left"><BR><B>FOR THE ATTENTION OF:</B><BR><BR>
		<B>		
		
		Entitlement Cards Unit<BR>
		Home Office<BR>
		50 Queen Anne's Gate<BR>
		London<BR>
		SW1H 9AT<P>

		
		
		<? echo date("l j F Y"); ?>
		</B>
		</TD>
		<TD VALIGN="top" ALIGN="right">
		<BR><BR>
		<? echo $standee_name ?><BR>
		<?
			echo $standee_address1 ."<BR>";
			if ($standee_address2 && $standee_address2 != '') {
				echo $standee_address2 . "<BR>";
			}
			echo $standee_town . "<BR>";
			echo $postcode . "<BR><BR>";
			echo $email;
		?>
		</TD>
		</TR>
		<TR>
		<TD COLSPAN="2"><IMG SRC="/images/tiny.gif" WIDTH="1" HEIGHT="20" BORDER="0"></TD>
		</TR>
		<TR>

		<TD COLSPAN="2">
		<?
		echo (stripslashes($cooked_body));
		?>
		</TD>

		</TR>
		</TABLE></TD>
	</TR>
	</TABLE><P>


	<TABLE CELLSPACING="0" CELLPADDING="2" BORDER="0" WIDTH="100%">
	<TR>
<FORM ACTION="id_letter.php3" METHOD="POST">
<INPUT TYPE="hidden" NAME="standee_name" VALUE="<? echo $standee_name ?>">
<INPUT TYPE="hidden" NAME="standee_address1" VALUE="<? echo $standee_address1 ?>">
<INPUT TYPE="hidden" NAME="standee_address2" VALUE="<? echo $standee_address2 ?>">
<INPUT TYPE="hidden" NAME="standee_town" value="<? echo $standee_town ?>">
<INPUT TYPE="hidden" NAME="input_postcode" VALUE="<? echo $postcode ?>">
<INPUT TYPE="hidden" NAME="postcode" VALUE="<? echo $postcode ?>">
<INPUT TYPE="hidden" NAME="email" VALUE="<? echo $email?>">
<INPUT TYPE="hidden" NAME="body" value="<? echo htmlentities(stripslashes($body)) ?>">
<INPUT TYPE="hidden" NAME="fax_submit" VALUE="0">

	<TD><INPUT TYPE="submit" NAME="SUBMIT" VALUE="&lt;&lt; edit this email">

	</TD>
</FORM>

<! ****INSERT SENDMAIL CODE IN THIS FORM I EXPECT -- please pass all variables onto id_thankyou.php3 after the sendmail is done cos we use them to create clever FYMP deep link**** ->
<FORM ACTION="id_thankyou.php3" METHOD="POST">
<INPUT TYPE="hidden" NAME="standee_name" VALUE="<? echo $standee_name ?>">
<INPUT TYPE="hidden" NAME="standee_address1" VALUE="<? echo $standee_address1 ?>">
<INPUT TYPE="hidden" NAME="standee_address2" VALUE="<? echo $standee_address2 ?>">
<INPUT TYPE="hidden" NAME="standee_town" value="<? echo $standee_town ?>">
<INPUT TYPE="hidden" NAME="postcode" VALUE="<? echo $postcode ?>">
<INPUT TYPE="hidden" NAME="email" VALUE="<? echo $email?>">
<INPUT TYPE="hidden" NAME="body" value="<? echo htmlentities(stripslashes($body)) ?>">
	<TD ALIGN="right"><INPUT TYPE="submit" NAME="sendfax" VALUE="Send Your Response &gt;&gt">
	</TR></FORM>
	</TABLE>



	</TD>
</TR>

</TABLE>
</DIV>
<? include("id_tracker.php3"); ?>
</BODY>
</HTML>
