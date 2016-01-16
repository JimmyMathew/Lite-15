<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LITE</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
<script>
function validateForm() {
    var a = document.forms["college"]["name"].value;
	var b = document.forms["college"]["add1"].value;
	var c = document.forms["college"]["add2"].value;
	var d = document.forms["college"]["city"].value;
	var e = document.forms["college"]["pin"].value;
	if (a == null || a == "") 
	{
        alert("Please enter the name of the college");
        return false;
    }
	if (b == null || b == "") 
	{
        alert("Please enter the address field 1");
        return false;
    }
   if (c == null || c == "") 
	{
        alert("Please enter the address field 2");
        return false;
    }
	if (d == null || d == "") 
	{
        alert("Please enter the city");
        return false;
    }
	if (e == null || e == "") 
	{
        alert("Please enter the pincode");
        return false;
    }
	
	}
	/*
function AllowAlphabet()
{
if (!member.nametxt.value.match(/^[a-zA-Z\s-, ]+$/) && member.nametxt.value !="")
{
member.nametxt.value="";
member.nametxt.focus();
alert("Please enter only alphabets");
}
}*/
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
function valtxt(obj) 
       {
        str="0123456789-"
        l=obj.value.length;
        for(i=0;i<=l;i++)
        {
         if(str.indexOf(obj.value.charAt(i))==-1)
         {
          alert("Invlid pin number");
          obj.value="";
          obj.focus();
          return false;
         }
        }
        return true;
       }
	   </SCRIPT>
</head>
<body>
<form action="insert.php?page=college" method="post" enctype="multipart/form-data"
name="college" id="college" onSubmit="return validateForm()">
<table class="mainpage" align="center" width="100%"  height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" height="139"><?php include 'head.php'; ?></td>
  </tr>
  <tr>
    <td align="center" valign="middle">
    <?php 
   $name=$_GET["notification"];
  
if($name == "true"){
print "<span class='notification'>New college has been added</span><br><br>";
}

?>


<table width="300" border="0" cellpadding="10" cellspacing="0" class="formborders">
      <tr>
        <td colspan="2" class="formhead">Expected Colleges</td>
      </tr>
      
   <tr>
        <td class="formtext">Name</td>
        <td><input type="text" name="name" id="name"></td>
      </tr>
      <tr>
	  <tr>
        <td class="formtext">Address 1</td>
        <td><input type="text" name="add1" id="add1"></td>
      </tr>
      <tr>
	  <tr>
        <td class="formtext">Address 2</td>
        <td><input type="text" name="add2" id="add2"></td>
      </tr>
      <tr>
	   <tr>
        <td class="formtext">City</td>
        <td><input type="text" name="city" id="city"></td>
      </tr
	  <tr>
        <td width="81" class="formtext">Pin</td>
        <td width="179"><input type="text" name="pin" id="pin" onKeyUp="return valtxt(this)"/></td>
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