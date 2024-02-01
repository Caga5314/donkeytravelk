<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over Ons - Donkey Travel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1 class="over">Over Ons</h1>
    <nav>
        <ul>
            <li><a href="main.html">Home</a></li>
            <li><a href="Over%20Ons.php">Over Ons</a></li>
            <li><a href="avonturen.php">Onze Avonturen</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <div class="user-buttons">
        <a href="login.php" class="btn">Inloggen</a>
        <a href="registratie.php" class="btn">Registreren</a>
    </div>
</header>

<section class="content">
    <h2>Ons Verhaal</h2>
    <p>Donkey Travel werd opgericht in 2010 met een passie voor het verbinden van mensen met de schoonheid van de natuur en omgeving</p>
</section>

<section class="content">
    <h2>Contacteer Ons</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $naam = $_POST["naam"];
        $email = $_POST["email"];
        $bericht = $_POST["bericht"];

        // Hier kun je de code toevoegen om het ingevulde bericht te verwerken, bijvoorbeeld opslaan in een database of verzenden via e-mail.
        "INSERT INTO klanten VALUES (naam,email,bericht)"
        x = "SELECT FROM klanten WHERE naam = $naam"
            if x.password === $password
        echo "<p>Bedankt voor je bericht, $naam!</p>";
    }
    ?>
    <form method="post" action="overons.php">
        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="bericht">Bericht:</label>
        <textarea id="bericht" name="bericht" required></textarea><br>

        <input type="submit" value="Verstuur">
    </form>
</section>

<footer>
    <p>&copy; 2023 Donkey Travel</p>
</footer>
</body>
</html>

