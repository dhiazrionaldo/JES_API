<?php

require_once 'model/Staff.php';
require_once 'model/ClockInOut.php';
require_once 'utils/DatabaseConnection.php';

class StaffController extends DatabaseConnection {
    public function getAllStaff() {
        $dept = "Services";
        $sql = "SELECT * FROM staff WHERE Department LIKE CONCAT('%', '$dept', '%') ";
        $result = $this->conn->query($sql);
        $staffs = array();

        if ($result) { // Check if the query was successful
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $staff = new Staff($row['staffId'], $row['Name'], $row['Department'], $row['Role'], $row['PhoneNo'], $row['Email'], $row['Station'], $row['Status']);
                    $staffs[] = $staff;
                }
            }
        } else {
            echo "Query failed: " . $this->conn->error; // Debug: Display the query error
        }

        return $staffs;
    }
}

class ClockInOutController extends DatabaseConnection {
    public function getAllAttendance() {
        $sql = "SELECT * FROM attendance WHERE CAST(ClockIn AS DATE) = CURRENT_DATE()";
        $result = $this->conn->query($sql);
        $attendances = array();

        if ($result) { // Check if the query was successful
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $attendance = new ClockInOut($row['StaffId'], $row['ClockIn'], $row['ClockOut'], $row['EarlyIn'], $row['LateOut']);
                    $attendances[] = $attendance;
                }
            }
        } else {
            echo "Query failed: " . $this->conn->error; // Debug: Display the query error
        }

        return $attendances;
    }
}

?>
