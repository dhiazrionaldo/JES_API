<?php
class ClockInOut {
    private $StaffId;   
    private $ClockIn;   
    private $ClockOut;   
    private $EarlyIn;   
    private $LateOut;   

    public function __construct($StaffId, $ClockIn, $ClockOut, $EarlyIn, $LateOut){
        $this->StaffId = (string) $StaffId;    
        $this->ClockIn = (string) $ClockIn;    
        $this->ClockOut = (string) $ClockOut;    
        $this->EarlyIn = (string) $EarlyIn;    
        $this->LateOut = (string) $LateOut;
    }

    public function getstaffId(){
        return $this->StaffId;
    }

    public function getClockIn(){
        return $this->ClockIn;
    }
    
    public function getClockOut(){
        return $this->ClockOut;
    }

    public function getEarlyIn(){
        return $this->EarlyIn;
    }

    public function getLateOut(){
        return $this->LateOut;
    }
    // Alternatively, you can create a toArray method that returns an associative array of all properties
    public function toArray() {
        return [
            'StaffId' => $this->StaffId,
            'ClockIn' => $this->ClockIn,
            'ClockOut' => $this->ClockOut,
            'EarlyIn' => $this->EarlyIn,
            'LateOut' => $this->LateOut
        ];
    }
}


?>