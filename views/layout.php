<DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <header>
      <a href='/user_mvc'>Home</a>
      <a href='?controller=users&action=index'>Users</a>
      <a href='?controller=users&action=add'>Add User</a>
    </header>

    <?php require_once('routes.php'); ?>

    
  <body>
<html>