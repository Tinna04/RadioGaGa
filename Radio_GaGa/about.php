<?php include('inc/functions.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Tijn van Gils">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Tinna</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div id=logo>
            <a href="index.php">
                <img src="img/RadioTinna.png" alt="logo" width="75">
            </a>
        </div>
        <?php GetNavigation($conn); ?>
    </header>
    <main>
        <h1>About Radio Tinna</h1>
        <p>Radio Tinna is your go-to online radio station for a diverse range of music genres. Our mission is to bring you the best hits from around the world, along with emerging artists and timeless classics. Whether you're into pop, rock, jazz, or electronic music, we've got something for everyone.</p>
        <p>Founded in 2020, Radio Tinna has quickly become a favorite among music lovers for its curated playlists, live shows, and exclusive interviews with artists. We believe in the power of music to connect people and create unforgettable experiences.</p>
        <p>Join us on this musical journey and discover your new favorite tunes!</p>
    </main>
    <footer>
        <p>About</p>
        <p>&copy; 2025 Radio Tinna. All rights reserved.</p>
    </footer>
</body>

</html>