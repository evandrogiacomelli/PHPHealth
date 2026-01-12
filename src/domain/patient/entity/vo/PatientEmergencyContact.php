<?php

namespace Domain\Patient\Entity\VO;

class PatientEmergencyContact
{
    private string $name;
    private string $address;
    private string $relationship;

    private function __construct(string $name, string $address, string $relationship) {
        $this->name = $name;
        $this->address = $address;
        $this->relationship = $relationship;
    }

    public static function create(string $name, string $address, string $relationship): self {
        return new self($name, $address, $relationship);
    }

    public function name(): string {
        return $this->name;
    }

    public function address(): string {
        return $this->address;
    }

    public function relationship(): string {
        return $this->relationship;
    }
}
