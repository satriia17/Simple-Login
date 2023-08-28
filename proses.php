<?php
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user == 'admin' && $pass == 'admin') {
        header("Location: /vsga7/pertemuan4/proses.php");
    } else {
        $salah = true;
        header("Location: /vsga7/pertemuan4/index.php?salah=1");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login admin</title>
</head>

<body>
    <h1>SELAMAT DATANG ADMIN</h1>
    <a href="login.php">Login ulang</a>
</body>

</html>