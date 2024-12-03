<?php
    require('../api/config/db_connection.php');

    $email = $_POST['email'];
    $pass = $_POST['password'];
    $enc_pass = md5($pass);

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = pg_query($conn, $query);
    $row = pg_fetch_assoc($result);
    if ($row) {
        $query = "SELECT * FROM users WHERE password='$enc_pass'";
        $result = pg_query($conn, $query);
        $row = pg_fetch_assoc($result);
        if ($row) {
            header ('refresh:0; url=http://127.0.0.1/startbootstrap-sb-admin-2-gh-pages/index.html');
        } else {
            echo "<script>alert('credentials are incorrect')</script>";
            header("refresh:0;url=http://127.0.0.1/startbootstrap-sb-admin-2-gh-pages/login.html");
        }
        exit();
    } else {
        echo "<script>alert('Email not found')</script>";
        header("refresh:0;url=http://127.0.0.1/startbootstrap-sb-admin-2-gh-pages/login.html");
        exit();
    }
    pg_close($conn)

?>