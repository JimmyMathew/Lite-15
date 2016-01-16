<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lite</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
</head>

<body style="background-image:url(images/loginwood.png);">
<?php
$name=$_GET["login"];
if($name == "failure"){
print "<script type=\"text/javascript\">"; 
print "alert('You have entered a wrong Username/Password/Event')"; 
print "</script>";  
};

?>
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="middle"><form name="form1" method="post" action="checklogin.php"><table width="388" border="0" class="logintable" cellspacing="0" cellpadding="20">
      <tr>
        <td colspan="2" align="center" class="texts"><img src="images/lite15logo.png" width="328" height="218"></td>
        </tr>
      <tr>
        <td width="136" class="texts">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username</td>
        <td width="210">&nbsp;&nbsp;&nbsp;&nbsp;
          <input name="myusername" type="text" class="textfields" id="myusername" size="15"></td>
      </tr>
      <tr>
        <td class="texts">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;          <input name="mypassword" type="password" class="textfields" id="mypassword" size="15"></td>
      </tr>
      
	  <tr>
	    <td class="texts">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Event/Type</td>
	    <td>&nbsp;&nbsp;&nbsp;&nbsp;	      <?php
echo '<select name="type">
  <option value="">Select...</option>
  <option value="Web Design">Web Designing</option>
  <option value="Quiz">Quiz</option>
  <option value="Reverse Coding">Reverse Coding</option>
<option value="Software Marketing">Software Marketing</option>
 <option value="Administrator">Administrator</option>
  <option value="Registration">Registration</option>
  <option value="Documentation">Documentation</option>
  <option value="Staff">Staff</option>
 </select>';
 ?></td>
	    </tr>
	  <tr>
	    <td colspan="2" align="center" class="texts"><input name="button" type="submit" class="button" id="button" value="Submit"></td>
	    </tr>
        
    </table></form></td>
  </tr>
</table>
</body>
</html>
