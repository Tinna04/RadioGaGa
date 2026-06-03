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
    <main class="popular-artists-page">
        <h1>Popular Artists</h1>
        <?php $artists = getPopularArtists($conn); ?>

        <table class="zebra-table">
            <thead>
                <tr>
                    <th>Artist</th>
                    <th>Genre</th>
                    <th>Debut Year</th>
                    <th>Country</th>
                    <th>Notable Work</th>
                    <th>YouTube</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($artist = $artists->fetch_assoc()): ?>
                    <tr>
                        <td>
                            <a href="<?= $artist['wikipedia_link'] ?>" target="_blank">
                                <?= htmlspecialchars($artist['artist_name']) ?>
                            </a>
                        </td>
                        <td><?= htmlspecialchars($artist['genre']) ?></td>
                        <td><?= htmlspecialchars($artist['debut_year']) ?></td>
                        <td><?= htmlspecialchars($artist['country']) ?></td>
                        <td><?= htmlspecialchars($artist['notable_work']) ?></td>
                        <td>
                            <a href="<?= $artist['youtube_link'] ?>" target="_blank">
                                <img class="yt_icon" src="img/youtube_icon.png" alt="YouTube" width="50">
                            </a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>
    <footer>
        <p>Popular Artists</p>
        <p>&copy; 2025 Radio Tinna. All rights reserved.</p>
    </footer>
</body>

</html>