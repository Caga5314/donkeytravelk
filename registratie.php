<!DOCTYPE html>
<html>
<head>
    <title>Registratie Formulier</title>
    <link rel="stylesheet" href="registratie.css">
</head>
<body>
<a href="main.html">Home</a>
<h2>Registratie Formulier</h2>
<form method="post" action="registratie.php">
    <label for="naam">Naam:</label>
    <input type="text" name="naam" id="naam" required><br><br>

    <label for="naam">Achternaam:</label>
    <input type="text" name="achternaam" id="achternaam" required><br><br>

    <label for="email">E-mailadres:</label>
    <input type="email" name="email" id="email" required><br><br>

    <label for="wachtwoord">Wachtwoord:</label>
    <input type="password" name="wachtwoord" id="wachtwoord" required><br><br>

    <input type="submit" value="Registreer">
</form>
</body>
</html>

<img src="registratie.png" alt="registreer je hier">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ontvang de gegevens van het formulier
    $naam = $_POST["naam"];
    $email = $_POST["email"];
    $achternaam =$_POST["achternaam"];
    $wachtwoord = password_hash($_POST["wachtwoord"], PASSWORD_DEFAULT);

    // Databaseverbinding
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "donkeytravel";

    try {
        $conn = new PDO("mysql:host=localhost;dbname=donkeytravel", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Voeg de gebruiker toe aan de database
        $stmt = $conn->prepare("INSERT INTO klanten (naam, achternaam, email, wachtwoord) VALUES (:naam,:achternaam, :email, :wachtwoord)");
        $stmt->bindParam(':naam', $naam);
        $stmt->bindParam(':achternaam', $achternaam);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':wachtwoord', $wachtwoord);
        $stmt->execute();

        echo "Registratie succesvol!";
    } catch (PDOException $e) {
        echo "Fout bij de registratie: " . $e->getMessage();
    }

    // Sluit de databaseverbinding
    $conn = null;
}
?>




