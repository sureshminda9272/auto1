<DOCTYPE html>
	<html>
		<head></head>
		<center>
			
		<body>
			<form method="Post" action="http://localhost/crudexample/index.php/registration_controller/getregdata/">
			<label>REGISTRATION FORM</label><br><br>

			<label>Username</label><br>
			<input type="text" id="name" name="name" placeholder="Enter Your Fullname"><br><br>

			<label>Email</label><br>
			<input type="text" id="mail" name="mail" placeholder="Enter Your emailID"><br><br>

			<label>Phone Number</label><br>
			<input type="text" id="number" name="number" placeholder="Enter Your phone number"><br><br>

			<label>Password</label><br>
			<input type="text" id="pass" name="pass" placeholder="Enter Your password"><br><br>

			<label>Confirm Password</label><br>
			<input type="text" id="confp" name="confp" placeholder="Enter Your Confirm password"><br><br>

			<error id="alert" style="color: red;"></error><br><br>
			
			<button onclick="return validate()">SUBMIT</button>
			</form>

			<script>
				var patten = /\s/g;
				var alertp = document.getElementById("alert");

				function validate()
				{
					var name = document.getElementById("popup").value;
					var name = document.getElementById("name").value;
					var mail = document.getElementById("mail").value;
					var number = document.getElementById("number").value;
					var pass = document.getElementById("pass").value;
					var confp = document.getElementById("confp").value;
					var mailformat = /^[a-zA-Z0-9][\-_\.\+\!\#\$\%\&\'\*\/\=\?\^\`\{\|]{0,1}([a-zA-Z0-9][\-_\.\+\!\#\$\%\&\'\*\/\=\?\^\`\{\|]{0,1})*[a-zA-Z0-9]@[a-zA-Z0-9][-\.]{0,1}([a-zA-Z][-\.]{0,1})*[a-zA-Z0-9]\.[a-zA-Z0-9]{1,}([\.\-]{0,1}[a-zA-Z]){0,}[a-zA-Z0-9]{0,}$/i;
					var num = /[0-9]/;
					var uppercase = /[A-Z]/;
					var lowercase = /[a-z]/;
					var symbol = /[\-_\.\+\!\@\#\$\%\&\'\*\/\=\?\^\`\{\|]/;

					

					if(pass != confp)
					{
						alertp.innerHTML = "Confirm password didn't match try again";
						return false;
					}	
					

					if(name == "" || name == null)
					{
						alertp.innerHTML = "*please fill all details";
						return false;
					}

					

					
				if(!mail.match(mailformat))
				{
					alertp.innerHTML = "* Please provide a valid email address";
					return false;
					
				}

				if(!number.match(num))
				{
					alertp.innerHTML = "* Please enter phone number";
					return false;
				}

				if(number.length<10)
				{
					alertp.innerHTML = "* Atleast 10 charecters in phonenumber ";
					return false;
				}
				if(number.length>10){
					alertp.innerHTML = "* Above 10 charecters are not allowed in phonenumber ";
					return false;
				}

				if(!pass.match(uppercase))
				{
					alertp.innerHTML = "* Atleast one uppercase in password ";
					return false;
				}

			
				if(!pass.match(lowercase))
				{
					alertp.innerHTML = "* Atleast one lowercase in password ";
					return false;
				}

				if(!pass.match(symbol))
				{
					alertp.innerHTML = "* Atleast one special symbol in password ";
					return false;
				}

				if(!pass.match(num))
				{
					alertp.innerHTML = "* Atleast one number in password ";
					return false;
				}

				if(pass.length<6)
				{
					alertp.innerHTML = "* Atleast 6 charecters in password ";
					return false;
				}

				

				}
			</script>
		</body>
		<center>
	</html>