<?php

require_once 'controller/ApiController.php';

$attendanceController = new ClockInOutController();

$allAttendance = $attendanceController->getAllAttendance();

if (isset($allAttendance['error'])) {
    echo json_encode(['error' => $allAttendance['error']]);
} else {
    // Use the getter methods to access the properties of each Staff object
    $attendanceArray = array_map(function($attendance) {
        return [
            'StaffId' => $attendance->getstaffId(),
            'ClockIn' => $attendance->getClockIn(),
            'ClockOut' => $attendance->getClockOut(),
            'EarlyIn' => $attendance->getEarlyIn(),
            'LateOut' => $attendance->getLateOut(),
        ];
    }, $allAttendance);

    echo json_encode($attendanceArray);
}

$attendanceController->closeConnection();
?>
