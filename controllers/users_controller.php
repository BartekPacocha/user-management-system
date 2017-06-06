<?php
  class UsersController {
    public function index() {
      $users = User::all();
      require_once('views/users/index.php');
    }

    public function show() {
      if (!isset($_GET['id']))
        return call('pages', 'error');

      $user = User::find($_GET['id']);
      require_once('views/users/show.php');
    }

    public function delete() {
      if (!isset($_GET['id']))
        return call('pages', 'error');

      $user = User::delete($_GET['id']);
      require_once('views/users/delete.php');
    }

    public function edit() {
      if (!isset($_GET['id'] ))
        return call('pages', 'error');

      $user = User::find($_GET['id']);
      require_once('views/users/edit.php');
    }

    public function add() {
      require_once('views/users/add.php');
    }
    
  }
?>