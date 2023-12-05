<?php
require_once APP_ROOT.'/app/services/PatientService.php';
class HomeController {
    public function index() {
        // Goi du lieu tu PatientService
        $patientServiec = new PatientService();
        $patients = $patientServiec->getAllPatients();
        // Render du lieu lay duoc ra HomePage
        include APP_ROOT.'/views/home/index.php';
    }
}

?>