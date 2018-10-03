<?php 
include "lumacon.php";

if (isset($_GET['name']) && isset($_GET['contact']) && isset($_GET['username']) && isset($_GET['password']) && isset($_GET['reg_code'])) {

    $name = $conn->real_escape_string($_GET['name']);
    $contact = $conn->real_escape_string($_GET['contact']);
    $username = $conn->real_escape_string($_GET['username']);
    $password = $conn->real_escape_string($_GET['password']);
    $reg_code = $conn->real_escape_string($_GET['reg_code']);
    //$Username = $_REQUEST["reg_code"];

    $sql = "SELECT * FROM luma_codes WHERE reg_code ='".$reg_code."' AND pin_info = 'Free'";
    $result = $conn->query($sql) or die($conn->connect_error);
    $rws = $result->fetch_assoc();

    $User = $rws["reg_code"];
    if ($User != $reg_code) {
        echo "bad";
    }else {
        if ($conn->query("INSERT INTO luma_users (name,contact,username,password, userLevel, reg_code)
			 VALUES ('".$name."','".$contact."','".$username."','".$password."', 0,  '".$reg_code."')")) {
            $sql_update = "UPDATE luma_codes SET pin_info='Used' WHERE reg_code = '".$reg_code."' ";
            if ($update_result = $conn->query($sql_update)) {
                echo "good";
            }
        }
    }
}
?>
