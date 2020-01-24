<?php

session_start();

if(isset($_POST['submit'])) {

    include 'dbh.inc.php';

    $uid = mysqli_real_escape_string($conn,$_POST['admin_uid']);
    $pwd = mysqli_real_escape_string($conn,$_POST['admin_pwd']);

    //error handlers
    //check if inputs are empty
    if(empty($uid) || empty($pwd)) {
        header("Location: ../adminLogin.php?login=empty");
        exit();
    } else {
        $sql = "SELECT * FROM adminlogin WHERE admin_uid = '$uid' OR admin_email='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck < 1){

            header("Location: ../adminLogin.php?login=error1");
            exit();
        } else {
            if($row = mysqli_fetch_assoc($result)){
                //dehashing the password
                $PwdCheck = password_verify($pwd, $row['admin_pwd']);
                if($PwdCheck == true) {
                    header("Location: ../adminLogin.php?login=error2");
                    exit();
                } elseif($PwdCheck == false){
                        //log in the user here
                        $_SESSON['a_id'] = $row['admin_id'];
                        $_SESSON['a_first'] = $row['admin_first'];
                        $_SESSON['a_last'] = $row['admin_last'];
                        $_SESSON['a_email'] = $row['admin_email'];
                        $_SESSON['a_uid'] = $row['admin_uid'];

                        header("Location: http://localhost/moviePrototype/adminSelection.php");
                        exit();
                }
            }

        }
    }
}