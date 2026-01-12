<?php

namespace Domain\Patient\Entity\VO\PatientAddress;

class PatientCountry
{
    private string $value;

    private function __construct(string $value) {
        $this->value = $value;
    }

    public static function fromString(string $value): self {
        self::validate($value);
        return new self($value);
    }

    // melhorar validação
    private static function validate(string $value): void {
        if ($value === '') {
            throw new \InvalidArgumentException('Invalid country');
        }
    }

    public function toString(): string {
        return $this->value;
    }
}
