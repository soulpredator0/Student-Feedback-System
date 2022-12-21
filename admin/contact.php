<?php 
$q=mysqli_query($conn,"select * from contact");
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
        window.location.href='delete_contact.php?id='+id;
     }
}
</script>	


<div class="row">
	<div class="col-sm-12" style="color:orange;">
		<h1 align="center" style="background-color:orange;color:white;font-size:25px;border-radius:10px">Contact Us</h1>
	</div>
</div>
<div class="row">

<div class="col-sm-12">

<table class="table table-bordered" style="background-color:#eb5534;color:white">

	<thead >
	
	<tr class="success">
		<th style="background-color:black;color:white">Sr.No</th>
		<th style="background-color:black;color:white">User Name</th>
		<th style="background-color:black;color:white">Email</th>
		<th style="background-color:black;color:white">Mobile</th>
		<th style="background-color:black;color:white">Message</th>
		<th style="background-color:black;color:white">Delete</th>
		</tr>
		</thead>
		
		<?php
		$i=1;
	while($row=mysqli_fetch_assoc($q))
		{
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['mobile']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['message']."</td>";
			echo "<td><a href='#' onclick='deletes($row[id])'>Delete</a></td>";
			echo "</tr>";
		$i++;
		}
		
		?>
		
		
		
</table>
</div>
</div>
<?php }?>