<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mijn donkeytravel</title>
    <link rel="stylesheet" type="text/css" href="boekingen.css">
    <nav>
        <ul>
            <li><a href="">mijn Donkeytravel</a></li>
            <a href="login2.php">
                <button>Uitloggen</button>
            </a>

            <a href="account.php">
                <button>account wijzigen</button>
            </a>

        </ul>
    </nav>
</head>
<body>
<form action="create_user.php" method="post">
    <label for="username">Startdatum:</label><br>
    <input type="text" id="username" name="username" value="dd-mm-jj"><br>
    <label for="email">Tocht:</label><br>
    <input type="search" id="email" name="email" value="Selecteer een tocht"><br><br>
    <input type="submit" value="Boeking aanvragen">
    <input type="submit" value="Annuleren">
</form>

<form action="create_user.php" method="post">
    <label for="username">Startdatum:</label><br>
    <input type="text" id="username" name="username"value="dd-mm-jj"><br>
    <label for="email">Tocht:</label><br>
    <input type="search" id="email" name="email" value="Selecteer een tocht"><br><br>
    <input type="submit" value="Boeking bewaren">
    <input type="submit" value="Annuleren">
</form>

<form action="create_user.php" method="post">
    <label for="username">Startdatum:</label><br>
    <input type="text" id="username" name="username" value="dd-mm-jj"><br>
    <label for="username">Einddatum:</label><br>
    <input type="text"id="username" name="username" value="dd-mm-jj"><br>
    <input type="search" id="email" name="email" value="Selecteer een tocht"><br><br>
    <input type="submit" value="Boeking verwijderen">
    <input type="submit" value="Annuleren">
</form>
<table border='1'>
    <tr>
        <th>Startdatum</th>
        <th>Eindatum</th>
        <th>Pincode</th>
        <th>Tocht</th>
        <th>Status</th>
        <th><button>+</button></th>
    </tr>


    <tr>
        <td>2020-09-10</td>
        <td>2020-09-16</td>
        <td></td>
        <td><button>Tunnelroute</button></td>
        <td>Definitief</td>
        <td></td>
    </tr>
    <tr>
        <td>2020-09-16</td>
        <td>2020-09-23</td>
        <td></td>
        <td><button>Hoog langs de rivier</button></td>
        <td>Definitief</td>
        <td></td>
    </tr>

    <tr>
        <td>2020-10-07</td>
        <td>2020-10-11</td>
        <td><button>9382</button></td>
        <td>Leisteenroute</td>
        <td>Definitief</td>
        <td></td>
    </tr>

    <tr>
        <td>2020-10-10</td>
        <td>2020-10-16</td>
        <td></td>
        <td><button>Altlay via Berenbach</button></td>
        <td>Aanvraag</td>
        <td>
            <button type="button">...</button>
            <button type="button">x</button>
        </td>

    </tr>
    <?php
    require_once 'config.php';
    require_once 'User.php';
    require_once('donkeytravel');


    try {
        $conn = new PDO("mysql:host=localhost;dbname=donkeytravel", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $e) {echo "Boeking aangevraagd:" . $e->getMessage(); }




    ?>
</table>



</body>

</html>