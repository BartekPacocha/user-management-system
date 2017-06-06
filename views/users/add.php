<form action="" method="post">
	 Imie:<input type='text' name='name'  required><br></th>
	 Nazwisko:<input type='text' name='surname'  required><br></th>
	 Adres:<input type='text' name='address'  required><br></th>
	 Nazwa:<input type='text' name='username'  required><br></th>
	 Haslo:<input type='text' name='password'  required><br></th>
	 Email:<input type='text' name='email'  required><br></th>
	<input type="submit" name="add" value="Add">
</form>

<?php 

if (isset($_POST['add'])) {
	User::add($_POST['name'], $_POST['surname'], $_POST['address'], $_POST['username'], $_POST['password'], $_POST['email']); 
	header('Location: ?controller=users&action=index');
}

?>