<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>


    <!-- CSS Global -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{asset('css/home-style.css')}}" rel="stylesheet">
</head>

<body class="bg-img ">
    <nav class="navbar ">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand logo" href="#">
                    <img src="images/logo.png" alt="Exam Tech">
                </a>
            </div>

        </div>
    </nav>

    <div class="main">
        <h2>Online Examination</h2>
        <p><span class="yellow"> Prepare. </span> <span class="green"> Test Yourself.</span> <span class="yellow">Excel.</span> </p>
    </div>
    <div class="next text-center">
        <div class="container">
        
                <div class="enter-buttons"><a href="{{ route('student-login') }}">
                        <button class="button"><span>Student Login </span></button>
                    </a>
                </div>
                <div class="enter-buttons"><a href="{{ route('login') }}">
                        <button class="button"><span>Admin Login </span></button>
                    </a>
                </div>
                <div class="enter-buttons"><a href="index">
                        <button class="button"><span>Enter Site </span></button>
                    </a>
                </div>
        </div>
    </div>
</body>
</html>