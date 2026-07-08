<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <style>
        form {
            height: 500px;
            width: 400px;
            border: 4px solid #23a7e0;
            background-color: #f0f8ff;
            box-shadow: 5px 5px 15px 5px #ababac;
            margin: auto;
            margin-top: 3em;
            text-align: center;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .main {
            margin-top: 10%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="email"],
        [type="password"],
        [type="text"] {
            outline: none;
            height: 40px;
            width: 270px;
            border: 2px solid #7bd5fc;
            border-radius: 5px;
            font-size: 14px;
            transition: 50ms;

        }

        input[type="email"]:focus,
        [type="password"]:focus,
        [type="text"]:focus {
            border: 2px solid #23a7e0;
            transform: scale(1.05);
        }

        .in-up-heading {
            color: #23a7e0;
        }

        .in-up-btn {
            font-size: 20px;
            width: 150px;
            font-family: Arial, Helvetica, sans-serif;
            padding: 10px;
            background-color: #a5e4ffaa;
            border: 2px solid #23a7e0;
            border-radius: 10px;
            margin: 10px;
        }

        .in-up-btn:hover {
            background-color: #23a7e0;
            cursor: pointer;
            color: white;
        }

        .pass {
            display: flex;
            justify-content: left;
            margin: 10px 0px;
            margin-right: 150px;
            font-size: 14px;
            color: gray;
        }

        .set {
            width: 150px;
            display: flex;
            border: 1px solid transparent;
            border-radius: 15px;
            background-color: #d2e8fe;
            height: 35px;

            font-size: 16px;
            font-weight: 550;

        }

        #sign-up {
            width: 50%;
            text-align: center;
            vertical-align: middle;
            background-color: #2e96ff;
            color: white;
            padding-top: 6px;
            border: 1px solid transparent;
            border-radius: 15px;
        }

        #log-in {
            border: 1px solid transparent;
            padding: 5px;
        }

        .set:hover {

            background-color: #2e96ff;
            color: white;
        }

        .set:hover {
            #sign-up {
                background-color: #d2e8fe;

                a {
                    color: black;
                }
            }

        }

        .set a {
            text-decoration: none;
            color: white;
        }

        #log-in a:hover {
            color: white;
        }

        #log-in a {
            color: black;
        }

        .navbar-right button {
            background-color: #003366;
            border: none;

        }
    </style>
</head>

<body>
    
<?php
ini_set('session.gc_maxlifetime', 120); // Set session timeout to 30 minutes
session_set_cookie_params(120); 
session_start();
$insert=false;
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['email'], $_POST['password'])){
$server='localhost';
$username='root';
$password='';
$dbname = 'project_data';
$conn=mysqli_connect($server,$username,$password,$dbname);

if(!$conn){
    die("Connection to the database failed");
}


$email= $_POST['email'];
$password= $_POST['password'];



$sql= "INSERT INTO `log_in`(`email`, `password`,`date`) VALUES ( '$email', '$password',current_timestamp());";


if($conn->query($sql)==true){
    $insert=true;
    $_SESSION['isSignedUp'] = true;
    $_SESSION['last_activity'] = time();
    header("Location: logo.php");
        exit();
}
else{
    echo "error";
}
$conn->close();
}
?>
    <form action="log_in.php" method="post" id="myForm">
        <div class="main">
            <div class="set">
                <div id="sign-up" class="t-button nav-item"><a href="sign_up.php">Sign Up</a></div>
                <div id="log-in" class="t-button nav-item"><a href="log_in.php">Log In</a></div>
            </div><br>
            <input class="email" placeholder="email" type="email" name="email" required><br>
            <input type="password" id="mypass" name="password" class="password" placeholder="password" minlength="8" required><br>
            <div class="pass">
                <input type="checkbox" id="check" name="check" onclick="myFunction()">
                <label for="check" id="text">Show Password</label>
            </div>

            <input class="in-up-btn"  type="submit" value="Log in">
        </div>
    </form>
    <script>
        function myFunction() {
            var x = document.getElementById("mypass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }


    </script>

</body>

</html>