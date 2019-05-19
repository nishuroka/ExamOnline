<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="{{asset('student-css/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Bars Css -->
    <link rel="stylesheet" href="{{asset('student-css/css/bar.css')}}">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('student-css/css/calender.css')}}" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="{{asset('student-css/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="{{asset('student-css/css/sidebar-style.css')}} ">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

</head>