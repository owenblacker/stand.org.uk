<html>
<head>
<title>Adopt An MP - Unadopted MPs Table</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="Description" content="Adopt an MP seeks to promote safe e-commerce in the UK by helping net users to educate MPs about encryption and digital signatures.">
<meta name="Keywords" content="Adopt an MP,@dopt an MP,adopt MP,STAND,Encryption,Digital Signatures,crypto policy,crypto,escrow,key escrow,UK Government,Government,Parliament,public key encryption,Millenium Bug and E-Commerce Bill,Secure Electronic Commerce Bill, Electronic Commerce Bill, Wassenaar,Trusted Third Party,Trusted Third Parties,TTP,DTI,Department of Trade and Industry,Barbara Roche,Labour Party,search for MP by postcode,MI5,security services,backdoor key,trapdoor key,Entrust,Verisign,PGP,Hickson,Pride,GCHQ,adopt your MP, adopt my MP,lobby MP,lobby my MP,lobby your MP,lobby an MP">
</head>

<body bgcolor="#000000">
<!--Begin Tracker Script-->
<script><!--
an=navigator.appName;sr='http://x3.extreme-dm.com/';srw="na";srb="na";d=document;r=41;function pr(n) {
d.write("<img src=\""+sr+"n\/?tag=stand&p=http%3A%2F%2Fwww.stand.org.uk%2Fpm_reply.php3&j=y&srw="+srw+"&srb="+srb+"&l="+escape(d.referrer)+"&rs="+r+"\" height=1 width=1>");}//-->
</script><script language="javascript1.2"><!--
s=screen;srw=s.width;an!="Netscape"?srb=s.colorDepth:srb=s.pixelDepth//-->
</script><script><!--
pr()//-->
</script><noscript><img src=http://x3.extreme-dm.com/z/?tag=stand&p=http%3A%2F%2Fwww.stand.org.uk%2Fpm_reply.php3&j=n height=1 width=1></noscript>
<!--End Tracker Script-->
<center>

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
    <td bgcolor="#FFFFFF" valign="TOP"><img src="images/ClrPixel.gif" width="30" height="3"></td>
    <td bgcolor="#FFFFFF" valign="TOP"> 
     
<!--start main content column-->


<font face="arial, helvetica" size="+1"><b>

 Unadopted MPs </FONT></b><BR><BR>
<font face="arial, helvetica" size="-1">
Here's the list of currently unloved MPs. Know anyone who lives in one of their constituencies who might be able to help them out? Please email your mates and tell them about <A HREF="/">www.stand.org.uk</A>.<BR>
<BR>
</FONT>


<?

include "config.php3";

$q = $db_stand->query("select mp_name, region, count(*) as ct from volunteers group by mp_name, region order by ct desc");

?>
<table border=0>
<font face="arial, helvetica" size="-1"><b>
<tr>
	 <th>MP name</th>  <th>Constituency</th><th>Adopters</th>
</tr>
<?
for($i=0;$i<$q->rows;$i++) {
	$adopted[$region] = TRUE;
	$q2 = $db_ums->query("select name from MoPNames where region='" . $q->field($i,"region") . "'");
	echo "<tr>";
	echo "\t<td><font face=arial, helvetica size=-1>" . $q->field($i,"mp_name") . "</FONT></td>\n";
	echo "\t<td><font face=arial, helvetica size=-1>" . $q2->field(0,"name") . "</FONT></td>\n";
	echo "\t<td><font face=arial, helvetica size=-1>" . $q->field($i,"ct") . "</FONT></td>\n";
	echo "</tr>";
}

$q = $db_ums->query("select MoPData.region, MoPData.mp_name, MoPNames.name from MoPNames, MoPData where MoPNames.region = MoPData.region");
for($i=0;$i<$q->rows;$i++) {
	if(!$adopted[$q->field($i,"MoPData.region")]) {
		echo "<tr>";
		echo "\t<td><font face=arial, helvetica size=-1>" . $q->field($i,"mp_name") . "</td>\n";
		echo "\t<td><font face=arial, helvetica size=-1>" . $q->field($i,"name") . "</td>\n";
		echo "\t<td><font face=arial, helvetica size=-1>0</td>\n";
		echo "</FONT></tr>\n";
	}
}
?>
</B></FONT>

</table>

<!--end main content column-->

      </td>
    <td bgcolor="#FFCC00" valign="TOP" halign="left"><img src="images/BlkPixel.gif" width="3" height="800"> </td>
    <td bgcolor="#FFCC00" valign="TOP"> <img src="images/ClrPixel.gif" width="150" height="3"><BR><BR>
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
