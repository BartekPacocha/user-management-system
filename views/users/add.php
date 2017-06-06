<form action="" method="post" class="form-inline">
	 <label class="control-label col-sm-2">Imie: </label><input type='text' name='name' class="form-control" required><br></th>
	 <label class="control-label col-sm-2">Nazwisko: </label><input type='text' name='surname' class="form-control"  required><br></th>
	 <label class="control-label col-sm-2">Adres: </label><input type='text' name='address' class="form-control" required><br></th>
	 <label class="control-label col-sm-2">Nazwa: </label><input type='text' name='username' class="form-control" required><br></th>
	<label class="control-label col-sm-2"> Haslo: </label><input type='text' name='password' class="form-control" required><br></th>
	 <label class="control-label col-sm-2">Email: </label><input type='text' name='email' class="form-control" required><br></th><br>
	<input type="submit" name="add" value="Add" class="btn btn-default"><br>
</form>

<?php 

if (isset($_POST['add'])) {
	User::add($_POST['name'], $_POST['surname'], $_POST['address'], $_POST['username'], $_POST['password'], $_POST['email']); 
	header('Location: ?controller=users&action=index');
}

?>