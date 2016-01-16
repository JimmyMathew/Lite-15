<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lite</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
</head>

<body style="background-image:url(images/loginbg.png);">

<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="middle"><form name="form1" method="post" action="checklogin.php"><table width="388" border="0" class="logintable" cellspacing="0" cellpadding="20">
      <tr>
        <td height="304" colspan="2" align="center" class="texts"><img src="images/lite15logo.png" width="328" height="218"></td>
        </tr>
     
	  <tr>
	    <td colspan="2" align="center" class="texts"><?php 
	if(isset($_GET["notification"]))
	{
   $name=$_GET["notification"];
if($name == "true"){
print "<span class='notification'>Your Score has been updated successfully</span><br><br>";
}
}
?></td>
	    </tr>
        
    </table></form></td>
  </tr>
</table>
</body>
</html>
