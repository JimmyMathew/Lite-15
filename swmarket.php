<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LITE</title>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
<style type="text/css">
.texts #swform table {
	text-align: left;
}
</style>
</head>

<body>
<script language="javascript">

</script>
<table class="mainpage" align="center" width="100%"  height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" height="139"><?php include 'head.php'; ?></td>
  </tr>
  <tr>
    <td align="center" valign="middle">
    <table border='0' width='100%' cellpadding='10' cellspacing='0' class='formborders'>
    <tr class=texts>
	<?php 
   $name=$_GET["notification"];
if($name == "true"){
print "<span class='notification'>Your Score has been updated successfully</span><br><br>";
}
?><br>
<form action="insertpoints.php" name="swform" id="swform">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select * from event4 order by id";
$result = $conn->query($sql);
$num=1;
$ques=1;
$val1=0;
$val2=0;
$val3=0;
$val4=0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	$option1=$row["option1"];
	$option2=$row["option2"];
	$option3=$row["option3"];
	$option4=$row["option4"];
	$right=$row["correct"];
      if ($option1==$right)
	  {
	  $val1=1;
	  }
	  else
	  {
	  $val1=0;
	  }
	  if ($option2==$right)
	  {
	  $val2=1;
	  }
	  else
	  {
	  $val2=0;
	  }
	   if ($option3==$right)
	  {
	  $val3=1;
	  }
	  else
	  {
	  $val3=0;
	  }
	   if ($option4==$right)
	  {
	  $val4=1;
	  }
	  else
	  {
	  $val4=0;
	  }
	  
  
?>
 <table width="1180" border="0">
<tr><td><?php echo $num .""."."?><?php echo $row["question"]?></td></tr>
    </table>   
	 <table width="1180" border="0"height="30">
    <tr>
      <td width="303"><INPUT TYPE="RADIO" VALUE=<?php echo $val1 ?> NAME=<?php echo "q".$ques?> ID=<?php echo "q".$ques?>>
	<?php echo $row["option1"]?> <BR>
</td>
     <td width="287"><p>
       </p>
       <p>
         <INPUT TYPE="RADIO" VALUE=<?php echo $val2 ?> NAME=<?php echo "q".$ques?> ID=<?php echo "q".$ques?>>
         <?php echo $row["option2"]?> <BR>
         </p></td></tr><tr>
      <td width="295"><INPUT TYPE="RADIO" VALUE=<?php echo $val3 ?>  NAME=<?php echo "q".$ques?> ID=<?php echo "q".$ques?>>	
	 <?php echo $row["option3"]?> <BR></td>
    <td width="277"><INPUT TYPE="RADIO" VALUE=<?php echo $val4 ?>  NAME=<?php echo "q".$ques?> ID=<?php echo "q".$ques?>>
     	<?php echo $row["option4"]?>  <BR></td>
    </tr>
	
  </table>
 
	<br>
  <?php 
  $ques++;
  $num++;
  
    }
} else {
    echo "0 results";
}
$conn->close();
  ?>
 
 <input name="" value="Submit your answers" class="button" type="submit" onClick="javascript:suming();"/>
   <input name="points"  id="points" type="text" readonly="readonly" style="display:none"/><br /><br />
 <script>
function getRadioVal(form, name) {
    var val;
    // get list of radio buttons with specified name
    var radios = form.elements[name];
    
    // loop through list of radio buttons
    for (var i=0, len=radios.length; i<len; i++) {
        if ( radios[i].checked ) { // radio checked?
            val = radios[i].value; // if so, hold its value in val
            break; // and break out of for loop
        }else{
			val = 0;
		}
    }
    return val; // return value of checked radio or undefined if none checked
}
function suming(){
	var txtQuestion1 = getRadioVal( document.getElementById('swform'), 'q1' );
	var txtQuestion2 = getRadioVal( document.getElementById('swform'), 'q2' );
	var txtQuestion3 = getRadioVal( document.getElementById('swform'), 'q3' );
	var txtQuestion4 = getRadioVal( document.getElementById('swform'), 'q4' );
	var txtQuestion5 = getRadioVal( document.getElementById('swform'), 'q5' );
	var txtQuestion6 = getRadioVal( document.getElementById('swform'), 'q6' );
	var txtQuestion7 = getRadioVal( document.getElementById('swform'), 'q7' );
	var txtQuestion8 = getRadioVal( document.getElementById('swform'), 'q8' );
	var txtQuestion9 = getRadioVal( document.getElementById('swform'), 'q9' );
	var txtQuestion10 = getRadioVal( document.getElementById('swform'),'q10' );
	var txtQuestion11= getRadioVal( document.getElementById('swform'), 'q11' );
	var txtQuestion12= getRadioVal( document.getElementById('swform'), 'q12' );
	var txtQuestion13= getRadioVal( document.getElementById('swform'), 'q13' );
	var txtQuestion14= getRadioVal( document.getElementById('swform'), 'q14' );
	var txtQuestion15= getRadioVal( document.getElementById('swform'), 'q15' );
	var txtQuestion16= getRadioVal( document.getElementById('swform'), 'q16' );
	var txtQuestion17= getRadioVal( document.getElementById('swform'), 'q17' );
	var txtQuestion18= getRadioVal( document.getElementById('swform'), 'q18' );
	var txtQuestion19= getRadioVal( document.getElementById('swform'), 'q19' );
	var txtQuestion20= getRadioVal( document.getElementById('swform'), 'q20' );
	var txtQuestion21= getRadioVal( document.getElementById('swform'), 'q21' );
	var txtQuestion22= getRadioVal( document.getElementById('swform'), 'q22' );
	var txtQuestion23= getRadioVal( document.getElementById('swform'), 'q23' );
	var txtQuestion24= getRadioVal( document.getElementById('swform'), 'q24' );
	var txtQuestion25= getRadioVal( document.getElementById('swform'), 'q25' );
	var txtQuestion26= getRadioVal( document.getElementById('swform'), 'q26' );
	var txtQuestion27= getRadioVal( document.getElementById('swform'), 'q27' );
	var txtQuestion28= getRadioVal( document.getElementById('swform'), 'q28' );
	var txtQuestion29= getRadioVal( document.getElementById('swform'), 'q29' );
	var txtQuestion30 = getRadioVal( document.getElementById('swform'), 'q30' );
	
	var result = parseInt(txtQuestion1) + parseInt(txtQuestion2) + parseInt(txtQuestion3)
	+ parseInt(txtQuestion4) + parseInt(txtQuestion5) + parseInt(txtQuestion6)
	+ parseInt(txtQuestion7) + parseInt(txtQuestion8) + parseInt(txtQuestion9)
	+ parseInt(txtQuestion10) + parseInt(txtQuestion11) + parseInt(txtQuestion12)
	+ parseInt(txtQuestion13) + parseInt(txtQuestion14) + parseInt(txtQuestion15)
	+ parseInt(txtQuestion16) + parseInt(txtQuestion17) + parseInt(txtQuestion18)
	+ parseInt(txtQuestion19) + parseInt(txtQuestion20) + parseInt(txtQuestion21)
	+ parseInt(txtQuestion22) + parseInt(txtQuestion23) + parseInt(txtQuestion24)
	+ parseInt(txtQuestion25) + parseInt(txtQuestion26) + parseInt(txtQuestion27)
	+ parseInt(txtQuestion28) + parseInt(txtQuestion29) + parseInt(txtQuestion30);
	
	if (!isNaN(result)) {
        document.getElementById('points').value = result;
      }
}
</script>
 <?php $val?>
  </form>
  
