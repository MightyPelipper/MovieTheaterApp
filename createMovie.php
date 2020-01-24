<!DOCTYPE html>
<head>
    <!-- Link the stylesheet-->

    <link rel="stylesheet" href="prototype.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>

<title>
    Create Movie
</title>

<body>

    <div class="header">
        <h1>Twin Cities Cinema</h1>
    </div>

    <form action="includes/createMovie.inc.php" method="POST">

        <div class="imgcontainer">
            <img src="pics/rowlett.jpg" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <div class="textWhite"><h2>Add a Movie</h2></div>

            <label for="name"><b>Movie Name</b></label>
            <input type="text" placeholder="Movie Name" name="name" >

            <label for="rating"><b>Rating</b></label>
            <input type="text" placeholder="Rating" name="rating" >
            
            <label for="tickets"><b>Tickets Sold</b></label>
            <input type="text" placeholder="Ticketsold" name="tickets" >

            <label for="desc"><b>Description</b></label>
            <input type="text" placeholder="description" name="desc" >

            <button type="submit" name="submit">Add Movie</button>
        </div>

    </form>
    
    <div class="container">
    
    <ul>
        <li><a href="adminSelection.php">Back to Admin Menu</a></li>
    </div>

</body>