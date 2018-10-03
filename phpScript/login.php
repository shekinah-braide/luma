<?php 
include "lumacon.php";
include 'main.php';

if(isset($_GET['username']) && isset($_GET['password'])){
    $username = $_GET["username"];
    $password = $_GET["password"];
    
    

    $sql="SELECT * FROM luma_users WHERE username ='$username' AND password ='$password'";
    $result=$conn->query($sql) or die($conn->connect_error);
    $rws=  $result->fetch_assoc();
    
    
    $User=$rws["username"];
    $Pwd=$rws["password"]; 
    $user_id = $rws['id'];
    $userLevel = $rws['userLevel'];
	
	if($User==$username && $Pwd==$password){
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_Level'] = $userLevel;
        echo "login";
    }else{
        echo "wrong";
    }
    
}

?>
