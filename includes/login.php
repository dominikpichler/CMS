<?php session_start() ?>
<?php include "db.php"; ?>


<?php

if(isset($_POST['login'] )){

    $username = $_POST['username'];
    $password = $_POST['password'];


    //SQL-INJECTIONS
    $username = mysqli_real_escape_string($connection,$username);
    $username = mysqli_real_escape_string($connection,$username);


    $query = "SELECT * FROM users WHERE username = '$username'";
    $select_user_query = mysqli_query($connection,$query);

}

while ($row = mysqli_fetch_assoc($select_user_query)){

    $db_user_id = $row['user_id'];
    $db_username = $row['username'];
    $db_user_password = $row['user_password'];

    $db_user_firstname = $row['user_firstname'];
    $db_user_lastname = $row['user_lastname'];
    $db_user_role = $row['user_role'];



}



if($username !== $db_username || $password !== $db_user_password ){
    echo"<script> window.location = '../index.php?error_code=fl'</script>";

} else {

    $_SESSION['username'] = $db_username;
    $_SESSION['firstname'] = $db_user_firstname;
    $_SESSION['lastname'] = $db_user_lastname;
    $_SESSION['user_role'] = $db_user_role;


    //TODO: header
    echo"<script> window.location = '../admin'</script>";

}


?>

