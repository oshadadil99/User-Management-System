<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['superadmin_name'])){
   header('location:login_form.php');
}
?>

<?php 
	
	$user_list = '';

	// getting user list
	$query = "SELECT * FROM user_data WHERE id>= 0 ";
	$users = mysqli_query($conn,$query);
 
	{
		// in here data collected in users store to user one by one
		while ($user = mysqli_fetch_assoc($users)) {
			$user_list .= "<tr>";
			$user_list .= "<td>{$user['name']}</td>";
			$user_list .= "<td>{$user['email']}</td>";
			$user_list .= "<td>{$user['user_type']}</td>";
			$user_list .= "<td> <a href=\"edit_admins.php?user_id={$user['id']}\">Edit</a> </td>";
			$user_list .= "</tr>";
		}
	}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Users</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	

	<main>

		<table class="masterlist">
			<tr>
				<th>name</th>
				<th>email</th>
				<th>user_type</th>
				<th>Edit</th>
			</tr>

			<?php echo $user_list; ?>
		</table>
	</main>

	
</body>
</html>