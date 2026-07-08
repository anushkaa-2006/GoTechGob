<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Android Developer Question</title>
    <link rel="stylesheet" href="style.css">
    
    
</head>

<body>
<?php include 'header.php';
?>
    <nav id="menu_bar">
        <div><a href="android.php" class="menu">Android</a></div>
        <div><a class="menu" href="hr_android_questions.php">HR Questions</a></div>
        <div><a class="menu" href="android_questions.php">Interview Questions</a></div>
        <div><a class="menu" href="android_video.php">Interview Videos</a></div>
        <div><a class="menu" href="android_resume.php">Resume</a></div>
        <div><a class="menu" href="android_letter.php">Cover Letter</a></div>

    </nav>
    <main>
        <div class="question">
            1. What is the difference between `Activity` and `Fragment` in Android?
        </div>
        <div class="ans">
            ANSWER: An `Activity` represents a single screen with a user interface, while a `Fragment` represents a
            reusable portion of the UI that can be embedded in an activity.
        </div>
        <hr>
        <div class="question">
            2. How do you communicate between two fragments?
        </div>
        <div class="ans">
            ANSWER: You can communicate between two fragments using a shared ViewModel or by passing data through the
            parent activity using interfaces.
        </div>
        <hr>
        <div class="question">
            3. What is an Intent in Android?
        </div>
        <div class="ans">
            ANSWER: An Intent is a messaging object used to request an action from another app component, such as
            starting an activity or a service.
        </div>
        <hr>
        <div class="question">
            4. Explain the lifecycle of an `Activity`.
        </div>
        <div class="ans">
            ANSWER: Key lifecycle methods include `onCreate()`, `onStart()`, `onResume()`, `onPause()`, `onStop()`,
            `onDestroy()`, and `onRestart()`.
        </div>
        <hr>
        <div class="question">
            5. What is the difference between `onCreate()` and `onStart()`?
        </div>
        <div class="ans">
            ANSWER: `onCreate()` is called when the activity is first created, and it initializes the activity.
            `onStart()` is called just before the activity becomes visible to the user.
        </div>
        <hr>

        <div class="question">
            6. How do you handle configuration changes in Android?
        </div>
        <div class="ans">
            ANSWER: You can handle configuration changes by saving the state in `onSaveInstanceState()` and restoring it
            in `onRestoreInstanceState()` or by using a retained fragment or ViewModel.
        </div>
        <hr>
        <div class="question">
            7. What is an `AsyncTask` and when would you use it?
        </div>
        <div class="ans">
            ANSWER: `AsyncTask` is used to perform background operations and publish results on the UI thread without
            having to manipulate threads and handlers.
        </div>
        <hr>
        <div class="question">
            8. Explain the concept of `ViewModel` in Android.
        </div>
        <div class="ans">
            ANSWER: `ViewModel` is a class designed to store and manage UI-related data in a lifecycle-conscious way,
            surviving configuration changes like screen rotations.
        </div>
        <hr>
        <div class="question">
            9.What is the difference between `Service` and `IntentService`?
        </div>
        <div class="ans">
            ANSWER: A `Service` runs on the main thread and can perform long-running operations, while an
            `IntentService` runs on a separate worker thread and stops itself when the work is done.

        </div>
        <hr>
        <div class="question">
            10. How do you perform data binding in Android?
        </div>
        <div class="ans">
            ANSWER: Data binding in Android can be done using the Data Binding Library, which allows you to bind UI
            components to data sources in your layout XML files.
        </div>
        <hr>
        <div class="question">
            11. What is an `Adapter` in Android?
        </div>
        <div class="ans">
            ANSWER: An `Adapter` acts as a bridge between an `AdapterView` (like `ListView`, `GridView`, `RecyclerView`)
            and the underlying data for that view.
        </div>
        <hr>
        <div class="question">
            12.How do you use a `RecyclerView`?
        </div>
        <div class="ans">
            ANSWER: To use a `RecyclerView`, you need to define a layout manager, an adapter, and a ViewHolder to
            efficiently display and manage a large dataset.

        </div>
        <hr>
        <div class="question">
            13. Explain the difference between `Serializable` and `Parcelable`.
        </div>
        <div class="ans">
            ANSWER: `Parcelable` is a faster and more efficient serialization mechanism for passing data between Android
            components compared to `Serializable`.
        </div>
        <hr>
        <div class="question">
            14. How do you manage the Android activity back stack?
        </div>
        <div class="ans">
            ANSWER: You manage the back stack using intents with appropriate flags, the `finish()` method, and the
            `FragmentManager` for fragments.
        </div>
        <hr>
        <div class="question">
            15. What is a `ContentProvider`?
        </div>
        <div class="ans">
            ANSWER: A `ContentProvider` manages access to a structured set of data and provides mechanisms for data
            sharing between applications.
        </div>
        <hr>
        <div class="question">
            16. How do you handle permissions in Android?
        </div>
        <div class="ans">
            ANSWER: Permissions are handled by declaring them in the AndroidManifest.xml and requesting them at runtime
            using the `requestPermissions()` method.

        </div>
        <hr>
        <div class="question">
            17.What are the different types of storage available in Android?
        </div>
        <div class="ans">
            ANSWER: Android provides several storage options, including SharedPreferences, Internal Storage, External
            Storage, and SQLite databases.
        </div>
        <hr>
        <div class="question">
            18. What is the purpose of the `manifest` file in an Android project?
        </div>
        <div class="ans">
            ANSWER: The `AndroidManifest.xml` file provides essential information about your app to the Android system,
            including permissions, components, and application metadata.

        </div>
        <hr>
        <div class="question">
            19. Explain the concept of `BroadcastReceiver`.
        </div>
        <div class="ans">
            ANSWER: `BroadcastReceiver` is a component that responds to system-wide broadcast announcements or intents.
        </div>
        <hr>
        <div class="question">
            20. How do you ensure your app is responsive and avoids ANR (Application Not Responding) errors?
        </div>
        <div class="ans">
            ANSWER: To avoid ANR errors, perform long-running operations on background threads using `AsyncTask`,
            `Thread`, `HandlerThread`, or other concurrency mechanisms.
        </div>
        <hr>
        <div class="question">
            21. What is the purpose of `Handler` and `Looper` in Android?
        </div>
        <div class="ans">
            ANSWER: `Handler` and `Looper` are used to manage threads, allowing you to send and process messages and
            runnables on a particular thread's message queue.
        </div>
        <hr>
        <div class="question">
            22. How do you update the UI from a background thread?
        </div>
        <div class="ans">
            ANSWER: You update the UI from a background thread by using `Handler`, `runOnUiThread()`, or other methods
            like `LiveData` with `ViewModel`.
        </div>
        <hr>
        <div class="question">
            23. What is the `JobScheduler` API?
        </div>
        <div class="ans">
            ANSWER: `JobScheduler` is an API that allows you to schedule jobs to be executed in the background based on
            certain conditions, like network availability or charging status.

        </div>
        <hr>
        <div class="question">
            24. Explain the usage of `Room` database.
        </div>
        <div class="ans">
            ANSWER: `Room` is a persistence library that provides an abstraction layer over SQLite to allow fluent
            database access while harnessing the full power of SQLite.
        </div>
        <hr>
        <div class="question">
            25. What is `Dagger` in Android development?
        </div>
        <div class="ans">
            ANSWER: `Dagger` is a dependency injection library that helps manage dependencies in an Android application.
        </div>
        <hr>
        <div class="question">
            26. How do you handle multiple screen sizes and resolutions in Android?
        </div>
        <div class="ans">
            ANSWER: You handle multiple screen sizes and resolutions by using flexible layouts, drawable resources for
            different densities, and dimension resources.
        </div>
        <hr>
        <div class="question">
            27.What are the benefits of using `ConstraintLayout`?
        </div>
        <div class="ans">
            ANSWER: `ConstraintLayout` allows for complex layouts with a flat view hierarchy, improving performance and
            flexibility.

        </div>
        <hr>
        <div class="question">
            28. What is a `ViewHolder` pattern in Android?
        </div>
        <div class="ans">
            ANSWER: The `ViewHolder` pattern is used to improve the performance of `ListView` and `RecyclerView` by
            avoiding unnecessary `findViewById()` calls.

        </div>
        <hr>
        <div class="question">
            29.Explain the purpose of `ProGuard`.
        </div>
        <div class="ans">
            ANSWER: `ProGuard` is a tool that helps to shrink, obfuscate, and optimize your code, reducing the size of
            your APK and protecting it from reverse engineering.
        </div>
        <hr>
        <div class="question">
            30. How do you use `LiveData` and `ViewModel` in Android?
        </div>
        <div class="ans">
            ANSWER: `LiveData` is used to observe data changes, and `ViewModel` is used to manage UI-related data in a
            lifecycle-conscious way.

        </div>
        <hr>
        <div class="question">
            31.What is a `Coroutine` in Kotlin?
        </div>
        <div class="ans">
            ANSWER: A `Coroutine` is a concurrency design pattern used in Kotlin to simplify code that executes
            asynchronously.
        </div>
        <hr>
        <div class="question">
            32. How do you use `Retrofit` for network operations in Android?
        </div>
        <div class="ans">
            ANSWER: `Retrofit` is a type-safe HTTP client for Android and Java, used to handle REST API calls by
            creating a service interface and defining HTTP methods.
        </div>
        <hr>
        <div class="question">
            33. What is `MVP` and `MVVM` architecture in Android?
        </div>
        <div class="ans">
            ANSWER: `MVP` (Model-View-Presenter) and `MVVM` (Model-View-ViewModel) are architectural patterns that
            separate concerns to make the code more modular, testable, and maintainable.
        </div>
        <hr>
        <div class="question">
            34. How do you implement a `SplashScreen` in Android?
        </div>
        <div class="ans">
            ANSWER: A `SplashScreen` can be implemented using a separate activity with a timer, or using
            `WindowBackground` and theming.

        </div>
        <hr>
        <div class="question">
            35. What is `Navigation Component` in Android?
        </div>
        <div class="ans">
            ANSWER: `Navigation Component` is a part of Jetpack that helps you implement navigation, including handling
            fragment transactions, deep linking, and back stack management.

        </div>
        <hr>
        <div class="question">
            36. How do you manage dependencies in an Android project?
        </div>
        <div class="ans">
            ANSWER: Dependencies are managed using Gradle, where you define dependencies in the `build.gradle` file.
        </div>
        <hr>
        <div class="question">
            37. What is `Lint` in Android development?
        </div>
        <div class="ans">
            ANSWER: `Lint` is a static analysis tool used to check your Android project for potential bugs, code
            inefficiencies, and other issues.
        </div>
        <hr>
        <div class="question">
            38. How do you use `WorkManager` in Android?
        </div>
        <div class="ans">
            ANSWER: `WorkManager` is used to schedule and manage deferrable, guaranteed background work, such as
            periodic tasks or tasks that need to be run under specific conditions.
        </div>
        <hr>
        <div class="question">
            39. What is `DataBinding` in Android?
        </div>
        <div class="ans">
            ANSWER: `DataBinding` is a library that allows you to bind UI components in your layouts to data sources in
            your app using a declarative format.

        </div>
        <hr>
        <div class="question">
            40. How do you optimize battery usage in an Android app?
        </div>
        <div class="ans">
            ANSWER: Optimizing battery usage involves minimizing background operations, using `JobScheduler` or
            `WorkManager` for deferred tasks, and using battery-efficient APIs.
        </div>
        <hr>
        <div class="question">
            41.What is a `Snackbar` in Android?
        </div>
        <div class="ans">
            ANSWER: A `Snackbar` provides a lightweight feedback about an operation, showing a brief message at the
            bottom of the screen.
        </div>
        <hr>
        <div class="question">
            42. How do you handle runtime permissions in Android?
        </div>
        <div class="ans">
            ANSWER: Handle runtime permissions by checking for permissions at runtime using `checkSelfPermission()`,
            requesting permissions using `requestPermissions()`, and handling the result in
            `onRequestPermissionsResult()`
        </div>
        <hr>
        <div class="question">
            43.What is a `ViewModelProvider` in Android?
        </div>
        <div class="ans">
            ANSWER: `ViewModelProvider` is a utility class that provides ViewModels to your activity or fragment,
            ensuring they are scoped to the lifecycle of the component.
        </div>
        <hr>
        <div class="question">
            44.Explain the use of `SharedPreferences`.
        </div>
        <div class="ans">
            ANSWER: `SharedPreferences` is used to store key-value pairs of primitive data types, which can be used for
            storing user preferences and settings.
        </div>
        <hr>
        <div class="question">
            45. How do you secure sensitive data in an Android app?
        </div>
        <div class="ans">
            ANSWER: Secure sensitive data using encryption, the Android Keystore system, and avoiding hardcoding
            sensitive information in the app.
        </div>
        <hr>
        <div class="question">
            46.What is `Jetpack Compose`?
        </div>
        <div class="ans">
            ANSWER: `Jetpack Compose` is a modern toolkit for building native Android UI, allowing you to create UIs
            using a declarative approach.
        </div>
        <hr>
        <div class="question">
            47. How do you debug an Android application?
        </div>
        <div class="ans">
            ANSWER: Debug an Android application using tools like Android Studio's debugger, Logcat, breakpoints, and
            profiling tools.
        </div>
        <hr>
        <div class="question">
            48. What are `Broadcast Intents`?

        </div>

        <div class="ans">
            ANSWER: `Broadcast Intents` are used to broadcast events system-wide or within the app, which can be
            received by `BroadcastReceivers`.
        </div>
        <hr>
        <div class="question">
            49.How do you implement localization in an Android app?
        </div>
        ANSWER: Implement localization by providing string resources in different languages in the `res/values` folder,
        and using resource qualifiers.
        <div class="ans">

        </div>
        <hr>
        <div class="question">
            50. What is the `Paging` library in Android?
        </div>
        <div class="ans">
            ANSWER: The `Paging` library helps load and display large data sets by dividing the data into pages, loading
            data gradually and efficiently.
        </div>
        <hr>

    </main>
    <div class="download-sec">
        <a href="files/android-Questions.pdf" download="Android Questions"><button id="download">Download Questions</button></a>
    </div>
    <?php include 'footer.php';
?>
</body>

</html>