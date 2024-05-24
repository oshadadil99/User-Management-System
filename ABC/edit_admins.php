<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['superadmin_name'])){
   header('location:login_form.php');
}

?>

<?php 

    $user_id='';
    $name='';
    $email ='';
    $user_type ='';

    if(isset($_GET['user_id'])) {

        $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);

        $query = "SELECT * FROM user_data WHERE id = {$user_id} LIMIT 1";
        $result_set = mysqli_query($conn,$query);

        if ($result_set) {
            if (mysqli_num_rows($result_set))
            {
                // user found
                $result = mysqli_fetch_assoc($result_set);
                $user_id100 = $result['id'];
                $name100 = $result['name'];
                $email100 = $result['email'];
                $user_type100=$result['user_type'];

            } else {
                // user not found
                header('Location: view_admin.php?err=user_not_found');	
            }
        } else {
            // query unsuccessful
            header('Location: view_admin.php?err=query_failed');
        }

    }

	if(isset($_POST['submit'])) {
        $user_type11=$_POST['user_type'];
        $user_id11=$_POST['user_id'];
    
		//$result_set = mysqli_query($conn, $query);


		    // no errors found... adding new record
			$user_type = mysqli_real_escape_string($conn,$user_type11);
            $id = mysqli_real_escape_string($conn, $user_id11);

			$query = "UPDATE user_data SET ";
			$query .= "user_type = '{$user_type11}' ";
			$query .= "WHERE id = {$user_id11} LIMIT 1";



			$result = mysqli_query($conn, $query);

			if ($result) {
				// query successful... redirecting to users page
				header('Location: view_admin.php?user_modified=true');
			}

	}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View / Modify User</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<main>


		<form action="edit_admins.php" method="post" class="userform">
            <input type="hidden" name="user_id" value="<?php echo $user_id100; ?>">
        
            <p>
				<label for="">Name:</label>
				<input type="text" name="name" <?php echo 'value="' . $name100 . '"'; ?>disabled>
			</p>

			<p>
				<label for="">email:</label>
				<input type="text" name="email" <?php echo 'value="' . $email100 . '"'; ?>disabled>
			</p>

			
            <select name="user_type" id="btnrole">
                <option value="admin">admin</option>
                <option value="user">user</option>
            </select>

            <p>
				<label for="">&nbsp;</label>
				<button type="submit" name="submit" id="btnsubmit102">Save</button>
			</p>

			

		</form>

		
		
	</main>
</body>
</html>