<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .input-form{
            background-color: #ecf0f1;
            padding: 25px;
            margin-top: 50px;
        }
        .table{
            margin-top: 50px;
        }
        .table thead{
            background-color: #9b59b6;
            color: #fff;
        }
        button[type="submit"]{
            cursor: pointer;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php 
    require_once 'process.php';

    if (isset($_SESSION['message'])): ?>
    
    <div class="alert alert-<?=$_SESSION['msg_type'];?>">
        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
    </div>

    <?php
    endif;

    $mysqli = new mysqli('localhost', 'root', 'pass123', 'php-crud') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
    //pre_r($result);
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Location</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <?php
                        while ( $row = $result->fetch_assoc() ): ?>
                        
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['location']; ?></td>
                        <td>
                            <a href="index.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                            <a href="process.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                    <?php endwhile; ?>

                </table>
            </div>
        </div>
    </div>

<?php

    function pre_r( $array ) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

?>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form class="input-form" action="process.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" value="<?php echo $name ?>" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input class="form-control" type="text" name="location" value="<?php echo $location ?>" placeholder="Enter your location">
                </div>
                <div class="form-group">

                <?php if($update == true): ?>
                    <button type="submit" class="btn btn-info" name="update">Update</button>
                <?php else: ?>
                    <button class="form-control btn-primary" type="submit" name="save">Save</button>
                <?php endif; ?>

                </div>
            </form>
        </div>
    </div>

</div>
    
</body>
</html>