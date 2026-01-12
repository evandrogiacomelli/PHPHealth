<?php

namespace Domain\Patient\Entity;

use Domain\Patient\Entity\VO\PatientEmergencyContact;
use Domain\Patient\Entity\VO\PatientId;
use Domain\Patient\Entity\VO\PatientAddress\PatientAddress;
use Domain\Patient\Entity\VO\PatientInfo\PatientInfo;

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
