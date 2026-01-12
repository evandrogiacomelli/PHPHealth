<?php

class PatientAddress
{
    private PatientPostalCode $postalCode;
    private PatientCountry  $country;
    private PatientState $state;
    private PatientCity $city;
    private PatientStreet $street;
    private PatientNumber $number;

    private function __construct
    (
        PatientPostalCode $postalCode,
        PatientCountry $country,
        PatientState $state,
        PatientCity $city,
        PatientStreet $street,
        PatientNumber $number
    )
    {
        $this->postalCode = $postalCode;
        $this->country = $country;
        $this->state = $state;
        $this->city = $city;
        $this->street = $street;
        $this->number = $number;
    }

    public static function create
    (
        PatientPostalCode $postalCode,
        PatientCountry $country,
        PatientState $state,
        PatientCity $city,
        PatientStreet $street,
        PatientNumber $number
    ): self
    {
        return new self($postalCode, $country, $state, $city, $street, $number);
    }
}