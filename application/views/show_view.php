 <?php //print_r($show); ?>
<style>
    th,td,table{
			border:1px solid black;
		}
</style>
<center>
<table broder="22" width="80"> 
    <thead>
        <th>Id</th>
        <th>Firstname</th>
        <th>Lastname</th>
    </thead>
    <tbody>
        <tr>
            <td> <?php echo $show->Id; ?></td>
            <td><?php echo $show->Firstname; ?></td>
            <td> <?php echo $show->Lastname; ?></td>
        </tr>
    </tbody>
</table>
<br/>
<br/>
<a href="http://localhost/crudexample/index.php/student_controller/get_all/"><button> Home</button></a>
</center>