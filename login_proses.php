<?php 
include('dbcon.php'); 
session_start();

if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email_id = '$email'";
    $result = mysqli_query($con , $query);

    if(!$result){
        die("Query Failed".mysqli_error($con));
    }
    else{
        $row = mysqli_fetch_assoc($result); 

        if($row){
            // Jika password disimpan sebagai teks biasa
            if($password == $row['password']){
                $_SESSION['email'] = $email;
                header('Location: halamanutama.php');
                exit();
            } else {
                header('Location: index.php?message=Sorry, your email or password is invalid');
                exit();
            }
        } else {
            header('Location: index.php?message= Sorry, your email or password is invalid' );
            exit();
        }
    }
}
?>
