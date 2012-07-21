<?
// matt additions /////////////////////////////////////////////////////////////

include("id_form_check.php3");

// customise here... ------------------------------------------
$success_page="id_preview.php3"; // this page will be displayed via include if all goes well

$submit_flag="fax_submit"; // hidden field that informs checker that form has been submitted

// field name, and relevant error messages for required fields
$required= array( 
		standee_name => "<li>your name</li>",
		standee_address1 => "<li>your address</li>",
		postcode => "<li>your postcode</li>",
		standee_town => "<li>your town</li>"
		);

// template stuff that surrounds an error report -- %error_report% is the place
// that error information will be added
$error_report_surround = '
<TABLE BGCOLOR="#CCFF99" BORDER="0" WIDTH="100%">
<TR>
<TD><font color=#FF0000><B>Oops! Sorry, but we need you to fill in:
<UL>
%error_report%
</UL>
</B></FONT>
</TD>
</TR>
</TABLE>
';

$custom = array( email=>"validate_mail" ); // fieldname and custom check function

// to show user where error occured
$error_marker = "<font color=red>%text%</font>"; 

// end customise ------------------------------------------

// Owen's additions ::::::::::::::::::::::::::::
$standee_name = stripslashes($standee_name);
$standee_address1 = stripslashes($standee_address1);
$standee_address2 = stripslashes($standee_address2);
$standee_town = stripslashes($standee_town);

if (!eregi("PLEASE ADD YOUR OWN COMMENTS", $body) && !check_data( $required, $custom, $submit_flag, $success_page ) ) {
	include( $success_page );
	exit;
}

// end matt additions /////////////////////////////////////////////////////////////

?>
<html>
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
<div class="titletomski">Step 2 - Now Customise Your Response</div>
<div id="page-body">
	<div id="main">


<!--<div class="main-misc">-->



<TABLE CELLSPACING="0" CELLPADDING="2" BORDER="0" BGCOLOR="#006611">
	<TR>
	<TD VALIGN="top">
	<? report_errors( $error_report_surround ); ?>
		<TABLE CELLSPACING="0" CELLPADDING="8" BORDER="0" BGCOLOR="#CCFF99">
		<TR><FORM METHOD="POST" NAME="">
		<TD VALIGN="top"><BR>
		
		Entitlement Cards Unit<BR>
		Home Office<BR>
		50 Queen Anne's Gate<BR>
		London<BR>
		SW1H 9AT<P>

		
		
		<nobr><? echo date("l j F Y"); ?></nobr>
	</TD>
		<TD VALIGN="top" ALIGN="right">
			<TABLE CELLPADDING="2" CELLSPACING="0" BORDER="0">
			<TR>
			<TD CLASS="smallb"><?mark_error('standee_name','your name:')?></TD>
			<TD><FONT CLASS="form"><INPUT NAME="standee_name" VALUE="<?echo $standee_name?>" TYPE="text" SIZE="20" CLASS="form"></FONT></TD>
			</TR>
			<TR>
			<TD CLASS="smallb"><?mark_error('standee_address1', 'address 1:')?></TD>
			<TD><FONT CLASS="form"><INPUT NAME="standee_address1" VALUE="<?echo $standee_address1?>" TYPE="text" SIZE="20" CLASS="form"></FONT></TD>
			</TR>
			<TR>
			<TD CLASS="small">address 2:</TD>			
			<TD><FONT CLASS="form"><INPUT NAME="standee_address2" VALUE="<?echo $standee_address2?>" TYPE="text" SIZE="20" CLASS="form"></FONT></TD>
			</TR>
			<TR>
			<TD CLASS="smallb"><?mark_error('standee_town','town:')?></TD>
			<TD><FONT CLASS="form"><INPUT NAME="standee_town" value="<?echo $standee_town;?>" TYPE="text" SIZE="20" CLASS="form"></FONT></TD>
			</TR>
			<TR>
			<TD CLASS="smallb"><?mark_error('postcode', 'postcode:')?></TD>
			<TD><INPUT NAME="postcode" TYPE="TEXT" SIZE="20" VALUE="<? echo $postcode; ?>"></TD>
			</TR>
			<TR>
			<TD CLASS="smallb"><? mark_error('email', 'your email:') ?></TD>
			<TD><FONT CLASS="form"><INPUT NAME="email" VALUE="<?echo $email?>" TYPE="text" SIZE="20" CLASS="form"></FONT>
			</TD>
			</TR>
			</TABLE><BR></TD>
		</TR>
		<TR>
		<TD COLSPAN="2" CLASS="smallb">
			write your response:</SPAN> &nbsp;&nbsp;(<A HREF="id_privacy.php3" TARGET="_new"><SPAN CLASS="small">read our privacy policy</SPAN></A>)

