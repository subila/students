<!DOCTYPE html>
<html>
<head>
	<title>View Students</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>/bst/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<table class="table table-striped">
			
			<thead>
		      <tr>
		        <th>Sl. No.</th>
				<th>Name</th>
				<th>Address</th>
				<th>Roll No.</th>
		      </tr>
		    </thead>
		    <tbody>
		      <?php foreach($data as $student) { ?>
		      	<tr>
		      		<th><?php echo $student['stdid'] ?></th>
		      		<th><?php echo $student['stname'] ?></th>
		      		<th><?php echo $student['staddr'] ?></th>
		      		<th><?php echo $student['strollno'] ?></th>
		      		 <th><div class="form-group">
			<a href='<?php echo base_url() ?>index.php/student/viewstudent'>Delete</a>
			
		</div></th>
		      	</tr>
		      <?php } ?>

		    </tbody>
		    
		</table>
	</div>
	
	<script src="<?php echo base_url() ?>bst/js/bootstrap.min.js"></script>
</body>
</html>