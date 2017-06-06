<p>Here is a list of all users:</p>

<table class='table'>
  <tr>
    <th>Imie</th>
    <th>Nazwisko</th>
    <th>Adres</th>
    <th>Nazwa</th>
    <th>Haslo</th>
    <th>Email</th>
    <th>Show</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
<?php foreach($users as $user) { ?>
  <tr>
    <td><?php echo $user->name; ?></td>
    <td><?php echo $user->surname; ?></td>
    <td><?php echo $user->address; ?></td>
  	<td><?php echo $user->username; ?></td>
  	<td><?php echo $user->password; ?></td>
  	<td><?php echo $user->email; ?></td>

    <td><a href='?controller=users&action=show&id=<?php echo $user->id; ?>'>Show</a></td>
    <td><a href='?controller=users&action=edit&id=<?php echo $user->id; ?>'>Edit</a></td>
    <td><a href='?controller=users&action=delete&id=<?php echo $user->id; ?>'>Delete</a></td>
  </tr>
</table>
<?php } ?>