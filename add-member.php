<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LITE</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
<script>
function validateForm() {
    var a = document.forms["member"]["nametxt"].value;
	var c = document.forms["member"]["type"].value;
	var d = document.forms["member"]["un"].value;
	var e = document.forms["member"]["pw"].value;
    if (a == null || a == "") 
	{
        alert("Please enter the name");
        return false;
    }
	if (c == null || c == "") 
	{
        alert("Please select the type");
        return false;
    }
   if (d == null || d == "") 
	{
        alert("Please enter a username");
        return false;
    }
	if (e == null || e == "") 
	{
        alert("Please enter a password");
        return false;
    }
	}
function AllowAlphabet()
{
if (!member.nametxt.value.match(/^[a-zA-Z\s-, ]+$/) && member.nametxt.value !="")
{
member.nametxt.value="";
member.nametxt.focus();
alert("Please enter only alphabets");
}
}
</script>
     <SCRIPT language=Javascript>
   /*    <!--
       function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : event.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
       //-->
*/
	   </SCRIPT>
</head>

<body>
<form action="insert.php?page=member" method="post" enctype="multipart/form-data"
name="member" id="member" onSubmit="return validateForm()">
<table class="mainpage" align="center" width="100%"  height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" height="139"><?php include 'head.php'; ?></td>
  </tr>
  <tr>
    <td align="center" valign="middle">
    <?php 
   $name=$_GET["notification"];
if($name == "true"){
print "<span class='notification'>New member has been added</span><br><br>";
}
?>
<table width="300" border="0" cellpadding="10" cellspacing="0" class="formborders">
      <tr>
        <td colspan="2" class="formhead">Add Member</td>
      </tr>
      <tr>
        <td width="81" class="formtext">Name</td>
        <td width="179"><input type="text" name="nametxt" id="nametxt" onKeyUp="AllowAlphabet()"></td>
      </tr>
      <tr>
        <td class="formtext">Type</td>
        <td><?php

 echo '<select name="type">
  <option value=""></option>
  <option value="Administrator">Administrator</option>
  <option value="Registration">Registration</option>
  <option value="Documentation">Documentation</option>
  <option value="Staff">Staff</option>
</select>';
 

?></td>
      </tr>
      <tr>
        <td class="formtext">Username</td>
        <td><input type="text" name="un" id="un"></td>
      </tr>
	  <tr>
        <td class="formtext">Password</td>
        <td><input type="text" name="pw" id="pw"></td>
      </tr>
      
      <tr>
        <td class="formtext">&nbsp;</td>
        <td><input  name="upload" id="upload" type="submit" class="button" value="Add"></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="20" class="footerline" valign="bottom"><?php include 'footer.php'; ?></td>
  </tr>
</table>
</form>
</body>
</html>