<div id="printarea">
<div id="content-input">
<h3 align="center">INTERNATIONAL CARGO (GUANGZHOU) CO. LTD.</h3>
<p align="center"><strong>Contacts China:</strong>+8613632444879 +8613710330396 +8618358914861<br>
<strong>Contacts Uganda:</strong> +256772097626 +256701577090 +256753335026<br>
<br<strong><strong>Email:</strong>Internationalcargo22@yahoo.com</p>
	 <table border="1" width="580px" align="center" cellpadding="2" class="mytable" cellspacing="0" >
        <tr>
            <th>No</th>
            <th>Customer</th>
            <th>Pack.No.</th>
            <th>L</th>
            <th>W</th>
            <th>H</th>
            <th>Section</th>
            <th>Detail</th>
        </tr>
         <?php
		 $key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="")
		$sql_sel=mysql_query("SElECT * FROM package_tbl WHERE stu_id  like '%$key%' or pack like '%$key%'");
	else
        $sql_sel=mysql_query("SELECT * FROM package_tbl");
		
    $i=0;
    while($row=mysql_fetch_array($sql_sel)){
    $i++;
    $color=($i%2==0)?"lightblue":"white";
    ?>
      <tr bgcolor="<?php echo $color?>">
            <td><?php echo $i;?></td>
            <td><?php echo $row['stu_id'];?></td>
            <td><?php echo $row['pack'];?></td>
            <td><?php echo $row['plength'];?></td>
            <td><?php echo $row['pwidth'];?></td>
            <td><?php echo $row['pheight'];?></td>
            <td><?php echo $row['psection'];?></td>
            <td><?php echo $row['detail'];?></td>
            </tr>
    <?php	
    }
    ?>
    </table>

</div><!-- end of content-input -->
</div>
</body>
</html>