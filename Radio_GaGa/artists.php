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
        <h1>Artists</h1>
        <?php
        $artists = getArtistsWithDetails($conn);
        ?>

        <div class="artist-grid">
            <?php while ($artist = $artists->fetch_assoc()): ?>
                <div class="artist-card">
                    <h2><?= htmlspecialchars($artist['name']) ?></h2>

                    <img src="<?= htmlspecialchars($artist['artist_image_path']) ?>"
                        alt="<?= htmlspecialchars($artist['name']) ?>"
                        width="200"
                    >

                    <p><?= htmlspecialchars($artist['description']) ?></p>

                    <h3>Top Songs:</h3>
                    <ul>
                        <li><?= htmlspecialchars($artist['top_song_1']) ?></li>
                        <li><?= htmlspecialchars($artist['top_song_2']) ?></li>
                        <li><?= htmlspecialchars($artist['top_song_3']) ?></li>
                    </ul>
                </div>
            <?php endwhile; ?>
        </div>
    </main>
    <footer>
        <p>Artists</p>
        <p>&copy; 2025 Radio Tinna. All rights reserved.</p>
    </footer>
</body>