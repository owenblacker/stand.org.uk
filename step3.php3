<? include "config.php3"; ?>

<html>
<head>
<title>Adopt An MP - Collect Your Personalised @doption Certificate</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="Description" content="Adopt an MP seeks to promote safe e-commerce in the UK by helping net users to educate MPs about encryption and digital signatures.">
<meta name="Keywords" content="Adopt an MP,@dopt an MP,adopt MP,STAND,Encryption,Digital Signatures,crypto policy,crypto,escrow,key escrow,UK Government,Government,Parliament,public key encryption,Millennium Bug and E-Commerce Bill,Secure Electronic Commerce Bill, Electronic Commerce Bill, Wassenaar,Trusted Third Party,Trusted Third Parties,TTP,DTI,Department of Trade and Industry,Barbara Roche,Labour Party,search for MP by postcode,MI5,security services,backdoor key,trapdoor key,Entrust,Verisign,PGP,Hickson,Pride,GCHQ,adopt your MP, adopt my MP,lobby MP,lobby my MP,lobby your MP,lobby an MP">
</head>

<body bgcolor="#000000">

<!--begin Tracker Script-->
<script><!--
an=navigator.appName;sr='http://x3.extreme-dm.com/';srw="na";srb="na";d=document;r=41;function pr(n) {
d.write("<img src=\""+sr+"n\/?tag=stand&p=http%3A%2F%2Fwww.stand.org.uk%2Fstep3.php3&j=y&srw="+srw+"&srb="+srb+"&l="+escape(d.referrer)+"&rs="+r+"\" height=1 width=1>");}//-->
</script><script language="javascript1.2"><!--
s=screen;srw=s.width;an!="Netscape"?srb=s.colorDepth:srb=s.pixelDepth//-->
</script><script><!--
pr()//-->
</script><noscript><img src=http://x3.extreme-dm.com/z/?tag=stand&p=http%3A%2F%2Fwww.stand.org.uk%2Fstep3.php3&j=n height=1 width=1></noscript>
<!--End Tracker Script-->
<center>



<?
$cooked_postcode = ereg_replace(" ",".",$postcode);
$q = $db_ums->query("select upmystreet.MoPData.*,upmystreet.MoPNames.name from stand.postcodes,upmystreet.MoPNames,upmystreet.MoPData where stand.postcodes.postcode = '$cooked_postcode' and stand.postcodes.constituency_name = upmystreet.MoPNames.name and upmystreet.MoPNames.region = upmystreet.MoPData.region");

if($q->rows != 1) {
?>

<P>Vroot! Vroooot! No way hosemungo....</P>

<?
exit;
}
$constituency = $q->field(0,"MoPNames.name");
$region = $q->field(0,"MoPData.region");
$mp_name = $q->field(0,"MoPData.mp_name");
$party = $q->field(0,"MoPData.party_link");
$mp_email = $q->field(0,"MoPData.email");

$q = $db_stand->query("select id from volunteers where region='" . addslashes($region) . "' and email='" . addslashes($email) . "'");
if($q->rows>0) {
	$id = $q->field(0,"id");
	echo "<!--Using existing registration-->\n";
} else {
	$id = md5(uniqid($postcode . $email));
	$db_stand->execute("insert into volunteers (id,postcode,region,email,mp_name,submitted,http_ip) values ('$id','" . addslashes($postcode) ."','" . addslashes($region) . "','" . addslashes($email) . "','" . addslashes($mp_name) . "',NOW(),'" . addslashes($REMOTE_ADDR) . "')");
	echo "<!--Making new registration-->\n";
}

$q = $db_stand->query("select count(*) from volunteers where region = $region");
$coadoptees = $q->field(0,"count(*)");


?>
 

<table border="0" width="600" cellspacing="0" cellpadding="0" align="CENTER">
  <tr valign="MIDDLE" height="80" bgcolor="#A997DF"> 
    <td><img src="images/ClrPixel.gif" width="30" height="70"></td>
    <td valign="MIDDLE" colspan="3"><BR><font face="Arial, Helvetica, sans-serif" size="+4"><b>STAND</font><font face="Arial, Helvetica, sans-serif" size="+1">.ORG.UK</font></B> <img src="images/ClrPixel.gif" width="100" height="1"><font face="Arial, Helvetica, sans-serif" size="+5">@</font><font face="Arial, Helvetica, sans-serif" size="+3">dopt
      an MP</font><br><font face="Arial, Helvetica, sans-serif" size="-2"><B>CAMPAIGNING FOR SAFE E-COMMERCE LEGISLATION</b><br> </td>
  </tr>
        <tr height="3">
