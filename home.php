

<?php
	include "dbconnect.php";
	
	$s="SELECT * FROM product";
	$result=$conn->query($s);
	
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		table, td, th{
			border-collapse:collapse;
			border:2px solid black;
		}
		table{
			width:80%;
			margin: 0 auto;
		}
		td, th{
			padding:15px;
			text-align:center;
		}
		
	</style>
</head>
<body >	
	
		<center>
			<h1> Product</h1>
			<table>
				<tr >
					<th>ID</th>
					<th>Name</th>
					<th>Description</th>
					<th>Purchase Prize</th>
					<th>Quantity</th>
					<th>EDIT</th>
					<th>Delete</th>
				</tr>
				<?php
				//$i=1;
				 while($r = $result->fetch_assoc())
				{
					$idd=$r['id'];
					$nam=$r['name'];
					$des=$r['description'];
					$pur=$r['purchaseprize'];
					$quan=$r['quantity'];
					echo "<tr>";
						echo "<td>". $idd . "</td>";
						echo "<td>". $nam . "</td>";
						echo "<td>". $des . "</td>";
						echo "<td>". $pur . "</td>";
						echo "<td>". $quan . "</td>";
						echo "<td> <a href='editForm.php?edit_id=$idd'>Edit</button></a></td>";
						echo "<td> <a href='delete.php?del_id=$idd'>Delete</button></a></td>";
					echo "</tr>";
				}
				?>
				
				<tr>
					<td colspan="7"><a href="insertform.php" ><button style=" border-radius:30px;" >Insert Record</button></a></td>
				</tr>
			</table>
		</center>
	
</body>
</html> 