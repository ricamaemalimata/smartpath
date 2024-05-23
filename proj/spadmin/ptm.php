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
    height: 100vh; /* Use 100vh for full viewport height */
    width: 300px; /* Remove extra % sign */
    position:fixed;
    background-color: #4f4d83 ;
    margin-top:  -382px;
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

/*ptm*/

.header .text h1{
    margin-top: 15px;
    margin-left: 320px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;
    font-weight: bold;
    font-size: 50px;
}
.text2 h2{
    font-size: 20px;
    margin-left: 400px;
    margin-top: 100px;
}
.container {
    background-color: var(--background-color);
    /* Additional styles */
}

.color-picker-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: -50px
}

.color-picker {
    width: 200px;
    height: 100px;
    border: none;
    outline: none;
    cursor: pointer;

}
.text3 h2{
    font-size: 20px;
    margin-left: 400px;
    margin-top: 100px;
}
.font-selector-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: -22px;
}

.font-selector {
    padding: 5px;
    font-family: var(--font-family);
    cursor: pointer;
}

    

</style>
<body>
<div class="header">
        <div class="text">
            <h1>THEME MANAGEMENT</h1>
        </div>
        <div class="text2">
            <h2>CHOOSE A COLOR THEME</h2>
        </div>
        <div class="color-picker-container">
    <input type="color" id="colorPicker" class="color-picker" onchange="changeThemeColor(event)">
</div>
<div class="text3">
    <h2>TYPOGRAPHY: choose different fonts</h2>
</div>
<div class="font-selector-container">
    <select id="fontSelector" class="font-selector" onchange="changeFont(event)">
        <option value="Arial, sans-serif">Arial</option>
        <option value="Verdana, sans-serif">Verdana</option>
        <option value="Georgia, serif">Georgia</option>
        <option value="Times New Roman, serif">Times New Roman</option>
        <option value="Courier New, monospace">Courier New</option>
    </select>
</div>
    <div class="dashboard">
        <div class="slide">
            <h1>
                <img src="images/slogo.png" alt="logo" class="logo">SmartPath
            </h1>
            <?php
            include "image.php"
            ?>
           <ul>
                <li ><a href="udl.php">Users Data List and Analytics</a></li>
                <li><a href="comments.php">Comments</a></li><hr>
                <li class="active"><a href="ptm.php">Theme Management</a></li>
                <li><a href="settings.php">Settings</a></li>
                <li><a href="index.php" onclick="return confirm('Are you sure you want to sign out?')">Sign Out</a></li>
            </ul>
        </div>
    </div>
    <script>
function changeThemeColor(event) {
    var color = event.target.value;
    document.body.style.setProperty('--theme-color', color);
}
function changeFont(event) {
    var font = event.target.value;
    document.body.style.setProperty('--font-family', font);
}
</script>
</body>
</html>