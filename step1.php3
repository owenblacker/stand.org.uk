<? include "config.php3"; ?>
<html>
<head>
<title>Adopt An MP - Homepage</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="Description" content="Adopt an MP seeks to promote safe e-commerce in the UK by helping net users to educate MPs about encryption and digital signatures.">
<meta name="Keywords" content="Adopt an MP,@dopt an MP,adopt MP,STAND,Encryption,Digital Signatures,crypto policy,crypto,escrow,key escrow,UK Government,Government,Parliament,public key encryption,Millenium Bug and E-Commerce Bill,Secure Electronic Commerce Bill, Electronic Commerce Bill, Wassenaar,Trusted Third Party,Trusted Third Parties,TTP,DTI,Department of Trade and Industry,Barbara Roche,Labour Party,search for MP by postcode,MI5,security services,backdoor key,trapdoor key,Entrust,Verisign,PGP,Hickson,Pride,GCHQ,adopt your MP, adopt my MP,lobby MP,lobby my MP,lobby your MP,lobby an MP">
</head>

<body bgcolor="#000000">

<center>

<table border="0" width="600" cellspacing="0" cellpadding="0" align="CENTER">
  <tr valign="MIDDLE" height="80" bgcolor="#A997DF"> 
    <td><img src="images/ClrPixel.gif" width="30" height="70"></td>
    <td valign="MIDDLE" colspan="3"><BR><font face="Arial, Helvetica, sans-serif" size="+4"><b>STAND</font><font face="Arial, Helvetica, sans-serif" size="+1">.ORG.UK</font></B> <img src="images/ClrPixel.gif" width="100" height="1"><font face="Arial, Helvetica, sans-serif" size="+5">@</font><font face="Arial, Helvetica, sans-serif" size="+3">dopt
      an MP</font><br><font face="Arial, Helvetica, sans-serif" size="-2"><B>CAMPAIGNING FOR SAFE E-COMMERCE LEGISLATION</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		       <?

$q = $db_stand->query("select count(*) from volunteers");
$volunteers = $q->field(0,"count(*)");

$q = $db_stand->query("select distinct region from volunteers");
$mps = $q->rows;

/* Here's some bad HTML: */

?>
<font face="Arial, Helvetica, sans-serif" size="-2"><B></b>TO DATE <? echo $mps ?> MPs ADOPTED BY <? echo $volunteers ?> ADOPTERS</b></font><BR></td>
  </tr>
  
    <tr height="3">
<td colspan=4 bgcolour="#000000"><img src="images/BlkPixel.gif" width="600" height="3"></td>
  </tr>
  <tr> 
    <td bgcolor="#FFFFFF" valign="TOP"><img src="images/ClrPixel.gif" width="30" height="3"></td>
    <td bgcolor="#FFFFFF" valign="TOP"> 
<A NAME="top">
<br><b><font face="Arial, Helvetica, sans-serif"><font size=-1>Update! latest info: 02/03/2000- <A HREF="/index.php3">Click Here.</A></font></font></b>
<p><font face="Arial, Helvetica, sans-serif"><font size=-1>

</font>
<br><b><font face="Arial, Helvetica, sans-serif"><font size=-1>Hello.&nbsp;</font></font></b>
<p><font face="Arial, Helvetica, sans-serif"><font size=-1>As you might
know, the British Government plans to pass legislation to control how data
is encrypted on the Net.&nbsp;</font></font>
<p><b><font face="Arial, Helvetica, sans-serif"><font size=-1>We're a bit
worried about this.&nbsp;</font></font></b>
<p><font face="Arial, Helvetica, sans-serif"><font size=-1>From what we've
been able to find out, the proposed law will require any government-approved
encryption service to store copies of your private encryption key.</font></font><b><font face="Arial, Helvetica, sans-serif"><font size=-1></font></font></b>
<p><b><font face="Arial, Helvetica, sans-serif"><font size=-1>We think
that's a bad idea. Why?</font></font></b>
<ul>
<li>
<font face="Arial, Helvetica, sans-serif"><font size=-1>It's <i>bad</i>
for e-commerce. | </font><font size=-2><a href="#more1">More</a></font></font></li>

