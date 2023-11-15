<?php 

if(isset($_POST['add']) and $_POST['add'] == '412') {
	
	if(isset($_POST['full_name']) and
	isset($_POST['telephone']) and
	isset($_POST['username']) and 
	isset($_POST['password']) and 
	isset($_POST['address']) and
	isset($_POST['data_of_birth']) and
	isset($_POST['jender']) ) {
	
		require __DIR__ . '/../../connection/connection.php';
		require __DIR__ . '/../php/function.php';

		
		if(empty($_POST['full_name'])){
			dd($_POST);
			echo json_encode(['msg' => 'Ввыдите Ф.И!']);
		} 
		elseif (empty($_POST['telephone'])) {
			echo json_encode(['msg' => 'Ввыдите телефон номер!']);
		} 
		elseif ( empty($_POST['username'])) {
			echo json_encode(['msg' => 'Ввыдите имя пользовател !']);
		} 
		elseif (empty($_POST['subjects'][0])) {
			echo json_encode(['msg' => 'Ввыдите один придмет!']);
		} 
		elseif (empty($_POST['address'])) {
			echo json_encode(['msg' => 'Ввыдите адрес!']);
		} 
		elseif (empty($_POST['password'])) {
			echo json_encode(['msg' => 'Ввыдите пароль!']);
		} 
		elseif (empty($_POST['data_of_birth'])) {
			echo json_encode(['msg' => 'Ввыдите день рождения!']);
		}
		 elseif (empty($_POST['jender'])) {
			echo json_encode(['msg' => 'Ввыдите пол!']);
		}

		else {

			if(SaerchUsernameAll($conn, $_POST['username']) == true){
				
				$paramet = [
					'full_name'=> $_POST['full_name'],
					'username' => $_POST['username'],
					'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
					'address' => $_POST['address'],
					'date_of_birth' => $_POST['data_of_birth'],
					'jender' => $_POST['jender'],
					'phone_number' => $_POST['telephone'],
					'pasport_code' => $_POST['pasport_code'],
					'date_of_joined' => $date_tz,
					'subjects'=> ArrayToString($_POST['subjects'])
				];

				$d = AddNewTeacher($conn,  $paramet);

				// dd($d);
				// print_r($_POST);
				echo json_encode(['msg' => 'Сохранился']);
			} else {
				echo json_encode(['msg' => 'Имя пользовател уже занита']);
			}

		}
		
	}
	else {
		echo json_encode(['msg' => 'Ввыдите всё поле']);
	}

} 
else if(isset($_POST['edit']) and $_POST['edit'] == '454' and isset($_POST['teacher'])) {
	require __DIR__ . '/../php/function.php';

	if(isset($_POST['full_name']) and
	isset($_POST['telephone']) and
	isset($_POST['address']) and
	isset($_POST['date_of_birth']) and
	isset($_POST['jender']) ) {
	
		require __DIR__ . '/../../connection/connection.php';
		require __DIR__ . '/../php/function_teacher.php';
		

		
		if(empty($_POST['full_name'])){
			echo json_encode(['msg' => 'Ввыдите Ф.И!']);
		} 
		elseif (empty($_POST['telephone'])) {
			echo json_encode(['msg' => 'Ввыдите телефон номер!']);
		}
		elseif (empty($_POST['subjects'][0])) {
			echo json_encode(['msg' => 'Ввыдите один придмет!']);
		} 
		elseif (empty($_POST['address'])) {
			echo json_encode(['msg' => 'Ввыдите адрес!']);
		} 
		elseif (empty($_POST['date_of_birth'])) {
			echo json_encode(['msg' => 'Ввыдите день рождения!']);
		}
		 elseif (empty($_POST['jender'])) {
			echo json_encode(['msg' => 'Ввыдите пол!']);
		}

		else {

			if(isset($_POST['username']) and SaerchUsernameAll($conn, $_POST['username']) == true){
				
				$paramet = [
					'full_name'=> $_POST['full_name'],
					'username' => $_POST['username'],
					'address' => $_POST['address'],
					'date_of_birth' => $_POST['date_of_birth'],
					'jender' => $_POST['jender'],
					'phone_number' => $_POST['telephone'],
					'pasport_code' => $_POST['pasport_code'],
					'date_of_edit' => $date_tz,
					'subjects'=> ArrayToString($_POST['subjects'])
				];

				UpdateTeacher($conn, $_POST['teacher'], $paramet);
				echo json_encode(['msg' => 'Сохранился']);

			} else {
					$paramet = [
										'full_name'=> $_POST['full_name'],
										'address' => $_POST['address'],
										'date_of_birth' => $_POST['date_of_birth'],
										'jender' => $_POST['jender'],
										'phone_number' => $_POST['telephone'],
										'pasport_code' => $_POST['pasport_code'],
										'date_of_edit' => $date_tz,
										'subjects'=> ArrayToString($_POST['subjects'])
									];
				
				UpdateTeacher($conn, $_POST['teacher'], $paramet);
				echo json_encode(['msg' => 'Сохранился']);
			}

		}
		
	}
	else {
		echo json_encode(['msg' => 'Ввыдите всё поле']);
	}
}

