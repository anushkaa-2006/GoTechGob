<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
            background-color: #003366;
            /* Dark blue background */
            color: #ffffff;
            /* White text for contrast */
            position: sticky;
            top: 0;
            height: auto;
        }

        .navbar-left {
            display: flex;
            align-items: center;
        }

        .logo {
            height: 60px;
            /* Adjust based on your logo size */
            margin-right: 10px;
            background-color: #ffffff;
            border: 1px solid transparent;
            
            clip-path: circle(38.3% at 50% 50%);

        }

        .company-name {
            font-size: 1.5em;
            font-weight: bold;
        }

        .navbar-right {
            display: flex;
        }

        .nav-link {
            color: #ffffff;
            /* White text */
            text-decoration: none;
            padding: 10px 15px;
            margin-left: 10px;
            font-size: 1.1em;
            transition: background-color 0.3s ease;
        }

        .nav-link:hover {
            color: #f7bf07;
            /* Lighter shade of blue for hover effect */
            border-radius: 5px;
            /* Rounded corners for hover effect */
        }
        #home{
            width:30px;
            height:30px;
            
        }
        #home:hover{
            fill: #f7bf07;
            cursor:pointer;
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

<body class="light">
    <header class="navbar">
        <div class="navbar-left">
            <img src="images/logo.png" alt="Company Logo" class="logo">
            <span class="company-name">GoTechJob</span>
        </div>
        <div class="navbar-right">

             <a href="index.php" class="nav-link nav-item" title="Home page"><svg id="home" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 576 512" ><path d="M280.4 148.3L96 300.1V464a16 16 0 0 0 16 16l112.1-.3a16 16 0 0 0 15.9-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.6a16 16 0 0 0 16 16.1L464 480a16 16 0 0 0 16-16V300L295.7 148.3a12.2 12.2 0 0 0 -15.3 0zM571.6 251.5L488 182.6V44.1a12 12 0 0 0 -12-12h-56a12 12 0 0 0 -12 12v72.6L318.5 43a48 48 0 0 0 -61 0L4.3 251.5a12 12 0 0 0 -1.6 16.9l25.5 31A12 12 0 0 0 45.2 301l235.2-193.7a12.2 12.2 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0 -1.7-16.9z"/></svg></a>
             <a href="about.php" class="nav-link">About Us</a>
           
        </div>
    </header>
   
</body>

</html>