<li>
<font face="Arial, Helvetica, sans-serif"><font size=-1>It'll <i>cost</i>
British jobs, and drive business&nbsp;</font></font></li>

<br><font face="Arial, Helvetica, sans-serif"><font size=-1>overseas. |
</font><font size=-2><a href="#more2">More</a></font></font>
<li>
<font face="Arial, Helvetica, sans-serif"><font size=-1>It <i>won't</i>
catch a single criminal. | </font><font size=-2><a href="#more3">More</a></font></font></li>

<li>
<font face="Arial, Helvetica, sans-serif"><font size=-1>On the nod of a
police inspector, your email&nbsp;</font></font></li>

<br><font face="Arial, Helvetica, sans-serif"><font size=-1>could be <i>monitored.</i>
| </font><font size=-2><a href="#more4">More</a></font></font>
<li>
<font face="Arial, Helvetica, sans-serif"><font size=-1>If the police can
monitor your email, so can<i> criminals.</i> | </font><font size=-2><a href="#more5">More</a></font></font></li>
</ul>

<p><b><font face="Arial, Helvetica, sans-serif"><font size=-1>We think
you can help.</font></font></b><p>

<!--
<font face="Arial, Helvetica, sans-serif"><font size=-1>Like the cheerful
citizens we are, we tried e-mailing the Prime Minister to tell him that
this was a bad idea.</font></font><font face="Arial, Helvetica, sans-serif"><font size=-1></font></font>
<p><font face="Arial, Helvetica, sans-serif"><font size=-1>Strangely, that
didn't work (here's his <a href="http://stand.liberty.org.uk/pm_reply.php3">reply</a>).&nbsp;</font></font>
-->

<p><font face="Arial, Helvetica, sans-serif"><font size=-1>We're not sure,
but we suspect that our politicians - for all their enthusiasm about this
<i>wonderfully </i>exciting Internet thing - <A HREF="http://www.stand.org.uk/pm_reply.php3">don't really understand it
at all</a>. We think they don't know what a huge mistake they're making.</font></font>
<p><font face="Arial, Helvetica, sans-serif"><font size=-1>We feel sure
that, if they heard about how dangerous this new law is, they'd never want
to pass it in this current form.</font></font>
<p><font face="Arial, Helvetica, sans-serif"><font size=-1>Could you help?
Yes! You can @dopt your local MP, and educate him/her before it's too
late. The @doption form is at the top of the orange right hand column.</font></font>
<p><img SRC="images/BlkPixel.gif" height=3 width=400>
<p><b><font face="Arial, Helvetica, sans-serif"><font size=-1>WHY the Government's
crypto proposal is A Bad Thing:</font></font></b>
<br><a NAME="more1"></a>
<p><b><font face="Arial, Helvetica, sans-serif"><font size=-1>It's bad
for e-commerce. | </font><font size=-2><a href="#top">Top</a></font></font></b><font face="Arial, Helvetica, sans-serif"><font size=-1></font></font>
<p><font face="Arial, Helvetica, sans-serif"><font size=-1>It will add
billions to the cost of doing business online, and take months - even years
- to implement.</font></font><font face="Arial, Helvetica, sans-serif"><font size=-1></font></font>
<!--
<p><font face="Arial, Helvetica, sans-serif"><font size=-1>People won't
trust a system where they they will have to gives a back door key to their
e-mail to a government-appointed stranger.&nbsp;</font></font><font face="Arial, Helvetica, sans-serif"><font size=-1></font></font>
-->

<p><font face="Arial, Helvetica, sans-serif"><font size=-1>People won't
trust a system which gives a government-appointed stranger a back-door key to their
e-mail.&nbsp;</font></font><font face="Arial, Helvetica, sans-serif"><font size=-1></font></font>

<p><font face="Arial, Helvetica, sans-serif"><font size=-1>Overseas consumers
and businesses won't want to trade with us. They won't want to give away
the keys to their data, either.</font></font><font face="Arial, Helvetica, sans-serif"><font size=-1></font></font>
<p><a NAME="more2"></a>
<!--
<p><b><font face="Arial, Helvetica, sans-serif"><font size=-1>It'll cost
British jobs, driving business overseas. | </font><font size=-2><a href="#top">Top</a></font></font></b>
<p><font face="Arial, Helvetica, sans-serif"><font size=-1>On the Net,
it doesn't matter (much) where you'll located.&nbsp; Businesses will move
away from UK to countries that are being more sensible on this issue -
nations like Ireland, Canada, and Finland (you know, the usual international
pariahs).</font></font><font face="Arial, Helvetica, sans-serif"><font size=-1></font></font>
-->

