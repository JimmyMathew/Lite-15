<?php include 'config.php'; ?>
<?php

session_start();
if($_SESSION['users'] == ""){
header("location:login.php");
}
?>
<link href="stylesheets.css" rel="stylesheet" type="text/css">
<style>
#primary_nav_wrap
{
	margin-top:5px
}

#primary_nav_wrap ul
{
	list-style:none;
	position:relative;
	float:left;
	margin:0;
	padding:0
	
}

#primary_nav_wrap ul a
{
	display:block;
	color:#333;
	text-decoration:none;
	font-weight:700;
	font-size:18px;
	line-height:32px;
	padding:0 15px;
	font-family: Calibri, Candara, Segoe, 'Segoe UI', Optima, Arial, sans-serif;
}

#primary_nav_wrap ul li
{
	position:relative;
	float:left;
	margin:0;
	padding:0
}

#primary_nav_wrap ul li.current-menu-item
{
	background:#333;
	
	
}

#primary_nav_wrap ul li:hover
{
	background:#993399
}

#primary_nav_wrap ul ul
{
	display:none;
	position:absolute;
	top:100%;
	left:0;
	background:#333;
	padding:0
}

#primary_nav_wrap ul ul li
{
	float:none;
	width:200px
}

#primary_nav_wrap ul ul a
{
	line-height:120%;
	padding:10px 15px
}

#primary_nav_wrap ul ul ul
{
	top:0;
	left:100%
}

#primary_nav_wrap ul li:hover > ul
{
	display:block
	
}
#normal{
	font-size: 14px;
	color: #ffffff;
	padding:5px;
}
</style>

<table align ="left" width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td class="logo" bgcolor="#993399"><marquee>Loyola Information Technology Extravaganza</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    
    <td width="88%" class="texts">Welcome <?php echo $_SESSION['teamname']; ?>, <?php echo $_SESSION['type']; ?>, <?php echo date("m/d/Y"); ?>, <?php $dateget=getdate(strtotime(date("m/d/Y"))); echo $dateget['weekday']; ?> | <a href="logout.php">Sign Out</a></td>
    <td width="7%" align="right" class="texts"><img src="images/lite15logo.png" width="143" height="95" /></td>
  </tr>
</table>
<nav id="primary_nav_wrap">

 <table width="100%" border="0" cellpadding="10" cellspacing="0" class="menu">
  <tr>
  <td>
   <?php 
