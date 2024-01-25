<?php //print_r($details); ?>
<!DOCTYPE html>
<html>
	<style>
		th,td,table{
			border:1px solid black;
		}
		#tableid {
			width: 70%;
			margin-left: 150px;
			padding: 2px;
			margin-top: 84px;
			text-align: center

		}
	</style>
	<body>
		<table id="tableid">
			<thead>
				<th>Id</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th><a href="http://localhost/crudexample/index.php/student_controller/insert_call/">insert</a></th>
			</thead>
				<tbody>
					<?php foreach($details as $row) { ?>
						<tr> 
							<td><?=$row->Id?></td>
							<td><?=$row->Firstname?></td>
							<td><?=$row->Lastname?></td>
							<td>
								<a href="<?php echo base_url('student_controller/show/'. $row->Id);?>"> show </a>
							</td>
							<td>
								<a href="<?php echo base_url('student_controller/edit/'. $row->Id);?>"> edit </a>
							</td>
							<td>
								<a href="<?php echo base_url('student_controller/delete/'. $row->Id);?>"> delete </a>
							</td>
						</tr>	
					<?php } ?>
				</tbody>
		</table>
	</body>
</html>