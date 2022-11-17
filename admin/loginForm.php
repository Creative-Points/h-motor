<?php
session_start();
if (isset($_SESSION['id'])) {
	header("Location: ../index.php");
}

// include_once('../../config.php');
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// 	$email = $_POST['email'];
// 	$password = $_POST['pwd'];
// 	$hash = sha1($password);
// 	// if(isset($_POST['email']) && !empty($_POST['email'])){
// 	//     echo 'set ';
// 	// }
// 	//     if($email == $user){
// 	//         if($pass == $hash){
// 	//             echo 'login';
// 	//         }else{
// 	//             echo 'pass';
// 	//         }
// 	//     }else{
// 	//         echo 'email';
// 	// }
// 	// if($email == $user && $pass == $hash)
// 	// {
// 	//     $_SESSION['id'] = $emp['id'];
// 	//     header("Location: ../index.php");
// 	//     exit();
// 	// }else{
// 	//     // redirect('not login', 'back', 3000);
// 	// }

// 	$stmt = $conn->prepare("SELECT * FROM users WHERE email = :email AND password = :pass");
// 	$stmt->bindParam(':email', $email);
// 	$stmt->bindParam(':pass', $hash);
// 	$stmt->execute();
// 	$emp = $stmt->fetchAll();
// 	var_dump($emp);
// 	$count = $stmt->rowCount();
// 	if ($count > 0) {
// 		$_SESSION['id'] = $emp['id'];
// 		header("Location: ../index.php");
// 		exit();
// 	} else {
// 		echo "Not Found This Username And Password";
// 	}
// }
// echo sha1('password');
// isset($_SESSION['id']) ? 
// print_r($_SESSION['id']) : '';
?>
<!DOCTYPE html>
<html>

<head>
	<title>admin login</title>
	<link rel="stylesheet" type="text/css" href="login/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="maincontainer">
		<div class="monkeylogin">
			<div class="animcon" id="animcon">
				<img id="hands" src="login/images/hands.png" />
			</div>
			<div class="formcon">
				<form method="post" action="login.php">
					<input type="email" id="mail" name="email" onclick="openeye();" class="tb" placeholder="Email" autocomplete="off" required>
					<br />
					<br />
					<input type="password" id="pwdbar" onclick="closeye();" name="pwd" class="tb" placeholder="Password" required>
					<br />
					<br />
					<input type="submit" name="" class="sbutton" value="L O G I N" />
					<!-- <button type="submit">Login</button> -->
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="login/script.js"></script>
	<style>
		body {
			background: #000;
			overflow: hidden;
			background-size: 5%;
		}

		.maincontainer {
			display: flex;
			align-items: center;
			justify-content: center;
			width: 100vw;
			height: 100vh;
		}

		.monkeylogin {
			width: 350px;
			height: 500px;
			box-shadow: 0 10px 25px rgba(0, 0, 0, .2);
			display: flex;
			align-items: center;
			flex-direction: column;
			background-color: white;
			border-radius: 40px;
		}

		.animcon {
			background-color: white;

			overflow: hidden;
			/*overflow hidden because to keep the hand image hidden below*/
			margin-top: 20px;
			height: 170px;
			width: 170px;
			border-radius: 50%;
			background-image: url(images/monkey.gif);
			background-size: 90% 85%;
			background-repeat: no-repeat;
			background-position: center;
			box-shadow: 0 10px 25px rgba(0, 0, 0, .2);

			/*flex center to keep the hand image in the center*/
			display: flex;
			align-items: center;
			flex-direction: column;
		}

		.animcon img {
			margin-top: 110%;
			height: 170px;
			width: 170px;
			transition: 1s;
		}

		.formcon {
			margin-top: 38px;
		}

		input {
			height: 40px;
			width: 300px;
			background-color: #4e0641;
			border-radius: 20px;
			border: none;
			color: #fff;
			text-indent: 25px;
			font-size: 25px;
			box-shadow: 0 10px 25px rgba(0, 0, 0, .2);
			outline: none;
		}

		input::placeholder {
			color: lightgrey;
			font-size: 100%;
			font-weight: lighter;
			text-indent: 15px;
		}

		.sbutton {
			text-indent: 0px;
			height: 40px;
			width: 300px;
			margin-top: 10px;
			background-color: #1b8c1b66;
			transition: "2s";
			border: none;
			color: white;
			font-weight: bolder;
			box-shadow: 0 10px 25px rgba(0, 0, 0, .2);
			outline: none;

		}

		.sbutton:hover {
			color: #5a5449;
			cursor: pointer;
		}

		.foot {
			color: #5a5449;
			font-weight: lighter;
			margin-top: 40px;
		}
	</style>
	<script>
		// AUTHOR		:	ABDUL WAHID NAAFI
		// INSTAGRAM	:	@IAM_NAAFI 
		// INSTAGRAM 	:	@NAAFICODES
		var x = document.getElementById("hands");
		var y = document.getElementById("animcon");

		function closeye() {
			y.style.backgroundImage = "url(images/monkey_pwd.gif)";
			x.style.marginTop = "0%";
		}

		function openeye() {
			y.style.backgroundImage = "url(images/monkey.gif)";
			x.style.marginTop = "110%";
		}
	</script>
</body>

</html>