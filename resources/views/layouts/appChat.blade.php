<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Virius Trade</title>

    <!-- {{-- linked --}} -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- {{-- font linked --}} -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <!-- {{-- font awesome --}} -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- cdn -->
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>

    {{-- favicon --}}
    @include('header.favicon')
</head>
<body>
    <div class="container-1">
        <div class="logo-part">
            <img src="./Assets/Icons/logo_viriustrade.png" alt="logo-image">
            </div>
            <div class="logo-title">
                <strong><p>ViriusTrade</p></strong>
            </div>
        <form action="" class="search-bar">
            <input type="search" name="" id="" placeholder="Search...">
            <button type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
        </form>
        <div class="container-icon-nav">
            <div class="profile-blue">
                <i class="fa-solid fa-user"></i>
                <div class="icon-badge"></div>
            </div>
            <div class="notification-bell"><i class="fa-solid fa-bell"></i></div>
        </div>
        <div class="container-log">
            <div class="login">
                <p>Log In</p>
            </div>
            <div class="sign-up">
                <p>Sign Up</p>
            </div>
        </div>
        <div class="menu-dot">
            <i class="fa-solid fa-ellipsis-vertical"></i>
        </div>
    </div>

    {{-- content --}}
    @yield('content')
</body>
</html>