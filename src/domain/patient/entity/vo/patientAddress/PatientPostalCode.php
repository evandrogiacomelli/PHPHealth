<?php

namespace Domain\Patient\Entity\VO\PatientAddress;

class PatientPostalCode
{
    private string $value;

    private function __construct(string $value) {
        $this->value = $value;
    }

    public static function create(string $value): self {
        $normalized = self::normalize($value);
        self::validate($normalized);

        return new self($normalized);
    }

    private static function normalize(string $value): string {
        return preg_replace('/\D/', '', $value);
    }

    private static function validate(string $value): void {
        if (strlen($value) !== 8) {
            throw new \InvalidArgumentException("Postal code must be 8 digits long");
        }
    }

    public function toString(): string {
        return $this->value;
    }
}
