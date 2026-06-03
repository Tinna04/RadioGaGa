<?php include('inc/functions.php');

// Retrieve Album ID from URL
$album_id = intval($_GET['album_id']);

// Retrieve data from functions.php
$album = getAlbum($album_id);
$tracks = getTracks($album_id);
$videos = getVideos($album_id);
?>

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
        <div id="table">
            <table>

                <caption>
                    <h1>
                        <?= htmlspecialchars($album['artist_name']) ?> - <?= htmlspecialchars($album['title']) ?>
                    </h1>
                    <img class="album-cover" src="<?= $album['image_path'] ?>" alt="Album Cover">
                </caption>
                <tbody>
                    <tr>
                        <td>
                            <h2>Tracks</h2>
                            <div class="track-list">

                                <?php while ($track = $tracks->fetch_assoc()): ?>
                                    <div class="track-item">
                                        <h3><?= $track['title'] ?></h3>
                                        <audio controls>
                                            <source src="<?= $track['audio_path'] ?>" type="audio/mp3">
                                        </audio>
                                    </div>
                                <?php endwhile; ?>

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h2>Video</h2>
                            <?php $video = $videos->fetch_assoc(); ?>
                            <video controls width="500" poster="<?= $video['thumbnail']; ?>">
                                <source src="<?= $video['file_path']; ?>" type="video/mp4">
                            </video>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <p>Playlist</p>
        <p>&copy; 2025 Radio Tinna. All rights reserved.</p>
    </footer>
</body>

</html>