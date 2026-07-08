<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front-end Developer Question</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
<?php include 'header.php';
?>

    <nav id="menu_bar">
        <div><a href="front.php" class="menu">Frontend</a></div>
        <div><a class="menu" href="hr__front_questions.php">HR Questions</a></div>
        <div><a class="menu" href="front_questions.php">Interview Questions</a></div>
        <div><a class="menu" href="front_video.php">Interview Videos</a></div>
        <div><a class="menu" href="front_resume.php">Resume</a></div>
        <div><a class="menu" href="front_letter.php">Cover Letter</a></div>

    </nav>
    <main>
        <div class="question">
            1. What is HTML?
        </div>
        <div class="ans">
            - ANSWER:: HTML (HyperText Markup Language) is the standard markup language for creating web pages. It
            describes the structure of a web page using a series of elements and tags.
        </div>
        <hr>
        <div class="question">
            2. What is CSS?
        </div>
        <div class="ans">
            - ANSWER:: CSS (Cascading Style Sheets) is a stylesheet language used to describe the presentation of a
            document written in HTML. It controls the layout, colors, fonts, and overall visual appearance of the web
            pages.
        </div>
        <hr>
        <div class="question">
            3. What is JavaScript?
        </div>
        <div class="ans">
            - ANSWER:: JavaScript is a programming language that allows you to create dynamically updating content,
            control multimedia, animate images, and handle events on web pages.
        </div>
        <hr>
        <div class="question">
            4. Explain the box model in CSS.
        </div>
        <div class="ans">
            - ANSWER:: The box model in CSS describes the rectangular boxes generated for elements in the document tree.
            It consists of margins, borders, padding, and the actual content.
        </div>
        <hr>
        <div class="question">
            5. What is the difference between inline, inline-block, and block elements in CSS?
        </div>
        <div class="ans">
            - ANSWER:: Inline elements do not start on a new line and only take up as much width as necessary.
            Inline-block elements are like inline elements but respect margins and padding. Block elements start on a
            new line and take up the full width available.
        </div>
        <hr>

        <div class="question">
            6. What is Flexbox in CSS?
        </div>
        <div class="ans">
            - ANSWER:: Flexbox (Flexible Box Layout) is a layout model in CSS designed to distribute space along a
            single column or row, making it easier to design flexible and responsive layout structures.
        </div>
        <hr>
        <div class="question">
            7. How does CSS Grid differ from Flexbox?
        </div>
        <div class="ans">
            - ANSWER:: CSS Grid is a two-dimensional layout system for the web, allowing you to layout items in rows and
            columns, while Flexbox is a one-dimensional layout method for laying out items in a row or a column.
        </div>
        <hr>
        <div class="question">
            8. What are media queries in CSS?
        </div>
        <div class="ans">
            - ANSWER:: Media queries are used in CSS to apply styles depending on the device's characteristics, such as
            screen size, resolution, or orientation, enabling responsive web design.
        </div>
        <hr>
        <div class="question">
            9. What is a CSS preprocessor?
        </div>
        <div class="ans">
            - ANSWER:: A CSS preprocessor is a scripting language that extends CSS and compiles it into regular CSS.
            Examples include SASS (Syntactically Awesome Style Sheets) and LESS (Leaner Style Sheets).
        </div>
        <hr>
        <div class="question">
            10. Explain the difference between classes and IDs in CSS.
        </div>
        <div class="ans">
            - ANSWER:: Classes are reusable styles that can be applied to multiple elements, prefixed with a dot (.),
            while IDs are unique and should be applied to a single element, prefixed with a hash ().
        </div>
        <hr>
        <div class="question">
            11. What are JavaScript closures?
        </div>
        <div class="ans">
            - ANSWER:: Closures are functions that have access to their own scope, the scope of the outer function, and
            the global scope. They allow functions to remember the environment in which they were created.
        </div>
        <hr>
        <div class="question">
            12. Explain the concept of hoisting in JavaScript.
        </div>
        <div class="ans">
            - ANSWER:: Hoisting is a JavaScript mechanism where variables and function declarations are moved to the top
            of their containing scope before code execution.
        </div>
        <hr>
        <div class="question">
            13. What is the difference between var, let, and const?
        </div>
        <div class="ans">
            - ANSWER:: var is function-scoped and can be redeclared; let is block-scoped and cannot be redeclared; const
            is block-scoped, cannot be redeclared, and must be initialized at the time of declaration.
        </div>
        <hr>
        <div class="question">
            14. What is the event loop in JavaScript?
        </div>
        <div class="ans">
            - ANSWER:: The event loop is a mechanism that allows JavaScript to perform non-blocking operations by
            executing callbacks and asynchronous code in the background while continuing to run synchronous code on the
            main thread.
        </div>
        <hr>
        <div class="question">
            15. Explain the difference between == and === in JavaScript.
        </div>
        <div class="ans">
            - ANSWER:: == is the abstract equality operator and performs type coercion before comparing, while === is
            the strict equality operator and compares both value and type without type coercion.
        </div>
        <hr>
        <div class="question">
            16. What is React?
        </div>
        <div class="ans">
            - ANSWER:: React is a JavaScript library for building user interfaces, particularly single-page
            applications, by creating reusable UI components..
        </div>
        <hr>
        <div class="question">
            17. What is the Virtual DOM?
        </div>
        <div class="ans">
            - ANSWER:: The Virtual DOM is a lightweight copy of the actual DOM that React uses to minimize direct
            manipulation of the DOM, improving performance by updating only the parts that have changed.
        </div>
        <hr>
        <div class="question">
            18. What is Angular?
        </div>
        <div class="ans">
            - ANSWER:: Angular is a platform and framework for building single-page client applications using HTML, CSS,
            and TypeScript. It provides a robust set of tools for building complex applications.
        </div>
        <hr>
        <div class="question">
            19. What is Vue.js?
        </div>
        <div class="ans">
            - ANSWER:: Vue.js is a progressive JavaScript framework for building user interfaces. It is designed to be
            incrementally adoptable, with a core library focusing on the view layer only.
        </div>
        <hr>
        <div class="question">
            20. Explain the concept of components in front-end frameworks.
        </div>
        <div class="ans">
            - ANSWER:: Components are reusable, self-contained blocks of code that encapsulate HTML, CSS, and JavaScript
            to build interactive user interfaces. They help in organizing code and making it modular.
        </div>
        <hr>
        <div class="question">
            21. What are some techniques for optimizing web performance?
        </div>
        <div class="ans">
            - ANSWER:: Techniques include minimizing HTTP requests, using lazy loading, compressing images, leveraging
            browser caching, minimizing CSS and JavaScript files, and using CDNs.
        </div>
        <hr>
        <div class="question">
            22. What is lazy loading?
        </div>
        <div class="ans">
            - ANSWER:: Lazy loading is a design pattern that delays the loading of non-critical resources (like images,
            scripts, etc.) until they are actually needed to improve initial page load time.
        </div>
        <hr>
        <div class="question">
            23. Explain the concept of Critical Rendering Path.
        </div>
        <div class="ans">
            - ANSWER:: The Critical Rendering Path is the sequence of steps the browser takes to convert HTML, CSS, and
            JavaScript into pixels on the screen. Optimizing it improves the rendering performance of web pages.
        </div>
        <hr>
        <div class="question">
            24. What is code splitting?
        </div>
        <div class="ans">
            - ANSWER:: Code splitting is a technique used to split your code into various bundles or chunks, which can
            then be loaded on demand or in parallel. This helps to reduce the initial load time of the web application.
        </div>
        <hr>
        <div class="question">
            25. What is the purpose of using a Content Delivery Network (CDN)?
        </div>
        <div class="ans">
            - ANSWER:: A CDN distributes content across multiple servers in different locations to reduce latency and
            improve the loading speed of web resources by serving them from a location closer to the user.
        </div>
        <hr>
        <div class="question">
            26. How do you debug JavaScript code?
        </div>
        <div class="ans">
            - ANSWER:: Debugging JavaScript code can be done using browser developer tools, which provide features like
            breakpoints, watch expressions, call stack inspection, and real-time code execution.
        </div>
        <hr>
        <div class="question">
            27. What are some common tools for front-end testing?
        </div>
        <div class="ans">
            - ANSWER:: Common tools include Jest, Mocha, Jasmine, and Karma for unit testing; Selenium and Cypress for
            end-to-end testing; and React Testing Library for testing React components.

        </div>
        <hr>
        <div class="question">
            28. What is Cross-Browser Testing?
        </div>
        <div class="ans">
            - ANSWER:: Cross-Browser Testing involves checking and ensuring that a web application works consistently
            across different web browsers and versions, such as Chrome, Firefox, Safari, and Edge.

        </div>
        <hr>
        <div class="question">
            29. How do you handle browser compatibility issues?
        </div>
        <div class="ans">
            - ANSWER:: Handling browser compatibility issues involves using tools like Autoprefixer, Polyfills, and CSS
            resets, as well as testing across multiple browsers and using feature detection libraries like Modernizr.

        </div>
        <hr>
        <div class="question">
            30. What are some best practices for writing maintainable CSS?
        </div>
        <div class="ans">
            - ANSWER:: Best practices include using a naming convention like BEM (Block, Element, Modifier), organizing
            styles logically, avoiding deeply nested selectors, using CSS variables, and keeping CSS modular.
        </div>
        <hr>
        <div class="question">
            31. What is Web Accessibility?
        </div>
        <div class="ans">
            - ANSWER:: Web Accessibility ensures that websites and web applications are usable by people with
            disabilities, by following guidelines like WCAG (Web Content Accessibility Guidelines).

        </div>
        <hr>
        <div class="question">
            32. What is Progressive Enhancement?
        </div>
        <div class="ans">
            - ANSWER:: Progressive Enhancement is a design strategy that emphasizes providing basic functionality and
            content to all users, while delivering enhanced features to users with more advanced browsers and
            capabilities.
        </div>
        <hr>
        <div class="question">
            33. What is a Single Page Application (SPA)?
        </div>
        <div class="ans">
            - ANSWER:: A Single Page Application is a web application that loads a single HTML page and dynamically
            updates content as the user interacts with the app, without requiring a full page reload.
        </div>
        <hr>
        <div class="question">
            34. What is the purpose of using a package manager like npm or Yarn?
        </div>
        <div class="ans">
            - ANSWER:: Package managers like npm (Node Package Manager) or Yarn help manage project dependencies, making
            it easy to install, update, and share code libraries and tools.
        </div>
        <hr>
        <div class="question">
            35. What is the difference between REST and GraphQL?
        </div>
        <div class="ans">
            - ANSWER:: REST is an architectural style for designing networked applications, using standard HTTP methods.
            GraphQL is a query language for APIs that allows clients to request exactly the data they need.

        </div>
        <hr>
        <div class="question">
            36. What are some new features in HTML5?
        </div>
        <div class="ans">
            - ANSWER:: HTML5 introduces new semantic elements like &lt;article&gt; ,&lt;section&gt;, &lt;nav&gt;, and
            &lt;header&gt;, as well as new form controls, audio and video elements, and the canvas element for drawing
            graphics.

        </div>
        <hr>
        <div class="question">
            37. What are some new features in CSS3?
        </div>
        <div class="ans">
            - ANSWER:: CSS3 introduces features like Flexbox, Grid Layout, transitions, animations, transforms, and new
            selectors and properties like box-shadow and border-radius.

        </div>
        <hr>
        <div class="question">
            38. What is the purpose of the &lt;canvas&gt; element in HTML5?
        </div>
        <div class="ans">
            - ANSWER:: The &lt;canvas&gt; element is used to draw graphics on a web page using JavaScript. It provides a
            space where you can create shapes, images, and animations dynamically.

        </div>
        <hr>
        <div class="question">
            39. How are JavaScript and jQuery different?
        </div>
        <div class="ans">
            JQuery is a library built with the JavaScript language, and JavaScript is the language itself.

        </div>
        <hr>
        <div class="question">
            40. What are Promises in JavaScript?
        </div>
        <div class="ans">
            - ANSWER:: Promises are objects that represent the eventual completion (or failure) of an asynchronous
            operation and its resulting value. They provide methods like .then() and .catch() to handle asynchronous
            results.
        </div>
        <hr>
        <div class="question">
            41. What is the difference between call(), apply(), and bind() methods in JavaScript?
        </div>
        <div class="ans">
            - ANSWER:: call() and apply() invoke a function with a given this context and arguments; call() takes
            arguments separately, while apply() takes them as an array. bind() returns a new function with a specified
            this context and arguments.
        </div>
        <hr>
        <div class="question">
            42. What are JavaScript modules, and why are they useful?
        </div>
        <div class="ans">
            - ANSWER:: JavaScript modules allow you to break your code into reusable pieces with import and export
            statements. They help in organizing code, avoiding namespace collisions, and making code more maintainable.
        </div>
        <hr>
        <div class="question">
            43. What is the difference between synchronous and asynchronous JavaScript?
        </div>
        <div class="ans">
            - ANSWER:: Synchronous JavaScript runs in sequence, blocking the execution of subsequent code until the
            current operation completes. Asynchronous JavaScript allows code to run in parallel, handling tasks like
            network requests without blocking the main thread.
        </div>
        <hr>
        <div class="question">
            44. Explain async and await in JavaScript.
        </div>
        <div class="ans">
            - ANSWER:: async and await are syntactic sugar over Promises, making asynchronous code look and behave more
            like synchronous code. async functions return a Promise, and await pauses the execution until the Promise is
            resolved or rejected.
        </div>
        <hr>
        <div class="question">
            45. What are Web Workers, and when would you use them?
        </div>
        <div class="ans">
            - ANSWER:: Web Workers are a way to run scripts in background threads, separate from the main execution
            thread of a web application. They are useful for performing CPU-intensive tasks without blocking the UI.
        </div>
        <hr>
        <div class="question">
            46. What is the purpose of using debounce and throttle?
        </div>
        <div class="ans">
            - ANSWER:: debounce and throttle are techniques used to control the rate at which a function is executed.
            debounce delays execution until a certain time has passed without repeated calls, while throttle ensures a
            function is called at most once in a specified period.
        </div>
        <hr>
        <div class="question">
            47. What are Service Workers, and what role do they play in a web application?
        </div>
        <div class="ans">
            - ANSWER:: Service Workers are scripts that run in the background and intercept network requests, enabling
            features like offline support, background sync, and push notifications. They help in creating Progressive
            Web Apps (PWAs).
        </div>
        <hr>
        <div class="question">
            48. What is Cross-Site Scripting (XSS), and how do you prevent it?
        </div>

        <div class="ans">
            - ANSWER:: XSS is a security vulnerability where an attacker injects malicious scripts into web pages viewed
            by others. It can be prevented by properly escaping user input, using Content Security Policy (CSP), and
            sanitizing data.
        </div>
        <hr>
        <div class="question">
            49. What is Cross-Site Request Forgery (CSRF), and how can it be mitigated?
        </div>
        - ANSWER:: CSRF is an attack where a malicious website tricks users into performing actions on another site
        where they are authenticated. It can be mitigated using anti-CSRF tokens, SameSite cookies, and validating
        request origins.
        <div class="ans">

        </div>
        <hr>
        <div class="question">
            50. What is Webpack, and why is it used?
        </div>
        <div class="ans">
            - ANSWER:: Webpack is a module bundler for JavaScript applications. It takes modules with dependencies and
            generates static assets representing those modules, optimizing them for performance and enabling features
            like code splitting and hot module replacement.
        </div>
        <hr>

    </main>
    <div class="download-sec">
        <a href="files/front-Questions.pdf" download="FrontEnd Questions"><button id="download">Download Questions</button></a>
    </div>
    <?php include 'footer.php';
?>
</body>

</html>