<!DOCTYPE html>
<head>
    <!-- Link the stylesheet-->

    <link rel="stylesheet" href="prototype.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>

<title>
    All Movies
</title>

<body>

    <div class="header">
        <h1>Twin Cities Cinema</h1>
    </div>

    <div class="imgcontainer">
        <img src="pics/mona.png" alt="Avatar" class="avatar">
    </div>

    <!--Make a verticle nav bar-->\
    <div class="textWhite"><h2>All Movies</h2></div>

    <div class="container">
    
     

    <?php


        include_once 'includes/dbh.inc.php';

        $sql = "SELECT * FROM movie";

        $result = mysqli_query($conn, $sql) or die("bad Query: $sql");

        echo "<table border='1'>";
        echo "<tr><td>MovieID</td> <td>Movie Name</td> <td>Rating</td> <td>Tickets Sold</td> <td>Description</td></tr>";

        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr> <td>{$row['movieID']}</td> <td>{$row['movieName']}</td> <td>{$row['rating']}</td> <td>{$row['ticketsSold']}</td> <td>{$row['movieDescription']}</td></tr>";
        }
        echo "</table>"


    ?>          




    
    
    </div>
    

    <div class="container">
    
    <ul>
        <li><a href="empSelection.php">Back to Employee Menu</a></li>
    </div>

</body>