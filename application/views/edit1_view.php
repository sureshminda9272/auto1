
<DOCTYPE html>
	<html>
		<body>
			<form action="http://localhost/crudexample/index.php/product_controller/edit2/" method="POST">
			<lable>pid:</lable>
			<input type="text" id="pid" name="pid" value="<?php echo $information->pid; ?>" readonly>
			
			<lable>pname:</lable>
			<input type="text" id="pname" name="pname" value="<?php echo $information->pname;  ?>">
			
			<lable>price:</lable>
			<input type="text" id="price" name="price" value="<?php echo $information->price; ?>">
			
			<lable>pqnty:</lable>
			<input type="text" id="pqnty" name="pqnty" value="<?php echo $information->pqnty; ?>">
			<br><br>
			<input type="submit" value="submit">
			</form>
		</body>
	</html>