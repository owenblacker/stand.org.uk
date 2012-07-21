<? include "config.php3"; ?>
<html>
<head>
<title>Adopt An MP - Homepage</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="Description" content="Adopt an MP seeks to promote safe e-commerce in the UK by helping net users to educate MPs about encryption and digital signatures.">
<meta name="Keywords" content="Adopt an MP,@dopt an MP,adopt MP,STAND,Encryption,Digital Signatures,crypto policy,crypto,escrow,key escrow,UK Government,Government,Parliament,public key encryption,Millenium Bug and E-Commerce Bill,Secure Electronic Commerce Bill, Electronic Commerce Bill, Wassenaar,Trusted Third Party,Trusted Third Parties,TTP,DTI,Department of Trade and Industry,Barbara Roche,Labour Party,search for MP by postcode,MI5,security services,backdoor key,trapdoor key,Entrust,Verisign,PGP,Hickson,Pride,GCHQ,adopt your MP, adopt my MP,lobby MP,lobby my MP,lobby your MP,lobby an MP">

<?

if ($SERVER_NAME):
echo "<BASE HREF=\"http://$SERVER_NAME/\">";
else:
echo "<BASE HREF=\"http://www.stand.org.uk/\">";
endif;
?>


</head>

<body bgcolor="#000000">

<CENTER>

<TABLE border="0" width="600" cellspacing="0" cellpadding="0" align="CENTER">
  <TR valign="MIDDLE" height="80" bgcolor="#A997DF"> 
    <TD><IMG src="images/ClrPixel.gif" width="30" height="70"></TD>
    <TD valign="MIDDLE" colspan="3"><BR><FONT face="Arial, Helvetica, sans-serif" size="+4"><B>STAND</FONT><FONT face="Arial, Helvetica, sans-serif" size="+1">.ORG.UK</FONT></B> <IMG src="images/ClrPixel.gif" width="100" height="1"><FONT face="Arial, Helvetica, sans-serif" size="+5">@</FONT><FONT face="Arial, Helvetica, sans-serif" size="+3">dopt
      an MP</FONT><BR><FONT face="Arial, Helvetica, sans-serif" size="-2"><B>CAMPAIGNING FOR SAFE E-COMMERCE LEGISLATION</B>      
                       <?

$q = $db_stand->query("select count(*) from volunteers");
$volunteers = $q->field(0,"count(*)");

$q = $db_stand->query("select distinct region from volunteers");
$mps = $q->rows;

/* Here's some bad HTML: */

?>


		       <FONT face="Arial, Helvetica, sans-serif" size="-2"><B></B>TO DATE <? echo $mps ?> MPs ADOPTED BY <? echo $volunteers ?> ADOPTERS</B></FONT><BR></TD>
  </TR>
  
    <TR height="3">
<TD colspan=4 bgcolour="#000000"><IMG src="images/BlkPixel.gif" width="600" height="3"></TD>
  </TR>
  <TR> 
    <TD bgcolor="#FFFFFF" valign="TOP"><IMG src="images/ClrPixel.gif" width="30" height="3"></TD>
    <TD bgcolor="#FFFFFF" valign="TOP"> <BR>
<FONT face="Arial, Helvetica, sans-serif"><FONT size=-2>
If you're a first-time visitor, you might want to read our <A href="index-update1.php3#top">original homepage</A>.</FONT><BR>
	
<FONT face="Arial, Helvetica, sans-serif"><FONT size=-1>

<br>
<br>

<h3>
Update: The E-Commerce Bill has finally been published.</h3>

