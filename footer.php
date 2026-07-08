<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        .links{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 30px;
            margin-right: 15px;
        }
        .links svg:hover{
            fill: #f7bf07;
        }
        .footer-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #003366;
            color: #fff;
            padding: 20px;
            flex-wrap: wrap;
        }

        .footer-left,
        .footer-center,
        .footer-right {
            /* flex: 1; */
            margin: 10px;
            height: 100%;
        }

        .footer-left {
            padding-right: 10px;
            font-size: 15px !important;
            line-height: 1.8;
        }
       
        .footer-logo {
            width: 80px;
            height: 80px;
        }

        .site-name {
            margin: 10px 0;
        }
        
        .footer-center {
            font-size: 15px !important;
            text-align: center;
           justify-content: center;
            display: flex;
            flex-direction: column;
        }

        .footer-center a {
            color: #fff;

            text-decoration: none;
            padding: 20px 20px;

        }

        .footer-center a:hover {
            color: #f7bf07;
        }

        .footer-right h3 {
            margin-left: 30px;

        }

        .footer-right iframe {
            width: 100%;
            max-width: 300px;
            height: 180px;
            padding: 3vh;
        }

        .footer-right {
            font-size: 15px !important;
           
            height: 100%;
        }

        .review-box{
            margin: 10px 0px;
            text-align: center;
            padding: 10px;
            box-shadow: 2px 2px 2px 2px;
            background-color: white;
            color: #003366;
            border: 1px solid black;
            border-radius: 10px;
            width: 200px;
            height: 250px;
}

.explore-btn {

display: inline-block;
padding: 10px 20px;
background-color: #0056b3;
color: white;
text-decoration: none;
border-radius: 5px;
}

.explore-btn:hover {
  color: #ffc700;    
cursor: pointer;
background-color: #0056b3;
}



        
        @media screen and (max-width: 768px) {
            .footer-container {
                flex-direction: column;
                text-align: center;
            }

            .footer-left,
            .footer-center,
            .footer-right {
                margin: 10px 0;
            }
        }
    </style>
</head>

<body>
    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <img src="images/icon.png" alt="Logo" class="footer-logo">
                <h3 class="site-name">GoTechJob</h3>
                <p>Created by- Unique</p>
                <p> &#9742 Contact No: +1234567890</p>
                <p> &#9993 Email: contact@example.com</p>
            </div>
            
            <div class="footer-center">
                <a href="about.php">About Us</a>

                <a href="privacy_policy.php">Privacy Policy</a>
                <a href="terms_conditions.php">Terms & Conditions</a>
            </div>
           
            <div class="footer-right">
                <h3>Google Map</h3>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15206.16632998318!2d75.9229135!3d17.6718579!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x74dd6309403c8258!2sGovernment%20Polytechnic%2C%20Solapur!5e0!3m2!1sen!2sin!4v1578568814574!5m2!1sen!2sin"
                    width="600" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <div class="links">
                <div>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                          </svg></a>
                </div>
                <div>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                      </svg></a>
                </div>
                <div>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-twitter-x" viewBox="0 0 16 16">
                        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                      </svg></a>
                </div>
                <div>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                      </svg></a>
                </div>
               
            </div>
            
             
             
        </div>
    </footer>
</body>

</html>