<td colspan=4 bgcolour="#000000"><img src="images/BlkPixel.gif" width="600" height="3"></td>
  </tr>  
  <tr> 
    <td bgcolor="#FFFFFF" valign="TOP"><img src="images/ClrPixel.gif" width="30" height="3"></td><td bgcolor="#FFFFFF" valign="TOP">
      <br><font face="Arial, Helvetica, sans-serif" size="+1"><b>CONGRATULATIONS <? echo $email ?> !</b></font></p>

      <p><b><font face="Arial, Helvetica, sans-serif" size="-1">You have successfully @dopted <? echo $mp_name ?> MP. <br>
<font face="Arial, Helvetica, sans-serif" size="-1">We'll be in touch soon to show you how you can start educating your MP with as few as two clicks.</font></b>
      <!-- <p><b><font face="Arial, Helvetica, sans-serif" size="-1">This MP has been @dopted by <? echo $coadoptees ?> individuals. </font><br> -->
      <UL COMPACT>
        <LI> <font face="Arial, Helvetica, sans-serif" size="-2"><b>MP Name:</b> 
          <? echo $mp_name ?></font> 
        <LI> <font face="Arial, Helvetica, sans-serif" size="-2"><b>Constituency:</b> 
         <? echo $constituency ?></font> 
        <LI> <font face="Arial, Helvetica, sans-serif" size="-2"><b>Party</b>: 
         <? echo $party ?></font> 
        <LI> <font face="Arial, Helvetica, sans-serif" size="-2"><b>Email:</b> 
          <? echo $mp_email ?></font> 
        <LI> <font face="Arial, Helvetica, sans-serif" size="-2"><b>More About This MP: 
          </b></font> <br>

          <font face="Arial, Helvetica, sans-serif" size="-2"><a href="<? echo $interests ?>" target="_blank">Entry in Register of Members' Interests</a></font><br>

          <font face="Arial, Helvetica, sans-serif" size="-2"><a href="javascript:document.hansard.submit()">Speeches in Parliament</a></font> 
      </UL>


<font face="Arial, Helvetica, sans-serif" size="-1"><B>Your Personalised @doption Certificate</b></font><p><CENTER>
<IMG SRC="certificate.php3?id=<? echo $id ?>"></CENTER><P>
<font face="Arial, Helvetica, sans-serif" size="-2">To put it on your website, use the following wee snippet of HTML:</font><P><FORM>
<textarea name="textfield" cols="35" rows="10" WRAP="PHYSICAL">&lt;A HREF="http://www.stand.org.uk/"&gt;
&lt;IMG HEIGHT=196 WIDTH=273 ALT="I've @dopted <? echo $mp_name ?>, MP for <? echo $constituency ?>!" SRC="http://www.stand.org.uk/certificate.php3?id=<? echo $id ?>" border="0"&gt;
&lt;/A&gt;</textarea></FORM><P>



      </td>
    <td bgcolor="#FFCC00" valign="TOP" halign="left"><img src="images/BlkPixel.gif" width="3" height="1000"></td>
    <td bgcolor="#FFCC00" valign="TOP"> <img src="images/ClrPixel.gif" width="150" height="3"><br><font face="Arial, Helvetica, sans-serif" size="+3"><b>@</font><font face="Arial, Helvetica, sans-serif" size="+1">dopt An MP<p>
      </b></font> 


      <font face="Arial, Helvetica, sans-serif" size="+1"><b>Step 3
      </b></font> 
      
        <br><font face="Arial, Helvetica, sans-serif" size="-2"><B>Put Your Personalised Adoption Certificate On Your Homepage!</b><p align="LEFT"><img src="images/BlkPixel.gif" width="25" height="3"><img src="images/ClrPixel.gif" width="1" height="1"><img src="images/ClrPixel.gif" width="15" height="3"><img src="images/BlkPixel.gif" width="25" height="3"><img src="images/ClrPixel.gif" width="1" height="1"><img src="images/ClrPixel.gif" width="15" height="3"><img src="images/BlkPixel.gif" width="25" height="3"><img src="images/ClrPixel.gif" width="1" height="1"><img src="images/ClrPixel.gif" width="15" height="3"><img src="images/BlkPixel.gif" width="20" height="3"></p>
   
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
<FORM name="hansard" method="POST"
action="http://www.parliament.the-stationery-office.co.uk/cgi-bin/tso_fx"
target="_blank">
<INPUT name="P.S" type="hidden" value="<? echo $mp_name ?>">
<INPUT TYPE=hidden NAME=DB VALUE="tso">
</FORM>

</body>
</html>
