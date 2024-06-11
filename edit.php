<?php
include './connect.php';
if (isset($_GET['id'])) {

  $id = $_GET['id'];

  try {
    $req = "SELECT * FROM users WHERE id = $id";
    $res = $conn->query($req);
    $row = $res->fetch_assoc();

  } catch (Exception $th) {
    echo $th;
  }

  $conn->close();
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>Update Users Record</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <div class="container mt-5 mx-auto">
    <h2 class="mb-4">Update Users Record</h2>
    <form method="post" action="update.php">

    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

      <div class="form-group">
        <label for="name">New Name</label>
        <input value="<?php echo $row['name'] ?>" type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="status">New Status</label>
        <input value="<?php echo $row['status'] ?>" type="status" class="form-control" id="status" name="status" required>
      </div>
      <button type="submit" class="btn btn-primary" >UPDATE</button>
    </form>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>