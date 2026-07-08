<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back-end Developer Question</title>
    <link rel="stylesheet" href="style.css">
   
</head>

<body>
<?php include 'header.php';
?>
    <nav id="menu_bar">
        <div><a href="back.php" class="menu">Backend</a></div>
        <div><a class="menu" href="hr_back_questions.php">HR Questions</a></div>
        <div><a class="menu" href="back_questions.php">Interview Questions</a></div>
        <div><a class="menu" href="back_video.php">Interview Videos</a></div>
        <div><a class="menu" href="back_resume.php">Resume</a></div>
        <div><a class="menu" href="back_letter.php">Cover Letter</a></div>

    </nav>


    <main>
        <div class="question">
            1. What is a backend developer?
        </div>
        <div class="ans">
            - ANSWER:: A backend developer focuses on server-side logic, database interactions, and APIs to build and
            maintain the technology that powers the components enabling the user-facing side of a web application.
        </div>
        <hr>
        <div class="question">
            2. What is the difference between SQL and NoSQL databases?
        </div>
        <div class="ans">
            - ANSWER:: SQL databases use structured query language for defining and manipulating data, are table-based,
            and have a predefined schema. NoSQL databases are more flexible, storing data in various formats like
            key-value pairs, documents, or graphs, and are schema-less.
        </div>
        <hr>
        <div class="question">
            3. Explain RESTful API.
        </div>
        <div class="ans">
            - ANSWER:: A RESTful API is an API that adheres to the principles of REST (Representational State Transfer),
            using HTTP requests to GET, PUT, POST, and DELETE data, and is stateless, with each request containing all
            the information needed to process it.
        </div>
        <hr>
        <div class="question">
            4. What is an ORM?
        </div>
        <div class="ans">
            - ANSWER:: An ORM (Object-Relational Mapping) is a programming technique that allows developers to interact
            with a database using the object-oriented paradigm of their programming language, abstracting away the SQL
            queries.
        </div>
        <hr>
        <div class="question">
            5. What are microservices?
        </div>
        <div class="ans">
            - ANSWER:: Microservices are an architectural style where a large application is composed of small,
            independent services that communicate over a network. Each service is focused on a single business
            capability.
        </div>
        <hr>

        <div class="question">
            6. What is a primary key?
        </div>
        <div class="ans">
            - ANSWER:: A primary key is a unique identifier for a record in a database table, ensuring that no two rows
            have the same primary key value.
        </div>
        <hr>
        <div class="question">
            7. What is a foreign key?
        </div>
        <div class="ans">
            - ANSWER:: A foreign key is a field (or collection of fields) in one table that uniquely identifies a row in
            another table, creating a relationship between the two tables.
        </div>
        <hr>
        <div class="question">
            8. Explain the concept of database normalization.
        </div>
        <div class="ans">
            - ANSWER:: Database normalization is the process of organizing the fields and tables of a relational
            database to minimize redundancy and dependency, typically through a series of normal forms.
        </div>
        <hr>
        <div class="question">
            9. What is a JOIN in SQL?
        </div>
        <div class="ans">
            - ANSWER:: A JOIN is an SQL operation used to combine rows from two or more tables based on a related column
            between them. Common types include INNER JOIN, LEFT JOIN, RIGHT JOIN, and FULL JOIN.
        </div>
        <hr>
        <div class="question">
            10. What is ACID in database systems?
        </div>
        <div class="ans">
            - ANSWER:: ACID stands for Atomicity, Consistency, Isolation, and Durability, which are properties that
            ensure reliable processing of database transactions.
        </div>
        <hr>
        <div class="question">
            11. What is indexing in databases?
        </div>
        <div class="ans">
            - ANSWER:: Indexing is a database optimization technique that improves the speed of data retrieval
            operations on a database table at the cost of additional storage space and slower write operations.
        </div>
        <hr>
        <div class="question">
            12. What is a transaction in a database?
        </div>
        <div class="ans">
            - ANSWER:: A transaction is a sequence of one or more SQL operations treated as a single unit of work. It
            ensures that either all operations are successfully completed, or none are, maintaining database integrity.
        </div>
        <hr>
        <div class="question">
            13. Explain database sharding.
        </div>
        <div class="ans">
            - ANSWER:: Database sharding is a partitioning technique where a large database is split into smaller, more
            manageable pieces called shards, which can be distributed across multiple servers.
        </div>
        <hr>
        <div class="question">
            14. What is a stored procedure?
        </div>
        <div class="ans">
            - ANSWER:: A stored procedure is a precompiled collection of one or more SQL statements stored in the
            database, which can be executed as a single unit to perform a specific task.
        </div>
        <hr>
        <div class="question">
            15. What is the difference between a clustered and a non-clustered index?
        </div>
        <div class="ans">
            - ANSWER:: A clustered index determines the physical order of data in a table and is typically faster for
            retrieval. A non-clustered index maintains a logical order of data that differs from the physical order and
            includes a pointer to the physical data.
        </div>
        <hr>
        <div class="question">
            16. What is MVC architecture?
        </div>
        <div class="ans">
            - ANSWER:: MVC (Model-View-Controller) is an architectural pattern that separates an application into three
            main components: the Model (data), the View (user interface), and the Controller (business logic), promoting
            organized and modular code.
        </div>
        <hr>
        <div class="question">
            17. Explain the concept of middleware in web frameworks.
        </div>
        <div class="ans">
            - ANSWER:: Middleware refers to software that acts as an intermediary between different components of a web
            application, typically handling requests and responses. Examples include authentication, logging, and data
            transformation.
        </div>
        <hr>
        <div class="question">
            18. What is a REST API, and how does it differ from SOAP?
        </div>
        <div class="ans">
            - ANSWER:: REST API (Representational State Transfer) uses HTTP and supports various data formats, typically
            JSON, while SOAP (Simple Object Access Protocol) is a protocol that uses XML and has more rigid
            specifications.
        </div>
        <hr>
        <div class="question">
            19. What is a WebSocket?
        </div>
        <div class="ans">
            - ANSWER:: WebSocket is a communication protocol providing full-duplex communication channels over a single,
            long-lived TCP connection, allowing real-time data transfer between client and server.
        </div>
        <hr>
        <div class="question">
            20. What is a daemon in the context of backend development?
        </div>
        <div class="ans">
            - ANSWER:: A daemon is a background process that runs continuously and handles requests for services, often
            starting at boot time and without direct user interaction.
        </div>
        <hr>
        <div class="question">
            21. What is SQL injection, and how can you prevent it?
        </div>
        <div class="ans">
            - ANSWER:: SQL injection is a code injection technique that exploits vulnerabilities in an application's
            software by inserting malicious SQL code. It can be prevented by using parameterized queries, prepared
            statements, and ORM frameworks.
        </div>
        <hr>
        <div class="question">
            22. What is cross-site scripting (XSS), and how can it be mitigated?
        </div>
        <div class="ans">
            - ANSWER:: XSS is a security vulnerability where attackers inject malicious scripts into web pages viewed by
            others. It can be mitigated by sanitizing and escaping user input, using Content Security Policy (CSP), and
            validating output.
        </div>
        <hr>
        <div class="question">
            23. What is CSRF, and how can you defend against it?
        </div>
        <div class="ans">
            - ANSWER:: CSRF (Cross-Site Request Forgery) is an attack where a malicious website causes a user's browser
            to perform an unwanted action on another site where the user is authenticated. Defenses include using
            anti-CSRF tokens, SameSite cookies, and validating the HTTP Referer header.
        </div>
        <hr>
        <div class="question">
            24. Explain the concept of OAuth.
        </div>
        <div class="ans">
            - ANSWER:: OAuth is an open-standard authorization framework that allows third-party services to exchange
            information without exposing user credentials. It uses access tokens to grant limited access to user
            resources.
        </div>
        <hr>
        <div class="question">
            25. What is HTTPS, and why is it important?
        </div>
        <div class="ans">
            - ANSWER:: HTTPS (HyperText Transfer Protocol Secure) is an extension of HTTP that uses SSL/TLS to encrypt
            data between the client and server, ensuring secure communication and protecting against eavesdropping and
            tampering.
        </div>
        <hr>
        <div class="question">
            26. What is load balancing, and why is it important?
        </div>
        <div class="ans">
            - ANSWER:: Load balancing distributes incoming network traffic across multiple servers to ensure no single
            server becomes overwhelmed, improving application availability, reliability, and performance.
            <hr>
            <div class="question">

                27. What is caching, and how does it improve performance?

            </div>
            <div class="ans">
                - ANSWER:: Caching stores frequently accessed data in a temporary storage area for quick retrieval. It
                reduces latency and server load, improving the performance and scalability of an application.
            </div>
            <hr>
            <div class="question">
                28. What is a CDN, and how does it work?
            </div>
            <div class="ans">
                - ANSWER:: A CDN (Content Delivery Network) is a network of distributed servers that deliver web content
                to users based on their geographic location, enhancing load times, reducing latency, and improving site
                availability.

            </div>
            <hr>
            <div class="question">
                29. Explain the concept of database replication.
            </div>
            <div class="ans">
                - ANSWER:: Database replication involves copying and maintaining database objects in multiple database
                servers to ensure data availability, fault tolerance, and load balancing.
            </div>
            <hr>
            <div class="question">
                30. What are some common performance optimization techniques for backend applications?
            </div>
            <div class="ans">
                - ANSWER:: Techniques include optimizing database queries, using caching mechanisms, implementing load
                balancing, using efficient algorithms and data structures, and performing asynchronous processing.
            </div>
            <hr>
            <div class="question">
                31. What is Docker, and why is it used?
            </div>
            <div class="ans">
                - ANSWER:: Docker is a platform for developing, shipping, and running applications in containers. It
                provides a consistent environment for development, testing, and deployment, improving efficiency and
                scalability.
            </div>
            <hr>
            <div class="question">
                32. Explain the concept of Continuous Integration/Continuous Deployment (CI/CD).
            </div>
            <div class="ans">
                - ANSWER:: CI/CD is a practice where developers integrate code into a shared repository frequently (CI)
                and deploy code to production quickly and safely (CD), using automation tools to streamline the process.
            </div>
            <hr>
            <div class="question">
                33. What is Kubernetes?
            </div>
            <div class="ans">
                - ANSWER:: Kubernetes is an open-source container orchestration platform that automates the deployment,
                scaling, and management of containerized applications, ensuring they run efficiently in different
                environments.
            </div>
            <hr>
            <div class="question">
                34. What is Infrastructure as Code (IaC)?
            </div>
            <div class="ans">
                - ANSWER:: IaC is the practice of managing and provisioning computing infrastructure using code and
                automation, allowing for version control, reproducibility, and scalability.
            </div>
            <hr>
            <div class="question">
                35. What is AWS Lambda?
            </div>
            <div class="ans">
                - ANSWER:: AWS Lambda is a serverless compute service that lets you run code in response to events
                without provisioning or managing servers. You only pay for the compute time consumed.
            </div>
            <hr>
            <div class="question">
                36. What is event-driven architecture?
            </div>
            <div class="ans">
                - ANSWER:: Event-driven architecture is a design paradigm where system components communicate and
                execute actions in response to events or messages, enabling decoupled and scalable systems.

            </div>
            <hr>
            <div class="question">
                37. What is the difference between monolithic and microservices architectures?
            </div>
            <div class="ans">
                - ANSWER:: A monolithic architecture is a single, unified application, while a microservices
                architecture breaks down the application into small, independently deployable services that communicate
                over a network.
            </div>
            <hr>
            <div class="question">
                38. What is a message queue, and why is it used?
            </div>
            <div class="ans">
                - ANSWER:: A message queue is a component that allows asynchronous communication between different parts
                of a system by storing messages until they can be processed.
            </div>
            <hr>
            <div class="question">
                39. What is a reverse proxy, and how does it work?
            </div>
            <div class="ans">
                - ANSWER:: A reverse proxy is a server that sits between client requests and backend servers, forwarding
                client requests to the appropriate backend server. It improves security, load balancing, and performance
                by hiding the identity of backend servers and caching content.

            </div>
            <hr>
            <div class="question">
                40. What is GraphQL, and how does it differ from REST?
            </div>
            <div class="ans">
                - ANSWER:: GraphQL is a query language for APIs and a runtime for executing those queries by allowing
                clients to request specific data. Unlike REST, which has fixed endpoints and returns a fixed structure,
                GraphQL allows clients to query only the data they need.
            </div>
            <hr>
            <div class="question">
                41. What is a circuit breaker pattern, and when would you use it?
            </div>
            <div class="ans">
                - ANSWER:: The circuit breaker pattern is a design pattern used to detect failures and encapsulate the
                logic of preventing a failure from constantly recurring during maintenance, temporary external service
                downtime, or unexpected system failures. It helps improve the resilience of a system.
            </div>
            <hr>
            <div class="question">
                42. Explain the concept of eventual consistency in distributed systems.
            </div>
            <div class="ans">
                - ANSWER:: Eventual consistency is a consistency model used in distributed computing to achieve high
                availability. It guarantees that, given enough time, all replicas of a distributed system will
                eventually reach consistency, though they may be temporarily inconsistent.
            </div>
            <hr>
            <div class="question">
                43. What are Webhooks, and how do they work?
            </div>
            <div class="ans">
                - ANSWER:: Webhooks are user-defined HTTP callbacks that are triggered by specific events. When an event
                occurs, the source site makes an HTTP request to a URL configured by the user, often used for real-time
                notifications.
            </div>
            <hr>
            <div class="question">
                44. What is a distributed tracing system, and why is it important?
            </div>
            <div class="ans">
                - ANSWER:: A distributed tracing system tracks and visualizes requests as they move through different
                services in a distributed system. It is important for diagnosing performance issues, debugging errors,
                and understanding the flow of requests across services.
            </div>
            <hr>
            <div class="question">
                45. What are API gateways, and what role do they play in microservices architecture?
            </div>
            <div class="ans">
                - ANSWER:: An API gateway acts as a single entry point for all client requests in a microservices
                architecture. It handles request routing, composition, and protocol translation, improving security,
                load balancing, and reducing complexity for clients.
            </div>
            <hr>
            <div class="question">
                46. What is CAP theorem, and how does it apply to distributed systems?
            </div>
            <div class="ans">
                - ANSWER:: The CAP theorem states that in a distributed system, it is impossible to simultaneously
                achieve Consistency, Availability, and Partition Tolerance. Systems must choose to prioritize two out of
                the three based on their requirements.
            </div>
            <hr>
            <div class="question">
                47. What is a dead letter queue, and why would you use it?
            </div>
            <div class="ans">
                - ANSWER:: A dead letter queue (DLQ) is a specialized message queue used to store messages that cannot
                be processed successfully. It helps in isolating and troubleshooting issues with message processing in a
                message queue system.
            </div>
            <hr>
            <div class="question">
                48. What is the purpose of using a Content Security Policy (CSP)?
            </div>

            <div class="ans">
                - ANSWER:: CSP is a security feature that helps prevent a variety of attacks, including Cross-Site
                Scripting (XSS) and data injection attacks, by specifying which dynamic resources are allowed to load on
                a webpage.
            </div>
            <hr>
            <div class="question">
                49. What is service discovery, and why is it important in microservices?
            </div>
            - ANSWER:: Service discovery is the process of automatically detecting devices and services on a network. In
            microservices, it helps dynamically locate services, allowing for better scaling, load balancing, and
            resilience.
            <div class="ans">

            </div>
            <hr>
            <div class="question">
                50. What is Webpack, and why is it used?
            </div>
            <div class="ans">
                - ANSWER:: A read replica is a copy of the primary database that is used to distribute read traffic and
                improve read performance. It helps in scaling the database by allowing read-heavy workloads to be
                handled by multiple replicas, reducing the load on the primary database.
            </div>
            <hr>

    </main>
    <div class="download-sec">
        <a href="files/back-Questions.pdf" download="Backend Questions"><button id="download">Download Questions</button></a>
    </div>
    <?php include 'footer.php';
?>
</body>
</html>