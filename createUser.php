<!DOCTYPE html>
<head>
    <!-- Link the stylesheet-->

    <link rel="stylesheet" href="prototype.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>

<title>
    Create User
</title>

<body>

    <div class="header">
        <h1>Twin Cities Cinema</h1>
    </div>

    <form action="includes/createUser.inc.php" method="POST">

        <div class="imgcontainer">
            <img src="pics/rowlett.jpg" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <div class="textWhite"><h2>Create Account</h2></div>

            <label for="first"><b>First</b></label>
            <input type="text" placeholder="First Name" name="first" >

            <label for="Last"><b>Last</b></label>
            <input type="text" placeholder="Last Name" name="last" >
            
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="E-mail" name="email" >

            <label for="uid"><b>Username</b></label>
            <input type="text" placeholder="Username" name="uid" >

            <label for="pwd"><b>Password</b></label>
            <input type="password" placeholder="Password" name="pwd" >

            <button type="submit" name="submit">Create User</button>
        </div>

    </form>
    
    <div class="container">
    
    <ul>
        <li><a href="index.php">Back to Select Login</a></li>
    </div>

</body>