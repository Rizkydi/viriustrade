<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/Logo/logo viriustrade.png">
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
    <!-- src fontawesome -->
    <script src="https://kit.fontawesome.com/af674c1813.js" crossorigin="anonymous"></script>
    {{-- css --}}
    <link rel="stylesheet" href="assets/css/style-3.css">
    <title>Virius   Trade</title>
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
                <div class="icon-badge"></div>
            </div>
        </form>
    </div>

    {{-- info profile left --}}
    <div class="profile-info">
        <div class="profile-1"><i class="fa-solid fa-user"></i></div>
        <h3>Ammar Karim</h3>
        <p><i class="fa-solid fa-map-location-dot"></i>Indonesia/DKI jakarta</p>
        <div class="online-badge"><p>Online</p></div>
        <div class="star-fill">
             <i class="fa-solid fa-star"></i>
             <i class="fa-solid fa-star"></i>
             <i class="fa-solid fa-star"></i>
             <i class="fa-regular fa-star" style="color: #ECECEC;"></i>
        </div>
        <p class="joined">Joined Mei 2019</p>
        <div class="follower">
            <iconify-icon icon="fluent-mdl2:user-followed"></iconify-icon>
            <p style="font-size: 30px">29</p>
            <p>Followers</p>
            <iconify-icon icon="simple-line-icons:user-following"></iconify-icon>
            <p style="font-size: 30px;">0</p>
            <p>Following</p>
        </div>
        <button type="submit" class="items-profil">items profil</button>
    </div>

    <div class="warning-info">
        <i class="fa-solid fa-chevron-left"><button id="listings-btn">Back To Listings</button></i>
        <button type="submit" id="follow-btn">Follow</button>
        <button type="submit" id="message-btn">Message</button>
    </div>
    
</body>
</html>
