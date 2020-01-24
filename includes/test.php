<?php


            include_once 'dbh.inc.php';
            
            $sql = "SELECT * FROM movie";

            $result = mysqli_query($conn, $sql) or die("bad Query: $sql");

            echo "<table border='1'>";
            echo "<tr><td>MovieID</td> <td>Movie Name</td> <td>Rating</td> <td>Tickets Sold</td> <td>Description</td></tr>";

            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr> <td>{$row['movieID']}</td> <td>{$row['movieName']}</td> <td>{$row['rating']}</td> <td>{$row['ticketsSold']}</td> <td>{$row['movieDescription']}</td></tr>";
            }
            echo "</table>"

            
  ?>          