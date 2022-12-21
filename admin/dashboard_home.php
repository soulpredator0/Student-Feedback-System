<h1 align="center" ><a href="" style="background-color:orange;color:white;border-radius:10px;padding:3px">Admin Dashboard</a></h1>
<?php 
//all complaints
$qq=mysqli_query($conn,"select * from faculty ");
$rows=mysqli_num_rows($qq);			
echo "<h2 style=background-color:green;color:white;width:400px;border-radius:10px;padding-left:5px;>Total Number of Faculty : $rows</h2>";	

//all emegency compalints
$q=mysqli_query($conn,"select * from user");
$r1=mysqli_num_rows($q);			
echo "<h2 style=background-color:#eb5534;color:white;width:400px;border-radius:10px;padding-left:5px;>Total Number of Student : $r1</h2>";	


//all users
$q2=mysqli_query($conn,"select * from feedback");
$r2=mysqli_num_rows($q2);			
echo "<h2 style=background-color:black;color:white;width:600px;border-radius:10px;padding-left:5px;>Total Number feedback given by users  : $r2</h2>";	


					

?>
