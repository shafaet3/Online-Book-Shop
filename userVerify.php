<?php
    session_start();
    if(!isset($_POST['login'])){
    	echo "Something wrong! Check again!";
    	exit;
    }
    require_once "./template/database_functions.php";
    $conn = db_connect();
    
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    
    if($email == "" || $password == ""){
    	echo "Email or Password is empty!";
    	exit;
    }
    
    
    // get from db
    $query = "SELECT email, password from user";
    $result = mysqli_query($conn, $query);
    if(!$result){
    	echo "Empty data " . mysqli_error($conn);
    	exit;
    }
    $row = mysqli_fetch_assoc($result);
    
    if($email == $row['email'] && $password == $row['password']){
    	$_SESSION['user'] = true;
    	//header("Location: user.php");
        echo "Login Successful";
    }
    else{
        echo "Email or Password is wrong. Check again!";
        $_SESSION['user'] = false;
        exit;
    }
    
    if(isset($conn)) {mysqli_close($conn);}
    
    ?>
    