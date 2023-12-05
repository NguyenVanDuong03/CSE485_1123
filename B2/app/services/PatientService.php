<?php

require_once APP_ROOT."/app/models/Patient.php";
class PatientService {
    public function getAllPatients() {
        // Buoc 1: Ket noi Database
        // try {
        //     $conn = new PDO("mysql:host=localhost;dbname=hms","root","123");
            $dbConnection = new DBConnection();
            $conn = $dbConnection->getConnection();
            if($conn != null) {
                // Buoc 2: Truy van du lieu
                $sql = "SELECT * FROM patients ORDER BY id DESC";
                $stmt = $conn->query($sql);
                
                // Buoc 3: Xu ly ket qua tra ve
                $patients = [];
                while ($row = $stmt->fetch()) {
                    $patient = new Patient( $row["id"], $row["fullname"], $row["gender"], $row["dateOfBirth"], $row["address"], $row["mobile"] );
                    $patients[] = $patient;
                }
                return $patients;
            }

        // } catch (PDOException $e) {
        //     return $patient = [];
        //     // $conn = null;
        //     // echo $e->getMessage();
        // }
    }
}
?>