<p>It's not as bad as was feared, but it's still plenty bad. Clue:
the really dodgy stuff is in <a href="#part3">Part III</a>.  This Part was written by the Home Office,
so 
we wrote to Jack Straw with <a href="dearjack/">details of how he would be arrested</a>.
<br>&nbsp;<a name="part1"><h4>
Part I: Cryptography Service Providers</h4></a>
<p>Part I creates a regieme by which people who provide
cryptography services can voluntarily apply to be registered
as a government approved provider. Presumably the government
expects only to use approved providers, as anyone who actually
cares about computer security wouldn't touch government-approved crypto
with a 10 foot pole.</p>
<p><strong>STAND says:</strong> this Part is waste paper at best, and at worst a holding&nbsp;
strategy to make licencing compulsory at a later date. We're getting along nicely without it. Parliament
should delete the whole section.</p>
<a name="part2">
<h4>Part II: Facilitation of Electonic Commerce, Data Storage etc.</h4>
</a>
<p>This part was specially created for all those of you who know
that you can't store data unless the government creates a new
legal system to let you. <i>"I'm from the government and I'm here to
help"</i>. As far as we can see, there's a fair bit of e-commerce
going on at the moment too.</p>
<p>Most lawyers reckon that we don't need an Act of Parliament to
make contracts made online with electronic signatures legally binding.
Of course, if they did turn out to be wrong it would stuff the
UK E-Commerce industry, so maybe it's not too bad. What a shame
it seems to involve giving the Minister sweeping and barely restricted
powers to change Acts of Parliament on her own order (Statutory&nbsp;
Instrument).</p>
<p><strong>STAND says</strong>: there should be clearer restrictions on Ministers'&nbsp;
powers, and these powers should then be passed into law but held in abeyance
until Parliament, by a simple single resolution, decides that they are indeed needed, whereupon they would be activated. Once this Part is
amended like that, Parliament should support it.</p>
<a name="part3">
<h4>Part III Investigation of Protected Electronic Data</h4>
</a>
<p>The spooks' charter. Here any policeman could show up with some
encrypted data and an order to provide the decryption key. If you
refuse you go to jail for 2 years. Usually they won't need a judicial
warrant; sometimes they won't need&nbsp;
any sort of warrant at all, just their say-so.</p>
<p>The problem is that if you don't actually have they key it is up to
you to prove that. If you deleted it, or if you never actually had
it,
you're in trouble. If the authorities reckon you've got it stashed
on
a floppy buried in the flowerbeds at Hyde Park Corner, go directly
to
jail, do not pass Go, do not collect &pound;200.
<p>How can you prove you don't have something? Try slapping your forehead
in a manner likely to convince the judge.</p>
<p>The other new power here is that the authorities can order you to keep
the disclosure of your key a secret. If you tell anyone at all you'll
be going down for up to 5 years for <i>"tipping off"</i>. Not only is this disasterous for information
security, but it even stops you complaining about unfair treatment.
Toddle
off to court to demand judicial review of the order to disclose and
all you'll
get from the Judge is an extended stay in Her Majesty's finest accomodation 
<i> because telling the <u>judge</u> is illegal!</i>.
There is a tame Tribunal to hear complaints and cover them up; you
aren't even
entitled to legal representation at it.</p>
<p><strong>STAND says, poetically</strong>: How does Part III breach the Human Rights Act,
let me count the ways...
<br>Unfair offences, reversal of burden of proof, defences that are logically
impossible to prove, a wholly inadequate complaints procedure with
no appeals,&nbsp;
unneccesarily broad powers, potential to force you to incriminate yourself,&nbsp;
the list goes on.
<p>The police need something to help them to decrypt data in certain&nbsp;
circumstances (and not in others). Part III is not it. Parliament should
delete this Part and try to come up with something better when it replays
the Interception of Communications Act next year. If it doesn't throw
this Part out, the
European Court of Human Rights will.

<a name="part4">
<h4>Part IV: Miscellaneous and Supplemental</h4>
</a>
<p>This is mainly about changing telecommunications licences.
<p><strong>STAND says:</strong> we don't know anything about telco licences; if you're&nbsp;
interested you'll have to ask BT or one of those plucky little
cable companies.
&nbsp;

<p></p>



