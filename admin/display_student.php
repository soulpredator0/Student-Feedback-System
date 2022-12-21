<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_student.php?id='+id;
     }
}
</script>	


<?php
	
	echo "<table class='table table-responsive table-bordered table-striped table-hover'  style=background-color:#eb5534;color:white;margin:15px;>";
	echo "<tr class='success'>";
	
	echo "<th style=background-color:black;color:white;>S.No</th>";
	echo "<th style=background-color:black;color:white;>Name</th>";
	echo "<th style=background-color:black;color:white;>Email</th>";
	echo "<th style=background-color:black;color:white;>Mobile</th>";
	echo "<th style=background-color:black;color:white;>Programme</th>";
	echo "<th style=background-color:black;color:white;>Semester</th>";
	echo "<th style=background-color:black;color:white;>Regid Id</th>";
	echo "<th style=background-color:black;color:white;>Delete</th>";
	echo "</tr>";
	
	$i=1;
	$que=mysqli_query($conn,"select * from user");
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['mobile']."</td>";
		echo "<td>".$row['programme']."</td>";
		echo "<td>".$row['semester']."</td>";
		echo "<td>".$row['regid']."</td>";
		
		
		
		echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
		
		
		echo "</tr>";
		$i++;
	}
	
?>