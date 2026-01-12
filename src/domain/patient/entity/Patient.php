<?php

use vo\PatientId;

class Patient
{
    private PatientId $id;
    private PatientInfo $info;
    private PatientAddress $address;
    private PatientEmergencyContact $emergencyContact;

    private function __construct
    (
        PatientId $id,
        PatientInfo $info,
        PatientAddress $address,
        PatientEmergencyContact $emergencyContact
    )
    {
        $this->id = $id;
        $this->info = $info;
        $this->address = $address;
        $this->contact = $emergencyContact;
    }

    public static function create
    (
        PatientId $id,
        PatientInfo $info,
        PatientAddress $address,
        PatientEmergencyContact $emergencyContact

    ): self {
        return new self($id, $info, $address, $emergencyContact);
    }
}
