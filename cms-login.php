<?php session_start() ?>
<?php include "includes/db.php"; ?>


<?php

if(isset($_POST['login'] )){


    $username = $_POST['username'];
    $password = $_POST['password'];


    //SQL-INJECTIONS
    $username = mysqli_real_escape_string($connection,$username);
    $username = mysqli_real_escape_string($connection,$username);


    $query = "SELECT * FROM users WHERE username = '$username'";
    $select_user_query = mysqli_query($connection,$query);



    while ($row = mysqli_fetch_assoc($select_user_query)){

        $db_user_id = $row['user_id'];
        $db_username = $row['username'];
        $db_user_password = $row['user_password'];

        $db_user_firstname = $row['user_firstname'];
        $db_user_lastname = $row['user_lastname'];
        $db_user_role = $row['user_role'];
    }



    if($username !== $db_username || $password !== $db_user_password ){

        //TODO: FEHLER DIV anzeigen
       // echo"<script> window.location = '../index.php?error_code=fl'</script>";

    } else {

        $_SESSION['username'] = $db_username;
        $_SESSION['firstname'] = $db_user_firstname;
        $_SESSION['lastname'] = $db_user_lastname;
        $_SESSION['user_role'] = $db_user_role;

        echo"<script> window.location = '../admin'</script>";

    }
}

?>




<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/blog-login.min.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper fadeInDown">


            <div id="formContent">
                <!-- Tabs Titles -->

                <!-- Icon -->
                <div class="fadeIn first img_logo" >
                    <img src="img/Klickbar.png" id="icon" alt="User Icon" />
                </div>

                <!-- Login Form -->
                <form method="post" action="cms-login.php">
                    <input type="text" id="login username" class="fadeIn second" name="username" placeholder="Username">
                    <input type="text" id="password" class="fadeIn third" name="password" placeholder="Password">
                    <input type="submit" class="fadeIn fourth"  name ="login" value="Log In">
                </form>

                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <a class="underlineHover" href="#">Forgot Password?</a>
                </div>


    </div>
</div>

</body>









