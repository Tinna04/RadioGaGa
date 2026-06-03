<?php include('inc/functions.php');

// Fetch all albums
$result =  getAllAlbums();
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
        <h1>Albums</h1>
        <div class="album-grid">
            <?php while ($row = $result->fetch_assoc()): ?>
                <a class="album-card" href="album.php?album_id=<?= $row['album_id'] ?>">
                    <img src="<?= $row['image_path'] ?>" alt="Album Cover">
                    <h2><?= htmlspecialchars($row['artist_name']) ?></h2>
                    <h3><?= htmlspecialchars($row['title']) ?></h3>
                </a>
            <?php endwhile; ?>
        </div>
    </main>
    <footer>
        <p>Albums</p>
        <p>&copy; 2025 Radio Tinna. All rights reserved.</p>
    </footer>
</body>

</html>