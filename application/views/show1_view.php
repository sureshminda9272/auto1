<DOCTYPE html>
	<html>
		<body>
			<label>pid:</label>
			<input type="text" id="pid" name="pid" value="<?php echo $details->pid; ?>">
			
			<label>pname:</label>
			<input type="text" id="pname" name="pname" value="<?php echo $details->pname; ?>">
			
			<label>price:</label>
			<input type="text" id="price" name="price" value="<?php echo $details->price; ?>">
			
			<label>pqnty:</label>
			<input type="text" id="pqnty" name="pqnty" value="<?php echo $details->pqnty; ?>">
			<br><br>
			<a href="http://localhost/crudexample/index.php/product_controller/get_all/">Home</a>
		</body>
	</html>
