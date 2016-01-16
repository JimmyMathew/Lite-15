<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LITE</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
<script>
function validateForm() {
    var a = document.forms["expense"]["date"].value;
	var c = document.forms["expense"]["exp"].value;
	var d = document.forms["expense"]["cost"].value;
	var e=document.forms["uploadImage"]["phototxt"].value;
	if (a == null || a == "") 
	{
        alert("Please select the date");
        return false;
    }
	if (c == null || c == "") 
	{
        alert("Please enter the expense");
        return false;
    }
   if (d == null || d == "") 
	{
        alert("Please enter the cost");
        return false;
    }
	 if (e == null || e == "") 
	{
        alert("Please upload the photo");
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
function valtxt(obj) 
       {
        str="0123456789-"
        l=obj.value.length;
        for(i=0;i<=l;i++)
        {
         if(str.indexOf(obj.value.charAt(i))==-1)
         {
          alert("Invlid amount");
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
<form action="insert.php?page=expense" method="post" enctype="multipart/form-data"
name="expense" id="expense" onSubmit="return validateForm()">
<table class="mainpage" align="center" width="100%"  height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" height="139"><?php include 'head.php'; ?></td>
  </tr>
  <tr>
    <td align="center" valign="middle">
    <?php 
   $name=$_GET["notification"];
if($name == "true"){
print "<span class='notification'>New expense has been added</span><br><br>";
}
?>
<br/><br/>
<table width="300" border="0" cellpadding="10" cellspacing="0" class="formborders">
      <tr>
        <td colspan="2" class="formhead">Add Expenses</td>
      </tr>
      <tr>
        <td width="81" class="formtext">Date</td>
        <td width="179">
      
  <input name="date" type="date" class="textfields" id="datepicker" /></td>
      </tr>
  <tr>
        <td class="formtext">Expense towards</td>
        <td><input type="text" name="exp" id="exp"></td>
      </tr>
      <tr>
        <td class="formtext">Cost</td>
        <td><input type="text" name="cost" id="cost" onKeyUp="return valtxt(this)"></td>
      </tr>
	 <tr>
	  <tr>
        <td class="formtext">Category</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;	      <?php
echo '<select name="category">
  <option value="">Select...</option>
  <option value="food">Food</option>
  <option value="decoration">Decoration</option>
    <option value="prizes">Prizes</option>
 <option value="stationary">Stationary</option>
   <option value="printing">Printing</option>
     
 </select>';
 ?></td>
      </tr>
      
        <td class="formtext">Bill</td>
        <td><input name="phototxt" type="file" class="textfields" id="phototxt"></td>
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