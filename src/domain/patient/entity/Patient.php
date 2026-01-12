<?php

class Patient
{
    private PatientInfo $info;
    private PatientAddress $address;
    private PatientContact $contact;

    private function __construct
    (
        PatientInfo $info,
        PatientAddress $address,
        PatientContact $contact
    )
    {
        $this->info = $info;
        $this->address = $address;
        $this->contact = $contact;
    }

    public static function create
    (
        PatientInfo $info,
        PatientAddress $address,
        PatientContact $contact

    ): self {
        return new self($info, $address, $contact);
    }

}