<?
if (eregi("PLEASE ADD YOUR OWN COMMENTS", $body)) {
	print "<br />&nbsp;<br /><font color=\"red\">Your response will have much more effect if use your own words.<br />
Please replace the paragraph in CAPITALS with a few of your own thoughts.<br />
It will only take a moment and will make a massive difference.<br />&nbsp;<br />Thanks! :o)</span>";
} // if
?>
		</TD>
		</TR>
		<TR>
		<TD COLSPAN="2"><FONT CLASS="form"><TEXTAREA ROWS="30" COLS="60" MAXLENGTH="20000" NAME="body" CLASS="form" TEXTWRAP="physical" <? if (empty($a)) { ?> style="background: url(cheapnnasty.gif) repeat-x;" onfocus="this.style.backgroundImage=''; this.style.backgroundColor='white';" <? } ?>><?

if (!empty($body)) {
        echo (stripslashes($body));
} else if (empty($a)) {
        print "Dear Sir/Madam,\n\n";

	print "I am against the Government's proposals for Entitlement Cards for the following reasons:\n\n";
	
	
	if (!ereg("letter\.php3$", $GLOBALS["HTTP_REFERER"]) && !ereg("preview\.php3$", $GLOBALS["HTTP_REFERER"])) {
		// If we've not come to this page from itself or the preview page, then add this line:
		print "PLEASE ADD YOUR OWN COMMENTS AND THOUGHTS, AND CHANGE THE POINTS MADE TO YOUR HEART'S CONTENT.\n\nTHE MORE YOU CUSTOMISE THIS MESSAGE, THE STRONGER THE MESSAGE YOU SEND. IF YOU CAN, USE ALL YOUR OWN WORDS.\n\n";

	if (!empty($against1))
print "COST. The government's consultation paper tells us \"Over a three year period of developing the systems and a ten year period during which the cards would be valid, the total cost of a scheme would be around £1.5 billion.\"\n
The history of ID card cost estimates in other countries (notably Australia and the Philippines) has risen sharply toward the implementation stage. The government has failed to successfully implement almost every large IT system it has ever undertaken.\n
It's a rather large amount of money to waste on something that won't serve the purpose. \n\n";

	if (!empty($against2))
		print "COMPULSION. Paragraph 2.12 makes the assurance that the card scheme could not dictate that service providers require the card. Despite this, we believe that central government would find it very difficult not to lay pressure onto public services it controls, such as the NHS and the Inland Revenue, to make use of the card. It stretches belief that, after the investment of large sums of money, the government would not find itself under political pressure to show that the scheme was worthwhile and presenting efficiency savings, no matter how contrived.\n\n Calling the card voluntary is pure semantics if I will be required to use a card should I need to work, use the banking or health system, vote, buy a house, drive, travel or receive benefits. \n\n";

	if (!empty($against3))
		print "MISUSE OF DATA. As the HCIS report on Police Integrity makes clear, current police culture and practice towards the leaking - and even the sale - of highly sensitive personal data leaves a huge amount to be desired.\n 
If even the Police cannot be relied upon to keep criminal data secure, I believe that unauthorised access and use of personal data stored within the Entitlement card database will be rife. \n\n";

	if (!empty($against4))
		print "IDENTITY FRAUD: If the cards have any value whatsoever, then people will find a way to forge them or to acquire them dishonestly. The technology gap between governments and organised crime worldwide has now narrowed to such an extent that even the most highly secure cards are available as blanks weeks within weeks of their introduction.\n\n";

	if (!empty($against5))
		print "ILLEGAL IMMIGRANT WORKERS. The mental image of transit vans pulling up to groups of young men waiting patiently on the kerb-side at dawn and asking for their ID cards before whisking them off to a construction site as casual labour is somewhat risible. \n
The proposals leave the way open to force legitimate businesses to carry to financial burden of ID card checks on their employees, whilst doing nothing to stop less scrupulous employers.\n\n";

	if (!empty($against6))
		print "BIOMETRICS. None of these conditions set in paragraph 5.21 could be met, now or in the foreseeable future. \n
The technology will not be sufficiently mature and reliable, the costs would not justify the benefits and the likes of iris scanning will not be acceptable to members of the public.\n\n";

	if (!empty($against7))
		print "ABUSES OF DATA. It is worrying that government does not seem to consider it necessary to include criminal sanctions for unauthorised access to or misuse of individuals' data.\n
In order to provide any level of public confidence in any scheme, there should be far greater sanctions for such abuses of the scheme than there should be for the relatively trivial 'offences' of forgetting to tell the central government that one has moved house. \n\n";

	if (!empty($against8))
		print "MANDATE. I reject the notion that this Government has a mandate to introduce such a sweeping change to the balance of civil liberties, and I would choose not to use such a card or allow storage of my biometric data.\n\n";

	} // if (...)
} // if
?>
</TEXTAREA></FONT></TD>
		</TR>
		<TR>
		<TD ALIGN="left">&nbsp;</TD>
		<TD ALIGN="right">
<INPUT TYPE="hidden" NAME="fax_submit" VALUE="1">
<INPUT TYPE="submit" NAME="SUBMIT" VALUE="Next Step - Preview Your Response &gt;&gt;"><BR></TD>
		</TR></FORM>
		</TABLE>
	</TD>
	</TR>
	</TABLE>
<P> 
<P>
<P>&nbsp;

</TD>
</TR>
</TABLE>
</DIV>
<P>
<P>&nbsp;
<? include("id_tracker.php3"); ?>
</BODY>
</HTML>
