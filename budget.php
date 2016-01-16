<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LITE</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
<script>
function validateForm() {
    var a = document.forms["budget"]["amt"].value;
	
	if (a == null || a == "") 
	{
        alert("Please enter the budget");
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
          alert("Alphabets are not allowed");
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
<form action="update.php?page=budget" method="post" enctype="multipart/form-data"
name="budget" id="budget" onSubmit="return validateForm()">
<table class="mainpage" align="center" width="100%"  height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" height="139"><?php include 'head.php'; ?></td>
  </tr>
  <tr>
    <td align="center" valign="middle">
    <?php 
   $name=$_GET["notification"];
  
if($name == "true"){
print "<span class='notification'>Budget has been added. You can start enter the expenses</span><br><br>";
}

?>
<table width="300" border="0" cellpadding="10" cellspacing="0" class="formborders">
      <tr>
        <td colspan="2" class="formhead">Add Budget</td>
      </tr>
      
   <tr>
        <td class="formtext">Amount</td>
        <td><input type="text" name="amt" id="amt" onKeyUp="return valtxt(this)"></td>
      </tr>
      <tr>
        <td class="formtext">&nbsp;</td>
        <td><input  name="upload" id="upload" type="submit" class="button" value="Add"></td>
      </tr>
    </table></td>
  </tr>
 

</form>


</body>
</html>