<p><b><font face="Arial, Helvetica, sans-serif"><font size=-1>It'll cost
British jobs, by driving business overseas. | </font><font size=-2><a href="#top">Top</a></font></font></b>
<p><font face="Arial, Helvetica, sans-serif"><font size=-1>On the Net,
it doesn't matter (much) where you're located.&nbsp; Businesses will move
away from UK to countries with more sensible approaches to this issue -
nations like Ireland, Canada, and Finland (you know, the usual international
pariahs).</font></font><font face="Arial, Helvetica, sans-serif"><font size=-1></font></font>


<p><font face="Arial, Helvetica, sans-serif"><font size=-1>There is near-zero
enthusiasm for the government's proposals amongst big business. Anywhere. Even the <A HREF="http://www.zdnet.co.uk/news/1998/48/ns-6292.html" TARGET="_blank">CBI</A>.</font></font>
<br><a NAME="more3"></a>
<p><font face="Arial, Helvetica, sans-serif"><font size=-1><b>It won't
catch a single criminal.</b> | </font><font size=-2><a href="#top">Top</a></font></font><font face="Arial, Helvetica, sans-serif"><font size=-1></font></font>
<p><font face="Arial, Helvetica, sans-serif"><font size=-1>Criminals won't
use the government's system. It's <i>trivially</i> easy to bypass the proposed
controls if you're planning on breaking the law.</font></font>
<p><font face="Arial, Helvetica, sans-serif"><font size=-1>Despite this,
we've yet to hear of one example of an investigation which has been hampered
by an inability to break encrypted codes. (if you know of one, <a href="mailto:stand@stand.org.uk">please
tell us</a>!)</font></font>
<br><a NAME="more4"></a>
<p><b><font face="Arial, Helvetica, sans-serif"><font size=-1>On the nod
of a police inspector, all your email&nbsp;</font></font></b>
<br><b><font face="Arial, Helvetica, sans-serif"><font size=-1>could be
monitored. | </font><font size=-2><a href="#top">Top</a></font></font></b>
<p><font face="Arial, Helvetica, sans-serif"><font size=-1>And you'd never
be allowed to know.&nbsp;</font></font><font face="Arial, Helvetica, sans-serif"><font size=-1></font></font>
<p><font face="Arial, Helvetica, sans-serif"><font size=-1>Currently, telephone
taps require the signature of the Home Secretary. The new law will only
require the permission of a local police inspector for the keys to all
your present - and past - communications to be released.&nbsp;</font></font><font face="Arial, Helvetica, sans-serif"><font size=-1></font></font>
<p><font face="Arial, Helvetica, sans-serif"><font size=-1>Under the present
law, all those being monitored are informed after the surveillance period
has ended and/or enquiries has been concluded. Under the new law, you won't
be told.</font></font><font face="Arial, Helvetica, sans-serif"><font size=-1></font></font>
<p><font face="Arial, Helvetica, sans-serif"><font size=-1>Indeed, it will
be <i>illegal</i> to tell you that your email has been read.&nbsp;</font></font><font face="Arial, Helvetica, sans-serif"><font size=-1></font></font>
<p><a NAME="more5"></a>
<p><b><font face="Arial, Helvetica, sans-serif"><font size=-1>If the police
can monitor your email, so can criminals.</font></font> <font face="Arial, Helvetica, sans-serif"><font size=-1>|
</font><font size=-2><a href="#top">Top</a></font></font></b>
<p><font face="Arial, Helvetica, sans-serif"><font size=-1>Modern encryption
systems give you the only copy of the key to your data. It's up to you
to keep it secret.</font></font><font face="Arial, Helvetica, sans-serif"><font size=-1></font></font>
<p><font face="Arial, Helvetica, sans-serif"><font size=-1>The government's
proposals will place copies of these keys in a few, centralised locations.
There'll be no way of guaranteeing the safety of these keys, even though
they will unlock millions of pounds worth of&nbsp; commercial and personal
data.</font></font>
      </td>
    <td bgcolor="#FFCC00" valign="TOP" halign="left"><img src="images/BlkPixel.gif" width="3" height="1800"> </td>
    <td bgcolor="#FFCC00" valign="TOP"> <img src="images/ClrPixel.gif" width="150" height="3"><BR>
      <font face="Arial, Helvetica, sans-serif" size="+3"><b>@</font><font face="Arial, Helvetica, sans-serif" size="+1">dopt An MP<br>
      </b></font> 

 <font face="Arial, Helvetica, sans-serif" size="-2">This Issue Is Hard<BR>Help Your MP Understand </font><BR>
      <form method="post" action="step2.php3">
          </font><b><font face="Arial, Helvetica, sans-serif" size="+1">Step 1</font></b><br><font face="Arial, Helvetica, sans-serif" size="-2">Enter your 
          full postcode: <BR>
          </font> 
          <input type="TEXT" size="10" value="" name="postcode">
          <br>
          <br>
          <input type="SUBMIT" value="Next -&gt;&gt;"></form>


		  
        <p align="LEFT"><img src="images/BlkPixel.gif" width="25" height="3"><img src="images/ClrPixel.gif" width="1" height="1"><img src="images/ClrPixel.gif" width="15" height="3"><img src="images/BlkPixel.gif" width="25" height="3"><img src="images/ClrPixel.gif" width="1" height="1"><img src="images/ClrPixel.gif" width="15" height="3"><img src="images/BlkPixel.gif" width="25" height="3"><img src="images/ClrPixel.gif" width="1" height="1"><img src="images/ClrPixel.gif" width="15" height="3"><img src="images/BlkPixel.gif" width="20" height="3"></p>

        <p align="LEFT"><b><font face="Arial, Helvetica, sans-serif" size="+1">@</font><font face="Arial, Helvetica, sans-serif" size="-1">doption Explained</font></b></p>
        <p align="LEFT"><font face="Arial, Helvetica, sans-serif" size="-2">- 
          Mention <b><i>'encryption'</i></b> to your average MP and eyes will <b><i>glaze</i></b> and lower lips <b><i>tremble</i></b></font></p>

        <p align="LEFT"><font face="Arial, Helvetica, sans-serif" size="-2">- 
          They need <b><i>help</i></b>. They need @dopting by someone <b><i>(YOU! YOU!)</i></b> who can help them understand.</font></p>
        <p align="LEFT"><font face="Arial, Helvetica, sans-serif" size="-2">- 
          Don't worry. It's not going to be a hassle. <b><i>Trust us.</i></b> We're as lazy 
          as you are. Lazier, probably.</font></p>
        <p align="LEFT"><font face="Arial, Helvetica, sans-serif" size="-2">- 
          Once you've signed up you'll get a <b><i>personalised @doption certificate</i></b> to put on your site. At the very least, it'll be something to show your grandchildren.</font></p>

		  
		          <p align="LEFT"><img src="images/BlkPixel.gif" width="25" height="3"><img src="images/ClrPixel.gif" width="1" height="1"><img src="images/ClrPixel.gif" width="15" height="3"><img src="images/BlkPixel.gif" width="25" height="3"><img src="images/ClrPixel.gif" width="1" height="1"><img src="images/ClrPixel.gif" width="15" height="3"><img src="images/BlkPixel.gif" width="25" height="3"><img src="images/ClrPixel.gif" width="1" height="1"><img src="images/ClrPixel.gif" width="15" height="3"><img src="images/BlkPixel.gif" width="20" height="3"><p>
<!-- links section include -->
<? include("linkblock.html"); ?> 		
<!-- end-->  
  
    </td>
  </tr>
  <tr> 
    <td><img src="images/ClrPixel.gif" width="30" height="5"></td>
    <td><img src="images/ClrPixel.gif" width="400" height="5"></td>
    <td><img src="images/ClrPixel.gif" width="20" height="5"></td>
    <td><img src="images/ClrPixel.gif" width="150" height="5"></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