</FONT></FONT>
      </TD>
    <TD bgcolor="#FFCC00" valign="TOP" halign="left"><IMG src="images/BlkPixel.gif" width="3" height="1800"> </TD>
    <TD bgcolor="#FFCC00" valign="TOP"> <IMG src="images/ClrPixel.gif" width="150" height="3"><BR>
      <FONT face="Arial, Helvetica, sans-serif" size="+3"><B>@</FONT><FONT face="Arial, Helvetica, sans-serif" size="+1">dopt An MP<BR>
      </B></FONT> 

 <FONT face="Arial, Helvetica, sans-serif" size="-2">This Issue Is Hard<BR>Help Your MP Understand </FONT><BR>
      <FORM method="post" action="step2.php3">
          </FONT><B><FONT face="Arial, Helvetica, sans-serif" size="+1">Step 1</FONT></B><BR><FONT face="Arial, Helvetica, sans-serif" size="-2">Enter your 
          full postcode: <BR>
          </FONT> 
          <INPUT type="TEXT" size="10" value="" name="postcode">
          <BR>
          <BR>
          <INPUT type="SUBMIT" value="Next -&gt;&gt;"></FORM>


		  
        <P align="LEFT"><IMG src="images/BlkPixel.gif" width="25" height="3"><IMG src="images/ClrPixel.gif" width="1" height="1"><IMG src="images/ClrPixel.gif" width="15" height="3"><IMG src="images/BlkPixel.gif" width="25" height="3"><IMG src="images/ClrPixel.gif" width="1" height="1"><IMG src="images/ClrPixel.gif" width="15" height="3"><IMG src="images/BlkPixel.gif" width="25" height="3"><IMG src="images/ClrPixel.gif" width="1" height="1"><IMG src="images/ClrPixel.gif" width="15" height="3"><IMG src="images/BlkPixel.gif" width="20" height="3"></P>

        <P align="LEFT"><B><FONT face="Arial, Helvetica, sans-serif" size="+1">@</FONT><FONT face="Arial, Helvetica, sans-serif" size="-1">doption Explained</FONT></B></P>
        <P align="LEFT"><FONT face="Arial, Helvetica, sans-serif" size="-2">- 
          Mention <B><I>'encryption'</I></B> to your average MP and eyes will <B><I>glaze</I></B> and lower lips <B><I>tremble</I></B></FONT></P>

        <P align="LEFT"><FONT face="Arial, Helvetica, sans-serif" size="-2">- 
          They need <B><I>help</I></B>. They need @dopting by someone <B><I>(YOU! YOU!)</I></B> who can help them understand.</FONT></P>
        <P align="LEFT"><FONT face="Arial, Helvetica, sans-serif" size="-2">- 
          Don't worry. It's not going to be a hassle. <B><I>Trust us.</I></B> We're as lazy 
          as you are. Lazier, probably.</FONT></P>
        <P align="LEFT"><FONT face="Arial, Helvetica, sans-serif" size="-2">- 
          Once you've signed up you'll get a <B><I>personalised @doption certificate</I></B> to put on your site. At the very least, it'll be something to show your grandchildren.</FONT></P>

		  
		          <P align="LEFT"><IMG src="images/BlkPixel.gif" width="25" height="3"><IMG src="images/ClrPixel.gif" width="1" height="1"><IMG src="images/ClrPixel.gif" width="15" height="3"><IMG src="images/BlkPixel.gif" width="25" height="3"><IMG src="images/ClrPixel.gif" width="1" height="1"><IMG src="images/ClrPixel.gif" width="15" height="3"><IMG src="images/BlkPixel.gif" width="25" height="3"><IMG src="images/ClrPixel.gif" width="1" height="1"><IMG src="images/ClrPixel.gif" width="15" height="3"><IMG src="images/BlkPixel.gif" width="20" height="3"><P>
<? include("linkblock.html"); ?> 
    </TD>
  </TR>
  <TR> 
    <TD><IMG src="images/ClrPixel.gif" width="30" height="5"></TD>
    <TD><IMG src="images/ClrPixel.gif" width="400" height="5"></TD>
    <TD><IMG src="images/ClrPixel.gif" width="20" height="5"></TD>
    <TD><IMG src="images/ClrPixel.gif" width="150" height="5"></TD>
  </TR>
</TABLE>
<P> </P>
</BODY>
</HTML>






