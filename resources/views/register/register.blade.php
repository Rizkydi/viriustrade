<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virius Trade </title>
    {{-- css --}}
    <link rel="stylesheet" href="../assets/css/register.css">
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
    <div class="register">
        <form action="">
            <div class="form-login">
                <div class="logo-virustrade">
                    <img src="../assets/icons/favicon/apple-touch-icon.png" alt="">
                </div>
                <div class="txt-dashboard">
                    <p>Dashboard Kit</p>
                </div>
                <div class="txt-register">
                    <p>Sign Up to Dashboard Kit</p>
                </div>
                <div class="txt-enter-your-and-password-below">
                    <p>Enter your name, email and password below</p>
                </div>
                <div class="nama">
                    <div class="txt-nama">
                        <p>NAMA</p>
                    </div>
                    <div class="input-nama">
                        <input type="nama" placeholder="first and last name" required>
                    </div>
                </div>
                <div class="email">
                    <div class="txt-email">
                        <p>EMAIL</p>
                    </div>
                    <div class="input-email">
                        <input type="email" placeholder="Email address" required>
                    </div>
                </div>
                <div class="password">
                    <div class="txt-password">
                        <p>PASSWORD</p>
                    </div>
                    <div class="txt-forgot">
                        <a href="/forgot">
                            <p>Forgot password?</p>
                        </a>
                    </div>
                    <div class="input-password">
                        <input type="password" placeholder="pasword" required id="myInput">
                    </div>
                    <div class="eye">
                        <i class="fa-regular fa-eye-slash" onclick="myFunction()"></i>
                    </div>
                </div>
                <div class="submit">
                    <input type="submit" value="Register">
                </div>
                <div class="txt-sign-up">
                    <p>Have an account please?</p>
                    <div class="link-sign-up">
                        <a href="/login">
                            <p>Sign in</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grs-or">
                <hr>
                <div class="txt-or">
                    <p>OR</p>
                    <div class="grs-or-2">
                        <hr>
                    </div>
                </div>
            </div>
            <div class="txt-social-account">
                <p>Log In with Your Social Account</p>
            </div>
            <div class="social-ccount">
                    {{-- github --}}
                    <a href="/">
                        <div class="github-link">
                            <div class="bing-github">
                                <div class="logo-github">
                                    <iconify-icon icon="bi:github" style="color: #3978bc;" width="24" height="24">
                                    </iconify-icon>
                                    <div class="txt-github">
                                        <p>LOG IN WITH GITHUB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    {{-- facebook --}}
                    <a href="/">
                        <div class="facebook-link">
                            <div class="bing-facebook">
                                <div class="logo-facebook">
                                    <iconify-icon icon="ri:facebook-fill" style="color: #4167b2;" width="24" height="24"></iconify-icon>
                                    <div class="txt-facebook">
                                        <p>LOG IN WITH FACEBOOK</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/">
                        <div class="google-link">
                            <div class="bing-google">
                                <div class="logo-google">
                                    <iconify-icon icon="logos:google-icon" style="color: #4167b2;" width="24" height="24"></iconify-icon>
                                    <div class="txt-google">
                                        <p>LOG IN WITH GOOGLE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
            </div>
        </form>
    </div>
    <script>
         function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>

    @yield('content')
</body>

</html>
