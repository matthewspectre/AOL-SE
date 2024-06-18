<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f3f3f3;
}

.login-container {
  background-color: white;
  border: 1px solid #e7e7e7;
  padding: 40px;
  border-radius: 8px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  width: 300px;
  text-align: center;
}

.login-container h2 {
  margin-bottom: 20px;
  color: #666;
}

.login-container input[type="text"],
.login-container input[type="password"] {
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.login-container input[type="submit"] {
  width: 100%;
  padding: 10px;
  margin-top: 20px;
  background-color: #A39B99;
  border: none;
  border-radius: 4px;
  color: white;
  font-weight: bold;
  cursor: pointer;
}

.login-container input[type="submit"]:hover {
  background-color: #999;
}

.login-container .register-link {
  margin-top: 20px;
}

.login-container .register-link a {
  color: #A39B99;
  text-decoration: none;
  font-weight: bold;
}

.login-container .register-link a:hover {
  text-decoration: underline;
}
</style>
</head>
<body>

<form action="proses_login.php" method="post"> 
<div class="login-container">
  <h2>Login</h2>
  <form action="index.php" method="post">
    <input type="text" id="username" name="username" placeholder="Username" required>
    <input type="password" id="password" name="password" placeholder="Password" required>
    <input type="submit" value="Login">
  </form>
  <div class="register-link">
    <p>Don't have an account? <a href="register.php">Register here</a></p>
  </div>
</div>
 </form> 

</body>

<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</html>
