<?php
require 'config.php';

// Assuming you have a query or code to retrieve the user data
// Replace this with your own code to retrieve the user data
$user = [
    'id' => 1, // Replace with the actual user ID
    // Other user data
];

if (isset($_FILES["fileImg"]["name"])) {
    $id = $_POST["id"];

    $src = $_FILES["fileImg"]["tmp_name"];
    $imageName = uniqid() . $_FILES["fileImg"]["name"];

    $target = "img/" . $imageName;

    move_uploaded_file($src, $target);

    $query = "UPDATE tb_user SET image = '$imageName' WHERE id = $id";
    mysqli_query($conn, $query);

    header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Update Image</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style media="screen">
        .upload {
            width: 140px;
            position: relative;
            margin: auto;
            text-align: center;
            margin-top: 5px;
            margin-bottom: 50px;
        }

        .upload .profile {
            border-radius: 50%;
            border: 5px solid #DCDCDC;
            width: 125px;
            height: 125px;
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            color: #888888;
        }

        .upload .rightRound {
            position: absolute;
            bottom: 0;
            right: 0;
            background: #00B4FF;
            width: 32px;
            height: 32px;
            line-height: 33px;
            text-align: center;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
        }

        .upload .fa {
            color: white;
            margin-top: 8px;
        }

        .upload input {
            position: absolute;
            transform: scale(2);
            opacity: 0;
        }

        .upload input::-webkit-file-upload-button,
        .upload input[type=submit] {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form class="form" id="form" action="" enctype="multipart/form-data" method="post">
        <?php if (!empty($user['id'])) { ?>
            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <?php } ?>
        <div class="upload">
            <?php if (!empty($user['image'])) { ?>
                <img src="img/<?php echo $user['image']; ?>" class="profile" id="image">
            <?php } else { ?>
                <div class="profile" id="image">
                    <i class="fa fa-user"></i>
                </div>
            <?php } ?>

            <div class="rightRound" id="upload">
                <input type="file" name="fileImg" id="fileImg" accept=".jpg, .jpeg, .png">
                <i class="fa fa-camera"></i>
            </div>

            <div class="rightRound" id="confirm" style="display: none;">
                <input type="submit">
                <i class="fa fa-check"></i>
            </div>
        </div>
    </form>

    <script type="text/javascript">
        document.getElementById("fileImg").onchange = function(event) {
            event.preventDefault(); // Prevent default form submission behavior
            document.getElementById("confirm").style.display = "block";
        }
    </script>
</body>
</html>