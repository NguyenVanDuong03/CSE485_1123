<?php
require_once('../app/config/config.php');
require_once APP_ROOT."/app/libs/DBConnection.php";
// echo APP_ROOT;
// require_once APP_ROOT.'/app/controllers/HomeController.php'; // 

// $homeController = new HomeController(); 
// $homeController->index(); 

// echo "<pre>";
// print_r($patients);
// echo "</pre>";

$controller = isset($_GET['controller']) ? $_GET['controller'] :'home';
$action = isset($_GET['action']) ? $_GET['action'] :'index'; // mac dinh action dieu huong den 'index'

if($controller == 'home') {
    require_once APP_ROOT.'/app/controllers/HomeController.php';
    $homeController = new HomeController(); 
    $homeController->index(); 

} 
// else if($controller == 'patient') { // Vi du goi them trang web khac (VD: patientController)
//     require_once APP_ROOT.'/app/controllers/PatientController.php';
//     $patientController = new patientController(); 
//     $patientController->index(); 
// } 
else {
    echo'Không tồn tại URL';
}

?>