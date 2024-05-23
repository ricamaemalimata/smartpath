<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="">
</head> 
<style>
    
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background-color: #cee5ff;

}
.slide h1{
    color: #ffffff;
    font-size: 25px;
    margin-left: 20px;

}
.logo {
    vertical-align: middle; 
    margin-right: 5px; 
    margin-top: 1px; 
}
ul li {
    list-style: none;
    background-color: #ffffff;
    margin-top: 1px;
}

ul li a {
    font-weight: 500;
    padding: 5px 0;
    display: block;
    text-transform: capitalize;
    text-decoration: none;
    color: black;
    text-align: center;
    font-size: 23px;
}

ul li:hover a {
    background-color: #C8CAD8;
}

.slide {
    height: 100vh; /* Use 100vh for full viewport height */
    width: 300px; /* Remove extra % sign */
    position:fixed;
    background-color: #4f4d83 ;
    margin-top:  -16px;
}

.slide h1 {
    color: #ffffff;
    font-size: 25px;
    margin-left: 20px;
}

.logo {
    vertical-align: middle;
    margin-right: 5px;
    margin-top: 1px;
}

ul li {
    list-style: none;
    background-color: #ffffff;
    margin-top: 1px;
}

ul li a {
    font-weight: 500;
    padding: 5px 0;
    display: block;
    text-transform: capitalize;
    text-decoration: none;
    transition: 0.2s ease-out;
    color: black;
    text-align: center;
}

ul li:hover a {
    background-color: #C8CAD8;
}

.main h1 {
    font-family: Arial;
    font-size: 15px;
}

.main {
    position: relative;
}
ul li.active a {
    background-color: #C8CAD8;
}

</style>
<body>
    <div class="dashboard">
        <div class="slide">
            <h1>
                <img src="images/slogo.png" alt="logo" class="logo">SmartPath
            </h1>
            <?php
            include "image.php"
            ?>
            <ul>
                <li class="active"><a href="udl.php">Users Data List and Analytics</a></li>
                <li><a href="comments.php">Comments</a></li>
                <li><a href="ptm.php">Theme Management</a></li>
                <hr>
                <li><a href="settings.php">Settings</a></li>
                <li><a href="index.php" onclick="return confirm('Are you sure you want to sign out?')">Sign Out</a></li>
            </ul>
        </div>
        <div class="body">
            <?php
            include "maindb.php"
            ?>
        </div>
    </div>
</body>
</html>