<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Student Addition</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>/bst/css/bootstrap.min.css">
	<style type="text/css">
		
	</style>
</head>

<body>
	<div class="container" style="margin-top: 20px">
		<center>
			<h1>Add Student</h1><br>
		<?php echo form_open('student/addstudent') ?>
			<div class="form-group">
				<input type="text" placeholder="Name" name="name">
			</div>
			<div class="form-group">
				<input type="number" placeholder="Roll Number" name="rollno" onblur="check_rollno()" id="rollno">
				<label style="display: none;" id="lblrollno">Existing roll number</label>
			</div>
			<div class="form-group">
				<textarea placeholder="Address" name="address"></textarea>
			</div>
			<div class="form-group">
				<input type="submit" value="Submit">
			</div>
		</form>
		<div class="form-group">
			<a href='<?php echo base_url() ?>index.php/student/viewstudent'>View Students</a>
		</div>
		</center>
	</div>
	<script src="<?php echo base_url() ?>bst/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>bst/js/jquery.min.js"></script>
	<script type="text/javascript">
		
		function check_rollno()
		{
			rollno=$('#rollno').val();
			$.ajax ({
				method: 'post',
				url: "<?php echo base_url() ?>index.php/student/rollno_check/"+rollno,
				success: function(data)
				alert(data);
				{
					if(data=='exist')
					{
						$('#lblrollno').css('display','block');
					}
					else
					{
						$('#lblrollno').css('display','none');
					}
				}
			});
		}

	</script>
</body>
