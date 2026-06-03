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
        <div id="logo">
            <a href="index.php">
                <img src="img/RadioTinna.png" alt="logo" width="75">
            </a>
        </div>
        <?php GetNavigation($conn); ?>
    </header>
    <main>
        <h1>Welcome to Radio Tinna</h1>
        <p>Your favorite online radio station for all genres of music. Tune in to enjoy the best hits and discover new tunes!</p>
        <a class="link" href="playlist.php">Check out our Playlist</a>

        <table class="schedule-table">
            <caption><h2>Listening schedule</h2></caption>
            <thead>
                <tr>
                    <th>AJ Tracey</th>
                    <th>André Hazes</th>
                    <th>Lil Kleine</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Landbroke Grove</td>
                    <td>'t Rode licht</td>
                    <td>Batterij</td>
                </tr>
                <tr>
                    <td>Plan B</td>
                    <td>Leef nu maar je eigen leven</td>
                    <td>Krantenwijk</td>
                </tr>
                <tr>
                    <td>Wiffey Riddim 3</td>
                    <td>Wat 'n ander ook zegd</td>
                    <td>Vliegtuig</td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
<footer>
    <p>Home</p>
    <p>&copy; 2025 Radio Tinna. All rights reserved.</p>
</footer>

</html>