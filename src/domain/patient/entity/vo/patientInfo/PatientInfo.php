<?php

namespace Domain\Patient\Entity\VO\PatientInfo;

class PatientInfo
{
    private PatientName $name;
    private PatientBirthdate $birthdate;
    private PatientSocialSecurity $cpf;
    private PatientBiologicalSex $biologicalSex;

    private function __construct
    (
        PatientName $name,
        PatientBirthdate $birthdate,
        PatientSocialSecurity $cpf,
        PatientBiologicalSex $biologicalSex
    )
    {
        $this->name = $name;
        $this->birthdate = $birthdate;
        $this->cpf = $cpf;
        $this->biologicalSex = $biologicalSex;
    }

    public static function create
    (
        PatientName $name,
        PatientBirthdate $birthdate,
        PatientSocialSecurity $cpf,
        PatientBiologicalSex $biologicalSex
    ) : self {
        return new self( $name, $birthdate, $cpf, $biologicalSex);
    }

}
