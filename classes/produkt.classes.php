<?php

class ProduktInfo extends Dbh {
    protected function getAllProdukts()
    {
        //Hole erstmal alle Informationen über produkte aus der Datenbank
        try {
            $stmt = $this->connect()->prepare('SELECT * FROM produkte ORDER BY produkt_kategorie ASC;');
            $stmt->execute();
        } catch (PDOException $e) {
            header("location: index.php?page=Home&error=stmtfailed");
            exit();
        }

        //überprüfen ob überhaupt etwas gefunden wurde
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: index.php?page=Home&error=produktenotfound");
            exit();
        }
        //Wenn keine Fehler
        $produktData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //Und returnen
        return $produktData;
    }

    protected function getAllElektronikProdukts()
    {
        $kategorie = "Elektronik";
        //Hole erstmal alle Informationen über Elektronik produkte aus der Datenbank
        try {
            $stmt = $this->connect()->prepare('SELECT produkte.*, produkt_kategorie.produkt_kategorie_name FROM produkte JOIN produkt_kategorie ON produkte.produkt_kategorie = produkt_kategorie.produkt_kategorie_id WHERE produkt_kategorie.produkt_kategorie_name = ?;');

            $stmt->execute([$kategorie]);
        } catch (PDOException $e) {
            header("location: index.php?page=Home&error=stmtfailed");
            exit();
        }

        //überprüfen ob überhaupt etwas gefunden wurde
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: index.php?page=Home&error=produktenotfound");
            exit();
        }
        //Wenn keine Fehler
        $produktData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //Und returnen
        return $produktData;
    }
    protected function getAllHaushaltProdukts()
    {
        $kategorie = "Haushalt";
        //Hole erstmal alle Informationen über Elektronik produkte aus der Datenbank
        try {
            $stmt = $this->connect()->prepare('SELECT produkte.*, produkt_kategorie.produkt_kategorie_name FROM produkte JOIN produkt_kategorie ON produkte.produkt_kategorie = produkt_kategorie.produkt_kategorie_id WHERE produkt_kategorie.produkt_kategorie_name = ?;');

            $stmt->execute([$kategorie]);
        } catch (PDOException $e) {
            header("location: index.php?page=Home&error=stmtfailed");
            exit();
        }

        //überprüfen ob überhaupt etwas gefunden wurde
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: index.php?page=Home&error=produktenotfound");
            exit();
        }
        //Wenn keine Fehler
        $produktData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //Und returnen
        return $produktData;
    }
}