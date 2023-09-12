<?php
require 'config/constants.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!---- <link rel="icon" href="https://glitch.com/favicon.ico" />--->

    <link rel="stylesheet" href="css/index.css" />
    <link rel="icon" href="https://www.spacex.com/static/images/share.jpg" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500&family=Merriweather+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,200;0,700;0,800;0,900;1,100;1,200;1,400;1,500;1,700;1,800&family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;1,100;1,200&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Righteous&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="uft-8"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/jquery.countdown.js" charset="utf-8"></script>
    <script src="js/jquery.countdown.min.js" charset="utf-8"></script>
    <script src="/bower_components/jquery.countdown/dist/jquery.countdown.js"></script>
    <title>site</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <script src="/main.js" defer></script>
</head>

<body>


    <section class="form_section">
        <div class="container form_section-container">
            <h2>Sign Up</h2>
            <div class="alert_message error">
                <p>This is an error message</p>
            </div>
            <form action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="POST">
                <input type="text" name="firstname" placeholder="First Name">
                <input type="text" name="lastname"placeholder="Last Name">
                <input type="text" name= "username"placeholder="User Name">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="createpassword"placeholder="Create password">
                <input type="password" name="confirmpassword"placeholder="Confirm password">
                <div class="form_control">
                    <label for="avatar"></label>
                    <input type="file" name="avatar" id="avatar">
                </div>
                <button type="submit" name="submit" class="btn">Sign Up</button>
                <small>Already have an account? <a href="sigin.php">Sign In</a></small>
            </form>
        </div>
    </section>
</body>

</html>