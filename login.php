<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "donkeytravel";

$conn = new PDO("mysql:host=localhost;dbname=donkeytravel", "root", "");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (!$conn) {
    die("Verbindingsfout: " . mysqli_connect_error());
}

session_start();

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['naam'];
    $password = $_POST['wachtwoord'];

    // Dit is een eenvoudig voorbeeld en in de praktijk moet je hier een database query gebruiken
    // met gehashte wachtwoorden.
    $inloghashpassword = "";
    $stmt = $conn->query("SELECT * FROM registratie WHERE naam = '$username'");
    while ($row = $stmt->fetch())
    {
        $inlognaam = $row['naam'];
        $inloghashpassword =$row['wachtwoord'];
    }


    // dit wordt hash_password
    if (password_verify($password, $inloghashpassword)) {
        echo 'Password is valid!';
    } else {
        echo 'Gebruiker bestaat niet';
    }
//    if ($username === $correctUsername && $password === $correctPassword) {
//        $_SESSION['user'] = $username;
//        header('Location: welkom.php');
//        exit;
//    } else {
//        $message = 'Onjuiste gebruikersnaam of wachtwoord!';
//    }
}

// Verbindingsparameters voor de database
$servername = "localhost"; // Verander dit naar jouw servernaam
$username = "root";
$password = "";
$dbname = "donkeytravel";

try {
    // Maak een nieuwe PDO-verbinding
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Zet de PDO foutmodus naar uitzonderingen om fouten af te handelen
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Gebruikersnaam en wachtwoord voor de admin
    $admin_username = 'admin'; // Gebruikersnaam van de admin
    $admin_password = password_hash('admin123', PASSWORD_DEFAULT); // Wachtwoord van de admin - zorg voor beveiliging met een hashfunctie

    // Voeg het admin-account toe aan de database
    $query = "INSERT INTO gebruikerstabel (gebruikersnaam, wachtwoord) VALUES (:admin_username, :admin_password)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':admin_username', $admin_username);
    $stmt->bindParam(':admin_password', $admin_password);

    $stmt->execute();

    echo "Admin-account succesvol toegevoegd!";
} catch (PDOException $e) {
    echo "Er is een fout opgetreden bij het toevoegen van het admin-account: " . $e->getMessage();
}

// Sluit de databaseverbinding
$conn = null;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body\\\\\\
<div class="container">
    <h2>Login</h2>
    <?php if ($message !== ''): ?>
        <p class="error"><?= $message ?></p>
    <?php endif; ?>
    <form action="login.php" method="post">
        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" required>
        <label for="wachtwoord">Wachtwoord:</label>
        <input type="wachtwoord" id="wachtwoord" name="wachtwoord" required>
        <button type="submit">Inloggen</button>
    </form>
</div>
</body>
</html>
