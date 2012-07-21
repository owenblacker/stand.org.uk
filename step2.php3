<? include "config.php3"; ?>

<html>
<head>
<title>Adopt An MP - Enter Your Email Address</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="Description" content="Adopt an MP seeks to promote safe e-commerce in the UK by helping net users to educate MPs about encryption and digital signatures.">
<meta name="Keywords" content="Adopt an MP,@dopt an MP,adopt MP,STAND,Encryption,Digital Signatures,crypto policy,crypto,escrow,key escrow,UK Government,Government,Parliament,public key encryption,Millenium Bug and E-Commerce Bill,Secure Electronic Commerce Bill, Electronic Commerce Bill, Wassenaar,Trusted Third Party,Trusted Third Parties,TTP,DTI,Department of Trade and Industry,Barbara Roche,Labour Party,search for MP by postcode,MI5,security services,backdoor key,trapdoor key,Entrust,Verisign,PGP,Hickson,Pride,GCHQ,adopt your MP, adopt my MP,lobby MP,lobby my MP,lobby your MP,lobby an MP">
</head>

<body bgcolor="#000000">

<!--Begin Tracker Script-->
<script><!--
an=navigator.appName;sr='http://x3.extreme-dm.com/';srw="na";srb="na";d=document;r=41;function pr(n) {
d.write("<img src=\""+sr+"n\/?tag=stand&p=http%3A%2F%2Fwww.stand.org.uk%2Fstep2.php3&j=y&srw="+srw+"&srb="+srb+"&l="+escape(d.referrer)+"&rs="+r+"\" height=1 width=1>");}//-->
</script><script language="javascript1.2"><!--
s=screen;srw=s.width;an!="Netscape"?srb=s.colorDepth:srb=s.pixelDepth//-->
</script><script><!--
pr()//-->
</script><noscript><img src=http://x3.extreme-dm.com/z/?tag=stand&p=http%3A%2F%2Fwww.stand.org.uk%2Fstep2.php3&j=n height=1 width=1></noscript>
<!--End Tracker Script-->
<center>

<table border="0" width="600" cellspacing="0" cellpadding="0" align="CENTER">
  <tr valign="MIDDLE" height="80" bgcolor="#A997DF"> 
    <td><img src="images/ClrPixel.gif" width="30" height="70"></td>
    <td valign="MIDDLE" colspan="3"><BR><font face="Arial, Helvetica, sans-serif" size="+4"><b>STAND</font><font face="Arial, Helvetica, sans-serif" size="+1">.ORG.UK</font></B> <img src="images/ClrPixel.gif" width="100" height="1"><font face="Arial, Helvetica, sans-serif" size="+5">@</font><font face="Arial, Helvetica, sans-serif" size="+3">dopt
      an MP</font><br><font face="Arial, Helvetica, sans-serif" size="-2"><B>CAMPAIGNING FOR SAFE E-COMMERCE LEGISLATION</b><br></td>
  </tr>
  
  <tr height="3">
<td colspan=4 bgcolour="#000000"><img src="images/BlkPixel.gif" width="600" height="3"></td>
  </tr>
  
  <tr> 
    <td bgcolor="#FFFFFF" valign="TOP"><img src="images/ClrPixel.gif" width="30" height="3"></td><td bgcolor="#FFFFFF" valign="TOP"><!--<img src="images/BlkPixel.gif" width="400" height="3">-->
<?
$cooked_postcode = ereg_replace(" ",".",$postcode);
$q = $db_ums->query("select upmystreet.MoPData.*,upmystreet.MoPNames.name from stand.postcodes,upmystreet.MoPNames,upmystreet.MoPData where stand.postcodes.postcode = '$cooked_postcode' and stand.postcodes.constituency_name = upmystreet.MoPNames.name and upmystreet.MoPNames.region = upmystreet.MoPData.region");

