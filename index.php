<?php

use Project\ConsultantService;
use Project\LocationService;
use Project\LoggerFactory;
use Project\DataService;

require_once("vendor/autoload.php");

$log = LoggerFactory::getLogger('index');

try {
    $consultantService = new ConsultantService();
    $consultantNumber = $consultantService->getUserConsultantNumber();

    $locationService = new LocationService();
    $dataService = new DataService();

    $consultant = $consultantService->getConsultant($consultantNumber);

    if(isset($_POST['register'])) {
        $necessaryFields = ['consultantNumber', 'phoneNumber', 'taxId', 'city'];
        foreach ($necessaryFields as $necessaryField) {
            if(!isset($_POST[$necessaryField])) {
                throw new InvalidArgumentException('Field '.$necessaryField.' does not exist in post request: '.json_encode($_POST));
            }
        }

        if(!$dataService->isRegistered($consultantNumber)) {
            $dataService->register($_POST['consultantNumber'], $_POST['city'], $_POST['phoneNumber'], $_POST['taxId']);
        }
        $city = $_POST['city'];
        include('template/success.php');
        exit();
    }

    if(isset($_GET['registration'])) {
        $city = $_GET['registration'];
        if(in_array($city, $locationService->getLocationNames())) {
            if(!$consultant) {
                throw new InvalidArgumentException('Cannot get consultant data');
            }
            include('template/regform.php');
            exit();
        }
    }


    include('template/main.php');
}
catch (Exception $e) {
    $log->error('Cannot show information', ['exception' => $e]);
    include ('template/errorpage/index.html');
    exit();
}