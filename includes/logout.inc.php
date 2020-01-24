<?php

if (isset($_POST['submit'])) {
    session_start();
    session_unset();
    session_distroy();
    header("Location: ../empLogin.php");

    exit();
}