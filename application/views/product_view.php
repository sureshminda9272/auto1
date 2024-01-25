<!DOCTYPE html>
<html>
    <head>
    <style>
		th,td{
			border:1px solid black;
            width:400px;
            height:20px;
		}
        a{
            background-color:yellow; color:red;
            border:2px solid #008080;
            
            
        
        }
        
        div.bottom{
            
            border:1px solid black;
            /*background-color: #BDB76B;*/
            padding: 1px;
            width:900px;
            height:153x;
            margin-top:20px;
            margin-left:550px;
            margin-bottom:20x;
            margin-left:290px;
        }
        div.top{
           
            height:5px;
            width:64px;
            margin-top:200px;
            margin-left:1120px;;
        }

        div.down{
            margin-left:700px;
            margin-top:50px;
        }

        body{
            background-image:url("http://localhost/crudexample/assets/loginback.jpg")
        }
    </style>
    </head>
    <div class="top">
    <a href="http://localhost/crudexample/index.php/product_controller/insert/";>Add Pdct</a>
    </div>
    <body>
    
    <div class="bottom">
        <table >
            <thead>
                <th>pid</th>
                <th>pname</th>
                <th>price</th>
                <th>pqnty</th>
            </thead>
            <tbody>
                <?php foreach($details as $row) { ?>
                        <tr>
                            <td> <?= $row->pid ?> </td>
                            <td> <?= $row->pname ?> </td>
                            <td> <?= $row->price ?> </td>
                            <td> <?= $row->pqnty ?> </td>
                            <td> <a href="<?php echo base_url('index.php/product_controller/show/'. $row->pid); ?>" style="background-color:#6495ED; color:white;"> show </a> </td> 
                            <td>
                                <a href="<?php echo base_url('index.php/product_controller/edit/'. $row->pid); ?>" style="background-color:#98FB98; color:black;"> edit </a>
                            </td>
                            <td>
                                <a href="<?php echo base_url('index.php/product_controller/delete/'. $row->pid); ?>" style="background-color:#40E0D0; color:red;"> delete </a>
                            </td>
                        </tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>
    <div class = "down">
        <form action = "http://localhost/crudexample/index.php/product_controller/login/">
        <button>LOG OUT</button>
        </form>
        </div>  
    </body>
    
    
</html>