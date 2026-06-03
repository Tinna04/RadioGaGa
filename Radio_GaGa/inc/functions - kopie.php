<?php
//--------------------------------
// Database connection
//--------------------------------
    $servername = "localhost";
    $username = "st1738846558";
    $password = "yPO8e4u4bEBdx2J";
    $dbname = "st1738846558";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // check for errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;


//--------------------------------
// Safe Database Functions 
//--------------------------------
function GetNavigation(mysqli $conn)
{
    global $conn;
    
    $sql = "SELECT label, url FROM navigation ORDER BY sort_order";
    $result = $conn->query($sql);
    ?>

    <nav>
        <ul>
            <?php while ($row = $result->fetch_assoc()): ?>
                <li>
                    <a href="<?= htmlspecialchars($row['url']) ?>"><?= htmlspecialchars($row['label']) ?></a>
                </li>
            <?php endwhile; ?>
        </ul>
    </nav>
<?php
}

function getAllAlbums()
{
    global $conn;
    $sql = "SELECT 
            al.album_id, 
            al.title, 
            al.image_path, 
            a.name AS artist_name 
        FROM albums al 
        JOIN artists a ON al.artist_id = a.artist_id 
        ORDER BY a.name, al.title";

    return $conn->query($sql);
}

function getAlbum($album_id)
{
    global $conn;
    $sql = "SELECT 
            al.title,
            al.image_path,
            al.video_path, 
            a.name AS artist_name 
        FROM albums al 
        JOIN artists a ON al.artist_id = a.artist_id 
        WHERE al.album_id = $album_id 
        LIMIT 1";

    return $conn->query($sql)->fetch_assoc();
}

function getTracks($album_id)
{
    global $conn;
    $album_id = intval($album_id);

    $sql = "SELECT title, audio_path 
            FROM tracks t 
            WHERE t.album_id = $album_id";

    return $conn->query($sql);
}

function getVideos($album_id)
{
    global $conn;
    $album_id = intval($album_id);

    $sql = "SELECT file_path, thumbnail 
            FROM videos v 
            WHERE v.album_id = $album_id";

    return $conn->query($sql);
}

function getArtistsWithDetails(mysqli $conn)
{
    $sql = "SELECT 
            a.artist_id, 
            a.name, 
            a.artist_image_path, 
            d.description, 
            d.top_song_1, 
            d.top_song_2, 
            d.top_song_3 
        FROM artists a
        INNER JOIN artist_details d ON a.artist_id = d.artist_id
        ORDER BY a.artist_id
        ";

    return $conn->query($sql);
}

function getPopularArtists($conn)
{
    $sql = "SELECT
            artist_name, 
            genre, 
            debut_year,
            country,
            notable_work,
            youtube_link,
            wikipedia_link
        FROM popular_artists 
        ORDER BY artist_name";

    return $conn->query($sql);
}

function GetHTMLhead($HTML)
{
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Radio Tinna</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
    <?php
}

function GetHTMLfooter($HTML)
{
    ?>
        <footer>
            <p>&copy; 2025 Radio Tinna. All rights reserved.</p>
        </footer>
    </body>

    </html>
<?php
}
?>