<pre>
<?php session_start();

	
	if (isset($_POST['username']) and isset($_POST['password']) ) {
		// import this file
		require __DIR__ . '/../connection/connection.php';
		try {
			
			if (strlen($_POST['username']) <= 13 and strlen($_POST['password']) <= 12 and strlen($_POST['username']) > 0 and strlen($_POST['password']) > 0) {
				try{
					$uname = htmlspecialchars($_POST['username']);
					$pass = htmlspecialchars($_POST['password']);
	
					for ($i=1; $i <= 3; $i++):
						
						if ($i == 1)  $sql = "SELECT * FROM admins WHERE username = ?";
						elseif($i == 2)  $sql = "SELECT * FROM teachers WHERE username = ?";
						elseif($i == 3) $sql = "SELECT * FROM students WHERE username = ?";
						
						$db = $conn->prepare($sql);
						$db->execute([$uname]);	
						if($db->rowCount() == 1) {
							$user = $db->fetch(PDO::FETCH_ASSOC);
							
							if ($user['username'] == $uname) {
								if (password_verify($pass, $user['password'])) {
									$_SESSION['is_login'] = true;
									$_SESSION['role'] = $user['role'];
									$_SESSION['full_name'] = $user['full_name'];
	
								// href to user
									if ($user['role'] == 'admin') {
									header("Location: ../admin/index.php");
									exit;
									}
									elseif ($user['role'] == 'teacher') {
									header("Location: ../teacher/index.php");
									exit;
									}
									elseif($user['role'] == 'student') {
									header("Location: ../student/index.php");
									exit;
									}
								}
	
							}else {
								$_SESSION['msg']  = "Даниы не каректно";
								header("Location: ../login.php");
							}
						}
					endfor;
					// end try
				} 
				catch(Exception $e) {
					header("Location: ../login.php");
					// echo 'error ', $e->getMessage();
				}
	
			}
			$_SESSION['msg'] = 'Ваша даний неправилно';
			header("Location: ../login.php");
		} catch(Exception) {
			$_SESSION['msg']  = "404 not fount";
			header("Location: ../login.php");
		}


		


	} 
	else {
		echo "singpup"; 
		header("Location: ../login.php");
	}

?>
</pre>