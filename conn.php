<?php
class Model
{
  private $host = "localhost";
  private $username = "root";
  private $password = "";
  private $ndb = "contact";
  private $conn;
  public function __construct()
  {
    try {
      $this->conn =  new mysqli($this->host, $this->username, $this->password, $this->ndb);
    } catch (Exception $e) {

      $var = $e->getMessage();
      echo "
           <script>
              alert('$var');
           </script>
       ";
    }
  }
  public function insert()
  {
    if (isset($_POST['submit'])) {
      $nam = $_POST['nam'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $adrs = $_POST['adrs'];
      $use=$_SESSION['id'];
      $query = "INSERT INTO  contc VALUES (NULL,'$nam','$phone','$email','$adrs','$use')";
      $sql = $this->conn->query($query);
    }
  }
  public function fetch($id)
  {
    
    $data = null;
    $query = "SELECT * FROM contc where iduser ='$id'";
    if($sql = $this->conn->query($query)){
      while ($row =$sql->fetch_assoc()) {
        $data[] = $row;
       }
    }
   if($data)
   {
    return $data;
   }
   else
   {
     echo '<div class="text-center fs-1 "> <strong>no contact!!!</strong> </div>';

   }
    
  }
  public function delete($id)
  {
    $query = "DELETE FROM contc WHERE id = '$id'";
    if ($sql = $this->conn->query($query)) {
      return true;
    } else {
      return false;
    }
  }
  public function edit($id)
  {
    $data = null;
    $query = "SELECT * FROM contc WHERE id = '$id'";
    if ($sql = $this->conn->query($query)) {
      while ($row = $sql->fetch_assoc()) {
        $data = $row;
      }
    }
    return $data;
  }
  public function update($data)
  {
    $query = "UPDATE contc SET nam ='$data[nam]',phone='$data[phone]' ,email='$data[email]',adrs='$data[adrs] ' WHERE id='$data[id]'";
    if ($sql = $this->conn->query($query)) {
      return true;
    } else {
      return false;
    }
  }
  public function signup()
  {
    if (isset($_POST['submit'])) {
      $user = $_POST['user'];
      $pass = md5($_POST['pass']);
      $passv =$_POST['passv'] ;
      $query = "INSERT INTO  sinup VALUES (NULL,'$user','$pass','$passv',sysdate())";
      $sql = $this->conn->query($query);
      header('location:login.php');
    }
  }
  public function login()
  {
    if (isset($_POST['submit'])) {
      $user = $_POST['user'];
      $pass = md5($_POST['pass']);
      $query = "SELECT * FROM sinup WHERE name = '" . $user . "' AND pass ='" . $pass . "'";
      $sql = $this->conn->query($query);
      $res = $sql->num_rows;
      if ($res != 0) {
        while ($rows = $sql->fetch_assoc()) {
          session_start();
          $_SESSION['id'] = $rows['id'];
          $_SESSION['name'] = $rows['name'];
          $_SESSION['date']= date('l j F Y, H:i');
          echo $rows['name'];
        }

        header('location:contact.php');
      } else {

        echo "<script>alert('password or your name is not correct')</script>";
      }
    }
  }
  public function Date()
  {
    $query = "SELECT tempts FROM sinup WHERE id='2'";
    $sql = $this->conn->query($query);
    $res = $sql->fetch_assoc();
    echo $res['tempts'];
  }
  public function Date_2()
  {
    $query = "SELECT tempts FROM sinup WHERE id='2'";
    $sql = $this->conn->query($query);
    $res = $sql->fetch_assoc();
    echo $res['tempts'];
  }
  
}
