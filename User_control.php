<?php
include_once 'Connection.php';
header('Context-Type: application/json');	
	class User {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
		
		public function does_user_exist($mobile,$password)
		{
			$query = "Select * from users where mobile='$phone' and password = '$password' ";
			$result = mysqli_query($this->connection, $query);
			if(mysqli_num_rows($result)>0){
				$json['success'] = ' Welcome '.$phone;
				echo json_encode($json);
				mysqli_close($this -> connection);
			}else{
				$query = "insert into USERS (name, country, phone, password, confirm_password, cerification_code) values ('$name','$country','$phone','$password','$confirm_password','$verification_code')";
				$inserted = mysqli_query($this -> connection, $query);
				if($inserted == 1 ){
					$json['success'] = 'Account created',$phone;
				}else{
					$json['error'] = 'Wrong password';
				}
				echo json_encode($json);
				mysqli_close($this->connection);
			}
			
		}
		
	}
	
	
	$user = new User();
	if(isset($_POST['phohe'],$_POST['password'])) {
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		
		if(!empty($phone) && !empty($password)){
			
			$encrypted_password = md5($password);
			$user-> does_user_exist($phone,$password);
			
		}else{
			echo json_encode("Fill all fields");
		}
		
	}
?>
