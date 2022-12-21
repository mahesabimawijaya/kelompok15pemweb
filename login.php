<?php 
 include "config/functions.php";
  
  if (isset($_POST["submit"])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM tb_admin WHERE user='$user' AND pw='$pass'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        header("Location:dashboard.php?halaman=1");
    } else {
        echo "<script>
        alert('username atau password Anda salah. Silahkan coba lagi!')
        </script>";
    }
  }
 ?>
<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
    <title>laman login</title>
    <link rel="icon" href="img/download.png">
	<style>
	body{
		background-image: url(https://i.ibb.co/nMHhKkC/trnava-university-sd8u-Jsf4-XM4-unsplash.jpg);
		background-size: cover;
		background-attachment: fixed;
		display: flex;
		justify-content: center;
		align-items: center;
		height: 90vh;
		flex-direction: column;
		}

		*{
			font-family: sans-serif;
			box-sizing: border-box;
		}

		form {
			width: 500px;
			border: 2px solid #ccc;
			padding: 30px;
			border-radius: 15px;
	}

	h2{
			text-align: center;
			margin-bottom: 40px;
	}

	input {
		display: block;
		border: 2px solid #ccc;
		width: 95%;
		padding: 10px;
		margin: 10px auto;
		border-radius: 5px;
	}

	label {
		color: #fff;
		font-size: 18px;
		padding: 10px;
		font-style: italic;
		font-family: time-new-roman;
	}

	button {
		float: right;
		background: #555;
		padding: 10px 15px;
		color: #fff;
		border-radius: 5px;
		margin-right: 10px;
		border: none;
	}

	button:hover{
		opacity: .7;
	}
	.error{
		background: #F2DEDE;
		color: #A94442;
		padding: 10px;
		width: 95%;
		border-radius: 5px;
		margin: 20px auto;
	}

	h1 {
		text-align: center;
		color: #fff;
		font-size: 40px;
		font-family: time-new-roman;
	}

	a {
		float: right;
		background: #555;
		padding: 10px 15px;
		color: #A52A2A;
		border-radius: 5px;
		margin-right: 10px;
		margin: none;
		text-decoration: none;
	}
	a:hover{
		opacity: .7;
	}

	legend{
		color: #A52A2A;
		font-family: time-new-roman;
	}
	label{
		color: #A52A2A;
		font-family: time-new-roman;
	}
	.nav-link:hover{
		background-color: grey;
	}
	.display-4{
		font-weight: bold;
	}
	.card-body-icon{
		position: absolute;
		z-index: 0;
		top: 25px;
		right: 4px;
		opacity: 0.4;
		font-size: 80px;
	}
	.sidenav {
		height: 100%;
		width: 160px;
		position: fixed;
		z-index: 1;
		top: 0;
		left: 0;
		background-color: #111;
		overflow-x: hidden;
		padding-top: 20px;
}	
	</style>
</head>
<body>
	<div class="container">
		<h1>ADMIN E - LEARNIF</h1>

	<form action="login.php" method="post">
		<fieldset>
			<legend><center>L O G I N</center></legend>
			<p>
				<label for="username">Username: </label>
				<input type="text" name="username" id="username" autocomplete="off" placeholder="username">
			</p>
			<p>
				<label for="password">Password: </label>
				<input type="password" name="password" id="password" autocomplete="off" placeholder="password" >
			</p>
			<p>
				<input type="submit" name="submit" value="LOGIN">
			</p>
		</fieldset>
	</form>
	</div>
</body>
</html>