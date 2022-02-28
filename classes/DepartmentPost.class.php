<?php

class DepartmentPost {
  private $connection;
  private $query;
  private $posts;
  public $post;

public function fetchDepartmentPosts(){
  $this->connection = new DBConnection();
  $this->query = $this->connection->getConnection()->query('SELECT * FROM department');
  $this->posts = $this->query->fetchAll();
}

public function echoDepartmentPosts(){

  foreach(array_reverse($this->posts) as $post) {
    $id = $post['id'];
    $posturl = $post['imageurl'];
    $content = $post['entertext'];
    echo "

    <div class='article'>
    <img class='blogimage' src='img/blog/{$posturl}'>
    <h2>{$post['title']}</h2>
    <p>Telephone: {$post['telephone']}</p>
    <p>{$content}</p>
    </div>
    ";
}
}

public function echoDepartmentPostsAdmin(){

  foreach(array_reverse($this->posts) as $post) {
    $id = $post['id'];
    $posturl = $post['imageurl'];
    $content = $post['entertext'];
    echo "

    <div class='article'>
    <img class='blogimage' src='img/blog/{$posturl}'>
    <h2>{$post['title']}</h2>
    <p>Telephone: {$post['telephone']}</p>
    <p>{$content}</p>
    <a href='admin-edit_department.php?id={$id}'><button id='button'>Edit</button></a>
    <a href='admin-delete_department.php?id={$id}'><button id='button'>Delete</button></a>
    </div>
    ";
}
}

public function fetchPostID(){
  if(isset($_GET['id'])){
      $id = $_GET['id'];
  }

  $this->connection = new DBConnection();

  $sql = 'SELECT * FROM department WHERE id = :id';
  $query = $this->connection->getConnection()->prepare($sql);
  $query->execute(['id' => $id]);

  $this->post = $query->fetch();
}

public function editDepartment(){
  $this->connection = new DBConnection();
  if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $entertext = $_POST['entertext'];
        $id = $_GET['id'];

        $sql = 'UPDATE department SET title = :title, entertext = :entertext WHERE id = :id ';
        $query = $this->connection->getConnection()->prepare($sql);
        $query->bindParam('title', $title);
        $query->bindParam('entertext', $entertext);
        $query->bindParam('id', $id);

        $query->execute();

        header("Location: admin-department.php");
    }
}



}
