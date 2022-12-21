<?php 
$q=mysqli_query($conn,"select * from feedback where faculty_id='".$_SESSION['faculty_login']."'");
$r=mysqli_num_rows($q);
if($r==false)
{
echo "<h3 style='color:Red'>No any records found ! </h3>";
}
else
{
?>

<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_feedback.php?id='+id;
     }
}
</script>	


<div class="row">
	<div class="col-sm-12" style="color:orange;">
		<h1 align="center" style="background-color:orange;color:white;font-size:25px;border-radius:10px">Feedback</h1>
	</div>
</div>
<div class="row">

<div class="col-sm-12">

<table class="table table-bordered" style="background-color:#eb5534;color:white">

	<thead >
	
	<tr class="success">
		<th style="background-color:black;color:white">Sr.No</th>
		<th style="background-color:black;color:white">Student</th>
		<th style="background-color:black;color:white">Teacher</th>
		<th style="background-color:black;color:white">Quest1</th>
		<th style="background-color:black;color:white">Quest2</th>
		<th style="background-color:black;color:white">Quest3</th>
		<th style="background-color:black;color:white">Quest4</th>
		<th style="background-color:black;color:white">Quest5</th>
		<th style="background-color:black;color:white">Quest6</th>
		<th style="background-color:black;color:white">Quest7</th>
		<th style="background-color:black;color:white">Quest8</th>
		<th style="background-color:black;color:white">Quest9</th>
		<th style="background-color:black;color:white">Quest10</th>
		<th style="background-color:black;color:white">Quest11</th>
		<th style="background-color:black;color:white">Quest12</th>
		<th style="background-color:black;color:white">Quest13</th>
		<th style="background-color:black;color:white">Quest14</th>
		</tr>
		</thead>
		
		<?php
		$i=1;
	while($row=mysqli_fetch_array($q))
		{
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row[1]."</td>";
			echo "<td>".$row[2]."</td>";
			echo "<td>".$row[3]."</td>";
			echo "<td>".$row[4]."</td>";
			echo "<td>".$row[5]."</td>";
			echo "<td>".$row[6]."</td>";
			echo "<td>".$row[7]."</td>";
			echo "<td>".$row[8]."</td>";
			echo "<td>".$row[9]."</td>";
			echo "<td>".$row[10]."</td>";
			echo "<td>".$row[11]."</td>";
			echo "<td>".$row[12]."</td>";
			echo "<td>".$row[13]."</td>";
			echo "<td>".$row[14]."</td>";
			echo "<td>".$row[15]."</td>";
			echo "<td>".$row[16]."</td>";
			//echo "<td><a href='#' onclick='deletes($row[id])'>Delete</a></td>";
			echo "</tr>";
		$i++;
		}
		
		?>
		
	
		
</table>
</div>
</div>
<?php }?>