if($q->rows != 1) {
?>

<font face="Arial, Helvetica, sans-serif"><font size=-1>

<br>
<P><B>VROOOOOOT!! VROOOOOT! That sho' ain't no postcode I know about... </B></P>
<P>Remember to put a space between the two halves of the postcode (as in our example).</P>
<P>You'll also have to type in your full postcode - not just the first few lettrs. Sorry.</P>
</font></font>
   <td bgcolor="#FFCC00" valign="TOP" halign="left"><img src="images/BlkPixel.gif" width="3" height="2000"> </td>
    <td bgcolor="#FFCC00" valign="TOP"> <img src="images/ClrPixel.gif" width="150" height="3"><BR>
      <font face="Arial, Helvetica, sans-serif" size="+3"><b>@</font><font face="Arial, Helvetica, sans-serif" size="+1">dopt An MP<br>
      </b></font> 

 <font face="Arial, Helvetica, sans-serif" size="-2">This Issue Is Hard<BR>Help Your MP To Understand </font><BR>
      <form method="post" action="step2.php3">
          </font><b><font face="Arial, Helvetica, sans-serif" size="+1">Step 1</font></b><br><font face="Arial, Helvetica, sans-serif" size="-2">Enter your 
          full postcode: <BR>
          </font> 
          <input type="TEXT" size="10" value="N5 2PL" name="postcode">
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

<?
exit;
}
$constituency = $q->field(0,"MoPNames.name");
$mp_name = $q->field(0,"MoPData.mp_name");
$party = $q->field(0,"MoPData.party_link");
$mp_email = $q->field(0,"MoPData.email");
$interests = $q->field(0,"MoPData.interests");

?>

      <br><font face="Arial, Helvetica, sans-serif"><b>About Your MP</b></font></p>
      <p><font face="Arial, Helvetica, sans-serif" size="-1"><b>The MP for <? echo $postcode ?> is <? echo $mp_name ?>.</font></b></p>
      <UL>
        <LI> <font face="Arial, Helvetica, sans-serif" size="-1"><b>MP Name:</b> 
          <? echo $mp_name ?></font> 
        <LI> <font face="Arial, Helvetica, sans-serif" size="-1"><b>Constituency:</b> 
         <? echo $constituency ?></font> 
        <LI> <font face="Arial, Helvetica, sans-serif" size="-1"><b>Party</b>: 
         <? echo $party ?></font> 
      </UL>
      <p><font face="Arial, Helvetica, sans-serif" size="-1">


If you would like to @dopt <b><? echo $mp_name ?> MP</b>, just enter your email in
the box on the right and click 'Next'. It's that easy.
	  </font>
      </td>
    <td bgcolor="#FFCC00" valign="TOP" halign="left"><!--<img src="images/BlkPixel.gif" width="20" height="3">--><img src="images/BlkPixel.gif" width="3" height="800"></td>
    <td bgcolor="#FFCC00" valign="TOP"><BR>
      <font face="Arial, Helvetica, sans-serif" size="+3"><b>@</font><font face="Arial, Helvetica, sans-serif" size="+1">dopt An MP<br>
      </b></font> 
      <form method="post" action="step3.php3">
<input type="hidden" name="postcode" value="<? echo $postcode ?>"><input type="hidden" name="interests" value="<? echo $interests ?>">     <font face="Arial, Helvetica, sans-serif" size="+1"><b>Step 2</b></font> <br>
        <font face="Arial, Helvetica, sans-serif" size="-2"><b>Enter Your Email If You Wish To
          @dopt <? echo $mp_name ?> MP</b><br>
          </font>
<input type="hidden" name="postcode" value="<? echo $postcode ?>">
          <input type="TEXT" size="15" value="" name="email">
          <br>
          <br>
          <input type="SUBMIT" value="Next -&gt;&gt;"></form>

		          <p align="LEFT"><img src="images/BlkPixel.gif" width="25" height="3"><img src="images/ClrPixel.gif" width="1" height="1"><img src="images/ClrPixel.gif" width="15" height="3"><img src="images/BlkPixel.gif" width="25" height="3"><img src="images/ClrPixel.gif" width="1" height="1"><img src="images/ClrPixel.gif" width="15" height="3"><img src="images/BlkPixel.gif" width="25" height="3"><img src="images/ClrPixel.gif" width="1" height="1"><img src="images/ClrPixel.gif" width="15" height="3"><img src="images/BlkPixel.gif" width="20" height="3"><p>
<font face="Arial, Helvetica, sans-serif" size="-1"><B>
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

<FORM name="hansard" method="POST"
action="http://www.parliament.the-stationery-office.co.uk/cgi-bin/tso_fx"
target="_blank">
<INPUT name="P.S" type="hidden" value="<? echo $mp_name ?>">
<INPUT TYPE=hidden NAME=DB VALUE="tso">
</FORM>

</body>
</html>
