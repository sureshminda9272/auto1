<!DOCTYPE html>
<html>
	<body>
		<center>
	<script type="text/javascript">
		 function validate()
		 {
			var pname=document.getElementById('pname').value;
			var price=document.getElementById('price').value;
			var pqnty=document.getElementById('pqnty').value;
		
			if (pname==null || pname==''){  
        		alert("fill the productname");  
        		return false;  
     		 }
       if(pname.length<3){  
        	alert("productname more than two charecters");  
          	return false;  
        }
		if (!isNaN(pname)) {
			alert("Product name should not contain numbers");
			return false;
		}
		//alert(price.length);
		if (price.length == "") {
			alert('price is mandatory');
			return false;
		}
		if(isNaN(price)) {
			alert('Price is numeric');
			return false;

		}

			if (pqnty==null || pqnty==''){  
        		alert("fill the productquantity");  
        		return false;  
     		 }
				
		}
	</script>
		
		<form action='http://localhost/crudexample/index.php/product_controller/insert2/' method="POST">
			 
			

			<label for='pname'>Pname:</label><br>
			<input type="text" id="pname" name="pname" placeholder="Productname"><br>
			
			<label for='price'>Price:</label><br>
			<input type="text" id="price" name="price" placeholder="Productprice"><span id="numloc"></span><br>

			<label for='pqnty'>Pqnty:</label><br>
			<input type="text" id="pqnty" name="pqnty" placeholder="Productqnty"><br><br>
			
			<input type="submit" onclick="return validate()" style="margin-left:110px;">
		</form>
	</body>
		</center>
</html>

