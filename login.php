<meta charset="utf-8">

<head>
    <link rel="stylesheet" type="text/css" href="./css/styles.css" />
</head>


<form class="box" method="post">

    <h1>Login</h1>
    <input type="text" name="name" placeholder="Username">

    <input type="password" name="pw" placeholder="Password">

    <button type="submit" name="submit" value="Login">login</button>
</form>


<?php

$link = mysqli_connect('localhost', 'root', 'root', 'mysql');

if (!$link) {
    echo "<script>alert('数据库连接失败！')</script>";
} else {
    if (isset($_POST['submit'])) {
        $query = "select * from MyGuests where name = '{$_POST['name']}' and pw = '{$_POST['pw']}'";
        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) == 1) {
            header("Location:index.php");
        }
    }
}



?>