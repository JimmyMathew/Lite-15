<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lite</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
<script>
function validateForm() {
    var a = document.forms["teamform"]["teamtxt"].value;
	var d = document.forms["teamform"]["type"].value;
	var e = document.forms["teamform"]["un"].value;
	var f = document.forms["teamform"]["pw"].value;
    if (a == null || a == "") 
	{
        alert("Please enter a team name");
        return false;
    }
	
   if (d == null || d == "") 
	{
        alert("Please select an event");
        return false;
    }
	if (e == null || e == "") 
	{
        alert("Please enter a username");
        return false;
    }
	if (f == null || f == "") 
	{
        alert("Please enter a password");
        return false;
    }
	}
    </script>
     <SCRIPT language=Javascript>
	 /*
       <!--
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
<form action="insert.php?page=team" method="post" enctype="multipart/form-data"
name="teamform" id="teamform" onSubmit="return validateForm()">
<table class="mainpage" align="center" width="100%"  height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" height="139"><?php include 'head.php'; ?></td>
  </tr>
  <tr>
    <td align="center" valign="middle">
    <?php 
	
   $name=$_GET["notification"];
if($name == "true"){
print "<span class='notification'>New Team has been registered</span><br><br>";
}

?><br>
<table width="300" border="0" cellpadding="10" cellspacing="0" class="formborders">
      <tr>
        <td colspan="2" class="formhead">Team Generation</td>
      </tr>
      <tr>
        <td width="81" class="formtext">Team Name</td>
        <td width="179"><input type="text" name="teamtxt" id="nametxt"></td>
      </tr>
      
      </tr>
           <tr>
        <td class="formtext">Member1</td>
        <td><?php

 $query = "select id,name,college from registration order by Id";

 $result = mysqli_query($conn,$query);

 $selectbox='<select name=\'memtxt\'>';

 while ($row = mysqli_fetch_assoc($result)) {
     $selectbox.='<option value="'.$row['name'].','.$row['college'].'">' . $row['name'] .",".$row['college']. '</option>';
 }

 $selectbox.='</select>';

 mysqli_free_result($result);

 echo $selectbox;

?></td>
</tr>
<tr>
 <td width="81" class="formtext">Member2</td>
         <td><?php

 $query = "select id,name,college from registration order by Id";

 $result = mysqli_query($conn,$query);

 $selectbox='<select name=\'memtxt2\'>';
$selectbox.='<option value=""></option>';
 while ($row = mysqli_fetch_assoc($result)) {
  $selectbox.='<option value="'.$row['name'].','.$row['college'].'">' . $row['name'] .",".$row['college']. '</option>';
 }

 $selectbox.='</select>';

 mysqli_free_result($result);

 echo $selectbox;

?></td>
</tr>
<tr>
<td class="formtext">Event</td>
 <td>      
<?php
echo '<select name="type">
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
        <td width="81" class="formtext">Username</td>
        <td width="179"><input type="text" name="un" id="un"></td>
      </tr>
	  <tr>
        <td width="81" class="formtext">Password</td>
        <td width="179"><input type="text" name="pw" id="pw"></td>
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