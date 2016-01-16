<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lite</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
<script>


function validateForm() {
    var a = document.forms["regform"]["nametxt"].value;
	var c = document.forms["regform"]["colltxt"].value;
	var d = document.forms["regform"]["email"].value;
	var e = document.forms["regform"]["mobile"].value;
	var f = document.forms["regform"]["event1"].value;
    if (a == null || a == "") 
	{
        alert("Please enter the name");
        return false;
    }
	if (c == null || c == "") 
	{
        alert("Please enter the college name");
        return false;
    }
   if (d == null || d == "") 
	{
        alert("Please enter the email address");
        return false;
    }
	if (e == null || e == "") 
	{
        alert("Please enter the mobile number");
        return false;
    }
	if (f == null || f == "") 
	{
        alert("Please select an event");
        return false;
    }
	
	}
	function valtxt(obj) 
       {
        str="0123456789-"
        l=obj.value.length;
        for(i=0;i<=l;i++)
        {
         if(str.indexOf(obj.value.charAt(i))==-1)
         {
          alert("Please enter valid mobile number");
          obj.value="";
          obj.focus();
          return false;
         }
        }
        return true;
       }
 </script>
 <script type="text/javascript">
function AllowAlphabet()
{
if (!regform.nametxt.value.match(/^[a-zA-Z\s-, ]+$/) && regform.nametxt.value !="")
{
regform.nametxt.value="";
regform.nametxt.focus();
alert("Please enter a valid name");
}
}
</script>
<script type="text/javascript">
function AllowAlphabetcol()
{
if (!regform.colltxt.value.match(/^[a-zA-Z\s-, ]+$/) && regform.colltxt.value !="")
{
regform.colltxt.value="";
regform.colltxt.focus();
alert("Please enter a vaid college name");
}
}

</script>
<script>

function ValidateEmail(inputText)  
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(inputText.value.match(mailformat))  
{  
document.regform.email.focus();  
return true;  
}  
else  
{  
alert("Please enter a valid email address");  
document.regform.email.focus();  
return false;  
}  
}  
</script>



    
</head>

<body>
<form action="insert.php?page=student" method="post" enctype="multipart/form-data" name="regform" id="regform" onSubmit="return validateForm()">
<table class="mainpage" align="center" width="100%"  height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" height="130"><?php include 'head.php'; ?></td>
  </tr>
  <tr>
    <td align="center" valign="middle">
 <?php 
if (isset($_GET['notification']))  
{
 $name=$_GET["notification"];
if($name == "true"){
print "<span class='notification'>New student has been registered</span><br><br>";
}
}
?>
<?php
echo"<br><br>";
?>
<table width="300" border="0" cellpadding="10" cellspacing="0" class="formborders">
      <tr>
        <td colspan="2" class="formhead">Add Student</td>
      </tr>
      <tr>
        <td width="81" class="formtext">Name</td>
        <td width="179"><input type="text" name="nametxt" id="nametxt" onKeyUp="AllowAlphabet()"></td>
      </tr>
      <tr>
        <td width="81" class="formtext">College</td>
        <td width="179"><input type="text" name="colltxt" id="colltxt" onKeyUp="AllowAlphabetcol()"></td>
      </tr>

 <tr>
        <td width="81" class="formtext">Email</td>
        <td width="179"><input type="text" name="email" id="email")"/></td>
      </tr>
	   <tr>
        <td width="81" class="formtext">Mobile</td>
        <td width="179"><input type="text" name="mobile" id="mobile" onKeyUp="return valtxt(this)"/></td>
      </tr>

      <tr>
<td class="formtext">Event1</td>
 <td>      
<?php
echo '<select name="event1">
  <option value=""></option>
  <option value="Web Design">Web Designing</option>
  <option value="Quiz">Quiz</option>
  <option value="Reverse Coding">Reverse Coding</option>
<option value="Software Marketing">Software Marketing</option>
<option value="Gaming">Gaming</option>
<option value="Mobile Application">Paper Presentation</option>
<option value="Mobile Application">Mobile Application</option>
<option value="Stress Interview">Stress Interview</option>
 </select>';
 ?>
</td>
      </tr>
	    <tr>
<td class="formtext">Event2</td>
 <td>      
<?php
echo '<select name="event2">
  <option value=""></option>
  <option value="Web Design">Web Designing</option>
  <option value="Quiz">Quiz</option>
  <option value="Reverse Coding">Reverse Coding</option>
<option value="Software Marketing">Software Marketing</option>
<option value="Gaming">Gaming</option>
<option value="Mobile Application">Paper Presentation</option>
<option value="Mobile Application">Mobile Application</option>
<option value="Stress Interview">Stress Interview</option>
 </select>';
 ?>
</td>
      </tr>
      
      <tr>
        <td class="formtext">&nbsp;</td>
        <td><input  name="button" id="button" type="submit" class="button" value="Add"  onClick="ValidateEmail(document.regform.email)" /></td>
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