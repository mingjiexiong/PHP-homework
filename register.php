<meta charset="utf-8">

<head>
<link rel="stylesheet" type="text/css" href="./css/styles.css" />
</head>


<form class="box" method="post">

<h1>Registe</h1>
   <input type="text" name="name" placeholder="Username">

   <input type="password" name="pw" placeholder="Password">

   <input type="password" name="repw" placeholder="Password">

   <input type="text" name="email" placeholder="email">
 
    <button type="submit" name="submit" value="Register">registe</button>
</form>

<?php

$link = mysqli_connect('localhost', 'root', 'root', 'mysql');

if (!$link) {
    die('Could not connect: ' . mysql_error());
} else {
    $sql = "CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        pw VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL
    )";

    if ($link->query($sql) === TRUE) {
        echo "";
    } else {
        echo "";
    }

    if (isset($_POST['submit'])) {
        if ($_POST['pw'] == $_POST['repw']) {
            $query = "INSERT INTO MyGuests (name,pw,email) values('{$_POST['name']}','{$_POST['pw']}','{$_POST['email']}')";
            $result = mysqli_query($link, $query);
            header("Location:login.php");
        } else {
            echo "<script>alert('两次输入密码不一致！')</script>";
        }
    }
}

?>