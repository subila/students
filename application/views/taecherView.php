<!DOCTYPE html>
<html>
<head>
	<title>View Teachers</title>
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
				<th>Section</th>
		      </tr>
		    </thead>
		    <tbody>
		      <?php foreach($data as $teacher) { ?>
		      	<tr>
		      		<th><?php echo $teacher['trdid'] ?></th>
		      		<th><?php echo $teacher['trname'] ?></th>
		      		<th><?php echo $teacher['traddr'] ?></th>
		      		<th><?php echo $teacher['trrollno'] ?></th>
		      	</tr>
		      <?php } ?>
		    </tbody>
		</table>
	</div>
	
	<script src="<?php echo base_url() ?>bst/js/bootstrap.min.js"></script>
</body>
</html>