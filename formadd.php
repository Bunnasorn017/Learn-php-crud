<?php

include './connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST['name'];
  $status = $_POST['status'];

  $sql = "INSERT INTO users (name, status) VALUES ('$name', '$status')";

  $conn->query($sql);

  header('Location: main.php');
}

?>


<!DOCTYPE html>
<html>

<head>
  <title>Add New Record</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <div class="container mt-5 mx-auto">
    <h2 class="mb-4">Add New Record</h2>
    <form method="post" action="">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="status">Status:</label>
        <input type="status" class="form-control" id="status" name="status" required>
      </div>
      <button type="submit" class="btn btn-success">CREATE</button>
      <a href="main.php" type="submit" class="btn btn-outline-info">HOME</a>
    </form>
  </div>

  <style>
    button {
      display: flex;
    }
  </style>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>