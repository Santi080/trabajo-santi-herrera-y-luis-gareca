<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style>
        body{ font: 14px sans-serif; text-align: center; }
        .nav li a {
    background-color:#1100ff;
    color:#fff;
    text-decoration:none;
    padding:10px 12px;
    display:block;
}

.nav li a:hover {
    background-color:#004bee;
}

.nav li ul {
    display:none;
    position:absolute;
    min-width:140px;
}


.nav {
    display: flex;
    justify-content: left;
    margin: 0%
}
.nav{
    font-size: 100%;
}
.nav{
    align-items: center;
    justify-content: center;
}

    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <div id="header">
            <ul class="nav">
                <li><a href="reset-password.php" class="btn btn-warning">Reset Your Password</a></li>
                <li><a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a></li>
                <li><a href="formulario.php">FORMULARIO</a></li>
                <li><a href="borrar.php">BORRAR</a></li>
            </ul>
        </div>
    </p>
    <h1>Travel Manatan</h1>
    <!--conexcion de datos-->

</body>
</html>
