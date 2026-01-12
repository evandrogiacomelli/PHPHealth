<?php

class PatientInfo
{
    private PatientName $name;
    private PatientBirthdate $birthdate;
    private PatientSocialSecurity $cpf;
    private PatientGender $gender;

    private function __construct
    (
        PatientName $name,
        PatientBirthdate $birthdate,
        PatientSocialSecurity $cpf,
        PatientGender $gender
    )
    {
        $this->name = $name;
        $this->birthdate = $birthdate;
        $this->cpf = $cpf;
        $this->gender = $gender;
    }

    public static function create
    (
        PatientName $name,
        PatientBirthdate $birthdate,
        PatientSocialSecurity $cpf,
        PatientGender $gender
    ) : self {
        return new self( $name, $birthdate, $cpf, $gender);
    }

}