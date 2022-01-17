
<?php

session_start();

include('db.php');
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$stmt = $db->prepare('SELECT pass, email, phone FROM user WHERE name = ?');
$stmt->bind_param('s', $_SESSION['name']);
$stmt->execute();
$stmt->bind_result($pass, $email, $phone);
$stmt->fetch();
$stmt->close();

if (isset($_POST['submit'])) {
    $name = $_SESSION['name'];
    $name1 = $_POST['uname'];
    $pass1 = $_POST['pass'];
    $phone1 = $_POST['mobile'];
    $email1 = $_POST['uemail'];
    

    $sql = "UPDATE user SET name='$name1', pass='$pass1', phone='$phone1', email='$email1' WHERE name ='$name' " ;
    
    $result = mysqli_query($con, $sql);

    if($result){
        echo "You have Succesfully inserted.";
    } else {
        echo "Oops! Something went wrong.";
    }
}






?>

<html>

<head>

    <title> User account  </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.o">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <style>
        * {
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
            font-size: 16px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        
        h1 {
            text-align: center;
            color: #202f49;
            font-size: 24px;
            padding: 20px 0 20px 0;
            border-bottom: 1px solid #e9e17a;
        }
        
        body {
            background-color: #eef3ec;
        }
        
        .reg {
            width: 400px;
            background-color: #ffffff;
            box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
            margin: 100px auto;
        }
        
        .reg h3 {
            text-align: center;
            color: #0e1116;
            font-size: 24px;
            padding: 20px 0 20px 0;
            border-bottom: 1px solid #bde701;
        }
        
        .reg form {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding-top: 20px;
        }
        
        .reg form label {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            background-color: #1760be;
            color: #fcfafa;
        }
        
        .reg form input[type="password"],
        .reg form input[type="text"],
        .reg form input[type="email"],
        .reg form input[type="number"] {
            width: 310px;
            height: 50px;
            border: 1px solid #dee0e4;
            margin-bottom: 20px;
            padding: 0 15px;
        }
        
        .reg form input[type="submit"] {
            width: 100%;
            padding: 15px;
            margin-top: 20px;
            background-color: #3274d6;
            border: 0;
            cursor: pointer;
            font-weight: bold;
            color: #ffffff;
            transition: background-color 0.2s;
        }
        
        .reg form input[type="submit"]:hover {
            background-color: #2868c7;
            transition: background-color 0.2s;
        }
    </style>



</head>

<body>
    <h1>Digital Library</h1>
    <div class="reg">
        <h3> Welcome </h3>
        <form name="myform" align="center" method="POST" action='update_user_account.php' onsubmit="return checkForm()">

            <label for="username">
                <i class="fas fa-user"> </i>
            </label>
            <input type="text" name="uname" id="username" value="<?=$_SESSION['name']?>" required>
            <label for="password">
                <i class='fas fa-lock '> </i>
            </label>
            <input type="text" name="pass" id="password" value="<?=$pass?>" required>
            <label for="phone">
                <i class='fas fa-mobile-alt'> </i>
            </label>
            <input type="number" name="mobile" id="phone" value="<?=$phone?>" required>
            <label for="email">
                <i class='fas fa-envelope-square'> </i>
            </label>
            <input type="email" name="uemail" id="email" value="<?=$email?>" required>
            <input type="submit" name="submit" value="Update">


        </form>
    </div>

   

</body>

</html>