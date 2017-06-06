<?php
  class User {
    // we define 3 attributes
    // they are public so that we can access them using $user->name directly
    public $id;
    public $name;
    public $surname;

    public function __construct($id, $name, $surname, $address, $username, $password, $email) {
      $this->id      = $id;
      $this->name  = $name;
      $this->surname = $surname;
      $this->address = $address;
      $this->username = $username;
      $this->password = $password;
      $this->email = $email;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM users');

      foreach($req->fetchAll() as $user) {
        $list[] = new User($user['id'], $user['name'], $user['surname'], $user['address'], $user['username'], $user['password'], $user['email']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM users WHERE id = :id');
      $req->execute(array('id' => $id));
      $user = $req->fetch();

      return new user($user['id'], $user['name'], $user['surname'], $user['address'], $user['username'], $user['password'], $user['email']);
    }

    public static function delete($id) {
            $db = Db::getInstance();
            $id = intval($id);
            $req = $db->prepare('DELETE FROM users WHERE id = :id');
            $req->execute(['id' => $id]);            
    }

    public static function add($name, $surname, $address, $username, $password, $email) {
            try {
            $db = Db::getInstance();
            $req = $db->prepare('
              INSERT INTO users (name, surname, address, username, password, email)
              VALUES (:name, :surname, :address, :username, :password, :email)');
            $req->execute([
              'name' => $name,
              'surname' => $surname,
              'address' => $address,
              'username' => $username,
              'password' => $password,
              'email' => $email
              ]);            
    } catch (PDOException $e) {
      echo 'Query failed: ' . $e->getMessage();
  }
}

  public static function edit($id, $name, $surname) {
            $db = Db::getInstance();
            $id = intval($id);
            $req = $db->prepare('UPDATE users SET name = :name, surname = :surname WHERE id = :id');
            $req->execute([
              'id' => $id,
              'name' => $name,
              'surname' => $surname
              ]);            
    }


}
?>