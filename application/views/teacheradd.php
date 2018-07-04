<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Teacher Addition</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>/bst/css/bootstrap.min.css">
</head>

<body>
	<div class="container" style="margin-top: 20px">
		<center>
			<h1>Add Teacher</h1><br>
		<?php echo form_open('teacher/addteacher') ?>
			<div class="form-group">
				<input type="text" placeholder="Name" name="name">
			</div>
			<div class="form-group">
				<input type="number" placeholder="section" name="section" onblur="check_section(this)">
			</div>
			<div class="form-group">
				<textarea placeholder="Address" name="address"></textarea>
			</div>
			<div class="form-group">
				<input type="submit" value="Submit">
			</div>
		</form>
		<div class="form-group">
			<a href='<?php echo base_url() ?>index.php/teacher/viewteacher'>View Teachers</a>
		</div>
		</center>
	</div>
	<script src="<?php echo base_url() ?>bst/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		
		function check_section(class)
		{
			no=section.value;
			
		}

	</script>
</body>
</html>