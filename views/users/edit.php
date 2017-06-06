<form action="" method="post" class="form-inline">
	Old Name: <?php echo $user->name; ?><br>
	Old Surname: <?php echo $user->surname; ?><br><br>

	<label class="control-label col-sm-2">New Name:</label>
	<input type='text' name='name' class="form-control" required><br></th>
	
	<label class="control-label col-sm-2">New Surname:</label>
	<input type='text' name='surname' class="form-control" required><br></th><br>

	<input type="submit" name="edit" value="Edit" class="btn btn-default">
</form>

<?php 

$id = $_GET['id'];

if (isset($_POST['edit'])) {
	User::edit($id, $_POST['name'], $_POST['surname']); 
	header('Location: ?controller=users&action=index');
	
}
?>