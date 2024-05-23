<php>

</php>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>User Data List</title>
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
    height: 100vh; 
    width: 300px; 
    position:fixed;
    background-color: #4f4d83 ;
    margin-top:  -585px;
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
/*settings*/
.container1{
    width: 999px;
    padding: 200px;
    background-color: #ffffff;
    border: 1px solid #4f4d83;
    margin-top: 90px;
    margin-left: 500px;
    margin-right: 50px;
    margin-bottom: 50px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}
.header .text h1{
    margin-top: 15px;
    margin-left: 320px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;
    font-weight: bold;
    font-size: 50px;
    }
    .container1 {
        width: 899px;
        padding: 20px;
        background-color: #ffffff;
        border: 1px solid #4f4d83;
        margin-top: 90px;
        margin-left: 530px;
        margin-right: 50px;
        margin-bottom: 50px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
    }

    .container1 ul {
        padding: 0;
    }

    .container1 li {
        list-style: none;
        padding: 10px;
        border-bottom: 1px solid #ccc;
    }

    .container1 li a {
        text-decoration: none;
        color: #333;
        font-size: 20px;
        text-align: left;
    }

    .container1 li:hover {
        background-color: #f9f9f9;
    }

    .search-box {
    margin-bottom: 10px;
}

.search-box input[type="text"] {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 5px;
}
    

</style>
<body>
<div class="header">
        <div class="text">
            <h1>SETTINGS</h1>
        </div>
        </div>
    <div class="dashboard">
        <div class="container1">
        <div class="search-box">
        <input type="text" id="searchInput" placeholder="Search settings...">
            </div>

             <ul>
                <li ><a href="">Secure Authentication</a></li>
                <li><a href="">Encrypted Communication</a></li>
                <li class=""><a href="ptm.php">Data Protection</a></li>
                <li><a href="">Regular Security Audits</a></li>
                <li><a href="">User Privacy</a></li>
            </ul>
        </div>
       
        <div class="slide">
            <h1>
                <img src="images/slogo.png" alt="logo" class="logo">SmartPath
            </h1>
            <?php
            include "image.php"
            ?>
           <ul>
                <li><a href="udl.php">Users Data List and Analytics</a></li>
                <li><a href="comments.php">Comments</a></li><hr>
                <li><a href="ptm.php">Theme Management</a></li>
                <li class="active"><a href="settings.php">Settings</a></li>
                <li><a href="index.php" onclick="return confirm('Are you sure you want to sign out?')">Sign Out</a></li>
            </ul>
        </div>
</body>
</html>