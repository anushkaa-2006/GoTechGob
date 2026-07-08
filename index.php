<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
   
</head>

<body class="light"> 
     <?php
    session_start(); // Start the session
    ?> 
    
    <?php include 'header_home.php';
?>    <!-- header image and question -->

    <section class="header-section">
        <div class="header-section-left">
            <img src="images/first.png" alt="header Image" class="header-image">
        </div>
        <div class="header-section-right">
            <h1 class="header-question">Need help landing your ideal job?</h1>
        </div>
    </section>

    <!-- description and image -->

    <section class="des-section">
        <div class="des-section-left">
            <p class="des-text">
                Here is your next career opportunity, in tech industry with GoTechJob.
                You'll gain the confidence and competence to tackle technical interview and secure your place in the
                ever-evolving tech landscape.
                Our platform provides comprehensive resources to help you prepare for technical interviews.
                At GoTechJob, we provide an extensive and up-to-date database of job listings across various tech
                fields.
                In addition to job listings, GoTechJob offers a wealth of resources to support your job search journey.
                Access resume and cover letter templates, interview preparation guides.
                Join with us and start preparing for your next career move today with GoTechJob.

            </p>
        </div>
        <div class="des-section-right">
            <img src="images/diagram.png" alt="Description Image" class="des-image">
        </div>
    </section>

    <!-- cards -->

    <main class="main-content">
        <h2 class="main-heading">In Demand Topics</h2>
        <div class="cards-container">

            <!-- Front-End -->
            <div class="card">
                <div class="card-image-container">
                    <img src="images/front.png" alt="Topic Image" class="card-image">
                </div>
                <h3>Front-End Developer</h3>
                <p class="card-text">A front-end developer creates the user interface and user experience of websites
                    and applications, using HTML, CSS, and JavaScript to design and implement visual and interactive
                    elements.</p>
                <a href="front.php"><button class="card-button">Explore</button></a>
            </div>

            <!-- back-end -->
            <div class="card">
                <div class="card-image-container">
                    <img src="images/back.png" alt="Topic Image" class="card-image">
                </div>
                <h3>Back-End Developer</h3>
                <p class="card-text">A back-end developer is a programmer responsible for server-side logic, database
                    management, and integration of front-end requests, ensuring smooth data flow and functionality of
                    web applications.</p>
                <a href="back.php"><button class="card-button">Explore</button></a>
            </div>

            <!-- full stack -->
            <div class="card">
                <div class="card-image-container">
                    <img src="images/full.png" alt="Topic Image" class="card-image">
                </div>
                <h3>Full stack Developer</h3>
                <p class="card-text">A full stack developer is a software engineer proficient in both front-end
                    (client-side) and back-end (server-side) development, capable of handling all aspects of web
                    application development.</p>
                <a href="full.php"><button class="card-button">Explore</button></a>
            </div>

            <!-- data analyst -->

            <div class="card">
                <div class="card-image-container">
                    <img src="images/data_ana.png" alt="Topic Image" class="card-image">
                </div>
                <h3>Data Analyst</h3>
                <p class="card-text">A data analyst collects, processes, and analyzes data to help organizations make
                    informed decisions. They use statistical techniques and tools to interpret data, identify trends,
                    and generate actionable insights.</p>
                <a href="data.php"><button class="card-button">Explore</button></a>
            </div>

            <!-- android -->
            <div class="card">
                <div class="card-image-container">
                    <img src="images/android.png" alt="Topic Image" class="card-image">
                </div>
                <h3>Android Developer</h3>
                <p class="card-text">An Android developer designs and builds applications for Android devices, utilizing
                    programming languages like Java or Kotlin, and tools such as Android Studio, to create user-friendly
                    and functional mobile apps.</p>
                <a href="android.php"><button class="card-button">Explore</button></a>
            </div>

            <!-- ux designer -->
            <div class="card">
                <div class="card-image-container">
                    <img src="images/ux.jpg" alt="Topic Image" class="card-image">
                </div>
                <h3>UX Designer</h3>
                <p class="card-text">A UX (User Experience) designer focuses on enhancing user satisfaction by improving
                    the usability, accessibility, and pleasure of interacting with a product, ensuring it is intuitive
                    and user-friendly.</p>
                <a href="ux.php"><button class="card-button">Explore</button></a>
            </div>

            <!-- cyber security -->
            <div class="card">
                <div class="card-image-container">
                    <img src="images/cyber.png" alt="Topic Image" class="card-image">
                </div>
                <h3>Cyber Security</h3>
                <p class="card-text">Cybersecurity involves protecting systems, networks, and data from digital threats
                    through proactive measures, including risk assessment, vulnerability management, and incident
                    response, to ensure confidentiality, integrity, and availability.</p>
                <a href="cyber.php"><button class="card-button">Explore</button></a>
            </div>

            <!-- ai and ml -->
            <div class="card">
                <div class="card-image-container">
                    <img src="images/ai.jpg" alt="Topic Image" class="card-image">
                </div>
                <h3>AI and ML</h3>
                <p class="card-text">An AI and ML engineer designs, builds, and implements algorithms and systems that
                    leverage artificial intelligence and machine learning techniques to solve complex problems and
                    automate decision-making processes.</p>
                <a href="ai.php"><button class="card-button">Explore</button></a>
            </div>

            <!-- software tester -->
            <div class="card">
                <div class="card-image-container">
                    <img src="images/tester.png" alt="Topic Image" class="card-image">
                </div>
                <h3>Software Tester</h3>
                <p class="card-text">A software tester is responsible for evaluating software applications to ensure
                    they function correctly, meet requirements, and are free of defects before release to users or
                    customers.</p>
                <a href="tester.php"><button class="card-button">Explore</button></a>
            </div>

            <!-- database Administrator -->
            <div class="card">
                <div class="card-image-container">
                    <img src="images/dba.png" alt="Topic Image" class="card-image">
                </div>
                <h3>Database Administrator</h3>
                <p class="card-text">A Database Administrator (DBA) manages and maintains databases, ensuring data
                    integrity, security, performance, and availability, and optimizing database structures and queries
                    for efficient operation.</p>
                <a href="dba.php"><button class="card-button">Explore</button></a>
            </div>

            <!-- network engineer -->
            <div class="card">
                <div class="card-image-container">
                    <img src="images/network.webp" alt="Topic Image" class="card-image">
                </div>
                <h3>Network Engineer</h3>
                <p class="card-text">A network engineer designs, implements, manages, and troubleshoots computer
                    networks, ensuring efficient data communication and connectivity between devices and systems within
                    an organization or across the internet.</p>
                <a href="network.php"><button class="card-button">Explore</button></a>
            </div>

            <!-- game developer -->
            <div class="card">
                <div class="card-image-container">
                    <img src="images/game.jpg" alt="Topic Image" class="card-image">
                </div>
                <h3>Game Developer</h3>
                <p class="card-text">A game developer designs and creates video games, including concept ideation,
                    coding, art creation, and gameplay mechanics implementation, ensuring an engaging and interactive
                    user experience.</p>
                <a href="game.php"><button class="card-button">Explore</button></a>
            </div>
        </div>
        <div class="section">
            <img src="images/job_search.png" alt="job search">
            <div class="content">
                <h2>current Openings</h2>
                <p>Step into the door of opportunities for freshers to explore thousands of job vacancies in all fields.
                    Click & connect with us to grasp your first dream job.</p>
                    
                        <button class="explore-btn">Explore</button>
                    
            </div>
            
        </div>
    </main>
   
    
    <?php include 'footer.php';
?>
</body>
<script>
 document.querySelector('.explore-btn').addEventListener('click', function() {
            // Redirect based on session
            window.location.href = "<?php echo isset($_SESSION['isSignedUp']) && $_SESSION['isSignedUp'] === true ? 'logo.php' : 'sign_up.php'; ?>";
        });

</script>

</html>