<?php
include_once("connection.php");
if(isset($_POST['user_name']) && $_POST['user_name'] != '')
    {
		$response = array();
		$username = $_POST['user_name'];
        $res  = $conexion->prepare('select * from users where username = ?');
        $res->execute([$username]);
        $count  = $res->rowCount();
        if($count > 0)
		{
			$response['status'] = false;
			$response['msg'] = 'Username already exists.';
		}
		else if(strlen($username) < 6 || strlen($username) > 15){
			$response['status'] = false;
			$response['msg'] = 'Username must be 6 to 15 characters';
		}
		else if (!preg_match("/^[a-zA-Z1-9]+$/", $username))
		{
			$response['status'] = false;
			$response['msg'] = 'Use alphanumeric characters only.';
		}
		else
		{
			$response['status'] = true;
			$response['msg'] = 'Username is available.';
		}
		 echo json_encode($response);
    }
?>

