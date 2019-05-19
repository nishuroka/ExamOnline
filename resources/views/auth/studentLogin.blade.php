<!DOCTYPE html>
<html lang="en">

<head>
  <title>Student Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <style>
    body {
      background: #e9e9e9;
      color: #666666;
      font-family: "RobotoDraft", "Roboto", sans-serif;
      font-size: 14px;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }


    /* Container */
    .container {
      position: relative;
      max-width: 460px;
      width: 100%;
      margin: 0 auto 100px;
    }

    .login-main {
      max-width: 1000px;
      margin: auto;
      left: 1%;
      right: 1%;
      position: absolute;
    }

    /* Card */
    .card {
      position: relative;
      background: #ffffff;
      border-radius: 5px;
      padding: 60px 0 40px 0;
      box-sizing: border-box;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
      transition: 0.3s ease;
    }

    .card:first-child {
      background: #fafafa;
      height: 10px;
      border-radius: 5px 5px 0 0;
      margin: 0 10px;
      padding: 0;
    }

    .card .title {
      position: relative;
      z-index: 1;
      border-left: 5px solid #ed2553;
      margin: 0 0 35px;
      padding: 10px 0 10px 50px;
      color: #ed2553;
      font-size: 32px;
      font-weight: 600;
      text-transform: uppercase;
    }

    .card .input-container {
      position: relative;
      margin: 0 60px 50px;
    }

    .card .input-container input {
      outline: none;
      z-index: 1;
      position: relative;
      background: none;
      width: 100%;
      height: 60px;
      border: 0;
      color: #212121;
      font-size: 24px;
      font-weight: 400;
    }

    .card .input-container input:focus~label {
      color: #9d9d9d;
      -webkit-transform: translate(-12%, -50%) scale(0.75);
      transform: translate(-12%, -50%) scale(0.75);
    }

    .card .input-container input:focus~.bar:before,
    .card .input-container input:focus~.bar:after {
      width: 50%;
    }

    .card .input-container input:valid~label {
      color: #9d9d9d;
      -webkit-transform: translate(-12%, -50%) scale(0.75);
      transform: translate(-12%, -50%) scale(0.75);
    }

    .card .input-container label {
      position: absolute;
      top: 0;
      left: 0;
      color: #757575;
      font-size: 24px;
      font-weight: 300;
      line-height: 60px;
      transition: 0.2s ease;
    }

    .card .input-container .bar {
      position: absolute;
      left: 0;
      bottom: 0;
      background: #757575;
      width: 100%;
      height: 1px;
    }

    .card .input-container .bar:before,
    .card .input-container .bar:after {
      content: "";
      position: absolute;
      background: #ed2553;
      width: 0;
      height: 2px;
      transition: 0.2s ease;
    }

    .card .input-container .bar:before {
      left: 50%;
    }

    .card .input-container .bar:after {
      right: 50%;
    }

    .card .button-container {
      margin: 0 60px;
      text-align: center;
    }

    .card .button-container button {
      outline: 0;
      cursor: pointer;
      position: relative;
      display: inline-block;
      background: 0;
      width: 240px;
      border: 2px solid #e3e3e3;
      padding: 20px 0;
      font-size: 24px;
      font-weight: 600;
      line-height: 1;
      text-transform: uppercase;
      overflow: hidden;
      transition: 0.3s ease;
    }

    .card .button-container button span {
      position: relative;
      z-index: 1;
      color: #ddd;
      transition: 0.3s ease;
    }

    .card .button-container button:before {
      content: "";
      position: absolute;
      top: 50%;
      left: 50%;
      display: block;
      background: #ed2553;
      width: 30px;
      height: 30px;
      border-radius: 100%;
      margin: -15px 0 0 -15px;
      opacity: 0;
      transition: 0.3s ease;
    }

    .card .button-container button:hover,
    .card .button-container button:active,
    .card .button-container button:focus {
      border-color: #ed2553;
    }

    .card .button-container button:hover span,
    .card .button-container button:active span,
    .card .button-container button:focus span {
      color: #ed2553;
    }

    .card .button-container button:active span,
    .card .button-container button:focus span {
      color: #ffffff;
    }

    .card .button-container button:active:before,
    .card .button-container button:focus:before {
      opacity: 1;
      -webkit-transform: scale(10);
      transform: scale(10);
    }

    .card .footer {
      margin: 40px 0 0;
      color: #d3d3d3;
      font-size: 24px;
      font-weight: 300;
      text-align: center;
    }

    .card .footer a {
      color: inherit;
      text-decoration: none;
      transition: 0.3s ease;
    }

    .card .footer a:hover {
      color: #bababa;
    }

    .footer input {
      width: 14px;
      height: 14px;
    }

    .card.alt {
      position: absolute;
      top: 40px;
      right: -70px;
      z-index: 10;
      width: 140px;
      height: 140px;
      background: none;
      border-radius: 100%;
      box-shadow: none;
      padding: 0;
      transition: 0.3s ease;

    }

    .card.alt .toggle {
      position: relative;
      background: #ed2553;
      width: 140px;
      height: 140px;
      border-radius: 100%;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
      color: #ffffff;
      font-size: 58px;
      line-height: 140px;
      text-align: center;
      cursor: pointer;
    }
  </style>
</head>

<body>

  <div class="container">

    <div class="login-main">
      <div class="card"></div>
      <div class="card">
        <h1 class="title">{{ __('Login') }}</h1>
        <form method="POST" action="{{ route('student-login') }}">
          @csrf
          <div class="input-container">
            <input type="#{type} email" id="#{label}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus />
            <label for="#{label}">Email</label>
            <div class="bar"></div>

          </div>
          <div class="input-container">
            @if ($errors->has('email'))

            <span class="invalid-feedback">

              <strong>{{ $errors->first('email') }}</strong>

            </span>

            @endif
            @if ($errors->has('password'))

            <span class="invalid-feedback">

              <strong>{{ $errors->first('password') }}</strong>

            </span>

            @endif
          </div>

          <div class="input-container">
            <input type="password" id="#{label}" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required />
            <label for="#{label}">Password</label>

            <div class="bar"></div>

          </div>

          <div class="footer"><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me</div><br>

          <div class="button-container">
            <button type="submit"><span>Go</span></button>
          </div>
          <div class="footer"><a href="{{ route('password.request') }}">Forgot your password?</a></div>
        </form>
      </div>
      <div class="card alt">
        <div class="toggle">
          <i class="fas fa-pencil-alt"></i>
        </div>

      </div>
    </div>



</body>

</html>