<?php
class staff {
    private $staffId;   
    private $Name;   
    private $Department;   
    private $Role;   
    private $PhoneNo;   
    private $Email;   
    private $Station;   
    private $Status;   

    public function __construct($staffId, $Name, $Department, $Role, $PhoneNo, $Email, $Station, $Status){
        $this->staffId = (string) $staffId;    
        $this->Name = (string) $Name;    
        $this->Department = (string) $Department;    
        $this->Role = (string) $Role;    
        $this->PhoneNo = (string) $PhoneNo;    
        $this->Email = (string) $Email;    
        $this->Station = (string) $Station;    
        $this->Status = (int) $Status;    
    }

    public function getstaffId(){
        return $this->staffId;
    }

    public function getName(){
        return $this->Name;
    }
    
    public function getDepartment(){
        return $this->Department;
    }

    public function getRole(){
        return $this->Role;
    }

    public function getPhoneNo(){
        return $this->PhoneNo;
    }

    public function getEmail(){
        return $this->Email;
    }

    public function getStation(){
        return $this->Station;
    }

    public function getStatus(){
        return $this->Status;
    }

    // Alternatively, you can create a toArray method that returns an associative array of all properties
    public function toArray() {
        return [
            'staffId' => $this->staffId,
            'Name' => $this->Name,
            'Department' => $this->Department,
            'Role' => $this->Role,
            'PhoneNo' => $this->PhoneNo,
            'Email' => $this->Email,
            'Station' => $this->Station,
            'Status' => $this->Status,
        ];
    }
}


?>