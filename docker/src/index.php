<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'conn.php';
if(isset($_POST["email"])){
    $name= $_SERVER["HTTP_HOST"];
    $email= $_POST["email"];
    $q ="INSERT INTO `details`(`name`, `email`) VALUES ('$name','$email')";
    $query = mysqli_query($con,$q);
}
?>
<form action="index.php" method="post">

E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
</body>
</html>
