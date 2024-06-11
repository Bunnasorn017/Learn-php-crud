<?php
include './connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {

  $id = $_POST['id'];
  $name = $_POST['name'];
  $status = $_POST['status'];

  try {
    $req = "UPDATE users SET name = '$name' , status = '$status' WHERE id = $id";
    $conn->query($req);
    header('Location: main.php');

  } catch (Exception $th) {
    echo $th;
  }
}
