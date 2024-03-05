<?php

class Database
{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'purejoyweddings';
    private $db;

    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getAllPhotographerCards()
    {
        $query = "SELECT * FROM photographer_detail";
        $stmt = $this->db->query($query);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllDecoratorCards()
    {
        $query = "SELECT * FROM decorater_detail";
        $stmt = $this->db->query($query);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllFoodCards()
    {
        $query = "SELECT * FROM food_detail";
        $stmt = $this->db->query($query);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllPanditCards()
    {
        $query = "SELECT * FROM pandit_detail";
        $stmt = $this->db->query($query);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllVenueCards()
    {
        $query = "SELECT * FROM venue";
        $stmt = $this->db->query($query);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllDjCards()
    {
        $query = "SELECT * FROM dj_details";
        $stmt = $this->db->query($query);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    // public function getAllCarda()
    // {
    //     // $id = $row['photo_sno'];
    //     $query = "SELECT * FROM photographer_detail WHERE photo_sno = $id";
    //     $stmt = $this->db->query($query);
    //     // $stmt->bindParam(':photoID', $id);
    //     // $stmt->execute();
    //     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     return $result;
    // }
}

// // Example usage:
// $database = new Database();
// // $cardId = 1; // You need to provide the card ID you want to fetch
// // $cardDetails = $database->getCardDetails($cardId);
// $cards = $database->getAllCards();

// if ($cards) {
//     foreach($cards as $card){
//     echo "Photographer Name: " . $card['photo_name'] . "<br>";
//     echo "Location: " . $card['photo_location'] . "<br>";
//     echo "Charges: " . $card['photo_charges'] . "<br>";
//     echo "Email: " . $card['email'] . "<br>";
//     echo "Contact: " . $card['contact_number'] . "<br>";
//     }
// } else {
//     echo "Card not found.";
// }

?>