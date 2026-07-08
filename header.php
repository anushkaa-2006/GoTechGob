<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Question.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;

            margin-bottom: 1vh;
            /* background-color: #003366; */
            /* Dark blue background */
            color: #003366;
            /* White text for contrast */
            /* position: sticky; */
            /* top: 0; */

        }

        .navbar-left {
            display: flex;
            align-items: center;
        }

        .logo {
            height: 60px;
            /* Adjust based on your logo size */
            margin-right: 10px;
        }

        .company-name {
            font-size: 1.5em;
            font-weight: bold;
        }

        .navbar-right {
            display: flex;
        }

        .nav-link {
            color: #003366;
            border: 1px solid #003366;
            border-radius: 50px;
            background-color: rgb(232, 236, 238);
            text-decoration: none;
            padding: 10px 15px;
            margin-left: 10px;
            font-size: 1.1em;
            transition: background-color 0.3s ease;
        }

        .nav-link:hover {
            color: #f7bf07;
            background-color: #003366;
            border-radius: 50px;
            /* border-color: #f7bf07; */

        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar-right {
                flex-direction: column;
                width: 100%;
            }

            .nav-link {
                margin: 5px 0;
                width: 100%;
                text-align: center;
            }
        }
       
    </style>
</head>

<body>
    <header class="navbar">
        <div class="navbar-left">
            <img src="images/logo.png" alt="Company Logo" class="logo">
            <span class="company-name">GoTechJob</span>
        </div>
        <div class="navbar-right">
          
            <a href="index.php" class="nav-link">Home</a>
            <a href="about.php" class="nav-link">About Us</a>
           
        </div>
    </header>
</body>

</html>