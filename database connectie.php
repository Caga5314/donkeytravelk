<?php


class Database
{
    private $host = 'localhost'; // Jouw host
    private $db_name = 'donkeytravel'; // Jouw database naam
    private $username = 'admin'; // Jouw gebruikersnaam
    private $password = ''; // Jouw wachtwoord
    private $conn;

    public function getConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Database connectie succesvol!";
        } catch (PDOException $e) {
            echo 'Connectie mislukt: ' . $e->getMessage();
        }

        return $this->conn;
    }
}

// Gebruik van de databaseverbinding
$database = new Database();
$connection = $database->getConnection();

// Hier kun je queries uitvoeren met behulp van de $connection object
// Bijvoorbeeld: $connection->query('SELECT * FROM jouw_tabel');


?>


