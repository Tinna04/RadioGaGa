<?php include('inc/functions.php'); ?>

<?php
$melding = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Reset message
    if (isset($_POST['reset'])) {
        $melding = "";
    }

    // Form submission
    if (isset($_POST['submit'])) {
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        $email = htmlspecialchars($_POST['email']);
        $number = htmlspecialchars($_POST['number']);
        $message = htmlspecialchars($_POST['message']);

        $melding = "<h2>Thank you $firstname $lastname for contacting Radio Tinna!</h2>
                    <p>We have received your message and will get back to you shortly.</p>
                    <h3>Your Submitted Information:</h3>
                    <ul>
                        <li><strong>Email:</strong> $email</li>
                        <li><strong>Phone Number:</strong> $number</li>
                        <li><strong>Message:</strong> $message</li>
                    </ul>
                ";
    }
}
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
        <div class="contact-page">
            <h1>Contact Us</h1>
            <div class="top-section">
                <?php if ($melding): ?>
                <?= $melding ?>
            <?php else: ?>
                <p>Fill in the form below to get in contact with us.</p>
            <?php endif; ?>
            </div>

            <?php if (!$melding): ?>
            <div class="form-section">
                <form action="" method="post">
                    <label for="firstname">First Name:</label>
                    <br>
                    <input type="text" id="firstname" name="firstname" required>
                    <br><br>
                    <label for="lastname">Last Name:</label><br>
                    <input type="text" id="lastname" name="lastname" required>
                    <br><br>
                    <label for="email">Email:</label>
                    <br>
                    <input type="email" id="email" name="email">
                    <br><br>
                    <label for="number">Phone Number:</label>
                    <br>
                    <input type="tel" id="number" name="number">
                    <br><br>
                    <label for="message">Message:</label>
                    <br>
                    <textarea id="message" name="message" rows="4"></textarea>
                    <br><br>
                    <input name="submit" type="submit" value="Submit">
                    <input name="reset" type="reset" value="Reset">
                </form>
                <?php endif; ?>
                <?php if ($melding): ?>
                <form action="" method="post">
                    <input name="reset" type="submit" value="Back to Form">
                </form>
                <?php endif; ?>
            </div>
        </div>
    </main>
    <footer>
        Contact
        <p>&copy; 2025 Radio Tinna. All rights reserved.</p>
    </footer>
</body>

</html>