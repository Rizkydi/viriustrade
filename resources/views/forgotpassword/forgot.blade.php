<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./Assets/Image/logo viriustrade.png">
    <title>Virius Trade </title>
    {{-- css --}}
    <link rel="stylesheet" href="../assets/css/forgot.css">

    <!-- {{-- font linked --}} -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <!-- {{-- font awesome --}} -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- cdn -->
    <link rel='stylesheet prefetch'
        href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>
    {{--  --}}
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    {{-- iconify --}}
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

    @include('header.favicon')
</head>

<body>
    <div class="forgot">
        <form action="/" method="">
            <div class="form-login">
                <div class="logo-virustrade">
                    <img src="../assets/icons/favicon/apple-touch-icon.png" alt="">
                </div>
                <div class="txt-dashboard">
                    <p>Dashboard Kit</p>
                </div>
                <div class="txt-login">
                    <p>Forgot password in to Dashboard Kit</p>
                </div>
                <div class="txt-enter-your-and-password-below">
                    <p>enter the email address assorted with your account  
                     and we'll send you a link reset your password</p>
                </div>
                <div class="email">
                    <div class="txt-email">
                        <p>EMAIL</p>
                    </div>
                    <div class="input-email">
                        <input type="email" placeholder="Email address" required>
                    </div>
                </div>
                <div class="submit">
                    <input type="submit" value="Riset Password">
                </div>
                <div class="txt-sign-up">
                    <p>Back to</p>
                    <div class="link-log-in">
                        <a href="/login">
                            <p>log in</p>
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @yield('content')
</body>

</html>
