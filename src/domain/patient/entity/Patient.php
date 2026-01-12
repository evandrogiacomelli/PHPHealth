<?php

class Patient
{
    private PatientId $id;
    private PatientInfo $info;
    private PatientAddress $address;
    private PatientContact $contact;

    private function __construct
    (
        PatientId $id,
        PatientInfo $info,
        PatientAddress $address,
        PatientContact $contact
    )
    {
        $this->id = $id;
        $this->info = $info;
        $this->address = $address;
        $this->contact = $contact;
    }

    public static function create
    (
        PatientId $id,
        PatientInfo $info,
        PatientAddress $address,
        PatientContact $contact

    ): self {
        return new self($id, $info, $address, $contact);
    }
}
