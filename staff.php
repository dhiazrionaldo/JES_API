<?php

require_once 'controller/ApiController.php';

$staffController = new StaffController();

$allStaff = $staffController->getAllStaff();

if (isset($allStaff['error'])) {
    echo json_encode(['error' => $allStaff['error']]);
} else {
    // Use the getter methods to access the properties of each Staff object
    $staffArray = array_map(function($staff) {
        return [
            'staffId' => $staff->getStaffId(),
            'Name' => $staff->getName(),
            'Department' => $staff->getDepartment(),
            'Role' => $staff->getRole(),
            'PhoneNo' => $staff->getPhoneNo(),
            'Email' => $staff->getEmail(),
            'Station' => $staff->getStation(),
            'status' => $staff->getStatus(),
        ];
    }, $allStaff);

    echo json_encode($staffArray);
}

$staffController->closeConnection();
?>
