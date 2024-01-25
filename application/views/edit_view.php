

<!DOCTYPE html>
<html>
	<body>
		<form action='http://localhost/crudexample/index.php/student_controller/edit1/' method='POST'>
			<label for='id'>Id:</label><br>
			<input type="text" id="Id" name="Id" value="<?php echo $information->Id ?>" readonly><br>
			
			<label for='fname'>Firstname:</label><br>
			<input type="text" id="Firstname" name="Firstname" value="<?php echo $information->Firstname ?>" ><br>
			
			<label for='lname'>Lastname:</label><br>
			<input type="text" id="Lastname" name="Lastname" value="<?php echo $information->Lastname ?>"><br><br>
			<input type="submit" value="submit">
		</form>
	</body>
</html>
