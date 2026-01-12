<?php

class PatientInfo
{
    private PatientId $id;
    private PatientName $name;
    private PatientBirthDate $birthDate;
    private PatientSocialSecurity $cpf;
    private PatientGender $gender;

    private function __construct
    (
        PatientId $id,
        PatientName $name,
        PatientBirthDate $birthDate,
        PatientSocialSecurity $cpf,
        PatientGender $gender
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->birthDate = $birthDate;
        $this->cpf = $cpf;
        $this->gender = $gender;
    }

    public static function create
    (
        PatientId $id,
        PatientName $name,
        PatientBirthDate $birthDate,
        PatientSocialSecurity $cpf,
        PatientGender $gender
    ) : self {
        return new self($id, $name, $birthDate, $cpf, $gender);
    }

}