<?php
// Establish a connection to the database
$servername = "localhost";
$username = "admin";
$password = "09092003";
$dbname = "db_smartpath";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL query to fetch the full names and emails
$sql = "SELECT fullname, email FROM account";
$result = $conn->query($sql);

$userList = [];
if ($result->num_rows > 0) {
    // Loop through each row of the result
    $count = 1;
    while ($row = $result->fetch_assoc()) {
        $fullname = $row["fullname"];
        $email = $row["email"];
        $userList[] = [
            "number" => $count,
            "fullname" => $fullname,
            "email" => $email
        ];
        $count++;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>maindb</title>
    <link rel="stylesheet" type="text/css" href="">
</head>
<style>
    
.text h2{
    color: #226892;
    font-family: Arial ;
    margin-left: 445px;
    margin-top: 30px;
    font-weight: bold;
    font-size: 30px ;
}

.container1 h3{   /*total users*/
    color: #226892;
    font-family: Arial;
    font-weight: lighter;
    text-align: center;
    margin-top: -15px;
    font-size: 25px;
}
.container2 h3{   /*Website Visits*/
    color: #226892;
    font-family: Arial;
    font-weight: lighter;
    text-align: center;
    margin-top: -15px;
    font-size: 25px;
}
    .header h1{
    margin-top: 15px;
    margin-left: 320px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;
    font-weight: bold;
    font-size: 50px;
}
    .text2 h2 {
        color: #226892;
        font-family: Arial ;
        margin-left: 450px;
        margin-top: 50px;
        font-weight: bold;
        font-size: 30px ;
    }
    .container1 {
        text-align: center;
        width: 300px;
        height: 190px;
        padding: 20px;
        margin-left: 450px;
        background-color: #f0f0f0;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        position: relative;
        margin-top: 10px;
    }
    .container2 {
        text-align: center;
        width: 300px;
        height: 190px;
        padding: 20px;
        margin-left: 810px;
        background-color: #f0f0f0;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        position: relative;
        margin-top: -190px;

    }
    .container1 p {
        font-size: <?php echo count($userList) > 999 ? '20px' : '90px'; ?>;
        color: #226892;
        margin-top: 10px;
    }
    .container3 table {
        width: 100%;
        border-collapse: collapse;
    }
    .container3 th, .container3 td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    .container3 th {
        background-color: #f2f2f2;
        border-collapse: collapse;
    }
     .container3{
     width: 800px;
     height: 300px;
     padding: 20px;
     background-color: #f0f0f0;
     box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
     position: relative;
     margin-top: 10px;
     margin-left: 450px;
     overflow-x: auto;
 }
</style>
<body>
    <div class="container">
        <div class="header">
            <h1>DASHBOARD</h1>
        </div>
        <div class="text">
            <h2>Website analytics</h2>
        </div>
        <div class="container1">
            <h3>Total Users</h3>
            <p><?php echo count($userList); ?></p>
        </div>
        <div class="container2">
            <h3>Website Visits</h3>
            
        </div>
        <div class="text2">
            <h2>User Data List</h2>
        </div>
        <div class="container3">
            <table>
                <tr>
                    <th>NO.</th>
                    <th>Full Name</th>
                    <th>Email</th>
                </tr>
                <?php foreach ($userList as $user) : ?>
                    <tr>
                        <td><?php echo $user["number"]; ?></td>
                        <td><?php echo $user["fullname"]; ?></td>
                        <td><?php echo $user["email"]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>