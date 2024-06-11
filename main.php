<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>


    <?php
    include './navbar.php';
    ?>

    <div class="container mx-auto">

        <style>
            .container {
                background-color: aliceblue;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
        </style>

        <?php

        include './connect.php';

        $sql = "SELECT * FROM users";

        $res = $conn->query($sql); //alow 

        ?>


        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th class="col-3">Primary</th>
                    <th class="col-3">Name</th>
                    <th class="col-3">Status</th>
                    <th class="col-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $res->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td style="display: flex;">
                            <a href='delete.php?id= <?php echo $row['id'] ?>' class="btn btn-danger mx-2">DELETE</a>



                            <a href='edit.php?id= <?php echo $row['id'] ?>' class="btn btn-warning">EDIT</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>



    </div>




</body>

</html>


<style>
    body {
        margin: 0;
        padding: 0;
    }
</style>