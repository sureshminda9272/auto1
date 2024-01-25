<!DOCTYPE html>
<html>

<head>
	<style>
		div.top {
			margin-right: 125px;
			margin-top: 100px;
		}

		div.val {
			margin-left: 40px;
		}

		div.yet {
			margin-left: 30px;
		}

		body {
			background-image: url('http://localhost/crudexample/assets/loginimg.jpg');

		}

		div.close{
			border:1px solid brown; 
			/*visibility: hidden;*/
			width: 25%; 
			color: brown; 
			font-size: 15px; 
			position: relative; 
			top: 65px;
		}

	
	</style>
</head>
<center>
	<body>

		 <div class = "close">
		

			<p> <?php
			if (isset($invalid)) {
				echo $invalid;
			}
			if (isset($register_success)) {
			echo $Username . '--' . $register_success;
			}

			if(isset($update_success)){
			echo $update_success ;
			}
			//echo $update_success;

		?></p>
		</div>


		<form method="post" action="http://localhost/crudexample/index.php/Logincheck/checklogin/">
			<div class="top">
				<label>Log in</label><br><br>
			</div>
			<!--<label for="log">Username:</label>-->
			<input type="text" id="log" name="log" placeholder="Email" onkeyup="white()"><br><br>
			<!--<label for="pass">Password:</label>-->
			<input type="text" id="pass" name="pass" placeholder="Password" onkeyup="black()"><br><br>
			<error id="alert" style="color: red;"></error><br><br>
			<div class="val">
				<button onclick="return validate()">LOG IN</button>
				<a href="http://localhost/crudexample/index.php/forgotpassword/changepassword/">Forgot your password?</a><br><br>
			</div>
		</form>

		<form action="http://localhost/crudexample/index.php/registration_controller/signup/">
			<div class="yet">
				<label>Don't have an account yet?</label><br>
				<button>SIGN UP</button>
			</div>
		</form>

		<script>
			var patten = /\s/g;
			var alertp = document.getElementById("alert");

			function white() {
				var log = document.getElementById("log").value;

				if (log.match(patten)) {

					alertp.innerHTML = "* white space are not allowed in email";
					return false;
				}

				alertp.innerHTML = "";
				return true;
			}

			function black() {
				var pass = document.getElementById("pass").value;
				if (pass.match(patten)) {
					alertp.innerHTML = "* white space are not allowed in password";
					return false;
				}
				alertp.innerHTML = "";
				return true;
			}

			function validate() {
				var log = document.getElementById("log").value;
				var pass = document.getElementById("pass").value;
				var mailformat = /^[a-zA-Z0-9][\-_\.\+\!\#\$\%\&\'\*\/\=\?\^\`\{\|]{0,1}([a-zA-Z0-9][\-_\.\+\!\#\$\%\&\'\*\/\=\?\^\`\{\|]{0,1})*[a-zA-Z0-9]@[a-zA-Z0-9][-\.]{0,1}([a-zA-Z][-\.]{0,1})*[a-zA-Z0-9]\.[a-zA-Z0-9]{1,}([\.\-]{0,1}[a-zA-Z]){0,}[a-zA-Z0-9]{0,}$/i;
				var uppercase = /[A-Z]/;
				var lowercase = /[a-z]/;
				var symbol = /[\-_\.\+\!\@\#\$\%\&\'\*\/\=\?\^\`\{\|]/;
				var num = /[0-9]/;

				if (log == "" || log == null) {
					alertp.innerHTML = "*please fill all details";
					return false;
				}

				if (pass == "" || pass == null) {
					alertp.innerHTML = "*please fill all details";
					return false;
				}


				if (!log.match(mailformat)) {
					alertp.innerHTML = "* Please provide a valid email address";
					return false;

				}

				if (!pass.match(uppercase)) {
					alertp.innerHTML = "* Atleast one uppercase in password ";
					return false;
				}

				if (!pass.match(lowercase)) {
					alertp.innerHTML = "* Atleast one lowercase in password ";
					return false;
				}

				if (!pass.match(symbol)) {
					alertp.innerHTML = "* Atleast one special symbol in password ";
					return false;
				}

				if (!pass.match(num)) {
					alertp.innerHTML = "* Atleast one number in password ";
					return false;
				}

				if (pass.length < 6) {
					alertp.innerHTML = "* Atleast 6 charecters in password ";
					return false;
				}

			}
		</script>
	</body>
	<center>

</html>