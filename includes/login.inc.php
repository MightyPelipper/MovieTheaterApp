<?php

session_start();

if(isset($_POST['submit'])) {

    include 'dbh.inc.php';

    $uid = mysqli_real_escape_string($conn,$_POST['uid']);
    $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

    //error handlers
    //check if inputs are empty
    if(empty($uid) || empty($pwd)) {
        header("Location: ../empLogin.php?login=empty");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_uid = '$uid' OR user_email='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck < 1){

            header("Location: ../empLogin.php?login=error1");
            exit();
        } else {
            if($row = mysqli_fetch_assoc($result)){
                //dehashing the password
                $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
                if($hashedPwdCheck == false) {
                    header("Location: ../empLogin.php?login=error2");
                    exit();
                } elseif($hashedPwdCheck == true){
                        //log in the user here
                        $_SESSON['u_id'] = $row['user_id'];
                        $_SESSON['u_first'] = $row['user_first'];
                        $_SESSON['u_last'] = $row['user_last'];
                        $_SESSON['u_email'] = $row['user_email'];
                        $_SESSON['u_uid'] = $row['user_uid'];

                        header("Location: http://localhost/moviePrototype/empSelection.php");
                        exit();
                }
            }

        }
    }




} else {
    header("Location: ../empLogin.php?login=error3");
    exit();
}