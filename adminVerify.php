<?php
    session_start();
    if(!isset($_POST['submit'])){
    	echo "Something wrong! Check again!";
    	exit;
    }
    require_once "./template/database_functions.php";
    $conn = db_connect();
    
    $name = trim($_POST['inputEmail']);
    $pass = trim($_POST['inputPassword']);
    
    if($name == "" || $pass == ""){
    	echo "Name or Pass is empty!";
    	exit;
    }
    
    
    // get from db
    $query = "SELECT user_name, password from admin";
    $result = mysqli_query($conn, $query);
    if(!$result){
    	echo "Empty data " . mysqli_error($conn);
    	exit;
    }
    $row = mysqli_fetch_assoc($result);
    
    if($name == $row['user_name'] && $pass == $row['password']){
    	$_SESSION['admin'] = true;
    	header("Location: admin.php");
    }
    
    if(isset($conn)) {mysqli_close($conn);}
    echo "Name or pass is wrong. Check again!";
    	$_SESSION['admin'] = false;
    	exit;
    ?>