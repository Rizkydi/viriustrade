<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./Assets/Image/logo viriustrade.png">
    <!-- font roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <!-- font PT serif -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&display=swap" rel="stylesheet">
    <!-- font quicksand -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <!-- src iconify -->
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="assets/css/tampilan-chat.css">
    <!-- src fontawesome -->
    <script src="https://kit.fontawesome.com/af674c1813.js" crossorigin="anonymous"></script>
    <title>Virius Trade</title>
</head>
<body>
        <!-- navbar -->
        <div class="container-1">    
            <div class="guest-part">
                <img src="./Assets/Image/logo viriustrade.png" alt="">
                <p>ViriusTrade</p>
            </div>
            <form action="" class="search-bar">
                <input type="search" name="" id="" placeholder="Search..." style="font-family: 'Roboto', sans-serif;">
                <button type="submit"><iconify-icon icon="eva:search-outline"></iconify-icon></button>
                <div class="profile-blue">
                    <i class="fa-solid fa-user"></i>
                </div>
            </form>
        </div>

        <!-- sidebar chat -->
        <div class="sidebar-chat">
           <h1>Message</h1>
           <button type="submit"><i class="fa-solid fa-arrow-left"></i>Back Profil </button>
           <button type="submit">All</button>
           <button type="submit">Request</button>
           <button type="submit"><iconify-icon icon="uil:lottiefiles"></iconify-icon><p>Archived</p> </button>
        </div>
        <!-- sidebar-contact -->
        <div class="sidebar-contact">
            <input type="search" name="" id="search-chat" placeholder="Search by full Username...">
            <div class="sidebar-contacting">
                <div class="profile-contacting"><i class="fa-regular fa-user"><div class="icon-badge"></div></i></div>
                <p>Ammar Karim</p>
                <p>8 Minutes Ago</p>
            </div>
        </div>
        {{-- chatting-client --}}
        <div class="chatting-client">
            <div class="client-header">
                <div class="profile-header"><i class="fa-regular fa-user"><div class="icon-badge"></div></i></div>
                <p>Ammar Karim</p>
                <p>Online</p>
                <iconify-icon icon="uil:lottiefiles"></iconify-icon>
                <iconify-icon icon="ph:info-bold"></iconify-icon>
            </div>

            {{-- client-1-messaging --}}
            <div class="client-1">
                <i class="fa-regular fa-user"></i>
            </div>
            <div class="message-1">
                <p>You</p>
                <div class="messaging-1">
                    <p>Hi</p>
                </div>
                <p>1 Minutes Ago</p>
            </div>
        </div>

            {{-- client-2-messaging --}}
            <div class="client-2">
                <i class="fa-regular fa-user"></i>
            </div>
            <div class="message-2">
                <p>Ammar Karim</p>
                <div class="messaging-2">
                    <p>Is there anything we can help ?</p>
                </div>
                <p>5 Minutes Ago</p>
            </div>
        </div>

        {{-- typing --}}
        <form action="" class="typing-input">
            <input type="search" name="" id="" placeholder="Type A Message" style="font-family: 'Roboto', sans-serif;">
            <button type="submit"><iconify-icon icon="uil:envelope-send"></iconify-icon></button>
        </form>
</div>
</body>
</html>