<?php
include("connection.php");

session_start();

if (isset($_POST['submit'])){

    
       
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];
   
    
    


    $select = " SELECT * FROM  user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

        if($row['user_type'] == 'admin'){

            $_SESSION['admin_name'] = $row['name'];
            header('location:welcome.php');

        }elseif($row['user_type'] == 'user'){

            $_SESSION['admin_name'] = $row['name'];
            header('location:welcome.php');
        }

    }else{
        $error[] = 'incorrect email or password!';
    }


};

?>







<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
</head>
<body>
            <div class="form-container">

            <form action="welcome.php" method="post">
                <h3>Login Now</h3>
                <?php

                if(isset($error)){
                    foreach($error as $error){
                    echo '<span class="error-msg">' . $error . '</span>';
                };
                };

                ?>





             <input type="email" name="email" required placeholder="enter your email">
            <input type="password" name="password" required placeholder="enter your password">
            <input type= "submit" name="submit" value="register now" class="form-btn">
                <p>already have an account? <a href="register.php">register now</a></p>
                





</form>
</div>
</body>
                                    <script> src="php.js"</script>
</html>
