<?php

if (isset($_POST['submit'])){

    include_once 'dbh.inc.php';

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $rating = mysqli_real_escape_string($conn, $_POST['rating']);
    $tickets = mysqli_real_escape_string($conn, $_POST['tickets']);
    $desc = mysqli_real_escape_string($conn, $_POST['desc']);
    
    

    
    //error handelers
    //check for empty fields
    if(empty($name) ||  empty($rating) ||  empty($tickets) || empty($desc) ){

        header("Location: ../createMovie.php?createMovie=empty");
        exit(); 

    } else {

        
                    //insert the user into the database
                    $sql = "INSERT INTO movie (movieName, rating, ticketsSold, movieDescription) VALUES ('$name', '$rating', '$tickets', '$desc');";

                    mysqli_query($conn, $sql);

                    header("Location: ../createMovie.php?createUser=success");
                    exit();

                
            }
        
    } else{
    header("Location: ../createMovie.php");
    exit();
}