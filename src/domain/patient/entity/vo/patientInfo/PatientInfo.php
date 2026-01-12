<?php

class PatientInfo
{
    private PatientName $name;
    private PatientBirthDate $birthDate;
    private PatientSocialSecurity $cpf;
    private PatientGender $gender;

    private function __construct
    (
        PatientName $name,
        PatientBirthDate $birthDate,
        PatientSocialSecurity $cpf,
        PatientGender $gender
    )
    {
        $this->name = $name;
        $this->birthDate = $birthDate;
        $this->cpf = $cpf;
        $this->gender = $gender;
    }

    public static function create
    (
        PatientName $name,
        PatientBirthDate $birthDate,
        PatientSocialSecurity $cpf,
        PatientGender $gender
    ) : self {
        return new self( $name, $birthDate, $cpf, $gender);
    }

}