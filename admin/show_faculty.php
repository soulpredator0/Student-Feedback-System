<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_faculty.php?id='+id;
     }
}
</script>	


<?php
	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr>";
	
	echo "<th style=background-color:black;color:white;>S.No</th>";
	echo "<th style=background-color:black;color:white;>Name</th>";
	echo "<th style=background-color:black;color:white;>Designation</th>";
	echo "<th style=background-color:black;color:white;>Programme</th>";
	echo "<th style=background-color:black;color:white;>Semester</th>";
	echo "<th style=background-color:black;color:white;>User Name</th>";	
	echo "<th style=background-color:black;color:white;>Email</th>";
	echo "<th style=background-color:black;color:white;>Mobile</th>";
	echo "<th style=background-color:black;color:white;>Password</th>";
	echo "<th style=background-color:black;color:white;>Update</th>";
	echo "<th style=background-color:black;color:white;>Delete</th>";
	echo "<th style=background-color:black;color:white;>Status</th>";
	echo "</tr>";
	
	$i=1;
	$que=mysqli_query($conn,"select * from faculty");
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['Name']."</td>";
		echo "<td>".$row['designation']."</td>";
		echo "<td>".$row['programme']."</td>";
		echo "<td>".$row['semester']."</td>";
		echo "<td>".$row['user_alias']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['mobile']."</td>";
		echo "<td>".$row['password']."</td>";
		echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=edit_faculty'><span class='glyphicon glyphicon-pencil'style=color:green;></span></a></td>";
		
		
		echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
		
		
		
		if($row['status'])
		{
		echo "<td><a href='update_status.php?user_id=".$row['id']."&status=".$row['status']."'><span class='glyphicon glyphicon-user' style=color:red;></span></a></td>";
		}
		else
		{
		echo "<td><a href='update_status.php?user_id=".$row['id']."&status=".$row['status']."'><span class='glyphicon glyphicon-user' style=color:green;></span></a></td>";
		}
		echo "</tr>";
		$i++;
	}
	
?>