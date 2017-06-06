<form action="" method="post">
	Stare Imie: <?php echo $user->name; ?><br>
	Nowe Imie:<input type='text' name='name'  required><br></th>
	Stare Nazwisko: <?php echo $user->surname; ?><br>
	Nowe Nazwisko:<input type='text' name='surname'  required><br></th>
	<input type="submit" name="edit" value="Edit">
</form>

<?php 

$id = $_GET['id'];

if (isset($_POST['edit'])) {
	User::edit($id, $_POST['name'], $_POST['surname']); 
	header('Location: ?controller=users&action=index');
	
}
?>