if($_SESSION['type'] == "Administrator")
{
echo"<ul>";

echo"<li class='current-menu-item'><a href='#'><font color='#FFFFFF'>Registration</font></a>";
echo"<ul>";
echo"<li><a href='registration.php?notification=false'><font color='#FFFFFF'>Student Registration</font></a></li>";
echo"<li><a href='teamgen.php?notification=false'><font color='#FFFFFF'>Team Generation</font></a></li>";
echo"</ul>";
echo"</li>";
echo"<li class='current-menu-item'><a href='#'><font color='#FFFFFF'>Members</font></a>";
echo"<ul>";
echo"<li><a href='add-member.php?notification=false'><font color='#FFFFFF'>Add Member</font></a></li>";
echo"<li><a href='member-list.php?notification=false&search=no'><font color='#FFFFFF'>View Members</font></a></li>";
echo"</ul>";
echo"</li>";
echo"<li class='current-menu-item'><a href='#'><font color='#FFFFFF'>Reports</font></a>";
echo"<ul>";
echo"<li><a href='stureport.php?notification=false&search=no'><font color='#FFFFFF'>Students Report</font></a></li>";
echo"<li><a href='report.php?notification=false&search=no'><font color='#FFFFFF'>Events Report</font></a></li>";
echo"</ul>";
echo"</li>";
echo"<li class='current-menu-item'><a href='#'><font color='#FFFFFF'>Budget</font></a>";
echo"<ul>";
echo"<li><a href='budget.php?notification=false&search=no'><font color='#FFFFFF'>Add Budget</font></a></li>";
echo"<li><a href='addexp.php?notification=false&search=no'><font color='#FFFFFF'>Add Expenses</font></a></li>";
echo"<li><a href='expense-list.php?notification=false&search=no'><font color='#FFFFFF'>View Expenses</font></a></li>";
echo"</ul>";
echo"</li>";
echo"<li class='current-menu-item'><a href='#'><font color='#FFFFFF'>Colleges</font></a>";
echo"<ul>";
echo"<li><a href='addcolleges.php?notification=false&search=no'><font color='#FFFFFF'>Add Colleges</font></a></li>";
echo"<li><a href='collegelist.php?notification=false&search=no'><font color='#FFFFFF'>Expected Colleges</font></a></li>";

echo"</ul>";
echo"</li>";
echo"<li class='normal'><a href='addquestion.php?notification=false'><font color='#FFFFFF'>Add Questions</font></a></li>";
echo"<li class='current-menu-item'><a href='#'><font color='#FFFFFF'>Prelims</font></a>";
echo"<ul>";
echo"<li><a href='web.php?notification=false'><font color='#FFFFFF'>Web Design</font></a></li>";
echo"<li><a href='quiz.php?notification=false'><font color='#FFFFFF'>Quiz</font></a></li>";
echo"<li><a href='reverse.php?notification=false'><font color='#FFFFFF'>Reverse Coding</font></a></li>";
echo"<li><a href='swmarket.php?notification=false'><font color='#FFFFFF'>Software Marketing</font></a></li>";

echo"</ul>";
echo"</li>";
echo"<li class='current-menu-item'><a href='#'><font color='#FFFFFF'>Events</font></a>";
echo"<ul>";
echo"<li><a href='webreport.php?notification=false'><font color='#FFFFFF'>Web Design</font></a></li>";
echo"<li><a href='quizreport.php?notification=false'><font color='#FFFFFF'>Quiz</font></a></li>";
echo"<li><a href='revreport.php?notification=false'><font color='#FFFFFF'>Reverse Coding</font></a></li>";
echo"<li><a href='swreport.php?notification=false'><font color='#FFFFFF'>Software Marketing</font></a></li>";

echo"</ul>";
echo"</li>";
echo"<li class='current-menu-item'><a href='#'><font color='#FFFFFF'>Print</font></a>";
echo"<ul>";
echo"<li><a href='printstureport.php?notification=false&search=no'><font color='#FFFFFF'>Students Report</font></a></li>";
echo"<li><a href='printreport.php?notification=false&search=no'><font color='#FFFFFF'>Events Report</font></a></li>";
echo"<li><a href='printcolleges.php?notification=false'><font color='#FFFFFF'>Colleges</font></a></li>";
echo"<li><a href='printexpense.php?notification=false&search=no'><font color='#FFFFFF'>Expenses</font></a></li>";
echo"<li><a href='printexptotal.php?notification=false&search=no'><font color='#FFFFFF'>Total Expenses</font></a></li>";

echo"</ul>";
echo"</li>";
echo"<li class='normal'><a href='instructions.php?notification=false'><font color='#FFFFFF'>Instructions</font></a></li>";
echo"<li class='normal'><a href='summary.php?notification=false'><font color='#FFFFFF'>Summary</font></a></li>";
echo"</ul>";
echo"</nav>";
}


