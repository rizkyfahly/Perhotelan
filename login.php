<?php

require 'admin/setting.php';

if(isset($_POST['login'])){

    $username = $_POST['txtusername'];
    $password = sha1($_POST['txtpassword']);

    $query = mysqli_query($koneksi, "SELECT * FROM user
    WHERE username='$username' and password= '$password' ");

    if (mysqli_num_rows($query) === 1) {
        header('location: admin/index.php');
    }

   echo $error = 'Username atau Password Salah';

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://parsleyjs.org/src/parsley.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://parsleyjs.org/dist/parsley.min.js"></script>
    <script src="https://parsleyjs.org/dist/i18n/id.js"></script>
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
            <div class="card card-body">
                <h3>WELCOME TO HOTEL</h3>
                <form action="" method="POST" data-parsley-validate>
                    <input type="text" name="txtusername"
                    class="form-control mb-3" placeholder="Masukan Username" required data-parsley-trigger="keyup" >

                    <input type="Password" name="txtpassword"
                    class="form-control mb-3" placeholder="Masukan Password" required data-parsley-trigger="keyup" >

                    <input type="Submit" value="login" name="login"
                    class="btn btn-primary">

</form>
</div>
</div>
</div>
</div>
    
</body>
</html>