else if($_SESSION['type'] == "Staff")
{
echo"<ul>";
echo"<li class='current-menu-item'><a href='#'><font color='#FFFFFF'>Registration</font></a>";
echo"<ul>";
echo"<li><a href='registration.php?notification=false'><font color='#FFFFFF'>Student Registration</font></a></li>";
echo"<li><a href='teamgen.php?notification=false'><font color='#FFFFFF'>Team Generation</font></a></li>";
echo"</ul>";
echo"</li>";
echo"<li class='normal'><a href='instructions.php?notification=false'><font color='#FFFFFF'>Instructions</font></a></li>";
echo"<li class='normal'><a href='summary.php?notification=false'><font color='#FFFFFF'>Summary</font></a></li>";
echo"<li class='current-menu-item'><a href='#'><font color='#FFFFFF'>Reports</font></a>";
echo"<ul>";
echo"<li><a href='stureport.php?notification=false&search=no'><font color='#FFFFFF'>Students Report</font></a></li>";
echo"<li><a href='report.php?notification=false&search=no'><font color='#FFFFFF'>Events Report</font></a></li>";
echo"</ul>";
echo"</li>";
echo"<li class='normal'><a href='addquestion.php?notification=false'><font color='#FFFFFF'>Add Questions</font></a></li>";
echo"<li class='current-menu-item'><a href='#'><font color='#FFFFFF'>Prelims</font></a>";
echo"<ul>";
echo"<li><a href='web.php?notification=false'><font color='#FFFFFF'>Web Design</font></a></li>";
echo"<li><a href='quiz.php?notification=false'><font color='#FFFFFF'>Quiz</font></a></li>";
echo"<li><a href='reverse.php?notification=false'><font color='#FFFFFF'>Reverse Coding</font></a></li>";
echo"<li><a href='swmarket.php?notification=false'><font color='#FFFFFF'>Software Marketing</font></a></li>";

echo"</ul>";
echo"</li>";
echo"<li class='current-menu-item'><a href='#'><font color='#FFFFFF'>Events</font></a>";
echo"<ul>";
echo"<li><a href='webreport.php?notification=false'><font color='#FFFFFF'>Web Design</font></a></li>";
echo"<li><a href='quizreport.php?notification=false'><font color='#FFFFFF'>Quiz</font></a></li>";
echo"<li><a href='revreport.php?notification=false'><font color='#FFFFFF'>Reverse Coding</font></a></li>";
echo"<li><a href='swreport.php?notification=false'><font color='#FFFFFF'>Software Marketing</font></a></li>";

echo"</ul>";
echo"</li>";
echo"<li class='current-menu-item'><a href='#'><font color='#FFFFFF'>Print</font></a>";
echo"<ul>";
echo"<li><a href='printstureport.php?notification=false&search=no'><font color='#FFFFFF'>Students Report</font></a></li>";
echo"<li><a href='printreport.php?notification=false&search=no'><font color='#FFFFFF'>Events Report</font></a></li>";
echo"<li><a href='printcolleges.php?notification=false'><font color='#FFFFFF'>Colleges</font></a></li>";
echo"<li><a href='printexpense.php?notification=false&search=no'><font color='#FFFFFF'>Expenses</font></a></li>";
echo"<li><a href='printexptotal.php?notification=false&search=no'><font color='#FFFFFF'>Total Expenses</font></a></li>";

echo"</ul>";
echo"</li>";
echo"</ul>";
}
else if($_SESSION['type'] == "Registration")
{

echo"<li class='normal'><a href='registration.php?notification=false'>Registration</a></li>";
echo"<li class='normal'><a href='teamgen.php?notification=false'>Team Generation</a></li>";
echo"<li class='normal'><a href='stureport.php?notification=false&search=no'>Students Report</a></li>";
echo"<li class='normal'><a href='report.php?notification=false&search=no'>Events Report</a></li>";
echo"<li class='normal'><a href='instructions.php?notification=false'>Instructions</a></li>";
}
else if($_SESSION['type'] == "Documentation")
{
echo"<ul>";

echo"<li class='current-menu-item'><a href='#'><font color='#FFFFFF'>Reports</font></a>";
echo"<ul>";
echo"<li><a href='stureport.php?notification=false&search=no'><font color='#FFFFFF'>Students Report</font></a></li>";
echo"<li><a href='report.php?notification=false&search=no'><font color='#FFFFFF'>Events Report</font></a></li>";
echo"</ul>";
echo"</li>";
echo"<li class='current-menu-item'><a href='#'><font color='#FFFFFF'>Print</font></a>";
echo"<ul>";
echo"<li><a href='printstureport.php?notification=false&search=no'><font color='#FFFFFF'>Students Report</font></a></li>";
echo"<li><a href='printreport.php?notification=false&search=no'><font color='#FFFFFF'>Events Report</font></a></li>";
echo"<li><a href='printcolleges.php?notification=false'><font color='#FFFFFF'>Colleges</font></a></li>";
echo"<li><a href='printexpense.php?notification=false&search=no'><font color='#FFFFFF'>Expenses</font></a></li>";
echo"<li><a href='printexptotal.php?notification=false&search=no'><font color='#FFFFFF'>Total Expenses</font></a></li>";

echo"</ul>";
echo"</li>";
echo"<li class='normal'><a href='instructions.php?notification=false'><font color='#FFFFFF'>Instructions</font></a></li>";
echo"<li class='normal'><a href='summary.php?notification=false'><font color='#FFFFFF'>Summary</font></a></li>";
echo"</ul>";
}

?>

<?php

if($_SESSION['type'] == "Web Design")
{
echo"<li class='normal'><a href='instructions.php?notification=false'>Instructions</a></li>";
echo"<li class='normal'><a href='web.php?notification=false'>Web Design</a></li>";
}
else if($_SESSION['type'] == "Reverse Coding")
{
echo"<li class='normal'><a href='instructions.php?notification=false'>Instructions</a></li>";
echo"<li class='normal'><a href='reverse.php?notification=false'>Reverse Coding</a></li>";
}
else if($_SESSION['type'] == "Quiz")
{
echo"<li class='normal'><a href='instructions.php?notification=false'>Instructions</a></li>";
echo"<li class='normal'><a href='quiz.php?notification=false'>Quiz</a></li>";
}
else if($_SESSION['type'] == "Software Marketing")
{
echo"<li class='normal'><a href='instructions.php?notification=false'>Instructions</a></li>";
echo"<li class='normal'><a href='swmarket.php?notification=false'>Software Marketing</a></li>";
}

?>
</td>
</tr>
</table>


